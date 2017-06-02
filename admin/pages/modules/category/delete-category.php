<?php 
// require '../../config.php';

if ( !empty($_GET['id']) ) {
	$id = $_GET['id'];
	delete( 'category', 'category_id', $id );
	header('Location: index.php?module=category&action=list-category');

} else {
	echo 'Tham so id khong hop le';
}

?>