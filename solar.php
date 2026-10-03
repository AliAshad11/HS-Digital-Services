<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Solar BPO Services | HS Digital Services | Outsourcing for Solar Companies</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --sol-accent: #CCFF00; --sol-accent-soft: rgba(204, 255, 0, 0.12); --sol-bg-dark: #050a14; --sol-card: rgba(6, 16, 28, 0.94); --sol-text: #f0f4fe; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: var(--sol-bg-dark); color: var(--sol-text); font-family: 'Inter', sans-serif; font-weight: 400; line-height: 1.55; }
        .animate-on-scroll { opacity: 0; transform: translateY(30px); transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.3, 1.1); }
        .animate-on-scroll.revealed { opacity: 1; transform: translateY(0); }
        .hover-lift { transition: transform 0.3s ease, border-color 0.2s; }
        .hover-lift:hover { transform: translateY(-5px); border-color: rgba(204, 255, 0, 0.4); }
        .sol-hero { padding: 80px 0 70px; border-radius: 32px; overflow: hidden; position: relative; background: radial-gradient(ellipse at 40% 50%, rgba(2, 18, 32, 0.97), rgba(0, 6, 14, 0.99)); border: 1px solid rgba(255,255,255,0.04); margin-top: 10px; }
        .sol-hero::before { content: ''; position: absolute; left: 5%; bottom: -5%; width: 50%; height: 120%; background: radial-gradient(circle, rgba(204,255,0,0.08) 0%, transparent 70%); pointer-events: none; }
        .sol-hero-row { display: flex; gap: 55px; align-items: center; justify-content: space-between; flex-wrap: wrap; max-width: 1320px; margin: 0 auto; }
        .sol-hero-content { flex: 1.2; min-width: 300px; }
        .sol-badge { display: inline-flex; align-items: center; gap: 8px; padding: 6px 20px; border-radius: 40px; background: rgba(204,255,0,0.12); backdrop-filter: blur(4px); color: var(--sol-accent); font-weight: 500; font-size: 0.85rem; margin-bottom: 24px; border: 1px solid rgba(204,255,0,0.25); }
        .sol-hero h1 { font-size: 3rem; font-weight: 600; line-height: 1.2; margin: 0 0 20px; letter-spacing: -0.02em; background: linear-gradient(135deg, #ffffff, #e8ffb0); background-clip: text; -webkit-background-clip: text; color: transparent; }
        .sol-lead { font-size: 1.05rem; color: rgba(235,245,255,0.85); max-width: 560px; margin-bottom: 32px; line-height: 1.6; }
        .sol-btn-primary { background: var(--sol-accent); color: #0a1a1f; padding: 12px 34px; border-radius: 48px; font-weight: 500; border: none; transition: 0.25s; text-decoration: none; display: inline-block; box-shadow: 0 8px 22px rgba(0,0,0,0.2); }
        .sol-btn-primary:hover { background: #e2ff4a; transform: translateY(-2px); color: #0a1a1f; text-decoration: none; }
        .sol-btn-outline { background: transparent; color: #fff; border: 1px solid rgba(255,255,255,0.25); padding: 12px 28px; border-radius: 48px; font-weight: 400; transition: 0.2s; text-decoration: none; margin-left: 12px; }
        .sol-btn-outline:hover { border-color: var(--sol-accent); color: var(--sol-accent); background: rgba(204,255,0,0.05); text-decoration: none; }
        .sol-hero-image { flex: 1; display: flex; justify-content: center; }
        .sol-hero-image img { max-width: 560px; width: 100%; border-radius: 40px; box-shadow: 0 40px 60px -20px rgba(0,0,0,0.6); border: 1px solid rgba(204,255,0,0.2); transition: all 0.4s ease; }
        .sol-card { background: var(--sol-card); backdrop-filter: blur(2px); padding: 28px 26px; border-radius: 28px; border: 1px solid rgba(204,255,0,0.1); box-shadow: 0 20px 35px -12px rgba(0,0,0,0.3); height: 100%; transition: all 0.3s; }
        .sol-card h4 { font-size: 1.3rem; font-weight: 500; margin-bottom: 14px; display: flex; align-items: center; gap: 10px; color: #ffffff; }
        .card-icon { width: 38px; height: 38px; background: rgba(204,255,0,0.1); border-radius: 16px; display: inline-flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .sol-feature-card { background: rgba(8,20,34,0.85); border-radius: 24px; padding: 28px 22px; border: 1px solid rgba(204,255,0,0.1); text-align: center; height: 100%; }
        .sol-stat { font-size: 2.6rem; font-weight: 600; color: var(--sol-accent); margin-bottom: 8px; }
        .form-control-cs { width: 100%; padding: 14px 18px; background: rgba(5,14,24,0.95); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; color: #fff; font-size: 0.95rem; }
        .form-control-cs:focus { border-color: var(--sol-accent); outline: none; box-shadow: 0 0 0 3px rgba(204,255,0,0.15); }
        .sol-faq .faq-question { cursor: pointer; font-weight: 500; position: relative; padding-right: 32px; }
        .sol-faq .faq-question::after { content: '+'; position: absolute; right: 0; top: -2px; font-size: 1.4rem; color: var(--sol-accent); }
        .sol-faq .faq-item.active .faq-question::after { content: '−'; }
        .sol-faq .faq-item { background: rgba(8,20,36,0.9); border-radius: 24px; padding: 20px 26px; margin-bottom: 14px; border: 1px solid rgba(204,255,0,0.1); }
        .sol-faq .faq-answer { display: none; padding-top: 16px; color: rgba(220,235,255,0.85); }
        #sol-scroll-top { position: fixed; right: 26px; bottom: 26px; width: 48px; height: 48px; background: var(--sol-accent); border-radius: 60px; display: flex; align-items: center; justify-content: center; color: #08131b; cursor: pointer; z-index: 1000; display: none; font-weight: 500; box-shadow: 0 8px 20px rgba(0,0,0,0.3); }
        .sol-section { padding: 70px 0; }
        @media (max-width: 991px) { .sol-hero-row { flex-direction: column-reverse; text-align: center; } .sol-hero-content { text-align: center; } .sol-hero h1 { font-size: 2.2rem; } .sol-btn-outline { margin-left: 0; margin-top: 12px; } .sol-section { padding: 50px 0; } }
        .container { max-width: 1280px; }
        hr { border-color: rgba(204,255,0,0.12); margin: 20px 0; }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="sol-hero">
            <div class="container">
                <div class="sol-hero-row">
                    <div class="sol-hero-content animate-on-scroll">
                        <span class="sol-badge">Solar BPO Services</span>
                        <h1>BPO solutions for solar companies & installers</h1>
                        <p class="sol-lead">Customer support, lead qualification, appointment setting, and back-office processing — helping solar businesses scale efficiently.</p>
                        <div class="sol-hero-buttons">
                            <a href="quotes.php" class="sol-btn-primary">Outsource to us →</a>
                            <a href="outbound.php" class="sol-btn-outline">Our services</a>
                        </div>
                    </div>
                    <div class="sol-hero-image animate-on-scroll">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/035/147/995/small/an-asian-people-wearing-a-headset-working-in-a-call-center-photo.jpg" alt="Solar BPO customer support services" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </section>

        <section id="sol-services" class="sol-section">
            <div class="container">
                <div class="text-center mb-5 animate-on-scroll">
                    <h2 style="font-size: 1.9rem; font-weight: 600;">Solar industry outsourcing solutions</h2>
                    <p style="color: rgba(255,255,255,0.7); max-width: 680px; margin: 12px auto 0;">We help solar companies reduce costs, improve response times, and focus on installation — while we handle customer operations.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="sol-card w-100 hover-lift"><h4><span class="card-icon">📞</span> Solar Customer Support</h4><p>24/7 inbound & outbound call handling for solar inquiries, troubleshooting, and service requests. Trained agents who understand solar terminology.</p></div></div>
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="sol-card w-100 hover-lift"><h4><span class="card-icon">🎯</span> Lead Qualification</h4><p>Pre-qualify solar leads before they reach your sales team. Verify roof suitability, energy usage, and financing eligibility.</p></div></div>
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="sol-card w-100 hover-lift"><h4><span class="card-icon">📅</span> Appointment Setting</h4><p>Schedule site assessments, consultation calls, and installation dates. Reduce no-shows with automated reminders.</p></div></div>
                </div>
                <div class="row g-4 mt-3">
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="sol-card w-100 hover-lift"><h4><span class="card-icon">📋</span> Permit & Paperwork Processing</h4><p>Back-office support for permit applications, interconnection agreements, and incentive documentation. Reduce installation delays.</p></div></div>
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="sol-card w-100 hover-lift"><h4><span class="card-icon">💬</span> Live Chat & Email Support</h4><p>Real-time chat and email management for solar website visitors. Answer FAQs, capture leads, and schedule consultations.</p></div></div>
                    <div class="col-md-4 d-flex animate-on-scroll"><div class="sol-card w-100 hover-lift"><h4><span class="card-icon">📊</span> CRM Management</h4><p>Keep your solar CRM clean and updated. Data entry, lead scoring, and pipeline management tailored to solar sales cycles.</p></div></div>
                </div>
            </div>
        </section>

        <section class="sol-section" style="background: rgba(2,12,22,0.5); border-radius: 48px; margin: 0 0 20px;">
            <div class="container"><div class="row g-4">
                <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-feature-card w-100"><div class="sol-stat">40%</div><h4 style="font-weight: 500;">Cost reduction</h4><p>Compared to in-house teams</p></div></div>
                <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-feature-card w-100"><div class="sol-stat">24/7</div><h4 style="font-weight: 500;">Coverage</h4><p>Round-the-clock support available</p></div></div>
                <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-feature-card w-100"><div class="sol-stat">50+</div><h4 style="font-weight: 500;">Solar clients</h4><p>Trusting us with their operations</p></div></div>
                <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-feature-card w-100"><div class="sol-stat">99%</div><h4 style="font-weight: 500;">Satisfaction</h4><p>Client retention rate</p></div></div>
            </div></div>
        </section>

        <section class="sol-section">
            <div class="container"><div class="row g-4">
                <div class="col-md-6 animate-on-scroll"><div class="sol-card"><h4><span class="card-icon">🚀</span> Why solar companies outsource to us</h4><p>Solar installers face high customer inquiry volumes, complex paperwork, and seasonal demand spikes. We provide scalable, trained agents who understand net metering, tax credits, financing options, and technical solar concepts — so your team focuses on installation.</p></div></div>
                <div class="col-md-6 animate-on-scroll"><div class="sol-card"><h4><span class="card-icon">🔧</span> Solar-specific agent training</h4><p>Our agents complete a 4-week solar industry training program covering: panel types, inverter functions, battery storage, federal ITC, state incentives, utility interconnection, and common customer objections.</p></div></div>
            </div></div>
        </section>

        <section class="sol-section">
            <div class="container">
                <div class="text-center mb-4 animate-on-scroll"><h2 style="font-weight: 600;">How our solar BPO process works</h2><p style="color: rgba(255,255,255,0.7);">Seamless integration with your solar business</p></div>
                <div class="row g-4">
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-card w-100 text-center"><div style="font-size: 2rem; margin-bottom: 12px;">🔍</div><h4>1. Discovery</h4><p>We learn your solar sales process, products, and service territories</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-card w-100 text-center"><div style="font-size: 2rem; margin-bottom: 12px;">📚</div><h4>2. Agent training</h4><p>Custom training on your solar offerings & CRM</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-card w-100 text-center"><div style="font-size: 2rem; margin-bottom: 12px;">⚙️</div><h4>3. Pilot launch</h4><p>2-week pilot with select workflows</p></div></div>
                    <div class="col-md-3 d-flex animate-on-scroll"><div class="sol-card w-100 text-center"><div style="font-size: 2rem; margin-bottom: 12px;">📈</div><h4>4. Scale & optimize</h4><p>Full rollout with weekly performance reviews</p></div></div>
                </div>
            </div>
        </section>

        <section id="sol-faq" class="sol-section sol-faq"><div class="container"><div class="text-center mb-5 animate-on-scroll"><h2 style="font-weight: 600; font-size: 1.8rem;">Solar BPO FAQ</h2></div><div class="row justify-content-center"><div class="col-lg-8">
            <div class="faq-item animate-on-scroll"><div class="faq-question">What solar-specific services do you offer?</div><div class="faq-answer">Lead qualification, appointment setting, customer support (phone/email/chat), permit processing, CRM data entry, and financing document collection — all tailored for solar companies.</div></div>
            <div class="faq-item animate-on-scroll"><div class="faq-question">Are your agents trained on solar industry terms?</div><div class="faq-answer">Yes — all agents complete comprehensive training covering solar PV systems, battery storage, net metering, tax credits, incentives, and common installation questions.</div></div>
            <div class="faq-item animate-on-scroll"><div class="faq-question">Can you integrate with our solar CRM?</div><div class="faq-answer">Absolutely. We work with Solar Nexus, Solargraf, HubSpot, Salesforce, and custom CRMs. Our team handles data sync, lead assignment, and activity logging.</div></div>
            <div class="faq-item animate-on-scroll"><div class="faq-question">How do you handle appointment setting for site assessments?</div><div class="faq-answer">We qualify leads, confirm property details, schedule site visits, and send calendar invites. We also handle rescheduling and follow-ups to reduce cancellations.</div></div>
            <div class="faq-item animate-on-scroll"><div class="faq-question">What is your pricing model for solar BPO?</div><div class="faq-answer">Flexible options: per-hour, per-lead, per-appointment, or dedicated teams. We'll design a model that aligns with your solar sales cycle and budget.</div></div>
        </div></div></div></section>

    </main>
    <div id="sol-scroll-top" title="Back to top">↑</div>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/jquery.min.js"></script>
    <!-- FIX: Changed bootstrap.min.js to bootstrap.bundle.min.js -->
    <!-- The bundle includes Popper.js + the Collapse plugin needed for the hamburger/navbar toggler -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // ================================================
        // HAMBURGER MENU FIX - Applied to Solar BPO Page
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
        // ORIGINAL SOLAR BPO PAGE SCRIPTS (preserved)
        // ================================================
        (function() {
            const animated = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.12 });
            animated.forEach(el => observer.observe(el));
            const faqItems = document.querySelectorAll('.sol-faq .faq-item');
            faqItems.forEach(item => { const q = item.querySelector('.faq-question'); const a = item.querySelector('.faq-answer'); q.addEventListener('click', () => { const active = item.classList.contains('active'); faqItems.forEach(o => { if (o !== item && o.classList.contains('active')) { o.classList.remove('active'); o.querySelector('.faq-answer').style.display = 'none'; } }); if (!active) { item.classList.add('active'); a.style.display = 'block'; } else { item.classList.remove('active'); a.style.display = 'none'; } }); });
            const btn = document.getElementById('sol-scroll-top');
            window.addEventListener('scroll', () => { if (window.scrollY > 400) { btn.style.display = 'flex'; } else { btn.style.display = 'none'; } });
            btn.addEventListener('click', () => { window.scrollTo({ top: 0, behavior: 'smooth' }); });
        })();
    </script>
</body>
</html>