<?php

require_once(dirname(__DIR__) ."/config.php");
session_start();

if(!isset($_SESSION["username"])){
    session_destroy();
    header('Location:'.base_url.'admin-login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ====including fontsawsome==== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ====including fontsawsome==== -->
    <!-- ====Including Style Sheet==== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ====Including Style Sheet==== -->
    <title>Dashboard</title>
</head>
<body>
    <section class="g-fl-container dashboard-container">
        <div class="side-bar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-container">
            <div class="products-upload">
                <form action="./AdminController/Main.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Product Name">
                    </div>
                    <div class="input-group">
                        <input type="number" name="price" placeholder="Price">
                    </div>
                    <div class="input-group">
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input-group">
                        <input type="file" name="image" id="">
                    </div>
                    <div class="input-group">
                        <input type="submit" name="upload-product" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

