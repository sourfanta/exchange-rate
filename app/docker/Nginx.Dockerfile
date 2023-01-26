FROM nginx

EXPOSE 3000

ADD /docker/conf/fornex.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/laravel-docker

COPY ./package.json /var/www/laravel-docker

RUN apt-get update
RUN apt-get -y install npm

RUN npm install
