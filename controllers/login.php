<?php

Auth::tryLogin($_POST['email'],$_POST['password']);

if(Auth::check()){
    return header('Location:index.php?url=inicio');
}
header('Location:index.php?url=login-form');