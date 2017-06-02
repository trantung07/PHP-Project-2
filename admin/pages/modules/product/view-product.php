<?php 

if (!empty($_GET['id'])) {
	$row = get_one('product','id',$_GET['id']);
}else{
	echo 'Tham so id khong hop le';
}
?>
<div class="row">
    <div class="col-md-8">
        <section class="panel panel-info" style="margin-top: 20px;">
            <header class="panel-heading" >
                Chi tiết sản phẩm
            </header> 
            <div class="panel-body table-responsive">
			<p>
				<a href="index.php?module=product&action=list-product" class="btn btn-primary">
					Danh sách
				</a>
				<a href="index.php?module=product&action=add-product" class="btn btn-success">
					Thêm mới 
				</a>
				<a href="index.php?module=product&action=edit-product&id=<?php echo $row['id']; ?>" class="btn btn-warning">
					Chỉnh sửa
				</a>
				<a href="index.php?module=product&action=delete-product&id=<?php echo $row['user_id']; ?>" class="btn  btn-danger" onclick="return confirm('Are you sure ? ')">
					Xóa 
				</a>
			</p>
			<?php if($row) : ?>
				<table class="table table-bordered table-hover">
					
					<tbody>
						<tr>
							<th>Id</th>
							<td><?php echo $row['id'] ?></td>
						</tr>
						<tr>
							<th>Tên sản phẩm</th>
							<td><?php echo $row['name'] ?></td>
						</tr>
						
						<tr>
							<th>Ảnh</th>
							<td class="fix-img"><img src="../../uploads/products/<?php echo $row['image']; ?>"></td>
						</tr>
						<tr>
							<th>Giá</th>
							<td><?php echo number_format($row['price'],0,' ','.') ?> đ/kg</td>
						</tr>
						
						<tr>
							<th>Chi tiết SP</th>
							<td>
								<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal-<?php echo $row['id']; ?>">Detail<br>product</button>
								<div class="modal fade" id="myModal-<?php echo $row['id'];?>" role="dialog">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">       
											<div class="modal-body">
												<p><?php												
													echo $row['detail_product'];									
													?></p>
												</div>									
											</div>
										</div>
									</div>
									
								</td>						
							</tr>
							
							<tr>
								<th>Views</th>
								<td><?php echo $row['views']; ?></td>
							</tr>
							
							
							<tr>
								<th>Id Nhóm SP thứ cấp</th>
								<td><?php echo $row['id_subcate']; ?></td>
							</tr>
							<tr>
								<th>Ngày tạo</th>
								<td><?php echo date('d-m-Y / h:i:s a',$row['created_date']); ?></td>
							</tr>
							<tr>
								<th>Status</th>
								
								<td>
									<?php if($row['status'] == 1 ) : ?>
										<span class="btn btn-primary btn-sm">Kích hoạt</span>							
									<?php else: ?>
										<span class="btn btn-default btn-sm">Không kích hoạt</span>
									<?php endif; ?>
								</td>
								
							</tr>
						</tbody>
					</table>
					</div>
					
				<?php else: ?>
					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Error!</strong> user not found ...
					</div>
				<?php endif; ?></div>
			</div>
		</div>
		</section>
		</div>
		</div>
