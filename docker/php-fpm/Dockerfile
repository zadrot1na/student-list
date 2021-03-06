FROM php:7.3-fpm
MAINTAINER Vasyl Tarasov <vasiltarasov704@gmail.com>


RUN dest=/etc/timezone regexp='^.*' line='Europe/Berlin'
RUN dpkg-reconfigure -f noninteractive tzdata

RUN apt update && apt install -y vim

RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    gnupg

RUN echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
RUN echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
RUN curl -sS --insecure https://www.dotdeb.org/dotdeb.gpg | apt-key add -

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip

RUN apt-get update --fix-missing
RUN apt-get install -y curl
RUN apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

RUN apt install -y nodejs npm libxml2-dev

RUN apt-get update && apt-get install -y git curl wget libmcrypt-dev openssh-client g++ \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-source delete \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo_mysql soap intl zip \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=10000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && wget https://cs.symfony.com/download/php-cs-fixer-v2.phar -O php-cs-fixer \
    && rm -rf /tmp/*

RUN apt-get update && apt-get install -y wkhtmltopdf xvfb
RUN apt-get update -y && apt-get install -y sendmail libpng-dev

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd

RUN ssh-keygen -t rsa -b 4096 -C "pass" -f /root/.ssh/id_rsa

RUN git config --global user.name "Vasyl Tarasov"
RUN git config --global user.email vasiltarasov704@gmail.com
RUN git config --global core.editor vim

COPY ./php.ini /etc/php/7.3/apache2/php.ini
COPY ./conf.d/* /etc/php/7.3/apache2/conf.d/

RUN echo 'alias symfony="php bin/console"' >> ~/.bashrc
RUN echo 'alias please="sudo"' >> ~/.bashrc

RUN wget https://getcomposer.org/download/1.9.1/composer.phar -O /usr/local/bin/composer && chmod +x /usr/local/bin/composer

WORKDIR /var/www/symfony

EXPOSE 9000

CMD ["php-fpm"]
