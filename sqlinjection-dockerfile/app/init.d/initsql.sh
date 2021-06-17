#!/bin/bash

# --
# -- データベース設計
# --

# 初期Root設定 
MYSQL_ROOT_PASSWORD=passSample0701

# ユーザ作成
mysql -u root -ppassSample0701 -e "CREATE USER 'phpUser'@'localhost' IDENTIFIED BY 'myPassword';"

# データベースの作成
mysql -u root -ppassSample0701 -e 'create database userinfo;'

# テーブルの作成
mysql -u root -ppassSample0701 userinfo -e 'CREATE TABLE user(id int NOT NULL AUTO_INCREMENT, name varchar(20), age int default 0, location TEXT(30), PRIMARY KEY(id));'

# ユーザデータの追加
mysql -u root -ppassSample0701 userinfo -e "INSERT INTO user(name, age, location) VALUES('たろう', 21, '東京都新宿区1丁目2番地3'),('じろう', 43, '東京都新宿区2丁目3番地4'),('てつろう', 8, '東京都新宿区3丁目4番地5'),('きんたろう', 80, '東京都新宿区4丁目5番地6');"

# ユーザ権限追加
mysql -u root -ppassSample0701 -e "grant select on *.* to phpUser@localhost;"
