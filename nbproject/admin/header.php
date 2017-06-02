<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../public/css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="../public/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="../public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/admin.css">
	<style type="text/css" media="screen"></style>
</head>
<body>
	<!-- end header -->
	<!-- content -->
	<div id="wrapper">
		<!-- Naviagtion -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Admin Area - Hoang Chien</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">

					<ul class="nav navbar-nav navbar-right">						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../public/images/chien.jpg" alt=""><span>Admin</span><b class="caret"></b></a>
							<ul class="dropdown-menu menu-head-drop">
								<li><a href="#">My profile</a></li>
								<li><a href="#">My balance</a></li>
								<li><a href="#">Messages</a></li>
								<li><a href="#">Account Settings</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>