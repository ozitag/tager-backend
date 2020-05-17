#!/usr/bin/env bash

chown application:application -R /var/www/app/storage
chown application:application -R /var/www/app/bootstrap

composer i --ignore-platform-reqs
php artisan migrate
