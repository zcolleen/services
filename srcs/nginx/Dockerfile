FROM alpine

RUN apk update
RUN apk add nginx
RUN apk add vim
RUN apk add openssl
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
#RUN apk add openrc
#RUN apk add curl
RUN mkdir /run/nginx
RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/C=RF/ST=Moscow/L=Moscow/O=school21/OU=zcolleen/CN=my_domain"
#RUN mv /var/lib/nginx/html/index.html /www

COPY ./src/nginx_config /etc/nginx/nginx.conf
COPY ./src/index.html /www

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]

#RUN rc-service nginx start