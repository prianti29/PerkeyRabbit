-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2023 at 05:06 AM
-- Server version: 5.7.33
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perkyrabbit`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_21_141048_create_posts_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(13, 2, 'FIFA Women’s World Cup: Where do we go from here?', 'Legacy – the long-lasting impact of particular events. A moment in time that changes the course of life, but in this case, the alteration of women\'s football.', 'uploads/1692765438.avif', '2023-08-22 22:37:18', '2023-08-22 22:37:18'),
(14, 3, 'New sugarcane prices perk up farmers', 'In fiscal year 2000-21, 69 lakh tonnes of sugarcane had been produced on some 4.21 lakh acres of land, according to the Bangladesh Bureau of Statistics.', 'uploads/1692765597.webp', '2023-08-22 22:39:57', '2023-08-22 22:39:57'),
(15, 3, '11 listed NBFIs leave investors in dark', 'Seven months have passed since the world bid adieu to 2022, but almost half of the listed non-bank financial institutions (NBFIs) in Bangladesh have not published their financial statements for the year, breaching securities rules.', NULL, '2023-08-22 22:40:40', '2023-08-22 22:40:40'),
(16, 3, 'As wildfires multiply, a new era of air pollution', 'From Quebec to British Columbia to Hawaii, North America is facing an extraordinary wildfire season -- and regions both near and far have found themselves increasingly blighted by smoke exposure.', NULL, '2023-08-22 22:41:34', '2023-08-22 22:41:34'),
(17, 4, 'Empowering Bangladesh’s digital future', 'Micro, small, and medium enterprises (MSMEs) are the lifeblood of Bangladesh\'s economy, comprising 90 per cent of sellers on various e-commerce platforms. Bangladesh has experienced a remarkable transformation in its digital landscape', NULL, '2023-08-22 22:45:11', '2023-08-22 22:45:11'),
(18, 2, 'Scale up climate change adaptation as soon as possible', 'The recent floods in Bandarban and Chattogram have left behind a trail of deaths, while waterlogging put countless lives in misery. To make matters worse, this was just one of the many episodes caused by unusually heavy rainfall,', NULL, '2023-08-22 22:46:13', '2023-08-22 22:46:13'),
(19, 4, 'Enter ‘global boiling’', 'July was the hottest month ever recorded on our planet. It marks a clear turning point from the previous era of talking about global warming as something that will happen in the future to recognising that it is happening already.', 'uploads/1692766057.avif', '2023-08-22 22:47:38', '2023-08-22 22:47:38'),
(20, 5, 'Why buying books in English medium schools is needlessly expensive and wasteful', 'I know for a fact that I barely touched some of my textbooks during my A levels. There was almost a disconnect between what the teachers and students wanted and the books that we were made to use', 'uploads/1692766179.avif', '2023-08-22 22:49:39', '2023-08-22 22:49:39'),
(21, 6, 'Dengue Outbreak: 21-40 age group hit the hardest', 'Workers of Dhaka North City Corporation using fogger machines to kill off Aedes mosquitoes in a bid to curb the spread of dengue in the capital’s Lalmatia. dengue cases reached a record high in the country since the first major outbreak in the year 2000', NULL, '2023-08-22 22:52:27', '2023-08-22 22:52:27'),
(22, 5, 'Traffic police officers in Ahmedabad, India donning \'AC helmets\'', 'Divyarajsinh Rana, one of the traffic constables who have been using the AC helmets, donning the AC helmet on duty.', NULL, '2023-08-22 22:53:10', '2023-08-22 22:53:10'),
(23, 4, 'Meta to launch desktop version of Threads soon: reports', 'Meta Platforms, the company behind Facebook, WhatsApp, and Instagram, is planning on releasing a desktop version of their newest text-based app Threads, as per a report from The Wall Street Journal.', 'uploads/1692766454.avif', '2023-08-22 22:54:14', '2023-08-22 22:54:14'),
(24, 2, 'First-ever Mobile Legends Bangladesh Championship wraps up', 'After a tough round of competition, Hellbent OPx emerged victorious, securing the title and a generous prize pool of US$1000, along with 200,000 in-game diamonds, equating to approximately BDT 4 lakh worth of in-game rewards.', 'uploads/1692766515.avif', '2023-08-22 22:55:15', '2023-08-22 22:55:15');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$r64ijPTFjCbz6XrRCwpkZ.YGo2A/0jnPBXXKRdk0hBE08KfqVgjuO', NULL, '2023-08-21 09:36:30', '2023-08-21 09:36:30'),
(2, 'Raiyan Binte Rafiq', 'raiyan@gmail.com', NULL, '$2y$10$iSFezi8aBexIFjIEFktr1u1tfCo4b.BORtyLxcgSC.3DYjlUS9nqC', NULL, '2023-08-22 22:34:36', '2023-08-22 22:34:36'),
(3, 'Quamrul Islam Rubaiyat', 'quamrul@gmail.com', NULL, '$2y$10$rP.fhArqPiif.mDUg/imH.xm4lQKazq1RryV7BDs2ddAcLaj9KlES', NULL, '2023-08-22 22:39:11', '2023-08-22 22:39:11'),
(4, 'AHM Hasinul Quddus Rusho', 'hasinul@gmail.com', NULL, '$2y$10$U1HaCKAYzGx2LGvyy2o.xuxn4blAohHY5.Kj8bxPyq7fLTn1nXHru', NULL, '2023-08-22 22:42:22', '2023-08-22 22:42:22'),
(5, 'Azneef Chowdhury', 'azneef@gmail.com', NULL, '$2y$10$M1x9HadgPdTyobnf2eDR9.wSkOuH1djeV5lKUpe.UjlCfXJldaHSu', NULL, '2023-08-22 22:48:42', '2023-08-22 22:48:42'),
(6, 'Helemul Alam', 'helemul@gmail.com', NULL, '$2y$10$.GeljZhUdgu79MoZzNUQpeNjbIV2/S6h877W8D7CTRfyWgi.KgZEe', NULL, '2023-08-22 22:50:26', '2023-08-22 22:50:26');

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
