<?php 

if (isset($_SESSION['logIn'])) {
    header("location: index.php");
} 
?>
<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="public/images/banner-product-checkout.jpg" alt="Banner-header">
        <div class="text">
            <h3>Đăng nhập</h3>
            <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Đăng nhập</p>
        </div>
    </div>
</div>
<!-- End banner -->
<div class="container container-ver2">
    <div class="page-login box space-50">
        <div class="row">
            <div class="col-md-6 sign-in space-30">
                <h3>Đăng nhập</h3>
                <p>Hello, welcome to your account.</p>
                <div class="social space-30 box">
                    <a class="float-left" href="#" title="facebook">
                        <i class="fa fa-facebook"></i>
                        SIGN IN WITH FACEBOOK
                    </a>
                    <a class="float-right" href="#" title="TWITTER">
                        <i class="fa fa-twitter"></i>
                        SIGN IN WITH TWITTER
                    </a>
                </div>
                <!-- End social -->
                <?php 
                $error = [];
                if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $remember = isset($_POST['remember']) ? true : false;
                    $password = MD5($_POST['password']);

                    $u = get_one('user','username',$username);

                    if (!$u) {
                        $error['Username'] = 'Không tồn tại user này';
                    }else{
                        if ($u['password'] != $password) {
                            $error['Password'] = 'Password không đúng';
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

                <form class="form-horizontal" method="POST">
                    <div class="group box space-20">
                        <label class="control-label" for="inputemail">Tài khoản *</label>
                        <input class="form-control" type="text" name="username" placeholder="Nhập tài khoản" id="inputemail">
                    </div>
                    <div class="group box">
                        <label class="control-label" for="inputemail">Mật khẩu *</label>
                        <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" id="inputpass"> 
                    </div>
                    <div class="remember">
                        <input id="remember" type="checkbox" name="remember" value="1">
                        <label class="label-check" for="remember">Nhớ tài khoản</label>                                            
                       <p class="help">Chưa có tài khoản: <a  href="index.php?route=login&actions=register">Đăng ký</a> ngay</p>  
                    </div>         
                    <button type="submit" class="link-v1 rt" name="login">Đăng nhập</button>
                </form>
                <!-- End form -->
            </div>
            <!-- End col-md-6 -->
            
        </div>
    </div>
</div>




