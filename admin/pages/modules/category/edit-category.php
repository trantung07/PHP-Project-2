<?php 

if (!empty($_GET['id'])) {
	$row = get_one('category','category_id',$_GET['id']);
	if (isset($_POST['category_name'])) {
		
		update('category',$_POST,['category_id'=>$_GET['id']]);
		header('Location: index.php?module=category&action=list-category');
	}	
	
} else {
	echo 'Tham số không hợp lệ';
}

?>

	<div class="row">
    <div class="col-md-8">
        <section class="panel panel-info" style="margin-top: 20px;">
            <header class="panel-heading" >
                Chỉnh sửa nhóm sản phẩm
            </header>                                
           
		<?php if($row) : ?>
			 <div class="panel-body">

				<form action="" method="POST" role="form">

					<div class="form-group">
						<label for="">Categories Name</label>
						<input type="text" class="form-control" name="category_name" value="<?php echo $row["category_name"]; ?>">
					</div>


					<div class="form-group">
						<label for="">Description</label>
						<input type="text" class="form-control" value="<?php echo $row['description']; ?>" name="description">
					</div>

					
					<div class="form-group">

						<div class="" style="float: left; width: 20%;">
							<label for="">status</label>
						</div>
						<div class="" style="float: left; width: 80%;">
							<input type="radio" name="status" value="1" <?php if($row['status'] == 1) echo "checked ='checked'" ?> >Visible<br>
							<input type="radio" name="status" value="0" <?php if($row['status'] == 0) echo "checked ='checked'" ?> >Invisible<br>
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
