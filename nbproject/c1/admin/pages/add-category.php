<div class="container">
	<p>
		<a href="<?php to('category','list-category') ?>" class="btn btn-sm btn-success">Back to list</a>
	</p>
	<div class="col-md-4">
		<form action="" method="POST" role="form">
			
			<div class="form-group">
				<label for="">name</label>
				<input type="text" class="form-control" name="category_id" >
			</div>
			<div class="form-group">
				<label for="">parent</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<div class="" style="margin-right: ">
					<label for="">status</label>
				</div>
				<div>
					<input type="radio" name="status" value="1" checked>Kich hoat<br>
					<input type="radio" name="status" value="0">Khong kich hoat<br>
				</div>
			</div>

			<button type="" class="btn btn-primary">Thêm Mới</button>
		</form>
	</div>
</div>
<?php 
if (isset($_POST['category_id'])) {
	insert('category',$_POST);
	header('location: index.php?module=category&action=list-category');
}
?>
