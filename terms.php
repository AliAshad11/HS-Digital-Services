<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use | HS Digital Services</title>
    <!--Essential css files-->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.png">
    <style>
        :root {
            --legal-accent: #CCFF00;
            --legal-bg-card: rgba(3, 19, 32, 0.65);
        }

        .legal-area {
            padding: 60px 0 100px;
        }

        .legal-wrapper {
            max-width: 980px;
            margin: 0 auto;
        }

        .legal-updated {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 18px;
            border-radius: 40px;
            background: rgba(204, 255, 0, 0.1);
            border: 1px solid rgba(204, 255, 0, 0.25);
            color: var(--legal-accent);
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 28px;
        }

        .legal-intro {
            color: rgba(225, 235, 255, 0.85);
            font-size: 1.02rem;
            line-height: 1.7;
            margin-bottom: 36px;
        }

        /* ── Table of contents ── */
        .legal-toc {
            background: var(--legal-bg-card);
            border: 1px solid rgba(204, 255, 0, 0.15);
            border-radius: 16px;
            padding: 28px 30px;
            margin-bottom: 44px;
            backdrop-filter: blur(8px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }
        .legal-toc h2 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 16px;
            letter-spacing: -0.2px;
        }
        .legal-toc ol {
            margin: 0;
            padding-left: 22px;
            columns: 2;
            column-gap: 32px;
        }
        .legal-toc li {
            margin-bottom: 10px;
            break-inside: avoid;
        }
        .legal-toc a {
            color: rgba(225, 235, 255, 0.85);
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s;
        }
        .legal-toc a:hover {
            color: var(--legal-accent);
        }

        /* ── Sections ── */
        .legal-section {
            margin-bottom: 38px;
            scroll-margin-top: 110px;
        }
        .legal-section h2 {
            font-size: 1.35rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: -0.2px;
        }
        .legal-section h2 .num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(204, 255, 0, 0.1);
            border: 1px solid rgba(204, 255, 0, 0.3);
            color: var(--legal-accent);
            font-size: 0.9rem;
            font-weight: 600;
            flex-shrink: 0;
        }
        .legal-section p {
            color: rgba(225, 235, 255, 0.82);
            line-height: 1.75;
            font-size: 0.98rem;
            margin-bottom: 14px;
        }
        .legal-section ul {
            margin: 0 0 14px;
            padding-left: 22px;
        }
        .legal-section ul li {
            color: rgba(225, 235, 255, 0.82);
            line-height: 1.7;
            font-size: 0.98rem;
            margin-bottom: 8px;
        }
        .legal-section a.inline-link {
            color: var(--legal-accent);
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        /* ── Contact card ── */
        .legal-contact-card {
            background: linear-gradient(135deg, rgba(8, 22, 38, 0.95), rgba(4, 14, 26, 0.98));
            border: 1px solid rgba(204, 255, 0, 0.2);
            border-radius: 18px;
            padding: 32px 30px;
            margin-top: 50px;
        }
        .legal-contact-card h3 {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .legal-contact-card p {
            color: rgba(225, 235, 255, 0.85);
            line-height: 1.65;
            margin-bottom: 4px;
            font-size: 0.97rem;
        }
        .legal-contact-card a {
            color: var(--legal-accent);
            text-decoration: none;
        }
        .legal-contact-card a:hover {
            text-decoration: underline;
        }

        hr.legal-divider {
            border: none;
            border-top: 1px solid rgba(204, 255, 0, 0.12);
            margin: 0 0 38px;
        }

        @media (max-width: 768px) {
            .legal-area { padding: 40px 0 70px; }
            .legal-toc ol { columns: 1; }
            .legal-toc { padding: 22px 20px; }
            .legal-section h2 { font-size: 1.15rem; }
            .legal-contact-card { padding: 26px 22px; }
        }
        @media (max-width: 480px) {
            .legal-section h2 .num { width: 28px; height: 28px; font-size: 0.8rem; }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Start Bread Crumb Area -->
    <section class="bread-crumb-area">
        <div class="container">
            <div class="bread-crumb-wrapper">
                <a href="index.php">Home</a>
                <span><svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.90625 7.53125L2.84375 13.625C2.53125 13.9062 2.0625 13.9062 1.78125 13.625L1.0625 12.9062C0.78125 12.625 0.78125 12.1562 1.0625 11.8438L5.875 7L1.0625 2.1875C0.78125 1.875 0.78125 1.40625 1.0625 1.125L1.78125 0.40625C2.0625 0.125 2.53125 0.125 2.84375 0.40625L8.90625 6.5C9.1875 6.78125 9.1875 7.25 8.90625 7.53125Z" fill="white"/></svg></span>
                <a href="#" class="current-page">Terms of Use</a>
            </div>
            <div class="bread-crumb-title"><h2 class="split-collab">Terms of Use</h2></div>
        </div>
    </section>

    <!-- Start Legal Content Area -->
    <section class="legal-area">
        <div class="container">
            <div class="legal-wrapper">

                <span class="legal-updated">🗓️ Last updated: June 21, 2026</span>

                <p class="legal-intro">
                    These Terms of Use ("Terms") govern your access to and use of the website and services
                    provided by HS Digital Services ("HS Digital Services," "we," "us," or "our"). By accessing
                    our website, requesting a quote, or engaging our inbound or outbound BPO services, you agree
                    to be bound by these Terms. If you do not agree, please do not use our website or services.
                </p>

                <!-- Table of contents -->
                <div class="legal-toc">
                    <h2>Contents</h2>
                    <ol>
                        <li><a href="#acceptance">Acceptance of Terms</a></li>
                        <li><a href="#services">Description of Services</a></li>
                        <li><a href="#eligibility">Eligibility & Account Use</a></li>
                        <li><a href="#client-obligations">Client Obligations</a></li>
                        <li><a href="#compliance">Compliance & Call Recording</a></li>
                        <li><a href="#payment">Payment & Billing</a></li>
                        <li><a href="#ip">Intellectual Property</a></li>
                        <li><a href="#confidentiality">Confidentiality</a></li>
                        <li><a href="#liability">Limitation of Liability</a></li>
                        <li><a href="#termination">Termination</a></li>
                        <li><a href="#changes">Changes to These Terms</a></li>
                        <li><a href="#governing-law">Governing Law</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ol>
                </div>

                <hr class="legal-divider">

                <div class="legal-section" id="acceptance">
                    <h2><span class="num">1</span> Acceptance of Terms</h2>
                    <p>
                        By visiting our website, submitting a contact or quote request, or entering into a
                        service agreement with HS Digital Services, you confirm that you have read, understood,
                        and agree to be bound by these Terms, along with our Privacy Policy. These Terms apply to
                        all visitors, prospective clients, and active clients of our call center and BPO services.
                    </p>
                </div>

                <div class="legal-section" id="services">
                    <h2><span class="num">2</span> Description of Services</h2>
                    <p>
                        HS Digital Services provides inbound and outbound call center / business process
                        outsourcing (BPO) services, including but not limited to lead generation, appointment
                        setting, live transfer, cold calling, customer support, medical billing support, and
                        outbound campaigns for verticals such as Medicare, ACA, Final Expense Insurance, Solar,
                        Medical Delivery Programs, and Home Improvement.
                    </p>
                    <p>
                        Specific scope, deliverables, pricing, and performance expectations for any engagement are
                        defined in a separate service agreement or statement of work between HS Digital Services
                        and the client, which takes precedence over these general Terms where there is a conflict.
                    </p>
                </div>

                <div class="legal-section" id="eligibility">
                    <h2><span class="num">3</span> Eligibility & Account Use</h2>
                    <p>
                        Our services are intended for businesses and authorized representatives who are at least
                        18 years of age and legally capable of entering into binding contracts. By submitting a
                        request through our website, you represent that the information you provide is accurate
                        and that you are authorized to act on behalf of the company you represent.
                    </p>
                </div>

                <div class="legal-section" id="client-obligations">
                    <h2><span class="num">4</span> Client Obligations</h2>
                    <p>When engaging HS Digital Services, clients agree to:</p>
                    <ul>
                        <li>Provide accurate scripts, product information, and campaign guidelines</li>
                        <li>Ensure any prospect or customer data supplied to us was lawfully obtained</li>
                        <li>Comply with applicable telemarketing, data protection, and consumer protection laws relevant to their campaign and jurisdiction</li>
                        <li>Promptly review and approve call scripts, disclosures, and compliance materials before campaign launch</li>
                        <li>Pay all agreed fees in accordance with the applicable service agreement</li>
                    </ul>
                </div>

                <div class="legal-section" id="compliance">
                    <h2><span class="num">5</span> Compliance & Call Recording</h2>
                    <p>
                        Calls made or received as part of our services may be recorded and monitored for quality
                        assurance, training, and compliance purposes, in accordance with applicable law. Where
                        required, appropriate consent or disclosure will be obtained or provided.
                    </p>
                    <p>
                        Clients are responsible for ensuring that campaign scripts and target lists comply with
                        relevant regulations (such as TCPA, Do-Not-Call registries, and applicable state or
                        federal telemarketing rules). HS Digital Services will operate within the compliance
                        parameters provided by the client but does not provide legal advice.
                    </p>
                </div>

                <div class="legal-section" id="payment">
                    <h2><span class="num">6</span> Payment & Billing</h2>
                    <p>
                        Pricing models (per-lead, per-appointment, per-transfer, or retainer-based) and payment
                        terms are set out in the relevant service agreement or proposal. Invoices are due within
                        the timeframe specified in that agreement. Late payments may result in suspension of
                        services until the account is brought current.
                    </p>
                </div>

                <div class="legal-section" id="ip">
                    <h2><span class="num">7</span> Intellectual Property</h2>
                    <p>
                        All content on this website — including text, graphics, logos, and design — is the
                        property of HS Digital Services or its licensors and is protected by applicable
                        intellectual property laws. You may not reproduce, distribute, or create derivative works
                        from this content without our prior written consent.
                    </p>
                </div>

                <div class="legal-section" id="confidentiality">
                    <h2><span class="num">8</span> Confidentiality</h2>
                    <p>
                        Any non-public business information, prospect data, scripts, or campaign materials shared
                        between HS Digital Services and a client will be treated as confidential and used solely
                        for the purpose of delivering the agreed services, unless otherwise required by law.
                    </p>
                </div>

                <div class="legal-section" id="liability">
                    <h2><span class="num">9</span> Limitation of Liability</h2>
                    <p>
                        To the fullest extent permitted by law, HS Digital Services shall not be liable for any
                        indirect, incidental, special, or consequential damages arising from the use of our
                        website or services, including but not limited to loss of revenue, data, or business
                        opportunities. Our total liability for any claim related to our services shall not exceed
                        the fees paid by the client for the specific service giving rise to the claim.
                    </p>
                </div>

                <div class="legal-section" id="termination">
                    <h2><span class="num">10</span> Termination</h2>
                    <p>
                        Either party may terminate an active service agreement in accordance with the notice
                        period and terms specified in that agreement. HS Digital Services reserves the right to
                        suspend or terminate services immediately in cases of non-payment, illegal activity, or
                        material breach of these Terms.
                    </p>
                </div>

                <div class="legal-section" id="changes">
                    <h2><span class="num">11</span> Changes to These Terms</h2>
                    <p>
                        We may update these Terms from time to time to reflect changes in our services or
                        applicable law. The "Last updated" date at the top of this page indicates when the Terms
                        were last revised. Continued use of our website or services after changes are posted
                        constitutes acceptance of the updated Terms.
                    </p>
                </div>

                <div class="legal-section" id="governing-law">
                    <h2><span class="num">12</span> Governing Law</h2>
                    <p>
                        These Terms shall be governed by and construed in accordance with the laws of the
                        jurisdiction in which HS Digital Services is registered, without regard to its conflict
                        of law provisions, except where superseded by a specific service agreement.
                    </p>
                </div>

                <div class="legal-contact-card" id="contact">
                    <h3>Questions about these Terms?</h3>
                    <p>If you have any questions, reach out to our team:</p>
                    <p>📍 3517 W. Gray St. Utica, Pennsylvania 57867</p>
                    <p>☎️ +8 (123) 985 789</p>
                    <p>✉️ <a href="mailto:support@hsdigitalservices.com">support@hsdigitalservices.com</a></p>
                </div>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Loader -->
    <div class="loader-wrapper"><div class="loader"></div><div class="loader-section section-left"></div><div class="loader-section section-right"></div></div>

    <!--Essential Js Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/scrolltigger.js"></script>
    <script src="assets/js/split-text.js"></script>
    <script src="assets/js/split-type.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/isotop.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>