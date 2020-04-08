-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2020 pada 03.40
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel2020-c-g7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `jenis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `id_kategori`, `jenis`, `type`, `jumlah`, `created_at`, `updated_at`) VALUES
(6, 2, 'SAMSUNG', 'J1', '23', '2020-04-07 15:50:26', '2020-04-07 17:43:24'),
(7, 2, 'SAMSUNG', 'J2', '10', '2020-04-07 15:50:39', '2020-04-07 15:50:39'),
(8, 2, 'SAMSUNG', 'J4', '44', '2020-04-07 15:50:50', '2020-04-07 17:43:29'),
(9, 2, 'SAMSUNG', 'J5', '10', '2020-04-07 15:51:00', '2020-04-07 15:51:00'),
(10, 2, 'SAMSUNG', 'J6', '32', '2020-04-07 15:51:12', '2020-04-07 17:43:36'),
(11, 2, 'SAMSUNG', 'J7', '10', '2020-04-07 15:51:22', '2020-04-07 15:51:22'),
(12, 2, 'IPHONE', 'IPHONE 4', '21', '2020-04-07 15:51:50', '2020-04-07 17:43:45'),
(13, 2, 'IPHONE', 'IPHONE 5', '15', '2020-04-07 15:51:59', '2020-04-07 17:43:51'),
(14, 2, 'IPHONE', 'IPHONE 6', '25', '2020-04-07 15:52:09', '2020-04-07 17:49:31'),
(15, 2, 'IPHONE', 'IPHONE 7', '10', '2020-04-07 15:52:25', '2020-04-07 15:52:25'),
(16, 2, 'IPHONE', 'IPHONE 10', '10', '2020-04-07 15:52:36', '2020-04-07 15:52:36'),
(17, 2, 'OPPO', 'A37', '10', '2020-04-07 16:05:10', '2020-04-07 16:05:10'),
(18, 2, 'OPPO', 'A3S', '3', '2020-04-07 16:05:19', '2020-04-07 17:49:37'),
(19, 2, 'OPPO', 'F1', '10', '2020-04-07 16:05:29', '2020-04-07 16:05:29'),
(20, 2, 'OPPO', 'OPPO 5', '10', '2020-04-07 16:05:48', '2020-04-07 16:05:48'),
(21, 2, 'REALME', 'C1', '10', '2020-04-07 16:07:44', '2020-04-07 16:07:44'),
(22, 2, 'REALME', 'C2', '10', '2020-04-07 16:07:55', '2020-04-07 16:07:55'),
(24, 2, 'REALME', 'C3', '10', '2020-04-07 16:08:16', '2020-04-07 16:08:16'),
(25, 2, 'REALME', '3 PRO', '10', '2020-04-07 16:08:30', '2020-04-07 16:08:30'),
(26, 2, 'REALME', '3', '10', '2020-04-07 16:08:38', '2020-04-07 16:08:38'),
(27, 2, 'REALME', '5 PRO', '10', '2020-04-07 16:08:49', '2020-04-07 16:08:49'),
(28, 2, 'REALME', '5', '10', '2020-04-07 16:08:55', '2020-04-07 16:08:55'),
(29, 2, 'XIAOMI', 'NOTE 1', '10', '2020-04-07 16:09:40', '2020-04-07 16:09:40'),
(30, 2, 'XIAOMI', 'NOTE 2', '10', '2020-04-07 16:09:58', '2020-04-07 16:09:58'),
(31, 2, 'XIAOMI', 'NOTE 3', '10', '2020-04-07 16:10:09', '2020-04-07 16:10:09'),
(32, 2, 'XIAOMI', 'NOTE 4', '10', '2020-04-07 16:10:21', '2020-04-07 16:10:21'),
(33, 2, 'XIAOMI', 'NOTE 5', '10', '2020-04-07 16:10:30', '2020-04-07 16:10:30'),
(34, 2, 'XIAOMI', 'NOTE 7', '10', '2020-04-07 16:10:40', '2020-04-07 16:10:40'),
(35, 2, 'XIAOMI', 'NOTE 8', '10', '2020-04-07 16:10:50', '2020-04-07 16:10:50'),
(36, 1, 'LENOVO', 'THINKPAD I3', '10', '2020-04-07 16:12:47', '2020-04-07 16:12:47'),
(37, 1, 'LENOVO', 'THINKPAD I5', '10', '2020-04-07 16:12:58', '2020-04-07 16:12:58'),
(38, 1, 'LENOVO', 'THINKPAD I7', '10', '2020-04-07 16:13:12', '2020-04-07 16:13:20'),
(39, 1, 'LENOVO', 'LEGION I3', '10', '2020-04-07 16:13:41', '2020-04-07 16:13:41'),
(40, 1, 'LENOVO', 'LEGION I5', '10', '2020-04-07 16:13:55', '2020-04-07 16:13:55'),
(41, 1, 'LENOVO', 'LEGION I7', '10', '2020-04-07 16:14:09', '2020-04-07 16:14:09'),
(42, 1, 'LENOVO', 'LEGION I9', '10', '2020-04-07 16:14:21', '2020-04-07 16:14:21'),
(43, 1, 'ACER', 'ASPIRE I3', '10', '2020-04-07 16:14:39', '2020-04-07 16:14:39'),
(44, 1, 'ACER', 'ASPIRE I5', '10', '2020-04-07 16:14:47', '2020-04-07 16:14:55'),
(45, 1, 'ACER', 'ASPIRE I7', '10', '2020-04-07 16:15:04', '2020-04-07 16:15:04'),
(46, 1, 'ASUS', 'ROG I3', '10', '2020-04-07 16:15:17', '2020-04-07 16:15:17'),
(47, 1, 'ASUS', 'ROG I5', '10', '2020-04-07 16:15:25', '2020-04-07 16:15:25'),
(48, 1, 'ASUS', 'ROG I7', '10', '2020-04-07 16:15:39', '2020-04-07 16:15:39'),
(49, 1, 'ASUS', 'ROG I9', '10', '2020-04-07 16:15:52', '2020-04-07 16:15:52'),
(50, 1, 'HP', 'PAVELION I3', '10', '2020-04-07 16:16:11', '2020-04-07 16:16:11'),
(51, 1, 'HP', 'PAVELION I5', '10', '2020-04-07 16:16:19', '2020-04-07 16:16:19'),
(52, 1, 'HP', 'PAVELION I7', '10', '2020-04-07 16:16:33', '2020-04-07 16:16:33'),
(53, 2, 'NOKIA', 'E1', '10', '2020-04-07 16:16:53', '2020-04-07 16:16:53'),
(54, 2, 'NOKIA', 'E2', '10', '2020-04-07 16:17:00', '2020-04-07 16:17:00'),
(55, 2, 'NOKIA', 'E3', '10', '2020-04-07 16:17:08', '2020-04-07 16:17:08'),
(56, 2, 'NOKIA', 'E4', '10', '2020-04-07 16:17:16', '2020-04-07 16:17:16'),
(57, 2, 'NOKIA', 'E5', '10', '2020-04-07 16:17:23', '2020-04-07 16:17:23'),
(58, 2, 'NOKIA', 'E1000', '10', '2020-04-07 16:17:33', '2020-04-07 16:17:33'),
(59, 2, 'VIVO', 'S1', '10', '2020-04-07 16:18:11', '2020-04-07 16:18:11'),
(60, 2, 'VIVO', 'S3', '10', '2020-04-07 16:18:20', '2020-04-07 16:18:20'),
(61, 2, 'VIVO', 'S5', '10', '2020-04-07 16:18:31', '2020-04-07 16:18:31'),
(62, 2, 'VIVO', 'Y1', '10', '2020-04-07 16:18:39', '2020-04-07 16:18:39'),
(63, 2, 'VIVO', 'Z1', '10', '2020-04-07 16:18:47', '2020-04-07 16:18:47'),
(64, 1, 'DELL', 'I3', '10', '2020-04-07 17:41:03', '2020-04-07 17:41:03'),
(65, 1, 'DELL', 'I5', '10', '2020-04-07 17:41:12', '2020-04-07 17:41:12'),
(66, 1, 'DELL', 'I7', '10', '2020-04-07 17:41:20', '2020-04-07 17:41:20'),
(67, 2, 'SAMSUNG', 'S1', '10', '2020-04-07 17:41:46', '2020-04-07 17:41:46'),
(68, 2, 'SAMSUNG', 'S2', '10', '2020-04-07 17:41:55', '2020-04-07 17:41:55'),
(69, 2, 'SAMSUNG', 'S3', '19', '2020-04-07 17:42:05', '2020-04-07 17:42:05'),
(70, 2, 'SAMSUNG', 'S4', '32', '2020-04-07 17:42:20', '2020-04-07 17:42:20'),
(71, 2, 'SAMSUNG', 'S5', '43', '2020-04-07 17:42:32', '2020-04-07 17:42:32'),
(72, 2, 'SAMSUNG', 'S6', '16', '2020-04-07 17:42:44', '2020-04-07 17:42:44'),
(73, 2, 'SAMSUNG', 'S7', '11', '2020-04-07 17:42:54', '2020-04-07 17:42:54'),
(74, 2, 'SAMSUNG', 'S8', '30', '2020-04-07 17:43:15', '2020-04-07 17:43:15'),
(75, 1, 'ACER', 'PREDATOR I3', '12', '2020-04-07 17:44:32', '2020-04-07 17:44:32'),
(76, 1, 'ACER', 'PREDATOR I5', '27', '2020-04-07 17:44:46', '2020-04-07 17:44:46'),
(77, 1, 'ACER', 'PREDATOR I7', '26', '2020-04-07 17:44:59', '2020-04-07 17:44:59'),
(78, 1, 'ACER', 'PREDATOR I9', '17', '2020-04-07 17:45:11', '2020-04-07 17:45:20'),
(79, 1, 'ASUS', 'TUF I3', '40', '2020-04-07 17:46:21', '2020-04-07 17:46:21'),
(80, 1, 'ASUS', 'TUF I5', '20', '2020-04-07 17:46:37', '2020-04-07 17:46:37'),
(81, 1, 'ASUS', 'TUF I7', '23', '2020-04-07 17:46:52', '2020-04-07 17:46:52'),
(82, 1, 'MSI', 'GL6 I3', '11', '2020-04-07 17:47:46', '2020-04-07 17:47:46'),
(83, 1, 'MSI', 'GL6 I5', '28', '2020-04-07 17:48:00', '2020-04-07 17:48:00'),
(84, 1, 'MSI', 'GL6 I7', '8', '2020-04-07 17:48:11', '2020-04-07 17:48:11'),
(85, 2, 'ASUS', 'ZENFONE 1', '3', '2020-04-07 17:48:35', '2020-04-07 17:48:35'),
(86, 2, 'ASUS', 'ZENFONE 2', '7', '2020-04-07 17:48:44', '2020-04-07 17:48:44'),
(87, 2, 'ASUS', 'ZENFONE GO', '2', '2020-04-07 17:48:54', '2020-04-07 17:48:54'),
(88, 2, 'ASUS', 'ZENFONE 5', '16', '2020-04-07 17:49:12', '2020-04-07 17:49:12'),
(89, 1, 'ACER', 'NITRO 10 I3', '23', '2020-04-07 17:50:05', '2020-04-07 17:50:05'),
(90, 1, 'ACER', 'NITRO 10 I5', '18', '2020-04-07 17:50:15', '2020-04-07 17:50:15'),
(91, 1, 'ACER', 'NITRO 10 I7', '28', '2020-04-07 17:50:25', '2020-04-07 17:50:34'),
(92, 1, 'APPLE', 'MACBOOK 5', '12', '2020-04-07 17:51:31', '2020-04-07 17:51:31'),
(93, 1, 'APPLE', 'MACBOOK PRO', '14', '2020-04-07 17:51:52', '2020-04-07 17:51:52'),
(94, 1, 'APPLE', 'MACBOOK 13', '26', '2020-04-07 17:52:18', '2020-04-07 17:52:18'),
(95, 1, 'APPLE', 'MACBOOK AIR', '30', '2020-04-07 17:52:43', '2020-04-07 17:52:43'),
(96, 2, 'REDMI', 'REDMI 3', '12', '2020-04-07 17:53:30', '2020-04-07 17:53:30'),
(97, 2, 'REDMI', 'REDMI 5', '21', '2020-04-07 17:53:40', '2020-04-07 17:53:40'),
(98, 2, 'REDMI', 'REDMI 7', '9', '2020-04-07 17:53:56', '2020-04-07 17:53:56'),
(99, 1, 'RAZER', 'BLADE I3', '10', '2020-04-07 17:56:21', '2020-04-07 17:56:21'),
(100, 1, 'RAZER', 'BLADE I5', '5', '2020-04-07 17:56:41', '2020-04-07 17:56:41'),
(101, 1, 'RAZER', 'BLADE I7', '1', '2020-04-07 17:56:55', '2020-04-07 17:56:55'),
(102, 1, 'RAZER', 'BLADE I9', '8', '2020-04-07 17:57:14', '2020-04-07 17:57:14'),
(103, 1, 'GYGABYTE', 'AERO I3', '3', '2020-04-07 17:58:08', '2020-04-07 17:58:08'),
(104, 1, 'GYGABYTE', 'AERO I5', '5', '2020-04-07 17:58:20', '2020-04-07 17:58:20'),
(105, 1, 'GYGABYTE', 'AERO I7', '6', '2020-04-07 17:58:39', '2020-04-07 17:58:39'),
(106, 1, 'GYGABYTE', 'AERO I9', '18', '2020-04-07 17:58:56', '2020-04-07 17:58:56'),
(107, 1, 'LENOVO', 'IDEAPED I3', '7', '2020-04-07 17:59:21', '2020-04-07 17:59:21'),
(108, 1, 'LENOVO', 'IDEAPED I5', '11', '2020-04-07 17:59:30', '2020-04-07 17:59:30'),
(109, 1, 'LENOVO', 'IDEAPED I7', '19', '2020-04-07 17:59:46', '2020-04-07 17:59:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_kategori`
--

CREATE TABLE `barang_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_kategori`
--

INSERT INTO `barang_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', '2020-04-07 15:40:09', '2020-04-07 15:40:09'),
(2, 'Handphone', '2020-04-07 15:40:16', '2020-04-07 15:40:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `jabatan`, `no_hp`, `created_at`, `updated_at`) VALUES
(2, 'luluk', 'tegal', 'General Manager', '08788677566', '2020-04-01 06:40:23', '2020-04-06 06:57:32'),
(3, 'jonatan alwi', 'Tegal', 'Manager', '08788677568', '2020-04-06 03:47:09', '2020-04-07 06:24:03'),
(4, 'widiyastuti', 'Pemalang', 'Staff', '08788677567', '2020-04-06 03:47:46', '2020-04-06 03:47:46'),
(5, 'Bagas Adit', 'Tegal', 'General Manager', '08788679568', '2020-04-06 03:48:27', '2020-04-06 03:48:27'),
(6, 'Cabeya Laosita', 'Pekalongan', 'Staff', '08788077566', '2020-04-06 03:49:08', '2020-04-06 03:49:08'),
(7, 'Ardan Ghovur', 'Pemalang', 'Staff', '08788657568', '2020-04-06 03:59:18', '2020-04-06 03:59:18'),
(8, 'lutfia', 'Pekalongan', 'Staff', '08788697566', '2020-04-06 06:17:44', '2020-04-06 06:17:44'),
(9, 'jaheya katumbara', 'Tegal', 'General Manager', '08788677560', '2020-04-06 06:18:33', '2020-04-06 06:18:33'),
(10, 'Serehana Wibisono', 'Pemalang', 'Staff', '08788677568', '2020-04-06 06:19:20', '2020-04-06 06:19:20'),
(11, 'Samoel', 'Jakarta', 'Manager', '08788677569', '2020-04-06 06:20:05', '2020-04-06 06:20:05'),
(12, 'Adit Pratama', 'Pekalongan', 'Admin', '08768282751', '2020-04-06 06:20:36', '2020-04-06 06:50:08'),
(13, 'Kusima', 'Pemalang', 'Staff', '08588677566', '2020-04-06 06:21:02', '2020-04-06 06:21:02'),
(14, 'Luna Maya', 'Jakarta', 'General Manager', '08788677565', '2020-04-06 06:21:22', '2020-04-06 06:21:22'),
(15, 'jonatan Kristin', 'Tegal', 'Staff', '08788677562', '2020-04-06 06:21:53', '2020-04-06 06:22:03'),
(16, 'Sutiti', 'Jakarta', 'Staff', '08788677561', '2020-04-06 06:22:26', '2020-04-06 06:22:26'),
(17, 'Bubia', 'Tegal', 'Staff', '08788607562', '2020-04-06 06:22:44', '2020-04-06 06:22:44'),
(18, 'Sekar larasati', 'Batam', 'Staff', '08788677567', '2020-04-06 06:23:09', '2020-04-06 06:23:09'),
(19, 'Rima Dwik S', 'Batang', 'Admin', '08788677561', '2020-04-06 06:23:41', '2020-04-06 06:50:28'),
(20, 'Suzanah', 'Jakarta', 'Staff', '08768282751', '2020-04-06 06:24:16', '2020-04-06 06:24:43'),
(21, 'luluur', 'Dipatikur', 'Staff', '08788677560', '2020-04-06 06:25:30', '2020-04-06 06:25:30'),
(22, 'Buncit', 'Pekalongan', 'Staff', '08768282755', '2020-04-06 06:25:55', '2020-04-06 06:25:55'),
(23, 'Komala', 'Gondang', 'Staff', '087682827526', '2020-04-06 06:26:20', '2020-04-06 06:26:20'),
(24, 'Rizqi Syukron', 'Pemalang', 'Staff', '08768282752', '2020-04-06 06:26:47', '2020-04-06 06:26:47'),
(25, 'Putpitasari', 'Pekalongan', 'General Manager', '08788677560', '2020-04-06 06:27:00', '2020-04-06 06:27:00'),
(26, 'lutfiani', 'Pemalang', 'Staff', '08788677561', '2020-04-06 06:27:10', '2020-04-06 06:27:10'),
(27, 'jojo', 'Pemalang', 'Staff', '08788677568', '2020-04-06 06:27:23', '2020-04-06 06:27:23'),
(28, 'sari', 'Pemalang', 'Staff', '08788677567', '2020-04-06 06:27:39', '2020-04-06 06:27:39'),
(29, 'widiya', 'Pemalang', 'General Manager', '08768282752', '2020-04-06 06:28:05', '2020-04-06 06:28:05'),
(30, 'Aditya', 'Surabaya', 'Staff', '08768282750', '2020-04-06 06:28:23', '2020-04-07 07:08:43'),
(31, 'Rizqi Novrianda', 'Aceh', 'General Manager', '08788677561', '2020-04-06 06:28:49', '2020-04-06 06:28:49'),
(32, 'Imam', 'Pemalang', 'Staff', '08788677561', '2020-04-06 06:29:06', '2020-04-06 06:29:06'),
(33, 'Amin', 'Tegal', 'Staff', '08788677564', '2020-04-06 06:29:18', '2020-04-06 06:29:18'),
(34, 'Zoni', 'Jakarta', 'Staff', '08768282751', '2020-04-06 06:29:35', '2020-04-06 06:29:35'),
(35, 'Esatan', 'tegal', 'General Manager', '08788677561', '2020-04-06 06:30:06', '2020-04-06 06:30:06'),
(36, 'Maulana', 'Pemalang', 'Staff', '08788677567', '2020-04-06 06:30:19', '2020-04-06 06:30:19'),
(37, 'Diki', 'Tegal', 'Staff', '08788677560', '2020-04-06 06:30:34', '2020-04-06 06:30:34'),
(38, 'Muslim', 'Pekalongan', 'Manager', '08788677563', '2020-04-06 06:30:52', '2020-04-06 06:30:52'),
(39, 'Cita', 'Pemalang', 'Staff', '08788677562', '2020-04-06 06:31:04', '2020-04-06 06:31:04'),
(40, 'desi', 'Tegal', 'Staff', '08788677568', '2020-04-06 06:31:16', '2020-04-06 06:31:16'),
(41, 'Maido', 'Pemalang', 'Staff', '08768282751', '2020-04-06 06:31:30', '2020-04-06 06:31:30'),
(42, 'Risma', 'Tegal', 'General Manager', '08768282752', '2020-04-06 06:31:46', '2020-04-06 06:31:46'),
(43, 'Iyan', 'Tegal', 'Staff', '08788677562', '2020-04-06 06:32:00', '2020-04-06 06:32:00'),
(44, 'Indri', 'Pemalang', 'Staff', '08788677560', '2020-04-06 06:32:11', '2020-04-06 06:32:11'),
(45, 'Anisa', 'Pemalang', 'Staff', '08788677567', '2020-04-06 06:32:28', '2020-04-06 06:32:28'),
(46, 'Ismi', 'Pekalongan', 'Staff', '08788677564', '2020-04-06 06:32:50', '2020-04-06 06:32:50'),
(47, 'Endi', 'Tegal', 'Staff', '08788677568', '2020-04-06 06:33:06', '2020-04-06 06:33:06'),
(48, 'Fahtur', 'Pemalang', 'Staff', '08768282752', '2020-04-06 06:33:17', '2020-04-06 06:33:17'),
(49, 'Gigih', 'Tegal', 'Staff', '08768282751', '2020-04-06 06:33:28', '2020-04-06 06:33:28'),
(50, 'Henois', 'Pemalang', 'Staff', '08788677564', '2020-04-06 06:33:43', '2020-04-06 06:33:43'),
(51, 'Ivan', 'Pemalang', 'Manager', '08788677560', '2020-04-06 06:33:57', '2020-04-06 06:33:57'),
(52, 'Jaka', 'Tegal', 'Staff', '08768282752', '2020-04-06 06:34:23', '2020-04-06 06:34:23'),
(53, 'Kanto', 'Jakarta', 'General Manager', '08788677567', '2020-04-06 06:34:38', '2020-04-06 06:34:38'),
(54, 'Lufita', 'Pekalongan', 'Staff', '08788677563', '2020-04-06 06:34:56', '2020-04-06 06:34:56'),
(55, 'Mamet', 'Pemalang', 'Staff', '08788677561', '2020-04-06 06:35:07', '2020-04-06 06:35:07'),
(56, 'Novita', 'Tegal', 'Staff', '08788677568', '2020-04-06 06:35:18', '2020-04-06 06:35:18'),
(57, 'Orin', 'Tegal', 'General Manager', '08768282751', '2020-04-06 06:35:30', '2020-04-06 06:35:30'),
(58, 'Qurnqen', 'Tegal', 'General Manager', '08788677560', '2020-04-06 06:35:45', '2020-04-06 06:35:45'),
(59, 'Rahmah', 'Bandung', 'Manager', '08788677568', '2020-04-06 06:36:10', '2020-04-06 06:36:10'),
(60, 'Santo', 'Tegal', 'Manager', '08788677565', '2020-04-06 06:36:30', '2020-04-06 06:36:30'),
(61, 'Tumiwa', 'pekalongan', 'Staff', '08768282751', '2020-04-06 06:36:47', '2020-04-06 06:36:47'),
(62, 'Ujang', 'Pemalang', 'Staff', '08788677567', '2020-04-06 06:36:59', '2020-04-06 06:36:59'),
(63, 'Vivi', 'Jakarta', 'Manager', '08788677561', '2020-04-06 06:37:28', '2020-04-06 06:37:28'),
(64, 'Warsinih', 'Pemalang', 'General Manager', '08768282752', '2020-04-06 06:37:38', '2020-04-06 06:37:38'),
(65, 'Xam', 'Pemalang', 'Staff', '08788677563', '2020-04-06 06:37:53', '2020-04-06 06:37:53'),
(66, 'Yayang', 'Tegal', 'Manager', '08768282753', '2020-04-06 06:38:05', '2020-04-06 06:38:05'),
(67, 'Zainudin', 'Pekalongan', 'Staff', '08788677560', '2020-04-06 06:38:20', '2020-04-06 06:38:20'),
(68, 'Andika', 'Batam', 'General Manager', '08788677568', '2020-04-06 06:38:45', '2020-04-06 06:38:45'),
(69, 'Bubu', 'Tegal', 'Staff', '08788677561', '2020-04-06 06:38:55', '2020-04-06 06:38:55'),
(70, 'Cantika riski', 'Tegal', 'Staff', '08788677567', '2020-04-06 06:39:08', '2020-04-06 06:39:08'),
(71, 'Deswita', 'Pekalongan', 'Manager', '08788677562', '2020-04-06 06:39:26', '2020-04-06 06:39:26'),
(72, 'Encak', 'Purbalingga', 'General Manager', '08768282751', '2020-04-06 06:39:50', '2020-04-06 06:39:50'),
(73, 'fidziah', 'Pekalongan', 'General Manager', '08788677567', '2020-04-06 06:40:17', '2020-04-06 06:40:17'),
(74, 'Galuh Naga', 'Tegal', 'Staff', '08768282752', '2020-04-06 06:40:30', '2020-04-06 06:40:30'),
(75, 'Hanif', 'Tegal', 'Staff', '08788677560', '2020-04-06 06:40:40', '2020-04-06 06:40:40'),
(76, 'Ikang', 'Pemalang', 'Staff', '08788677560', '2020-04-06 06:41:21', '2020-04-06 06:41:21'),
(77, 'Junedi Abdul Mukti', 'Pemalang', 'Staff', '08768282752', '2020-04-06 06:41:37', '2020-04-06 06:41:37'),
(78, 'Kurdiandi', 'Tegal', 'Staff', '08788677568', '2020-04-06 06:41:55', '2020-04-06 06:41:55'),
(79, 'Lamina Urami', 'Pemalang', 'Staff', '08788677561', '2020-04-06 06:42:19', '2020-04-06 06:42:19'),
(80, 'Nurul janah', 'Pemalang', 'Manager', '08788677567', '2020-04-06 06:42:33', '2020-04-06 06:42:33'),
(81, 'Okta', 'Tegal', 'Staff', '08768282751', '2020-04-06 06:42:48', '2020-04-06 06:42:48'),
(82, 'Putri', 'Pekalongan', 'Staff', '08788677568', '2020-04-06 06:43:03', '2020-04-06 06:43:03'),
(83, 'Qila', 'Tegal', 'Asisten', '08768282752', '2020-04-06 06:43:44', '2020-04-06 06:43:44'),
(84, 'Robi Bahar', 'Pekalongan', 'Asisten', '08788677561', '2020-04-06 06:44:08', '2020-04-06 06:44:08'),
(85, 'Sunia', 'Pemalang', 'Manager', '08768282751', '2020-04-06 06:44:31', '2020-04-06 06:44:31'),
(86, 'Tabirin', 'Tegal', 'Staff', '08788677560', '2020-04-06 06:44:42', '2020-04-06 06:44:42'),
(87, 'Utari', 'Pemalang', 'General Manager', '08788677567', '2020-04-06 06:44:55', '2020-04-06 06:44:55'),
(88, 'Valentino', 'Jakarta', 'Staff', '08768282751', '2020-04-06 06:45:10', '2020-04-06 06:45:10'),
(89, 'Wahdah', 'Pemalang', 'Manager', '08788677560', '2020-04-06 06:45:23', '2020-04-06 06:45:23'),
(90, 'Xiayo', 'Pekalongan', 'Manager', '08768282752', '2020-04-06 06:45:39', '2020-04-06 06:45:39'),
(91, 'Yanuar', 'Tegal', 'Staff', '08788677560', '2020-04-06 06:45:55', '2020-04-06 06:45:55'),
(92, 'Zabiyah', 'Tegal', 'Staff', '08768282752', '2020-04-06 06:46:16', '2020-04-06 06:46:16'),
(93, 'Fauzan', 'Jakarta', 'Manager', '08788677561', '2020-04-06 06:46:28', '2020-04-06 06:46:28'),
(94, 'Jalanid', 'Pemalang', 'Manager', '08788677567', '2020-04-06 06:46:43', '2020-04-06 06:46:43'),
(95, 'Funila', 'Jakarta', 'Staff', '08768282752', '2020-04-06 06:46:58', '2020-04-06 06:46:58'),
(96, 'Bisma', 'Jakarta', 'General Manager', '08788677561', '2020-04-06 06:47:11', '2020-04-06 06:47:11'),
(97, 'Fikri', 'Batang', 'Asisten', '08788677568', '2020-04-06 06:47:32', '2020-04-06 06:47:32'),
(98, 'Obit', 'Pemalang', 'Staff', '08788677567', '2020-04-06 06:47:54', '2020-04-06 06:47:54'),
(99, 'Putu Ayu', 'Jakarta', 'Staff', '08768282751', '2020-04-06 06:48:28', '2020-04-06 06:48:28'),
(100, 'Joker Tunas Kelapa', 'Pekalongan', 'Pembantu', '08768282751', '2020-04-06 06:49:15', '2020-04-06 06:49:46'),
(101, 'Royco', 'Tegal', 'Admin', '08788677560', '2020-04-06 06:51:50', '2020-04-06 06:51:50'),
(102, 'wulan', 'Tegal', 'General Manager', '08788677568', '2020-04-06 06:52:05', '2020-04-06 06:52:05'),
(103, 'Bambang', 'Pemalang', 'Staff', '08788677568', '2020-04-06 06:52:15', '2020-04-06 06:52:15'),
(104, 'Anju', 'Pekalongan', 'General Manager', '08788677560', '2020-04-06 06:54:15', '2020-04-06 06:54:15'),
(106, 'Ericolep', 'Tegal', 'General Manager', '08768282751', '2020-04-06 06:54:57', '2020-04-06 06:54:57'),
(107, 'Vutina', 'Pekalongan', 'Staff', '08788677560', '2020-04-06 06:55:30', '2020-04-06 06:55:30'),
(108, 'Anisa duju', 'Pemalang', 'Staff', '08788677561', '2020-04-06 06:55:44', '2020-04-06 06:55:44'),
(109, 'Pratama', 'Pemalang', 'Admin', '08768282751', '2020-04-06 06:56:02', '2020-04-06 06:56:02'),
(110, 'Prakoso', 'Tegal', 'Asisten', '08788677568', '2020-04-06 06:56:13', '2020-04-06 06:56:13'),
(111, 'Rizqi Putpitasari', 'Pemalang', 'General Manager', '08788677567', '2020-04-06 23:49:41', '2020-04-06 23:49:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_24_093114_create_barang_table', 1),
(2, '2020_03_24_142441_create_karyawan_table', 1),
(3, '2020_03_24_142509_create_pelanggan_table', 1),
(4, '2020_04_01_003857_create_transaksis_table', 1),
(5, '2020_04_01_011144_create_barang_kategoris_table', 1),
(6, '2020_04_01_021615_add_id_kategori_to_barang', 1),
(7, '2020_04_01_035028_update_foreign_type_to_transaksi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Wulandari saputrii', 'Tegal', '082387487541', '2020-03-24 19:20:58', '2020-03-24 22:18:45'),
(2, 'Kholifah', 'Tegal', '087793722770', '2020-03-24 19:21:43', '2020-03-24 19:46:08'),
(3, 'Bagus pratama', 'Brebes', '085792792777', '2020-03-24 19:22:30', '2020-03-24 19:46:18'),
(5, 'Abdullah', 'Brebes', '082536213718', '2020-03-24 22:53:24', '2020-03-24 22:53:24'),
(6, 'Muarofah', 'Mejasem, Tegal', '082662612277', '2020-03-31 22:17:14', '2020-03-31 22:17:14'),
(7, 'Nasab Saptono', 'Psr. Jend. A. Yani No. 923, Padangpanjang 46645, SulTeng', '084525733012', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(8, 'Latif Laswi Iswahyudi', 'Jr. Ahmad Dahlan No. 367, Salatiga 37955, NTT', '082808261064', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(9, 'Lili Sarah Suartini S.IP', 'Psr. Sampangan No. 736, Pasuruan 99338, SumSel', '082342805730', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(10, 'Kenari Bambang Simbolon S.T.', 'Ds. Kalimalang No. 286, Administrasi Jakarta Pusat 55948, NTT', '087781028539', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(11, 'Ibrani Putra S.E.I', 'Dk. Jagakarsa No. 467, Sorong 33616, SulTra', '081282545093', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(12, 'Chelsea Laila Prastuti', 'Dk. Sutarto No. 678, Cilegon 72726, JaTim', '085803491724', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(13, 'Michelle Oktaviani', 'Ds. Bank Dagang Negara No. 646, Bukittinggi 87994, SulSel', '080581455079', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(14, 'Hamima Halimah S.Gz', 'Jln. Merdeka No. 817, Banjarbaru 54234, DIY', '087569732732', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(15, 'Melinda Silvia Andriani S.Sos', 'Gg. Acordion No. 756, Subulussalam 94503, SulTeng', '083357456172', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(16, 'Ina Oktaviani M.M.', 'Jr. Ters. Pasir Koja No. 556, Medan 90322, JaBar', '087714370031', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(17, 'Jati Prabowo', 'Ds. Tangkuban Perahu No. 883, Dumai 12193, DKI', '082983551897', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(18, 'Widya Laila Padmasari M.M.', 'Kpg. Rajawali No. 588, Bogor 79397, SulUt', '088957911111', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(19, 'Harimurti Emin Zulkarnain', 'Dk. Cikapayang No. 100, Padang 60931, Jambi', '083386021471', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(20, 'Puput Calista Padmasari', 'Jln. Katamso No. 81, Cilegon 80592, MalUt', '085050300291', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(21, 'Lanjar Santoso S.IP', 'Kpg. Sukajadi No. 110, Gunungsitoli 28563, SumBar', '084196956557', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(22, 'Mala Pudjiastuti', 'Gg. Bak Mandi No. 432, Pangkal Pinang 55114, KalBar', '080167248804', '2020-04-07 10:29:28', '2020-04-07 10:29:28'),
(23, 'Hilda Hastuti M.Kom.', 'Ki. Cemara No. 687, Singkawang 78284, DKI', '084075528770', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(24, 'Febi Halimah', 'Ki. Abang No. 402, Samarinda 91569, Bali', '083453163882', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(25, 'Gamani Irawan', 'Ki. Soekarno Hatta No. 356, Administrasi Jakarta Timur 61309, KalTeng', '082133737836', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(26, 'Harsana Hardiansyah', 'Ki. Baja No. 739, Bukittinggi 15206, SulBar', '082978782812', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(27, 'Diah Riyanti S.Pt', 'Gg. Wahidin No. 816, Makassar 36150, JaTim', '080202766289', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(28, 'Bakiono Warta Napitupulu S.Ked', 'Dk. M.T. Haryono No. 938, Samarinda 22013, SumSel', '082613041505', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(29, 'Bagiya Wahyudin', 'Ds. Lumban Tobing No. 198, Pekalongan 18590, SulBar', '084689216333', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(30, 'Salwa Fujiati', 'Jr. Baja No. 917, Sukabumi 35346, Bengkulu', '089027843382', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(31, 'Damu Irnanto Saputra S.Kom', 'Gg. Bhayangkara No. 403, Makassar 56351, PapBar', '089154660754', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(32, 'Mitra Hardiansyah', 'Dk. Padma No. 922, Manado 10399, Bali', '081192452349', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(33, 'Anita Utami', 'Ki. Banceng Pondok No. 315, Prabumulih 93014, Bengkulu', '081297130866', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(34, 'Baktiono Mangunsong', 'Jln. Sugiono No. 526, Palu 93073, KalTim', '087557040572', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(35, 'Ratih Usada', 'Gg. Bata Putih No. 668, Tual 68686, DKI', '083898848488', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(36, 'Dono Hutapea', 'Kpg. Ir. H. Juanda No. 724, Banjarbaru 18631, SulSel', '084885739513', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(37, 'Aditya Hardiansyah', 'Gg. Reksoninten No. 264, Palopo 43930, KalTeng', '087554077208', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(38, 'Caket Pranowo', 'Ki. Teuku Umar No. 579, Tarakan 81658, KalBar', '087888270312', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(39, 'Endah Laksmiwati', 'Kpg. PHH. Mustofa No. 148, Bandung 12318, Bengkulu', '089261603324', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(40, 'Raina Yulianti', 'Psr. S. Parman No. 839, Pangkal Pinang 30419, SulSel', '083651892313', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(41, 'Kala Permadi', 'Gg. Gatot Subroto No. 447, Denpasar 82063, SumSel', '088256212296', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(42, 'Nilam Prastuti', 'Kpg. Reksoninten No. 611, Pagar Alam 12912, KalTim', '089757251732', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(43, 'Malik Megantara', 'Dk. Bakaru No. 769, Bekasi 49033, DKI', '080186987425', '2020-04-07 10:29:29', '2020-04-07 10:29:29'),
(44, 'Okta Narpati', 'Ds. Setiabudhi No. 41, Yogyakarta 67306, SulTeng', '089550937017', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(45, 'Rika Aryani', 'Kpg. Rajawali No. 296, Metro 13041, Aceh', '089780097120', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(46, 'Jessica Paulin Agustina M.Ak', 'Jr. Jend. A. Yani No. 358, Mataram 29108, KalUt', '087624687261', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(47, 'Balangga Najmudin M.Farm', 'Kpg. Basket No. 837, Kendari 35419, Jambi', '085489010153', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(48, 'Gina Aryani', 'Kpg. Bazuka Raya No. 719, Banjar 38603, NTB', '083176048334', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(49, 'Warsa Widodo', 'Kpg. Bagonwoto  No. 528, Administrasi Jakarta Selatan 46124, KepR', '082163199419', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(50, 'Najwa Purwanti', 'Jr. Babakan No. 95, Dumai 29105, SulUt', '089370047018', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(51, 'Hadi Balapati Saptono', 'Jr. Basoka Raya No. 952, Tarakan 76886, Papua', '081695127237', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(52, 'Alika Permata', 'Psr. Untung Suropati No. 491, Administrasi Jakarta Pusat 22416, KalTim', '085365698160', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(53, 'Galang Bakiono Waluyo', 'Kpg. Baladewa No. 740, Probolinggo 80681, KepR', '083644165452', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(54, 'Wawan Damanik M.Pd', 'Ds. Nanas No. 734, Pangkal Pinang 80662, Lampung', '083625070333', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(55, 'Banawi Kurniawan', 'Gg. Basoka Raya No. 383, Bukittinggi 79259, KalSel', '081215668068', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(56, 'Mila Ana Aryani S.Farm', 'Ds. Moch. Ramdan No. 100, Pariaman 49917, NTB', '085333038118', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(57, 'Cinta Utami S.I.Kom', 'Jr. R.E. Martadinata No. 392, Parepare 45548, KalUt', '086776241336', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(58, 'Vino Yahya Marpaung S.Pt', 'Psr. Badak No. 218, Tebing Tinggi 82395, KalTeng', '082068623707', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(59, 'Liman Adinata Latupono', 'Jln. Adisumarmo No. 701, Bontang 38869, KalBar', '085454769299', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(60, 'Dian Yulia Nurdiyanti', 'Jln. Ketandan No. 335, Ambon 51741, SulSel', '088796777110', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(61, 'Among Budiyanto', 'Ds. Otista No. 685, Tangerang 65622, BaBel', '087282911475', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(62, 'Halim Tamba', 'Gg. Abdul. Muis No. 991, Banjar 88036, Banten', '081288069847', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(63, 'Hilda Belinda Mardhiyah S.H.', 'Gg. Banceng Pondok No. 758, Probolinggo 24841, SulTra', '087693300012', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(64, 'Dalima Fathonah Zulaika', 'Dk. Salam No. 7, Balikpapan 51005, MalUt', '086108183068', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(65, 'Wani Novitasari S.T.', 'Dk. Zamrud No. 163, Tegal 10582, MalUt', '081985409666', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(66, 'Kayla Hastuti', 'Gg. Ikan No. 690, Bekasi 62116, Bengkulu', '082140112704', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(67, 'Gasti Andriani', 'Jr. Bata Putih No. 772, Pekalongan 52457, Gorontalo', '082482224620', '2020-04-07 10:29:30', '2020-04-07 10:29:30'),
(68, 'Silvia Safitri', 'Gg. Juanda No. 524, Tanjungbalai 35526, NTB', '085472453243', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(69, 'Panca Chandra Napitupulu S.I.Kom', 'Jr. Cikutra Timur No. 50, Pekalongan 78830, KalUt', '089858859506', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(70, 'Jasmin Melani', 'Dk. Bara Tambar No. 505, Depok 52903, SumSel', '081187409213', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(71, 'Cindy Aryani S.T.', 'Dk. Kyai Mojo No. 640, Sungai Penuh 84244, NTT', '089835811274', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(72, 'Ifa Clara Kuswandari', 'Jln. S. Parman No. 546, Batam 66321, KalTim', '080328754424', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(73, 'Salimah Usyi Suartini', 'Ki. Abdullah No. 615, Pontianak 22237, Bali', '083787728987', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(74, 'Jagapati Caturangga Pranowo', 'Dk. Sutarjo No. 844, Banjarmasin 95433, Bali', '088351354028', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(75, 'Tirtayasa Mandala', 'Gg. Adisumarmo No. 133, Administrasi Jakarta Timur 80564, KepR', '081938047031', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(76, 'Pandu Irnanto Hardiansyah', 'Ds. Acordion No. 470, Palembang 15793, MalUt', '081585252020', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(77, 'Queen Mutia Lailasari', 'Jr. Bakin No. 24, Cimahi 46259, PapBar', '083141910768', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(78, 'Himawan Santoso', 'Ds. Gegerkalong Hilir No. 430, Bima 26888, JaTim', '084583067996', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(79, 'Hafshah Ella Hastuti', 'Ds. Peta No. 772, Depok 36905, Gorontalo', '084996922078', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(80, 'Aswani Kasiran Tampubolon', 'Dk. Jayawijaya No. 43, Madiun 47662, Bengkulu', '082516015299', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(81, 'Rusman Karna Sirait S.Psi', 'Gg. Abdul Rahmat No. 959, Cimahi 45088, Gorontalo', '088876929949', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(82, 'Malika Rahmawati', 'Ki. Raya Ujungberung No. 947, Pariaman 88430, KalTim', '083992820960', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(83, 'Vanya Hasanah S.IP', 'Jln. Barat No. 455, Banjarmasin 71860, KalUt', '080293979095', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(84, 'Amalia Ciaobella Rahmawati S.Pd', 'Psr. B.Agam Dlm No. 226, Tangerang Selatan 37332, SulTra', '081772069670', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(85, 'Nyana Asman Suwarno', 'Psr. B.Agam 1 No. 216, Pontianak 64033, JaTeng', '080486393220', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(87, 'Purwa Koko Wibowo M.TI.', 'Ki. Madrasah No. 270, Batu 91770, SulSel', '080841727001', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(88, 'Citra Farhunnisa Yulianti S.Kom', 'Ds. Bass No. 170, Cimahi 70449, Riau', '083588024529', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(89, 'Melinda Rahimah', 'Ki. Pasir Koja No. 130, Jambi 21334, SulBar', '085205370403', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(90, 'Jasmani Winarno M.Farm', 'Kpg. Bass No. 624, Gunungsitoli 38771, Papua', '085085000669', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(91, 'Kasiyah Gilda Wijayanti', 'Jln. Adisumarmo No. 459, Medan 19446, PapBar', '082833910473', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(92, 'Icha Agustina', 'Jr. Basudewo No. 38, Denpasar 76604, DIY', '082081814211', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(93, 'Prakosa Pradana', 'Jr. Babadak No. 847, Gunungsitoli 16846, KalTeng', '081672695696', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(94, 'Indra Bala Saptono', 'Psr. Basuki Rahmat  No. 266, Tangerang Selatan 76421, Aceh', '086364114138', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(95, 'Asmianto Maulana', 'Gg. Yosodipuro No. 542, Pekanbaru 89431, SulSel', '089702151862', '2020-04-07 10:29:31', '2020-04-07 10:29:31'),
(96, 'Kurnia Rudi Najmudin M.Farm', 'Jln. Abang No. 99, Solok 85064, KalSel', '089690878870', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(97, 'Juli Sadina Usamah', 'Ds. Gedebage Selatan No. 882, Tanjungbalai 47984, KalTim', '080480694461', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(98, 'Kuncara Vinsen Tampubolon S.IP', 'Ds. Banal No. 412, Pekanbaru 19728, Riau', '087325882261', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(99, 'Galang Prayoga S.E.', 'Dk. Bakin No. 275, Bima 68329, Bengkulu', '088427861376', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(100, 'Cornelia Yuni Puspasari S.E.', 'Gg. Sampangan No. 951, Cirebon 90273, MalUt', '088485409161', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(101, 'Anastasia Puput Purnawati S.Pd', 'Ds. Kebangkitan Nasional No. 390, Lubuklinggau 61125, Gorontalo', '086152898685', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(102, 'Wirda Yulianti S.Ked', 'Ds. Bawal No. 913, Sawahlunto 61188, JaBar', '087018386350', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(103, 'Salimah Halimah S.E.I', 'Gg. Dipenogoro No. 386, Ambon 86940, NTT', '081714397279', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(104, 'Restu Pertiwi', 'Psr. Dahlia No. 54, Bontang 56417, MalUt', '080966314959', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(105, 'Daliman Budiman', 'Gg. Bakin No. 514, Balikpapan 85759, SulBar', '089510669948', '2020-04-07 10:29:32', '2020-04-07 10:29:32'),
(106, 'Vino Firmansyah S.IP', 'Psr. Achmad No. 954, Padangsidempuan 89602, DKI', '084424709635', '2020-04-07 10:29:32', '2020-04-07 10:29:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_kategori`
--
ALTER TABLE `barang_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `barang_kategori`
--
ALTER TABLE `barang_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
