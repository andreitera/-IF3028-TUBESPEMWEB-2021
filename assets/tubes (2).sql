-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 10:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspek`
--

CREATE TABLE `aspek` (
  `id_aspek` int(10) NOT NULL,
  `aspek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aspek`
--

INSERT INTO `aspek` (`id_aspek`, `aspek`) VALUES
(1, 'Dosen\r\n'),
(2, 'Staff'),
(3, 'Mahasiswa'),
(4, 'Infrastruktur'),
(5, 'Pengajaran');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(10) NOT NULL,
  `pelapor` int(10) NOT NULL,
  `isi_laporan` text NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT 'dummy.png',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `aspek` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `pelapor`, `isi_laporan`, `file`, `created_at`, `updated_at`, `aspek`) VALUES
(4, 1, 'testing dong', 'dummy.png', '2020-12-14 03:29:35', '2020-12-14 03:29:35', 2),
(5, 4, 'ini isi dari laporan', 'dummy.png', '2020-12-12 03:30:41', '2020-12-11 03:30:41', 4),
(6, 1, 'coba', 'dummy.png', '2020-12-16 16:47:32', '2020-12-16 16:47:32', 1),
(7, 1, 'percobaan', 'dummy.png', '2020-12-19 14:30:06', '2020-12-19 14:30:06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1 untuk admin, 2 untuk user.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123', 1),
(4, 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `username` (`pelapor`),
  ADD KEY `id_aspek` (`aspek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id_aspek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `id_aspek` FOREIGN KEY (`aspek`) REFERENCES `aspek` (`id_aspek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `username` FOREIGN KEY (`pelapor`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
