FROM php:apache

# Instala la extensión PDO para MySQL
RUN docker-php-ext-install pdo pdo_mysql