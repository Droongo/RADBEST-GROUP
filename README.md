# RAD Best Business Group — website

Laravel 12 + Blade + Vite. This is a migration of the original static HTML site. The design is unchanged; see [MIGRATION.md](MIGRATION.md) for how the original files map to the new ones.

## Requirements
- PHP 8.2+ with `pdo_sqlite`, `mbstring`, `openssl`, `fileinfo`
- Composer 2
- Node 20+ / npm

## Setup
```bash
composer install
cp .env.example .env          # then set APP_URL, mail settings, CONTACT_RECIPIENT
php artisan key:generate
php artisan migrate           # SQLite by default (database/database.sqlite)
npm install
npm run build                 # or `npm run dev` while editing CSS/JS
php artisan serve             # http://127.0.0.1:8000
```

## Tests
```bash
php artisan test
```

## Deployment notes
- The web server's document root must be **`public/`**.
- Run `npm run build` before deploying (`public/build` is git-ignored).
- Run `php artisan migrate --force`, then `php artisan optimize`.
- Contact-form emails use Laravel Mail. The default `MAIL_MAILER=log` only writes them to `storage/logs/laravel.log`. Set real SMTP settings in `.env` for them to be delivered.

## Where things live
| What | Where |
|---|---|
| Routes | `routes/web.php` |
| Layout | `resources/views/layouts/app.blade.php` |
| Shared Blade components | `resources/views/components/` |
| Pages | `resources/views/pages/` |
| Global CSS (base, layouts, shared components) | `resources/css/app.css` and the folders it imports |
| Page-only CSS (scoped by `body.page-*`) | `resources/css/pages/` |
| Global JS / page-only JS | `resources/js/app.js` / `resources/js/pages/` |
| Images | `public/assets/img/` (`t/` thumbnails, `clients/` logos) |
| Client logos, testimonials, contact inbox | `config/site.php` |
| Gallery photo list | `config/gallery.php` |
