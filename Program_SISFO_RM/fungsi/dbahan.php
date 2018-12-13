<?php 
include('../koneksi.php');

	$id_bahan = $_GET['id_bahan'];
	$sql = "DELETE from bahan where id_bahan = '$id_bahan'";
	$query = mysqli_query($conn,$sql);

	if ($query){
		echo "<script>alert('Delete Berhasil')</script>";
    	echo "<script>location.href='../kelolabahan.php'</script>";
	} else {
		echo "<script>alert('Delete Gagal')</script>";
    	echo "<script>location.href='../kelolabahan.php'</script>";
	}

 ?>