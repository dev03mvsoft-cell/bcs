<?php

/**
 * City-Service SEO Template
 * This page dynamic content based on the city and service selected.
 */
if (!isset($current_seo)) {
    header("Location: " . BASE_URL);
    exit;
}

$city = $current_seo['city'];
$title = $current_seo['title'];
?>

<div class="city-service-wrapper">
    <!-- Hero Section -->
    <section class="city-hero section-padding position-relative overflow-hidden" style="background: var(--dark); padding: 120px 0 80px;">
        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="about-eyebrow mb-3 d-block" style="color: var(--primary);">LOCAL EXPERTISE</span>
                    <h1 class="display-3 fw-bold text-white mb-4">
                        <?php echo $city; ?>'s Elite <br>
                        <span class="text-gradient">Digital Partner</span>
                    </h1>
                    <p class="lead text-white-50 mb-5" style="max-width: 600px;">
                        Driving growth in <?php echo $city; ?> through strategic website development, high-impact digital marketing, and innovative software solutions.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="contact" class="contact-link px-4 py-3 bg-primary text-white border-0">Start Your Project</a>
                        <a href="services" class="btn-outline-custom border-white text-white">View Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Decorative Background Element -->
        <div class="position-absolute top-50 start-100 translate-middle" style="opacity: 0.05;">
            <h2 style="font-size: 20rem; font-weight: 900; color: white; white-space: nowrap;"><?php echo strtoupper($city); ?></h2>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Why BCS is the Best <span class="text-primary"><?php echo $city; ?></span> Choice</h2>
                    <p class="text-muted lead mb-4">
                        In the rapidly evolving digital landscape of <?php echo $city; ?>, staying ahead requires more than just a website. It requires a strategic partner who understands the local market and global trends.
                    </p>
                    <div class="feature-list mt-5">
                        <div class="d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Tailored Strategies</h5>
                                <p class="text-muted small">We design solutions specifically for the <?php echo $city; ?> business ecosystem.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Premium Design</h5>
                                <p class="text-muted small">World-class aesthetics that make your brand stand out in <?php echo $city; ?>.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="icon-box me-3">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Proven Data Results</h5>
                                <p class="text-muted small">Focusing on ROI and performance metrics for local businesses.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="premium-card p-5 bg-light rounded-4 border-0 shadow-sm">
                        <h3 class="fw-bold mb-4">Get a Free Consultation</h3>
                        <p class="text-muted mb-4">Ready to scale your business in <?php echo $city; ?>? Our experts are here to help.</p>
                        <form action="contact" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control py-3" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control py-3" placeholder="Email Address" required>
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="4" placeholder="How can we help you in <?php echo $city; ?>?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic SEO Footer (Hidden from view but readable by bots) -->
    <div style="display: none; visibility: hidden;">
        <h2><?php echo $title; ?></h2>
        <p>BCS is a premier digital agency providing comprehensive services across Kutch and Gujarat, specifically focusing on <?php echo $city; ?>.</p>
        <ul>
            <li>Website Development Company in <?php echo $city; ?></li>
            <li>Web Designer in <?php echo $city; ?></li>
            <li>Digital Marketing Services in <?php echo $city; ?></li>
            <li>SEO Solutions in <?php echo $city; ?></li>
        </ul>
    </div>
</div>

<style>
    .text-gradient {
        background: linear-gradient(135deg, var(--primary) 0%, #ff4d4d 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .city-hero {
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .premium-card {
        transition: transform 0.3s ease;
    }

    .premium-card:hover {
        transform: translateY(-10px);
    }
</style>