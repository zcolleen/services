CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'root';
FLUSH PRIVILEGES;