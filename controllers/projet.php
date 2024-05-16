<?php

if(Auth::check()){
    require 'view/projet-view.php';
}else{
    header('Location:index.php?url=login-form');
    exit();
}