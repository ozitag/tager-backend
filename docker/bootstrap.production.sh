#!/usr/bin/env bash

cd /var/www/app/

chmod 777 -R storage

php artisan migrate --force