# Installation

### Clone the repository
git clone https://github.com/siwakasen/PW2023_B_5_Laravel

### Navigate into the project directory
cd repository

### Install Composer dependencies
composer install

### Set up environment variables
cp .env.example .env
php artisan key:generate

### Run migrations
php artisan migrate

### Serve the application
php artisan serve
