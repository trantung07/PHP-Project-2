
<?php $products = get_cart(); ?>

<div class="main-content">
    <div class="container">
        <div class="banner-header banner-lbook3">
            <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
            <div class="text">
                <h3>Hoàn Thành</h3>
                <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Hoàn thành</p>
            </div>
        </div>
    </div>
    <div class="cart-box-container">
        <div class="container container-ver2 space-padding-tb-30">
            <div class="row head-cart">
                <div class="col-md-4 space-30">
                    <div class="item center">
                        <p class="icon">01</p>
                        <h3>Giỏ hàng</h3>
                    </div>
                </div>
                <!-- End col-md-4 -->
                <div class="col-md-4 space-30">
                    <div class="item center">
                        <p class="icon">02</p>
                        <h3>Thanh toán</h3>
                    </div>
                </div>
                <!-- End col-md-4 -->
                <div class="col-md-4 space-30">
                    <div class="item active center">
                        <p class="icon">03</p>
                        <h3>Hoàn thành</h3>
                    </div>
                </div>
                <!-- End col-md-4 -->
            </div>
        </div>
        <!-- End container -->
        <div class=" container">            
            <div class="box cart-container">                
                <div class="alert text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div style="font-size: 25px;"><strong>Chúc mừng bạn đã đặt hàng thành công!!!</strong></div>
                    <?php if (isset($_SESSION['logIn'])): ?> 
                    <p style="margin-top: 30px;">
                        <a class="link-v1 lh-50 bg-brand" href="index.php?route=cart&actions=my_order" >Xem các đơn hàng đã đặt</a>
                    </p>
                    <?php else: ?>
                    <div class="box" style="margin-top: 30px;">
                        
                            <a class="link-v1 lh-50 margin-right-20 space-20 color-brand" href="index.php" >Quay về trang chủ</a>
                        
                        
                            <a class="link-v1 lh-50 bg-brand" href="index.php?route=login&actions=login-register" title="Đăng nhập để xem các đơn hàng đã đặt">Đăng nhập</a>
                       
                    </div>
                    
                    <?php endif; ?>  
                </div>                 
            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End cat-box-container -->
</div>
<?php
if (isset($_GET['clear-cart'])) {
            clear_cart();
        }
        ?>
    
