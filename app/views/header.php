<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="container d-flex align-items-center justify-content-between">

    <a class="logo d-flex align-items-center me-auto me-lg-0">

    <img src="/img/sidebarmenu.svg" alt="" id="sidebartogglebtn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions">
    <h1>CARP<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
    <ul>
        <li><a href="<?php echo HOME_URL ?>"><?php echo $lang['home'] ?></a></li>
        <li><a href="<?php echo ABOUT_URL ?>"><?php echo $lang['about'] ?></a></li>
        <li><a href="<?php echo CONTACT_URL ?>"><?php echo $lang['contact'] ?></a></li>

        <li class="dropdown"><a href="#"><span><?php echo $lang['more'] ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
            <li><a href="view.php?target=Exhibition&index=index.html">展览</a></li>

            <li><a href="view.php?target=ChatExport&index=messages.html">Telegram备份</a></li>

            <li class="dropdown"><a href="#"><span><?php echo $lang['support'] ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="view.php?target=EthSupport&index=index.html"><?php echo $lang['ethsupport'] ?><span class="bi bi-wallet"></span></a></li>
                    <li class="dropdown"><a href="#"><span><?php echo $lang['moresupport'] ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="https://paypal.me/carporg?country.x=C2&locale.x=zh_XC">Paypal<span class="bi-paypal"></span></a></li>
                            <li><a href="#"><?php echo $lang['bankcard'] ?><span class="bi-credit-card"></span></a></li>
                            <li><a href="view.php?target=WechatSupport&index=index.html"><?php echo $lang['wechatpay'] ?><span class="bi-wechat"></span></a></li>
                            <li><a href="view.php?target=Maintenance&index=index.html"><?php echo $lang['alipay'] ?><span class="bi-alipay"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        </li>

    </ul>
    </nav><!-- .navbar -->

    <nav class="navbar">
        <ul>
            <li class="dropdown"><a><span style="margin-right:1rem"><?php echo $_COOKIE['language'] ?></span>  <img width="24" height="24" src="../../img/<?php echo $_COOKIE['language'] ?>.png" alt=""/><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="app/apis/languages.php?lang=en"> <span>English</span> <img width="24" height="24" src="../../img/English.png" alt=""/> </a></li>
                    <li><a href="app/apis/languages.php?lang=fr"> <span>Français</span> <img width="24" height="24" src="../../img/Français.png" alt=""/> </a></li>
                    <li><a href="app/apis/languages.php?lang=ja"> <span>日本語</span> <img width="24" height="24" src="../../img/日本語.png" alt=""/> </a></li>
                    <li><a href="app/apis/languages.php?lang=tw"> <span>國語</span> <img width="24" height="24" src="../../img/國語.png" alt=""/> </a></li>
                    <li><a href="app/apis/languages.php?lang=zh"> <span>中文</span> <img width="24" height="24" src="../../img/中文.png" alt=""/> </a></li>
                </ul>
            </li>
        </ul>
    </nav>

</div>

</header><!-- End Header -->