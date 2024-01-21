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
    <title>Dashboard login</title>
</head>
<body>
    <section class="g-fl-container admin-login-section g-flex-center">
        <div class="g-container  g-flex-center admin-login-container">
            <div class="admin-login-form g-pd-20 g-bdr-6">
                <form action="./controller/main.php" method="post">
                    <div >
                        <input class="from-input g-bdr-6" type="text" name="username" placeholder="username">
                    </div>
                    <div >
                        <input class="from-input g-bdr-6" type="password" name="password" placeholder="password">
                    </div>
                    <div>
                        <input class="from-input g-bdr-6" type="submit" name="admin-login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>