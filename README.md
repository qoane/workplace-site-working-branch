# Workplace Solutions CMS

This project turns the Workplace Solutions marketing site into a lightweight, database-driven content platform with a PHP/MySQL backend and an admin editor.

## Features

- Dynamic pages stored in MySQL with support for hero sections, downloadable resources, and blog highlights.
- Navigation, dropdowns, and footer links managed from the database.
- Secure admin dashboard with TinyMCE-powered editor to create, update, or remove pages.
- Role-ready user table seeded with a default administrator account.
- Installer script that provisions required tables and populates the site with the design-content that previously lived in static HTML files.

## Requirements

- PHP 8.0+
- MySQL 5.7+ or MariaDB equivalent
- Web server configured to serve PHP (Apache, Nginx + PHP-FPM, etc.)

## Installation

1. Copy `config.sample.php` to `config.php` (if it does not already exist) and update the database credentials.

   ```php
   return [
       'db' => [
           'host' => 'localhost',
           'port' => 3306,
           'name' => 'workplace_solutions',
           'user' => 'workplace_user',
           'pass' => 'secret',
       ],
       'app' => [
           'base_url' => '', // optional base path, e.g. '/workplace'
       ],
   ];
   ```

2. Deploy the code to your server and ensure the `storage/` directory is writable by PHP.
3. Visit `/install.php` in your browser. The installer will create the tables, seed the content, and set up the default administrator (`admin` / `admin123`).
4. Delete or restrict access to `install.php` once the process completes.
5. Log in to the admin panel at `/admin/login.php` to start editing content.

## Admin Usage Tips

- Use the **Pages** screen to edit navigation labels, footer placement, or mark a page as the home page.
- The **Menu Link Classes** field lets you attach custom classes (e.g. `btn btn-primary`) to navigation links.
- Toggle the *Published* checkbox to hide a page without deleting it.
- When designating a page as the home page, the system automatically updates all other pages so only one page is marked as the homepage at a time.

## Security Notes

- Change the default admin password immediately after installation.
- Protect `install.php` (remove or rename it) once setup is complete.
- Consider moving `config.php` outside the web root or restricting its permissions in production environments.

## Development

- Static assets remain under `css/`, `js/`, and `images/` and can be customised without touching the admin area.
- The installer seeds initial content from the definitions in `install/seeds/pages.php`; update that file if you want to change the default copy.

