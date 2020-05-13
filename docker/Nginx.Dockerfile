FROM nginx

ADD docker/conf/nginx-backend.conf /etc/nginx/conf.d/default.conf

