FROM php:8.2-fpm-buster as builder
ARG TIMEZONE

COPY php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    libpq-dev \
    && apt purge -y --auto-remove

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install \
    pdo pdo_pgsql zip xsl gd intl opcache exif mbstring \
    && docker-php-ext-configure gd --with-jpeg --with-freetype

RUN groupadd --force -g 1000 www
RUN useradd -ms /bin/bash --no-user-group -g 1000 -u 1337 www

COPY --chown=www:www .. /var/www

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
