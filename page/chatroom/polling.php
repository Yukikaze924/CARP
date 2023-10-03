<?php
    include '../../app/utilities/conn.php';

    $result = $conn->query("SELECT * FROM chats ORDER BY sequence DESC LIMIT 1");
    $row = $result->fetch_assoc();
    
    $previousSequence = $_POST['sequence'];
    
    $latestSequence = $row['sequence'];

    // 比较最新的id与前端发送的id，如果不一致则说明有新数据行产生
    if ($latestSequence > $previousSequence) {
        echo 'true';
    } else {
        echo json_encode(['newData' => false]);
    }

?>