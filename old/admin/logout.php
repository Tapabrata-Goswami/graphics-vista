<?php

require_once(dirname(__DIR__) ."/config.php");

if(isset($_SESSION['username'])){
    session_destroy();
    header('Location:'.base_url.'admin-login.php');
}else{
    header('Location:'.base_url.'admin-login.php');
}