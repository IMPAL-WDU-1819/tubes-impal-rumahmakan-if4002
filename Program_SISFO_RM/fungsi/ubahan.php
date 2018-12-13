<?php
	include('../koneksi.php');
	$idb=$_POST['id_bahan'];
	$namab=$_POST['nama_bahan'];
	$jml=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$hsatuan=$_POST['harga_satuan'];
	$tglm=$_POST['tgl_masuk'];
	$tglk=$_POST['tgl_kadaluarsa'];

	$sql = "UPDATE bahan SET jumlah=$jml, satuan='$satuan', harga_satuan=$hsatuan, tgl_masuk='$tglm', tgl_kadaluarsa='$tglk' where id_bahan=$idb";

	$query = mysqli_query($conn,$sql);

	if ($query){
    	echo "<script>alert('Update Berhasil')</script>";
    	echo "<script>location.href='../kelolabahan.php'</script>";
    }else {
    	echo "<script>alert('Update Gagal')</script>";
    	echo "<script>location.href='../kelolabahan.php'</script>";
}
?>