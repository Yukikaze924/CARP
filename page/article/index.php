<?php

include '../../app/utilities/conn.php';

$id = $_GET['id'];

setcookie('id', $id, 0, '/');

if(empty($_COOKIE['account'])) {
  echo '<style>#comment-form { display: none; }</style>';
} else {
  $account = $_COOKIE['account'];
  $nickname = $_COOKIE['nickname'];
}

$result = $conn->query("SELECT * FROM articles WHERE id=$id");
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $row['title'] ?> - CARP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="../../index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>CARP</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../home">主页</a></li>
          <li><a href="../../about">关于</a></li>
          <li><a href="../../contact">联系我们</a></li>

          <li class="dropdown"><a href="category.html"><span>支持</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="../supportus/index.html">虚拟货币支持</a></li>
              <li class="dropdown"><a href="#"><span>更多支持</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="https://paypal.me/carporg?country.x=C2&locale.x=zh_XC">Paypal<span class="bi-paypal"></span></a></li>
                  <li><a href="#">银行卡<span class="bi-credit-card"></span></a></li>
                  <li><a href="#">微信<span class="bi-wechat"></span></a></li>
                  <li><a href="#">支付宝<span class="bi-alipay"></span></a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="https://www.youtube.com/channel/UCfj8-BFX6DgxcALsfhtFj3w" class="mx-2"><span class="bi-youtube"></span></a>
        <a href="https://twitter.com/BenjaminWi6190" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="https://t.me/carporg" class="mx-2"><span class="bi-telegram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.php" method="get" class="search-form" id="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control" id="search-form-input" name="keyword">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date"><?php echo $row['category'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row['date'] ?></span></div>
              <h1 class="mb-5"><?php echo $row['title'] ?></h1>
              <p class="mb-5"><?php echo $row['subtitle'] ?></p>
              <!--<figure class="my-4 mb-5">
                <img src="" alt="" class="img-fluid">
              </figure>-->
              <p class="mb-5"><?php echo $row['chapter'] ?></p>
            </div><!-- End Single Post Content -->

            <!-- ======= Comments ======= -->
            <div class="comments">
              <h5 class="comment-title py-4 mt-5"><?php echo '评论  ' . $conn->query("SELECT COUNT(*) FROM comments WHERE article = $id")->fetch_assoc()['COUNT(*)'] ?> </h5>
              <?php
              $rs = $conn->query("SELECT * FROM comments WHERE article=$id");
              while($r=$rs->fetch_assoc()){
              ?>
              <div class="comment d-flex mb-4">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm rounded-circle">
                    <a href="/view.php?target=user&index=index.php&id=<?php echo $r['account'] ?>" target="_blank"><img class="avatar-img rounded-circle" src="<?php echo $r['avatar'] ?>" alt="" class="img-fluid"></a>
                  </div>
                </div>
                <div class="flex-shrink-1 ms-2 ms-sm-3">
                  <div class="comment-meta d-flex">
                    <h6 class="me-2"><?php echo $r['nickname'] ?></h6>
                    <span class="text-muted">said:</span>
                  </div>
                  <div class="comment-body">
                    <?php echo $r['comment'] ?>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div><!-- End Comments -->

            <!-- ======= Comments Form ======= -->
            <div class="comment-form">
              <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                  <h5 class="comment-title mb-3"><?php
                    if(empty($_COOKIE['account'])) { echo '登录/注册后再评论'; } else { echo '留下你的评论'; }
                  ?></h5>
                  <div class="row" id="comment-form">
                  <form action="comment.php" method="post">
                    <div class="col-12 mb-3">
                      <textarea class="form-control" id="comment-message" placeholder="Enter your comment" cols="30" rows="10" name="comment"></textarea>
                    </div>
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary" value="发布">
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div><!-- End Comments Form -->

          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">你可能喜欢...</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <?php
                $result2 = $conn->query("SELECT * FROM articles");
                while($row2 = $result2->fetch_assoc()){
                ?>
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date"><?php echo $row2['category'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row2['date'] ?></span></div>
                    <h2 class="mb-2"><a href="index.php?id=<?php echo $row2['id'] ?>"><?php echo $row2['title'] ?></a></h2>
                    <span class="author mb-3 d-block"><?php echo $row2['subtitle'] ?></span>
                </div>
                <?php } ?>
                <!-- End Popular -->

              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">视频</h3>
              <div class="video-post">
                <a href="https://youtu.be/8YzIAKNv0SU" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Video -->

            <div class="aside-block">
              <h3 class="aside-title">分类</h3>
              <ul class="aside-links list-unstyled">
                <?php
                $result3=$conn->query("SELECT * FROM articles");
                while($row3=$result3->fetch_assoc()){
                ?>
                <li><a href="category.html"><i class="bi bi-chevron-right"></i> <?php echo $row3['category'] ?></a></li>
                <?php } ?>
              </ul>
            </div><!-- End Categories -->

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">关于CARP</h3>
            <p>CARP是一家致力于保护猫狗等伴侣动物权益的非营利组织。我们坚信，作为人类最亲密的伙伴和宠物，猫狗应该享有尊严、尊重和适当的照顾。我们的使命是通过教育、倡导和实际行动，为猫狗争取更好的生活质量，并推动社会对动物权益的关注和保护</p>
            <p><a href="../../about.php" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-4">
            <h3 class="footer-heading">导航</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="../../home"><i class="bi bi-chevron-right"></i> 主页</a></li>
              <li><a href="../../about"><i class="bi bi-chevron-right"></i> 关于</a></li>
              <li><a href="../../contact"><i class="bi bi-chevron-right"></i> 联系我们</a></li>
            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Recent Posts</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <?php
              $result4 = $conn->query("SELECT * FROM articles");
              while($row4 = $result4->fetch_assoc()){
              ?>
              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="<?php echo $row4['cover'] ?>" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date"><?php echo $row4['category'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row4['date'] ?></span></div>
                    <span><?php echo $row4['title'] ?></span>
                  </div>
                </a>
              </li>
              <?php } ?>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>C.A.R.P.</span></strong> All Rights Reserved
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
              Designed by <a href="">Yukikaze</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
      var input = document.getElementById("search-form-input");
  
      input.addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) { // 如果按下的是回车键
          document.getElementById("search-form").submit(); // 提交表单
        }
      });
  </script>

</body>

</html>