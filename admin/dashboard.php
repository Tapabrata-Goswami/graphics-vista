<?php

session_start();

require_once("../config.php");

if(!isset($_SESSION['username'])){
    header('Location:'.base_url.'admin-signup.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ==== Google Fonts ==== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- ==== Google Fonts ==== -->
    <!-- ===== Fontawsome icon ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===== Fontawsome icon ===== -->
    <!-- ===== Bootstrap Stylesheet ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- ===== Bootstrap Stylesheet ===== -->
    <!-- ===== Stylesheet ===== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ===== Stylesheet ===== -->

    <title>Dashboard</title>
</head>

<body>

    <section class="container-fluid main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <ul>
                        <li ><i class="fa-solid fa-house"></i> Dashboard</li>
                        <li><i class="fa-solid fa-user"></i> Users</li>
                        <li id="active"><i class="fa-solid fa-box-archive"></i> Products</li>
                        <li><i class="fa-solid fa-layer-group"></i> Categories</li>
                        
                    </ul>
                </div>
                <div class="col-md-10 main-body">
                    <div class="products">
                        <div class="products-header d-flex justify-content-between">
                            <h4 class="heading-pages">Products</h4>
                            <div class="products-content"><button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Products</button></div>
                        </div>
                        <div class="row add-products-from-container gap-2">
                            <div class="col-md child">
                                <h5 class="box-heading">Description</h5>
                                <div class="products-area-upload mb-3">
                                    <div class="form-group mb-2">
                                      <label for="exampleFormControlInput1">Product Name</label>
                                      <input type="text" class="form-control" id="product_name" >
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Product Description</label>
                                      <textarea class="form-control" id="product_description" rows="3"></textarea>
                                    </div>
                                </div>
                                <h5 class="box-heading">Category</h5>
                                <div class="products-area-upload mb-3">
                                    <label for="choosecate">Choose Category</label>
                                    <select class="form-select" id="choosecate" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    
                                </div>

                                <!-- <h5 class="box-heading">Description</h5>
                                <div class="products-area-upload mb-3">
                                    <div class="form-group mb-2">
                                      <label for="exampleFormControlInput1">Product Name</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" >
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Product Description</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div> -->

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Default file input example</label>
                                    <input class="form-control" id="formFileMd" type="file">
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" id="product_price" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                      <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary" id="add-products">Add Products</button>
                            </div>
                            <div class="col-md child">
                                <h5 class="box-heading">View</h5>
                                <div class="products-area-upload">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====== Boostrap Js ====== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- ====== Boostrap Js ====== -->
    <!-- ====== Jquery =======  -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- ====== Jquery =======  -->
    <!-- ==== function js ===== -->
    <script src="<?php echo base_url; ?>admin/assets/js/script.js"></script>
</body>

</html>
