<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Medicare Insurance | HS Digital Services | Find the Right Plan</title>
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
        /* Hero section - BRAND NEW IMAGE (completely different from previous pages) */
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
        /* FRESH HERO IMAGE - different from all previous pages (senior/medicare professional) */
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
        /* Card style professional - softer text */
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
        /* professional icon wrapper */
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
        /* Zero dollar card redesign - softer, elegant */
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
        <!-- MEDICARE HERO - completely fresh image (senior/care/medicare professional) -->
        <section class="med-hero">
            <div class="container">
                <div class="med-hero-row">
                    <div class="med-hero-content animate-on-scroll">
                        <span class="med-badge">Medicare Guidance</span>
                        <h1>Smart Medicare coverage for your health journey</h1>
                        <p class="med-lead">Compare Part D, Medicare Advantage, and Supplement plans side-by-side. Licensed agents help you maximize benefits and avoid penalties — at no cost to you.</p>
                        <div class="med-hero-buttons">
                            <a href="quotes.php" class="med-btn-primary">Compare plans →</a>
                            <a href="#med-guide" class="med-btn-outline">How it works</a>
                        </div>
                    </div>
                    <div class="med-hero-image animate-on-scroll">
                        <!-- BRAND NEW HERO IMAGE: Professional medicare consultation / senior care theme -->
                        <img src="https://img.magnific.com/free-photo/businesswoman-call-center-office_1098-984.jpg?semt=ais_hybrid&w=740&q=80" alt="Medicare professional consultation" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <!-- UNDERSTANDING MEDICARE SECTION -->
        <section id="med-guide" class="med-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="med-badge" style="margin-bottom: 12px;">Your guide to Medicare</span>
                        <h2 style="font-size: 1.9rem; font-weight: 600; margin: 12px 0 18px;">Federal health insurance for 65+ and disabilities</h2>
                        <p style="color: rgba(235, 245, 255, 0.85); line-height: 1.65; margin-bottom: 20px;">Medicare provides essential health coverage. With Parts A, B, C, D, and Medigap options, we help you navigate enrollment, avoid late penalties, and choose the right combination based on your doctors, prescriptions, and travel habits.</p>
                        <p style="color: rgba(235, 245, 255, 0.8);">Most people qualify for premium-free Part A. Our agents compare costs and benefits across top carriers — at zero cost to you.</p>
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <div class="med-card">
                            <h4><span class="card-icon">📋</span> Key Medicare facts</h4>
                            <p>✔ Initial Enrollment: 7 months around your 65th birthday<br>✔ Annual Open Enrollment: Oct 15 – Dec 7<br>✔ Medicare Advantage often includes dental, vision, hearing<br>✔ Part D prevents prescription drug gaps<br>✔ Medigap reduces out-of-pocket costs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARTS OF MEDICARE - Clean layout with subtle icons -->
        <section class="med-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size: 1.9rem; font-weight: 600;">Medicare parts explained simply</h2>
                    <p style="color: rgba(255,255,255,0.7); max-width: 680px; margin: 12px auto 0;">Each part covers specific services — we help you find the right mix.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">🏥</span> Part A (Hospital)</h4>
                            <p>Covers inpatient hospital stays, skilled nursing facility care, hospice, and some home health. Most people get premium-free Part A.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">👨‍⚕️</span> Part B (Medical)</h4>
                            <p>Doctor visits, outpatient care, medical supplies, and preventive services. Standard premium applies (income-adjusted).</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">⭐</span> Part C (Advantage)</h4>
                            <p>All-in-one alternative to Original Medicare. Often includes Part D, dental, vision, fitness benefits. Private insurance plans.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex animate-on-scroll">
                        <div class="med-card w-100 hover-lift">
                            <h4><span class="card-icon">💊</span> Part D (Drugs)</h4>
                            <p>Helps cover cost of prescription medications. Offered by private insurers; avoid late enrollment penalty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MEDIGAP + ADVANTAGE COMPARISON -->
        <section class="med-section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 animate-on-scroll">
                        <div class="med-card" style="background: rgba(6, 18, 32, 0.95);">
                            <h4><span class="card-icon">🛡️</span> Medigap (Medicare Supplement)</h4>
                            <p>Medigap policies fill "gaps" in Original Medicare — covering copayments, coinsurance, and deductibles. Standardized plans (A-N) offered by private insurers. Great for those who travel or want predictable out-of-pocket costs.</p>
                            <hr>
                            <p>✅ Works with Medicare Parts A & B<br>✅ No networks — any doctor who accepts Medicare<br>✅ Guaranteed issue rights in certain windows</p>
                        </div>
                    </div>
                    <div class="col-md-6 animate-on-scroll">
                        <div class="med-card" style="background: rgba(6, 18, 32, 0.95);">
                            <h4><span class="card-icon">🔄</span> Medicare Advantage vs. Original + Medigap</h4>
                            <p>Medicare Advantage (Part C) offers all-in-one coverage with max out-of-pocket limits. Many include extra benefits like dental, eyeglasses, and gym memberships. Original Medicare + Medigap gives more flexibility nationwide but may have higher premiums.</p>
                            <hr>
                            <p>We compare both based on your doctors, prescriptions, and travel habits — free personalized analysis.</p>
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
                            <div class="med-stat">63M+</div>
                            <h4 style="font-weight: 500;">Americans</h4>
                            <p>rely on Medicare for health security.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">$1,600</div>
                            <h4 style="font-weight: 500;">Average savings</h4>
                            <p>by comparing Part D plans each year.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">24+</div>
                            <h4 style="font-weight: 500;">Top carriers</h4>
                            <p>Aetna, Humana, UnitedHealthcare, BCBS & more.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="med-feature-card w-100">
                            <div class="med-stat">$0</div>
                            <h4 style="font-weight: 500;">Plan options</h4>
                            <p>Many Medicare Advantage plans have $0 monthly premium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ENROLLMENT PERIODS TABLE -->
        <section class="med-section">
            <div class="container">
                <div class="text-center mb-4 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.8rem;">Key Medicare enrollment periods</h2>
                    <p style="color: rgba(255,255,255,0.7);">Don't miss deadlines — we help you avoid penalties.</p>
                </div>
                <div class="animate-on-scroll">
                    <div class="med-table">
                        <table class="table table-borderless" style="margin-bottom:0; width:100%;">
                            <thead>
                                <tr><th>Enrollment period</th><th>Timing</th><th>What you can do</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><strong>Initial Enrollment (IEP)</strong></td><td>7 months around 65th birthday</td><td>Sign up for Part A, B, C, D</td></tr>
                                <tr><td><strong>Annual Open (AEP)</strong></td><td>Oct 15 – Dec 7</td><td>Switch Advantage plans, add/drop Part D</td></tr>
                                <tr><td><strong>Advantage Open Enrollment</strong></td><td>Jan 1 – Mar 31</td><td>Switch Advantage plans or return to Original Medicare</td></tr>
                                <tr><td><strong>Special Enrollment (SEP)</strong></td><td>Varies</td><td>Life events: moving, losing employer coverage</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- SAVINGS & TIPS + REDESIGNED $0 CONSULTATION SECTION (softer, elegant) -->
        <section class="med-section">
            <div class="container">
                <div class="row g-5 align-items-stretch">
                    <div class="col-lg-7 animate-on-scroll">
                        <div class="med-card h-100">
                            <h3 style="font-weight: 600; font-size: 1.6rem; margin-bottom: 18px;">Save money with annual plan comparisons</h3>
                            <p style="color: rgba(235, 245, 255, 0.85); margin-bottom: 20px; line-height: 1.65;">We analyze your prescriptions, doctors, and budget to find plans that reduce drug costs and offer better coverage. Many beneficiaries overpay by staying in the same plan year after year.</p>
                            <div style="display: flex; flex-direction: column; gap: 12px;">
                                <p style="display: flex; align-items: center; gap: 12px;"><span style="color: var(--med-accent); font-size: 1.2rem;">✓</span> Free Part D review can save hundreds annually</p>
                                <p style="display: flex; align-items: center; gap: 12px;"><span style="color: var(--med-accent); font-size: 1.2rem;">✓</span> $0 premium Advantage plans with dental/vision</p>
                                <p style="display: flex; align-items: center; gap: 12px;"><span style="color: var(--med-accent); font-size: 1.2rem;">✓</span> Medigap plans that lower surprise medical bills</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animate-on-scroll">
                        <div class="med-card zero-card h-100 d-flex flex-column justify-content-center">
                            <div class="zero-amount">$0</div>
                            <div class="zero-label">Consultation fee</div>
                            <p style="color: rgba(235, 245, 255, 0.9); margin-top: 12px; font-size: 0.95rem;">Licensed Medicare advisors — never a cost to you. We're compensated by carriers, never by clients.</p>
                            <div style="margin-top: 18px;">
                                <span style="display: inline-block; background: rgba(204,255,0,0.1); padding: 6px 14px; border-radius: 40px; font-size: 0.75rem; color: var(--med-accent);">No obligation • Free quotes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MEDICARE FAQ -->
        <section id="med-faq" class="med-section med-faq">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.8rem;">Frequently asked questions</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">When should I apply for Medicare?</div>
                            <div class="faq-answer">The Initial Enrollment Period is 3 months before you turn 65 through 3 months after. Delaying Part B or D may cause lifetime penalties unless you have creditable coverage.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">What's the difference between Medicare Advantage and Medigap?</div>
                            <div class="faq-answer">Medicare Advantage (Part C) replaces Original Medicare and often includes extra benefits. Medigap works alongside Original Medicare to cover out-of-pocket costs like deductibles and coinsurance. We help you choose based on your healthcare usage.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Does Medicare cover prescription drugs?</div>
                            <div class="faq-answer">Original Medicare (Parts A & B) doesn't cover most prescriptions. You need a standalone Part D plan or a Medicare Advantage plan with built-in drug coverage.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Can I keep my doctor with Medicare?</div>
                            <div class="faq-answer">Original Medicare is accepted by 93% of doctors nationwide. Medicare Advantage plans have networks, so we verify your provider before recommending a plan.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">How much does Medicare cost?</div>
                            <div class="faq-answer">Part A is free for most. Part B premium starts at $174.70/month (2024). Advantage plans can be $0. Medigap plans vary by age/location. We'll show exact costs during your free review.</div>
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
                            <h3 style="text-align: center; font-weight: 600; margin-bottom: 8px; font-size: 1.6rem;">Get free Medicare help today</h3>
                            <p style="text-align: center; color: rgba(255,255,255,0.75); margin-bottom: 32px;">Compare plans, estimate costs, and speak to a licensed agent — no obligation.</p>
                            <form action="submit-medicare.php" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-6"><input name="fullname" placeholder="Full name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="email" type="email" placeholder="Email address" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="phone" placeholder="Phone number" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="zip" placeholder="ZIP code" class="form-control-cs" required></div>
                                    <div class="col-12"><textarea name="notes" placeholder="Tell us about your current medications, doctors, or any specific needs (dental/vision, etc.)" class="form-control-cs" style="min-height: 115px;"></textarea></div>
                                    <div class="col-12 text-center mt-3"><button class="med-btn-primary" type="submit" style="border: none; cursor: pointer;">Compare plans now →</button></div>
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
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX - Applied to Medicare Page
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

        // ================================================
        // ORIGINAL MEDICARE PAGE SCRIPTS (preserved)
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