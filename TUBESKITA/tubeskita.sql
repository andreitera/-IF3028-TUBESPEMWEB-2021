-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 19.18
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeskita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `aspek`, `file`, `tanggal`) VALUES
(45, 'Petunjuk Pengerjaan ??\r\n\r\n    Fork pada repository ini dengan akun github anda.\r\n    Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna, contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).\r\n    Ubah Penjelasan Teknis pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:\r\n        Instalasi Framework, Koneksi basis data\r\n        Melakukan validasi pada client-side\r\n        Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).\r\n    Pull request dari repository anda ke repository ini dengan format NIM - Nama Lengkap. Waktu terkahir proses pull request adalah 4 hari setelah ujian akhir semester (UAS)\r\n  \r\n', 'Mahasiswa', '11.jpeg', '2019-12-13 09:44:53'),
(59, 'Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.', 'Staff', 'TPBALDI1.pdf', '2019-12-14 18:49:11'),
(65, 'Detail Laporan / Komentar\r\n\r\naldi indrawa, World champions Zheng Si Wei and Huang Ya Qiong crashed to one of their quickest defeats this year as their campaign at the HSBC BWF World Tour Finals 2019 started in lacklustre fashion. Zheng and Huang were evidently below par as they went down to Yuta Watanabe and Arisa Higashino, whom they had beaten six times in a row. The Japanese pocketed the Group B win 21-15 21-15 in just 33 minutes. “They made so many simple mistakes,” said a surprised Higashino. asikkkkkk', 'Dosen', 'Avengers_Endgame_2019_720p_HDTS_x264_mkv_snapshot_00_29_47_2019_05_03_11_51_58.jpg', '2019-12-14 19:09:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
