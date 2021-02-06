FROM php:7.3-fpm

RUN apt-get update && apt-get install -y zip unzip git libmcrypt-dev \
    && pecl install mcrypt-1.0.2 \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

CMD composer install --prefer-dist --no-interaction && php-fpm