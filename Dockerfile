FROM php:8.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl libpng-dev libonig-dev libxml2-dev zip \
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
RUN mkdir -p storage/logs bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache


# Clear Laravel caches
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan route:clear
RUN php artisan view:clear

# Expose port
EXPOSE 80

# Start Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
