FROM php:7.4-fpm

# packages
RUN docker-php-ext-install pdo && \
  docker-php-ext-install pdo_mysql


ADD ./docker/start.sh /usr/local/start.sh
RUN chmod +x /usr/local/start.sh
ENTRYPOINT ["/usr/local/start.sh"]
