#!/usr/bin/env bash

cd /var/www/app/
composer install

chown application:application -R storage
chown application:application -R bootstrap
php artisan migrate
