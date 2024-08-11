#!/bin/bash

# Set the project root directory
PROJECT_ROOT=~/wordpress/wpbase/app/bedrock
BACKUP_DIR="$PROJECT_ROOT/backups"
DB_DIR="$PROJECT_ROOT/.db"
DB_FILE="$DB_DIR/db.sql"

# Navigate to the project root directory
cd $PROJECT_ROOT || {
  echo "Project root directory not found: $PROJECT_ROOT"
  exit 1
}

# Ensure the backups and db directories exist
mkdir -p $BACKUP_DIR
mkdir -p $DB_DIR

# Export the WordPress database using WP-CLI
EXPORT_FILE=$BACKUP_DIR/db_backup_$(date +'%Y-%m-%d_%H-%M-%S').sql

# Check if wp-cli is available
if ! command -v wp &> /dev/null; then
  echo "wp-cli could not be found. Please ensure WP-CLI is installed."
  exit 1
fi

# Export the database to the backup directory
wp db export $EXPORT_FILE

# Check if the export was successful
if [ $? -ne 0 ]; then
  echo "Failed to export the database. Please check your WP-CLI configuration and try again."
  exit 1
fi

# Copy the same dump to the db directory as db.sql (for deploy db purposes)
cp $EXPORT_FILE $DB_FILE

# Add to git
cd $PROJECT_ROOT
git add backups/
git commit -m "Automated backup $(date +'%Y-%m-%d %H:%M:%S')"
git push

echo "Database backup completed, copied to $DB_FILE, and pushed to Git."
