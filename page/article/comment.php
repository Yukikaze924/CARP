<?php
$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$database = "carp";

$id = $_COOKIE['id'];
$account = $_COOKIE['account'];
$nickname = $_COOKIE['nickname'];
$comment = $_POST['comment'];

$conn = new mysqli($host, $user, $password, $database);

$result = $conn->query("SELECT * FROM users WHERE account = '$account'");
$row = $result->fetch_assoc();
$avatarUrl = 'data:image/png;base64,' . $row['avatar'];

$conn->query("INSERT INTO comments (article, account, nickname, avatar, comment) VALUES ('$id', '$account', '$nickname', '$avatarUrl', '$comment');");

header("Location: index.php?id=$id");

$conn->close();
?>