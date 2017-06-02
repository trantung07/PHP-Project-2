<?php 

if (!empty($_GET['id'])) {
	$row = get_one('blog','id',$_GET['id']);
}else{
	echo 'Tham so id khong hop le';
}
?>
<div class="row">
    <div class="col-md-8">
        <section class="panel panel-info" style="margin-top: 20px;">
            <header class="panel-heading" >
                Chi tiết bài viết
            </header> 
            <?php if($row) : ?>
            <div class="panel-body table-responsive">
			<p>
				<a href="index.php?module=blog&action=list" class="btn btn-primary">
					Danh sách
				</a>
				<a href="index.php?module=blog&action=add" class="btn btn-success">
					Thêm mới 
				</a>
				<a href="index.php?module=blog&action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning">
					Chỉnh sửa
				</a>
				<a href="index.php?module=blog&action=delete&id=<?php echo $row['user_id']; ?>" class="btn  btn-danger" onclick="return confirm('Are you sure ? ')">
					Xóa 
				</a>
			</p>
			
				<table class="table table-bordered table-hover">
					
					<tbody>
						<tr>
							<th>ID</th>
							<td><?php echo $row['id'] ?></td>
						</tr>
						<tr>
							<th>Tên bài viết</th>
							<td><?php echo $row['name'] ?></td>
						</tr>
						
						<tr>
							<th>Ảnh</th>
							<td class="fix-img"><img src="../../uploads/products/<?php echo $row['image_title']; ?>"></td>
						</tr>
						<tr>
							<th>Tiêu đề</th>
							<td><?php echo $row['title'] ?></td>
						</tr>
					</tbody>
				</table>

				<div class="col-xs-12">
					<h2>Nội dung</h2>
					<p><?php echo $row['content']?></p>
				</div>
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
