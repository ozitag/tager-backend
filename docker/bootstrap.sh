#!/usr/bin/env bash

cd /var/www/app/

chmod 777 -R storage

composer i --ignore-platform-reqs

php artisan migrate --force
