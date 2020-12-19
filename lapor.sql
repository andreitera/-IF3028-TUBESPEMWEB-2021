-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 03:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aspect` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `from`, `title`, `content`, `file`, `aspect`, `unique_id`, `created_at`, `updated_at`) VALUES
(1, 'Ikhbal', 'Tes laporan 1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Dosen', '5fd61d6217987', '2020-12-13 21:06:41', NULL),
(2, 'Fikri', 'Tes laporan 2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Dosen', '5fd623fad2090', '2020-12-13 21:23:23', NULL),
(3, 'Ikhbal', 'Tes Laporan 3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'http://127.0.0.1:8000/storage/lapor/5fd624751b101.docx', 'Staff', '5fd624751b101', '2020-12-13 14:25:57', NULL),
(4, 'Imam', 'Tes Laporan 4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Dosen', '5fd645064ee40', '2020-12-13 16:44:54', NULL),
(6, 'Muhammad Ikhbal', 'Tes Laporan 5', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Staff', '5fd6557c745f7', '2020-12-13 17:55:08', NULL),
(7, 'Anonim', 'Tes Laporan 7', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Dosen', '5fd6566433536', '2020-12-13 17:59:00', NULL),
(8, 'Itera', 'aa', 'afafa', 'Tidak ada lampiran', 'Staff', '5fd6bfcd37458', '2020-12-14 01:28:45', NULL),
(9, 'Anonim', 'dfbdbd', 'dfbdbd', 'Tidak ada lampiran', 'Staff', '5fd6c07240f2b', '2020-12-14 01:31:30', NULL),
(10, 'Vina', 'sdfsfs', 'sfs', 'http://127.0.0.1:8000/storage/lapor/5fd6c0a618a21.png', 'Mahasiswa', '5fd6c0a618a1f', '2020-12-14 01:32:22', NULL),
(12, 'Imam', 'Laporan 8', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Dosen', '5fd78ac6d9053', '2020-12-14 17:05:46', NULL),
(13, 'Fikri', 'Laporan 9', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'http://127.0.0.1:8000/storage/lapor/5fd79b8d22353.pdf', 'Mahasiswa', '5fd79b8d22351', '2020-12-14 17:06:21', NULL),
(14, 'Ikhbal', 'Laporan 10', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat deserunt natus ipsum rerum ad corporis, a adipisci? Debitis iure dignissimos quae a culpa nemo commodi? Eum cumque aliquam doloremque facere, adipisci veniam sed dignissimos maxime obcaecati tempora, iure consectetur. Sed, repellendus aperiam? Odit architecto autem recusandae officiis! Laudantium obcaecati tempora magnam at quia cumque illum quidem totam, amet sint sit quas nobis pariatur corporis veniam eligendi dolores vitae ea et deleniti nam eaque modi dolorum. Dolores doloremque, saepe eius mollitia sapiente, odit optio quibusdam possimus repudiandae sit modi reprehenderit quas at voluptatum sunt dolor! Pariatur modi assumenda vitae odit commodi?', 'Tidak ada lampiran', 'Mahasiswa', '5fd7a64d03f3a', '2020-12-14 17:52:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_07_082450_create_laporan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ikhbal', 'muhammad.118140123@student.itera.ac.id', NULL, '$2y$10$uiCAOA.moG3gDgJlivL8ZuMLG0uMSpUbfX.EV8hmU/jjyn83sjYQi', NULL, '2020-12-13 15:16:59', '2020-12-13 15:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laporan_unique_id_unique` (`unique_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
