-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 06:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2020_05_21_100000_create_teams_table', 1),
(19, '2020_05_21_200000_create_team_user_table', 1),
(20, '2020_05_21_300000_create_team_invitations_table', 1),
(21, '2023_05_13_080545_create_sessions_table', 1),
(22, '2023_05_15_071031_create_customers_table', 1),
(23, '2023_05_16_153008_create_posts_table', 1),
(24, '2023_05_19_063936_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'Employee', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Customer', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('k7EUZLDioXYCdso5pGC0q7HUHgtFwxJpibGuJtv3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo1OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoicVRYZVFyUVN6SWxFMlpVbXNXT1p5WDFseEZ1WGRPalpuOWd6eTA1VSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkNVkwLjF1b3FNLmRLM0llRWQyWU5CdWhrN2hXTzdSL1R2U0xRM0hnTThtclRnVlRtZ2VhSTIiO30=', 1684643784),
('yy7MtIFGvCUTEzEnEeIm9HYCmHjxSFaRjDtbExIh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2JpVVlFMXRCYVZKS2lRSFpXTkNHVWQzTnZvN29DdVFYM29nM1ROciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1684640287);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'sanadhi\'s Team', 1, '2023-05-19 02:58:32', '2023-05-19 02:58:32'),
(2, 2, 'Admin\'s Team', 1, '2023-05-19 02:58:55', '2023-05-19 02:58:55'),
(3, 3, 'employee\'s Team', 1, '2023-05-19 03:15:12', '2023-05-19 03:15:12'),
(4, 4, 'Suga\'s Team', 1, '2023-05-19 06:21:25', '2023-05-19 06:21:25'),
(5, 5, 'Sanduni\'s Team', 1, '2023-05-20 00:11:12', '2023-05-20 00:11:12'),
(6, 6, 'Reed\'s Team', 1, '2023-05-20 00:12:57', '2023-05-20 00:12:57'),
(7, 7, 'Admin\'s Team', 1, '2023-05-20 00:13:54', '2023-05-20 00:13:54'),
(8, 8, 'Employee2\'s Team', 1, '2023-05-20 06:23:11', '2023-05-20 06:23:11'),
(9, 14, 'Harry\'s Team', 1, '2023-05-20 08:16:12', '2023-05-20 08:16:12'),
(10, 15, 'Poppy\'s Team', 1, '2023-05-20 08:29:52', '2023-05-20 08:29:52'),
(11, 17, 'Customer\'s Team', 1, '2023-05-20 22:22:31', '2023-05-20 22:22:31'),
(12, 18, 'Admin02\'s Team', 1, '2023-05-20 22:29:47', '2023-05-20 22:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role_id`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'sanadhi', 'sanadhi2002@gmail.com', NULL, '$2y$10$EvJozZIDOnpQXlmezV8GRO4y29xRUh.xGESBuv8ELR6Qtp98dbhG.', NULL, NULL, NULL, 2, NULL, 1, NULL, '2023-05-19 02:58:32', '2023-05-20 08:40:26'),
(3, 'employee1', 'employee1@gmail.com', NULL, '$2y$10$UpX1HHVtvMiLcMUYpLA7Muxad5RKfcGFfya4u5hROyOvCzHjAumUm', NULL, NULL, NULL, 1, NULL, 3, NULL, '2023-05-19 03:15:11', '2023-05-20 06:25:07'),
(4, 'Suga', 'Suga@gmail.com', NULL, '$2y$10$nqwLVVVqUiLNObl.ySQnk.t8bEOjd5avDN/b79e2h.yMnLnYecIMi', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2023-05-19 06:21:25', '2023-05-19 06:21:25'),
(5, 'Sanduni', 'Sanaduni123@gmail.com', NULL, '$2y$10$x5AtKr1fnHUrfwXcCWWWGOi8fEgpxyo2RXqIHd3rFJiXvrrXO8Yj.', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2023-05-20 00:11:12', '2023-05-20 00:11:12'),
(6, 'Reed', 'Reed@gmail.com', NULL, '$2y$10$091mHugmd7baoPTiemjriumI/GqOr9yyUK/k8U6bQ02w3Fh8r9HNy', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2023-05-20 00:12:57', '2023-05-20 00:12:57'),
(7, 'Admin', 'Admin01@gmail.com', NULL, '$2y$10$Efeey8NDY8sEOyjINpmm9ewUT0h4bhw6dwjhjYEhF.hetVl3UrxuO', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2023-05-20 00:13:54', '2023-05-20 00:13:54'),
(8, 'Employee2', 'Employee2@gmail.com', NULL, '$2y$10$W7OLS62yxpYm7p/C1HL4veGjkOZkGLg4c3xKrej9nmioMHACajVPW', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-05-20 06:23:10', '2023-05-20 06:23:10'),
(9, 'jin', 'jin@gmail.com', NULL, '$2y$10$Efeey8NDY8sEOyjINpmm9ewUT0h4bhw6dwjhjYEhF.hetVl3UrxuO', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2023-05-20 07:10:45', '2023-05-20 22:10:10'),
(13, 'Employee3', 'Employee3@gmail.com', NULL, '$2y$10$Efeey8NDY8sEOyjINpmm9ewUT0h4bhw6dwjhjYEhF.hetVl3UrxuO', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-05-20 07:13:31', '2023-05-20 22:13:56'),
(15, 'Poppy', 'Poppy@gmail.com', NULL, '$2y$10$zqRyqqV3mmzQhOKNfUTR7.7tjTEwudsZBe6tWGVnWFyQGbJzGWi/e', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2023-05-20 08:29:52', '2023-05-20 22:09:56'),
(16, 'Employee4', 'Employee4@gmail.com', NULL, '$2y$10$Efeey8NDY8sEOyjINpmm9ewUT0h4bhw6dwjhjYEhF.hetVl3UrxuO', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-05-20 22:14:20', '2023-05-20 22:14:20'),
(17, 'Customer', 'Customer@gmail.com', NULL, '$2y$10$5Y0.1uoqM.dK3IeEd2YNBuhk7hWO7R/TvSLQ3HgM8mrTgVTmgeaI2', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2023-05-20 22:22:31', '2023-05-20 22:22:31'),
(18, 'Admin02', 'Admin02@gmail.com', NULL, '$2y$10$.KTxKpwLLENeMPrnyB6cFO9qw/RmNdWDh8pN5FBK0BsCv9EFoqmMi', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2023-05-20 22:29:46', '2023-05-20 22:29:46');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
