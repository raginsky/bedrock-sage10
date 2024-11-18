#!/bin/bash
source ../.env

BACKUP_DIR="./backups"
EXPORT_FILE=$BACKUP_DIR/db_backup_REMOTE_$(date +'%Y-%m-%d_%H-%M-%S').sql

# Ensure the backup directory exists
mkdir -p $BACKUP_DIR

# Export the database to the backup directory and handle errors
if docker exec -i mariadb mariadb-dump -u $DB_USER -p$DB_PASSWORD $DB_NAME > $EXPORT_FILE; then
  echo "Database backup completed successfully."
else
  echo "Error: Database backup failed."
  exit 1
fi

# Add to git
cd ../
if git add backups/ && git commit -m "Automated stage backup $(date +'%Y-%m-%d %H:%M:%S')" && git push; then
  echo "Backup committed and pushed to Git."
else
  echo "Error: Git commit or push failed."
  exit 1
fi
