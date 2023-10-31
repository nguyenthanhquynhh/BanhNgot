<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Dang nhap</title>
</head>
<!-- $_POST nhận dữ liệu -->
<?php
include 'connect.php';
          if (isset ($_POST ['submit']) && $_POST ['email'] != '' && $_POST ['pass'] != '') {
              $email = $_POST ['email'];
              $pass= $_POST ['pass'];
              $pass = md5($pass);
              $sql ="SELECT * FROM user_quynh WHERE user_name='$email' AND password = '$pass'";
              $user = mysqli_query ($conn, $sql);
              if (mysqli_num_rows ($user) > 0) {
                $_SESSION ["user"] = $username;
                ?>
                <script>
                 window.location.href="index.php";
                </script>
                <?php
                }else {?>
                    <p class="message" style ="color:red;">Nhập sai tên đăng nhập hoặc mật khẩu!</p>
                    </form>
                     <?php
                    } 
                }else if (isset($_POST['submit']) && ($_POST['username'] == '' || $_POST ['pass'] == '')){
                    ?>
                        <p class="message" style ="color:red;">Vui lòng điền đầy đủ thông tin</p>
                       <?php
                }

?>
<body>
    <!-- Modal layout tác dụng che hết màn / overlay để phủ ra một mờ nhìn xuyên qua màn hình-->
    <div class="modal">
        <div class="modal__overlay"></div>
            <div class="modal__body">
                <!-- Login -->
                <div class="form">
                    <div class="form__container">
                        <div class="form__header">
                            <h3 class="form__header-dangki">Đăng nhập</h3>
                            <a href="./dangky.php" class="form__container-link">
                                <span class="form__header-dangnhap">Đăng ký</span>

                            </a>
                        </div>

                    <form action="" method="post" name="dangky">

                        <div class="form__form">
                            <div class="form__form-group">
                                <input type="text" class="form_input" placeholder="Email của bạn" name="email">
                            </div>
                            <div class="form__form-group">
                                <input type="password" class="form_input" placeholder="Mật khẩu của bạn" name="pass">
                            </div>
                            
                            
                          
                        </div>
                    

                        <div class="form__dieukhoan">
                            <div class="form__dieukhoan-help">
                                <a href="" class="form__dieukhoan-help--link">Quên mật khẩu</a>
                                <span class="form__dieukhoan-help--link-ngangiua"></span>
                                <a href="" class="form__dieukhoan-help--link">Cần trợ giúp?</a>
                            </div>
                        </div>

                        <div class="form__controls">
                            <button class="btn margin-back">
                            <a href="index.php" style="color: black";>
                            TRỞ LẠI
                            </a>
                        </button>
                            <a href="index.html" class="form__controls-link">
                                <!-- submit co tác dụng xác nhận chuyền dữ liệu -->
                                <button class="btn btn-primary" style="background-color: white;">
                                    <input type="submit" class="form__control" name="submit" style="width: 100%; hight: 100%; border: none">
                            </button>
                            </a>
                        </div>
                        </form>
                    </div>
                    <div class="form__socials">
                        <a href="" class="btn btn--with-icon ">
                            <i class="fab fa-facebook-square"></i>
                            Kết nối với facebook
                        </a>
                        <a href="" class="btn btn--with-icon">
                            <i class="fab fa-google"></i>
                            Kết nối với Google
                        </a>
                    </div>
                </div> 
            </div>

    </div>
</body>
</html>