<?php 
// require '../../config.php';

if ( !empty($_GET['id']) ) {
	$id = $_GET['id'];
	delete( 'subcategory', 'subcate_id', $id );
	header('Location: index.php?module=subcate&action=list-subcate');

} else {
	echo 'Tham so id khong hop le';
}

?>