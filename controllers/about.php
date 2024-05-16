<?php

if(Auth::check()){
    require 'view/about-view.php';
}else{
    header('Location:index.php?url=login-form');
    exit();
}

