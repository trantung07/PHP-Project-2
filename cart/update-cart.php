<?php 
include '../config.php';

if (isset($_GET['id']) && isset($_GET['quantity'])) {
	$id = $_GET['id'];
	$quantity = $_GET['quantity'];
	update_cart($id,$quantity);
	echo 'success';
}else{
	echo 'failed';
}

?>