<style>
    /* Specific styles for Products Page */
    .products-hero-section {
        background-color: #ffffff;
        position: relative;
        overflow: hidden;
        padding-top: 120px !important;
        padding-bottom: 100px !important;
    }

    .products-hero-section::before {
        content: '';
        position: absolute;
        top: -10%;
        right: -5%;
        width: 40%;
        height: 60%;
        background: radial-gradient(circle, rgba(0, 46, 142, 0.05) 0%, rgba(255, 255, 255, 0) 70%);
        z-index: 0;
    }

    .product-sub-nav {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border-bottom: 1px solid rgba(15, 23, 42, 0.08);
        position: sticky;
        top: 70px;
        /* Aligns with main header height */
        z-index: 950;
        transition: all 0.3s ease;
    }

    .main-header.scrolled+#main-content .product-sub-nav {
        top: 70px;
    }

    .sub-nav-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    .sub-nav-link {
        color: #64748b;
        font-weight: 600;
        padding: 1.2rem 0;
        text-decoration: none;
        display: inline-block;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
        font-family: var(--font-heading);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    .sub-nav-link:hover,
    .sub-nav-link.active {
        color: var(--primary);
        border-bottom-color: var(--primary);
    }

    .product-section {
        padding: 120px 0;
        border-bottom: 1px solid rgba(15, 23, 42, 0.04);
    }

    .product-section:nth-child(even) {
        background-color: #f8fafc;
    }

    .product-badge {
        display: inline-block;
        padding: 0.5rem 1.2rem;
        background: rgba(0, 46, 142, 0.08);
        color: var(--primary);
        border-radius: 100px;
        font-weight: 700;
        font-size: 0.8rem;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .product-title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: var(--dark);
    }

    .product-desc {
        font-size: 1.15rem;
        color: #64748b;
        margin-bottom: 2.5rem;
        max-width: 600px;
    }

    .product-mockup-wrap {
        position: relative;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        z-index: 1;
    }



    .product-mockup-img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 20px;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        background: #fff;
        border-radius: 15px;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.03);
    }



    .feature-check {
        width: 24px;
        height: 24px;
        background: var(--primary);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 0.7rem;
    }

    .feature-text {
        font-weight: 600;
        color: var(--dark);
        font-size: 1rem;
    }

    .product-stats {
        display: flex;
        gap: 2rem;
        margin-top: 3rem;
    }

    .p-stat-item .p-stat-val {
        font-size: 2rem;
        font-weight: 800;
        color: var(--primary);
        display: block;
    }

    .p-stat-item .p-stat-label {
        font-size: 0.85rem;
        color: #64748b;
        font-weight: 600;
        text-transform: uppercase;
    }

    /* Final CTA Section Enhanced */
    .final-cta {
        padding: 140px 0;
        background: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .cta-premium-card {
        background: var(--primary-gradient);
        border-radius: 60px;
        padding: 6rem 4rem;
        position: relative;
        overflow: hidden;
        color: white;
        box-shadow: 0 40px 100px rgba(0, 46, 142, 0.2);
    }

    .cta-premium-card::before {
        content: '';
        position: absolute;
        top: -20%;
        right: -10%;
        width: 60%;
        height: 140%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        transform: rotate(-15deg);
    }

    .cta-premium-card::after {
        content: '';
        position: absolute;
        bottom: -20%;
        left: -10%;
        width: 40%;
        height: 100%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 60%);
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .cta-title-main {
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        font-weight: 850;
        line-height: 1.05;
        letter-spacing: -2px;
        margin-bottom: 2rem;
    }

    .cta-subtitle-main {
        font-size: 1.25rem;
        opacity: 0.9;
        max-width: 650px;
        margin: 0 auto 3.5rem;
        line-height: 1.6;
    }

    .cta-btn-group {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-cta-primary {
        background: #fff;
        color: var(--primary);
        font-weight: 800;
        padding: 1.25rem 3.5rem;
        border-radius: 100px;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .btn-cta-primary:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        color: var(--primary-light);
    }

    .btn-cta-secondary {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.3);
        font-weight: 700;
        padding: 1.25rem 3.5rem;
        border-radius: 100px;
        transition: all 0.4s ease;
        text-decoration: none;
    }

    .btn-cta-secondary:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: #fff;
        color: #fff;
    }

    /* Floating accents for CTA */
    .cta-floating-icon {
        position: absolute;
        z-index: 1;
        opacity: 0.2;
        animation: float-ui 6s ease-in-out infinite;
    }

    /* Comparison Section Enhanced */
    .comparison-section {
        background: #060910;
        /* Deeper dark for premium feel */
        padding: 140px 0;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .comparison-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 30%, rgba(0, 46, 142, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .comp-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 3.5rem 2.5rem;
        border-radius: 40px;
        height: 100%;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .comp-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 46, 142, 0.2) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: -1;
    }

    .comp-card:hover {
        transform: translateY(-15px);
        border-color: rgba(255, 255, 255, 0.2);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
    }

    .comp-card:hover::before {
        opacity: 1;
    }

    .comp-icon-wrap {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2.5rem;
        transition: all 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--primary-light);
    }

    .comp-card:hover .comp-icon-wrap {
        background: var(--primary);
        color: #fff;
        transform: scale(1.1) rotate(5deg);
    }

    .comp-card h3 {
        font-size: 1.75rem;
        margin-bottom: 1.25rem;
        letter-spacing: -0.5px;
    }

    .comp-card p {
        font-size: 1.05rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.6);
    }

    /* Floating UI Elements */
    .floating-ui {
        position: absolute;
        z-index: 2;
        background: white;
        padding: 15px 25px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 12px;
        animation: float-ui 4s ease-in-out infinite;
    }

    @keyframes float-ui {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    @media (max-width: 991px) {
        .products-hero-section {
            padding-top: 100px !important;
            padding-bottom: 60px !important;
            text-align: center;
        }

        .product-section {
            padding: 70px 0;
            text-align: center;
        }

        .product-title {
            font-size: clamp(2rem, 8vw, 2.8rem);
        }

        .product-desc {
            margin-left: auto;
            margin-right: auto;
            font-size: 1rem;
        }

        .hero-btns {
            justify-content: center;
        }

        .feature-grid {
            grid-template-columns: repeat(2, 1fr);
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
        }

        .product-mockup-wrap {
            margin-top: 3rem;
            max-width: 450px;
            margin-left: auto;
            margin-right: auto;
        }

        .sub-nav-container {
            gap: 0.8rem;
            padding: 0 1rem;
            overflow-x: auto;
            justify-content: flex-start;
            -webkit-overflow-scrolling: touch;
        }

        .sub-nav-link {
            font-size: 0.75rem;
            padding: 0.8rem 0;
            white-space: nowrap;
        }

        .product-stats {
            justify-content: center;
            gap: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .feature-grid {
            grid-template-columns: 1fr;
        }

        .product-title {
            font-size: 2.2rem;
        }

        .cta-premium-card {
            padding: 4rem 1.5rem;
            border-radius: 30px;
        }

        .cta-title-main {
            font-size: 2.5rem;
        }
    }

    /* New About & Values Sections */
    .about-products-section {
        padding: 100px 0;
        background: #fff;
    }

    .about-tag {
        font-weight: 800;
        color: var(--primary);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
        display: block;
        margin-bottom: 1.5rem;
    }

    .about-main-title {
        font-size: clamp(2.5rem, 5vw, 3.8rem);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 2rem;
        color: var(--dark);
    }

    .about-lead-text {
        font-size: 1.25rem;
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 2rem;
    }

    .values-section {
        padding: 100px 0;
        background: #fdfdfe;
        border-top: 1px solid rgba(0, 0, 0, 0.03);
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .value-card {
        background: #fff;
        padding: 2.5rem;
        border-radius: 30px;
        border: 1px solid rgba(0, 0, 0, 0.04);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        text-align: center;
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 46, 142, 0.08);
        border-color: var(--primary-light);
    }

    .value-icon {
        width: 60px;
        height: 60px;
        background: rgba(0, 46, 142, 0.05);
        color: var(--primary);
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }

    .value-card:hover .value-icon {
        background: var(--primary);
        color: #fff;
    }

    .value-card h4 {
        font-weight: 800;
        margin-bottom: 1rem;
        font-size: 1.25rem;
    }

    @media (max-width: 991px) {
        .values-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .values-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section -->
<section class="products-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <span class="product-badge mb-3 d-inline-block">Strategic Business Ecosystem</span>
                    <h1 class="product-title">Enterprise-Grade <span class="text-primary">Products</span> for Sustainable Growth.</h1>
                    <p class="product-desc">Empower your organization with precision-engineered digital tools. Our suite of professional solutions is designed to optimize operational workflows, mitigate risks, and accelerate your digital transformation journey.</p>
                    <div class="hero-btns mt-4 d-flex gap-3 flex-wrap">
                        <a href="contact" class="btn btn-primary px-5 py-3">Schedule a Strategy Call</a>
                        <a href="products#vessel-booking" class="btn btn-outline-dark px-5 py-3 rounded-pill border-2 fw-bold">Explore Solutions</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="hero-visual position-relative">
                    <div class="product-mockup-wrap">
                        <img src="public/images/products/enterprise_saas.png" alt="SaaS Dashboard" class="product-mockup-img">
                    </div>
                    <!-- Floating UI -->
                    <div class="floating-ui d-none d-md-flex" style="top: -20px; right: -20px;">
                        <div class="ui-icon text-success"><i class="fas fa-check-circle"></i></div>
                        <div class="ui-text fw-bold">Efficiency +45%</div>
                    </div>
                    <div class="floating-ui d-none d-md-flex" style="bottom: 40px; left: -40px; animation-delay: 2s;">
                        <div class="ui-icon text-primary"><i class="fas fa-chart-line"></i></div>
                        <div class="ui-text fw-bold">Real-time Insights</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sub-navigation for Products -->
<nav class="product-sub-nav">
    <div class="container">
        <div class="sub-nav-container">
            <a href="products#vessel-booking" class="sub-nav-link active">Vessel Booking</a>
            <a href="products#wsd-connect" class="sub-nav-link">WSD Connect</a>
            <a href="products#pagemora" class="sub-nav-link">Pagemora</a>
        </div>
    </div>
</nav>


<!-- Vessel Booking Portal Section -->
<section id="vessel-booking" class="product-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 product-info-content">
                <div class="product-branding d-flex align-items-center gap-3 mb-4">
                    <img src="public/images/logo/logo01.png" alt="Superworks Logo" style="height: 45px; width: auto; object-fit: contain;">
                    <span class="product-badge mb-0">Flagship Solution</span>
                </div>

                <h2 class="product-title">Vessel Booking <span class="text-primary">Portal</span></h2>
                <p class="product-desc">
                    The Vessel Booking Portal is a centralized logistics ecosystem designed to simplify and manage container and vessel booking processes. It provides a digital interface where freight forwarders and exporters can request, track, and manage cargo shipments with unprecedented efficiency.
                </p>

                <div class="feature-grid mb-5">
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Container Management</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Real-time Tracking</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Shipment Organization</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Carrier Coordination</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Digital Documentation</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Workflow Automation</span>
                        </div>
                    </div>
                </div>

                <div class="hero-btns d-flex gap-3 flex-wrap">
                    <a href="https://vessel-booking.bcsads.com/" target="_blank" class="btn btn-primary px-5 py-3 shadow-lg">Visit Portal <i class="fas fa-external-link-alt ms-2"></i></a>
                    <button type="button" class="btn btn-outline-dark px-5 py-3 open-inquiry-modal">Book Demo</button>
                </div>

                <div class="product-stats d-flex gap-4 mt-5">
                    <div class="p-stat-item">
                        <span class="p-stat-val">100%</span>
                        <span class="p-stat-label">Digitalized Workflow</span>
                    </div>
                    <div class="p-stat-item">
                        <span class="p-stat-val">24/7</span>
                        <span class="p-stat-label">Global Tracking</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="product-mockup-wrap">
                    <!-- Main Dashboard Image - Placeholder for User -->
                    <img src="public/images/serivepage/BCS.png" alt="Vessel Booking Dashboard" class="product-mockup-img" style="min-height: 400px;">

                    <!-- Premium Overlays -->
                    <div class="floating-ui d-none d-md-flex" style="top: 10%; right: -5%; border-left: 4px solid #002e8e;">
                        <div class="ui-icon text-primary"><i class="fas fa-ship"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Live Status</div>
                            <div class="fw-bold">Vessel in Transit</div>
                        </div>
                    </div>

                    <div class="floating-ui d-none d-md-flex" style="bottom: 15%; left: -8%; border-left: 4px solid #10b981;">
                        <div class="ui-icon text-success"><i class="fas fa-box"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Efficiency</div>
                            <div class="fw-bold">Process Optimized</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WSD Connect (World Shipping Directory) Section -->
<section id="wsd-connect" class="product-section">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 product-info-content">
                <div class="product-branding d-flex align-items-center gap-3 mb-4">
                    <img src="public/images/logo/cropped-WSD-Logo-png.webp" alt="BCS Logo" style="height: 100px; width: auto; object-fit: contain;">
                    <span class="product-badge mb-0">Own Product</span>
                </div>

                <h2 class="product-title">WSD <span class="text-primary">Connect</span></h2>
                <p class="product-desc">
                    WSD Connect (World Shipping Directory) is a global online platform developed by BCS to create a digital network for the shipping and logistics community. It streamlines how businesses discover services, build connections, and expand their reach in the maritime industry.
                </p>

                <div class="feature-grid mb-5">
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Global Shipping Directory</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Logistics Networking</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Service Showcasing</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Regional Port Focus</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Digital Maritime Network</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Strategic Connectivity</span>
                        </div>
                    </div>
                </div>

                <div class="hero-btns d-flex gap-3 flex-wrap">
                    <button type="button" class="btn btn-primary px-5 py-3 shadow-lg open-inquiry-modal">Send Inquiry <i class="fas fa-paper-plane ms-2"></i></button>
                    <a href="https://wsdconnect.com/" target="_blank" class="btn btn-outline-dark px-5 py-3">Explore Directory</a>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="product-mockup-wrap">
                    <!-- Main WSD Image -->
                    <img src="public/images/serivepage/service.png" alt="WSD Connect Platform" class="product-mockup-img" style="min-height: 400px;">

                    <!-- Premium Overlays -->
                    <div class="floating-ui d-none d-md-flex" style="top: 15%; left: -5%; border-left: 4px solid #3b82f6;">
                        <div class="ui-icon text-primary"><i class="fas fa-globe"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Global Reach</div>
                            <div class="fw-bold">World Shipping Directory</div>
                        </div>
                    </div>

                    <div class="floating-ui d-none d-md-flex" style="bottom: 10%; right: -5%; border-left: 4px solid #8b5cf6;">
                        <div class="ui-icon text-info"><i class="fas fa-anchor"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Maritime Network</div>
                            <div class="fw-bold">Trusted Providers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pagemora - Digital Flipbook Platform Section -->
<section id="pagemora" class="product-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 product-info-content">
                <div class="product-branding d-flex align-items-center gap-3 mb-4">
                    <img src="public/images/logo/pagemora-logo.webp" alt="BCS Logo" style="height: 45px; width: auto; object-fit: contain;">
                    <span class="product-badge mb-0">Own Product</span>
                </div>

                <h2 class="product-title">Pagemora <span class="text-primary">Flipbooks</span></h2>
                <p class="product-desc">
                    Pagemora is an advanced online platform that transforms static PDF documents into interactive digital flipbooks. It enables businesses to present catalogs, brochures, and magazines in a captivating page-flip format that enhances engagement across all digital platforms.
                </p>

                <div class="feature-grid mb-5">
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Interactive Page-Turn Effect</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Instant PDF Conversion</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Mobile-First Responsive Design</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Custom Branding Options</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Digital Portfolio Display</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Interactive Media Support</span>
                        </div>
                    </div>
                </div>

                <div class="hero-btns d-flex gap-3 flex-wrap">
                    <button type="button" class="btn btn-primary px-5 py-3 shadow-lg open-inquiry-modal">Send Inquiry <i class="fas fa-paper-plane ms-2"></i></button>
                    <a href="https://pagemora.com/" class="btn btn-outline-dark px-5 py-3" target="_blank">View Demo</a>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="product-mockup-wrap">
                    <!-- Main Pagemora Image - Placeholder for User -->
                    <img src="public/images/logo/flipbook.jpg" alt="Pagemora Flipbook Platform" class="product-mockup-img" style="min-height: 400px;">

                    <!-- Premium Overlays -->
                    <div class="floating-ui d-none d-md-flex" style="top: 20%; right: -5%; border-left: 4px solid #f59e0b;">
                        <div class="ui-icon text-warning"><i class="fas fa-book-open"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Interactive</div>
                            <div class="fw-bold">Real-life Page Flip</div>
                        </div>
                    </div>

                    <div class="floating-ui d-none d-md-flex" style="bottom: 15%; left: -5%; border-left: 4px solid #10b981;">
                        <div class="ui-icon text-success"><i class="fas fa-mobile-alt"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Omnichannel</div>
                            <div class="fw-bold">Web & Mobile Ready</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison / Why BCS -->


<!-- Final CTA Section -->
<section class="final-cta">
    <div class="container">
        <div class="cta-premium-card text-center">
            <!-- Decorative Background Patterns -->
            <div class="cta-floating-icon" style="top: 10%; left: 10%; font-size: 3rem;">✦</div>
            <div class="cta-floating-icon" style="bottom: 15%; right: 12%; font-size: 4rem; animation-delay: 2s;">✦</div>

            <div class="cta-content">
                <span class="product-badge mb-4" style="background: rgba(255,255,255,0.15); color: #fff; border: 1px solid rgba(255,255,255,0.2);">Scale Your Ambition</span>
                <h2 class="cta-title-main">Ready to Get <br>Started?</h2>
                <p class="cta-subtitle-main">
                    Join hundreds of forward-thinking companies that have already transformed their digital lifecycle with BCS products. Let's engineer your success.
                </p>

                <div class="cta-btn-group">
                    <a href="contact" class="btn-cta-primary">Book Your Strategy Demo</a>
                    <a href="contact" class="btn-cta-secondary">Contact Sales</a>
                </div>

                <p class="mt-5 mb-0 opacity-75 small fw-semibold text-uppercase letter-spacing-1">
                    No Credit Card Required • Flexible Enterprise Pricing • 24/7 Support
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Sub-nav Active State handling
        const subNavLinks = document.querySelectorAll('.sub-nav-link');
        const sections = document.querySelectorAll('section[id]');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            subNavLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });

        // GSAP Animations for Product Sections
        if (typeof gsap !== 'undefined') {
            gsap.utils.toArray('.product-section').forEach(section => {
                const content = section.querySelector('.product-info-content');
                const mockup = section.querySelector('.product-mockup-wrap');

                gsap.from(content, {
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%',
                        toggleActions: 'play none none reverse'
                    },
                    x: -50,
                    opacity: 0,
                    duration: 1,
                    ease: 'power3.out'
                });

                gsap.from(mockup, {
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%',
                        toggleActions: 'play none none reverse'
                    },
                    x: 50,
                    opacity: 0,
                    duration: 1,
                    ease: 'power3.out',
                    delay: 0.2
                });
            });

            // Animating Comp Cards
            gsap.from('.comp-card', {
                scrollTrigger: {
                    trigger: '.comparison-section',
                    start: 'top 80%'
                },
                y: 50,
                opacity: 0,
                stagger: 0.2,
                duration: 1,
                ease: 'power3.out'
            });
        }

    });
</script>

<?php include __DIR__ . '/partials/inquiry-modal.php'; ?>