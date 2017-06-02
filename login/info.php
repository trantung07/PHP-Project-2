<?php   if (isset($_SESSION['logIn'])){
	$u = $_SESSION['logIn'];
}
$row = get_all('user','user_id',$u['user_id']);


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
            <table class="table cart-table space-30 ">
				<?php if($row) : foreach($row as $row):?>
					<table class="table table-hover table-hover">

						<tbody>
							
							<tr>
								<th>Tài khoản</th>
								<td><?php echo $row['username'] ?></td>
							</tr>
							<tr>
								<th>Password</th>
								<td ><?php echo $row['password'] ?></td>
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
					<?php endforeach;  ?>

				<?php else: ?>
					<div class="alert alert-warning">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Error!</strong> user not found ...
					</div>
				<?php endif; ?>
			</table>
			
			<a class="link-v1 lh-50 bg-brand" href="index.php?route=login&actions=edit-info" >THAY ĐỔI THÔNG TIN <i class="fa fa-caret-right"></i></a>
		
        </div>
        <!-- End container -->
        
        <!-- End container -->
    </div>

	<?php else: ?>
		<?php include 'page/404.php'; ?>
		
    <?php endif; ?> 
    <!-- End cat-box-container -->
</div>