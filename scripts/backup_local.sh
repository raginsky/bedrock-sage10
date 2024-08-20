#!/bin/bash

# Source the local variables from variables.sh
source "$(dirname "$0")/variables.sh"

# Set the relevant paths
BACKUP_DIR="$PROJECT_ROOT/backups"
DB_DIR="$PROJECT_ROOT/.db"
DB_FILE="db.sql"

# Load environment variables from .env file (sensitive info)
set -a
source "$PROJECT_ROOT/.env"
set +a

# Ensure the backups and db directories exist
mkdir -p "$BACKUP_DIR"
mkdir -p "$(dirname "$DB_FILE")"

# Create a timestamped backup file
EXPORT_FILE="$BACKUP_DIR/db_backup_$(date +'%Y-%m-%d_%H-%M-%S').sql"

# Export the WordPress database using mysqldump
if ! mysqldump -u "$DB_USER" -p"$DB_PASSWORD" --socket="$SOCKET_PATH" "$DB_NAME" > "$EXPORT_FILE"; then
  echo "Error: Database export failed."
  exit 1
fi

# Copy the export to the .db directory as db.sql
cp "$EXPORT_FILE" "$DB_DIR/$DB_FILE"

# Add the backup to Git and push
git add "$BACKUP_DIR/" && git add "$DB_DIR/"
git commit -m "Automated backup $(date +'%Y-%m-%d %H:%M:%S')"
git push

echo "Database backup completed, copied to $DB_FILE, and pushed to Git."
