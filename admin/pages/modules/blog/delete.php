<?php 
// require '../../config.php';

if ( !empty($_GET['id']) ) {
	$id = $_GET['id'];
	delete( 'blog', 'id', $id );
	header('location: index.php?module=blog&action=list'); 

} else {
	echo 'Tham so id khong hop le';
}

?>