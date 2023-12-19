-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 10:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `jenis_kamar` enum('standar','deluxe','family','') NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`jenis_kamar`, `harga`) VALUES
('standar', 500000),
('deluxe', 800000),
('family', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kamar`
--

CREATE TABLE `pesan_kamar` (
  `nama_pemesan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_identitas` int(16) NOT NULL,
  `tipe_kamar` enum('Standar','Deluxe','Family') NOT NULL,
  `harga` int(255) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi_menginap` int(3) NOT NULL,
  `breakfast` text NOT NULL,
  `total_bayar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan_kamar`
--

INSERT INTO `pesan_kamar` (`nama_pemesan`, `jenis_kelamin`, `nomor_identitas`, `tipe_kamar`, `harga`, `tanggal_pesan`, `durasi_menginap`, `breakfast`, `total_bayar`) VALUES
('Sdfs\'d', 'Laki-laki', 2147483647, 'Standar', 500000, '2023-11-20', 3, 'on', 1580000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`jenis_kamar`);

--
-- Indexes for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  ADD PRIMARY KEY (`nama_pemesan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
