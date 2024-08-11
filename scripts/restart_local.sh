#!/bin/bash

cd "$(dirname "$0")"
source ./variables.sh

docker-compose stop wordpress
docker-compose rm wordpress
docker-compose up -d

cd ..
sudo chown ${LOCAL_USER}:${DOCKER_GROUP} app/ -R && sudo chmod 775 app/ -R
sudo rm -rf web/app/plugins/akismet/ web/app/plugins/hello.php web/app/themes/twenty* web/app/uploads/cache/*
