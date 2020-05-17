# Reference: https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-nginx.html
FROM webdevops/php-nginx:7.4-alpine

WORKDIR /var/www/app

COPY ./api .
RUN composer global require hirak/prestissimo
RUN composer install --ignore-platform-reqs

RUN chown application:application -R ./storage
RUN chown application:application -R ./bootstrap

COPY ./docker/api/bootstrap.sh /opt/docker/bin