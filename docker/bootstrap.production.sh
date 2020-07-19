#!/usr/bin/env bash

cd /var/www/app/

chmod 777 -R storage

php artisan config:cache

php artisan migrate --force
php artisan tager:seo-flush
php artisan tager:mail-flush
php artisan tager:settings-flush
php artisan tager:menus-flush
php artisan tager:banners-flush

php artisan optimize