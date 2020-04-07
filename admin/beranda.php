<?php 
	$a = mysqli_query($koneksi,"select * from admin where id_admin = '". $_SESSION['user'] ."'");
	$b = mysqli_fetch_array($a);
?>
<h2>Selamat Datang, <?=  $b['username'] ?> </h2>