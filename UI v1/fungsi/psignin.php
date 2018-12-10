<?php  
session_start();
include ('../koneksi.php');
$unama = $_POST["unama"];
$pass = $_POST["pass"];
$role = $_POST["role"];


	if ($role=="kasir"){
		$sql = "SELECT * from kasir where username = '$unama' and password = '$pass'";
		$query = mysqli_query($conn,$sql);
		$check = mysqli_num_rows($query);
		$data = mysqli_fetch_array($query);
		if ($check>=1){
			$_SESSION['idlogin']=$unama;
			$_SESSION['level']=$role;
			echo "<script>alert('login berhasil')</script>";
			header('location: ../transaksi.php');
		}else {
			echo "<script>alert('Login Gagal');
			location.href='../signin.php'</script>";
			//header('location: ../signin.php');
		}
	}elseif ($role=="dapur") {
		$sql = "SELECT * from gudang where username = '$unama' and password = '$pass'";
		$_SESSION['idlogin']=$unama;
		$_SESSION['level']=$role;
		$query = mysqli_query($conn,$sql);
		$check = mysqli_num_rows($query);
		$data = mysqli_fetch_array($query);
		if ($check>=1){
			echo "<script>alert('login berhasil')</script>";
			header('location: ../kelolabahan.php');
		}else {
			echo "<script>alert('Login Gagal');
			location.href='../signin.php'</script>";
			//header('location: ../signin.php');
		}
	}elseif ($role=="manager") {
		$sql = "SELECT * from manager where username = '$unama' and password = '$pass'";
		$_SESSION['idlogin']=$unama;
		$_SESSION['level']=$role;
		$query = mysqli_query($conn,$sql);
		$check = mysqli_num_rows($query);
		$data = mysqli_fetch_array($query);
		if ($check>=1){
			echo "<script>alert('login berhasil')</script>";
			header('location: ../manager.php');
		}else {
			echo "<script>alert('Login Gagal');
			location.href='../signin.php'</script>";
			//header('location: ../signin.php');
		}
	} else {
		echo "<script>alert('Login Gagal');
		location.href='../signin.php'</script>";
		//header('location: ../signin.php');
	}
?>