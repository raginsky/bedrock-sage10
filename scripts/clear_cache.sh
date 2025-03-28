#!/bin/bash

# Clear the Acorn cache
docker-compose exec bedrock wp acorn cache:clear --allow-root

# Set the correct permissions (if necessary)
docker-compose exec bedrock chmod -R 775 /srv/bedrock/web/app/cache
docker-compose exec bedrock chown -R www-data:www-data /srv/bedrock/web/app/cache

# Run yarn dev in the Sage theme directory
docker-compose exec bedrock bash -c "cd /srv/bedrock/web/app/themes/sage && yarn prod"

echo "Acorn cache has been cleared, permissions set, and dependencies has been built."