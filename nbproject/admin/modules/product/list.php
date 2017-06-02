<?php 

$products = get_all('product');

// echo '<pre>';
// var_dump($res);
?>
<div class="container">
	<p>
		<a href="index.php?module=product&action=add" class="btn btn-success">Them moi</a>
	</p>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
		<?php if($products) :  
			foreach ($products as $row) :
		?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><img src="../uploads/<?php echo $row['image']; ?>" width="50"></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td>
					<a href="<?php to('product','edit',$row['id']) ?>" class="btn btn-sm btn-success">Sua</a>
					<a href="<?php to('product','delete',$row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')">Xoa</a>
					<a href="<?php to('product','view',$row['id']) ?>" class="btn btn-sm btn-info">Xem</a>
				</td>
			</tr>
		<?php endforeach; endif; ?>
		</tbody>
	</table>
</div>