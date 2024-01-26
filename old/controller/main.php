<?php


require_once('../db_connect.php');

if(isset($_POST['admin-login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($conn,"SELECT * FROM `tb_admin` WHERE `email` = '".$username."'");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            if(password_verify($password, $row["password"])){
                session_start();
                $_SESSION["username"] = $row["email"];
                header('Location:'.base_url.'admin/index.php');
            }
        }
    }else{
        session_destroy();
        header('Location:'.base_url.'admin-login.php');
    }
}