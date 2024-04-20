# Use the official PHP Apache image
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Copy the PHP script into the container
COPY script.php /var/www/html/script.php

# Expose port 80
EXPOSE 80
