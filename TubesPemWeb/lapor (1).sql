-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 06.40
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tipe_laporan` varchar(50) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `isi_laporan` varchar(5000) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `lampiran` varchar(5000) NOT NULL,
  `anonimitas` tinyint(1) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tipe_laporan`, `judul_laporan`, `isi_laporan`, `tgl_kejadian`, `lampiran`, `anonimitas`, `id_user`) VALUES
(1, 'Aspirasi', 'asdasdasdasdasdasd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit arcu vitae nibh lobortis, non mollis neque varius. Pellentesque sodales euismod pulvinar. Vivamus consequat felis erat, ac ullamcorper nisl luctus eget. Cras semper libero at lacus fermentum, posuere elementum neque sollicitudin. Ut consectetur, mauris in interdum volutpat, massa augue viverra purus, id tempor tellus odio quis massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ornare elit ac nulla venenatis faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam venenatis ac leo non blandit. Ut tempus, metus et rutrum ultrices, libero nunc lacinia justo, in hendrerit risus magna eu tellus. Sed malesuada elit magna, et venenatis dolor blandit id. Pellentesque fringilla at sem quis dignissim. Sed lobortis, nunc eget ultricies iaculis, felis ex dictum libero, at vulputate justo ipsum non odio. Donec tristique vehicula risus, vitae aliquam nibh. Pellentesque posuere cursus felis ut ornare. Donec eu scelerisque sem.\r\n\r\nNunc vitae venenatis magna. Sed id metus suscipit, malesuada risus vel, bibendum turpis. Maecenas congue enim orci, ac aliquet diam dignissim lacinia. Donec sed luctus tellus, vel dignissim odio. Donec molestie risus purus, vel posuere magna vulputate ut. Morbi scelerisque ut lectus ut varius. Quisque imperdiet odio sit amet odio laoreet maximus.\r\n\r\nNullam in tortor vel turpis molestie blandit sit amet nec velit. Integer posuere iaculis convallis. Sed vehicula ut lectus nec gravida. Donec elit eros, sollicitudin in porttitor id, facilisis non sem. Curabitur imperdiet fermentum eros ac varius. Proin dolor nisl, commodo maximus magna eu, sagittis rhoncus sem. Etiam sodales arcu in ultrices hendrerit. Sed vel magna ac lorem volutpat tristique. Curabitur lacinia dui quis odio scelerisque, vel facilisis orci scelerisque. Praesent fringilla, lorem volutpat luctus iaculis, metus quam congue tortor, laoreet luctus nunc risus eget quam. Quisque in hendrerit ligula, a viverra nisl. Nulla erat massa, ullamcorper in tempus eget, accumsan a dui. Aenean posuere iaculis sodales. Nulla non ullamcorper purus.\r\n\r\nMauris nec nisi risus. Cras eleifend lorem ac nisl fermentum gravida in quis libero. Maecenas consectetur quis massa a vehicula. Praesent blandit eros ac mi elementum sodales. Maecenas a mattis dolor. Vivamus faucibus ut erat ut feugiat. Fusce pretium ex sem, vel luctus augue cursus non. Pellentesque elementum et tortor sed imperdiet. In blandit nulla imperdiet malesuada volutpat. Ut nunc tellus, vehicula vitae sodales a, semper scelerisque justo. Integer ut cursus elit. Nunc venenatis vitae dui sed cursus.\r\n\r\nSed laoreet nisl eget tortor semper sollicitudin. Nulla sit amet facilisis justo, sit amet auctor urna. Nulla aliquet nisi non libero malesuada ornare. Pellentesque in porttitor quam. Maecenas dolor arcu, consectetur non pulvinar eu, sollicitudin eleifend risus. Mauris ullamcorper convallis scelerisque. Mauris gravida ornare ex et porttitor. Donec condimentum sagittis sem, vel vulputate lorem semper et. Praesent lobortis est enim, condimentum varius sem malesuada id. Vestibulum eu est orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris vel neque at enim posuere consectetur vitae sit amet massa. Praesent ac sem turpis. Praesent condimentum efficitur interdum. Ut ut tincidunt sem.', '2018-12-28', '127_0_0_1.sql', 1, 3),
(3, 'Staff', 'asdasdasdasdasdasd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit arcu vitae nibh lobortis, non mollis neque varius. Pellentesque sodales euismod pulvinar. Vivamus consequat felis erat, ac ullamcorper nisl luctus eget. Cras semper libero at lacus fermentum, posuere elementum neque sollicitudin. Ut consectetur, mauris in interdum volutpat, massa augue viverra purus, id tempor tellus odio quis massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ornare elit ac nulla venenatis faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam venenatis ac leo non blandit. Ut tempus, metus et rutrum ultrices, libero nunc lacinia justo, in hendrerit risus magna eu tellus. Sed malesuada elit magna, et venenatis dolor blandit id. Pellentesque fringilla at sem quis dignissim. Sed lobortis, nunc eget ultricies iaculis, felis ex dictum libero, at vulputate justo ipsum non odio. Donec tristique vehicula risus, vitae aliquam nibh. Pellentesque posuere cursus felis ut ornare. Donec eu scelerisque sem.\r\n\r\nNunc vitae venenatis magna. Sed id metus suscipit, malesuada risus vel, bibendum turpis. Maecenas congue enim orci, ac aliquet diam dignissim lacinia. Donec sed luctus tellus, vel dignissim odio. Donec molestie risus purus, vel posuere magna vulputate ut. Morbi scelerisque ut lectus ut varius. Quisque imperdiet odio sit amet odio laoreet maximus.\r\n\r\nNullam in tortor vel turpis molestie blandit sit amet nec velit. Integer posuere iaculis convallis. Sed vehicula ut lectus nec gravida. Donec elit eros, sollicitudin in porttitor id, facilisis non sem. Curabitur imperdiet fermentum eros ac varius. Proin dolor nisl, commodo maximus magna eu, sagittis rhoncus sem. Etiam sodales arcu in ultrices hendrerit. Sed vel magna ac lorem volutpat tristique. Curabitur lacinia dui quis odio scelerisque, vel facilisis orci scelerisque. Praesent fringilla, lorem volutpat luctus iaculis, metus quam congue tortor, laoreet luctus nunc risus eget quam. Quisque in hendrerit ligula, a viverra nisl. Nulla erat massa, ullamcorper in tempus eget, accumsan a dui. Aenean posuere iaculis sodales. Nulla non ullamcorper purus.\r\n\r\nMauris nec nisi risus. Cras eleifend lorem ac nisl fermentum gravida in quis libero. Maecenas consectetur quis massa a vehicula. Praesent blandit eros ac mi elementum sodales. Maecenas a mattis dolor. Vivamus faucibus ut erat ut feugiat. Fusce pretium ex sem, vel luctus augue cursus non. Pellentesque elementum et tortor sed imperdiet. In blandit nulla imperdiet malesuada volutpat. Ut nunc tellus, vehicula vitae sodales a, semper scelerisque justo. Integer ut cursus elit. Nunc venenatis vitae dui sed cursus.\r\n\r\nSed laoreet nisl eget tortor semper sollicitudin. Nulla sit amet facilisis justo, sit amet auctor urna. Nulla aliquet nisi non libero malesuada ornare. Pellentesque in porttitor quam. Maecenas dolor arcu, consectetur non pulvinar eu, sollicitudin eleifend risus. Mauris ullamcorper convallis scelerisque. Mauris gravida ornare ex et porttitor. Donec condimentum sagittis sem, vel vulputate lorem semper et. Praesent lobortis est enim, condimentum varius sem malesuada id. Vestibulum eu est orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris vel neque at enim posuere consectetur vitae sit amet massa. Praesent ac sem turpis. Praesent condimentum efficitur interdum. Ut ut tincidunt sem.', '2020-12-16', '1608130378.pptx', 1, 3),
(4, 'Staff', 'asdasdasdasdasdasd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc suscipit arcu vitae nibh lobortis, non mollis neque varius. Pellentesque sodales euismod pulvinar. Vivamus consequat felis erat, ac ullamcorper nisl luctus eget. Cras semper libero at lacus fermentum, posuere elementum neque sollicitudin. Ut consectetur, mauris in interdum volutpat, massa augue viverra purus, id tempor tellus odio quis massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus ornare elit ac nulla venenatis faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam venenatis ac leo non blandit. Ut tempus, metus et rutrum ultrices, libero nunc lacinia justo, in hendrerit risus magna eu tellus. Sed malesuada elit magna, et venenatis dolor blandit id. Pellentesque fringilla at sem quis dignissim. Sed lobortis, nunc eget ultricies iaculis, felis ex dictum libero, at vulputate justo ipsum non odio. Donec tristique vehicula risus, vitae aliquam nibh. Pellentesque posuere cursus felis ut ornare. Donec eu scelerisque sem.\r\n\r\nNunc vitae venenatis magna. Sed id metus suscipit, malesuada risus vel, bibendum turpis. Maecenas congue enim orci, ac aliquet diam dignissim lacinia. Donec sed luctus tellus, vel dignissim odio. Donec molestie risus purus, vel posuere magna vulputate ut. Morbi scelerisque ut lectus ut varius. Quisque imperdiet odio sit amet odio laoreet maximus.\r\n\r\nNullam in tortor vel turpis molestie blandit sit amet nec velit. Integer posuere iaculis convallis. Sed vehicula ut lectus nec gravida. Donec elit eros, sollicitudin in porttitor id, facilisis non sem. Curabitur imperdiet fermentum eros ac varius. Proin dolor nisl, commodo maximus magna eu, sagittis rhoncus sem. Etiam sodales arcu in ultrices hendrerit. Sed vel magna ac lorem volutpat tristique. Curabitur lacinia dui quis odio scelerisque, vel facilisis orci scelerisque. Praesent fringilla, lorem volutpat luctus iaculis, metus quam congue tortor, laoreet luctus nunc risus eget quam. Quisque in hendrerit ligula, a viverra nisl. Nulla erat massa, ullamcorper in tempus eget, accumsan a dui. Aenean posuere iaculis sodales. Nulla non ullamcorper purus.\r\n\r\nMauris nec nisi risus. Cras eleifend lorem ac nisl fermentum gravida in quis libero. Maecenas consectetur quis massa a vehicula. Praesent blandit eros ac mi elementum sodales. Maecenas a mattis dolor. Vivamus faucibus ut erat ut feugiat. Fusce pretium ex sem, vel luctus augue cursus non. Pellentesque elementum et tortor sed imperdiet. In blandit nulla imperdiet malesuada volutpat. Ut nunc tellus, vehicula vitae sodales a, semper scelerisque justo. Integer ut cursus elit. Nunc venenatis vitae dui sed cursus.\r\n\r\nSed laoreet nisl eget tortor semper sollicitudin. Nulla sit amet facilisis justo, sit amet auctor urna. Nulla aliquet nisi non libero malesuada ornare. Pellentesque in porttitor quam. Maecenas dolor arcu, consectetur non pulvinar eu, sollicitudin eleifend risus. Mauris ullamcorper convallis scelerisque. Mauris gravida ornare ex et porttitor. Donec condimentum sagittis sem, vel vulputate lorem semper et. Praesent lobortis est enim, condimentum varius sem malesuada id. Vestibulum eu est orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris vel neque at enim posuere consectetur vitae sit amet massa. Praesent ac sem turpis. Praesent condimentum efficitur interdum. Ut ut tincidunt sem.', '2020-12-16', '1608130552.pptx', 1, 3),
(5, 'Mahasiswa', 'Jefri Melakukan Kegiatan Tidak Sopan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta velit quis nisl facilisis sollicitudin. Etiam nec consectetur massa. Mauris eget ultricies lorem, ac volutpat arcu. In vulputate dui ac erat fringilla, nec euismod ex ultrices. Integer a malesuada turpis. Duis eros leo, vulputate viverra ligula eget, mattis maximus eros. Duis hendrerit sodales turpis, ut elementum mauris suscipit sit amet. Sed tellus nibh, sodales id posuere fringilla, pretium sit amet elit. Suspendisse aliquet, est a cursus mattis, velit ipsum fringilla elit, at gravida tortor lorem nec mauris. Proin molestie turpis sed tortor auctor tempus. Fusce pharetra fermentum ex, vitae viverra nisi tristique id. Aliquam consequat tellus quis tortor pulvinar, a finibus mi lobortis. Proin et enim elit. Mauris sed auctor nulla, a accumsan augue.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sed mauris at nunc cursus malesuada. Duis quis finibus massa. Curabitur tincidunt tristique nibh, ac efficitur velit suscipit sed. Sed pharetra ligula aliquam ante pretium viverra. Integer facilisis nisi a leo placerat, eu efficitur libero tincidunt. Phasellus molestie nisl sed lorem ullamcorper vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nDonec lobortis eu lectus ut vulputate. In hac habitasse platea dictumst. Fusce nec magna eget magna rhoncus posuere. Vestibulum gravida lectus turpis, id dictum purus luctus vel. Pellentesque eleifend nibh nec augue condimentum accumsan. Donec imperdiet mattis nulla, eget sagittis mauris fringilla sed. Fusce iaculis augue neque, sit amet varius eros pellentesque quis. Aliquam sed nulla eget sem mollis aliquam et et velit. Aliquam ultricies erat a hendrerit malesuada. Proin auctor, ante et efficitur hendrerit, velit dolor molestie mauris, eu ultrices nisl nulla sed ligula. Donec rutrum mauris ac tristique malesuada.\r\n\r\nNunc dignissim ut orci et egestas. Curabitur at eros sed elit elementum dictum. Maecenas tempor ex sit amet purus dictum, in suscipit risus varius. Maecenas a risus quis magna luctus sodales in nec velit. Mauris velit massa, cursus eu erat eu, gravida faucibus ex. Aliquam egestas libero ac orci condimentum sagittis. In risus magna, ornare eu enim sed, fermentum blandit elit. Proin sit amet ultricies urna. Nunc tincidunt turpis eget bibendum viverra. Aenean dui tellus, facilisis sit amet dapibus at, gravida vel nulla. Vivamus quis tortor bibendum, aliquam mi et, ornare nibh. In ut nibh quis justo lobortis rutrum aliquet in metus. Nunc aliquam orci sed neque ullamcorper efficitur. Curabitur non sem eget dolor posuere scelerisque. Donec eget libero tellus. In in lacus non nisi rhoncus imperdiet.\r\n\r\nIn hac habitasse platea dictumst. Proin ut nunc at erat ullamcorper vestibulum. Mauris dapibus, magna eget elementum venenatis, mauris sapien fermentum lorem, sed condimentum turpis nisi a eros. Nam quis tortor dignissim, varius turpis vitae, vestibulum felis. Fusce mollis leo in ipsum dignissim consequat. Integer sodales id odio a faucibus. Vestibulum risus nisl, iaculis eu posuere quis, ultrices non ante. Vestibulum fermentum, erat at sollicitudin condimentum, turpis lorem euismod quam, ac fermentum justo tellus vitae quam. Etiam tellus lectus, aliquet et dapibus vel, mollis vitae mi. Aliquam consequat, est nec pharetra interdum, metus tortor blandit urna, elementum tincidunt arcu lacus vel felis. Ut orci nisi, hendrerit nec aliquam non, cursus sed mauris. Proin convallis ac lectus id malesuada. Praesent interdum sagittis nisl. Nam pulvinar sodales dui pretium eleifend.', '2020-12-17', '1608183294.pdf', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `password`) VALUES
(3, 'Jeans Prima Simaremare', 'jeansprima', 'jeansprima163@gmail.com', '082297118323', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
