-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 08:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nomor` int(11) NOT NULL,
  `huruf` varchar(12) NOT NULL,
  `loket` varchar(12) NOT NULL,
  `ruang` varchar(30) NOT NULL,
  `panggil` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelantrian`
--

INSERT INTO `tabelantrian` (`id`, `tanggal`, `waktu`, `nomor`, `huruf`, `loket`, `ruang`, `panggil`) VALUES
(1, '10 Dec 2023', '17:26', 1, 'A', 'sudah', 'Umum', 'sudah'),
(2, '10 Dec 2023', '17:26', 2, 'G', 'sudah', 'Laboratorium', 'sudah'),
(3, '10 Dec 2023', '17:26', 3, 'E', 'sudah', 'Kiakb', 'sudah'),
(4, '10 Dec 2023', '17:26', 4, 'H', 'sudah', '', ''),
(5, '10 Dec 2023', '17:26', 5, 'G', 'sudah', 'Laboratorium', 'sudah'),
(6, '10 Dec 2023', '17:26', 6, 'F', 'sudah', 'MTBS', 'sudah'),
(7, '10 Dec 2023', '17:26', 7, 'H', 'sudah', '', ''),
(8, '10 Dec 2023', '17:26', 8, 'I', 'sudah', '', ''),
(9, '10 Dec 2023', '17:26', 9, 'J', 'sudah', '', ''),
(10, '10 Dec 2023', '17:26', 10, 'K', 'sudah', '', ''),
(11, '10 Dec 2023', '18:58', 11, 'A', 'sudah', 'Umum', 'sudah'),
(12, '10 Dec 2023', '18:58', 12, 'A', 'sudah', 'Umum', 'sudah'),
(13, '10 Dec 2023', '19:05', 13, 'A', 'sudah', 'Umum', 'sudah'),
(14, '10 Dec 2023', '19:05', 14, 'A', 'sudah', 'Umum', 'sudah'),
(15, '10 Dec 2023', '19:05', 15, 'A', 'sudah', 'Umum', 'sudah'),
(16, '10 Dec 2023', '19:05', 16, 'A', 'sudah', 'Umum', 'sudah'),
(17, '10 Dec 2023', '19:15', 17, 'C', 'sudah', 'Tindakan', 'sudah'),
(18, '10 Dec 2023', '19:15', 18, 'B', 'sudah', 'Anak', 'sudah'),
(19, '10 Dec 2023', '19:25', 19, 'D', 'sudah', 'Anak', 'sudah'),
(20, '11 Dec 2023', '11:01', 20, 'A', 'sudah', 'Umum', 'sudah'),
(21, '11 Dec 2023', '11:01', 21, 'L', 'sudah', '', ''),
(22, '11 Dec 2023', '19:59', 22, 'D', 'sudah', 'Anak', 'sudah'),
(23, '11 Dec 2023', '19:59', 23, 'D', 'sudah', 'Anak', 'sudah'),
(24, '11 Dec 2023', '19:59', 24, 'D', 'sudah', 'Anak', 'sudah'),
(25, '11 Dec 2023', '20:06', 25, 'A', 'sudah', 'Umum', 'sudah'),
(26, '11 Dec 2023', '20:07', 26, 'B', 'sudah', 'Lansia', 'sudah'),
(27, '11 Dec 2023', '20:07', 27, 'A', 'sudah', 'Umum', 'sudah'),
(28, '11 Dec 2023', '20:11', 28, 'C', 'sudah', 'Tindakan', 'sudah'),
(29, '11 Dec 2023', '20:11', 29, 'E', 'sudah', 'KIAKB', 'sudah'),
(30, '11 Dec 2023', '20:12', 30, 'D', 'sudah', 'Anak', 'sudah'),
(31, '11 Dec 2023', '20:12', 31, 'C', 'sudah', 'Tindakan', 'sudah'),
(32, '11 Dec 2023', '20:12', 32, 'E', 'sudah', 'KIAKB', 'sudah'),
(33, '11 Dec 2023', '20:22', 33, 'F', 'sudah', 'MTBS', 'sudah'),
(34, '11 Dec 2023', '20:22', 34, 'F', 'sudah', 'MTBS', 'sudah'),
(35, '11 Dec 2023', '20:22', 35, 'F', 'sudah', 'MTBS', 'sudah'),
(36, '11 Dec 2023', '20:23', 36, 'F', 'sudah', 'MTBS', 'sudah'),
(37, '11 Dec 2023', '20:31', 37, 'G', 'sudah', 'Laboratorium', 'sudah'),
(38, '11 Dec 2023', '20:31', 38, 'G', 'sudah', 'Laboratorium', 'sudah'),
(39, '11 Dec 2023', '20:44', 39, 'G', 'sudah', 'Laboratorium', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tabeltampil`
--

CREATE TABLE `tabeltampil` (
  `id` int(11) NOT NULL,
  `huruf` varchar(15) NOT NULL,
  `nomor` varchar(11) NOT NULL,
  `ruang` varchar(12) NOT NULL,
  `tujuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabeltampil`
--

INSERT INTO `tabeltampil` (`id`, `huruf`, `nomor`, `ruang`, `tujuan`) VALUES
(1, 'C', '19', 'Loket', ' 2'),
(2, 'E', '3', 'Loket', ' 2'),
(3, 'G', '2', 'Loket', ' 1'),
(4, 'E', '3', 'Loket', ' 2'),
(5, 'E', '3', 'Loket', ' 2'),
(6, 'E', '3', 'Loket', ' 2'),
(7, 'H', '4', 'Loket', ' 1'),
(8, 'E', '3', 'Loket', ' 2'),
(9, 'H', '4', 'Loket', ' 1'),
(10, 'G', '5', 'Loket', ' 2'),
(11, 'G', '5', 'Loket', ' 2'),
(12, 'F', '6', 'Loket', ' 1'),
(13, 'G', '5', 'Loket', ' 2'),
(14, 'G', '5', 'Loket', ' 2'),
(15, 'F', '6', 'Loket', ' 1'),
(16, 'G', '5', 'Loket', ' 2'),
(17, 'G', '5', 'Loket', ' 2'),
(18, 'H', '7', 'Loket', ' 1'),
(19, 'I', '8', 'Loket', ' 2'),
(20, 'J', '9', 'Loket', ' 1'),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, 'A', '1', '', ''),
(25, 'I', '8', 'Loket', ' 2'),
(26, 'I', '8', 'Loket', ' 2'),
(27, 'A', '1', 'Ruang', ' Umum'),
(28, 'A', '1', 'Ruang', ' Umum'),
(29, 'A', '1', 'Umum', ' Umum'),
(30, 'A', '1', 'Umum', ' Umum'),
(31, 'A', '1', 'Ruang', ' Umum'),
(32, 'A', '1', 'Ruang', ' Umum'),
(33, 'I', '8', 'Loket', ' 2'),
(34, 'K', '10', 'Loket', ' 1'),
(35, 'A', '11', 'Loket', ' 2'),
(36, 'A', '11', 'Ruang', ' Umum'),
(37, 'A', '11', 'Loket', ' 2'),
(38, 'A', '12', 'Loket', ' 1'),
(39, 'A', '13', 'Loket', ' 2'),
(40, 'A', '13', 'Loket', ' 2'),
(41, 'A', '14', 'Loket', ' 1'),
(42, 'A', '12', 'Ruang', ' Umum'),
(43, 'A', '12', 'Ruang', ' Umum'),
(44, 'A', '14', 'Loket', ' 1'),
(45, 'A', '12', 'Ruang', ' Umum'),
(46, 'A', '12', 'Ruang', ' Umum'),
(47, 'A', '16', 'Loket', ' 1'),
(48, 'A', '13', 'Ruang', ' Umum'),
(49, 'A', '13', 'Ruang', ' Umum'),
(50, 'A', '14', 'Ruang', ' Umum'),
(51, 'A', '14', 'Ruang', ' Umum'),
(52, 'A', '15', 'Ruang', ' Umum'),
(53, 'A', '16', 'Loket', ' 1'),
(54, 'A', '16', 'Ruang', ' Umum'),
(55, 'A', '16', 'Ruang', ' Umum'),
(56, 'C', '17', 'Loket', ' 1'),
(57, 'C', '17', 'Loket', ' 1'),
(58, 'B', '18', 'Loket', ' 2'),
(59, 'B', '18', 'Loket', ' 2'),
(60, 'C', '17', 'Loket', ' 1'),
(61, 'C', '17', 'Loket', ' 1'),
(62, 'B', '18', 'Loket', ' 2'),
(63, 'B', '18', 'Loket', ' 2'),
(64, 'C', '17', 'Loket', ' 1'),
(65, 'A', '16', 'Ruang', ' Umum'),
(66, 'B', '18', 'Loket', ' 2'),
(67, 'B', '18', 'Loket', ' 2'),
(68, 'C', '17', 'Loket', ' 1'),
(69, 'A', '16', 'Ruang', ' Umum'),
(70, 'D', '19', 'Loket', ' 1'),
(71, 'D', '19', 'Loket', ' 1'),
(72, 'A', '20', 'Loket', ' 1'),
(73, 'A', '20', 'Ruang', ' Umum'),
(74, 'A', '20', 'Ruang', ' Umum'),
(75, 'L', '21', 'Loket', ' 1'),
(76, 'L', '21', 'Loket', ' 1'),
(77, 'D', '22', 'Loket', ' 2'),
(78, 'D', '23', 'Loket', ' 1'),
(79, 'D', '22', 'Ruang', ' Anak'),
(80, 'D', '22', 'Loket', ' 2'),
(81, 'D', '23', 'Loket', ' 1'),
(82, 'D', '22', 'Ruang', ' Anak'),
(83, 'D', '22', 'Loket', ' 2'),
(84, 'D', '23', 'Ruang', ' Anak'),
(85, 'D', '23', 'Ruang', ' Anak'),
(86, 'D', '24', 'Loket', ' 2'),
(87, 'D', '23', 'Ruang', ' Anak'),
(88, 'A', '25', 'Loket', ' 2'),
(89, 'D', '24', 'Ruang', ' Anak'),
(90, 'A', '25', 'Ruang', ' Umum'),
(91, 'D', '24', 'Ruang', ' Anak'),
(92, 'A', '25', 'Ruang', ' Umum'),
(93, 'B', '26', 'Loket', ' 1'),
(94, 'D', '24', 'Ruang', ' Anak'),
(95, 'B', '26', 'Ruang', ' Lansia'),
(96, 'C', '17', 'Ruang', ' Tindakan'),
(97, 'B', '26', 'Ruang', ' Lansia'),
(98, 'A', '27', 'Loket', ' 1'),
(99, 'C', '28', 'Loket', ' 2'),
(100, 'A', '27', 'Ruang', ' Umum'),
(101, 'C', '28', 'Ruang', ' Tindakan'),
(102, 'E', '29', 'Loket', ' 2'),
(103, 'D', '30', 'Loket', ' 1'),
(104, 'C', '28', 'Ruang', ' Tindakan'),
(105, 'E', '29', 'Loket', ' 2'),
(106, 'C', '31', 'Loket', ' 1'),
(107, 'E', '3', 'Ruang', ' Kiakb'),
(108, 'E', '3', 'Ruang', ' Kiakb'),
(109, 'E', '3', 'Ruang', ' Kiakb'),
(110, 'E', '29', 'Ruang', ' KIAKB'),
(111, 'C', '31', 'Ruang', ' Tindakan'),
(112, 'D', '30', 'Ruang', ' Anak'),
(113, 'E', '32', 'Loket', ' 2'),
(114, 'F', '6', 'Ruang', ' MTBS'),
(115, 'F', '33', 'Loket', ' 2'),
(116, 'F', '33', 'Loket', ' 2'),
(117, 'F', '34', 'Loket', ' 1'),
(118, 'F', '33', 'Loket', ' 2'),
(119, 'F', '33', 'Loket', ' 2'),
(120, 'F', '35', 'Loket', ' 2'),
(121, 'F', '35', 'Loket', ' 2'),
(122, 'F', '36', 'Loket', ' 2'),
(123, 'G', '37', 'Loket', ' 2'),
(124, 'G', '38', 'Loket', ' 2'),
(125, 'E', '32', 'Ruang', ' KIAKB'),
(126, 'F', '33', 'Ruang', ' MTBS'),
(127, 'F', '34', 'Ruang', ' MTBS'),
(128, 'F', '35', 'Ruang', ' MTBS'),
(129, 'G', '38', 'Loket', ' 2'),
(130, 'F', '36', 'Ruang', ' MTBS'),
(131, 'G', '2', 'Ruang', ' Laboratoriu'),
(132, 'G', '5', 'Ruang', ' Laboratoriu'),
(133, 'G', '37', 'Ruang', ' Laboratoriu'),
(134, 'G', '38', 'Ruang', ' Laboratoriu'),
(135, 'G', '39', 'Loket', ' 2'),
(136, 'G', '39', 'Ruang', ' Laboratorium'),
(137, 'G', '39', 'Ruang', ' Laboratorium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelantrian`
--
ALTER TABLE `tabelantrian`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tabeltampil`
--
ALTER TABLE `tabeltampil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
