# Use the official PHP image as the base image
FROM php:8.2-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Install PHP extensions and other dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Copy the application files to the container
COPY . .

# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader

# Generate the autoload files and optimize Composer autoloader
RUN composer dump-autoload --optimize

# Expose port 9000 to communicate with PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
