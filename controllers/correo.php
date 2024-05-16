<?php

if(Auth::check()){
    require 'view/correo-view.php';
}else{
    header('Location:index.php?url=login-form');
    exit();
}