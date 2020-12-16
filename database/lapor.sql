-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 10:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `simple_lapor`
--

CREATE TABLE `simple_lapor` (
  `id_lapor` int(11) NOT NULL,
  `laporan` longtext NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `aspek` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_lapor`
--

INSERT INTO `simple_lapor` (`id_lapor`, `laporan`, `lampiran`, `waktu`, `aspek`) VALUES
(51, 'Pak Lapor pak!!!!... kelas 207 kebanjiran', '(Edited) JTEIF Jadwal UAS Semester Ganjil 2020_202', '2020-12-16 16:38:30', 'Mahasiswa'),
(52, 'Lapor min, terjadi perkelahian di atas rooftop', '8355-17187-1-PB.pdf', '2020-12-16 16:42:03', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
