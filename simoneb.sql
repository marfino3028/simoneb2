-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 06:36 PM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simoneb`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agenda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `deskripsi`, `foto`, `nama`, `agenda`, `penyelenggara`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'asd', '96f37e3ba726d7211325dd6a4ea3860e.jpeg', 'asd', NULL, NULL, 1, 2, '2020-11-14 23:33:30', '2020-11-14 23:33:30'),
(43, 'asd', '96aa7005e3bc6ad4cde605ae860d90be.png', 'zxczx', NULL, NULL, 1, 1, '2020-11-18 23:46:33', '2020-11-18 23:46:33'),
(44, 'asdasd', '1a97fa3d395dd1107f0cfd8823df899c.png', 'qweqweasd', NULL, NULL, 2, 1, '2021-06-02 02:10:29', '2021-06-02 02:10:29'),
(46, 'kjqwekq', 'e0bd943ab39b56909d4e05fedc2bab52.png', 'qwkje', NULL, NULL, 2, 1, '2021-06-09 02:11:35', '2021-06-09 02:11:35'),
(47, 'qweq', '64747d883de47a5e59f162171d3de797.jpg', 'salkjasdkl', NULL, NULL, 1, 1, '2021-06-13 21:16:10', '2021-06-13 21:16:10');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `tgl`, `foto`, `nama`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '2021-06-09', '23677b3c169f0af628a5f10a0dfb154f.png', 'qwek', 2, 1, '2021-06-09 02:12:53', '2021-06-09 02:12:53'),
(2, '2021-06-14', '600b9944f4e6fb69752f2bb1f10c3ed4.jpg', 'qweqwe', 1, 1, '2021-06-13 21:16:34', '2021-06-13 21:16:34');

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

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id`, `karya_tulis`, `tgl`, `judul`, `media`, `link`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '', '2021-06-14', 'asdasd', 'qweqwe', 'qweqw', 2, 1, '2021-06-13 21:18:08', '2021-06-13 21:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `laporan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `laporan`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Businessman House Icon Touch PowerPoint Templates.pptx', 1, 1, NULL, NULL),
(2, 'https://k4f4w9c2.stackpathcdn.com/wp-content/uploads/01_big_files_kim7/2021_best_ppt/Businessman%20House%20Icon%20Touch%20PowerPoint%20Templates.pptx', 2, 2, NULL, NULL),
(3, 'a5f049ec1ab97c74c4f03e1b63e90479.pptx', 1, 1, '2021-06-16 03:33:28', '2021-06-16 03:33:28'),
(4, 'c.pptx', 2, 1, '2021-06-16 03:34:05', '2021-06-16 03:36:14'),
(5, '/tmp/phpRNEgHC', 6, 1, '2021-06-16 03:34:32', '2021-06-16 03:34:32'),
(6, 'Businessman House Icon Touch PowerPoint Templates.pptx.pptx', 7, 1, '2021-06-16 03:35:48', '2021-06-16 03:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `mentoring`
--

CREATE TABLE `mentoring` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_kehadiran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentoring`
--

INSERT INTO `mentoring` (`id`, `nama`, `jml_pertemuan`, `jml_kehadiran`, `persen`, `foto`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'sadasd', '12', '12', '21', '15f32cea44914a7eeda02a9e0ed2bf4b.jpg', 5, 1, '2021-06-13 21:18:27', '2021-06-13 21:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `messages`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Terlalu', 1, 1, NULL, NULL),
(2, 'Banyak Ingin', 2, 1, NULL, NULL),
(3, 'Maunya', 6, 1, '2021-06-16 23:26:23', '2021-06-16 23:26:23'),
(4, 'Tapi Aku ', 4, 1, '2021-06-17 00:21:28', '2021-06-17 00:21:28'),
(5, 'wqeqwe', 4, 1, '2021-06-21 21:38:42', '2021-06-21 21:38:42');

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
(16, '2020_11_10_123109_create_tahsin_table', 1),
(17, '2021_06_14_071653_create_laporans_table', 2);

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

--
-- Dumping data for table `org_mhs`
--

INSERT INTO `org_mhs` (`id`, `nama`, `jabatan`, `masa_jabatan`, `foto`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'adasd', 'qweqwe', '123', 'b047063b85248ef3a30b8966da5b6ebc.jpg', 2, 1, '2021-06-13 21:18:49', '2021-06-13 21:18:49');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
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

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `peringkat`, `nama`, `level`, `penyelenggara_prestasi`, `foto`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '4', 'asdasd', 'kab/kota', 'qweqweq', '51c9bf700a14e9199fe08715e9b2214f.jpg', 4, 1, '2021-06-13 21:19:06', '2021-06-13 21:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'DI Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('92', 'Papua');

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
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('miv4wraPT4Gqj6WrvunCbmzFejh4fFSngchpOXW4', 3, '180.251.182.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVGsyMDBMaWdYeDRhSlBNUkVxb1BQRkhwWVJZWnl3Zkh5TFE3eDBjcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vc2ltb25lYi5zZWJpLmFjLmlkL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRuL3ozVEc4RnVzVXFyRjQ4MFRRVkFlVUVPeHhRbWZCLi5kM0NMdHkxdllTcGd5dWxsMTIwdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbi96M1RHOEZ1c1VxckY0ODBUUVZBZVVFT3h4UW1mQi4uZDNDTHR5MXZZU3BneXVsbDEyMHUiO30=', 1624447976),
('Sg9a4O543DzAQKfTLcIoda8J1qDPkWWr1EN56Hay', 3, '180.251.182.203', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRHRnUXFjdWJJUDVWWU5IMmkzMnE5dWFtTWdzb1NzSklidzBFcXN2UiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vc2ltb25lYi5zZWJpLmFjLmlkL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRuL3ozVEc4RnVzVXFyRjQ4MFRRVkFlVUVPeHhRbWZCLi5kM0NMdHkxdllTcGd5dWxsMTIwdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbi96M1RHOEZ1c1VxckY0ODBUUVZBZVVFT3h4UW1mQi4uZDNDTHR5MXZZU3BneXVsbDEyMHUiO30=', 1624434403);

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

--
-- Dumping data for table `sosial`
--

INSERT INTO `sosial` (`id`, `tgl`, `nama`, `penyelenggara_sosial`, `foto`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '2021-06-15', 'qweqwe', 'qweq', '22b8bd19e26ffcb3a7e4c8c02e493f53.jpg', 3, 1, '2021-06-13 21:19:34', '2021-06-13 21:19:34');

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

--
-- Dumping data for table `tahsin`
--

INSERT INTO `tahsin` (`id`, `level`, `no_sk`, `nilai`, `foto`, `semester_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'tahsin', 'qweqwe', '123', '59aeb1e3bcdfdd52b6ceb9ead067ec4a.jpg', 4, 1, '2021-06-13 21:18:02', '2021-06-13 21:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beasiswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('mahasiswa','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donatur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `nim`, `angkatan`, `prodi`, `alamat`, `provinsi`, `hp`, `beasiswa`, `role`, `keterangan`, `donatur`, `remember_token`, `email_verified_at`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Marfino Hamzah', 'marfinohamzah455@gmail.com', '$2y$10$GVovaraMj1xsb2YFWWzgd.MOkEgszd0xU.xVBuDshYiZj3D0Vc0l6', NULL, NULL, '1234', '2020/2021', 'Hukum Ekonomi Syariah', 'Arjuna 2', '', '089626312680', 'SDM EKSPAD', 'mahasiswa', 'ini itu si', 'ZS', NULL, NULL, 'profile-photos/IYTlX1k4X5doObaXqmetKlzdv8Mo7XrMUf28H0zZ.png', NULL, '2021-04-18 08:18:39'),
(2, 'Valenia Tabhita Putri', 'valeniatp@gmail.com', '$2y$10$nugTBhIluDJPvOiB6114wusi6LD92XLHiI.Xl6g3hCbSD1rTJRZRm', NULL, NULL, '12345', '2021/2022', 'Perbankan Syariah', 'Kaliwingko', '', '089626512680', 'HAFIDZ', 'mahasiswa', 'itu ini tapi gapapa', 'SSF', NULL, NULL, NULL, NULL, NULL),
(3, 'Yoyo Sundoyo', 'arroisy.ys@gmail.com', '$2y$10$n/z3TG8FusUqrF480TQVAeUEOxxQmfB..d3CLty1vYSpgyull120u', NULL, NULL, '12345', '2021/2022', '', 'Kaliwingko', '', '089626512680', '', 'admin', '', '', 'b9VIvhHCpn7N8fEt3iPDnJIX9HIY8I2U9qEazByFFVSEJPyVlG23qhnMUqYg', NULL, NULL, NULL, NULL),
(4, 'Hilyah Nafisah', 'hilyahnafisah25@gmail.com', '$2y$10$n/z3TG8FusUqrF480TQVAeUEOxxQmfB..d3CLty1vYSpgyull120u', NULL, NULL, '123456', '2021/2022', '', 'Kaliwingko', '', '089626512680', 'Ekspad', 'admin', '', '', NULL, NULL, 'profile-photos/dQzdCebarSOauvTh5xRvkBl6GJEoFnIgJYX5YxgX.jpg', NULL, '2021-06-06 21:29:49'),
(5, 'Dr. Ronaldo Braun', 'qboyle@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'agwkTH0qeZ', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(6, 'Zander Rolfson Jr.', 'hkeebler@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Ov2JN1hkwq', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(7, 'Dr. Christ Oberbrunner I', 'winnifred.runolfsdottir@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'yS0th4YdDc', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(8, 'Emmet Kiehn', 'uschneider@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'cW9LwtT3Fa', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(9, 'Barbara Runte', 'stoltenberg.krystina@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'jQXospoWoz', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(10, 'Mr. Gillian Gislason PhD', 'barton.lindsey@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'wA3jIuUDAz', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(11, 'Orland Gerhold', 'jefferey65@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'SN5EJSkHfZ', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(12, 'Elza Hayes', 'thermiston@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '8ynMpu6SCn', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(13, 'Marge Brekke', 'tressa.koch@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'm2UcXc0WBK', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(14, 'Mr. Kacey West DVM', 'charles98@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '41M98Ghctc', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(15, 'Zetta Mertz', 'beulah.wolf@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'wkmUORlpKe', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(16, 'Clark Kerluke', 'leon.mcglynn@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'TPKUWpukaR', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(17, 'Leopold Baumbach', 'bauch.cordelia@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '8SofIdxv1V', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(18, 'Naomie Farrell', 'koelpin.eda@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'cb8zKIr8Jm', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(19, 'Kaden Runolfsson', 'wolf.troy@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'davAcw9lAv', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(20, 'Cordia Muller I', 'nelle96@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '0WNERN1q4S', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(21, 'Travon Schaefer', 'vivianne13@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'LzdTNjFvzA', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(22, 'Ms. Syble Murphy', 'morissette.austin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'DJxKFVQwJw', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(23, 'Miss Claudine Satterfield PhD', 'quinten31@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'TLfZhF9OyP', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(24, 'Myrna Murphy', 'geo68@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'yn3soPYzKx', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(25, 'Freda Toy', 'runolfsdottir.jaylin@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '7cpOSJtDkO', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(26, 'Mr. Sage Metz DDS', 'halvorson.jewel@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '19SN0VG7Ji', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(27, 'Jonathan Nitzsche', 'erdman.leanna@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'ClSvUQJIO5', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(28, 'Renee Bosco', 'hilbert.stark@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'nXkmuupBwn', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(29, 'Jameson Sanford', 'gheaney@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'R3crmZ1Vlf', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(30, 'Savanna Stracke', 'granville.rice@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'qIdjFkfWHj', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(31, 'Janick Emmerich', 'aniya43@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '9FLm50M4zm', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(32, 'Dr. Emmitt Hintz I', 'destiny.turcotte@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '2JyqaKBX6u', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(33, 'Mrs. Felicita Mills', 'armando22@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'bdsJzwO8fD', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(34, 'Cydney Abshire Sr.', 'elyse.ohara@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'PiwsC6TQX6', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(35, 'Mr. Dexter Erdman V', 'mariano.hermann@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'qWm8f2vJfe', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(36, 'Ramona Baumbach', 'sawayn.jaunita@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'YVhoZi2Al5', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(37, 'Miss Harmony Yundt', 'diamond.homenick@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'BhASLL9UOV', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(38, 'Mr. Eduardo Thompson', 'marina.legros@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'VRaH4FF2v1', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(39, 'Sheridan Heidenreich', 'josh05@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'mEyWyQ8WtR', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(40, 'Christiana Collins', 'akshlerin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'YcmaEsYKAk', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(41, 'Prof. Margret Wisozk', 'rice.ericka@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'trLrfqd5TA', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(42, 'Erik Terry', 'jazmyn.boehm@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '2bsGWtWNEY', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(43, 'Mrs. Arlie Crist III', 'iturner@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'qNZhxLR5PI', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(44, 'Cecelia Murphy IV', 'jhammes@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'ihmp3DojGI', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(45, 'Khalil Mayer PhD', 'frida82@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'ZXth71O9kJ', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(46, 'Lolita Keeling V', 'nhintz@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'QHjyHuAg0t', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(47, 'Carson Mayer', 'schaefer.adalberto@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '7eAfYjn0a4', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(48, 'Waino Baumbach', 'assunta67@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '0ICNi8lKWn', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(49, 'Opal Price', 'cronin.kris@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'gZfEjdIJfa', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(50, 'Mr. Verner Yundt', 'gdavis@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'YULzahGI2Q', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(51, 'Britney Dare', 'yrogahn@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'R28pQ2AFDk', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(52, 'Khalid Nader', 'wkunze@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'XumpMvI0oR', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(53, 'Miss Eula Toy', 'langworth.rod@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'o1THf5BKBH', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(54, 'Tamara Adams MD', 'reva80@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'QRTDDwnxIA', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(55, 'Benton Kessler', 'vwuckert@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'NPtKo5nFLM', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(56, 'Isaac Pollich V', 'tprosacco@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Asqyy4Eofd', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(57, 'Velda Batz', 'armstrong.marquis@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'EwY1sZLRmm', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(58, 'Kiley O\'Conner', 'ncrooks@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '7uAu7MGhRj', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(59, 'Herminio O\'Connell', 'vaughn.purdy@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'q1h77vKHGy', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(60, 'Tara Kovacek', 'ybergstrom@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'kvvi9UGO0C', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(61, 'Mrs. Reanna Schumm', 'cassin.logan@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'KXWD3VYvlD', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(62, 'Verlie Frami II', 'ereichert@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'YkRklNqBRy', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(63, 'Isidro Weimann', 'kasey59@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '028BkWLs6N', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(64, 'Miss Carole Metz Jr.', 'davin.champlin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'MHKxl6scK5', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(65, 'Larue Sawayn', 'luettgen.demond@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'qvJG83F1oh', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(66, 'Noah Jenkins II', 'gutkowski.randi@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'liOif4DrWI', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(67, 'Malika Schumm', 'terence.rippin@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '9yxJ49KhTc', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(68, 'Leonie Blanda', 'lorenza57@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'ywpJmNjxYd', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(69, 'Salvador Pouros V', 'ofelia.wiza@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'aJBuA3AFO6', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(70, 'Deja Ziemann', 'hbeier@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'uSKnBCiRy6', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(71, 'Alvina Hessel', 'barbara.harvey@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Fnpkuz9gyl', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(72, 'Prof. Garret Emmerich', 'mayert.thaddeus@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '9mD2oXe3ii', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(73, 'Dr. Carlee Wuckert V', 'tjones@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'J0T7SouQVx', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(74, 'Arvilla Kilback', 'stracke.skyla@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '8I7IKNOw9B', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(75, 'Prof. Xavier Barton', 'jyost@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '1eRjbEIHqh', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(76, 'Agnes Champlin', 'treutel.ava@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'nJ7FcviSDC', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(77, 'Ruth Kutch', 'tod.ullrich@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'wXYnD3T0La', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(78, 'Fermin Bode V', 'marianna.will@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'dPkXrqofhv', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(79, 'Prof. Bernadette Lesch Jr.', 'luther52@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'QOn8bmrWDz', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(80, 'Dr. Imelda Fahey I', 'christelle.koelpin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'K0IGA9aG3S', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(81, 'Jaylon Wuckert', 'kbarrows@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'JnCWqjvSL3', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(82, 'Emelia Kulas', 'nkuhic@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '7hDvAdJPEY', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(83, 'Johann Schinner', 'skuhic@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'iKHBpj58l5', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(84, 'Roel Borer', 'qdoyle@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'H0cTNaUkAz', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(85, 'Ms. Michelle Walter', 'bailey.kerluke@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'JVsxieWWzN', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(86, 'Noemie Nitzsche', 'wmann@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'qQjpXLFqTR', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(87, 'Ernestine Pouros', 'amir90@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'xP9s8sMh8l', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(88, 'Ms. Jennifer Frami', 'wilma33@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Qehev9Tt6P', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(89, 'Celia Smitham I', 'dawson04@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '9UqKn8HLKU', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(90, 'Sandra Klein', 'corkery.grady@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Rgtulmw9iz', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(91, 'Cielo Daugherty', 'schulist.ashton@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '2pfypyv89g', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(92, 'Kailey Beier', 'mervin87@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'ERiHz8wVcp', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(93, 'Deanna Volkman', 'naomi.volkman@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '7wM71arMjv', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(94, 'Lelah McCullough', 'iokuneva@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'tGBjPPf3xR', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(95, 'Heath Gerlach', 'stokes.pamela@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'VleQfdCscs', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(96, 'Iliana Feil', 'xprice@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Ftsubqghxy', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(97, 'Sandrine Lueilwitz', 'meaghan45@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'TSRcjB3580', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(98, 'Ms. Autumn Abshire', 'juwan.nienow@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'XuEeK5C5ei', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(99, 'Prof. Dedric Runolfsdottir I', 'pink06@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', '14eZyvzUuS', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(100, 'Anita Denesik', 'dayana59@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'CQnVYidn47', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(101, 'Josiane Haley', 'anderson.kyler@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'JRSVCc3Oo9', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(102, 'Dr. Angus Johns DDS', 'uwyman@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'jlgl3qd5HE', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(103, 'Rasheed Schaefer DVM', 'emilio.pouros@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'k1QmKUamtk', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41'),
(104, 'Euna West', 'ijenkins@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '', '', '', '', '', '', '', 'mahasiswa', '', '', 'Bal8M6EMpU', '2021-06-21 22:56:41', NULL, '2021-06-21 22:56:41', '2021-06-21 22:56:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_semester_id_foreign` (`semester_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentoring_users_id_foreign` (`users_id`),
  ADD KEY `mentoring_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_users_id_foreign` (`users_id`),
  ADD KEY `messages_semester_id_foreign` (`semester_id`);

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
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mentoring`
--
ALTER TABLE `mentoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `org_mhs`
--
ALTER TABLE `org_mhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sosial`
--
ALTER TABLE `sosial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tahsin`
--
ALTER TABLE `tahsin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

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
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);

--
-- Constraints for table `mentoring`
--
ALTER TABLE `mentoring`
  ADD CONSTRAINT `mentoring_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `mentoring_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `messages_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

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
