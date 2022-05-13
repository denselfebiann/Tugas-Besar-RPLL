-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 05:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wrap_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `idUser`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `idStore` int(11) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `deskripsiBarang` varchar(100) NOT NULL,
  `hargaBarang` int(11) NOT NULL,
  `jumlahBarang` int(11) NOT NULL,
  `gambarBarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBarang`, `idStore`, `namaBarang`, `deskripsiBarang`, `hargaBarang`, `jumlahBarang`, `gambarBarang`) VALUES
(1, 1, 'Denim Jacket', 'Jaket Denim terbuat dari kain pilihan.', 300000, 8, 'denim.png'),
(2, 1, 'Blue Jacket', 'Bagus', 160000, 10, 'bluejacket.png'),
(3, 1, 'Crewneck Pink', 'Bagus', 175000, 5, 'crewneckpmo.png'),
(4, 1, 'Hoodie Putih', 'Bagus', 180000, 10, 'hoodieputih.png'),
(5, 1, 'Varsity Jacket', 'Jaket Varsity kekinian', 370000, 10, 'varsity.png'),
(6, 1, 'Denim Vest', 'Vest dengan bahan denim yang bagus.', 120000, 10, 'denimvest.png'),
(7, 1, 'Red Vest', 'Vest berwarna merah dan bercorak', 120000, 10, 'redvest.png'),
(8, 1, 'Floral Jacket', 'Jacket bermotif bunga yang unik', 300000, 5, 'floraljacket.png'),
(9, 1, 'Checkerboard Jacket', 'Jaket bermotif papan catur (Checkerboard) yang unik dan keren abis.', 200000, 5, 'checkerjacket.png');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `idBuyer` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idKeranjang` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`idBuyer`, `idUser`, `idKeranjang`, `alamat`) VALUES
(1, 2, 1, 'jl.dipati ukur no 94'),
(2, 6, 2, 'jl. oleander blok C3 No. 9');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `isi_keranjang`
--

CREATE TABLE `isi_keranjang` (
  `idKeranjang` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `asuransiBarang` tinyint(1) NOT NULL,
  `qytBarang` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_keranjang`
--

INSERT INTO `isi_keranjang` (`idKeranjang`, `idBarang`, `asuransiBarang`, `qytBarang`, `totalHarga`) VALUES
(1, 2, 1, 2, 300000),
(2, 2, 0, 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idPayment` int(11) NOT NULL,
  `paymentMethod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `idSeller` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`idSeller`, `idUser`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `statistik_store`
--

CREATE TABLE `statistik_store` (
  `idStatistik` int(11) NOT NULL,
  `idStore` int(11) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `storeStat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `idStore` int(11) NOT NULL,
  `idSeller` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `namaStore` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`idStore`, `idSeller`, `alamat`, `phoneNumber`, `pin`, `namaStore`) VALUES
(1, 1, 'jl.cibaduyut 5', '0891253647887', '102030', 'STORE-AGE');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idBuyer` int(11) NOT NULL,
  `idSeller` int(11) NOT NULL,
  `idKeranjang` int(11) NOT NULL,
  `idPayment` int(11) NOT NULL,
  `tanggalPemesanan` date NOT NULL,
  `tanggalExpired` date NOT NULL,
  `validasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `wrapPay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `email`, `firstName`, `lastName`, `password`, `wrapPay`) VALUES
(1, 'admin@gmail.com', 'use', 'admin', 'admn123', 0),
(2, 'pierre@gmail.com', 'Pierre', 'Sebastian', 'pierre123', 0),
(3, 'store.age@gmail.com', 'STORE', 'AGE', 'store123', 0),
(4, 'denselfebiann@gmail.com', 'densel', 'febian', 'dd', 0),
(5, 'denselfebiann@gmail.com', 'densel', 'febian', 'dd', 0),
(6, 'denselfebiann@gmail.com', 'densel', 'febian', 'aa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `idStore` (`idStore`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`idBuyer`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `buyer_ibfk_2` (`idKeranjang`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_keranjang`
--
ALTER TABLE `isi_keranjang`
  ADD PRIMARY KEY (`idKeranjang`,`idBarang`),
  ADD KEY `idBarang` (`idBarang`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idPayment`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`idSeller`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `statistik_store`
--
ALTER TABLE `statistik_store`
  ADD PRIMARY KEY (`idStatistik`),
  ADD KEY `idStore` (`idStore`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`idStore`),
  ADD KEY `idSeller` (`idSeller`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `idBuyer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idPayment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `idSeller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistik_store`
--
ALTER TABLE `statistik_store`
  MODIFY `idStatistik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `idStore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idStore`) REFERENCES `store` (`idStore`);

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `buyer_ibfk_2` FOREIGN KEY (`idKeranjang`) REFERENCES `isi_keranjang` (`idKeranjang`);

--
-- Constraints for table `isi_keranjang`
--
ALTER TABLE `isi_keranjang`
  ADD CONSTRAINT `isi_keranjang_ibfk_1` FOREIGN KEY (`idKeranjang`) REFERENCES `buyer` (`idKeranjang`),
  ADD CONSTRAINT `isi_keranjang_ibfk_2` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `statistik_store`
--
ALTER TABLE `statistik_store`
  ADD CONSTRAINT `statistik_store_ibfk_1` FOREIGN KEY (`idStore`) REFERENCES `store` (`idStore`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`idSeller`) REFERENCES `seller` (`idSeller`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
