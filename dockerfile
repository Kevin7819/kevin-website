FROM php:8.2-cli

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

# Instalar y compilar frontend (Vite)
RUN npm install && npm run build

# Generar key automáticamente
RUN php artisan key:generate

# Permisos necesarios
RUN chmod -R 775 storage bootstrap/cache

# Exponer puerto (Render usa 10000)
EXPOSE 10000

# Ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=10000