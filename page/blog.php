<?php $blog = get_all('blog');
    $show =6;
    $total= get_count('blog'); 
    $page = ceil($total/$show);
    $get_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = $show * ($get_page - 1);
    if($page >1){
        $blog = phan_trang('blog',false,false,$start,$show);
    }
 ?>
<div class="banner-header banner-lbook3 space-30">
    <img src="public/images/banner/banner-blog.jpg" alt="Banner-header">
    <div class="text">
        <h3>Tin tức</h3>
        <p><a href="index.php" title="Home">Trang Chủ</a><i class="fa fa-caret-right"></i>Danh sách tin</p>
    </div>
</div>
<div class="container-ver2">
    <div class="blog-post-container blog-page blog-classic blog-post-columns-2">
        
        <div id="primary" class="col-xs-12 col-md-9 float-left center">
        <?php if($blog): foreach($blog as $row): ?>
            <div class="blog-post-item">
                <div class="blog-post-image hover-images">
                    <a href="index.php?route=page&actions=blogdetail&id=<?php echo $row['id'] ?>" ><img src="uploads/products/<?php echo $row['image_title'] ?>" title="Blog <?php echo $row['id'] ?>"></a>
                </div>  
                <div class="text">                          
                    <h3><a href="#" ><?php echo $row['name'] ?></a></h3>
                    
                    <p class="content"><?php echo $row['title'] ?></p>
                    <a class="link-v1 color-brand" href="index.php?route=page&actions=blogdetail&id=<?php echo $row['id'] ?>" title="readmore">Xem thêm</a>
                </div>
                <!-- End text -->
            </div>
            <!-- End item -->
            <?php endforeach; endif; ?>
            
            <!-- End item -->
            <div class="pagination-container pagination-blog">
                <nav class="pagination">    
                    <?php 
                if($page > 1) : 
                    $disabled1 = ($get_page == 1) ? 'hidden' : '';
                    $disabled2 = ($get_page == $page) ? 'hidden' : '';
             ?>
                <a class="prev page-numbers <?php echo $disabled1; ?>" href="index.php?route=page&actions=blog&page=<?php echo ($get_page-1) ?>"><i class="fa fa-angle-left"></i></a>
                        <?php for($i =1;$i<= $page; $i++) : 
                                if($get_page == $i){
                                    $actions = 'actions';
                                }else{
                                    $actions ='';
                                }
                        ?>
                <a <?php if($i==$get_page){echo "style='background-color:green'";}?> class="<?php echo $actions; ?>" href="index.php?route=page&actions=blog&page=<?php echo $i; ?>"><?php echo $i ?></a>
                        <?php endfor; ?>
                <a class="next page-numbers <?php echo $disabled2; ?>" href="index.php?route=page&actions=blog&page=<?php echo ($get_page+1) ?>"><i class="fa fa-angle-right"></i></a>
            <?php endif; ?>
                </nav>
            </div>
            <!-- End pagination-container -->
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
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/7.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/8.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/9.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/8.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/11.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/11a.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/7.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/8.jpg" alt="images">
                            </a>
                        </li>
                        <li class="hover-images">
                            <a href="#" title="images">
                                <img src="http://landing.engotheme.com/html/freshfood/demo/assets/images/ImgBlog/9.jpg" alt="images">
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


