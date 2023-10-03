<?php
include '../../app/utilities/conn.php';

//to regonize account
$account = $_COOKIE['account'];
//values that are going to be insert/update into the sql
$nickname = $_POST['nickname'];
$age = $_POST['age'];
$number = $_POST['number'];
$bio = $_POST['bio'];
$address = $_POST['address'];
$country = $_POST['country'];
$region = $_POST['region'];

if (empty($account)) {
    //
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>错误</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="error.css">
    </head>
    <body>
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>Oops!</h1>
                </div>
                <h2>出现了一些问题！</h2>
                <p>请先登录你的账号，或者注册一个新的</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
    //
    $conn->close();
} else {
    $resultAccount = $conn->query("SELECT * FROM users WHERE account = '$account'");
    if ($resultAccount->num_rows > 0) {
        $conn->query("UPDATE users SET nickname = '$nickname', age = '$age', number = '$number', bio = '$bio', address = '$address', country = '$country', region = '$region' WHERE account = '$account'");
        echo <<<HTML
            <!DOCTYPE html>
            <html lang="zh-CN">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>错误</title>
                <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
                <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
                <link type="text/css" rel="stylesheet" href="error.css">
            </head>
            <body>
                <div id="notfound">
                    <div class="notfound">
                        <div class="notfound-404">
                            <h1>It works!</h1>
                        </div>
                        <h2>信息已更新！</h2>
                        <p>请刷新你的页面! 或按下 <kbd>ctrl + F5</kbd> </p>
                    </div>
                </div>
            </body>
            </html>
        HTML;
    }
}

$conn->close();
?>