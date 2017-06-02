<?php   if (isset($_SESSION['logIn'])){
	$u = $_SESSION['logIn'];
}

$row = get_one('user','user_id',$u['user_id']);

if (isset($_POST['email'])) {
		if (!empty($_POST['password'])) {
			$_POST['password'] = MD5($_POST['password']);
		}else{
			$_POST['password'] = $row['password'];
		}
		update('user',$_POST,['user_id'=>$u['user_id']]);
		header('location: index.php?route=login&actions=info');
	}
?>
<div class="main-content">
    <div class="container">
        <div class="banner-header banner-lbook3">
            <img src="public/images/banner-catalog1.jpg" alt="Banner-header">
            <div class="text">
                <h3>Thông tin</h3>
                <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Thông tin tài khoản</p>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['logIn'])): ?> 
    <div class="cart-box-container">
        <div class="container container-ver2 space-padding-tb-30">
            <?php if($row) : ?>
		<div class="col-md-4">
			<form action="" method="POST" role="form">


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
					<label for="password">Mật khẩu mới:</label>
					<input type="password" class="form-control" name="password">
				</div>

				<div class="form-group">
					<label for="password">Địa chỉ</label>
					<input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address">
				</div>
				<button type="submit" class="btn btn-primary">Xác nhận</button>
			</form>
		</div>

	<?php else: ?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!</strong> user not found ...
		</div>
	<?php endif; ?>
			
        </div>
        <!-- End container -->
        
        <!-- End container -->
    </div>

	<?php else: ?>
		<?php include 'page/404.php'; ?>
		
    <?php endif; ?> 
    <!-- End cat-box-container -->
</div>