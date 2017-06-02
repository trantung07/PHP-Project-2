
<?php 

$products = get_cart(); ?>

<div class="main-content">
    <div class="container">
        <div class="banner-header banner-lbook3">
            <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
            <div class="text">
                <h3>Giỏ hàng</h3>
                <p><a href="index.php" title="Home">Trang Chủ</a><i class="fa fa-caret-right"></i>Giỏ Hàng</p>
            </div>
        </div>
    </div>
    <div class="cart-box-container">
        <div class="container container-ver2 space-padding-tb-30">
            <div class="row head-cart">
                <div class="col-md-4 space-30">
                    <div class="item active center">
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
                    <div class="item center">
                        <p class="icon">03</p>
                        <h3>Hoàn Thành</h3>
                    </div>
                </div>
                <!-- End col-md-4 -->
            </div>
        </div>
        <!-- End container -->
        <div class="container container-ver2">
            <div class="box cart-container">
                <table class="table cart-table space-30" >
                    <thead>
                        <tr>
                            <th >Hình ảnh</th>
                            <th width="30%">Tên sản phẩm</th>
                            <th >Giá</th>
                            <th >Số lượng</th>
                            <th width="20%">Thành tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tbody-list-cart">
                        <?php $products = get_cart(); ?>
                        <?php if(count($products)) : foreach($products as $p) : ?>

                            <tr class="item_cart">

                                <td>
                                    <img src="uploads/products/<?php echo $p['image'] ?>" width="50"/>
                                </td>
                                <td><?php echo $p['name'] ;?></td>
                                <td><?php echo number_format($p['price'],0,' ',',') ;?> đ/kg</td>
                                <td>
                                    <input type="number" value="<?php echo $p['quantity'] ;?>" style="width:60px" pattern="[0-9]{2,2}" id="qtt-<?php echo $p['id'] ?>">
                                </td>
                                <td>
                                    <?php echo number_format(thanh_tien($p['id']),0,' ','.') ;?> đ
                                </td>
                                <td>
                                    <a href="cart/update-cart.php?id=<?php echo $p['id'] ;?>" data-id="qtt-<?php echo $p['id']?>" type="button" class="btn btn-info btn-update-cart" title="Cập nhật"><i class="fa fa-refresh"></i>
                                    </a>
                                    <a href="index.php?route=cart&actions=viewcart&id=<?php echo $p['id'] ;?>"  class="btn btn-danger btn-delete-item" id="xoa-card1" title="Xóa"><i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                                
                            </tr>

                        <?php endforeach; endif; ?>
                        
                    </tbody>
                </table>
                <div id="tbody-list-all-cart">
                    <div class="row-total">
                        <div class="float-left">
                            <h3>Tổng tiền</h3>
                        </div>
                        <!--End align-left-->
                        <div class="float-right">
                            <p><?php echo number_format(get_cost(),0,' ','.'); ?> VNĐ</p>
                        </div>
                        <!--End align-right-->
                    </div>
                    <div class="box space-30">
                        <div class="float-left">
                            <a class="link-v1 lh-50 bg-brand" href="index.php" ><i class="fa fa-caret-left"></i> TIẾP TỤC MUA HÀNG</a>
                            <a class="link-v1 lh-50 space-20 btn-clear-cart" href="index.php?route=cart&actions=viewcart&clear-cart=true" onclick="return confirm('Are you sure ? ');">XÓA CART</a>
                            
                        </div>
                        <!-- End float left -->
                        <div class="float-right">
                            <a class="link-v1 lh-50 bg-brand" href="index.php?route=cart&actions=checkout" >THANH TOÁN <i class="fa fa-caret-right"></i></a>
                        </div>
                        <!-- End float-right -->
                    </div>
                </div>
                <!-- End box -->
                
                <!-- End box -->
            </div>
            <!-- End container -->
        </div>
        <!-- End cat-box-container -->
    </div>
    <?php 
            if (isset($_GET['id'])) {
                clear_item($_GET['id']);
            }
            ?>
         ?>
<?php
if (isset($_GET['clear-cart'])) {
            clear_cart();
        }
        ?>

