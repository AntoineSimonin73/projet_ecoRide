# Étape 1 : Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libonig-dev libzip-dev libpng-dev libxml2-dev \
    libcurl4-openssl-dev pkg-config libssl-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

# 👉 Installer l'extension MongoDB (obligatoire pour mongodb/mongodb dans composer.json)
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Activer le module Apache pour les URL "propres"
RUN a2enmod rewrite

# Installer Composer (depuis l'image officielle)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier tout le projet Symfony
COPY . /var/www/html
WORKDIR /var/www/html

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html/var /var/www/html/vendor

# ⚠️ Installer les dépendances PHP, maintenant que mongodb est disponible
RUN composer install --no-dev --optimize-autoloader --prefer-dist

# Configuration Apache pour Symfony
RUN echo '<Directory /var/www/html/public>' \
    > /etc/apache2/conf-available/symfony.conf && \
    echo '    AllowOverride All' \
    >> /etc/apache2/conf-available/symfony.conf && \
    echo '</Directory>' \
    >> /etc/apache2/conf-available/symfony.conf && \
    a2enconf symfony
EXPOSE 80
CMD ["apache2-foreground"]