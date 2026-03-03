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
    <link rel="stylesheet" href="public/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@300;400;600;700&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="main-header position-fixed top-0 w-100" style="z-index: 9999;">
        <div class="header-container container-fluid px-lg-5">
            <nav class="navbar navbar-expand-lg">
                <!-- Left: Logo -->
                <a class="navbar-brand logo" href="#">
                    <img src="public/images/logo/bcslogo.png" alt="BCS Logo" class="logo-img">
                </a>

                <!-- Mobile Toggler -->
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Center: Nav Links & Right: Contact -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Nav Links Centered -->
                    <ul class="navbar-nav mx-auto nav-links-container">
                        <li class="nav-item"><a class="nav-link magnetic-item" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link magnetic-item" href="#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link magnetic-item" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link magnetic-item" href="#contact">Contact</a></li>
                    </ul>

                    <!-- Right: Contact Number -->
                    <div class="contact-info d-none d-lg-flex align-items-center">
                        <a href="tel:+1234567890" class="contact-link magnetic-item">
                            <span class="contact-icon text-primary me-2"><i class="bi bi-telephone-fill"></i></span>
                            <span class="contact-number">+1 (234) 567-890</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Animated Nav Line -->
            <div class="nav-line-wrapper">
                <div class="nav-line"></div>
            </div>
        </div>
    </header>

    <main id="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero-section overflow-hidden position-relative">
            <!-- Background Swiper (Slides L to R) -->
            <div class="swiper hero-bg-swiper position-absolute top-0 start-0 w-100 h-100">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="hero-bg-img" style="background-image: url('public/images/heroimage.jpg');"></div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="hero-bg-img" style="background-image: url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=2070');"></div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="hero-bg-img" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2070');"></div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="hero-bg-img" style="background-image: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&q=80&w=2070');"></div>
                    </div>
                </div>
            </div>

            <div class="container-fluid h-100 position-relative z-1 px-lg-5">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-6">
                        <!-- Hero Card (Slanted/Rounded) -->
                        <div class="hero-card">
                            <!-- ... existing card content ... -->
                            <div class="hero-card-header d-flex align-items-center mb-4">
                                <span class="hero-card-logo me-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="var(--primary)" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2 17L12 22L22 17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2 12L12 17L22 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="hero-card-brand">BCS ADS Co.</span>
                            </div>

                            <!-- Vertical Text Swiper -->
                            <div class="swiper hero-text-swiper">
                                <div class="swiper-wrapper">
                                    <!-- Slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="hero-slide-content">
                                            <div class="hero-text-mask">
                                                <h1 class="hero-headline text-dark mb-4">Precision-Driven <br>Marketing Solutions</h1>
                                            </div>
                                            <div class="hero-text-mask">
                                                <p class="hero-subtext text-muted mb-5">Empowering your brand with modern visual strategies and high-impact digital campaigns.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="hero-slide-content">
                                            <div class="hero-text-mask">
                                                <h1 class="hero-headline text-dark mb-4">Innovative <br>Creative Design</h1>
                                            </div>
                                            <div class="hero-text-mask">
                                                <p class="hero-subtext text-muted mb-5">Bringing your ideas to life with state-of-the-art aesthetics and functional beauty.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 3 -->
                                    <div class="swiper-slide">
                                        <div class="hero-slide-content">
                                            <div class="hero-text-mask">
                                                <h1 class="hero-headline text-dark mb-4">Strategic <br>Brand Growth</h1>
                                            </div>
                                            <div class="hero-text-mask">
                                                <p class="hero-subtext text-muted mb-5">Scaling your business through data-backed insights and market-leading techniques.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 4 -->
                                    <div class="swiper-slide">
                                        <div class="hero-slide-content">
                                            <div class="hero-text-mask">
                                                <h1 class="hero-headline text-dark mb-4">Digital <br>Transformation</h1>
                                            </div>
                                            <div class="hero-text-mask">
                                                <p class="hero-subtext text-muted mb-5">Modernizing your presence for the next generation of digital consumers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hero-cta-wrapper">
                                <a href="#contact" class="btn btn-cyan btn-lg px-5 py-3 magnetic-item">LET'S BEGIN</a>
                            </div>
                        </div>
                    </div>
                    <!-- Right Slide: Decorative Hero Logo -->
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div class="hero-visual-wrapper text-center">
                            <img src="public/images/logo/herologo.png" alt="Hero Business Visual" class="hero-visual-img">
                            <h1 class="hero-visual-text">Business Care Solutions</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section (Image Assembly) -->
        <section id="about" class="about-section py-5 overflow-hidden position-relative">
            <!-- Background Vertical Heading (Swapped for correct bottom-to-top flow) -->
            <div class="about-vertical-heading d-none d-lg-flex">
                <span class="text-2">REDEFINING</span>
                <span class="text-1"> EXCELLENCE</span>
            </div>

            <div class="container py-lg-5">
                <div class="row align-items-center justify-content-center">
                    <!-- Left Gap (Reduced) -->
                    <div class="col-lg-1 d-none d-lg-block"></div>

                    <!-- Center: Assembly Images -->
                    <div class="col-lg-6">
                        <div class="about-assembly-container text-center position-relative">
                            <!-- Top Message -->
                            <div class="about-top-msg mb-4">CRAFTING VISUALS</div>

                            <!-- Base Image -->
                            <div class="about-img-wrapper base-wrapper">
                                <img src="public/images/about/13.png" alt="About Base" class="about-img-base img-fluid">
                            </div>
                            <!-- Sliding Image -->
                            <div class="about-img-wrapper slide-wrapper about-img-slide">
                                <img src="public/images/about/12.png" alt="About Part" class="img-fluid">
                                <!-- Bottom Message -->
                                <div class="about-bottom-msg mt-4">BUILDING BRANDS</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: About Text -->
                    <div class="col-lg-4">
                        <div class="about-content ps-lg-5 ms-lg-4">
                            <span class="section-tag text-primary fw-bold mb-3 d-block">CHOOSE EXCELLENCE</span>
                            <h2 class="display-4 fw-bold mb-4 text-dark">Empowering Businesses Through Innovation</h2>
                            <p class="text-muted mb-4 lead">
                                At Business Care Solutions (BCS), we don't just provide services; we build foundations. Our team is dedicated to modernizing your digital presence with cutting-edge visual strategies.
                            </p>
                            <p class="text-muted mb-4">
                                From creative design to strategic brand growth, we ensure your business stays ahead in the ever-evolving market.
                            </p>
                            <a href="#contact" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-lg">Start Your Transformation</a>
                        </div>
                    </div>

                    <!-- Right Gap (Reduced) -->
                    <div class="col-lg-1 d-none d-lg-block"></div>
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
    <script src="public/js/main.js"></script>
</body>

</html>