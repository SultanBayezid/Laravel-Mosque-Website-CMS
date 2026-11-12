<p align="center"><img src="public/logo/logo.png" width="420" alt="Mosque Website CMS"></p>

<h3 align="center">A mosque &amp; Islamic centre website CMS built with Laravel</h3>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-7.3%20%7C%208.0-777BB4?style=flat-square&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-8-FF2D20?style=flat-square&logo=laravel" alt="Laravel 8">
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" alt="MIT License">
</p>

---

## Overview

**Laravel Mosque Website CMS** is a complete website and content management system for mosques and Islamic centres. It provides a public website with prayer and jamaat times, announcements, news, services, donation information and contact details, plus a full admin panel for managing all of the content without touching code.

The project is built with **Laravel 8** and uses the Gentelella admin theme for the back office. The public site frontend assets were carried over from the centre's original WordPress build, so the design carries a mature, production-tested look.

## Key Features

### Public Website
- **Home page** with image slider, today's prayer times, jamaat times, latest announcements and news
- **Prayer & jamaat times** display with easy admin updates
- **Announcements** with publish dates
- **News** module with listing and detail pages plus cover images
- **Services** page describing community services
- **Donations page** with PayPal button and bank transfer details
- **Contact page** with location map and contact form
- Fully responsive Bootstrap-based layout

### Admin Panel (`/admin`)
- Full CRUD for **news**, **prayer times**, **jamaat times**, **announcements** and **sliders**
- Image uploads for news and sliders
- User profile management with photo upload
- Authentication powered by Laravel UI (login / registration)

## Tech Stack

| Layer | Technology |
| --- | --- |
| Backend | PHP 7.3 / 8.0, Laravel 8, Laravel UI, Laravel Sanctum |
| Database | MySQL / MariaDB |
| Frontend | Blade, Bootstrap, Laravel Mix, jQuery |
| Admin theme | Gentelella (Bootstrap-based admin template) |

## Requirements

- PHP >= 7.3 with `pdo_mysql`, `openssl`, `mbstring`, `tokenizer`, `xml`, `ctype`, `json`, `fileinfo` extensions
- Composer
- MySQL 5.7+ / MariaDB 10.2+
- Node.js and npm (only needed to rebuild assets)

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/SultanBayezid/Laravel-Mosque-Website-CMS.git
cd Laravel-Mosque-Website-CMS

# 2. Install PHP dependencies
composer install

# 3. Configure the environment
cp .env.example .env
php artisan key:generate

# 4. Create a database and set credentials in .env
#    DB_DATABASE=mosque_cms
#    DB_USERNAME=your_user
#    DB_PASSWORD=your_password

# 5. Run migrations
php artisan migrate

# 6. (Optional) Rebuild frontend assets
npm install
npm run dev

# 7. Start the development server
php artisan serve
```

Visit `http://127.0.0.1:8000` for the public website. Register the first user at `/register`, then log in - the admin panel is available at `/admin`.

## Configuration After Install

- **Donations page** - replace the PayPal `hosted_button_id` placeholder and the sample bank account details in `resources/views/frontend/donate/index.blade.php` with your own.
- **Organisation name & logo** - set `APP_NAME` in `.env`, and replace `public/logo/logo.png` with your organisation's logo.
- **Address & map** - update the address block and Google Maps embed on the contact page.
- **Prayer times** - add times for each prayer in the admin panel; they appear on the home page automatically.

## Directory Structure (highlights)

```
app/
 ├── Http/Controllers/    # Frontend, News, PrayerTime, JamatTime, Announcement, Slider
 └── Models/              # Eloquent models
database/migrations/      # Schema: news, prayer_times, jamat_times, announcements, sliders
resources/views/
 ├── frontend/            # Public pages (home, services, news, donate, contact)
 ├── layouts/             # Header, footer, backend layouts
 └── auth/                # Login / register views
public/
 ├── backend/             # Admin panel assets (Gentelella theme)
 ├── logo/                # Site logo
 └── wp-content/          # Theme assets carried over from the original WordPress build
routes/web.php            # Public routes + /admin CRUD group
```

## Contributing

Contributions are welcome. Please read [CONTRIBUTING.md](CONTRIBUTING.md).

## Security

If you discover a security vulnerability, please email **sultanbayezidai@gmail.com**.

## License

This project is open-sourced software licensed under the [MIT License](LICENSE).

## Author

**Sultan Bayezid** - Senior Full Stack Software Engineer, Bangladesh

- GitHub: [https://github.com/SultanBayezid](https://github.com/SultanBayezid)
- LinkedIn: [https://www.linkedin.com/in/sultanbayezid/](https://www.linkedin.com/in/sultanbayezid/)
- Website: [https://lastlineweb.com](https://lastlineweb.com)
- Email: sultanbayezidai@gmail.com
