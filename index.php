<?php

require "functions.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/'){
    return 'controllers/index.php';
}else if ($uri === '/about'){
    return 'controllers/about.php';
}

//dd($_SERVER);