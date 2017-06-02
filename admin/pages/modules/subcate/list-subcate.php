<?php 

$cats = get_all('subcategory');

// echo '<pre>';
// var_dump($cats);
?>

<div class="row" >
	<div class="col-xs-12">
		<section class="panel panel-info" style="margin-top: 20px;">
			<header class="panel-heading">
				Danh sách nhóm sản phẩm
			</header>
			<div class="panel-body table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên nhóm sản phẩm con</th>
							<th>Id cha</th>
							<th>Ngày tạo</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php if($cats) :  
						foreach ($cats as $row) :
							?>
						<tr>
							<td><?php echo $row['subcate_id']; ?></td>
							<td><?php echo $row['subcate_name']; ?></td>
							<?php if($row['parent_id'] == 1){
								$st = 'Rau Củ Quả' ;
							}else if ($row['parent_id'] == 2) {
								$st = 'Trái Cây' ;
							}else if ($row['parent_id'] == 3) {
								$st = 'Thực Phẩm' ;
							}else  {
								$st = 'Sản phẩm khác' ;
							} ?>
							<td><?php echo $st ?></td>
							<td><?php echo date('d-m-Y / h:i:s a',$row['created_date']); ?></td>
							
							<!-- <td>$1500</td> -->
							<td>
								<a href="<?php to('subcate','edit-subcate',$row['subcate_id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
									<i class="fa fa-pencil-square-o"></i>
								</a>
							</td>
							<td>
								<a href="<?php to('subcate','delete-subcate',$row['subcate_id']) ?>" title="Xóa" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')">
									<i class="fa fa-trash-o" ></i>
								</a>
							</td>
							<td>
								<a href="<?php to('subcate','view-subcate',$row['subcate_id']) ?>" type="button" class="btn btn-sm btn-success" title="Xem chi tiết">
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
