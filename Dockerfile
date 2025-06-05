# Étape 1 : Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Modifier le DocumentRoot d’Apache vers public/
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Installer les dépendances système nécessaires
RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libonig-dev libzip-dev libpng-dev libxml2-dev \
    libcurl4-openssl-dev pkg-config libssl-dev \
    ca-certificates openssl \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache \
    && pecl install mongodb && docker-php-ext-enable mongodb \
    && a2enmod rewrite

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
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-scripts

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