# imagen de dockerhub
FROM php:7.3-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

# instala composer en el contenedor
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# permisos para editar los archivos en esta ruta del container
RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www