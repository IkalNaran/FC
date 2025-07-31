FROM php:8.0.30-apache

# Instalar PEAR y extensiones necesarias para PHP
RUN apt-get update && \
    apt-get install -y php-pear && \
    docker-php-ext-install pdo pdo_mysql mysqli && \
    a2enmod rewrite

# Opcional: configurar Apache si lo necesitas
COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf

# Importante: NO copies los archivos aquí, porque los vas a montar desde Windows
