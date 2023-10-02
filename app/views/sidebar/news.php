<li>
    <button class="btn btn-toggle align-items-center rounded collapsed nav-link link-dark" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true">
    <i class="bi-envelope-open" style="margin-right:1rem"></i>
    <?php echo $lang['message'] ?> <i class="bi bi-chevron-down dropdown-indicator"></i>
    </button>
    <div class="collapse" id="orders-collapse">
        <div class="list-group list-group-flush border-top border-bottom scrollarea">

        <?php 
            $rs = $conn->query("SELECT * FROM news");
            while($r = $rs->fetch_assoc()){
        ?>
            <a href="<?php echo $r['url'] ?>" class="list-group-item list-group-item-action py-3 lh-tight" target="_blank">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1"><?php echo $r['title'] ?></strong>
                <small class="text-muted"><?php echo $r['date'] ?></small>
            </div>
            <div class="col-10 mb-1 small"><?php echo $r['subtitle'] ?></div>
            </a>
        <?php } ?>

        </div>
    </div>
</li>