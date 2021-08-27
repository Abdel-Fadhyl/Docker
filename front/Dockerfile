# IMAGE APACHE
FROM php:8.0-apache
RUN apt-get update && apt-get -y upgrade
# LANCEMANT PERSISTANT
CMD php -S 0.0.0.0:8080
# COPIE DU FICHIER PHP
COPY ./index.php /var/www/html/
# PORT 
EXPOSE 8080
