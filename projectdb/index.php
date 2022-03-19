<?php include 'includes/header.php';?>

<!-- Slide1 -->
<section class="slide1">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: url(images/m1.jpg);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" style="color:tomato; font-weight: bold;"
					data-appear="fadeInDown">
					AT BEST QUALITY & PRICE
				</span>

				<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
					MEDICAL EQUIPMENT
				</h2>

				<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
					<!-- Button -->
					<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4 btn-danger">
						Shop Now
					</a>
				</div>
			</div>
		</div>

		<div class="item-slick1 item2-slick1" style="background-image: url(images/m2.jpg);">
			<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
				<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
				data-appear="lightSpeedIn">
				New arrivals
			</h2>

			<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
				<!-- Button -->
				<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4 btn-danger">
					Shop Now
				</a>
			</div>
		</div>
	</div>

	<div class="item-slick1 item3-slick1" style="background-image: url(images/m3.jpg);">
		<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
			<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" style="color:tomato"
			data-appear="rotateInUpRight">
			On Sale!!
		</h2>

		<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
			<!-- Button -->
			<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4 btn-danger">
				Shop Now
			</a>
		</div>
	</div>
</div>

</div>
</div>
</section>



<section class="newproduct bgwhite p-t-45 p-b-105">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Featured Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">

				

				<?php

					// $query = "SELECT * FROM product";

				$query = "SELECT * FROM product";
				$results = mysqli_query($link, $query);
				while($row = mysqli_fetch_assoc($results)) :
					?>

					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="admin/products/<?php echo $row['pic']; ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="product-detail.php?proId=<?php echo $row['p_id']; ?>" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="product-detail.php?proId=<?php echo $row['p_id']; ?>" class="block2-name dis-block s-text3 p-b-5"><button class=" size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											View Product
										</button></a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $row['p_name']; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<?php echo $row['price']; ?>$
								</span>
							</div>
						</div>
					</div>

				<?php endwhile; ?>



			</div>
		</div>

	</div>
</section>


<?php include 'includes/footer.php';?>