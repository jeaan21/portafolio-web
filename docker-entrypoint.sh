#!/bin/bash
set -e

cd /var/www/html

# Migrar base de datos en startup (funciona con PostgreSQL, SQLite, etc.)
php artisan migrate --force 2>&1 || echo "WARNING: migrate failed, continuing..."

# Iniciar Apache en foreground
exec apache2-foreground