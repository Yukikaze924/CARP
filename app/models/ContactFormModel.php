<?php 

namespace App\Model;

use mysqli;

class ContactFormModel {
    private $conn;
    public function __construct() {
        $this->conn = new mysqli(DB_URL, DB_USR, DB_PWD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function sendMessage($name, $email, $subject, $message) {
        $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        $result = $this->conn->query($sql);
        if ($result === true) {
            return ['status' => 'success'];
        } elseif ($result === false) {
            return ['status' => 'error'];
        }
    }
    public function __destruct() {
        $this->conn->close();
    }
}
?>