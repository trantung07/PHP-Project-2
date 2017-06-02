<?php 
$sql = "SELECT o.id,u.full_name,u.address,o.total_amount,o.status,o.created_date FROM `order` AS `o` INNER JOIN user AS u ON o.customer_id = u.user_id order by o.created_date desc" ;
$res = mysqli_query($mysqli,$sql);
	
	 if ($res && mysqli_num_rows($res)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$data[] = $row;
		}
	}
	$orders = $data;
	//print_r($orders);
 ?>
 <div class="row" >
		<div class=" col-xs-12">
			<section class="panel panel-info" style="margin-top: 20px;">
			                              <header class="panel-heading">
			                                  Danh sách đơn hàng
			                            </header>
			                            <div class="panel-body table-responsive">
			                                <table class="table table-hover">
			                                  <thead>
			                                    <tr>
			                                      <th>ID</th>
			                                      <th>Tên người đặt hàng</th>
			                                      <th>Địa chỉ</th>
			                                      <th>Tổng tiền (VNĐ)</th>
			                                      <th>Trạng thái</th>
			                                      <th>Ngày đặt hàng</th>
			                                      <th></th>
			                                      
			                                  </tr>
			                              </thead>
			                              <tbody>
			                                <?php if($orders) :  
			                                    foreach ($orders as $o) :
			                                ?>
			                                <tr>
			                                    <td><?php echo $o['id']; ?></td>
			                                    <td><?php echo $o['full_name']; ?></td>
			                                    <td><?php echo $o['address']; ?></td>
			                                    <td><?php echo number_format($o['total_amount'],0,' ','.') ?></td>
			                                    <?php if($o['status'] == 0){
			                                                  $st = 'Đang xử lý' ;
			                                                }else if($o['status'] == 1){
			                                                  $st ='Đang giao hàng' ;
			                                                }else {
			                                                	$st ='Đã kết thúc' ;
			                                                } ?>
			                                        <td><?php echo $st ?></td>
			                                    <td><?php echo date('d-m-Y / h:i:s a',$o['created_date']); ?></td>
										
			                                  <!-- <td>$1500</td> -->
			                                  <td>
				                                    <a href="<?php to('order','edit',$o['id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
						                                <i class="fa fa-pencil-square-o"></i>
						                            </a>
						                            <a href="<?php to('order','delete',$o['id']) ?>" title="Xóa" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa? ')">
						                                <i class="fa fa-trash-o" ></i>
						                            </a>		                                      
						                            <a href="<?php to('order','view',$o['id']) ?>" type="button" class="btn btn-sm btn-success" title="Xem chi tiết">
						                                <i class="fa fa-eye" ></i>
						                           	</a>
			                                  </td>
			                              </tr>
			                                <?php endforeach; endif; ?>
			                              
			                                </tbody>
			                            </table>
			                            </div>
			                            </section>
		</div>
		
	
</div>