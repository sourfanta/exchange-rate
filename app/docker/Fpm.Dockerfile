FROM php:8.1-fpm

WORKDIR /var/www/laravel-docker

RUN apt-get update \
    && docker-php-ext-install pdo pdo_mysql

