# Task Management Application

## How to run
1. Clone this repository
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. Open `.env` file, fill in your database credentials on `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD`
6. `php artisan serve`
7. Open your browser on `localhost:8000`