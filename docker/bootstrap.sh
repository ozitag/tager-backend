#!/usr/bin/env bash

#chown application:application -R ./storage
#chown application:application -R ./bootstrap
php artisan key:generate
php artisan migrate
