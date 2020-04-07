<?php
session_start();
if( isset($_SESSION["id_user"])){
    header("Location: dashboard.php");
    exit;
}
include"koneksi.php";
?>





<html>
<head>
  <!--Import fontawesome Icon Font-->
 <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>The Godbarber</title>
</head>

<body id="home" class="scrollspy">


  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="grey darken-4">
      <div class="">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo" style="padding-left: 93px;"><h5>The Godbarber</h5></a>
          <a href="#" data-target="mobile-wow" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">

            <li><a href="#Tentang">Tentang kami</a></li>
            <li><a href="#Clients">Rekan kerja</a></li>
            <li><a href="#services">Pelayanan</a></li>
            
            <li><a href="#portfolio">Customers</a></li>
            <li><a href="toko/dashboard.php">Produk kami</a></li>
            <li><a href="login.php" class="btn btn-primary">LOGIN</a></li>

          </ul>
        </div>
      </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-wow">
      <li><a href="">Tentang kami</a></li>
      <li><a href="">Clients</a></li>
      <li><a href="">Pelayanan</a></li>
      <li><a href="">Portofio</a></li>

      <li><a href="login.php">Login</a></li>

    </ul> 


    <!-- slider -->

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/1.png">
          <div class="caption center-align">
            <h3>Cut and style your hair</h3>
            <h5 class="light grey-text text-lighten-3">Find your handsome in here.</h5>
            <p>Beli Produk kami sekarang</p>
          </div>
        </li>
        <li>
          <img src="img/slider/2.png">
          <div class="caption center-align">
            <h3>keep it HANDSOME</h3>
            <h5 class="light grey-text text-lighten-3">Find your handsome in here.</h5>
            <p>Beli Produk kami sekarang</p>
          </div>
        </li>
        <li>
          <img src="img/slider/3.png">
          <div class="caption center-align">
            <h3>Cut and style your hair</h3>
            <h5 class="light grey-text text-lighten-3">Find your handsome in here.</h5>
            <p>Beli Produk kami sekarang</p>
          </div>
        </li>
      </ul>
    </div>


    <!-- Tentang kami -->
    <selection id="Tentang" class="Tentang scrollspy">
      <div class="container">
        <div class="row">

          <h3 class="center light grey-text text-darken-3">Tentang kami</h3>
          <div class="col m6 light darken-4">              
            <h5>Customers are the best friends</h5>

            <p>Customers are the best friends. Ya Pelanggan adalah Sahabat bagi Kami, layaknya sesama sahabat, kami fokus memberikan tenaga dan hati kami untuk mendengarkan dan memberikan pelayanan yang sesuai dengan kebutuhan pelanggan, kami siap memotong dan me-model rambut sesuai selera anda.</p>
          </div>
          <div class="col m6 light">

            <p>RESPONSE CUSTOMERS</p>
            <div class="progress">
              <div class="determinate red" style="width: 75%"></div>
            </div>
            <p>SERVICE AND COMFORT</p>
            <div class="progress">
              <div class="determinate red" style="width: 50%"></div>
            </div>
            <p>STYLE AND CUT</p>
            <div class="progress">
              <div class="determinate red" style="width: 85%"></div>
            </div>

          </div>
        </div>  
      </div>
    </selection>

    <!-- Clients paralax(transparan) -->

    <div  id="Clients" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/slider/4.png"></div>

      <div class="container Clients">
        <h3 class="center light white-text">Rekan kerja</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/gojek.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/tokopedia.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/grab.png">
          </div>
        </div>
      </div>
    </div>

    <!-- services -->
    <section id="services" class="services grey lighten-2 scrollspy"> 
      <div class="">
        <div class="row p-5">
          <h4 class="light center grey-text text-darken-3">Pelayanan The GodBarber</h4>
          <p></p>
    

          <div class="col m4 s12">

            <center><i class="fab fa-accessible-icon medium"></i></center>
            <h5 align="center">Fasilitas dan Peralatan Lengkap</h5>
            <p align="center">Kursi empuk, alat cukur lengkap, hingga barber clothing transparan yang memungkinkan kamu untuk mengecek HP sambil menikmati potongan rambut.</p>

          </div>

          <div class="col m4 s12">

            <center><i class="fas fa-cut medium"></i></center>
            <h5 align="center">Hasil Potongan Berkualitas</h5>
            <p align="center">Para barber paham tentang bentuk wajah, tekstur, rambut kamu dan kombinasi ketiga elemen tersebut untuk hasil potong yang terbaik dan sesuai dengan keinginan kamu.</p>
            
          </div>

          <div class="col m4 s12">

            <center><i class="fas fa-blind medium"></i></center>
            <h5 align="center">Tenaga Ahli Professional</h5>
            <p align="center">Setiap barber kami telah melalui pelatihan yang ekstensif dan memiliki jam terbang yang mumpuni.</p>

          </div>

          


        </div>
      </div>
    </section>


    <!-- portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Potong rambutmu disini !</h3>
        <br>

        <div class="row">

          <div class="col m3 s12">
            <img src="img/portfolio/1.png" class="responsive-img materialboxed">
          </div>

          <div class="col m3 s12">
            <img src="img/portfolio/2.png" class="responsive-img materialboxed">
          </div>

          <div class="col m3 s12">
            <img src="img/portfolio/3.png" class="responsive-img materialboxed">
          </div>

          <div class="col m3 s12">
            <img src="img/portfolio/6.png" class="responsive-img materialboxed">
          </div>

        </div>

        <div class="row">

          <div class="col m3 s12">
            <img src="img/portfolio/5.png" class="responsive-img materialboxed">
          </div>

          <div class="col m3 s12">
            <img src="img/portfolio/6.png" class="responsive-img materialboxed">
          </div>

          <div class="col m3 s12">
            <img src="img/portfolio/1.png" class="responsive-img materialboxed">
          </div>

          <div class="col m3 s12">
            <img src="img/portfolio/3.png" class="responsive-img materialboxed">
          </div>

        </div>


      </div>
    </section>

    

<section id="Pemotong" class="services grey lighten-2 scrollspy"> 
      <div class="container">
        
        <div class="row">

          <div class="col m6 light darken-4" align="center"> 
          <h4 align="">Jam buka</h3>             
            <h6>Senin - Kamis</h6>
            <p>09:00 - 16:00</p>
            <h6>Jumat</h6>
            <p>09:00 - 15:00</p>
            <h6>Sabtu</h6>
            <p>09:00 - 14:00</p>
            <h6>Minggu</h6>
            <p>Libur</p>
          </div>

          <div class="col m6 light" align="center">

            <h4 align="">Lokasi</h3> 
            <h6>Alamat</h6>
            <p>JL.Karang empat XI/2</p>
            <p>Ploso,Tambaksari 1033</p>

            <br>

            <h6 align="">Nomor telp</h5> 
            <p>(081) 234-9128</p>

          </div>

        </div>  
        </div>
</section>








<!-- footer -->
<footer class="grey darken-4 white-text center sticky-footer">

 <p class="flow-text">&copy;THE GODBARBER. </p> 

</footer>










<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
  const sideNav = document.querySelector('.sidenav');
  M.Sidenav.init(sideNav, {});

  const slider = document.querySelectorAll('.slider');
  M.Slider.init(slider, {
    indicator: false,
    height:500, 
    transition: 600,
    interval:4000
  });

  const parallax = document.querySelectorAll('.parallax');
  M.Parallax.init(parallax);

  const materialbox = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialbox);

  const scroll = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scroll,  {
    scrollOffset: 50
  });

</script>

</body>
</html>

