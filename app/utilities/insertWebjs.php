<?php
$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$database = "carp";
//
$address = $_POST['Address'];
$balance = $_POST['Balance'];

// 创建与数据库的连接
$conn = new mysqli($host, $user, $password, $database);

//确认数据非空非无效
if (empty($address) && empty($balance)) {
    $conn->close();
    exit();
} else{
    setcookie("account", $address, 0, '/');
}

//查询相同数据，以防止数据重合
$resultAddress = $conn->query("SELECT * FROM users WHERE account = '$address';");
if ($resultAddress->num_rows == 0) {
    $conn->query("INSERT INTO users (account, ethbalance) VALUES ('$address', '$balance');");
};

//更新
$resultBalance = $conn->query("SELECT * FROM users WHERE account = '$address' AND ethbalance = '$balance';");
if ($resultBalance->num_rows > 0) {
    $row = $resultBalance->fetch_assoc();
    $existingBalance = $row['ethbalance'];

    if ($existingBalance == $balance) {
        die("相同余额");
    } else{
        //更新
        $conn->query("UPDATE users SET ethbalance = '$balance' WHERE account = '$address';");
    }
} else {
    die("余额不存在");
};

//断开连接
$conn->close();
?>