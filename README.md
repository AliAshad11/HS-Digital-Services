Dynamic — Digital Marketing HTML Template
A modern, responsive HTML template for digital marketing agencies, SEO firms, and creative studios. Built with HTML, CSS, JavaScript, and PHP for dynamic form handling.

About
Dynamic is a clean, conversion-focused template that gives marketing agencies everything needed for a professional web presence — service pages, portfolio, blog, team, pricing, and a working contact form.

Features
Fully responsive (desktop, tablet, mobile)

Modern UI with smooth animations

Service, portfolio, blog, team & pricing pages

Working contact form with PHP backend

Newsletter subscription handler

SEO-friendly semantic HTML5

Cross-browser compatible

Easy to customise

Tech Stack
Layer	Technology
Markup	HTML5
Styling	CSS3, Bootstrap
Interactivity	JavaScript, jQuery
Backend	PHP
Forms	PHP mail / SMTP
Project Structure
text
dynamic/
├── index.php
├── about.php
├── services.php
├── portfolio.php
├── blog.php
├── contact.php
├── includes/
│   ├── config.php
│   ├── header.php
│   ├── footer.php
│   └── functions.php
├── actions/
│   └── contact-submit.php
└── assets/
    ├── css/
    ├── js/
    └── images/
Getting Started
Requirements: PHP 7.4+, a web server, and mail/SMTP credentials.

bash
git clone https://github.com/your-username/dynamic.git
cd dynamic
php -S localhost:8000
Then open http://localhost:8000.

How the PHP Works
User submits the contact form on contact.php

Data POSTs to actions/contact-submit.php

Input is sanitised and validated server-side

Email is sent via PHP mail() or SMTP

User is redirected with a success or error message

Shared components are pulled in with includes:

php
<?php include 'includes/header.php'; ?>
<!-- page content -->
<?php include 'includes/footer.php'; ?>
Customisation
What	Where
Colours & fonts	assets/css/style.css
Site name, email, URL	includes/config.php
Navigation menu	includes/header.php
Footer links	includes/footer.php
License
Released under the MIT License. Free for personal and commercial use.
