# Laravel Admin CRUD Application

A complete Laravel application with admin panel and product CRUD operations.

## Features

- User Authentication (Login/Register) using Laravel Breeze
- Admin Panel with Product Management
- Full CRUD Operations for Products:
  - Create, Read, Update, Delete products
  - Product listing with pagination
  - Form validation
- Responsive UI using Tailwind CSS

## Installation

1. Navigate to the project directory:
```bash
cd admin-crud
```

2. Install PHP dependencies (already done):
```bash
composer install
```

3. Install Node.js dependencies and build assets:
```bash
npm install && npm run build
```

4. Set up environment variables:
```bash
cp .env.example .env
php artisan key:generate
```

5. Run migrations:
```bash
php artisan migrate
```

6. Seed sample data (optional):
```bash
php artisan db:seed --class=ProductSeeder
```

7. Start the development server:
```bash
php artisan serve
```

8. Access the application at: http://localhost:8000

## Usage

1. Register a new account or login
2. Navigate to the Dashboard
3. Click on "Products" in the navigation menu
4. Manage your products:
   - View all products
   - Create new products
   - Edit existing products
   - Delete products
   - View product details

## Routes

- `GET /` - Welcome page
- `GET /login` - Login page
- `GET /register` - Registration page
- `GET /dashboard` - Dashboard (authenticated users)
- `GET /admin/products` - Product list (authenticated users)
- `GET /admin/products/create` - Create product form
- `POST /admin/products` - Store new product
- `GET /admin/products/{id}` - View product details
- `GET /admin/products/{id}/edit` - Edit product form
- `PUT/PATCH /admin/products/{id}` - Update product
- `DELETE /admin/products/{id}` - Delete product

## Database Structure

### Products Table
- id (primary key)
- name (string)
- description (text, nullable)
- price (decimal)
- stock (integer)
- timestamps (created_at, updated_at)

## Technologies Used

- Laravel 12
- Laravel Breeze (Authentication)
- Blade Templates
- Tailwind CSS
- Alpine.js
- SQLite Database

## License

This project is open-sourced software licensed under the MIT license.
