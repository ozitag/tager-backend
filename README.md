_Первый запуск:_
* два env: ./ & ./src
* Может понадобится два запуска start.sh, после успешного запуска: 
   * docker-compose exec -it UID bash
   * php artisan db:seed
   * pap artisan storage:link
   
   * для разработки VueJs - npm i из ./src
   
_Локальная разработка | http:_
   * **src/.env** APP_ENV=local
   
_Бд вне контейнера:_
   * **.env** LOCAL_IP=локальный ip
   * в качестве хоста дб: **dockerhost**
  
