<?php 
include 'koneksi.php';
$id_user = $_POST['id_user'];
$grandTotal = $_POST['grandTotal'];

mysqli_query($koneksi,"insert into pembelian values('','$id_user','','$grandTotal')");

mysqli_query($koneksi,"insert into pembelian_produk(id_produk,jumlah) select id_produk,jumlah from keranjang where id_user = ".$id_user."");

$id = mysqli_query($koneksi,'SELECT * FROM pembelian ORDER BY id_pembelian DESC LIMIT 0, 1');
$id = mysqli_fetch_row($id);
$id= $id[0];

mysqli_query($koneksi,"UPDATE pembelian_produk SET id_pembelian = ".$id." WHERE id_pembelian = 0");

mysqli_query($koneksi,"DELETE FROM keranjang WHERE id_user = ".$id_user);

// header("location:dashboard.php");

?>