<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Inbound Services | Medical Billing & Customer Support | HS Digital Services</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --med-accent: #CCFF00;
            --med-accent-dark: #b8e600;
            --med-accent-soft: rgba(204, 255, 0, 0.12);
            --med-bg-dark: #050a14;
            --med-card: rgba(6, 16, 28, 0.94);
            --med-text: #f0f4fe;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: var(--med-bg-dark);
            color: var(--med-text);
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', sans-serif;
            font-weight: 400;
            line-height: 1.55;
        }

        /* ── Animations ── */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1);
        }
        .animate-on-scroll.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        .hover-lift {
            transition: transform 0.3s ease, border-color 0.2s, box-shadow 0.2s;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            border-color: rgba(204, 255, 0, 0.4);
            box-shadow: 0 25px 40px -15px rgba(0,0,0,0.4);
        }

        /* ── Hero ── */
        .inb-hero {
            padding: 80px 0 70px;
            border-radius: 32px;
            overflow: hidden;
            position: relative;
            background: radial-gradient(ellipse at 65% 40%, rgba(2, 18, 32, 0.97), rgba(0, 6, 14, 0.99));
            border: 1px solid rgba(255, 255, 255, 0.04);
            margin-top: 10px;
        }
        .inb-hero::before {
            content: '';
            position: absolute;
            right: -8%;
            top: -15%;
            width: 60%;
            height: 140%;
            background: radial-gradient(circle, rgba(204, 255, 0, 0.07) 0%, transparent 70%);
            pointer-events: none;
        }
        .inb-hero-row {
            display: flex;
            gap: 55px;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1320px;
            margin: 0 auto;
        }
        .inb-hero-content {
            flex: 1.2;
            min-width: 300px;
        }
        .inb-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 20px;
            border-radius: 40px;
            background: rgba(204, 255, 0, 0.12);
            backdrop-filter: blur(4px);
            color: var(--med-accent);
            font-weight: 500;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            margin-bottom: 24px;
            border: 1px solid rgba(204, 255, 0, 0.25);
        }
        .inb-hero h1 {
            font-size: 3rem;
            font-weight: 600;
            line-height: 1.2;
            margin: 0 0 20px 0;
            letter-spacing: -0.02em;
            background: linear-gradient(135deg, #ffffff, #e8ffb0);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .inb-lead {
            font-size: 1.05rem;
            color: rgba(235, 245, 255, 0.85);
            max-width: 560px;
            margin-bottom: 32px;
            font-weight: 400;
            line-height: 1.6;
        }
        .inb-btn-primary {
            background: var(--med-accent);
            color: #0a1a1f;
            padding: 12px 34px;
            border-radius: 48px;
            font-weight: 500;
            border: none;
            transition: all 0.25s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 22px rgba(0,0,0,0.2);
        }
        .inb-btn-primary:hover {
            background: #e2ff4a;
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(204,255,0,0.2);
            color: #0a1a1f;
            text-decoration: none;
        }
        .inb-btn-outline {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255,255,255,0.25);
            padding: 12px 28px;
            border-radius: 48px;
            font-weight: 400;
            transition: 0.2s;
            text-decoration: none;
            margin-left: 12px;
        }
        .inb-btn-outline:hover {
            border-color: var(--med-accent);
            color: var(--med-accent);
            background: rgba(204, 255, 0, 0.05);
            text-decoration: none;
        }
        .inb-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .inb-hero-image img {
            max-width: 560px;
            width: 100%;
            border-radius: 40px;
            box-shadow: 0 40px 60px -20px rgba(0,0,0,0.6);
            border: 1px solid rgba(204,255,0,0.2);
            transition: all 0.4s ease;
            object-fit: cover;
            height: 400px;
        }
        .inb-hero-image img:hover {
            transform: scale(1.01) translateY(-3px);
            border-color: var(--med-accent);
        }

        /* ── General card ── */
        .inb-card {
            background: var(--med-card);
            backdrop-filter: blur(2px);
            padding: 28px 26px;
            border-radius: 28px;
            border: 1px solid rgba(204, 255, 0, 0.1);
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3);
            height: 100%;
            transition: all 0.3s;
        }
        .inb-card h4 {
            font-size: 1.3rem;
            font-weight: 500;
            margin-bottom: 14px;
            letter-spacing: -0.2px;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .inb-card p {
            font-weight: 400;
            color: rgba(225, 235, 255, 0.85);
            line-height: 1.6;
        }
        .card-icon {
            width: 38px;
            height: 38px;
            background: rgba(204, 255, 0, 0.1);
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        /* ── Section spacing ── */
        .inb-section {
            padding: 70px 0;
        }

        /* ── Stats ── */
        .inb-feature-card {
            background: rgba(8, 20, 34, 0.85);
            border-radius: 24px;
            padding: 28px 22px;
            border: 1px solid rgba(204, 255, 0, 0.1);
            transition: 0.25s;
            height: 100%;
            text-align: center;
        }
        .inb-stat {
            font-size: 2.6rem;
            font-weight: 600;
            color: var(--med-accent);
            margin-bottom: 8px;
            line-height: 1.1;
        }

        /* ── Service divider pill ── */
        .service-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 18px;
            border-radius: 40px;
            background: rgba(204, 255, 0, 0.08);
            border: 1px solid rgba(204, 255, 0, 0.2);
            color: var(--med-accent);
            font-size: 0.82rem;
            font-weight: 500;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        /* ── Service feature list ── */
        .feat-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .feat-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: rgba(225, 238, 255, 0.9);
            font-size: 0.97rem;
            line-height: 1.55;
        }
        .feat-list li::before {
            content: '✓';
            color: var(--med-accent);
            font-size: 1.1rem;
            flex-shrink: 0;
            margin-top: 1px;
        }

        /* ── Service image blocks ── */
        .service-img {
            width: 100%;
            border-radius: 28px;
            object-fit: cover;
            height: 380px;
            border: 1px solid rgba(204, 255, 0, 0.15);
            box-shadow: 0 30px 50px -15px rgba(0,0,0,0.5);
            transition: 0.35s ease;
        }
        .service-img:hover {
            border-color: rgba(204, 255, 0, 0.35);
            transform: scale(1.01);
        }

        /* ── Why choose us strip ── */
        .why-strip {
            background: rgba(2, 12, 22, 0.5);
            border-radius: 48px;
            margin: 0 0 20px;
        }

        /* ── Process steps ── */
        .step-num {
            width: 44px;
            height: 44px;
            background: rgba(204, 255, 0, 0.1);
            border: 1px solid rgba(204, 255, 0, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 600;
            color: var(--med-accent);
            flex-shrink: 0;
        }
        .step-line {
            flex: 1;
            height: 1px;
            background: rgba(204, 255, 0, 0.15);
        }

        /* ── Form ── */
        .form-control-cs {
            width: 100%;
            padding: 14px 18px;
            background: rgba(5, 14, 24, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            color: #fff;
            font-size: 0.95rem;
            transition: 0.2s;
            font-family: inherit;
        }
        .form-control-cs::placeholder { color: rgba(255,255,255,0.38); }
        .form-control-cs:focus {
            border-color: var(--med-accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(204, 255, 0, 0.15);
        }

        /* ── FAQ ── */
        .inb-faq .faq-question {
            cursor: pointer;
            font-weight: 500;
            position: relative;
            padding-right: 32px;
            color: #f0f3fa;
            font-size: 1rem;
        }
        .inb-faq .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            top: -2px;
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--med-accent);
        }
        .inb-faq .faq-item.active .faq-question::after { content: '−'; }
        .inb-faq .faq-item {
            background: rgba(8, 20, 36, 0.9);
            border-radius: 24px;
            padding: 20px 26px;
            margin-bottom: 14px;
            border: 1px solid rgba(204, 255, 0, 0.1);
        }
        .inb-faq .faq-answer {
            display: none;
            padding-top: 16px;
            color: rgba(220, 235, 255, 0.85);
            font-weight: 400;
            line-height: 1.6;
        }

        /* ── Scroll top ── */
        #inb-scroll-top {
            position: fixed;
            right: 26px;
            bottom: 26px;
            width: 48px;
            height: 48px;
            background: var(--med-accent);
            border-radius: 60px;
            display: none;
            align-items: center;
            justify-content: center;
            color: #08131b;
            cursor: pointer;
            z-index: 1000;
            font-weight: 500;
            transition: 0.2s;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        /* ── Divider ── */
        hr { border-color: rgba(204,255,0,0.12); margin: 20px 0; }

        /* ── Tag strip ── */
        .tag-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        .tag-chip {
            padding: 5px 16px;
            border-radius: 40px;
            background: rgba(204, 255, 0, 0.07);
            border: 1px solid rgba(204, 255, 0, 0.18);
            color: rgba(204, 255, 0, 0.85);
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* ── CTA block ── */
        .cta-block {
            background: linear-gradient(135deg, rgba(8, 22, 38, 0.98), rgba(4, 14, 26, 0.99));
            border: 1px solid rgba(204, 255, 0, 0.18);
            border-radius: 32px;
            padding: 54px 40px;
            text-align: center;
        }

        .container { max-width: 1280px; }

        @media (max-width: 991px) {
            .inb-hero-row { flex-direction: column-reverse; text-align: center; }
            .inb-hero-content { text-align: center; }
            .inb-hero h1 { font-size: 2.2rem; }
            .inb-lead { margin-left: auto; margin-right: auto; }
            .inb-hero-buttons { justify-content: center; }
            .inb-section { padding: 50px 0; }
            .inb-btn-outline { margin-left: 0; margin-top: 12px; display: inline-block; }
            .service-img { height: 280px; }
        }
        @media (max-width: 576px) {
            .inb-card h4 { font-size: 1.1rem; }
            .inb-stat { font-size: 2rem; }
            .cta-block { padding: 36px 20px; }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>

        <!-- ══════════════════════════════════════════
             HERO SECTION
        ══════════════════════════════════════════ -->
        <section class="inb-hero">
            <div class="container">
                <div class="inb-hero-row">
                    <div class="inb-hero-content animate-on-scroll">
                        <span class="inb-badge">📞 Inbound Call Center Services</span>
                        <h1>Expert inbound solutions your customers deserve</h1>
                        <p class="inb-lead">From complex medical billing queries to round-the-clock customer support — our trained inbound agents handle every call with precision, empathy, and speed.</p>
                        <div class="inb-hero-buttons">
                            <a href="quotes.php" class="inb-btn-primary">Get a free quote →</a>
                            <a href="outbound.php" class="inb-btn-outline">Our services</a>
                        </div>
                    </div>
                    <div class="inb-hero-image animate-on-scroll">
                        <!-- HD call center / inbound BPO hero image -->
                        <img
                            src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=900&q=85&auto=format&fit=crop"
                            alt="Inbound call center agents handling customer calls professionally"
                        >
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             INTRO / OVERVIEW
        ══════════════════════════════════════════ -->
        <section class="inb-section" id="inb-services">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="inb-badge" style="margin-bottom: 12px;">What we do</span>
                        <h2 style="font-size: 1.9rem; font-weight: 600; margin: 12px 0 18px;">Two core inbound services. One seamless experience.</h2>
                        <p style="color: rgba(235, 245, 255, 0.85); line-height: 1.65; margin-bottom: 20px;">HS Digital Services operates a fully-staffed inbound BPO call center specializing in two high-impact verticals: <strong style="color:#fff;">Medical Billing</strong> and <strong style="color:#fff;">Customer Support</strong>. Our agents are trained, certified, and ready to represent your brand or practice as an extension of your own team.</p>
                        <p style="color: rgba(235, 245, 255, 0.8);">We handle the calls — you focus on what you do best. Every interaction is logged, quality-checked, and reported back to you in real time.</p>
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="inb-card" style="text-align:center; padding: 22px 18px;">
                                    <div style="font-size: 2rem; margin-bottom: 10px;">🏥</div>
                                    <h4 style="justify-content:center; font-size:1.05rem; margin-bottom:8px;">Medical Billing</h4>
                                    <p style="font-size:0.88rem;">Claims, follow-ups, insurance verification & AR recovery.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="inb-card" style="text-align:center; padding: 22px 18px;">
                                    <div style="font-size: 2rem; margin-bottom: 10px;">🎧</div>
                                    <h4 style="justify-content:center; font-size:1.05rem; margin-bottom:8px;">Customer Support</h4>
                                    <p style="font-size:0.88rem;">Live answering, complaint resolution & retention calls.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inb-card" style="padding:18px 22px; display:flex; align-items:center; gap:14px;">
                                    <span class="card-icon">🌐</span>
                                    <p style="margin:0; font-size:0.92rem;">Available 24/7 — covering all US time zones with dedicated teams per shift.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             STATS STRIP
        ══════════════════════════════════════════ -->
        <section class="inb-section why-strip">
            <div class="container">
                <div class="row g-4">
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="inb-feature-card w-100">
                            <div class="inb-stat">98%</div>
                            <h4 style="font-weight:500; font-size:1rem;">First-call resolution</h4>
                            <p style="font-size:0.88rem;">Issues resolved without callbacks.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="inb-feature-card w-100">
                            <div class="inb-stat">24/7</div>
                            <h4 style="font-weight:500; font-size:1rem;">Availability</h4>
                            <p style="font-size:0.88rem;">Around-the-clock inbound coverage.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="inb-feature-card w-100">
                            <div class="inb-stat">15s</div>
                            <h4 style="font-weight:500; font-size:1rem;">Average answer time</h4>
                            <p style="font-size:0.88rem;">Minimal hold time, maximum satisfaction.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="inb-feature-card w-100">
                            <div class="inb-stat">500+</div>
                            <h4 style="font-weight:500; font-size:1rem;">Clients served</h4>
                            <p style="font-size:0.88rem;">Healthcare practices and businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             SERVICE 1: MEDICAL BILLING
        ══════════════════════════════════════════ -->
        <section class="inb-section" id="medical-billing">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&q=85&auto=format&fit=crop"
                            alt="Medical billing specialists handling insurance claims and patient accounts"
                            class="service-img"
                        >
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="service-pill">🏥 Service 01</span>
                        <h2 style="font-size: 1.85rem; font-weight: 600; margin-bottom: 16px; letter-spacing: -0.02em;">Medical Billing</h2>
                        <p style="color: rgba(235, 245, 255, 0.85); line-height: 1.65; margin-bottom: 24px;">We handle the full lifecycle of your medical billing operations — from insurance verification on the front end to denied claim appeals and AR recovery on the back end. Our billing specialists are trained in ICD-10, CPT coding, and HIPAA compliance, so your practice stays clean, compliant, and cash-flow positive.</p>
                        <ul class="feat-list">
                            <li>Insurance eligibility & benefits verification before appointments</li>
                            <li>Accurate claim submission to Medicare, Medicaid, and commercial payers</li>
                            <li>Denial management and appeal handling with payer follow-up</li>
                            <li>Accounts Receivable (AR) follow-up to recover outstanding balances</li>
                            <li>Patient billing inquiries and payment plan coordination</li>
                            <li>Prior authorization requests and status tracking</li>
                            <li>Real-time reporting and monthly revenue cycle analytics</li>
                        </ul>
                        <div class="tag-strip">
                            <span class="tag-chip">HIPAA Compliant</span>
                            <span class="tag-chip">ICD-10 Certified</span>
                            <span class="tag-chip">EHR Integration</span>
                            <span class="tag-chip">AR Recovery</span>
                            <span class="tag-chip">All Specialties</span>
                        </div>
                    </div>
                </div>

                <!-- Medical Billing sub-cards -->
                <div class="row g-4 mt-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="inb-card w-100 hover-lift">
                            <h4><span class="card-icon">📋</span> Claims Processing</h4>
                            <p>We prepare, scrub, and submit clean claims electronically to all major payers, dramatically reducing rejections and accelerating reimbursements for your practice.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="inb-card w-100 hover-lift">
                            <h4><span class="card-icon">🔄</span> Denial & Appeal Management</h4>
                            <p>Our billing team identifies denial patterns, corrects errors, and files timely appeals — recovering revenue that would otherwise be written off without proper follow-up.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="inb-card w-100 hover-lift">
                            <h4><span class="card-icon">📊</span> Revenue Cycle Reporting</h4>
                            <p>Get full transparency with monthly reports covering collections rate, days in AR, denial trends, and payer performance — data you can act on immediately.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             SERVICE 2: CUSTOMER SUPPORT
        ══════════════════════════════════════════ -->
        <section class="inb-section" id="customer-support" style="background: rgba(3, 10, 20, 0.4); border-radius: 48px; margin: 0 0 20px;">
            <div class="container">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?w=900&q=85&auto=format&fit=crop"
                            alt="Professional customer support agent assisting clients via phone"
                            class="service-img"
                        >
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="service-pill">🎧 Service 02</span>
                        <h2 style="font-size: 1.85rem; font-weight: 600; margin-bottom: 16px; letter-spacing: -0.02em;">Customer Support</h2>
                        <p style="color: rgba(235, 245, 255, 0.85); line-height: 1.65; margin-bottom: 24px;">Your customers deserve a real voice — not a voicemail. Our inbound customer support agents become an extension of your team, trained on your products, tone, and escalation protocols. We deliver genuine, brand-aligned support that builds loyalty and turns complaints into opportunities.</p>
                        <ul class="feat-list">
                            <li>Live inbound call answering 24 hours a day, 7 days a week</li>
                            <li>Order management, tracking updates, and returns processing</li>
                            <li>Complaint resolution and de-escalation by trained agents</li>
                            <li>Technical support and product troubleshooting (Tier 1 & 2)</li>
                            <li>Customer retention calls and cancellation save programs</li>
                            <li>Appointment scheduling and calendar coordination</li>
                            <li>Post-call surveys and CSAT tracking for continuous improvement</li>
                        </ul>
                        <div class="tag-strip">
                            <span class="tag-chip">Live Answering</span>
                            <span class="tag-chip">Omnichannel Ready</span>
                            <span class="tag-chip">CRM Integration</span>
                            <span class="tag-chip">CSAT Tracked</span>
                            <span class="tag-chip">Custom Scripts</span>
                        </div>
                    </div>
                </div>

                <!-- Customer Support sub-cards -->
                <div class="row g-4 mt-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="inb-card w-100 hover-lift">
                            <h4><span class="card-icon">📱</span> Live Call Answering</h4>
                            <p>Every incoming call answered by a real, trained agent — no bots, no automated menus. We greet your customers with warmth and handle queries from the first ring.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="inb-card w-100 hover-lift">
                            <h4><span class="card-icon">🛠️</span> Technical Help Desk</h4>
                            <p>Our Tier 1 and Tier 2 support agents are trained in your product environment, diagnosing and resolving issues quickly while escalating only when truly necessary.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="inb-card w-100 hover-lift">
                            <h4><span class="card-icon">💬</span> Retention & Save Programs</h4>
                            <p>We train agents to identify at-risk customers, address root-cause concerns, and present compelling reasons to stay — reducing churn and protecting your revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             HOW IT WORKS – PROCESS
        ══════════════════════════════════════════ -->
        <section class="inb-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size: 1.9rem; font-weight: 600;">How we onboard your business</h2>
                    <p style="color: rgba(255,255,255,0.7); max-width: 600px; margin: 12px auto 0;">From signed agreement to live agents — typically in under 7 days.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="inb-card w-100 text-center">
                            <div style="margin: 0 auto 14px; width:44px; height:44px; background:rgba(204,255,0,0.1); border:1px solid rgba(204,255,0,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem; font-weight:600; color:var(--med-accent);">01</div>
                            <h4 style="justify-content:center; font-size:1.05rem;">Discovery call</h4>
                            <p style="font-size:0.9rem;">We learn your workflow, KPIs, and pain points in a 30-minute intake session.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="inb-card w-100 text-center">
                            <div style="margin: 0 auto 14px; width:44px; height:44px; background:rgba(204,255,0,0.1); border:1px solid rgba(204,255,0,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem; font-weight:600; color:var(--med-accent);">02</div>
                            <h4 style="justify-content:center; font-size:1.05rem;">Custom training</h4>
                            <p style="font-size:0.9rem;">Agents trained on your scripts, systems, and compliance requirements.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="inb-card w-100 text-center">
                            <div style="margin: 0 auto 14px; width:44px; height:44px; background:rgba(204,255,0,0.1); border:1px solid rgba(204,255,0,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem; font-weight:600; color:var(--med-accent);">03</div>
                            <h4 style="justify-content:center; font-size:1.05rem;">Soft launch & QA</h4>
                            <p style="font-size:0.9rem;">Monitored call period with real-time feedback before full rollout.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="inb-card w-100 text-center">
                            <div style="margin: 0 auto 14px; width:44px; height:44px; background:rgba(204,255,0,0.1); border:1px solid rgba(204,255,0,0.3); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem; font-weight:600; color:var(--med-accent);">04</div>
                            <h4 style="justify-content:center; font-size:1.05rem;">Go live + reporting</h4>
                            <p style="font-size:0.9rem;">Full deployment with weekly and monthly performance reporting dashboards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             WHY CHOOSE US
        ══════════════════════════════════════════ -->
        <section class="inb-section">
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-5 animate-on-scroll">
                        <span class="inb-badge" style="margin-bottom: 14px;">Why HS Digital Services</span>
                        <h2 style="font-size: 1.85rem; font-weight: 600; margin-bottom: 18px;">Built for businesses that can't afford to miss a call</h2>
                        <p style="color: rgba(235, 245, 255, 0.85); line-height: 1.65;">We're not a generic answering service. We're a specialized inbound BPO that understands the regulatory nuance of healthcare billing and the brand sensitivity of customer-facing support. Every agent is handpicked, trained in-house, and continuously evaluated on quality metrics that matter to you.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-3">
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="inb-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">🔒</span> HIPAA Compliant</h4>
                                    <p style="font-size:0.9rem;">All medical billing agents operate under strict HIPAA protocols. Data is encrypted in transit and at rest.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="inb-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">📈</span> Scalable Teams</h4>
                                    <p style="font-size:0.9rem;">Scale from 2 agents to 50+ based on your call volume — no long-term contracts required to grow.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="inb-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">🎯</span> Dedicated Agents</h4>
                                    <p style="font-size:0.9rem;">Your team is assigned to you — not shared across dozens of clients. They know your business inside out.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="inb-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">📡</span> Real-Time Dashboards</h4>
                                    <p style="font-size:0.9rem;">Monitor call volumes, resolution rates, and agent performance live — transparency at every level.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             FAQ
        ══════════════════════════════════════════ -->
        <section class="inb-section inb-faq" id="inb-faq">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.8rem;">Frequently asked questions</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Do your medical billing agents understand coding and payer rules?</div>
                            <div class="faq-answer">Yes. Our medical billing team is trained in ICD-10, CPT, and HCPCS coding. They are also familiar with payer-specific billing guidelines for Medicare, Medicaid, Aetna, UHC, BCBS, and most commercial insurers — minimizing denials from the start.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Can customer support agents represent my brand voice?</div>
                            <div class="faq-answer">Absolutely. Before going live, agents complete a dedicated training program using your brand guide, scripts, escalation flow, and tone of voice. Regular QA sessions ensure consistency across every call.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">What software and CRMs do you integrate with?</div>
                            <div class="faq-answer">We work with leading EHR systems (Kareo, AdvancedMD, DrChrono, eClinicalWorks) for medical billing, and popular CRMs (Salesforce, HubSpot, Zendesk, Freshdesk) for customer support. We adapt to your existing stack — no replacement required.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Is there a minimum commitment or contract length?</div>
                            <div class="faq-answer">We offer flexible month-to-month agreements for most service tiers. Long-term contracts are available at discounted rates. We believe the quality of our service is what keeps clients — not lock-in clauses.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">How quickly can you start handling our calls?</div>
                            <div class="faq-answer">Most clients are fully onboarded and live within 5–7 business days. Larger or more complex deployments may take 10–14 days to ensure agents are fully trained to your standards.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             CONTACT FORM
        ══════════════════════════════════════════ -->
        <!-- <section id="inb-contact" class="inb-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 animate-on-scroll">
                        <div class="cta-block">
                            <span class="inb-badge" style="margin-bottom: 18px;">Start today</span>
                            <h2 style="font-size: 1.7rem; font-weight: 600; margin-bottom: 10px;">Ready to transform your inbound operations?</h2>
                            <p style="color: rgba(255,255,255,0.72); margin-bottom: 32px; max-width: 540px; margin-left: auto; margin-right: auto;">Tell us about your call volume, service needs, and goals. We'll put together a custom proposal within 24 hours — no obligation.</p>
                            <form action="submit-inbound.php" method="POST">
                                <div class="row g-4" style="text-align: left;">
                                    <div class="col-md-6"><input name="fullname" placeholder="Full name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="company" placeholder="Company / practice name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="email" type="email" placeholder="Business email" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="phone" placeholder="Phone number" class="form-control-cs"></div>
                                    <div class="col-md-6">
                                        <select name="service" class="form-control-cs" required>
                                            <option value="" disabled selected>Service needed</option>
                                            <option value="medical-billing">Medical Billing</option>
                                            <option value="customer-support">Customer Support</option>
                                            <option value="both">Both Services</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="volume" class="form-control-cs">
                                            <option value="" disabled selected>Monthly call volume</option>
                                            <option>Under 500 calls</option>
                                            <option>500 – 2,000 calls</option>
                                            <option>2,000 – 10,000 calls</option>
                                            <option>10,000+ calls</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="notes" placeholder="Anything else we should know — software you use, hours of operation, specific requirements..." class="form-control-cs" style="min-height: 110px;"></textarea>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <button class="inb-btn-primary" type="submit" style="border:none; cursor:pointer; font-size:1rem; padding: 14px 40px;">Send my request →</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    </main>

    <div id="inb-scroll-top" title="Back to top">↑</div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ============================================================
        // HAMBURGER MENU FIX – same pattern as other pages
        // ============================================================
        $(document).ready(function () {
            $('.menu-bar-btn').off('click').on('click', function () {
                $('.nft-mobile-menu-1').addClass('mobile-menu-active');
            });
            $('.nft-mobile-menu-1 .close-menu').off('click').on('click', function () {
                $('.nft-mobile-menu-1').removeClass('mobile-menu-active');
            });
            $('.nft-mobile-menu-1 .has-submenu > a').off('click').on('click', function (e) {
                e.preventDefault();
                $(this).next('.submenu-wrapper').slideToggle(250);
            });
        });

        // ============================================================
        // INBOUND PAGE SCRIPTS
        // ============================================================
        (function () {
            // Scroll reveal
            const els = document.querySelectorAll('.animate-on-scroll');
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.classList.add('revealed');
                        obs.unobserve(e.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -15px 0px' });
            els.forEach(el => obs.observe(el));

            // FAQ accordion
            document.querySelectorAll('.inb-faq .faq-item').forEach(item => {
                item.querySelector('.faq-question').addEventListener('click', function () {
                    const isOpen = item.classList.contains('active');
                    document.querySelectorAll('.inb-faq .faq-item').forEach(other => {
                        other.classList.remove('active');
                        other.querySelector('.faq-answer').style.display = 'none';
                    });
                    if (!isOpen) {
                        item.classList.add('active');
                        item.querySelector('.faq-answer').style.display = 'block';
                    }
                });
            });

            // Scroll-to-top button
            const btn = document.getElementById('inb-scroll-top');
            window.addEventListener('scroll', () => {
                btn.style.display = window.scrollY > 400 ? 'flex' : 'none';
            });
            btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        })();
    </script>
</body>
</html>