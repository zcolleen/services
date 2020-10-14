FROM alpine

RUN apk update
RUN apk add php php7-session php7-common php7-iconv php7-json php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom
RUN mkdir -p /usr/share/webapps/
RUN wget http://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
RUN rm latest.tar.gz
RUN mv wordpress/ /usr/share/webapps/

COPY ./src/wp-config.php /usr/share/webapps/

CMD [ "php7", "-S", "0.0.0.0:5050", "-t", "/usr/share/webapps/wordpress" ]

EXPOSE 5050