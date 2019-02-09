# composer dependencies. WORKDIR id /var/www/source
FROM antaivb/php-base:7.2-fpm as php-builder

ARG NAMESPACE
ARG APPLICATION_NAME

WORKDIR /var/www/${NAMESPACE}-${APPLICATION_NAME}

COPY composer.json composer.json
COPY composer.lock composer.lock
COPY symfony.lock symfony.lock

RUN composer install --no-autoloader --no-scripts --prefer-dist --no-progress --no-suggest

COPY .env.dist .env.dist
COPY src src
COPY bin bin
COPY config config
COPY public public
COPY templates templates

RUN composer dump-autoload --optimize --classmap-authoritative
RUN composer install

RUN \
    mkdir -p var \
    && find var public -exec chown www-data: {} + \
    && chown root: public/*.php

COPY start.sh start.sh

CMD ["bash", "start.sh"]


