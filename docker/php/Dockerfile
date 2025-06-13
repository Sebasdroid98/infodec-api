FROM php:7.4-apache

# Instalación de extensiones necesarias
RUN apt-get update && apt-get install -y netcat \
    zip unzip libzip-dev libonig-dev libxml2-dev curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Activar mod_rewrite de Apache
RUN a2enmod rewrite

# Configurar DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Instalar Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Copiar archivo .env y composer si hace falta
WORKDIR /var/www/html

# Copiar archivos del proyecto al contenedor
COPY . /var/www/html

# Instalar dependencias de Laravel automáticamente
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Dar permisos necesarios a storage y cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copiar script de inicio
COPY docker/php/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Usar script como punto de entrada
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

CMD ["apache2-foreground"]