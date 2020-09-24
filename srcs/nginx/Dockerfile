FROM alpine

RUN apk update
RUN apk add nginx
RUN apk add vim
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
#RUN apk add openrc
#RUN apk add curl
RUN mkdir /run/nginx
#RUN mv /var/lib/nginx/html/index.html /www

COPY ./nginx_config /etc/nginx/nginx.conf
COPY ./index.html /www

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]

#RUN rc-service nginx start