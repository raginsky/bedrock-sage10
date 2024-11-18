#!/usr/bin/env bash

# Configuration
source ./variables.sh  # Load variables for flexibility

PROD_UPLOADS_PATH="/home/${PROD_USER}/${PROD_DIRECTORY}/web/app/uploads"  # Remote uploads path
LOCAL_UPLOADS_PATH="./web/app/wp-content/uploads"  # Local uploads path
CURRENT_YEAR=$(date +"%Y")  # Get the current year

# Ensure proper permissions on remote server
echo "Updating ownership on the production server..."
ssh "${PROD_SERVER}" "sudo chown -R ${PROD_USER}:${PROD_DOCKER_USER} ${PROD_UPLOADS_PATH}"

# Sync uploads directory for the current year
echo "Syncing uploads from production (${CURRENT_YEAR}) to local environment..."
rsync -avz --progress --exclude="cache/" "${PROD_SERVER}:${PROD_UPLOADS_PATH}/${CURRENT_YEAR}/" "${LOCAL_UPLOADS_PATH}/${CURRENT_YEAR}"

echo "Local uploads folder updated successfully for ${CURRENT_YEAR}."