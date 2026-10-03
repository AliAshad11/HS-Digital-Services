<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>ACA Health Insurance | HS Digital Services | Marketplace Plans</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --aca-accent: #CCFF00; --aca-accent-soft: rgba(204, 255, 0, 0.12); --aca-bg-dark: #050a14; --aca-card: rgba(6, 16, 28, 0.94); --aca-text: #f0f4fe; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: var(--aca-bg-dark); color: var(--aca-text); font-family: 'Inter', sans-serif; font-weight: 400; line-height: 1.55; }
        .animate-on-scroll { opacity: 0; transform: translateY(30px); transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1); }
        .animate-on-scroll.revealed { opacity: 1; transform: translateY(0); }
        .hover-lift { transition: transform 0.3s ease, border-color 0.2s; }
        .hover-lift:hover { transform: translateY(-5px); border-color: rgba(204, 255, 0, 0.4); }
        .aca-hero { padding: 80px 0 70px; border-radius: 32px; overflow: hidden; position: relative; background: radial-gradient(ellipse at 70% 30%, rgba(2, 18, 32, 0.97), rgba(0, 6, 14, 0.99)); border: 1px solid rgba(255,255,255,0.04); margin-top: 10px; }
        .aca-hero::before { content: ''; position: absolute; right: -5%; top: -10%; width: 55%; height: 130%; background: radial-gradient(circle, rgba(204,255,0,0.07) 0%, transparent 70%); pointer-events: none; }
        .aca-hero-row { display: flex; gap: 55px; align-items: center; justify-content: space-between; flex-wrap: wrap; max-width: 1320px; margin: 0 auto; }
        .aca-hero-content { flex: 1.2; min-width: 300px; }
        .aca-badge { display: inline-flex; align-items: center; gap: 8px; padding: 6px 20px; border-radius: 40px; background: rgba(204,255,0,0.12); backdrop-filter: blur(4px); color: var(--aca-accent); font-weight: 500; font-size: 0.85rem; margin-bottom: 24px; border: 1px solid rgba(204,255,0,0.25); }
        .aca-hero h1 { font-size: 3rem; font-weight: 600; line-height: 1.2; margin: 0 0 20px; letter-spacing: -0.02em; background: linear-gradient(135deg, #ffffff, #e8ffb0); background-clip: text; -webkit-background-clip: text; color: transparent; }
        .aca-lead { font-size: 1.05rem; color: rgba(235,245,255,0.85); max-width: 560px; margin-bottom: 32px; line-height: 1.6; }
        .aca-btn-primary { background: var(--aca-accent); color: #0a1a1f; padding: 12px 34px; border-radius: 48px; font-weight: 500; border: none; transition: 0.25s; text-decoration: none; display: inline-block; box-shadow: 0 8px 22px rgba(0,0,0,0.2); }
        .aca-btn-primary:hover { background: #e2ff4a; transform: translateY(-2px); color: #0a1a1f; text-decoration: none; }
        .aca-btn-outline { background: transparent; color: #fff; border: 1px solid rgba(255,255,255,0.25); padding: 12px 28px; border-radius: 48px; font-weight: 400; transition: 0.2s; text-decoration: none; margin-left: 12px; }
        .aca-btn-outline:hover { border-color: var(--aca-accent); color: var(--aca-accent); background: rgba(204,255,0,0.05); text-decoration: none; }
        .aca-hero-image { flex: 1; display: flex; justify-content: center; }
        .aca-hero-image img { max-width: 560px; width: 100%; border-radius: 40px; box-shadow: 0 40px 60px -20px rgba(0,0,0,0.6); border: 1px solid rgba(204,255,0,0.2); transition: all 0.4s ease; }
        .aca-card { background: var(--aca-card); backdrop-filter: blur(2px); padding: 28px 26px; border-radius: 28px; border: 1px solid rgba(204,255,0,0.1); box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3); height: 100%; transition: all 0.3s; }
        .aca-card h4 { font-size: 1.3rem; font-weight: 500; margin-bottom: 14px; display: flex; align-items: center; gap: 10px; color: #ffffff; }
        .card-icon { width: 38px; height: 38px; background: rgba(204,255,0,0.1); border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .aca-feature-card { background: rgba(8,20,34,0.85); border-radius: 24px; padding: 28px 22px; border: 1px solid rgba(204,255,0,0.1); text-align: center; height: 100%; }
        .aca-stat { font-size: 2.6rem; font-weight: 600; color: var(--aca-accent); margin-bottom: 8px; }
        .form-control-cs { width: 100%; padding: 14px 18px; background: rgba(5,14,24,0.95); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; color: #fff; font-size: 0.95rem; }
        .form-control-cs:focus { border-color: var(--aca-accent); outline: none; box-shadow: 0 0 0 3px rgba(204,255,0,0.15); }
        .aca-faq .faq-question { cursor: pointer; font-weight: 500; position: relative; padding-right: 32px; }
        .aca-faq .faq-question::after { content: '+'; position: absolute; right: 0; top: -2px; font-size: 1.4rem; color: var(--aca-accent); }
        .aca-faq .faq-item.active .faq-question::after { content: '−'; }
        .aca-faq .faq-item { background: rgba(8,20,36,0.9); border-radius: 24px; padding: 20px 26px; margin-bottom: 14px; border: 1px solid rgba(204,255,0,0.1); }
        .aca-faq .faq-answer { display: none; padding-top: 16px; color: rgba(220,235,255,0.85); }
        #aca-scroll-top { position: fixed; right: 26px; bottom: 26px; width: 48px; height: 48px; background: var(--aca-accent); border-radius: 60px; display: flex; align-items: center; justify-content: center; color: #08131b; cursor: pointer; z-index: 1000; display: none; font-weight: 500; box-shadow: 0 8px 20px rgba(0,0,0,0.3); }
        .aca-section { padding: 70px 0; }
        @media (max-width: 991px) { .aca-hero-row { flex-direction: column-reverse; text-align: center; } .aca-hero-content { text-align: center; } .aca-hero h1 { font-size: 2.2rem; } .aca-btn-outline { margin-left: 0; margin-top: 12px; } .aca-section { padding: 50px 0; } }
        .container { max-width: 1280px; }
        hr { border-color: rgba(204,255,0,0.12); margin: 20px 0; }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="aca-hero">
            <div class="container">
                <div class="aca-hero-row">
                    <div class="aca-hero-content animate-on-scroll">
                        <span class="aca-badge"> ACA Health Insurance</span>
                        <h1>Affordable Marketplace plans for individuals & families</h1>
                        <p class="aca-lead">Compare ACA plans, check subsidy eligibility, and enroll with licensed agents. Open Enrollment is here — get covered today.</p>
                        <div class="aca-hero-buttons">
                            <a href="quotes.php" class="aca-btn-primary">Compare plans →</a>
                            <a href="about.php" class="aca-btn-outline">Learn more</a>
                        </div>
                    </div>
                    <div class="aca-hero-image animate-on-scroll">
                        <img src="assets/images/banner/home-1-hero-slider.webp" alt="ACA Health Insurance Marketplace" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <section id="aca-guide" class="aca-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 animate-on-scroll">
                        <span class="aca-badge" style="margin-bottom: 12px;">Health coverage made simple</span>
                        <h2 style="font-size: 1.9rem; font-weight: 600; margin: 12px 0 18px;">Affordable Care Act marketplace plans</h2>
                        <p style="color: rgba(235,245,255,0.85); line-height: 1.65; margin-bottom: 20px;">The Health Insurance Marketplace offers subsidized plans based on your income. Most enrollees qualify for premium tax credits that lower monthly costs.</p>
                        <p style="color: rgba(235,245,255,0.8);">Open Enrollment: Nov 1 – Jan 15. Special Enrollment available after qualifying life events.</p>
                    </div>
                    <div class="col-lg-6 animate-on-scroll">
                        <div class="aca-card"><h4><span class="card-icon">📋</span> Key ACA facts</h4><p>✔ Premium tax credits available for 400% FPL and below<br>✔ Cost-sharing reductions lower out-of-pocket costs<br>✔ Essential health benefits included in all plans<br>✔ No denial for pre-existing conditions<br>✔ Free preventive care: vaccines, screenings, annual checkups</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="aca-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll"><h2 style="font-size: 1.9rem; font-weight: 600;">Metal tier plans explained</h2><p style="color: rgba(255,255,255,0.7);">Choose the balance of premium vs. out-of-pocket costs that works for you.</p></div>
                <div class="row g-4">
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-card w-100 hover-lift"><h4><span class="card-icon">🥇</span> Bronze</h4><p>Lowest monthly premium, highest deductibles. 60% coverage / 40% patient pay. Great for catastrophic protection.</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-card w-100 hover-lift"><h4><span class="card-icon">🥈</span> Silver</h4><p>Moderate premium, lower deductibles. 70% coverage. Best for subsidy-eligible — extra cost-sharing reductions.</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-card w-100 hover-lift"><h4><span class="card-icon">🥉</span> Gold</h4><p>Higher premium, low deductibles. 80% coverage. Great for those who expect regular medical care.</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-card w-100 hover-lift"><h4><span class="card-icon">💎</span> Platinum</h4><p>Highest premium, lowest out-of-pocket. 90% coverage. Best for chronic conditions or frequent care.</p></div></div>
                </div>
            </div>
        </section>

        <section class="aca-section" style="background: rgba(2,12,22,0.5); border-radius: 48px; margin: 0 0 20px;">
            <div class="container"><div class="row g-4">
                <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-feature-card w-100"><div class="aca-stat">9/10</div><h4 style="font-weight: 500;">Enrollees get subsidies</h4><p>Average savings of $500+ monthly</p></div></div>
                <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-feature-card w-100"><div class="aca-stat">35M+</div><h4 style="font-weight: 500;">Americans covered</h4><p>Through ACA marketplace plans</p></div></div>
                <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-feature-card w-100"><div class="aca-stat">$0</div><h4 style="font-weight: 500;">Preventive care</h4><p>No copay for annual physicals & screenings</p></div></div>
                <div class="col-md-3 d-flex animate-on-scroll"><div class="aca-feature-card w-100"><div class="aca-stat">50+</div><h4 style="font-weight: 500;">Essential benefits</h4><p>Including mental health & maternity</p></div></div>
            </div></div>
        </section>

        <section class="aca-section"><div class="container"><div class="row g-4"><div class="col-md-6 animate-on-scroll"><div class="aca-card"><h4><span class="card-icon">💰</span> Premium tax credits explained</h4><p>If your household income is between 100% and 400% of the federal poverty level, you qualify for subsidies that lower your monthly premium. We'll calculate your exact savings.</p></div></div><div class="col-md-6 animate-on-scroll"><div class="aca-card"><h4><span class="card-icon">📅</span> Special enrollment periods</h4><p>Life events like marriage, birth of a child, job loss, or moving trigger a 60-day SEP. We help you navigate enrollment outside Open Enrollment.</p></div></div></div></div></section>

        <section id="aca-faq" class="aca-section aca-faq"><div class="container"><div class="text-center mb-5 animate-on-scroll"><h2 style="font-weight: 600; font-size: 1.8rem;">ACA marketplace FAQ</h2></div><div class="row justify-content-center"><div class="col-lg-8"><div class="faq-item animate-on-scroll"><div class="faq-question">What is the Open Enrollment period?</div><div class="faq-answer">November 1 through January 15 in most states. Enroll by December 15 for coverage starting January 1.</div></div><div class="faq-item animate-on-scroll"><div class="faq-question">Can I get a subsidy if I have employer coverage?</div><div class="faq-answer">Generally, no — if employer coverage is "affordable" and meets minimum value standards. But we'll review your specific situation.</div></div><div class="faq-item animate-on-scroll"><div class="faq-question">Are pre-existing conditions covered?</div><div class="faq-answer">Yes — ACA plans cannot deny coverage or charge more for pre-existing conditions like diabetes, cancer, or heart disease.</div></div><div class="faq-item animate-on-scroll"><div class="faq-question">What's the penalty for no health insurance?</div><div class="faq-answer">The federal penalty was removed in 2019, but some states (CA, MA, NJ, RI, DC) have their own mandates with penalties.</div></div></div></div></div></section>

    </main>
    <div id="aca-scroll-top" title="Back to top">↑</div>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX - Applied to ACA Health Insurance Page
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
        // ORIGINAL ACA PAGE SCRIPTS (preserved)
        // ================================================
        (function() {
            const animated = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.12 });
            animated.forEach(el => observer.observe(el));
            const faqItems = document.querySelectorAll('.aca-faq .faq-item');
            faqItems.forEach(item => { const q = item.querySelector('.faq-question'); const a = item.querySelector('.faq-answer'); q.addEventListener('click', () => { const active = item.classList.contains('active'); faqItems.forEach(o => { if (o !== item && o.classList.contains('active')) { o.classList.remove('active'); o.querySelector('.faq-answer').style.display = 'none'; } }); if (!active) { item.classList.add('active'); a.style.display = 'block'; } else { item.classList.remove('active'); a.style.display = 'none'; } }); });
            const btn = document.getElementById('aca-scroll-top');
            window.addEventListener('scroll', () => { if (window.scrollY > 400) { btn.style.display = 'flex'; } else { btn.style.display = 'none'; } });
            btn.addEventListener('click', () => { window.scrollTo({ top: 0, behavior: 'smooth' }); });
        })();
    </script>
</body>
</html>