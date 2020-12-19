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
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor nulla in neque maximus, at aliquet quam vestibulum. Suspendisse potenti. Aenean interdum porta mattis. Aliquam eget pretium tellus. Integer in est purus. Nulla sagittis nibh a purus rutrum hendrerit. Donec sed elit ut metus porttitor convallis. Phasellus venenatis quis ex quis sodales. Fusce dapibus ante enim, quis pellentesque diam rhoncus sed. Proin congue, libero id blandit bibendum, massa justo imperdiet est, nec elementum orci ligula nec sem. Morbi dictum augue elementum urna interdum dignissim. Donec posuere sem at turpis molestie, vitae varius sem venenatis. Etiam bibendum rutrum ultrices. Sed bibendum est nec scelerisque aliquet. Sed vel dui vitae nulla ultrices vulputate non eget nibh. Pellentesque condimentum lacinia nisl.', 'Modul 5 PemWeb.pdf', 'Pengajaran', '2020-12-16 17:23:40'),
(2, 'Maecenas fringilla sed eros elementum sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin eu congue nulla, at pharetra odio. In dignissim vel est in maximus. In auctor justo eros, eget ultricies purus maximus ac. Quisque volutpat ligula a urna faucibus, in blandit mauris posuere. Aliquam aliquet odio ut vulputate pellentesque. Donec volutpat orci lectus, vitae vehicula ex mollis ut.', 'Modul6_Pemweb_AJAX.pdf', 'Pengajaran', '2020-12-17 14:46:31'),
(3, 'Vestibulum finibus eget sapien sit amet eleifend. Nullam iaculis sed ex eget maximus. Nullam ac urna varius, tristique massa id, efficitur orci. Suspendisse ac pretium purus. Donec dapibus lectus ut venenatis molestie. Mauris semper ultrices enim vitae tincidunt. Mauris at eleifend dui, vel pretium nisl. Etiam vitae purus justo. Nullam dolor lorem, euismod id ligula vel, lobortis sodales urna. Maecenas venenatis justo nec quam semper, nec dapibus eros cursus. Nam risus nisl, facilisis viverra lacus non, eleifend tincidunt elit. Aenean eu diam eget sem condimentum congue. Aliquam commodo est vel mauris ornare efficitur.', 'Modul6_Pemweb_AJAX_1.pdf', 'Dosen', '2020-12-17 17:15:44'),
(4, 'Donec sed metus eu felis porttitor aliquet. Nam tempor vel enim sed vehicula. Mauris sit amet tellus vel nulla iaculis hendrerit et ut nulla. Phasellus hendrerit ligula a lectus tincidunt consectetur. Nullam lobortis purus id eros iaculis, quis tempus metus molestie. Curabitur odio libero, facilisis ut libero suscipit, elementum maximus tortor. Phasellus scelerisque tellus dui, id mollis tellus vehicula vitae. Sed nunc felis, condimentum vel mattis eget, vestibulum eget erat. Duis ut tempus erat. Quisque vitae eros sit amet felis posuere pulvinar eu et tortor. Aenean venenatis finibus ipsum ut bibendum. Maecenas aliquet ultricies elit vitae interdum. Praesent vitae enim purus. Vestibulum vestibulum nunc ac porttitor feugiat. Praesent varius, metus sed condimentum volutpat, nulla lectus vestibulum enim, at eleifend tellus risus eu risus.', 'Modul6_Pemweb_AJAX_2.pdf', 'Staff', '2020-12-17 17:17:20'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum dolor in enim dictum efficitur. Aenean condimentum turpis a tempus suscipit. Maecenas posuere justo arcu, at scelerisque diam volutpat ut. Nullam luctus ligula at velit iaculis sodales. Nullam semper leo erat, at mattis dui luctus sit amet. Vivamus vitae rhoncus libero, non pellentesque lacus. Curabitur in nibh ut ligula sagittis accumsan quis nec ante. Integer ut risus leo.', 'Modul6_Pemweb_AJAX_3.pdf', 'Staff', '2020-12-18 00:31:48'),
(6, 'lass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis metus mi, laoreet nec varius et, malesuada in nunc. Aenean sit amet diam elit. Morbi lacus metus, fermentum quis ante ut, imperdiet aliquam sem. Vivamus dictum vestibulum ipsum, vitae tempor massa tempor ac. Sed non felis non sapien tempor pharetra. Sed vulputate rhoncus nisl, at placerat sapien euismod eu. Morbi posuere, odio ut dapibus luctus, leo nibh finibus leo, sodales imperdiet libero nisi sit amet nisl. Aliquam non massa porta, pulvinar est non, placerat massa. Curabitur rutrum at mauris hendrerit iaculis. Aenean vel eros scelerisque, gravida felis vel, porta mauris. Nullam efficitur eros rhoncus pretium convallis. Phasellus et orci vel sapien vulputate congue et sit amet est. Vestibulum scelerisque vulputate felis ac semper. Aenean suscipit orci quis pretium commodo.', 'Modul6_Pemweb_AJAX_4.pdf', 'Mahasiswa', '2020-12-18 00:34:59');

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
