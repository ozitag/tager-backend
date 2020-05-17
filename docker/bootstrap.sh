#!/usr/bin/env bash

cd /var/www/app
php artisan key:generate
php artisan passport:install
php artisan migrate --force