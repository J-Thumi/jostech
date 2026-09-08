#!/bin/bash

# Run migrations
# The --force flag is needed for production environments
php artisan migrate 
php artisan sitemap:generate

# Start the main process (supervisord)
exec "$@"