<?php
	if(ISSET($_POST['editBarang'])){
		$idBarang = $_POST['idBarang'];
		$namaBarang = $_POST['namaBarang'];
		$deskripsiBarang = $_POST['deskripsiBarang'];
		$jumlahBarang = $_POST['jumlahBarang'];
		$hargaBarang = $_POST['hargaBarang'];
		$con = mysqli_connect("localhost", "root", "", "wrap_database");
		$sql = "UPDATE barang SET namaBarang = '" . $namaBarang . "', deskripsiBarang = '" . $deskripsiBarang . "', jumlahBarang = " . $jumlahBarang . ", hargaBarang = " . $hargaBarang . " WHERE idBarang = " . $idBarang;
		if(mysqli_query($con, $sql)){
			echo "<script>alert('Update Successful');document.location = 'data.php';</script>";
		}else{
			echo "<script>alert('Update Unsuccessful');document.location = 'data.php';</script>";
		}
	}
?>