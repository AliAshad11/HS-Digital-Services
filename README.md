# HS Digital Services — BPO & Digital Services Website

Official website for **HS Digital Services**, a premier BPO provider offering inbound call center support, outbound campaigns, live chat, omnichannel CX, medical billing, lead generation, and insurance program services. Built with HTML, CSS, JavaScript, and PHP for dynamic form handling.

---

## About

**HS Digital Services** is the online home of a BPO company delivering expert inbound call center solutions, outbound campaigns, live chat support, and omnichannel customer experience. Since 2018, the company has helped businesses across healthcare, insurance, solar, and telecom sectors achieve operational excellence and revenue growth.

The website serves:

- Businesses looking to outsource customer support and call center operations
- Healthcare and insurance companies needing medical billing and claims support
- Solar and telecom companies seeking lead generation and appointment setting
- Brands wanting 24/7 multilingual customer support with guaranteed SLAs

---

## What the Website Does

### For Visitors

- Browse all BPO services and detailed service pages
- Learn about inbound, outbound, live chat and omnichannel solutions
- Explore industry-specific programs (Final Expense, Medicare, ACA)
- View client testimonials and success stories
- Read about AI-powered routing and human agent support
- Send an enquiry through the contact form

### Behind the Scenes (PHP)

- Contact form validates input and sends email notifications
- Newsletter subscription stores subscriber emails
- Service and program pages loaded dynamically
- Shared header, footer and sidebar are reused across pages
- Central config file controls site settings and email recipients

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | HTML5 |
| Styling | CSS3, Bootstrap |
| Interactivity | JavaScript, jQuery |
| Backend | PHP |
| Database | MySQL *(optional)* |
| Forms | PHP mail / SMTP |
| Icons | Font Awesome |
| Fonts | Google Fonts |

---

## Site Pages

```
hs-digital-services/
├── index.php                  # Home page
├── about.php                  # About the company
├── services.php               # Services listing
├── service-single.php         # Single service detail
├── programs.php               # Industry programs (Insurance, Solar, Medical)
├── testimonials.php           # Client feedback
├── blog.php                   # Blog listing
├── blog-single.php            # Blog article detail
├── team.php                   # Team members
├── contact.php                # Contact page
├── includes/
│   ├── config.php             # Site configuration
│   ├── db.php                 # Database connection
│   ├── header.php             # Site header
│   ├── footer.php             # Site footer
│   └── functions.php          # Helper functions
├── actions/
│   ├── contact-submit.php     # Contact form handler
│   └── newsletter-submit.php  # Newsletter handler
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── fonts/
└── README.md
```

---

## Services Covered

- **Inbound Call Center** — 24/7 customer support, help desk, order processing
- **Outbound Campaigns** — telemarketing, appointment setting, customer outreach
- **Live Chat & Omnichannel** — voice, email, chat, social media, SMS
- **Medical Billing** — claims processing, revenue cycle management, HIPAA-compliant
- **Customer Support** — multilingual desk, ticket management, retention programs
- **Lead Generation** — AI-powered prospecting, B2B qualification, nurturing
- **Insurance Programs** — Final Expense, Medicare & ACA support
- **Solar & Medical Delivery** — appointment setting, scheduling, logistics support

---

## Getting Started

### Requirements

- PHP 7.4 or higher
- A web server (Apache, Nginx, or PHP's built-in server)
- MySQL *(only if using the database features)*
- A mail service or SMTP credentials for form submissions

### Installation

1. **Clone or download the site**

   ```bash
   git clone https://github.com/your-username/hs-digital-services.git
   cd hs-digital-services
   ```

2. **Configure the site**

   Open `includes/config.php` and update:

   ```php
   define('SITE_NAME', 'HS Digital Services');
   define('SITE_URL',  'https://hsdigitalservices.com');
   define('ADMIN_EMAIL', 'you@hsdigitalservices.com');
   ```

3. **Set up the database** *(optional)*

   Import the provided SQL file and update `includes/db.php`:

   ```php
   $host = 'localhost';
   $db   = 'hs_digital_db';
   $user = 'root';
   $pass = '';
   ```

4. **Run locally**

   ```bash
   php -S localhost:8000
   ```

   Then open `http://localhost:8000` in your browser.

---

## How the PHP Works

1. User submits the contact form on `contact.php`
2. Data POSTs to `actions/contact-submit.php`
3. Input is sanitised and validated server-side
4. Email is sent via PHP `mail()` or SMTP
5. User is redirected with a success or error message

Shared components are pulled in with includes:

```php
<?php include 'includes/header.php'; ?>
<!-- page content -->
<?php include 'includes/footer.php'; ?>
```

Example handler:

```php
// actions/contact-submit.php (simplified)
$name    = htmlspecialchars(trim($_POST['name']));
$email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message']));

if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
    header('Location: ../contact.php?status=error');
    exit;
}

$to      = ADMIN_EMAIL;
$subject = "New enquiry from $name";
$body    = "From: $email\n\n$message";
$headers = "From: no-reply@" . $_SERVER['HTTP_HOST'];

mail($to, $subject, $body, $headers);
header('Location: ../contact.php?status=success');
```

---

## Folder Breakdown

- `includes/` — shared config, header, footer and helper functions
- `actions/` — PHP form handlers (contact, newsletter)
- `assets/` — CSS, JS, images and fonts
- `*.php` — individual page templates

---

## Customisation

| What | Where |
|------|-------|
| Colours & fonts | `assets/css/style.css` |
| Site name, email, URL | `includes/config.php` |
| Navigation menu | `includes/header.php` |
| Footer links & socials | `includes/footer.php` |
| Home page sections | `index.php` |
| Form recipients | `includes/config.php` |

---

## Security Notes

- All user input is sanitised with `htmlspecialchars()` and `filter_var()`
- Prepared statements are used for all database queries
- Form handlers validate on the server, not just the client
- Keep `config.php` out of version control if it holds credentials
- HIPAA-compliant handling for medical billing and patient data

---

## Browser Support

| Browser | Version |
|---------|---------|
| Chrome | Latest |
| Firefox | Latest |
| Safari | Latest |
| Edge | Latest |
| Opera | Latest |

---

## License

Released under the [MIT License](LICENSE). Free for personal and commercial use.

---


---

## Credits

- Bootstrap
- Font Awesome
- Google Fonts
- jQuery

---

**Note:** Replace placeholder names and links with your own before publishing.
