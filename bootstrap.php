<?php

require __DIR__."/vendor/autoload.php";

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$route = new App\Router($method, $path);


$route->get('/login', 'App\Controller\LoginController::index');

$route->get('/', 'App\Controller\HomeController::index');