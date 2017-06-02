<?php if (!empty($_GET['id'])){
	$id = $_GET['id'];
}
$sql = "SELECT o.id,u.full_name,u.address,u.email,o.total_amount,o.status,o.created_date FROM `order` AS `o` INNER JOIN user AS u ON o.customer_id = u.user_id WHERE o.id = $id" ;
$res = mysqli_query($mysqli,$sql);
	
	 if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}
	$order = $data;
$sql1 = "SELECT p.image,p.name,od.quantity,od.price FROM `order` AS `o` INNER JOIN order_detail AS od ON o.id = od.order_id INNER JOIN product AS p ON od.product_id = p.id WHERE o.id = $id";
	$res1 = mysqli_query($mysqli,$sql1);
	
	 if ($res1 && mysqli_num_rows($res1)) {
		while ($row1 = mysqli_fetch_assoc($res1)) {
			$data1[] = $row1;
		}
	}
	$details = $data1;
 ?>
 <div class="row">
    <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading" style="margin-top: 20px;">
              Chi tiết đơn hàng
            </header>
            <div class="panel-body table-responsive">
                            <p>
								<a href="index.php?module=order&action=list" class="btn btn-primary">
									Danh sách
								</a>
								<?php if($order)  : foreach($order as $row) :?>
								<a href="index.php?module=order&action=edit&id=<?php echo $row['id'] ?>" class="btn btn-info">
									Chỉnh sửa
								</a>
								<?php endforeach; endif; ?>
							</p>
                            	<?php if($order)  : foreach($order as $row) :?>
                                <table class="table table-hover table-bordered">
                                  <tbody>
									<tr>
										<th>ID</th>
										<td><?php echo $row['id'] ?></td>
									</tr>
									<tr>
										<th>Tên người đặt hàng</th>                                                
										<td><?php echo $row['full_name'] ?></td>
									</tr>
									<tr>
										<th>Địa chỉ</th>                                                
										<td><?php echo $row['address'] ?></td>
									</tr>
									
									<tr>
										<th>Email</th>
										<td><?php echo $row['email'] ?></td>
									</tr>
									<tr>
										<th>Tổng tiền</th>
										<td><?php echo number_format($row['total_amount'],0,' ','.') ?> VNĐ</td>
									</tr>
									<tr>
										<th>Trạng thái</th>
                                        <?php if($row['status'] == 0){
			                                                  $st = 'Đang xử lý' ;
			                                                }else if($o['status'] == 1){
			                                                  $st ='Đang giao hàng' ;
			                                                }else {
			                                                	$st ='Đã kết thúc' ;
			                                                } ?>
										<td><?php echo $st ?></td>
									</tr>
                                    <tr>
                                        <th>Ngày đặt hàng</th>
                                        <td><?php echo date('d-m-Y / h:i:s a',$row['created_date']); ?></td>
                                    </tr>
								</tbody>
                            </table>
                            <?php endforeach; endif; ?>
                      
            </div>
        </section>
        <section class="panel">
          <header class="panel-heading">
              Thông tin chi tiết
            </header>    
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
					<?php  if($details) : foreach($details as $dt) : ?>
						<tr>
							<th><img width="100px;" src="../../uploads/products/<?php  echo $dt['image']; ?>"></th>
							<th><?php  echo $dt['name']; ?></th>
							<th><?php  echo $dt['quantity']; ?></th>
							<th><?php  echo number_format($dt['price'],0,' ','.'); ?></th>
							
								
							</th>
						</tr>
					<?php  endforeach; endif; ?>
				</tbody>
			</table> 
                      
            </div>
        </section>
        </div>
        </div>
       