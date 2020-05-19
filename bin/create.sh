#!/bin/env sh
APP_NAME=currency_converter
laravel new ${APP_NAME}
cd ${APP_NAME}
composer install
php artisan key:generate
composer require ashallendesign/laravel-exchange-rates
# php artisan make:controller CurrencyConverter