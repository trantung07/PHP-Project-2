
<?php require '../../config.php'; ?>

<?php require 'header.php'; ?>

<div id="page-wrapper" style="background-color: #F1F2F7;">
<?php    
        
         if (isset($_GET['module'])) {
				$m = $_GET['module']; // user
			}else{
				$m = 'dashboard';
			}

			if (isset($_GET['action'])) {
				$a = $_GET['action']; //list-user
				include 'modules/'.$m.'/'.$a.'.php';
				//modules/user/list-user.php
			}else{
				include $m.'.php';
}
    ?>

</div>


<?php require 'footer.php'; ?>
