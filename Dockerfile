# Étape 1 : image PHP avec Composer
FROM php:8.2-cli

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git zip unzip libicu-dev libpq-dev libonig-dev libzip-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le code source
WORKDIR /app
COPY . .

# Installer les dépendances
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Port utilisé par Symfony en dev
EXPOSE 8000

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]