<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">

		<div class="flex-w p-b-90">
			<div class="col-sm-5">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store.
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<h4 class="s-text12 p-b-30">
					CATEGORIES
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dental Equipment

						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Hospital Equipment
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Laboratory Equipment
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Medical Linen
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Surgical
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
​​​​​​​						Veterinary
						</a>
					</li>
				</ul>
			</div>

			<div class="col-sm-3">
				<h4 class="s-text12 p-b-30">
					SERVICES
				</h4>

				<ul>

					<li class="p-b-9">
						<a href="about.php" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Contact Us
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Terms & conditions
						</a>
					</li>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Privacy Policy
						</a>
					</li>

				</ul>
			</div>

		</div>

		<div class="t-center p-l-15 p-r-15">
			<div class="t-center s-text8 p-t-20">
				<p>Database Project Made By <a href="#">Group</a>.</p>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">

		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$(".formToggle").click(function () {
			$("#form1").toggle();
			$("#form2").toggle();
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
