<?php $blog = get_all('blog'); ?>
<div class="special bg-images special-v2 box" style="background-image:url('public/images/home1-banner1.jpg');background-repeat: no-repeat;">
	<div class="col-md-7 float-left align-right">
		<img class="images-logo" src="public/images/home1-images-banner1-2.png" alt="images">
	</div>
	<!-- End col-md-7 -->
	<div class="col-md-5 float-right">
		<div class="special-content align-center">
			<p>Khuyến mãi đặc biệt</p>
			<h3>Giảm ngay 20%</h3>
			<h5>Khi mua hàng vào ngày Quốc tế Thiếu Nhi</h5>
			<div class="time" data-countdown="countdown" data-date="06-01-2017-10-20-30"></div>
			<a class="link-v1 color-brand" href="index.php?route=product&actions=product" title="shopnow">Mua ngay</a>
		</div>
	</div>
	<!-- End col-md-5 -->
</div>
<!-- End container -->
<div class="container container-ver2 blog-home1">
	<div class="title-text-v2">
		<div class="icon-title align-center space-20">
			<img src="public/images/title-lastest-from.png" alt="icon-title">
		</div>
		<h3>Tin tức mới nhất</h3>
		<a class="link" href="index.php?route=page&actions=blog" title="See all">XEM NGAY</a>
	</div>
	<!-- End title -->
	<div class="blog-content slider-three-item owl-carousel owl-theme">
	<?php if($blog): foreach($blog as $bl): ?>
		<div class="item">
			<a class="hover-images" href="index.php?route=page&actions=blogdetail&id=<?php echo $bl['id'] ?>" title="images">
				<img class="img-responsive" src="uploads/products/<?php echo $bl['image_title'] ?>" style="width: 500px; height: 333px;" >
			</a>
			<div class="text-v2">
				<a href="index.php?route=page&actions=blogdetail&id=<?php echo $bl['id'] ?>" title="title"><h3><?php echo $bl['name'] ?></h3></a>
				<p class="by">By Admin / 0 Comments</p>
				<p class="des"><?php echo $bl['title'] ?>...</p>
			</div>
		</div>
	<?php endforeach; endif; ?>	
		<!-- End item -->
	</div>
	<!-- End blog-content -->
</div>
<!-- End container -->