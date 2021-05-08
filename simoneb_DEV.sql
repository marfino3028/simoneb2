-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2021 at 03:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_simoneb`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `beasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`beasiswa_id`, `deskripsi`, `foto`, `nama`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'asd', '96f37e3ba726d7211325dd6a4ea3860e.jpeg', 'asd', 1, 2, '2020-11-14 23:33:30', '2020-11-14 23:33:30'),
(43, 'asd', '96aa7005e3bc6ad4cde605ae860d90be.png', 'zxczx', 1, 1, '2020-11-18 23:46:33', '2020-11-18 23:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karya_tulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentoring`
--

CREATE TABLE `mentoring` (
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_kehadiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
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
(1, '2013_11_10_132150_create_semester_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2020_11_02_021631_create_sessions_table', 1),
(8, '2020_11_10_114723_create_nilai_table', 1),
(9, '2020_11_10_122934_create_beasiswa_table', 1),
(10, '2020_11_10_122946_create_forum_table', 1),
(11, '2020_11_10_123004_create_karya_table', 1),
(12, '2020_11_10_123018_create_mentoring_table', 1),
(13, '2020_11_10_123033_create_org_mhs_table', 1),
(14, '2020_11_10_123048_create_prestasi_table', 1),
(15, '2020_11_10_123059_create_sosial_table', 1),
(16, '2020_11_10_123109_create_tahsin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ipk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ips` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `ipk`, `ips`, `tahun`, `users_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(1, '3', '3', '2020/2020', 1, 1, NULL, '2020-11-13 00:04:17'),
(2, '3', '3', '2021/2022', 1, 2, NULL, NULL),
(3, '3', '3', '2022/2023\r\n', 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `org_mhs`
--

CREATE TABLE `org_mhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peringkat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara_prestasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-11-10 06:36:06', '2020-11-10 06:36:06'),
(2, '2', '2020-11-10 06:36:06', '2020-11-10 06:36:06'),
(3, '3', '2020-11-10 06:36:06', '2020-11-10 06:36:06'),
(4, '4', '2020-11-10 06:36:06', '2020-11-10 06:36:06'),
(5, '5', '2020-11-10 06:36:06', '2020-11-10 06:36:06'),
(6, '6', '2020-11-10 06:36:06', '2020-11-10 06:36:06'),
(7, '7', '2020-11-10 06:36:06', '2020-11-10 06:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UC5saJOyg1ij8P2cmAGWCt3vik0TYJBW3PfcPJkF', 3, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.72 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZFZuMGhvQUxTMWJSQm5HYzFzQ2UwdzBnMXRuZzJuUFphQWlkZmd3YSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly9sb2NhbGhvc3QvZnJlZWxhbmNlL3NpbW9uZWIvcHVibGljL21haGFzaXN3YSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRuL3ozVEc4RnVzVXFyRjQ4MFRRVkFlVUVPeHhRbWZCLi5kM0NMdHkxdllTcGd5dWxsMTIwdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbi96M1RHOEZ1c1VxckY0ODBUUVZBZVVFT3h4UW1mQi4uZDNDTHR5MXZZU3BneXVsbDEyMHUiO30=', 1618756438),
('X9v6s5Zl4whWHv8cwMblQwkOlDfW3m33WjMcQTEx', 1, '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.72 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVDU2VzNtemVSTGZxR25mTTF6QWVNNEtvaEpvcUp4SnFIQW1WeW5NOSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vbG9jYWxob3N0L2ZyZWVsYW5jZS9zaW1vbmViL3B1YmxpYy9sYXBvcmFuP2lkPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkR1ZvdmFyYU1qMXhzYjJZRldXemdkLk1Pa0Vnc3pkMHhVLnhWQnVEc2hZaVpqM0QwVmMwbDYiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEdWb3ZhcmFNajF4c2IyWUZXV3pnZC5NT2tFZ3N6ZDB4VS54VkJ1RHNoWWlaajNEMFZjMGw2Ijt9', 1618762290);

-- --------------------------------------------------------

--
-- Table structure for table `sosial`
--

CREATE TABLE `sosial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara_sosial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahsin`
--

CREATE TABLE `tahsin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('mahasiswa','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `nim`, `angkatan`, `prodi`, `alamat`, `hp`, `beasiswa`, `role`, `remember_token`, `email_verified_at`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Marfino Hamzah', 'admin@gmail.com', '$2y$10$GVovaraMj1xsb2YFWWzgd.MOkEgszd0xU.xVBuDshYiZj3D0Vc0l6', NULL, NULL, '1234', '2020/2021', 'Hukum Ekonomi Syariah', 'Arjuna 2', '089626312680', '100%', 'mahasiswa', NULL, NULL, 'profile-photos/IYTlX1k4X5doObaXqmetKlzdv8Mo7XrMUf28H0zZ.png', NULL, '2021-04-18 08:18:39'),
(2, 'Valenia Tabhita Putri', 'valeniatp@gmail.com', '$2y$10$nugTBhIluDJPvOiB6114wusi6LD92XLHiI.Xl6g3hCbSD1rTJRZRm', NULL, NULL, '12345', '2021/2022', 'Perbankan Syariah', 'Kaliwingko', '089626512680', '100%', 'mahasiswa', NULL, NULL, NULL, NULL, NULL),
(3, 'Yoyo Sundoyo', 'admin@adm.net', '$2y$10$n/z3TG8FusUqrF480TQVAeUEOxxQmfB..d3CLty1vYSpgyull120u', NULL, NULL, '12345', '2021/2022', '', 'Kaliwingko', '089626512680', '', 'admin', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`beasiswa_id`),
  ADD KEY `beasiswa_users_id_foreign` (`users_id`),
  ADD KEY `beasiswa_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_users_id_foreign` (`users_id`),
  ADD KEY `forum_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karya_users_id_foreign` (`users_id`),
  ADD KEY `karya_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD KEY `mentoring_users_id_foreign` (`users_id`),
  ADD KEY `mentoring_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_users_id_foreign` (`users_id`),
  ADD KEY `nilai_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `org_mhs`
--
ALTER TABLE `org_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `org_mhs_users_id_foreign` (`users_id`),
  ADD KEY `org_mhs_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestasi_users_id_foreign` (`users_id`),
  ADD KEY `prestasi_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sosial`
--
ALTER TABLE `sosial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sosial_users_id_foreign` (`users_id`),
  ADD KEY `sosial_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `tahsin`
--
ALTER TABLE `tahsin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahsin_users_id_foreign` (`users_id`),
  ADD KEY `tahsin_semester_id_foreign` (`semester_id`);

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
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `beasiswa_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `org_mhs`
--
ALTER TABLE `org_mhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sosial`
--
ALTER TABLE `sosial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahsin`
--
ALTER TABLE `tahsin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `beasiswa_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `beasiswa_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `forum_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `karya`
--
ALTER TABLE `karya`
  ADD CONSTRAINT `karya_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `karya_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD CONSTRAINT `mentoring_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `mentoring_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `nilai_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `org_mhs`
--
ALTER TABLE `org_mhs`
  ADD CONSTRAINT `org_mhs_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `org_mhs_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `prestasi_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sosial`
--
ALTER TABLE `sosial`
  ADD CONSTRAINT `sosial_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `sosial_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tahsin`
--
ALTER TABLE `tahsin`
  ADD CONSTRAINT `tahsin_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `tahsin_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
