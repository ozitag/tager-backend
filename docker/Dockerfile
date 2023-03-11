FROM composer as builder
WORKDIR /app
COPY /backend/composer.lock ./composer.lock
COPY /backend/composer.json ./composer.json
RUN composer i  --ignore-platform-reqs

FROM webdevops/php-nginx:8.2-alpine

ENV TZ=Europe/Warsaw
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Should be enabled for backups which are done by PHP code
# RUN apk add mysql-client

WORKDIR /var/www/app

COPY /backend .
COPY --from=builder /app/vendor ./vendor

COPY /docker/backend/supervisor/queue.conf /opt/docker/etc/supervisor.d/queue.conf
COPY /docker/backend/nginx/10-location-root.conf /opt/docker/etc/nginx/vhost.common.d/10-location-root.conf
COPY /docker/backend/cron/crontab /opt/docker/etc/cron/crontab
COPY /docker/backend/bootstrap.sh /opt/docker/provision/entrypoint.d/bootstrap.sh

RUN docker-service-enable cron
RUN /usr/bin/crontab /opt/docker/etc/cron/crontab

RUN chown application:application -R /var/www/app