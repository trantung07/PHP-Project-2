<?php 

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	delete('`order`','id',$id);

	header("location: index.php?module=order&action=list");	
}
else{
	echo 'Xoa khong thanh cong';
}

?>