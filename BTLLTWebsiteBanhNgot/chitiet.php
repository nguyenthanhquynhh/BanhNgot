<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <title>MuaHang</title>
</head>
<?php
include ('connect.php');

if(isset($_GET['id'])){
    $sql="SELECT * FROM info_cake where Mabanh =".$_GET['id'];
    $query= mysqli_fetch_array(mysqli_query($conn,$sql));
}
?>

<body>

<?php
include 'menu.php';
?>
    <div class="app">
         <!-- header new -->
         <!-- <div id="header">
            <a href="" class="logo">
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
                    <a href="">Đăng nhập</a>
                </div>
                <div class="item">
                    <a href="">Đăng ký</a>
                </div>
            </div>
            <div id="actions">
                <div class="item">
                    <img src="./assets/img/user.png" alt="">
                </div>
                <div class="item">
                    <img src="./assets/img/cart.png" alt="">
                </div>
            </div>
        </div> -->

         <!-- Buy and Product -->
         <div class="grid wide">
            <div class="wraper__buy">
                <div class="row">
                    <div class="col l-5 m-12">
                        <div class="wraper__buy-product">
                            <img src="./assets/img/<?=$query['AnhBanh']?>" alt="Banh" class="wraper__buy-product-img">
                        </div>
                        <!--  -->
                        <div class="wraper__color-luachon">
                            <div class="wraper__buy-product-small-padding">
                                <div class="row">
                                    <div class="col l-2-4">
                                        <div class="wraper__buy-product-small">
                                            <img src="./assets/img/bn.jpg" alt="Banh" class="wraper__small-img">
                                        </div>
                                    </div>
                                    <div class="col l-2-4">
                                        <div class="wraper__buy-product-small">
                                            <img src="./assets/img/a1 (1).jpg" alt="Banh" class="wraper__small-img">
                                        </div>
                                    </div>
                                    <div class="col l-2-4">
                                        <div class="wraper__buy-product-small">
                                            <img src="./assets/img/bnb1 (3).jpg" alt="Banh" class="wraper__small-img">
                                        </div>
                                    </div>
                                    <div class="col l-2-4">
                                        <div class="wraper__buy-product-small">
                                            <img src="./assets/img/bn9.jpg" alt="Banh" class="wraper__small-img">
                                        </div>
                                    </div>
                                    <div class="col l-2-4">
                                        <div class="wraper__buy-product-small">
                                            <img src="./assets/img/bn10.jpg" alt="Banh" class="wraper__small-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        <div class="l-o-3 m-o-4 c-o-4 wraper__arrow">
                            <i class="fas fas__arrow-icon  fa-angle-left"></i>
                            <a href="" class="arrow__link">
                                <button class="arrow__btn">1</button>
                            </a>
                            <a href="" class="arrow__link">
                                <button class="arrow__btn">2</button>
                            </a>
                            <a href="" class="arrow__link">
                                <button class="arrow__btn">3</button>
                            </a>
                            <a href="" class="arrow__link">
                                <button class="arrow__btn">4</button>
                            </a>
                            <i class="fas fas__arrow-icon  fa-angle-right"></i>
                        </div>
                        <div class="wraper__buy-product-xahoi">
                            <div class="col l-6">
                                <div class="wraper__share">
                                    <span class="wraper__share-size">Chia sẻ</span>
                                    <i class="fab-icon fab fa-facebook-messenger"></i>
                                    <i class="fab-icon-icon fab fa-facebook"></i>
                                    <i class="fab-icon fab fa-linkedin"></i>
                                    <i class="fab-icon fab fa-instagram-square"></i>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="wraper__favorite">
                                    <span class="wraper__share-size">Đã thích</span>
                                    <i class="fas fas-icon fa-heart"></i>
                                    <i class="fas fas-icon fa-heart"></i>
                                    <i class="fas fas-icon fa-heart"></i>
                                    <i class="fas fas-icon fa-heart"></i>
                                    <i class="fas fas-icon fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col l-7 m-12">
                        <div class="wraper__buy-info">
                            <span class="info__info">
                                Những chiếc bánh kem ngọt ngào, đáng yêu luôn chiếm trọn trái tim của khách hàng ngay từ cái nhìn đầu tiên.
                            </span>
                            <div class="info__danhgia">
                                <div class="info__danhgia-star">
                                    <span class="info__danhgia-so">4.6</span>
                                    <i class="fas fa-star-icon fa-star"></i>
                                    <i class="fas fa-star-icon fa-star"></i>
                                    <i class="fas fa-star-icon fa-star"></i>
                                    <i class="fas fa-star-icon fa-star"></i>
                                    <i class="fas fa-star-icon fa-star-half-alt"></i>
                                </div>
                                <div class="info__danhgia-soluong">
                                    <span class="info__so">230</span>
                                    Đánh giá

                                </div>
                                <div class="info__danhgia-daban">
                                    <span class="info__daban">1.1k</span>
                                    Đã bán
                                </div>
                            </div>
                        </div>

                        <div class="wraper__buy-info-sale">
                            <span class="wraper__sale-old">
                                <h4 class="wraper__sale-old-old">
                                    5000đ
                                </h4>
                            </span>
                            <span class="wraper__sale-current">
                                <h2 class="wraper__sale-current-current">
                                    <?=$query['Gia']?>
                                </h2>
                            </span>
                            <div class=" wraper__arrow-chonmua">
                                <a href="dathang.php" class="arrow__link-giam">
                                    <button class="arrow__btn-giam" style="background-image: linear-gradient(0, #e4b5a7, #161414);">Mua Ngay</button>
                                </a>
                            </div>
                        </div>

                        <div class="wraper__chonmua">
                            <span class="info__info-chitiet">
                                Chi tiết sản phẩm
                            </span>
                            <ul class="info__info-chitiet-ul">
                                <li class="info__info-chitiet-li"><?=$query['ChiTiet']?></li>        
                            </ul>

                            <!--  -->
                            <!--Danh gia  -->
                            <div class="wraper__Chitiet-bg">
                                <div class="grid wide">
                                    <div class="Wraper_footer-chonthem">
                                        <div class="wraper__Chitiet-danhgia">
                                            Đánh Giá Sản Phẩm
                                        </div>
                                        <div class="wraper__Chitiet-avatar">
                                            <div class="wraper__Chitiet-avatar-icon">
                                                <i class="fas fas__icon-avatar fa-user-circle"></i>
                                            </div>
                                            <div class="wraper__Chitiet-avatar-icon">
                                                <div class="wraper__Chitiet-ten">
                                                    Người Mua Một
                                                </div>
                                                <div class="wraper__Chitiet-star">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star-half-alt"></i>
                                                </div>
                                                <div class="wraper__Chitiet-cm">
                                                    Khi ăn ta sẽ cảm nhận được lớp vỏ bánh đắng nhẹ,
                                                    lớp nhân đậu xanh bên trong được sên mịn ngọt xen lẫn vị mằn mặn beo béo của trứng muối.
                                                    Bánh kem matcha với lớp bánh bông lan mềm xốp bên trong được ôm trọn bên ngoài bởi lớp
                                                    kem phô mai mướt mịn.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wraper__Chitiet-avatar">
                                            <div class="wraper__Chitiet-avatar-icon">
                                                <i class="fas fas__icon-avatar fa-user-circle"></i>
                                            </div>
                                            <div class="wraper__Chitiet-avatar-icon">
                                                <div class="wraper__Chitiet-ten">
                                                    Người Mua Hai
                                                </div>
                                                <div class="wraper__Chitiet-star">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star-half-alt"></i>
                                                </div>
                                                <div class="wraper__Chitiet-cm">
                                                    Khi ăn ta sẽ cảm nhận được lớp vỏ bánh đắng nhẹ,
                                                    lớp nhân đậu xanh bên trong được sên mịn ngọt xen lẫn vị mằn mặn beo béo của trứng muối.
                                                    Bánh kem matcha với lớp bánh bông lan mềm xốp bên trong được ôm trọn bên ngoài bởi lớp
                                                    kem phô mai mướt mịn.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wraper__Chitiet-avatar">
                                            <div class="wraper__Chitiet-avatar-icon">
                                                <i class="fas fas__icon-avatar fa-user-circle"></i>
                                            </div>
                                            <div class="wraper__Chitiet-avatar-icon">
                                                <div class="wraper__Chitiet-ten">
                                                    Người Mua Ba
                                                </div>
                                                <div class="wraper__Chitiet-star">
                                                    <span>4.6</span>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star"></i>
                                                    <i class="fas fa-star-icon fa-star-half-alt"></i>
                                                </div>
                                                <div class="wraper__Chitiet-cm">
                                                    Khi ăn ta sẽ cảm nhận được lớp vỏ bánh đắng nhẹ,
                                                    lớp nhân đậu xanh bên trong được sên mịn ngọt xen lẫn vị mằn mặn beo béo của trứng muối.
                                                    Bánh kem matcha với lớp bánh bông lan mềm xốp bên trong được ôm trọn bên ngoài bởi lớp
                                                    kem phô mai mướt mịn.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->

                    </div>
                </div>
            </div>

            
         </div>
    </div>




         <!-- Footer -->
         <div class="footer">
            <div class="footer__wraper">
                <grid class="grid wide">
                    <div class="row">
                        <div class="col l-2-4">
                            <div class="footer__wraper-chamsoc">
                                <span class="footer__span">
                                    CHĂM SÓC KHÁCH 
                                </span>
                                <ul class="footer__wraper-list">
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Hướng dẫn bán hàng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Hướng dẫn bán hàng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Trả hàng & Hoàn tiền</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Chăm sóc khách hàng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Chính sách bảo hành</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="col col-2-4">
                            <div class="footer__wraper-chamsoc">
                                <span class="footer__span">
                                    VỀ SHOP
                                </span>                            
                                <ul class="footer__wraper-list">
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Giới Thiệu Shop-Quỳnh</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Tuyển Dụng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Điều Khoản Shop</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Chính Sách Bảo Mật</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Liên Hệ Truyền Thông</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        
    
                        <div class="col col-2-4">
                            <div class="footer__wraper-chamsoc">
                                <span class="footer__span">
                                    THEO DÕI CHÚNG TÔI TRÊN
                                </span>                            
                                <ul class="footer__wraper-list">
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Hướng dẫn bán hàng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Hướng dẫn bán hàng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Trả hàng & Hoàn tiền</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Chăm sóc khách hàng</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">Chính sách bảo hành</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="col col-2-4">
                            <div class="footer__wraper-chamsoc">
                                <span class="footer__span">
                                    THANH TOÁN
                                </span>                            
                                <ul class="footer__wraper-list">
                                    <li class="footer__wraper-list-link">
                                        <i class="fab fa-facebook"></i>
                                        <a href="" class="footer__wraper-link-a footer__wraper-link-con">Facebook</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <i class="fab fa-instagram-square"></i>
                                        <a href="" class="footer__wraper-link-a footer__wraper-link-con ">Instragram</a>
                                    </li>
                                    <li class="footer__wraper-list-link">
                                        <i class="fab fa-linkedin"></i>
                                        <a href="" class="footer__wraper-link-a footer__wraper-link-con ">Linkedln</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="col col-2-4">
                            <div class="footer__wraper-chamsoc">
                                <span class="footer__span">
                                    TẢI ỨNG DỤNG SHOPEE NGAY THÔI
                                </span>                            
                                <ul class="footer__wraper-list">
                                    <li class="footer__wraper-list-link">
                                        <a href="" class="footer__wraper-link-a">
                                            <img src="./assets/img/QRcode.png" alt="QR Code" class="footer__QR-img">
                                        </a>
                                    </li>
                                    <div class="footer__app-gg">
                                        <li class="footer__wraper-list-link">
                                            <a href="" class="footer__wraper-link-a">
                                                <img src="./assets/img/appstore.png" alt="App Store" class="footer__App-img">
                                            </a>
                                        </li>
                                        <li class="footer__wraper-list-link">
                                            <a href="" class="footer__wraper-link-a">
                                                <img src="./assets/img/ggplay.png" alt="Google Play" class="footer__App-img">
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </grid>
            </div>
        </div>
</body>
</html>