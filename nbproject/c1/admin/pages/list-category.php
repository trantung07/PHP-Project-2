<?php 
$cats = get_all('category');
?>
<div class="container">
	<p>
		<a href="index.php?module=category&action=add-category" class="btn btn-success">Them moi</a>
	</p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>parent</th>
				<th>status</th>
				<th>created_date</th>				
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			<?php if($cats) :  
			foreach ($cats as $row) :
				?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['parent']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['created_date']; ?></td>
				<td>
					<a href="<?php to('category','edit-category',$row['id']) ?>" class="btn btn-sm btn-success">Sua</a>
					<a href="<?php to('category','delete-category',$row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')">Xoa</a>
					<a href="<?php to('category','view-category',$row['id']) ?>" class="btn btn-sm btn-info">Xem</a>
				</td>
			</tr>
		<?php endforeach; endif; ?>
	</tbody>
</table>
</div>