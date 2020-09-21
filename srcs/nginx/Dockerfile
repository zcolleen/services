FROM alpine

RUN apk update
RUN apk add nginx
#RUN apk add vim
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www


COPY ./nginx_config /etc/nginx/nginx.conf
COPY ./index.html /www/

#RUN rc-service nginx start