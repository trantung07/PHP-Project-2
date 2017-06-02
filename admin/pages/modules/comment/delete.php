<?php 

if (!empty($_GET['id'])) {
	$id =$_GET['id'];
	delete('product_comment','id',$id);
	header('location: index.php?module=comment&action=list');
		
	
}else{
	echo 'Tham so id khong hop le';
}
?>