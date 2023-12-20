-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 11:43 AM
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
-- Table structure for table `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `keywords` text DEFAULT NULL,
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
  `is_featured` tinyint(4) DEFAULT 0,
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `name`, `title`, `slug`, `keywords`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `thumb`, `thumb_alt_text`, `breadcrumb_image`, `breadcrumb_alt_text`, `cover_image`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `is_featured`, `is_index`, `is_follow`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', 'privacy policy, data security, trustworthy blogging, CodePhics, privacy matters', NULL, NULL, NULL, NULL, '<p>At BlogForge 10, we are committed to ensuring the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect your data when you interact with our cutting-edge blogging platform.</p>\r\n<p><strong>1. Information We Collect:</strong></p>\r\n<p>We may collect personal information when you download and use BlogForge 10. This includes:</p>\r\n<ul>\r\n<li>Personal details (name, email) for account creation.</li>\r\n<li>Usage data to enhance user experience.</li>\r\n</ul>\r\n<p><strong>2. How We Use Your Information:</strong></p>\r\n<p>We use your information to:</p>\r\n<ul>\r\n<li>Provide access to the BlogForge 10 platform.</li>\r\n<li>Enhance user experience and improve our services.</li>\r\n<li>Communicate updates, features, and promotional offers.</li>\r\n</ul>\r\n<p><strong>3. Data Security:</strong></p>\r\n<p>We prioritize the security of your information. BlogForge 10 implements industry-standard measures to protect against unauthorized access, alteration, disclosure, or destruction of your data.</p>\r\n<p><strong>4. Third-Party Services:</strong></p>\r\n<p>BlogForge 10 may integrate with third-party services for analytics or social features. These services have their own privacy policies, and we encourage you to review them.</p>\r\n<p><strong>5. Cookies:</strong></p>\r\n<p>BlogForge 10 uses cookies to enhance your browsing experience. You can adjust your browser settings to refuse cookies, but this may limit certain features.</p>\r\n<p><strong>6. Data Retention:</strong></p>\r\n<p>We retain your data only for as long as necessary to fulfill the purposes outlined in this Privacy Policy unless a longer retention period is required by law.</p>\r\n<p><strong>7. Your Choices:</strong></p>\r\n<p>You have the right to access, correct, or delete your personal information. Contact us at&nbsp;<a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a> for assistance.</p>\r\n<p><strong>8. Updates to Privacy Policy:</strong></p>\r\n<p>We may update this Privacy Policy to reflect changes in our practices. Check this page for the latest information.</p>\r\n<p>By downloading and using BlogForge 10, you agree to the terms outlined in this Privacy Policy. If you have any questions or concerns, contact us at <a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a>.</p>\r\n<p>Embark on a new era of dynamic blogging with confidence, knowing that your privacy is our priority at BlogForge 10.</p>\r\n<p><em>Last Updated: 12-09-2023</em></p>', NULL, NULL, 'BlogForge10 Privacy Policy - Your Data, Your Security | CodePhics', 'Explore BlogForge10\'s Privacy Policy. Learn how we prioritize and safeguard your data, ensuring a secure and trustworthy blogging experience. Your privacy matters at CodePhics!', 'BlogForge10 Privacy Policy - Your Data, Your Security | CodePhics', 'Discover how we prioritize and safeguard your data with BlogForge10\'s Privacy Policy. Ensure a secure and trustworthy blogging experience. Your privacy matters at CodePhics!', 'BlogForge10 Privacy Policy - Your Data, Your Security | @CodePhics', '\"Explore how we prioritize and safeguard your data with BlogForge10\'s Privacy Policy. Ensure a secure and trustworthy blogging experience. Your privacy matters at CodePhics!', 'default-thumb.png', 'BlogForge10 Privacy Policy', 'default-breadcrumb.png', 'Privacy Policy', 'default-cover.png', 'BlogForge10 Privacy Policy', 'default-og.png', 'Privacy Policy Social Image', 0, 0, 0, 0, NULL, '2023-12-09 03:12:00', '2023-12-13 04:44:54'),
(3, 'Terms of Service', 'Terms of Service', 'terms-of-service', 'terms of service, guidelines, seamless blogging, secure blogging, optimized performance, CodePhics, blogging experience', NULL, NULL, NULL, NULL, '<p>Welcome to BlogForge 10! By accessing and using our cutting-edge blogging platform, you agree to comply with and be bound by the following Terms of Service. Please read these terms carefully before using BlogForge 10.</p>\r\n<p><strong>1. Acceptance of Terms:</strong></p>\r\n<p>By downloading, installing, or using BlogForge 10, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service.</p>\r\n<p><strong>2. User Eligibility:</strong></p>\r\n<p>You must be at least 18 years old to use BlogForge 10. By using our platform, you represent and warrant that you meet this eligibility requirement.</p>\r\n<p><strong>3. License:</strong></p>\r\n<p>BlogForge 10 grants you a limited, non-exclusive, non-transferable, and revocable license to use the platform for personal or business purposes. You may not sublicense, sell, or distribute BlogForge 10 without our explicit written consent.</p>\r\n<p><strong>4. User Account:</strong></p>\r\n<p>To access certain features of BlogForge 10, you may need to create an account. You are responsible for maintaining the confidentiality of your account information and agree to notify us immediately of any unauthorized use.</p>\r\n<p><strong>5. Prohibited Activities:</strong></p>\r\n<p>While using BlogForge 10, you agree not to:</p>\r\n<ul>\r\n<li>Violate any applicable laws or regulations.</li>\r\n<li>Infringe upon the rights of others.</li>\r\n<li>Engage in any fraudulent or malicious activities.</li>\r\n<li>Attempt to gain unauthorized access to BlogForge 10.</li>\r\n</ul>\r\n<p><strong>6. Intellectual Property:</strong></p>\r\n<p>All content, features, and functionality on BlogForge 10 are the exclusive property of BlogForge 10 and are protected by international copyright, trademark, and other intellectual property laws.</p>\r\n<p><strong>7. Limitation of Liability:</strong></p>\r\n<p>BlogForge 10 is provided \"as is\" without any warranties. We shall not be liable for any direct, indirect, incidental, special, or consequential damages.</p>\r\n<p><strong>8. Termination:</strong></p>\r\n<p>BlogForge 10 reserves the right to terminate or suspend your access to the platform at any time, without prior notice, for any reason.</p>\r\n<p><strong>9. Changes to Terms:</strong></p>\r\n<p>BlogForge 10 reserves the right to update or modify these Terms of Service at any time. Continued use of the platform after such changes constitutes your acceptance of the new terms.</p>\r\n<p>If you have any questions or concerns regarding these Terms of Service, please contact us at&nbsp;<a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a>.</p>\r\n<p>Thank you for choosing BlogForge 10. We hope you have an exceptional blogging experience!</p>\r\n<p><em>Last Updated: 12-09-2023<br></em></p>', NULL, NULL, 'BlogForge10 Terms of Service - Guidelines for a Seamless Blogging Journey | CodePhics', 'Read BlogForge10\'s Terms of Service to understand the guidelines for your seamless blogging journey. Join CodePhics for a secure and optimized blogging experience!', 'BlogForge10 Terms of Service - Guidelines for a Seamless Blogging Journey | CodePhics', 'Read BlogForge10\'s Terms of Service to understand the guidelines for your seamless blogging journey. Join CodePhics for a secure and optimized blogging experience!', 'BlogForge10 Terms of Service - Guidelines for a Seamless Blogging Journey | @CodePhics', 'Read BlogForge10\'s Terms of Service to understand the guidelines for your seamless blogging journey. Join CodePhics for a secure and optimized blogging experience! #Blogging', 'default-thumb.png', 'BlogForge10 Terms of Service', 'default-breadcrumb.png', 'Terms of Service', 'default-cover.png', 'BlogForge10 Terms of Service', 'default-og.png', 'Terms of Service Social Image', 0, 0, 0, 0, NULL, '2023-12-09 03:12:39', '2023-12-13 04:50:40'),
(4, 'License', 'License', 'license', 'license, legal terms, blogging endeavors, empower, CodePhics, powerful blogging companion', NULL, NULL, NULL, NULL, '<p>Welcome to the Licenses Page for BlogForge 10. Here, we provide information on the licenses associated with our cutting-edge blogging platform. Please review the following licenses that apply to various aspects of BlogForge 10:</p>\r\n<p><strong>1. Software License:</strong></p>\r\n<p>BlogForge 10 is distributed under the terms of the [Choose an Open Source License, e.g., MIT License, GNU General Public License (GPL)]. This license grants you the right to use, modify, and distribute the software. It comes with certain responsibilities, such as providing attribution and ensuring that derivative works also abide by the same license.</p>\r\n<p><strong>2. Content License:</strong></p>\r\n<p>The content provided by BlogForge 10, including but not limited to themes, templates, and default text, is subject to its own licensing. Please refer to the specific licenses associated with each content component. Some content may be released under open licenses, while others may have restrictions on use and distribution.</p>\r\n<p><strong>3. Third-Party Components:</strong></p>\r\n<p>BlogForge 10 may utilize third-party components, libraries, or plugins, each governed by its own license. It is essential to review and comply with the licenses of these third-party elements. The licenses for these components can usually be found in the corresponding documentation or source code.</p>\r\n<p><strong>4. Trademarks:</strong></p>\r\n<p>The names, logos, and other trademarks associated with BlogForge 10 are the property of BlogForge 10 and may be subject to trademark laws. Unauthorized use of these trademarks is prohibited.</p>\r\n<p><strong>5. Compliance and Attribution:</strong></p>\r\n<p>When using BlogForge 10 or any associated components, ensure compliance with the respective licenses. If required by a specific license, provide proper attribution to the original authors or contributors.</p>\r\n<p><strong>6. Disclaimer:</strong></p>\r\n<p>While BlogForge 10 strives to ensure that all components are appropriately licensed and comply with legal standards, users are encouraged to verify the licensing information and assume responsibility for adherence.</p>\r\n<p><strong>Contact Information:</strong></p>\r\n<p>If you have any questions or concerns regarding the licenses associated with BlogForge 10, please contact us at <a href=\"mailto:codephics@gmail.com\" target=\"_new\">codephics@gmail.com</a>.</p>\r\n<p>Thank you for choosing BlogForge 10. We appreciate your commitment to understanding and complying with the applicable licenses.</p>\r\n<p><em>Last Updated: 12-09-2023</em></p>', NULL, NULL, 'BlogForge10 License - Empowering Your Blogging Endeavors Legally | CodePhics', 'Explore the BlogForge10 License. Empower your blogging endeavors legally with CodePhics. Discover the terms that govern your use of this powerful blogging companion.', 'BlogForge10 License - Empowering Your Blogging Endeavors Legally | CodePhics', 'Explore the BlogForge10 License. Empower your blogging endeavors legally with CodePhics. Discover the terms that govern your use of this powerful blogging companion.', 'BlogForge10 License - Empowering Your Blogging Endeavors Legally | @CodePhics', 'Explore the BlogForge10 License. Empower your blogging endeavors legally with CodePhics. Discover the terms that govern your use of this powerful blogging companion! #Blogging', 'default-thumb.png', 'BlogForge10 License Thumb', 'default-breadcrumb.png', 'Home > License Breadcrumb', 'default-cover.png', 'BlogForge10 License Cover', 'default-og.png', 'License Social Image', 0, 0, 0, 0, NULL, '2023-12-09 03:12:53', '2023-12-13 04:52:08'),
(5, 'Contact Us', 'Contact Us', 'contact-us', 'contact us, support, inquiries, collaboration, blogging journey, CodePhics, enhance blogging experience', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Contact BlogForge10 - Reach Out for Support, Inquiries, and Collaboration | CodePhics', 'Connect with BlogForge10 for support, inquiries, and collaboration. Your blogging journey matters to us. Reach out to us at CodePhics and enhance your blogging experience!', 'Connect with BlogForge10 - Contact Us for Support and Inquiries', 'Connect with BlogForge10 for support, inquiries, and collaboration. Your blogging journey matters to us. Reach out to us at CodePhics and enhance your blogging experience!', 'Connect with #BlogForge10 - Contact Us for Support and Inquiries', 'Connect with BlogForge10 for support, inquiries, and collaboration. Your blogging journey matters to us. Reach out to us at CodePhics and enhance your blogging experience! #ContactUs', 'default-thumb.png', 'Contact BlogForge10', 'default-breadcrumb.png', 'Home > Contact Us', 'default-cover.png', 'Connect with BlogForge10', 'default-og.png', 'Contact Us Social Image', 0, 0, 0, 0, NULL, '2023-12-09 03:13:12', '2023-12-13 04:53:50'),
(6, 'Homepage', 'Elevate Your Blogging Experience with BlogForge10', 'homepage', NULL, NULL, NULL, NULL, '<p>Simplify tasks, from creation to publication, with a streamlined workflow. Enjoy cross-platform compatibility for on-the-go management. Our robust security ensures data protection, while optimized performance guarantees a seamless user experience. Gain insights with comprehensive analytics and customize your blog with themes and layouts. Join savvy developers and revolutionize your blogging game. Sign up at <a href=\"https://codephics.com\">codephics.com</a> for a new era of simplicity! 🌐✨</p>', NULL, NULL, NULL, 'Elevate Your Blogging Experience with BlogForge10 - Streamline, Secure, and Optimize | CodePhics', 'Discover BlogForge10 – Your ultimate blogging companion. Streamline content creation, ensure security, and enjoy cross-platform flexibility. Unleash optimized performance and gain insights with analytics. Join us at CodePhics for a simplified, powerful blogging experience!', 'BlogForge10: Elevate Your Blogging Experience', 'Discover BlogForge10 – Your ultimate companion for streamlined, secure, and optimized blogging. Join us at CodePhics for a powerful blogging experience!', 'Elevate Your Blogging Experience with #BlogForge10 - Streamline, Secure, Optimize | @CodePhics', 'Discover BlogForge10 – Your ultimate blogging companion. Unleash optimized performance and gain insights with analytics. Join us at CodePhics for a simplified, powerful blogging experience! #Blogging', 'default-thumb.png', 'BlogForge10 Thumb', 'default-breadcrumb.png', 'Home', 'default-cover.png', 'BlogForge10 Cover Image', 'default-og.png', 'BlogForge10 Social Image', 0, 0, 0, 0, NULL, '2023-12-12 23:37:24', '2023-12-17 00:19:18'),
(7, 'More Blogs', 'More Blogs', 'more-blogs', 'explore blogs, blogging companion, creative blogging, secure blogging, optimized performance, CodePhics, powerful blogging journey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Explore More Blogs with BlogForge10 - Your Ultimate Blogging Companion', 'Dive into a world of endless possibilities. Explore more blogs with BlogForge10, your ultimate blogging companion. Unleash creativity, security, and optimization. Join us at Codephics for a powerful blogging journey!', 'Explore More Blogs with BlogForge10 - Your Ultimate Blogging Companion', 'Dive into a world of endless possibilities. Explore more blogs with BlogForge10, your ultimate blogging companion. Unleash creativity, security, and optimization. Join us at Codephics for a powerful blogging journey!', 'Explore More Blogs with #BlogForge10 - Your Ultimate Blogging Companion', 'Dive into a world of endless possibilities. Explore more blogs with BlogForge10, your ultimate blogging companion. Unleash creativity, security, and optimization. Join us at Codephics for a powerful blogging journey! #Blogging', 'default-thumb.png', 'More Blogs with BlogForge10', 'default-breadcrumb.png', 'Home > More Blogs', 'default-cover.png', 'Explore More Blogs with BlogForge10', 'default-og.png', 'More Blogs Social Image', 0, 0, 0, 0, NULL, '2023-12-13 04:55:19', '2023-12-13 04:57:34'),
(8, 'bb', 'ab', 'ab', '[\"ab\"]', 'Laravel 10x', 'Blogging', 'Blog Management System', '<p>ab</p>', '<p>ab</p>', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'ab', 'dummy-icon.png', 'ab', 'dummy-cover.jpg', 'ab', 'dummy-cover.jpg', 'ab', 'islamic-authentic-english-books-og.jpg', 'ab', NULL, NULL, NULL, 0, '<p>ab</p>', '2023-12-20 03:43:16', '2023-12-20 03:55:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
