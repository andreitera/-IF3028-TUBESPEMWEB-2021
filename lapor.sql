-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 04:24 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `laporan` text NOT NULL,
  `aspek` varchar(100) NOT NULL,
  `lampiran` varchar(1000) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `laporan`, `aspek`, `lampiran`, `ukuran_file`, `tipe_file`, `waktu`) VALUES
(1, 'Kementerian Negara/Lembaga : (023) Kementerian Pendidikan dan Kebudayaan\r\n\r\nUnit Organisasi : (17) Ditjen Pendidikan Tinggi\r\n\r\nProvinsi : (12) Lampung\r\n\r\nKode/Satker : (677540) Institut Teknologi Sumatera\r\n\r\nSebesar : Rp 46.692.054.000\r\n(Empat Puluh Enam Miliar Enam Ratus Sembilan Puluh\r\nDua Juta Lima Puluh Empat Ribu Rupiah)\r\n\r\nUntuk kegiatan-kegiatan sebagai berikut:\r\nKode dan Nama Fungsi dan Sub Fungsi :\r\n10 Pendidikan\r\n10.06 Pendidikan Tinggi\r\nKode dan Nama Program dan Kegiatan :\r\n023.17.14 Program Pendidikan Tinggi\r\n023.17.14.4257 Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya\r\nDitjen Pendidikan Tinggi', 'Infrastruktur', 'itera.png', 138.96, 'image/png', '2020-12-19 10:15:09'),
(2, 'UKT terlalu mahal\r\n\r\nSejak pandemi virus corona mulai menginfeksi Indonesia pada awal Maret lalu, seluruh kegiatan pembelajaran di perguruan tinggi mulai beralih melalui daring atau online. \r\n\r\nSemenjak itu pula, beragam keluhan mulai dirasakan oleh para mahasiswa, baik dari efektivitas maupun fasilitas pembelajaran yang kurang memadai. Secara bergiliran, nama sejumlah kampus pun memuncaki tranding di media sosial Twitter dalam beberapa minggu terakhir. Mereka menuntut agar uang kuliah tunggal ( UKT) diturunkan dan mendapat fasilitas yang memadai saat kuliah daring, seperti subsidi pulsa bagi mahasiswa.\r\n\r\n\r\n\r\n\r\n', 'Mahasiswa', 'download1.png', 7.92, 'image/png', '2020-12-19 10:18:47'),
(3, 'Lalu kapan saya akan diwisuda?\r\nAdik kelas sudah lebih dulu\r\nHati cemas merasa masih begini\r\nTeman baik sudah di-DO\r\n\r\nOrang tua di desa menunggu\r\nCalon istri gelisah menanti\r\nOrang desa sudah banyak menganggap\r\nAku jaya di negeri orang\r\n\r\nBagaimana begini saja?\r\nLuluskan apa adanya\r\nBagaimana begitu saja?\r\nNanti kaya, bapak dibagi\r\n\r\nTolonglah diriku\r\nKoboy kampus yang banyak kasus\r\nHatiku cemas\r\nGelisah sepanjang waktu-waktuku', 'Dosen', '40f191ca817da740474787d3da578e1a.jpg', 18.53, 'image/jpeg', '2020-12-19 10:23:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
