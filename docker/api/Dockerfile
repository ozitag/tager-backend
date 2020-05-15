# Reference: https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-nginx.html
FROM webdevops/php-nginx:7.4-alpine

WORKDIR /var/www/app

COPY ./api/composer.json ./
COPY ./api/composer.lock ./

RUN composer install --ignore-platform-reqs

COPY ./backend .
COPY ./docker/api/bootstrap.sh /opt/docker/bin

RUN chown application:application -R ./storage
RUN chown application:application -R ./bootstrap