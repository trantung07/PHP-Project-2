<div class="row" >
		<div class="col-xs-8">
			<section class="panel panel-info" style="margin-top: 20px;">
			    <header class="panel-heading ">
			        Thêm mới người dùng
			    </header>
			
		<div class="panel-body">
			<form action="" method="POST" role="form">
		
				<div class="form-group">
					<label for="">Tên tài khoản</label>
					<input type="text" class="form-control" name="username" placeholder="Nhập tài khoản">
				</div>

				<div class="form-group">
					<label for="">Họ tên</label>
					<input type="text" class="form-control" name="full_name" placeholder="Nhập Họ tên">
				</div>
		
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Nhập email">
				</div>

				<div class="form-group">
					<label for="">SĐT</label>
					<input type="text" class="form-control" name="phone" placeholder="Nhập Số điện thoại">
				</div>

				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
				</div>

				<div class="form-group">
					<label for="password">Địa chỉ</label>
					<input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
				</div>

				<div class="form-group">
					<label for="">Vai trò</label>
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
	</div>
</div>
<?php 
if (isset($_POST['username'])) {
	if (!empty($_POST['password'])) {
		$_POST['password'] = MD5($_POST['password']);
	}
	insert('user',$_POST);
	header('location: index.php?module=user&action=list-user');
}
?>


