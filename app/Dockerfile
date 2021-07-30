FROM php:7.4-apache

WORKDIR /

# Installing basic tools and required CI php-extensions

RUN apt-get update && \
apt -y install --no-install-recommends libpng-dev libicu-dev && \
docker-php-ext-configure intl && \
docker-php-ext-install intl gd mysqli

# Installing gearman server

RUN apt -y install --no-install-recommends wget htop libgearman-dev gearman-job-server supervisor && \
gearmand -d

# Installing gearman PHP Extension

RUN wget https://pecl.php.net/get/gearman-2.1.0.tgz && \
tar -xvzf gearman-2.1.0.tgz && \
rm gearman-2.1.0.tgz

WORKDIR /gearman-2.1.0
RUN phpize 
RUN ./configure 
RUN make 
RUN make install

COPY docs/docker-php-ext-gearman.ini /usr/local/etc/php/conf.d/

# Setting apache configuration

ADD docs/000-default.conf /etc/apache2/sites-available/
RUN a2enmod rewrite