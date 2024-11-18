#!/bin/bash

source ../.env

# Run the database update and log errors if it fails
if ! docker exec -i mariadb mariadb -u $DB_USER -p$DB_PASSWORD $DB_NAME < $EXPORT_FILE; then
  echo "$(date +'%Y-%m-%d %H:%M:%S') - Database update failed"
else
  echo "Database update completed successfully."
fi
