-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 11:31 AM
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

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `tags`, `header_title`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `template`, `seller_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `is_featured`, `featured_image`, `featured_img_alt_text`, `file`, `og_image`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, '🚀 Elevate Your Blogging Experience with BlogForge10 🚀', 'elevate-your-blogging-experience-with-blogForge10', 'BlogForge10', NULL, 'Category1', 'Subcategory1', 'Sub Subcategory1', NULL, 'TempDev', '<p>🚀 Simplify tasks, from creation to publication, with a streamlined workflow. Enjoy cross-platform compatibility for on-the-go management. Our robust security ensures data protection, while optimized performance guarantees a seamless user experience. Gain insights with comprehensive analytics and customize your blog with themes and layouts. Join savvy developers and revolutionize your blogging game. Sign up at BlogForge10.CodePhics.com for a new era of simplicity! 🌐✨</p>', '<p>Attention, fellow developers! Are you tired of juggling multiple tools to manage your blogs effectively? Say goodbye to the hassle and embrace efficiency with [Your Blog Management System]!</p>\r\n<p>✨ <strong>Streamlined Workflow</strong>: Experience a seamless blogging journey from creation to publication. Our system is designed to simplify your tasks, allowing you to focus on what you do best &ndash; writing captivating content.</p>\r\n<p>🌐 <strong>Cross-Platform Compatibility</strong>: Whether you\'re on your desktop, tablet, or smartphone, manage your blogs anytime, anywhere. Our responsive design ensures a consistent and user-friendly experience across devices.</p>\r\n<p>🔒 <strong>Robust Security Measures</strong>: Rest easy knowing that your valuable content is protected. We prioritize security, implementing robust measures to safeguard your data and maintain the integrity of your blogs.</p>\r\n<p>🚀 <strong>Optimized Performance</strong>: Speed matters! Enjoy swift load times and optimal performance, ensuring that your readers have a seamless browsing experience. Keep them engaged with your content without any lags or delays.</p>\r\n<p>📈 <strong>Analytics at Your Fingertips</strong>: Make informed decisions with comprehensive analytics. Understand your audience, track performance, and refine your strategy to reach new heights in the blogosphere.</p>\r\n<p>⚙️ <strong>Customization Galore</strong>: Tailor your blog to reflect your unique style. With customizable themes, layouts, and branding options, express yourself and captivate your audience with a visually stunning online presence.</p>\r\n<p>Ready to revolutionize your blogging game? Join the ranks of savvy developers who have already embraced [Your Blog Management System]. Elevate your blogging experience today!</p>\r\n<p>🔗 Download Now and unlock a new era of blogging simplicity: blogforge10.codephics.com</p>', NULL, NULL, 'Meta Title', NULL, NULL, NULL, NULL, NULL, 1, 'islamic-authentic-english-books-og.jpg', NULL, 'default-file.png', 'islamic-authentic-english-books-og.jpg', NULL, NULL, NULL, '2023-12-07 04:10:07', '2023-12-11 04:26:29'),
(3, 'Blog 1', 'blog-1', NULL, NULL, NULL, NULL, NULL, NULL, 'TempDev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, 'default-file.png', 'default-og-image.png', NULL, NULL, NULL, '2023-12-08 22:53:26', '2023-12-08 22:54:21'),
(4, 'Blog 2', 'blog-2', NULL, NULL, NULL, NULL, NULL, NULL, 'TempDev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, 'default-file.png', 'default-og-image.png', NULL, NULL, NULL, '2023-12-08 22:54:43', '2023-12-08 22:54:53'),
(5, 'Blog 3', 'blog-3', NULL, NULL, NULL, NULL, NULL, NULL, 'TempDev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, 'default-file.png', 'default-og-image.png', NULL, NULL, NULL, '2023-12-08 22:55:09', '2023-12-08 22:55:17'),
(6, 'Blog 4', 'blog-4', NULL, NULL, NULL, NULL, NULL, NULL, 'TempDev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, 'default-file.png', 'default-og-image.png', NULL, NULL, NULL, '2023-12-08 23:41:13', '2023-12-08 23:41:22'),
(7, 'Blog 6', 'blog-6', NULL, NULL, NULL, NULL, NULL, NULL, 'TempDev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, 'default-file.png', 'default-og-image.png', NULL, NULL, NULL, '2023-12-08 23:41:45', '2023-12-08 23:41:45');

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
-- Table structure for table `blog_pages`
--

CREATE TABLE `blog_pages` (
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
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `breadcrumb_image` varchar(255) NOT NULL DEFAULT 'default-breadcrumb.png',
  `breadcrumb_alt_text` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `name`, `title`, `slug`, `tags`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `thumb`, `thumb_alt_text`, `breadcrumb_image`, `breadcrumb_alt_text`, `cover_image`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', NULL, NULL, NULL, NULL, NULL, '<p>At BlogForge 10, we are committed to ensuring the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect your data when you interact with our cutting-edge blogging platform.</p>\r\n<p><strong>1. Information We Collect:</strong></p>\r\n<p>We may collect personal information when you download and use BlogForge 10. This includes:</p>\r\n<ul>\r\n<li>Personal details (name, email) for account creation.</li>\r\n<li>Usage data to enhance user experience.</li>\r\n</ul>\r\n<p><strong>2. How We Use Your Information:</strong></p>\r\n<p>We use your information to:</p>\r\n<ul>\r\n<li>Provide access to the BlogForge 10 platform.</li>\r\n<li>Enhance user experience and improve our services.</li>\r\n<li>Communicate updates, features, and promotional offers.</li>\r\n</ul>\r\n<p><strong>3. Data Security:</strong></p>\r\n<p>We prioritize the security of your information. BlogForge 10 implements industry-standard measures to protect against unauthorized access, alteration, disclosure, or destruction of your data.</p>\r\n<p><strong>4. Third-Party Services:</strong></p>\r\n<p>BlogForge 10 may integrate with third-party services for analytics or social features. These services have their own privacy policies, and we encourage you to review them.</p>\r\n<p><strong>5. Cookies:</strong></p>\r\n<p>BlogForge 10 uses cookies to enhance your browsing experience. You can adjust your browser settings to refuse cookies, but this may limit certain features.</p>\r\n<p><strong>6. Data Retention:</strong></p>\r\n<p>We retain your data only for as long as necessary to fulfill the purposes outlined in this Privacy Policy unless a longer retention period is required by law.</p>\r\n<p><strong>7. Your Choices:</strong></p>\r\n<p>You have the right to access, correct, or delete your personal information. Contact us at&nbsp;<a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a> for assistance.</p>\r\n<p><strong>8. Updates to Privacy Policy:</strong></p>\r\n<p>We may update this Privacy Policy to reflect changes in our practices. Check this page for the latest information.</p>\r\n<p>By downloading and using BlogForge 10, you agree to the terms outlined in this Privacy Policy. If you have any questions or concerns, contact us at <a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a>.</p>\r\n<p>Embark on a new era of dynamic blogging with confidence, knowing that your privacy is our priority at BlogForge 10.</p>\r\n<p><em>Last Updated: 12-09-2023</em></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, NULL, NULL, '2023-12-09 03:12:00', '2023-12-09 04:39:54'),
(3, 'Terms of Service', 'Terms of Service', 'terms-of-service', NULL, NULL, NULL, NULL, NULL, '<p>Welcome to BlogForge 10! By accessing and using our cutting-edge blogging platform, you agree to comply with and be bound by the following Terms of Service. Please read these terms carefully before using BlogForge 10.</p>\r\n<p><strong>1. Acceptance of Terms:</strong></p>\r\n<p>By downloading, installing, or using BlogForge 10, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service.</p>\r\n<p><strong>2. User Eligibility:</strong></p>\r\n<p>You must be at least 18 years old to use BlogForge 10. By using our platform, you represent and warrant that you meet this eligibility requirement.</p>\r\n<p><strong>3. License:</strong></p>\r\n<p>BlogForge 10 grants you a limited, non-exclusive, non-transferable, and revocable license to use the platform for personal or business purposes. You may not sublicense, sell, or distribute BlogForge 10 without our explicit written consent.</p>\r\n<p><strong>4. User Account:</strong></p>\r\n<p>To access certain features of BlogForge 10, you may need to create an account. You are responsible for maintaining the confidentiality of your account information and agree to notify us immediately of any unauthorized use.</p>\r\n<p><strong>5. Prohibited Activities:</strong></p>\r\n<p>While using BlogForge 10, you agree not to:</p>\r\n<ul>\r\n<li>Violate any applicable laws or regulations.</li>\r\n<li>Infringe upon the rights of others.</li>\r\n<li>Engage in any fraudulent or malicious activities.</li>\r\n<li>Attempt to gain unauthorized access to BlogForge 10.</li>\r\n</ul>\r\n<p><strong>6. Intellectual Property:</strong></p>\r\n<p>All content, features, and functionality on BlogForge 10 are the exclusive property of BlogForge 10 and are protected by international copyright, trademark, and other intellectual property laws.</p>\r\n<p><strong>7. Limitation of Liability:</strong></p>\r\n<p>BlogForge 10 is provided \"as is\" without any warranties. We shall not be liable for any direct, indirect, incidental, special, or consequential damages.</p>\r\n<p><strong>8. Termination:</strong></p>\r\n<p>BlogForge 10 reserves the right to terminate or suspend your access to the platform at any time, without prior notice, for any reason.</p>\r\n<p><strong>9. Changes to Terms:</strong></p>\r\n<p>BlogForge 10 reserves the right to update or modify these Terms of Service at any time. Continued use of the platform after such changes constitutes your acceptance of the new terms.</p>\r\n<p>If you have any questions or concerns regarding these Terms of Service, please contact us at&nbsp;<a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a>.</p>\r\n<p>Thank you for choosing BlogForge 10. We hope you have an exceptional blogging experience!</p>\r\n<p><em>Last Updated: 12-09-2023<br></em></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, NULL, NULL, '2023-12-09 03:12:39', '2023-12-09 04:39:17'),
(4, 'License', 'License', 'license', NULL, NULL, NULL, NULL, NULL, '<p>Welcome to the Licenses Page for BlogForge 10. Here, we provide information on the licenses associated with our cutting-edge blogging platform. Please review the following licenses that apply to various aspects of BlogForge 10:</p>\r\n<p><strong>1. Software License:</strong></p>\r\n<p>BlogForge 10 is distributed under the terms of the [Choose an Open Source License, e.g., MIT License, GNU General Public License (GPL)]. This license grants you the right to use, modify, and distribute the software. It comes with certain responsibilities, such as providing attribution and ensuring that derivative works also abide by the same license.</p>\r\n<p><strong>2. Content License:</strong></p>\r\n<p>The content provided by BlogForge 10, including but not limited to themes, templates, and default text, is subject to its own licensing. Please refer to the specific licenses associated with each content component. Some content may be released under open licenses, while others may have restrictions on use and distribution.</p>\r\n<p><strong>3. Third-Party Components:</strong></p>\r\n<p>BlogForge 10 may utilize third-party components, libraries, or plugins, each governed by its own license. It is essential to review and comply with the licenses of these third-party elements. The licenses for these components can usually be found in the corresponding documentation or source code.</p>\r\n<p><strong>4. Trademarks:</strong></p>\r\n<p>The names, logos, and other trademarks associated with BlogForge 10 are the property of BlogForge 10 and may be subject to trademark laws. Unauthorized use of these trademarks is prohibited.</p>\r\n<p><strong>5. Compliance and Attribution:</strong></p>\r\n<p>When using BlogForge 10 or any associated components, ensure compliance with the respective licenses. If required by a specific license, provide proper attribution to the original authors or contributors.</p>\r\n<p><strong>6. Disclaimer:</strong></p>\r\n<p>While BlogForge 10 strives to ensure that all components are appropriately licensed and comply with legal standards, users are encouraged to verify the licensing information and assume responsibility for adherence.</p>\r\n<p><strong>Contact Information:</strong></p>\r\n<p>If you have any questions or concerns regarding the licenses associated with BlogForge 10, please contact us at <a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a>.</p>\r\n<p>Thank you for choosing BlogForge 10. We appreciate your commitment to understanding and complying with the applicable licenses.</p>\r\n<p><em>Last Updated: 12-09-2023</em></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, NULL, NULL, '2023-12-09 03:12:53', '2023-12-09 04:38:45'),
(5, 'Contact Us', 'Contact Us', 'contact-us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, NULL, NULL, '2023-12-09 03:13:12', '2023-12-09 03:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `blog_settings`
--

CREATE TABLE `blog_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `favicon_apple_alt_text` varchar(255) DEFAULT 'apple-touch-icon.png',
  `favicon_apple` varchar(255) DEFAULT NULL,
  `favicon_32_alt_text` varchar(255) DEFAULT 'favicon-32x32.png',
  `favicon_32` varchar(255) DEFAULT NULL,
  `favicon_16_alt_text` varchar(255) DEFAULT 'favicon-16x16.png',
  `favicon_16` varchar(255) DEFAULT NULL,
  `logo_alt_text` varchar(255) DEFAULT 'logo.png',
  `logo` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT 'default-cover.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT 'default-og.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_settings`
--

INSERT INTO `blog_settings` (`id`, `title`, `tagline`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `favicon_apple_alt_text`, `favicon_apple`, `favicon_32_alt_text`, `favicon_32`, `favicon_16_alt_text`, `favicon_16`, `logo_alt_text`, `logo`, `cover_image`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `is_index`, `is_follow`, `comment`, `created_at`, `updated_at`) VALUES
(5, 'BlogForge10', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'dummy-fav.png', 'a', 'dummy-fav.png', 'a', 'dummy-fav.png', 'a', 'dummy-logo.png', 'dummy-cover.jpg', 'a', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'a', 1, 1, '<p>a</p>', '2023-12-11 01:06:57', '2023-12-11 03:58:42');

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
(10, '2023_11_15_095336_create_blog_tags', 1),
(12, '2023_08_24_040247_create_blog_pages', 2),
(13, '2023_12_11_060359_create_blog_settings', 3);

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
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
