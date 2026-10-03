<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HS Digital Services - Get Quotes | Inbound & Outbound BPO Solutions</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" href="assets/images/favicon.png">

    <style>
        /* ✅ FIX: Prevent header overlap */
        body {
            overflow-x: hidden;
            padding-top: 100px; /* IMPORTANT: space for fixed header */
        }

        /* HEADER FIX (if header is fixed in PHP include) */
        header, .header, .main-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }

        /* =========================
           BREADCRUMB CLEAN FIX
        ========================= */
        .bread-crumb-area {
            padding: 20px 0 0 0 !important;
            margin: 0 !important;
            position: relative;
            z-index: 2;
        }

        .bread-crumb-wrapper {
            min-height: unset !important;
            padding-bottom: 0 !important;
        }

        /* =========================
           FORM WRAPPER FIX (MAIN ISSUE)
        ========================= */
        .quote-area-wrapper {
            padding: 60px 0 120px 0;
            margin-top: 0 !important; /* ❌ removed negative margin */
            position: relative;
            z-index: 5;
        }

        .quote-area-wrapper .form-wrapper {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Title */
        .quote-area-wrapper .title {
            text-align: center;
            margin-bottom: 25px;
        }

        .quote-area-wrapper .title .sub-title p {
            color: #CCFF00;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .quote-area-wrapper .title .main-title h2 {
            color: #CCDEFF;
            font-size: 42px;
            font-weight: 700;
        }

        /* Inputs Row */
        .input-item {
            display: flex;
            gap: 25px;
            margin-bottom: 30px;
        }

        .input-item input {
            flex: 1;
            padding: 16px;
            background: #031320;
            border: 1.5px solid rgba(204,255,0,0.2);
            border-radius: 6px;
            color: #CCDEFF;
        }

        /* Service Dropdown */
        .service-field {
            margin-bottom: 30px;
        }

        .service-field label {
            display: block;
            margin-bottom: 10px;
            color: #CCDEFF;
            font-weight: 600;
        }

        .service-field select {
            width: 100%;
            padding: 16px;
            background: #031320;
            border: 1.5px solid rgba(204,255,0,0.2);
            border-radius: 6px;
            color: #CCDEFF;
        }

        /* Sub service */
        .sub-service-field {
            display: none;
            margin-bottom: 30px;
        }

        .sub-service-field.active {
            display: block;
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Textarea */
        textarea {
            width: 100%;
            padding: 16px;
            height: 140px;
            background: #031320;
            border: 1.5px solid rgba(204,255,0,0.2);
            border-radius: 6px;
            color: #CCDEFF;
            margin-bottom: 20px;
        }

        /* Button */
        .btn-3 {
            background: rgba(204,255,0,0.6);
            border: none;
            padding: 16px 45px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-3:hover {
            background: #CCFF00;
            color: #000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body { padding-top: 80px; }

            .input-item {
                flex-direction: column;
            }

            .checkbox-grid {
                grid-template-columns: 1fr;
            }
        }
        /* =========================
   HEADER FIX (DO NOT REMOVE INCLUDE HEADER)
========================= */

/* adjust this if your header height differs */
:root {
    --header-height: 90px;
}

body {
    overflow-x: hidden;
    padding-top: var(--header-height); /* FIX HEADER OVERLAP */
    background: #0b1416;
}

/* ensure included header stays on top */
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99999;
    background: rgba(11, 20, 22, 0.9);
    backdrop-filter: blur(10px);
}

/* =========================
   BREADCRUMB CLEAN FIX
========================= */
.bread-crumb-area {
    padding: 20px 0 10px 0 !important;
    margin: 0 !important;
}

/* =========================
   PAGE LAYOUT FIX
========================= */

.quote-area-wrapper {
    padding: 40px 0 100px 0;
    margin-top: 0 !important;
}

/* 🔥 MAKE FORM LOOK PREMIUM CARD (IMPORTANT) */
.form-wrapper {
    max-width: 760px;
    margin: 0 auto;
    background: rgba(3, 19, 32, 0.65);
    border: 1px solid rgba(204, 255, 0, 0.15);
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.35);
    backdrop-filter: blur(8px);
}

/* TITLE MORE ATTRACTIVE */
.quote-area-wrapper .title {
    text-align: center;
    margin-bottom: 30px;
}

.quote-area-wrapper .title .main-title h2 {
    font-size: 40px;
    font-weight: 700;
    color: #CCDEFF;
}

.quote-area-wrapper .title .sub-title p {
    color: #CCFF00;
    letter-spacing: 2px;
}

/* INPUTS */
.input-item {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
}

.input-item input {
    flex: 1;
    padding: 14px 16px;
    border-radius: 8px;
    border: 1px solid rgba(204,255,0,0.2);
    background: rgba(0,0,0,0.25);
    color: #fff;
}

/* FOCUS EFFECT */
input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: #CCFF00;
    box-shadow: 0 0 10px rgba(204,255,0,0.2);
}

/* SERVICE BOX */
.service-field {
    margin-bottom: 25px;
}

.service-field label {
    display: block;
    margin-bottom: 10px;
}

/* SELECT */
select {
    width: 100%;
    padding: 14px;
    border-radius: 8px;
    background: rgba(0,0,0,0.25);
    color: #fff;
    border: 1px solid rgba(204,255,0,0.2);
}

/* SUB SERVICE */
.sub-service-field {
    display: none;
    margin-bottom: 25px;
    padding: 20px;
    border-radius: 10px;
    background: rgba(0,0,0,0.15);
    border: 1px solid rgba(204,255,0,0.1);
}

.sub-service-field.active {
    display: block;
}

/* CHECKBOX GRID */
.checkbox-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

/* TEXTAREA */
textarea {
    width: 100%;
    padding: 14px;
    border-radius: 10px;
    background: rgba(0,0,0,0.25);
    border: 1px solid rgba(204,255,0,0.2);
    color: #fff;
    min-height: 140px;
}

/* BUTTON */
.btn-3 {
    width: 100%;
    padding: 16px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(135deg, #CCFF00, #7CFF00);
    color: #000;
    font-weight: 700;
    cursor: pointer;
    transition: 0.3s;
}

.btn-3:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(204,255,0,0.25);
}

/* MOBILE */
@media (max-width: 768px) {
    .input-item {
        flex-direction: column;
    }

    .form-wrapper {
        padding: 25px;
        margin: 0 15px;
    }
}
header, .header, .main-header {
    position: fixed !important;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999999 !important;
}
.quote-area-wrapper {
    position: relative;
    z-index: 1;
    overflow: visible !important;
}
.form-wrapper,
.form-wrapper label,
.form-wrapper input,
.form-wrapper select,
.form-wrapper textarea {
    color: #EAF2FF !important;
}

/* placeholder fix */
::placeholder {
    color: rgba(234, 242, 255, 0.5) !important;
}

/* checkbox label fix */
.checkbox-item label {
    color: #EAF2FF !important;
    cursor: pointer;
}

/* dropdown text fix */
select option {
    color: #000;
}
/* FIX SELECT DROPDOWN TEXT VISIBILITY */
select {
    background-color: #031320 !important;
    color: #EAF2FF !important;
}

/* dropdown options (important part) */
select option {
    background-color: #031320 !important;
    color: #EAF2FF !important;
}

/* fix focus state */
select:focus {
    outline: none;
    background-color: #031320 !important;
    color: #EAF2FF !important;
}

    </style>
</head>

<body>

<?php include 'includes/header.php'; ?>

<!-- Breadcrumb -->
<section class="bread-crumb-area">
    <div class="container">
        <div class="bread-crumb-wrapper">
            <a href="index.php">Home</a>
            <span>›</span>
            <a class="current-page">Get Quotes</a>
        </div>

        <div class="bread-crumb-title">
            <h2>Get Quotes</h2>
        </div>
    </div>
</section>

<!-- FORM SECTION -->
<section class="quote-area-wrapper">
    <div class="container">

        <div class="form-wrapper">

            <div class="title">
                <div class="sub-title"><p>GET YOUR QUOTES</p></div>
                <div class="main-title"><h2>Request a Custom Quote</h2></div>
            </div>

            <form id="quoteForm">

                <div class="input-item">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="text" name="company" placeholder="Company Name" required>
                </div>

                <div class="service-field">
                    <label>Service Type *</label>
                    <select id="serviceTypeSelect">
                        <option value="">Select Service</option>
                        <option value="Inbound">Inbound</option>
                        <option value="Outbound">Outbound</option>
                    </select>
                </div>

               <div class="sub-service-field" id="inboundSubField">
    <label>Inbound Services</label>

    <div class="checkbox-grid">

        <div class="checkbox-item">
            <input type="checkbox" id="in1">
            <label for="in1">Medical Billing</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="in2">
            <label for="in2">Customer Support</label>
        </div>

        <!-- <div class="checkbox-item">
            <input type="checkbox" id="in3">
            <label for="in3">Help Desk Services</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="in4">
            <label for="in4">Live Chat Support</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="in5">
            <label for="in5">Email & Ticketing</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="in6">
            <label for="in6">Omnichannel CX</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="in7">
            <label for="in7">Order Processing</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="in8">
            <label for="in8">Technical Support</label>
        </div> -->

    </div>
</div>

                <div class="sub-service-field" id="outboundSubField">
    <label>Outbound Services</label>

    <div class="checkbox-grid">

        <!-- <div class="checkbox-item">
            <input type="checkbox" id="out1">
            <label for="out1">Lead Generation</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out2">
            <label for="out2">Cold Calling</label>
        </div> -->

        <div class="checkbox-item">
            <input type="checkbox" id="out3">
            <label for="out3">Final Expense Insurance</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out4">
            <label for="out4">Medicare </label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out5">
            <label for="out5">Medical Delivery Program</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out6">
            <label for="out6">ACA </label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out7">
            <label for="out7">Solar </label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out8">
            <label for="out8">Home Improvemant</label>
        </div>

        <!-- <div class="checkbox-item">
            <input type="checkbox" id="out9">
            <label for="out9">Appointment Setting</label>
        </div>

        <div class="checkbox-item">
            <input type="checkbox" id="out10">
            <label for="out10">Market Research</label>
        </div> -->

    </div>
</div>

                <textarea placeholder="Tell us your requirements"></textarea>

                <button type="submit" class="btn-3">Get Quote</button>

            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const select = document.getElementById("serviceTypeSelect");
    const inbound = document.getElementById("inboundSubField");
    const outbound = document.getElementById("outboundSubField");

    select.addEventListener("change", function () {
        inbound.classList.remove("active");
        outbound.classList.remove("active");

        if (this.value === "Inbound") inbound.classList.add("active");
        if (this.value === "Outbound") outbound.classList.add("active");
    });
});
</script>

</body>
</html>
