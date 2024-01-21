<?php

error_reporting(E_ALL);
require_once("./config.php");
session_start();

// if(!isset($_SESSION["username"]) || isset($_SESSION["username"])){
//     session_destroy();
//     header('Location:'.base_url.'admin-login.php');
// }

if(isset($_POST['upload-product'])){
    print_r($_POST);
}