-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 01:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(5) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `comm_title` varchar(100) NOT NULL,
  `comm` text NOT NULL,
  `aspek` varchar(30) NOT NULL,
  `lampiran` varchar(30) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `timestamp`, `comm_title`, `comm`, `aspek`, `lampiran`, `user_id`) VALUES
(37, '15 Dec 2020 | 23:23:22', 'nyoba lapor', 'coba aja sih gak penting juga ajhdjsuegrjamdnmff n jhsfjkjafjb jf jfja jfajf jkafjkfjka hjdkhsajkdbjsfbwebrfdsjjjjjjjjjbbbbbbbbbfajdkadaku aku akua dalaha aanaka gembalaa selau riangg serata gembiraaaafkhfjdk hahahahahahahaha dah di edit nih', 'Pilih Aspek Pelaporan/Komentar', '20-15122020-232238.png', 20),
(41, '19 Dec 2020 | 15:45:38', 'pemberitahuan!!!', 'laporan pertama ini ditulis oleh admin berisi tentang pemberitahuan menggunakan website simple-lapor ini, yang mengakses website ini jika belum melakukan login maka tidak dapat membuat laporan pada website ini dan juga hanya bisa mengedit dan menghapus laporan/komentar milik sendiri saja dengan kata lain anda tidak bisa mengedit atau mengubah laporan/komentar yang bukan dari anda sebagai penulisnya.', 'Dosen', '21-19122020-154538.png', 21),
(42, '19 Dec 2020 | 16:56:28', 'laporan percobaan', 'ini adalah laporan percobaan untuk menguji apakah website ini dapat bekerja dengan baik seperti menulis laporan/komentar, menghapus laporan , mengedit laporan pemilik akun.', 'infrastruktur', '21-19122020-165628', 21),
(43, '19 Dec 2020 | 17:25:50', 'Pemberitahuan!!!', 'laporan ini ditulis oleh admin berisi tentang pemberitahuan menggunakan website simple-lapor ini, yang mengakses website ini jika belum melakukan login maka tidak dapat membuat laporan pada website ini dan juga hanya bisa mengedit dan menghapus laporan/komentar milik sendiri saja dengan kata lain anda tidak bisa mengedit atau mengubah laporan/komentar yang bukan dari anda sebagai penulisnya.', 'infrastruktur', '22-19122020-172550.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `password`, `image`, `email`, `role_id`) VALUES
(20, 'Dede Rodhatul Farida', '$2y$10$AKO6jJJ9.fLT.zRC.1L5OugcnqOmNeuuboxMJ.3VJcBcmltfNx8ja', 'default.jpg', 'dederodhatulfarida@gmail.com', 1),
(21, 'liana khairunnisa', '$2y$10$K.7Zj1ORs/cMqUdLUxK6l.YqwFcLEEvDL.2rg8CaOoIKDresSoBoC', 'default.jpg', 'liana@gmail.com', 1),
(22, 'Admin Lapor', '$2y$10$53Kk7Aaml3w9Sq1JSAgWKucdpJkrtjGR2ety2vHinX/7lh0SGzYGm', 'default.jpg', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(5) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'usr'),
(2, 'adm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
