# sqlinjectionsampleproject

SQLインジェクションを体験できる環境の作成を行う
それぞれDocker、Docker Compose、Kubernetesで使用できるようになっている

## Run Container

Dockerを用いた場合:

    docker build -t (イメージ名) .
    docker run -d (イメージ名)

Docker-composeを用いた場合t:

    docker-compose up

Docker-composeを用いた場合t:

    docker-compose up

## Description

コンテナを立ち上げたら「データベースの中身を見る」と「ユーザ情報表示」の二つのボタンがある。
「データベースの中身を見る」には、データベースの中に入っている情報を見れる。
「ユーザ情報表示」は、上の入力ホームに入れたユーザ名の年齢、住所を確認することが出来る

Webのフォームのユーザ名にこちらを記載することでSQLを実行できてしまう:

    a' OR "a" = 'a