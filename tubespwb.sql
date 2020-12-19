-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 16.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespwb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `aspek`, `file`, `tanggal`) VALUES
(5, 'Hallo nama saya Rahmat Setiawan dari IF18. Asal saya dari BandarLampung kecamatan kedaton. Saya anak ke3 dari 3 saudara. Saya suku jawa dan negara Indonesia. Ya Terimakasih wassalam.blblblblblblbllblblblblblblblblblblblblblblbllblblblblblblblblbllllllllllllllllllllll', 'Mahasiswa', '', '2020-12-18 20:02:29'),
(8, 'Kapan terakhir kali kamu dapat tertidur tenang?\r\n(Renggang)\r\nTak perlu memikirkan tentang apa yang akan datang\r\nDi esok hari\r\n\r\nTubuh yang berpatah hati\r\nBergantung pada gaji\r\nBerlomba jadi asri\r\nMengais validasi\r\n\r\nDan aku pun terhadir\r\nSeakan paling mahir\r\nMenenangkan dirimu\r\nYang merasa terpinggirkan dunia\r\n\r\nTak pernah adil\r\nKita semua gagal\r\nAngkat minumanmu\r\nBersedih bersama-sama\r\n\r\nSia-sia (Pada akhirnya)\r\nPutus asa (Terekam pedih semua)\r\nMasalahnya (Lebih dari yang)\r\nSecukupnya\r\n\r\nRekam gambar dirimu yang terabadikan bertahun\r\nSilam\r\nPutra-putri sakit hati\r\nAyah-ibu sendiri\r\nKomitmen lama mati\r\nHubungan yang menyepi\r\n\r\nWisata masa lalu\r\nKau hanya merindu\r\nMencari pelarian\r\nDari pengabdian yang terbakar sirna\r\n\r\nMengapur berdebu\r\nKita semua gagal\r\nAmbil s’dikit tisu\r\nBersedihlah secukupnya\r\n\r\nSemua yang sirna ‘kan kembali lagi\r\nSemua yang sirna ‘kan nanti berganti', 'Mahasiswa', 'hindia.jpg', '2020-12-19 22:17:05'),
(9, 'Yang tak bisa terobati\r\nBiarlah\r\nMengering sendiri\r\nMenghias tubuh dan\r\nYang mengevaluasi\r\nRagamu\r\nHanya kau sendiri\r\nMereka tak mampu\r\nMelewati yang telah kau lewati\r\nTiap berganti hari\r\nRintangan yang kau hadapi\r\nMasalah yang mengeruh\r\nHo, perasaan yang rapuh\r\nIni belum separuhnya\r\nBiasa saja\r\nKamu tak apa\r\nYang selalu ingin ambil peran\r\nHanya berlomba menjadi lebih\r\nSedih dari dirimu\r\nMuak dikesampingkan\r\nDisamakan\r\nHatimu terluka, sempurna\r\nMasalah yang mengeruh\r\nHo, perasaan yang rapuh\r\nIni belum separuhnya\r\nBiasa saja\r\nKamu tak apa\r\nPerjalanan yang jauh\r\nKau bangun untuk bertaruh\r\nHari belum selesai\r\nBiasa saja\r\nKamu tak apa\r\nBilas muka, gosok gigi, evaluasi\r\nTidur sejenak menemui esok pagi\r\nWalau pedihku bersamamu kali ini\r\nKu masih ingin melihatmu esok hari\r\nBilas muka, gosok gigi, evaluasi\r\nTidur sejenak menemui esok pagi\r\nWalau pedihku bersamamu kali ini\r\nKu masih ingin melihatmu esok hari\r\nBilas muka, gosok gigi, evaluasi\r\nTidur sejenak menemui esok pagi\r\nWalau pedihku bersamamu kali ini\r\nKu masih ingin melihatmu esok hari', 'Dosen', 'eval.jpg', '2020-12-19 22:18:13'),
(10, 'Menyesal, tak kusampaikan\r\nCinta monyetku ke Kanya dan Rebecca\r\nApa kabar kalian di sana?\r\nSemoga hidup baik-baik saja\r\nTak belajar, terkena getahnya\r\nSaat bersama Thanya dan Saphira\r\nKupercaya mungkin bukan jalannya\r\nNamun kalian banyak salah juga\r\nJika dahulu ku tak cepat berubah\r\nIni maafku untukmu, Sharfina\r\nSegala doa yang baik adanya\r\nUntukmu dan mimpimu yang mulia\r\nPindah berkala, rumah ke rumah\r\nBerharap bisa berujung indah\r\nWalau akhirnya harus berpisah\r\nTerima kasih karena ku tak mudah\r\nPindah berkala, rumah ke rumah\r\nBerharap bisa berujung indah\r\nWalau akhirnya harus berpisah\r\nTerima kasih karena ku tak mudah\r\nMaaf jika kusering buat susah\r\nIndisya, Panda, Anggra, Caca, Sismita\r\nPerempuan terkuat dalam hidupku\r\nTerjanglah apa pun yang kalian tuju\r\nKau datang saat gelapku merekah\r\nSeluruh hatiku untukmu, Meidiana\r\nKau pantas dapatkan yang baik di dunia\r\nSemoga kita bertahan lama\r\nPindah berkala, rumah ke rumah\r\nMengambil pelajaran jika berpisah\r\nJikalau suatu saat berujung indah\r\nCatat nama kita dalam sejarah\r\nPindah berkala, rumah ke rumah\r\nMengambil pelajaran jika berpisah\r\nJikalau suatu saat berujung indah\r\nCatat nama kita dalam sejarah\r\nLetih mengembara, rumah ke rumah\r\nKadang kulupa akanmu, Amalia\r\nSiap sedia tiap kubercerita\r\nKuberuntung jadi anakmu, Bunda\r\nPindah berkala, rumah ke rumah\r\nSelalu pada dirimu aku berserah\r\nJika aku disebut dalam sejarah\r\nMereka takkan lupa karena siapa\r\nPindah berkala, rumah ke rumah\r\nSelalu pada dirimu aku berserah\r\nJika aku disebut dalam sejarah\r\nMereka takkan lupa karena siapa', 'Staff', 'rumah.jpg', '2020-12-19 22:19:07');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
