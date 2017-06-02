<?php require '../../config.php'; ?>
<?php 
if (isset($_SESSION['logIn'])) {
    header("location:index.php");
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
            <div class="navbar-right">
                    <ul class="nav navbar-nav">
                    </ul>
                </div>      

        
<!-- /.sidebar-collapse -->

        </nav>
<div id="page-wrapper" style="background-color: #F1F2F7;">
<section class="content">
                    <div class="row">
                        <div class="col-md-8">
                        <?php 
                    $error = [];
                    if (isset($_POST['login'])) {
                        $username = $_POST['username'];
                        $remember = isset($_POST['remember']) ? true : false;
                        $password = MD5($_POST['password']);

                        $u = get_one('user','username',$username);

                        if (!$u) {
                            $error['Username'] = 'không tồn tại';
                        }else{
                            if ($u['password'] != $password) {
                                $error['Password'] = 'không đúng';
                            }
                        }

                        if (empty($error)) {
                            
                            $_SESSION['logIn'] = $u;
                            if ($remember) {
                                setcookie('login_data', $u['username'], time() + (86400 * 30), "/");
                            }
                            header("location:index.php");
                        }
                        
                    }
                ?>
                <?php if (!empty($error)) :
                    foreach ($error as $key => $value) :
                ?>
                <div class="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><?php echo $key; ?></strong> <?php echo $value; ?>
                </div>
                <?php endforeach; endif;?>
                            <section class="panel panel-info">
                                <header class="panel panel-heading">
                                  Đăng nhập
                                </header>
                                <div class="panel-body">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Nhập username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Nhập password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" value="1">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>                                      
                                        <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
                                    </form>
                                </div>
                            </section>
                        </div><!--end col-6 -->
                    </div>     
                </section>

 
    </div>
    <!-- /#wrapper -->
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
