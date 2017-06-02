<?php   if (isset($_SESSION['logIn'])){
	$u = $_SESSION['logIn'];
	//print_r($u['user_id']);
	$orders = get_all('`order`','customer_id',$u['user_id']);
	// echo "<pre>";
	// print_r($order);
	
}


?>
<div class="main-content">
    <div class="container">
        <div class="banner-header banner-lbook3">
            <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
            <div class="text">
                <h3>Đơn hàng đã thực hiện</h3>
                <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Đơn hàng đã thực hiện</p>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['logIn'])): ?> 
    <div class="cart-box-container">
        <div class="container container-ver2 space-padding-tb-30">
            <table class="table cart-table space-30 ">
				<thead>
					<tr>
						<th width="15%">ID đơn hàng</th>
						<th>Tổng tiền (VNĐ)</th>
						
						<th>Ngày đặt</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php  if($orders) : foreach($orders as $or) : ?>
						<tr>
							<th><?php  echo $or['id']; ?></th>
							<th><?php  echo number_format($or['total_amount'],0,' ','.'); ?></th>
							
							<th><?php  echo date('d-m-Y / h:i:s a',$or['created_date']) ?></th>
							<th><?php  if($or['status'] ==0){
							 echo 'Đang chờ xử lý' ;
							} else  if ($or['status'] ==1) {
								echo 'Hàng đã gửi đi' ;
							} else {
								echo 'Đã nhận hàng';
							}
							?>
								
							</th>
							<th><a href="index.php?route=cart&actions=my_order_detail&id=<?php echo $or['id']; ?>">Chi tiết</a></th>
						</tr>
					<?php  endforeach; endif; ?>
				</tbody>
			</table>
        </div>
        <!-- End container -->
        
        <!-- End container -->
    </div>
	<?php else: ?>
		<?php include 'page/404.php'; ?>
		
    <?php endif; ?> 
    <!-- End cat-box-container -->
</div>
