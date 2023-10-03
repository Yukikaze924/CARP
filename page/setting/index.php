<?php
include '../../app/configs/constants.php';

include '../../app/utilities/conn.php';

if(isset($_COOKIE['account'])) {
  $account = $_COOKIE['account'];
  $nickname = $_COOKIE['nickname'];
} else{
  $account = $lang['notlogged'];
  $nickname = $lang['notlogged'];
}

include '../../app/utilities/getUserRow.php';

include '../../app/utilities/getAvatar.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--css stylesheets-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">

</head>
<body>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" style="width: 120px; height: 120px;" src="<?php echo $avatarUrl ?>"><span class="font-weight-bold mt-2"><?php echo $nickname ?></span><span class="text-black-50"><?php echo $account ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">设置</h4>
                    </div>
                    <form method="post" action="insertProfile.php" id="updateProfile">
                        <div class="row mt-2">
                            <div class="col-md-8"><label class="labels">昵称</label><input type="text" class="form-control" placeholder="输入你的姓名" name="nickname" value="<?php echo $nickname ?>" required></div>
                            <div class="col-md-4"><label class="labels">年龄</label><input type="text" class="form-control" placeholder="" name="age" value="<?php echo $row['age'] ?>" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">手机号码</label><input type="text" class="form-control" placeholder="输入你的手机号码" value="<?php echo $row['number'] ?>" name="number" required></div>
                            <div class="col-md-12"><label class="labels">地址</label><input type="text" class="form-control" placeholder="输入你的地址" value="<?php echo $row['address'] ?>" name="address" required></div>
                            <div class="col-md-12"><label class="labels">简介</label><input type="text" class="form-control" placeholder="输入你的自我介绍(可选)" value="" name="bio"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">国家</label><input type="text" class="form-control" name="country" value="<?php echo $row['country'] ?>" required></div>
                            <div class="col-md-6"><label class="labels">州/省</label><input type="text" class="form-control" name="region" value="<?php echo $row['region'] ?>" required></div>
                        </div>
                        <div class="mt-5 text-center"><button class="profile-button" type="submit">保存设置</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>