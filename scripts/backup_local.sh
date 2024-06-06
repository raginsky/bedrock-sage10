#!/bin/bash

# Set the project root directory
PROJECT_ROOT=~/wordpress/wpbase/app/bedrock
BACKUP_DIR="$PROJECT_ROOT/backups"

# Navigate to the project root directory
cd $PROJECT_ROOT || {
  echo "Project root directory not found: $PROJECT_ROOT"
  exit 1
}

# Ensure the backups directory exists
mkdir -p $BACKUP_DIR

# Export the WordPress database using WP-CLI
EXPORT_FILE=$BACKUP_DIR/db_backup_$(date +'%Y-%m-%d_%H-%M-%S').sql

# Check if wp-cli is available
if ! command -v wp &> /dev/null; then
  echo "wp-cli could not be found. Please ensure WP-CLI is installed."
  exit 1
fi

# Export the database
wp db export $EXPORT_FILE

# Check if the export was successful
if [ $? -ne 0 ]; then
  echo "Failed to export the database. Please check your WP-CLI configuration and try again."
  exit 1
fi

# Add to git
cd $PROJECT_ROOT
git add backups/
git commit -m "Automated backup $(date +'%Y-%m-%d %H:%M:%S')"
git push origin main

echo "Database backup completed and pushed to Git."
