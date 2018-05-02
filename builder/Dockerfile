FROM php:7.2

RUN apt-get update \
        && apt-get install -y libyaml-dev \
    && pecl install yaml \
    && echo "extension=yaml.so" > /usr/local/etc/php/conf.d/yaml.ini
