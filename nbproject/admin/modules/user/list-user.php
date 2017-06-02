<?php 
ob_start();
$users = get_all('user');
/*echo "<pre>";
print_r($users);*/

// echo '<pre>';
// var_dump($res);
?>
<div class="container">
	<p>
		<a href="index.php?module=user&action=add-user" class="btn btn-success"><i class="fa fa-plus-square ml-10 mr-10" aria-hidden="true"></i>Add new</a>
	</p>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Ordinal_N</th>
				<th>Username</th>
				<th>Full_Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Return Customer</th>
				<th>Role</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			<?php if($users) :  
			$number = 0;
			foreach ($users as $row) :
				?>
			<tr>
				<td><?php echo ++$number; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['full_name']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td>cấp độ</td>
				<td>
					<?php if($row['role'] == 1 ) : ?>
						<a href="index.php?module=user&action=list-user&role=1" class="label label-success">Customer</a>
					<?php elseif($row['role'] == 2): ?>
						<a href="index.php?module=user&action=list-user&role=2" class="label label-warning">Moderator</a>
					<?php else: ?>
						<a href="index.php?module=user&action=list-user&role=3" class="label label-danger">Admin</a>
					<?php endif; ?>
				</td>
				<td>
					<a href="<?php to('user','edit-user',$row['id']) ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
					<a href="<?php if( $row['role'] != 3 ) {to('user','delete-user',$row['id']);} ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')"><i class="fa fa-trash" aria-hidden="true"></i></a>
					<a href="<?php to('user','view-user',$row['id']) ?>" class="btn btn-sm btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
				</td>
			</tr>
		<?php endforeach; endif; ?>
	</tbody>
</table>
</div>