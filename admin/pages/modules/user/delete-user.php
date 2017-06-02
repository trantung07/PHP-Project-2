<?php 

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	delete('user','user_id',$id);
	header("location:index.php?module=user&action=list-user");	
}
else {
	echo 'Xoa khong thanh cong';
}

?>