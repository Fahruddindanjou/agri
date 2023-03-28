-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 11:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agribisnis`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Agri Peternakan', 'http://127.0.0.1:8000/images/26032023_7ac116de47b64a35494721da80fb329d225ac7bf.jpg', 'ya', '2023-03-26 09:42:08', '2023-03-26 10:29:58'),
(2, 'Agri Bisnis', 'http://127.0.0.1:8000/images/26032023_38460d7f5bd9e8b9da1b9e57f309814279b040ef.jpg', 'ya', '2023-03-26 10:17:10', '2023-03-26 10:17:10'),
(3, 'Agri Pertanian', 'http://127.0.0.1:8000/images/26032023_46c3c8ee803d360d70fe73425bb053cc28f8187c.jpg', 'ya', '2023-03-26 10:22:40', '2023-03-26 10:22:40'),
(4, 'Agri Pertanian', 'http://127.0.0.1:8000/images/26032023_a730bcbac6854090873fb8d6a282981cbb262cca.jpg', 'ya', '2023-03-26 10:36:50', '2023-03-26 10:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_yt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('main','informasi','pertanian','youtube') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `kategori_id`, `title`, `image`, `content`, `url_yt`, `type`, `created_at`, `updated_at`) VALUES
(4, 1, 'Tembakau', 'http://127.0.0.1:8000/images/26032023_38460d7f5bd9e8b9da1b9e57f309814279b040ef.jpg', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas est metus, non feugiat est ultrices molestie. Fusce scelerisque dui eu bibendum ullamcorper. Praesent mattis tortor dignissim nibh gravida, et dictum felis facilisis. Nulla facilisi. Mauris molestie nisi ultrices dui dictum, in porta erat tincidunt. Nulla mattis ipsum sit amet mollis finibus. Suspendisse non diam rhoncus, dignissim augue sed, euismod diam. Integer et dapibus dui. Phasellus a ex mattis, consectetur urna quis, dapibus odio. Mauris blandit lacus eget lacinia semper. Fusce interdum, mauris sed maximus venenatis, dui ex tincidunt ipsum, sed consectetur dolor libero non ligula.</span>', 'https://www.youtube.com/watch?v=s9qZnhpgspg&t', 'main', '2023-03-26 08:09:52', '2023-03-26 10:43:13'),
(5, 2, 'Pertanian', 'https://via.placeholder.com/700x400.png/008855?text=No+image', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit vitae nisl vulputate rhoncus ut auctor magna. Phasellus porttitor tincidunt urna sit amet maximus. Vivamus pellentesque risus ut eros tincidunt fermentum. Ut nec feugiat massa, quis euismod mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras sodales leo nulla, non tincidunt eros bibendum fringilla. Etiam convallis, felis nec dictum vulputate, augue nisl ornare orci, eu gravida lorem erat eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>', 'https://www.youtube.com/embed/YxYvJhEqC98', 'youtube', '2023-03-26 11:15:36', '2023-03-26 11:28:36'),
(6, 1, 'sodales sagittis lorem egestas non. Sed at rutrum velit.', 'http://127.0.0.1:8000/images/27032023_01dd47e07ecb2afb62376faa7128fd3349184af6.jpg', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper. Duis pulvinar pulvinar est,</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper. Duis pulvinar pulvinar est,</span>', 'asdasd', 'informasi', '2023-03-26 22:12:18', '2023-03-26 22:27:07'),
(7, 2, 'Brokoli Tanaman Hijau Menyehatkan', 'http://127.0.0.1:8000/images/27032023_120db1ae844db716b9aefdede4af0a697cd645cc.jpg', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat hendrerit mi, sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper. Duis pulvinar pulvinar est</span>', 'https://www.youtube.com/embed/s9qZnhpgspg', 'pertanian', '2023-03-26 22:36:37', '2023-03-26 22:36:37');

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('berita','informasi','produk') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'berita',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'informasi', 'informasi', NULL, NULL),
(2, 'berita', 'berita', NULL, NULL),
(3, 'produk', 'produk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_23_142434_banner', 1),
(6, '2023_03_23_142437_berita', 1),
(7, '2023_03_23_142440_kategori', 1),
(8, '2023_03_23_142443_menu', 1),
(9, '2023_03_23_142446_partner', 1),
(10, '2023_03_23_142448_pesan', 1),
(11, '2023_03_23_142452_produk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `deskripsi`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Berkah Barokah', 'http://127.0.0.1:8000/images/26032023_74ba0386260b2e5f9c64925bc6833ff30f0dc171.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat hendrerit mi, sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper.', 'www.berkahbarokah.com', '2023-03-26 15:45:45', '2023-03-26 15:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bestseller` enum('best','normal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'best',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `kategori_id`, `user_id`, `name`, `harga`, `image`, `deskripsi`, `lokasi`, `rating`, `terjual`, `url`, `bestseller`, `created_at`, `updated_at`) VALUES
(4, '3', 'seller', 'Apel', 1233, 'http://127.0.0.1:8000/images/27032023_f212bddb6d0e421d742d0a345f15958aded75839.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat hendrerit mi, sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper.', 'Perumda', 13, 123333, 'www.singkong.com', 'best', '2023-03-26 18:10:52', '2023-03-26 18:10:52'),
(5, '3', 'seller', 'Pepaya', 15000, 'http://127.0.0.1:8000/images/27032023_bdd19b8aac3a60810cf86c5c53430bc8ff5e7c92.jpg', 'Duis pulvinar pulvinar est, eget lacinia odio tristique ut. Duis nunc dui, pellentesque nec justo vel, ullamcorper blandit velit.', 'Perumda', 13, 15, 'www.berkahbarokah.com', 'best', '2023-03-26 18:45:43', '2023-03-26 18:45:43'),
(6, '3', 'seller', 'pisang', 123, 'http://127.0.0.1:8000/images/27032023_b69468d2873f496682060309cd6a20a1a4508cc7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat hendrerit mi, sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper.', 'Perumda', 13, 1233, 'www.singkong.com', 'best', '2023-03-26 18:49:04', '2023-03-26 18:49:04'),
(8, '3', 'seller', 'Selada', 1233, 'http://127.0.0.1:8000/images/27032023_b132e66a9d8c2efdb426c735baa211513aec5298.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat hendrerit mi, sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper.', 'Perumda', 13, 123333, 'www.singkong.com', 'best', '2023-03-26 22:07:44', '2023-03-26 22:07:44'),
(9, '3', 'seller', 'Kambing', 15000, 'http://127.0.0.1:8000/images/27032023_08fda0244b5397e030ee401fd2bea5b24f78a72b.jpg', 'sodales sagittis lorem egestas non. Sed at rutrum velit. Fusce laoreet erat sit amet ex blandit, eu ullamcorper sem semper. Duis pulvinar pulvinar est,', 'Kandang Kambing', 1, 123, 'www.kambing.com', 'best', '2023-03-26 22:10:15', '2023-03-26 22:10:15');

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
  `role` enum('admin','user','seller') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
