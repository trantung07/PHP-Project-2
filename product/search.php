<?php 

if (isset($_GET['keyword'])) {
 $keyword = $_GET['keyword']; 
 // $key = '%'.$keyword.'%';
 // $res = get_like('product','name',$key);

  }
?>
<?php 
  $sql="SELECT * FROM product WHERE name like '%$keyword%'"; 

  $res = mysqli_query($mysqli,$sql);
  $total = mysqli_num_rows($res);

  if ($res && $total) {
      while ($ring = mysqli_fetch_assoc($res)) {
        $data[] = $ring;
      }
    }
  $search = $data;
  $show = 6;
  $page = ceil($total/$show);
  $get_page = isset($_GET['page']) ? $_GET['page'] : 1;
  $start = $show*($get_page - 1); 
  $key = '%'.$keyword.'%';
  if ($page > 1) {
      $search = phan_trang('product','name',$key,$start,$show);
  }
 ?>
<div class="banner-header banner-lbook3 space-30">
    <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
    <div class="text">
        <h3>tìm kiếm</h3>
        <p><a href="index.php" title="Home">Trang Chủ</a><i class="fa fa-caret-right"></i>Tìm kiếm</p>
    </div>
</div>
<!-- End Banner Grid -->
<div class="container">
    <div id="primary" class="col-xs-12 col-md-9">  
       <div class="wrap-breadcrumb">
            <div class="ordering">
                <div class="float-left">
                    <span class="col active"></span>                    
                    
                </div>
                
            </div>
        </div>
<?php if($get_page==$page){
          $last  = $total;
         }else{
          $last=($get_page*$show);
} ?>
        <!--   show detail -->  
        <?php echo 'Hiển thị các kết quả từ '.($start+1).' - '.$last.' trong tổng số '. $total.' kết quả tìm được sản phẩm có tên chưa từ khóa : <b>'.$keyword.'</b>'; ?>
<?php 
 
if($search): foreach ($search as $row ):
    ?>   
<div class="products">
  <div class="item-inner"> 
 <div class="product col-md-4">
  <div class="product-images">
    <a href="index.php?route=product&actions=details&id=<?php echo $row['id']; ?>" title="product-images">
      <img class="primary_image" src="uploads/products/<?php echo $row['image']?>" alt=""/>
    </a>
  </div>
  <a href="index.php?route=product&actions=details&id=<?php echo $row['id']; ?>" title="Bouble Fabric Blazer"><p class="product-title"><?php echo $row['name']; ?></p></a>
  <p class="product-price-old"></p>
  <p class="product-price"><?php echo number_format($row['price'],0,' ','.'); ?> đ/kg</p>
 
  <div class="action">
    <a class="add-cart" href="cart/add-cart.php?id=<?php echo $row['id']; ?>" title="Add to cart"></a>
    <a class="wish" href="#" title="Wishlist"></a>
    <a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $row['id']; ?>" title="Quick view"></a>
  </div>
  <!-- End action -->
  <div class="social box">
    <h3>Share this :</h3>
    <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
    <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
    <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
    <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
    <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
  </div>
</div>
</div>
</div>
<?php endforeach; endif; ?>
 <!-- End product-content products  -->
        <div class="pagination-container">
          <nav class="pagination align-center">
            <?php 
                if($page > 1) : 
                    $disabled1 = ($get_page == 1) ? 'hidden' : '';
                    $disabled2 = ($get_page == $page) ? 'hidden' : '';
             ?>
                <a class="prev page-numbers <?php echo $disabled1; ?>" href="index.php?route=product&actions=search&keyword=<?php echo $keyword ?>&page=<?php echo ($get_page-1) ?>"><i class="fa fa-angle-left"></i></a>
                        <?php 
                        for($i =1;$i<= $page; $i++) : 
                                if($get_page == $i){
                                    $actions = 'actions';
                                }else{
                                    $actions ='';
                                }
                        ?>
               <a <?php if($i==$get_page){echo "style='background-color:green'";}?> class="<?php echo $actions; ?>" href="index.php?route=product&actions=search&keyword=<?php echo $keyword;?>&page=<?php echo $i; ?>"><?php echo $i ?></a>
                        <?php endfor; ?>
                <a class="next page-numbers <?php echo $disabled2; ?>" href="index.php?route=product&actions=search&keyword=<?php echo $keyword ?>&page=<?php echo ($get_page+1) ?>"><i class="fa fa-angle-right"></i></a>
            <?php endif; ?>
          </nav>
        </div>
        <!-- End pagination-container -->
    </div>
    <!-- End Primary -->

    <div id="secondary" class="widget-area col-xs-12 col-md-3">
        <aside class="widget widget_product_categories">
            <h3 class="widget-title">Danh Mục</h3>
            <ul class="product-categories">
                <?php 
                $category = "SELECT * FROM category";
                $res = mysqli_query($mysqli, $category);
                $subcategory = "SELECT * FROM subcategory";
                $ressub = mysqli_query($mysqli, $subcategory);

                if ($res && mysqli_num_rows($res)) :
                    foreach ($res as $dataRow): ?>
                <li><a hrer="#"><?php echo $dataRow['category_name']; ?></a>  
                    <ul  class="children">
                        <?php if ($ressub && mysqli_num_rows($ressub)) :
                        foreach ($ressub as $subRow): 
                            if($subRow['parent_id'] == $dataRow['category_id']) { ?>
                        <li><a href="index.php?route=product&actions=product-detail&id=<?php echo $subRow['subcate_id']; ?>"><?php  echo $subRow['subcate_name']; ?></a></li>
                        <?php } ?>
                    <?php endforeach; endif; ?>
                </ul>

            </li>
        <?php endforeach; endif; ?>         
        <li><a href="index.php?route=product&actions=product" title="All Product">Tất cả Sản phẩm</a></li>



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
