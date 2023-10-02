<?php
    if (empty($row['avatar'])) {
        $avatarUrl = '../../img/profile.png';
    } else {
        $avatarUrl = 'data:image/png;base64,' . $row['avatar'];
    }
?>