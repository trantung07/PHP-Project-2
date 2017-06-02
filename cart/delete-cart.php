<?php 
require '../config.php';

if ( !empty($_GET['id']) ) {

	clear_item( $_GET['id'] );
}
?>