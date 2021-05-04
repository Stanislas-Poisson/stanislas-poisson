#!/bin/bash
# A shell script to export all data from MySQL database.

chmod -R 0777 ./.docker/tmp-data

# Get the database setted on the .env file
MYSQL_DATABASE=$(awk -F "[=]" '/MYSQL_DATABASE=/{print $(NF)}' ./.docker/tmp-data/.mysqlenv)

mysqldump --add-drop-table --host 127.0.0.1 --port 3306 -uroot -proot --default-character-set=utf8 --no-create-info=TRUE --skip-triggers --column-statistics=0 ${MYSQL_DATABASE} >./.docker/tmp-data/export.sql
