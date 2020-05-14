#!/usr/bin/env bash

set -e

role=${CONTAINER_ROLE}

if [ "$role" = "fpm" ]; then
    chmod 777 -R storage
    chmod 777 -R vendor

    php artisan migrate --force

    exec "$@"

elif [ "$role" = "queue" ]; then

    php artisan queue:work --verbose --tries=3 --timeout=30

elif [ "$role" = "scheduler" ]; then

    while [ true ]
    do
      php artisan schedule:run --verbose --no-interaction &
      sleep 60
    done

else
    echo "Could not match the container role \"$role\""
    exit 1
fi
