<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | HS Digital Services</title>
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

        /* ── Mini data table ── */
        .legal-table-wrap {
            background: rgba(6, 16, 26, 0.75);
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 18px;
            border: 1px solid rgba(204,255,0,0.1);
        }
        .legal-table-wrap table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: collapse;
        }
        .legal-table-wrap th {
            background: rgba(204, 255, 0, 0.08);
            color: var(--legal-accent);
            font-weight: 600;
            padding: 14px 18px;
            font-size: 0.88rem;
            text-align: left;
        }
        .legal-table-wrap td {
            padding: 13px 18px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            color: #eef3ff;
            font-weight: 400;
            font-size: 0.88rem;
            line-height: 1.5;
        }
        .legal-table-wrap tr:last-child td { border-bottom: none; }

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
            .legal-table-wrap { overflow-x: auto; }
            .legal-table-wrap table { min-width: 480px; }
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
                <a href="#" class="current-page">Privacy Policy</a>
            </div>
            <div class="bread-crumb-title"><h2 class="split-collab">Privacy Policy</h2></div>
        </div>
    </section>

    <!-- Start Legal Content Area -->
    <section class="legal-area">
        <div class="container">
            <div class="legal-wrapper">

                <span class="legal-updated">🗓️ Last updated: June 21, 2026</span>

                <p class="legal-intro">
                    HS Digital Services ("we," "us," or "our") respects your privacy and is committed to
                    protecting it through this Privacy Policy. This policy explains what information we collect,
                    how we use it, and the choices you have, whether you're a website visitor, a prospective
                    client requesting a quote, or a homeowner or consumer contacted as part of one of our
                    outbound campaigns.
                </p>

                <!-- Table of contents -->
                <div class="legal-toc">
                    <h2>Contents</h2>
                    <ol>
                        <li><a href="#info-we-collect">Information We Collect</a></li>
                        <li><a href="#how-collected">How We Collect Information</a></li>
                        <li><a href="#how-used">How We Use Your Information</a></li>
                        <li><a href="#call-recording">Call Recording & Monitoring</a></li>
                        <li><a href="#sharing">How We Share Information</a></li>
                        <li><a href="#cookies">Cookies & Tracking Technologies</a></li>
                        <li><a href="#data-retention">Data Retention</a></li>
                        <li><a href="#data-security">Data Security</a></li>
                        <li><a href="#your-rights">Your Rights & Choices</a></li>
                        <li><a href="#childrens-privacy">Children's Privacy</a></li>
                        <li><a href="#third-party-links">Third-Party Links</a></li>
                        <li><a href="#policy-changes">Changes to This Policy</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ol>
                </div>

                <hr class="legal-divider">

                <div class="legal-section" id="info-we-collect">
                    <h2><span class="num">1</span> Information We Collect</h2>
                    <p>Depending on how you interact with us, we may collect the following categories of information:</p>
                    <div class="legal-table-wrap">
                        <table>
                            <thead>
                                <tr><th>Category</th><th>Examples</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Contact details</td><td>Name, company name, email address, phone number, ZIP code</td></tr>
                                <tr><td>Business information</td><td>Industry, service interest, campaign requirements, budget notes</td></tr>
                                <tr><td>Communication records</td><td>Call recordings, call notes, emails, form submissions</td></tr>
                                <tr><td>Technical data</td><td>IP address, browser type, device information, pages visited</td></tr>
                                <tr><td>Campaign-related data</td><td>Information provided by clients about their leads or customers, used solely to deliver contracted services</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="legal-section" id="how-collected">
                    <h2><span class="num">2</span> How We Collect Information</h2>
                    <p>We collect information through:</p>
                    <ul>
                        <li>Forms you submit on our website (Contact Us, Get Quotes)</li>
                        <li>Phone calls, whether you call us or we call you as part of an authorized outbound campaign on behalf of a client</li>
                        <li>Email correspondence</li>
                        <li>Cookies and similar technologies when you browse our website</li>
                        <li>Data provided to us directly by our clients for the purpose of delivering contracted BPO services</li>
                    </ul>
                </div>

                <div class="legal-section" id="how-used">
                    <h2><span class="num">3</span> How We Use Your Information</h2>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Respond to inquiries and provide quotes for our services</li>
                        <li>Deliver inbound and outbound call center services on behalf of our clients</li>
                        <li>Improve our website, services, and agent training</li>
                        <li>Maintain records for quality assurance and compliance purposes</li>
                        <li>Communicate updates, proposals, or follow-ups related to your inquiry or engagement</li>
                        <li>Comply with legal obligations and enforce our Terms of Use</li>
                    </ul>
                    <p>We do not sell personal information to third parties.</p>
                </div>

                <div class="legal-section" id="call-recording">
                    <h2><span class="num">4</span> Call Recording & Monitoring</h2>
                    <p>
                        As part of delivering quality assurance and compliant outbound and inbound services, calls
                        made or received by HS Digital Services may be recorded and monitored. Recordings are used
                        for training, performance review, and compliance verification, and are stored securely
                        with access limited to authorized personnel and, where applicable, the relevant client.
                    </p>
                </div>

                <div class="legal-section" id="sharing">
                    <h2><span class="num">5</span> How We Share Information</h2>
                    <p>We may share information in the following circumstances:</p>
                    <ul>
                        <li><strong>With clients:</strong> when we generate leads, book appointments, or perform live transfers on their behalf, relevant contact and qualification details are shared with that client</li>
                        <li><strong>With service providers:</strong> CRM platforms, dialer technology, and hosting providers who help us operate our business, under appropriate confidentiality obligations</li>
                        <li><strong>For legal reasons:</strong> if required by law, regulation, legal process, or governmental request</li>
                        <li><strong>Business transfers:</strong> in connection with a merger, acquisition, or sale of assets, subject to standard confidentiality protections</li>
                    </ul>
                </div>

                <div class="legal-section" id="cookies">
                    <h2><span class="num">6</span> Cookies & Tracking Technologies</h2>
                    <p>
                        Our website may use cookies and similar technologies to remember preferences, understand
                        site usage, and improve performance. You can control or disable cookies through your
                        browser settings; doing so may affect certain website functionality.
                    </p>
                </div>

                <div class="legal-section" id="data-retention">
                    <h2><span class="num">7</span> Data Retention</h2>
                    <p>
                        We retain personal information only for as long as necessary to fulfill the purposes
                        described in this policy, comply with legal obligations, resolve disputes, and enforce our
                        agreements. Campaign-related data provided by clients is retained according to the terms
                        of the applicable service agreement and deleted or returned upon request once no longer
                        needed.
                    </p>
                </div>

                <div class="legal-section" id="data-security">
                    <h2><span class="num">8</span> Data Security</h2>
                    <p>
                        We implement reasonable administrative, technical, and physical safeguards designed to
                        protect personal information from unauthorized access, disclosure, alteration, or
                        destruction. However, no method of transmission or storage is 100% secure, and we cannot
                        guarantee absolute security.
                    </p>
                </div>

                <div class="legal-section" id="your-rights">
                    <h2><span class="num">9</span> Your Rights & Choices</h2>
                    <p>Depending on your location, you may have the right to:</p>
                    <ul>
                        <li>Request access to the personal information we hold about you</li>
                        <li>Request correction of inaccurate information</li>
                        <li>Request deletion of your personal information, subject to legal or contractual limitations</li>
                        <li>Opt out of further marketing communications or being contacted as part of an outbound campaign</li>
                        <li>Object to or restrict certain processing of your information</li>
                    </ul>
                    <p>
                        To exercise any of these rights, please contact us using the details at the bottom of this
                        page. We will respond within a reasonable timeframe in accordance with applicable law.
                    </p>
                </div>

                <div class="legal-section" id="childrens-privacy">
                    <h2><span class="num">10</span> Children's Privacy</h2>
                    <p>
                        Our website and services are intended for businesses and individuals 18 years of age or
                        older. We do not knowingly collect personal information from children. If we become aware
                        that we have inadvertently collected information from a minor, we will take steps to
                        delete it.
                    </p>
                </div>

                <div class="legal-section" id="third-party-links">
                    <h2><span class="num">11</span> Third-Party Links</h2>
                    <p>
                        Our website may contain links to third-party websites. We are not responsible for the
                        privacy practices or content of those external sites, and we encourage you to review their
                        privacy policies before providing any personal information.
                    </p>
                </div>

                <div class="legal-section" id="policy-changes">
                    <h2><span class="num">12</span> Changes to This Policy</h2>
                    <p>
                        We may update this Privacy Policy periodically to reflect changes in our practices or
                        applicable law. The "Last updated" date at the top of this page reflects the most recent
                        revision. We encourage you to review this page periodically.
                    </p>
                </div>

                <div class="legal-contact-card" id="contact">
                    <h3>Questions about this Privacy Policy?</h3>
                    <p>If you have any questions or wish to exercise your privacy rights, reach out to our team:</p>
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