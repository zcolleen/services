FROM alpine

RUN apk add vsftpd
RUN echo -e "mypass\nmypass\n" | adduser zcolleen
RUN apk add openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/ftp.key -out /etc/ssl/ftp.crt -subj "/C=RF/ST=Moscow/L=Moscow/O=school21/OU=zcolleen/CN=my_domain"
RUN chown -R zcolleen:zcolleen /home/zcolleen/
RUN mkdir /tes

COPY  ./src/vsftpd.conf ./etc/vsftpd/vsftpd.conf


EXPOSE 21 20 21000

CMD [ "vsftpd", "/etc/vsftpd/vsftpd.conf" ]
