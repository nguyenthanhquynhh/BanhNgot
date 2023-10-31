<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Dathang</title>
</head>



<?php
include 'connect.php';
if (isset ($_POST ['submit'])) { 
    // isset có tác dụng kiêmmr tra xem có dữ liệu hay không
    $address = $_POST ['address'];
    $phone = $_POST ['phone'];
    $rephone = $_POST ['rephone'];
    ?>
    <script>
    window.location.href="index.php";
    </script>
    <?php
    if($phone != $rephone) {
        echo "Mời nhập lại số điện thoại";
    } else{
        $phone = md5 ($rephone);
        $sql = "INSERT INTO dathang (address,phone,rephone,le) VALUES ('$address','$phone','$rephone',0)";
        mysqli_query ($conn,$sql);
        // $sql1 = "INSERT INTO proflie (ten,diachi,sodt,username) VALUES ('chuaco','chuaco','chuaco','$email')";
        //     mysqli_query ($conn,$sql1);
    }
    
}
?>

<body>
    <div class="modal">
        <div class="modal__overlay"></div>
            <div class="modal__body">
                <!-- Register form -->
                <div class="form">
                    <div class="form__container">
                        <div class="form__header">
                            <h3 class="form__header-dangki">NHẬP THÔNG TIN ĐỂ ĐẶT HÀNG VÀ THANH TOÁN </h3>
                            <!-- <a href="dangnhap.html" class="form-header-link">
                                <span class="form__header-dangnhap">Đăng nhập</span>
                            </a> -->
                        </div>

                        <form action="" method="post" name="dathang">
                            <div class="form__form">
                                <div class="form__form-group">
                                    <input type="text" class="form_input" placeholder="Địa chỉ nhận bánh" name="address">
                                </div>
                                <div class="form__form-group">
                                    <input type="phone" class="form_input" placeholder="Số điện thoại để giao bánh" name="phone">
                                </div>
                                <div class="form__form-group">
                                    <input type="phone" class="form_input" placeholder="Nhập lại số điện thoại để giao bánh" name="rephone">
                                </div>
                            </div>                                                                               
                        
                            <div class="form__dieukhoan">
                                <p class="form__dieukhoan-text">
                                    Cảm ơn bạn đã tin tưởng và đặt hàng của chúng tôi
                                    <!-- <a href="" class="form__dieukhoan-link">Điều khoản dịch vụ</a>&
                                    <a href="" class="form__dieukhoan-link">Chính sách bảo mật</a> -->
                                </p>
                            </div>

                            <div class="form__controls">
                                <button class="btn margin-back">NHẤN GỬI ĐỂ ĐẶT HÀNG</button>
                                <button class="btn btn-primary" style="background-color: GREY">
                                    <!-- submit co tác dụng xác nhận chuyền dữ liệu -->
                                    <input type="submit" class="form__control" name="submit"
                                    placeholder="THANH TOÁN" style="width: 100%; background-color: ;
                                    border: none">
                                </button>
                            </div>
                        </div>
                    </form>
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