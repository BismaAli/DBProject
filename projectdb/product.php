
<?php include 'includes/header.php';?>


<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-2.jpg);">
	<h2 class="l-text2 t-center">
		Products
	</h2>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Categories
					</h4>

					<ul class="p-b-54">
						<li class="p-t-4">
							<a href="product.php?c_id=0; ?>" class="s-text13 active1" >
								All
							</a>
						</li>
						<?php
						$query = "SELECT * FROM category";
						$result = mysqli_query($link, $query);
						while($row = mysqli_fetch_assoc($result)) :
							?>

							<li class="p-t-4">
								<a href="product.php?c_id=<?php echo $row['c_id']; ?>" class="s-text13 active1">
									<?php echo $row['c_name']; ?>
								</a>
							</li>

							<?php 
						endwhile; 
						?> 

					</ul>

					
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->

				<!-- Product -->
				<div class="row">

					<?php
					
					// $query = "SELECT * FROM product";
					$catId=$_GET['c_id'];
					if($catId==0){
						$query = "SELECT * FROM product";
					}
					else{
					$query = "SELECT * FROM product WHERE c_id = '$catId'";
					}
					$results = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($results)) :
						?>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="admin/products/<?php echo $row['pic']; ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="product-detail.php?p_id=<?php echo $row['p_id']; ?>" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="product-detail.php?p_id=<?php echo $row['p_id']; ?>" class="block2-name dis-block s-text3 p-b-5"><button class=" size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											View Product
										</button></a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.php?p_id=<?php echo $row['p_id']; ?>" class="block2-name dis-block s-text3 p-b-5">
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

				<!-- Pagination -->
				
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php';?>