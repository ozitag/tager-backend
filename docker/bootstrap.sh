#!/usr/bin/env bash

cd /var/www/app/

chmod 777 -R storage

composer i --ignore-platform-reqs

php artisan migrate --force
php artisan tager:seo-flush
php artisan tager:mail-flush
php artisan tager:settings-flush
php artisan tager:menus-flush
php artisan tager:banners-flush
