<?php 
$root = strtotime(date('Y-m-d H:i:s')) -3600*24; 
                $sql4 = "SELECT * FROM product_comment where written_date > $root and status = 0 " ;
                $res4 = mysqli_query($mysqli,$sql4);              
                $range =  mysqli_num_rows($res4);          
             ?>
<?php 

 $root2 = strtotime(date('Y-m-d H:i:s')) -3600*24*7;
$sql5 = "SELECT * FROM `order` where created_date > $root2 and status = 0 " ;
                $res5 = mysqli_query($mysqli,$sql5);              
                $range2 =  mysqli_num_rows($res5);

 ?>
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">TỔNG QUAN</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $range; ?></div>
                            <div>Bình luận mới!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?module=comment&action=list">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $range2; ?></div>
                            <div>Đơn hàng mới!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?module=order&action=list">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
        <?php 
            $sql = "SELECT o.id,u.full_name,u.address,o.total_amount,o.status,o.created_date FROM `order` AS `o` INNER JOIN user AS u ON o.customer_id = u.user_id order by o.created_date desc limit 8" ;
            $res = mysqli_query($mysqli,$sql);
                
                 if ($res && mysqli_num_rows($res)) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $data[] = $row;
                    }
                }
                $orders = $data;
             ?>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <i class="fa fa-first-order"></i> Bảng đơn hàng
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                
                                <li><a href="#">Thêm mới</a>
                                </li>
                                <li class="divider"></li>
                                                            
                                <li><a href="index.php?module=order&action=list">Xem chi tiết</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên người đặt hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Tổng tiền (VNĐ)</th>
                                        <th>Ngày đặt hàng</th>                                                
                                    </tr>
                                </thead>                                
                                    <tbody>
                                        <?php if($orders) :  
                                                foreach ($orders as $o) :
                                            ?>
                                            <tr>
                                                <td><a href="index.php?module=order&action=view&id=<?php echo $o['id']; ?>"><?php echo $o['id']; ?></a></td>
                                                <td><?php echo $o['full_name']; ?></td>
                                                <td><?php echo $o['address']; ?></td>
                                                <td><?php echo number_format($o['total_amount'],0,' ','.') ?></td>                                                
                                                <td><?php echo date('H:i - dS,F Y ',$o['created_date']); ?></td>
                                        
                                              <!-- <td>$1500</td> -->
                                              
                                          </tr>
                                            <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <?php 
                $sql1 = "SELECT * FROM product_comment order by written_date desc limit 8" ;
            $res1 = mysqli_query($mysqli,$sql1);
                
                 if ($res1 && mysqli_num_rows($res1)) {
                    while ($row1 = mysqli_fetch_assoc($res1)) {
                        $data1[] = $row1;
                    }
                }
                $comments = $data1;
                // echo "<pre>";
                // print_r($comments);
             ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-comments-o"></i> Bảng bình luận
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                
                                <li><a href="#">Thêm mới</a>
                                </li>
                                <li class="divider"></li>
                                                            
                                <li><a href="index.php?module=comment&action=list">Xem chi tiết</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        
                                        <th>Họ tên</th>
                                        <th>ID sản phẩm</th>
                                        <th>Ngày đăng</th>
                                        <th>Đã duyệt</th>                                               
                                    </tr>
                                </thead>                                
                                    <tbody>
                                        <?php if($comments) :  
                                                foreach ($comments as $cmt) :
                                            ?>
                                            <tr>
                                                <td><a href="index.php?module=comment&action=view&id=<?php echo $cmt['id']; ?>"><?php echo $cmt['id']; ?></a></td>
                                                
                                                <td><?php echo $cmt['name']; ?></td>
                                                <td><?php echo $cmt['product_id']; ?></td>
                                                <td><?php echo date('H:i - dS,F Y',$cmt['written_date']); ?></td>
                                                <?php if($cmt['status'] == 1){
                                                              $st = 'Đã đăng' ;
                                                            }else if($cmt['status'] == 2){
                                                              $st ='Không được đăng' ;
                                                            }else {
                                                                $st ='Chưa duyệt' ;
                                                                } ?>
                                                    <td><?php echo $st ?></td>  
                                              
                                          </tr>
                                            <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <?php 
                $sql2 = "SELECT * FROM user order by user_id desc limit 8" ;
                $res2 = mysqli_query($mysqli,$sql2);
                
                 if ($res2 && mysqli_num_rows($res2)) {
                    while ($row2 = mysqli_fetch_assoc($res2)) {
                        $data2[] = $row2;
                    }
                }
                $users = $data2;
                // echo "<pre>";
                // print_r($users);
             ?>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <i class="fa fa-users mr-5" aria-hidden="true"></i> Bảng tài khoản người dùng
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                
                                <li><a href="index.php?module=user&action=add-user">Thêm mới</a>
                                </li>
                                <li class="divider"></li>
                                                            
                                <li><a href="index.php?module=user&action=list-user">Xem chi tiết</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tài khoản</th>
                                        <th>Họ tên</th>
                                        <th>Email</th>                                        
                                        <th>Vai trò</th>                                              
                                    </tr>
                                </thead>                                
                                    <tbody>
                                        <?php if($users) :  
                                                foreach ($users as $users) :
                                            ?>
                                            <tr>
                                                <td><a href="index.php?module=user&action=view-user&id=<?php echo $users['user_id']; ?>"><?php echo $users['user_id']; ?></a></td>
                                                <td><?php echo $users['username']; ?></td>
                                                <td><?php echo $users['full_name']; ?></td>
                                                <td><?php echo $users['email']; ?></td>
                                                <td>
                                                    <?php if($users['role'] == 1 ) : ?>
                                                        <label  class="label label-success">Customer</label>
                                                    <?php elseif($users['role'] == 2): ?>
                                                        <label  class="label label-danger">Moderator</label>
                                                    <?php else: ?>
                                                        <label  class="label label-primary">Admin</label>
                                                    <?php endif; ?>
                                                </td>                                               
                                              
                                          </tr>
                                            <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <?php 
                $sql3 = "SELECT * FROM product order by rand() limit 8" ;
                $res3 = mysqli_query($mysqli,$sql3);
                
                 if ($res3 && mysqli_num_rows($res3)) {
                    while ($row3 = mysqli_fetch_assoc($res3)) {
                        $data3[] = $row3;
                    }
                }
                $products = $data3;
                // echo "<pre>";
                // print_r($products);
             ?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <i class="fa fa-cube" aria-hidden="true"></i> Bảng hàng hóa, sản phẩm
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                
                                <li><a href="index.php?module=product&action=add-product">Thêm mới</a>
                                </li>
                                <li class="divider"></li>
                                                            
                                <li><a href="index.php?module=product&action=list-product">Xem chi tiết</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Hình ảnh</th>
                                        <th>Sản phẩm</th>
                                        <th>Giá bán (đ/kg)</th>
                                        <th>Trạng thái</th>                                             
                                    </tr>
                                </thead>                                
                                    <tbody>
                                        <?php if($products) :  
                                                foreach ($products as $p) :
                                            ?>
                                            <tr>
                                                <td><a href="index.php?module=product&action=view-product&id=<?php echo $p['id']; ?>"><?php echo $p['id']; ?></a></td>
                                                <td class="fix-img"><img src="../../uploads/products/<?php echo $p['image']; ?>" width="auto"></td>
                                                <td><?php echo $p['name']; ?></td>
                                                <td><?php echo number_format($p['price'],0,' ','.') ?> </td>
                                                <?php if($row['status'] == 1){
                                                              $st = 'Enabled' ;
                                                            }else {
                                                                $st ='Disabled' ;
                                                                } ?>
                                                    <td><?php echo $st ?></td>                                              
                                              
                                          </tr>
                                            <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                
                <!-- /.panel-body -->
            </div>
            
            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i> Bình luận
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh fa-fw"></i> Refresh
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i> Available
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-times fa-fw"></i> Busy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o fa-fw"></i> Away
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                                           
                                            
                                           
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="chat">
                        <?php if($comments) :  
                            foreach ($comments as $cmt) :
                        ?>
                        <tr>
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <img src="../../public/images/logo-cmt.png" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font" style="color: #9D234C;"><td><?php echo $cmt['name']; ?></td></strong>

                                    <small class="pull-right text-muted">

                                        <i class="fa fa-clock-o fa-fw"></i><?php echo date('H:i - dS,F Y',$cmt['written_date']); ?>
                                    </small>
                                </div>
                                <p style="font-size: 10px;">
                                    Sản phẩm: <?php echo $cmt['id'] ?>
                                </p>
                                <p>
                                    <?php echo $cmt['comment'] ?>
                                </p>
                            </div>
                        </li>
                        </tr>
                        <?php endforeach; endif; ?>
                                </ul>
                            </div>
                            <!-- /.panel-body -->
                            
                            <!-- /.panel-footer -->
                        </div>
                        <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->