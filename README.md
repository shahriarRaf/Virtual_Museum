# Virtual Museum

Virtual Museum is a Laravel-based web application where users can explore galleries, view heritage site pages, and upload images.  
It also includes an admin panel for image moderation.

## Features

- User registration and login
- Public pages (Home, About, Gallery)
- Authenticated heritage location pages
- Image upload and delete for authenticated users
- Admin authentication and image approval/deletion workflow

## Tech Stack

- PHP 8.1+
- Laravel 10
- MySQL (or another Laravel-supported database)
- Vite for frontend assets

## Getting Started

1. Clone the repository.
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Install frontend dependencies:
   ```bash
   npm install
   ```
4. Create environment file:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Configure database settings in `.env`.
7. Run migrations:
   ```bash
   php artisan migrate
   ```
8. Start the development servers:
   ```bash
   php artisan serve
   npm run dev
   ```

## Useful Commands

```bash
php artisan test
php artisan migrate
npm run build
```
