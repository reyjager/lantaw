FROM php:8.0-fpm-alpine

# Install dependencies
RUN apk add --no-cache libpng libpng-dev libjpeg-turbo libjpeg-turbo-dev libfreetype6 libfreetype6-dev zip git

# Install composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory in the container
WORKDIR /var/www

# Copy the Laravel app into the container (copying the Laravel app from the outside directory)
COPY /Users/reyjaguines/work/taboan-w/lantaw /var/www


# Set permissions for Laravel folders
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose the container port for the app
EXPOSE 9000

# Command to run the Laravel app
CMD ["php-fpm"]
