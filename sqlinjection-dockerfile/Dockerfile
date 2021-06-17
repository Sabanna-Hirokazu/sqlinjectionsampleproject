FROM php:apache

WORKDIR /var/www/html

COPY ./app/html/. .
COPY ./app/init.d/. /usr/src/app/.
 
# --
# -- install mysql and set up root account
# --
RUN apt-get update \
	&& apt-get install -y default-mysql-server

# Docker phpの設定
RUN docker-php-ext-install mysqli

# Port80を解放する
EXPOSE 80

# Server startup (attention to deamon service)
CMD service mysql start && bash /usr/src/app/initsql.sh && apachectl -D FOREGROUND 
