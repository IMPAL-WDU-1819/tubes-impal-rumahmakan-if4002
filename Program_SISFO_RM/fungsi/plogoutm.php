<?php
	session_start();
	include ('../koneksi.php');
	$sql = "DELETE from laporan";
	$query = mysqli_query($conn,$sql);
	session_destroy();
	header("location: ../signin.php");
?>