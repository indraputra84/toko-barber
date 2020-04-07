<?php 
include 'koneksi.php';
$id_barang = $_POST['id_barang'];
$jumlah = $_POST['jumlah'];
$id_user = $_POST['id_user'];

mysqli_query($koneksi,"insert into keranjang values('','$id_barang','$id_user','$jumlah')");

header("location:dashboard.php");
?>