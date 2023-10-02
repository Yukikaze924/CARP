<?php
    $rs3 = $conn->query("SELECT COUNT(*) FROM users");
    $r3 = $rs3->fetch_assoc();
?>

<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="zoom-out">

    <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $r3['COUNT(*)'] ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['registered'] ?></p>
        </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="7000" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['foudsraised'] ?></p>
        </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['countries'] ?></p>
        </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['members'] ?></p>
        </div>
        </div><!-- End Stats Item -->

    </div>

    </div>
</section><!-- End Stats Counter Section -->