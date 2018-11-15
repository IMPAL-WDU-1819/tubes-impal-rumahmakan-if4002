<?php 
	include("../koneksi.php");
	$fnama = $_POST["nama"];
	$unama = $_POST["unama"];
	$pass = $_POST["pass"];
	$ttl = $_POST["ttl"];
	$addr = $_POST["address"];
	$gender = $_POST["gender"];
	$role = $_POST["role"];


	if ($role=="kasir") {
		$sql= "INSERT INTO kasir(username,password,nama_kasir,ttl,alamat,jeniskelamin) VALUES ('$unama','$pass','$fnama','$ttl','$addr','$gender')";
		$query = mysqli_query($conn,$sql);
		if ($query) {
		echo "<script>alert('Regitrasi Berhasil')</script>";
    	echo "<script>location.href='../signin.php'</script>";
    	} else {
    	echo "<script>alert('Registrasi Gagal')</script>";
    	echo "<script>location.href='../register.php'</script>";
		}		
	} elseif ($role=="dapur") {
		$sql= "INSERT INTO gudang(username,password,nama,ttl,alamat,jeniskelamin) VALUES ('$unama','$pass','$fnama','$ttl','$addr','$gender')";
		$query = mysqli_query($conn,$sql);
		if ($query) {
		echo "<script>alert('Regitrasi Berhasil')</script>";
    	echo "<script>location.href='../signin.php'</script>";
    	} else {
    	echo "<script>alert('Registrasi Gagal')</script>";
    	echo "<script>location.href='../register.php'</script>";
		}
	} elseif ($role=="manager") {
		$sql= "INSERT INTO manager(username,password,nama_manager,ttl,alamat,jeniskelamin) VALUES ('$unama','$pass','$fnama','$ttl','$addr','$gender')";
		$query = mysqli_query($conn,$sql);
		if ($query) {
		echo "<script>alert('Regitrasi Berhasil')</script>";
    	echo "<script>location.href='../signin.php'</script>";
    	} else {
    	echo "<script>alert('Registrasi Gagal')</script>";
    	echo "<script>location.href='../register.php'</script>";
		}
	}

 ?>