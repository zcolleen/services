FROM alpine

RUN apk update
RUN apk add vim
RUN apk add mysql mysql-client
RUN mkdir /run/mysqld/
#RUN mkfifo /run/mysqld/mysqld.sock
RUN chown -R mysql /run/mysqld

#RUN cd '/usr' ; /usr/bin/mysqld_safe --datadir='/var/lib/mysql'

COPY src/file.sql ./
COPY ./src/my.cnf /etc/my.cnf
COPY ./src/start.sh ./

RUN mysql_install_db

EXPOSE 3306

CMD [ "sh", "start.sh" ]
#CMD [ "/usr/bin/mysqld_safe", "--datadir='/var/lib/mysql'"]
#RUN apk add mysql-server
#RUN apk add mariadb-client