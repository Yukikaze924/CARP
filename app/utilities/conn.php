<?php
$conn = new mysqli("Localhost", "root", "", "carp");
if ($conn->connect_error) {
    die("连接数据库失败：" . $conn->connect_error);
}
?>