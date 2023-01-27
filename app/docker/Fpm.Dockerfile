FROM php:8.1-fpm

WORKDIR /var/www/laravel-docker

RUN apt-get update \
    && docker-php-ext-install pdo pdo_mysql

COPY ./composer.json /var/www/laravel-docker

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer update
RUN composer install

RUN composer -v
