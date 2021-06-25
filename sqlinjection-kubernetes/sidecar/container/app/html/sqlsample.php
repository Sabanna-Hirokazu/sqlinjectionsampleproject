<?php
    $content = '';
    $content = $_POST['sql'];

    $connect_status = "不明";
    
    $link = mysqli_connect('sqlinjection-mysql', 'phpUser', 'myPassword', 'userinfo');
    $usernotfound = 0;

    // 接続状況をチェックします
    if (mysqli_connect_errno()) {
        $content = "再度接続して下さい";
        $connect_status = "接続失敗";
    } else {
        $connect_status = "接続完了";
        $username = $content;
    
        $query = "SELECT * FROM user where name = '";
        $query .= $username;
        $query .= "';";

        $content = "";

        if ($result = mysqli_query($link, $query)) {
                while ($row = mysqli_fetch_assoc($result)) {
                $usernotfound = 1;
                    $content .= $row["name"];
                $content .= " ";
                $content .= $row["age"];
                $content .= " ";
                $content .= $row["location"];
                $content .= "</br>";
                }
            if($usernotfound == 0){
                $content = $username."は見つかりませんでした";
            }
                // 結果セットを開放
                mysqli_free_result($result);
        }else{
            $content .= $username."は見つかりませんでした";
        }
        mysqli_close($link);
    }
?>

<!DOCTYPE html>
<html lang="jp">
        <head>
        <meta content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>サンプルSQLインジェクション</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        </head>
        <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">SQLインジェクション テストサイト</a>
            </div>
        </nav>

        <div class="container mt-3" style="margin-top: 10px;>
        <div class="card">
            <div class="card-body">
                <p class="h4">データベース接続状況 <?php echo($connect_status); ?></p>
            </div>
        </div>

        <div class="card">
        <div class="card-body">
        <p class="h3">個人情報</p>
                <p class="h5"><?php echo($content); ?></p>
        </div>
        </div>
        </div>
        </body>
</html>
