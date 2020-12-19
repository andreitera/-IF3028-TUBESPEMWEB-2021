-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 05:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(15) NOT NULL,
  `isi` text NOT NULL,
  `file_lapor` varchar(100) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `file_lapor`, `aspek`, `waktu`) VALUES
(1, 'telah terjadi kerusakan meja dan kursi diruang dosen teknik informatika dikarenakan hujan sehingga merusaki bahan meja dan kursi yang ada. diharapkan untuk segera diganti agar dosen nyaman dalam berkegiatan sehari-hari', 'search.png', 'infrastruktur', '2020-12-19 16:32:14'),
(4, 'dosen matematika tidak masuk pada saat jam yang sudah ditentukan. tidak ada kabar dari dosen tersebut sedangkan ia sudah tidak masuk selama 7 kali pertemuan.', 'screenshot (200).png', 'dosen', '2020-12-25 16:32:22'),
(5, 'alat tulis dan ACC yang ada di ruang kuliah sangat tidak memadai. mahasiswa jadi terganggu dalam proses belajar mengajar. perlu adanya tindakan agar KBM menjadi lancar tanpa hambatan', 'screeshot (197).png', 'infrastruktur', '2020-12-09 16:32:22'),
(6, 'dosen bernama AL terlihat tidak menguasai materi saat KBM sedang berlangsung. sehingga mahasiswa menjadi kebingungan dan tidak mendapat solusi apa-apa. mahasiswa menminta adanya pergantian dosen.', 'screenshot (189).png', 'pengajaran', '2020-12-23 16:39:49');

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
