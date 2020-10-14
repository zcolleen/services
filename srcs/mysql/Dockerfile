
FROM alpine

RUN apk update
RUN apk add openrc
RUN apk add mysql mysql-client
RUN mkdir "/run/mysqld"
#RUN echo -e "mypass\nmypass\n" | adduser -S zcolleen 
#RUN mkfifo /run/mysqld/mysqld.sock
RUN chown -R mysql /run/mysqld
#VOLUME [ "/var/lib/mysql" ]
#RUN cd '/usr' ; /usr/bin/mysqld_safe --datadir='/var/lib/mysql'

COPY src/file.sql ./
COPY ./src/my.cnf /etc/my.cnf
COPY ./src/start.sh ./

#RUN mysql_install_db

#VOLUME [ "/var/lib/mysql" ]
EXPOSE 3306

#CMD ["sh"]
CMD [ "sh", "start.sh" ]
#CMD [ "/usr/bin/mysqld_safe", "--datadir='/var/lib/mysql'"]
#RUN /etc/init.d/mariadb setup
#RUN apk add mysql-server
#RUN apk add mariadb-client