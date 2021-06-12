For local development:

1. Configure .env files (./env ./srс/.env)

2. run `docker-compose -f docker-compose.dev.yml --project-name tager-backend up --build --force-recreate -d`

3. after first run you have to wait 3-5 mins while composer installing dependencies, after 2nd run you have to wait
   25-30 secs

4. Wait before composer packages will be installed (you can monitor process in backend container logs)