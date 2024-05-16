<?php
require_once("core/bootstrap.php");

$user=User::find($_POST['id']);
$user->delete();



header('Location:index.php?url=inicio ');