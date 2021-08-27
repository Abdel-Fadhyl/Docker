# IMAGE MYSQL
FROM mysql:8.0
RUN apt-get update && apt-get -y upgrade
# COPIE DU FICHIER SQL
COPY db.sql db.sql
# DROIT
ADD db.sql /docker-entrypoint-initdb.d/script.sql
RUN chmod 777 /docker-entrypoint-initdb.d
# MOT DE PASSE
ENV MYSQL_ROOT_PASSWORD root
