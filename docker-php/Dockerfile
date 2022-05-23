FROM php:7.2-fpm

RUN apt-get update --fix-missing \
    && apt-get install -y apt-utils \
    && apt-get install -y libcurl4-gnutls-dev \
    && apt-get install -y libxml2-dev \
    && apt-get install -y freetds-dev \
    && apt-get install -y libfreetype6-dev \
    && apt-get install -y libjpeg62-turbo-dev \
    && apt-get install -y libpng-dev \
    && apt-get install -y git \
    && apt-get install -y curl \
    && apt-get install -y supervisor \
    && apt-get install -y libpq-dev \
    && apt-get install -y zip \
    && apt-get install -y ffmpeg \
    && mkdir -p /usr/share/man/man1 && apt-get install -y default-jre-headless \
    && pecl install redis-5.1.1 \
    && docker-php-ext-install calendar \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install pdo mysqli pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip \
    && docker-php-ext-install bcmath \
    && docker-php-ext-enable redis \
