<?php 
$users = get_all('user');
// Sắp xếp list theo vai trò
if (isset($_GET['role'])) {
  $users = get_all('user','role',$_GET['role']);
}
// Tìm kiếm theo tên
if (isset($_POST['username'])) {
  $users = get_like('user','username',$_POST['username']);
}
 ?>

<div class="row" >
		<div class="col-xs-12">
			<section class="panel panel-info" style="margin-top: 20px;">
			    <header class="panel-heading ">
			        Danh sách người dùng
			    </header>
			<div class="panel-body table-responsive">
				<p >
					<form action="" method="POST" class="form-inline" role="form">

						<div class="form-group">
							<a href="index.php?module=user&action=add-user" class="btn btn-success">Thêm mới</a>
						</div>
						<div class="form-group">
							<label class="sr-only" for="">Tài khoản</label>
							<input type="text" class="form-control" name="username">
						</div>


						<button type="submit" class="btn btn-primary" name="searchbut">Lọc</button>
						<div class="form-group">
							<a href="index.php?module=user&action=list-user" class="btn btn-success">Refresh</a>
						</div>
					</form>
				</p>
			<table class="table table-hover" >
				<thead>
					<tr>
						<th>Id</th>
						<th>Tài khoản</th>
						<th>Họ tên</th>
						<th>Email</th>
						<th>SĐT</th>
						<th>Địa chỉ</th>
						<th>Vai trò</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if($users) :  
					foreach ($users as $row) :
						?>
					<tr>
						<td><?php echo $row['user_id']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['full_name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td>
							<?php if($row['role'] == 1 ) : ?>
								<a href="index.php?module=user&action=list-user&role=1" class="label label-success">Customer</a>
							<?php elseif($row['role'] == 2): ?>
								<a href="index.php?module=user&action=list-user&role=2" class="label label-danger">Moderator</a>
							<?php else: ?>
								<a href="index.php?module=user&action=list-user&role=3" class="label label-primary">Admin</a>
							<?php endif; ?>
						</td>
						<td>
                            <a href="<?php to('user','edit-user',$row['user_id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                                 
                            <a href="<?php to('user','delete-user',$row['user_id']) ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')">
                                <i class="fa fa-trash-o" ></i>
                            </a>
                                  
                            <a href="<?php to('user','view-user',$row['user_id']) ?>" type="button" class="btn btn-sm btn-success">
                                <i class="fa fa-eye" ></i>
                            </a>
                         </td>
                                  
					</tr>
					<?php endforeach; endif; ?>
				</tbody>
			</table>
		
		<!-- <?php if($page > 1) : 
		
		$disabled1 = ($get_page == 1) ? 'hidden' : '';
		$disabled2 = ($get_page == $page) ? 'hidden' : '';
		
		?>
		<ul class="pagination">
			<li class="<?php echo $disabled1; ?>">
				<a href="index.php?action=list-user&page=<?php echo ($get_page-1) ?>">&laquo;</a>
			</li>
			<?php for($i =1;$i<= $page; $i++) : 
			if($get_page == $i){
				$active = 'active';
			}else{
				$active ='';
			}
			?>
			<li class="<?php echo $active; ?>"><a href="index.php?action=list-user&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php endfor; ?>
		<li class="<?php echo $disabled2; ?>">
			<a href="index.php?action=list-user&page=<?php echo ($get_page+1) ?>">&raquo;</a>
		</li>
			</ul>
		<?php endif; ?> -->

		</div>
	</section>
	</div>
</div>
