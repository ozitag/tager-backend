FROM php:7.4-fpm

# PHP packages
RUN apt-get update && \
    apt-get install -y git zip libzip-dev \

    # for gd
    libfreetype6-dev libjpeg62-turbo-dev libpng-dev libwebp-dev libonig-dev && \

    docker-php-ext-install pdo && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install zip && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install exif && \

    docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg && docker-php-ext-install -j "$(nproc)" gd

ADD ./docker/conf/php.ini /usr/local/etc/php/conf.d/user.php.ini

ADD ./docker/start.sh /usr/local/start.sh
RUN chmod +x /usr/local/start.sh

ENTRYPOINT ["/usr/local/start.sh"]
