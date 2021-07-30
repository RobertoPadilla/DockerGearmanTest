FROM php:7.4-apache

WORKDIR /

# Installing basic tools and required CI php-extensions
RUN apt-get update && \
apt -y install --no-install-recommends libpng-dev libicu-dev && \
docker-php-ext-configure intl && \
docker-php-ext-install intl gd mysqli

ADD docs/000-default.conf /etc/apache2/sites-available/
RUN a2enmod rewrite