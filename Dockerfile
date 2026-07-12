FROM php:8.4-cli

# System deps
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip libzip-dev curl gnupg2 \
    && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring xml zip bcmath

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app
COPY . .

# Generate environment and install PHP dependencies
RUN cp .env.example .env \
    && composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && php artisan key:generate --ansi --force \
    && mkdir -p database \
    && touch database/database.sqlite \
    && php artisan migrate --force

# Expose port
EXPOSE 8000

CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]
