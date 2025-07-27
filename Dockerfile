FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zlib1g-dev \
    libpng-dev \
    && docker-php-ext-install gd \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock* ./

RUN composer install

COPY . .

CMD ["composer", "test"]
