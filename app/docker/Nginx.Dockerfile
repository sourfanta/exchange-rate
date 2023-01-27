FROM nginx

EXPOSE 8098

ADD /docker/conf/fornex.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/laravel-docker

COPY ./package.json /var/www/laravel-docker

RUN apt-get update

RUN curl -sL https://deb.nodesource.com/setup_16.x  | bash -
RUN apt-get -y install nodejs

RUN npm install

