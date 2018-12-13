<?php 
include('../koneksi.php');

$ayam = $_POST['ayam'];
$hayam = $_POST['hayam'];
$jayam = $_POST['jayam'];
$aket = $_POST['aketerangan'];
$burger = $_POST['burger'];
$hburger = $_POST['hburger'];
$jburger = $_POST['jburger'];
$bket = $_POST['bketerangan'];
$pizza = $_POST['pizza'];
$hpizza = $_POST['hpizza'];
$jpizza = $_POST['jpizza'];
$pket = $_POST['pketerangan'];
$lasagna = $_POST['lasagna'];
$hlas = $_POST['hlasagna'];
$jlas = $_POST['jlasagna'];
$lket = $_POST['lketerangan'];
$spag = $_POST['spaghetti'];
$hspag = $_POST['hspaghetti'];
$jspag = $_POST['jspaghetti'];
$spket = $_POST['spketerangan'];
$steak = $_POST['steak'];
$hsteak = $_POST['hsteak'];
$jsteak = $_POST['jsteak'];
$stket = $_POST['stketerangan'];
$lemont = $_POST['lemont'];
$hlemont = $_POST['hlemont'];
$jlemont = $_POST['jlemont'];
$ltket = $_POST['ltketerangan'];
$tehm = $_POST['tehm'];
$htehm = $_POST['htehm'];
$jtehm = $_POST['jtehm'];
$tmket = $_POST['tmketerangan'];
$id = rand(1,100);

if ($jayam>0) {
		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$ayam',$jayam,$hayam,'$aket',$jayam*$hayam,'Pesan')";
 		$query = mysqli_query($conn,$sql);
}
if ($jburger>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$burger',$jburger,$hburger,'$bket',$jburger*$hburger,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
if ($jpizza>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$pizza',$jpizza,$hpizza,'$pket',$jpizza*$hpizza,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
if ($jlas>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$lasagna',$jlas,$hlas,'$lket',$jlas*$hlas,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
if ($jspag>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$spag',$jspag,$hspag,'$spket',$jspag*$hspag,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
if ($jsteak>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$steak',$jsteak,$hsteak,'$stket',$jsteak*$hsteak,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
if ($jlemont>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$lemont',$jlemont,$hlemont,'$ltket',$jlemont*$hlemont,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
if ($jtehm>0) {
 		$sql = "INSERT INTO transaksi(id_transaksi,nama_pesanan,jumlah,harga,keterangan,total_harga,status) VALUES ($id,'$tehm',$jtehm,$htehm,'$tmket',$jtehm*$htehm,'Pesan')";
 		$query = mysqli_query($conn,$sql); 	
}
	echo "<script>location.href='../transaksi.php'</script>";
	

?>