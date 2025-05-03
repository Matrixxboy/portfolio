#!/usr/bin/env bash

# Install PHP dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Install JS/CSS dependencies and build
npm install
npm run build

# Set Laravel permissions
php artisan config:cache
php artisan route:cache
php artisan view:cache
