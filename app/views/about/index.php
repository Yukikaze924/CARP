<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--网页基础预设-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $lang['about'] ?> - CARP</title>

    <?php include 'app/views/link.php' ?>

    <style>
      @media(max-width: 769px){
        .row .about-img{
          background: none;
        }
      }
    </style>

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
                            <a href="<?php echo HOME_URL ?>" class="nav-link link-dark" aria-current="page">
                                <i class="bi bi-house" style="margin-right:1rem"></i>
                                <?php echo $lang['home'] ?>
                            </a>
                            </li>
                            <li>
                            <a href="<?php echo ABOUT_URL ?>" class="nav-link active">
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
        <main role="main">

            <section class="py-5 mt-5">
                <div class="container">
                    <div class="row align-items-center gx-4">
                        <div class="col-md-5">
                            <div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="../../img/about-image.png" alt=""></div>
                        </div>
                        <div class="col-md-6 offset-md-1">
                            <div class="ms-md-2 ms-lg-5" data-aos="fade-up">
                                <span class="text-muted"><?php echo $lang['about'] ?></span>
                                <h2 class="display-5 fw-bold"><?php echo $lang['ourstory'] ?></h2>
                                <p class="lead"><?php echo $lang['intro'] ?></p>
                                <p class="lead mb-0"><?php echo $lang['2ndintro'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
              <div class="container" data-aos="fade-up">

                <div class="section-header">
                  <h2>more</h2>
                  <p>Learn more <span>About us</span></p>
                </div>

                <div class="row gy-4">
                  <div class="col-lg-7 position-relative about-img" style="background-image: url(../../img/about-image2.png);" data-aos="fade-up" data-aos-delay="150">
                    <div class="call-us position-absolute">
                      <h4><?php echo $lang['contact'] ?></h4>
                      <p>+1 604 924 1114</p>
                    </div>
                  </div>
                  <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                      <p class="fst-italic h4">
                        <?php echo $lang['titfortat'] ?>
                      </p>
                      <ul>
                        <li><i class="bi bi-check2-all"></i><?php echo $lang['tft1'] ?></li>
                        <li><i class="bi bi-check2-all"></i><?php echo $lang['tft2'] ?></li>
                        <li><i class="bi bi-check2-all"></i><?php echo $lang['tft3'] ?></li>
                      </ul>
                      <audio controls>
                        <source src="../assets/audio/fr-broadcast.mp3" type="audio/mpeg">
                      </audio>
                      <p>
                        <blockquote class="blockquote-footer"><?php echo $lang['awfc-audio-bq'] ?></blockquote>
                      </p>
                      <div class="position-relative mt-4">
                        <img src="https://pi.tedcdn.com/r/pl.tedcdn.com/social/ted-logo-fb.png?v=wAff13s?" class="img-fluid" alt="">
                        <a href="https://youtu.be/AkWCp8Q1Z0I" class="glightbox play-btn"></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </section><!-- End About Section -->

            <?php include 'member.php' ?>

            <?php include 'testimonial.php' ?>

            <!-- ======= Menu Section ======= -->
            <section id="menu" class="menu">
              <div class="container" data-aos="fade-up">

                <div class="section-header">
                  <h2>持械保护动物</h2>
                  <p>保护动物前，先 <span>保护好自己</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                  <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                      <h4>手枪</h4>
                    </a>
                  </li><!-- End tab nav item -->

                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                      <h4>步枪</h4>
                    </a><!-- End tab nav item -->

                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                      <h4>弹药</h4>
                    </a>
                  </li><!-- End tab nav item -->

                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                      <h4>其他</h4>
                    </a>
                  </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                  <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                      <p>Pistols</p>
                      <h3>手枪</h3>
                    </div>

                    <div class="row gy-5">

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/handguns/semi-auto/glock-g23-gen4-(le-trade-in)-40-s-w-striker-13-rounds-4-02-barrel-used?p=888604" class="glightbox"><img src="../assets/img/menu/g23gen4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>GLOCK G23 GEN 4</h4>
                        <p class="ingredients">
                          .40 S&W <br>
                          STRIKER <br>
                          13 ROUNDS <br>
                          4.02 BARREL
                        </p>
                        <p class="price">
                          $399.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/handguns/semi-auto/sig-sauer-p320-nitron-compact-9mm-luger-(9x19-para)-semi-automatic-15-rounds-not-specified-used?p=909254" class="glightbox"><img src="../../assets/img/menu/p320.png" class="menu-img img-fluid" alt=""></a>
                        <h4>SIG SAUER P320</h4>
                        <p class="ingredients">
                          9MM LUGER (9X19 PARA) <br>
                          SEMI AUTOMATIC <br>
                          15 ROUNDS <br>
                          NOT SPECIFIED
                        </p>
                        <p class="price">
                          $499.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/handguns/semi-auto/springfield-armory-operator-45-acp-semi-automatic-8-rounds-5-barrel-used?p=935464" class="glightbox"><img src="../../assets/img/menu/m1911.png" class="menu-img img-fluid" alt=""></a>
                        <h4>SPRINGFIELD ARMORY OPERATOR</h4>
                        <p class="ingredients">
                          .45 ACP <br>
                          SEMI AUTOMATIC <br>
                          8 ROUNDS <br>
                          5 BARREL
                        </p>
                        <p class="price">
                          $1099.99
                        </p>
                      </div><!-- Menu Item -->

                    </div>
                  </div><!-- End Starter Menu Content -->

                  <div class="tab-pane fade" id="menu-breakfast">

                    <div class="tab-header text-center">
                      <p>Rifles</p>
                      <h3>步枪</h3>
                    </div>

                    <div class="row gy-5">

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/rifles/semi-auto/palmetto-state-armory-pa-15-5-56x45mm-nato-semi-automatic-30-rounds-not-specified-used?p=917030" class="glightbox"><img src="../../assets/img/menu/pa15.png" class="menu-img img-fluid" alt=""></a>
                        <h4>PALMETTO STATE ARMORY PA-15</h4>
                        <p class="ingredients">
                          5.56X45MM NATO <br>
                          DIRECT IMPINGEMENT <br>
                          30 ROUNDS <br>
                          16 BARREL
                        </p>
                        <p class="price">
                          $549.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/rifles/semi-auto/century-arms-cgr-7-62x39mm-semi-automatic-30-rounds-16-5-barrel-new?p=893751" class="glightbox"><img src="../../assets/img/menu/cgrak.png" class="menu-img img-fluid" alt=""></a>
                        <h4>CENTURY ARMS CGR AK</h4>
                        <p class="ingredients">
                          7.62X39MM <br>
                          SEMI AUTOMATIC <br>
                          30 ROUNDS <br>
                          16.5 BARREL
                        </p>
                        <p class="price">
                          $954.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/shotguns/pump-action/remington-870-express-pump-action-3-rounds-27-5-barrel-used?p=865215" class="glightbox"><img src="../../assets/img/menu/r870.png" class="menu-img img-fluid" alt=""></a>
                        <h4>REMINGTON 870 EXPRESS</h4>
                        <p class="ingredients">
                          12 GA <br>
                          PUMP ACTION <br>
                          4 ROUNDS <br>
                          20 BARREL
                        </p>
                        <p class="price">
                          $449.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/firearms/shotguns/pump-action/benelli-super-nova-pump-action-6-rounds-28-barrel-used?p=807887" class="glightbox"><img src="../../assets/img/menu/benelli.png" class="menu-img img-fluid" alt=""></a>
                        <h4>BENELLI SUPER NOVA</h4>
                        <p class="ingredients">
                          12 GA <br>
                          PUMP ACTION <br>
                          6 ROUNDS <br>
                          28 BARREL
                        </p>
                        <p class="price">
                          $499.99
                        </p>
                      </div><!-- Menu Item -->

                    </div>
                  </div><!-- End Breakfast Menu Content -->

                  <div class="tab-pane fade" id="menu-lunch">

                    <div class="tab-header text-center">
                      <p>Ammo</p>
                      <h3>弹药</h3>
                    </div>

                    <div class="row gy-5">

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/ammo/handgun-ammo/pmc-battle-pack-9mm-luger-(9x19-para)-115-grain-full-metal-jacket-(fmj)-300-rounds-new?p=32571" class="glightbox"><img src="../../assets/img/menu/pmc9mm.png" class="menu-img img-fluid" alt=""></a>
                        <h4>PMC BATTLE PACK MFR 9mm</h4>
                        <p class="ingredients">
                          9MM LUGER (9X19 PARA)
                          115 GRAIN
                          FULL METAL JACKET (FMJ)
                          300 ROUNDS
                        </p>
                        <p class="price">
                          $99.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/ammo/handgun-ammo/federal-american-eagle-9mm-luger-(9x19-para)-124-grain-full-metal-jacket-(fmj)-50-rounds-new?p=30829" class="glightbox"><img src="../../assets/img/menu/federal9mm.png" class="menu-img img-fluid" alt=""></a>
                        <h4>FEDERAL AMERICAN EAGLE MFR 9mm</h4>
                        <p class="ingredients">
                          9MM LUGER (9X19 PARA)
                          124 GRAIN
                          FULL METAL JACKET (FMJ)
                          50 ROUNDS
                        </p>
                        <p class="price">
                          $18.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/ammo/rifle-ammo/pmc-x-tac-5-56x45mm-nato-55-grain-full-metal-jacket-boat-tail-(fmjbt)-20-rounds-new?p=31542" class="glightbox"><img src="../../assets/img/menu/pmc556mm.png" class="menu-img img-fluid" alt=""></a>
                        <h4>PMC X-TAC MFR 5.56mm</h4>
                        <p class="ingredients">
                          5.56X45MM NATO
                          55 GRAIN
                          FULL METAL JACKET BOAT TAIL (FMJBT)
                          20 ROUNDS
                        </p>
                        <p class="price">
                          $8.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/ammo/shotgun-ammo/federal-power-shok-12-ga-2-75-in-rifled-slug-5-rounds-new?p=30784" class="glightbox"><img src="../../assets/img/menu/federal12ga.png" class="menu-img img-fluid" alt=""></a>
                        <h4>FEDERAL POWER-SHOK 12 GA</h4>
                        <p class="ingredients">
                          12 GA
                          2.75 IN.
                          RIFLED SLUG
                          5 ROUNDS
                        </p>
                        <p class="price">
                          $12.95
                        </p>
                      </div><!-- Menu Item -->

                    </div>
                  </div><!-- End Lunch Menu Content -->

                  <div class="tab-pane fade" id="menu-dinner">

                    <div class="tab-header text-center">
                      <p>the Others</p>
                      <h3>其他</h3>
                    </div>

                    <div class="row gy-5">

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/knives-and-tools/knives/ka-bar-becker--new?p=280283" class="glightbox"><img src="../../assets/img/menu/bk7.png" class="menu-img img-fluid" alt=""></a>
                        <h4>KA-BAR BECKER BK7</h4>
                        <p class="ingredients">                         
                        </p>
                        <p class="price">
                          $113.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/knives-and-tools/knives/ka-bar-kukri--new?p=271484" class="glightbox"><img src="../../assets/img/menu/1249.png" class="menu-img img-fluid" alt=""></a>
                        <h4>KA-BAR KUKRI 1249</h4>
                        <p class="ingredients">
                        </p>
                        <p class="price">
                          $65.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="../../assets/img/menu/et17070.png" class="menu-img img-fluid" alt=""></a>
                        <h4>GLOCK ENTRENCHING TOOL ET17070</h4>
                        <p class="ingredients">
                        </p>
                        <p class="price">
                          $96.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/optics/red-dot-scopes/ncstar-multi-reticle-1x-24x34mm-3-moa-new?p=52546" class="glightbox"><img src="../../assets/img/menu/d4rgb.png" class="menu-img img-fluid" alt=""></a>
                        <h4>NCSTAR MULTI-RETICLE D4RGB</h4>
                        <p class="ingredients">
                        </p>
                        <p class="price">
                          $60.99
                        </p>
                      </div><!-- Menu Item -->

                      <div class="col-lg-4 menu-item">
                        <a href="https://www.guns.com/optics/red-dot-scopes/eotech-xps2-1x-30x23mm-1-moa-new?p=49812" class="glightbox"><img src="../../assets/img/menu/xps2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>EOTECH XPS2</h4>
                        <p class="ingredients">
                        </p>
                        <p class="price">
                          $599.00
                        </p>
                      </div><!-- Menu Item -->

                    </div>
                  </div><!-- End Dinner Menu Content -->

                </div>

              </div>
            </section><!-- End Menu Section -->

        </main>
        
        <?php include 'app/views/footer.php' ?>

        <?php include 'app/views/cookie.php' ?>

        <?php include 'app/views/toast.php' ?>

    </div>
    
    <?php include 'app/views/script.php' ?>

  </body>
</html>