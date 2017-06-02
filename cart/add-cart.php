<?php 
include "../config.php";

if (!empty($_GET['id'])) {
	$product = get_one('product','id',$_GET['id']);
	add_cart($product);
	
	echo 'success';
}else{
	echo 'failed';
}


?>



