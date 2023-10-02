<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--网页基础预设-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['home'] ?> - CARP</title>

    <?php include 'app/views/link.php' ?>

    <link rel="stylesheet" href="../../css/jumbotron.css">

</head>

<body>
    <div class="container-full">

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

                            <ul class="nav nav-pills flex-column mb-auto px-2">
                                <li class="nav-item">
                                <a href="<?php echo HOME_URL ?>" class="nav-link active" aria-current="page">
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

            <main role="main">

                <?php include 'hero.php' ?>

                <?php include 'gallery.php' ?>

                <?php include 'statscounter.php' ?>

                <?php include 'event.php' ?>

                <div>
                    <div class="section-header" id="container">
                    <div class="title" id="moreinfo">
                        <p>See <span>Also...</span> </p>
                    </div>
                    </div>
                    <!--副展示框区域，后期预计import .md-->
                    <div class="row" id="row-article">
                    <?php
                    $rs2 = $conn->query("SELECT * FROM articles");
                    while($r2 = $rs2->fetch_assoc()){
                    ?>
                    <div class="col-md-3">
                        <h5><?php echo $r2['category'] ?></h5>
                        <img src="<?php echo $r2['cover'] ?>" alt="" class="img-fluid">
                        <div id="box-article">
                        <h2><?php echo $r2['title'] ?></h2>
                        <p><?php echo $r2['subtitle'] ?></p>
                        <p><a class="btn btn-secondary" href="page/article/index.php?id=<?php echo $r2['id'] ?>" role="button">开始阅读 &raquo;</a></p>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                </div>
            
            </main>

            <?php include 'app/views/footer.php' ?>

            <?php include 'app/views/cookie.php' ?>

            <?php include 'page/profile/profile.php' ?>

    </div>
    
    <?php include 'app/views/script.php' ?>

  </body>

</html>