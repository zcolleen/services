FROM alpine

#RUN apk add openrc
RUN apk add vsftpd
#RUN openrc default
#RUN rc-update add vsftpd default
RUN echo -e "mypass\nmypass\n" | adduser zcolleen
RUN apk add openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/ftp.key -out /etc/ssl/ftp.crt -subj "/C=RF/ST=Moscow/L=Moscow/O=school21/OU=zcolleen/CN=my_domain"
RUN chown -R zcolleen:zcolleen /home/zcolleen/
RUN mkdir /tes
#VOLUME [ "/home/zcolleen" ]
COPY  ./src/vsftpd.conf ./etc/vsftpd/vsftpd.conf
#COPY ./src/start.sh ./

#RUN echo ${IP}
#RUN sed -i "s/MYIP/${IP}/g" ./etc/vsftpd/vsftpd.conf
EXPOSE 21 20 21000

#CMD [ "sh" ]
CMD [ "vsftpd", "/etc/vsftpd/vsftpd.conf" ]
#CMD [ "sh", "start.sh" ]