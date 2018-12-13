<?php
	include('../koneksi.php');
	$id=$_POST['id'];
	$namap=$_POST['nama_pesanan'];
	$jml=$_POST['jumlah'];
	$harga=$_POST['harga'];
	$ket=$_POST['keterangan'];

	$sql = "UPDATE transaksi SET jumlah=$jml, total_harga=$jml*$harga, keterangan='$ket' where id=$id";

	$query = mysqli_query($conn,$sql);

	if ($query){
    	echo "<script>alert('Update Berhasil')</script>";
    	echo "<script>location.href='../transaksi.php'</script>";
    }else {
    	echo "<script>alert('Update Gagal')</script>";
    	echo "<script>location.href='../transaksi.php'</script>";
}
?>