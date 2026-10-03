<?php
// customer-support.php
// Customer Support Page - HS Digital Services
// Clean, professional design with SVG icons, lighter gradients, refined shadows
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Support | HS Digital Services</title>
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
        /* CUSTOMER SUPPORT PAGE - REFINED STYLE        */
        /* Colors: #CCFF00 (accent), #CCDEFF (muted)    */
        /* Lighter gradients, SVG icons, no heavy shadows */
        /* ============================================ */
        
        :root {
            --cs-accent: #CCFF00;
            --cs-accent-dark: #b3e600;
            --cs-muted: #CCDEFF;
            --cs-bg-light: #0f1726;
            --cs-bg-dark: #050a14;
            --cs-card-bg: rgba(7, 18, 32, 0.82);
            --cs-text-primary: #f8fbff;
            --cs-text-secondary: #b8d4ff;
            --cs-text-light: #d4e5ff;
            --cs-border: rgba(204, 255, 0, 0.18);
            --cs-border-light: rgba(204, 222, 255, 0.1);
        }
        
        body {
            background: var(--cs-bg-dark);
        }
        
        /* Wrapper */
        .customer-support-wrapper {
            background: transparent;
            color: var(--cs-text-primary);
        }
        
        /* ========== SVG ICON STYLES ========== */
        .cs-icon {
            width: 48px;
            height: 48px;
            margin-bottom: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .cs-icon svg {
            width: 100%;
            height: 100%;
        }
        
        /* ========== HERO SECTION ========== */
        .cs-hero {
            padding: 80px 0 60px;
            background: linear-gradient(135deg, rgba(5, 10, 20, 0.96), rgba(12, 20, 38, 0.98));
            position: relative;
            overflow: hidden;
            border-radius: 30px;
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 28px 80px rgba(0,0,0,0.35);
        }
        .cs-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 55%;
            height: 100%;
            background: radial-gradient(circle at 70% 30%, rgba(204, 255, 0, 0.14) 0%, transparent 65%);
            pointer-events: none;
        }
        .cs-hero-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
            text-align: center;
            max-width: 1180px;
            margin: 0 auto;
        }
        .cs-hero-content {
            flex: 1;
            min-width: 280px;
            max-width: 720px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .cs-hero h1 {
            max-width: 760px;
            margin: 0 auto 20px;
        }
        .cs-hero .hero-lead {
            margin: 0 auto 30px;
        }
        .cs-hero-buttons {
            justify-content: center;
        }
        .cs-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .cs-hero-image img {
            width: 100%;
            max-width: 500px;
            border-radius: 28px;
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.1);
            object-fit: cover;
        }
        .cs-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(204,255,0,0.98), rgba(170,230,0,0.92));
            color: #0f1726;
            font-size: 0.86rem;
            font-weight: 800;
            padding: 12px 28px;
            border-radius: 999px;
            letter-spacing: 0.8px;
            margin-bottom: 28px;
            text-transform: uppercase;
            box-shadow: 0 18px 45px rgba(204,255,0,0.24);
            min-height: 44px;
            line-height: 1;
            border: 1px solid rgba(255,255,255,0.12);
        }
        .cs-hero h1 {
            font-size: 3.2rem;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.1;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
        }
        .cs-hero .hero-lead {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.75);
            line-height: 1.7;
            margin-bottom: 32px;
            max-width: 560px;
        }
        .cs-hero-buttons {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
        }
        .btn-cs-primary {
            background: var(--cs-accent);
            color: #1a2a3a !important;
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .btn-cs-primary:hover {
            background: #b8e600;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(204, 255, 0, 0.25);
            color: #1a2a3a;
        }
        .btn-cs-outline {
            background: transparent;
            border: 1.5px solid rgba(255,255,255,0.15);
            color: #ffffff !important;
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
        .btn-cs-outline:hover {
            border-color: var(--cs-accent);
            color: #000000 !important;
            background: #CCDEFF;
        }
        .cs-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .cs-hero-image img {
            width: 100%;
            max-width: 520px;
            height: auto;
            border-radius: 28px;
            box-shadow: 0 24px 55px rgba(0,0,0,0.25);
            object-fit: cover;
            border: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,255,255,0.02);
        }
        
        .cs-detail-section {
            padding: 50px 0 60px;
            background: transparent;
        }
        .cs-detail-card {
            background: rgba(10, 18, 32, 0.9);
            border-radius: 24px;
            padding: 28px 24px;
            border: 1px solid rgba(204,255,0,0.12);
            box-shadow: 0 16px 38px rgba(0,0,0,0.18);
            transition: transform 0.25s ease, border-color 0.25s ease;
            height: 100%;
        }
        .cs-detail-card:hover {
            transform: translateY(-6px);
            border-color: rgba(204,255,0,0.28);
        }
        .cs-detail-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-top: 18px;
            margin-bottom: 12px;
            color: var(--cs-text-primary);
        }
        .cs-detail-card p {
            color: rgba(255,255,255,0.76);
            line-height: 1.65;
            margin-bottom: 0;
        }
        .cs-detail-card .detail-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            min-width: 56px;
            border-radius: 18px;
            background: rgba(204,255,0,0.22);
            color: #0a1725;
            margin-bottom: 18px;
            font-size: 1.05rem;
            font-weight: 900;
            letter-spacing: 0.8px;
            box-shadow: inset 0 0 12px rgba(0,0,0,0.08);
            border: 1px solid rgba(204,255,0,0.35);
        }
        .cs-stat-section {
            padding: 50px 0 60px;
            background: transparent;
        }
        .stat-card {
            background: rgba(11, 20, 38, 0.9);
            border-radius: 24px;
            padding: 28px 24px;
            border: 1px solid rgba(204,255,0,0.12);
            box-shadow: 0 18px 45px rgba(0,0,0,0.22);
            text-align: center;
            transition: transform 0.25s ease, border-color 0.25s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(204,255,0,0.28);
        }
        .stat-card .stat-number {
            font-size: 2.65rem;
            font-weight: 800;
            color: var(--cs-accent);
            margin-bottom: 18px;
            line-height: 1;
        }
        .stat-card h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--cs-text-primary);
            margin-bottom: 10px;
        }
        .stat-card p {
            color: rgba(255,255,255,0.72);
            line-height: 1.7;
            margin-bottom: 0;
        }
        
        /* ========== SECTION HEADERS ========== */
        .cs-section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--cs-text-primary);
            margin-bottom: 16px;
            letter-spacing: -0.01em;
            text-align: center;
        }
        .cs-section-subtitle {
            font-size: 1rem;
            color: var(--cs-text-secondary);
            max-width: 680px;
            margin: 0 auto 48px;
            line-height: 1.5;
            text-align: center;
        }
        
        /* ========== SUPPORT CHANNELS ========== */
        .cs-channels-section {
            padding: 70px 0;
            background: transparent;
        }
        .channel-card {
            background: rgba(8, 18, 32, 0.92);
            padding: 32px 28px;
            border-radius: 24px;
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(204,255,0,0.14);
            text-align: center;
            box-shadow: 0 24px 50px rgba(0,0,0,0.24);
        }
        .channel-card:hover {
            border-color: var(--cs-accent);
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -12px rgba(0,0,0,0.1);
        }
        .channel-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .channel-detail {
            color: var(--cs-accent);
            font-weight: 700;
            font-size: 1.1rem;
            margin: 16px 0 8px;
        }
        .channel-card p {
            color: rgba(255,255,255,0.72);
            line-height: 1.6;
            font-size: 0.95rem;
            margin-bottom: 16px;
        }
        .channel-hours {
            font-size: 0.85rem;
            color: var(--cs-text-secondary);
            opacity: 0.8;
            margin-top: 12px;
        }
        
        /* ========== FEATURES GRID ========== */
        .cs-features-section {
            padding: 70px 0;
            background: transparent;
        }
        .feature-item {
            background: rgba(8, 18, 32, 0.88);
            padding: 30px 26px;
            border-radius: 20px;
            border: 1px solid rgba(204,255,0,0.14);
            height: 100%;
            transition: 0.25s;
            box-shadow: 0 18px 40px rgba(0,0,0,0.2);
        }
        .feature-item:hover {
            border-color: rgba(204, 255, 0, 0.4);
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }
        .feature-item h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 16px 0 10px;
            color: var(--cs-text-primary);
        }
        .feature-item p {
            color: rgba(255,255,255,0.72);
            line-height: 1.65;
            font-size: 0.95rem;
        }
        
        /* ========== FAQ ========== */
        .cs-faq-section {
            padding: 70px 0;
            background: transparent;
        }
        .faq-item {
            background: rgba(8, 18, 32, 0.9);
            border-radius: 18px;
            margin-bottom: 18px;
            padding: 22px 28px;
            border: 1px solid rgba(204,255,0,0.12);
            transition: 0.2s;
        }
        .faq-item:hover {
            border-color: rgba(204, 255, 0, 0.4);
            background: rgba(11, 23, 45, 0.95);
        }
        .faq-question {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--cs-text-primary);
            margin-bottom: 10px;
        }
        .faq-question {
            cursor: pointer;
            position: relative;
            padding-right: 30px;
            transition: color 0.2s ease;
        }
        .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            top: 0;
            color: var(--cs-accent);
            font-weight: 700;
        }
        .faq-item.active .faq-question {
            color: var(--cs-accent);
        }
        .faq-item.active .faq-question::after {
            content: '-';
        }
        .faq-answer {
            display: none;
            color: rgba(255,255,255,0.78);
            line-height: 1.7;
            font-size: 0.95rem;
            padding-top: 14px;
        }
        
        /* ========== CONTACT FORM ========== */
        .cs-contact-section {
            padding: 70px 0;
            background: transparent;
        }
        .contact-form-card {
            background: rgba(11, 20, 38, 0.95);
            border-radius: 28px;
            padding: 44px;
            border: 1px solid rgba(204,255,0,0.14);
            box-shadow: 0 28px 70px rgba(0,0,0,0.32);
        }
        .form-group {
            margin-bottom: 24px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #f8fbff;
            font-size: 0.85rem;
        }
        .form-control-cs {
            width: 100%;
            padding: 14px 18px;
            background: rgba(7, 18, 32, 0.9);
            border: 1px solid rgba(204,255,0,0.14);
            border-radius: 14px;
            color: #f8fbff;
            font-size: 0.95rem;
            transition: all 0.2s;
        }
        .form-control-cs:focus {
            outline: none;
            border-color: var(--cs-accent);
            background: rgba(255,255,255,0.08);
            box-shadow: 0 0 0 3px rgba(204, 255, 0, 0.18);
        }
        textarea.form-control-cs {
            resize: vertical;
            min-height: 120px;
        }
        .btn-cs-submit {
            background: var(--cs-accent);
            color: #1a2a3a;
            padding: 14px 38px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
            transition: 0.2s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 18px 40px rgba(204,255,0,0.25);
        }
        .btn-cs-submit:hover {
            background: #b8e600;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(204, 255, 0, 0.3);
        }
        
        /* ========== EMERGENCY BAR ========== */
        .cs-emergency {
            padding: 40px 0;
            background: rgba(8, 18, 32, 0.9);
            border-top: 1px solid rgba(204,255,0,0.14);
        }
        
        /* ========== RESPONSIVE ========== */
        @media (max-width: 991px) {
            .cs-hero-row { flex-direction: column-reverse; text-align: center; }
            .cs-hero-content { text-align: center; }
            .hero-lead { margin-left: auto; margin-right: auto; }
            .cs-hero-buttons { justify-content: center; }
            .cs-hero h1 { font-size: 2.5rem; }
            .cs-section-title { font-size: 1.8rem; text-align: center; }
            .cs-section-subtitle { text-align: center; margin-left: auto; margin-right: auto; }
            .contact-form-card { padding: 28px; }
        }
        @media (max-width: 768px) {
            .cs-hero { padding: 40px 0; }
        }
        @media (max-width: 576px) {
            .cs-hero-buttons { flex-direction: column; align-items: center; gap: 12px; }
            .btn-cs-primary, .btn-cs-outline { width: 80%; text-align: center; }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="customer-support-wrapper">
        <!-- HERO SECTION - different image, lighter style -->
        <section class="cs-hero">
            <div class="container">
                <div class="cs-hero-row">
                    <div class="cs-hero-content">
                        <span class="cs-badge">24/7 ASSISTANCE</span>
                        <h1>Customer Support</h1>
                        <p class="hero-lead">Dedicated support teams ready to assist you with technical issues, billing inquiries, and account management — every step of the way.</p>
                        <div class="cs-hero-buttons">
                            <a href="contact.php" class="btn-cs-primary">Contact Support</a>
                            <a href="#support-faq" class="btn-cs-outline">FAQ</a>
                        </div>
                    </div>
                    <div class="cs-hero-image">
                        <img src="assets/images/banner/home-2-hero-slider.webp" alt="Customer Support Team" style="width:100%; max-width:560px; object-fit:cover; background: transparent;">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SERVICE DETAILS -->
        <section class="cs-detail-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="cs-section-title">Support Designed for Healthcare Operations</h2>
                    <p class="cs-section-subtitle">Our support experience is built for healthcare providers and billing teams who demand clarity, speed, and security.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="cs-detail-card">
                            <div class="detail-pill">1</div>
                            <h4>Proactive Issue Resolution</h4>
                            <p>We monitor your billing workflow and technical systems so we can address issues before they disrupt revenue cycles.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cs-detail-card">
                            <div class="detail-pill">2</div>
                            <h4>HIPAA-Safe Communication</h4>
                            <p>All support interactions are handled with secure, compliant processes to protect patient and financial data.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cs-detail-card">
                            <div class="detail-pill">3</div>
                            <h4>Escalation and Reporting</h4>
                            <p>We provide clear escalation paths, executive summaries, and performance reports so you always know where support stands.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SUPPORT METRICS -->
        <section class="cs-stat-section">
            <div class="container">
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="stat-number">99.8%</div>
                            <h4>Ticket Satisfaction</h4>
                            <p>Customers consistently rate our support as fast, knowledgeable, and helpful.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="stat-number">4.7/5</div>
                            <h4>Average Support Rating</h4>
                            <p>High quality service backed by experienced representatives and proactive service teams.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <div class="stat-number">24 HRS</div>
                            <h4>Response Time</h4>
                            <p>Guaranteed response within 24 hours for all tickets and urgent escalation within 4 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SUPPORT CHANNELS - with SVG icons -->
        <section class="cs-channels-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="cs-section-title">How to Reach Us</h2>
                    <p class="cs-section-subtitle">Multiple support channels available to ensure you get the help you need, when you need it.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="channel-card">
                            <div class="cs-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7294C21.7209 20.9845 21.5573 21.2136 21.352 21.4019C21.1467 21.5901 20.9044 21.7335 20.6407 21.8227C20.377 21.9119 20.0975 21.945 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.7738 17.3147 6.72533 15.2662 5.19 12.85C3.49911 10.2442 2.44744 7.27675 2.12 4.19C2.09503 3.91255 2.12813 3.63305 2.21732 3.36933C2.30651 3.10561 2.4499 2.86333 2.63814 2.65802C2.82637 2.45271 3.05549 2.2891 3.31064 2.1775C3.56579 2.06589 3.84152 2.0089 4.12 2.01H7.12C7.60304 2.0055 8.07364 2.15584 8.46019 2.43686C8.84674 2.71787 9.12706 3.11311 9.26 3.57C9.50556 4.47128 9.86855 5.33396 10.34 6.13C10.5489 6.46905 10.6559 6.86363 10.6479 7.26389C10.6399 7.66416 10.5173 8.05414 10.295 8.385L9.06 10.13C10.4456 12.5008 12.5092 14.5644 14.88 15.95L16.625 14.715C16.9559 14.4927 17.3458 14.3701 17.7461 14.3621C18.1464 14.3541 18.5409 14.4611 18.88 14.67C19.676 15.1415 20.5387 15.5045 21.44 15.75C21.8969 15.8829 22.2921 16.1633 22.5731 16.5498C22.8542 16.9364 23.0045 17.407 23 17.89V16.92Z" stroke="#CCFF00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <path d="M17 8L21 12M21 8L17 12" stroke="#CCFF00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <h3>Phone Support</h3>
                            <div class="channel-detail">+92 666 888 0000</div>
                            <p>Direct line for urgent inquiries and immediate assistance.</p>
                            <div class="channel-hours">Available: Monday - Friday, 9:00 AM - 6:00 PM (GMT+5)</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="channel-card">
                            <div class="cs-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6M22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6M22 6L12 13L2 6" stroke="#CCFF00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <h3>Email Support</h3>
                            <div class="channel-detail">support@hsdigitalservices.com</div>
                            <p>Send us your queries and our team will respond within 24 hours.</p>
                            <div class="channel-hours">Billing: billing@hsdigitalservices.com</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="channel-card">
                            <div class="cs-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 11.5C21 16.1944 17.1944 20 12.5 20C11.299 20 10.158 19.7698 9.12094 19.3517L4 21L5.67181 16.9144C5.24914 15.8672 5 14.7202 5 13.5C5 8.80558 8.80558 5 13.5 5C18.1944 5 21 8.80558 21 13.5Z" stroke="#CCFF00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <h3>Live Chat</h3>
                            <div class="channel-detail">Available on Website</div>
                            <p>Real-time assistance from our support representatives.</p>
                            <div class="channel-hours">Monday - Friday, 9:00 AM - 8:00 PM (GMT+5)</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FEATURES -->
        <section class="cs-features-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="cs-section-title">What Makes Our Support Different</h2>
                    <p class="cs-section-subtitle">We provide enterprise-grade support with a personal touch.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-item">
                            <div class="cs-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CCFF00" stroke-width="1.5">
                                    <circle cx="12" cy="8" r="4" stroke="currentColor" fill="none"/>
                                    <path d="M5 20V19C5 15.6863 7.68629 13 11 13H13C16.3137 13 19 15.6863 19 19V20" stroke="currentColor" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>Dedicated Account Managers</h3>
                            <p>Every client is assigned a dedicated account manager who understands your business and technical environment.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <div class="cs-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CCFF00" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="9" stroke="currentColor" fill="none"/>
                                    <path d="M12 8V12L14 14" stroke="currentColor" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>24 Hour Response Guarantee</h3>
                            <p>We commit to responding to all support tickets within 24 hours, with priority handling for critical issues.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <div class="cs-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CCFF00" stroke-width="1.5">
                                    <path d="M21 16V8C21 6.89543 20.1046 6 19 6H5C3.89543 6 3 6.89543 3 8V16C3 17.1046 3.89543 18 5 18H19C20.1046 18 21 17.1046 21 16Z" stroke="currentColor" fill="none"/>
                                    <path d="M7 10H17" stroke="currentColor" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>Multi-channel Support</h3>
                            <p>Reach us via phone, email, chat, or our support portal. Choose the channel that works best for you.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <div class="cs-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CCFF00" stroke-width="1.5">
                                    <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12" stroke="currentColor" fill="none"/>
                                    <path d="M12 6V12L16 14" stroke="currentColor" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>Technical Expertise</h3>
                            <p>Our support team includes certified professionals who understand medical billing systems and EHR integrations.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <div class="cs-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CCFF00" stroke-width="1.5">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" fill="none"/>
                                    <path d="M8 21H16M12 17V21" stroke="currentColor" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3>Remote Assistance</h3>
                            <p>Secure screen sharing and remote troubleshooting to resolve technical issues quickly and efficiently.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-item">
                            <div class="cs-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CCFF00" stroke-width="1.5">
                                    <path d="M12 2L15 8.5L22 9.5L17 14L18.5 21L12 17.5L5.5 21L7 14L2 9.5L9 8.5L12 2Z" stroke="currentColor" fill="none"/>
                                </svg>
                            </div>
                            <h3>Continuous Training</h3>
                            <p>Our support staff undergoes regular training on the latest industry regulations and HIPAA compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ -->
        <section id="support-faq" class="cs-faq-section">
            <div class="container">
                <div class="text-center">
                    <h2 class="cs-section-title">Frequently Asked Questions</h2>
                    <p class="cs-section-subtitle">Quick answers to common support-related questions.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item">
                            <div class="faq-question">What is the typical response time for support tickets?</div>
                            <div class="faq-answer">Our standard response time is within 24 hours for non-urgent tickets. For critical issues affecting your operations, we respond within 4 hours during business days.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Do you offer support on weekends?</div>
                            <div class="faq-answer">Email support is monitored on weekends for urgent matters. Our live chat and phone support are available Monday through Friday during standard business hours.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">How do I report a technical issue with the billing platform?</div>
                            <div class="faq-answer">You can report technical issues by calling our support line, sending an email, or using the live chat feature. Please include relevant screenshots and error messages when possible.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Is there a self-service knowledge base available?</div>
                            <div class="faq-answer">Yes, we provide a comprehensive knowledge base with video tutorials, user guides, and troubleshooting articles accessible through your client portal.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">How do I escalate an unresolved support issue?</div>
                            <div class="faq-answer">If your issue is not resolved within the expected timeframe, you can request escalation to a senior support manager by emailing escalations@hsdigitalservices.com.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CONTACT FORM -->
        <!-- <section id="contact-support" class="cs-contact-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form-card">
                            <h2 class="cs-section-title" style="text-align: center; margin-bottom: 8px;">Send Us a Message</h2>
                            <p style="text-align: center; color: var(--cs-text-secondary); margin-bottom: 32px;">Fill out the form below and our support team will get back to you promptly.</p>
                            <form action="submit-support.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" id="fullname" name="fullname" class="form-control-cs" placeholder="Enter your full name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control-cs" placeholder="Enter your email address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" id="phone" name="phone" class="form-control-cs" placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control-cs" placeholder="What is this regarding?" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" name="message" class="form-control-cs" placeholder="Please describe your issue or question in detail..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn-cs-submit">Submit Support Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        
        <!-- EMERGENCY BAR -->
        <section class="cs-emergency">
            <div class="container text-center">
                <h3 style="color: var(--cs-text-primary); font-size: 1.3rem; margin-bottom: 12px;">Urgent Issue?</h3>
                <p style="color: var(--cs-text-secondary); margin-bottom: 20px;">For critical system outages or urgent billing emergencies, call our priority support line.</p>
                <div style="font-size: 1.8rem; font-weight: 800; color: var(--cs-accent); letter-spacing: 1px;">+92 666 888 0000</div>
                <p style="color: var(--cs-text-secondary); font-size: 0.85rem; margin-top: 12px;">Press 2 for emergency technical support</p>
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
        // ================================================
        // HAMBURGER MENU FIX - Applied to Customer Support Page
        // Uses .mobile-menu-active class (defined in header.css: left: 0)
        // This is the exact same fix used on the Medical Billing page
        // ================================================
        $(document).ready(function () {
            // Open menu - triggers the mobile menu to slide in
            $('.menu-bar-btn').off('click').on('click', function () {
                $('.nft-mobile-menu-1').addClass('mobile-menu-active');
            });
            
            // Close menu via X button - removes the active class
            $('.nft-mobile-menu-1 .close-menu').off('click').on('click', function () {
                $('.nft-mobile-menu-1').removeClass('mobile-menu-active');
            });
            
            // Mobile submenu toggle - for dropdown items in the mobile menu
            $('.nft-mobile-menu-1 .has-submenu > a').off('click').on('click', function (e) {
                e.preventDefault();
                $(this).next('.submenu-wrapper').slideToggle(250);
            });
        });

        // FAQ Toggle functionality (kept from original)
        $(function() {
            $('.faq-item .faq-question').on('click', function() {
                var $item = $(this).closest('.faq-item');
                $item.toggleClass('active');
                $item.find('.faq-answer').stop(true, true).slideToggle(200);
            });
        });
    </script>
</body>
</html>