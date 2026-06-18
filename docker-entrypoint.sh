#!/bin/sh
set -e

# Clear caches on startup to prevent stale compiled views
php artisan view:clear
php artisan config:clear
php artisan cache:clear

# Execute Apache in foreground
exec apache2-foreground "$@"
