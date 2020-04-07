<?php
$koneksi = new mysqli("localhost","root","","db_barber");
session_start();
$r=session_id();

require "function.php";

$id = $_GET['id'];
// $infoproduk = pecah("SELECT * FROM produk WHERE id =".$id);

 if(!isset($_SESSION['id_user'])){

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
			Beli Barang 
		</h2>
		
	</section>

<br>
	<div class="container">
		<div class="card">
		  <div class="card-header">
		    Beli Barang <?php  foreach($infoproduk = pecah("select * from produk where id_produk =".$id) as $data){
					// echo $data['id_produk'];
					echo $data['nama_produk'];}?>
		  </div>
		  <div class="card-body">
		    <?php 
		    	foreach($infoproduk = pecah("select * from produk where id_produk =".$id) as $data){
					// echo $data['id_produk'];
					// echo $data['nama_produk'];
				
		     ?>

		     <div class="row">
		     	<div class="col-md-6"><img src="../foto_produk/<?= $data["foto_produk"]; ?>" width="550px" height="400" alt="IMG-PRODUCT"></div>
		     	<div class="col-md-6"><form action="input-aksi.php" method="post">
					<input type="hidden" name="id_barang" value="<?php echo $data['id_produk']?>">
					<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
				  
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama Barang</label>
				    <input type="text" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_produk" value="<?php echo $data['nama_produk']; ?>">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Harga</label>
				    <input type="text" readonly class="form-control" name="harga_produk" id="exampleInputPassword1" placeholder="Password" value="<?php echo $data['harga_produk']; ?>">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Deskripsi</label>
				    <input type="text" class="form-control" readonly name="deskripsi_produk" id="exampleInputPassword1" placeholder="Password" value="<?php echo $data['deskripsi_produk']; ?>">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Jumlah Beli</label>
				    <input type="number" min="1" max="<?php echo $data['stok']; ?>" class="form-control" required="" name="jumlah" id="exampleInputPassword1" placeholder="Jumlah Beli....">
				  </div>

				  <button class="btn btn-primary" name="save">Submit</button>
				</form>
		     <?php 
		     	}
		     	?></div>
		     </div>
		     
		     <br>
				
		    
		  </div>
		</div>
	</div>
	
<br>

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
	<script type="text/javascript">
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
	</script>

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