-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 04:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------
--
-- Create Database: `lapor`
--
CREATE DATABASE lapor;

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `isi`, `lampiran`, `aspek`, `created_at`) VALUES
(10, 'coba kita masukkan file', 'Modul 5 PemWeb.pdf', 'Pengajaran', '2020-12-16 17:23:40'),
(14, '\"mengais validasi\" -hindia', 'Modul6_Pemweb_AJAX.pdf', 'Pengajaran', '2020-12-17 14:46:31'),
(15, 'ini sudah ada validasinya', 'Modul6_Pemweb_AJAX_1.pdf', 'Dosen', '2020-12-17 17:15:44'),
(16, 'coba lagi ya validasinya', 'Modul6_Pemweb_AJAX_2.pdf', 'Staff', '2020-12-17 17:17:20'),
(17, 'ini contoh lolos validasi', 'Modul6_Pemweb_AJAX_3.pdf', 'Staff', '2020-12-18 00:31:48'),
(18, 'coba create fix laporan', 'Modul6_Pemweb_AJAX_4.pdf', 'Mahasiswa', '2020-12-18 00:34:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
