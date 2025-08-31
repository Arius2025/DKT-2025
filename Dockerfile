FROM php:8.3-fpm-bullseye

# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx supervisor \
    git unzip curl zip \
    libpng-dev libonig-dev libxml2-dev \
    pkg-config build-essential autoconf libtool \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

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
    && chown -R www-data:www-data /var/www

# Generate optimized config
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# ✅ Auto-validation: Laravel public/index.php must exist
RUN test -f /var/www/public/index.php || (echo "❌ Laravel public/index.php not found!" && exit 1)

# ✅ Auto-validation: .env must contain APP_KEY
RUN grep -q "APP_KEY=" .env || (echo "❌ APP_KEY missing in .env!" && exit 1)

# ✅ Auto-validation: Nginx config must be present
COPY nginx/default.conf /etc/nginx/conf.d/default.conf
RUN grep -q "/var/www/public" /etc/nginx/conf.d/default.conf || (echo "❌ Nginx config does not point to Laravel public folder!" && exit 1)

# ✅ Auto-validation: Supervisor config must be present
COPY supervisord.conf /etc/supervisord.conf
RUN grep -q "php-fpm" /etc/supervisord.conf || (echo "❌ Supervisor config missing php-fpm!" && exit 1)

# Expose port
EXPOSE 80

# Start services via Supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
