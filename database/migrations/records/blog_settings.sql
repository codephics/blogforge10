-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 11:17 AM
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
-- Table structure for table `blog_settings`
--

CREATE TABLE `blog_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `about_in_short` text DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `linkedIn_url` varchar(255) DEFAULT NULL,
  `pinterest_url` varchar(255) DEFAULT NULL,
  `reddit_url` varchar(255) DEFAULT NULL,
  `tiktok_url` varchar(255) DEFAULT NULL,
  `whatsapp_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `quora_url` varchar(255) DEFAULT NULL,
  `snapchat_url` varchar(255) DEFAULT NULL,
  `telegram_url` varchar(255) DEFAULT NULL,
  `tumblr_url` varchar(255) DEFAULT NULL,
  `wechat_url` varchar(255) DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `favicon_apple_alt_text` varchar(255) DEFAULT NULL,
  `favicon_apple` varchar(255) NOT NULL DEFAULT 'apple-touch-icon.png',
  `favicon_32_alt_text` varchar(255) DEFAULT NULL,
  `favicon_32` varchar(255) DEFAULT 'favicon-32x32.png',
  `favicon_16_alt_text` varchar(255) DEFAULT NULL,
  `favicon_16` varchar(255) NOT NULL DEFAULT 'favicon-16x16.png',
  `logo_alt_text` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og.png',
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_settings`
--

INSERT INTO `blog_settings` (`id`, `title`, `tagline`, `about_in_short`, `facebook_url`, `twitter_url`, `instagram_url`, `linkedIn_url`, `pinterest_url`, `reddit_url`, `tiktok_url`, `whatsapp_url`, `youtube_url`, `quora_url`, `snapchat_url`, `telegram_url`, `tumblr_url`, `wechat_url`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `favicon_apple_alt_text`, `favicon_apple`, `favicon_32_alt_text`, `favicon_32`, `favicon_16_alt_text`, `favicon_16`, `logo_alt_text`, `logo`, `cover_alt_text`, `cover_image`, `og_img_alt_text`, `og_image`, `is_index`, `is_follow`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'BlogForge10', 'Elevate Your Blogging Experience with BlogForge10.', '<p>Discover BlogForge10 🚀 - Your ultimate blogging companion. Streamline content creation, ensure security, and enjoy cross-platform flexibility. Unleash optimized performance and gain insights with analytics. Join us at <a href=\"codephics.com\">codephics.com</a> for a simplified, powerful blogging experience!</p>', 'https://facebook.com', 'https://twitter.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'apple-touch-icon.png', NULL, 'favicon-32x32.png', NULL, 'favicon-16x16.png', NULL, '', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, NULL, NULL, NULL, '2023-12-13 23:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
