FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libfreetype6-dev \
    zip unzip git curl

# Configure GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

# Install PHP extensions one by one
RUN docker-php-ext-install gd
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install exif
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install opcache

# Clean up
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN echo "alias ll='ls -alF'" >> /root/.bashrc

# USER www-data
WORKDIR /var/www/html

# Ensure Laravel storage directories exist
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache

# Set correct permissions for Laravel writable directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Optional: make the app directory readable by all but writable only by owner
RUN chmod -R 755 /var/www/html

# Switch to the www-data user (the PHP-FPM default user)
USER www-data
