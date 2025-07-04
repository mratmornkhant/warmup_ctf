# Use official PHP image with Apache
FROM php:8.2-apache

# Copy all project files into Apache's document root
COPY . /var/www/html/

# Set correct permissions (optional but safe)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Enable Apache rewrite module (if needed later)
RUN a2enmod rewrite

# Expose the web port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
