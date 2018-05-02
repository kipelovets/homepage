FROM php:7.2

RUN apt-get update \
        && apt-get install -y libyaml-dev \
    && pecl install yaml \
    && echo "extension=yaml.so" > /usr/local/etc/php/conf.d/yaml.ini

RUN curl https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer | php -- --quiet
RUN mv composer.phar /usr/bin/composer
