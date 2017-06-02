<?php 
$subcats = get_all('category');
if (!empty($_GET['id'])) {
	$row = get_one('subcategory','subcate_id',$_GET['id']);
	if (isset($_POST['subcate_name'])) {
		
		update('subcategory',$_POST,['subcate_id'=>$_GET['id']]);
		header('Location: index.php?module=subcate&action=list-subcate');
	}	
	
} else {
	echo 'Tham số không hợp lệ';
}

?>

<div class="row">
	<div class="col-md-8">
		<section class="panel panel-info" style="margin-top: 20px;">
			<header class="panel-heading" >
				Chỉnh sửa nhóm danh mục con
			</header>                                
			
			<?php if($row) : ?>
				<div class="panel-body">

					<form action="" method="POST" role="form">

						<div class="form-group">
							<label for="">Tên danh mục con</label>
							<input type="text" class="form-control" name="subcate_name" value="<?php echo $row["subcate_name"]; ?>">
						</div>
						<div class="form-group">
						<label for="">Nhóm sản phẩm</label>
							<select name="parent_id" class="form-control" required="required">
								
								<option value="">Lựa chọn lại nhóm sản phẩm</option>
								<?php if($subcats) { foreach ($subcats as $cart) { ?>
								<option value="<?php echo $cart['category_id'] ?>"><?php echo $cart['category_name']; ?></option>
								<?php } } ?>						
							
							</select>
						</div>

						<div class="form-group">
							<label for="">Description</label>
							<input type="text" class="form-control" value="<?php echo $row['description']; ?>" name="description">
						</div>

						
						<div class="form-group">

							<div for="">
								<label for="">status</label>
							</div>
							<div class="form-group" >
								<input type="radio" name="status" value="1" <?php if($row['status'] == 1) echo "checked ='checked'" ?> >Enabled<br>
								<input type="radio" name="status" value="0" <?php if($row['status'] == 0) echo "checked ='checked'" ?> >Disable<br>
							</div>						
						</div>

						<button type="submit" class="btn btn-primary">Edit</button>
						<button type="reset" class="btn btn-default">Reset</button>
					</form>
				</div>
			<?php endif; ?>
		</div>
	</section>
	


</div>     
</div>
