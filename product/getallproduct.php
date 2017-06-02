<?php 
// include 'config.php';
// if (isset($_GET['id'])) {
//  $id = $_GET['id']; 
// }
// else {
//   //chay sang getallproduct;
// }
// $product = "SELECT * FROM product"; 
// // id_subcate = $id";
// $ress = mysqli_query($mysqli, $product);
// var_dump($ress);
?>
<?php 
$total = get_count('product');

$show = 6;
$page = ceil($total/$show);

$users = get_all('product');  
$get_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = $show*($get_page - 1);
if ($page > 1) {
    $users = phan_trang('product',false,false,$start,$show);

}
 ?>

<?php 
if($users): foreach ($users as $res ) :  
?>
  <div class="product col-md-4">
  <div class="product-images">
    <a href="index.php?route=product&actions=details&id=<?php echo $res['id']; ?>" title="product-images">
      <img class="primary_image" src="uploads/products/<?php echo $res['image']; ?>" alt=""/>
    </a>
  </div>
  <a href="index.php?route=product&actions=details&id=<?php echo $res['id']; ?>" title="Bouble Fabric Blazer"><p class="product-title"><?php echo $res['name']; ?></p></a>
  <p class="product-price-old"></p>
  <p class="product-price"><?php echo number_format($res['price'],0,' ','.'); ?> đ/kg</p>
  
  <div class="action">
    <a class="add-cart" href="cart/add-cart.php?id=<?php echo $res['id']; ?>" title="Add to cart"></a>
    <a class="wish" href="#" title="Wishlist"></a>
    <a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $res['id']; ?>" title="Quick view"></a>
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

<?php endforeach; endif; ?>

<nav class="pagination align-center">
            <?php 
                if($page > 1) : 
                    $disabled1 = ($get_page == 1) ? 'hidden' : '';
                    $disabled2 = ($get_page == $page) ? 'hidden' : '';
             ?>
                <a class="prev page-numbers <?php echo $disabled1; ?>" href="index.php?route=product&actions=product&page=<?php echo ($get_page-1) ?>"><i class="fa fa-angle-left"></i></a>
                        <?php for($i =1;$i<= $page; $i++) : 
                                if($get_page == $i){
                                    $actions = 'actions';
                                }else{
                                    $actions ='';
                                }
                        ?>
                <a <?php if($i==$get_page){echo "style='background-color:green'";}?> class="<?php echo $actions; ?>" href="index.php?route=product&actions=product&page=<?php echo $i; ?>"><?php echo $i ?></a>
                        <?php endfor; ?>
                <a class="next page-numbers <?php echo $disabled2; ?>" href="index.php?route=product&actions=product&page=<?php echo ($get_page+1) ?>"><i class="fa fa-angle-right"></i></a>
            <?php endif; ?>
            </nav>