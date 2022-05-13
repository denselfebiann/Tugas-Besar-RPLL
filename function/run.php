<?php
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		include("../function/connect.php");
		$sql = "SELECT * FROM users";
		$result = mysqli_query($con, $sql);
		$check = false;
		while(($row = mysqli_fetch_array($result)) && !$check){
			if(($row['email'] == $email) && ($row['password'] == $password)){
				$idUser = $row['idUser'];
				$namaUser = $row['firstName'] . " " . $row['lastName'];
				$check = true;
			}
		}
		if($check){
			session_start();
			setcookie("idUser", $idUser, time() + (60 * 60 * 24 * 5), '/');
			setcookie("namaUser", $namaUser, time() + (60 * 60 * 24 * 5), '/');
			
			$sql = "SELECT * FROM buyer WHERE idUser = " . $idUser;
			$result = mysqli_query($con, $sql);
			while($row = mysqli_fetch_array($result)){
				$idBuyer = $row['idBuyer'];
			}
			setcookie("idBuyer", $idBuyer, time() + (60 * 60 * 24 * 5), '/');
			$_SESSION['login'] = true;
			echo "<script>alert('Login Success!!');document.location = '../buyer/home.php';</script>";
		}else{
			echo "<script>alert('Login Fail!!');document.location = '../login/login.php';</script>";
		}
	}
	if(ISSET($_POST['addToCart'])){
		$idBarang = $_POST['idBarang'];
		$idKeranjang = $_POST['idKeranjang'];
		$jumlahBarang = $_POST['jumlahBarang'];
		$size = $_POST['size'];
		include("connect.php");
		$sql = "SELECT * FROM barang WHERE idBarang = " . $idBarang;
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($result)){
			$hargaBarang = $row['hargaBarang'];
		}
		$totalHarga = ($hargaBarang * $jumlahBarang);
		$sql = "SELECT * FROM isi_keranjang WHERE idKeranjang = " . $idKeranjang;
		$result = mysqli_query($con, $sql);
		$check = false;
		while(($row = mysqli_fetch_array($result)) && (!$check)){
			if($row['idBarang'] == $idBarang){
				$check = true;
				$idIsiKeranjang = $row['id_isi_keranjang'];
				$jumlahBarang = $jumlahBarang + $row['qytBarang'];
				$totalHarga = $totalHarga + $row['totalHarga'];
			}
		}
		if(!$check){
			$sql = "INSERT INTO isi_keranjang(idKeranjang, idBarang, qytBarang, totalHarga)
					VALUES(" . $idKeranjang . ", " . $idBarang . ", " . $jumlahBarang . ", " . $totalHarga . ")";
		}else{
			$sql = "UPDATE isi_keranjang SET qytBarang = " . $jumlahBarang . ", totalHarga = " . $totalHarga . " WHERE id_isi_keranjang = " . $idIsiKeranjang;
		}
		if(mysqli_query($con, $sql)){
			echo "<script>alert('Barang berhasil ditambahkan!');document.location = '../buyer/home.php';</script>";
		}else{
			echo "<script>alert('Gagal');</script>";
		}
	}
?>