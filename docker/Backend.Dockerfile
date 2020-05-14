# build stage
FROM composer:1.9 as build-stage

WORKDIR /var/www/app

COPY ./backend/composer.json ./
COPY ./backend/composer.lock ./

RUN composer install --ignore-platform-reqs

COPY ./backend .

# production stage
FROM php:7.4-fpm as production-stage

# PHP packages
RUN apt-get update && \
    apt-get install -y git zip libzip-dev \
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libwebp-dev libonig-dev && \
    docker-php-ext-install pdo && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install zip && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install exif && \
    docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg && docker-php-ext-install -j "$(nproc)" gd

ADD ./docker/conf/php.ini /usr/local/etc/php/conf.d/user.php.ini

COPY --from=build-stage /var/www/app /var/www

ADD ./docker/start.sh /usr/local/start.sh
RUN chmod +x /usr/local/start.sh

ENTRYPOINT ["/usr/local/start.sh"]
