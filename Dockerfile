# Copy Laravel files
WORKDIR /var/www
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Copy Nginx config
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Install Nginx
RUN apt-get update && apt-get install -y nginx

EXPOSE 80

CMD service nginx start && php-fpm
