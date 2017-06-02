
<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="public/images/banner-product-checkout.jpg" alt="Banner-header">
        <div class="text">
            <h3>Đăng ký</h3>
            <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Đăng ký</p>
        </div>
    </div>
</div>
<!-- End banner -->

<div class="container container-ver2">
    <div class="page-login box space-50">
        <div class="row">
            
            <div class="col-md-6">
            <?php 
                    $error = [];
                    if (!empty($_POST['username'])) {
                           if(!empty($_POST['email'])){
                            if(!empty($_POST['password'])){
                         
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $_POST['password'] = MD5($_POST['password']);
                            $u = get_one('user','username',$username);
                            $e  = get_one('user','email',$email);

                            if ($u) {
                                $error['Username'] = 'đã tồn tại. Hãy nhập username khác!';
                            };
                            
                                if ($e) {
                                $error['Email'] = 'đã tồn tại. Hãy nhập email khác!';
                            };
                            if (empty($error)) {
                                echo "<script> alert('Chúc mừng bạn đã tạo tài khoản thành công!!!') </script>";
                                insert('user',$_POST);                                
                                // header("location: index.php");

                            }
                       
                        
                       } else {
                            $error['Lỗi'] = 'Bạn nhập thiếu password bắt buộc!';
                       }
                   } else {
                        $error['Lỗi 2'] = 'Bạn nhập thiếu password và email bắt buộc!';
                   }
                     // echo "<script>alert('ok')</script>";
               } 
                                        
                    ;
                    
                ?>
                <?php if (!empty($error)) :
                    foreach ($error as $key => $value) :
                ?>
                <div class="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><?php echo $key; ?></strong> <?php echo $value; ?>
                </div>
                <?php endforeach; endif;?>
                <div class="register box space-50">
                    <h3>Tạo Tài khoản</h3>
                    <p>Tạo tài khoản FRESH FOOD.</p>
                    <form class="form-horizontal" method="POST" role="form">
                        <div class="group box space-20">
                            <label class="control-label" for="">Tài khoản *</label>
                            <input class="form-control" type="text" placeholder="Tài khoản" id="username" name="username">
                        </div>
                        <div class="group box space-20">
                            <label class="control-label" for="">Email *</label>
                            <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="group box space-20">
                            <label class="control-label" for="">Mật khẩu *</label>
                            <input class="form-control" type="password" placeholder="Mật khẩu" name="password" id="password">
                        </div>
                        <div class="group box space-20">
                            <label class="control-label" for="">Số điện thoại</label>
                            <input class="form-control" type="text" placeholder="Số điện thoại" name="phone" id="phone">
                        </div>
                        <div class="group box space-20">
                            <label class="control-label" for="">Họ tên </label>
                            <input class="form-control" type="text" placeholder="Họ tên" name="full_name" id="fullname">
                        </div>
                        <div class="group box space-20">
                            <label class="control-label" for="">Địa chỉ </label>
                            <input class="form-control" type="text" placeholder="Địa chỉ" name="address" id="address">
                        </div>
                        <p> <span>(*)</span>: bắt buộc phải nhập.</p>
                        <button type="submit"  class="link-v1 rt" >Đăng ký</button>
                    </form>
                </div>
               
            </div>
            
            <!-- End col-md-6 -->
        </div>
    </div>
</div>




