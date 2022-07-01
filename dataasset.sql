-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2022 pada 10.01
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataasset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sn` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `sn`, `merek`, `jenis`, `type`, `Dio`, `keterangan`, `created_at`, `updated_at`) VALUES
(31, '3894753', 'Pax', 'Regular', 'D210', 'Kanca sungguminasa', 'Rusakk', '2022-05-24 18:55:48', '2022-06-04 02:02:33'),
(32, '8343873', 'Ingenico', 'Mpos', 'D210', 'Kanca makassar', 'Rusak', '2022-05-24 18:55:58', '2022-05-24 18:55:58'),
(33, '723423923', 'Pax', 'Regular', 'D210', 'Kanca Gowa', 'Bagus', '2022-05-24 18:55:58', '2022-05-24 18:55:58'),
(34, '3894753', 'Pax', 'Regular', 'D210', 'Kanca sungguminasa', 'Rusak', '2022-05-24 18:55:58', '2022-05-24 18:55:58'),
(35, '8343873', 'Ingenico', 'Mpos', 'D210', 'Kanca makassar', 'Rusak', '2022-05-24 20:32:54', '2022-05-24 20:32:54'),
(36, '723423923', 'Pax', 'Regular', 'D210', 'Kanca Gowa', 'Bagus', '2022-05-24 20:32:54', '2022-05-24 20:32:54'),
(37, '3894753', 'Pax', 'Regular', 'D210', 'Kanca sungguminasa', 'Rusak', '2022-05-24 20:32:54', '2022-05-24 20:32:54'),
(38, '8343873', 'Ingenico', 'Mpos', 'D210', 'Kanca makassar', 'Rusak', '2022-05-24 20:33:27', '2022-05-24 20:33:27'),
(40, '3894753', 'Pax', 'Regular', 'D210', 'Kanca sungguminasa', 'Rusak', '2022-05-24 20:33:27', '2022-05-24 20:33:27'),
(41, '8343873', 'Ingenico', 'Mpos', 'D210', 'Kanca makassar', 'Rusak', '2022-05-25 14:32:46', '2022-05-25 14:32:46'),
(42, '723423923', 'Pax', 'Regular', 'D210', 'Kanca Gowa', 'Bagus', '2022-05-25 14:32:46', '2022-05-25 14:32:46'),
(43, '3894753', 'Pax', 'Regular', 'D210', 'Kanca sungguminasa', 'Rusak', '2022-05-25 14:32:46', '2022-05-25 14:32:46'),
(44, '736478732734', 'Ingenico', 'Regular', 'Paxd210', 'Kanca daanmogot', 'Rusak', '2022-05-25 14:33:49', '2022-05-25 14:33:49'),
(45, '8343873', 'Ingenico', 'Mpos', 'D210', 'Kanca makassar', 'Rusak', '2022-05-25 16:46:17', '2022-05-25 16:46:17'),
(46, '723423923', 'Pax', 'Regular', 'D210', 'Kanca Gowa', 'Bagus', '2022-05-25 16:46:17', '2022-05-25 16:46:17'),
(47, '3894753', 'Pax', 'Regular', 'D210', 'Kanca sungguminasa', 'Rusak', '2022-05-25 16:46:17', '2022-05-25 16:46:17'),
(48, '8343873', 'Ingenico', 'Mpos', 'D210', 'Kanca makassar', 'Rusak', '2022-05-25 17:08:31', '2022-05-25 17:08:31'),
(49, '723423923', 'Pax', 'Regular', 'D210', 'Kanca Gowa', 'Bagus', '2022-05-25 17:08:31', '2022-05-25 17:08:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataedc`
--

CREATE TABLE `dataedc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sn` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dataedc`
--

INSERT INTO `dataedc` (`id`, `sn`, `merek`, `jenis`, `type`, `created_at`, `updated_at`) VALUES
(1, '56745393', 'Pax', 'Regular', 'D210', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edctamper`
--

CREATE TABLE `edctamper` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sn` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kanca` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `edctamper`
--

INSERT INTO `edctamper` (`id`, `sn`, `merek`, `jenis`, `type`, `Kanca`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '837237233', 'PAX', 'Mpos', 'D210', 'bsdd', 'Rusak', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_20_031234_create_data_table', 1),
(5, '2022_05_06_060041_transaksi', 1),
(6, '2022_05_25_065637_create_dataedcs_table', 2),
(7, '2022_05_25_224221_create_dataedc_table', 3),
(8, '2022_06_15_031137_create_edctampers_table', 4),
(9, '2022_06_18_051119_edctamper_controller', 5),
(10, '2022_06_18_051858_edctamper_controller', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sn` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `sn`, `jenis`, `jumlah`, `tujuan`, `tgl`, `created_at`, `updated_at`) VALUES
(2, '7234673', 'Mpos', '1', 'Kanca makassar', '2022-06-11', '2022-05-24 06:51:31', '2022-06-04 02:02:58'),
(3, '12345', 'Regular', '1', 'Kanca Pare', '2022-06-12', '2022-05-24 23:41:13', '2022-06-10 23:05:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'kanwil', 'spv', 'kanwil@gmail.com', NULL, '$2y$10$tZWsUYKGAk0X/xf7hW0kL.6KoV5bbUTTNcbGHCicsNaf6h25/kztS', NULL, '2022-05-30 19:29:22', '2022-05-30 19:29:22'),
(4, 'kanca', 'pelaksana', 'kanca@gmail.com', NULL, '$2y$10$XFrldWEcWXZp5D6NLb84zeKyUkjXxmFWJjyu5BCaCQWs98UzcHcsm', 'NQfj5spidKB9T3hZLdi9pklf29xiUsIbceo2WM5oFX2dKfBUbIzEDfSihbO7', '2022-05-30 19:30:36', '2022-05-30 19:30:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataedc`
--
ALTER TABLE `dataedc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edctamper`
--
ALTER TABLE `edctamper`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `dataedc`
--
ALTER TABLE `dataedc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `edctamper`
--
ALTER TABLE `edctamper`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
