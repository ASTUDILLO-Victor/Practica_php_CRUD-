<?php
require "vendor/autoload.php";
require 'core/bootstrap.php';
// require 'models/Task.php';

$routes = 
[
    'login-form' => 'controllers/login-form.php',
    'login'=> 'controllers/login.php',
    'inicio'=>'controllers/inicio.php',
    'logout'=> 'controllers/logout.php',
    'about'=> 'controllers/about.php',
    'projet'=> 'controllers/projet.php',
    'correo'=> 'controllers/correo.php',
    'eliminar' => 'controllers/delete-user.php',
    'crear' => 'controllers/create-user.php',
    'actualizar' => 'controllers/toggle-user.php',
];
$url = isset($_GET['url']) ? $_GET['url'] : 'login-form';
// $url = trim($_SERVER['REQUEST_URI'], '/');
$router = new Router;
$router->register($routes);
require $router->handle($url);