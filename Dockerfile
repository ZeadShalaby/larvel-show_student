FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && \
    apt-get install -y curl libonig-dev libzip-dev unzip && \
    rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --no-cache

# Copy the project files
COPY . /var/www/html

# Install the project dependencies
RUN cd /var/www/html && composer install --no-dev --prefer-dist --optimize-autoloader

# Set the ownership of the project files to the Apache user
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 and start Apache
EXPOSE 80
CMD ["apache2-foreground"]