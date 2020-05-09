#!/bin/bash
echo "Deployment of project [Starter Backend] is started"

sudo -u www-data git fetch --all
sudo -u www-data git reset --hard origin/master

docker-compose --project-name starter-backend up --build --force-recreate -d
echo "Deployment of project [Starter Backend] is finished"
