<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Outbound Services | Lead Generation, Appointment Setting & More | HS Digital Services</title>
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
        * { margin: 0; padding: 0; box-sizing: border-box; }
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
        .animate-on-scroll.revealed { opacity: 1; transform: translateY(0); }
        .hover-lift {
            transition: transform 0.3s ease, border-color 0.2s, box-shadow 0.2s;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            border-color: rgba(204, 255, 0, 0.4);
            box-shadow: 0 25px 40px -15px rgba(0,0,0,0.4);
        }

        /* ── Hero ── */
        .out-hero {
            padding: 85px 0 75px;
            border-radius: 32px;
            overflow: hidden;
            position: relative;
            background: radial-gradient(ellipse at 65% 40%, rgba(2, 18, 32, 0.97), rgba(0, 6, 14, 0.99));
            border: 1px solid rgba(255,255,255,0.04);
            margin-top: 10px;
        }
        .out-hero::before {
            content: '';
            position: absolute;
            right: -8%;
            top: -15%;
            width: 60%;
            height: 140%;
            background: radial-gradient(circle, rgba(204,255,0,0.07) 0%, transparent 70%);
            pointer-events: none;
        }
        /* animated pulse ring behind hero image */
        .out-hero::after {
            content: '';
            position: absolute;
            right: 6%;
            top: 50%;
            transform: translateY(-50%);
            width: 440px;
            height: 440px;
            border-radius: 50%;
            border: 1px solid rgba(204,255,0,0.08);
            animation: pulse-ring 3.5s ease-in-out infinite;
            pointer-events: none;
        }
        @keyframes pulse-ring {
            0%, 100% { transform: translateY(-50%) scale(1); opacity: 0.5; }
            50% { transform: translateY(-50%) scale(1.08); opacity: 0.15; }
        }
        .out-hero-row {
            display: flex;
            gap: 55px;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1320px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        .out-hero-content { flex: 1.2; min-width: 300px; }
        .out-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 20px;
            border-radius: 40px;
            background: rgba(204,255,0,0.12);
            backdrop-filter: blur(4px);
            color: var(--med-accent);
            font-weight: 500;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            margin-bottom: 24px;
            border: 1px solid rgba(204,255,0,0.25);
        }
        .out-hero h1 {
            font-size: 3.1rem;
            font-weight: 600;
            line-height: 1.18;
            margin: 0 0 20px 0;
            letter-spacing: -0.025em;
            background: linear-gradient(135deg, #ffffff 40%, #e8ffb0);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .out-lead {
            font-size: 1.05rem;
            color: rgba(235,245,255,0.85);
            max-width: 555px;
            margin-bottom: 34px;
            font-weight: 400;
            line-height: 1.65;
        }
        /* service anchor pills in hero */
        .hero-service-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 32px;
        }
        .hero-service-link {
            padding: 7px 18px;
            border-radius: 40px;
            background: rgba(204,255,0,0.07);
            border: 1px solid rgba(204,255,0,0.2);
            color: rgba(204,255,0,0.9);
            font-size: 0.82rem;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s;
        }
        .hero-service-link:hover {
            background: rgba(204,255,0,0.15);
            color: var(--med-accent);
            text-decoration: none;
        }
        .out-btn-primary {
            background: var(--med-accent);
            color: #0a1a1f;
            padding: 13px 36px;
            border-radius: 48px;
            font-weight: 600;
            border: none;
            transition: all 0.25s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 22px rgba(0,0,0,0.2);
            font-size: 1rem;
        }
        .out-btn-primary:hover {
            background: #e2ff4a;
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(204,255,0,0.22);
            color: #0a1a1f;
            text-decoration: none;
        }
        .out-btn-outline {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255,255,255,0.25);
            padding: 13px 28px;
            border-radius: 48px;
            font-weight: 400;
            transition: 0.2s;
            text-decoration: none;
            margin-left: 12px;
        }
        .out-btn-outline:hover {
            border-color: var(--med-accent);
            color: var(--med-accent);
            background: rgba(204,255,0,0.05);
            text-decoration: none;
        }
        .out-hero-image { flex: 1; display: flex; justify-content: center; position: relative; }
        .out-hero-image img {
            max-width: 560px;
            width: 100%;
            border-radius: 40px;
            box-shadow: 0 40px 60px -20px rgba(0,0,0,0.65);
            border: 1px solid rgba(204,255,0,0.2);
            transition: all 0.4s ease;
            object-fit: cover;
            height: 420px;
        }
        .out-hero-image img:hover {
            transform: scale(1.01) translateY(-3px);
            border-color: var(--med-accent);
        }

        /* ── Cards ── */
        .out-card {
            background: var(--med-card);
            backdrop-filter: blur(2px);
            padding: 28px 26px;
            border-radius: 28px;
            border: 1px solid rgba(204,255,0,0.1);
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3);
            height: 100%;
            transition: all 0.3s;
        }
        .out-card h4 {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 14px;
            letter-spacing: -0.2px;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .out-card p {
            font-weight: 400;
            color: rgba(225,235,255,0.85);
            line-height: 1.6;
        }
        .card-icon {
            width: 38px;
            height: 38px;
            background: rgba(204,255,0,0.1);
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        /* ── Sections ── */
        .out-section { padding: 70px 0; }

        /* ── Stats ── */
        .out-feature-card {
            background: rgba(8,20,34,0.85);
            border-radius: 24px;
            padding: 28px 22px;
            border: 1px solid rgba(204,255,0,0.1);
            height: 100%;
            text-align: center;
            transition: 0.25s;
        }
        .out-stat {
            font-size: 2.6rem;
            font-weight: 600;
            color: var(--med-accent);
            margin-bottom: 8px;
            line-height: 1.1;
        }

        /* ── Service section layout ── */
        .service-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 18px;
            border-radius: 40px;
            background: rgba(204,255,0,0.08);
            border: 1px solid rgba(204,255,0,0.2);
            color: var(--med-accent);
            font-size: 0.82rem;
            font-weight: 500;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }
        .service-img {
            width: 100%;
            border-radius: 28px;
            object-fit: cover;
            height: 390px;
            border: 1px solid rgba(204,255,0,0.15);
            box-shadow: 0 30px 50px -15px rgba(0,0,0,0.5);
            transition: 0.35s ease;
        }
        .service-img:hover {
            border-color: rgba(204,255,0,0.35);
            transform: scale(1.01);
        }
        .feat-list {
            list-style: none;
            padding: 0; margin: 0;
            display: flex;
            flex-direction: column;
            gap: 13px;
        }
        .feat-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: rgba(225,238,255,0.9);
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
        .tag-strip { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 22px; }
        .tag-chip {
            padding: 5px 16px;
            border-radius: 40px;
            background: rgba(204,255,0,0.07);
            border: 1px solid rgba(204,255,0,0.18);
            color: rgba(204,255,0,0.85);
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* ── Service number accent ── */
        .svc-number {
            font-size: 5rem;
            font-weight: 700;
            color: rgba(204,255,0,0.06);
            line-height: 1;
            letter-spacing: -0.04em;
            position: absolute;
            top: -18px;
            left: 0;
            pointer-events: none;
            user-select: none;
        }
        .svc-heading-wrap { position: relative; padding-top: 10px; margin-bottom: 16px; }

        /* ── Dark alt section bg ── */
        .alt-bg {
            background: rgba(3,10,20,0.45);
            border-radius: 48px;
            margin: 0 0 20px;
        }
        .why-strip {
            background: rgba(2,12,22,0.5);
            border-radius: 48px;
            margin: 0 0 20px;
        }

        /* ── Process steps ── */
        .step-card {
            background: var(--med-card);
            border-radius: 24px;
            padding: 28px 22px;
            border: 1px solid rgba(204,255,0,0.1);
            text-align: center;
            height: 100%;
            transition: 0.25s;
        }
        .step-card:hover { border-color: rgba(204,255,0,0.3); }
        .step-num-circle {
            width: 48px;
            height: 48px;
            background: rgba(204,255,0,0.1);
            border: 1px solid rgba(204,255,0,0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: 600;
            color: var(--med-accent);
            margin: 0 auto 16px;
        }

        /* ── Form ── */
        .form-control-cs {
            width: 100%;
            padding: 14px 18px;
            background: rgba(5,14,24,0.95);
            border: 1px solid rgba(255,255,255,0.08);
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
            box-shadow: 0 0 0 3px rgba(204,255,0,0.15);
        }
        .cta-block {
            background: linear-gradient(135deg, rgba(8,22,38,0.98), rgba(4,14,26,0.99));
            border: 1px solid rgba(204,255,0,0.18);
            border-radius: 32px;
            padding: 54px 40px;
            text-align: center;
        }

        /* ── FAQ ── */
        .out-faq .faq-question {
            cursor: pointer;
            font-weight: 500;
            position: relative;
            padding-right: 32px;
            color: #f0f3fa;
            font-size: 1rem;
        }
        .out-faq .faq-question::after {
            content: '+';
            position: absolute;
            right: 0; top: -2px;
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--med-accent);
        }
        .out-faq .faq-item.active .faq-question::after { content: '−'; }
        .out-faq .faq-item {
            background: rgba(8,20,36,0.9);
            border-radius: 24px;
            padding: 20px 26px;
            margin-bottom: 14px;
            border: 1px solid rgba(204,255,0,0.1);
        }
        .out-faq .faq-answer {
            display: none;
            padding-top: 16px;
            color: rgba(220,235,255,0.85);
            font-weight: 400;
            line-height: 1.6;
        }

        /* ── Scroll top ── */
        #out-scroll-top {
            position: fixed;
            right: 26px; bottom: 26px;
            width: 48px; height: 48px;
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

        hr { border-color: rgba(204,255,0,0.12); margin: 20px 0; }
        .container { max-width: 1280px; }

        /* ── Live transfer highlight ── */
        .live-transfer-glow {
            position: relative;
            overflow: hidden;
        }
        .live-transfer-glow::before {
            content: '';
            position: absolute;
            top: -40%;
            left: -20%;
            width: 60%;
            height: 180%;
            background: radial-gradient(circle, rgba(204,255,0,0.05) 0%, transparent 65%);
            pointer-events: none;
        }

        /* ── Responsive ── */
        @media (max-width: 991px) {
            .out-hero-row { flex-direction: column-reverse; text-align: center; }
            .out-hero-content { text-align: center; }
            .out-hero h1 { font-size: 2.2rem; }
            .out-lead { margin-left: auto; margin-right: auto; }
            .hero-service-links { justify-content: center; }
            .out-section { padding: 50px 0; }
            .out-btn-outline { margin-left: 0; margin-top: 12px; display: inline-block; }
            .service-img { height: 280px; }
            .out-hero::after { display: none; }
            .svc-number { font-size: 3.5rem; }
        }
        @media (max-width: 576px) {
            .out-card h4 { font-size: 1.1rem; }
            .out-stat { font-size: 2rem; }
            .cta-block { padding: 36px 20px; }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>

        <!-- ══════════════════════════════════════════
             HERO
        ══════════════════════════════════════════ -->
        <section class="out-hero">
            <div class="container">
                <div class="out-hero-row">
                    <div class="out-hero-content animate-on-scroll">
                        <span class="out-badge">📣 Outbound Call Center Services</span>
                        <h1>We dial, qualify, and deliver ready-to-close opportunities</h1>
                        <p class="out-lead">From cold calling and lead generation to appointment setting and live transfers — our outbound agents fuel your sales pipeline with high-intent prospects, not just lists.</p>
                        <div class="hero-service-links">
                            <a href="#lead-generation" class="hero-service-link">🎯 Lead Generation</a>
                            <a href="#appointment-setting" class="hero-service-link">📅 Appointment Setting</a>
                            <a href="#live-transfer" class="hero-service-link">⚡ Live Transfer</a>
                            <a href="#cold-calling" class="hero-service-link">📞 Cold Calling</a>
                        </div>
                        <div>
                            <a href="#out-contact" class="out-btn-primary">Start generating leads →</a>
                            <a href="#out-services" class="out-btn-outline">See services</a>
                        </div>
                    </div>
                    <div class="out-hero-image animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?w=900&q=85&auto=format&fit=crop"
                            alt="Outbound sales agents making calls and generating leads"
                        >
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             INTRO OVERVIEW
        ══════════════════════════════════════════ -->
        <section class="out-section" id="out-services">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="out-badge" style="margin-bottom:12px;">What we do</span>
                        <h2 style="font-size:1.9rem; font-weight:600; margin:12px 0 18px;">Four outbound services. One goal — your pipeline filled.</h2>
                        <p style="color:rgba(235,245,255,0.85); line-height:1.65; margin-bottom:20px;">HS Digital Services runs a high-performance outbound BPO operation with specialists in every stage of the sales development cycle. Whether you need raw lead lists turned into conversations, calendars filled with qualified meetings, or warm prospects transferred live to your closers — we handle it all.</p>
                        <p style="color:rgba(235,245,255,0.8);">Our agents follow your scripts, hit your KPIs, and report every dial — transparently and in real time.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 d-flex animate-on-scroll">
                                <div class="out-card w-100" style="text-align:center; padding:22px 16px;">
                                    <div style="font-size:2rem; margin-bottom:10px;">🎯</div>
                                    <h4 style="justify-content:center; font-size:1rem; margin-bottom:8px;">Lead Generation</h4>
                                    <p style="font-size:0.87rem;">Identify, qualify, and deliver sales-ready leads.</p>
                                </div>
                            </div>
                            <div class="col-6 d-flex animate-on-scroll">
                                <div class="out-card w-100" style="text-align:center; padding:22px 16px;">
                                    <div style="font-size:2rem; margin-bottom:10px;">📅</div>
                                    <h4 style="justify-content:center; font-size:1rem; margin-bottom:8px;">Appointment Setting</h4>
                                    <p style="font-size:0.87rem;">Book confirmed meetings directly onto your calendar.</p>
                                </div>
                            </div>
                            <div class="col-6 d-flex animate-on-scroll">
                                <div class="out-card w-100" style="text-align:center; padding:22px 16px;">
                                    <div style="font-size:2rem; margin-bottom:10px;">⚡</div>
                                    <h4 style="justify-content:center; font-size:1rem; margin-bottom:8px;">Live Transfer</h4>
                                    <p style="font-size:0.87rem;">Warm, pre-qualified prospects handed live to your team.</p>
                                </div>
                            </div>
                            <div class="col-6 d-flex animate-on-scroll">
                                <div class="out-card w-100" style="text-align:center; padding:22px 16px;">
                                    <div style="font-size:2rem; margin-bottom:10px;">📞</div>
                                    <h4 style="justify-content:center; font-size:1rem; margin-bottom:8px;">Cold Calling</h4>
                                    <p style="font-size:0.87rem;">Script-driven outreach that opens doors and starts conversations.</p>
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
        <section class="out-section why-strip">
            <div class="container">
                <div class="row g-4">
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="out-feature-card w-100">
                            <div class="out-stat">3×</div>
                            <h4 style="font-weight:500; font-size:1rem;">Pipeline growth</h4>
                            <p style="font-size:0.88rem;">Average increase reported by our clients after 90 days.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="out-feature-card w-100">
                            <div class="out-stat">85%</div>
                            <h4 style="font-weight:500; font-size:1rem;">Appointment show rate</h4>
                            <p style="font-size:0.88rem;">Confirmed and reminder-managed bookings that actually show.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="out-feature-card w-100">
                            <div class="out-stat">1M+</div>
                            <h4 style="font-weight:500; font-size:1rem;">Calls dialed monthly</h4>
                            <p style="font-size:0.88rem;">Scale that small internal teams simply cannot match.</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 d-flex animate-on-scroll">
                        <div class="out-feature-card w-100">
                            <div class="out-stat">40+</div>
                            <h4 style="font-weight:500; font-size:1rem;">Industries served</h4>
                            <p style="font-size:0.88rem;">Healthcare, SaaS, real estate, insurance, finance & more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             SERVICE 1: LEAD GENERATION
        ══════════════════════════════════════════ -->
        <section class="out-section" id="lead-generation">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=900&q=85&auto=format&fit=crop"
                            alt="Sales team strategizing lead generation and prospect outreach"
                            class="service-img"
                        >
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="service-pill">🎯 Service 01</span>
                        <div class="svc-heading-wrap">
                            <span class="svc-number">01</span>
                            <h2 style="font-size:1.85rem; font-weight:600; letter-spacing:-0.02em; position:relative; z-index:1;">Lead Generation</h2>
                        </div>
                        <p style="color:rgba(235,245,255,0.85); line-height:1.65; margin-bottom:24px;">We don't just hand you names — we hand you conversations. Our lead generation team works through targeted outreach, prospect research, and multi-touch qualification to build you a pipeline of genuinely interested potential customers, filtered to match your ideal customer profile (ICP) exactly.</p>
                        <ul class="feat-list">
                            <li>Ideal Customer Profile (ICP) research and list building</li>
                            <li>Multi-channel prospecting — phone, email follow-up, and warm callbacks</li>
                            <li>BANT qualification (Budget, Authority, Need, Timeline) on every lead</li>
                            <li>CRM enrichment — leads delivered directly into your system</li>
                            <li>Real-time lead scoring and tier segmentation</li>
                            <li>Daily and weekly pipeline reports with conversion metrics</li>
                            <li>Dedicated lead gen team per campaign — no shared agents</li>
                        </ul>
                        <div class="tag-strip">
                            <span class="tag-chip">ICP Targeting</span>
                            <span class="tag-chip">BANT Qualified</span>
                            <span class="tag-chip">CRM Integration</span>
                            <span class="tag-chip">B2B & B2C</span>
                            <span class="tag-chip">Weekly Reports</span>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">🔍</span> Prospect Research</h4>
                            <p>We build targeted contact lists from verified sources — filtered by industry, job title, company size, and geography — so every dial is a relevant conversation.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">✅</span> Multi-Stage Qualification</h4>
                            <p>Leads go through a structured qualification process before being passed to your sales team — ensuring you only spend time on prospects who match your criteria.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">📊</span> Pipeline Reporting</h4>
                            <p>Transparent dashboards showing dials made, contacts reached, leads qualified, and conversion rates — updated daily so you always know where your pipeline stands.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             SERVICE 2: APPOINTMENT SETTING
        ══════════════════════════════════════════ -->
        <section class="out-section alt-bg" id="appointment-setting">
            <div class="container">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=85&auto=format&fit=crop"
                            alt="Professional appointment setter scheduling meetings and managing calendars"
                            class="service-img"
                        >
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="service-pill">📅 Service 02</span>
                        <div class="svc-heading-wrap">
                            <span class="svc-number">02</span>
                            <h2 style="font-size:1.85rem; font-weight:600; letter-spacing:-0.02em; position:relative; z-index:1;">Appointment Setting</h2>
                        </div>
                        <p style="color:rgba(235,245,255,0.85); line-height:1.65; margin-bottom:24px;">Your sales team should be closing — not chasing. Our appointment setters engage prospects, build rapport, overcome initial objections, and book confirmed meetings directly into your calendar. Every appointment arrives with full notes so your closer walks in prepared, not cold.</p>
                        <ul class="feat-list">
                            <li>Outbound calling to pre-qualified or cold prospect lists</li>
                            <li>Calendar integration with Google Calendar, Outlook, Calendly & more</li>
                            <li>Prospect pre-qualification before confirming the meeting</li>
                            <li>Automated reminder calls and follow-up SMS to reduce no-shows</li>
                            <li>Full meeting notes — company background, pain points, interest level</li>
                            <li>Reschedule management and cancellation recovery calls</li>
                            <li>Industry-specific scripts written and refined per campaign</li>
                        </ul>
                        <div class="tag-strip">
                            <span class="tag-chip">Calendar Sync</span>
                            <span class="tag-chip">No-Show Follow-Up</span>
                            <span class="tag-chip">Custom Scripts</span>
                            <span class="tag-chip">Pre-Qualified Only</span>
                            <span class="tag-chip">Full Meeting Notes</span>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">📆</span> Direct Calendar Booking</h4>
                            <p>Appointments land directly into your preferred scheduling tool in real time — no manual data entry, no back-and-forth emails between you and the prospect.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">🔔</span> Reminder & No-Show Recovery</h4>
                            <p>We call and message prospects 24 hours before and the morning of every meeting — dramatically improving show rates and recovering cancellations with same-day reschedules.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">📝</span> Detailed Prospect Briefs</h4>
                            <p>Your closer receives a full brief before every meeting: company size, decision-maker name, identified pain points, and the prospect's stated interest — so every call starts warm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             SERVICE 3: LIVE TRANSFER
        ══════════════════════════════════════════ -->
        <section class="out-section live-transfer-glow" id="live-transfer">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=900&q=85&auto=format&fit=crop"
                            alt="Live transfer agents connecting warm prospects to sales closers in real time"
                            class="service-img"
                        >
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="service-pill">⚡ Service 03</span>
                        <div class="svc-heading-wrap">
                            <span class="svc-number">03</span>
                            <h2 style="font-size:1.85rem; font-weight:600; letter-spacing:-0.02em; position:relative; z-index:1;">Live Transfer</h2>
                        </div>
                        <p style="color:rgba(235,245,255,0.85); line-height:1.65; margin-bottom:24px;">Live transfer is the fastest path from prospect to close. Our agents call, qualify, and warm up the prospect — then transfer them live and in real time to your sales closer while they're still engaged and ready to talk. No drop-offs, no voicemails, no lost momentum. Just a hot prospect on the line.</p>
                        <ul class="feat-list">
                            <li>Real-time warm transfers to your sales team or closer</li>
                            <li>Full prospect qualification completed before any transfer is made</li>
                            <li>Agent whisper briefing — your closer hears prospect details before joining</li>
                            <li>Transfer quality monitoring with live supervisor oversight</li>
                            <li>Custom qualification criteria set per campaign and vertical</li>
                            <li>Overflow handling — transfers routed to backup closers if needed</li>
                            <li>Per-transfer reporting with outcome tracking and close rate data</li>
                        </ul>
                        <div class="tag-strip">
                            <span class="tag-chip">Real-Time Transfer</span>
                            <span class="tag-chip">Agent Whisper</span>
                            <span class="tag-chip">Pre-Qualified</span>
                            <span class="tag-chip">Supervisor QA</span>
                            <span class="tag-chip">Outcome Tracked</span>
                        </div>
                    </div>
                </div>
                <!-- Live transfer special highlight row -->
                <div class="row g-4 mt-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift" style="border-color:rgba(204,255,0,0.18);">
                            <h4><span class="card-icon">🔥</span> Hot Prospect Delivery</h4>
                            <p>Prospects are transferred only after they verbally confirm interest and meet your qualification criteria — your closer never picks up a cold or uninterested call.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift" style="border-color:rgba(204,255,0,0.18);">
                            <h4><span class="card-icon">🎙️</span> Whisper Briefing</h4>
                            <p>Using agent whisper technology, your closer hears a 5–10 second brief from the agent before the prospect comes on — name, company, interest, and key qualifying details.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift" style="border-color:rgba(204,255,0,0.18);">
                            <h4><span class="card-icon">📡</span> Live QA Monitoring</h4>
                            <p>Supervisors monitor transfers in real time, ensuring quality stays consistent and stepping in immediately if a transfer doesn't meet your defined standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             SERVICE 4: COLD CALLING
        ══════════════════════════════════════════ -->
        <section class="out-section alt-bg" id="cold-calling">
            <div class="container">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 animate-on-scroll">
                        <img
                            src="https://images.unsplash.com/photo-1565728744382-61accd4aa148?w=900&q=85&auto=format&fit=crop"
                            alt="Confident cold caller engaging prospects with professional outbound scripts"
                            class="service-img"
                        >
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="service-pill">📞 Service 04</span>
                        <div class="svc-heading-wrap">
                            <span class="svc-number">04</span>
                            <h2 style="font-size:1.85rem; font-weight:600; letter-spacing:-0.02em; position:relative; z-index:1;">Cold Calling</h2>
                        </div>
                        <p style="color:rgba(235,245,255,0.85); line-height:1.65; margin-bottom:24px;">Cold calling done right is still one of the most powerful and direct sales tools available. Our callers are trained in objection handling, tone control, and conversation-based selling — not robotic script reading. They open doors, build credibility, and move prospects toward a decision with every single call.</p>
                        <ul class="feat-list">
                            <li>High-volume outbound dialing with power and predictive dialers</li>
                            <li>Custom cold calling scripts tailored to your product and industry</li>
                            <li>Objection handling training for the most common prospect pushbacks</li>
                            <li>Contact rate optimization — best time-to-call analysis per segment</li>
                            <li>Call recording and quality review on every agent weekly</li>
                            <li>Gatekeeper bypass strategies for B2B decision-maker access</li>
                            <li>Voicemail drop campaigns for maximum callback rates</li>
                        </ul>
                        <div class="tag-strip">
                            <span class="tag-chip">Power Dialer</span>
                            <span class="tag-chip">Custom Scripts</span>
                            <span class="tag-chip">Objection Trained</span>
                            <span class="tag-chip">Gatekeeper Bypass</span>
                            <span class="tag-chip">Voicemail Drop</span>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">⚙️</span> Power Dialer Technology</h4>
                            <p>Our agents use advanced auto-dialers that maximize talk time and minimize idle time — allowing each agent to reach significantly more prospects per shift than manual dialing.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">🧠</span> Objection Handling Playbooks</h4>
                            <p>Every agent is trained with a custom objection playbook built specifically for your industry. Common pushbacks are turned into opportunities to build trust and deepen interest.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="out-card w-100 hover-lift">
                            <h4><span class="card-icon">🎧</span> Weekly Call Reviews</h4>
                            <p>Supervisors listen to recorded calls weekly, score agent performance, and provide structured coaching — ensuring quality improves continuously across every campaign.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             HOW IT WORKS
        ══════════════════════════════════════════ -->
        <section class="out-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size:1.9rem; font-weight:600;">From kickoff to pipeline in 7 days</h2>
                    <p style="color:rgba(255,255,255,0.7); max-width:600px; margin:12px auto 0;">A proven onboarding process that gets your outbound campaign live fast — without cutting corners on training.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="step-card w-100">
                            <div class="step-num-circle">01</div>
                            <h4 style="justify-content:center; font-size:1.05rem; margin-bottom:10px;">Strategy call</h4>
                            <p style="font-size:0.9rem; color:rgba(225,235,255,0.85);">We define your ICP, campaign goals, KPIs, target industries, and any compliance requirements for your vertical.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="step-card w-100">
                            <div class="step-num-circle">02</div>
                            <h4 style="justify-content:center; font-size:1.05rem; margin-bottom:10px;">Script & list build</h4>
                            <p style="font-size:0.9rem; color:rgba(225,235,255,0.85);">Our team writes your calling scripts, builds your prospect list, and configures CRM and dialer integrations.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="step-card w-100">
                            <div class="step-num-circle">03</div>
                            <h4 style="justify-content:center; font-size:1.05rem; margin-bottom:10px;">Agent training</h4>
                            <p style="font-size:0.9rem; color:rgba(225,235,255,0.85);">Dedicated agents are trained on your script, product knowledge, objection handling, and brand tone before the first dial.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="step-card w-100">
                            <div class="step-num-circle">04</div>
                            <h4 style="justify-content:center; font-size:1.05rem; margin-bottom:10px;">Launch & optimize</h4>
                            <p style="font-size:0.9rem; color:rgba(225,235,255,0.85);">Campaign goes live with daily performance tracking. We optimize scripts and targeting weekly based on real call data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             WHY CHOOSE US
        ══════════════════════════════════════════ -->
        <section class="out-section why-strip">
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-5 animate-on-scroll">
                        <span class="out-badge" style="margin-bottom:14px;">Why HS Digital Services</span>
                        <h2 style="font-size:1.85rem; font-weight:600; margin-bottom:18px;">Outbound done by people who actually understand sales</h2>
                        <p style="color:rgba(235,245,255,0.85); line-height:1.65;">We're not a generic call center that reads scripts. We recruit people with real sales aptitude, train them intensively, and manage them to outcomes — not just activity metrics. Your pipeline growth is the only number that matters to us.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-3">
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="out-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">🧑‍💼</span> Sales-Trained Agents</h4>
                                    <p style="font-size:0.9rem;">Our callers are hired for sales aptitude, not just availability. They're trained in consultative selling, not robotic script delivery.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="out-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">📈</span> Outcome-Based Pricing</h4>
                                    <p style="font-size:0.9rem;">Flexible pricing models available — per lead, per appointment, per transfer, or retainer — aligned to your results, not just hours.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="out-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">🔧</span> Full Tech Stack</h4>
                                    <p style="font-size:0.9rem;">Power dialers, predictive dialers, CRM integrations, call recording, and real-time dashboards — all included, no extra setup cost.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex animate-on-scroll">
                                <div class="out-card w-100 hover-lift">
                                    <h4 style="font-size:1.05rem;"><span class="card-icon">🌍</span> Multi-Industry Experience</h4>
                                    <p style="font-size:0.9rem;">From healthcare and insurance to SaaS, real estate, and financial services — we bring vertical-specific knowledge to every campaign.</p>
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
        <section class="out-section out-faq" id="out-faq">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-weight:600; font-size:1.8rem;">Frequently asked questions</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">What industries do you run outbound campaigns for?</div>
                            <div class="faq-answer">We have active experience in healthcare, insurance, real estate, SaaS, financial services, solar, home services, and more. Our team adapts to your industry's language, compliance requirements, and buyer psychology quickly during onboarding.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Do you provide the prospect lists or do I need to supply them?</div>
                            <div class="faq-answer">Both options work. We can source and build targeted, verified prospect lists for you based on your ICP — or work from lists you already have. We can also scrub and enrich your existing data before dialing begins to improve contact rates.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">How is live transfer different from appointment setting?</div>
                            <div class="faq-answer">With live transfer, a qualified prospect is connected to your sales closer immediately and in real time while they're still on the phone with our agent. Appointment setting books a meeting for a future date and time. Live transfer drives faster closes; appointment setting works better for longer sales cycles or when your closers aren't available 24/7.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">How quickly can a cold calling campaign be launched?</div>
                            <div class="faq-answer">Most cold calling campaigns are live within 5–7 business days from signing. This covers script writing, list building, agent assignment, product training, and dialer configuration. More complex or compliance-heavy campaigns may take up to 10 days.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Can I listen to call recordings and monitor agent performance?</div>
                            <div class="faq-answer">Absolutely. You receive access to call recordings, live dashboards, and weekly performance reports. You can request to listen to any recorded call, and our QA supervisors share agent scorecards with you on a regular cadence so you're always in full control.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════
             CONTACT FORM
        ══════════════════════════════════════════ -->
        <!-- <section id="out-contact" class="out-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 animate-on-scroll">
                        <div class="cta-block">
                            <span class="out-badge" style="margin-bottom:18px;">Start today</span>
                            <h2 style="font-size:1.7rem; font-weight:600; margin-bottom:10px;">Ready to fill your pipeline with qualified prospects?</h2>
                            <p style="color:rgba(255,255,255,0.72); margin-bottom:32px; max-width:520px; margin-left:auto; margin-right:auto;">Tell us which outbound service you need and your campaign goals. We'll put together a tailored proposal within 24 hours — no obligation, no pressure.</p>
                            <form action="submit-outbound.php" method="POST">
                                <div class="row g-4" style="text-align:left;">
                                    <div class="col-md-6"><input name="fullname" placeholder="Full name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="company" placeholder="Company name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="email" type="email" placeholder="Business email" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="phone" placeholder="Phone number" class="form-control-cs"></div>
                                    <div class="col-md-6">
                                        <select name="service" class="form-control-cs" required>
                                            <option value="" disabled selected>Service needed</option>
                                            <option>Lead Generation</option>
                                            <option>Appointment Setting</option>
                                            <option>Live Transfer</option>
                                            <option>Cold Calling</option>
                                            <option>Multiple Services</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="industry" class="form-control-cs">
                                            <option value="" disabled selected>Your industry</option>
                                            <option>Healthcare / Medical</option>
                                            <option>Insurance</option>
                                            <option>Real Estate</option>
                                            <option>SaaS / Technology</option>
                                            <option>Financial Services</option>
                                            <option>Solar / Home Services</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="notes" placeholder="Describe your campaign — target market, monthly lead volume needed, current sales process, or anything else that helps us understand your goals..." class="form-control-cs" style="min-height:110px;"></textarea>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <button class="out-btn-primary" type="submit" style="border:none; cursor:pointer; font-size:1rem; padding:14px 42px;">Send my request →</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    </main>

    <div id="out-scroll-top" title="Back to top">↑</div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ============================================================
        // HAMBURGER MENU FIX – same pattern as all other pages
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
        // OUTBOUND PAGE SCRIPTS
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
            document.querySelectorAll('.out-faq .faq-item').forEach(item => {
                item.querySelector('.faq-question').addEventListener('click', function () {
                    const isOpen = item.classList.contains('active');
                    document.querySelectorAll('.out-faq .faq-item').forEach(other => {
                        other.classList.remove('active');
                        other.querySelector('.faq-answer').style.display = 'none';
                    });
                    if (!isOpen) {
                        item.classList.add('active');
                        item.querySelector('.faq-answer').style.display = 'block';
                    }
                });
            });

            // Scroll-to-top
            const btn = document.getElementById('out-scroll-top');
            window.addEventListener('scroll', () => {
                btn.style.display = window.scrollY > 400 ? 'flex' : 'none';
            });
            btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        })();
    </script>
</body>
</html>