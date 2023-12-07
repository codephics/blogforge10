-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 10:44 AM
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
-- Database: `blogforge10`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `header_title` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `seller_name` varchar(100) NOT NULL DEFAULT 'TempDev',
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `facebook_meta_title` varchar(100) DEFAULT NULL,
  `facebook_meta_description` varchar(200) DEFAULT NULL,
  `twitter_meta_title` varchar(100) DEFAULT NULL,
  `twitter_meta_description` varchar(200) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT 0,
  `featured_image` varchar(255) NOT NULL DEFAULT 'default-featured-image.png',
  `featured_img_alt_text` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL DEFAULT 'default-file.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Category1', 'category1', 'Category1', '<h1>Category1</h1>', 'Category1', 'Category1', 'Category1', 'Category1', 'Category1', 'Category1', 'dummy-icon-2.png', 'Category1', 'dummy-thumb-2.png', 'Category1', 'dummy-cover-2.jpg', 'Category1', 'islamic-authentic-english-books-og.jpg', 'Category1', '2023-12-06 21:40:00', '2023-12-06 21:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `blog_subcategories`
--

CREATE TABLE `blog_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `category_name` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_subcategories`
--

INSERT INTO `blog_subcategories` (`id`, `subcategory_name`, `slug`, `title`, `category_name`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Subcategory1', 'subcategory1', 'Subcategory1', 'Category1', '<h1>Subcategory1</h1>', 'Subcategory1', 'Subcategory1', 'Subcategory1', 'Subcategory1', 'Subcategory1', 'Subcategory1', 'dummy-icon-2.png', 'Subcategory1', 'dummy-thumb-2.png', 'Subcategory1', 'dummy-cover-2.jpg', 'Subcategory1', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'Subcategory1', '2023-12-06 21:57:03', '2023-12-06 21:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `blog_sub_subcategories`
--

CREATE TABLE `blog_sub_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_subcategory_name` varchar(199) NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_sub_subcategories`
--

INSERT INTO `blog_sub_subcategories` (`id`, `sub_subcategory_name`, `subcategory_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(1, 'Sub Subcategory1', 'Subcategory1', 'sub-subcategory1', 'Sub Subcategory1', '<h1>Sub Subcategory1</h1>', 'Sub Subcategory1', 'Sub Subcategory1', 'Sub Subcategory1', 'Sub Subcategory1', 'Sub Subcategory1', 'Sub Subcategory1', 'dummy-icon-2.png', 'Sub Subcategory1', 'dummy-thumb-2.png', 'Sub Subcategory1', 'dummy-cover-2.jpg', 'Sub Subcategory1', 'islamic-authentic-english-books-og.jpg', 'Sub Subcategory1', '2023-12-06 22:00:50', '2023-12-06 22:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `facebook_meta_title` varchar(100) DEFAULT NULL,
  `facebook_meta_description` varchar(200) DEFAULT NULL,
  `twitter_meta_title` varchar(100) DEFAULT NULL,
  `twitter_meta_description` varchar(200) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `slug`, `description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Tag1', 'tag1', '<h1>Tag1</h1>', NULL, NULL, 'Tag1', 'Tag1', 'Tag1', 'Tag1', 'Tag1', 'Tag1', 'dummy-icon-2.png', 'Tag1', 'dummy-thumb-2.png', 'Tag1', 'dummy-cover-2.jpg', 'Tag1', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'Tag1', 0, NULL, '2023-12-06 22:04:05', '2023-12-06 22:08:20');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_05_064531_create_blogs', 1),
(6, '2023_08_24_040247_create_pages', 1),
(7, '2023_11_11_085544_create_blog_categories', 1),
(8, '2023_11_11_085555_create_blog_subcategories', 1),
(9, '2023_11_11_085605_create_blog_sub_subcategories', 1),
(10, '2023_11_15_095336_create_blog_tags', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `breadcrumb_image` varchar(255) NOT NULL DEFAULT 'default-breadcrumb.png',
  `cover_image` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og.png',
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Codephics', 'codephics@gmail.com', NULL, '$2y$12$ghqlJvYuJQhzGErgCno0o.vx1tyDs7LIIvCpHZGrasRpuJUjSk7zy', NULL, '2023-12-05 23:16:18', '2023-12-07 00:46:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_subcategories`
--
ALTER TABLE `blog_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_sub_subcategories`
--
ALTER TABLE `blog_sub_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_subcategories`
--
ALTER TABLE `blog_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_sub_subcategories`
--
ALTER TABLE `blog_sub_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
