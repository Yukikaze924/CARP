<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--网页基础预设-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['contact'] ?> - CARP</title>

    <?php include 'app/views/link.php' ?>

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

                <?php include 'contact.php' ?>
            
            </main>

            <?php include 'app/views/footer.php' ?>

            <?php include 'app/views/cookie.php' ?>

    </div>
    
    <?php include 'app/views/script.php' ?>

  </body>

</html>