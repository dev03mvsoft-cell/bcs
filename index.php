<?php

/**
 * ============================================================
 *  BCS - Array Based Router
 *  All routes are defined here. Views are in /views/ folder.
 * ============================================================
 */

// 1. Auto-detect Base Path and URL
// Works on both: localhost/bcs/ (XAMPP) and localhost:8000 (PHP built-in server)
$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('BASE_PATH', rtrim($script_dir, '/') . '/');
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . BASE_PATH);

// 2. Parse the Route
$request_uri = $_SERVER['REQUEST_URI'];
$route = str_replace(BASE_PATH, '', $request_uri);
$route = explode('?', $route)[0]; // Remove query string
$route = trim($route, '/');

// 3. Main Site Routes
$routes = [
    'home'     => '',
    'about'    => 'about',
    'services' => 'services',
    'career'  => 'career',
    'contact'  => 'contact'
];



// 5. Match Route → View File
$page = 'home'; // Default page

if ($route === '' || $route === 'index.php') {
    $page = 'home';
} elseif (in_array($route, $routes)) {
    $page = array_search($route, $routes);
} else {
    // Check product sub-routes
    $found = false;
    foreach ($product_categories as $cat => $items) {
        foreach ($items as $label => $sub_route) {
            if ($route === $sub_route) {
                $page = str_replace('/', '-', $sub_route); // e.g. products-fresh-provisions
                $found = true;
                break 2;
            }
        }
    }
    if (!$found) {
        $page = '404';
    }
}

// 6. Set the view file path
$view_file = __DIR__ . '/views/' . $page . '.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCS ADS Co. | Business Care Solutions</title>

    <!-- Base URL for assets -->
    <base href="<?php echo BASE_URL; ?>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@300;400;600;700&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Sidebar Navigation Menu -->
    <div class="menu-overlay" id="menu-overlay"></div>
    <nav class="sidebar-nav" id="sidebar-nav">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <a href="<?php echo BASE_URL; ?>">
                <img src="public/images/logo/logo01.png" alt="BCS" style="height: 45px; width: auto;">
            </a>
            <button class="menu-close-btn" id="menu-close-btn">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-links">
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>" class="sidebar-link <?php echo $page === 'home' ? 'active' : ''; ?>">Home</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>about" class="sidebar-link <?php echo $page === 'about' ? 'active' : ''; ?>">About Us</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>services" class="sidebar-link <?php echo $page === 'services' ? 'active' : ''; ?>">Services</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>career" class="sidebar-link <?php echo $page === 'gallery' ? 'active' : ''; ?>">Career</a></li>
                <li class="sidebar-link-item"><a href="<?php echo BASE_URL; ?>contact" class="sidebar-link <?php echo $page === 'contact' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-brand d-flex align-items-center mb-2">
                <img src="public/images/logo/bcslogo.png" alt="BCS" class="sidebar-logo-img me-2" style="height: 30px; width: auto;">
                <span>Business Care Solutions</span>
            </div>
            <p class="small text-muted mb-0">Strategic Digital Transformation</p>
        </div>
    </nav>

    <!-- Main Header -->
    <header class="main-header" id="main-header">
        <div class="container-fluid px-lg-5">
            <div class="header-inner d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a href="<?php echo BASE_URL; ?>" class="header-logo d-flex align-items-center">
                    <img src="public/images/logo/logo01.png" alt="BCS ADS Co. Logo" class="header-logo-img me-2">
                </a>

                <!-- Hamburger Trigger -->
                <button class="hamburger-btn" id="hamburger-btn" aria-label="Toggle Navigation">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- ============================================ -->
    <!--  DYNAMIC PAGE CONTENT (from /views/ folder)  -->
    <!-- ============================================ -->
    <main id="main-content">
        <?php
        if (file_exists($view_file)) {
            include $view_file;
        } else {
            include __DIR__ . '/views/404.php';
        }
        ?>
    </main>

    <!-- Footer -->
    <?php include __DIR__ . '/views/partials/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>