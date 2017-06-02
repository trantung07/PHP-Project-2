

<!-- page-wrapper -->
<div id="page-wrapper" class="clearfix">
	<div id="sidebar" class="clearfix">
		<div class="sidebar-content">
			<div class="collapse navbar-collapse navbar-ex1-collapse">

						<!-- <form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form> -->
						<ul class="nav navbar-nav" id="main-sidebar">
							<li class=""><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle link" data-toggle="dropdown"><i class="fa fa-bar-chart" aria-hidden="true"></i>Categories <b class="caret"></b></a>
								<ul class="dropdown-menu submenu">
									<li><a href="index.php?module=category&action=list-category" class="nomove"><i class="fa fa-th-list" aria-hidden="true"></i>List Categories</a></li>
									<li><a href="index.php?module=category&action=add-category" class="nomove"><i class="fa fa-plus-square" aria-hidden="true"></i>Add Categories</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle link" data-toggle="dropdown"><i class="fa fa-cubes" aria-hidden="true"></i>Products <b class="caret"></b></a>
								<ul class="dropdown-menu submenu">
									<li><a href="index.php?module=product&action=list" class="nomove"><i class="fa fa-th-list" aria-hidden="true"></i>List Products</a></li>
									<li><a href="index.php?module=product&action=add" class="nomove"><i class="fa fa-plus-square" aria-hidden="true"></i>Add Products</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle link" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i>Users <b class="caret"></b></a>
								<ul class="dropdown-menu submenu">
									<li><a href="index.php?module=user&action=list-user" class="nomove"><i class="fa fa-th-list" aria-hidden="true"></i>List Users</a></li>
									<li><a href="index.php?module=user&action=add-user" class="nomove"><i class="fa fa-plus-square" aria-hidden="true"></i>Add Users</a></li>
								</ul>
							</li>

						</ul>
						
					</div>

				</div><!-- sidebar -->
			</div>

			
			<div id="content" class="clearfix">
				<div class="page-content">
					<?php 
					if (isset($_GET['module'])) {
								$m = $_GET['module']; // user
							}else{
								$m = 'main';
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
					</div><!-- content -->






				</div>

				<!-- end content -->
