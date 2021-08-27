# IMAGE PHP
FROM php:7.4-cli
RUN apt-get update && apt-get -y upgrade
# INSTALATION DE PDO
RUN docker-php-ext-install mysqli pdo pdo_mysql
# COPIE DU FICHIER PHP
COPY ./connect.php ./
# LANCEMENT PERSISTANT
CMD php -S 0.0.0.0:7777
# PORT 7777
EXPOSE 7777
