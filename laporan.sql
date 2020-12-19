-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2020 at 09:15 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesPemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(10) NOT NULL,
  `isi` text NOT NULL,
  `lampiran` varchar(150) NOT NULL,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aspek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `isi`, `lampiran`, `waktu`, `aspek`) VALUES
(2, 'Terkait keluhan itu, Badan Meteorologi Klimatologi dan Geofisika ( BMKG) menjelaskan bahwa udara yang terasa panas dan gerah adalah fenomena biasa di musim kemarau.\r\n\r\nDeputi Bidang Klimatologi BMKG, Drs Herizal MSi, mengatakan suasa gerah secara meteorologis disebabkan oleh suhu udara yang panas disertai dengan kelembapan udara yang tinggi.', '171093B.JPG', '2020-12-19 09:49:10', 'pengajaran'),
(3, 'Jika pemilik video telah mengaktifkan komentar, Anda dapat memposting komentar dan menyukai, tidak menyukai, atau membalas komentar orang lain di suatu video. Anda juga dapat mengedit atau menghapus komentar sendiri. Balasan untuk komentar disusun dalam bentuk rangkaian pesan di bawah komentar awal, sehingga Anda dapat mengikuti percakapan.', 'Autumnal_Lake_Hd-wallpaper-8911852.jpg', '2020-12-19 09:49:28', ''),
(9, 'Dua anggota Polda Metro Jaya menjadi korban saat membubarkan kerumunan massa aksi 1812 yang menuntut pembebasan pemimpin Front Pembela Islam (FPI) Rizieq Shihab. Polisi masih memburu pelaku. Kabid Humas Polda Metro Jaya, Kombes Pol Yusri Yunus menerangkan, kepolisian telah menyita senjata tajam yang digunakan oleh pelaku untuk melukai dua anggota polisi.\r\n\r\n', 'England_Flag-wallpaper-9347308.jpg', '2020-12-19 09:52:54', 'dosen'),
(14, 'The Hypertext Transfer Protocol (HTTP) is designed to enable communications between clients and servers.\r\n\r\nHTTP works as a request-response protocol between a client and server.\r\n\r\nExample: A client (browser) sends an HTTP request to the server; then the server returns a response to the client. The response contains status information about the request and may also contain the requested content.', 'Rekap_Data_Asprak_-_Rev_2.pdf', '2020-12-19 13:44:13', 'infrastruktur');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
