-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 11:06 AM
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
  `author` varchar(255) NOT NULL DEFAULT 'Codephics',
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `facebook_meta_title` varchar(255) DEFAULT NULL,
  `facebook_meta_description` varchar(255) DEFAULT NULL,
  `twitter_meta_title` varchar(255) DEFAULT NULL,
  `twitter_meta_description` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT 0,
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `featured_image` varchar(255) NOT NULL DEFAULT 'default-featured-image.png',
  `featured_img_alt_text` varchar(255) DEFAULT NULL,
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

INSERT INTO `blogs` (`id`, `title`, `slug`, `tags`, `author`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `is_featured`, `is_index`, `is_follow`, `featured_image`, `featured_img_alt_text`, `og_image`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(8, 'Unleashing the Power of Free Laravel 10x Blog Management System', 'unleashing-the-power-of-free-laravel-10x-blog-management-system', 'Laravel 10x', '', NULL, NULL, NULL, NULL, '<h2>Introduction</h2>\r\n<p>Embark on a journey of unparalleled blogging experience with our free Laravel 10x-based blog management system. In this blog post, we\'ll explore the features that set our system apart and how it can transform your blogging endeavors.</p>\r\n<h2>Why Choose Laravel 10x?</h2>\r\n<p>Laravel 10x is the heartbeat of our blog management system. Its robust architecture, expressive syntax, and powerful features make it the ideal choice for bloggers seeking efficiency and flexibility in their content creation process.</p>\r\n<h2>Key Features of Our Free Blog Management System</h2>\r\n<h3>Content Creation Made Effortless</h3>\r\n<p>With CRUD functionalities for blogs, categories, tags, pages, settings, and profiles, our system simplifies the content creation process. Say goodbye to complexities and hello to seamless blogging.</p>\r\n<h3>Frontend Built with Best SEO Practices</h3>\r\n<p>Our system is not just about functionality; it\'s about visibility. The frontend is crafted using the best SEO practices&mdash;technically, on-page, and off-page&mdash;to ensure your content stands out in the digital landscape.</p>\r\n<h2>How to Download and Install</h2>\r\n<p>Ready to revolutionize your blogging experience? Downloading and installing our free Laravel 10x Blog Management System is a breeze. Follow our step-by-step guide and get started in minutes.</p>\r\n<h2>Elevate Your Blogging Experience - Download Now!</h2>\r\n<p>Don\'t miss out on the opportunity to elevate your blogging game. Download our free blog management system now and experience the seamless blend of functionality and SEO excellence. Your journey to powerful blogging starts here!</p>', NULL, NULL, 'Discover the Power of Free Laravel 10x Blog Management System - Download Now!', 'Dive into the world of seamless blogging with our free Laravel 10x Blog Management System. Learn how you can effortlessly create, manage, and optimize your content. Download now and elevate your blogging experience!', 'Free Laravel 10x Blog System - Download Now!', 'Dive into the world of seamless blogging with our free Laravel 10x Blog Management System. Discover how you can effortlessly create, manage, and optimize your content. Download now and elevate your blogging experience!', 'Unlock the Power of Free Laravel 10x Blog System - Download Now!', 'Explore the seamless world of blogging with our free Laravel 10x Blog Management System. Effortlessly create, manage, and optimize your content. Download now for an elevated blogging experience!', NULL, 0, 0, 'unleashing-the-power-of-free-laravel-10x-blog-management-system-featured.png', 'Unlocking the Potential of Free Laravel 10x Blog Management System', 'unleashing-the-power-of-free-laravel-10x-blog-management-system-og.png', 'Laravel 10x Blog System - Unlocking Potential', NULL, NULL, '2023-12-14 00:25:17', '2023-12-17 00:51:39'),
(9, 'Mastering On-Page SEO with Laravel 10x Blog System', 'mastering-on-page-seo-with-laravel-10x-blog-system', 'Laravel 10x', '', NULL, NULL, NULL, NULL, '<h2>Introduction to On-Page SEO</h2>\r\n<p>Understanding on-page SEO is essential for bloggers aiming to enhance their content\'s visibility in search engines. In this blog post, we\'ll delve into the intricacies of on-page SEO and how our free Laravel 10x Blog Management System can be your SEO ally.</p>\r\n<h2>Crafting SEO-Friendly URLs</h2>\r\n<p>The foundation of on-page SEO lies in crafting URLs that are not only user-friendly but also optimized for search engines. Our system provides you with the tools to create SEO-friendly URLs effortlessly.</p>\r\n<h2>Optimizing Meta Tags</h2>\r\n<p>Meta tags play a crucial role in communicating your content\'s relevance to search engines. Learn how to optimize meta titles and descriptions using our system, ensuring your content gets the attention it deserves.</p>\r\n<h2>Image Optimization Techniques</h2>\r\n<p>Images are integral to engaging content, but they can also impact your SEO. Discover techniques to optimize images, reduce load times, and improve the overall user experience on your blog.</p>\r\n<h2>Enhancing User Experience</h2>\r\n<p>User experience is a key factor in on-page SEO. Our system goes beyond traditional functionalities, focusing on providing a seamless and enjoyable experience for your readers.</p>\r\n<h2>Download Our Free Blog Management System Now!</h2>\r\n<p>Ready to take your on-page SEO to the next level? Download our free Laravel 10x Blog Management System now and witness the transformation in your content\'s search engine performance.</p>', NULL, NULL, 'Optimize Your Content with On-Page SEO - Free Laravel 10x Blog Management System', 'Enhance your blog\'s visibility and user experience with our free Laravel 10x Blog Management System. Learn the best on-page SEO practices to boost your content. Download now and start ranking higher!', 'Mastering On-Page SEO with Laravel 10x - Download Now!', 'Enhance your blog\'s visibility and user experience with our free Laravel 10x Blog Management System. Learn the best on-page SEO practices to boost your content. Download now and start ranking higher!', 'Mastering On-Page SEO with Laravel 10x - Download Now!', 'Discover the intricacies of on-page SEO with our free Laravel 10x Blog Management System. Craft SEO-friendly URLs, optimize meta tags, and enhance user experience. Download now for higher rankings!', NULL, 0, 0, 'mastering-on-page-seo-with-laravel-10x-blog-system-featured.png', 'Mastering On-Page SEO with Laravel 10x Blog System', 'mastering-on-page-seo-with-laravel-10x-blog-system-og.png', 'Laravel 10x SEO - Mastering On-Page SEO', NULL, NULL, '2023-12-14 00:29:39', '2023-12-14 01:12:24'),
(10, 'Crafting Engaging Content: A Guide for Laravel 10x Users', 'crafting-engaging-content-a-guide-for-laravel-10x-users', 'Laravel 10x', '', NULL, NULL, NULL, NULL, '<p>Are you ready to take your content creation skills to the next level? In this comprehensive guide, we\'ll explore the art of crafting engaging content using the powerful features of our free Laravel 10x Blog Management System.</p>\r\n<h2>Content Creation Strategies</h2>\r\n<p>Crafting engaging content starts with solid strategies. Our system empowers you with CRUD functionalities for blogs, allowing you to seamlessly create, update, and delete content. Dive into the world of possibilities as you explore different strategies to captivate your audience.</p>\r\n<h2>Writing Techniques for Impact</h2>\r\n<p>Writing is an art, and we\'ve integrated tools into our system to enhance your skills. Learn various writing techniques, from creating compelling headlines to using persuasive language. Elevate your storytelling and keep your readers hooked from the first word to the last.</p>\r\n<h2>Visual Appeal Matters</h2>\r\n<p>Content engagement goes beyond text. Discover how our system supports multimedia elements, allowing you to integrate images, videos, and infographics effortlessly. Learn how to use visual elements strategically to enhance the overall appeal of your content.</p>\r\n<h2>Download Now and Transform Your Content</h2>\r\n<p>Ready to transform your content creation process? Download our free Laravel 10x Blog Management System now and embark on a journey to craft engaging, impactful content that resonates with your audience. Your guide to content mastery awaits!</p>', NULL, NULL, 'Crafting Engaging Content: A Guide for Laravel 10x Users', 'Learn the art of crafting engaging content with our free Laravel 10x Blog Management System. This guide covers content creation strategies, writing techniques, and tips to captivate your audience. Download now and take your content to new heights!', 'A Guide for Laravel 10x Users - Download Now!', 'Unlock the secrets of crafting engaging content with our free Laravel 10x Blog Management System. This guide covers content creation strategies and writing techniques. Download now and captivate your audience!', 'Crafting Engaging Content: A Guide for Laravel 10x Users - Download Now!', 'Explore the art of crafting engaging content with our free Laravel 10x Blog Management System. Learn content creation strategies and writing techniques. Download now and take your content to new heights!', NULL, 0, 0, 'crafting-engaging-content-a-guide-for-laravel-10x-users-featured.png', 'Crafting Engaging Content: A Guide for Laravel 10x Users', 'crafting-engaging-content-a-guide-for-laravel-10x-users-og.png', 'Laravel 10x Content Creation Guide - Engaging Content', NULL, NULL, '2023-12-14 00:42:24', '2023-12-14 01:12:39'),
(11, 'Navigating the Future: Laravel 10x and Beyond', 'navigating-the-future-Laravel-10x-and-beyond', 'Laravel 10x', '', NULL, NULL, NULL, NULL, '<p>Welcome to a journey into the future of web development with Laravel 10x. In this blog, we\'ll explore upcoming trends, exciting features, and the continuous evolution of Laravel, positioning you at the forefront of the dynamic world of technology.</p>\r\n<h2>Upcoming Trends in Web Development</h2>\r\n<p>Stay ahead of the curve by exploring the latest trends in web development. Laravel 10x is not just a tool for today; it\'s a gateway to the future. Dive into discussions on emerging technologies, frameworks, and practices that will shape the landscape of web development.</p>\r\n<h2>Features That Define the Future</h2>\r\n<p>Discover the features that make Laravel 10x a pioneer in web development. From enhanced performance to advanced security measures, our system is designed to meet the evolving needs of developers. Uncover the tools that will empower you in your future projects.</p>\r\n<h2>Continuous Evolution of Laravel</h2>\r\n<p>Laravel is not static&mdash;it\'s a framework in constant evolution. Learn how Laravel adapts to industry changes, incorporates user feedback, and stays at the forefront of innovation. Stay informed about updates and improvements that will impact your development journey.</p>\r\n<h2>Download Now and Stay Ahead</h2>\r\n<p>Ready to navigate the future of web development? Download our free Laravel 10x Blog Management System now and position yourself at the forefront of technology. The future is dynamic, and Laravel 10x is your compass.</p>\r\n<p>Feel free to adapt and modify these blog posts based on your specific content, audience, and branding preferences.</p>', NULL, NULL, 'Navigating the Future: Laravel 10x and Beyond', 'Embark on a journey into the future of web development with Laravel 10x. This blog explores upcoming trends, features, and the continuous evolution of Laravel. Download now and stay ahead in the dynamic world of technology!', 'Laravel 10x and Beyond - Download Now!', 'Explore the future of web development with Laravel 10x. This blog delves into upcoming trends, features, and the continuous evolution of Laravel. Download now and stay ahead in the dynamic world of technology!', 'Navigating the Future: Laravel 10x and Beyond - Download Now!', 'Dive into the future of web development with Laravel 10x. Explore upcoming trends, features, and the continuous evolution of Laravel. Download now and stay ahead in the dynamic world of technology!', NULL, 0, 0, 'navigating-the-future-Laravel-10x-and-beyond-featured.png', 'Navigating the Future: Laravel 10x and Beyond', 'navigating-the-future-Laravel-10x-and-beyond-og.png', 'Laravel 10x Future of Web Development - Navigating the Future', NULL, NULL, '2023-12-14 00:45:45', '2023-12-14 01:12:54'),
(12, 'Laravel 10x: A Symphony for Efficient Collaboration', 'laravel-10x-a-symphony-for-efficient-collaboration', 'Laravel 10x', '', NULL, NULL, NULL, NULL, '<div class=\"flex flex-grow flex-col max-w-full\">\r\n<div class=\"min-h-[20px] text-message flex flex-col items-start gap-3 whitespace-pre-wrap break-words [.text-message+&amp;]:mt-5 overflow-x-auto\" data-message-author-role=\"assistant\" data-message-id=\"96e2e64c-713e-4dbf-864b-60c0ee539dca\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert dark\">\r\n<h3>Blog 5: \"Laravel 10x: A Symphony for Efficient Collaboration\"</h3>\r\n<h1>Laravel 10x: A Symphony for Efficient Collaboration</h1>\r\n<p>In the realm of web development, collaboration is the key to creating masterpieces. Join us as we explore how Laravel 10x serves as a symphony, harmonizing the efforts of developers for efficient collaboration.</p>\r\n<h2>The Composer: Simplifying Dependency Management</h2>\r\n<p>Just as a composer orchestrates a symphony, Laravel 10x acts as a Composer, simplifying dependency management. Dive into the world of packages and learn how Laravel\'s Composer allows developers to seamlessly integrate third-party libraries, ensuring a harmonious development process.</p>\r\n<h2>Conductor\'s Baton: Commanding Artful Routing</h2>\r\n<p>A conductor guides a symphony with precision, and Laravel\'s routing system acts as a baton, directing the flow of your application. Discover how Laravel 10x\'s expressive routing capabilities empower developers to conduct seamless navigation and control the artistic flow of their projects.</p>\r\n<h2>Harmony in Database Interactions</h2>\r\n<p>A symphony is incomplete without a harmonious blend of instruments. Laravel 10x achieves harmony in database interactions with its elegant Eloquent ORM. Explore how Eloquent simplifies database queries, providing developers with a powerful tool to compose data-driven symphonies.</p>\r\n<h2>The Grand Finale: Seamless Collaboration</h2>\r\n<p>As the grand finale brings all elements together, Laravel 10x fosters seamless collaboration among developers. With real-time collaboration tools, version control, and integrated workflows, the development process becomes a symphony of efficiency and creativity.</p>\r\n<h2>Download Now and Join the Orchestra</h2>\r\n<p>Ready to join the orchestra of efficient collaboration? Download our free Laravel 10x Blog Management System now and experience the symphony of development. Unleash the composer, conductor, and harmonious collaboration in your web projects!</p>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, 'Laravel 10x: Empowering Efficient Collaboration in Web Development', 'Explore how Laravel 10x orchestrates efficient collaboration among developers, simplifying dependency management, guiding seamless navigation, and harmonizing database interactions. Download now and join the orchestra of web development efficiency!', 'Laravel 10x: A Symphony of Collaboration', 'Dive into the symphony of web development with Laravel 10x. Discover its role as a Composer, Conductor, and Harmony Maker, fostering efficient collaboration among developers. Download now and join the orchestra!', 'Unlock Efficiency with Laravel 10x: A Symphony of Collaboration', 'Discover how Laravel 10x acts as a symphony, simplifying dependency management, guiding seamless navigation, and harmonizing database interactions for efficient collaboration in web development. Download now and join the orchestra!', NULL, 0, 0, 'laravel-10x-a-symphony-for-efficient-collaboration-featured.png', 'Laravel 10x Symphony - Efficient Collaboration', 'laravel-10x-a-symphony-for-efficient-collaboration-og.png', 'Laravel 10x Symphony - Efficient Collaboration', NULL, NULL, '2023-12-14 00:49:45', '2023-12-14 01:13:31'),
(13, 'Laravel 10x Security: Fortifying Your Digital Fortress', 'laravel-10x-security-fortifying-your-digital-fortress', 'Laravel 10x', '', NULL, NULL, NULL, NULL, '<p>In the ever-evolving landscape of the digital world, security is paramount. Join us as we delve into how Laravel 10x acts as a digital fortress, fortifying your web applications with robust security measures.</p>\r\n<h2>Sentry at the Gate: Laravel\'s Authentication System</h2>\r\n<p>Every fortress needs a vigilant sentry at the gate. Laravel 10x provides a robust authentication system, ensuring that only authorized personnel access your digital domain. Explore the layers of Laravel\'s authentication, from basic user authentication to advanced multi-factor authentication.</p>\r\n<h2>Castle Walls: Protecting Against Cross-Site Scripting (XSS)</h2>\r\n<p>Just as castle walls protect against invaders, Laravel 10x shields your application from Cross-Site Scripting (XSS) attacks. Delve into Laravel\'s built-in protection mechanisms and best practices to fortify your digital castle against malicious script injections.</p>\r\n<h2>Guarding the Treasure: Laravel\'s Encryption Techniques</h2>\r\n<p>In a fortress, treasures must be guarded, and in the digital realm, data is the treasure. Laravel 10x employs advanced encryption techniques to secure sensitive information. Uncover how Laravel safeguards your data, ensuring that it remains confidential and integral.</p>\r\n<h2>Vigilant Watchtower: Continuous Security Updates</h2>\r\n<p>A vigilant watchtower is essential for ongoing protection. Laravel 10x ensures the safety of your digital fortress with continuous security updates. Stay informed about the latest security patches and best practices to maintain a robust defense against emerging threats.</p>\r\n<h2>Download Now and Fortify Your Digital Fortress</h2>\r\n<p>Ready to fortify your digital fortress? Download our free Laravel 10x Blog Management System now and elevate the security of your web applications. Strengthen the gates, secure the treasures, and stand resilient against digital threats.</p>', NULL, NULL, 'Laravel 10x Security: Strengthening Your Digital Fortress', 'Delve into the robust security measures of Laravel 10x, acting as a digital fortress. Explore its authentication system, encryption techniques, and continuous security updates. Download now and fortify your digital presence!', 'Laravel 10x: Fortify Your Digital Presence', 'Secure your digital fortress with Laravel 10x. Explore its authentication system, protection against XSS attacks, encryption techniques, and continuous security updates. Download now and fortify your web applications!', 'Elevate Security with Laravel 10x: Fortify Your Digital Presence', 'Explore Laravel 10x as a digital fortress, securing your web applications with its authentication system, XSS attack protection, encryption techniques, and continuous security updates. Download now and fortify your digital presence!', NULL, 0, 0, 'laravel-10x-security-fortifying-your-digital-fortress-featured.png', 'Laravel 10x Symphony - Efficient Collaboration', 'laravel-10x-security-fortifying-your-digital-fortress-og.png', 'Laravel 10x Symphony - Efficient Collaboration', NULL, NULL, '2023-12-14 00:51:54', '2023-12-14 01:10:45');

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
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `is_featured` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `is_index`, `is_follow`, `is_featured`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(3, 'Laravel 10x', 'laravel-10x', 'Laravel 10x', '<p>Laravel 10x</p>', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'dummy-icon.png', 'Laravel 10x', 'dummy-thumb.png', 'Laravel 10x', 'dummy-cover.jpg', 'Laravel 10x', 'islamic-authentic-english-books-og.jpg', 'Laravel 10x', 1, 1, 1, 1, '<p>Laravel 10x</p>', '2023-12-20 02:30:15', '2023-12-20 02:47:02');

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
(7, 'More Blogs', 'More Blogs', 'more-blogs', 'explore blogs, blogging companion, creative blogging, secure blogging, optimized performance, CodePhics, powerful blogging journey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Explore More Blogs with BlogForge10 - Your Ultimate Blogging Companion', 'Dive into a world of endless possibilities. Explore more blogs with BlogForge10, your ultimate blogging companion. Unleash creativity, security, and optimization. Join us at Codephics for a powerful blogging journey!', 'Explore More Blogs with BlogForge10 - Your Ultimate Blogging Companion', 'Dive into a world of endless possibilities. Explore more blogs with BlogForge10, your ultimate blogging companion. Unleash creativity, security, and optimization. Join us at Codephics for a powerful blogging journey!', 'Explore More Blogs with #BlogForge10 - Your Ultimate Blogging Companion', 'Dive into a world of endless possibilities. Explore more blogs with BlogForge10, your ultimate blogging companion. Unleash creativity, security, and optimization. Join us at Codephics for a powerful blogging journey! #Blogging', 'default-thumb.png', 'More Blogs with BlogForge10', 'default-breadcrumb.png', 'Home > More Blogs', 'default-cover.png', 'Explore More Blogs with BlogForge10', 'default-og.png', 'More Blogs Social Image', 0, 0, 0, 0, NULL, '2023-12-13 04:55:19', '2023-12-13 04:57:34');

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
  `favicon_alt_text` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) NOT NULL DEFAULT 'favicon.png',
  `favicon_apple_alt_text` varchar(255) DEFAULT NULL,
  `favicon_apple` varchar(255) NOT NULL DEFAULT 'apple-touch-icon.png',
  `favicon_32_alt_text` varchar(255) DEFAULT NULL,
  `favicon_32` varchar(255) DEFAULT 'favicon-32x32.png',
  `favicon_16_alt_text` varchar(255) DEFAULT NULL,
  `favicon_16` varchar(255) NOT NULL DEFAULT 'favicon-16x16.png',
  `logo_alt_text` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
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

INSERT INTO `blog_settings` (`id`, `title`, `tagline`, `about_in_short`, `facebook_url`, `twitter_url`, `instagram_url`, `linkedIn_url`, `pinterest_url`, `reddit_url`, `tiktok_url`, `whatsapp_url`, `youtube_url`, `quora_url`, `snapchat_url`, `telegram_url`, `tumblr_url`, `wechat_url`, `favicon_alt_text`, `favicon`, `favicon_apple_alt_text`, `favicon_apple`, `favicon_32_alt_text`, `favicon_32`, `favicon_16_alt_text`, `favicon_16`, `logo_alt_text`, `logo`, `og_img_alt_text`, `og_image`, `is_index`, `is_follow`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'BlogForge10', 'Elevate Your Blogging Experience with BlogForge10.', '<p>Discover BlogForge10 🚀 - Your ultimate blogging companion. Streamline content creation, ensure security, and enjoy cross-platform flexibility. Unleash optimized performance and gain insights with analytics. Join us at <a title=\"Codephics\" href=\"https://codephics.com\">codephics.com</a> for a simplified, powerful blogging experience!</p>', 'https://facebook.com/codephics', 'https://twitter.com/codephics', 'https://instagram.com/codephics', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'favicon.png', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', 1, 1, NULL, NULL, '2023-12-22 23:42:14');

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
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `is_featured` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_subcategories`
--

INSERT INTO `blog_subcategories` (`id`, `subcategory_name`, `slug`, `title`, `category_name`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `is_index`, `is_follow`, `is_featured`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(3, 'Blogging', 'blogging', 'Blogging', 'Laravel 10x', '<p>Blogging</p>', 'Blogging', 'Blogging', 'Blogging', 'Blogging', 'Blogging', 'Blogging', 'dummy-icon.png', 'Blogging', 'dummy-thumb.png', 'Blogging', 'dummy-cover.jpg', 'Blogging', 'islamic-authentic-english-books-og.jpg', 'Blogging', 0, 0, 0, 0, NULL, '2023-12-20 02:44:33', '2023-12-20 02:44:33');

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
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `is_featured` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_sub_subcategories`
--

INSERT INTO `blog_sub_subcategories` (`id`, `sub_subcategory_name`, `subcategory_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `is_index`, `is_follow`, `is_featured`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(3, 'Blog Management System', 'Blogging', 'blog-management-system', NULL, '<p>Blog Management System</p>', 'Blog Management System', 'Blog Management System', 'Blog Management System', 'Blog Management System', 'Blog Management System', 'Blog Management System', 'dummy-icon.png', 'Blog Management System', 'dummy-thumb.png', 'Blog Management System', 'islamic-authentic-english-books-og.jpg', 'Blog Management System', 'islamic-authentic-english-books-og.jpg', 'Blog Management System', 0, 0, 0, 0, NULL, '2023-12-20 02:48:09', '2023-12-20 02:48:09');

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
  `is_featured` tinyint(4) DEFAULT 0,
  `is_index` tinyint(4) DEFAULT 0,
  `is_follow` tinyint(4) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `slug`, `description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `is_featured`, `is_index`, `is_follow`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(9, 'Laravel 10x', 'laravel-10x', '<p>Laravel 10x</p>', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'Laravel 10x', 'dummy-icon.png', 'Laravel 10x', 'dummy-thumb.png', 'Laravel 10x', 'dummy-cover.jpg', 'Laravel 10x', 'islamic-authentic-english-books-og.jpg', 'Laravel 10x', 1, 1, 1, 1, '<p>Laravel 10x</p>', '2023-12-20 03:02:53', '2023-12-20 03:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tests`
--

CREATE TABLE `blog_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'default-og.png',
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL DEFAULT 'default-og.png',
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
-- Dumping data for table `blog_tests`
--

INSERT INTO `blog_tests` (`id`, `name`, `title`, `slug`, `tags`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `thumb`, `thumb_alt_text`, `breadcrumb_image`, `breadcrumb_alt_text`, `cover_image`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', '', 'privacy-policy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, 0, NULL, NULL, NULL),
(2, 'Terms of Service', '', 'terms-of-service', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, 0, NULL, NULL, NULL),
(3, 'License', '', 'license', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, 0, NULL, NULL, NULL),
(4, 'Contact Us', '', 'contact-us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', NULL, 'default-breadcrumb.png', NULL, 'default-cover.png', NULL, 'default-og.png', NULL, 0, NULL, NULL, NULL);

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
(13, '2023_12_11_060359_create_blog_settings', 3),
(14, '2023_12_12_033125_create_blog_tests', 4),
(15, '2023_12_12_041841_create_blog_settings', 5),
(16, '2023_12_12_044040_create_blog_settings', 6),
(17, '2023_12_12_044823_create_blog_settings', 7),
(18, '2023_12_12_060509_create_blog_settings', 8);

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
-- Indexes for table `blog_tests`
--
ALTER TABLE `blog_tests`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_subcategories`
--
ALTER TABLE `blog_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_sub_subcategories`
--
ALTER TABLE `blog_sub_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_tests`
--
ALTER TABLE `blog_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
