-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 18, 2020 at 07:33 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lapors`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapors`
--

CREATE TABLE `lapors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapors`
--

INSERT INTO `lapors` (`id`, `report`, `aspect`, `file`, `created_at`, `updated_at`) VALUES
(6, 'gdsgds', 'Dosen', '1608317922-Desain Story-3.png', '2020-12-18 11:58:42', '2020-12-18 11:58:42'),
(7, 'fdfds', 'Dosen', '1608319023-UpdateTable.pdf', '2020-12-18 12:17:03', '2020-12-18 12:17:03'),
(8, 'kvoijdsv', 'Dosen', '1608319111-UpdateTable.docx', '2020-12-18 12:18:31', '2020-12-18 12:18:31'),
(9, '123', 'Staff', '1608319958-formPengajuansuratKP.docx', '2020-12-18 12:32:38', '2020-12-18 12:32:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapors`
--
ALTER TABLE `lapors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapors`
--
ALTER TABLE `lapors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
