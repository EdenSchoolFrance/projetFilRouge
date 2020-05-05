<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';
require SRC . 'database.php';

$router = new App\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");

$router->get('/register', "AuthController@showRegister");
$router->get('/login', "AuthController@showLogin");
$router->get('/logout', "AuthController@logout");

$router->get('/contact', "ContactController@index");

$router->get('/administration', "AdminController@index");



$router->post('/register', "AuthController@register");
$router->post('/login', "AuthController@login");

$router->post('/contact', "ContactController@store");

$router->run();