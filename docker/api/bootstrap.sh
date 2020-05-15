#!/usr/bin/env bash

php /var/www/app/artisan key:generate
php /var/www/app/artisan migrate --force

