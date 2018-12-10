<?php
	include('../koneksi.php');
	$unama=$_POST['unama'];
	$nama=$_POST['nama'];
	$jk=$_POST['gender'];
	$ttl=$_POST['ttl'];
	$addr=$_POST['address'];
	$pass=$_POST['pass'];

	$sql = "UPDATE manager SET nama_manager='$nama', jeniskelamin='$jk', ttl='$ttl', alamat='$addr', password='$pass' where username='$unama'";

	$query = mysqli_query($conn,$sql);

	if ($query){
    	echo "<script>alert('Update Berhasil')</script>";
    	echo "<script>location.href='../manager.php'</script>";
    }else {
    	echo "<script>alert('Update Gagal')</script>";
    	echo "<script>location.href='../manager.php'</script>";
}
?>