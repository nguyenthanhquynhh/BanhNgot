<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>


<div class="app">
<!--  -->
    <div id="header">
        <a href="index.php" class="logo">
            <img src="./assets/img/logo.png" alt="">
        </a>
        <div id="menu">
            <div class="item">
                <a href="index.php">Trang chủ</a>
            </div>
            <div class="item">
                <a href="">Sản phẩm</a>
            </div>
            <div class="item">
                <a href="dangnhap.php">Đăng nhập</a>
            </div>
            <div class="item">
                <a href="dangky.php">Đăng ký</a>
            </div>
        </div>
        <div id="actions">
            <?php
            include 'connect.php';
            session_start();
            if (isset($_SESSION["user"])){
            ?> 
                <!-- <div class="item">
                <img src="./assets/img/user.png" alt="">
                </div>
                <div class="item">
                <img src="./assets/img/cart.png" alt="">
                </div> -->
            <!-- <form action="" method="POST">
                <input type="submit" name="logout">
            </form> -->
            <?php
            }else{ 
                ?>
                <div class="item">
                <img src="./assets/img/user.png" alt="">
                </div>
                <!-- <div class="item">
                <img src="./assets/img/cart.png" alt="">
                </div> -->
                <?php
            }
            ?>
            

        </div>
    </div>
</div>
</body>
</html>