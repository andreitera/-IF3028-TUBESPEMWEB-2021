-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 10:25 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplelapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `aspek`, `file`, `tanggal`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'infrastruktur', 'foto.jpg', '0000-00-00 00:00:00'),
(2, 'in laporan ke dua Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'dosen', 'nilai.pdf', '0000-00-00 00:00:00'),
(4, 'Jakarta (/d???k??rt?/; Indonesian pronunciation: [d?a?karta]), officially the Special Capital Region of Jakarta (Indonesian: Daerah Khusus Ibukota Jakarta, literally Jakarta Capital Special Region), is the capital and largest city of Indonesia. Situated on the northwest coast of the world''s most populous island of Java, it is the centre of economy, culture and politics of Indonesia with a population of more than ten million as of 2014.[5][8] The Jakarta metropolitan area, which has an area of 6,392 square kilometres, is the world''s second most populous urban area after Tokyo, with a population of about 30 million as of 2010.[9] Jakarta''s business opportunities, as well as its potential to offer a higher standard of living, have attracted migrants from across the Indonesian archipelago, making it a melting pot of numerous cultures.[10] Jakarta is nicknamed the "Big Durian", the thorny strongly-odored fruit native to the region,[1] as the city is seen as the Indonesian equivalent of New York (Big Apple).[11]\r\n\r\nEstablished in the fourth century as Sunda Kelapa, the city became an important trading port for the Sunda Kingdom. It was the de facto capital of the Dutch East Indies when it was known as Batavia. Jakarta is officially a province with special capital region status, though it is commonly referred to as a city. Its provincial government consists of five administrative cities and one administrative regency. Jakarta is an alpha world city[12] and is the seat of the ASEAN secretariat,[13] making it an important city for international diplomacy.[14] Financial institutions such as the Bank of Indonesia, Indonesia Stock Exchange, and corporate headquarters of numerous Indonesian companies and multinational corporations are located in the city. Jakarta has grown more rapidly than Kuala Lumpur, B', 'Dosen', '210cd3cee071912757bcf396162b75c1.png', '2019-12-12 16:17:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
