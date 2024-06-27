# Laravel Ecommerce Project

This is a Laravel-based ecommerce application where users can view products, add them to the cart, and proceed to checkout using the Stripe payment gateway.

## Features

- View all products
- Add products to cart
- View cart
- Checkout and pay with Stripe
- Success and cancellation pages for payment

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & npm
- Laravel 11.x

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/phi-rakib/laravel-ecommerce-stripe.git
   cd laravel-ecommerce-stripe
   ```
2. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```
3. **Copy the .env file**:
   ```bash
   cp .env.example .env
   ```
4. **Set up your environment variables in the .env file**:
   ```bash
   APP_NAME=Laravel
   APP_ENV=local
   APP_KEY=base64:randomkeyhere
   APP_DEBUG=true
   APP_URL=http://localhost
    
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
    
   STRIPE_KEY=your_stripe_key
   STRIPE_SECRET=your_stripe_secret
   ```
5. ***Run migrations and seed the database***:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
6. ***Serve the application***:
   ```bash
   php artisan serve
   ```
7. ***Access the application in your web browser***:
   ```bash
   http://localhost:8000
   ```
## Usage
- View Products: Navigate to the home page to view all products.
- Add to Cart: Click on the "Add to Cart" button on a product to add it to your cart.
- View Cart: Go to the cart page to view all the items in your cart.
- Checkout: Click the "Checkout" button on the cart page to proceed to the Stripe payment gateway.
- Payment Success: After a successful payment, you will be redirected to the success page.
- Payment Cancelled: If the payment is cancelled, you will be redirected to the cancellation page.

## Project Structure
- app/Http/Controllers: Contains the controllers for handling requests.
- app/Models: Contains the Eloquent models.
- database/migrations: Contains the database migration files.
- database/seeders: Contains the database seeder files.
- resources/views: Contains the Blade templates for the views.
- routes/web.php: Contains the web routes.
### Controllers
- ProductController:
    - index(): Displays all products.
    - show($id): Displays a single product.
- CartController:
    - index(): Displays the cart.
    - add(Request $request): Adds a product to the cart.
- PaymentController:
    - checkout(): Displays the checkout page.
    - createCheckoutSession(Request $request): Creates a Stripe Checkout session.
    - success(): Handles successful payment.
    - cancel(): Handles cancelled payment.

## Contributing
Contributions are welcome! Please submit a pull request or create an issue for any improvements or bug fixes.

## License
This project is licensed under the [MIT License](LICENSE).



