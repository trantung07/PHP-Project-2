<?php 
 ob_start(); date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_COOKIE['login_data'])) { 
    $user = get_one('user','username',$_COOKIE['login_data']);
}else{
    if (!isset($_SESSION['logIn'])) {
        header("location: login.php");
    }else{
        $user = $_SESSION['logIn'];
    }
}
if ($user['role'] == 1) { // check memmber
    header("location: ../../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../vendor/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>

<body>

   

        <!-- Navigation -->
        
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Trang quản trị</a>
                </div>
                <!-- /.navbar-header -->
                <div class="nav  navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- /.dropdown -->
                        <?php if(!empty($user)) : ?>
                        <li class="dropdown" style="padding-right: 20px;">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <?php echo $user['username']; ?><i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <?php endif; ?>
                        <!-- /.dropdown -->
                    </ul>
                </div>
                <!-- /.navbar-top-links -->
            </nav>
        
            <div class="navbar-default sidebar" role="navigation" style="margin-top: 0px;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Trang tổng quan</a>
                        </li>


         

      <li>
        <a href="#"><i class="fa fa-cubes mr-5" aria-hidden="true"></i> Quản lý nhóm sản phẩm<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="index.php?module=category&action=list-category">Danh mục nhóm SP</a>
            </li>
            <li>
                <a href="index.php?module=category&action=add-category">Thêm mới</a>
            </li>            
        </ul>
        <!-- /.nav-second-level -->
    </li>
        <li>
                <a href="#"><i class="fa fa-steam-square" aria-hidden="true"></i> Quản lý danh mục con<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="index.php?module=subcate&action=list-subcate"> Danh sách danh mục con</a>
                    </li>
                    <li>
                        <a href="index.php?module=subcate&action=add-subcate"> Thêm mới</a>
                    </li>            
                </ul>
                <!-- /.nav-second-level -->
            </li>
    <li>
        <a href="#"><i class="fa fa-cube" aria-hidden="true"></i></i> Quản lý sản phẩm<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="index.php?module=product&action=list-product">Danh mục sản phẩm</a>
            </li>
            <li>
                <a href="index.php?module=product&action=add-product">Thêm mới</a>
            </li>            
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-users mr-5" aria-hidden="true"></i> Quản lý người dùng<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="index.php?module=user&action=list-user">Danh sách người dùng</a>
            </li>
            <li>
                <a href="index.php?module=user&action=add-user">Thêm mới</a>
            </li>            
        </ul>
        <!-- /.nav-second-level -->
    </li>
   <li>
    <a href="#"><i class="fa fa-rss" aria-hidden="true"></i> Quản lý tin tức<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?module=blog&action=list">Danh sách tin tức</a>
        </li>
        <li>
                <a href="index.php?module=blog&action=add">Thêm mới</a>
            </li> 
    </ul>
    <!-- /.nav-second-level -->
</li>

   <li>
    <a href="#"><i class="fa fa-comments-o"></i> Quản lý bình luận<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?module=comment&action=list">Danh sách bình luận</a>
        </li>
        
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-first-order"></i> Quản lý đơn hàng<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?module=order&action=list">Danh sách đơn hàng</a>
        </li>
        
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Quản lý File<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="index.php?module=files&action=list-file">File</a>
        </li>
        
    </ul>
    <!-- /.nav-second-level -->
</li>

</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
