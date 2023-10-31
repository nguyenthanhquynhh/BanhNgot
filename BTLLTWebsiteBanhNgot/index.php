<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<?php
include 'menu.php';
?>

<?php
$sql="SELECT * FROM brands";
$query=mysqli_query($conn,$sql);
?>
<body>
    <div class="app">

        <!-- Container -->
        <div class="container">            
                    <div class="grid wide">
                        <div id="banner">
                            <div class="banner__hieuung">
                                <div class="box-left">
                                    <h2 class="banner__thucan">
                                        <span>BÁNH NGỌT</span>
                                        <br>
                                        <span>THƯỢNG HẠNG</span>
                                    </h2>
                                    <p>Chuyên cung cấp các loại bánh đảm bảo dinh dưỡng
                                        hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
                                        hoàn hảo nhất</p>
                                    <button>Mua ngay</button>
                                </div>
                                <div class="box-right">
                                    <img src="" alt="">
                                    <img src="./assets/img/img_2.png" alt="">
                                    <img src="./assets/img/img_1.png" alt="">
                                </div>
                            </div>
                            <div class="to-bottom">
                                <a href="">
                                    <img src="./assets/img/to_bottom.png" alt="">
                                </a>
                            </div>
                        </div>
                    
                    
                    
                    <!-- List and Product -->
                    <div class="container__product">
                        <div class="row">
                            <div class="col l-2 m-0 c-0">
                                <div class="container__list">
                                    <h3 class="container__list-danhmuc">
                                        <i class="container__list-icon fas fa-list"></i>
                                        Danh mục
                                    </h3>
                                    <ul class="container__list-sanpham">
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị bạc hà</li>
                                        </a>
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị chocolate</li>
                                        </a>
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị caramen</li>
                                        </a>
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị mát cha</li>
                                        </a>
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị dâu tây</li>
                                        </a>
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị cam </li>
                                        </a>
                                        <a href="" class="container__list-link">
                                            <li class="container__list-item">Bánh vị trà xanh</li>
                                        </a>
                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="col l-10 m-12 c-12">
                                <div class="container__sellect" style="background-image: linear-gradient(0, #e4b5a7, #161414);">                                    
                                        <div class="container__sellect-sapxep">
                                            Sắp xếp theo
                                        </div>
                                        <button class="container__sellect-btn">
                                            <a href="" class="container__sellect-link">Phổ biến</a>
                                        </button>
                                        <button class="container__sellect-btn">
                                            <a href="" class="container__sellect-link">Mới nhất</a>
                                        </button>
                                        <button class="container__sellect-btn">
                                            <a href="" class="container__sellect-link">Bán chạy</a>
                                        </button>
                                        <button class="container__sellect-btn-gia">
                                            <a href="" class="container__sellect-link">Giá</a>
                                        </button>  
                                        
                                </div>

                                <div class="container__product-list">
                                    <div class="row">
                                        <?php
                                        foreach($query as $item):
                                        ?>
                                        <div class="col l-2-4 m-4 c-6">
                                            <div class="items">
                                                <div class="item__img">
                                                    <img src="./assets/img/<?=$item['AnhBanh']?>" alt="" class="item__img-img">
                                                </div>
                                                <div class="item__info-product">
                                                    <div class="item__name">
                                                      <?=$item['TenBanh']?>                                        
                                                    </div>

                                                    <div class="info__danhgia-star-item">
                                                        <i class="fas fa-star-icon-item fa-star"></i>
                                                        <i class="fas fa-star-icon-item fa-star"></i>
                                                        <i class="fas fa-star-icon-item fa-star"></i>
                                                        <i class="fas fa-star-icon-item fa-star"></i>
                                                        <i class="fas fa-star-icon-item fa-star-half-alt"></i>
                                                    </div>
                                                    <div class="item__price">
                                                        <span class="item__price-old">500.000đ</span>
                                                        <span class="item__price-current">
                                                            <?=$item['Gia']?>
                                                        </span>
                                                    </div>
                                                    <?php $a = $item['Mabanh']; ?>
                                                    <div class="item__timhieu">
                                                        <a class="item__timhieu-link" href="./chitiet.php?id=<?=$a;?>">
                                                            <--Tìm hiểu thêm-->
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        endforeach;
                                        ?>
                                        <!--  -->

                                        <!--  -->
                                    </div>
                                </div>

                                <div class="container__product-chonthem">
                                    <div class="grid wide">
                                        <div class="col l-4"></div>
                                        <div class="col l-4 l-o-4 m-o-2 c-o-1">
                                            <div class="container__luachon">
                                                <a href="" class="container__luachon-link">
                                                    <i class="container__luachon-icon fas fa-angle-left"></i>
                                                </a>
                                                <a href="" class="container__luachon-link">
                                                    <button class="container__luachon-btn">1</button>
                                                </a>
                                                <a href="" class="container__luachon-link">
                                                    <button class="container__luachon-btn">2</button>
                                                </a>
                                                <a href="" class="container__luachon-link">
                                                    <button class="container__luachon-btn">3</button>
                                                </a>
                                                <a href="" class="container__luachon-link">
                                                    <i class="container__luachon-icon fas fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col l-4"></div>
                                    </div>
                                </div>
                            </div>
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

    <!-- javascript -->
    <script src="script.js"></script>
</body>
</html>