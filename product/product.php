
<div class="banner-header banner-lbook3 space-30">
  <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
  <div class="text">
    <h3>Danh mục sản phẩm</h3>
    <p><a href="index.php" title="Home">Home</a><i class="fa fa-caret-right"></i>Danh mục sản phẩm</p>
  </div>
</div>
<!-- End Banner Grid -->
<div class="container">
  <div id="primary" class="col-xs-12 col-md-9">  
    <div class="wrap-breadcrumb">
      <div class="ordering">
        <div class="float-left">
          <span class="col active"></span>                    
          <p class="result-count">Các sản phẩm hiện tại trong Danh mục</p>
        </div>
        <div class="float-right">
          <form action="#" method="get" class="order-by">
            <p>Sort by :</p>
            <select class="orderby" name="orderby">
              <option>Phổ biến</option>                      
            </select>
          </form>
        </div>
      </div>
    </div>

    <!--   show detail -->
    <div class="products">
      <div class="item-inner">
        <?php                 
        /*<!--  require 'product/getallproduct.php'; -->*/

          //       if (isset($_GET['id'])) {
          //        $id = $_GET['id']; 
          //        //$product = "SELECT * FROM product where id_subcate = $id ";
          //        $products = get_all('product','id_subcate',$id);
          //    }
          //    else {
          //     //$product = "SELECT * FROM product order by rand() limit 8";
          //     $products = get_all('product');
          // }
        
        if (isset($_GET['product-detail']))  
        {
          $p = 'product-detail';
        }
        else {
          $p = 'getallproduct';
        }
        require 'product/'.$p.'.php';
        

// var_dump($res);
        ?>

<!-- 
        <?php if($products): foreach($products as $p): ?>
          <div class="product col-md-3 col-sm-6">
            <div class="product-images">
              <a href="#" title="product-images">
                <img class="primary_image" src="uploads/products/<?php echo $p['image']; ?>" alt=""/>
              </a>
            </div>
            <a href="#" title="Bouble Fabric Blazer"><p class="product-title"><?php echo $p['name']; ?></p></a>

            <p class="product-price"><?php echo number_format($p['price'],0,' ','.') ?> đ/kg</p>
            <div class="action">
              <a class="add-cart" href="cart/add-cart.php?id=<?php echo $p['id']; ?>" title="Mua hàng"></a>
              <a class="wish" href="#" title="Yêu thích"></a>
              <a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $p['id']; ?>" title="Xem chi tiết"></a>
            </div> -->
            <!-- End action
            <div class="social box">
              <h3>Chia sẻ :</h3>
              <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
              <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
              <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
              <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
              <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
            </div>
          </div>

        <?php endforeach; endif; ?> -->
        <!-- End product -->
      </div>
    </div>

    <!-- End product-content products  -->
                <!-- <?php if($num_page > 1) : 

                $disabled1 = ($get_page == 1) ? 'hidden' : '';
                $disabled2 = ($get_page == $num_page) ? 'hidden' : '';
                // echo $link1;
                 ?>
<div class="pagination-container">
    <nav class="pagination align-center">
        <a class="prev page-numbers <?php echo $disabled1; ?>" href="#"><i class="fa fa-angle-left"></i></a>
        <!-- <span class="page-numbers current">1</span>
        <a class="page-numbers" href="#">2</a>
        <a class="page-numbers" href="#">3</a> -->
        <!-- <?php for($i =1;$i<= $num_page; $i++) : 
        if($get_page == $i){
          $active = 'current';
        }else{
          $active ='';
        }
        ?>
        <li class="page-numbers <?php echo $active; ?>"><a href="index.php?route=product&actions=product&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php endfor; ?>
      <a class="next page-numbers <?php echo $disabled2; ?>" href="#"><i class="fa fa-angle-right"></i></a>
    </nav> -->
  </div>
<!-- <?php endif; ?> --> 
 --><!-- End pagination-container -->
</div>
<!-- End Primary -->

<div id="secondary" class="widget-area col-xs-12 col-md-3">
  <aside class="widget widget_product_categories">
    <h3 class="widget-title">Danh Mục</h3>
    <ul class="product-categories">
     <li><a href="index.php?route=product&actions=product" title="Tất cả Sản Phẩm" class="active">Tất cả Sản phẩm</a></li>
     <?php 
          // $category = "SELECT * FROM category";
     $res = get_all('category');
           //$subcategory = "SELECT * FROM subcategory";
     $ressub = get_all('subcategory');

     if ($res) :
      foreach ($res as $dataRow): ?>
    <li><a hrer="#"><?php echo $dataRow['category_name']; ?></a>  
      <ul  class="children">
        <?php if ($ressub) :
        foreach ($ressub as $subRow): 
          if($subRow['parent_id'] == $dataRow['category_id']) { ?>
        <li><a href="index.php?route=product&actions=product-detail&id=<?php echo $subRow['subcate_id']; ?>"><?php  echo $subRow['subcate_name']; ?></a></li>
        <?php } ?>
      <?php endforeach; endif; ?>
    </ul>

  </li>
<?php endforeach; endif; ?>         




</ul>
</aside>

<aside class="widget widget_feature">
  <h3 class="widget-title">Các sản phẩm mới</h3>
  <ul>
    <?php  $spnew = "SELECT * FROM product order by id DESC limit 3";
    $spmysql = mysqli_query($mysqli, $spnew);
    while ( $rowsp = mysqli_fetch_assoc($spmysql)) :               
     ?>

   <li>
    <a class="images" href="index.php?route=product&actions=details&id=<?php echo $rowsp['id']; ?>" title="images">
      <img class="img-responsive" src="uploads/products/<?php echo $rowsp['image']; ?>" alt="images">
    </a>
    <div class="text">
      <h2>
        <a href="index.php?route=product&actions=details&id=<?php echo $rowsp['id']; ?>" title="Butterfly Bar Stool"><?php echo $rowsp['name']; ?></a>
      </h2>
      <p><span><?php echo number_format($rowsp['price'],0,' ','.') ?> đ/kg</span></p>
      <p class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-half-o" aria-hidden="true"></i>
      </p>
    </div>
  </li>
<?php endwhile; ?>
</ul>
</aside>
</div>
<!-- End Secondary -->
</div>
<!-- end product sidebar -->
