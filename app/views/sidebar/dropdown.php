<div class="dropdown px-3">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?php echo $avatarUrl ?>" alt="" width="37" height="37" class="rounded-circle me-2">
        <strong id="account"><?php
            if (isset($_COOKIE['nickname'])) { echo $nickname; }
            else { echo $lang['notlogged']; }
        ?></strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profile-modal"><?php echo $lang['balance'] ?></button></li>
        <li><a class="dropdown-item" href="view.php?target=account&index=index.php"><?php echo $lang['accountdetail'] ?></a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
            <?php
            if(empty($_COOKIE['account'])){
                echo "<a class='dropdown-item' href='login'>" . $lang['login'] . "</a>";
            } else{
                echo "<a class='dropdown-item' onclick='logOut(\"account\"); logOut(\"nickname\"); logOut(\"number\"); logOut(\"address\"); logOut(\"id\"); logOut(\"avatar\"); location.reload();'>" . $lang['logout'] . "</a>";
            }
            ?>
        </li>
    </ul>
</div>

<hr class="my-4">