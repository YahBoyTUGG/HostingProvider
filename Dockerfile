FROM php:8.4-cli-alpine AS php-base

RUN apk add --no-cache icu-libs libzip oniguruma \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS icu-dev libzip-dev oniguruma-dev \
    && docker-php-ext-install -j"$(nproc)" bcmath intl mbstring opcache pdo_mysql zip \
    && apk del .build-deps \
    && rm -rf /tmp/pear

WORKDIR /var/www/html

FROM php-base AS build

RUN apk add --no-cache nodejs npm

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --no-scripts \
    --prefer-dist \
    --optimize-autoloader

COPY package.json package-lock.json ./
RUN npm ci

COPY . .
RUN php artisan package:discover --ansi \
    && npm run build \
    && php artisan storage:link --force \
    && mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

FROM php-base AS runtime

ENV APP_ENV=production \
    APP_DEBUG=false

COPY --from=build --chown=www-data:www-data /var/www/html /var/www/html

USER www-data

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
