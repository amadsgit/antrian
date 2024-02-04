-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2024 at 02:53 AM
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
  `ruang` varchar(30) DEFAULT NULL,
  `panggil` varchar(12) DEFAULT NULL,
  `farmasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelantrian`
--

INSERT INTO `tabelantrian` (`id`, `tanggal`, `waktu`, `nama`, `nomor`, `huruf`, `loket`, `ruang`, `panggil`, `farmasi`) VALUES
(1, '01 Feb 2024', '21:25', '', 1, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(2, '01 Feb 2024', '21:25', '', 2, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(3, '01 Feb 2024', '21:25', '', 3, 'B', 'sudah', 'Anak', 'sudah', 'sudah'),
(4, '01 Feb 2024', '21:25', '', 4, 'B', 'sudah', 'Anak', 'sudah', ''),
(5, '01 Feb 2024', '21:44', '', 5, 'C', 'sudah', 'MTBS', 'sudah', ''),
(6, '01 Feb 2024', '21:44', '', 6, 'A', 'sudah', 'Umum', 'sudah', ''),
(7, '01 Feb 2024', '21:44', '', 7, 'B', 'sudah', 'Anak', 'sudah', ''),
(8, '01 Feb 2024', '21:49', '', 8, 'D', 'sudah', 'KIA', 'sudah', ''),
(9, '01 Feb 2024', '21:50', '', 9, 'D', 'sudah', 'KIA', 'sudah', ''),
(10, '01 Feb 2024', '21:50', '', 10, 'E', 'sudah', 'lansia', 'sudah', ''),
(11, '01 Feb 2024', '21:50', '', 11, 'E', 'sudah', 'lansia', 'sudah', ''),
(12, '01 Feb 2024', '21:50', '', 12, 'F', 'sudah', 'prolanis', 'sudah', ''),
(13, '01 Feb 2024', '21:50', '', 13, 'F', 'sudah', 'prolanis', 'sudah', ''),
(14, '01 Feb 2024', '21:50', '', 14, 'G', 'sudah', 'gigi', 'sudah', ''),
(15, '01 Feb 2024', '21:50', '', 15, 'G', 'sudah', 'gigi', 'sudah', ''),
(16, '01 Feb 2024', '21:50', '', 16, 'H', 'sudah', 'tindakan', 'sudah', ''),
(17, '01 Feb 2024', '21:50', '', 17, 'H', 'sudah', 'tindakan', 'sudah', ''),
(18, '01 Feb 2024', '22:06', '', 18, 'I', 'sudah', 'imunisasi', 'sudah', ''),
(19, '01 Feb 2024', '22:07', '', 19, 'I', 'sudah', 'imunisasi', 'sudah', ''),
(20, '01 Feb 2024', '22:07', '', 20, 'J', 'sudah', 'pelangi', 'sudah', ''),
(21, '01 Feb 2024', '22:07', '', 21, 'J', 'sudah', 'pelangi', 'sudah', ''),
(22, '01 Feb 2024', '22:07', '', 22, 'K', 'sudah', 'konseling', 'sudah', ''),
(23, '01 Feb 2024', '22:07', '', 23, 'K', 'sudah', 'konseling', 'sudah', ''),
(24, '01 Feb 2024', '22:07', '', 24, 'L', 'sudah', 'laboratorium', 'sudah', ''),
(25, '01 Feb 2024', '22:07', '', 25, 'L', 'sudah', 'laboratorium', 'sudah', ''),
(26, '01 Feb 2024', '22:19', '', 26, 'D', 'sudah', 'KIA', 'sudah', ''),
(27, '01 Feb 2024', '22:19', '', 27, 'D', 'sudah', 'KIA', 'sudah', 'sudah'),
(28, '01 Feb 2024', '22:21', '', 28, 'J', 'sudah', 'pelangi', 'sudah', ''),
(29, '01 Feb 2024', '22:21', '', 29, 'J', 'sudah', 'pelangi', 'sudah', ''),
(30, '02 Feb 2024', '17:18', '', 30, 'A', 'sudah', 'Umum', 'sudah', ''),
(31, '02 Feb 2024', '17:21', '', 31, 'A', 'sudah', 'Umum', 'sudah', ''),
(32, '02 Feb 2024', '17:31', '', 32, 'A', 'sudah', 'Umum', 'sudah', ''),
(33, '02 Feb 2024', '17:31', '', 33, 'B', 'sudah', 'Anak', 'sudah', ''),
(34, '02 Feb 2024', '18:04', '', 34, 'A', 'sudah', 'Umum', 'sudah', ''),
(35, '02 Feb 2024', '18:09', '', 35, 'A', 'sudah', 'Umum', 'sudah', ''),
(36, '02 Feb 2024', '18:09', '', 36, 'B', 'sudah', 'Anak', 'sudah', ''),
(37, '02 Feb 2024', '18:12', '', 37, 'A', 'sudah', 'Umum', 'sudah', ''),
(38, '02 Feb 2024', '18:13', '', 38, 'A', 'sudah', 'Umum', 'sudah', ''),
(39, '02 Feb 2024', '18:16', '', 39, 'A', 'sudah', 'Umum', 'sudah', ''),
(40, '02 Feb 2024', '18:17', '', 40, 'A', 'sudah', 'Umum', 'sudah', ''),
(41, '02 Feb 2024', '18:18', '', 41, 'A', 'sudah', 'Umum', 'sudah', ''),
(42, '02 Feb 2024', '18:20', '', 42, 'A', 'sudah', 'Umum', 'sudah', ''),
(43, '02 Feb 2024', '18:21', '', 43, 'A', 'sudah', 'Umum', 'sudah', ''),
(44, '02 Feb 2024', '18:26', '', 44, 'A', 'sudah', 'Umum', 'sudah', ''),
(45, '02 Feb 2024', '18:28', '', 45, 'A', 'sudah', 'Umum', 'sudah', ''),
(46, '02 Feb 2024', '18:34', '', 46, 'A', 'sudah', 'Umum', 'sudah', ''),
(47, '02 Feb 2024', '18:35', '', 47, 'A', 'sudah', 'Umum', 'sudah', ''),
(48, '02 Feb 2024', '18:36', '', 48, 'A', 'sudah', 'Umum', 'sudah', ''),
(49, '02 Feb 2024', '18:37', '', 49, 'A', 'sudah', 'Umum', 'sudah', ''),
(50, '03 Feb 2024', '15:15', '', 50, 'A', 'sudah', 'Umum', 'sudah', ''),
(51, '03 Feb 2024', '15:20', '', 51, 'A', 'sudah', 'Umum', 'sudah', ''),
(52, '03 Feb 2024', '15:23', '', 52, 'A', 'sudah', 'Umum', 'sudah', ''),
(53, '03 Feb 2024', '15:37', '', 53, 'B', 'sudah', 'Anak', 'sudah', ''),
(54, '03 Feb 2024', '15:38', '', 54, 'B', 'sudah', 'Anak', 'sudah', ''),
(55, '03 Feb 2024', '15:38', '', 55, 'B', 'sudah', 'Anak', 'sudah', ''),
(56, '03 Feb 2024', '15:42', '', 56, 'B', 'sudah', 'Anak', 'sudah', ''),
(57, '03 Feb 2024', '16:36', '', 57, 'A', 'sudah', 'Umum', 'sudah', ''),
(58, '03 Feb 2024', '16:37', '', 58, 'A', 'sudah', 'Umum', 'sudah', ''),
(59, '03 Feb 2024', '16:39', 'mamad', 59, 'A', 'sudah', 'Umum', 'sudah', ''),
(60, '03 Feb 2024', '16:42', 'mamad', 60, 'A', 'sudah', 'Umum', 'sudah', ''),
(61, '03 Feb 2024', '16:42', 'mamad', 61, 'A', 'sudah', 'Umum', 'sudah', ''),
(62, '03 Feb 2024', '16:45', 'mamad', 62, 'A', 'sudah', 'Umum', 'sudah', ''),
(63, '03 Feb 2024', '16:45', 'mamad', 63, 'A', 'sudah', 'Umum', 'sudah', ''),
(64, '03 Feb 2024', '16:46', 'ahmad', 64, 'A', 'sudah', 'Umum', 'sudah', ''),
(65, '03 Feb 2024', '16:46', 'angga', 65, 'A', 'sudah', 'Umum', 'sudah', ''),
(66, '03 Feb 2024', '17:17', '', 66, 'F', 'sudah', 'prolanis', 'sudah', ''),
(67, '03 Feb 2024', '17:18', '', 67, 'G', 'sudah', 'gigi', 'sudah', ''),
(68, '03 Feb 2024', '17:42', 'angga', 68, 'A', 'sudah', 'Umum', 'sudah', ''),
(69, '03 Feb 2024', '18:28', 'Mamad ahmad', 69, 'A', 'sudah', 'Umum', 'sudah', ''),
(70, '03 Feb 2024', '18:29', 'Gheanisya', 70, 'A', 'sudah', 'Umum', 'sudah', ''),
(71, '03 Feb 2024', '18:30', 'Gheanisya ananda', 71, 'A', 'sudah', 'Umum', 'sudah', ''),
(72, '03 Feb 2024', '18:32', 'Rohayati', 72, 'A', 'sudah', 'Umum', 'sudah', ''),
(73, '03 Feb 2024', '18:32', 'rikha ajeng', 73, 'A', 'sudah', 'Umum', 'sudah', ''),
(74, '03 Feb 2024', '18:33', 'Gheanisya ananda', 74, 'A', 'sudah', 'Umum', 'sudah', ''),
(75, '03 Feb 2024', '18:38', 'Mamad ahmad', 75, 'A', 'sudah', 'Umum', 'sudah', ''),
(76, '03 Feb 2024', '19:05', 'aulia apriliani', 76, 'A', 'sudah', 'Umum', 'sudah', ''),
(77, '03 Feb 2024', '19:05', 'egi hernando', 77, 'A', 'sudah', 'Umum', 'sudah', ''),
(78, '03 Feb 2024', '19:05', 'ina muldina', 78, 'A', 'sudah', 'Umum', 'sudah', ''),
(79, '03 Feb 2024', '19:30', 'Nita yuliani', 79, 'B', 'sudah', 'Anak', 'sudah', ''),
(80, '03 Feb 2024', '19:31', 'nur meilina g', 80, 'C', 'sudah', 'MTBS', 'sudah', ''),
(81, '03 Feb 2024', '20:08', '', 81, 'I', 'sudah', 'imunisasi', 'sudah', ''),
(82, '03 Feb 2024', '20:38', 'ghaisani', 82, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(83, '03 Feb 2024', '20:55', '', 83, 'G', 'sudah', 'gigi', 'sudah', 'sudah'),
(84, '03 Feb 2024', '20:55', 'Nita yuliani', 84, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(85, '03 Feb 2024', '20:57', '', 85, 'G', 'sudah', 'gigi', 'sudah', 'sudah'),
(86, '03 Feb 2024', '21:23', 'Nita yuliani', 86, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(87, '03 Feb 2024', '21:29', 'mulia cipta', 87, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(88, '03 Feb 2024', '21:36', 'MAMAD AHMAD', 88, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(89, '03 Feb 2024', '21:36', 'ghaisani', 89, 'B', 'sudah', 'Anak', 'sudah', 'sudah'),
(90, '03 Feb 2024', '21:50', 'mulia cipta', 90, 'C', 'sudah', 'MTBS', 'sudah', 'sudah'),
(91, '03 Feb 2024', '21:50', 'ghaisani', 91, 'D', 'sudah', 'KIA', 'sudah', 'sudah'),
(92, '03 Feb 2024', '21:50', 'nur meilina g', 92, 'E', 'sudah', 'lansia', 'sudah', 'sudah'),
(93, '03 Feb 2024', '21:50', 'ghaisani', 93, 'F', 'sudah', 'prolanis', 'sudah', 'sudah'),
(94, '03 Feb 2024', '21:50', 'Nita yuliani', 94, 'H', 'sudah', 'tindakan', 'sudah', 'sudah'),
(95, '03 Feb 2024', '21:51', 'nur meilina g', 95, 'G', 'sudah', 'gigi', 'sudah', 'sudah'),
(96, '03 Feb 2024', '21:51', 'Nita yuliani', 96, 'I', 'sudah', 'imunisasi', 'sudah', 'sudah'),
(97, '03 Feb 2024', '21:51', 'nur meilina g', 97, 'J', 'sudah', 'pelangi', 'sudah', 'sudah'),
(98, '03 Feb 2024', '21:51', 'mulia cipta', 98, 'K', 'sudah', 'konseling', 'sudah', 'sudah'),
(99, '03 Feb 2024', '21:51', 'ghaisani', 99, 'L', 'sudah', 'laboratorium', 'sudah', 'sudah'),
(100, '03 Feb 2024', '22:10', 'MAMAD AHMAD', 100, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(101, '03 Feb 2024', '22:10', 'ghaisani', 101, 'B', 'sudah', 'Anak', 'sudah', 'sudah'),
(102, '04 Feb 2024', '08:13', 'nita tania', 102, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(103, '04 Feb 2024', '08:14', 'mulia cipta', 103, 'E', 'sudah', '0', '0', '0'),
(104, '04 Feb 2024', '08:28', 'Nita yuliani', 104, 'B', 'sudah', '0', '0', '0'),
(105, '04 Feb 2024', '08:40', 'Nita yuliani', 105, 'B', 'sudah', '0', '0', '0'),
(106, '04 Feb 2024', '08:41', 'mulia cipta', 106, 'D', 'sudah', 'KIA', 'sudah', '0');

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
  `ruang` varchar(30) NOT NULL,
  `panggil` varchar(12) NOT NULL,
  `farmasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelrekap`
--

INSERT INTO `tabelrekap` (`id`, `tanggal`, `waktu`, `nama`, `nomor`, `huruf`, `loket`, `ruang`, `panggil`, `farmasi`) VALUES
(1, '03 Feb 2024', '21:23', 'Nita yuliani', 86, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(2, '03 Feb 2024', '21:29', 'mulia cipta', 87, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(3, '03 Feb 2024', '21:36', 'MAMAD AHMAD', 88, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(4, '03 Feb 2024', '21:36', 'ghaisani', 89, 'B', 'sudah', 'Anak', 'sudah', 'sudah'),
(5, '03 Feb 2024', '21:50', 'mulia cipta', 90, 'C', 'sudah', 'MTBS', 'sudah', 'sudah'),
(6, '03 Feb 2024', '21:50', 'ghaisani', 91, 'D', 'sudah', 'KIA', 'sudah', 'sudah'),
(7, '03 Feb 2024', '21:50', 'nur meilina g', 92, 'E', 'sudah', 'lansia', 'sudah', 'sudah'),
(8, '03 Feb 2024', '21:50', 'ghaisani', 93, 'F', 'sudah', 'prolanis', 'sudah', 'sudah'),
(9, '03 Feb 2024', '21:50', 'Nita yuliani', 94, 'H', 'sudah', 'tindakan', 'sudah', 'sudah'),
(10, '03 Feb 2024', '21:51', 'nur meilina g', 95, 'G', 'sudah', 'gigi', 'sudah', 'sudah'),
(11, '03 Feb 2024', '21:51', 'Nita yuliani', 96, 'I', 'sudah', 'imunisasi', 'sudah', 'sudah'),
(12, '03 Feb 2024', '21:51', 'nur meilina g', 97, 'J', 'sudah', 'pelangi', 'sudah', 'sudah'),
(13, '03 Feb 2024', '21:51', 'mulia cipta', 98, 'K', 'sudah', 'konseling', 'sudah', 'sudah'),
(14, '03 Feb 2024', '21:51', 'ghaisani', 99, 'L', 'sudah', 'laboratorium', 'sudah', 'sudah'),
(15, '03 Feb 2024', '22:10', 'MAMAD AHMAD', 100, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(16, '03 Feb 2024', '22:10', 'ghaisani', 101, 'B', 'sudah', 'Anak', 'sudah', 'sudah'),
(17, '04 Feb 2024', '08:13', 'nita tania', 102, 'A', 'sudah', 'Umum', 'sudah', 'sudah'),
(18, '04 Feb 2024', '08:14', 'mulia cipta', 103, 'E', 'sudah', '0', '0', '0'),
(19, '04 Feb 2024', '08:28', 'Nita yuliani', 104, 'B', 'sudah', '0', '0', '0'),
(20, '04 Feb 2024', '08:40', 'Nita yuliani', 105, 'B', 'sudah', '0', '0', '0'),
(21, '04 Feb 2024', '08:41', 'mulia cipta', 106, 'D', 'sudah', 'KIA', 'sudah', '0');

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
-- Dumping data for table `tabeltampil`
--

INSERT INTO `tabeltampil` (`id`, `huruf`, `nomor`, `nama`, `ruang`, `tujuan`) VALUES
(1, 'A', '1', '', 'Loket', ' 1'),
(2, 'A', '2', '', 'Loket', ' 1'),
(3, 'A', '1', '', 'Ruang', ' Umum'),
(4, 'B', '3', '', 'Loket', ' 1'),
(5, 'B', '4', '', 'Loket', ' 1'),
(6, 'B', '3', '', 'Ruang', ' Anak'),
(7, 'B', '4', '', 'Loket', ' 1'),
(8, 'B', '4', '', 'Ruang', ' Anak'),
(9, 'B', '4', '', 'Ruang', ' Anak'),
(10, 'C', '5', '', 'Loket', ' 1'),
(11, 'A', '6', '', 'Loket', ' 1'),
(12, 'C', '5', '', 'Ruang', ' MTBS'),
(13, 'B', '7', '', 'Loket', ' 1'),
(14, 'A', '6', '', 'Ruang', ' Umum'),
(15, 'B', '7', '', 'Ruang', ' Anak'),
(16, 'C', '5', '', 'Ruang', ' MTBS'),
(17, 'D', '8', '', 'Loket', ' 1'),
(18, 'E', '10', '', 'Loket', ' 2'),
(19, 'D', '8', '', 'Ruang', ' KIA'),
(20, 'D', '8', '', 'Ruang', ' KIA'),
(21, 'D', '9', '', 'Ruang', ' KIA'),
(22, 'D', '9', '', 'Ruang', ' KIA'),
(23, 'E', '10', '', 'Loket', ' 2'),
(24, 'E', '11', '', 'Loket', ' 2'),
(25, 'E', '10', '', 'Ruang', ' lansia'),
(26, 'E', '11', '', 'Ruang', ' lansia'),
(27, 'F', '12', '', 'Loket', ' 2'),
(28, 'F', '13', '', 'Loket', ' 2'),
(29, 'F', '12', '', 'Ruang', ' prolanis'),
(30, 'G', '14', '', 'Loket', ' 2'),
(31, 'F', '13', '', 'Ruang', ' prolanis'),
(32, 'G', '15', '', 'Loket', ' 3'),
(33, 'H', '16', '', 'Loket', ' 3'),
(34, 'H', '17', '', 'Loket', ' 3'),
(35, 'G', '14', '', 'Ruang', ' gigi'),
(36, 'G', '14', '', 'Ruang', ' gigi'),
(37, 'G', '15', '', 'Ruang', ' gigi'),
(38, 'H', '16', '', 'Ruang', ' tindakan'),
(39, 'H', '17', '', 'Ruang', ' tindakan'),
(40, 'I', '18', '', 'Loket', ' 1'),
(41, 'I', '19', '', 'Loket', ' 2'),
(42, 'I', '18', '', 'Ruang', ' imunisasi'),
(43, 'I', '19', '', 'Ruang', ' imunisasi'),
(44, 'J', '20', '', 'Loket', ' 2'),
(45, 'J', '21', '', 'Loket', ' 2'),
(46, 'J', '20', '', 'Ruang', ' pelangi'),
(47, 'K', '22', '', 'Loket', ' 2'),
(48, 'J', '21', '', 'Ruang', ' pelangi'),
(49, 'K', '23', '', 'Loket', ' 2'),
(50, 'K', '22', '', 'Ruang', ' konseling'),
(51, 'L', '24', '', 'Loket', ' 2'),
(52, 'L', '25', '', 'Loket', ' 3'),
(53, 'K', '23', '', 'Ruang', ' konseling'),
(54, 'L', '24', '', 'Ruang', ' laboratorium'),
(55, 'L', '25', '', 'Ruang', ' laboratorium'),
(56, 'L', '25', '', 'Ruang', ' laboratorium'),
(57, 'D', '26', '', 'Loket', ' 3'),
(58, 'D', '27', '', 'Loket', ' 1'),
(59, 'D', '26', '', 'Ruang', ' KIA'),
(60, 'D', '26', '', 'Ruang', ' KIA'),
(61, 'J', '28', '', 'Loket', ' 1'),
(62, 'J', '29', '', 'Loket', ' 2'),
(63, 'J', '29', '', 'Loket', ' 2'),
(64, 'A', '30', '', 'Loket', ' 2'),
(65, 'A', '30', '', 'Loket', ' 2'),
(66, 'A', '30', '', 'Loket', ' 2'),
(67, 'A', '31', '', 'Loket', ' 2'),
(68, 'A', '32', '', 'Loket', ' 2'),
(69, 'B', '33', '', 'Loket', ' 1'),
(70, 'A', '38', '', 'Loket', ' 1'),
(71, 'A', '39', '', 'Loket', ' 1'),
(72, 'A', '46', '', 'Loket', ' 1'),
(73, 'A', '47', '', 'Loket', ' 2'),
(74, 'A', '46', '', 'Loket', ' 1'),
(75, 'A', '48', '', 'Loket', ' 2'),
(76, 'A', '49', '', 'Loket', ' 2'),
(77, 'A', '50', '', 'Loket', ' 2'),
(78, 'A', '30', '', 'Ruang', ' Umum'),
(79, 'A', '31', '', 'Ruang', ' Umum'),
(80, 'A', '51', '', 'Loket', ' 2'),
(81, 'A', '32', '', 'Ruang', ' Umum'),
(82, 'A', '52', '', 'Loket', ' 1'),
(83, 'A', '51', '', 'Loket', ' 2'),
(84, 'B', '54', '', 'Loket', ' 2'),
(85, 'B', '53', '', 'Loket', ' 1'),
(86, 'B', '55', '', 'Loket', ' 1'),
(87, 'B', '56', '', 'Loket', ' 2'),
(88, 'A', '57', '', 'Loket', ' 3'),
(89, 'A', '58', '', 'Loket', ' 1'),
(90, 'A', '59', 'mamad', 'Loket', ' 2'),
(91, 'A', '60', 'mamad', 'Loket', ' 1'),
(92, 'A', '61', 'mamad', 'Loket', ' 2'),
(93, 'A', '61', 'mamad', 'Loket', ' 2'),
(94, 'A', '61', 'mamad', 'Loket', ' 2'),
(95, 'A', '63', 'mamad', 'Loket', ' 2'),
(96, 'A', '64', 'ahmad', 'Loket', ' 2'),
(97, 'A', '65', 'angga', 'Loket', ' 1'),
(98, 'F', '66', '', 'Loket', ' 3'),
(99, 'G', '67', '', 'Loket', ' 2'),
(100, 'A', '68', 'angga', 'Loket', ' 1'),
(101, 'A', '73', 'rikha ajeng', 'Loket', ' 1'),
(102, 'A', '74', 'Gheanisya ananda', 'Loket', ' 1'),
(103, 'A', '74', 'Gheanisya ananda', 'Loket', ' 1'),
(104, 'A', '75', 'Mamad ahmad', 'Loket', ' 1'),
(105, 'A', '76', 'aulia apriliani', 'Loket', ' 2'),
(106, 'A', '76', 'aulia apriliani', 'Loket', ' 2'),
(107, 'A', '77', 'egi hernando', 'Loket', ' 3'),
(108, 'A', '76', 'aulia apriliani', 'Loket', ' 2'),
(109, 'A', '77', 'egi hernando', 'Loket', ' 3'),
(110, 'A', '34', '', 'Ruang', ' Umum'),
(111, 'A', '38', '', 'Ruang', ' Umum'),
(112, 'A', '39', '', 'Ruang', ' Umum'),
(113, 'A', '40', '', 'Ruang', ' Umum'),
(114, 'A', '41', '', 'Ruang', ' Umum'),
(115, 'A', '42', '', 'Ruang', ' Umum'),
(116, 'A', '43', '', 'Ruang', ' Umum'),
(117, 'A', '44', '', 'Ruang', ' Umum'),
(118, 'A', '45', '', 'Ruang', ' Umum'),
(119, 'A', '46', '', 'Ruang', ' Umum'),
(120, 'A', '47', '', 'Ruang', ' Umum'),
(121, 'A', '48', '', 'Ruang', ' Umum'),
(122, 'A', '49', '', 'Ruang', ' Umum'),
(123, 'A', '78', 'ina muldina', 'Loket', ' 3'),
(124, 'A', '59', 'mamad', 'Ruang', ' Umum'),
(125, 'B', '79', 'Nita yuliani', 'Loket', ' 3'),
(126, 'B', '36', '', 'Ruang', ' Anak'),
(127, 'B', '53', '', 'Ruang', ' Anak'),
(128, 'B', '79', 'Nita yuliani', 'Ruang', ' Anak'),
(129, 'C', '80', 'nur meilina g', 'Loket', ' 3'),
(130, 'C', '80', 'nur meilina g', 'Ruang', ' MTBS'),
(131, 'C', '80', 'nur meilina g', 'Ruang', ' MTBS'),
(132, 'A', '60', 'mamad', 'Ruang', ' Umum'),
(133, 'A', '61', 'mamad', 'Ruang', ' Umum'),
(134, 'C', '80', 'nur meilina g', 'Ruang', ' MTBS'),
(135, 'D', '27', '', 'Ruang', ' farmasi'),
(136, 'D', '27', '', 'Ruang', ' farmasi'),
(137, 'D', '27', '', 'Ruang', ' farmasi'),
(138, 'A', '1', '', 'Ruang', ' farmasi'),
(139, 'A', '2', '', 'Ruang', ' farmasi'),
(140, 'A', '2', '', 'Ruang', ' farmasi'),
(141, 'B', '3', '', 'Ruang', ' farmasi'),
(142, 'A', '62', 'mamad', 'Ruang', ' Umum'),
(143, 'I', '81', '', 'Loket', ' 3'),
(144, 'A', '82', 'ghaisani', 'Loket', ' 3'),
(145, 'A', '78', 'ina muldina', 'Ruang', ' Umum'),
(146, 'A', '82', 'ghaisani', 'Ruang', ' Umum'),
(147, 'D', '27', '', 'Ruang', ' KIA'),
(148, 'F', '66', '', 'Ruang', ' prolanis'),
(149, 'G', '67', '', 'Ruang', ' gigi'),
(150, 'G', '67', '', 'Ruang', ' gigi'),
(151, 'G', '83', '', 'Loket', ' 1'),
(152, 'G', '83', '', 'Ruang', ' gigi'),
(153, 'A', '84', 'Nita yuliani', 'Loket', ' 1'),
(154, 'G', '85', '', 'Loket', ' 1'),
(155, 'G', '85', '', 'Ruang', ' gigi'),
(156, 'A', '86', 'Nita yuliani', 'Loket', ' 1'),
(157, 'A', '86', 'Nita yuliani', 'Loket', ' 1'),
(158, 'A', '86', 'Nita yuliani', 'Loket', ' 1'),
(159, 'A', '86', 'Nita yuliani', 'Loket', ' 1'),
(160, 'A', '86', 'Nita yuliani', 'Loket', ' 1'),
(161, 'A', '87', 'mulia cipta', 'Loket', ' 1'),
(162, 'A', '88', 'MAMAD AHMAD', 'Loket', ' 2'),
(163, 'B', '89', 'ghaisani', 'Loket', ' 3'),
(164, 'A', '84', 'Nita yuliani', 'Ruang', ' Umum'),
(165, 'A', '86', 'Nita yuliani', 'Ruang', ' Umum'),
(166, 'G', '83', '', 'Ruang', ' farmasi'),
(167, 'A', '84', 'Nita yuliani', 'Ruang', ' farmasi'),
(168, 'G', '85', '', 'Ruang', ' farmasi'),
(169, 'A', '86', 'Nita yuliani', 'Ruang', ' farmasi'),
(170, 'A', '87', 'mulia cipta', 'Ruang', ' Umum'),
(171, 'A', '87', 'mulia cipta', 'Ruang', ' farmasi'),
(172, 'A', '88', 'MAMAD AHMAD', 'Ruang', ' Umum'),
(173, 'A', '88', 'MAMAD AHMAD', 'Ruang', ' farmasi'),
(174, 'B', '89', 'ghaisani', 'Ruang', ' Anak'),
(175, 'B', '89', 'ghaisani', 'Ruang', ' farmasi'),
(176, 'C', '90', 'mulia cipta', 'Loket', ' 3'),
(177, 'D', '91', 'ghaisani', 'Loket', ' 1'),
(178, 'E', '92', 'nur meilina g', 'Loket', ' 2'),
(179, 'F', '93', 'ghaisani', 'Loket', ' 3'),
(180, 'H', '94', 'Nita yuliani', 'Loket', ' 3'),
(181, 'G', '95', 'nur meilina g', 'Loket', ' 3'),
(182, 'I', '96', 'Nita yuliani', 'Loket', ' 3'),
(183, 'J', '97', 'nur meilina g', 'Loket', ' 3'),
(184, 'K', '98', 'mulia cipta', 'Loket', ' 2'),
(185, 'L', '99', 'ghaisani', 'Loket', ' 2'),
(186, 'D', '91', 'ghaisani', 'Ruang', ' KIA'),
(187, 'C', '90', 'mulia cipta', 'Ruang', ' MTBS'),
(188, 'E', '92', 'nur meilina g', 'Ruang', ' lansia'),
(189, 'F', '93', 'ghaisani', 'Ruang', ' prolanis'),
(190, 'G', '95', 'nur meilina g', 'Ruang', ' gigi'),
(191, 'G', '95', 'nur meilina g', 'Ruang', ' gigi'),
(192, 'H', '94', 'Nita yuliani', 'Ruang', ' tindakan'),
(193, 'I', '81', '', 'Ruang', ' imunisasi'),
(194, 'I', '96', 'Nita yuliani', 'Ruang', ' imunisasi'),
(195, 'J', '28', '', 'Ruang', ' pelangi'),
(196, 'J', '29', '', 'Ruang', ' pelangi'),
(197, 'J', '97', 'nur meilina g', 'Ruang', ' pelangi'),
(198, 'K', '98', 'mulia cipta', 'Ruang', ' konseling'),
(199, 'L', '99', 'ghaisani', 'Ruang', ' laboratorium'),
(200, 'B', '89', 'ghaisani', 'Ruang', ' farmasi'),
(201, 'C', '90', 'mulia cipta', 'Ruang', ' farmasi'),
(202, 'D', '91', 'ghaisani', 'Ruang', ' farmasi'),
(203, 'E', '92', 'nur meilina g', 'Ruang', ' farmasi'),
(204, 'F', '93', 'ghaisani', 'Ruang', ' farmasi'),
(205, 'H', '94', 'Nita yuliani', 'Ruang', ' farmasi'),
(206, 'G', '95', 'nur meilina g', 'Ruang', ' farmasi'),
(207, 'I', '96', 'Nita yuliani', 'Ruang', ' farmasi'),
(208, 'J', '97', 'nur meilina g', 'Ruang', ' farmasi'),
(209, 'K', '98', 'mulia cipta', 'Ruang', ' farmasi'),
(210, 'L', '99', 'ghaisani', 'Ruang', ' farmasi'),
(211, 'A', '100', 'MAMAD AHMAD', 'Loket', ' 1'),
(212, 'B', '101', 'ghaisani', 'Loket', ' 1'),
(213, 'A', '100', 'MAMAD AHMAD', 'Ruang', ' Umum'),
(214, 'B', '101', 'ghaisani', 'Ruang', ' Anak'),
(215, 'B', '101', 'ghaisani', 'Ruang', ' Anak'),
(216, 'A', '100', 'MAMAD AHMAD', 'Ruang', ' farmasi'),
(217, 'B', '101', 'ghaisani', 'Ruang', ' farmasi'),
(218, 'A', '102', 'nita tania', 'Loket', ' 1'),
(219, 'E', '103', 'mulia cipta', 'Loket', ' 1'),
(220, 'E', '103', 'mulia cipta', 'Loket', ' 1'),
(221, 'E', '103', 'mulia cipta', 'Loket', ' 1'),
(222, 'E', '103', 'mulia cipta', 'Loket', ' 1'),
(223, 'B', '104', 'Nita yuliani', 'Loket', ' 1'),
(224, 'B', '105', 'Nita yuliani', 'Loket', ' 1'),
(225, 'D', '106', 'mulia cipta', 'Loket', ' 1'),
(226, 'D', '106', 'mulia cipta', 'Loket', ' 1'),
(227, 'D', '106', 'mulia cipta', 'Loket', ' 1'),
(228, 'D', '106', 'mulia cipta', 'Loket', ' 1'),
(229, 'A', '102', 'nita tania', 'Ruang', ' Umum'),
(230, 'A', '102', 'nita tania', 'Ruang', ' farmasi'),
(231, 'A', '102', 'nita tania', 'Ruang', ' farmasi'),
(232, 'D', '106', 'mulia cipta', 'Ruang', ' KIA'),
(233, 'D', '106', 'mulia cipta', 'Ruang', ' KIA');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tabelrekap`
--
ALTER TABLE `tabelrekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tabeltampil`
--
ALTER TABLE `tabeltampil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
