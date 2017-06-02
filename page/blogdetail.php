<?php  if(isset($_GET['id'])){
    $bl = get_one('blog', 'id', $_GET['id']);
    }
?>

<div class="container">
    <div class="banner-header banner-lbook3 space-50">
        <img src="public/images/banner-blog.jpg" alt="Banner-header">
        <div class="text">
            <h3>Đọc tin tức</h3>
            <p><a href="index.php" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Đọc tin tức</p>
        </div>
    </div>
</div>
<div class="container container-ver2">
    <div class="blog-post-container blog-page blog-classic">
        <div id="primary" class="col-xs-12 col-md-9 float-left center">
            <div class="blog-post-container box single-post">
             <?php if($bl): ?>
                <div class="blog-post-item">
                    <div class="head">
                        <h3><?php echo $bl['name'] ?></h3>
                        <p class="post-by"><span><?php echo  date('l dS , F Y  H:i:s',$bl['date']) ?></span><span><i class="fa fa-pencil-square-o"></i> Admin</span><span><i class="fa fa-comment-o"></i> 0 Comments</span></p>
                    </div>
                    <!-- End head -->
                   
                     
                    <div class="text align-left">

                        <p class="normal"><?php echo $bl['title'] ?></p>
                        <p> <?php echo $bl['content']; ?> </p>
                         
                        <div class="box box-shadow center content space-30">
                            <p>"Có sức khỏe là có tất cả, không sức khỏe là không có gì"</p>
                            <p>- NO AUTHOR -</p>
                        </div>
                        <!-- End box-shadow -->
                        <div class="social box">
                            <h3>Share this :</h3>
                            <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                            <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                            <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                            <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                            <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        <!-- End share -->
                    
                    </div>
                    <!-- End text -->
                </div>
                <!-- End item --> 
                <?php endif; ?>                   
            </div>
            <!-- End blog-post-container -->  
            
</div>
<!-- End Primary -->
<div id="secondary" class="widget-area col-xs-12 col-md-3 float-right">
    <div class="wrap-sidebar">
        <aside class="widget widget_search">
            <div class="search-form">
                <form action="#" method="get">
                    <input type="text" autocomplete="off" placeholder="Search..." value="" class="ajax_autosuggest_input ac_input" name="s">
                    <button type="submit" class="icon-search">
                        <i class="icons icon-magnifier"></i>
                    </button>
                </form>
            </div>
        </aside>
        
        
        <aside class="widget widget_feature blog">
                    <h3 class="widget-title">Sản phẩm mới</h3>
                    <ul class="box space-40">
                        <li>
                        <?php  $spnew = "SELECT * FROM product order by id DESC limit 2";
                            $spmysql = mysqli_query($mysqli, $spnew);
                            while ( $rowsp = mysqli_fetch_assoc($spmysql)) :               
                             ?>
                            <a class="images" href="index.php?route=product&actions=details&id=<?php echo $rowsp['id']; ?>" >
                                <img class="img-responsive" src="uploads/products/<?php echo $rowsp['image']; ?>" alt="images">
                            </a>
                            <div class="text">
                                <h2>
                                    <a href="index.php?route=product&actions=details&id=<?php echo $rowsp['id']; ?>" title="Butterfly Bar Stool"><?php echo $rowsp['name']; ?></a>
                                </h2>
                                <p><span><?php echo number_format($rowsp['price'],0,' ','.') ?> đ/kg</span></span></p>
                            </div>
                        </li>
                        
                        <?php endwhile; ?>
                    </ul>
                </aside>
                <aside class="widget tags-cloud">
                    <h3 class="widget-title">Tìm kiếm nhiều</h3>
                    <div class="content">
                        <a href="#" title="Táo">Táo</a>
                        <a href="#" title="Chuối">Chuối</a>
                        <a href="#" title="Sinh">Sinh lý</a>
                        <a href="#" title="Bưởi">Bưởi</a>
                        <a href="#" title="Đào">Đào</a>
                        <a href="#" title="Hồng">Hồng</a>
                        <a href="#" title="Gạo">Gạo</a>
                        <a href="#" title="chào">Xin chào</a>
                        <a href="#" title="Outdoor">Outdoor</a>
                    </div>
                </aside>
        <aside class="widget flick-photo">
            <h3 class="widget-title">Flick Photo</h3>
            <ul>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/1.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/2.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/3.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/4.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/5.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/6.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/7.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/8.jpg" alt="images">
                    </a>
                </li>
                <li class="hover-images">
                    <a href="#" title="images">
                        <img src="public/images/ImgBlog/9.jpg" alt="images">
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    <!-- End wrap-sidebar -->
</div>
<!-- End Secondary -->
</div>
<!-- end product sidebar -->
</div>
<!-- End cat-box-container --><footer id="footer" class="footer-v3 align-left">
<div class="container container-ver2">
    <div class="footer-inner">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h3 class="title-footer">About Us</h3>
                <p>With more than 15 years of experience we can proudly say that we are one of the best in business, a trusted supplier for more than 1000 companies...</p>
                <a class="link-footer" href="#" title="footer">Read more <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="col-md-2 col-sm-6">
                <h3 class="title-footer">Infomation</h3>
                <ul class="list-footer">
                    <li><a href="#" title="title">Delivery</a></li>
                    <li><a href="#" title="title">Legal Notice</a></li>
                    <li><a href="#" title="title">Terms & Conditions</a></li>
                    <li><a href="#" title="title">About Us</a></li>
                    <li><a href="#" title="title">Secure Payment</a></li>
                    <li><a href="#" title="title">Our Stores</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h3 class="title-footer">Get It Touch</h3>
                <div class="social space-30">
                    <a href="#" title="t"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="f"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="y"><i class="fa fa-youtube-play"></i></a>
                    <a href="#" title="g"><i class="fa fa-google"></i></a>
                </div>
                <h3 class="title-footer">Payment Accept</h3>
                <a href="#" title="paypal"><img src="public/images/paypal-footer.png" alt="images"></a>
            </div>
            <div class="col-md-4 col-sm-6">
                <h3 class="title-footer">Get Newsletter</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <div class="subscribe">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input type="text" onblur="if (this.value == '') {this.value = 'Enter Your Email Address';}" onfocus="if(this.value != '') {this.value = '';}" value="Enter Your Email Address" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                        <button class="button button1 hover-white" title="Subscribe" type="submit">Subscribe<i class="fa fa-long-arrow-right"></i></button>
                    </form>
                </div>
                <!-- End subscribe -->
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End footer-inner -->
</div>



