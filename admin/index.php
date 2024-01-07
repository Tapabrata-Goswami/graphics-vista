<?php

if(isset($_SESSION['username'])){
    header('Location: '.base_url.'admin/dashboard.php');
}else{
    header('Location: '.base_url.'admin-signup.php');
}
?>