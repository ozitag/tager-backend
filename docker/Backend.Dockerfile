# Reference: https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-nginx.html
FROM webdevops/php-nginx:7.4-alpine

WORKDIR /var/www/app

COPY ./backend/composer.json ./
COPY ./backend/composer.lock ./

RUN composer install --ignore-platform-reqs

COPY ./backend .
COPY ./docker/scripts/backend-bootstrap.sh /opt/docker/bin

RUN chown application:application -R ./storage
RUN chown application:application -R ./bootstrap