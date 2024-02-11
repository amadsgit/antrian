-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2024 at 01:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelantrian`
--

CREATE TABLE `tabelantrian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `waktu` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` int(11) NOT NULL,
  `huruf` varchar(12) NOT NULL,
  `loket` varchar(12) DEFAULT NULL,
  `ke_loket` varchar(1) DEFAULT NULL,
  `ruang` varchar(30) DEFAULT NULL,
  `panggil` varchar(12) DEFAULT NULL,
  `farmasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabelrekap`
--

CREATE TABLE `tabelrekap` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` int(11) NOT NULL,
  `huruf` varchar(12) NOT NULL,
  `loket` varchar(12) NOT NULL,
  `ke_loket` varchar(1) DEFAULT NULL,
  `ruang` varchar(30) NOT NULL,
  `panggil` varchar(12) NOT NULL,
  `farmasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabeltampil`
--

CREATE TABLE `tabeltampil` (
  `id` int(11) NOT NULL,
  `huruf` varchar(15) NOT NULL,
  `nomor` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ruang` varchar(12) NOT NULL,
  `tujuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelantrian`
--
ALTER TABLE `tabelantrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelrekap`
--
ALTER TABLE `tabelrekap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabeltampil`
--
ALTER TABLE `tabeltampil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelantrian`
--
ALTER TABLE `tabelantrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabelrekap`
--
ALTER TABLE `tabelrekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabeltampil`
--
ALTER TABLE `tabeltampil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
