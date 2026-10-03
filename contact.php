<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HS Digital Services - Contact Us | Inbound & Outbound BPO Solutions</title>
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
        /* Contact Form Perfect Alignment - Premium Card Style (matched to Quotes page) */
        .contact-area-home-3 .form-wrapper {
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
            background: rgba(3, 19, 32, 0.65);
            border: 1px solid rgba(204, 255, 0, 0.15);
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.35);
            backdrop-filter: blur(8px);
            box-sizing: border-box;
        }
        .contact-area-home-3 .form-wrapper form {
            margin-top: 40px;
            width: 100%;
        }

        /* ── Row 1: Name + Company side by side ── */
        .contact-area-home-3 .form-wrapper form .input-item {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            width: 100%;
        }
        .contact-area-home-3 .form-wrapper form .input-item input {
            flex: 1 1 0;          /* equal width, no overflow */
            min-width: 0;         /* prevents flex children from overflowing */
            padding: 14px 16px;
            background: rgba(0,0,0,0.25);
            border-radius: 8px;
            border: 1px solid rgba(204, 255, 0, 0.2);
            font-size: 15px;
            color: #fff;
            font-family: "Jost", sans-serif;
            transition: all 0.35s ease;
            box-sizing: border-box;
            letter-spacing: 0.3px;
        }
        .contact-area-home-3 .form-wrapper form .input-item input:hover {
            border-color: rgba(204, 255, 0, 0.35);
        }
        .contact-area-home-3 .form-wrapper form .input-item input:focus {
            outline: none;
            border-color: #CCFF00;
            box-shadow: 0 0 10px rgba(204,255,0,0.2);
        }
        .contact-area-home-3 .form-wrapper form .input-item input::placeholder {
            color: rgba(234, 242, 255, 0.5);
            font-weight: 400;
        }

        /* ── Service Type Dropdown ── */
        .service-field {
            width: 100%;
            margin-bottom: 25px;
            box-sizing: border-box;
        }
        .service-field label,
        .sub-service-field label {
            display: block;
            margin-bottom: 10px;
            color: #CCDEFF;
            font-size: 16px;
            font-weight: 600;
            font-family: "Jost", sans-serif;
            letter-spacing: 0.5px;
        }
        .service-field label .required-star,
        .sub-service-field > label .required-star {
            display: inline !important;
            width: auto !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        .service-field select {
            width: 100%;
            padding: 14px;
            background-color: #031320;
            border-radius: 8px;
            border: 1px solid rgba(204, 255, 0, 0.2);
            font-size: 15px;
            color: #EAF2FF;
            font-family: "Jost", sans-serif;
            transition: all 0.35s ease;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23CCFF00' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polyline points='6 9 12 15 18 9'></polyline></svg>");
            background-repeat: no-repeat;
            background-position: right 18px center;
            padding-right: 45px;
            box-sizing: border-box;
        }
        .service-field select:hover {
            border-color: rgba(204, 255, 0, 0.35);
        }
        .service-field select:focus {
            outline: none;
            background-color: #031320;
            border-color: #CCFF00;
            box-shadow: 0 0 10px rgba(204,255,0,0.2);
            color: #EAF2FF;
        }
        .service-field select option {
            background-color: #031320;
            color: #EAF2FF;
            padding: 12px;
        }

        /* ── Dynamic Sub-Service Checkbox Grid ── */
        .sub-service-field {
            width: 100%;
            margin-bottom: 25px;
            display: none;
            box-sizing: border-box;
            padding: 20px;
            border-radius: 10px;
            background: rgba(0,0,0,0.15);
            border: 1px solid rgba(204,255,0,0.1);
            animation: slideDown 0.4s ease forwards;
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .sub-service-field.active {
            display: block;
        }
        .sub-service-field label {
            display: block;
            margin-bottom: 13px;
            color: #CCDEFF;
            font-size: 16px;
            font-weight: 600;
            font-family: "Jost", sans-serif;
            letter-spacing: 0.5px;
        }
        .sub-service-field .checkbox-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            width: 100%;
        }
        .sub-service-field .checkbox-item {
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sub-service-field .checkbox-item input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border: 1.5px solid rgba(204, 255, 0, 0.3);
            border-radius: 4px;
            background-color: #031320;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-right: 0;
            flex-shrink: 0;
        }
        .sub-service-field .checkbox-item input[type="checkbox"]:hover {
            border-color: rgba(204, 255, 0, 0.6);
        }
        .sub-service-field .checkbox-item input[type="checkbox"]:checked {
            background-color: #CCFF00;
            border-color: #CCFF00;
            box-shadow: 0 0 8px rgba(204, 255, 0, 0.3);
        }
        .sub-service-field .checkbox-item input[type="checkbox"]:checked::after {
            content: "✓";
            position: absolute;
            left: 5px;
            color: #031320;
            font-weight: bold;
            font-size: 14px;
        }
        .sub-service-field .checkbox-item label {
            display: inline;
            margin: 0;
            font-size: 14px;
            color: #EAF2FF;
            font-weight: 400;
            cursor: pointer;
            transition: color 0.2s ease;
        }
        .sub-service-field .checkbox-item input[type="checkbox"]:checked ~ label {
            color: #CCFF00;
            font-weight: 500;
        }
        .sub-service-field .checkbox-item:hover label {
            color: #CCFF00;
        }

        /* ── Textarea ── */
        .contact-area-home-3 .form-wrapper form textarea {
            width: 100%;
            padding: 14px;
            background: rgba(0,0,0,0.25);
            border-radius: 10px;
            border: 1px solid rgba(204, 255, 0, 0.2);
            font-size: 15px;
            color: #fff;
            font-family: "Jost", sans-serif;
            min-height: 140px;
            height: 140px;
            resize: vertical;
            transition: all 0.35s ease;
            margin-bottom: 25px;
            box-sizing: border-box;
            display: block;
            letter-spacing: 0.3px;
            line-height: 1.5;
        }
        .contact-area-home-3 .form-wrapper form textarea:hover {
            border-color: rgba(204, 255, 0, 0.35);
        }
        .contact-area-home-3 .form-wrapper form textarea:focus {
            outline: none;
            border-color: #CCFF00;
            box-shadow: 0 0 10px rgba(204,255,0,0.2);
        }
        .contact-area-home-3 .form-wrapper form textarea::placeholder {
            color: rgba(234, 242, 255, 0.5);
            font-weight: 400;
        }

        /* ── Submit Button — matched to Quotes page gradient style ── */
        .contact-area-home-3 .form-wrapper form button.btn-3 {
            width: 100%;
            margin-top: 10px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            display: inline-block;
            background: linear-gradient(135deg, #CCFF00, #7CFF00);
            color: #000000;
            padding: 16px;
            border-radius: 10px;
            font-size: 16px;
            font-family: "Jost", sans-serif;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }
        .contact-area-home-3 .form-wrapper form button.btn-3::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.25), transparent);
            transition: left 0.5s ease;
        }
        .contact-area-home-3 .form-wrapper form button.btn-3:hover::before {
            left: 100%;
        }
        .contact-area-home-3 .form-wrapper form button.btn-3:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(204, 255, 0, 0.25);
        }
        .contact-area-home-3 .form-wrapper form button.btn-3:active {
            transform: translateY(0);
        }

        /* ── Form title (matched to Quotes page) ── */
        .contact-area-home-3 .form-wrapper .title {
            text-align: center;
            margin-bottom: 25px;
        }
        .contact-area-home-3 .form-wrapper .title .sub-title p {
            color: #CCFF00;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .contact-area-home-3 .form-wrapper .title .main-title h3 {
            color: #CCDEFF;
            font-size: 36px;
            font-weight: 700;
        }

        /* ── Contact Info Wrapper ── */
        .contact-area-home-3 .contact-info-wrapper {
            background-color: #031320;
            padding: 45px 40px;
            border-radius: 4px;
            width: 100%;
        }
        .contact-area-home-3 .contact-info-wrapper .contact-info-inner {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 25px;
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .contact-area-home-3 .contact-info-wrapper .contact-info-inner:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        .contact-area-home-3 .contact-info-wrapper .contact-info-text h5 {
            color: #CCFF00;
            margin-bottom: 8px;
            font-size: 20px;
        }
        .contact-area-home-3 .contact-info-wrapper .contact-info-text p {
            color: #CCDEFF;
            margin-bottom: 5px;
            font-size: 16px;
        }

        /* ── Responsive ── */
        @media (max-width: 991px) {
            .contact-area-home-3 .form-wrapper form .input-item {
                flex-direction: column;
                gap: 20px;
            }
            .contact-area-home-3 .form-wrapper form .input-item input {
                width: 100%;
                flex: none;
            }
            .contact-area-home-3 .contact-info-wrapper {
                margin-bottom: 40px;
            }
            .sub-service-field .checkbox-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            .contact-area-home-3 .form-wrapper {
                padding: 25px;
            }
        }
        @media (max-width: 576px) {
            .contact-area-home-3 .contact-info-wrapper .contact-info-inner {
                flex-direction: column;
                text-align: center;
            }
            .contact-area-home-3 .contact-info-wrapper {
                padding: 30px 20px;
            }
            .contact-area-home-3 .form-wrapper {
                width: 100%;
                margin: 0 auto;
                padding: 22px 16px;
            }
            .contact-area-home-3 .form-wrapper .title {
                margin-bottom: 16px;
            }
            .contact-area-home-3 .form-wrapper .title .main-title h3 {
                font-size: 26px;
                line-height: 1.25;
            }
            .contact-area-home-3 .form-wrapper .title .sub-title p {
                font-size: 13px;
                letter-spacing: 1.5px;
            }
            .contact-area-home-3 .form-wrapper form {
                margin-top: 20px;
            }
            .contact-area-home-3 .form-wrapper form .input-item {
                margin-bottom: 16px;
                gap: 14px;
            }
            .contact-area-home-3 .form-wrapper form .input-item input {
                padding: 12px 14px;
                font-size: 14px;
            }
            .service-field {
                margin-bottom: 16px;
            }
            .service-field label {
                margin-bottom: 8px;
                font-size: 14px;
            }
            .service-field select {
                padding: 12px;
                padding-right: 38px;
                font-size: 14px;
            }
            .sub-service-field {
                margin-bottom: 16px;
                padding: 14px;
            }
            .sub-service-field .checkbox-grid {
                gap: 10px;
            }
            .contact-area-home-3 .form-wrapper form textarea {
                min-height: 100px;
                height: 100px;
                padding: 12px 14px;
                margin-bottom: 16px;
                font-size: 14px;
            }
            .contact-area-home-3 .form-wrapper form button.btn-3 {
                padding: 13px;
                font-size: 14px;
            }
        }
        .contact-area-home-3 .title {
            text-align: left;
        }
        @media (max-width: 991px) {
            .contact-area-home-3 .title {
                text-align: center;
            }
        }

        /* ── Mobile centering fix: prevent horizontal scroll / off-center card ── */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        .contact-area-home-3 {
            overflow-x: hidden;
        }
        .contact-area-home-3 .container {
            width: 100%;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
        }
        .contact-area-home-3 .row {
            margin-left: 0;
            margin-right: 0;
        }
        @media (max-width: 991px) {
            .contact-area-home-3 .col-xl-7,
            .contact-area-home-3 .col-lg-7,
            .contact-area-home-3 .col-xl-5,
            .contact-area-home-3 .col-lg-5 {
                padding-left: 15px;
                padding-right: 15px;
                width: 100%;
                max-width: 100%;
                flex: 0 0 100%;
            }
        }
        @media (max-width: 576px) {
            .contact-area-home-3 .col-xl-7,
            .contact-area-home-3 .col-lg-7,
            .contact-area-home-3 .col-xl-5,
            .contact-area-home-3 .col-lg-5 {
                padding-left: 0;
                padding-right: 0;
            }
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
                <a href="#" class="current-page">Contact Us</a>
            </div>
            <div class="bread-crumb-title"><h2 class="split-collab">Contact Us</h2></div>
        </div>
    </section>

    <!-- Start Contact Area Home 3 -->
    <section class="contact-area-home-3 contact-p">
        <img src="assets/images/shep/bg-blur-shep-1.png" alt="VRE" class="contact-area-bg-shep-1-home-3 blur-1">
        <img src="assets/images/shep/bg-blur-shep-1.png" alt="VRE" class="contact-area-bg-shep-2-home-3 blur-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-info-wrapper">
                        <div class="contact-info-inner">
                            <div class="contact-icon"><span><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1_18714)"><path d="M44.957 44.1067L38.3652 26.7422C38.3105 26.5979 38.2068 26.4775 38.0725 26.4019L31.0513 22.4463L33.1012 19.1961C34.3592 17.1997 35.0243 14.8927 35.0243 12.5244C35.0243 5.6184 29.4059 0 22.4999 0C15.5939 0 9.97554 5.6184 9.97554 12.5244C9.97554 14.8933 10.6409 17.2004 11.8996 19.1962C11.9333 19.2498 13.949 22.4464 13.949 22.4464L6.9275 26.4019C6.79312 26.4775 6.68949 26.5979 6.63474 26.7422L0.042953 44.1067C-0.0555722 44.3661 0.0190468 44.6595 0.229369 44.8405C0.439954 45.0215 0.740979 45.0513 0.982766 44.915L11.5795 38.945L22.1763 44.915C22.3771 45.0281 22.6226 45.0281 22.8235 44.915L33.4202 38.945L44.017 44.915C44.1181 44.972 44.2296 44.9999 44.3405 44.9999C44.4949 44.9999 44.648 44.9459 44.7705 44.8406C44.981 44.6595 45.0555 44.3661 44.957 44.1067ZM23.1592 34.164C23.5716 34.0184 23.9291 33.7381 24.1718 33.3539C24.2053 33.3012 29.8169 24.4037 29.8169 24.4037L32.675 37.8516L23.1592 43.2126V34.164ZM13.0148 18.4929C11.889 16.7078 11.294 14.644 11.294 12.5243C11.294 6.34525 16.321 1.31827 22.5 1.31827C28.6791 1.31827 33.7061 6.34525 33.7061 12.5243C33.7061 14.6435 33.1112 16.7075 31.9861 18.4929C31.8981 18.6323 23.2126 32.4058 23.0611 32.6437C23.0597 32.6458 23.0585 32.6479 23.0572 32.6499C22.9349 32.8433 22.7267 32.9588 22.5 32.9588C22.2732 32.9588 22.064 32.8427 21.9416 32.6502C21.8535 32.5106 13.1507 18.7099 13.0178 18.4977C13.0168 18.4961 13.0158 18.4945 13.0148 18.4929ZM7.7825 27.4332L13.9274 23.9715L12.8569 29.008C12.7813 29.3641 13.0086 29.7141 13.3646 29.7899C13.4108 29.7997 13.457 29.8044 13.5023 29.8044C13.8069 29.8044 14.0806 29.592 14.1464 29.2822L15.1832 24.4041L20.8276 33.3557C21.0712 33.7388 21.429 34.0185 21.8407 34.1639V43.2127L12.325 37.8517L13.5983 31.8612C13.674 31.505 13.4467 31.1551 13.0906 31.0793C12.7342 31.0032 12.3844 31.231 12.3088 31.5869L10.9967 37.76L1.92144 42.873L7.7825 27.4332ZM34.0033 37.7601L31.0728 23.9714L37.2174 27.4332L43.0786 42.873L34.0033 37.7601Z" fill="#CCDEFF"/><path d="M29.752 12.5244C29.752 8.52627 26.4991 5.27344 22.501 5.27344C18.5028 5.27344 15.25 8.52627 15.25 12.5244C15.25 16.5226 18.5028 19.7754 22.501 19.7754C26.4991 19.7754 29.752 16.5226 29.752 12.5244ZM16.5684 12.5244C16.5684 9.25312 19.2297 6.5918 22.501 6.5918C25.7723 6.5918 28.4336 9.25312 28.4336 12.5244C28.4336 15.7957 25.7723 18.457 22.501 18.457C19.2297 18.457 16.5684 15.7957 16.5684 12.5244Z" fill="#CCDEFF"/><path d="M27.1152 12.5244C27.1152 9.98016 25.0452 7.91016 22.501 7.91016C19.9567 7.91016 17.8867 9.98016 17.8867 12.5244C17.8867 15.0687 19.9567 17.1387 22.501 17.1387C25.0452 17.1387 27.1152 15.0687 27.1152 12.5244ZM19.2051 12.5244C19.2051 10.707 20.6836 9.22852 22.501 9.22852C24.3184 9.22852 25.7969 10.707 25.7969 12.5244C25.7969 14.3418 24.3184 15.8203 22.501 15.8203C20.6836 15.8203 19.2051 14.3418 19.2051 12.5244Z" fill="#CCDEFF"/></g><defs><clipPath id="clip0_1_18714"><rect width="45" height="45" fill="white"/></clipPath></defs></svg></span></div>
                            <div class="contact-info-text"><h5>Visit Us</h5><p>3517 W. Gray St. Utica, Pennsylvania 57867</p></div>
                        </div>
                        <div class="contact-info-inner">
                            <div class="contact-icon"><span><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.9717 29.6459C35.5959 29.6459 34.2507 29.4532 32.9717 29.0939C32.2447 28.8796 31.3939 29.0782 30.8572 29.6182L27.0377 33.1054C21.7477 30.3604 17.4397 26.1382 14.7032 20.859L18.2337 17.0446C18.7738 16.5046 18.9703 15.6562 18.7568 14.9283C18.3975 13.6492 18.2049 12.304 18.2049 10.9282C18.2049 9.9422 17.4099 9.14722 16.4239 9.14722H9.19219C8.20621 9.14722 7.41122 9.9422 7.41122 10.9282C7.41122 25.9729 19.7883 38.35 34.8329 38.35C35.8189 38.35 36.6139 37.555 36.6139 36.569V29.3373C36.6139 28.3513 35.9577 27.6459 36.9717 29.6459Z" fill="#CCDEFF"/><path d="M42.2538 23.7457C41.8319 23.7457 41.4797 23.404 41.4101 22.9749C40.7538 18.0712 37.5132 13.9049 32.7938 12.1032C32.3762 11.9466 32.1416 11.4983 32.2982 11.0807C32.4553 10.6632 32.9035 10.4245 33.3211 10.5853C38.5811 12.5932 42.2411 17.2804 43.0016 22.7928C43.0657 23.2181 42.7703 23.6147 42.345 23.7355C42.3164 23.7457 42.285 23.7457 42.2538 23.7457Z" fill="#CCDEFF"/><path d="M37.2781 23.3898C36.8596 23.3906 36.5092 23.0535 36.4376 22.6263C36.1092 20.6641 34.974 18.9141 33.2958 17.728C31.6173 16.542 29.594 15.9921 27.6075 16.1823C27.1734 16.2285 26.7888 15.9232 26.743 15.489C26.6973 15.0548 27.0025 14.6702 27.4367 14.6245C29.7543 14.3965 32.0948 15.0505 34.0562 16.4196C36.0174 17.7887 37.3581 19.8055 37.7519 22.0801C37.8031 22.5097 37.5001 22.9031 37.0706 22.9548C37.0398 22.9593 37.0089 22.9607 36.9782 22.9605L37.2781 23.3898Z" fill="#CCDEFF"/></svg></span></div>
                            <div class="contact-info-text"><h5>Call Us</h5><p>+8 (123) 985 789</p><p>info@hsdigitalservices.com</p></div>
                        </div>
                        <div class="contact-info-inner">
                            <div class="contact-icon"><span><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M38.1167 7.5H6.88333C5.565 7.5 4.5 8.565 4.5 9.88333V35.1167C4.5 36.435 5.565 37.5 6.88333 37.5H38.1167C39.435 37.5 40.5 36.435 40.5 35.1167V9.88333C40.5 8.565 39.435 7.5 38.1167 7.5ZM37.125 35.1167H7.875V11.3417L22.5 22.7583L37.125 11.3417V35.1167ZM22.5 19.5L7.875 8.08333H37.125L22.5 19.5Z" fill="#CCDEFF"/></svg></span></div>
                            <div class="contact-info-text"><h5>Email Us</h5><p>support@hsdigitalservices.com</p><p>sales@hsdigitalservices.com</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <div class="title">
                            <div class="sub-title"><p>GET IN TOUCH</p></div>
                            <div class="main-title"><h3 class="split-collab">Send Your Query <span><img src="assets/images/shep/text-shep-1.png" alt=""></span></h3></div>
                        </div>
                        <form action="#" method="POST" id="contactForm">
                            <!-- Row 1: Name and Company - Side by Side -->
                            <div class="input-item">
                                <input type="text" placeholder="Your Name" name="name" required>
                                <input type="text" placeholder="Company Name" name="company" required>
                            </div>

                            <!-- Service Type Dropdown -->
                            <div class="service-field">
                                <label>Service Type&nbsp;<span class="required-star" style="color:#CCFF00;">*</span></label>
                                <select name="service_type" id="serviceTypeSelect" required>
                                    <option value="">-- Select Service Type --</option>
                                    <option value="Inbound">Inbound Services</option>
                                    <option value="Outbound">Outbound Services</option>
                                </select>
                            </div>

                            <!-- Inbound Sub-Service Checkboxes -->
                            <div class="sub-service-field" id="inboundSubField">
                                <label>Select Inbound Services&nbsp;<span class="required-star" style="color:#CCFF00;">*</span></label>
                                <div class="checkbox-grid">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="inbound_service" id="inbound_1" value="Medical Billing" class="inbound-checkbox">
                                        <label for="inbound_1">Medical Billing</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="inbound_service" id="inbound_2" value="Customer Support" class="inbound-checkbox">
                                        <label for="inbound_2">Customer Support</label>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Outbound Sub-Service Checkboxes -->
                            <div class="sub-service-field" id="outboundSubField">
                                <label>Select Outbound Services&nbsp;<span class="required-star" style="color:#CCFF00;">*</span></label>
                                <div class="checkbox-grid">
                                     <div class="checkbox-item">
            <input type="checkbox" name="outbound_service" id="out3" value="Final Expense Insurance" class="outbound-checkbox">
            <label for="out3">Final Expense Insurance</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" name="outbound_service" id="out4" value="Medicare" class="outbound-checkbox">
            <label for="out4">Medicare </label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" name="outbound_service" id="out5" value="Medical Delivery Program" class="outbound-checkbox">
            <label for="out5">Medical Delivery Program</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" name="outbound_service" id="out6" value="ACA" class="outbound-checkbox">
            <label for="out6">ACA </label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" name="outbound_service" id="out7" value="Solar" class="outbound-checkbox">
            <label for="out7">Solar </label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" name="outbound_service" id="out8" value="Home Improvemant" class="outbound-checkbox">
            <label for="out8">Home Improvemant</label>
        </div>
                                </div>
                            </div>

                            <!-- Detailed Message -->
                            <textarea name="message" rows="6" placeholder="Detailed Message" required></textarea>

                            <!-- Submit Button -->
                            <button type="submit" class="btn-3">Send Query</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Loader -->
    <div class="loader-wrapper"><div class="loader"></div><div class="loader-section section-left"></div><div class="loader-section section-right"></div></div>

    <!-- JavaScript to Show/Hide Sub-Service Checkboxes -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceTypeSelect = document.getElementById('serviceTypeSelect');
            const inboundSubField = document.getElementById('inboundSubField');
            const outboundSubField = document.getElementById('outboundSubField');
            const inboundCheckboxes = document.querySelectorAll('.inbound-checkbox');
            const outboundCheckboxes = document.querySelectorAll('.outbound-checkbox');

            function updateSubServiceFields() {
                const selectedValue = serviceTypeSelect.value;

                // Hide both fields first
                inboundSubField.classList.remove('active');
                outboundSubField.classList.remove('active');

                // Uncheck all checkboxes
                inboundCheckboxes.forEach(checkbox => checkbox.checked = false);
                outboundCheckboxes.forEach(checkbox => checkbox.checked = false);

                // Show the relevant field based on selection
                if (selectedValue === 'Inbound') {
                    inboundSubField.classList.add('active');
                } else if (selectedValue === 'Outbound') {
                    outboundSubField.classList.add('active');
                }
            }

            // Add event listener
            serviceTypeSelect.addEventListener('change', updateSubServiceFields);

            // Initial call
            updateSubServiceFields();

            // Form validation
            const form = document.getElementById('contactForm');
            form.addEventListener('submit', function(e) {
                const serviceType = serviceTypeSelect.value;
                const inboundSelected = Array.from(inboundCheckboxes).some(cb => cb.checked);
                const outboundSelected = Array.from(outboundCheckboxes).some(cb => cb.checked);

                if (!serviceType) {
                    e.preventDefault();
                    alert('Please select a Service Type (Inbound or Outbound)');
                    return false;
                }

                if (serviceType === 'Inbound' && !inboundSelected) {
                    e.preventDefault();
                    alert('Please select at least one Inbound Service');
                    return false;
                }

                if (serviceType === 'Outbound' && !outboundSelected) {
                    e.preventDefault();
                    alert('Please select at least one Outbound Service');
                    return false;
                }

                // Success message
                alert('Thank you! Your message has been sent successfully. We will get back to you within 24 hours.');
            });
        });
    </script>

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