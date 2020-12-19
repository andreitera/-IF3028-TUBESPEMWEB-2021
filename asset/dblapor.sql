-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 09:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(10) NOT NULL,
  `laporan` varchar(1000) NOT NULL,
  `Aspek` varchar(50) NOT NULL,
  `File` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `laporan`, `Aspek`, `File`, `tanggal`) VALUES
(1, 'Virus yang menyebabkan COVID-19 terutama ditransmisikan melalui droplet (percikan air liur) yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau mengembuskan nafas. Droplet ini terlalu berat dan tidak bisa bertahan di udara, sehingga dengan cepat jatuh dan menempel pada lantai atau permukaan lainnya.\r\nAnda dapat tertular saat menghirup udara yang mengandung virus jika Anda berada terlalu dekat dengan orang yang sudah terinfeksi COVID-19. Anda juga dapat tertular jika menyentuh permukaan benda yang terkontaminasi lalu menyentuh mata, hidung, atau mulut Anda.', 'Aspek1', 'jpg', '2020-12-19 05:23:09'),
(3, 'Pencemaran lingkungan hidup merupakan masalah yang harus dihadapi semua negara di dunia baik negara maju maupun berkembang. Sejumlah faktor seperti pertumbuhan populasi dunia dan teknologi mendorong pemanfaatan seluruh sumber daya alam sampai ke titik maksimum.', 'Lingkungan Hidup', 'jpg', '2020-12-19 08:15:31');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
