<?php
require_once ("core/bootstrap.php");

if (Auth::check()) {
    $user = User::all();
    $todo = array_filter($user);
    require 'view/inicio-view.php';
} else {
    header('Location: index.php?url=login-form');
    exit(); // Asegura que el script se detenga después de la redirección
}


