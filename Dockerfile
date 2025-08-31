# Stage 1: Build Laravel app
FROM php:8.3-fpm AS build

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
RUN mkdir -p storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Generate optimized config
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Stage 2: Production image with Nginx
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y nginx supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copy app from build stage
COPY --from=build /var/www /var/www

# Copy Nginx config
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Set working directory
WORKDIR /var/www

# Set permissions
RUN chown -R www-data:www-data /var/www

# Expose port
EXPOSE 80

# Start services via Supervisor
COPY supervisord.conf /etc/supervisord.conf
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
