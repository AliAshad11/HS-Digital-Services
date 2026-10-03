<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Medical Delivery Program | HS Digital Services</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --md-accent: #CCFF00;
            --md-accent-soft: rgba(204, 255, 0, 0.12);
            --md-bg-dark: #050a14;
            --md-card: rgba(6, 16, 28, 0.94);
            --md-text: #f0f4fe;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: var(--md-bg-dark); color: var(--md-text); font-family: 'Inter', sans-serif; font-weight: 400; line-height: 1.55; }
        .animate-on-scroll { opacity: 0; transform: translateY(30px); transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1); }
        .animate-on-scroll.revealed { opacity: 1; transform: translateY(0); }
        .hover-lift { transition: transform 0.3s ease, border-color 0.2s, box-shadow 0.2s; }
        .hover-lift:hover { transform: translateY(-5px); border-color: rgba(204, 255, 0, 0.4); box-shadow: 0 25px 40px -15px rgba(0,0,0,0.4); }
        .md-hero { padding: 80px 0 70px; border-radius: 32px; overflow: hidden; position: relative; background: radial-gradient(ellipse at 30% 40%, rgba(2, 18, 32, 0.97), rgba(0, 6, 14, 0.99)); border: 1px solid rgba(255, 255, 255, 0.04); margin-top: 10px; }
        .md-hero::before { content: ''; position: absolute; left: -5%; top: -10%; width: 55%; height: 130%; background: radial-gradient(circle, rgba(204, 255, 0, 0.07) 0%, transparent 70%); pointer-events: none; }
        .md-hero-row { display: flex; gap: 55px; align-items: center; justify-content: space-between; flex-wrap: wrap; max-width: 1320px; margin: 0 auto; }
        .md-hero-content { flex: 1.2; min-width: 300px; }
        .md-badge { display: inline-flex; align-items: center; gap: 8px; padding: 6px 20px; border-radius: 40px; background: rgba(204, 255, 0, 0.12); backdrop-filter: blur(4px); color: var(--md-accent); font-weight: 500; font-size: 0.85rem; letter-spacing: 0.3px; margin-bottom: 24px; border: 1px solid rgba(204, 255, 0, 0.25); }
        .md-hero h1 { font-size: 3rem; font-weight: 600; line-height: 1.2; margin: 0 0 20px 0; letter-spacing: -0.02em; background: linear-gradient(135deg, #ffffff, #e8ffb0); background-clip: text; -webkit-background-clip: text; color: transparent; }
        .md-lead { font-size: 1.05rem; color: rgba(235, 245, 255, 0.85); max-width: 560px; margin-bottom: 32px; font-weight: 400; line-height: 1.6; }
        .md-btn-primary { background: var(--md-accent); color: #0a1a1f; padding: 12px 34px; border-radius: 48px; font-weight: 500; border: none; transition: all 0.25s; text-decoration: none; display: inline-block; box-shadow: 0 8px 22px rgba(0,0,0,0.2); }
        .md-btn-primary:hover { background: #e2ff4a; transform: translateY(-2px); box-shadow: 0 14px 30px rgba(204,255,0,0.2); color: #0a1a1f; text-decoration: none; }
        .md-btn-outline { background: transparent; color: #fff; border: 1px solid rgba(255,255,255,0.25); padding: 12px 28px; border-radius: 48px; font-weight: 400; transition: 0.2s; text-decoration: none; margin-left: 12px; }
        .md-btn-outline:hover { border-color: var(--md-accent); color: var(--md-accent); background: rgba(204, 255, 0, 0.05); text-decoration: none; }
        .md-hero-image { flex: 1; display: flex; justify-content: center; }
        .md-hero-image img { max-width: 560px; width: 100%; border-radius: 40px; box-shadow: 0 40px 60px -20px rgba(0,0,0,0.6); border: 1px solid rgba(204,255,0,0.2); transition: all 0.4s ease; object-fit: cover; }
        .md-card { background: var(--md-card); backdrop-filter: blur(2px); padding: 28px 26px; border-radius: 28px; border: 1px solid rgba(204, 255, 0, 0.1); box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3); height: 100%; transition: all 0.3s; }
        .md-card h4 { font-size: 1.3rem; font-weight: 500; margin-bottom: 14px; letter-spacing: -0.2px; color: #ffffff; display: flex; align-items: center; gap: 10px; }
        .card-icon { width: 38px; height: 38px; background: rgba(204, 255, 0, 0.1); border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .md-feature-card { background: rgba(8, 20, 34, 0.85); border-radius: 24px; padding: 28px 22px; border: 1px solid rgba(204, 255, 0, 0.1); text-align: center; height: 100%; }
        .md-stat { font-size: 2.6rem; font-weight: 600; color: var(--md-accent); margin-bottom: 8px; line-height: 1.1; }
        .form-control-cs { width: 100%; padding: 14px 18px; background: rgba(5, 14, 24, 0.95); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 20px; color: #fff; font-size: 0.95rem; transition: 0.2s; }
        .form-control-cs:focus { border-color: var(--md-accent); outline: none; box-shadow: 0 0 0 3px rgba(204, 255, 0, 0.15); }
        .md-faq .faq-question { cursor: pointer; font-weight: 500; position: relative; padding-right: 32px; color: #f0f3fa; }
        .md-faq .faq-question::after { content: '+'; position: absolute; right: 0; top: -2px; font-size: 1.4rem; font-weight: 400; color: var(--md-accent); }
        .md-faq .faq-item.active .faq-question::after { content: '−'; }
        .md-faq .faq-item { background: rgba(8, 20, 36, 0.9); border-radius: 24px; padding: 20px 26px; margin-bottom: 14px; border: 1px solid rgba(204, 255, 0, 0.1); }
        .md-faq .faq-answer { display: none; padding-top: 16px; color: rgba(220, 235, 255, 0.85); }
        #md-scroll-top { position: fixed; right: 26px; bottom: 26px; width: 48px; height: 48px; background: var(--md-accent); border-radius: 60px; display: flex; align-items: center; justify-content: center; color: #08131b; cursor: pointer; z-index: 1000; display: none; font-weight: 500; transition: 0.2s; box-shadow: 0 8px 20px rgba(0,0,0,0.3); }
        .md-section { padding: 70px 0; }
        @media (max-width: 991px) { .md-hero-row { flex-direction: column-reverse; text-align: center; } .md-hero-content { text-align: center; } .md-hero h1 { font-size: 2.2rem; } .md-btn-outline { margin-left: 0; margin-top: 12px; } .md-section { padding: 50px 0; } }
        .container { max-width: 1280px; }
        hr { border-color: rgba(204,255,0,0.12); margin: 20px 0; }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="md-hero">
            <div class="container">
                <div class="md-hero-row">
                    <div class="md-hero-content animate-on-scroll">
                        <span class="md-badge"> Medical Delivery Program</span>
                        <h1>Reliable medical supply delivery for healthcare facilities</h1>
                        <p class="md-lead">End-to-end logistics for pharmaceuticals, lab specimens, and medical equipment. Temperature-controlled, HIPAA-compliant, and same-day delivery options available.</p>
                        <div class="md-hero-buttons">
                            <a href="quotes.php" class="md-btn-primary">Start delivery →</a>
                            <a href="outbound.php" class="md-btn-outline">Our services</a>
                        </div>
                    </div>
                    <div class="md-hero-image animate-on-scroll">
                        <img src="https://media.istockphoto.com/id/1471759838/photo/medical-helpline-supervisor.jpg?s=612x612&w=0&k=20&c=C7qp67HXxTRrxWB6u331MdAWtw5d8ivLbMJ2JkhUjx8=" alt="Medical delivery service" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <section id="md-services" class="md-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size: 1.9rem; font-weight: 600;">Comprehensive medical logistics</h2>
                    <p style="color: rgba(255,255,255,0.7); max-width: 680px; margin: 12px auto 0;">From pharmacies to hospitals, labs to clinics — we deliver what matters most.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="md-card w-100 hover-lift"><h4><span class="card-icon">💊</span> Pharmaceutical Delivery</h4><p>Prescription medications, specialty drugs, and OTC products delivered with chain-of-custody tracking and temperature monitoring.</p></div></div>
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="md-card w-100 hover-lift"><h4><span class="card-icon">🧪</span> Lab Specimen Transport</h4><p>Time-sensitive biological samples transported under strict protocols. Chain of custody documentation for every shipment.</p></div></div>
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="md-card w-100 hover-lift"><h4><span class="card-icon">🏥</span> Medical Equipment</h4><p>Durable medical equipment, surgical supplies, and PPE delivered to clinics, hospitals, and home health patients.</p></div></div>
                </div>
            </div>
        </section>

        <section class="md-section" style="background: rgba(2, 12, 22, 0.5); border-radius: 48px; margin: 0 0 20px;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="md-feature-card w-100"><div class="md-stat">99.7%</div><h4 style="font-weight: 500;">On-time rate</h4><p>Over 50,000 successful deliveries</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="md-feature-card w-100"><div class="md-stat">24/7</div><h4 style="font-weight: 500;">Monitoring</h4><p>Real-time temperature & location tracking</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="md-feature-card w-100"><div class="md-stat">50+</div><h4 style="font-weight: 500;">Cities served</h4><p>Growing network across the region</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="md-feature-card w-100"><div class="md-stat">HIPAA</div><h4 style="font-weight: 500;">Compliant</h4><p>Fully certified and insured</p></div></div>
                </div>
            </div>
        </section>

        <section class="md-section">
            <div class="container"><div class="row g-4"><div class="col-md-6 animate-on-scroll"><div class="md-card"><h4><span class="card-icon">❄️</span> Temperature-controlled logistics</h4><p>Refrigerated (2-8°C), frozen (-20°C), and ambient options. Continuous temperature monitoring with alerts for deviations.</p></div></div><div class="col-md-6 animate-on-scroll"><div class="md-card"><h4><span class="card-icon">📋</span> Compliance & Security</h4><p>HIPAA-compliant chain of custody, driver background checks, GPS tracking, and electronic proof of delivery.</p></div></div></div></div>
        </section>

        <section id="md-faq" class="md-section md-faq"><div class="container"><div class="text-center mb-5 animate-on-scroll"><h2 style="font-weight: 600; font-size: 1.8rem;">Medical delivery FAQ</h2></div><div class="row justify-content-center"><div class="col-lg-8"><div class="faq-item animate-on-scroll"><div class="faq-question">What types of medical items do you deliver?</div><div class="faq-answer">Prescriptions, lab specimens, medical devices, surgical kits, vaccines, infusion supplies, and more. Contact us for specific requirements.</div></div><div class="faq-item animate-on-scroll"><div class="faq-question">Do you offer same-day delivery?</div><div class="faq-answer">Yes — stat and same-day delivery available for urgent medical needs within our service area.</div></div><div class="faq-item animate-on-scroll"><div class="faq-question">How do you ensure temperature integrity?</div><div class="faq-answer">We use validated coolers, real-time data loggers, and trained drivers. Temperature reports provided with every sensitive shipment.</div></div><div class="faq-item animate-on-scroll"><div class="faq-question">Are your drivers background checked?</div><div class="faq-answer">All drivers undergo background checks, drug screening, and HIPAA training before handling any medical shipments.</div></div></div></div></div></section>

    </main>
    <div id="md-scroll-top" title="Back to top">↑</div>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX - Applied to Medical Delivery Page
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
        // ORIGINAL MEDICAL DELIVERY PAGE SCRIPTS (preserved)
        // ================================================
        (function() {
            const animated = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.12 });
            animated.forEach(el => observer.observe(el));
            const faqItems = document.querySelectorAll('.md-faq .faq-item');
            faqItems.forEach(item => { const q = item.querySelector('.faq-question'); const a = item.querySelector('.faq-answer'); q.addEventListener('click', () => { const active = item.classList.contains('active'); faqItems.forEach(o => { if (o !== item && o.classList.contains('active')) { o.classList.remove('active'); o.querySelector('.faq-answer').style.display = 'none'; } }); if (!active) { item.classList.add('active'); a.style.display = 'block'; } else { item.classList.remove('active'); a.style.display = 'none'; } }); });
            const btn = document.getElementById('md-scroll-top');
            window.addEventListener('scroll', () => { if (window.scrollY > 400) { btn.style.display = 'flex'; } else { btn.style.display = 'none'; } });
            btn.addEventListener('click', () => { window.scrollTo({ top: 0, behavior: 'smooth' }); });
        })();
    </script>
</body>
</html>