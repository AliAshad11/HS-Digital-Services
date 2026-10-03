<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Billing Services | HS Digital Services</title>
    <!--Essential css files-->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <style>
        /* ============================================ */
        /* MEDICAL BILLING PAGE - ORIGINAL COLOR PALETTE */
        /* Colors: #CCFF00 (accent), #CCDEFF (muted), #031320 (dark bg) */
        /* Professional, minimal, fully readable, no header/footer leak */
        /* ============================================ */
        
        :root {
            --mb-accent: #CCFF00;
            --mb-muted: #CCDEFF;
            --mb-bg-dark: #031320;
            --mb-card-bg: rgba(255,255,255,0.04);
            --mb-text-light: #E8F3FF;
            --mb-text-secondary: #B8D4F0;
        }
        
        /* Wrapper to isolate page styles from header/footer */
        .medical-billing-wrapper {
            background: var(--mb-bg-dark);
            color: var(--mb-text-light);
        }
        
        /* ========== HERO SECTION ========== */
        .mb-hero {
            padding: 70px 0 60px;
            background: var(--mb-bg-dark);
            position: relative;
        }
        .mb-hero .container {
            position: relative;
            z-index: 2;
        }
        .mb-hero-row {
            display: flex;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
        }
        .mb-hero-content {
            flex: 1;
            min-width: 280px;
        }
        .mb-badge {
            display: inline-block;
            background: rgba(204, 255, 0, 0.12);
            color: var(--mb-accent);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 40px;
            letter-spacing: 0.8px;
            margin-bottom: 24px;
            text-transform: uppercase;
        }
        .mb-hero h1 {
            font-size: 3.2rem;
            font-weight: 700;
            color: var(--mb-muted);
            line-height: 1.2;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
        }
        .mb-hero .hero-lead {
            font-size: 1.1rem;
            color: var(--mb-text-secondary);
            line-height: 1.55;
            margin-bottom: 32px;
            max-width: 580px;
        }
        .mb-hero-buttons {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
        }
        .btn-mb-primary {
            background: var(--mb-accent);
            color: #031320 !important;
            padding: 12px 30px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 0.9rem;
            transition: all 0.25s ease;
            display: inline-block;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
        }
        .btn-mb-primary:hover {
            background: #d4ff33;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(204, 255, 0, 0.2);
            color: #031320;
        }
        .btn-mb-outline {
            background: transparent;
            border: 1.5px solid rgba(204, 222, 255, 0.35);
            color: var(--mb-muted) !important;
            padding: 12px 30px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.25s ease;
            display: inline-block;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-mb-outline:hover {
            border-color: var(--mb-accent);
            color: var(--mb-accent) !important;
            background: rgba(204, 255, 0, 0.05);
        }
        .mb-hero-image {
            flex: 1;
            text-align: center;
        }
        .mb-hero-image img {
            max-width: 100%;
            border-radius: 20px;
            filter: drop-shadow(0 15px 30px rgba(0,0,0,0.4));
        }
        
        /* ========== SECTION HEADERS ========== */
        .mb-section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--mb-muted);
            margin-bottom: 16px;
            letter-spacing: -0.01em;
        }
        .mb-section-subtitle {
            font-size: 1rem;
            color: var(--mb-text-secondary);
            max-width: 680px;
            margin-bottom: 48px;
            line-height: 1.5;
        }
        
        /* ========== KEY BENEFITS CARDS ========== */
        .mb-benefits-section {
            padding: 70px 0;
            background: var(--mb-bg-dark);
            border-top: 1px solid rgba(204, 222, 255, 0.06);
        }
        .benefit-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(2px);
            padding: 28px 24px;
            border-radius: 20px;
            transition: all 0.25s ease;
            height: 100%;
            border: 1px solid rgba(204, 222, 255, 0.08);
        }
        .benefit-card:hover {
            border-color: rgba(204, 255, 0, 0.25);
            transform: translateY(-4px);
            background: rgba(255, 255, 255, 0.05);
        }
        .benefit-icon {
            font-size: 2.2rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        .benefit-card h3 {
            font-size: 1.35rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--mb-muted);
        }
        .benefit-card p {
            color: var(--mb-text-secondary);
            line-height: 1.5;
            font-size: 0.93rem;
        }
        
        /* ========== STATS / METRICS ========== */
        .mb-stats {
            background: rgba(0, 0, 0, 0.2);
            padding: 55px 0;
            border-top: 1px solid rgba(204, 222, 255, 0.05);
            border-bottom: 1px solid rgba(204, 222, 255, 0.05);
        }
        .stat-item {
            text-align: center;
        }
        .stat-number {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--mb-accent);
            margin-bottom: 8px;
            letter-spacing: -0.02em;
        }
        .stat-label {
            color: var(--mb-muted);
            font-weight: 500;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* ========== DETAILED SERVICES SECTION ========== */
        .mb-service-detail {
            padding: 70px 0;
            background: var(--mb-bg-dark);
        }
        .service-feature-list {
            list-style: none;
            padding: 0;
        }
        .service-feature-list li {
            padding: 12px 0 12px 28px;
            position: relative;
            border-bottom: 1px solid rgba(204, 222, 255, 0.08);
            color: var(--mb-text-secondary);
        }
        .service-feature-list li:last-child {
            border-bottom: none;
        }
        .service-feature-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--mb-accent);
            font-weight: 700;
        }
        .detail-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(204, 222, 255, 0.08);
            border-radius: 20px;
            padding: 24px;
            margin-bottom: 20px;
            transition: 0.2s;
        }
        .detail-card h3 {
            color: var(--mb-muted);
            font-size: 1.25rem;
            margin-bottom: 12px;
        }
        .detail-card p {
            color: var(--mb-text-secondary);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        /* ========== PROCESS STEPS ========== */
        .mb-process-section {
            padding: 70px 0;
            background: rgba(0, 0, 0, 0.15);
            border-top: 1px solid rgba(204, 222, 255, 0.05);
        }
        .process-step {
            text-align: center;
            padding: 20px 16px;
        }
        .step-number {
            width: 56px;
            height: 56px;
            background: rgba(204, 255, 0, 0.1);
            color: var(--mb-accent);
            font-size: 1.6rem;
            font-weight: 700;
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border: 1px solid rgba(204, 255, 0, 0.25);
        }
        .process-step h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--mb-muted);
        }
        .process-step p {
            color: var(--mb-text-secondary);
            font-size: 0.88rem;
            line-height: 1.5;
        }
        
        /* ========== INFO CARDS (TRUST + COMPLIANCE) ========== */
        .info-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            padding: 32px;
            border: 1px solid rgba(204, 222, 255, 0.08);
            height: 100%;
        }
        .info-card h3 {
            font-size: 1.4rem;
            color: var(--mb-muted);
            margin-bottom: 16px;
        }
        .info-card p {
            color: var(--mb-text-secondary);
            line-height: 1.55;
        }
        
        /* ========== FAQ SECTION ========== */
        .mb-faq-section {
            padding: 70px 0;
            background: var(--mb-bg-dark);
        }
        .faq-item {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 18px;
            margin-bottom: 18px;
            padding: 22px 28px;
            border: 1px solid rgba(204, 222, 255, 0.08);
            transition: 0.2s;
        }
        .faq-item:hover {
            border-color: rgba(204, 255, 0, 0.2);
        }
        .faq-question {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--mb-muted);
            margin-bottom: 10px;
        }
        .faq-answer {
            color: var(--mb-text-secondary);
            line-height: 1.55;
            font-size: 0.93rem;
        }
        
        /* ========== CTA SECTION ========== */
        .mb-cta-section {
            background: linear-gradient(135deg, #06212e 0%, #031320 100%);
            padding: 60px 0;
            text-align: center;
            border-top: 1px solid rgba(204, 255, 0, 0.15);
        }
        .mb-cta-section h3 {
            font-size: 1.9rem;
            font-weight: 700;
            color: var(--mb-muted);
            margin-bottom: 16px;
        }
        .mb-cta-section p {
            color: var(--mb-text-secondary);
            margin-bottom: 28px;
        }
        .btn-mb-white {
            background: var(--mb-accent);
            color: #031320 !important;
            padding: 14px 38px;
            border-radius: 50px;
            font-weight: 700;
            display: inline-block;
            text-decoration: none;
            transition: 0.2s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-mb-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(204, 255, 0, 0.25);
            background: #d4ff33;
            color: #031320;
        }
        
        /* ========== RESPONSIVE ========== */
        @media (max-width: 991px) {
            .mb-hero-row { flex-direction: column-reverse; text-align: center; }
            .mb-hero-content { text-align: center; }
            .hero-lead { margin-left: auto; margin-right: auto; }
            .mb-hero-buttons { justify-content: center; }
            .mb-hero h1 { font-size: 2.5rem; }
            .mb-section-title { font-size: 1.8rem; text-align: center; }
            .mb-section-subtitle { text-align: center; margin-left: auto; margin-right: auto; }
        }
        @media (max-width: 768px) {
            .mb-hero { padding: 50px 0; }
            .stat-number { font-size: 2.2rem; }
            .process-step { margin-bottom: 20px; }
            .faq-item { padding: 18px 20px; }
        }
        @media (max-width: 576px) {
            .mb-hero-buttons { flex-direction: column; align-items: center; gap: 12px; }
            .btn-mb-primary, .btn-mb-outline { width: 80%; text-align: center; }
        }
        
        /* Ensure header/footer remain completely untouched */
        header, footer, .navbar, .footer-area, .top-header, .main-header {
            background: inherit;
        }
        body {
            background: var(--mb-bg-dark);
        }
        /* Fix any potential global link color overrides */
        .medical-billing-wrapper a:not(.btn-mb-primary):not(.btn-mb-outline):not(.btn-mb-white) {
            color: var(--mb-accent);
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="medical-billing-wrapper">
        <!-- HERO SECTION - fixed text visibility -->
        <section class="mb-hero">
            <div class="container">
                <div class="mb-hero-row">
                    <div class="mb-hero-content">
                        <span class="mb-badge">REVENUE CYCLE MANAGEMENT</span>
                        <h1>Medical Billing & Revenue Cycle Management</h1>
                        <p class="hero-lead">Accurate claims processing, faster reimbursements, and reduced denials — powered by secure, HIPAA-aware workflows and experienced billing teams.</p>
                        <div class="mb-hero-buttons">
                            <a href="quotes.php" class="btn-mb-primary">Get a Custom Quote</a>
                            <a href="#services-core" class="btn-mb-outline">Our Services</a>
                        </div>
                    </div>
                    <div class="mb-hero-image">
                        <img src="assets/images/hero/pepole.webp" alt="Medical Billing Team">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- KEY BENEFITS SECTION -->
        <section class="mb-benefits-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-section-title">Key Benefits</h2>
                    <center><p class="mb-section-subtitle">Our Medical Billing service focuses on accuracy, speed, and transparency. We reduce denials, accelerate cash flow, and provide clear, actionable reporting.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-icon">📊</div>
                            <h3>Transparent Reporting</h3>
                            <p>Weekly and monthly dashboards with actionable KPIs. Track your revenue cycle in real time.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-icon">🔒</div>
                            <h3>Secure Handling</h3>
                            <p>HIPAA-compliant systems and BAAs for all clients. Your data is encrypted and access-controlled.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-icon">⚡</div>
                            <h3>Faster Cashflow</h3>
                            <p>Optimized claim submission and payer follow-up to shorten reimbursement cycles significantly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-icon">👥</div>
                            <h3>Dedicated Support</h3>
                            <p>US-hour overlap teams and designated account managers for personalized service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- STATS SECTION -->
        <section class="mb-stats">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Clean Claim Rate</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-number">45%</div>
                            <div class="stat-label">Average AR Reduction (90 days)</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-number">72 hrs</div>
                            <div class="stat-label">First-Pass Resolution Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- DETAILED SERVICES (Why Choose) -->
        <section id="services-core" class="mb-service-detail">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h2 class="mb-section-title">Why Choose Our Medical Billing</h2>
                        <p style="color: var(--mb-text-secondary); margin-bottom: 24px;">We combine domain expertise with proven processes to maximize cash collections and minimize administrative overhead. Our teams use strict quality controls and modern billing platforms to reduce denials and streamline appeals.</p>
                        <ul class="service-feature-list">
                            <li>End-to-end claim submission and follow-up</li>
                            <li>Denial management & appeals with root-cause analysis</li>
                            <li>Eligibility & benefits verification prior to service</li>
                            <li>AR aging reduction and reporting dashboards</li>
                            <li>HIPAA-compliant workflows & secure data handling</li>
                            <li>Credentialing & contract optimization</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="detail-card">
                            <h3>💰 Maximized Reimbursements</h3>
                            <p>Automated charge capture and coding audits to ensure no revenue is left behind.</p>
                        </div>
                        <div class="detail-card">
                            <h3>📉 Reduced Denials</h3>
                            <p>Proactive edits and payer-specific rules lower denial rates and improve cash flow.</p>
                        </div>
                        <div class="detail-card">
                            <h3>🔄 Revenue Integrity</h3>
                            <p>Ongoing reconciliation between clinical documentation and billing claims ensures compliance and accuracy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- PROCESS STEPS -->
        <section class="mb-process-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-section-title">Our Medical Billing Process</h2>
                 <center>   <p class="mb-section-subtitle">A streamlined approach that maximizes efficiency from intake to final reimbursement.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 process-step">
                        <div class="step-number">1</div>
                        <h4>Onboarding & Intake</h4>
                        <p>Secure data transfer and EHR integration with an initial audit to baseline AR.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 process-step">
                        <div class="step-number">2</div>
                        <h4>Claims Preparation</h4>
                        <p>Coding review, chargemaster checks and clean-claim optimizations.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 process-step">
                        <div class="step-number">3</div>
                        <h4>Submission & Follow-up</h4>
                        <p>Timed submissions, payer follow-up and aging management.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 process-step">
                        <div class="step-number">4</div>
                        <h4>Denial & Appeal</h4>
                        <p>Fast denial triage with evidence-backed appeals to recover revenue.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- TRUST & COMPLIANCE CARDS -->
        <section style="padding: 60px 0; background: var(--mb-bg-dark);">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-card">
                            <h3>Why healthcare providers trust us</h3>
                            <p>Our dedicated medical billing specialists average 10+ years of experience across multi-specialty practices, from primary care to surgical centers. We maintain a 99% client retention rate by focusing on measurable results.</p>
                            <ul class="service-feature-list" style="margin-top: 20px;">
                                <li>Specialty-specific coding expertise</li>
                                <li>Direct integration with 50+ EHR platforms</li>
                                <li>Monthly revenue analysis meetings</li>
                                <li>Transparent pricing: no long-term contracts</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <h3>Compliance & Security</h3>
                            <p>Full HIPAA compliance, encrypted data transfer protocols. We sign Business Associate Agreements (BAAs) with every client to ensure legal and regulatory protection.</p>
                            <div style="margin-top: 28px;">
                                <a href="quotes.php" class="btn-mb-outline" style="border-color: var(--mb-accent); color: var(--mb-accent);">Request Compliance Overview →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ SECTION -->
        <section class="mb-faq-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-section-title">Frequently Asked Questions</h2>
                   <center> <p class="mb-section-subtitle">Answers to common questions about our medical billing services.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item">
                            <div class="faq-question">How do you ensure HIPAA compliance?</div>
                            <div class="faq-answer">We operate under strict policies, encrypted data transfers, role-based access, and regular audits. Business associate agreements (BAAs) are standard with every client engagement. All team members undergo annual HIPAA training.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Which EHRs and billing platforms do you support?</div>
                            <div class="faq-answer">We integrate with major EHRs including Epic, Cerner, NextGen, Athenahealth, eClinicalWorks, and many others. During onboarding we map your workflows and connectors for a smooth integration.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Can you handle denials and appeals?</div>
                            <div class="faq-answer">Yes — we provide denial triage, root-cause analysis, and evidence-backed appeals to recover revenue. Our denial management team works directly with payers to resolve underpayments and rejections efficiently.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">What types of practices do you work with?</div>
                            <div class="faq-answer">We support a wide range: primary care, multi-specialty groups, surgical centers, mental health, urgent care, and physical therapy. Our scalable model works for small clinics as well as large hospital systems.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FINAL CTA -->
        <section class="mb-cta-section">
            <div class="container">
                <h3>Ready to optimize your revenue cycle?</h3>
                <p>Get a free billing audit and see how much revenue you can recover.</p>
                <a href="quotes.php" class="btn-mb-white">Request a Quote →</a>
            </div>
        </section>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // Hamburger fix for service pages
        // Uses .mobile-menu-active class (defined in header.css: left: 0)
        $(document).ready(function () {
            // Open menu
            $('.menu-bar-btn').off('click').on('click', function () {
                $('.nft-mobile-menu-1').addClass('mobile-menu-active');
            });
            // Close menu via X button
            $('.nft-mobile-menu-1 .close-menu').off('click').on('click', function () {
                $('.nft-mobile-menu-1').removeClass('mobile-menu-active');
            });
            // Mobile submenu toggle
            $('.nft-mobile-menu-1 .has-submenu > a').off('click').on('click', function (e) {
                e.preventDefault();
                $(this).next('.submenu-wrapper').slideToggle(250);
            });
        });
    </script>
</body>
</html>