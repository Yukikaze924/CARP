<?php error_reporting(E_ERROR);

include 'app/configs/constants.php';

include 'app/utilities/selectLang.php';

include 'app/utilities/conn.php';

if(isset($_COOKIE['account'])) {
  $account = $_COOKIE['account'];
  $nickname = $_COOKIE['nickname'];
} else{
  $account = $lang['notlogged'];
  $nickname = $lang['notlogged'];
}

include 'app/utilities/getUserRow.php';

include 'app/utilities/getAvatar.php';

$target = $_GET['target'];
$index = $_GET['index'];

$id = (isset($_GET['id'])) ? '?id='.$_GET['id'] : '';

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--网页基础预设-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $target ?> - CARP</title>

    <?php include 'app/views/link.php' ?>

    <link rel="stylesheet" href="css/jumbotron.css">

</head>

<body style="overflow:hidden;">
    <div class="container-full">

        <?php include 'page/profile/profile.php' ?>

        <!--页眉、侧边栏触发-->
        <div class="d-flex">

            <?php include 'app/views/header.php' ?>

            <!--侧边菜单栏-->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header d-flex justify-content-end">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <aside class="d-flex flex-column">

                        <?php include 'app/views/sidebar/dropdown.php' ?>

                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                            <a href="<?php echo HOME_URL ?>" class="nav-link link-dark" aria-current="page">
                                <i class="bi bi-house" style="margin-right:1rem"></i>
                                <?php echo $lang['home'] ?>
                            </a>
                            </li>
                            <li>
                            <a href="<?php echo ABOUT_URL ?>" class="nav-link link-dark">
                                <i class="bi bi-info-circle" style="margin-right:1rem"></i>
                                <?php echo $lang['about'] ?>
                            </a>
                            </li>
                            <li>
                            <a href="<?php echo CONTACT_URL ?>" class="nav-link link-dark">
                                <i class="bi bi-phone" style="margin-right:1rem"></i>
                                <?php echo $lang['contact'] ?>
                            </a>
                            </li>
                            <?php include 'app/views/sidebar/news.php' ?>
                        </ul>

                    </aside>
                </div>
            </div>

        </div>

        <!--主要区域，分页需注意剪切-->
        <main role="main" style="width: 100%; height: 100%;">

            <iframe src="page/<?php echo $target ?>/<?php echo $index ?><?php echo $id ?>" frameborder="0" style="width:100vw; height:100vh; margin-top:90px;"></iframe>

        </main>

        <?php include 'app/views/cookie.html' ?>

    </div>
    
    <?php include 'app/views/script.php' ?>

  </body>

</html>