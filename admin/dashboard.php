<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location: '.base_url.'admin-signup.php');
}
?>

<a href="logout.php">logout</a>
