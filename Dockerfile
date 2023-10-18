# Utilisez une image PHP avec Apache préinstallé
FROM php:8.2.0-apache

# Installez les dépendances nécessaires pour Symfony
RUN apt-get update && apt-get install -y \
        unzip \
        libicu-dev \
        zlib1g-dev \
        libzip-dev

# Activez les modules Apache nécessaires pour Symfony
RUN a2enmod rewrite
RUN service apache2 restart

# Installez Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Créez un répertoire de travail
WORKDIR /var/www/html

# Copiez votre code Symfony dans le conteneur
COPY . .

# Installez les dépendances de Symfony
RUN composer install

# Exposez le port Apache
EXPOSE 80

# Lancez Apache au démarrage du conteneur
CMD ["apache2-foreground"]
