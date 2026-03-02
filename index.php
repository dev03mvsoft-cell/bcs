<?php

/**
 * Single Page Entry Point
 * All content is handled here for initial development.
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Single Page | BCS Project</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/bcs/public/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="glass-header position-sticky top-0 z-3">
        <nav class="navbar navbar-expand-lg container">
            <a class="navbar-brand logo" href="#">BRAND</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav nav-links">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="swiper mySwiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero-slide-1">
                        <div class="slide-content hero-content container text-center">
                            <h1 class="display-3 fw-bold mb-4">Crafting Visual Excellence</h1>
                            <p class="lead mb-5 opacity-75">Your journey to a stunning web presence starts here.</p>
                            <div class="cta-btns">
                                <a href="#features" class="btn btn-primary btn-lg px-5">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-5 bg-white">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Premium Features</h2>
                    <p class="text-muted lead">Everything you need for a modern web experience.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-card text-center h-100 p-5">
                            <div class="feature-icon mb-4">🚀</div>
                            <h3>GSAP Animations</h3>
                            <p class="text-muted">High-performance transitions and scroll-driven reveals.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center h-100 p-5">
                            <div class="feature-icon mb-4">📱</div>
                            <h3>Bootstrap 5</h3>
                            <p class="text-muted">A fully responsive grid system for all device sizes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card text-center h-100 p-5">
                            <div class="feature-icon mb-4">🏗️</div>
                            <h3>Clean PHP</h3>
                            <p class="text-muted">Efficient server-side rendering for better SEO and speed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer mt-auto py-4 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Modern PHP Website. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/bcs/public/js/main.js"></script>
</body>

</html>