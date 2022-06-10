FROM php:fpm
RUN apt-get update -y \
    && apt-get install -y nginx
# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/
# Set working directory
WORKDIR /var/www
# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    sendmail \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    nodejs \
    npm
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl pgsql pdo pdo_pgsql
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY ./nginx/default /etc/nginx/sites-enabled/default
COPY ./nginx/entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh
# Copy existing application directory contents
# Copy existing application directory permissions
ADD . /var/www
COPY --chown=www-data . /var/www
RUN chmod -R 755 /var/www && chown -R www-data:www-data /var/www
# RUN composer install
# RUN npm install
EXPOSE 80 443
ENTRYPOINT ["sh", "/etc/entrypoint.sh"]
