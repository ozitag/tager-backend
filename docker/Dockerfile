# Reference: https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-nginx.html
FROM webdevops/php-nginx:7.4-alpine as dev

WORKDIR /var/www/app

COPY /docker/bootstrap.sh /opt/docker/provision/entrypoint.d/bootstrap.sh
COPY /docker/supervisor/queue.conf /opt/docker/etc/supervisor.d/queue.conf
COPY /docker/nginx/10-location-root.conf /opt/docker/etc/nginx/vhost.common.d/10-location-root.conf
COPY /docker/nginx/10-general.conf /opt/docker/etc/nginx/vhost.common.d/10-general.conf

FROM webdevops/php-nginx:7.4-alpine as production

RUN docker-service-enable cron
COPY /docker/backend-tager/cron/crontab /opt/docker/etc/cron/crontab
RUN /usr/bin/crontab /opt/docker/etc/cron/crontab

WORKDIR /var/www/app

COPY /src/composer.json composer.json
COPY /src/composer.lock composer.lock

RUN composer i  --ignore-platform-reqs

COPY /src .

COPY /docker/bootstrap.production.sh /opt/docker/provision/entrypoint.d/bootstrap.sh
COPY /docker/supervisor/queue.conf /opt/docker/etc/supervisor.d/queue.conf
COPY /docker/nginx/10-location-root.conf /opt/docker/etc/nginx/vhost.common.d/10-location-root.conf
COPY /docker/nginx/10-general.conf /opt/docker/etc/nginx/vhost.common.d/10-general.conf

RUN docker-service-enable cron
COPY /docker/backend-tager/cron/crontab /opt/docker/etc/cron/crontab
RUN /usr/bin/crontab /opt/docker/etc/cron/crontab