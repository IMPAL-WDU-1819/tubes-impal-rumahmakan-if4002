<?php 
include ('../koneksi.php');
$tglm = $_POST['tglmulai'];
$tgla = $_POST['tglakhir'];
$jenis = $_POST['jenis'];

if ($jenis=='transaksi') {
	$sql = "INSERT INTO laporan (tgl_awal,tgl_akhir,jenis) values ('$tglm','$tgla','$jenis')";
	$query = mysqli_query($conn,$sql);
	$sqlh = "SELECT sum(total_harga) FROM transaksi WHERE tanggal>='$tglm' AND tanggal<='$tgla'";
	$queryh = mysqli_query($conn,$sqlh);
	$data = mysqli_fetch_array($queryh);
	$harga = $data['sum(total_harga)'];
	$sqlu = "UPDATE laporan set jumlah=$harga where tgl_awal='$tglm' and tgl_akhir='$tgla'";
	$queryu = mysqli_query($conn,$sqlu);
	echo "<script>location.href='../manager.php'</script>";
} elseif ($jenis=='bahan') {
	$sql = "INSERT INTO laporan (tgl_awal,tgl_akhir,jenis) values ('$tglm','$tgla','$jenis')";
	$query = mysqli_query($conn,$sql);
	$sqlh = "SELECT (sum(harga_satuan)*sum(jumlah)) FROM bahan WHERE tgl_masuk>='$tglm' AND tgl_masuk<='$tgla'";
	$queryh = mysqli_query($conn,$sqlh);
	$data = mysqli_fetch_array($queryh);
	$harga = $data['(sum(harga_satuan)*sum(jumlah))'];
	$sqlu = "UPDATE laporan set jumlah=$harga where tgl_awal='$tglm' and tgl_akhir='$tgla'";
	$queryu = mysqli_query($conn,$sqlu);
	echo "<script>location.href='../manager.php'</script>";
}
 ?>