# Gunakan PHP + Apache
FROM php:7.4-apache

# Aktifkan mod_rewrite untuk CodeIgniter
RUN a2enmod rewrite

# Copy semua file project ke container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80 (default Apache)
EXPOSE 80
