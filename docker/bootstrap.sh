#!/usr/bin/env bash

chown application:application -R /var/www/app/storage
chown application:application -R /var/www/app/bootstrap
php artisan migrate
