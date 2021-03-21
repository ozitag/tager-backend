#!/usr/bin/env bash

cd /var/www/app/

find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chown 1000:1000 -R storage bootstrap/cache

rm -rf bootstrap/cache/*
php artisan optimize:clear

php artisan migrate --force
php artisan tager:mail-flush
php artisan tager:settings-flush
php artisan tager:menus-flush
php artisan tager:http-cache-clear
