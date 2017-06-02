<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<?php 
if(isset($_POST['btn-submit'])) {
    if(!empty($_POST['q'])) {
            $keyword=$_POST['q'];
            header("location:index.php?route=product&actions=search&keyword=$keyword");
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="public/vendor/owl-slider.css"/>
    <link rel="stylesheet" type="text/css" href="public/vendor/slick.css"/>
    <link rel="stylesheet" type="text/css" href="public/vendor/settings.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="public/images/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="public/css/style2.css"/>
    <link rel="stylesheet" type="text/css" href="public/alert/sweetalert.css">  
    <title>FRESH FOOD</title>
</head>

<body>		
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="modal-body">
                    <div class="input-group">
                        <form action="" method="POST" target="_blank" id="search">
                                <input type="text" name="q" class="form-control control-search" placeholder="Nhập từ khóa sản phẩm...">
                                 <button class="button_search" name="btn-submit" type="submit">Tìm kiếm</button> 
                        </form> 
                    </div><!-- /input-group -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div class="wrappage">
        <!-- <div id="rtl">RTL</div> -->
        <header id="header" class="header-v3 header-v2">
            <div id="topbar" class="topbar-ver2">
                <div class="container container-ver2">
                    <div class="inner-topbar box">
                        <div class="float-left">
                            <p><img src="public/images/icon-phone-header.png.png" alt="icon"> LIÊN HỆ <span> 0936826151</span></p>
                        </div>
                        <div class="float-right align-right">
                            <div class="hover-menu">
                            <?php if (!isset($_SESSION['logIn'])): ?> 
                                <a class="acc" href="#" title="USD"><img src="public/images/icon-user-header.png" alt="icon">TÀI KHOẢN</a>
                                <ul class="list-menu">
                                    <li><a href="index.php?route=login&actions=login-register" title="USD">Đăng nhập</a></li>
                                    <li><a href="index.php?route=login&actions=register" title="USD">Đăng ký</a></li>
                                </ul>
                                <?php else: ?><?php $user = $_SESSION['logIn']; ?>
                                    <a class="acc" href="#" title="USD"><img src="public/images/icon-user-header.png" alt="icon">Xin chào, <?php echo $user['username'] ?></a>
                                <ul class="list-menu">
                                    <li><a href="index.php?route=login&actions=info">THÔNG TIN</a></li>
                                    <li><a href="index.php?route=cart&actions=my_order">ĐƠN HÀNG</a></li>
                                     <li><a href="login/logout.php" title="VND">ĐĂNG XUẤT</a></li>
                                </ul>
                            <?php endif; ?>
                            </div>
                            <!-- End hover-menu -->
                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End topbar -->
            <div class="header-top">
                <div class="container container-ver2">
                    <div class="box">
                        <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                        <div class="logo"><a href="index.php" title="Uno">
                            <img src="public/images/logo-v2.png" alt="images">
                        </a></div>
                        <div class="logo-mobile"><a href="index.php" title="Xanadu"><img src="public/images/logo-v2.png" alt="Xanadu-Logo"></a></div>
                    <div class="box-right">
                            <div class="cart hover-menu">
                                <p class="icon-cart" title="Add to cart">
                                    <i class="icon"></i>
                                    <span class="cart-count"><?php echo get_qtt(); ?></span>
                                </p>
                                <div class="cart-list list-menu">
                                    <ul class="list">

                                      <?php  $products = get_cart(); ?>
                                      <?php if($products) : foreach($products as $p) : ?>

                                        <li>
                                            <a href="#" title="" class="cart-product-image"><img src="uploads/products/<?php echo $p['image']; ?>" alt="Product"></a>
                                            <div class="text">
                                                <p class="product-name"><?php echo $p['name']; ?></p>
                                                <p class="product-price"><span class="price"><?php echo number_format($p['price'],0,' ','.') ?></span> đ/kg</p>
                                                <p class="qty"><?php echo $p['quantity']; ?></p>
                                            </div>
                                            <a class="close btn-x-item" href="cart/delete-cart.php?id=<?php echo $p['id']; ?>" title="close"><i class="fa fa-times-circle"></i></a>
                                        </li> 

                                    <?php endforeach; endif; ?>

                                </ul>
                                <p class="total"><span class="left">Total:</span> <span class="right"><?php echo number_format(get_cost(),0,' ','.'); ?> VNĐ</span></p>
                                <div class="bottom">
                                    <a class="link-v1" href="index.php?route=cart&actions=viewcart" title="viewcart">View Cart</a>
                                    <a class="link-v1 rt" href="index.php?route=cart&actions=checkout" title="checkout">Check out</a>
                                </div>
                            </div>
                        </div>
                        <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <i class="icon"></i>
                        </div>
                    </div>
                        <!-- <div class="box-right">
                            <div class="cart hover-menu">
                                <p class="icon-cart" title="Add to cart">
                                    <i class="icon"></i>
                                    <span class="cart-count"><?php echo get_qtt(); ?></span>
                                </p>
                                <div class="cart-list list-menu">
                                        <ul class="list" >  
                                                                            
                                        <?php if($products) : foreach($products as $p) : ?>
                                            <li>
                                                <a href="#" title="" class="cart-product-image"><img src="uploads/products/<?php echo $p['image']; ?>" alt="Product"></a>
                                                <div class="text">
                                                    <p class="product-name"><?php echo $p['name']; ?></p>
                                                    <p class="product-price"><span class="price"><?php echo number_format($p['price'],0,' ','.') ?></span> đ/kg</p>
                                                    <p class="qty"><?php echo $p['quantity']; ?></p>
                                                </div>
                                                <a class="close" href="cart/delete-cart.php?id=<?php echo $p['id']; ?>" title="close"><i class="fa fa-times-circle"></i></a>
                                            </li> 
                                        <?php endforeach; endif; ?>                                   

                                    </ul>
                                    <p class="total"><span class="left">Total:</span> <span class="right"><?php echo number_format(get_cost(),0,' ','.'); ?> VNĐ</span></p>
                                    
                                    <div class="bottom">
                                        <a class="link-v1" href="index.php?route=cart&actions=viewcart" title="viewcart">View Cart</a>
                                        <a class="link-v1 rt" href="index.php?route=cart&actions=checkout" title="checkout">Check out</a>
                                    </div>
                                </div>
                            </div>
                            <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <i class="icon"></i>
                            </div>
                        </div> -->
                    <nav class="mega-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <ul class="nav navbar-nav" id="navbar">
                            <li class="level1 active dropdown"><a href="index.php" title="Home">Trang chủ</a>
                                        <!-- <ul class="menu-level-1 dropdown-menu">
                                                <li class="level2"><a href="home_v1.html" title="Home 1">Home 1</a></li>
                                                <li class="level2"><a href="home_v2.html" title="Home 2">Home 2</a></li>
                                                <li class="level2"><a href="home_v3.html" title="Home 3">Home 3</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="level1"><a href="index.php?route=page&actions=about" title="About us">Giới thiệu</a></li>
                                        <li class="level1"><a href="index.php?route=product&actions=product" title="Store">Sản phẩm</a></li>
                                        
                                        <li class="level1"><a href="index.php?route=page&actions=blog" title="collections">Tin tức</a></li>
                                        <li class="level1"><a href="index.php?route=page&actions=contact" title="Contact us">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>                
                        </div>
                        <!-- End container -->
                    </div>
                    <!-- End header-top -->
                </header><!-- /header -->

               