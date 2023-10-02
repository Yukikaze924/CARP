<?php 

require 'vendor/autoload.php';
require_once 'app/configs/constants.php';

use App\Model\LoginModel;

class LoginController {
    public function response() {

        include 'app/views/login/index.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $account = $_POST['account'];
            $password = $_POST['password'];

            $user = new LoginModel();
            $response = $user->login($account, $password);

            if ($response['login']) {
                // 用户验证成功，进行下一步操作
                setcookie('account', $account, 0, '/');
                setcookie('nickname', $response['nickname'], 0, '/');
                header("Location: " . HOME_URL);
            } else {
                // 用户验证失败，进行错误处理
                header("Location: " . BASE_URL . '/app/views/login/fail/index.php');
            }
        }
    }
}

$user = new LoginController();

$user->response();

?>