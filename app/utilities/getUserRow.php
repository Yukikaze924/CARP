<?php
$row = $conn->query("SELECT * FROM users WHERE account = '$account'")->fetch_assoc();
?>