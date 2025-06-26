FROM php:8.1-fpm

# ติดตั้ง extension ที่จำเป็น
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl git \
    && docker-php-ext-install pdo pdo_mysql zip

# ตั้ง working dir
WORKDIR /var/www/html

# copy source code
COPY . .

# ติดตั้ง composer (optional)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# อาจ dump autoload ถ้าใช้
# RUN composer dump-autoload --optimize

# ตั้งค่า env
ARG APP_MODE=dev
ENV APP_MODE=${APP_MODE}

CMD ["php-fpm"]
