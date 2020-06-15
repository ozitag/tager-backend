#!/usr/bin/env bash

cd /var/www/app/

chmod 777 -R storage/logs
chmod 777 -R storage/app/public/uploads

composer i --ignore-platform-reqs

php artisan migrate --force
