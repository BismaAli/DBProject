<?php include 'includes/header.php';?>
<?php 
$p_id=$_GET['p_id'];
?>

<!-- breadcrumb -->
<?php $query="SELECT * FROM product WHERE p_id='$p_id' ";
$result= mysqli_query($link,$query);
while ($row = mysqli_fetch_array($result)) { 
	?>
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.php" class="s-text16">
			Products
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					
					<div class="slick3">
						<div class="item-slick3" data-thumb="admin\products\<?php echo $row['pic']; ?>">
							<div class="wrap-pic-w">
								<img src="admin\products\<?php echo $row['pic']; ?>" data-zoom-image="admin\products\<?php echo $row['pic']; ?>" alt="Product Big image" id="product-image">
							</div>
						</div>

					
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $row['p_name']; ?>
				</h4>

				<span class="m-text17">
					$<?php echo $row['price']; ?>
				</span>

				<!-- <p class="s-text8 p-t-10">
					Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
				</p> -->

				<!--  -->
				<div class="p-t-33 p-b-60">
					
					<div class="p-b-45">
						<span class="s-text8 m-r-35">Sizes Available</span>
						<span class="s-text8">XS, S, M, L, XL, XXL</span>
					</div>
					<p>Please Enter Quantity to Proceed</p>
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">

								<form action="cart.php" method="GET">
									<input type="hidden" name="hidden_product_code" value="<?php echo $row["code"]; ?>" />
									<input type="hidden" name="hidden_id" value="<?php echo $row["p_id"]; ?>" />
									<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />
									<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>" />
									<input type="hidden" name="hidden_image" value="<?php echo $row["pic"]; ?>" />
									<input min="1" max="100" class="size8 m-text18 t-center num-product" type="number" name="hidden_quantity" >


								</div>

								<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
									<!-- Button -->
									<input type="submit" class="btn btn-dark "  name="add_to_cart" value="Add to Cart">
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35"><?php echo $row['code']; ?></span>
				</div>

				<!--  -->
			

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<div class="s-text8">
							<?php echo $row['details']; ?>
						</div>
					</div>
				</div>
				
			<?php } ?>

		</div>
	</div>
</div>





<?php include 'includes/footer.php';?>