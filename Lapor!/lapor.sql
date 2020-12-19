-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 13.27
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
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `lampiran` varchar(55) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `aspek` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `isi`, `lampiran`, `waktu`, `aspek`) VALUES
(65, 'Rektor Itera Reaktif\r\n\r\n\r\nBandarlampung (ANTARA) - Rektor Institut Teknologi Sumatera (Itera) Prof Ir Ofyar Z Tamin\r\nMSc PhD menyatakan secara resmi bahwa dirinya terkonfirmasi positif tertular COVID-19 sejak\r\nJumat (18/12).\r\n\r\n\"Saya ingin melaporkan bahwa telah terkonfirmasi positif terinfeksi virus corona, berdasarkan\r\nhasil polymerase chain reaction (PCR),\" kata Ofyar Z Tamin dalam keterangan melalui video\r\nyang diunggahnya di Bandarlampung, Sabtu.\r\n\r\nBaca juga: Itera benarkan satu dosen dan mahasiswa positif terjangkit COVID-19\r\nIa menjelaskan bahwa pada Kamis (17/12) dirinya merasa tidak enak badan dan berinisiatif\r\nmelakukan tes cepat (rapid test) antigen secara mandiri yang hasilnya reaktif COVID-19.\r\nAtas hasil reaktif tersebut, lanjut dia, dokter yang memeriksanya menyarankan untuk langsung\r\ndilakukan tes usap (swab test) dengan PCR ternyata hasilnya positif COVID-19 pada Jumat\r\n(18/12).\r\n\r\nBaca juga: Antisipasi COVID-19, ITERA berlakukan kuliah daring dan tunda wisuda\r\n\"Maka saya pun langsung meminta agar dirawat di Rumah Sakit Umum Daerah dr H Abdul\r\nMoeloek (RSUDAM),\" katanya.\r\n\r\nNamun, Rektor Itera ini menyampaikan bahwa akan tetap memimpin Kampus Itera secara\r\ndaring dari ruangan isolasi selama menjalani masa karantina.\r\n\r\nBaca juga: Kasus COVID-19 Lampung bertambah 95 orang total 5.220 kasus\r\n\r\n\"Atas hasil positif COVID-19, saya mohon doa dari bapak dan ibu semua agar cepat kembali ke\r\nkondisi semula. Saat ini kondisi saya tanpa gejala dan baik-baik saja,\" kata dia.\r\n\r\nHingga kini kasus konfirmasi positif COVID-19 di Provinsi Lampung berjumlah 5.220 orang,\r\ndengan rincian pasien yang telah dinyatakan sembuh 3.770 orang dan kematian akibat infeksi\r\nvirus corona 265 orang\r\n', '2020-12-19_13-10-55.jpg', '2020-12-19 12:10:55', 'Dosen'),
(66, 'Puluhan Massa Gelar Demo di ITERA Tuntut Terkait Pembangunan Gedung\r\nKonten ini diproduksi oleh Lampung Geh\r\nPuluhan Massa Gelar Demo di ITERA Tuntut Terkait Pembangunan Gedung\r\nAparat kepolisian yang sedang menjaga mengamankan jalannya demonstrasi massa di depan ITERA (20/6) | Foto: Putri Purnamasari/Lampung Geh\r\nLampung Geh, Lampung Selatan - Puluhan massa yang tergabung dalam Laskar Tentara Langit (Lantera), Front Aksi Anti Gratifikasi (Fagas) Gerakan Mahasiswa Anti Korupsi (GMK) Provinsi Lampung melakukan aksi demonstrasi di depan kampus Institut Teknologi Sumatera (ITERA) Kamis (20/6). \r\nMassa menuntut agar dilakukannya pemutusan kontrak pembangunan Gedung Laboraturium Teknik 2 yang dimenangkan oleh PT. Kembar Jaya Abadi. \r\nAlasan penuntutan tersebut salah satunya adalah adanya indikasi pemalsuan dokumen yang dilakukan oleh PT. Kembar Jaya Abadi. Dokumen yang dimaksud yaitu Surat Pernyataan yang menyatakan bahwa Tidak Sedang Dinyatakan Pailit. Selain itu, massa juga menuntut agar Rektor ITERA untuk turun jabatan dikarenakan adanya indikasi bahwa Rektor ikut serta dalam kasus tersebut. \r\n“Saya minta pada pihak ITERA agar dokumen itu dipublikasikan. Jika memang Surat Keterangan Tidak Sedang Dinyatakan Pailit ada, silahkan diperlihatkan,” kata Ketua Lantera Indonesia, Ahmad Taufiq Lubis. \r\nPuluhan Massa Gelar Demo di ITERA Tuntut Terkait Pembangunan Gedung (1)\r\nKetua Lantera Indonesia, Ahmad Taufiq Lubis (baju hitam) saat diwawancari awak media, Kamis (21/6) | Foto : Putri Purnamasari\r\nUntuk itu pihak demonstran menuntut agar aparat penegak hukum melakukan audit internal Rektor ITERA, mendesak agar pihak-pihak terkait untuk segera melakukan blacklist terhadap PT. Kembar Jaya Abadi serta memutus kontrak pembangunan Gedung Laboratorium Teknik 2 yang sedang berjalan. \r\nDi lokasi yang sama, Kabag Umum dan Keuangan ITERA, Pujiono, mengatakan bahwa pekerjaan pembangunan gedung tersebut pendanaannya bersumber dari Surat Berharga Syariah Negara (SBSN) senilai Rp 42 miliar. Menurutnya, jika memang ada pemalsuan dokumen seharusnya sudah diketahui sejak proses lelang, karena pada proses lelang ada proses klarifikasi dan sanggah dokumen-dokumen yang telah diserahkan. \r\nPuluhan Massa Gelar Demo di ITERA Tuntut Terkait Pembangunan Gedung (2)\r\nKabag Umum dan Keuangan ITERA, Pujiono (kanan) saat diwawancarai Lampung Geh | Foto : Putri Purnamasari/Lampung Geh\r\n“Jika memang pihak yang kalah memiliki bukti bahwa PT. Kembar Jaya Abadi memalsukan dokumen, maka dilakukan pada proses sanggah bukan saat ini setelah proses pembangunan sudah berjalan,” ujarnya. (*) ', '2020-12-19_13-13-55.jpg', '2020-12-19 12:13:55', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
