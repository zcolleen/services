FROM alpine

RUN apk add openrc
RUN apk add vsftpd
#RUN openrc default
RUN rc-update add vsftpd default

COPY ./src/start.sh ./

EXPOSE 21

CMD [ "sh", "start.sh" ]