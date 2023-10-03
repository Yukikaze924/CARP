<?php error_reporting(E_ERROR);
    include '../../app/utilities/conn.php';

    $account = $_COOKIE['account'];
    $nickname = $_COOKIE['nickname'];
    
    $result = $conn->query("SELECT * FROM users WHERE account = '$account'");
    $row = $result->fetch_assoc();

    if (empty($row['avatar'])) {
        $avatarUrl = '../../img/profile.png';
    } else {
        $avatarUrl = 'data:image/png;base64,' . $row['avatar'];
    }
?>

<?php 
    $result2 = $conn->query("SELECT * FROM chats ORDER BY sequence DESC LIMIT 1");
    $row2 = $result2->fetch_assoc();
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $content = $_POST['content'];
        $conn->query("INSERT INTO chats (account, nickname, content) VALUES ('$account', '$nickname', '$content')");
        header("Location: index.php", true, 302);
        exit;
    }
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>聊天室 - CARP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    html,
    body,
    div,
    span {
    height: 100%;
    width: 100%;
    overflow: hidden;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }

    body {
    background: url("../../img/bg_image.jpg") no-repeat fixed center;
    background-size: cover;
    }

    .fa-2x {
    font-size: 1.5em;
    }

    .app {
    position: relative;
    overflow: hidden;
    top: 19px;
    height: calc(100% - 38px);
    margin: auto;
    padding: 0;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
    }

    .app-one {
    background-color: #f7f7f7;
    height: 100%;
    overflow: hidden;
    margin: 0;
    padding: 0;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
    }

    .side {
    padding: 0;
    margin: 0;
    height: 100%;
    }
    .side-one {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
    z-index: 1;
    position: relative;
    display: block;
    top: 0;
    }

    .side-two {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
    z-index: 2;
    position: relative;
    top: -100%;
    left: -100%;
    -webkit-transition: left 0.3s ease;
    transition: left 0.3s ease;

    }


    .heading {
    padding: 10px 16px 10px 15px;
    margin: 0;
    height: 60px;
    width: 100%;
    background-color: #eee;
    z-index: 1000;
    }

    .heading-avatar {
    padding: 0;
    cursor: pointer;

    }

    .heading-avatar-icon img {
    border-radius: 50%;
    height: 40px;
    width: 40px;
    }

    .heading-name {
    padding: 0 !important;
    padding-top: 3px !important;
    cursor: pointer;
    }

    .heading-name-meta {
    font-weight: 700;
    font-size: 20px;
    padding: 5px;
    padding-bottom: 0;
    text-align: left;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: #000;
    display: block;
    }
    .heading-online {
    display: none;
    padding: 0 5px;
    font-size: 12px;
    color: #93918f;
    }
    .heading-compose {
    padding: 0;
    }

    .heading-compose i {
    text-align: center;
    padding: 5px;
    color: #93918f;
    cursor: pointer;
    }

    .heading-dot {
    padding: 0;
    margin-left: 10px;
    }

    .heading-dot i {
    text-align: right;
    padding: 5px;
    color: #93918f;
    cursor: pointer;
    }

    .searchBox {
    padding: 0 !important;
    margin: 0 !important;
    height: 60px;
    width: 100%;
    }

    .searchBox-inner {
    height: 100%;
    width: 100%;
    padding: 10px !important;
    background-color: #fbfbfb;
    }


    /*#searchBox-inner input {
    box-shadow: none;
    }*/

    .searchBox-inner input:focus {
    outline: none;
    border: none;
    box-shadow: none;
    }

    .sideBar {
    padding: 0 !important;
    margin: 0 !important;
    background-color: #fff;
    overflow-y: auto;
    border: 1px solid #f7f7f7;
    height: calc(100% - 120px);
    }

    .sideBar-body {
    position: relative;
    padding: 10px !important;
    border-bottom: 1px solid #f7f7f7;
    height: 72px;
    margin: 0 !important;
    cursor: pointer;
    }

    .sideBar-body:hover {
    background-color: #f2f2f2;
    }

    .sideBar-avatar {
    text-align: center;
    padding: 0 !important;
    }

    .avatar-icon img {
    border-radius: 50%;
    height: 49px;
    width: 49px;
    }

    .sideBar-main {
    padding: 0 !important;
    }

    .sideBar-main .row {
    padding: 0 !important;
    margin: 0 !important;
    }

    .sideBar-name {
    padding: 10px !important;
    }

    .name-meta {
    font-size: 100%;
    padding: 1% !important;
    text-align: left;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: #000;
    }

    .sideBar-time {
    padding: 10px !important;
    }

    .time-meta {
    text-align: right;
    font-size: 12px;
    padding: 1% !important;
    color: rgba(0, 0, 0, .4);
    vertical-align: baseline;
    }

    /*New Message*/

    .newMessage {
    padding: 0 !important;
    margin: 0 !important;
    height: 100%;
    position: relative;
    left: -100%;
    }
    .newMessage-heading {
    padding: 10px 16px 10px 15px !important;
    margin: 0 !important;
    height: 100px;
    width: 100%;
    background-color: #00bfa5;
    z-index: 1001;
    }

    .newMessage-main {
    padding: 10px 16px 0 15px !important;
    margin: 0 !important;
    height: 60px;
    margin-top: 30px !important;
    width: 100%;
    z-index: 1001;
    color: #fff;
    }

    .newMessage-title {
    font-size: 18px;
    font-weight: 700;
    padding: 10px 5px !important;
    }
    .newMessage-back {
    text-align: center;
    vertical-align: baseline;
    padding: 12px 5px !important;
    display: block;
    cursor: pointer;
    }
    .newMessage-back i {
    margin: auto !important;
    }

    .composeBox {
    padding: 0 !important;
    margin: 0 !important;
    height: 60px;
    width: 100%;
    }

    .composeBox-inner {
    height: 100%;
    width: 100%;
    padding: 10px !important;
    background-color: #fbfbfb;
    }

    .composeBox-inner input:focus {
    outline: none;
    border: none;
    box-shadow: none;
    }

    .compose-sideBar {
    padding: 0 !important;
    margin: 0 !important;
    background-color: #fff;
    overflow-y: auto;
    border: 1px solid #f7f7f7;
    height: calc(100% - 160px);
    }

    /*Conversation*/

    .conversation {
    padding: 0 !important;
    margin: 0 !important;
    height: 100%;
    /*width: 100%;*/
    border-left: 1px solid rgba(0, 0, 0, .08);
    /*overflow-y: auto;*/
    }

    .message {
    padding: 0 !important;
    margin: 0 !important;
    
    background-size: cover;
    overflow-y: auto;
    border: 1px solid #f7f7f7;
    height: calc(100% - 120px);
    }
    .message-previous {
    margin : 0 !important;
    padding: 0 !important;
    height: auto;
    width: 100%;
    }
    .previous {
    font-size: 15px;
    text-align: center;
    padding: 10px !important;
    cursor: pointer;
    }

    .previous a {
    text-decoration: none;
    font-weight: 700;
    }

    .message-body {
    margin: 0 !important;
    padding: 0 !important;
    width: auto;
    height: auto;
    }

    .message-main-receiver {
    /*padding: 10px 20px;*/
    max-width: 60%;
    }

    .message-main-sender {
    padding: 3px 20px !important;
    margin-left: 40% !important;
    max-width: 60%;
    }

    .message-text {
    margin: 0 !important;
    padding: 5px !important;
    word-wrap:break-word;
    font-weight: 200;
    font-size: 14px;
    padding-bottom: 0 !important;
    }

    .message-time {
    margin: 0 !important;
    margin-left: 50px !important;
    font-size: 12px;
    text-align: right;
    color: #9a9a9a;

    }

    .receiver {
    width: auto !important;
    padding: 4px 10px 7px !important;
    border-radius: 10px 10px 10px 0;
    background: #ffffff;
    font-size: 12px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    word-wrap: break-word;
    display: inline-block;
    }

    .sender {
    float: right;
    width: auto !important;
    background: #dcf8c6;
    border-radius: 10px 10px 0 10px;
    padding: 4px 10px 7px !important;
    font-size: 12px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    display: inline-block;
    word-wrap: break-word;
    }


    /*Reply*/

    .reply {
    height: 60px;
    width: 100%;
    background-color: #f5f1ee;
    padding: 10px 5px 10px 5px !important;
    margin: 0 !important;
    z-index: 1000;
    }

    .reply-emojis {
    padding: 5px !important;
    }

    .reply-emojis i {
    text-align: center;
    padding: 5px 5px 5px 5px !important;
    color: #93918f;
    cursor: pointer;
    }

    .reply-recording {
    padding: 5px !important;
    }

    .reply-recording i {
    text-align: center;
    padding: 5px !important;
    color: #93918f;
    cursor: pointer;
    }

    .reply-send {
    padding: 5px !important;
    }

    .reply-send i {
    text-align: center;
    padding: 5px !important;
    color: #93918f;
    cursor: pointer;
    }

    .reply-main {
    padding: 2px 5px !important;
    }

    .reply-main textarea {
    width: 100%;
    resize: none;
    overflow: hidden;
    padding: 5px !important;
    outline: none;
    border: none;
    text-indent: 5px;
    box-shadow: none;
    height: 100%;
    font-size: 16px;
    }

    .reply-main textarea:focus {
    outline: none;
    border: none;
    text-indent: 5px;
    box-shadow: none;
    }

    @media screen and (max-width: 700px) {
    .app {
        top: 0;
        height: 100%;
    }
    .heading {
        height: 70px;
        background-color: #009688;
    }
    .fa-2x {
        font-size: 2.3em !important;
    }
    .heading-avatar {
        padding: 0 !important;
    }
    .heading-avatar-icon img {
        height: 50px;
        width: 50px;
    }
    .heading-compose {
        padding: 5px !important;
    }
    .heading-compose i {
        color: #fff;
        cursor: pointer;
    }
    .heading-dot {
        padding: 5px !important;
        margin-left: 10px !important;
    }
    .heading-dot i {
        color: #fff;
        cursor: pointer;
    }
    .sideBar {
        height: calc(100% - 130px);
    }
    .sideBar-body {
        height: 80px;
    }
    .sideBar-avatar {
        text-align: left;
        padding: 0 8px !important;
    }
    .avatar-icon img {
        height: 55px;
        width: 55px;
    }
    .sideBar-main {
        padding: 0 !important;
    }
    .sideBar-main .row {
        padding: 0 !important;
        margin: 0 !important;
    }
    .sideBar-name {
        padding: 10px 5px !important;
    }
    .name-meta {
        font-size: 16px;
        padding: 5% !important;
    }
    .sideBar-time {
        padding: 10px !important;
    }
    .time-meta {
        text-align: right;
        font-size: 14px;
        padding: 4% !important;
        color: rgba(0, 0, 0, .4);
        vertical-align: baseline;
    }
    /*Conversation*/
    .conversation {
        padding: 0 !important;
        margin: 0 !important;
        height: 100%;
        /*width: 100%;*/
        border-left: 1px solid rgba(0, 0, 0, .08);
        /*overflow-y: auto;*/
    }
    .message {
        height: calc(100% - 140px);
    }
    .reply {
        height: 70px;
    }
    .reply-emojis {
        padding: 5px 0 !important;
    }
    .reply-emojis i {
        padding: 5px 2px !important;
        font-size: 1.8em !important;
    }
    .reply-main {
        padding: 2px 8px !important;
    }
    .reply-main textarea {
        padding: 8px !important;
        font-size: 18px;
    }
    .reply-recording {
        padding: 5px 0 !important;
    }
    .reply-recording i {
        padding: 5px 0 !important;
        font-size: 1.8em !important;
    }
    .reply-send {
        padding: 5px 0 !important;
    }
    .reply-send i {
        padding: 5px 2px 5px 0 !important;
        font-size: 1.8em !important;
    }
    }
</style>
</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container app">
<div class="row app-one">
<div class="col-sm-4 side">
<div class="side-one">
<div class="row heading">
<div class="col-sm-3 col-xs-3 heading-avatar">
<div class="heading-avatar-icon">
<img src="<?php echo $avatarUrl ?>">
</div>
</div>
<div class="col-sm-1 col-xs-1  heading-dot  pull-right">
<i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
</div>
<div class="col-sm-2 col-xs-2 heading-compose  pull-right">
<i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
</div>
</div>
<div class="row searchBox">
<div class="col-sm-12 searchBox-inner">
<div class="form-group has-feedback">
<input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
<span class="glyphicon glyphicon-search form-control-feedback"></span>
</div>
</div>
</div>
<div class="row sideBar">
<?php
    $rs = $conn->query("SELECT * FROM users");
    while($r=$rs->fetch_assoc()){
?>
<div class="row sideBar-body">
<div class="col-sm-3 col-xs-3 sideBar-avatar">
<div class="avatar-icon">
<img src="data:image/png;base64,<?php echo $r['avatar'] ?>">
</div>
</div>
<div class="col-sm-9 col-xs-9 sideBar-main">
<div class="row">
<div class="col-sm-8 col-xs-8 sideBar-name">
<span class="name-meta"><?php echo $r['nickname'] ?>
</span>
</div>
<div class="col-sm-4 col-xs-4 pull-right sideBar-time">
<span class="time-meta pull-right">18:18
</span>
</div>
</div>
</div>
</div>
<?php } ?>

</div>
</div>
<div class="side-two">
<div class="row newMessage-heading">
<div class="row newMessage-main">
<div class="col-sm-2 col-xs-2 newMessage-back">
<i class="fa fa-arrow-left" aria-hidden="true"></i>
</div>
<div class="col-sm-10 col-xs-10 newMessage-title">
Private
</div>
</div>
</div>
<div class="row composeBox">
<div class="col-sm-12 composeBox-inner">
<div class="form-group has-feedback">
<input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
<span class="glyphicon glyphicon-search form-control-feedback"></span>
</div>
</div>
</div>
<div class="row compose-sideBar">

<div class="row sideBar-body">
<div class="col-sm-3 col-xs-3 sideBar-avatar">
<div class="avatar-icon">
<img src="https://bootdey.com/img/Content/avatar/avatar1.png">
</div>
</div>
<div class="col-sm-9 col-xs-9 sideBar-main">
<div class="row">
<div class="col-sm-8 col-xs-8 sideBar-name">
<span class="name-meta">John Doe
</span>
</div>
<div class="col-sm-4 col-xs-4 pull-right sideBar-time">
<span class="time-meta pull-right">18:18
</span>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="col-sm-8 conversation">

<div class="row heading">
<div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
<div class="heading-avatar-icon">
<img src="../../icon.png">
</div>
</div>
<div class="col-sm-8 col-xs-7 heading-name">
<a class="heading-name-meta">大厅</a>
<span class="heading-online">Online</span>
</div>
<div class="col-sm-1 col-xs-1  heading-dot pull-right">
<i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
</div>
</div>

<div class="row message" id="conversation">

<div class="row message-previous">
<div class="col-sm-12 previous">
<a onclick="previous(this)" id="ankitjain28" name="20">
会议已开始...
</a>
</div>
</div>

<?php
    $rs = $conn->query("SELECT * FROM chats");
    while($r=$rs->fetch_assoc()){
?>
<div class="row message-body">
<div class="col-sm-12 message-main-<?php
    if($account == $r['account']){
        echo 'sender';
    } else{
        echo 'receiver';
    }
?>">
<div class="<?php
if($account == $r['account']){
    echo 'sender';
} else{
    echo 'receiver';
}
?>">
<div class="message-text">
<?php echo $r['content'] ?>
</div>
<span class="message-time pull-right">
by <?php echo $r['nickname'] ?>
</span>
</div>
</div>
</div>
<?php } ?>

</div>

<div class="row reply">
    <form action="index.php" method="post" id="content-form">
        <div class="col-sm-1 col-xs-1 reply-emojis">
        <i class="fa fa-smile-o fa-2x"></i>
        </div>
        <div class="col-sm-9 col-xs-9 reply-main">
        <textarea class="form-control" rows="1" id="comment" placeholder="发送你的消息..." name="content"></textarea>
        </div>
        <div class="col-sm-1 col-xs-1 reply-recording">
        <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
        </div>
        <div class="col-sm-1 col-xs-1 reply-send">
        <i class="fa fa-send fa-2x" aria-hidden="true" id="content-submit"></i>
        </div>
    </form>
</div>

</div>
</div>
</div>
<script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });
})
</script>
<script>
    var form = document.getElementById("content-form");

    // 监听点击事件
    document.addEventListener("click", function(event) {
    // 如果点击的是表单提交按钮，就提交表单
    if (event.target.id === "content-submit") {
        form.submit();
    }
    });
</script>

<script>
    var sequence = '<?php echo $row2['sequence'] ?>';

    console.log(sequence);

    function sendSequence() {
        var xhr = new XMLHttpRequest();
        var url = "polling.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText == "true") {
                location.reload();
            }
        }
        };
        xhr.send("sequence=" + sequence);
    }
    setInterval(sendSequence, 4000); // 每隔n秒发送一次xhr
</script>

</body>
</html>