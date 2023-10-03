<?php 
require_once '../../app/utilities/conn.php';

$account = $_GET['id'];

$row = $conn->query("SELECT * FROM users WHERE account = '$account'")->fetch_assoc();

require_once '../../app/utilities/getAvatar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-icons/bootstrap-icons.min.css">

</head>
<body>

    <div class="user">
        <img src="<?php echo $avatarUrl ?>" alt="">
        <h2><?php echo $row['nickname'] ?></h2>
        <p><?php echo $row['address'] ?></p>
        <p class="bio"><?php $bio = (isset($row['bio'])) ? $row['bio'] : 'No Bio Yet!' ; echo $bio ?></p>

        <footer>
            <ul class="share-link">
                <li><a href="https://www.youtube.com/channel/UCfj8-BFX6DgxcALsfhtFj3w" target="_blank" title="油管"><span class="bi-youtube"></span></a></li>
                <li><a href="https://steamcommunity.com/profiles/76561198804477329/" target="_blank" title="Steam"><span class="bi-wechat"></span></a></li>
                <li><a href="https://twitter.com/BenjaminWi6190" target="_blank" title="推特" target="_blank"><span class="bi-twitter"></span></a></li>
                <li><a href="https://t.me/carporg" target="_blank" title="电报"><span class="bi-telegram"></span></a></li>
            </ul>
        </footer>

    </div>

</body>
</html>