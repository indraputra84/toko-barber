<?php
session_start();

require "function.php";

$infoproduk = query("SELECT * FROM produk");
 if(isset($_SESSION['id_user'])){
 	echo "<script>location='dashboard.php';</script>";
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Produk Kami</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<?php 
	include 'navbar.php';
	?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Produk Kami 
		</h2>
		<p class="m-text13 t-center">
			New Tool Style Collection 2020
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Kategori
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Mesin cukur
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Gunting rambut
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Minyak rambut
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Selimut
								</a>
							</li>

							<li class="p-t-4">
								<a href="#" class="s-text13">
									Kursi
								</a>
							</li>
						</ul>

						
						<div class="filter-price p-t-22 p-b-5 bo3">
							
						<h2 class="s-text12 p-b-30">						
						Mulailah dari tempatmu berada ,
						gunakan yang kau punya , 
						lakukan yang kau bisa !
						</h2>

							
						</div>

						<div class="filter-color p-t-22 p-b-5 bo3">
							

							
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Cari produk...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Filter</option>
									<option>Harga: rendah ke tinggi</option>
									<option>Harga: tinggi ke rendah</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Harga</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						
					</div>

					<!-- Product -->
					<div class="row">
						<?php foreach ($infoproduk as $row) : ?>
						
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="../foto_produk/<?= $row["foto_produk"]; ?>" alt="IMG-PRODUCT">
									
									<div class="block2-overlay trans-0-4">
										

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<?php if(!isset($_SESSION['id_user'])){
				 								?>
				 									<a href="../login.php" 
													class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Detail
													</a>
				 								<?php
											}else{
												?><a href="produkdetail.php?id=<?= $row["id_produk"];?>" 
											class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Detail
											</a><?php
											}?>
										</div>
									</div>
								</div> 

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?= $row["nama_produk"]; ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp.<?= $row["harga_produk"]; ?>
									</span>
								</div>
							</div>
						</div>

						<?php endforeach; ?>

						

				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					THE GODBARBER SHOP
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Jika ada pertanyaan?
						silahkan datang ditoko kami Jl.karang empat XI / 2 Surabaya
					</p>

					<div class="flex-m p-t-30">
						<a ="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a ="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a ="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a ="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a ="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Kategori
				</h4>

				<ul>
					<li class="p-b-9">
						<a ="#" class="s-text7">
							Mesin cukur
						</a>
					</li>

					<li class="p-b-9">
						<a ="#" class="s-text7">
							Gunting rambut
						</a>
					</li>

					<li class="p-b-9">
						<a ="#" class="s-text7">
							Minyak rambut
						</a>
					</li>

					<li class="p-b-9">
						<a ="#" class="s-text7">
							Selimut
						</a>
					</li>
				</ul>
			</div>

			
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					KEUNTUNGAN
				</h4>

				<ul>
					<li class="p-b-9">
						<a ="#" class="s-text7">
							Terjangkau  
						</a>
					</li>

					<li class="p-b-9">
						<a ="#" class="s-text7">
							Terjamin 
						</a>
					</li>

					<li class="p-b-9">
						<a ="#" class="s-text7">
							Barang Original
						</a>
					</li>


					
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					informasi
				</h4>

				<ul>
					<li class="p-b-9">
						<a ="#" class="s-text7">
							Tentang kami
						</a>
					</li>

					<li class="p-b-9">
						<a ="" class="s-text7">
							Pelayanan toko
						</a>
					</li>
					
					<li class="p-b-9">
						<a ="#" class="s-text7">
							Rekan kerja
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					PERTANYAAN
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a ="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a ="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a ="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a ="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a ="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				The Godbarber © 2020 
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<!-- <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script> -->

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
