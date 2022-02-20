-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 03:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wrap_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabeladmin`
--

CREATE TABLE `tabeladmin` (
  `idAdmin` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelbarang`
--

CREATE TABLE `tabelbarang` (
  `idBarang` int(11) NOT NULL,
  `idStore` int(11) NOT NULL,
  `deskripsiBarang` varchar(100) NOT NULL,
  `gambarBarang` varchar(100) NOT NULL,
  `hargaBarang` int(11) NOT NULL,
  `namaBarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelbuyer`
--

CREATE TABLE `tabelbuyer` (
  `idBuyer` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelisikeranjang`
--

CREATE TABLE `tabelisikeranjang` (
  `idKeranjang` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `asuransiBarang` tinyint(1) NOT NULL,
  `qytBarang` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelkeranjang`
--

CREATE TABLE `tabelkeranjang` (
  `idKeranjang` int(11) NOT NULL,
  `idBuyer` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelpayment`
--

CREATE TABLE `tabelpayment` (
  `idPayment` int(11) NOT NULL,
  `paymentMethod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelseller`
--

CREATE TABLE `tabelseller` (
  `idSeller` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelstatistikstore`
--

CREATE TABLE `tabelstatistikstore` (
  `idStatistik` int(11) NOT NULL,
  `idStore` int(11) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `storeStat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabelstore`
--

CREATE TABLE `tabelstore` (
  `idStore` int(11) NOT NULL,
  `idSeller` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `namaStore` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabeluser`
--

CREATE TABLE `tabeluser` (
  `idUser` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `wrapPay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tabelbarang`
--
ALTER TABLE `tabelbarang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `idStore` (`idStore`);

--
-- Indexes for table `tabelbuyer`
--
ALTER TABLE `tabelbuyer`
  ADD PRIMARY KEY (`idBuyer`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tabelisikeranjang`
--
ALTER TABLE `tabelisikeranjang`
  ADD PRIMARY KEY (`idKeranjang`,`idBarang`),
  ADD KEY `idBarang` (`idBarang`);

--
-- Indexes for table `tabelkeranjang`
--
ALTER TABLE `tabelkeranjang`
  ADD PRIMARY KEY (`idKeranjang`),
  ADD KEY `idBuyer` (`idBuyer`);

--
-- Indexes for table `tabelpayment`
--
ALTER TABLE `tabelpayment`
  ADD PRIMARY KEY (`idPayment`);

--
-- Indexes for table `tabelseller`
--
ALTER TABLE `tabelseller`
  ADD PRIMARY KEY (`idSeller`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `tabelstatistikstore`
--
ALTER TABLE `tabelstatistikstore`
  ADD PRIMARY KEY (`idStatistik`),
  ADD KEY `idStore` (`idStore`);

--
-- Indexes for table `tabelstore`
--
ALTER TABLE `tabelstore`
  ADD PRIMARY KEY (`idStore`),
  ADD KEY `idSeller` (`idSeller`);

--
-- Indexes for table `tabeluser`
--
ALTER TABLE `tabeluser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelbarang`
--
ALTER TABLE `tabelbarang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelbuyer`
--
ALTER TABLE `tabelbuyer`
  MODIFY `idBuyer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelkeranjang`
--
ALTER TABLE `tabelkeranjang`
  MODIFY `idKeranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelpayment`
--
ALTER TABLE `tabelpayment`
  MODIFY `idPayment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelseller`
--
ALTER TABLE `tabelseller`
  MODIFY `idSeller` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelstatistikstore`
--
ALTER TABLE `tabelstatistikstore`
  MODIFY `idStatistik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelstore`
--
ALTER TABLE `tabelstore`
  MODIFY `idStore` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabeluser`
--
ALTER TABLE `tabeluser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  ADD CONSTRAINT `tabeladmin_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tabeluser` (`idUser`);

--
-- Constraints for table `tabelbarang`
--
ALTER TABLE `tabelbarang`
  ADD CONSTRAINT `tabelbarang_ibfk_1` FOREIGN KEY (`idStore`) REFERENCES `tabelstore` (`idStore`);

--
-- Constraints for table `tabelbuyer`
--
ALTER TABLE `tabelbuyer`
  ADD CONSTRAINT `tabelbuyer_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tabeluser` (`idUser`);

--
-- Constraints for table `tabelisikeranjang`
--
ALTER TABLE `tabelisikeranjang`
  ADD CONSTRAINT `tabelisikeranjang_ibfk_1` FOREIGN KEY (`idKeranjang`) REFERENCES `tabelkeranjang` (`idKeranjang`),
  ADD CONSTRAINT `tabelisikeranjang_ibfk_2` FOREIGN KEY (`idBarang`) REFERENCES `tabelbarang` (`idBarang`);

--
-- Constraints for table `tabelkeranjang`
--
ALTER TABLE `tabelkeranjang`
  ADD CONSTRAINT `tabelkeranjang_ibfk_1` FOREIGN KEY (`idBuyer`) REFERENCES `tabelbuyer` (`idBuyer`);

--
-- Constraints for table `tabelseller`
--
ALTER TABLE `tabelseller`
  ADD CONSTRAINT `tabelseller_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tabeluser` (`idUser`);

--
-- Constraints for table `tabelstatistikstore`
--
ALTER TABLE `tabelstatistikstore`
  ADD CONSTRAINT `tabelstatistikstore_ibfk_1` FOREIGN KEY (`idStore`) REFERENCES `tabelstore` (`idStore`);

--
-- Constraints for table `tabelstore`
--
ALTER TABLE `tabelstore`
  ADD CONSTRAINT `tabelstore_ibfk_1` FOREIGN KEY (`idSeller`) REFERENCES `tabelseller` (`idSeller`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
