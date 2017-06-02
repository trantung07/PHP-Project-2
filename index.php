<?php
 ob_start();
require 'config.php';
//require 'mailler/PHPMailerAutoload.php';
//require 'common/senmail.php';
require 'header.php';

if (isset($_GET['route'])) {
	$route = $_GET['route'];
} else {
	$route = 'page';
}

if (isset($_GET['actions'])) {
	$actions = $_GET['actions'];
} else {
	$actions = 'content';
}
include $route . '/' . $actions . '.php';

require 'footer.php'
?>