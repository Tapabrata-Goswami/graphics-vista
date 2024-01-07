<?php

require_once("config.php");

if(isset($_SESSION['username'])){
  header('Location:'.base_url.'admin/index.php');
}

if(isset($_POST['signup'])){

  require_once("db_config.php");

  $sql = mysqli_query($conn, "SELECT * FROM tb_admin WHERE email = ".$_POST['email']);
  if(mysqli_num_rows($sql)> 0){
    while($row = mysqli_fetch_assoc($sql)){
      if(password_verify($_POST['password'],$row['password'])){
        $_SESSION['username'] = $row['username'];
        header('Location:'.base_url.'admin/index.php'); 
      }else{
        exit();
      }               
    }
  }
  mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =====Google Fonts===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ====== Google Fonts ======= -->
    <!-- ====== Bootstarp Style ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- ====== Bootstarp Style ===== -->
    <!-- ====== Style Sheet ===== -->
    <link rel="stylesheet" href="assets/css/Admin-Signup.css">
    <!-- ====== Style Sheet ===== -->
    <title>Admin Login</title>
</head>
<body>
    <section class="container-fluid admin-signup-form">
        <div class="container d-flex justify-content-center">
            <div class="from-container">
              <form action="" method="post">
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                  <input class="btn btn-primary" type="submit" name="signup" value="signup">
                </div>
              </form>
            </div>
        </div>
    </section>


    <!-- ====Bootstrap Js===== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- ====Bootstrap Js===== -->
</body>
</html>