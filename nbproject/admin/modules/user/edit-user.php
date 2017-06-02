<?php 
ob_start();

if (!empty($_GET['id'])) {
	$id =$_GET['id'];
	$sql = "SELECT * FROM user WHERE id='$id' LIMIT 1";
	$res = mysqli_query($mysqli, $sql);

	$row = mysqli_fetch_assoc($res);
}else{
	echo 'Tham so id khong hop le';
}
?>
<div class="container">
	<?php if($row) : ?>
		<div class="col-md-4">
			<form action="" method="POST" role="form">

				<div class="form-group">
					<label for="username">Ussername</label>
					<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
				</div>

				<div class="form-group">
					<label for="full_name">Full Name</label>
					<input type="email" class="form-control" name="full_name" value="<?php echo $row['full_name']; ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="email" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" >
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<textarea  name="address" rows="4" cols="50" class="form-control" value="<?php $row['address'];?>"></textarea >
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
			<?php 

			if (isset($_POST['submit'])) {
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				if (!empty($password)) {
					$password = MD5($password);
				}else{
					$password = $row['password'];
				}

				$sql = "UPDATE user SET username = '$username', email ='$email', password = '$password' WHERE id=$id";

				if(mysqli_query($mysqli, $sql)){
					header('location: index.php?module=user&action=list-user');
				}else{
					echo 'Update error!';
				}

			}
			?>

		<?php else: ?>
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Error!</strong> user not found ...
			</div>
		<?php endif; ?>
	</div>

