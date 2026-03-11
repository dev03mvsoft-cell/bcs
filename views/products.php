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

    /* Inquiry Modal Styles */
    .inquiry-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(15, 23, 42, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        z-index: 2000;
        align-items: flex-start;
        /* Better for long forms on mobile */
        justify-content: center;
        padding: 20px;
        overflow-y: auto;
        /* Enable scroll for long forms */
    }

    .modal-content-card {
        background: #fff;
        width: 100%;
        max-width: 550px;
        border-radius: 30px;
        position: relative;
        padding: 3rem;
        margin: auto;
        /* Center vertically if space allows */
        box-shadow: 0 40px 100px rgba(0, 0, 0, 0.2);
        animation: modalScale 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    @keyframes modalScale {
        from {
            transform: scale(0.9);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .modal-close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #f1f5f9;
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .modal-close-btn:hover {
        background: var(--primary);
        color: #fff;
        transform: rotate(90deg);
    }

    .inquiry-form-group {
        margin-bottom: 1.25rem;
    }

    .inquiry-label {
        display: block;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 0.5rem;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .inquiry-input {
        width: 100%;
        padding: 0.85rem 1.1rem;
        background: #f8fafc;
        border: 2px solid #f1f5f9;
        border-radius: 12px;
        color: var(--dark);
        font-weight: 500;
        transition: all 0.3s ease;
        font-size: 1rem;
    }

    .inquiry-input:focus {
        outline: none;
        border-color: var(--primary-light);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(0, 46, 142, 0.05);
    }

    .submit-inquiry-btn {
        width: 100%;
        padding: 1.1rem;
        background: var(--primary);
        color: #fff;
        border: none;
        border-radius: 15px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
        font-size: 0.95rem;
    }

    .submit-inquiry-btn:hover {
        background: var(--dark);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 576px) {
        .inquiry-modal {
            padding: 15px;
        }

        .modal-content-card {
            padding: 2.5rem 1.5rem 2rem;
            border-radius: 20px;
        }

        .modal-header-text h3 {
            font-size: 1.5rem;
        }

        .modal-close-btn {
            top: 15px;
            right: 15px;
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
                        <a href="#saas" class="btn btn-outline-dark px-5 py-3 rounded-pill border-2 fw-bold">Explore Solutions</a>
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


<!-- Vessel Booking Portal Section -->
<section id="vessel-booking" class="product-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 product-info-content">
                <div class="product-branding d-flex align-items-center gap-3 mb-4">
                    <img src="/public/images/logo/logo01.png" alt="Superworks Logo" style="height: 45px; width: auto; object-fit: contain;">
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
                    <img src="/public/images/serivepage/BCS.png" alt="Vessel Booking Dashboard" class="product-mockup-img" style="min-height: 400px;">

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

<!-- HRMS & Workforce Management Section -->
<section id="hrms-solutions" class="product-section">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 product-info-content">
                <div class="product-branding d-flex align-items-center gap-3 mb-4">
                    <img src="public/images/logo/superworks-logo.webp" alt="Superworks Logo" style="height: 45px; width: auto; object-fit: contain;">
                    <span class="product-badge mb-0">Strategic Partnership</span>
                </div>

                <h2 class="product-title">HR & Workforce <span class="text-primary">Management</span></h2>
                <p class="product-desc">
                    We provide modern HR and workforce management solutions specifically tailored for businesses across Kutch, Gujarat. Through our strategic partnership with Superworks, we deliver advanced HRMS technology to help organizations streamline and digitize their entire HR lifecycle.
                </p>

                <div class="feature-grid mb-5">
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Employee Management</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Payroll Processing</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Attendance Tracking</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Recruitment Tools</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">Team Collaboration</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-check"><i class="fas fa-check"></i></div>
                        <div class="feature-content">
                            <span class="feature-text text-dark">SME Optimized</span>
                        </div>
                    </div>
                </div>

                <div class="hero-btns d-flex gap-3 flex-wrap">
                    <button type="button" class="btn btn-primary px-5 py-3 shadow-lg open-inquiry-modal">Send Inquiry <i class="fas fa-paper-plane ms-2"></i></button>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="product-mockup-wrap">
                    <!-- Main HRMS Image - Placeholder for User -->
                    <img src="/public/images/serivepage/service.png" alt="HRMS & Workforce Dashboard" class="product-mockup-img" style="min-height: 400px;">

                    <!-- Premium Overlays -->
                    <div class="floating-ui d-none d-md-flex" style="top: 15%; left: -5%; border-left: 4px solid #3b82f6;">
                        <div class="ui-icon text-primary"><i class="fas fa-users"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Workforce</div>
                            <div class="fw-bold">Seamless Tracking</div>
                        </div>
                    </div>

                    <div class="floating-ui d-none d-md-flex" style="bottom: 10%; right: -5%; border-left: 4px solid #8b5cf6;">
                        <div class="ui-icon text-info"><i class="fas fa-file-invoice-dollar"></i></div>
                        <div class="ui-text">
                            <div class="small opacity-75">Payroll</div>
                            <div class="fw-bold">Auto-Processing</div>
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

        // Inquiry Modal Logic
        const inquiryModal = document.getElementById('inquiryModal');
        const openModalBtns = document.querySelectorAll('.open-inquiry-modal');
        const closeModalBtn = document.getElementById('closeInquiryModal');

        if (inquiryModal && openModalBtns.length > 0) {
            openModalBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    inquiryModal.style.display = 'flex';
                    document.body.style.overflow = 'hidden'; // Prevent scroll
                });
            });

            closeModalBtn.addEventListener('click', () => {
                inquiryModal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Restore scroll
            });

            window.addEventListener('click', (e) => {
                if (e.target === inquiryModal) {
                    inquiryModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        }
    });
</script>

<!-- reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js?render=YOUR_RECAPTCHA_SITE_KEY"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // ... (rest of the script)
        // Updating productInquiryForm submit logic to handle reCAPTCHA
        const inquiryForm = document.getElementById('productInquiryForm');
        if (inquiryForm) {
            inquiryForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = inquiryForm.querySelector('.submit-inquiry-btn');
                const originalText = submitBtn.innerHTML;

                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing...';
                submitBtn.disabled = true;

                grecaptcha.ready(function() {
                    grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: 'product_inquiry'}).then(function(token) {
                        document.getElementById('recaptcha_token_product').value = token;
                        inquiryForm.submit();
                    });
                });
            });
        }

        // Only keep modal open on error (so user can fix details)
        <?php if (isset($_SESSION['form_error'])): ?>
            const inquiryModal = document.getElementById('inquiryModal');
            if (inquiryModal) {
                inquiryModal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
        <?php endif; ?>
    });
</script>

<!-- Inquiry Modal Structure -->
<div class="inquiry-modal" id="inquiryModal">
    <div class="modal-content-card">
        <button class="modal-close-btn" id="closeInquiryModal">
            <i class="fas fa-times"></i>
        </button>

        <div class="modal-header-text mb-4 text-center">
            <h3 class="fw-bold text-dark mb-2">Product Inquiry</h3>
            <p class="text-muted small">Please provide your details and we'll reach out to you.</p>
        </div>

        <?php if (isset($_SESSION['form_success'])): ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: <?php echo json_encode($_SESSION['form_success']); ?>,
                        timer: 3000,
                        showConfirmButton: false
                    });
                });
            </script>
            <?php unset($_SESSION['form_success']); ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['form_error'])): ?>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: <?php echo json_encode($_SESSION['form_error']); ?>
                    });
                });
            </script>
            <?php unset($_SESSION['form_error']); ?>
        <?php endif; ?>
        <form id="productInquiryForm" action="forms-handler/handler.php" method="POST">
            <input type="hidden" name="form_type" value="product_inquiry">
            <input type="hidden" name="recaptcha_token" id="recaptcha_token_product">

            <!-- Honeypot -->
            <div style="display:none;">
                <input type="text" name="website_hp">
            </div>

            <div class="inquiry-form-group">
                <label class="inquiry-label">Full Name</label>
                <input type="text" name="name" class="inquiry-input" placeholder="e.g. John Doe" required>
            </div>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Work Email</label>
                <input type="email" name="email" class="inquiry-input" placeholder="e.g. john@company.com" required>
            </div>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Company Name</label>
                <input type="text" name="company" class="inquiry-input" placeholder="e.g. Acme Corp" required>
            </div>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Total Employees</label>
                <input type="number" name="employees" class="inquiry-input" placeholder="e.g. 50" required>
            </div>
            <div class="inquiry-form-group">
                <label class="inquiry-label">Tell Us the Problem</label>
                <textarea name="problem" class="inquiry-input" rows="4" placeholder="Describe the challenges you're facing..." required></textarea>
            </div>
            <button type="submit" class="submit-inquiry-btn">Submit Inquiry</button>
        </form>
    </div>
</div>