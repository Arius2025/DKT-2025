FROM php:8.3-fpm-bullseye

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl zip \
    libpng-dev libonig-dev libxml2-dev \
    pkg-config build-essential autoconf libtool \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Copy production env
COPY .env.production .env

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN mkdir -p storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Generate optimized config
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Expose port
EXPOSE 8000

# Start Laravel using built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
