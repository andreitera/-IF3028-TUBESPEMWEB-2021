-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 03:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_lapor`
--

INSERT INTO `simple_lapor` (`id`, `deskripsi`, `lampiran`, `waktu`, `kategori`) VALUES
(55, 'lkajldkjaskdnasjdasdnasdnaukjdasmdnakjdnladukajdnla,mdbiaykjda', 'download.jfif', '2020-12-18 06:35:13', 'Dosen'),
(56, 'wkakasjakakladlasdhjsjkda,ndklahdilakbkdjb,nald', 'download.jfif', '2020-12-18 08:25:26', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
