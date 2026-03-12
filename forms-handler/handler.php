<?php

/**
 * Centralized Form Handler for BCS
 * Handles Contact, Career, and Product Inquiry forms
 * Integrates reCAPTCHA v3, Honeypot, and PHPMailer
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Require PHPMailer files
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

session_start();

// --- CONFIGURATION ---
// reCAPTCHA v3 Keys (Replace with your own keys)
$recaptcha_secret_key = '6LeJHIcsAAAAAJ0PRnzIn4S8_ZJZvsVj9dYbuksN';

// SMTP Configuration (Provided by user)
$smtp_host = 'smtp.gmail.com';
$smtp_user = 'dev03.mvsoft@gmail.com';
$smtp_pass = 'rhgc lslb qfxx szen';
$smtp_port = 587; // TLS
$admin_email = 'dev03.mvsoft@gmail.com'; // Change if needed

// --- LOGIC ---

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_type = $_POST['form_type'] ?? 'unknown';
    $redirect_url = $_SERVER['HTTP_REFERER'] ?: '/';

    // 1. Honeypot Validation
    if (!empty($_POST['website_hp'])) {
        // This is a bot
        $_SESSION['form_error'] = "Spam detected. Access denied.";
        header("Location: $redirect_url");
        exit;
    }

    // 2. reCAPTCHA v3 Validation
    $recaptcha_token = $_POST['recaptcha_token'] ?? '';
    if (empty($recaptcha_token)) {
        $_SESSION['form_error'] = "reCAPTCHA validation failed. Please try again.";
        header("Location: $redirect_url");
        exit;
    }

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret_key}&response={$recaptcha_token}");
    $response = json_decode($verify);

    if (!$response->success || $response->score < 0.5) {
        $_SESSION['form_error'] = "reCAPTCHA score too low. Are you a human?";
        header("Location: $redirect_url");
        exit;
    }

    // 3. Process Form Data
    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = $smtp_host;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtp_user;
        $mail->Password   = $smtp_pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $smtp_port;

        // Recipients
        $mail->setFrom($smtp_user, 'BCS Website Forms');
        $mail->addAddress($admin_email);
        $mail->addReplyTo($_POST['email'] ?? $smtp_user);

        // Content
        $mail->isHTML(true);
        $subject = "";
        $logo_url = 'https://' . $_SERVER['HTTP_HOST'] . '/bcs/public/images/logo/logo01.png'; // Use absolute URL for the logo

        $body_content = "";
        if ($form_type === 'contact') {
            $subject = "Contact Form Submission";
            $body_content = "
            <tr><td><strong>Name:</strong></td><td>" . htmlspecialchars($_POST['name']) . "</td></tr>
            <tr><td><strong>Email:</strong></td><td>" . htmlspecialchars($_POST['email']) . "</td></tr>
            <tr><td><strong>Company:</strong></td><td>" . htmlspecialchars($_POST['company'] ?? 'N/A') . "</td></tr>
            <tr><td><strong>Message:</strong></td><td>" . nl2br(htmlspecialchars($_POST['message'])) . "</td></tr>";
        } elseif ($form_type === 'career') {
            $subject = "Career Application Submission";
            $body_content = "
            <tr><td><strong>Name:</strong></td><td>" . htmlspecialchars($_POST['name']) . "</td></tr>
            <tr><td><strong>Email:</strong></td><td>" . htmlspecialchars($_POST['email']) . "</td></tr>
            <tr><td><strong>Interest Area:</strong></td><td>" . htmlspecialchars($_POST['interest_area'] ?? 'N/A') . "</td></tr>
            <tr><td><strong>Experience:</strong></td><td>" . nl2br(htmlspecialchars($_POST['experience'] ?? 'N/A')) . "</td></tr>";

            // Handle File Upload
            if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['resume']['tmp_name'];
                $fileName = $_FILES['resume']['name'];
                $fileSize = $_FILES['resume']['size'];
                $fileType = $_FILES['resume']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
                $allowedExtensions = array('pdf', 'doc', 'docx');

                if (in_array($fileExtension, $allowedExtensions) && $fileSize <= 2097152) {
                    $mail->addAttachment($fileTmpPath, $fileName);
                }
            }
        } elseif ($form_type === 'product_inquiry') {
            $subject = "Product Inquiry Submission";
            $body_content = "
            <tr><td><strong>Name:</strong></td><td>" . htmlspecialchars($_POST['name']) . "</td></tr>
            <tr><td><strong>Email:</strong></td><td>" . htmlspecialchars($_POST['email']) . "</td></tr>
            <tr><td><strong>Company:</strong></td><td>" . htmlspecialchars($_POST['company']) . "</td></tr>
            <tr><td><strong>Employees:</strong></td><td>" . htmlspecialchars($_POST['employees'] ?? 'N/A') . "</td></tr>
            <tr><td><strong>Problem Statement:</strong></td><td>" . nl2br(htmlspecialchars($_POST['problem'])) . "</td></tr>";
        }

        // Professional HTML Template
        $mail_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .email-container { max-width: 600px; margin: 0 auto; border: 1px solid #eee; border-radius: 10px; overflow: hidden; }
                .header { background: #000; padding: 20px; text-align: center; }
                .header img { max-width: 150px; }
                .content { padding: 30px; }
                .content h2 { color: #d32f2f; margin-top: 0; }
                .data-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                .data-table td { padding: 12px; border-bottom: 1px solid #eee; vertical-align: top; }
                .data-table td:first-child { width: 30%; font-weight: bold; color: #555; }
                .footer { background: #f9f9f9; padding: 20px; text-align: center; font-size: 12px; color: #888; border-top: 1px solid #eee; }
            </style>
        </head>
        <body>
            <div class='email-container'>
                <div class='header'>
                    <img src='{$logo_url}' alt='BCS Logo'>
                </div>
                <div class='content'>
                    <h2>{$subject}</h2>
                    <p>You have received a new submission from the BCS website.</p>
                    <table class='data-table'>
                        {$body_content}
                    </table>
                </div>
                <div class='footer'>
                    &copy; " . date('Y') . " Business Care Solutions. All rights reserved.<br>
                    This is an automated system notification.
                </div>
            </div>
        </body>
        </html>";

        $mail->Subject = $subject;
        $mail->Body    = $mail_body;

        $mail->send();
        $_SESSION['form_success'] = "Thank you! Your inquiry has been sent successfully.";
    } catch (Exception $e) {
        $_SESSION['form_error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header("Location: $redirect_url");
    exit;
} else {
    header("Location: /");
    exit;
}
