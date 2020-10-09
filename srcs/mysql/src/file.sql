CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
GRANT ALL PRIVILEGES ON wordpress.* TO 'zcolleen'@'%' IDENTIFIED BY 'mypass' WITH GRANT OPTION ;
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'zcolleen';
FLUSH PRIVILEGES;