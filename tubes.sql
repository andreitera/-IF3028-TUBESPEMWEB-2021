-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 13.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

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
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `lapor` varchar(10000) NOT NULL,
  `aspek` varchar(99) NOT NULL,
  `gambar` varchar(99) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id`, `username`, `lapor`, `aspek`, `gambar`, `waktu`) VALUES
(37, 'galih', 'Ini saya bingung di ajaxnya, bisa kasih saran dong :), ngulik sana sini tetep aja eror terutama cara dapetin value dari datanyanya :(', 'Mahasiswa', '49242162_2025783400876303_2718695933087842304_o.jpg', '2020-12-19 03:02:40'),
(38, 'manarul', 'Uang Kuliah Tunggal atau UKT adalah biaya yang dibebankan pada mahasiswa dalam satu semester penuh. Sistem biaya ini diaktifkan oleh pemerintah untuk mengatasi masalah pada masyarakat tidak mampu. Dengan sistem ini, pemerintah mampu melakukan subsidi silang sesuai dengan kebutuhan.', 'Mahasiswa', '197579.jpg', '2020-12-19 05:24:24'),
(40, 'galih', 'Mendapatkan dream team di setiap tubes adalah anugrah bagi setiap mahasiswa, pusing , makan hati udah jadi makanan sehari hari :)', 'Staff', 'HH.jpg', '2020-12-19 09:27:00'),
(41, 'putri', 'Dilaporkan dini hari bahwa pak retor ITERA positif covid-19. Diketahui dari tes hasil rapid dan swap. Dan saat ini beliau sedang menjalani masa karantina di kediamannya. ', 'Dosen', 'Logo-HMIF.png', '2020-12-19 12:22:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('galih', 'galih'),
('manarul', 'manarul'),
('putri', 'ayu123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
