# FROM php:7.3.6-fpm-alpine3.9
FROM php:8.0-fpm-alpine3.13

WORKDIR /var/www

RUN apk add --no-cache openssl bash mysql-client nodejs npm
RUN docker-php-ext-install pdo pdo_mysql bcmath

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 9000
