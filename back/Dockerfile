FROM php:7.4-cli
RUN apt-get update && apt-get -y upgrade
#&& apt-get install -y php
#RUN apt-get install -y php-pdo-mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY ./connect.php ./
#COPY php.sh php.sh
#RUN chmod +x /connect.php
#RUN chmod +x /php.sh
#RUN chmod 777 /var/www/html
#CMD tail -f /dev/null
#RUN ./php.sh
CMD php -S 0.0.0.0:7777
EXPOSE 7777
