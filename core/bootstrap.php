<?php
//con composer despues de terminar el proyecto puedes eliminar todos los require de boostrap
// require 'database/connection.php';
// require 'database/QueryBuilder.php';
// require 'Router.php';
// require 'app.php';
// require 'Auth.php';
// require 'models/Task.php';
// require 'models/user.php';
// require 'functions.php';


App::set("config",require 'config.php');

App:: set ('database' , new QueryBuilder(
    Connection::start(App::get('config')['database'])
));

if (App::get('config')['error_handling']) {
    //mostrar errores en el navegador 
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
}


