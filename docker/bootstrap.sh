#!/usr/bin/env bash

cd /var/www/app || exit

rm -rf bootstrap/cache/*
php artisan optimize:clear

php artisan vendor:publish --tag=passport-migrations || false
php artisan migrate --force

php artisan tager:mail-flush
php artisan storage:link --force

if [ ! -f "/var/www/app/storage/oauth-private.key" ]; then
  php artisan passport:keys --force
fi
