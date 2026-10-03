<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cold Calling Services | HS Digital Services</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <style>
        :root {
            --cc-accent: #CCFF00;
            --cc-muted: #CCDEFF;
            --cc-bg-dark: #050a14;
            --cc-card: rgba(8, 18, 32, 0.95);
            --cc-text: #f8fbff;
        }
        body {
            background: var(--cc-bg-dark);
            color: var(--cc-text);
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        }
        /* Hero Section with different gradient and image treatment */
        .cc-hero {
            padding: 80px 0 60px;
            border-radius: 28px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, rgba(0, 10, 22, 0.98), rgba(8, 18, 35, 0.96));
            border: 1px solid rgba(255, 255, 255, 0.03);
        }
        .cc-hero::before {
            content: '';
            position: absolute;
            left: -10%;
            top: -20%;
            width: 70%;
            height: 140%;
            background: radial-gradient(circle at 20% 40%, rgba(204, 255, 0, 0.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .cc-hero-row {
            display: flex;
            gap: 40px;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1280px;
            margin: 0 auto;
            text-align: left;
        }
        .cc-hero-content {
            flex: 1;
            min-width: 300px;
            max-width: 700px;
            color: var(--cc-text);
        }
        .cc-badge {
            display: inline-flex;
            align-items: center;
            padding: 8px 22px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--cc-accent), #c0e800);
            color: #08131b;
            font-weight: 800;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            box-shadow: 0 12px 28px rgba(204, 255, 0, 0.2);
        }
        .cc-hero h1 {
            font-size: 2.9rem;
            margin: 8px 0 18px;
            line-height: 1.1;
            font-weight: 800;
        }
        .cc-lead {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            max-width: 620px;
            margin-bottom: 28px;
            font-size: 1.05rem;
        }
        .cc-hero-buttons {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
        }
        .cc-btn-primary {
            background: var(--cc-accent);
            color: #08131b;
            padding: 12px 30px;
            border-radius: 40px;
            font-weight: 800;
            text-transform: uppercase;
            border: none;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-block;
        }
        .cc-btn-primary:hover {
            background: #dcff44;
            transform: translateY(-2px);
            color: #08131b;
        }
        .cc-btn-outline {
            background: transparent;
            color: #fff;
            border: 1.5px solid rgba(255, 255, 255, 0.2);
            padding: 12px 28px;
            border-radius: 40px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.2s;
        }
        .cc-btn-outline:hover {
            border-color: var(--cc-accent);
            color: var(--cc-accent);
        }
        .cc-hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .cc-hero-image img {
            max-width: 540px;
            width: 100%;
            border-radius: 32px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: transform 0.3s ease;
        }
        .cc-hero-image img:hover {
            transform: scale(1.01);
        }

        /* Global styles matching lead-gen but with distinct touches */
        .form-control-cs {
            width: 100%;
            padding: 14px 18px;
            height: 52px;
            background: rgba(7, 18, 32, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            color: var(--cc-text);
            box-sizing: border-box;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .form-control-cs:focus {
            outline: none;
            border-color: var(--cc-accent);
            box-shadow: 0 10px 28px rgba(204, 255, 0, 0.1);
            background: rgba(20, 35, 55, 0.98);
        }
        textarea.form-control-cs {
            min-height: 130px;
            resize: vertical;
        }

        /* Card styles (fully aligned) */
        .cc-card {
            background: var(--cc-card);
            padding: 28px 26px;
            border-radius: 24px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }
        .cc-card:hover {
            border-color: rgba(204, 255, 0, 0.4);
            transform: translateY(-4px);
        }
        .cc-card h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 14px;
            letter-spacing: -0.2px;
        }
        .cc-card p {
            color: rgba(255, 255, 255, 0.78);
            line-height: 1.55;
            flex: 1;
        }
        .cc-feature-card {
            background: rgba(8, 18, 32, 0.9);
            padding: 26px 22px;
            border-radius: 20px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            height: 100%;
            transition: 0.2s;
        }
        .cc-stat {
            font-size: 2.7rem;
            font-weight: 800;
            color: var(--cc-accent);
            margin-bottom: 8px;
            line-height: 1.1;
        }
        .cc-section {
            padding: 70px 0;
        }

        /* FAQ specifics */
        .cc-faq .faq-question {
            cursor: pointer;
            font-weight: 700;
            position: relative;
            padding-right: 32px;
        }
        .cc-faq .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            top: 0;
            color: var(--cc-accent);
            font-weight: 800;
            font-size: 1.3rem;
        }
        .cc-faq .faq-item.active .faq-question::after {
            content: '-';
        }
        .cc-faq .faq-item {
            background: rgba(8, 18, 32, 0.9);
            border-radius: 18px;
            padding: 20px 26px;
            border: 1px solid rgba(204, 255, 0, 0.12);
            margin-bottom: 16px;
        }
        .cc-faq .faq-answer {
            display: none;
            padding-top: 14px;
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.55;
        }

        /* scroll top */
        #cc-scroll-top {
            position: fixed;
            right: 24px;
            bottom: 24px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--cc-accent);
            color: #08131b;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            z-index: 1000;
            display: none;
            font-size: 1.7rem;
            font-weight: bold;
            transition: 0.2s;
        }
        #cc-scroll-top:hover {
            transform: translateY(-4px);
            background: #e2ff4a;
        }

        .lg-animate {
            opacity: 0;
            transform: translateY(14px);
            transition: all 0.55s cubic-bezier(0.2, 0.9, 0.2, 1);
        }
        .lg-animate.in-view {
            opacity: 1;
            transform: none;
        }

        @media (max-width: 991px) {
            .cc-hero-row {
                flex-direction: column-reverse;
                text-align: center;
            }
            .cc-hero-content {
                text-align: center;
            }
            .cc-hero h1 {
                font-size: 2.2rem;
            }
            .cc-hero-buttons {
                justify-content: center;
            }
            .cc-section {
                padding: 50px 0;
            }
        }
        @media (max-width: 576px) {
            .cc-card h4 {
                font-size: 1.2rem;
            }
        }
        .container {
            max-width: 1280px;
        }
        .d-flex {
            display: flex !important;
        }
        .w-100 {
            width: 100% !important;
        }
        .btn-custom-submit {
            background: var(--cc-accent);
            border: none;
            font-weight: 800;
            padding: 14px 34px;
            border-radius: 40px;
            color: #08131b;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- COLD CALLING HERO SECTION (different hero image & vibe) -->
        <section class="cc-hero">
            <div class="container">
                <div class="cc-hero-row">
                    <div class="cc-hero-content">
                        <span class="cc-badge">Cold Calling Experts</span>
                        <h1>High-Volume Cold Calling That Opens Doors & Books Meetings</h1>
                        <p class="cc-lead">Break through the noise with strategic cold calling campaigns. Our trained agents turn cold prospects into warm conversations, qualified appointments, and measurable pipeline growth — with full compliance and transparent reporting.</p>
                        <div class="cc-hero-buttons">
                            <a href="#cc-contact" class="cc-btn-primary">Start a Pilot</a>
                            <a href="#cc-methodology" class="cc-btn-outline">Our Method</a>
                        </div>
                    </div>
                    <div class="cc-hero-image">
                        <!-- Different hero image: fresh, modern call center / conversation visual -->
                        <img src="https://salesgravy.com/wp-content/uploads/2021/04/cold-calling-approach.png" alt="Cold calling professionals at work" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <!-- CORE COLD CALLING SERVICES / FEATURES CARDS (fully aligned) -->
        <section id="cc-methodology" class="cc-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-size: 2.2rem; font-weight: 700;">Strategic Cold Calling Services</h2>
                    <p style="color: rgba(255,255,255,0.8); max-width: 720px; margin: 12px auto 0;">Data-driven dialing, expert conversation architects, and proven frameworks to maximize connect rates.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>Prospecting & List Building</h4>
                            <p>We build targeted calling lists with verified direct dials, decision-maker intel, and intent signals. No more wasted calls — only relevant prospects aligned with your ICP.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>Script Optimization & A/B Testing</h4>
                            <p>Data-backed scripts, objection handling playbooks, and live coaching. We continuously test hooks, value props, and CTAs to improve conversion at every stage.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>Appointment Setting via Calls</h4>
                            <p>Specialized appointment setters who qualify pain points, budget, and authority before handing warm meetings to your sales team. Calendar integration included.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>Parallel Dialing & Power Hours</h4>
                            <p>High-efficiency parallel dialing systems to maximize talk time. Our agents maintain quality conversations while increasing daily connects by 3x vs traditional methods.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>Compliance & Call Recording</h4>
                            <p>Fully TCPA compliant, DNC scrubbing, and transparent call logging. All calls recorded for quality assurance and training insights.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>CRM & Analytics Integration</h4>
                            <p>Seamless HubSpot, Salesforce, or Pipedrive sync. Real-time dashboards: connect rates, conversion, talk time, and appointments booked per agent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY COLD CALLING WORKS (stat + insight row) -->
        <section class="cc-section" style="background: transparent;">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="cc-card" style="padding: 32px;">
                            <span class="cc-badge" style="margin-bottom: 16px; display: inline-block;">Proven ROI</span>
                            <h3 style="font-weight: 700; font-size: 1.8rem;">Why Cold Calling Still Dominates B2B Sales</h3>
                            <p style="margin: 16px 0; color: rgba(255,255,255,0.85);">Cold calling remains the #1 channel for outbound pipeline generation when executed with relevance, data, and skill. Our approach reduces friction and increases human connection — leading to higher show rates and faster sales cycles.</p>
                            <ul style="padding-left: 20px; color: rgba(255,255,255,0.8);">
                                <li>✔ 87% of buyers accept cold calls from relevant reps</li>
                                <li>✔ 3x faster response vs email-only sequences</li>
                                <li>✔ Real-time objection handling & trust building</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-6 d-flex">
                                <div class="cc-feature-card w-100 text-center">
                                    <div class="cc-stat">+42%</div>
                                    <h4 style="margin: 10px 0 5px;">Connect Rate</h4>
                                    <p>Average lift after script & cadence optimization.</p>
                                </div>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="cc-feature-card w-100 text-center">
                                    <div class="cc-stat">2.6x</div>
                                    <h4 style="margin: 10px 0 5px;">Appointments</h4>
                                    <p>More meetings booked vs. generic outreach.</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex mt-3">
                                <div class="cc-feature-card w-100 text-center">
                                    <div class="cc-stat">35%</div>
                                    <h4 style="margin: 10px 0 5px;">Pilot-to-Program</h4>
                                    <p>Clients scale after seeing cold calling ROI within 30 days.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR COLD CALLING PROCESS : 4 unique steps -->
        <section class="cc-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-weight: 700; font-size: 2rem;">Our Cold Calling Blueprint</h2>
                    <p style="color: rgba(255,255,255,0.8);">From list science to closed-won analytics — a transparent, repeatable process.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 d-flex">
                        <div class="cc-card w-100">
                            <h4>🔍 1. ICP & Data Deep Dive</h4>
                            <p>We analyze ideal prospect profiles, map buyer personas, and enrich calling lists with verified contacts and intent data.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="cc-card w-100">
                            <h4>🎯 2. Scripts & Cadence Design</h4>
                            <p>Custom conversation flows, objection handlers, and multi-touch cadence (call + voicemail + follow-up).</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="cc-card w-100">
                            <h4>📞 3. Agent Execution & Coaching</h4>
                            <p>US-based or bilingual agents, daily role-play, live call monitoring, and weekly calibration sessions.</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="cc-card w-100">
                            <h4>📈 4. Handoff & Iteration</h4>
                            <p>Qualified leads transferred real-time to your CRM, with weekly reporting on conversion, talk time, and pipeline influence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TECH & COMPLIANCE SECTION (different from lead-gen) -->
        <section class="cc-section" style="background: rgba(4, 12, 22, 0.6); border-radius: 48px; margin: 20px 0;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-weight: 700;">Technology & Compliance First</h2>
                    <p style="color: rgba(255,255,255,0.8);">Enterprise-grade infrastructure for responsible, effective cold calling.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>⚡ Parallel Dialer Integration</h4>
                            <p>Industry-leading power dialer that minimizes idle time and boosts live contact rates without sacrificing personalization.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>📋 DNC Scrubbing & TCPA</h4>
                            <p>Real-time Do-Not-Call list verification, consent tracking, and call recording compliance — fully managed.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="cc-card w-100">
                            <h4>📊 Live Agent Dashboard</h4>
                            <p>Performance metrics: connect %, conversation rate, meeting set rate, and lead quality scores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ (Cold Calling specific questions) -->
        <section id="cc-faq" class="cc-section cc-faq">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 style="font-weight: 700; font-size: 2rem;">Cold Calling FAQ</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="faq-item">
                            <div class="faq-question">How do you ensure high connect rates?</div>
                            <div class="faq-answer">We combine verified data enrichment, local presence dialing, multi-attempt cadences, and call time optimization (based on prospect timezone and industry).</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Do you offer bilingual cold calling?</div>
                            <div class="faq-answer">Yes, we provide English and Spanish campaigns, with additional languages available for specific markets.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">What industries do you specialize in?</div>
                            <div class="faq-answer">Healthcare, BPO, SaaS, financial services, logistics, and professional services — but our framework adapts to any B2B vertical.</div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">How soon can we see results?</div>
                            <div class="faq-answer">Most pilots start showing qualified meetings within 14-21 days of launch. We provide weekly metrics and optimize continuously.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM (optimized for cold calling inquiries) -->
        <section id="cc-contact" class="cc-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="cc-card" style="padding: 40px 36px;">
                            <h3 style="text-align: center; font-weight: 800; margin-bottom: 6px;">Launch a Cold Calling Campaign</h3>
                            <p style="text-align: center; color: rgba(255,255,255,0.8); margin-bottom: 28px;">Share your target audience and volume goals — we'll build a customized pilot within days.</p>
                            <form action="submit-coldcalling.php" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <input name="company" placeholder="Company name" class="form-control-cs" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="name" placeholder="Full name" class="form-control-cs" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" type="email" placeholder="Business email" class="form-control-cs" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="phone" placeholder="Phone number" class="form-control-cs">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="notes" placeholder="Target industry, estimated monthly call volume, ideal prospect title, or any specific requirements..." class="form-control-cs" style="min-height: 120px;"></textarea>
                                    </div>
                                    <div class="col-12 text-center mt-3">
                                        <button class="cc-btn-primary" type="submit" style="border: none; font-weight: 800;">Request Cold Calling Pilot →</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="cc-scroll-top" title="Back to top">↑</div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(function(){
            // Animate elements
            const animateItems = document.querySelectorAll('.cc-card, .cc-feature-card, .faq-item, .cc-hero-content, .cc-hero-image');
            animateItems.forEach(el => {
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
            document.querySelectorAll('.lg-animate').forEach(el => observer.observe(el));

            // FAQ toggle with exclusive open/close
            $('.cc-faq').on('click', '.faq-question', function(e) {
                const $item = $(this).closest('.faq-item');
                const isActive = $item.hasClass('active');
                $item.siblings('.faq-item').removeClass('active').find('.faq-answer').slideUp(180);
                if (!isActive) {
                    $item.addClass('active');
                    $item.find('.faq-answer').slideDown(220);
                } else {
                    $item.removeClass('active');
                    $item.find('.faq-answer').slideUp(180);
                }
            });

            // Scroll to top
            const $scrollTop = $('#cc-scroll-top');
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 350) {
                    $scrollTop.fadeIn(200);
                } else {
                    $scrollTop.fadeOut(150);
                }
            });
            $scrollTop.on('click', function() {
                $('html, body').animate({ scrollTop: 0 }, 500);
            });
        });
    </script>
</body>
</html>