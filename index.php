<?php

// if(isset($_SERVER['PATH_INFO'])) {
//     $controller = $_SERVER['PATH_INFO'];
//     $path = "app/controllers" . $controller . ".php";
//     include($path);
// } else {
//     header("Location: home");
// }

require_once __DIR__."/vendor/autoload.php";

use App\Core\App;

$app = new App();