<?php

namespace App\Core;

class App {
    public function __construct() {
        $this->getPath();
    }
    public function getPath() {
        if(isset($_SERVER['PATH_INFO'])) {
            $controller = $_SERVER['PATH_INFO'];
            $path = "app/controllers" . $controller . ".php";
            include($path);
        } else{
            header("Location: home");
        }
    }
}