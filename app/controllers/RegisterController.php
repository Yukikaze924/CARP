<?php 

use App\Model\RegisterModel;

require 'vendor/autoload.php';

require_once 'app/configs/constants.php';

class RegisterController {
    public function response() {

        include 'app/views/signup/index.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nickname = $_POST['nickname'];
            $account = $_POST['account'];
            $password = $_POST['password'];

            $user = new RegisterModel();
            $result = $user->register($account, $nickname, $password);
            
            if ($result['register']) {
                // 用户验证成功，进行下一步操作
                header("Location: " . HOME_URL);
            } else {
                // 用户验证失败，进行错误处理
                header("Location: app/views/signup/fail/index.php");
            }
        }
    }
}

$user = new RegisterController();
$user->response();
?>