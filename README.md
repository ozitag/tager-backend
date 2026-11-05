# TAGER Backend

Стартовый скелет проекта на TAGER: Laravel 13, PHP 8.3+, пакеты
`ozitag/tager-backend-*` линии 2.x.

## Локальная разработка

1. Заполните `.env` в корне (параметры docker-compose) и `src/.env`
   (параметры приложения) — за образец возьмите соседние `.env.example`.

2. Поднимите окружение:

   ```bash
   docker-compose -f docker-compose.dev.yml --project-name tager-backend up --build --force-recreate -d
   ```

   Первый запуск занимает 3–5 минут, пока composer ставит зависимости;
   последующие — 25–30 секунд. Прогресс виден в логах контейнера backend.

3. Накатите схему:

   ```bash
   php artisan migrate
   ```

4. Заведите первого администратора. Задайте в `src/.env`:

   ```
   TAGER_ADMIN_NAME=Administrator
   TAGER_ADMIN_EMAIL=you@example.com
   TAGER_ADMIN_PASSWORD=<пароль>
   ```

   и выполните:

   ```bash
   php artisan db:seed --class=Database\\Seeders\\AdministratorSeeder
   ```

   Сидер создаёт учётку и выдаёт ей роль Super Administrator. Повторный
   запуск безопасен: существующая учётка не трогается, пароль не
   перезаписывается.

   > До версии `tager-backend-admin` 2.0.3 пакет сам заводил
   > администратора с адресом и паролем, лежавшими в его исходниках, —
   > то есть каждая установка TAGER поднималась с общеизвестной учёткой.
   > Теперь первого администратора заводит проект, и реквизиты не
   > попадают в репозиторий.

## Тесты

```bash
cd src && composer install && vendor/bin/phpunit
```

## Структура

| Путь | Назначение |
|---|---|
| `src/` | Laravel-приложение |
| `src/app/Tager/` | точки расширения TAGER: шаблоны страниц, обработчики sitemap и панели |
| `src/app/Enums/` | перечисления проекта: скоупы, сценарии файлов, ключи настроек, шаблоны писем |
| `src/database/seeders/` | сидеры, включая создание первого администратора |
| `docker/` | образ и конфигурация nginx, supervisor, cron |

## Обновление пакетов

Все `ozitag/tager-backend-*` живут на линии `^2.0`; `core` и `crud`
зафиксированы на `^2.1`. Миграции Passport опубликованы в
`src/database/migrations/` — так требует Passport начиная с 12-й версии,
где пакет перестал регистрировать их автоматически.
