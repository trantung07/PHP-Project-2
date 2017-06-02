<?php 

$cats = get_all('subcategory');

if ($_POST) {
	$file = $_POST['image'];

	if (!$file['error']) {
		if (move_uploaded_file($file['tmp_name'], '../../uploads/products/'.$file['name'])) {
			$_POST['image'] = $file['name'];
		}
	}

	insert('product',$_POST);
	header('location: index.php?module=product&action=list-product');
}
?>
<div class="row" >
		<div class="col-xs-12">
			<section class="panel panel-info" style="margin-top: 20px;">
			    <header class="panel-heading">
			        Thêm mới sản phẩm
			    </header>
				<div class="panel-body">
					
				<div class="row">					
					<div class="add-product">
						<div class="col-md-8 ">
							<form action="" method="POST" role="form" enctype="multipart/form-data">
							
								<div class="form-group">
									<label for="">Tên sản phẩm</label>
									<input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
								</div>
								
								<div class="form-group">
									<label for="">Hình ảnh</label>
									<!-- cho nay lam sao de show anh -->
									<a data-toggle="modal"  href="javascript:;" data-target="#modal-file" class="btn" type="button">Chọn ảnh</a>
								<input type="text"  name="image" id="image" />
								</div>			
								<div class="form-group">
									<label for="">Nhóm SP thứ cấp</label>
									<select name="id_subcate"  class="form-control" required="required">
										<option value="">Select Category</option>
										<?php if($cats) : foreach($cats as $cat) : ?>
											<option value="<?php echo $cat['subcate_id']; ?>"><?php echo $cat['subcate_name']; ?></option>
										<?php endforeach; endif; ?>
									</select>
								</div>
							
								<div class="form-group">
									<label for="">Giá bán (VNĐ/1kg)</label>
									<input type="text" class="form-control" name="price" placeholder="Giá bán">
								</div>							
								
								<div class="form-group">
									<label for="">Lượt xem</label>
									<input type="text" name="views" class="form-control" placeholder="Lượt xem">
								</div>
							
								<div class="form-group">
									<label for="">Trạng thái</label>
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
								<div class="form-group">
									<label for="">Chi tiết</label>
									<textarea  name="detail_product" class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<input type="hidden" name="created_date" class="form-control" value="<?php echo time(); ?>">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</div>
</div>
</div>
<div class="modal fade" id="modal-file">
	<div class="modal-dialog modal-lg" style="width:80%">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
					<iframe src="http://localhost:81/Clem/file/dialog.php?type=2&field_id=image&relative_url=1&remove_script_host=1" style="border:0; width:100%; height:450px; overflow:hidden"></iframe>
			</div>
		</div>
	</div>
</div>
