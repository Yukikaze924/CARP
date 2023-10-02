<?php 

namespace App\Model;

use mysqli;

require_once 'app/configs/constants.php';

class RegisterModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_URL, DB_USR, DB_PWD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function register($account, $nickname, $password) {
        $result = $this->conn->query("SELECT * FROM users WHERE account = '$account'");
        if ($result->num_rows == 0) {
            // 用户注册成功
            $this->conn->query("INSERT INTO users (account, nickname, password) VALUES ('$account', '$nickname', '$password')");
            setcookie('account', $account, 0, '/');
            setcookie('nickname', $nickname, 0, '/');
            return ['register' => true];
        } else {
            // 用户注册失败
            return ['register' => false];
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>