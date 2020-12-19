-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 11:01 AM
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
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(30) NOT NULL,
  `lampiran` varchar(70) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `isi`, `aspek`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, 'afifhibatullah', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae possimus voluptate nemo incidunt fugit, fuga dicta vitae impedit, maxime vero exercitationem asperiores labore odit ea aspernatur, minus explicabo ducimus architecto. Quod sunt ratione vel, animi cumque velit quibusdam sint reprehenderit aliquam consequatur reiciendis autem odio distinctio aut fugit iusto provident magni excepturi possimus. Provident culpa, magni commodi nesciunt unde temporibus consequatur expedita voluptatibus qui beatae alias blanditiis dignissimos minus cupiditate numquam, odit quo cumque! Delectus accusamus cum ea, dolor tempore fugit dignissimos qui, placeat, labore veritatis doloremque? Doloribus itaque quaerat ut possimus molestiae rem. Exercitationem, corrupti vero minus, corporis ea consectetur laudantium saepe nesciunt at ex, error repudiandae! Autem expedita nobis maiores quod soluta beatae voluptatum! Quasi reiciendis tempore aperiam!', 'Infrastruktur', '1608367673_6b6f1a054a8325443ceb.txt', '2020-12-19 15:47:53', '2020-12-19 15:47:53'),
(3, 'Stepghen', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae possimus voluptate nemo incidunt fugit, fuga dicta vitae impedit, maxime vero exercitationem asperiores labore odit ea aspernatur, minus explicabo ducimus architecto. Quod sunt ratione vel, animi cumque velit quibusdam sint reprehenderit aliquam consequatur reiciendis autem odio distinctio aut fugit iusto provident magni excepturi possimus. Provident culpa, magni commodi nesciunt unde temporibus consequatur expedita voluptatibus qui beatae alias blanditiis dignissimos minus cupiditate numquam, odit quo cumque! Delectus accusamus cum ea, dolor tempore fugit dignissimos qui, placeat, labore veritatis doloremque? Doloribus itaque quaerat ut possimus molestiae rem. Exercitationem, corrupti vero minus, corporis ea consectetur laudantium saepe nesciunt at ex, error repudiandae! Autem expedita nobis maiores quod soluta beatae voluptatum! Quasi reiciendis tempore aperiam!', 'Staff', '1608368202_d43164c2f5ca0d0cbff1.jpg', '2020-12-19 15:56:42', '2020-12-19 15:56:42'),
(4, 'RIKI', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae possimus voluptate nemo incidunt fugit, fuga dicta vitae impedit, maxime vero exercitationem asperiores labore odit ea aspernatur, minus explicabo ducimus architecto. Quod sunt ratione vel, animi cumque velit quibusdam sint reprehenderit aliquam consequatur reiciendis autem odio distinctio aut fugit iusto provident magni excepturi possimus. Provident culpa, magni commodi nesciunt unde temporibus consequatur expedita voluptatibus qui beatae alias blanditiis dignissimos minus cupiditate numquam, odit quo cumque! Delectus accusamus cum ea, dolor tempore fugit dignissimos qui, placeat, labore veritatis doloremque? Doloribus itaque quaerat ut possimus molestiae rem. Exercitationem, corrupti vero minus, corporis ea consectetur laudantium saepe nesciunt at ex, error repudiandae! Autem expedita nobis maiores quod soluta beatae voluptatum! Quasi reiciendis tempore aperiam!', 'Infrastruktur', '1608368239_2ded8efc6af0e07ea1d5.jpg', '2020-12-19 15:57:19', '2020-12-19 16:59:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
