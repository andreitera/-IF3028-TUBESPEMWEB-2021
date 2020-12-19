-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 05:59 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `laporan` varchar(1000) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lampiran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `laporan`, `aspek`, `waktu`, `lampiran`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium interdum lacus vel aliquet. Ut dignissim id tellus vel placerat. Sed rutrum, mi sed tincidunt cursus, velit ex sodales turpis, id cursus nunc magna iaculis ex. Sed lacinia scelerisque sem, vitae posuere augue ultrices vel. Cras ultrices vehicula eros nec pharetra. Etiam felis justo, tincidunt a dapibus ac, dapibus ut urna. Praesent faucibus, elit a faucibus imperdiet, dolor lorem pharetra justo, sit amet pulvinar purus odio sed nunc. Donec et tortor et velit vehicula eleifend et in lacus. ', 'Infrastruktur', '2019-12-14 16:19:36', 'lenovo-car.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
