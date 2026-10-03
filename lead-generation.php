<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Generation | HS Digital Services</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <style>
        :root {
            --lg-accent: #CCFF00;
            --lg-muted: #CCDEFF;
            --lg-bg-dark: #050a14;
            --lg-card: rgba(8, 18, 32, 0.95);
            --lg-text: #f8fbff;
        }
        body {
            background: var(--lg-bg-dark);
            color: var(--lg-text);
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        }
        .lg-hero {
            padding: 80px 0 60px;
            border-radius: 28px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, rgba(4, 8, 16, 0.96), rgba(10, 16, 30, 0.98));
            border: 1px solid rgba(255, 255, 255, 0.03);
        }
        .lg-hero::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            background: radial-gradient(circle at 60% 30%, rgba(204, 255, 0, 0.12) 0%, transparent 60%);
            pointer-events: none;
        }
        .lg-hero-row {
            display: flex;
            gap: 40px;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1180px;
            margin: 0 auto;
            text-align: left;
        }
        .lg-hero-content {
            flex: 1;
            min-width: 300px;
            max-width: 720px;
            color: var(--lg-text);
        }
        .lg-badge {
            display: inline-flex;
            align-items: center;
            padding: 10px 24px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--lg-accent), #b8e600);
            color: #08131b;
            font-weight: 800;
            letter-spacing: 0.6px;
            margin-bottom: 18px;
            box-shadow: 0 16px 40px rgba(204, 255, 0, 0.18);
        }
        .lg-hero h1 {
            font-size: 2.9rem;
            margin: 6px 0 18px;
            line-height: 1.08;
        }
        .lg-lead {
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.6;
            max-width: 620px;
            margin-bottom: 22px;
        }
        .lg-hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }
        .lg-btn-primary {
            background: var(--lg-accent);
            color: #08131b;
            padding: 12px 28px;
            border-radius: 40px;
            font-weight: 800;
            text-transform: uppercase;
            border: none;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-block;
        }
        .lg-btn-primary:hover {
            background: #d4ff33;
            transform: translateY(-2px);
            color: #08131b;
            text-decoration: none;
        }
        .lg-btn-outline {
            background: transparent;
            color: #fff;
            border: 1.5px solid rgba(255, 255, 255, 0.2);
            padding: 12px 26px;
            border-radius: 40px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.2s;
        }
        .lg-btn-outline:hover {
            border-color: var(--lg-accent);
            color: var(--lg-accent);
            text-decoration: none;
        }
        .lg-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .lg-hero-image img {
            max-width: 520px;
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 28px 70px rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        /* Form controls — perfectly fixed styling */
        .form-control-cs {
            width: 100%;
            padding: 14px 18px;
            height: 52px;
            background: rgba(7, 18, 32, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            color: var(--lg-text);
            box-sizing: border-box;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .form-control-cs::placeholder {
            color: rgba(255, 255, 255, 0.4);
            font-weight: 400;
        }
        .form-control-cs:focus {
            outline: none;
            border-color: var(--lg-accent);
            box-shadow: 0 10px 30px rgba(204, 255, 0, 0.1);
            background: rgba(20, 35, 55, 0.98);
        }
        textarea.form-control-cs {
            min-height: 130px;
            height: auto;
            padding-top: 14px;
            padding-bottom: 14px;
            resize: vertical;
        }

        /* FAQ visuals */
        .lg-faq .faq-question {
            cursor: pointer;
            font-weight: 700;
            position: relative;
            padding-right: 32px;
        }
        .lg-faq .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            top: 0;
            color: var(--lg-accent);
            font-weight: 800;
            font-size: 1.2rem;
        }
        .lg-faq .faq-item.active {
            border-color: rgba(204, 255, 0, 0.35);
            background: rgba(12, 24, 42, 0.98);
        }
        .lg-faq .faq-item.active .faq-question::after {
            content: '-';
        }

        /* Reveal animation */
        .lg-animate {
            opacity: 0;
            transform: translateY(14px);
            transition: all 0.55s cubic-bezier(0.2, 0.9, 0.2, 1);
        }
        .lg-animate.in-view {
            opacity: 1;
            transform: none;
        }

        /* Card alignment & perfect spacing — ALL CARDS ALIGNED */
        .lg-card {
            background: var(--lg-card);
            padding: 28px 24px;
            border-radius: 24px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease, border-color 0.2s;
        }
        .lg-card:hover {
            border-color: rgba(204, 255, 0, 0.35);
            transform: translateY(-3px);
        }
        .lg-card h4 {
            font-size: 1.28rem;
            font-weight: 700;
            margin-bottom: 14px;
            color: var(--lg-text);
            letter-spacing: -0.2px;
        }
        .lg-card p {
            color: rgba(255, 255, 255, 0.78);
            line-height: 1.55;
            flex: 1;
            margin-bottom: 0;
        }
        .lg-feature {
            background: rgba(8, 18, 32, 0.9);
            padding: 28px 20px;
            border-radius: 20px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            height: 100%;
            transition: 0.2s;
        }
        .lg-feature h4 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .lg-stat {
            font-size: 2.7rem;
            font-weight: 800;
            color: var(--lg-accent);
            line-height: 1.2;
            margin-bottom: 10px;
        }
        .lg-faq .faq-item {
            background: rgba(8, 18, 32, 0.9);
            border-radius: 18px;
            padding: 20px 24px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            margin-bottom: 16px;
            transition: 0.2s;
        }
        .lg-faq .faq-answer {
            display: none;
            padding-top: 14px;
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.55;
        }

        /* Contact form card special improvements */
        #lg-contact .lg-card {
            padding: 40px 38px;
        }
        #lg-contact .lg-card h3 {
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .row.g-3 {
            --bs-gutter-y: 1.2rem;
        }
        button.lg-btn-primary {
            background: var(--lg-accent);
            border: none;
            font-weight: 800;
            padding: 14px 36px;
            font-size: 1rem;
            letter-spacing: 0.5px;
            cursor: pointer;
        }

        /* Scroll top */
        #lg-scroll-top {
            position: fixed;
            right: 24px;
            bottom: 24px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--lg-accent);
            color: #08131b;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            z-index: 1000;
            display: none;
            font-size: 1.6rem;
            font-weight: bold;
            transition: all 0.2s;
        }
        #lg-scroll-top:hover {
            transform: translateY(-4px);
            background: #dcff44;
        }
        .lg-section {
            padding: 70px 0;
        }
        @media (max-width: 991px) {
            .lg-hero-row {
                flex-direction: column-reverse;
                text-align: center;
            }
            .lg-hero-content {
                text-align: center;
            }
            .lg-hero h1 {
                font-size: 2.2rem;
            }
            .lg-hero-buttons {
                justify-content: center;
            }
            .lg-section {
                padding: 50px 0;
            }
            #lg-contact .lg-card {
                padding: 30px 20px;
            }
        }
        @media (max-width: 576px) {
            .lg-card h4 {
                font-size: 1.2rem;
            }
            .lg-stat {
                font-size: 2rem;
            }
        }
        /* Fix for bootstrap row alignment inside grid */
        .row.g-4 {
            margin-top: 0;
        }
        .container {
            max-width: 1280px;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- HERO SECTION -->
        <section class="lg-hero">
            <div class="container">
                <div class="lg-hero-row">
                    <div class="lg-hero-content">
                        <span class="lg-badge">Lead Generation</span>
                        <h1>High-Intent Lead Generation for Healthcare & BPO</h1>
                        <p class="lg-lead">We build predictable pipelines using targeted outreach, lead qualification, appointment setting, and CRM integrations so your sales team spends time closing — not chasing.</p>
                        <div class="lg-hero-buttons">
                            <a href="#lg-contact" class="lg-btn-primary">Request a Demo</a>
                            <a href="#lg-services" class="lg-btn-outline">See Services</a>
                        </div>
                    </div>
                    <div class="lg-hero-image">
                        <img src="assets/images/banner/home-1-hero-slider.webp" alt="Lead generation illustration">
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES SECTION (cards fully aligned) -->
        <section id="lg-services" class="lg-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-size: 2.2rem; font-weight: 700; letter-spacing: -0.3px;">Our Lead Generation Services</h2>
                    <p style="color: rgba(255,255,255,0.8); max-width: 720px; margin: 12px auto 0;">End-to-end services to attract, qualify, and deliver sales-ready leads to your pipeline.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <h4>Targeted Prospecting</h4>
                            <p>Data-driven prospect lists built from intent signals, firmographic filters, and custom audience profiles tailored to your ideal customer profile (ICP). We enrich records with contact verification, decision-maker titles, and integration-ready fields for immediate outreach.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <h4>Outbound Campaigns</h4>
                            <p>Multichannel outreach (email, phone, LinkedIn) with A/B testing and cadence optimization to maximize engagement and response rates. We craft compliant messaging, run deliverability checks, and iterate sequences based on response analytics.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <h4>Appointment Setting</h4>
                            <p>Qualified appointment setting by trained representatives who follow your qualification scripts and book meetings directly into your calendar. Reps confirm timezones, pre-screen opportunities, and deliver summaries with pain points and budget signals.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <h4>Lead Qualification</h4>
                            <p>Lead scoring and qualification to ensure only high-intent prospects are passed to sales. We apply custom BANT/MEDDPICC-like frameworks and provide a short qualification note for every passed lead.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <h4>CRM Integration</h4>
                            <p>Seamless integration with Salesforce, HubSpot, and other CRMs to automate lead sync and handoff processes. We map custom fields, support lead assignment rules, and enable two-way status updates.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <h4>Analytics & Reporting</h4>
                            <p>Transparent dashboards and weekly performance reports so you can measure ROI and conversion velocity. Reports include campaign performance, lead quality trends, and recommended optimizations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY HS SECTION -->
        <section class="lg-section" style="background: transparent;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-size: 2.2rem; font-weight: 700;">Why HS for Lead Gen</h2>
                    <p style="color: rgba(255,255,255,0.8); max-width: 720px; margin: 12px auto 0;">We combine experienced agents, data engineering, and tested outreach to deliver a steady stream of qualified opportunities.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex">
                        <div class="lg-feature w-100">
                            <h4>Healthcare-Focused Lists</h4>
                            <p>Target lists built specifically for healthcare providers and revenue cycle stakeholders.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-feature w-100">
                            <h4>High-Touch Outreach</h4>
                            <p>Dedicated reps trained in compliant messaging and consultative discovery.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-feature w-100">
                            <h4>Fast Handoffs</h4>
                            <p>Qualified leads handed off within hours using your preferred CRM workflow.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS CARDS -->
        <section class="lg-section">
            <div class="container">
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <div class="lg-stat">+35%</div>
                            <h4>Avg Conversion Lift</h4>
                            <p>Measured improvement in lead-to-opportunity conversion for clients running our programs.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <div class="lg-stat">2.1x</div>
                            <h4>Pipeline Velocity</h4>
                            <p>Faster movement through qualification stages with clearer handoffs to sales.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="lg-card w-100">
                            <div class="lg-stat">24 Hrs</div>
                            <h4>Lead Delivery SLA</h4>
                            <p>We deliver qualified leads and book meetings within a 24 hour SLA after qualification.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESS STEP CARDS (FULLY ALIGNED) -->
        <section class="lg-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-size: 2.2rem; font-weight: 700;">Our 4‑Step Pilot Process</h2>
                    <p style="color: rgba(255,255,255,0.8); max-width: 720px; margin: 12px auto 0;">Quick pilot programs designed to validate data quality, messaging, and pipeline impact.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 d-flex">
                        <div class="lg-card w-100">
                            <h4>1. Discovery</h4>
                            <p>We define ICP, goals, and success metrics in a short kickoff session.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="lg-card w-100">
                            <h4>2. List & Messaging</h4>
                            <p>We build target lists and test messaging variants for relevance and compliance.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="lg-card w-100">
                            <h4>3. Outreach</h4>
                            <p>Agents execute multichannel outreach and qualify interested prospects.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="lg-card w-100">
                            <h4>4. Handoff & Analysis</h4>
                            <p>Qualified leads are handed to sales and performance data is reviewed to iterate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section id="lg-faq" class="lg-section lg-faq">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-weight: 700; font-size: 2rem;">Lead Gen FAQ</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item">
                            <div class="faq-question">How do you source prospects?</div>
                            <div class="faq-answer">We use a combination of proprietary data partners, public records, and intent signals to build targeted lists that match your ICP.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Can you work with our CRM and sales process?</div>
                            <div class="faq-answer">Yes — we integrate with Salesforce, HubSpot, Pipedrive and others, and we follow your qualification and routing rules.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">What metrics do you report?</div>
                            <div class="faq-answer">We report on lead volume, qualified rate, conversion, pipeline value, and A/B test outcomes on outreach cadences.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM — PERFECTLY FIXED LAYOUT & STYLING -->
        <section id="lg-contact" class="lg-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="lg-card">
                            <h3 style="text-align: center; margin-bottom: 8px; font-weight: 700;">Start a Lead Program</h3>
                            <p style="text-align: center; color: rgba(255, 255, 255, 0.8); margin-bottom: 28px; font-size: 1rem;">Tell us about your target market and goals — we'll design a pilot to prove ROI.</p>
                            <form action="submit-leads.php" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <input name="company" placeholder="Company name" class="form-control-cs" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="name" placeholder="Full name" class="form-control-cs" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" type="email" placeholder="Email address" class="form-control-cs" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="phone" placeholder="Phone number" class="form-control-cs">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="notes" placeholder="Campaign goals / ICP notes (target audience, ideal prospect, etc.)" class="form-control-cs" style="min-height: 130px;"></textarea>
                                    </div>
                                    <div class="col-12 text-center mt-3">
                                        <button class="lg-btn-primary" type="submit" style="border: none; cursor: pointer;">Request Pilot →</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Scroll to top button -->
    <div id="lg-scroll-top" title="Back to top">↑</div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX - Applied to Lead Generation Page
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
        // ORIGINAL LEAD GEN PAGE SCRIPTS (preserved)
        // ================================================
        $(function(){
            // Animate all cards, features, stat items
            const revealItems = document.querySelectorAll('.lg-card, .lg-feature, .lg-stat, .faq-item, .lg-hero-content, .lg-hero-image');
            revealItems.forEach(el => {
                el.classList.add('lg-animate');
            });

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        observer.unobserve(entry.target);
                    }
                });
            }, { root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.1 });

            document.querySelectorAll('.lg-animate').forEach(el => {
                observer.observe(el);
            });

            // FAQ toggle with exclusive behavior
            $('.lg-faq').on('click', '.faq-question', function(e) {
                const $item = $(this).closest('.faq-item');
                const wasActive = $item.hasClass('active');
                $item.siblings('.faq-item').removeClass('active').find('.faq-answer').slideUp(180);
                if (!wasActive) {
                    $item.addClass('active');
                    $item.find('.faq-answer').stop(true, true).slideDown(220);
                } else {
                    $item.removeClass('active');
                    $item.find('.faq-answer').stop(true, true).slideUp(180);
                }
            });

            // Scroll to top logic
            const $scrollBtn = $('#lg-scroll-top');
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 350) {
                    $scrollBtn.fadeIn(200);
                } else {
                    $scrollBtn.fadeOut(150);
                }
            });
            $scrollBtn.on('click', function() {
                $('html, body').animate({ scrollTop: 0 }, 480);
            });
        });
    </script>
</body>
</html>