<?php 

require_once '../../vendor/autoload.php';
require_once '../configs/constants.php';

use App\Model\ContactFormModel;

class ContactFormController {
    public function response() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $form = new ContactFormModel();

            $result = $form->sendMessage($name, $email, $subject, $message);
            if ($result['status'] == 'success') {
                include_once '../views/success/index.html';
            } else {
                echo 'Error';
            }
        }
    }
}

$form = new ContactFormController();
$form->response();

?>