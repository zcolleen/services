openrc default
/etc/init.d/mariadb setup
rc-service mariadb start
mysql < file.sql
mysql < wordpress.sql
rc-service mariadb stop
/usr/bin/mysqld_safe --datadir='/var/lib/mysql'