# Reference: https://vuejs.org/v2/cookbook/dockerize-vuejs-app.html
# build stage
FROM node:lts-alpine as build-stage
WORKDIR /var/www/app
COPY ./frontend-new/package.json ./
RUN yarn install
COPY ./frontend-new .
RUN yarn build

# production stage
FROM nginx:stable-alpine as production-stage
COPY --from=build-stage /var/www/app/dist /var/www/app/admin
COPY ./docker/conf/nginx-frontend.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]