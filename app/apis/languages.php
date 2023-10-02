<?php
require_once '../configs/constants.php';

class LanguageSelector {
    public function setLanguage() {
        if(isset($_GET['lang'])) {
            if($_GET['lang'] == 'en') {
                setcookie('language', 'English', strtotime('2030-01-01 00:00:00'), '/');
                header("Location: " . BASE_URL . "/home");
            } elseif($_GET['lang'] == 'fr') {
                setcookie('language', 'Français', strtotime('2030-01-01 00:00:00'), '/');
                header("Location: " . BASE_URL . "/home");
            } elseif($_GET['lang'] == 'ja') {
                setcookie('language', '日本語', strtotime('2030-01-01 00:00:00'), '/');
                header("Location: " . BASE_URL . "/home");
            } elseif($_GET['lang'] == 'zh') {
                setcookie('language', '中文', strtotime('2030-01-01 00:00:00'), '/');
                header("Location: " . BASE_URL . "/home");
            } elseif($_GET['lang'] == 'tw') {
                setcookie('language', '國語', strtotime('2030-01-01 00:00:00'), '/');
                header("Location: " . BASE_URL . "/home");
            }
        }
    }
}

$language = new LanguageSelector();
$language->setLanguage();