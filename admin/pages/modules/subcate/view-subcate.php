<?php 
$carts = get_all('category');

if (!empty($_GET['id'])) {
	$row = get_one('subcategory','subcate_id',$_GET['id']);
}else{
	echo 'Tham so id khong hop le';
}
?>
<div class="row">
	<div class="col-md-8">
		<section class="panel panel-info" style="margin-top: 20px;">
			<header class="panel-heading" >
				Chi tiết nhóm sản phẩm
			</header>  
			<div class="panel-body table-responsive">
				<p>
					<a href="index.php?module=subcate&action=list-subcate" class="btn btn-primary">
						Danh sách
					</a>
					<a href="index.php?module=subcate&action=add-subcate" class="btn btn-success">
						Thêm mới
					</a>
					<a href="index.php?module=subcate&action=edit-subcate&id=<?php echo $row['subcate_id'] ?>" class="btn btn-info">
						Chỉnh sửa
					</a>
					<a href="index.php?module=subcate&action=delete-subcate&id=<?php echo $row['subcate'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa (Sẽ ảnh hưởng tới các sản phẩm)? ')">
						Xóa 
					</a>
				</p>
				<?php if($row) : ?>
					<table class="table table-bordered table-hover">

						<tbody>
							<tr>
								<th>ID</th>
								<td><?php echo $row['subcate_id']; ?></td>
							</tr>
							<tr>
								<th>Tên nhóm danh mục con</th>
								<td><?php echo $row['subcate_name']; ?></td>

							</tr>

							<tr>
								<th>Tên nhóm danh mục cha</th>
								<?php foreach ($carts as $cart) { 
									if($row['parent_id'] == $cart['category_id'] ) {?>
									<td><?php  echo $cart['category_name']; ?></td>
									<?php } } ?>

								</tr>



								<tr>
									<th>Mô tả</th>
									<td><?php echo $row['description']; ?></td>
								</tr>

								<tr>
									<th>Trạng Thái</th>
									<?php if( $row['status'] == 1) : ?>
										<td><span class="btn btn-success btn-sm">Enabled</span></td>
									<?php else : ?>
										<td><span class="btn btn-default btn-sm">Disabled</span></td>
									<?php endif; ?>
								</tr>

								<tr>
									<th>Ngày tạo</th>
									<td><?php echo date('d-m-Y / h:i:s a',$row['created_date']); ?></td>
								</tr>


							</tbody>
						</table>

					<?php else: ?>
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Error!</strong> user not found ...
						</div>
					<?php endif; ?>
				</div>
			</section>



		</div>     
	</div>