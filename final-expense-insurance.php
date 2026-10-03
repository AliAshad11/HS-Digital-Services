<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, initial-scale=1.0, viewport-fit=cover">
    <title>Final Expense Insurance | Peace of Mind for Your Family | HS Digital Services</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <style>
        :root {
            --fe-accent: #CCFF00;
            --fe-accent-glow: rgba(204, 255, 0, 0.2);
            --fe-bg-dark: #050a14;
            --fe-card: rgba(8, 18, 32, 0.92);
            --fe-text: #f0f4fe;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: var(--fe-bg-dark);
            color: var(--fe-text);
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            font-weight: 400;
            line-height: 1.5;
            scroll-behavior: smooth;
        }
        /* smooth reveal animations */
        @keyframes floatIn {
            0% { opacity: 0; transform: translateY(28px) scale(0.98); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes softGlow {
            0% { box-shadow: 0 0 0 0 var(--fe-accent-glow); }
            100% { box-shadow: 0 0 0 8px transparent; }
        }
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
        }
        .animate-on-scroll.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        .hover-lift {
            transition: transform 0.25s ease, border-color 0.2s;
        }
        .hover-lift:hover {
            transform: translateY(-6px);
        }
        /* Hero with brand new image and relaxed typography */
        .fe-hero {
            padding: 80px 0 70px;
            border-radius: 32px;
            overflow: hidden;
            position: relative;
            background: radial-gradient(ellipse at 30% 40%, rgba(0, 15, 30, 0.95), rgba(2, 8, 18, 0.98));
            border: 1px solid rgba(255, 255, 255, 0.04);
            margin-top: 10px;
        }
        .fe-hero::after {
            content: '';
            position: absolute;
            left: -15%;
            top: -20%;
            width: 70%;
            height: 150%;
            background: radial-gradient(circle, rgba(204, 255, 0, 0.07) 0%, transparent 70%);
            pointer-events: none;
        }
        .fe-hero-row {
            display: flex;
            gap: 50px;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1300px;
            margin: 0 auto;
        }
        .fe-hero-content {
            flex: 1.2;
            min-width: 300px;
        }
        .fe-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 20px;
            border-radius: 40px;
            background: rgba(204, 255, 0, 0.12);
            backdrop-filter: blur(4px);
            color: var(--fe-accent);
            font-weight: 500;
            letter-spacing: 0.3px;
            margin-bottom: 22px;
            border: 1px solid rgba(204, 255, 0, 0.25);
        }
        .fe-hero h1 {
            font-size: 3rem;
            font-weight: 600;
            line-height: 1.2;
            margin: 0 0 18px 0;
            letter-spacing: -0.01em;
            background: linear-gradient(135deg, #ffffff, #ccffcc);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .fe-lead {
            font-size: 1.05rem;
            color: rgba(240, 248, 255, 0.85);
            max-width: 560px;
            margin-bottom: 28px;
            font-weight: 400;
            line-height: 1.55;
        }
        .fe-btn-primary {
            background: var(--fe-accent);
            color: #0a1a1f;
            padding: 12px 32px;
            border-radius: 44px;
            font-weight: 600;
            border: none;
            transition: all 0.25s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .fe-btn-primary:hover {
            background: #e2ff4a;
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(204,255,0,0.2);
            color: #0a1a1f;
            text-decoration: none;
        }
        .fe-btn-outline {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255,255,255,0.25);
            padding: 12px 28px;
            border-radius: 44px;
            font-weight: 500;
            transition: 0.2s;
            text-decoration: none;
        }
        .fe-btn-outline:hover {
            border-color: var(--fe-accent);
            color: var(--fe-accent);
            background: rgba(204, 255, 0, 0.05);
            text-decoration: none;
        }
        /* brand new hero image styling */
        .fe-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            perspective: 800px;
        }
        .fe-hero-image img {
            max-width: 520px;
            width: 100%;
            border-radius: 48px;
            box-shadow: 0 35px 55px -15px rgba(0,0,0,0.6);
            border: 1px solid rgba(204,255,0,0.2);
            transition: all 0.4s ease;
        }
        .fe-hero-image img:hover {
            transform: scale(1.01) rotate(0.5deg);
            border-color: var(--fe-accent);
        }
        /* card refinements - less bold */
        .fe-card {
            background: var(--fe-card);
            backdrop-filter: blur(2px);
            padding: 28px 24px;
            border-radius: 28px;
            border: 1px solid rgba(204, 255, 0, 0.1);
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3);
            height: 100%;
            transition: all 0.3s;
        }
        .fe-card h4 {
            font-size: 1.35rem;
            font-weight: 600;
            margin-bottom: 14px;
            letter-spacing: -0.2px;
            color: #ffffff;
        }
        .fe-card p {
            font-weight: 400;
            color: rgba(230, 240, 255, 0.85);
            line-height: 1.55;
        }
        .fe-feature-card {
            background: rgba(10, 22, 38, 0.85);
            border-radius: 24px;
            padding: 26px 20px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            transition: 0.25s;
            height: 100%;
        }
        .fe-stat {
            font-size: 2.6rem;
            font-weight: 600;
            color: var(--fe-accent);
            margin-bottom: 6px;
            line-height: 1.1;
        }
        /* form styling fresh */
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
            border-color: var(--fe-accent);
            outline: none;
            box-shadow: 0 0 0 3px rgba(204, 255, 0, 0.15);
        }
        /* FAQ refined */
        .fe-faq .faq-question {
            cursor: pointer;
            font-weight: 500;
            position: relative;
            padding-right: 32px;
            color: #f0f3fa;
        }
        .fe-faq .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            top: -2px;
            font-size: 1.4rem;
            font-weight: 500;
            color: var(--fe-accent);
        }
        .fe-faq .faq-item.active .faq-question::after {
            content: '−';
        }
        .fe-faq .faq-item {
            background: rgba(10, 22, 38, 0.9);
            border-radius: 24px;
            padding: 20px 26px;
            margin-bottom: 14px;
            border: 1px solid rgba(204, 255, 0, 0.1);
            transition: 0.2s;
        }
        .fe-faq .faq-answer {
            display: none;
            padding-top: 16px;
            color: rgba(230, 242, 255, 0.85);
            font-weight: 400;
        }
        /* scroll button */
        #fe-scroll-top {
            position: fixed;
            right: 26px;
            bottom: 26px;
            width: 48px;
            height: 48px;
            background: var(--fe-accent);
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #08131b;
            cursor: pointer;
            z-index: 1000;
            display: none;
            font-weight: bold;
            transition: 0.2s;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        .fe-section {
            padding: 70px 0;
        }
        .table-light-custom {
            background: rgba(8, 18, 30, 0.7);
            border-radius: 24px;
            overflow: hidden;
        }
        .table-light-custom th {
            background: rgba(204, 255, 0, 0.1);
            color: var(--fe-accent);
            font-weight: 500;
            padding: 16px 20px;
        }
        .table-light-custom td {
            padding: 14px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            color: #eef3ff;
        }
        @media (max-width: 991px) {
            .fe-hero-row { flex-direction: column-reverse; text-align: center; }
            .fe-hero-content { text-align: center; }
            .fe-hero h1 { font-size: 2.3rem; }
            .fe-lead { margin-left: auto; margin-right: auto; }
            .fe-hero-buttons { justify-content: center; }
            .fe-section { padding: 50px 0; }
        }
        @media (max-width: 576px) {
            .fe-card h4 { font-size: 1.2rem; }
        }
        .container { max-width: 1280px; }
        .text-glow {
            text-shadow: 0 0 5px rgba(204,255,0,0.3);
        }
        .btn-submit-glow {
            background: var(--fe-accent);
            border: none;
            font-weight: 600;
            padding: 12px 32px;
            border-radius: 44px;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- FINAL EXPENSE HERO - FRESH HERO IMAGE & BALANCED TEXT -->
        <section class="fe-hero">
            <div class="container">
                <div class="fe-hero-row">
                    <div class="fe-hero-content animate-on-scroll">
                        <span class="fe-badge">Final Expense Insurance</span>
                        <h1>Protect your family from unexpected funeral costs</h1>
                        <p class="fe-lead">Affordable burial insurance with guaranteed acceptance options. No medical exam, premiums that never rise, and benefits paid within 24 hours.</p>
                        <div class="fe-hero-buttons">
                            <a href="quotes.php" class="fe-btn-primary">Get free quote →</a>
                            <a href="#fe-benefits" class="fe-btn-outline">How it works</a>
                        </div>
                    </div>
                    <div class="fe-hero-image animate-on-scroll">
                        <!-- Brand new hero image - peaceful family / protection theme -->
                        <img src="https://lifeinsurance.ky/wp-content/uploads/2024/07/final-expense-insurance.jpg" alt="Family protection final expense insurance" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <!-- WHAT IS FINAL EXPENSE (relaxed wording) -->
        <section class="fe-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="fe-badge" style="margin-bottom: 12px;">Understanding the coverage</span>
                        <h2 style="font-size: 2rem; font-weight: 600; margin: 12px 0 18px;">What is final expense insurance?</h2>
                        <p style="color: rgba(240,245,255,0.85); line-height: 1.6; margin-bottom: 20px;">Final expense (burial insurance) is a whole life policy designed to cover end-of-life costs: funeral services, burial, cremation, medical bills, or outstanding debts. With coverage from $5k to $50k, it gives families immediate financial relief.</p>
                        <p style="color: rgba(240,245,255,0.8);">No medical exam, fixed monthly payments, and benefits are paid tax-free. Most clients get approved within 24 hours.</p>
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <div class="fe-card">
                            <h4> Why families choose final expense</h4>
                            <p>✓ Premiums start from just $15–$45/month</p>
                            <p>✓ No medical exam & guaranteed acceptance options</p>
                            <p>✓ Lifetime rate lock — never increase</p>
                            <p>✓ Cash value that grows over time</p>
                            <p>✓ 24–48 hour claim payout to beneficiaries</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KEY BENEFITS CARDS (softer font weight, animations) -->
        <section id="fe-benefits" class="fe-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size: 2rem; font-weight: 600;">Key benefits of final expense insurance</h2>
                    <p style="color: rgba(255,255,255,0.7); max-width: 680px; margin: 12px auto 0;">Simple, dignified coverage that puts your family first</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 hover-lift">
                            <h4>💰 Low fixed premiums</h4>
                            <p>Pay as little as $20/month for meaningful coverage. Your rate is locked forever — no surprises as you age.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 hover-lift">
                            <h4>📝 No medical exam</h4>
                            <p>Skip the needles and labs. Just answer a few health questions — guaranteed issue plans have no health questions at all.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 hover-lift">
                            <h4>⚡ Immediate coverage</h4>
                            <p>Get approved same-day in most cases. Your family is protected from the moment your policy is active.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 hover-lift">
                            <h4>🏠 Funeral & burial costs</h4>
                            <p>Average funeral costs $7k–$12k. Final expense covers everything: service, casket, grave, headstone, and more.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 hover-lift">
                            <h4>💎 Cash value accrual</h4>
                            <p>Over time, your policy builds cash value you can borrow against if needed — extra financial flexibility.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 hover-lift">
                            <h4>🕊️ Peace of mind</h4>
                            <p>Your loved ones won't have to scramble for funds. They can focus on grieving, not paying bills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comparison table (softer style) -->
        <section class="fe-section">
            <div class="container">
                <div class="text-center mb-4 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.9rem;">Final expense vs. traditional life insurance</h2>
                    <p style="color: rgba(255,255,255,0.7);">See why burial insurance makes sense for seniors</p>
                </div>
                <div class="animate-on-scroll">
                    <div class="table-light-custom">
                        <table class="table table-borderless" style="margin-bottom:0; width:100%;">
                            <thead>
                                <tr><th>Feature</th><th>Final expense</th><th>Traditional life</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Coverage amount</td><td>$2k – $50k</td><td>$100k+</td></tr>
                                <tr><td>Medical exam</td><td>No – simplified or guaranteed</td><td>Usually required</td></tr>
                                <tr><td>Approval time</td><td>24 hours to 1 week</td><td>4–8 weeks</td></tr>
                                <tr><td>Premium stability</td><td>Lifetime locked rate</td><td>May increase or term ends</td></tr>
                                <tr><td>Age limit</td><td>Up to 85</td><td>Often 65–70 max</td></tr>
                                <tr><td>Monthly cost</td><td>$15 – $90</td><td>$50 – $300+</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS & TRUST SECTION (softer stats style) -->
        <section class="fe-section" style="background: rgba(0, 8, 18, 0.5); border-radius: 48px; margin: 0 0 20px;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="fe-feature-card w-100 text-center">
                            <div class="fe-stat">70%</div>
                            <h4 style="font-weight: 500;">of Americans</h4>
                            <p style="font-size: 0.95rem;">worry about affording final expenses for themselves or parents.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="fe-feature-card w-100 text-center">
                            <div class="fe-stat">$9k</div>
                            <h4 style="font-weight: 500;">Avg funeral cost</h4>
                            <p>Includes viewing, burial, and ceremony expenses.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="fe-feature-card w-100 text-center">
                            <div class="fe-stat">45–85</div>
                            <h4 style="font-weight: 500;">Eligible ages</h4>
                            <p>Most carriers accept applicants in this range, no exam.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex animate-on-scroll">
                        <div class="fe-feature-card w-100 text-center">
                            <div class="fe-stat">24–48h</div>
                            <h4 style="font-weight: 500;">Benefit payout</h4>
                            <p>Fast claim payment when your family needs it most.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESS STEPS - softer headings -->
        <section class="fe-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.9rem;">Get covered in 3 simple steps</h2>
                    <p style="color: rgba(255,255,255,0.7);">Stress‑free, transparent, and fast.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 text-center hover-lift">
                            <div style="font-size: 2.3rem;">📝</div>
                            <h4>1. Quick application</h4>
                            <p>Answer basic questions (no medical exam). Takes under 10 minutes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 text-center hover-lift">
                            <div style="font-size: 2.3rem;">✅</div>
                            <h4>2. Fast approval</h4>
                            <p>Most applicants get instant decision. Same-day coverage available.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex animate-on-scroll">
                        <div class="fe-card w-100 text-center hover-lift">
                            <div style="font-size: 2.3rem;">🛡️</div>
                            <h4>3. Lifetime protection</h4>
                            <p>Pay fixed monthly premium & rest easy knowing family is secure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ (final expense) -->
        <section id="fe-faq" class="fe-section fe-faq">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-weight: 600; font-size: 1.9rem;">Common questions about final expense</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Who qualifies for final expense insurance?</div>
                            <div class="faq-answer">Most insurers cover ages 45–85. Guaranteed acceptance plans accept everyone regardless of health conditions.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Is a medical exam required?</div>
                            <div class="faq-answer">No. Simplified issue uses health questions; guaranteed issue has zero health questions — no exam ever.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Can I use the money for anything?</div>
                            <div class="faq-answer">Absolutely. Funeral, cremation, medical bills, debts, or even as a small inheritance — no restrictions.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">Do premiums increase with age?</div>
                            <div class="faq-answer">Never. Final expense is a whole life policy with locked-in premiums guaranteed for life.</div>
                        </div>
                        <div class="faq-item animate-on-scroll">
                            <div class="faq-question">What if I have diabetes or heart issues?</div>
                            <div class="faq-answer">Many carriers accept common conditions like diabetes, high BP, and even past cancer. Guaranteed issue plans accept everyone.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM with fresh style -->
        <!-- <section id="fe-contact" class="fe-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 animate-on-scroll">
                        <div class="fe-card" style="padding: 38px 32px;">
                            <h3 style="text-align: center; font-weight: 600; margin-bottom: 8px;">Request your free final expense quote</h3>
                            <p style="text-align: center; color: rgba(255,255,255,0.75); margin-bottom: 28px;">No obligation, compare top carriers, and find the best rate.</p>
                            <form action="submit-finalexpense.php" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-6"><input name="fullname" placeholder="Full name" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="email" type="email" placeholder="Email address" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="phone" placeholder="Phone number" class="form-control-cs" required></div>
                                    <div class="col-md-6"><input name="age" placeholder="Your age (45-85)" class="form-control-cs" required></div>
                                    <div class="col-12"><textarea name="notes" placeholder="Preferred coverage amount? Health notes? We'll match you with the best plan." class="form-control-cs" style="min-height: 110px;"></textarea></div>
                                    <div class="col-12 text-center mt-2"><button class="fe-btn-primary" type="submit" style="border: none;">Get my free quote →</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>

    <div id="fe-scroll-top" title="Back to top">↑</div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX - Applied to Final Expense Page
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
        // ORIGINAL FINAL EXPENSE PAGE SCRIPTS (preserved)
        // ================================================
        (function() {
            // Animation on scroll using Intersection Observer
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: "0px 0px -20px 0px" });
            animatedElements.forEach(el => observer.observe(el));

            // FAQ logic with gentle toggle
            const faqItems = document.querySelectorAll('.fe-faq .faq-item');
            faqItems.forEach(item => {
                const questionDiv = item.querySelector('.faq-question');
                const answerDiv = item.querySelector('.faq-answer');
                questionDiv.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    // close all siblings
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

            // Scroll to top button
            const scrollBtn = document.getElementById('fe-scroll-top');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 380) {
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