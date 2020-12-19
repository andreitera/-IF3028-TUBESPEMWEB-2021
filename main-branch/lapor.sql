-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 04:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

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
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(128) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(128) NOT NULL,
  `file` varchar(128) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `isi`, `aspek`, `file`, `waktu`) VALUES
(37, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit hendrerit metus, vel fringilla risus dignissim vitae. Fusce ut neque ac arcu semper fringilla laoreet sed nisl. Mauris vestibulum euismod molestie. Donec tortor urna, commodo a velit et, aliquet ultrices dui. Nullam vitae tortor vel mauris tempus ultrices. Nunc iaculis arcu sit amet leo volutpat semper. Vestibulum mauris nisl, cursus vitae cursus quis, iaculis non odio. Mauris luctus eleifend tortor eget vestibulum. Etiam tellus nisl, sodales a augue non, eleifend rhoncus est. Donec luctus massa eget ullamcorper feugiat. Vestibulum consectetur, lectus id egestas efficitur, erat nibh condimentum sem, id vulputate nibh sapien molestie ipsum. Suspendisse ac gravida metus. Duis quis porttitor mauris.', 'Komentar', '2020-12-19_10-43-44.png', '2020-12-19 10:43:44'),
(38, 'Ut tristique ultricies turpis, et sagittis metus malesuada ut. Proin vel elementum urna. In efficitur, ante eu aliquet porta, nibh orci semper augue, eget fringilla sapien ipsum vitae arcu. Curabitur nibh enim, maximus non mauris ac, fringilla blandit leo. Donec magna sapien, egestas non mauris ac, dapibus pharetra mauris. Pellentesque non egestas mauris, eget fermentum dolor. Vestibulum ullamcorper, tellus vitae rutrum sodales, dolor justo iaculis odio, id fringilla justo arcu nec orci. Cras euismod lorem vel dui dictum imperdiet. Donec molestie vulputate hendrerit. Vivamus vestibulum libero odio, at vestibulum turpis imperdiet et. Nullam scelerisque justo malesuada, rutrum ante et, malesuada justo. Vestibulum vitae aliquam ipsum.', 'Komentar', '2020-12-19_10-44-03.png', '2020-12-19 10:44:03'),
(39, 'Sed luctus nisl id purus varius, vitae semper nisl lobortis. Vestibulum nibh magna, vestibulum vitae dignissim feugiat, vehicula at lectus. Donec et suscipit eros. Suspendisse imperdiet sapien sed diam molestie rutrum. Donec malesuada commodo augue. Vestibulum aliquet ante quam, facilisis blandit eros pulvinar sagittis. Vivamus ultrices, eros eget tristique ultrices, libero mi imperdiet enim, sit amet maximus augue libero at enim. Ut fringilla porttitor magna, vulputate ultrices lectus finibus non. Mauris ut tellus massa. Fusce ac lobortis nibh. Nullam vel magna tellus. Nam accumsan, risus scelerisque ullamcorper blandit, neque massa mollis nisl, vitae vehicula diam justo ut velit. Quisque eleifend est eu lorem fringilla, viverra ullamcorper nulla lacinia.', 'Komentar', '2020-12-19_10-44-27.jpg', '2020-12-19 10:44:27'),
(40, 'Sed feugiat augue eget erat blandit tincidunt. Fusce nec facilisis ante, eget mollis dolor. Quisque varius metus eget fermentum consequat. Ut ornare vehicula erat, id elementum erat consequat sed. Maecenas porta sodales fringilla. Suspendisse potenti. Quisque eget porttitor magna, eu ullamcorper velit. Fusce non est vel quam imperdiet sagittis et eget orci. Suspendisse ut odio gravida, mollis arcu at, hendrerit magna. Sed maximus neque nec rutrum aliquam. Cras eleifend sem neque, vel imperdiet neque molestie ut. Etiam sit amet justo nec nunc cursus finibus eu eget quam. Aliquam sollicitudin, orci consectetur suscipit egestas, erat magna fringilla ligula, vitae volutpat enim risus at ipsum. Sed volutpat urna justo, blandit faucibus turpis elementum eu. Donec malesuada finibus eros, eget fermentum dui finibus at.', 'Laporan', '2020-12-19_10-44-50.jpg', '2020-12-19 10:44:50'),
(41, 'Cras ut varius mi, vitae commodo nibh. Mauris tempor ultricies urna, sed luctus ipsum lacinia vitae. Integer ultrices nisi eget orci rhoncus, vel posuere urna maximus. Quisque tempus venenatis urna tincidunt scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis turpis est. Quisque porttitor sem vel urna eleifend pellentesque. Praesent a diam lorem. Integer dui magna, fringilla rutrum mollis eget, fermentum et nisi. Nulla facilisi. Nunc eget sagittis dolor, ut consectetur erat. Maecenas porttitor ipsum et velit vestibulum viverra.', 'Komentar', '2020-12-19_10-45-30.jpg', '2020-12-19 10:45:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
