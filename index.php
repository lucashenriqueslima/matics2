<?php

session_start();
require __DIR__."/vendor/autoload.php";

use Source\Router;
site();
$router = new Router;

/**
 * Web
 */
$router->get("/",  "Web:login");


/**
 * Auth Web
 */
$router->post("/auth/login", "Auth:login");

$router->notFound(function(){
    $title = "TITULO";
    require_once __DIR__."/views/themes/404.php";  
});

$router->run();