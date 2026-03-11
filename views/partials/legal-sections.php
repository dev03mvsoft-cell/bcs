<section class="legal-content-section section-padding" id="legal-info">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="premium-badge mb-3">TRUST & COMPLIANCE</span>
                <h2 class="premium-title">Legal <span class="text-gradient">Guidelines</span></h2>
                <p class="premium-subtitle">Your privacy and security are our top priorities. Please review our official policies and terms below.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Privacy Policy Card -->
            <div class="col-md-6" id="privacy-policy">
                <div class="premium-legal-card h-100">
                    <div class="card-glass-effect"></div>
                    <div class="card-content">
                        <div class="icon-header mb-4">
                            <div class="icon-wrap bg-primary-soft">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                            <h3 class="card-title h4 fw-bold">Privacy <span class="text-gradient">Policy</span></h3>
                        </div>
                        
                        <div class="legal-text-v3 text-muted">
                            <div class="policy-item mb-4">
                                <h5 class="text-dark fw-bold mb-2">1. Information Collection</h5>
                                <p>We collect necessary data including contact details and usage patterns to provide a seamless experience.</p>
                            </div>
                            <div class="policy-item mb-4">
                                <h5 class="text-dark fw-bold mb-2">2. Data Usage</h5>
                                <p>Your information helps us improve our services and communicate effectively regarding your project status.</p>
                            </div>
                            <div class="policy-item mb-4">
                                <h5 class="text-dark fw-bold mb-2">3. Data Security</h5>
                                <p>We employ enterprise-grade encryption and security protocols to safeguard your personal data.</p>
                            </div>
                            <div class="policy-item">
                                <h5 class="text-dark fw-bold mb-2">4. Cookie Policy</h5>
                                <p>We use essential cookies to maintain session states and improve overall site performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terms of Service Card -->
            <div class="col-md-6" id="terms-of-service">
                <div class="premium-legal-card h-100 border-top-accent">
                    <div class="card-glass-effect"></div>
                    <div class="card-content">
                        <div class="icon-header mb-4">
                            <div class="icon-wrap bg-purple-soft">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                            <h3 class="card-title h4 fw-bold">Terms of <span class="text-gradient">Service</span></h3>
                        </div>
                        
                        <div class="legal-text-v3 text-muted">
                            <div class="policy-item mb-4">
                                <h5 class="text-dark fw-bold mb-2">1. Acceptance of Terms</h5>
                                <p>Your use of BCS services constitutes immediate acceptance of our standard operating terms.</p>
                            </div>
                            <div class="policy-item mb-4">
                                <h5 class="text-dark fw-bold mb-2">2. Service Scope</h5>
                                <p>Services are provided based on agreed milestones and defined project parameters in your contract.</p>
                            </div>
                            <div class="policy-item mb-4">
                                <h5 class="text-dark fw-bold mb-2">3. Intellectual Property</h5>
                                <p>All strategic assets and code remain BCS property until final settlement of project invoices.</p>
                            </div>
                            <div class="policy-item">
                                <h5 class="text-dark fw-bold mb-2">4. Liability Limitation</h5>
                                <p>BCS liability is limited to the total value of services rendered as per the active agreement.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.legal-content-section {
    position: relative;
    z-index: 10;
    background-color: #fcfdfe;
}

.premium-badge {
    display: inline-block;
    padding: 8px 16px;
    background: rgba(37, 99, 235, 0.05);
    color: var(--primary);
    border: 1px solid rgba(37, 99, 235, 0.1);
    border-radius: 100px;
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.premium-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 1rem;
    letter-spacing: -1px;
}

.premium-subtitle {
    font-family: 'Inter', sans-serif;
    font-size: 1.1rem;
    color: #64748b;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.premium-legal-card {
    position: relative;
    background: #ffffff;
    border-radius: 32px;
    padding: 3rem;
    border: 1px solid rgba(0, 0, 0, 0.04);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.03);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
}

.premium-legal-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 40px 80px rgba(15, 23, 42, 0.08);
    border-color: rgba(37, 99, 235, 0.1);
}

.border-top-accent {
    border-top: 4px solid var(--primary) !important;
}

.icon-header {
    display: flex;
    align-items: center;
    gap: 1.25rem;
}

.icon-wrap {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px;
    transition: all 0.3s ease;
}

.bg-primary-soft {
    background: rgba(37, 99, 235, 0.08);
    color: var(--primary);
}

.bg-purple-soft {
    background: rgba(139, 92, 246, 0.08);
    color: #8b5cf6;
}

.premium-legal-card:hover .icon-wrap {
    transform: scale(1.1) rotate(5deg);
}

.legal-text-v3 h5 {
    font-family: 'Outfit', sans-serif;
    font-size: 1rem;
    letter-spacing: 0.5px;
}

.legal-text-v3 p {
    font-family: 'Inter', sans-serif;
    font-size: 0.95rem;
    line-height: 1.7;
    margin-bottom: 0;
}

@media (max-width: 768px) {
    .premium-legal-card {
        padding: 2.5rem 2rem;
    }
    
    .premium-title {
        font-size: 2.2rem;
    }
}
</style>
