<?php 

if (!empty($_GET['id'])) {
	$row = get_one('category','id',$_GET['id']);
	if (isset($_POST['category_id'])) {
		
		update('category',$_POST,['id'=>$_GET['id']]);
	}	
	
}else{
	echo 'Tham so id khong hop le';
}
header('location: index.php?module=category&action=list-category');

?>
<div class="container">
	<?php if($row) : ?>
		<div class="col-md-4">
			<form action="" method="POST" role="form">
				
				<div class="form-group">
					<label for="">category_id</label>
					<input type="text" class="form-control" name="category_id"  value="<?php echo $row["category_id"]; ?>">
				</div>
				<div class="form-group">
					<label for="">name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $row["name"]; ?>">
				</div>
				<div class="form-group">
					<div class="pull-left" style="margin-right: ">
						<label for="">status</label>
					</div>
					<div>
						<input type="radio" name="status" value="1" <?php if($row['status'] == 1) echo "checked ='checked'" ?> >Con<br>
						<input type="radio" name="status" value="0" <?php if($row['status'] == 1) echo "checked ='checked'" ?> >Het<br>
					</div>
					
				</div>

				<button type="" class="btn btn-primary">edit</button>
			</form>
		</div>
		
	</div>

