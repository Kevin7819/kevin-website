FROM php:8.3-cli

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip npm \
    && docker-php-ext-install zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Carpeta de trabajo
WORKDIR /app

# Copiar proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Frontend (Vite)
RUN npm install && npm run build

# Configuración Laravel
RUN cp .env.example .env || true
RUN php artisan key:generate || true

# Permisos
RUN chmod -R 775 storage bootstrap/cache

# Puerto
EXPOSE 10000

# Ejecutar servidor
CMD php artisan serve --host=0.0.0.0 --port=10000
