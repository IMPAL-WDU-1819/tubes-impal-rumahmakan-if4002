<?php 
include('../koneksi.php');

	$id = $_GET['id'];
	$sql = "DELETE from transaksi where id = '$id'";
	$query = mysqli_query($conn,$sql);

	if ($query){
		echo "<script>alert('Delete Berhasil')</script>";
    	echo "<script>location.href='../transaksi.php'</script>";
	} else {
		echo "<script>alert('Delete Gagal')</script>";
    	echo "<script>location.href='../transaksi.php'</script>";
	}

 ?>