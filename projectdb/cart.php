


<?php
session_start();
if (!array_key_exists("c_id", $_COOKIE)) {
    header("location: register.php");
}
include 'includes/header.php';
?>


<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/cart.jpg);">
	<h2 class="l-text2 t-center">
		Cart
	</h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1"></th>
						<th class="column-2">Product</th>
						<th class="column-3">Price</th>
						<th class="column-4 p-l-70">Quantity</th>
						<th class="column-5">Total</th>
					</tr>

					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
								<img src="admin/products/dental 1.jpg" alt="IMG-PRODUCT">
							</div>
						</td>
						<td class="column-2">Dental Equiment</td>
						<td class="column-3">$36.00</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product1"
									value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5">$36.00</td>
					</tr>

					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
								<img src="admin/products/hospital 1.jpg" alt="IMG-PRODUCT">
							</div>
						</td>
						<td class="column-2">Hospital</td>
						<td class="column-3">$16.00</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product2"
									value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5">$16.00</td>
					</tr>
				</table>
			</div>
		</div>



		<!-- Total -->
		<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
			<h5 class="m-text20 p-b-24">
				Cart Totals
			</h5>


			<!--  -->
			<div class="flex-w flex-sb-m p-t-26 p-b-30">
				<span class="m-text22 w-size19 w-full-sm">
					Total:
				</span>

				<span class="m-text21 w-size20 w-full-sm">
					$52.00
				</span>
			</div>

			<div class="size15 trans-0-4">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"> <a href="checkout.php">Proceed
						to Checkout</a>

				</button>
			</div>
		</div>
	</div>
</section>



<?php include 'includes/footer.php';?>