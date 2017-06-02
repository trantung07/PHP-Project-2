<?php 

$cats = get_all('category');
// echo '<pre>';
// print_r($_FILES);
// echo '<br />';
// print_r($_POST);

// 	echo '</pre>';

if (!empty($_FILES) && $_POST) {
	$file = $_FILES['upload'];

	if (!$file['error']) {
		if (move_uploaded_file($file['tmp_name'], '../uploads/products/'.$file['name'])) {
			$_POST['image'] = $file['name'];
		}
	}

	insert('product',$_POST);

	header('location:index.php?module=product&action=list');
}
?>

<div class="container">
	<div class="add-product">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Input name">
			</div>
			<div class="form-group">
				<label for="">Slug</label>
				<input type="text" class="form-control" name="slug" placeholder="Input slug">
			</div>
			<div class="form-group">
				<label for="">Category</label>
				<select name="cat_id"  class="form-control" required="required">
				<option value="">Select Category</option>
				<?php if($cats) : foreach($cats as $cat) : ?>
					<option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
				<?php endforeach; endif; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" class="form-control" name="price" placeholder="Input price">
			</div>
			<div class="form-group">
				<label for="">Sale price</label>
				<input type="text" class="form-control" name="sale_price" placeholder="Input price">
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file"  name="upload" />
				<input type="hidden"  name="image" />
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description" class="form-control" rows="6"></textarea>
			</div>
			<div class="form-group">
				<label for="">Status</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" value="1" checked>
						Enabled
					</label>
					<label>
						<input type="radio" name="status" value="0">
						Disabled
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>