<?php $carts = get_all('category'); ?>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-info" style="margin-top: 20px;">
			<div class="panel-heading">
				Thêm mới nhóm danh mục con
			</div>
			<div class="panel-body" >
				
				<form action="" method="POST" role="form">

					<div class="form-group">
						<label for="">Tên nhóm sản phẩm con</label>
						<input type="text" class="form-control" name="subcate_name" >
					</div>	
					<div class="form-group">
						<label for="">Nhóm sản phẩm</label>
							<select name="parent_id" class="form-control" required="required">
						<option value="">Lựa chọn danh mục cha</option>
						<?php if($carts) : foreach ($carts as $cart) : ?>
							<option value="<?php echo $cart['category_id'] ?>"><?php echo $cart['category_name']; ?></option>
							<?php endforeach; endif; ?>					

						</select>
					</div>
						<div class="form-group">
							<label for="">Mô tả</label>
							<textarea rows="4"  class="form-control" name="description">  </textarea>
						</div>

						<div class="form-group">
							<div class="" >
								<label for="">Trạng thái</label>
							</div>
							<div>
								<input type="radio" name="status" value="1" checked>Enabled<br>
								<input type="radio" name="status" value="0">Disabled<br>
							</div>
						</div>
						<div class="form-group">

							<input type="hidden" class="form-control" name="created_date" value="<?php echo time() ?>">
						</div>

						<button type="submit" class="btn btn-primary">Thêm mới</button>

					</form>
				</div>
			</div>
		</div>
	</div>
	<?php 
	if (isset($_POST['subcate_name'])) {

		insert('subcategory',$_POST);
		header('Location: index.php?module=subcate&action=list-subcate');

	}

	?>

