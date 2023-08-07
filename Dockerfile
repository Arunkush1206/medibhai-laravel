FROM php:8.2-fpm

USER root

WORKDIR /app/public

RUN apt-get update && apt-get install -y \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        libpq-dev \
        zip \
        git \
        unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-ext-install exif \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pgsql \
    && docker-php-source delete

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

#COPY . /var/www/html

COPY ./.env /app/public/.env

RUN chmod 777 -R .env

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN git clone https://github.com/Arunkush1206/medibhai-laravel.git && mv medibhai-laravel/* . 

RUN composer self-update && composer install

RUN php artisan key:generate

RUN chmod 777 -R storage/ bootstrap/ public/ vendor/

RUN php artisan config:cache

EXPOSE 9000

CMD ["php-fpm"]
