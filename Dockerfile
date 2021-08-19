FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache openssl bash nodejs npm postgresql-dev
RUN docker-php-ext-install bcmath pdo pdo_pgsql
