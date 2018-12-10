<?php 
include("../koneksi.php");
	$nbahan = $_POST['nbahan'];
	$jml = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$hsatuan = $_POST['harga'];
	$tglm = $_POST['tglmasuk'];
	$tglk = $_POST['tglkadaluarsa'];

	$sql = "INSERT into bahan(nama_bahan,jumlah,satuan,harga_satuan,tgl_masuk,tgl_kadaluarsa) VALUES ('$nbahan','$jml','$satuan','$hsatuan','$tglm','$tglk')";
	$query = mysqli_query($conn,$sql);

	if ($query) {
		echo "<script>alert('Insert Berhasil')</script>";
    	echo "<script>location.href='../kelolabahan.php'</script>";
    }else {
    	echo "<script>alert('Insert Gagal')</script>";
    	echo "<script>location.href='../kelolabahan.php'</script>";
	}



 ?>