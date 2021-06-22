# --
# -- データベース設計
# --

USE userinfo;

# テーブルの作成
CREATE TABLE user(id int NOT NULL AUTO_INCREMENT, name varchar(20), age int default 0, location TEXT(30), PRIMARY KEY(id));

# ユーザデータの追加
INSERT INTO user(name, age, location) VALUES('たろう', 21, '東京都新宿区1丁目2番地3');
INSERT INTO user(name, age, location) VALUES('じろう', 43, '東京都新宿区2丁目3番地4');
INSERT INTO user(name, age, location) VALUES('てつろう', 8, '東京都新宿区3丁目4番地5');
INSERT INTO user(name, age, location) VALUES('きんたろう', 80, '東京都新宿区4丁目5番地6');
