<?php

require_once("./../config.php");
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
                <form id="product-upload-submission" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="text" name="product_name" placeholder="Product Name">
                        <input type="hidden" name="req_type" value="product-upload-from-submit">
                    </div>
                    <div class="input-group">
                        <input type="number" name="product_price" placeholder="Price">
                    </div>
                    <div class="input-group">
                        <textarea name="product_description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input-group">
                        <input type="file" name="product_image">
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            // Product Upload From Submit
            $("#product-upload-submission").on("submit",function(e){
                e.preventDefault();
                $.ajax({
                    url:"./AdminController/Main.php",
                    type:"POST",
                    data : new FormData(this),
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function(data){
                        // console.log(data);
                        let msg =JSON.parse(data);
                        if(msg.status == '200'){
                            alert(msg.message);
                            $("#product-upload-submission").trigger("reset");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>

