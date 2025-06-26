# ใช้ Official PHP-FPM image เป็น Base
FROM php:8.2-fpm

# ติดตั้ง PHP Extensions ที่จำเป็น (ตัวอย่าง: MySQL, GD Library)
# และ Dependencies ของระบบปฏิบัติการที่จำเป็นสำหรับ Extensions เหล่านั้น
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libzip-dev \
    git \
    unzip \
    && docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql zip

# ติดตั้ง Composer (ถ้าโปรเจกต์ของคุณใช้ Composer)
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# (ไม่บังคับ) ปรับแต่ง PHP.ini
# คุณสามารถสร้างไฟล์ php.ini ของคุณเอง (เช่น php.ini-custom) แล้ว COPY เข้าไป
# หรือใช้คำสั่ง RUN เพื่อเพิ่มการตั้งค่า
# ตัวอย่าง: COPY php.ini-custom /usr/local/etc/php/conf.d/php.ini

# ตั้งค่า Working Directory (โดยทั่วไปคือ root ของโปรเจกต์ PHP ของคุณ)
WORKDIR /var/www/html

# (ไม่บังคับ) หากคุณต้องการให้ composer install/update ตอนสร้าง Image (ไม่แนะนำใน Dev environment)
# COPY composer.json composer.lock ./
# RUN composer install --no-dev --optimize-autoloader

# เนื่องจากเราใช้ volumes เพื่อ mount โค้ดจาก host เข้ามา
# เราจึงไม่จำเป็นต้อง COPY โค้ด PHP ทั้งหมดเข้าไปใน Image นี้
# Docker-compose จะจัดการการ mount volume ให้เรา