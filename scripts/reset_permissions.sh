#!/bin/bash

# Navigate to the parent directory
cd "$(dirname "$0")"
source ./variables.sh
cd ../

# Change ownership
sudo chown ${LOCAL_USER}:${DOCKER_GROUP} web/ -R

# Change permissions
sudo chmod 775 web/ -R
