FROM nginx

EXPOSE 8098

ADD /docker/conf/fornex.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/laravel-docker

COPY ./ /var/www/laravel-docker

RUN apt-get update

RUN curl -sL https://deb.nodesource.com/setup_16.x  | bash -
RUN apt-get -y install nodejs

RUN npm install


RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer update
RUN composer install
