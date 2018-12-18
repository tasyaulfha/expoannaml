-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 03:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lacak`
--

-- --------------------------------------------------------

--
-- Table structure for table `infrastrukturs`
--

CREATE TABLE `infrastrukturs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infrastrukturs`
--

INSERT INTO `infrastrukturs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Jalan', '2018-12-16 23:37:24', '2018-12-16 23:37:24'),
(2, 'Jembatan', '2018-12-16 23:37:24', '2018-12-16 23:37:24'),
(3, 'Sekolah', '2018-12-16 23:37:24', '2018-12-16 23:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_infrastruktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kerusakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_kerusakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id`, `user_id`, `nama_infrastruktur`, `jenis_kerusakan`, `tingkat_kerusakan`, `deskripsi`, `lokasi`, `file`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Jembatan', 'jembatan putus', 'berat', 'Jembatan putus akibat banjir bandang dan membuat masyarakat kehilangan akses', 'Gonjang Ganjing Sidomoyo Godean Sleman Yk', 'Jembatan-Gonjang Ganjing.jpg', 'Belum terverifikasi', '2018-12-18 06:27:12', '2018-12-18 06:27:12'),
(3, 1, 'Jalan', 'Jalan longsor', 'berat', 'Jalan rusak parah akibat hujan terus menerus dan terjadi tanah longsor', 'Jl. Tantular Brebes,Jawa Barat', 'Aspal-Brebes.jpg', 'Belum terverifikasi', '2018-12-18 06:31:32', '2018-12-18 06:31:32');

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
(1, '2018_12_08_064302_create_model_users_table', 1),
(2, '2018_12_08_080718_create_model_users_table', 2),
(3, '2018_12_08_091910_create_users_table', 3),
(4, '2018_12_08_135457_create_user_table', 4),
(5, '2018_12_10_113407_create_roles_table', 5),
(6, '2018_12_10_113437_create_user_roles_table', 5),
(7, '2018_12_11_094107_create_model_users_table', 6),
(12, '2018_12_11_104549_create_model_users_table', 7),
(13, '2018_12_13_013029_create_laporan_masuks_table', 8),
(19, '2018_12_13_030200_create_laporans_table', 9),
(20, '2018_12_13_125442_tingkat_kerusakan', 10),
(22, '2018_12_14_071205_create_pekerjaans_table', 11),
(23, '2018_12_17_061753_create_infrastrukturs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `posisi`, `created_at`, `updated_at`) VALUES
(1, 'pelapor', '2018-12-16 23:37:24', '2018-12-16 23:37:24'),
(2, 'bpbd', '2018-12-16 23:37:24', '2018-12-16 23:37:24'),
(3, 'dinas', '2018-12-16 23:37:24', '2018-12-16 23:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_kerusakan`
--

CREATE TABLE `tingkat_kerusakan` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tingkat_kerusakan`
--

INSERT INTO `tingkat_kerusakan` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'berat', '2018-12-16 23:37:24', '2018-12-16 23:37:24'),
(2, 'sedang', '2018-12-16 23:37:24', '2018-12-16 23:37:24'),
(3, 'ringan', '2018-12-16 23:37:24', '2018-12-16 23:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `pekerjaan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizqi Kartika', 'rkartikasafitri@gmail.com', '$2y$10$gYfo2VWy1DdIj4vWFnPwGuFCEtjoh4p9B3k48DvKbnNujH5hxLtwy', 'pelapor', 'uC4DQCfjbcV8fe8dN7caAat1HtqyzRZ1sWVuWvWSl14RulsM15DgKfMafMC6', '2018-12-17 06:10:10', '2018-12-17 06:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infrastrukturs`
--
ALTER TABLE `infrastrukturs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkat_kerusakan`
--
ALTER TABLE `tingkat_kerusakan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `infrastrukturs`
--
ALTER TABLE `infrastrukturs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tingkat_kerusakan`
--
ALTER TABLE `tingkat_kerusakan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
