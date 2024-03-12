FROM php:8.2-fpm-alpine

RUN apk add --no-cache  --virtual .ext-deps \
        openssl-dev \
        bash \
        mysql-client \
        nodejs \
        npm \
        git \
        autoconf \
        g++ \
        make \
        libpng-dev \
        jpeg-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        imagemagick \
        imagemagick-libs \
        imagemagick-dev \
        libxml2-dev \
        libzip-dev \
        zip \
        tzdata

RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install pdo pdo_mysql gd xml zip \
    && pecl install \
            imagick \
    && docker-php-ext-enable --ini-name 20-imagick.ini imagick

# Enable xdebug
# COPY ./.docker/app/90-xdebug.ini "${PHP_INI_DIR}/conf.d"
# RUN pecl install xdebug-3.1.5
# RUN docker-php-ext-enable xdebug

ENV TZ America/Sao_Paulo

RUN echo 'memory_limit = -1' >> /usr/local/etc/php/php.ini
RUN echo 'upload_max_filesize = 5M' >> /usr/local/etc/php/php.ini
RUN echo 'post_max_size = 5M' >> /usr/local/etc/php/php.ini
RUN echo 'XDEBUG_MODE = coverage' >> /usr/local/etc/php/php.ini

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install pcov && docker-php-ext-enable pcov

WORKDIR /var/www
RUN rm -rf /var/www/html

COPY . /var/www
RUN ln -s public html

EXPOSE 9000
