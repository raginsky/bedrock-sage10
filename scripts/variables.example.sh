#!/bin/bash

# Local user and group settings
LOCAL_USER=$(whoami)
DOCKER_GROUP=$(getent group docker | cut -d: -f1)

# Project root directory
PROJECT_ROOT=~/wordpress/wpbase/app/bedrock

# Retrieve the MySQL socket path dynamically
SOCKET_PATH=$(find ~/.config/Local/run -type s -name "mysqld.sock" 2>/dev/null | head -n 1)

PROD_USER=
PROD_SERVER_IP=
PROD_SERVER="${PROD_USER}@${PROD_SERVER_IP}"
PROD_DIRECTORY=""
PROD_DOCKER_USER="www-data"