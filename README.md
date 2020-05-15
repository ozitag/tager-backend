`docker-compose --project-name backend-boilerplate up --build --force-recreate -d`

For local development:

1. Configure .env files (./env ./srv/.env)

2. run `docker-compose --project-name PROJECT_NAME up --build --force-recreate -d`

3. run `docker exec -it UID /bin/bash`, where UID is a docker container id of php-fpm
inside container run `php artisan db:seed && php artisan storage:link`



* два env: ./ & ./src
* Может понадобится два запуска start.sh, после успешного запуска: 
   * docker-compose exec -it UID bash
   * php artisan db:seed
   * php artisan storage:link
   
   * для разработки VueJs - npm i из ./src
   
_Локальная разработка | http:_
   * **src/.env** APP_ENV=local
   
_Бд вне контейнера:_
   * **.env** LOCAL_IP=локальный ip
   * в качестве хоста дб: **dockerhost**
  