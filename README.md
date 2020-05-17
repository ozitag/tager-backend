For local development:

1. Configure .env files (./env ./srv/.env)

2. run `docker-compose -f docker-compose.local.yml --project-name tager-backend up --build --force-recreate -d`

3. after first run you have to wait 3-5 mins while composer installing dependencies, after 2nd+ run you have to wait 5-10 secs

4. Open browser http://localhost:8005/test, check if you see `{"success":true}` on browser's output