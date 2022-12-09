<?php

require 'application\lib\dev.php';

use application\core\Router;
//use application\lib\Db;



spl_autoload_register(function ($class) {
    $path = str_replace('\\','/',$class.'.php');



    if (file_exists($path)) {
        require_once $path;
    }
});


session_start();


//echo session_id();
//require 'application/style/Router.php';

$router = new Router;
$router ->run();