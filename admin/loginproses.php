<?php 
session_start();
include 'koneksi.php';
$kon = new Koneksi();

$user = @$_POST['email'];
$pass = @$_POST['pass'];


$abc = $kon->kueri("SELECT * FROM admin WHERE username = '$user' AND password = '$pass' ");
$jumlah =  $kon->jumlah_data($abc);
if ($jumlah == 0) {
	echo "<script>alert('Login Failed')</script>";
		echo "<meta http-equiv='refresh' content='0; url=login.php' />";

}else{
	$hasil = $kon->hasil_data($abc);
	$_SESSION['role'] = "admin";
	$_SESSION['user'] = $hasil['id_admin'];
	$_SESSION['nama'] = $hasil['username'];
	$_SESSION['admin'] = "admin";
	echo "<script>alert('Welcome $hasil[username].');</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php' />";
}
?>
<!-- <meta http-equiv="refresh" content="0; url=index.php" /> -->
