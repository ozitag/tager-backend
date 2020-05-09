FROM php:7.4-fpm

# packages
RUN apt-get update \
  && apt-get install -y \
  git zip libzip-dev \
  # for gd
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev && \
  docker-php-ext-install pdo && \
  docker-php-ext-install pdo_mysql && \
  docker-php-ext-install zip

ADD ./docker/conf/php.ini /usr/local/etc/php/conf.d/user.php.ini

# GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j "$(nproc)" gd

ADD ./docker/start.sh /usr/local/start.sh
RUN chmod +x /usr/local/start.sh
ENTRYPOINT ["/usr/local/start.sh"]
