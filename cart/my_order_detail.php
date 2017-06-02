<?php 
if(isset($_GET['id'])){
	$id = $_GET['id'];  
}
$sql = "SELECT p.image,p.name,od.quantity,od.price,o.created_date,o.status FROM `order` AS `o` INNER JOIN order_detail AS od ON o.id = od.order_id INNER JOIN product AS p ON od.product_id = p.id WHERE o.id = $id";
	$res = mysqli_query($mysqli,$sql);
	
	 if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}
	$details = $data;
$total = get_all('`order`','id',$id);

?>
<div class="main-content">
    <div class="container">
        <div class="banner-header banner-lbook3">
            <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
            <div class="text">
                <h3>Chi tiết đơn hàng</h3>
                <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Chi tiết đơn hàng</p>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['logIn'])): ?> 
    <div class="cart-box-container">
        <div class="container container-ver2 space-padding-tb-30">
            <table class="table cart-table space-30 ">
				<thead>
					<tr>
						<th>Hình ảnh</th>
						<th>Sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá (đ/kg)</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php  if($details) : foreach($details as $row) : ?>
						<tr>
							<th><img width="50px;" src="uploads/products/<?php  echo $row['image']; ?>"></th>
							<th><?php  echo $row['name']; ?></th>
							<th><?php  echo $row['quantity']; ?></th>
							<th><?php  echo number_format($row['price'],0,' ','.'); ?></th>
							
							
						</tr>
					<?php  endforeach; endif; ?>
				</tbody>
			</table>
			<?php  if($total) : foreach($total as $tot) : ?>
			<div id="tbody-list-all-cart">
                            <div class="row-total">
                                <div class="float-left">
                                    <h3>Tổng tiền</h3>
                                </div>
                                <!--End align-left-->
                                <div class="float-right">
                                    <p><?php echo number_format($tot['total_amount'],0,' ','.'); ?> VNĐ</p>
                                </div>
                                <!--End align-right-->
                            </div>                            
            </div>
            <div id="tbody-list-all-cart">
                 <a class="link-v1 lh-50 bg-brand" href="index.php?route=cart&actions=my_order" ><i class="fa fa-caret-left"></i> QUAY LẠI</a>                           
            </div>
            <?php  endforeach; endif; ?>
        </div>
        <!-- End container -->
        
        <!-- End container -->
    </div>
	<?php else: ?>
		<?php include 'page/404.php'; ?>
		
    <?php endif; ?> 
    <!-- End cat-box-container -->
</div>