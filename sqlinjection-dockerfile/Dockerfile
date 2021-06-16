FROM php:apache

WORKDIR /var/www/html

COPY ./app/html/. .
 
# --
# -- install mysql and set up root account
# --
RUN apt-get update \
	&& apt-get install -y default-mysql-server

# Port80を解放する
EXPOSE 80
