<?php
session_start(); 
session_destroy();
//echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";
?>
<meta http-equiv="refresh" content="0; url=index.php" />