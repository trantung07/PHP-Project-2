<?php 
session_start();
if (isset($_COOKIE['login_data'])) {
	setcookie("login_data", "", time() - 3600,"/");
}
if (isset($_SESSION['logIn'])) {
	unset($_SESSION['logIn']);
}
header("location: login.php");

?>