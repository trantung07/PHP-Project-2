<?php require_once "advert/banner.php"; ?>

<?php $products =  get_all('product', '', '', 10); ?>

<div class="container">
	<div class="title-text-v2">
		<h3>CÁC SẢN PHẨM PHÂN PHỐI</h3>
	</div>
	<div class="featured-products home_2 new-arrivals lastest">
		<ul class="tabs tabs-title">
			<li class="item" rel="tab_1">Tất cả</li>
			<li class="item" rel="tab_2">Hoa quả</li>
			<li class="item" rel="tab_3">Rau củ</li>
			<li class="item" rel="tab_4">Thực phẩm thịt</li>
			<li class="item" rel="tab_5">Thực phẩm khác</li>
		</ul>
		<div class="tab-container space-10">
			<div id="tab_1" class="tab-content">
				<div class="products hover-shadow ver2 border-space-product">
				<?php $allproduct = "SELECT * FROM product order by rand() limit 10";
						$allpro = mysqli_query($mysqli, $allproduct);
				 ?>
					<?php if($allpro) : foreach($allpro as $rows) : ?>

						<div class="product">
							<div class="product-images">
								<a href="index.php?route=product&actions=details&id=<?php echo $rows['id']; ?>" title="product-images">
									<img class="primary_image" src="uploads/products/<?php echo $rows['image']; ?>" />								
								</a>
								<div class="action">
									<a class="add-cart" href="cart/add-cart.php?id=<?php echo $rows['id']; ?>" title="Mua hàng"></a>
									<a class="wish" href="#" title="Wishlist"></a>
									<a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $rows['id']; ?>" title="Quick view"></a>
								</div>
								<!-- End action -->
							</div>
							<a href="#" ><p class="product-title"><?php echo $rows['name']; ?></p></a>
							
							<p class="product-price" style="padding-left: 20px;"><?php echo number_format($rows['price'],0,' ','.') ?> đ/kg</p>

						</div>
						<!-- End item -->
					<?php endforeach; endif; ?>					
				</div>
				<!-- End product-tab-content products -->
			</div>
			<!-- End tab-content -->
			<div id="tab_2" class="tab-content">
				<div class="products hover-shadow ver2 border-space-product">
					<?php 
					$fruit = "SELECT * FROM subcategory as sub join product as p on p.id_subcate = sub.subcate_id where sub.parent_id = 2 order by rand() limit 10";
					$sqlfruit = mysqli_query($mysqli,$fruit);
					if($sqlfruit && mysqli_num_rows($sqlfruit)) :
					while ( $rowfruit = mysqli_fetch_assoc($sqlfruit)) :	
						
						?>
					<div class="product hover-shadow">
						<div class="product-images">
							<a href="index.php?route=product&actions=details&id=<?php echo $rowfruit['id']; ?>" title="product-images">
								<img class="primary_image" src="uploads/products/<?php echo $rowfruit['image']; ?>" alt=""/>

							</a>
							<div class="action">
								<a class="add-cart" href="cart/add-cart.php?id=<?php echo $rowfruit['id']; ?>" title="Mua hàng"></a>
								<a class="wish" href="#" title="Yêu thích"></a>
								<a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $rowfruit['id']; ?>" title="Chi tiết"></a>
							</div>
							<!-- End action -->
						</div>
						<a href="#"><p class="product-title"><?php echo $rowfruit['name']; ?></p></a>
						<p class="product-price-old"></p>
						<p class="product-price"><?php echo number_format($rowfruit['price'],0,' ','.') ?> đ/kg</p>
					</div>
					<!-- End item -->
				<?php endwhile; endif; ?>
				</div>
				<!-- End product-tab-content products -->
			</div>
			<!-- End tab-content -->
			<div id="tab_3" class="tab-content">
				<div class="products ver2 hover-shadow border-space-product">
					<?php 
					$vege = "SELECT * FROM subcategory as sub join product as p on p.id_subcate = sub.subcate_id where sub.parent_id = 1 order by rand() limit 10";
					$sqlvege = mysqli_query($mysqli,$vege);
					if($sqlvege && mysqli_num_rows($sqlvege)) :
					while ( $rowvege = mysqli_fetch_assoc($sqlvege)) :	
						
						?>
					<div class="product hover-shadow">
						<div class="product-images">
							<a href="index.php?route=product&actions=details&id=<?php echo $rowvege['id']; ?>" title="product-images">
								<img class="primary_image" src="uploads/products/<?php echo $rowvege['image']; ?>" alt=""/>

							</a>
							<div class="action">
								<a class="add-cart" href="cart/add-cart.php?id=<?php echo $rowvege['id']; ?>" title="Mua hàng"></a>
								<a class="wish" href="#" title="Yêu thích"></a>
								<a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $rowvege['id']; ?>" title="Chi tiết"></a>
							</div>
							<!-- End action -->
						</div>
						<a href="#" title="Union Bed"><p class="product-title"><?php echo $rowvege['name']; ?></p></a>
						<p class="product-price-old"></p>
						<p class="product-price"><?php echo number_format($rowvege['price'],0,' ','.') ?> đ/kg</p>
					</div>
					<!-- End item -->
				<?php endwhile; endif; ?>
					<!-- End item -->
				</div>
				<!-- End product-tab-content products -->
			</div>
			<!-- End tab-content -->
			<div id="tab_4" class="tab-content">
				<div class="products ver2 hover-shadow border-space-product">
					<?php 
					$meat = "SELECT * FROM subcategory as sub join product as p on p.id_subcate = sub.subcate_id where sub.parent_id = 3 order by rand() limit 10";
					$sqlmeat = mysqli_query($mysqli,$meat);
					if($sqlmeat && mysqli_num_rows($sqlmeat)) :
					while ( $rowmeat = mysqli_fetch_assoc($sqlmeat)) :	
						
						?>
					<div class="product hover-shadow">
						<div class="product-images">
							<a href="index.php?route=product&actions=details&id=<?php echo $rowmeat['id']; ?>" title="product-images">
								<img class="primary_image" src="uploads/products/<?php echo $rowmeat['image']; ?>" alt=""/>

							</a>
							<div class="action">
								<a class="add-cart" href="cart/add-cart.php?id=<?php echo $rowmeat['id']; ?>" title="Mua hàng"></a>
								<a class="wish" href="#" title="Yêu thích"></a>
								<a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $rowmeat['id']; ?>" title="Chi tiết"></a>
							</div>
							<!-- End action -->
						</div>
						<a href="#" title="Union Bed"><p class="product-title"><?php echo $rowmeat['name']; ?></p></a>
						<p class="product-price-old"></p>
						<p class="product-price"><?php echo number_format($rowmeat['price'],0,' ','.') ?> đ/kg</p>
					</div>
					<!-- End item -->
					<?php endwhile; endif; ?>
					<!-- End item -->					
				</div>
				<!-- End product-tab-content products -->
			</div>
			<!-- End tab-content -->
			<div id="tab_5" class="tab-content">
				<div class="products ver2 hover-shadow border-space-product">
					<?php 
					$other = "SELECT * FROM subcategory as sub join product as p on p.id_subcate = sub.subcate_id where sub.parent_id = 4 order by rand() limit 10";
					$sqlother = mysqli_query($mysqli,$other);
					if($sqlother && mysqli_num_rows($sqlother)) :
					while ( $rowother = mysqli_fetch_assoc($sqlother)) :	
						
						?>
					<div class="product hover-shadow">
						<div class="product-images">
							<a href="index.php?route=product&actions=details&id=<?php echo $rowother['id']; ?>" title="product-images">
								<img class="primary_image" src="uploads/products/<?php echo $rowother['image']; ?>" alt=""/>

							</a>
							<div class="action">
								<a class="add-cart" href="cart/add-cart.php?id=<?php echo $rowother['id']; ?>" title="Mua hàng"></a>
								<a class="wish" href="#" title="Yêu thích"></a>
								<a class="zoom" href="index.php?route=product&actions=details&id=<?php echo $rowother['id']; ?>" title="Chi tiết"></a>
							</div>
							<!-- End action -->
						</div>
						<a href="#" title="Union Bed"><p class="product-title"><?php echo $rowother['name']; ?></p></a>
						<p class="product-price-old"></p>
						<p class="product-price"><?php echo number_format($rowother['price'],0,' ','.') ?> đ/kg</p>
					</div>
					<!-- End item -->	
					<?php endwhile; endif; ?>
					<!-- End item -->					
				</div>
				<!-- End product-tab-content products -->
			</div>
			<!-- End tab-content -->
		</div>
	</div>
	<div class="box center space-padding-tb-30 space-30">
            <a class="link-v1 color-brand font-300 space-60" href="index.php?route=product&actions=product" title="View All">Xem tất cả</a>
	</div>
</div>

<?php require_once "advert/advert.php"; ?>