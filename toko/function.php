<?php 
 $conn = mysqli_connect("localhost","root","","db_barber");

 function query($query){
 	global $conn;
 	$result = mysqli_query($conn, $query);
 	$rows = [];
 	while( $row = mysqli_fetch_assoc($result)){
 		$rows[] = $row;
 	}
 	return $rows;
 }

 function pecah($query){
 	global $conn;
 	$data = mysqli_query($conn,$query);
 	$hasil = [];
	while($d = mysqli_fetch_assoc($data)){
		$hasil[] = $d;
	}
	return $hasil;
 }
?>