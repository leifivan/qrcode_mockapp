FROM php:5.4-apache

WORKDIR /var/www/html

# Environment pre-configuration
COPY ./docker/config/httpd/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/config/php/uploads.ini /usr/local/etc/php/conf.d/uploads.ini
COPY . /var/www/html

# Environment installation
RUN apt-get update && apt-get -y install \
  curl \
  git \
  libicu-dev \
  libgd-dev \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng12-dev \
  libpq-dev \
  zlib1g-dev \
  zip

# Environment post-configuration
RUN usermod -u 1000 www-data && \
  usermod -a -G users www-data && \
  chown -R www-data:www-data /var/www && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
  a2enmod rewrite

# PHP extension pre-configuration
RUN docker-php-ext-configure \
  gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

# PHP extension installation
RUN docker-php-ext-install \
  gd \
  intl \
  mbstring \
  pcntl \
  pdo \
  pdo_mysql \
  pdo_pgsql \
  zip
