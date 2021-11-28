-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2020 pada 15.12
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bby_cb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal`
--

CREATE TABLE `asal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `asal`
--

INSERT INTO `asal` (`id`, `nama_tempat`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(134, 'fef', 'fe', '2020-07-12 22:05:15', '2020-07-12 22:06:14', '2020-07-13 05:06:14'),
(135, 'uty', 'jombor', '2020-07-14 07:51:55', '2020-07-15 14:28:55', '2020-07-15 21:28:55'),
(136, 'dsd', 'fdsf', '2020-07-15 12:40:57', '2020-07-15 12:40:57', NULL),
(137, 'SD Muhammadiyah', 'Yogyakarta', '2020-07-15 15:53:38', '2020-07-15 15:53:38', NULL),
(138, 'ewew', 'we', '2020-08-23 06:24:25', '2020-08-23 06:24:25', NULL),
(139, 'ewew', 'we', '2020-08-23 07:28:11', '2020-08-23 07:28:11', NULL),
(140, 'dwqd', 'dwqd', '2020-08-23 07:31:41', '2020-08-23 07:31:41', NULL),
(141, 'dwqd', 'dwqd', '2020-08-23 07:40:49', '2020-08-23 07:40:49', NULL),
(142, 'dwqd', 'dwqd', '2020-08-23 07:42:37', '2020-08-23 07:42:37', NULL),
(143, 'dwqd', 'dwqd', '2020-08-23 07:50:55', '2020-08-23 07:50:55', NULL),
(144, 'dwqd', 'dwqd', '2020-08-23 07:59:35', '2020-08-23 07:59:35', NULL),
(145, 'dwqd', 'dwqd', '2020-08-23 08:05:02', '2020-08-23 08:05:02', NULL),
(146, 'dwqd', 'dwqd', '2020-08-23 08:06:12', '2020-08-23 08:06:12', NULL),
(147, 'dwqd', 'dwqd', '2020-08-23 08:09:18', '2020-08-23 08:09:18', NULL),
(148, 'dwqd', 'dwqd', '2020-08-23 08:11:46', '2020-08-23 08:11:46', NULL),
(149, 'ewew', 'ffee', '2020-08-23 08:15:00', '2020-08-23 08:15:00', NULL),
(150, 'ewew', 'ffee', '2020-08-23 08:15:44', '2020-08-23 08:15:44', NULL),
(151, 'ewew', 'ffee', '2020-08-23 08:16:18', '2020-08-23 08:16:18', NULL),
(152, 'ewew', 'ffee', '2020-08-23 08:38:23', '2020-08-23 08:38:23', NULL),
(153, 'csc', 'cs', '2020-08-23 08:42:11', '2020-08-23 08:42:11', NULL),
(154, 'csc', 'cs', '2020-08-23 08:48:25', '2020-08-23 08:48:25', NULL),
(155, 'csc', 'cs', '2020-08-23 08:58:55', '2020-08-23 08:58:55', NULL),
(156, 'dwd', 'wdw', '2020-08-23 09:01:09', '2020-08-23 09:01:09', NULL),
(157, 'dwd', 'wdw', '2020-08-23 09:02:22', '2020-08-23 09:02:22', NULL),
(158, 'dwd', 'wdw', '2020-08-23 09:03:48', '2020-08-23 09:03:48', NULL),
(159, 'dwd', 'wdw', '2020-08-23 09:06:28', '2020-08-23 09:06:28', NULL),
(160, 'dwd', 'wdw', '2020-08-23 09:10:50', '2020-08-23 09:10:50', NULL),
(161, 'dwqd', 'ffee', '2020-08-23 09:11:42', '2020-08-23 09:11:42', NULL),
(162, 'dwqd', 'ffee', '2020-08-23 09:24:45', '2020-08-23 09:24:45', NULL),
(163, 'dwqd', 'ffee', '2020-08-23 09:25:47', '2020-08-23 09:25:47', NULL),
(164, 'dwqd', 'dwqd', '2020-08-23 09:49:31', '2020-08-23 09:49:31', NULL),
(165, 'ewew', 'ffee', '2020-08-23 09:53:49', '2020-08-23 09:53:49', NULL),
(166, 'ewew', 'ffee', '2020-08-23 09:54:36', '2020-08-23 09:54:36', NULL),
(167, 'fsd', 'fesf', '2020-08-23 15:18:44', '2020-08-23 15:18:44', NULL),
(168, 'dwqd', 'ffee', '2020-08-23 15:47:04', '2020-08-23 15:47:04', NULL),
(169, 'dwqd', 'ffee', '2020-08-23 15:53:24', '2020-08-23 15:53:24', NULL),
(170, 'ewew', 'we', '2020-08-23 15:54:44', '2020-08-23 15:54:44', NULL),
(171, 'ewew', 'ffee', '2020-08-23 16:14:59', '2020-08-23 16:14:59', NULL),
(172, 'ewew', 'ffee', '2020-08-23 16:16:30', '2020-08-23 16:16:30', NULL),
(173, 'ewew', 'ffee', '2020-08-25 10:47:13', '2020-08-25 10:47:13', NULL),
(174, 'ewew', 'ffee', '2020-08-25 10:48:06', '2020-08-25 10:48:06', NULL),
(175, 'ewew', 'ffee', '2020-08-25 10:55:41', '2020-08-25 10:55:41', NULL),
(176, 'ewew', 'ffee', '2020-08-25 11:06:29', '2020-08-25 11:06:29', NULL),
(177, 'dwqd', 'ffee', '2020-08-25 11:08:24', '2020-08-25 11:08:24', NULL),
(178, 'ewew', 'ffee', '2020-08-25 11:09:24', '2020-08-25 11:09:24', NULL),
(179, 'ewew', 'ffee', '2020-08-25 11:10:02', '2020-08-25 11:10:02', NULL),
(180, 'ewew', 'ffee', '2020-08-25 11:25:51', '2020-08-25 11:25:51', NULL),
(181, 'ewew', 'ffee', '2020-08-25 11:35:43', '2020-08-25 11:35:43', NULL),
(182, 'ewew', 'ffee', '2020-08-25 11:52:56', '2020-09-14 13:25:05', '2020-09-14 20:25:05'),
(183, 'ewew', 'ffee', '2020-08-25 12:01:56', '2020-08-25 12:01:56', NULL),
(184, 'ewew', 'ffee', '2020-08-25 12:02:33', '2020-09-14 13:24:59', '2020-09-14 20:24:59'),
(185, 'ewew', 'ffee', '2020-08-25 12:04:05', '2020-08-25 12:04:05', NULL),
(186, 'ewew', 'ffee', '2020-08-25 12:13:10', '2020-09-14 13:24:46', '2020-09-14 20:24:46'),
(187, 'ewew', 'ffee', '2020-08-25 12:14:41', '2020-08-25 12:14:41', NULL),
(188, 'jj', 'glagah', '2020-08-25 12:17:27', '2020-09-14 13:24:37', '2020-09-14 20:24:37'),
(189, 'ugm', 'jombor', '2020-08-25 13:30:27', '2020-08-25 13:30:27', NULL),
(190, 'sd n 1 sleman', 'sleman', '2020-09-04 07:10:28', '2020-09-04 07:10:28', NULL),
(191, 'sd n 1 sleman', 'sleman', '2020-09-04 07:16:20', '2020-09-04 07:16:20', NULL),
(192, 'ja', 'jogja', '2020-09-04 07:17:25', '2020-09-04 07:17:25', NULL),
(193, 'dede', 'dede', '2020-09-04 07:27:59', '2020-09-14 13:25:14', '2020-09-14 20:25:14'),
(194, 'dede', 'dede', '2020-09-04 07:45:27', '2020-09-04 07:45:27', NULL),
(195, 'sdf', 'ffee', '2020-09-04 07:50:42', '2020-09-04 07:50:42', NULL),
(196, 'ewew', 'ffee', '2020-09-04 08:03:51', '2020-09-04 08:03:51', NULL),
(197, 'SD N 1 Bantul', 'Bantul', '2020-09-05 02:39:09', '2020-09-05 02:39:09', NULL),
(198, 'Universitas Indonesia', 'Jl. Kaliurang', '2020-09-05 02:43:33', '2020-09-05 02:43:33', NULL),
(199, 'dwadwd', 'wdwd', '2020-09-15 11:03:12', '2020-09-15 11:03:12', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_04_08_153411_pengunjung', 2),
(14, '2020_04_08_153637_pegawai', 2),
(24, '2020_04_09_114221_relasi_pengunjung_instansi', 4),
(36, '2020_04_08_153701_instansi', 5),
(37, '2020_04_09_113648_add_tanggal', 5),
(38, '2020_04_09_114234_relasi_pengunjung_pegawai', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$JjifXRTKoEvbab.oqd8L7OTnyheDsTLiJamXMAjEUE5J9aNk1E9AK', '2020-06-25 07:54:01'),
('zuchfuchsen.zf@gmail.com', '$2y$10$vlXqVCQgmWYP0msRSpLeJOuxzZfwO.f0QEA8EOKNCZ6AaJCJF.qVe', '2020-09-13 14:15:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `nip`, `bidang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tidak Spesifik', 'Tidak Spesifik', 'Tidak Spesifik', '2020-09-15 11:08:09', '2020-09-15 11:08:09', NULL),
(20, 'Mursyid Saksono', '11132434556', 'Pengembangan dan Perlindungan Bahasa', '2020-07-15 14:02:05', '2020-09-21 11:57:38', NULL),
(21, 'Pardi, M.Hum', '10102181213', 'Kepala Balai', '2020-07-15 17:49:40', '2020-09-21 12:54:11', NULL),
(22, 'Suhana, M.Pd', '11102681112', 'Tata Usaha', '2020-07-19 14:41:22', '2020-09-21 12:55:12', '2020-09-21 12:55:12'),
(25, 'Mulyanto, S.Pd.', '1113243652', 'Tidak Spesifik', '2020-09-22 01:52:03', '2020-09-22 02:04:30', '2020-09-22 02:04:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `user_id` date NOT NULL,
  `asal_id` int(10) UNSIGNED DEFAULT NULL,
  `pegawai_id` int(10) UNSIGNED DEFAULT NULL,
  `nama_pengunjung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `user_id`, `asal_id`, `pegawai_id`, `nama_pengunjung`, `no_hp`, `keperluan`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0000-00-00', 182, 20, 'Zucer', '6288888888888', 'wqew', 'Dilayani', '2020-08-25 11:52:56', '2020-09-21 12:26:15', NULL),
(3, '0000-00-00', 184, 1, 'b', '+19294510329', 'wqew', 'Tidak dilayani', '2020-08-25 12:02:33', '2020-09-21 12:31:48', NULL),
(5, '0000-00-00', 186, 22, 'Zucer', '6285722337449', 'wqew', 'Dilayani', '2020-08-25 12:13:11', '2020-09-21 12:53:06', NULL),
(7, '0000-00-00', 188, 20, 'vv', '48732123032', 'makan', 'Dilayani', '2020-08-25 12:17:27', '2020-09-21 12:53:17', NULL),
(8, '0000-00-00', 189, 22, 'aku', '628985839342', 'mengayomi', 'Dilayani', '2020-08-25 13:30:27', '2020-09-21 12:53:28', NULL),
(9, '0000-00-00', 190, 22, 'mahmud', '6285722337449', 'belajar', 'Dilayani', '2020-09-04 07:10:28', '2020-09-21 12:53:38', NULL),
(10, '0000-00-00', 191, 20, 'anja', '6285722337449', 'belajar', 'Tidak dilayani', '2020-09-04 07:16:20', '2020-09-21 12:53:51', NULL),
(12, '0000-00-00', 193, 21, 'roger', '628985839342', 'tgt', 'Dilayani', '2020-09-04 07:28:01', '2020-09-21 12:54:31', NULL),
(16, '0000-00-00', 197, 21, 'Bila', '6285722337449', 'Pengenalan bahasa', 'Dilayani', '2020-09-05 02:39:16', '2020-09-21 12:54:44', NULL),
(17, '0000-00-00', 198, 22, 'Regina', '628985839342', 'konsultasi', 'Dilayani', '2020-09-05 02:43:35', '2020-09-21 12:54:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'zuhri', 'zuchfuchsen.zf@gmail.com', 'zuhri', NULL, '$2y$10$bzr5MNteoSrYRFKFdLozeu2rrh5D4gMb.LC3UNsG8CE5u.Ho4LLI.', NULL, '2020-08-25 12:38:00', '2020-08-25 12:38:00'),
(8, 'petugas 1', 'achmad.s.zuhri182@gmail.com', 'petugas1', NULL, '$2y$10$yDNFPmf9kqyD0QhCU8JZ4OY7IA9WPOivUzGjGTaQ2TABuxK5exq56', NULL, '2020-09-14 13:32:01', '2020-09-14 13:32:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
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
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengunjung_pegawai_id_foreign` (`pegawai_id`),
  ADD KEY `pengunjung_asal_id_foreign` (`asal_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asal`
--
ALTER TABLE `asal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_asal_id_foreign` FOREIGN KEY (`asal_id`) REFERENCES `asal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengunjung_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
