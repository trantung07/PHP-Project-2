<?php 

if (!empty($_GET['id'])) {
	$row = get_one('user','user_id',$_GET['id']);
	if (isset($_POST['username'])) {
		if (!empty($_POST['password'])) {
			$_POST['password'] = MD5($_POST['password']);
		}else{
			$_POST['password'] = $row['password'];
		}

		update('user',$_POST,['user_id'=>$_GET['id']]);
		header('location: index.php?module=user&action=list-user');
	}
	// var_dump($_POST);
	
}else{
	echo 'Tham so id khong hop le';
}


?>
<div class="container">
<div class="row">
<p>
	<a href="index.php?action=list-user" class="btn btn-success btn-sm">Back to List</a>
</p>
	<?php if($row) : ?>
		<div class="col-md-4">
			<form action="" method="POST" role="form">


				<div class="form-group">
					<label for="username">Tài khoản</label>
					<input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username">
				</div>

				<div class="form-group">
					<label for="username">Họ tên</label>
					<input type="text" class="form-control" value="<?php echo $row['full_name']; ?>" name="full_name">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email">
				</div>

				<div class="form-group">
					<label for="email">SĐT</label>
					<input type="text" class="form-control" value="<?php echo $row['phone']; ?>" name="phone">
				</div>

				<div class="form-group">
					<label for="password">Mật khẩu</label>
					<input type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
					<label for="password">Địa chỉ</label>
					<input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address">
				</div>

				<div class="form-group">
					<select name="role" id="inputRole" class="form-control" required="required">
						<option value="1">Customer</option>
						<option value="2">Moderator</option>
						<option value="3">Admin</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary">Xác nhận</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</form>
		</div>

	<?php else: ?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!</strong> user not found ...
		</div>
	<?php endif; ?></div>
</div>

