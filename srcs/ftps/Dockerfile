FROM alpine

RUN apk add openrc
RUN apk add vsftpd
#RUN openrc default
RUN rc-update add vsftpd default
RUN echo -e "mypass\nmypass\n" | adduser zcolleen

COPY  ./src/vsftpd.conf ./etc/vsftpd/vsftpd.conf
COPY ./src/start.sh ./

EXPOSE 21

CMD [ "sh" ]
#CMD [ "sh", "start.sh" ]