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
	<p>
		<a href="index.php?module=user&action=list-user" class="btn btn-primary">list users</a>
		<a href="index.php?module=user&action=add-user" class="btn btn-success">Add users</a>
		<a href="index.php?module=user&action=edit-user&id=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
		<a href="index.php?module=user&action=delete-user&id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ? ')">
			Delete
		</a>
	</p>
	<?php if($row) : ?>
		<table class="table table-bordered table-hover">			
			<tbody>
				<tr>
					<th>ID</th>
					<td><?php echo $row['id'] ?></td>
				</tr>
				<tr>
					<th>Username</th>
					<td><?php echo $row['username'] ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $row['email'] ?></td>
				</tr>
				<tr>
					<th>Full Name</th>
					<td><?php echo $row['full_name'] ?></td>
				</tr>
				<tr>
					<th>Phone</th>
					<td><?php echo $row['phone'] ?></td>
				</tr>
				
				<tr>
					<th>Password</th>
					<td><?php echo $row['password'] ?></td>
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