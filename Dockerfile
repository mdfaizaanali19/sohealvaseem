FROM php:8.2-apache

# Install PDO MySQL and common extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files to Apache web directory
COPY . /var/www/html/

# Set proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
