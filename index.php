<?php

// loaded init.php
require __DIR__ . '/app/init.php';

// check controller files on url
$route = array_filter(explode('/', $_SERVER['REQUEST_URI']));
if(SUBFOLDER){
    array_shift($route);
}
if(!route(0)){
    $route[0] = 'index';
}
if(!file_exists(get_controller_path(route(0)))){
    $route[0] = '404';
}

// find controller files on url
require get_controller_path(route(0));

?>