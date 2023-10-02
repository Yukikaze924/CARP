<?php
require_once 'app/configs/constants.php';
class ContactController {
    public function index() {
        
        require_once 'app/utilities/selectLang.php';

        require_once 'app/utilities/conn.php';

        $account = (isset($_COOKIE['account'])) ? $_COOKIE['account'] : $lang['notlogged'];
        $nickname = (isset($_COOKIE['nickname'])) ? $_COOKIE['nickname'] : $lang['notlogged'];

        $row = $conn->query("SELECT * FROM users WHERE account = '$account'")->fetch_assoc();

        require_once 'app/utilities/getAvatar.php';

        include 'app/views/contact/index.php';
        
    }
}

$contact = new ContactController();
$contact->index();