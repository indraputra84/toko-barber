<?php
$host="localhost";
$user="root";
$password="";
$db="db_barber";

$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){
	die("Error :".mysqli_error());
}
?>