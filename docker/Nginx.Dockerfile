FROM nginx:stable-alpine

ADD docker/conf/nginx-main.conf /etc/nginx/conf.d/default.conf

