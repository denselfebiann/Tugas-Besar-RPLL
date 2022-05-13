<?php
	function getBarangBasedId($con, $idBarang){
		$sql = "SELECT * FROM barang WHERE idBarang = " . $idBarang;
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getBarangBasedIdStore($con, $idStore){
		$sql = "SELECT * FROM barang WHERE idStore = " . $idStore;
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getTransaksiBasedIdSeller($con, $idSeller){
		$sql = "SELECT * FROM transaksi WHERE idSeller = " . $idSeller . " AND validasi = 0";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getTransaksiInformation($con, $idTransaksi){
		$sql = "SELECT a.gambarBarang, a.namaBarang, a.hargaBarang, b.qytBarang, b.totalHarga FROM a barang, b isi_keranjang, c transaksi WHERE c.idTransaksi = " . $idTransaksi . " AND c.idKeranjang = b.idKeranjang AND b.idBarang = a.idBarang";
		$result = mysqli_query($con, $sql);
		return $result;
	}
?>