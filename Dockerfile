# composer dependencies. WORKDIR id /var/www/source
FROM antaivb/php-base:7.2-fpm as php-builder

COPY composer.json composer.json
COPY composer.lock composer.lock
COPY symfony.lock symfony.lock

RUN composer install --no-autoloader --no-scripts --prefer-dist --no-progress --no-suggest

COPY .env.dist .env.dist
COPY phpunit.xml.dist phpunit.xml.dist
COPY assets assets
COPY src src
COPY bin bin
COPY config config
COPY public public
COPY templates templates
COPY tests tests
COPY translations translations

RUN composer dump-autoload --optimize --classmap-authoritative
RUN composer install

# npm dependencies
# FROM antaivb/php-builder:7.2-fpm as node-builder
FROM node:8 as node-builder

RUN mkdir -p /var/www/source
WORKDIR /var/www/source

COPY package.json .
COPY yarn.lock .
COPY webpack.config.js .

RUN npm install -g yarn
RUN yarn install

COPY --from=php-builder /var/www/source .

RUN \
    yarn run encore production

# target
FROM  antaivb/php-base:7.2-fpm

ARG NAMESPACE
ARG APPLICATION_NAME

WORKDIR /var/www/${NAMESPACE}-${APPLICATION_NAME}

COPY --from=node-builder /var/www/source/.env .env
COPY --from=node-builder /var/www/source/phpunit.xml.dist phpunit.xml.dist
COPY --from=node-builder /var/www/source/composer.json composer.json
COPY --from=node-builder /var/www/source/bin bin
COPY --from=node-builder /var/www/source/config config
COPY --from=node-builder /var/www/source/public public
COPY --from=node-builder /var/www/source/src src
COPY --from=node-builder /var/www/source/templates templates
COPY --from=node-builder /var/www/source/tests tests
COPY --from=node-builder /var/www/source/translations translations
COPY --from=node-builder /var/www/source/vendor vendor

RUN \
    mkdir -p var \
    && find var public -exec chown www-data: {} + \
    && chown root: public/*.php

COPY start.sh start.sh

CMD ["bash", "start.sh"]
