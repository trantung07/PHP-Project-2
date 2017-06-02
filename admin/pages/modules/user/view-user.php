<?php 

if (!empty($_GET['id'])) {
	$row = get_one('user','user_id',$_GET['id']);
}else{
	echo 'Tham so id khong hop le';
}
?>
<div class="row">
    <div class="col-md-8">
        <section class="panel panel-info" style="margin-top: 20px;">
            <header class="panel-heading" >
                Chi tiết tài khoản người dùng
            </header> 
            <div class="panel-body table-responsive">
				<p>
					<a href="index.php?module=user&action=list-user" class="btn btn-primary">
						Danh sách
					</a>
					<a href="index.php?module=user&action=add-user" class="btn btn-success">
						Thêm mới
					</a>
					<a href="index.php?module=user&action=edit-user&id=<?php echo $row['user_id']; ?>" class="btn btn-warning">
						Chỉnh sửa
					</a>
					<a href="index.php?module=user&action=delete-user&id=<?php echo $row['user_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure ? ')">
						Xóa
					</a>
				</p>
				<?php if($row) : ?>
					<table class="table table-bordered table-hover">

						<tbody>
							<tr>
								<th>ID</th>
								<td><?php echo $row['user_id'] ?></td>
							</tr>
							<tr>
								<th>Tài khoản</th>
								<td><?php echo $row['username'] ?></td>
							</tr>
							<tr>
								<th>Họ tên</th>
								<td><?php echo $row['full_name'] ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo $row['email'] ?></td>
							</tr>
							<tr>
								<th>SĐT</th>
								<td><?php echo $row['phone'] ?></td>
							</tr>
							<tr>
								<th>Địa chỉ</th>
								<td><?php echo $row['address'] ?></td>
							</tr>
							<tr>
								<th>Vai trò</th>

								<td>
									<?php if($row['role'] == 1 ) : ?>
										<a href="index.php?action=list-user&role=1" class="label label-success">Customer</a>
									<?php elseif($row['role'] == 2): ?>
										<a href="index.php?action=list-user&role=2" class="label label-danger">Moderator</a>
									<?php else: ?>
										<a href="index.php?action=list-user&role=3" class="label label-primary">Admin</a>
									<?php endif; ?>
								</td>
								
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

