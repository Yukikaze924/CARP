<?php
    $host = "localhost";
    $port = "3306";
    $user = "root";
    $password = "";
    $database = "carp";

    if (empty($_COOKIE['account'])){
        header("Location: fail/index.html");
    } else{
        $account = $_COOKIE['account'];
        $nickname = $_COOKIE['nickname'];
    }

    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("连接数据库失败：" . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM users WHERE account = '$account';");
    $row = $result->fetch_assoc();
    
    if (empty($row['avatar'])) {
        $avatarUrl = '../../img/profile.png';
    } else {
        $avatarUrl = 'data:image/png;base64,' . $row['avatar'];
    }

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="component.css">

    <style>
        #hidden-submit{
            display: none;
        }
    </style>

</head>
<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="<?php echo $avatarUrl ?>" class="img-radius rounded" alt="User-Profile-Image" id="avatar">
                                        <form action="uploadAvatar.php" method="post" enctype="multipart/form-data" id="avatar-from">
                                            <div class="box">
                                                <input type="file" name="file" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
					                            <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="130px" height="40px" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>上传头像&hellip;</span></label>
                                                <button type="submit" id="hidden-submit"></button>
				                            </div>
                                        </form>
                                    </div>
                                    <h3 class="f-w-600"><?php echo $nickname ?></h3>
                                    <p><?php echo $row['bio'] ?></p>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">账号</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">邮箱</p>
                                            <h6 class="text-muted f-w-400"><?php echo $account ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">手机号</p>
                                            <h6 class="text-muted f-w-400"><?php echo $row['number'] ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">个人信息</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">区域</p>
                                            <h6 class="text-muted f-w-400"><?php echo $row['country'] ?> , <?php echo $row['region'] ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">地址</p>
                                            <h6 class="text-muted f-w-400"><?php echo $row['address'] ?></h6>
                                        </div>
                                    </div>
                                    <a href="../setting/index.php"><button class="custom-btn btn-1">编辑档案</button></a>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var form = document.getElementById('avatar-from');
        var fileInput = document.querySelector('input[type="file"]');

        fileInput.addEventListener('change', function() {
        form.submit();
        });
    </script>

</body>
</html>