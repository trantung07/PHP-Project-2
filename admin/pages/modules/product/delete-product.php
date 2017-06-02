<?php 

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	delete('product','id',$id);

	header("location: index.php?module=product&action=list-product");	
}
else{
	echo 'Xoa khong thanh cong';
}

?>