-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2020 at 06:30 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laporkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE IF NOT EXISTS `lapor` (
`id` int(15) NOT NULL,
  `isi` text NOT NULL,
  `file_lapor` varchar(100) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `file_lapor`, `aspek`, `waktu`) VALUES
(1, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero''s De Finibus Bonorum et Malorum for use in a type specimen book.', 'file', 'Dosen', '2020-12-01 17:00:00'),
(2, 'testing pwe testing pera perta testing pwe testing pera perta testing pwe testing pera perta testing pwe testing pera perta testing pwe testing pera perta testing pwe testing pera perta ', '', 'Dosen', '2020-12-19 03:07:03'),
(3, 'asdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfs asdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfsasdfaaasdf ftdf sdfs sdfs', '', 'Dosen', '2020-12-19 04:37:33'),
(5, 'sdaafdfadfdsf ffdfd fdfd dfdf fddf sdaafdfadfdsf ffdfd fdfd dfdf fddf sdaafdfadfdsf ffdfd fdfd dfdf fddf sdaafdfadfdsf ffdfd fdfd dfdf fddf sdaafdfadfdsf ffdfd fdfd dfdf fddf sdaafdfadfdsf ffdfd fdfd dfdf fddf sdaafdfadfdsf ffdfd fdfd dfdf fddf ', '', 'Infrastruktur', '2020-12-19 04:56:25'),
(6, ' test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi test test isi ', '', 'Mahasiswa', '2020-12-19 05:27:38');

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
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
