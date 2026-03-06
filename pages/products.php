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
            <a href="#home">
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
                <li class="sidebar-link-item"><a href="#home" class="sidebar-link">Home</a></li>
                <li class="sidebar-link-item"><a href="#about" class="sidebar-link">About Us</a></li>
                <li class="sidebar-link-item"><a href="#how-we-help" class="sidebar-link">Services</a></li>
                <li class="sidebar-link-item"><a href="#faq" class="sidebar-link">FAQ & Support</a></li>
                <li class="sidebar-link-item"><a href="#contact" class="sidebar-link">Contact</a></li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-brand d-flex align-items-center mb-2">
                <img src="public/images/logo/bcslogo.png" alt="BCS" class="sidebar-logo-img me-2" style="height: 30px; width: auto;">
                <span>BCS ADS Co.</span>
            </div>
            <p class="small text-muted mb-0">Strategic Digital Transformation</p>
        </div>
    </nav>

    <!-- Main Header -->
    <header class="main-header" id="main-header">
        <div class="container-fluid px-lg-5">
            <div class="header-inner d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a href="#home" class="header-logo d-flex align-items-center">
                    <img src="public/images/logo/logo01.png" alt="BCS ADS Co. Logo" class="header-logo-img me-2">
                    <!-- <span class="logo-text fw-bold">BCS ADS Co.</span> -->
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
                    <!-- <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                        <div class="hero-visual-wrapper text-center">
                            <img src="public/images/logo/herologo.png" alt="Hero Business Visual" class="hero-visual-img">
                            <h1 class="hero-visual-text">Business Care Solutions</h1>
                        </div>
                    </div> -->
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

        <section id="banner-fixed" class="col-sm-12 me d-flex align-items-center justify-content-center">
            <div class="banner-text-container text-center px-5 py-4 rounded-5">
                <h2 class="banner-title fw-bold mb-3" style="color: #ffffffff; text-shadow: none;">Best Digital Marketing Agency in Gandhidham and Gujarat, India</h2>
                <p class="banner-subtitle fs-5 mb-0" style="color: rgba(255, 255, 255, 0.8); font-weight: 600;">Also working internationally</p>
            </div>
        </section>

        <!-- Interactive Services Section (Tabs Layout) -->
        <section id="how-we-help" class="position-relative overflow-hidden">

            <!-- Background Assembly Containers -->
            <div class="help-assembly-bg-wrapper">
                <div class="help-assembly-container">
                    <div class="help-assembly-part part-left">
                        <img src="public/images/serivepage/serivepage.png" alt="Service Part Left">
                    </div>
                    <div class="help-assembly-part part-right">
                        <img src="public/images/serivepage/serivepage1.png" alt="Service Part Right">
                    </div>
                </div>
            </div>

            <div class="container position-relative" style="z-index: 5;">
                <!-- Section Header -->
                <div class="help-section-header text-center">
                    <span class="help-eyebrow">OUR EXPERTISE</span>
                    <h2 class="help-main-title">How Can We <span class="help-title-accent">Help You?</span></h2>
                </div>

                <!-- Tabs Widget -->
                <div data-widget="tabs" data-tabs-animate="500, 50" class="help-tabs-widget">

                    <!-- Tab Controls -->
                    <div class="tabs-controls help-tabs-controls">
                        <button type="button" class="tabs-control help-tab-item" aria-selected="true" aria-controls="help-advertising">
                            <div class="tab-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="3" />
                                    <path d="M3 9h18" />
                                    <path d="M9 21V9" />
                                </svg>
                            </div>
                            <span class="tab-text">Advertising</span>
                            <span class="tab-active-bar"></span>
                        </button>
                        <button type="button" class="tabs-control help-tab-item" aria-selected="false" aria-controls="help-performance">
                            <div class="tab-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </div>
                            <span class="tab-text">Performance</span>
                            <span class="tab-active-bar"></span>
                        </button>
                        <button type="button" class="tabs-control help-tab-item" aria-selected="false" aria-controls="help-seo">
                            <div class="tab-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                    <line x1="11" y1="8" x2="11" y2="14" />
                                    <line x1="8" y1="11" x2="14" y2="11" />
                                </svg>
                            </div>
                            <span class="tab-text">SEO</span>
                            <span class="tab-active-bar"></span>
                        </button>
                        <button type="button" class="tabs-control help-tab-item" aria-selected="false" aria-controls="help-content">
                            <div class="tab-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>
                            </div>
                            <span class="tab-text">Content</span>
                            <span class="tab-active-bar"></span>
                        </button>
                        <button type="button" class="tabs-control help-tab-item" aria-selected="false" aria-controls="help-social">
                            <div class="tab-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                            </div>
                            <span class="tab-text">Social Media</span>
                            <span class="tab-active-bar"></span>
                        </button>
                        <button type="button" class="tabs-control help-tab-item" aria-selected="false" aria-controls="help-web">
                            <div class="tab-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" />
                                    <polyline points="8 21 12 17 16 21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </div>
                            <span class="tab-text">Web Design</span>
                            <span class="tab-active-bar"></span>
                        </button>
                    </div>

                    <!-- Content Panels -->
                    <div class="tabs-panels help-tabs-panels">

                        <!-- Panel 1: Advertising -->
                        <div class="tabs-panel help-panel" id="help-advertising" aria-selected="true">
                            <div class="row align-items-center g-5">
                                <div class="col-lg-5">
                                    <div class="help-panel-assembly">
                                        <div class="panel-part panel-part-left">
                                            <img src="public/images/serivepage/serivepage.png" alt="Digital Advertising">
                                        </div>
                                        <div class="panel-part panel-part-right">
                                            <img src="public/images/serivepage/serivepage1.png" alt="Digital Advertising">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <span class="panel-eyebrow">01 &mdash; Advertising</span>
                                    <h3 class="panel-title">Digital Advertising <br>That Converts</h3>
                                    <p class="panel-desc">BCS blends data-driven insights with creative strategy to help your brand reach the right audience, boost conversions, and build lasting loyalty across every channel.</p>
                                    <ul class="panel-features">
                                        <li><span class="feat-icon">&#10003;</span> Targeted Google &amp; Meta ad campaigns</li>
                                        <li><span class="feat-icon">&#10003;</span> A/B testing &amp; continuous optimisation</li>
                                        <li><span class="feat-icon">&#10003;</span> Full-funnel creative production</li>
                                    </ul>
                                    <a href="services.php" class="help-panel-cta">Explore Advertising <span>&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 2: Performance -->
                        <div class="tabs-panel help-panel" id="help-performance" aria-selected="false">
                            <div class="row align-items-center g-5">
                                <div class="col-lg-5">
                                    <div class="help-panel-assembly">
                                        <div class="panel-part panel-part-left">
                                            <img src="public/images/serivepage/serivepage.png" alt="Performance Marketing">
                                        </div>
                                        <div class="panel-part panel-part-right">
                                            <img src="public/images/serivepage/serivepage1.png" alt="Performance Marketing">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <span class="panel-eyebrow">02 &mdash; Performance</span>
                                    <h3 class="panel-title">Marketing Driven <br>by Results</h3>
                                    <p class="panel-desc">We specialise in data-led campaigns that transform every click into measurable growth, giving you maximum ROI and a clear view of what's working.</p>
                                    <ul class="panel-features">
                                        <li><span class="feat-icon">&#10003;</span> PPC &amp; paid media management</li>
                                        <li><span class="feat-icon">&#10003;</span> Real-time analytics dashboards</li>
                                        <li><span class="feat-icon">&#10003;</span> Conversion rate optimisation (CRO)</li>
                                    </ul>
                                    <a href="services.php" class="help-panel-cta">Explore Performance <span>&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 3: SEO -->
                        <div class="tabs-panel help-panel" id="help-seo" aria-selected="false">
                            <div class="row align-items-center g-5">
                                <div class="col-lg-5">
                                    <div class="help-panel-assembly">
                                        <div class="panel-part panel-part-left">
                                            <img src="public/images/serivepage/serivepage.png" alt="SEO">
                                        </div>
                                        <div class="panel-part panel-part-right">
                                            <img src="public/images/serivepage/serivepage1.png" alt="SEO">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <span class="panel-eyebrow">03 &mdash; SEO</span>
                                    <h3 class="panel-title">Own the First <br>Page of Google</h3>
                                    <p class="panel-desc">Proven techniques to boost your search visibility, attract the right audience organically, and drive meaningful, lasting business growth without paying per click.</p>
                                    <ul class="panel-features">
                                        <li><span class="feat-icon">&#10003;</span> Technical SEO &amp; site health audits</li>
                                        <li><span class="feat-icon">&#10003;</span> Keyword strategy &amp; competitor analysis</li>
                                        <li><span class="feat-icon">&#10003;</span> High-authority link building</li>
                                    </ul>
                                    <a href="services.php" class="help-panel-cta">Explore SEO <span>&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 4: Content -->
                        <div class="tabs-panel help-panel" id="help-content" aria-selected="false">
                            <div class="row align-items-center g-5">
                                <div class="col-lg-5">
                                    <div class="help-panel-assembly">
                                        <div class="panel-part panel-part-left">
                                            <img src="public/images/serivepage/serivepage.png" alt="Content Marketing">
                                        </div>
                                        <div class="panel-part panel-part-right">
                                            <img src="public/images/serivepage/serivepage1.png" alt="Content Marketing">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <span class="panel-eyebrow">04 &mdash; Content</span>
                                    <h3 class="panel-title">Stories That <br>Inspire Action</h3>
                                    <p class="panel-desc">Magnetic storytelling and stunning visuals that grab hearts, build brand authority, and keep your audience coming back for more across every platform.</p>
                                    <ul class="panel-features">
                                        <li><span class="feat-icon">&#10003;</span> Blog, video &amp; infographic production</li>
                                        <li><span class="feat-icon">&#10003;</span> Brand voice &amp; editorial strategy</li>
                                        <li><span class="feat-icon">&#10003;</span> Content calendars &amp; distribution</li>
                                    </ul>
                                    <a href="services.php" class="help-panel-cta">Explore Content <span>&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 5: Social Media -->
                        <div class="tabs-panel help-panel" id="help-social" aria-selected="false">
                            <div class="row align-items-center g-5">
                                <div class="col-lg-5">
                                    <div class="help-panel-assembly">
                                        <div class="panel-part panel-part-left">
                                            <img src="public/images/serivepage/serivepage.png" alt="Social Media">
                                        </div>
                                        <div class="panel-part panel-part-right">
                                            <img src="public/images/serivepage/serivepage1.png" alt="Social Media">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <span class="panel-eyebrow">05 &mdash; Social Media</span>
                                    <h3 class="panel-title">Build a Community <br>Around Your Brand</h3>
                                    <p class="panel-desc">Smart, creative social strategies crafted by a dedicated team to grow your following, spark engagement, and turn followers into loyal brand advocates.</p>
                                    <ul class="panel-features">
                                        <li><span class="feat-icon">&#10003;</span> Instagram, Facebook &amp; LinkedIn management</li>
                                        <li><span class="feat-icon">&#10003;</span> Organic content &amp; reel creation</li>
                                        <li><span class="feat-icon">&#10003;</span> Community management &amp; growth hacking</li>
                                    </ul>
                                    <a href="services.php" class="help-panel-cta">Explore Social Media <span>&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Panel 6: Web Design -->
                        <div class="tabs-panel help-panel" id="help-web" aria-selected="false">
                            <div class="row align-items-center g-5">
                                <div class="col-lg-5">
                                    <div class="help-panel-assembly">
                                        <div class="panel-part panel-part-left">
                                            <img src="public/images/serivepage/serivepage.png" alt="Web Design">
                                        </div>
                                        <div class="panel-part panel-part-right">
                                            <img src="public/images/serivepage/serivepage1.png" alt="Web Design">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <span class="panel-eyebrow">06 &mdash; Web Design</span>
                                    <h3 class="panel-title">Websites That Work <br>While You Sleep</h3>
                                    <p class="panel-desc">Beautifully crafted websites that blend premium aesthetics with seamless functionality — giving your brand a powerful digital home that drives real results 24/7.</p>
                                    <ul class="panel-features">
                                        <li><span class="feat-icon">&#10003;</span> Responsive UI/UX design &amp; prototyping</li>
                                        <li><span class="feat-icon">&#10003;</span> E-commerce &amp; custom web development</li>
                                        <li><span class="feat-icon">&#10003;</span> SEO-ready, fast-loading builds</li>
                                    </ul>
                                    <a href="services.php" class="help-panel-cta">Explore Web Design <span>&rarr;</span></a>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.tabs-panels -->
                </div><!-- /.help-tabs-widget -->
            </div><!-- /.container -->
        </section>


        <section class="loop-images" style="--bg: white;">
            <div class="row align-items-center">
                <div class="col-sm-8 position-relative" style="overflow: hidden;">
                    <div class="carousel-track" style="--time: 60s; --total: 12;">
                        <div class="carousel-item" style="--i: 1;">
                            <img src="https://images.unsplash.com/photo-1758314896569-b3639ee707c4?q=80&w=715&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 2;">
                            <img src="https://plus.unsplash.com/premium_photo-1671649240322-2124cd07eaae?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 3;">
                            <img src="https://plus.unsplash.com/premium_photo-1673029925648-af80569efc46?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 4;">
                            <img src="https://plus.unsplash.com/premium_photo-1666533099824-abd0ed813f2a?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 5;">
                            <img src="https://plus.unsplash.com/premium_photo-1671105035554-7f8c2a587201?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 6;">
                            <img src="https://plus.unsplash.com/premium_photo-1686750875748-d00684d36b1e?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 7;">
                            <img src="https://plus.unsplash.com/premium_photo-1686844462591-393ceae12be0?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 8;">
                            <img src="https://plus.unsplash.com/premium_photo-1686839181367-febb561faa53?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 9;">
                            <img src="https://plus.unsplash.com/premium_photo-1671199850329-91cae34a6b6d?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 10;">
                            <img src="https://plus.unsplash.com/premium_photo-1685655611311-9f801b43b9fa?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 11;">
                            <img src="https://plus.unsplash.com/premium_photo-1675598468920-878ae1e46f14?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                        <div class="carousel-item" style="--i: 12;">
                            <img src="https://images.unsplash.com/photo-1718036094878-ecdce2b1be95?q=80&w=715&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 px-lg-5">
                    <div class="loop-content text-dark">
                        <h2 class="display-5 fw-bold mb-3">Creative <br>Works</h2>
                        <p class="lead text-muted">A collection of our most impactful visual projects and creative campaigns.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-white overflow-hidden">
            <div class="container-fluid py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="impact-title-wrapper">
                            <span class="impact-headline mb-3">Innovative</span>
                            <span class="impact-headline-large mb-3">Design</span>
                            <span class="impact-headline">Philosophy</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="client-section position-relative overflow-hidden">
            <div class="container py-lg-5 position-relative z-1">
                <!-- Section Header -->
                <div class="row mb-5 pb-3">
                    <div class="col-lg-10">
                        <h2 class="client-title mb-4 text-white" style="text-shadow: 0 4px 15px rgba(0,0,0,0.5);">The BCS Client Wall of Trust</h2>
                        <p class="client-subtitle lead mb-0 text-white-50">
                            We are trusted by industry leaders and innovative organizations who rely on us to deliver digital solutions that drive real results. Our partnerships are built on quality, reliability, and a shared vision for success.
                        </p>
                    </div>
                </div>

                <!-- Logo Grid (Expanded to 40) -->
                <div class="row g-4 row-cols-2 row-cols-md-4 row-cols-lg-5">
                    <?php
                    // Using a loop to generate 40 dummy logos for demonstration
                    $dummy_companies = [
                        'maersk.com',
                        'fedex.com',
                        'dhl.com',
                        'ups.com',
                        'hapag-lloyd.com',
                        'coscoshipping.com',
                        'msc.com',
                        'evergreen-marine.com',
                        'wanhai.com',
                        'zim.com',
                        'one-line.com',
                        'yangming.com',
                        'hmm21.com',
                        'pilship.com',
                        'cmacgm.com',
                        'hamburgsud.com',
                        'oocl.com',
                        'apl.com',
                        'nykline.com',
                        'molgroup.com',
                        'kline.com',
                        'sealandmaersk.com',
                        'safmarine.com',
                        'mcc.com.sg',
                        'seago-line.com',


                    ];
                    foreach ($dummy_companies as $company) : ?>
                        <div class="col">
                            <div class="client-logo-card">
                                <?php
                                // Clean the domain for the placeholder text
                                $clean_name = str_replace(['.com', '.org', '.net', '-'], ['', '', '', ' '], $company);
                                $clean_name = ucwords($clean_name);
                                ?>
                                <img src="https://img.logo.dev/<?php echo $company; ?>?size=128"
                                    alt="<?php echo $clean_name; ?>"
                                    class="client-logo-img"
                                    onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($clean_name); ?>&background=f1f5f9&color=64748b&size=128&font-size=0.35'">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="impact-stats">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8 text-center">
                        <h2 class="client-title mb-3" style="color: #0f172a; font-weight: 800; font-family: 'Outfit', sans-serif;">Our Impact in Numbers</h2>
                        <p class="client-subtitle lead mb-0 mx-auto" style="color: #64748b; font-family: 'Inter', sans-serif; max-width: 700px; line-height: 1.6;">
                            We're not just another digital agency. We're your strategic partner in digital transformation, backed by proven results and years of industry expertise.
                        </p>
                    </div>
                </div>
                <div class="impact-stats-box">
                    <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-lg-4 text-center">
                        <div class="col">
                            <div class="stat-item">
                                <div class="stat-icon-wrap">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                                <div class="stat-number"><span class="counter" data-target="1600">0</span>+</div>
                                <div class="stat-label">Projects Completed</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stat-item">
                                <div class="stat-icon-wrap">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>
                                </div>
                                <div class="stat-number"><span class="counter" data-target="6">0</span>+</div>
                                <div class="stat-label">Countries World Wide</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stat-item">
                                <div class="stat-icon-wrap">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div class="stat-number"><span class="counter" data-target="10">0</span>+</div>
                                <div class="stat-label">Years Experience</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="stat-item">
                                <div class="stat-icon-wrap">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <div class="stat-number"><span class="counter" data-target="1000">0</span>+</div>
                                <div class="stat-label">Total Happy Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="transformation-cta text-center">
            <div class="container">
                <div class="cta-glass-card shadow-lg">
                    <h2 class="cta-title">Ready to Transform Your <br><span class="text-primary">Digital Presence?</span></h2>
                    <p class="cta-text">
                        Let's work together to create a powerful digital strategy that drives growth and success for your business in Gandhidham.
                    </p>
                    <div class="cta-btns">
                        <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-lg">Contact Us</a>
                        <a href="#how-we-help" class="btn btn-premium-outline btn-lg rounded-pill px-5 py-3">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="faq-section position-relative overflow-hidden py-lg-5">
            <div class="container py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <span class="section-tag text-primary fw-bold mb-3 d-block">FAQ & SUPPORT</span>
                        <h2 class="faq-title mb-4">Frequently Asked <span class="help-title-accent">Questions</span></h2>
                        <p class="faq-subtitle lead mb-0">
                            Explore answers to common questions about our digital strategies, branding, and how we help businesses scale.
                        </p>
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-8 col-md-12 mb-5 mb-lg-0">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How long does a branding project take?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        A comprehensive branding project typically takes 4 to 8 weeks. This includes research, strategy, visual identity design, and implementation across various platforms to ensure a cohesive brand presence.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can you help with international marketing campaigns?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, absolutely. We have experience managing campaigns across various global markets, adapting strategies to cultural nuances while maintaining consistent brand messaging.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What digital channels should I focus on?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our strategy team analyzes your target audience and industry to identify the most effective channels. Whether it's SEO, Performance Marketing, or Social Media, we focus on where your customers are.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How do you measure the ROI of my campaign?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We provide detailed, real-time analytics reports that track key performance indicators (KPIs) like conversion rates, cost-per-acquisition, and overall ROI, ensuring full transparency.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="faq-image-container position-relative rounded-4 overflow-hidden shadow-lg h-100" style="min-height: 450px;">
                            <div class="faq-image-bg position-absolute top-0 start-0 w-100 h-100" style="background-image: url('public/images/about/13.png'); background-size: cover; background-position: center; background-attachment: fixed;"></div>
                            <div class="faq-glass-overlay position-absolute bottom-0 start-0 w-100 p-4 m-3" style="width: calc(100% - 2rem) !important; background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(20px) saturate(180%); -webkit-backdrop-filter: blur(20px) saturate(180%); border: 1px solid rgba(255, 255, 255, 0.4); border-radius: 1.5rem; box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);">
                                <h4 class="fw-bold mb-3" style="font-family: 'Outfit', sans-serif; letter-spacing: -0.02em; color: #2e1a8e;">Why People Trust Us?</h4>
                                <ul class="list-unstyled mb-0" style="font-family: 'Inter', sans-serif; font-size: 0.95rem;">
                                    <li class="mb-2 d-flex align-items-center" style="color: rgba(46, 26, 142, 0.9); font-weight: 500;">
                                        <span class="me-2 d-flex align-items-center justify-content-center bg-primary rounded-circle" style="width: 20px; height: 20px; font-size: 0.7rem; color: #fff;">✓</span>
                                        Unmatched Reliability
                                    </li>
                                    <li class="mb-2 d-flex align-items-center" style="color: rgba(46, 26, 142, 0.9); font-weight: 500;">
                                        <span class="me-2 d-flex align-items-center justify-content-center bg-primary rounded-circle" style="width: 20px; height: 20px; font-size: 0.7rem; color: #fff;">✓</span>
                                        Innovative Digital Strategies
                                    </li>
                                    <li class="d-flex align-items-center" style="color: rgba(46, 26, 142, 0.9); font-weight: 500;">
                                        <span class="me-2 d-flex align-items-center justify-content-center bg-primary rounded-circle" style="width: 20px; height: 20px; font-size: 0.7rem; color: #fff;">✓</span>
                                        Data-Driven Results & Growth
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-section position-relative overflow-hidden">
            <!-- Background Vertical Heading -->
            <div class="gallery-vertical-heading d-none d-lg-flex">
                <span class="text-2">WHAT WE BUILD</span>
                <span class="text-1">FOR CLIENTS</span>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-4 fw-bold text-dark mb-3">Our Strategic <span class="text-primary">Capabilities</span></h2>
                        <p class="lead text-muted">A glimpse into the core pillars that drive our success and reliability.</p>
                    </div>
                </div>
                <div class="options">
                    <div class="option active" style="--optionBackground:url(https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=1200);">
                        <div class="shadow"></div>
                        <div class="label">
                            <div class="icon">
                                <i class="fas fa-ship"></i>
                            </div>
                            <div class="info">
                                <div class="main">Global Logistics</div>
                                <div class="sub">World-class shipping and handling</div>
                            </div>
                        </div>
                    </div>
                    <div class="option" style="--optionBackground:url(https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&q=80&w=1200);">
                        <div class="shadow"></div>
                        <div class="label">
                            <div class="icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <div class="info">
                                <div class="main">Smart Warehouse</div>
                                <div class="sub">Advanced storage solutions</div>
                            </div>
                        </div>
                    </div>
                    <div class="option" style="--optionBackground:url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=1200);">
                        <div class="shadow"></div>
                        <div class="label">
                            <div class="icon">
                                <i class="fas fa-truck-fast"></i>
                            </div>
                            <div class="info">
                                <div class="main">Fast Delivery</div>
                                <div class="sub">On-time, every time</div>
                            </div>
                        </div>
                    </div>
                    <div class="option" style="--optionBackground:url(https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=1200);">
                        <div class="shadow"></div>
                        <div class="label">
                            <div class="icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="info">
                                <div class="main">24/7 Support</div>
                                <div class="sub">Dedicated assistance always</div>
                            </div>
                        </div>
                    </div>
                    <div class="option" style="--optionBackground:url(https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=1200);">
                        <div class="shadow"></div>
                        <div class="label">
                            <div class="icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="info">
                                <div class="main">Innovation</div>
                                <div class="sub">Leading with digital technology</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>









    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="row g-4">
                <!-- Column 1: Brand -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <a href="#" class="footer-logo">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="var(--primary)" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2 17L12 22L22 17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2 12L12 17L22 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="footer-brand-name">BCS ADS Co.</span>
                        </a>
                        <p>Empowering brands with precision-driven digital solutions. We turn your vision into high-impact reality through innovative strategy and design.</p>
                        <div class="footer-social-links">
                            <a href="#" class="social-link" aria-label="Instagram">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Facebook">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="X (Twitter)">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li class="footer-link-item"><a href="#home" class="footer-link">Home</a></li>
                        <li class="footer-link-item"><a href="#about" class="footer-link">About Us</a></li>
                        <li class="footer-link-item"><a href="#how-we-help" class="footer-link">Services</a></li>
                        <li class="footer-link-item"><a href="#faq" class="footer-link">FAQ & Support</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div class="col-lg-2 col-md-6">
                    <h4 class="footer-title">Our Services</h4>
                    <ul class="footer-links">
                        <li class="footer-link-item"><a href="#" class="footer-link">Branding</a></li>
                        <li class="footer-link-item"><a href="#" class="footer-link">Advertising</a></li>
                        <li class="footer-link-item"><a href="#" class="footer-link">Performance</a></li>
                        <li class="footer-link-item"><a href="#" class="footer-link">SEO Solutions</a></li>
                        <li class="footer-link-item"><a href="#" class="footer-link">Web Design</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="footer-title">Contact Us</h4>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="footer-contact-text"> Sector 8, Gandhidham, <br>Gujarat, India - 370201</div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="footer-contact-text">+91 98765 43210</div>
                    </div>
                    <div class="footer-newsletter mt-4">
                        <form action="#">
                            <input type="email" class="form-control" placeholder="Your Email Address" required>
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill w-100 mt-2">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="footer-bottom-text mb-0">&copy; <?php echo date('Y'); ?> Business Care Solutions. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4"><a href="#" class="footer-link small">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link small">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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