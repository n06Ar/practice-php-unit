FROM php:7.4.3-cli-buster

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update -yqq \
    && apt-get install git -y

WORKDIR /var/www/php