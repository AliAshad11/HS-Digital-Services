<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Home Improvement Outbound Services | HS Digital Services | Booked Estimates, Guaranteed</title>
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
        /* animations */
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
        /* Hero section */
        .med-hero {
            padding: 80px 0 70px;
            border-radius: 32px;
            overflow: hidden;
            position: relative;
            background: radial-gradient(ellipse at 70% 35%, rgba(2, 18, 32, 0.97), rgba(0, 6, 14, 0.99));
            border: 1px solid rgba(255, 255, 255, 0.04);
            margin-top: 10px;
        }
        .med-hero::before {
            content: '';
            position: absolute;
            right: -8%;
            top: -15%;
            width: 60%;
            height: 140%;
            background: radial-gradient(circle, rgba(204, 255, 0, 0.07) 0%, transparent 70%);
            pointer-events: none;
        }
        .med-hero-row {
            display: flex;
            gap: 55px;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1320px;
            margin: 0 auto;
        }
        .med-hero-content {
            flex: 1.2;
            min-width: 300px;
        }
        .med-badge {
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
        .med-hero h1 {
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
        .med-lead {
            font-size: 1.05rem;
            color: rgba(235, 245, 255, 0.85);
            max-width: 560px;
            margin-bottom: 32px;
            font-weight: 400;
            line-height: 1.6;
        }
        .med-btn-primary {
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
        .med-btn-primary:hover {
            background: #e2ff4a;
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(204,255,0,0.2);
            color: #0a1a1f;
            text-decoration: none;
        }
        .med-btn-outline {
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
        .med-btn-outline:hover {
            border-color: var(--med-accent);
            color: var(--med-accent);
            background: rgba(204, 255, 0, 0.05);
            text-decoration: none;
        }
        .med-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .med-hero-image img {
            max-width: 560px;
            width: 100%;
            border-radius: 40px;
            box-shadow: 0 40px 60px -20px rgba(0,0,0,0.6);
            border: 1px solid rgba(204,255,0,0.2);
            transition: all 0.4s ease;
            object-fit: cover;
        }
        .med-hero-image img:hover {
            transform: scale(1.01) translateY(-3px);
            border-color: var(--med-accent);
        }
        /* Card style */
        .med-card {
            background: var(--med-card);
            backdrop-filter: blur(2px);
            padding: 28px 26px;
            border-radius: 28px;
            border: 1px solid rgba(204, 255, 0, 0.1);
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3);
            height: 100%;
            transition: all 0.3s;
        }
        .med-card h4 {
            font-size: 1.3rem;
            font-weight: 500;
            margin-bottom: 14px;
            letter-spacing: -0.2px;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .med-card p {
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
        }
        .med-feature-card {
            background: rgba(8, 20, 34, 0.85);
            border-radius: 24px;
            padding: 28px 22px;
            border: 1px solid rgba(204, 255, 0, 0.1);
            transition: 0.25s;
            height: 100%;
            text-align: center;
        }
        .med-stat {
            font-size: 2.6rem;
            font-weight: 600;
            color: var(--med-accent);
            margin-bottom: 8px;
            line-height: 1.1;
        }
        .form-control-cs {
            width: 100%;
            padding: 14px 18px;
            background: rgba(5, 14, 24, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            color: #fff;
            font-size: 0.95rem;
            transition: 0.2s;
        }
        .form-control-cs:focus {
            border-color: var(--med-accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(204, 255, 0, 0.15);
        }
        .med-table {
            background: rgba(6, 16, 26, 0.75);
            border-radius: 24px;
            overflow: hidden;
        }
        .med-table th {
            background: rgba(204, 255, 0, 0.08);
            color: var(--med-accent);
            font-weight: 500;
            padding: 16px 20px;
        }
        .med-table td {
            padding: 14px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            color: #eef3ff;
            font-weight: 400;
        }
        /* FAQ */
        .med-faq .faq-question {
            cursor: pointer;
            font-weight: 500;
            position: relative;
            padding-right: 32px;
            color: #f0f3fa;
            font-size: 1rem;
        }
        .med-faq .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            top: -2px;
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--med-accent);
        }
        .med-faq .faq-item.active .faq-question::after {
            content: '−';
        }
        .med-faq .faq-item {
            background: rgba(8, 20, 36, 0.9);
            border-radius: 24px;
            padding: 20px 26px;
            margin-bottom: 14px;
            border: 1px solid rgba(204, 255, 0, 0.1);
        }
        .med-faq .faq-answer {
            display: none;
            padding-top: 16px;
            color: rgba(220, 235, 255, 0.85);
            font-weight: 400;
            line-height: 1.6;
        }
        #med-scroll-top {
            position: fixed;
            right: 26px;
            bottom: 26px;
            width: 48px;
            height: 48px;
            background: var(--med-accent);
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #08131b;
            cursor: pointer;
            z-index: 1000;
            display: none;
            font-weight: 500;
            transition: 0.2s;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        .med-section {
            padding: 70px 0;
        }
        /* Zero dollar card style — reused here as "$0 setup" style highlight */
        .zero-card {
            text-align: center;
            background: linear-gradient(135deg, rgba(8, 22, 38, 0.95), rgba(4, 14, 26, 0.98));
            border: 1px solid rgba(204, 255, 0, 0.2);
        }
        .zero-amount {
            font-size: 3.2rem;
            font-weight: 500;
            color: var(--med-accent);
            letter-spacing: -0.02em;
            line-height: 1;
            margin-bottom: 8px;
        }
        .zero-label {
            font-size: 1rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(204, 255, 0, 0.7);
            margin-bottom: 12px;
        }
        @media (max-width: 991px) {
            .med-hero-row { flex-direction: column-reverse; text-align: center; }
            .med-hero-content { text-align: center; }
            .med-hero h1 { font-size: 2.2rem; }
            .med-lead { margin-left: auto; margin-right: auto; }
            .med-hero-buttons { justify-content: center; }
            .med-section { padding: 50px 0; }
            .med-btn-outline { margin-left: 0; margin-top: 12px; display: inline-block; }
        }
        @media (max-width: 576px) {
            .med-card h4 { font-size: 1.2rem; }
            .zero-amount { font-size: 2.5rem; }
        }
        .container { max-width: 1280px; }
        hr { border-color: rgba(204,255,0,0.12); margin: 20px 0; }
        .text-soft { font-weight: 400; }
        .list-check li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- HOME IMPROVEMENT HERO -->
        <section class="med-hero">
            <div class="container">
                <div class="med-hero-row">
                    <div class="med-hero-content animate-on-scroll">
                        <span class="med-badge">Home Improvement Outbound</span>
                        <h1>Booked estimates for your home improvement business — on autopilot</h1>
                        <p class="med-lead">Our outbound call center finds homeowners ready to renovate, qualifies their project and budget, and puts confirmed estimates on your calendar — so your crews stay busy and your sales reps stay closing.</p>
                        <div class="med-hero-buttons">
                            <a href="quotes.php" class="med-btn-primary">Get booked estimates →</a>
                            <a href="#med-guide" class="med-btn-outline">How it works</a>
                        </div>
                    </div>
                    <div class="med-hero-image animate-on-scroll">
                        <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b?w=900&q=85&auto=format&fit=crop" alt="Outbound call center agent booking a home improvement estimate" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <!-- WHAT IS HOME IMPROVEMENT OUTBOUND SECTION -->
        <section id="med-guide" class="med-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="med-badge" style="margin-bottom: 12px;">What we do</span>
                        <h2 style="font-size: 1.9rem; font-weight: 600; margin: 12px 0 18px;">Outbound calling built specifically for home improvement</h2>
                        <p style="color: rgba(235, 245, 255, 0.85); line-height: 1.65; margin-bottom: 20px;">Home Improvement Outbound is our dedicated BPO service for roofing, solar, HVAC, window, siding, kitchen & bath, and remodeling companies. Our agents call homeowner leads, qualify project type and budget, and either book a confirmed in-home estimate or transfer the homeowner live to your sales team — whichever moves the deal forward fastest.</p>
                        <p style="color: rgba(235, 245, 255, 0.8);">No flat-script reading. Our agents are trained on real homeowner objections, financing questions, and seasonal buying behavior across every trade we serve.</p>
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <div class="med-card">
                            <h4><span class="card-icon">📋</span> What's included</h4>
                            <p>✔ Homeowner lead sourcing & qualification<br>✔ Confirmed in-home or virtual estimate booking<br>✔ Live transfer to your sales team when ready<br>✔ Reminder calls to reduce no-shows<br>✔ Full CRM and calendar integration</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THE 4 SERVICES — clean icon grid, same layout as Parts A/B/C/D -->
        <section class="med-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size: 1.9rem; font-weight: 600;">Our home improvement outbound services</h2>
                    <p style="color: rgba(255,255,255,0.7); max-width: 680px; margin: 12px auto 0;">Four services, one job — keeping your pipeline full of homeowners ready to build.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">🎯</span> Lead Generation</h4>
                            <p>We source and qualify homeowners by project type, property details, and budget — so every lead handed to your team is genuinely worth pursuing.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">📅</span> Estimate Booking</h4>
                            <p>Confirmed in-home or virtual estimate appointments booked directly into your calendar, complete with reminder calls to cut down no-shows.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">⚡</span> Live Transfer</h4>
                            <p>A qualified, motivated homeowner is transferred to your rep live and in real time — while they're still warm and ready to talk.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">☎️</span> Customer Support</h4>
                            <p>Inbound support for scheduling, billing, warranty, and post-install follow-up — keeping past customers happy and referring new business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LEAD GEN vs LIVE TRANSFER COMPARISON -->
        <section class="med-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 animate-on-scroll">
                        <div class="med-card" style="background: rgba(6, 18, 32, 0.95);">
                            <h4><span class="card-icon">📅</span> Estimate Booking</h4>
                            <p>We call your homeowner list, confirm project interest and timeline, and lock in a scheduled estimate visit — giving your estimators a full calendar without the chasing.</p>
                            <hr>
                            <p>✅ Works for longer sales cycles and field-scheduling teams<br>✅ Full project notes before every visit<br>✅ Reminder calls and reschedule recovery included</p>
                        </div>
                    </div>
                    <div class="col-md-6 animate-on-scroll">
                        <div class="med-card" style="background: rgba(6, 18, 32, 0.95);">
                            <h4><span class="card-icon">⚡</span> Live Transfer</h4>
                            <p>For teams who want speed, we qualify the homeowner first, then connect them directly to your sales rep by phone — no scheduling gap, no cooled-off lead.</p>
                            <hr>
                            <p>We help you decide which model — or mix of both — fits your sales process and crew capacity best, free of charge.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATISTICS SECTION -->
        <section class="med-section" style="background: rgba(2, 12, 22, 0.5); border-radius: 48px; margin: 0 0 20px;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">3.5×</div>
                            <h4 style="font-weight: 500;">Pipeline growth</h4>
                            <p>average increase in booked estimates after 90 days.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">82%</div>
                            <h4 style="font-weight: 500;">Show rate</h4>
                            <p>on estimates booked and reminder-managed by our team.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">20+</div>
                            <h4 style="font-weight: 500;">Trades served</h4>
                            <p>roofing, solar, HVAC, windows, remodeling & more.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">750K+</div>
                            <h4 style="font-weight: 500;">Calls dialed monthly</h4>
                            <p>scale that an in-house team simply can't match.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ONBOARDING TIMELINE TABLE -->
        <section class="med-section">
            <div class="container">
                <div class="text-center mb-4 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.8rem;">From kickoff to booked estimates — fast</h2>
                    <p style="color: rgba(255,255,255,0.7);">A proven onboarding process with no shortcuts on training.</p>
                </div>
                <div class="animate-on-scroll">
                    <div class="med-table">
                        <table class="table table-borderless" style="margin-bottom:0; width:100%;">
                            <thead>
                                <tr><th>Stage</th><th>Timing</th><th>What happens</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><strong>Strategy call</strong></td><td>Day 1</td><td>Define service area, target trades, KPIs, and compliance needs</td></tr>
                                <tr><td><strong>Script & list build</strong></td><td>Days 2–3</td><td>Scripts written, homeowner list built, CRM & dialer configured</td></tr>
                                <tr><td><strong>Agent training</strong></td><td>Days 4–5</td><td>Agents trained on your trade, objections, and brand tone</td></tr>
                                <tr><td><strong>Launch & optimize</strong></td><td>Day 6–7 onward</td><td>Campaign goes live; scripts and targeting refined weekly</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY CHOOSE US + $0 SETUP HIGHLIGHT -->
        <section class="med-section">
            <div class="container">
                <div class="row g-5 align-items-stretch">
                    <div class="col-lg-7 animate-on-scroll">
                        <div class="med-card h-100">
                            <h3 style="font-weight: 600; font-size: 1.6rem; margin-bottom: 18px;">Outbound run by people who understand the trades</h3>
                            <p style="color: rgba(235, 245, 255, 0.85); margin-bottom: 20px; line-height: 1.65;">We're not a generic call center reading a flat script. We recruit agents with real sales aptitude, train them on home improvement-specific objections and financing questions, and manage every campaign to outcomes — booked estimates and signed jobs, not just call volume.</p>
                            <div style="display: flex; flex-direction: column; gap: 12px;">
                                <p style="display: flex; align-items: center; gap: 12px;"><span style="color: var(--med-accent); font-size: 1.2rem;">✓</span> Trade-trained agents, not flat-script readers</p>
                                <p style="display: flex; align-items: center; gap: 12px;"><span style="color: var(--med-accent); font-size: 1.2rem;">✓</span> Outcome-based pricing — per lead, per estimate, or per transfer</p>
                                <p style="display: flex; align-items: center; gap: 12px;"><span style="color: var(--med-accent); font-size: 1.2rem;">✓</span> Full CRM, dialer, and calendar integration included</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animate-on-scroll">
                        <div class="med-card zero-card h-100 d-flex flex-column justify-content-center">
                            <div class="zero-amount">$0</div>
                            <div class="zero-label">Setup fee</div>
                            <p style="color: rgba(235, 245, 255, 0.9); margin-top: 12px; font-size: 0.95rem;">No setup cost, no long-term lock-in. You only pay for the leads, estimates, or transfers your campaign actually delivers.</p>
                            <div style="margin-top: 18px;">
                                <span style="display: inline-block; background: rgba(204,255,0,0.1); padding: 6px 14px; border-radius: 40px; font-size: 0.75rem; color: var(--med-accent);">No obligation • Free proposal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="med-faq" class="med-section med-faq">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.8rem;">Frequently asked questions</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Which home improvement trades do you support?</div>
                            <div class="faq-answer">We run active campaigns for roofing, solar, HVAC, windows and doors, siding, kitchen and bath remodeling, flooring, gutters, and general contracting. Scripts and qualification criteria are adapted to your specific trade during onboarding.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Do you provide the homeowner lists or do I need to supply them?</div>
                            <div class="faq-answer">Both options work. We can source and build targeted, verified homeowner lists based on your service area and project criteria, or work from lists you already have — including past leads or aged data we can re-engage.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">What's the difference between estimate booking and live transfer?</div>
                            <div class="faq-answer">Estimate booking schedules an in-home or virtual visit for a future date. Live transfer connects a qualified homeowner to your sales rep immediately, while they're still on the phone with our agent. Live transfer moves faster; estimate booking fits teams that coordinate field schedules in advance.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">How quickly can a campaign launch?</div>
                            <div class="faq-answer">Most campaigns are live within 5–7 business days from signing, covering script writing, list building, agent assignment, and dialer configuration. Campaigns with licensing or regional compliance requirements may take up to 10 days.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Can I listen to call recordings and monitor agent performance?</div>
                            <div class="faq-answer">Yes. You get access to call recordings, live dashboards, and weekly performance reports, plus the ability to request any recorded call and review agent scorecards from our QA supervisors.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT / QUOTE FORM -->
        <!-- <section id="med-contact" class="med-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 animate-on-scroll">
                        <div class="med-card" style="padding: 42px 36px;">
                            <h3 style="text-align: center; font-weight: 600; margin-bottom: 8px; font-size: 1.6rem;">Get a free home improvement outbound proposal</h3>
                            <p style="text-align: center; color: rgba(255,255,255,0.75); margin-bottom: 32px;">Tell us your trade and goals — we'll put together a tailored plan, no obligation.</p>
                            <form action="submit-home-improvement.php" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-6"><input name="fullname" placeholder="Full name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="company" placeholder="Company name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="email" type="email" placeholder="Business email" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="phone" placeholder="Phone number" class="form-control-cs" required></div>
                                    <div class="col-12">
                                        <select name="trade" class="form-control-cs" required>
                                            <option value="" disabled selected>Your trade</option>
                                            <option>Roofing</option>
                                            <option>Solar</option>
                                            <option>HVAC</option>
                                            <option>Windows & Doors</option>
                                            <option>Siding</option>
                                            <option>Kitchen & Bath Remodeling</option>
                                            <option>Flooring</option>
                                            <option>General Contracting</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12"><textarea name="notes" placeholder="Tell us about your service area, monthly lead volume needed, or current sales process" class="form-control-cs" style="min-height: 115px;"></textarea></div>
                                    <div class="col-12 text-center mt-3"><button class="med-btn-primary" type="submit" style="border: none; cursor: pointer;">Get my proposal →</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>

    <div id="med-scroll-top" title="Back to top">↑</div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX
        // ================================================
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

        // ================================================
        // HOME IMPROVEMENT PAGE SCRIPTS
        // ================================================
        (function() {
            const animated = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: "0px 0px -15px 0px" });
            animated.forEach(el => observer.observe(el));

            const faqItems = document.querySelectorAll('.med-faq .faq-item');
            faqItems.forEach(item => {
                const questionDiv = item.querySelector('.faq-question');
                const answerDiv = item.querySelector('.faq-answer');
                questionDiv.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    faqItems.forEach(other => {
                        if (other !== item && other.classList.contains('active')) {
                            other.classList.remove('active');
                            other.querySelector('.faq-answer').style.display = 'none';
                        }
                    });
                    if (!isActive) {
                        item.classList.add('active');
                        answerDiv.style.display = 'block';
                    } else {
                        item.classList.remove('active');
                        answerDiv.style.display = 'none';
                    }
                });
            });

            const scrollBtn = document.getElementById('med-scroll-top');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 400) {
                    scrollBtn.style.display = 'flex';
                } else {
                    scrollBtn.style.display = 'none';
                }
            });
            scrollBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        })();
    </script>
</body>
</html>