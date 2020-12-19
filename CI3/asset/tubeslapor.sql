-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 17.03
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeslapor`
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
(67, 'Pola pikir global pada saat ini yang banyak dianut oleh sebagian besar negara-negara di dunia adalah kapitalisme. Sistem ekonomi dari banyak negara maju sebagian besar menggunakan kapitalisme (https://www.gurupendidikan.co.id/kapitalisme/). Dalam sejarah  munculnya ideologi liberalisme-kapitalisme dan sosialisme-komunisme merupakan konsekuensi logis dari adanya revolusi industri di Barat (Kaelan, 2015:83). Bahwa kapitalisme menjadi satu ideologi yang mengglobal hal tersebut diperkuat oleh tulisan Fukuyama (1989) dalam bukunya berjudul “The End of History” yang menyatakan akhir dari perjalanan sejarah adalah ketika berakhirnya persaingan antar ideologi dunia dengan kemenangan akhir pada masa liberal yang didukung oleh kapitalisme global. \r\n\r\nKapitalisme dipandang sebagai ideologi yang mengagungkan modal milik individu sebagai alat penggerak kesejahteraan manusia. Kapitalisme cenderung mengedepankan rasionalitas yang obyektif. Artinya sebagai sebuah paham ekonomi maka kapitalisme bertujuan untuk mendapatkan sebesar-besarnya keuntungan dan modal (kapital) di pasar bebas (free market) yang kompetitif meskipun dengan adab rendah. Dalam arti lain, kapitalisme memandang bahwa kemajuan (progress) dapat dicapai melalui karsa meskipun menggunakan segala cara (baca= adab rendah). \r\n\r\nJelas sangat berbeda dengan Teori Adab Karsa yang merupakan hasil penelitian dan kontemplasi Prof. Dr. H. Herman Soewardi, dosen Universitas Padjadjaran.  Teori Adab karsa memandang bahwa kemajuan (progress) dapat dicapai melalui karsa yang tinggi dan adab yang tinggi pula. Tulisan ini akan membahas pendidikan karakter Abad 21 dari sudut pandang Teori Adab Karsa', 'Mahasiswa', 'Muhammad_Abdul_Hakim_118140183_Teknologi_Industri_Teknik_Informatika.JPG', '2020-12-19 19:26:45'),
(68, 'Institut Teknologi Sumatera (disingkat ITERA) adalah sebuah perguruan tinggi negeri yang terdapat di Provinsi Lampung. Lokasinya di antara wilayah Kabupaten Lampung Selatan dengan Kota Bandar Lampung. ITERA didirikan berdasarkan Peraturan Presiden Nomor 124 Tahun 2014 tentang Pendirian Institut Teknologi Sumatra (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 253) yang ditetapkan Presiden Republik Indonesia Dr. H. Susilo Bambang Yudhoyono pada tanggal 6 Oktober 2014 dan diundangkan tanggal 9 Oktober 2014. Walaupun peresmiannya dilaksanakan pada tahun 2014, tetapi Itera sudah memulai kegiatan akademik dengan menerima mahasiswa baru sejak tahun 2012-2013. Selain ITB dan ITS, dengan dibukanya ITERA dan Institut Teknologi Kalimantan, kini pemerintah Indonesia memiliki empat institut teknologi.', 'Mahasiswa', 'Muhammad_Abdul_Hakim_118140183_Teknologi_Industri_Teknik_Informatika1.JPG', '2020-12-19 22:09:16'),
(69, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Infrastruktur', 'Tsubaki.jpg', '2020-12-19 22:28:27');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
