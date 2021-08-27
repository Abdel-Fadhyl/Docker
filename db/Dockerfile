FROM mysql:8.0
RUN apt-get update && apt-get -y upgrade
COPY db.sql db.sql
ADD db.sql /docker-entrypoint-initdb.d/script.sql
RUN chmod 777 /docker-entrypoint-initdb.d
ENV MYSQL_ROOT_PASSWORD root
