-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 16.52
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_lapor` int(11) NOT NULL,
  `laporan` longtext NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `aspek` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_lapor`, `laporan`, `lampiran`, `waktu`, `aspek`) VALUES
(1, 'rweruewiur uewirueiur uwieuriewur iweurwieurwi ueiwruiwruiw wueriuwiuriweriewruiwuriweur iuriewuriw ueiruwi wurieur eiurwier wiurw riweurwe riweruw rwir w urwier weuriweur iw rwieruwiur wir ewirir wr iwriw rwiuriw rwier weireiwriwe rwiruiwr ieruwi rw riwerwir wieruw erw e irwer wieriw rwir wriwe rwier erw eiw riw ir iw  wirw r w iewruwi iw rwi rwiiwr iwe r', '118140086_118140105. Tugas PKS .docx', '2020-12-18 21:38:11', 'Staff'),
(4, 'Saya ingin memprotes atas tindakan dosen yang semau-mau yang sama sekali tidak menghargai hasil karya mahasiswanya.', 'mistergeprek.jpg', '2020-12-19 14:08:22', 'Dosen'),
(5, 'Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.\r\n\r\nPada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.\r\n\r\nView Laporan ditampilkan secara terurut dimulai dari laporan terakhir yan', 'mistergeprek.jpg', '2020-12-19 14:06:33', 'Mahasiswa'),
(6, 'fgfhf', '', '2020-12-19 15:38:50', 'pilih'),
(8, 'fgh gg hhjh hjhjh jhjhjh jhjhj jhjhjh hjhjh jhjhjhjhh kjkjk jkjkj jkjkjk kjkjkj jkjkj kkjkj kjkjkj jkjkjjkjkjk jkjkjk jkjkj jkjkj', 'Capture.PNG', '2020-12-19 15:49:38', 'Pengajaran'),
(10, 'test dashdjahash sadahdkajsh kashdkajshdkadhs dsakhdajskhdkajshd asdhkasdhkjashd jsdhkjashdjkashd jdhkjshdjkasd d kjshdjkashd jsdhjkashdjkas hdjskhdjkasd jkdhjksdh kjdhjkhdjka hjaksdhjakhsdjkas hdjkashdjka', '41.jpg', '2020-12-19 22:38:16', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
