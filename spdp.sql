-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 05:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pupuks`
--

CREATE TABLE `data_pupuks` (
  `id_pupuk` bigint(20) UNSIGNED NOT NULL,
  `nama_pupuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_permintaans`
--

CREATE TABLE `detail_transaksi_permintaans` (
  `id_detailTP` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_pupuk` int(11) NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2020_11_17_071012_create_jenis_pupuks_table', 1),
(20, '2014_10_12_000000_create_users_table', 2),
(21, '2014_10_12_100000_create_password_resets_table', 2),
(22, '2020_11_17_032939_create_roles_table', 2),
(23, '2020_11_17_070251_create_data_pupuks_table', 2),
(24, '2020_11_17_070706_create_detail_transaksi_permintaans_table', 2),
(25, '2020_11_17_071912_create_transaksi_permintaans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Manager Gudang'),
(2, 'Agen'),
(3, 'Driver');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_permintaans`
--

CREATE TABLE `transaksi_permintaans` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama_pupuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_permintaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `status_verifikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Diverifikasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `no_telepon`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Budi', 'budi@gmail.com', NULL, '$2y$10$Q.y0Wkf00GEhoJOyneEoXu9idBRQTV/vXrQDrqiLgAcLj4HHU5.He', 'neroko', '000011112222', NULL, NULL, NULL),
(2, 2, 'Rendi', 'rendi@gmail.com', NULL, '$2y$10$WhzgZbl.DB8qq.74F40zL.PmXffH0QBCtz1uOYUEIlJw3kj/QFWYi', 'neroko', '000011112222', NULL, NULL, NULL),
(3, 3, 'Ipan', 'ipan@gmail.com', NULL, '$2y$10$B5wP5W2jfYWZSUcPoQGgfeza4TwipymE5Ls.PoQnfB5h64Ya5RVTi', 'neroko', '000011112222', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pupuks`
--
ALTER TABLE `data_pupuks`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indexes for table `detail_transaksi_permintaans`
--
ALTER TABLE `detail_transaksi_permintaans`
  ADD PRIMARY KEY (`id_detailTP`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_permintaans`
--
ALTER TABLE `transaksi_permintaans`
  ADD PRIMARY KEY (`id_transaksi`);

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
-- AUTO_INCREMENT for table `data_pupuks`
--
ALTER TABLE `data_pupuks`
  MODIFY `id_pupuk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi_permintaans`
--
ALTER TABLE `detail_transaksi_permintaans`
  MODIFY `id_detailTP` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_permintaans`
--
ALTER TABLE `transaksi_permintaans`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
