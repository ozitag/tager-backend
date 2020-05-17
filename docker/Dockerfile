# Reference: https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-nginx.html
FROM webdevops/php-nginx:7.4-alpine

WORKDIR /var/www/app

COPY ./bootstrap.sh /opt/docker/provision/entrypoint.d/bootstrap.sh
COPY ./supervisor/queue.d /opt/docker/etc/supervisor.d/queue.conf
