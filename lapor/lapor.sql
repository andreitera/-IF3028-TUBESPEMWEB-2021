-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 05:18 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `lapor_id` int(10) UNSIGNED NOT NULL,
  `komentar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `user_id`, `lapor_id`, `komentar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Betul Sekali', '2020-12-18 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `lampiran` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonim` tinyint(4) NOT NULL DEFAULT 1,
  `rahasia` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `laporan_type_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `instansi_tujuan_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `title`, `laporan`, `tgl_kejadian`, `lampiran`, `anonim`, `rahasia`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `category_id`, `laporan_type_id`, `location_id`, `instansi_tujuan_id`, `status_id`) VALUES
(1, 'Sampah', 'Sampah banyak banget disini', '2020-12-19', NULL, 0, 0, '2020-12-18 17:00:00', NULL, NULL, 1, 1301, 1301, 1102, 65, 1201),
(2, 'Tidak Pakai Masker', 'Banyak orang yang masih melanggar protokol covid-19', '2020-12-19', NULL, 0, 0, '2020-12-18 17:00:00', NULL, NULL, 1, 1301, 1302, 1102, 65, 1201);

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
(100, '2014_10_12_100000_create_password_resets_table', 1),
(101, '2019_08_19_000000_create_failed_jobs_table', 1),
(102, '2020_12_13_115647_create_set_categories_table', 1),
(103, '2020_12_13_115704_create_set_libraries_table', 1),
(104, '2020_12_13_121350_create_set_provinces_table', 1),
(105, '2020_12_13_122428_create_set_cities_table', 1),
(106, '2020_12_13_130000_create_users_table', 1),
(107, '2020_12_16_133530_create_lapor_table', 1),
(108, '2020_12_16_140716_create_komentar_table', 1);

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
-- Table structure for table `set_categories`
--

CREATE TABLE `set_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `set_categories`
--

INSERT INTO `set_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Role User', '2020-12-18 17:00:00', NULL, NULL),
(11, 'Gender', '2020-12-18 17:00:00', NULL, NULL),
(12, 'Lapor Status', '2020-12-18 17:00:00', NULL, NULL),
(13, 'Kategori Laporan', '2020-12-18 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `set_cities`
--

CREATE TABLE `set_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `set_cities`
--

INSERT INTO `set_cities` (`id`, `province_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1101, 11, 'kabupaten simeulue', '2020-12-18 17:00:00', NULL, NULL),
(1102, 11, 'kabupaten aceh singkil', '2020-12-18 17:00:00', NULL, NULL),
(1103, 11, 'kabupaten aceh selatan', '2020-12-18 17:00:00', NULL, NULL),
(1104, 11, 'kabupaten aceh tenggara', '2020-12-18 17:00:00', NULL, NULL),
(1105, 11, 'kabupaten aceh timur', '2020-12-18 17:00:00', NULL, NULL),
(1106, 11, 'kabupaten aceh tengah', '2020-12-18 17:00:00', NULL, NULL),
(1107, 11, 'kabupaten aceh barat', '2020-12-18 17:00:00', NULL, NULL),
(1108, 11, 'kabupaten aceh besar', '2020-12-18 17:00:00', NULL, NULL),
(1109, 11, 'kabupaten pidie', '2020-12-18 17:00:00', NULL, NULL),
(1110, 11, 'kabupaten bireuen', '2020-12-18 17:00:00', NULL, NULL),
(1111, 11, 'kabupaten aceh utara', '2020-12-18 17:00:00', NULL, NULL),
(1112, 11, 'kabupaten aceh barat daya', '2020-12-18 17:00:00', NULL, NULL),
(1113, 11, 'kabupaten gayo lues', '2020-12-18 17:00:00', NULL, NULL),
(1114, 11, 'kabupaten aceh tamiang', '2020-12-18 17:00:00', NULL, NULL),
(1115, 11, 'kabupaten nagan raya', '2020-12-18 17:00:00', NULL, NULL),
(1116, 11, 'kabupaten aceh jaya', '2020-12-18 17:00:00', NULL, NULL),
(1117, 11, 'kabupaten bener meriah', '2020-12-18 17:00:00', NULL, NULL),
(1118, 11, 'kabupaten pidie jaya', '2020-12-18 17:00:00', NULL, NULL),
(1171, 11, 'kota banda aceh', '2020-12-18 17:00:00', NULL, NULL),
(1172, 11, 'kota sabang', '2020-12-18 17:00:00', NULL, NULL),
(1173, 11, 'kota langsa', '2020-12-18 17:00:00', NULL, NULL),
(1174, 11, 'kota lhokseumawe', '2020-12-18 17:00:00', NULL, NULL),
(1175, 11, 'kota subulussalam', '2020-12-18 17:00:00', NULL, NULL),
(1201, 12, 'kabupaten nias', '2020-12-18 17:00:00', NULL, NULL),
(1202, 12, 'kabupaten mandailing natal', '2020-12-18 17:00:00', NULL, NULL),
(1203, 12, 'kabupaten tapanuli selatan', '2020-12-18 17:00:00', NULL, NULL),
(1204, 12, 'kabupaten tapanuli tengah', '2020-12-18 17:00:00', NULL, NULL),
(1205, 12, 'kabupaten tapanuli utara', '2020-12-18 17:00:00', NULL, NULL),
(1206, 12, 'kabupaten toba samosir', '2020-12-18 17:00:00', NULL, NULL),
(1207, 12, 'kabupaten labuhan batu', '2020-12-18 17:00:00', NULL, NULL),
(1208, 12, 'kabupaten asahan', '2020-12-18 17:00:00', NULL, NULL),
(1209, 12, 'kabupaten simalungun', '2020-12-18 17:00:00', NULL, NULL),
(1210, 12, 'kabupaten dairi', '2020-12-18 17:00:00', NULL, NULL),
(1211, 12, 'kabupaten karo', '2020-12-18 17:00:00', NULL, NULL),
(1212, 12, 'kabupaten deli serdang', '2020-12-18 17:00:00', NULL, NULL),
(1213, 12, 'kabupaten langkat', '2020-12-18 17:00:00', NULL, NULL),
(1214, 12, 'kabupaten nias selatan', '2020-12-18 17:00:00', NULL, NULL),
(1215, 12, 'kabupaten humbang hasundutan', '2020-12-18 17:00:00', NULL, NULL),
(1216, 12, 'kabupaten pakpak bharat', '2020-12-18 17:00:00', NULL, NULL),
(1217, 12, 'kabupaten samosir', '2020-12-18 17:00:00', NULL, NULL),
(1218, 12, 'kabupaten serdang bedagai', '2020-12-18 17:00:00', NULL, NULL),
(1219, 12, 'kabupaten batu bara', '2020-12-18 17:00:00', NULL, NULL),
(1220, 12, 'kabupaten padang lawas utara', '2020-12-18 17:00:00', NULL, NULL),
(1221, 12, 'kabupaten padang lawas', '2020-12-18 17:00:00', NULL, NULL),
(1222, 12, 'kabupaten labuhan batu selatan', '2020-12-18 17:00:00', NULL, NULL),
(1223, 12, 'kabupaten labuhan batu utara', '2020-12-18 17:00:00', NULL, NULL),
(1224, 12, 'kabupaten nias utara', '2020-12-18 17:00:00', NULL, NULL),
(1225, 12, 'kabupaten nias barat', '2020-12-18 17:00:00', NULL, NULL),
(1271, 12, 'kota sibolga', '2020-12-18 17:00:00', NULL, NULL),
(1272, 12, 'kota tanjung balai', '2020-12-18 17:00:00', NULL, NULL),
(1273, 12, 'kota pematang siantar', '2020-12-18 17:00:00', NULL, NULL),
(1274, 12, 'kota tebing tinggi', '2020-12-18 17:00:00', NULL, NULL),
(1275, 12, 'kota medan', '2020-12-18 17:00:00', NULL, NULL),
(1276, 12, 'kota binjai', '2020-12-18 17:00:00', NULL, NULL),
(1277, 12, 'kota padangsidimpuan', '2020-12-18 17:00:00', NULL, NULL),
(1278, 12, 'kota gunungsitoli', '2020-12-18 17:00:00', NULL, NULL),
(1301, 13, 'kabupaten kepulauan mentawai', '2020-12-18 17:00:00', NULL, NULL),
(1302, 13, 'kabupaten pesisir selatan', '2020-12-18 17:00:00', NULL, NULL),
(1303, 13, 'kabupaten solok', '2020-12-18 17:00:00', NULL, NULL),
(1304, 13, 'kabupaten sijunjung', '2020-12-18 17:00:00', NULL, NULL),
(1305, 13, 'kabupaten tanah datar', '2020-12-18 17:00:00', NULL, NULL),
(1306, 13, 'kabupaten padang pariaman', '2020-12-18 17:00:00', NULL, NULL),
(1307, 13, 'kabupaten agam', '2020-12-18 17:00:00', NULL, NULL),
(1308, 13, 'kabupaten lima puluh kota', '2020-12-18 17:00:00', NULL, NULL),
(1309, 13, 'kabupaten pasaman', '2020-12-18 17:00:00', NULL, NULL),
(1310, 13, 'kabupaten solok selatan', '2020-12-18 17:00:00', NULL, NULL),
(1311, 13, 'kabupaten dharmasraya', '2020-12-18 17:00:00', NULL, NULL),
(1312, 13, 'kabupaten pasaman barat', '2020-12-18 17:00:00', NULL, NULL),
(1371, 13, 'kota padang', '2020-12-18 17:00:00', NULL, NULL),
(1372, 13, 'kota solok', '2020-12-18 17:00:00', NULL, NULL),
(1373, 13, 'kota sawah lunto', '2020-12-18 17:00:00', NULL, NULL),
(1374, 13, 'kota padang panjang', '2020-12-18 17:00:00', NULL, NULL),
(1375, 13, 'kota bukittinggi', '2020-12-18 17:00:00', NULL, NULL),
(1376, 13, 'kota payakumbuh', '2020-12-18 17:00:00', NULL, NULL),
(1377, 13, 'kota pariaman', '2020-12-18 17:00:00', NULL, NULL),
(1401, 14, 'kabupaten kuantan singingi', '2020-12-18 17:00:00', NULL, NULL),
(1402, 14, 'kabupaten indragiri hulu', '2020-12-18 17:00:00', NULL, NULL),
(1403, 14, 'kabupaten indragiri hilir', '2020-12-18 17:00:00', NULL, NULL),
(1404, 14, 'kabupaten pelalawan', '2020-12-18 17:00:00', NULL, NULL),
(1405, 14, 'kabupaten s i a k', '2020-12-18 17:00:00', NULL, NULL),
(1406, 14, 'kabupaten kampar', '2020-12-18 17:00:00', NULL, NULL),
(1407, 14, 'kabupaten rokan hulu', '2020-12-18 17:00:00', NULL, NULL),
(1408, 14, 'kabupaten bengkalis', '2020-12-18 17:00:00', NULL, NULL),
(1409, 14, 'kabupaten rokan hilir', '2020-12-18 17:00:00', NULL, NULL),
(1410, 14, 'kabupaten kepulauan meranti', '2020-12-18 17:00:00', NULL, NULL),
(1471, 14, 'kota pekanbaru', '2020-12-18 17:00:00', NULL, NULL),
(1473, 14, 'kota d u m a i', '2020-12-18 17:00:00', NULL, NULL),
(1501, 15, 'kabupaten kerinci', '2020-12-18 17:00:00', NULL, NULL),
(1502, 15, 'kabupaten merangin', '2020-12-18 17:00:00', NULL, NULL),
(1503, 15, 'kabupaten sarolangun', '2020-12-18 17:00:00', NULL, NULL),
(1504, 15, 'kabupaten batang hari', '2020-12-18 17:00:00', NULL, NULL),
(1505, 15, 'kabupaten muaro jambi', '2020-12-18 17:00:00', NULL, NULL),
(1506, 15, 'kabupaten tanjung jabung timur', '2020-12-18 17:00:00', NULL, NULL),
(1507, 15, 'kabupaten tanjung jabung barat', '2020-12-18 17:00:00', NULL, NULL),
(1508, 15, 'kabupaten tebo', '2020-12-18 17:00:00', NULL, NULL),
(1509, 15, 'kabupaten bungo', '2020-12-18 17:00:00', NULL, NULL),
(1571, 15, 'kota jambi', '2020-12-18 17:00:00', NULL, NULL),
(1572, 15, 'kota sungai penuh', '2020-12-18 17:00:00', NULL, NULL),
(1601, 16, 'kabupaten ogan komering ulu', '2020-12-18 17:00:00', NULL, NULL),
(1602, 16, 'kabupaten ogan komering ilir', '2020-12-18 17:00:00', NULL, NULL),
(1603, 16, 'kabupaten muara enim', '2020-12-18 17:00:00', NULL, NULL),
(1604, 16, 'kabupaten lahat', '2020-12-18 17:00:00', NULL, NULL),
(1605, 16, 'kabupaten musi rawas', '2020-12-18 17:00:00', NULL, NULL),
(1606, 16, 'kabupaten musi banyuasin', '2020-12-18 17:00:00', NULL, NULL),
(1607, 16, 'kabupaten banyu asin', '2020-12-18 17:00:00', NULL, NULL),
(1608, 16, 'kabupaten ogan komering ulu selatan', '2020-12-18 17:00:00', NULL, NULL),
(1609, 16, 'kabupaten ogan komering ulu timur', '2020-12-18 17:00:00', NULL, NULL),
(1610, 16, 'kabupaten ogan ilir', '2020-12-18 17:00:00', NULL, NULL),
(1611, 16, 'kabupaten empat lawang', '2020-12-18 17:00:00', NULL, NULL),
(1612, 16, 'kabupaten penukal abab lematang ilir', '2020-12-18 17:00:00', NULL, NULL),
(1613, 16, 'kabupaten musi rawas utara', '2020-12-18 17:00:00', NULL, NULL),
(1671, 16, 'kota palembang', '2020-12-18 17:00:00', NULL, NULL),
(1672, 16, 'kota prabumulih', '2020-12-18 17:00:00', NULL, NULL),
(1673, 16, 'kota pagar alam', '2020-12-18 17:00:00', NULL, NULL),
(1674, 16, 'kota lubuklinggau', '2020-12-18 17:00:00', NULL, NULL),
(1701, 17, 'kabupaten bengkulu selatan', '2020-12-18 17:00:00', NULL, NULL),
(1702, 17, 'kabupaten rejang lebong', '2020-12-18 17:00:00', NULL, NULL),
(1703, 17, 'kabupaten bengkulu utara', '2020-12-18 17:00:00', NULL, NULL),
(1704, 17, 'kabupaten kaur', '2020-12-18 17:00:00', NULL, NULL),
(1705, 17, 'kabupaten seluma', '2020-12-18 17:00:00', NULL, NULL),
(1706, 17, 'kabupaten mukomuko', '2020-12-18 17:00:00', NULL, NULL),
(1707, 17, 'kabupaten lebong', '2020-12-18 17:00:00', NULL, NULL),
(1708, 17, 'kabupaten kepahiang', '2020-12-18 17:00:00', NULL, NULL),
(1709, 17, 'kabupaten bengkulu tengah', '2020-12-18 17:00:00', NULL, NULL),
(1771, 17, 'kota bengkulu', '2020-12-18 17:00:00', NULL, NULL),
(1801, 18, 'kabupaten lampung barat', '2020-12-18 17:00:00', NULL, NULL),
(1802, 18, 'kabupaten tanggamus', '2020-12-18 17:00:00', NULL, NULL),
(1803, 18, 'kabupaten lampung selatan', '2020-12-18 17:00:00', NULL, NULL),
(1804, 18, 'kabupaten lampung timur', '2020-12-18 17:00:00', NULL, NULL),
(1805, 18, 'kabupaten lampung tengah', '2020-12-18 17:00:00', NULL, NULL),
(1806, 18, 'kabupaten lampung utara', '2020-12-18 17:00:00', NULL, NULL),
(1807, 18, 'kabupaten way kanan', '2020-12-18 17:00:00', NULL, NULL),
(1808, 18, 'kabupaten tulangbawang', '2020-12-18 17:00:00', NULL, NULL),
(1809, 18, 'kabupaten pesawaran', '2020-12-18 17:00:00', NULL, NULL),
(1810, 18, 'kabupaten pringsewu', '2020-12-18 17:00:00', NULL, NULL),
(1811, 18, 'kabupaten mesuji', '2020-12-18 17:00:00', NULL, NULL),
(1812, 18, 'kabupaten tulang bawang barat', '2020-12-18 17:00:00', NULL, NULL),
(1813, 18, 'kabupaten pesisir barat', '2020-12-18 17:00:00', NULL, NULL),
(1871, 18, 'kota bandar lampung', '2020-12-18 17:00:00', NULL, NULL),
(1872, 18, 'kota metro', '2020-12-18 17:00:00', NULL, NULL),
(1901, 19, 'kabupaten bangka', '2020-12-18 17:00:00', NULL, NULL),
(1902, 19, 'kabupaten belitung', '2020-12-18 17:00:00', NULL, NULL),
(1903, 19, 'kabupaten bangka barat', '2020-12-18 17:00:00', NULL, NULL),
(1904, 19, 'kabupaten bangka tengah', '2020-12-18 17:00:00', NULL, NULL),
(1905, 19, 'kabupaten bangka selatan', '2020-12-18 17:00:00', NULL, NULL),
(1906, 19, 'kabupaten belitung timur', '2020-12-18 17:00:00', NULL, NULL),
(1971, 19, 'kota pangkal pinang', '2020-12-18 17:00:00', NULL, NULL),
(2101, 21, 'kabupaten karimun', '2020-12-18 17:00:00', NULL, NULL),
(2102, 21, 'kabupaten bintan', '2020-12-18 17:00:00', NULL, NULL),
(2103, 21, 'kabupaten natuna', '2020-12-18 17:00:00', NULL, NULL),
(2104, 21, 'kabupaten lingga', '2020-12-18 17:00:00', NULL, NULL),
(2105, 21, 'kabupaten kepulauan anambas', '2020-12-18 17:00:00', NULL, NULL),
(2171, 21, 'kota b a t a m', '2020-12-18 17:00:00', NULL, NULL),
(2172, 21, 'kota tanjung pinang', '2020-12-18 17:00:00', NULL, NULL),
(3101, 31, 'kabupaten kepulauan seribu', '2020-12-18 17:00:00', NULL, NULL),
(3171, 31, 'kota jakarta selatan', '2020-12-18 17:00:00', NULL, NULL),
(3172, 31, 'kota jakarta timur', '2020-12-18 17:00:00', NULL, NULL),
(3173, 31, 'kota jakarta pusat', '2020-12-18 17:00:00', NULL, NULL),
(3174, 31, 'kota jakarta barat', '2020-12-18 17:00:00', NULL, NULL),
(3175, 31, 'kota jakarta utara', '2020-12-18 17:00:00', NULL, NULL),
(3201, 32, 'kabupaten bogor', '2020-12-18 17:00:00', NULL, NULL),
(3202, 32, 'kabupaten sukabumi', '2020-12-18 17:00:00', NULL, NULL),
(3203, 32, 'kabupaten cianjur', '2020-12-18 17:00:00', NULL, NULL),
(3204, 32, 'kabupaten bandung', '2020-12-18 17:00:00', NULL, NULL),
(3205, 32, 'kabupaten garut', '2020-12-18 17:00:00', NULL, NULL),
(3206, 32, 'kabupaten tasikmalaya', '2020-12-18 17:00:00', NULL, NULL),
(3207, 32, 'kabupaten ciamis', '2020-12-18 17:00:00', NULL, NULL),
(3208, 32, 'kabupaten kuningan', '2020-12-18 17:00:00', NULL, NULL),
(3209, 32, 'kabupaten cirebon', '2020-12-18 17:00:00', NULL, NULL),
(3210, 32, 'kabupaten majalengka', '2020-12-18 17:00:00', NULL, NULL),
(3211, 32, 'kabupaten sumedang', '2020-12-18 17:00:00', NULL, NULL),
(3212, 32, 'kabupaten indramayu', '2020-12-18 17:00:00', NULL, NULL),
(3213, 32, 'kabupaten subang', '2020-12-18 17:00:00', NULL, NULL),
(3214, 32, 'kabupaten purwakarta', '2020-12-18 17:00:00', NULL, NULL),
(3215, 32, 'kabupaten karawang', '2020-12-18 17:00:00', NULL, NULL),
(3216, 32, 'kabupaten bekasi', '2020-12-18 17:00:00', NULL, NULL),
(3217, 32, 'kabupaten bandung barat', '2020-12-18 17:00:00', NULL, NULL),
(3218, 32, 'kabupaten pangandaran', '2020-12-18 17:00:00', NULL, NULL),
(3271, 32, 'kota bogor', '2020-12-18 17:00:00', NULL, NULL),
(3272, 32, 'kota sukabumi', '2020-12-18 17:00:00', NULL, NULL),
(3273, 32, 'kota bandung', '2020-12-18 17:00:00', NULL, NULL),
(3274, 32, 'kota cirebon', '2020-12-18 17:00:00', NULL, NULL),
(3275, 32, 'kota bekasi', '2020-12-18 17:00:00', NULL, NULL),
(3276, 32, 'kota depok', '2020-12-18 17:00:00', NULL, NULL),
(3277, 32, 'kota cimahi', '2020-12-18 17:00:00', NULL, NULL),
(3278, 32, 'kota tasikmalaya', '2020-12-18 17:00:00', NULL, NULL),
(3279, 32, 'kota banjar', '2020-12-18 17:00:00', NULL, NULL),
(3301, 33, 'kabupaten cilacap', '2020-12-18 17:00:00', NULL, NULL),
(3302, 33, 'kabupaten banyumas', '2020-12-18 17:00:00', NULL, NULL),
(3303, 33, 'kabupaten purbalingga', '2020-12-18 17:00:00', NULL, NULL),
(3304, 33, 'kabupaten banjarnegara', '2020-12-18 17:00:00', NULL, NULL),
(3305, 33, 'kabupaten kebumen', '2020-12-18 17:00:00', NULL, NULL),
(3306, 33, 'kabupaten purworejo', '2020-12-18 17:00:00', NULL, NULL),
(3307, 33, 'kabupaten wonosobo', '2020-12-18 17:00:00', NULL, NULL),
(3308, 33, 'kabupaten magelang', '2020-12-18 17:00:00', NULL, NULL),
(3309, 33, 'kabupaten boyolali', '2020-12-18 17:00:00', NULL, NULL),
(3310, 33, 'kabupaten klaten', '2020-12-18 17:00:00', NULL, NULL),
(3311, 33, 'kabupaten sukoharjo', '2020-12-18 17:00:00', NULL, NULL),
(3312, 33, 'kabupaten wonogiri', '2020-12-18 17:00:00', NULL, NULL),
(3313, 33, 'kabupaten karanganyar', '2020-12-18 17:00:00', NULL, NULL),
(3314, 33, 'kabupaten sragen', '2020-12-18 17:00:00', NULL, NULL),
(3315, 33, 'kabupaten grobogan', '2020-12-18 17:00:00', NULL, NULL),
(3316, 33, 'kabupaten blora', '2020-12-18 17:00:00', NULL, NULL),
(3317, 33, 'kabupaten rembang', '2020-12-18 17:00:00', NULL, NULL),
(3318, 33, 'kabupaten pati', '2020-12-18 17:00:00', NULL, NULL),
(3319, 33, 'kabupaten kudus', '2020-12-18 17:00:00', NULL, NULL),
(3320, 33, 'kabupaten jepara', '2020-12-18 17:00:00', NULL, NULL),
(3321, 33, 'kabupaten demak', '2020-12-18 17:00:00', NULL, NULL),
(3322, 33, 'kabupaten semarang', '2020-12-18 17:00:00', NULL, NULL),
(3323, 33, 'kabupaten temanggung', '2020-12-18 17:00:00', NULL, NULL),
(3324, 33, 'kabupaten kendal', '2020-12-18 17:00:00', NULL, NULL),
(3325, 33, 'kabupaten batang', '2020-12-18 17:00:00', NULL, NULL),
(3326, 33, 'kabupaten pekalongan', '2020-12-18 17:00:00', NULL, NULL),
(3327, 33, 'kabupaten pemalang', '2020-12-18 17:00:00', NULL, NULL),
(3328, 33, 'kabupaten tegal', '2020-12-18 17:00:00', NULL, NULL),
(3329, 33, 'kabupaten brebes', '2020-12-18 17:00:00', NULL, NULL),
(3371, 33, 'kota magelang', '2020-12-18 17:00:00', NULL, NULL),
(3372, 33, 'kota surakarta', '2020-12-18 17:00:00', NULL, NULL),
(3373, 33, 'kota salatiga', '2020-12-18 17:00:00', NULL, NULL),
(3374, 33, 'kota semarang', '2020-12-18 17:00:00', NULL, NULL),
(3375, 33, 'kota pekalongan', '2020-12-18 17:00:00', NULL, NULL),
(3376, 33, 'kota tegal', '2020-12-18 17:00:00', NULL, NULL),
(3401, 34, 'kabupaten kulon progo', '2020-12-18 17:00:00', NULL, NULL),
(3402, 34, 'kabupaten bantul', '2020-12-18 17:00:00', NULL, NULL),
(3403, 34, 'kabupaten gunung kidul', '2020-12-18 17:00:00', NULL, NULL),
(3404, 34, 'kabupaten sleman', '2020-12-18 17:00:00', NULL, NULL),
(3471, 34, 'kota yogyakarta', '2020-12-18 17:00:00', NULL, NULL),
(3501, 35, 'kabupaten pacitan', '2020-12-18 17:00:00', NULL, NULL),
(3502, 35, 'kabupaten ponorogo', '2020-12-18 17:00:00', NULL, NULL),
(3503, 35, 'kabupaten trenggalek', '2020-12-18 17:00:00', NULL, NULL),
(3504, 35, 'kabupaten tulungagung', '2020-12-18 17:00:00', NULL, NULL),
(3505, 35, 'kabupaten blitar', '2020-12-18 17:00:00', NULL, NULL),
(3506, 35, 'kabupaten kediri', '2020-12-18 17:00:00', NULL, NULL),
(3507, 35, 'kabupaten malang', '2020-12-18 17:00:00', NULL, NULL),
(3508, 35, 'kabupaten lumajang', '2020-12-18 17:00:00', NULL, NULL),
(3509, 35, 'kabupaten jember', '2020-12-18 17:00:00', NULL, NULL),
(3510, 35, 'kabupaten banyuwangi', '2020-12-18 17:00:00', NULL, NULL),
(3511, 35, 'kabupaten bondowoso', '2020-12-18 17:00:00', NULL, NULL),
(3512, 35, 'kabupaten situbondo', '2020-12-18 17:00:00', NULL, NULL),
(3513, 35, 'kabupaten probolinggo', '2020-12-18 17:00:00', NULL, NULL),
(3514, 35, 'kabupaten pasuruan', '2020-12-18 17:00:00', NULL, NULL),
(3515, 35, 'kabupaten sidoarjo', '2020-12-18 17:00:00', NULL, NULL),
(3516, 35, 'kabupaten mojokerto', '2020-12-18 17:00:00', NULL, NULL),
(3517, 35, 'kabupaten jombang', '2020-12-18 17:00:00', NULL, NULL),
(3518, 35, 'kabupaten nganjuk', '2020-12-18 17:00:00', NULL, NULL),
(3519, 35, 'kabupaten madiun', '2020-12-18 17:00:00', NULL, NULL),
(3520, 35, 'kabupaten magetan', '2020-12-18 17:00:00', NULL, NULL),
(3521, 35, 'kabupaten ngawi', '2020-12-18 17:00:00', NULL, NULL),
(3522, 35, 'kabupaten bojonegoro', '2020-12-18 17:00:00', NULL, NULL),
(3523, 35, 'kabupaten tuban', '2020-12-18 17:00:00', NULL, NULL),
(3524, 35, 'kabupaten lamongan', '2020-12-18 17:00:00', NULL, NULL),
(3525, 35, 'kabupaten gresik', '2020-12-18 17:00:00', NULL, NULL),
(3526, 35, 'kabupaten bangkalan', '2020-12-18 17:00:00', NULL, NULL),
(3527, 35, 'kabupaten sampang', '2020-12-18 17:00:00', NULL, NULL),
(3528, 35, 'kabupaten pamekasan', '2020-12-18 17:00:00', NULL, NULL),
(3529, 35, 'kabupaten sumenep', '2020-12-18 17:00:00', NULL, NULL),
(3571, 35, 'kota kediri', '2020-12-18 17:00:00', NULL, NULL),
(3572, 35, 'kota blitar', '2020-12-18 17:00:00', NULL, NULL),
(3573, 35, 'kota malang', '2020-12-18 17:00:00', NULL, NULL),
(3574, 35, 'kota probolinggo', '2020-12-18 17:00:00', NULL, NULL),
(3575, 35, 'kota pasuruan', '2020-12-18 17:00:00', NULL, NULL),
(3576, 35, 'kota mojokerto', '2020-12-18 17:00:00', NULL, NULL),
(3577, 35, 'kota madiun', '2020-12-18 17:00:00', NULL, NULL),
(3578, 35, 'kota surabaya', '2020-12-18 17:00:00', NULL, NULL),
(3579, 35, 'kota batu', '2020-12-18 17:00:00', NULL, NULL),
(3601, 36, 'kabupaten pandeglang', '2020-12-18 17:00:00', NULL, NULL),
(3602, 36, 'kabupaten lebak', '2020-12-18 17:00:00', NULL, NULL),
(3603, 36, 'kabupaten tangerang', '2020-12-18 17:00:00', NULL, NULL),
(3604, 36, 'kabupaten serang', '2020-12-18 17:00:00', NULL, NULL),
(3671, 36, 'kota tangerang', '2020-12-18 17:00:00', NULL, NULL),
(3672, 36, 'kota cilegon', '2020-12-18 17:00:00', NULL, NULL),
(3673, 36, 'kota serang', '2020-12-18 17:00:00', NULL, NULL),
(3674, 36, 'kota tangerang selatan', '2020-12-18 17:00:00', NULL, NULL),
(5101, 51, 'kabupaten jembrana', '2020-12-18 17:00:00', NULL, NULL),
(5102, 51, 'kabupaten tabanan', '2020-12-18 17:00:00', NULL, NULL),
(5103, 51, 'kabupaten badung', '2020-12-18 17:00:00', NULL, NULL),
(5104, 51, 'kabupaten gianyar', '2020-12-18 17:00:00', NULL, NULL),
(5105, 51, 'kabupaten klungkung', '2020-12-18 17:00:00', NULL, NULL),
(5106, 51, 'kabupaten bangli', '2020-12-18 17:00:00', NULL, NULL),
(5107, 51, 'kabupaten karang asem', '2020-12-18 17:00:00', NULL, NULL),
(5108, 51, 'kabupaten buleleng', '2020-12-18 17:00:00', NULL, NULL),
(5171, 51, 'kota denpasar', '2020-12-18 17:00:00', NULL, NULL),
(5201, 52, 'kabupaten lombok barat', '2020-12-18 17:00:00', NULL, NULL),
(5202, 52, 'kabupaten lombok tengah', '2020-12-18 17:00:00', NULL, NULL),
(5203, 52, 'kabupaten lombok timur', '2020-12-18 17:00:00', NULL, NULL),
(5204, 52, 'kabupaten sumbawa', '2020-12-18 17:00:00', NULL, NULL),
(5205, 52, 'kabupaten dompu', '2020-12-18 17:00:00', NULL, NULL),
(5206, 52, 'kabupaten bima', '2020-12-18 17:00:00', NULL, NULL),
(5207, 52, 'kabupaten sumbawa barat', '2020-12-18 17:00:00', NULL, NULL),
(5208, 52, 'kabupaten lombok utara', '2020-12-18 17:00:00', NULL, NULL),
(5271, 52, 'kota mataram', '2020-12-18 17:00:00', NULL, NULL),
(5272, 52, 'kota bima', '2020-12-18 17:00:00', NULL, NULL),
(5301, 53, 'kabupaten sumba barat', '2020-12-18 17:00:00', NULL, NULL),
(5302, 53, 'kabupaten sumba timur', '2020-12-18 17:00:00', NULL, NULL),
(5303, 53, 'kabupaten kupang', '2020-12-18 17:00:00', NULL, NULL),
(5304, 53, 'kabupaten timor tengah selatan', '2020-12-18 17:00:00', NULL, NULL),
(5305, 53, 'kabupaten timor tengah utara', '2020-12-18 17:00:00', NULL, NULL),
(5306, 53, 'kabupaten belu', '2020-12-18 17:00:00', NULL, NULL),
(5307, 53, 'kabupaten alor', '2020-12-18 17:00:00', NULL, NULL),
(5308, 53, 'kabupaten lembata', '2020-12-18 17:00:00', NULL, NULL),
(5309, 53, 'kabupaten flores timur', '2020-12-18 17:00:00', NULL, NULL),
(5310, 53, 'kabupaten sikka', '2020-12-18 17:00:00', NULL, NULL),
(5311, 53, 'kabupaten ende', '2020-12-18 17:00:00', NULL, NULL),
(5312, 53, 'kabupaten ngada', '2020-12-18 17:00:00', NULL, NULL),
(5313, 53, 'kabupaten manggarai', '2020-12-18 17:00:00', NULL, NULL),
(5314, 53, 'kabupaten rote ndao', '2020-12-18 17:00:00', NULL, NULL),
(5315, 53, 'kabupaten manggarai barat', '2020-12-18 17:00:00', NULL, NULL),
(5316, 53, 'kabupaten sumba tengah', '2020-12-18 17:00:00', NULL, NULL),
(5317, 53, 'kabupaten sumba barat daya', '2020-12-18 17:00:00', NULL, NULL),
(5318, 53, 'kabupaten nagekeo', '2020-12-18 17:00:00', NULL, NULL),
(5319, 53, 'kabupaten manggarai timur', '2020-12-18 17:00:00', NULL, NULL),
(5320, 53, 'kabupaten sabu raijua', '2020-12-18 17:00:00', NULL, NULL),
(5321, 53, 'kabupaten malaka', '2020-12-18 17:00:00', NULL, NULL),
(5371, 53, 'kota kupang', '2020-12-18 17:00:00', NULL, NULL),
(6101, 61, 'kabupaten sambas', '2020-12-18 17:00:00', NULL, NULL),
(6102, 61, 'kabupaten bengkayang', '2020-12-18 17:00:00', NULL, NULL),
(6103, 61, 'kabupaten landak', '2020-12-18 17:00:00', NULL, NULL),
(6104, 61, 'kabupaten mempawah', '2020-12-18 17:00:00', NULL, NULL),
(6105, 61, 'kabupaten sanggau', '2020-12-18 17:00:00', NULL, NULL),
(6106, 61, 'kabupaten ketapang', '2020-12-18 17:00:00', NULL, NULL),
(6107, 61, 'kabupaten sintang', '2020-12-18 17:00:00', NULL, NULL),
(6108, 61, 'kabupaten kapuas hulu', '2020-12-18 17:00:00', NULL, NULL),
(6109, 61, 'kabupaten sekadau', '2020-12-18 17:00:00', NULL, NULL),
(6110, 61, 'kabupaten melawi', '2020-12-18 17:00:00', NULL, NULL),
(6111, 61, 'kabupaten kayong utara', '2020-12-18 17:00:00', NULL, NULL),
(6112, 61, 'kabupaten kubu raya', '2020-12-18 17:00:00', NULL, NULL),
(6171, 61, 'kota pontianak', '2020-12-18 17:00:00', NULL, NULL),
(6172, 61, 'kota singkawang', '2020-12-18 17:00:00', NULL, NULL),
(6201, 62, 'kabupaten kotawaringin barat', '2020-12-18 17:00:00', NULL, NULL),
(6202, 62, 'kabupaten kotawaringin timur', '2020-12-18 17:00:00', NULL, NULL),
(6203, 62, 'kabupaten kapuas', '2020-12-18 17:00:00', NULL, NULL),
(6204, 62, 'kabupaten barito selatan', '2020-12-18 17:00:00', NULL, NULL),
(6205, 62, 'kabupaten barito utara', '2020-12-18 17:00:00', NULL, NULL),
(6206, 62, 'kabupaten sukamara', '2020-12-18 17:00:00', NULL, NULL),
(6207, 62, 'kabupaten lamandau', '2020-12-18 17:00:00', NULL, NULL),
(6208, 62, 'kabupaten seruyan', '2020-12-18 17:00:00', NULL, NULL),
(6209, 62, 'kabupaten katingan', '2020-12-18 17:00:00', NULL, NULL),
(6210, 62, 'kabupaten pulang pisau', '2020-12-18 17:00:00', NULL, NULL),
(6211, 62, 'kabupaten gunung mas', '2020-12-18 17:00:00', NULL, NULL),
(6212, 62, 'kabupaten barito timur', '2020-12-18 17:00:00', NULL, NULL),
(6213, 62, 'kabupaten murung raya', '2020-12-18 17:00:00', NULL, NULL),
(6271, 62, 'kota palangka raya', '2020-12-18 17:00:00', NULL, NULL),
(6301, 63, 'kabupaten tanah laut', '2020-12-18 17:00:00', NULL, NULL),
(6302, 63, 'kabupaten kota baru', '2020-12-18 17:00:00', NULL, NULL),
(6303, 63, 'kabupaten banjar', '2020-12-18 17:00:00', NULL, NULL),
(6304, 63, 'kabupaten barito kuala', '2020-12-18 17:00:00', NULL, NULL),
(6305, 63, 'kabupaten tapin', '2020-12-18 17:00:00', NULL, NULL),
(6306, 63, 'kabupaten hulu sungai selatan', '2020-12-18 17:00:00', NULL, NULL),
(6307, 63, 'kabupaten hulu sungai tengah', '2020-12-18 17:00:00', NULL, NULL),
(6308, 63, 'kabupaten hulu sungai utara', '2020-12-18 17:00:00', NULL, NULL),
(6309, 63, 'kabupaten tabalong', '2020-12-18 17:00:00', NULL, NULL),
(6310, 63, 'kabupaten tanah bumbu', '2020-12-18 17:00:00', NULL, NULL),
(6311, 63, 'kabupaten balangan', '2020-12-18 17:00:00', NULL, NULL),
(6371, 63, 'kota banjarmasin', '2020-12-18 17:00:00', NULL, NULL),
(6372, 63, 'kota banjar baru', '2020-12-18 17:00:00', NULL, NULL),
(6401, 64, 'kabupaten paser', '2020-12-18 17:00:00', NULL, NULL),
(6402, 64, 'kabupaten kutai barat', '2020-12-18 17:00:00', NULL, NULL),
(6403, 64, 'kabupaten kutai kartanegara', '2020-12-18 17:00:00', NULL, NULL),
(6404, 64, 'kabupaten kutai timur', '2020-12-18 17:00:00', NULL, NULL),
(6405, 64, 'kabupaten berau', '2020-12-18 17:00:00', NULL, NULL),
(6409, 64, 'kabupaten penajam paser utara', '2020-12-18 17:00:00', NULL, NULL),
(6411, 64, 'kabupaten mahakam hulu', '2020-12-18 17:00:00', NULL, NULL),
(6471, 64, 'kota balikpapan', '2020-12-18 17:00:00', NULL, NULL),
(6472, 64, 'kota samarinda', '2020-12-18 17:00:00', NULL, NULL),
(6474, 64, 'kota bontang', '2020-12-18 17:00:00', NULL, NULL),
(6501, 65, 'kabupaten malinau', '2020-12-18 17:00:00', NULL, NULL),
(6502, 65, 'kabupaten bulungan', '2020-12-18 17:00:00', NULL, NULL),
(6503, 65, 'kabupaten tana tidung', '2020-12-18 17:00:00', NULL, NULL),
(6504, 65, 'kabupaten nunukan', '2020-12-18 17:00:00', NULL, NULL),
(6571, 65, 'kota tarakan', '2020-12-18 17:00:00', NULL, NULL),
(7101, 71, 'kabupaten bolaang mongondow', '2020-12-18 17:00:00', NULL, NULL),
(7102, 71, 'kabupaten minahasa', '2020-12-18 17:00:00', NULL, NULL),
(7103, 71, 'kabupaten kepulauan sangihe', '2020-12-18 17:00:00', NULL, NULL),
(7104, 71, 'kabupaten kepulauan talaud', '2020-12-18 17:00:00', NULL, NULL),
(7105, 71, 'kabupaten minahasa selatan', '2020-12-18 17:00:00', NULL, NULL),
(7106, 71, 'kabupaten minahasa utara', '2020-12-18 17:00:00', NULL, NULL),
(7107, 71, 'kabupaten bolaang mongondow utara', '2020-12-18 17:00:00', NULL, NULL),
(7108, 71, 'kabupaten siau tagulandang biaro', '2020-12-18 17:00:00', NULL, NULL),
(7109, 71, 'kabupaten minahasa tenggara', '2020-12-18 17:00:00', NULL, NULL),
(7110, 71, 'kabupaten bolaang mongondow selatan', '2020-12-18 17:00:00', NULL, NULL),
(7111, 71, 'kabupaten bolaang mongondow timur', '2020-12-18 17:00:00', NULL, NULL),
(7171, 71, 'kota manado', '2020-12-18 17:00:00', NULL, NULL),
(7172, 71, 'kota bitung', '2020-12-18 17:00:00', NULL, NULL),
(7173, 71, 'kota tomohon', '2020-12-18 17:00:00', NULL, NULL),
(7174, 71, 'kota kotamobagu', '2020-12-18 17:00:00', NULL, NULL),
(7201, 72, 'kabupaten banggai kepulauan', '2020-12-18 17:00:00', NULL, NULL),
(7202, 72, 'kabupaten banggai', '2020-12-18 17:00:00', NULL, NULL),
(7203, 72, 'kabupaten morowali', '2020-12-18 17:00:00', NULL, NULL),
(7204, 72, 'kabupaten poso', '2020-12-18 17:00:00', NULL, NULL),
(7205, 72, 'kabupaten donggala', '2020-12-18 17:00:00', NULL, NULL),
(7206, 72, 'kabupaten toli-toli', '2020-12-18 17:00:00', NULL, NULL),
(7207, 72, 'kabupaten buol', '2020-12-18 17:00:00', NULL, NULL),
(7208, 72, 'kabupaten parigi moutong', '2020-12-18 17:00:00', NULL, NULL),
(7209, 72, 'kabupaten tojo una-una', '2020-12-18 17:00:00', NULL, NULL),
(7210, 72, 'kabupaten sigi', '2020-12-18 17:00:00', NULL, NULL),
(7211, 72, 'kabupaten banggai laut', '2020-12-18 17:00:00', NULL, NULL),
(7212, 72, 'kabupaten morowali utara', '2020-12-18 17:00:00', NULL, NULL),
(7271, 72, 'kota palu', '2020-12-18 17:00:00', NULL, NULL),
(7301, 73, 'kabupaten kepulauan selayar', '2020-12-18 17:00:00', NULL, NULL),
(7302, 73, 'kabupaten bulukumba', '2020-12-18 17:00:00', NULL, NULL),
(7303, 73, 'kabupaten bantaeng', '2020-12-18 17:00:00', NULL, NULL),
(7304, 73, 'kabupaten jeneponto', '2020-12-18 17:00:00', NULL, NULL),
(7305, 73, 'kabupaten takalar', '2020-12-18 17:00:00', NULL, NULL),
(7306, 73, 'kabupaten gowa', '2020-12-18 17:00:00', NULL, NULL),
(7307, 73, 'kabupaten sinjai', '2020-12-18 17:00:00', NULL, NULL),
(7308, 73, 'kabupaten maros', '2020-12-18 17:00:00', NULL, NULL),
(7309, 73, 'kabupaten pangkajene dan kepulauan', '2020-12-18 17:00:00', NULL, NULL),
(7310, 73, 'kabupaten barru', '2020-12-18 17:00:00', NULL, NULL),
(7311, 73, 'kabupaten bone', '2020-12-18 17:00:00', NULL, NULL),
(7312, 73, 'kabupaten soppeng', '2020-12-18 17:00:00', NULL, NULL),
(7313, 73, 'kabupaten wajo', '2020-12-18 17:00:00', NULL, NULL),
(7314, 73, 'kabupaten sidenreng rappang', '2020-12-18 17:00:00', NULL, NULL),
(7315, 73, 'kabupaten pinrang', '2020-12-18 17:00:00', NULL, NULL),
(7316, 73, 'kabupaten enrekang', '2020-12-18 17:00:00', NULL, NULL),
(7317, 73, 'kabupaten luwu', '2020-12-18 17:00:00', NULL, NULL),
(7318, 73, 'kabupaten tana toraja', '2020-12-18 17:00:00', NULL, NULL),
(7322, 73, 'kabupaten luwu utara', '2020-12-18 17:00:00', NULL, NULL),
(7325, 73, 'kabupaten luwu timur', '2020-12-18 17:00:00', NULL, NULL),
(7326, 73, 'kabupaten toraja utara', '2020-12-18 17:00:00', NULL, NULL),
(7371, 73, 'kota makassar', '2020-12-18 17:00:00', NULL, NULL),
(7372, 73, 'kota parepare', '2020-12-18 17:00:00', NULL, NULL),
(7373, 73, 'kota palopo', '2020-12-18 17:00:00', NULL, NULL),
(7401, 74, 'kabupaten buton', '2020-12-18 17:00:00', NULL, NULL),
(7402, 74, 'kabupaten muna', '2020-12-18 17:00:00', NULL, NULL),
(7403, 74, 'kabupaten konawe', '2020-12-18 17:00:00', NULL, NULL),
(7404, 74, 'kabupaten kolaka', '2020-12-18 17:00:00', NULL, NULL),
(7405, 74, 'kabupaten konawe selatan', '2020-12-18 17:00:00', NULL, NULL),
(7406, 74, 'kabupaten bombana', '2020-12-18 17:00:00', NULL, NULL),
(7407, 74, 'kabupaten wakatobi', '2020-12-18 17:00:00', NULL, NULL),
(7408, 74, 'kabupaten kolaka utara', '2020-12-18 17:00:00', NULL, NULL),
(7409, 74, 'kabupaten buton utara', '2020-12-18 17:00:00', NULL, NULL),
(7410, 74, 'kabupaten konawe utara', '2020-12-18 17:00:00', NULL, NULL),
(7411, 74, 'kabupaten kolaka timur', '2020-12-18 17:00:00', NULL, NULL),
(7412, 74, 'kabupaten konawe kepulauan', '2020-12-18 17:00:00', NULL, NULL),
(7413, 74, 'kabupaten muna barat', '2020-12-18 17:00:00', NULL, NULL),
(7414, 74, 'kabupaten buton tengah', '2020-12-18 17:00:00', NULL, NULL),
(7415, 74, 'kabupaten buton selatan', '2020-12-18 17:00:00', NULL, NULL),
(7471, 74, 'kota kendari', '2020-12-18 17:00:00', NULL, NULL),
(7472, 74, 'kota baubau', '2020-12-18 17:00:00', NULL, NULL),
(7501, 75, 'kabupaten boalemo', '2020-12-18 17:00:00', NULL, NULL),
(7502, 75, 'kabupaten gorontalo', '2020-12-18 17:00:00', NULL, NULL),
(7503, 75, 'kabupaten pohuwato', '2020-12-18 17:00:00', NULL, NULL),
(7504, 75, 'kabupaten bone bolango', '2020-12-18 17:00:00', NULL, NULL),
(7505, 75, 'kabupaten gorontalo utara', '2020-12-18 17:00:00', NULL, NULL),
(7571, 75, 'kota gorontalo', '2020-12-18 17:00:00', NULL, NULL),
(7601, 76, 'kabupaten majene', '2020-12-18 17:00:00', NULL, NULL),
(7602, 76, 'kabupaten polewali mandar', '2020-12-18 17:00:00', NULL, NULL),
(7603, 76, 'kabupaten mamasa', '2020-12-18 17:00:00', NULL, NULL),
(7604, 76, 'kabupaten mamuju', '2020-12-18 17:00:00', NULL, NULL),
(7605, 76, 'kabupaten mamuju utara', '2020-12-18 17:00:00', NULL, NULL),
(7606, 76, 'kabupaten mamuju tengah', '2020-12-18 17:00:00', NULL, NULL),
(8101, 81, 'kabupaten maluku tenggara barat', '2020-12-18 17:00:00', NULL, NULL),
(8102, 81, 'kabupaten maluku tenggara', '2020-12-18 17:00:00', NULL, NULL),
(8103, 81, 'kabupaten maluku tengah', '2020-12-18 17:00:00', NULL, NULL),
(8104, 81, 'kabupaten buru', '2020-12-18 17:00:00', NULL, NULL),
(8105, 81, 'kabupaten kepulauan aru', '2020-12-18 17:00:00', NULL, NULL),
(8106, 81, 'kabupaten seram bagian barat', '2020-12-18 17:00:00', NULL, NULL),
(8107, 81, 'kabupaten seram bagian timur', '2020-12-18 17:00:00', NULL, NULL),
(8108, 81, 'kabupaten maluku barat daya', '2020-12-18 17:00:00', NULL, NULL),
(8109, 81, 'kabupaten buru selatan', '2020-12-18 17:00:00', NULL, NULL),
(8171, 81, 'kota ambon', '2020-12-18 17:00:00', NULL, NULL),
(8172, 81, 'kota tual', '2020-12-18 17:00:00', NULL, NULL),
(8201, 82, 'kabupaten halmahera barat', '2020-12-18 17:00:00', NULL, NULL),
(8202, 82, 'kabupaten halmahera tengah', '2020-12-18 17:00:00', NULL, NULL),
(8203, 82, 'kabupaten kepulauan sula', '2020-12-18 17:00:00', NULL, NULL),
(8204, 82, 'kabupaten halmahera selatan', '2020-12-18 17:00:00', NULL, NULL),
(8205, 82, 'kabupaten halmahera utara', '2020-12-18 17:00:00', NULL, NULL),
(8206, 82, 'kabupaten halmahera timur', '2020-12-18 17:00:00', NULL, NULL),
(8207, 82, 'kabupaten pulau morotai', '2020-12-18 17:00:00', NULL, NULL),
(8208, 82, 'kabupaten pulau taliabu', '2020-12-18 17:00:00', NULL, NULL),
(8271, 82, 'kota ternate', '2020-12-18 17:00:00', NULL, NULL),
(8272, 82, 'kota tidore kepulauan', '2020-12-18 17:00:00', NULL, NULL),
(9101, 91, 'kabupaten fakfak', '2020-12-18 17:00:00', NULL, NULL),
(9102, 91, 'kabupaten kaimana', '2020-12-18 17:00:00', NULL, NULL),
(9103, 91, 'kabupaten teluk wondama', '2020-12-18 17:00:00', NULL, NULL),
(9104, 91, 'kabupaten teluk bintuni', '2020-12-18 17:00:00', NULL, NULL),
(9105, 91, 'kabupaten manokwari', '2020-12-18 17:00:00', NULL, NULL),
(9106, 91, 'kabupaten sorong selatan', '2020-12-18 17:00:00', NULL, NULL),
(9107, 91, 'kabupaten sorong', '2020-12-18 17:00:00', NULL, NULL),
(9108, 91, 'kabupaten raja ampat', '2020-12-18 17:00:00', NULL, NULL),
(9109, 91, 'kabupaten tambrauw', '2020-12-18 17:00:00', NULL, NULL),
(9110, 91, 'kabupaten maybrat', '2020-12-18 17:00:00', NULL, NULL),
(9111, 91, 'kabupaten manokwari selatan', '2020-12-18 17:00:00', NULL, NULL),
(9112, 91, 'kabupaten pegunungan arfak', '2020-12-18 17:00:00', NULL, NULL),
(9171, 91, 'kota sorong', '2020-12-18 17:00:00', NULL, NULL),
(9401, 94, 'kabupaten merauke', '2020-12-18 17:00:00', NULL, NULL),
(9402, 94, 'kabupaten jayawijaya', '2020-12-18 17:00:00', NULL, NULL),
(9403, 94, 'kabupaten jayapura', '2020-12-18 17:00:00', NULL, NULL),
(9404, 94, 'kabupaten nabire', '2020-12-18 17:00:00', NULL, NULL),
(9408, 94, 'kabupaten kepulauan yapen', '2020-12-18 17:00:00', NULL, NULL),
(9409, 94, 'kabupaten biak numfor', '2020-12-18 17:00:00', NULL, NULL),
(9410, 94, 'kabupaten paniai', '2020-12-18 17:00:00', NULL, NULL),
(9411, 94, 'kabupaten puncak jaya', '2020-12-18 17:00:00', NULL, NULL),
(9412, 94, 'kabupaten mimika', '2020-12-18 17:00:00', NULL, NULL),
(9413, 94, 'kabupaten boven digoel', '2020-12-18 17:00:00', NULL, NULL),
(9414, 94, 'kabupaten mappi', '2020-12-18 17:00:00', NULL, NULL),
(9415, 94, 'kabupaten asmat', '2020-12-18 17:00:00', NULL, NULL),
(9416, 94, 'kabupaten yahukimo', '2020-12-18 17:00:00', NULL, NULL),
(9417, 94, 'kabupaten pegunungan bintang', '2020-12-18 17:00:00', NULL, NULL),
(9418, 94, 'kabupaten tolikara', '2020-12-18 17:00:00', NULL, NULL),
(9419, 94, 'kabupaten sarmi', '2020-12-18 17:00:00', NULL, NULL),
(9420, 94, 'kabupaten keerom', '2020-12-18 17:00:00', NULL, NULL),
(9426, 94, 'kabupaten waropen', '2020-12-18 17:00:00', NULL, NULL),
(9427, 94, 'kabupaten supiori', '2020-12-18 17:00:00', NULL, NULL),
(9428, 94, 'kabupaten mamberamo raya', '2020-12-18 17:00:00', NULL, NULL),
(9429, 94, 'kabupaten nduga', '2020-12-18 17:00:00', NULL, NULL),
(9430, 94, 'kabupaten lanny jaya', '2020-12-18 17:00:00', NULL, NULL),
(9431, 94, 'kabupaten mamberamo tengah', '2020-12-18 17:00:00', NULL, NULL),
(9432, 94, 'kabupaten yalimo', '2020-12-18 17:00:00', NULL, NULL),
(9433, 94, 'kabupaten puncak', '2020-12-18 17:00:00', NULL, NULL),
(9434, 94, 'kabupaten dogiyai', '2020-12-18 17:00:00', NULL, NULL),
(9435, 94, 'kabupaten intan jaya', '2020-12-18 17:00:00', NULL, NULL),
(9436, 94, 'kabupaten deiyai', '2020-12-18 17:00:00', NULL, NULL),
(9471, 94, 'kota jayapura', '2020-12-18 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `set_libraries`
--

CREATE TABLE `set_libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `set_libraries`
--

INSERT INTO `set_libraries` (`id`, `category_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1001, 10, 'Administrator', '2020-12-18 17:00:00', NULL, NULL),
(1002, 10, 'User', '2020-12-18 17:00:00', NULL, NULL),
(1101, 11, 'Laki-Laki', '2020-12-18 17:00:00', NULL, NULL),
(1102, 11, 'Perempuan', '2020-12-18 17:00:00', NULL, NULL),
(1201, 12, 'Laporan Masuk', '2020-12-18 17:00:00', NULL, NULL),
(1202, 12, 'Laporan Terverifikasi', '2020-12-18 17:00:00', NULL, NULL),
(1203, 12, 'Laporan Selesai', '2020-12-18 17:00:00', NULL, NULL),
(1301, 13, 'Pengaduan', '2020-12-18 17:00:00', NULL, NULL),
(1302, 13, 'Aspirian', '2020-12-18 17:00:00', NULL, NULL),
(1303, 13, 'Permintaan Informasi', '2020-12-18 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `set_provinces`
--

CREATE TABLE `set_provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `set_provinces`
--

INSERT INTO `set_provinces` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'aceh', '2020-12-18 17:00:00', NULL, NULL),
(12, 'sumatera utara', '2020-12-18 17:00:00', NULL, NULL),
(13, 'sumatera barat', '2020-12-18 17:00:00', NULL, NULL),
(14, 'riau', '2020-12-18 17:00:00', NULL, NULL),
(15, 'jambi', '2020-12-18 17:00:00', NULL, NULL),
(16, 'sumatera selatan', '2020-12-18 17:00:00', NULL, NULL),
(17, 'bengkulu', '2020-12-18 17:00:00', NULL, NULL),
(18, 'lampung', '2020-12-18 17:00:00', NULL, NULL),
(19, 'kepulauan bangka belitung', '2020-12-18 17:00:00', NULL, NULL),
(21, 'kepulauan riau', '2020-12-18 17:00:00', NULL, NULL),
(31, 'dki jakarta', '2020-12-18 17:00:00', NULL, NULL),
(32, 'jawa barat', '2020-12-18 17:00:00', NULL, NULL),
(33, 'jawa tengah', '2020-12-18 17:00:00', NULL, NULL),
(34, 'di yogyakarta', '2020-12-18 17:00:00', NULL, NULL),
(35, 'jawa timur', '2020-12-18 17:00:00', NULL, NULL),
(36, 'banten', '2020-12-18 17:00:00', NULL, NULL),
(51, 'bali', '2020-12-18 17:00:00', NULL, NULL),
(52, 'nusa tenggara barat', '2020-12-18 17:00:00', NULL, NULL),
(53, 'nusa tenggara timur', '2020-12-18 17:00:00', NULL, NULL),
(61, 'kalimantan barat', '2020-12-18 17:00:00', NULL, NULL),
(62, 'kalimantan tengah', '2020-12-18 17:00:00', NULL, NULL),
(63, 'kalimantan selatan', '2020-12-18 17:00:00', NULL, NULL),
(64, 'kalimantan timur', '2020-12-18 17:00:00', NULL, NULL),
(65, 'kalimantan utara', '2020-12-18 17:00:00', NULL, NULL),
(71, 'sulawesi utara', '2020-12-18 17:00:00', NULL, NULL),
(72, 'sulawesi tengah', '2020-12-18 17:00:00', NULL, NULL),
(73, 'sulawesi selatan', '2020-12-18 17:00:00', NULL, NULL),
(74, 'sulawesi tenggara', '2020-12-18 17:00:00', NULL, NULL),
(75, 'gorontalo', '2020-12-18 17:00:00', NULL, NULL),
(76, 'sulawesi barat', '2020-12-18 17:00:00', NULL, NULL),
(81, 'maluku', '2020-12-18 17:00:00', NULL, NULL),
(82, 'maluku utara', '2020-12-18 17:00:00', NULL, NULL),
(91, 'papua barat', '2020-12-18 17:00:00', NULL, NULL),
(94, 'papua', '2020-12-18 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `username`, `no_tlp`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 1001, 'admin@admin.com', 'admin', '08123456789', '$2y$10$eHlSVf/aErzGCCzkWLPTDuBPD93Ytilr29EXNOyX1u5AkUV6KQXCy', NULL, '2020-12-18 17:00:00', NULL, NULL),
(2, 'User', 1002, 'user@user.com', 'user', '08123456789', '$2y$10$C8aO.4Eks4MVXzenOwZxM.XjaakvsOf9iPJkwNMG5WWwW4qws4BsS', NULL, '2020-12-18 17:00:00', NULL, NULL);

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
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar_user_id_foreign` (`user_id`),
  ADD KEY `komentar_lapor_id_foreign` (`lapor_id`);

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lapor_user_id_foreign` (`user_id`),
  ADD KEY `lapor_laporan_type_id_foreign` (`laporan_type_id`),
  ADD KEY `lapor_location_id_foreign` (`location_id`),
  ADD KEY `lapor_instansi_tujuan_id_foreign` (`instansi_tujuan_id`),
  ADD KEY `lapor_category_id_foreign` (`category_id`),
  ADD KEY `lapor_status_id_foreign` (`status_id`);

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
-- Indexes for table `set_categories`
--
ALTER TABLE `set_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_cities`
--
ALTER TABLE `set_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_cities_province_id_foreign` (`province_id`);

--
-- Indexes for table `set_libraries`
--
ALTER TABLE `set_libraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_libraries_category_id_foreign` (`category_id`);

--
-- Indexes for table `set_provinces`
--
ALTER TABLE `set_provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `set_categories`
--
ALTER TABLE `set_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `set_cities`
--
ALTER TABLE `set_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9472;

--
-- AUTO_INCREMENT for table `set_libraries`
--
ALTER TABLE `set_libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1304;

--
-- AUTO_INCREMENT for table `set_provinces`
--
ALTER TABLE `set_provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_lapor_id_foreign` FOREIGN KEY (`lapor_id`) REFERENCES `lapor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `komentar_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lapor`
--
ALTER TABLE `lapor`
  ADD CONSTRAINT `lapor_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lapor_instansi_tujuan_id_foreign` FOREIGN KEY (`instansi_tujuan_id`) REFERENCES `set_provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lapor_laporan_type_id_foreign` FOREIGN KEY (`laporan_type_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lapor_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `set_cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lapor_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lapor_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `set_cities`
--
ALTER TABLE `set_cities`
  ADD CONSTRAINT `set_cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `set_provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `set_libraries`
--
ALTER TABLE `set_libraries`
  ADD CONSTRAINT `set_libraries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `set_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `set_libraries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
