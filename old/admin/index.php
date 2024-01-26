<?php

session_start();


if(isset($_SESSION["username"])){
    require_once('../config.php');
    header('Location:'.base_url.'admin/dashboard.php');
}else{
    session_destroy();
    header('Location:'.base_url.'admin-login.php');
}