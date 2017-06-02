<?php  if(isset($_GET['id'])){
    $product = get_one('product', 'id', $_GET['id']);
    $ids =  $_GET['id']; 

    $sql = "SELECT * FROM product_comment WHERE product_id = $ids AND status = 1";
    $res = mysqli_query($mysqli,$sql);
    $counts = mysqli_num_rows($res);       
    $orderby = get_order3('product_comment','product_id',$ids,'status',1,'written_date','desc');
    //echo "<pre>";
    //print_r($orderby);
}
?>
<div class="main-content">
    <div class="banner-header banner-lbook3">
        <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
        <div class="text">
            <h3><?php echo $product['name']; ?></h3>
            <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i><a href="index.php?route=product&actions=product" title="Home">Danh mục Sản Phẩm</a><i class="fa fa-caret-right"></i><?php echo $product['name']; ?></p>
        </div>
    </div>
    <div class="container">
        <div class="product-details-content">
            <div class="col-md-6 col-sm-6">             
              <div class="slider-for">
                <div>
                  <span class="zoom">
                  <img class="zoom-images" src="uploads/products/<?php echo $product['image']; ?>" alt="images">
                </span>
            </div>
            <!-- End slider-for -->
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="box-details-info">
            <div class="product-name">
                <h1><?php echo $product['name']; ?></h1>
            </div>
            <!-- End product-name -->
            <div class="rating">
                <div class="overflow-h">
                    <div class="icon-rating">
                        <input type="radio" id="star-horizontal-rating-1" name="star-horizontal-rating" checked="">
                        <label for="star-horizontal-rating-1"><i class="fa fa-star-half-o"></i></label>
                        <input type="radio" id="star-horizontal-rating-2" name="star-horizontal-rating" checked="">
                        <label for="star-horizontal-rating-2"><i class="fa fa-star"></i></label>
                        <input type="radio" id="star-horizontal-rating-3" name="star-horizontal-rating" checked="">
                        <label for="star-horizontal-rating-3"><i class="fa fa-star"></i></label>
                        <input type="radio" id="star-horizontal-rating-4" name="star-horizontal-rating">
                        <label for="star-horizontal-rating-4"><i class="fa fa-star"></i></label>
                        <input type="radio" id="star-horizontal-rating-5" name="star-horizontal-rating">
                        <label for="star-horizontal-rating-5"><i class="fa fa-star"></i></label>
                    </div>
                </div>
            </div>
            <!-- End Rating -->
            <div class="wrap-price">

                <p class="price"><?php echo number_format($product['price'],0,' ','.') ?> đ/kg</p>
            </div>
            <!-- End Price -->
        </div>
        <!-- End box details info -->
        <div class="options">
            <p><?php echo $product['detail_product']; ?></p>
            <!-- End action -->
            <div class="description-lits">
                <h3>100% Thực phẩm hữu cơ từ trang trại HNH</h3>
                <ul>
                    <li><img src="public/images/icon-deslist.jpg" alt="icon">100% Thực phẩm hữu cơ từ trang trại HNH</li>
                    <li><img src="public/images/icon-deslist.jpg" alt="icon">100% Thực phẩm hữu cơ</li>
                    <li><img src="public/images/icon-deslist.jpg" alt="icon">100% Tươi không hóa chất</li>
                </ul>
            </div>
            <!--End Description-->

            <!-- End row -->
            <div class="action">
            <!-- <a class="add-cart btn btn-success" href="add-cart.php?id=<?php echo $product['id']; ?>" title="Mua hàng">Add cart</a> -->
                <a class="link-v1 add-cart bg-brand" href="cart/add-cart.php?id=<?php echo $product['id']; ?>"><span>Thêm vào giỏ hàng</span></a> 
                <!-- <input class="link-v1" title="Số lượng" type="number" value="<?php echo $p['quantity'] ;?>" style="width:60px" pattern="[0-9]{2,2}" id="qtt-<?php echo $p['product_id'] ?>"> -->
                <a class="link-v1 wish" title="Yêu thích" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                <a class="link-v1 " title="Số lượt xem" href="#"><?php echo $product['views']; ?></a>
            </div>
            <div class="social box">
                <h3>Share this :</h3>
                <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
            </div>
            <!-- End share -->
        </div>
        <!-- End Options -->
    </div>
</div>   
<!-- End product-details-content -->
<div class="hoz-tab-container space-padding-tb-30">
    <ul class="tabs">
        
        <li class="item" rel="customer">Bình luận của KH (<?php echo $counts; ?>)</li>
    </ul>
    <div class="tab-container">
        
        <div id="customer" class="tab-content">
            <div class="box border">
                <h3 style="color: #9d234c;">Bình luận (<?php echo $counts; ?>)</h3>
                <?php if($counts ==0) : ?> 
                <p>Chưa có bình luận nào</p>
                <?php else: ?>
                <?php if ($orderby) : foreach ($orderby as $orderby): ?>            
                    <div class="comment-all">
                        <div style="padding-left: 20px; color: #000; font-size: 18px;"><?php echo $orderby['comment']; ?></div>
                        <div class="row">
                                <i class="fa fa-user-circle-o user-icon" style="padding-left: 20px; color: #9d234c;"></i>
                                <span style="padding-left: 10px; color: #666;"> <b><?php echo $orderby['name']; ?></b> - 
                                <?php 
                                    $seconds = strtotime(date('Y-m-d H:i:s'))-$orderby['written_date'];
                                    if( $seconds<60){
                                        echo floor($seconds).' giây trước';
                                    }else if ($seconds<60*60) {
                                        echo floor($seconds/60).' phút trước';
                                    }else if ($seconds<60*60*24){
                                        echo floor($seconds/60/60).' giờ trước';
                                    }else {
                                        echo date('d-m-Y / h:i:s a',$orderby['written_date']);
                                    }
                                    ?>
                                </span>
                        </div><hr  style="margin-top: 10px; margin-bottom: 10px">
                    </div>
                    
                <?php endforeach; endif; ?>
                <?php endif; ?>
            </div>
            <form class="form-horizontal" method="POST" role="form">
                <h3>Viết bình luận của bạn</h3>
                <?php if (!isset($_SESSION['logIn'])): ?> 
                <div class="box">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class=" control-label" for="inputName">Họ tên <span class="color">*</span></label>
                            <input type="text" class="form-control" id="inputName" placeholder="Họ tên" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class=" control-label" for="inputsumary">Email </label>
                            <input type="text" class="form-control" id="inputsumary" placeholder="Email" name="email">
                        </div>
                    </div>
                </div>
            <?php else: ?><?php $user = $_SESSION['logIn']; ?>
                <div class="box">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class=" control-label" for="inputName">Họ tên <span class="color">*</span></label>
                            <input type="text" class="form-control" id="inputName" value="<?php echo $user['full_name'] ?>" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class=" control-label" for="inputsumary">Email </label>
                            <input type="text" class="form-control" id="inputsumary" value="<?php echo $user['email'] ?>" name="email">
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="box">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="sr-only">ID sản phẩm</label>
                            <input type="hidden" class="form-control"  name="product_id" value="<?php echo $product['id']; ?>" >
                        </div>
                    </div>                    
                </div>
                <!-- <div class="box rating">
                    <p>Your Rating </p>
                    <ul>
                        <li>
                            <a href="#" title="rating">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="#" title="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                    </ul>
                </div> -->
                <div class="form-group">
                    <label class=" control-label" >Bình luận <span class="color">*</span></label>
                    <textarea class="form-control" name="comment"></textarea>
                </div>
                <button class="btn btn-lg btn-primary button-v1" type="submit" onclick="return alert('Bình luận sẽ được đăng lên sau khi được kiểm duyệt');">Gửi bình luận</button>
            </form>
            
         <?php 

                            
                            if(!empty($_POST)){
                                $product_id = $_POST['product_id'];
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $comment = $_POST['comment'];
                                if(!empty($name)){
                                    insert('product_comment',[
                                            'name' => $name,
                                            'email' => $email,
                                            'comment' => $comment,
                                            'product_id' => $product_id,
                                            'written_date' => time(),
                                            
                                        ]);
                                
                            }
                        }
                            ?>
        </div>
    </div>
</div>
<!-- tab-container -->

<!-- End title -->

</div>
<!-- End container --> 
</div>
