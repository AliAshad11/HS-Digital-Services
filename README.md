# Dynamic — Digital Marketing HTML Template

A modern, responsive HTML template for digital marketing agencies, SEO firms, and creative studios. Built with HTML, CSS, JavaScript, and PHP for dynamic form handling.

---

## About

**Dynamic** is a clean, conversion-focused template that gives marketing agencies everything needed for a professional web presence — service pages, portfolio, blog, team, pricing, and a working contact form.

Suitable for:

- Digital marketing agencies
- SEO & SEM companies
- Social media marketing firms
- Advertising and branding studios
- Freelance marketers and consultants

---

## Features

### Front-End

- Fully responsive (desktop, tablet, mobile)
- Modern UI with smooth animations
- Multiple home page variations
- Service, portfolio, blog, team & pricing pages
- SEO-friendly semantic HTML5
- Cross-browser compatible
- Easy to customise

### Back-End (PHP)

- Working contact form with server-side validation
- Newsletter subscription handler
- Dynamic blog system
- Reusable header, footer and sidebar includes
- Email notifications on form submission
- Central config file for site settings

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

## Project Structure

```
dynamic/
├── index.php                  # Home page
├── about.php                  # About page
├── services.php               # Services listing
├── service-single.php         # Single service detail
├── portfolio.php              # Portfolio / case studies
├── blog.php                   # Blog listing
├── blog-single.php            # Blog article detail
├── team.php                   # Team members
├── pricing.php                # Pricing plans
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

## Getting Started

### Requirements

- PHP 7.4 or higher
- A web server (Apache, Nginx, or PHP's built-in server)
- MySQL *(only if using the database features)*
- A mail service or SMTP credentials for form submissions

### Installation

1. **Clone or download the template**

   ```bash
   git clone https://github.com/your-username/dynamic.git
   cd dynamic
   ```

2. **Configure the site**

   Open `includes/config.php` and update:

   ```php
   define('SITE_NAME', 'Dynamic');
   define('SITE_URL',  'https://yourdomain.com');
   define('ADMIN_EMAIL', 'you@yourdomain.com');
   ```

3. **Set up the database** *(optional)*

   Import the provided SQL file and update `includes/db.php`:

   ```php
   $host = 'localhost';
   $db   = 'dynamic_db';
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



## Credits

- Bootstrap
- Font Awesome
- Google Fonts
- jQuery

---
