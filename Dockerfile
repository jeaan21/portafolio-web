FROM php:8.4-apache

# Habilitar mod_rewrite de Apache para Laravel
RUN a2enmod rewrite

# Instalar dependencias del sistema y extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql gd zip

# Copiar configuración de Apache para que apunte a la carpeta public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar Node.js y npm (necesario para Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www/html

# Debug por defecto (Render env vars sobreescriben esto)
ENV APP_DEBUG=true

# Copiar los archivos del proyecto
COPY . .

# Crear .env y BD SQLite, permisos iniciales
RUN cp .env.example .env \
    && touch database/database.sqlite

# Instalar dependencias de PHP y Node.js, y compilar frontend
RUN composer install --no-dev --optimize-autoloader \
    && npm install \
    && npm run build \
    && php artisan key:generate --force \
    && php artisan storage:link

# Establecer permisos DESPUÉS de crear archivos
RUN chown -R www-data:www-data storage bootstrap/cache database \
    && chmod -R 775 storage bootstrap/cache database

# Copiar entrypoint y configurar
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Puerto en el que Apache escucha
EXPOSE 80

# Entrypoint que corre migraciones antes de iniciar Apache
ENTRYPOINT ["docker-entrypoint.sh"]
