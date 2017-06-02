<?php ob_start(); ?>
<div class="container">
	<p>
		<a href="<?php to('user','list-user') ?>" class="btn btn-sm btn-success"><i class="fa fa-backward" aria-hidden="true"></i>&nbsp;Back to List</a>
	</p>
	<div class="col-md-4">
		<form action="" method="POST" role="form" class="form-horizontal">

			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" class="form-control" name="username" placeholder="Input username">
			</div>

			<div class="form-group">
				<label for="email">Full Name</label>
				<input type="text" class="form-control" name="full_name" placeholder="Input email">
			</div>
			<div class="form-group">
				<label for="phone">Phone</label>
				<input type="text" class="form-control" name="phone" placeholder="Input password">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Input password">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Input password">
			</div>	
			<div class="form-group">
				<label for="address">Address</label>
				<textarea  name="address" rows="4" cols="50" class="form-control"></textarea >
				</div>
				<div class="form-group">
					<label for="">Role</label>
					<select name="role" id="inputRole" class="form-control" required="required">
						<option value="1">Customer</option>
						<option value="2">Moderator</option>
						<option value="3">Admin</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

	<?php 
	if (isset($_POST['username'])) {
		if (!empty($_POST['password'])) {
			$_POST['password'] = MD5($_POST['password']);
		}
		insert('user',$_POST);
		header("location:index.php?module=user&action=list-user");
	}	
	?>
	