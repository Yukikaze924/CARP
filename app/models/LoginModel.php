<?php 

namespace App\Model;

use mysqli;

require_once 'app/configs/constants.php';

class LoginModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_URL, DB_USR, DB_PWD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function login($account, $password) {
        $result = $this->conn->query("SELECT * FROM users WHERE account='$account'");
        $row = $result->fetch_assoc();
        if ($result->num_rows > 0 && $password == $row['password']) {
            // 用户验证成功
            return ['login' => true, 'nickname' => $row['nickname']];
        } else {
            // 用户验证失败
            return ['login' => false];
        }
    }
    
    public function __destruct() {
        $this->conn->close();
    }
}
?>