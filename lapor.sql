-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 14.11
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

INSERT INTO `posts` (`id`, `isi`, `lampiran`, `waktu`, `aspek`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quod autem, hic suscipit iure quam veritatis ducimus totam aut at maiores, voluptates eveniet dicta, ullam illum voluptatibus saepe molestiae. Est?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quod autem, hic suscipit iure quam veritatis ducimus totam aut at maiores, voluptates eveniet dicta, ullam illum voluptatibus saepe molestiae. Est?', 'lorem.jpg', '2019-12-10 16:28:06', 'Infrastruktur'),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quod autem, hic suscipit iure quam veritatis ducimus totam aut at maiores, voluptates eveniet dicta, ullam illum voluptatibus saepe molestiae. Est?\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quod autem, hic suscipit iure quam veritatis ducimus totam aut at maiores, voluptates eveniet dicta, ullam illum voluptatibus saepe molestiae. Est?', '', '2019-12-08 21:45:15', 'Infrastruktur'),
(6, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis corrupti accusamus debitis, hic quam animi minima eum provident vitae ipsam, sit voluptatum dicta.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quos cum laborum mollitia repellat unde non? Nulla magni voluptatibus quos in, at neque incidunt sequi cum vero quo deleniti quam dolorum obcaecati eum commodi necessitatibus voluptate iure quisquam, debitis odit deserunt ipsa odio modi. Quidem nemo beatae voluptatum tenetur accusamus aperiam aut mollitia deserunt exercitationem.\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa animi perspiciatis eos officia corrupti blanditiis. Quod, aliquam eveniet! Minima dolorum qui ratione error nostrum assumenda ut sed laboriosam voluptatibus debitis fuga animi dignissimos, a reiciendis quidem soluta. Minima accusamus deserunt, iste dolor aperiam quod similique, ratione sequi eveniet reprehenderit magnam nesciunt excepturi debitis quia ipsa dicta officiis aspernatur repellendus asperiores! Labore vitae, architecto corrupti dignissimos, culpa saepe voluptas, pariatur quis deleniti nobis eveniet iste rerum. Totam quasi sit illo obcaecati quisquam sequi quaerat corporis?', '', '2019-12-13 14:38:35', 'Pengajaran'),
(7, 'Tes aja', '2019-12-13_16-11-25.png', '2019-12-13 15:11:25', 'Dosen'),
(16, 'kfnsekuf hkeuhsfw hfkwehn kfjwhekf bkqwebfnk', '2019-12-14_15-59-34.jpg', '2019-12-14 14:59:34', ''),
(17, 'Tkdnf kjwsnfknw ekjnwkj nefwjn wjenf jwnelkwjnef tesss', '2019-12-14_16-05-00.jpg', '2019-12-14 16:18:11', 'Pilih Aspek P'),
(21, 'Saya ingin melaporkan tentang masalah infrastruktur di kampus Institut Teknologi Sumatera. Mengapa infrastruktur yang ada di ITERA sudah banyak yang mengalami kerusakan? Padahal usia ITERA masih terbilang muda. Apakah akan ada perbaikan?', '2019-12-14_17-16-56.jpg', '2019-12-14 16:28:38', 'Infrastruktur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
