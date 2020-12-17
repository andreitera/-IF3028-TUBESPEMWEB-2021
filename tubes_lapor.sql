-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 11.25
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporkuy`
--

CREATE TABLE `laporkuy` (
  `id_lapor` int(11) NOT NULL,
  `isi_lapor` varchar(300) NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `aspek` char(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporkuy`
--
ALTER TABLE `laporkuy`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporkuy`
--
ALTER TABLE `laporkuy`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
