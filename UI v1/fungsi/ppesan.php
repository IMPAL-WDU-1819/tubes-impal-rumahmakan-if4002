<?php
	include('../koneksi.php');
	$idtr=$_POST['#data'];

	$sql = "UPDATE transaksi SET status='Lunas' where id_transaksi=$idtr and status='Pesan'";

	$query = mysqli_query($conn,$sql);

	if ($query){
    	echo "<script>alert('Update Berhasil')</script>";
    	//echo "<script>location.href='../kelolabahan.php'</script>";
    }else {
    	echo "<script>alert('Update Gagal')</script>";
    	//echo "<script>location.href='../kelolabahan.php'</script>";
}
?>