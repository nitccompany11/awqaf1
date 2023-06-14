-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 03:54 AM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chandxnz_awqaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `method` varchar(191) NOT NULL,
  `ip` varchar(191) NOT NULL,
  `agent` varchar(191) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Add New Permission Group Have Name Testing From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/permissionGroup/add', 'POST', '196.159.86.86', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36', 1, '2023-06-13 22:16:10', '2023-06-13 22:16:10'),
(2, 'Update Role For Permission Group Have Name Testing From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/permissionGroup/4/permission', 'POST', '196.159.86.86', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36', 1, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(3, 'Create New Admin Have Name مدخل بيانات From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/user/add', 'POST', '196.159.86.86', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36', 1, '2023-06-13 22:21:16', '2023-06-13 22:21:16'),
(4, 'Update Account for User Have Name مدخل بيانات From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/user/2/edit', 'POST', '154.191.252.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-13 22:32:27', '2023-06-13 22:32:27'),
(5, 'Update Account for User Have Name مدخل بيانات الموق From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/user/1/edit', 'POST', '154.191.252.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-13 22:36:08', '2023-06-13 22:36:08'),
(6, 'Update Account for User Have Name مدخل بيانات الموق From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/user/1/edit', 'POST', '154.191.252.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-13 22:38:26', '2023-06-13 22:38:26'),
(7, 'Update Account for User Have Name مدخل بيانات الموق From Admin محمد العتيبي', 'https://chandlerfreight.com/awqaf/admin/user/1/edit', 'POST', '154.191.252.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-13 22:39:53', '2023-06-13 22:39:53'),
(8, 'Update Account for User Have Name مدخل بيانات الموق From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/user/1/edit', 'POST', '154.191.252.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-13 22:40:13', '2023-06-13 22:40:13'),
(9, 'Add New Permission Group Have Name Test Group From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/permissionGroup/add', 'POST', '41.65.102.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 00:44:21', '2023-06-14 00:44:21'),
(10, 'Update Role For Permission Group Have Name Test Group From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/permissionGroup/5/permission', 'POST', '41.65.102.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 00:50:18', '2023-06-14 00:50:18'),
(11, 'Create New Admin Have Name مدير جديد From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/user/add', 'POST', '41.65.102.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 00:52:26', '2023-06-14 00:52:26'),
(12, 'Update Account for User Have Name مدخل بيانات From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/user/2/edit', 'POST', '41.65.102.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 01:04:32', '2023-06-14 01:04:32'),
(13, 'Update Teamwork Have Name د. رشيد بن مسفر الزهراني From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/4/edit', 'POST', '51.36.57.212', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:05:40', '2023-06-14 11:05:40'),
(14, 'Update Teamwork Have Name د. محمد بن عبدالله المجيدل From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/3/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:12:30', '2023-06-14 11:12:30'),
(15, 'Update App Setting From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/setting', 'POST', '41.43.119.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:13:45', '2023-06-14 11:13:45'),
(16, 'Update Teamwork Have Name د. رشيد بن مسفر الزهراني From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/4/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:18:28', '2023-06-14 11:18:28'),
(17, 'Update Teamwork Have Name ا. محمد بن فرحان النادر From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/2/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:20:26', '2023-06-14 11:20:26'),
(18, 'Update Page Have Name Privacy and Policy From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/3/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:20:45', '2023-06-14 11:20:45'),
(19, 'Update Teamwork Have Name د. محمد بن عبدالله المجيدل From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/3/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:20:50', '2023-06-14 11:20:50'),
(20, 'Update Page Have Name Privacy and Policy From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/3/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:21:09', '2023-06-14 11:21:09'),
(21, 'Update Teamwork Have Name ا. زياد بن عبداللطيف البراك From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/1/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:21:36', '2023-06-14 11:21:36'),
(22, 'Create New Teamwork Have Name د. عبدالرحمن بن محمد باشيخ From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/add', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:22:15', '2023-06-14 11:22:15'),
(23, 'Update Page Have Name Privacy From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/4/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:22:15', '2023-06-14 11:22:15'),
(24, 'Create New Teamwork Have Name د. هيفاء بنت سليمان القاضي From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/add', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:23:10', '2023-06-14 11:23:10'),
(25, 'Create New Teamwork Have Name د. نورة بنت عبدالعزيز المبارك From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/teamwork/add', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:23:37', '2023-06-14 11:23:37'),
(26, 'Update Page Have Name General Secretariat of the University (Speech of the Secretary General) From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/8/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:24:58', '2023-06-14 11:24:58'),
(27, 'Update Page Have Name The establishment of endowments From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/5/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15', 1, '2023-06-14 11:26:00', '2023-06-14 11:26:00'),
(28, 'Update Page Have Name The impact of endowments on the university From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/7/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:26:27', '2023-06-14 11:26:27'),
(29, 'Update Page Have Name ... From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/5/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15', 1, '2023-06-14 11:27:03', '2023-06-14 11:27:03'),
(30, 'Update Page Have Name The role of university endowments From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/6/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:27:07', '2023-06-14 11:27:07'),
(31, 'Update Layout Have Name euhud muhamad alnaayil From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/5/edit', 'POST', '77.31.206.23', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Safari/605.1.15', 1, '2023-06-14 11:27:52', '2023-06-14 11:27:52'),
(32, 'Update Layout Have Name Ohood Muhammes Alnayel From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/5/edit', 'POST', '77.31.206.23', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Safari/605.1.15', 1, '2023-06-14 11:28:06', '2023-06-14 11:28:06'),
(33, 'Update Page Have Name Privacy From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/4/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:29:04', '2023-06-14 11:29:04'),
(34, 'Update Page Have Name ... From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/1/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15', 1, '2023-06-14 11:29:54', '2023-06-14 11:29:54'),
(35, 'Update Page Have Name The strategy From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/2/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:29:55', '2023-06-14 11:29:55'),
(36, 'Update App Setting From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/setting', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:30:25', '2023-06-14 11:30:25'),
(37, 'Update Page Have Name Privacy From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/page/4/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:31:25', '2023-06-14 11:31:25'),
(38, 'Update Layout Have Name Investment opportunities From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/1/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:31:49', '2023-06-14 11:31:49'),
(39, 'Update Layout Have Name ... From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/2/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15', 1, '2023-06-14 11:36:52', '2023-06-14 11:36:52'),
(40, 'Update Layout Have Name Vision From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/6/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:38:02', '2023-06-14 11:38:02'),
(41, 'Update Layout Have Name Speech of the CEO of Awqaf From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/4/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:38:19', '2023-06-14 11:38:19'),
(42, 'Update Layout Have Name Mission From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/7/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:38:31', '2023-06-14 11:38:31'),
(43, 'Update Layout Have Name Message From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/layouts/8/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.4 Safari/605.1.15', 1, '2023-06-14 11:39:07', '2023-06-14 11:39:07'),
(44, 'Update Blog Have Name Awqaf company announces the launch of the new project From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/blogs/4/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:39:10', '2023-06-14 11:39:10'),
(45, 'Update Company Have Name Nourah Information Technology Company From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/companies/1/edit', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:41:54', '2023-06-14 11:41:54'),
(46, 'Update Company Have Name Nora Information Technology From Admin مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/companies/1/edit', 'POST', '41.43.119.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:47:21', '2023-06-14 11:47:21'),
(47, 'Update Profile Admin For مدخل بيانات الموق', 'https://chandlerfreight.com/awqaf/admin/user/myProfile', 'POST', '85.194.123.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 1, '2023-06-14 11:49:46', '2023-06-14 11:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `keyword_ar` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `keyword_en` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description_ar` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description_en` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name_ar`, `name_en`, `image`, `content_ar`, `content_en`, `keyword_ar`, `keyword_en`, `description_ar`, `description_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'شركه اوقاف تعلن عن طرح المشروع الجديد', 'Awqaf company announces the launch of the new project', '1685950084279016.png', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>\r\n\r\n<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'اوقاف, شركه اوقاف', 'Awqaf, Awqaf Company', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock', 1, '2021-08-04 10:32:45', '2023-06-05 04:28:04'),
(2, 'شركه اوقاف تعلن عن طرح المشروع الجديد', 'Awqaf company announces the launch of the new project', '1685950056889907.png', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>\r\n\r\n<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'اوقاف, شركه اوقاف', 'Awqaf, Awqaf Company', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock', 1, '2022-02-28 11:19:10', '2023-06-05 04:27:37'),
(3, 'شركه اوقاف تعلن عن طرح المشروع الجديد', 'Awqaf company announces the launch of the new project', '1685950024267188.png', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>\r\n\r\n<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'اوقاف, شركه اوقاف', 'Awqaf, Awqaf Company', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock', 1, '2021-08-04 10:32:45', '2023-06-05 04:27:04'),
(4, 'شركه اوقاف تعلن عن طرح المشروع الجديد', 'Awqaf company announces the launch of the new project', '1685949851502489.png', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>\r\n\r\n<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'اوقاف, شركه اوقاف', 'Awqaf, Awqaf Company', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock', 1, '2022-02-28 11:19:10', '2023-06-05 04:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `browser_tokens`
--

CREATE TABLE `browser_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `firebase_token` text NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `certificate` varchar(191) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `day` date NOT NULL,
  `same` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `certificate`, `status`, `day`, `same`, `created_at`, `updated_at`) VALUES
(2, 'Ep9bUSD2uw1MWtNq7hJP0BPmpCEaYINjtt6YCc8pQdYRbthMr9DaAI3w40t7WQOi', 1, '2023-06-13', 1, '2023-06-13 07:23:41', '2023-06-13 07:23:41'),
(3, 's7ZzsqqQlYbiN6hDymJipxjLNK1PSP4OP1lIBQIXNYRgY5KHPjhxAZoIi5lVFLw5', 1, '2023-06-14', 1, '2023-06-14 10:27:27', '2023-06-14 11:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `url` varchar(191) DEFAULT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name_ar`, `name_en`, `image`, `url`, `content_ar`, `content_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'نورة لتقنية المعلومات', 'Nora Information Technology', '1686039868604919.png', '#', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 1, '2023-06-06 05:24:28', '2023-06-06 05:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sitemap', 'ahmedtaherinfo0@gmail.com', NULL, 'sadf', '2022-03-01 07:34:06', '2022-03-01 07:34:06'),
(2, 'sitemap', 'ahmedtaherinfo0@gmail.com', '01256359654', 'تواصل مع أ / محمد احمد', '2023-06-11 07:05:32', '2023-06-11 07:05:32'),
(3, 'dsd', 'ahmedtaherinfo0@gmail.com', '01256359654', 'ddssd', '2023-06-13 05:18:31', '2023-06-13 05:18:31'),
(4, 'sitemap', 'ahmedtaherinfo0@gmail.com', '01256359654', 'سشبيبييبيب', '2023-06-14 11:47:56', '2023-06-14 11:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gmaps_geocache`
--

CREATE TABLE `gmaps_geocache` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `latitude` varchar(191) NOT NULL,
  `longitude` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE `layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `content_ar` longtext DEFAULT NULL,
  `content_en` longtext DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`id`, `name_ar`, `name_en`, `slug`, `content_ar`, `content_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الفرص الإستثماريه', 'Investment opportunities', 'investment', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">الأرض البيضاء 141 الف م</span></span></span></span></p>', '<p><strong>.</strong></p>', NULL, '2022-02-28 09:59:32', '2023-06-14 11:31:49'),
(2, 'عن شركة الأوقــــــاف', '...', 'header_content_home', '<p>أسست جامعة الأميرة نورة بنت عبد الرحمن شركة اوقاف جامعة الأميرة نورة بنت عبد الرحمن في سنة ١٤٣٧هـ وفقاً لرؤية الجامعة، وتسعى شركة الأوقاف إلى توفير منظومة وقفية رائدة تسهم بفاعلية في تعزيز الأعمال والاستثمار كخيار استراتيجي لتسريع تنفيذ المشاريع وتحسين الجودة وتعزيز الموارد المالية لجامعة الأميرة نورة بنت عبد الرحمن لتشارك بفاعلية في دعم قضايا التنمية المجتمعية داخل الجامعة وخارجها تماشيًا مع رؤية المملكة ٢٠٣٠م.</p>', '<p>...</p>', NULL, '2022-02-28 10:01:34', '2023-06-14 11:36:52'),
(3, 'صوره عن شركه اوقاف', 'About Awqaf Image', 'image_header_home', NULL, NULL, '1686476792683683.png', '2022-02-28 10:02:58', '2023-06-11 06:46:32'),
(4, 'كلمة الرئيس التنفيذي لأوقــــــاف', 'Speech of the CEO of Awqaf', 'ceo_text_home', '<p>تسعى الجامعات إلى تحقيق أهدافها الاستراتيجية و التي من أهمها تنويع مصادر التمويل لتحقيق الاكتفاء المالي واستدامته عبر إنشاء الوقف التعليمي أحد الأدوات المهمة الداعمة لمقدرات الجامعة المالية المرتبطة بثقافة المجتمع وتاريخه والمنطلق من مفاهيم الشريعة الإسلامية التي تشجع على التوسع في الأوقاف وتنميتها،وأغلب هذه الأوقاف الجامعية الكبيرة تدار من خلال جهات استثمارية متخصصة. تسعى الجامعات إلى تحقيق أهدافها الاستراتيجية و التي من أهمها تنويع مصادر التمويل لتحقيق الاكتفاء المالي واستدامته عبر إنشاء الوقف التعليمي أحد الأدوات المهمة الداعمة لمقدرات الجامعة المالية المرتبطة بثقافة المجتمع وتاريخه والمنطلق من مفاهيم الشريعة الإسلامية التي تشجع على التوسع في الأوقاف وتنميتها،وأغلب هذه الأوقاف الجامعية الكبيرة تدار من خلال جهات استثمارية متخصصة.</p>', '<p>.</p>', NULL, '2022-02-28 10:35:03', '2023-06-14 11:38:19'),
(5, 'عهود محمد النايل', 'Ohood Muhammes Alnayel', 'euhod_home_ceo', '<p>عهود محمد النايل</p>', '<p>Ohood Muhammes Alnayel</p>', NULL, '2022-02-28 10:36:16', '2023-06-14 11:28:06'),
(6, 'الرؤية', 'Vision', 'vision', '<p>أن يكون الوقف رائداً باستثماراته وممكناً مالياً وتشغيلياً وداعماً للجامعة لتحقيق أهدافها الاستثمارية.</p>', '<p>.</p>', NULL, '2022-02-28 11:30:16', '2023-06-14 11:38:02'),
(7, 'الأهداف', 'Mission', 'mission', '<p>الاستثمار الأمثل لأصول وأراضي الجامعة عن طريق مشاركة القطاع العام والخاص بالاضافة إلى الاستثمارات خارج نطاق المدينة الجامعية لخلق مصادر مالية لتخفيف العبء على الجامعة وتقليل المخاطر وتحقيق الاستدامة المالية للوقف.</p>', '<p>.</p>', NULL, '2022-02-28 11:50:28', '2023-06-14 11:38:31'),
(8, 'الرساله', 'Message', 'message', '<p>موائمة أهداف وقيم ومخرجات الوقف مع أهداف وقيم جامعة الاميرة نورة بنت عبدالرحمن.<br />\r\nالعمل على إيجاد عائد مستمر لتعزيز الحرية الأكاديمية والمالية للجامعة.<br />\r\nتعزيز مبدأ الاوقاف والحث عليها وتشجيعها لمصلحة الأجيال القادمة.<br />\r\nتنمية إيرادات وعوائد الوقف والمشاركة في تمويل برامج الجامعة التعليمية والبحثية وبرامج خدمة المجتمع.</p>', '<p>.</p>', NULL, '2022-02-28 11:52:57', '2023-06-14 11:39:07'),
(9, 'جهة تمويل', 'Finance Side', 'finance_geha', '<p>450</p>', '<p>450</p>', NULL, '2022-02-28 11:52:57', '2022-02-28 11:52:57'),
(10, 'طالب تمويل', 'Requests Finance', 'finance_requests', '<p>1200</p>', '<p>1200</p>', NULL, '2022-02-28 11:52:57', '2022-02-28 11:52:57'),
(11, 'جهه صحيه', 'Healthy Side', 'healthy_side', '<p>625</p>', '<p>625</p>', NULL, '2022-02-28 11:52:57', '2022-02-28 11:52:57'),
(12, 'ونستمر في طرح المزيد من المميزات', 'We will continue to introduce more features', 'content_below_features_home', '<h4>ونستمر في طرح المزيد من المميزات</h4>', '<pre>\r\nWe will continue to introduce more features</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-02-28 14:05:16', '2022-02-28 14:05:16'),
(13, 'صوره مميزات المنصه الصفحه الرئيسيه', 'Home Features Image', 'home_features_image', NULL, NULL, '1646066151599276.png', '2022-02-28 14:35:27', '2022-02-28 14:35:51'),
(14, 'صوره خدمات المنصه الصفحه الرئيسيه', 'Home Service Image', 'home_service_image', NULL, NULL, '164606692281044.png', '2022-02-28 14:35:27', '2022-02-28 14:48:42'),
(15, 'صوره صفحه من نحن', 'About Page Image', 'about_image', NULL, NULL, '1646121344176143.png', '2022-03-01 05:55:44', '2022-03-01 05:55:44'),
(16, 'ما نقدمه لعملائنا يثبت خبرتنا تماماً لذلك هم سعداء', 'What we offer to our clients always proves our expertise so they are happy', 'provicde_clients', '<p>ما نقدمه لعملائنا يثبت خبرتنا تماماً لذلك هم سعداء</p>', '<pre>\r\nWhat we offer to our clients always proves our expertise so they are happy</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 06:05:04', '2022-03-01 06:05:04'),
(17, 'صوره صفحه من نحن ما نقدمه لعملائنا', 'Picture of the page about us What we offer to our customers', 'about_privide_image', NULL, NULL, '1646121988508353.png', '2022-03-01 06:06:28', '2022-03-01 06:06:28'),
(18, 'مستمرين في تحسين خدماتنا دائما من اجل خلق فرصه افضل لك', 'We are constantly improving our services in order to create a better opportunity for you', 'service_page_content', '<h1>مستمرين في تحسين خدماتنا دائما من اجل خلق فرصه افضل لك</h1>', '<pre>\r\nWe are constantly improving our services in order to create a better opportunity for you</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:00:22', '2022-03-01 07:00:22'),
(19, 'صوره صفحه خدماتنا', 'Service Page Image', 'service_page_image', NULL, NULL, '1646125521444127.png', '2022-03-01 07:05:05', '2022-03-01 07:05:21'),
(20, 'للتقديم على تمويل مدرسي بدون فوائد', 'To apply for interest-free school financing', 'service_interest-free', '<p>للتقديم على تمويل مدرسي بدون فوائد</p>', '<pre>\r\nTo apply for interest-free school financing</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:07:09', '2022-03-01 07:07:09'),
(21, 'اذهب الي الجهة التعليميه لإنشاء طلب تمويل', 'Go to the educational institution to create a financing request', 'service_goto_educational', '<p>اذهب الي الجهة التعليميه لإنشاء طلب تمويل</p>', '<pre>\r\nGo to the educational institution to create a financing request</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:08:31', '2022-03-01 07:08:31'),
(22, 'قم بإنشاء طلب التمويل', 'Create a financing request', 'service_Create_a_financing', '<p>قم بإنشاء طلب التمويل</p>', '<pre>\r\nCreate a financing request</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:09:41', '2022-03-01 07:09:41'),
(23, 'إنتظر موافقه جهه التمويل علي طلبك', 'Wait for the financing authority to approve your application', 'service_waiting_financing_authority', '<p>إنتظر موافقه جهه التمويل علي طلبك</p>', '<pre>\r\nWait for the financing authority to approve your application</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:10:23', '2022-03-01 07:10:23'),
(24, 'محتوي نحن نقدر عملائنا صفحه خدماتنا', 'Content We value our customers Our services page', 'service_contact_content', '<p>نحن نقدر عملائنا جيداً لكي نوفر لهم خدمات افضل. لذلك إذا كان لديك اي اقتراح ارسله لنا فوراً وسوف نتواصل معك في اسرع وقت</p>', '<pre>\r\nWe value our customers well in order to provide them with better services. So if you have any suggestion, send it to us immediately and we will contact you as soon as possible</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:12:19', '2022-03-01 07:12:19'),
(25, 'ابعتلنا اي استفسار و هنرد عليك في اسرع وقت ممكن', 'Send us any inquiries and we will get back to you as soon as possible', 'contact_us_content', '<h1>ابعتلنا اي استفسار و هنرد عليك في اسرع وقت ممكن</h1>', '<pre>\r\nSend us any inquiries and we will get back to you as soon as possible</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:22:25', '2022-03-01 07:22:25'),
(26, 'صوره صفحه الاخبار', 'News Page Image', 'news_header_image', NULL, NULL, '1646128411727045.png', '2022-03-01 07:53:31', '2022-03-01 07:53:31'),
(27, 'تابعوا اخبارنا بأستمرار لمعرفة كل جديد عن', 'Follow our news constantly to know everything new about', 'news_header_content', '<p>تابعوا اخبارنا بأستمرار لمعرفة كل جديد عن&nbsp;</p>', '<pre>\r\nFollow our news constantly to know everything new about</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-03-01 07:54:18', '2022-03-01 07:54:18'),
(28, 'صوره تمويل صحي', 'Image Healthy Finance', 'image_healthy_finance_2', NULL, NULL, '1646135400459214.png', '2022-03-01 09:50:00', '2022-03-01 09:50:00'),
(29, 'صوره طالب تمويل تعليمي', 'Picture of an educational finance student', 'image_edu_finance_2', NULL, NULL, '1646135713481533.png', '2022-03-01 09:55:13', '2022-03-01 09:55:13'),
(30, 'صوره طالب تمويل صحي', 'Picture of a health finance student', 'image_healthy_finance_3', NULL, NULL, '1646313250467899.png', '2022-03-03 11:14:10', '2022-03-03 11:14:10'),
(31, 'صوره جهه تمويل تعليمي', 'A picture of an educational fund', 'image_edu_finance_1', NULL, NULL, '1646313343189002.png', '2022-03-03 11:15:43', '2022-03-03 11:15:43'),
(32, 'صوره صفحه تسجيل وتسجيل حساب جديد الدخول', 'Login Page Image and Registration Page', 'login_page_image', NULL, NULL, '1646313515363567.jpg', '2022-03-03 11:18:35', '2022-03-03 11:18:35'),
(33, 'صوره بانر داشبورد المنصه', 'Banner Dashboard Image', 'dashboard_main_image', NULL, NULL, '1646643668878208.png', '2022-03-07 07:01:08', '2022-03-07 07:01:08'),
(34, 'لتسهيل تقسيط المصروفات المدرسية بدون فوائد', 'To facilitate the payment of expenses School without benefits', 'new_home_header_content', '<p>نوفر لك حلول تمويلية سريعة وسلسة لمواصلة استثمار أبنائك<br />\r\nفي التعليم بمرونة تامة</p>', '<pre>\r\nWe provide you with fast and smooth financing solutions to continue investing your children\r\nIn education with complete flexibility</pre>', NULL, '2022-06-07 07:46:20', '2022-06-07 07:46:20'),
(35, 'لينك زر قدم الان', 'Apply Now Link', 'new_home_header_apply_link', '<p>https://seaah.fund/</p>', '<p>https://seaah.fund/</p>', NULL, '2022-06-07 07:48:22', '2022-06-07 07:48:22'),
(36, 'صوره الهيدر الصفحه الرئيسيه التصميم الجديد', 'Header Image Home Page New Design', 'new_home_header_image', NULL, NULL, '1654595453578778.jpg', '2022-06-07 07:50:53', '2022-06-07 07:50:53'),
(37, 'صوره من نحن الصفحه الرئيسيه الجديده', 'About Image Home Page New Design', 'new_home_about_image', NULL, NULL, '165459583761269.png', '2022-06-07 07:57:17', '2022-06-07 07:57:17'),
(38, 'محتوي من نحن الصفحه الرئيسيه التصميم الجديد', 'Content About Home Page New Design', 'new_home_about_content', '<p>هي منصة وسيطه توفر لك التقسيط الكامل والمريح بالشراكه مع البنوك والمدارس الأهلية وتقدم حلول مالية مبسطة ومميزات إضافية لأولياء الأمور ، بدون أي فوائد أو رسوم إدارية لمدة ١٢ شهراً</p>\r\n\r\n<p>هي منصة وسيطة بين ولي الأمر وجهة التمويل والجهة التعليمية تسدد جهة التمويل الرسوم الدراسية كاملة عن الطالب للجهة التعليمية وكما أنها توفر خاصية تقسيط رسوم التعليم دون فائدة.</p>', '<pre>\r\nIt is an intermediary platform that provides you with complete and comfortable installments in partnership with private banks and schools and offers simplified financial solutions and additional features for parents, without any interests or administrative fees for a period of 12 months\r\n\r\nIt is an intermediary platform between the parent, the funding agency, and the educational agency. The funding agency pays the full tuition fees for the student to the educational agency. It also provides the feature of installments for tuition fees without interest.</pre>', NULL, '2022-06-07 07:59:31', '2022-06-07 07:59:31'),
(39, 'في سعة نقسط الأقساط المدرسية لك ولأبنائك بدون فوائد', 'In the capacity of the school installments installments For you and your children without interest', 'new_home_features_heading', '<h4>في سعة نقسط الأقساط المدرسية<br />\r\nلك ولأبنائك بدون فوائد</h4>', '<pre>\r\nIn the capacity of the school installments installments\r\nFor you and your children without interest</pre>', NULL, '2022-06-07 09:15:36', '2022-06-07 09:15:36'),
(40, 'تسهيل وتيسير الأقساط لولي أمر الطالب والعمل على حل الأزمة المالية للجهة التعليمية', 'Facilitating and facilitating the installments for the guardian of the student and working on a solution The financial crisis of the educational body', 'new_home_features_content', '<p>تسهيل وتيسير الأقساط لولي أمر الطالب والعمل على حل<br />\r\nالأزمة المالية للجهة التعليمية واستثمار وتنويع مصادر الدخل<br />\r\nللجهة التمويلية والعمل على تطوير قطاع مالي متنوع وفاعل<br />\r\nيدعم تنمية الاقتصاد الوطني</p>', '<pre>\r\nFacilitating and facilitating the installments for the guardian of the student and working on a solution\r\nThe financial crisis of the educational body, investment and diversification of sources of income\r\nTo the financing body and work to develop a diversified and effective financial sector\r\nSupports the development of the national economy</pre>', NULL, '2022-06-07 09:16:47', '2022-06-07 09:16:47'),
(41, 'سهلنا لك التقسيط', 'We made it easy for you to install', 'new_home_easy_install', '<h3>وبدون فوائد</h3>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', '<pre>\r\nAnd without Interest</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-06-07 09:22:07', '2022-06-07 09:22:07'),
(42, 'صوره سهلنا لك التقسيط الصفحه الرئيسيه التصميم الجديد', 'Image we made it easy for you in installments Home Page New Design', 'new_home_easy_install_image', NULL, NULL, '1654601041890226.png', '2022-06-07 09:24:01', '2022-06-07 09:24:01'),
(43, 'بداية الفصل الدراسي', 'Beginning of the semester', 'Beginning_of_the_semester', '<p>يتم تعبئة الطلب عن طريق المنشأة التعليمية وتسجيل ولي الامر في المنصة</p>', '<pre>\r\nThe application is filled out by the educational facility and the parent is registered on the platform</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-06-07 09:29:54', '2022-06-07 09:29:54'),
(44, 'إرسال الطلب لجهة التمويل', 'Send request to financing authority', 'Send_request_to_financing_authority', '<p>يتم ارسال الطلب لجهة التمويل والحصول على الموافقة من 24-72 ساعة</p>', '<pre>\r\nThe application is sent to the financing authority and approval is obtained from 24-72 hours</pre>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<p>&nbsp;</p>', NULL, '2022-06-07 09:30:52', '2022-06-07 09:30:52'),
(45, 'الموافقه لسداد الرسوم وحسابها', 'Agree to repay Fees and calculation', 'Agree_to_repay_Fees_and_calculation', '<p>عن طريق البنك يتم استقطاع كامل ملبغ الرسوم من حساب العميل على مدة 1-12 شهر (حسب رغبة العميل)</p>', '<pre>\r\nThrough the bank, the full amount of fees is deducted from the customer&rsquo;s account over a period of 1-12 months (according to the customer&rsquo;s desire)</pre>', NULL, '2022-06-07 09:33:51', '2022-06-07 09:33:51'),
(46, 'استكمال الطلب', 'Complete the application', 'Complete_the_application', '<p>يتم استكمال الطلب وتزويد المنصة بكل ما يلزم من بيانات</p>', '<pre>\r\nThe application is completed and the platform is provided with all the necessary data</pre>', NULL, '2022-06-07 09:34:33', '2022-06-07 09:34:33'),
(47, 'النهاية', 'Finish', 'Finish', '<p>في هذا المرحلة يحصل ولي الأمر على تمويل من المنصة</p>', '<pre>\r\nAt this stage, the guardian receives funding from the platform</pre>', NULL, '2022-06-07 09:35:11', '2022-06-07 09:35:11'),
(48, 'صوره الفوتر الصفحه الرئيسيه التصميم الجديد', 'Footer Image Home Page New Design', 'new_home_footer_image', NULL, NULL, '1654603376611055.png', '2022-06-07 10:02:56', '2022-06-07 10:02:56'),
(49, 'نص الكلمات الدليليه صفحه خدماتنا', 'Content Keywords Services Page', 'keywords_services_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:32:38', '2022-07-26 06:32:38'),
(50, 'نص الوصف صفحه خدماتنا', 'Content Description Services Page', 'description_services_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:36:08', '2022-07-26 06:36:08'),
(51, 'نص الكلمات الدليليه صفحه اتصل بنا', 'Content Keywords Contact Us Page', 'keywords_contact_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:32:38', '2022-07-26 06:32:38'),
(52, 'نص الوصف صفحه اتصل بنا', 'Content Description Contact Us Page', 'description_contact_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:36:08', '2022-07-26 06:36:08'),
(53, 'نص الكلمات الدليليه صفحه الأخبار', 'Content Keywords Blogs Page', 'keywords_blogs_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:32:38', '2022-07-26 06:32:38'),
(54, 'نص الوصف صفحه الأخبار', 'Content Description Blogs Page', 'description_blogs_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:36:08', '2022-07-26 06:36:08'),
(55, 'نص الكلمات الدليليه صفحه الأسئله الشائعه', 'Content Keywords Common Question Page', 'keywords_common_question_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:32:38', '2022-07-26 06:32:38'),
(56, 'نص الوصف صفحه الأسئله الشائعه', 'Content Description Common Question Page', 'description_common_question_page', '<p>محتوي</p>', '<p>Content</p>', NULL, '2022-07-26 06:36:08', '2022-07-26 06:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `link_views`
--

CREATE TABLE `link_views` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_id` varchar(191) NOT NULL,
  `language` varchar(191) NOT NULL,
  `browser` varchar(191) NOT NULL,
  `browser_version` varchar(191) NOT NULL,
  `os` varchar(191) NOT NULL,
  `os_version` varchar(191) NOT NULL,
  `ip` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_30_174357_links', 1),
(4, '2016_10_30_174359_link_views', 1),
(5, '2018_11_24_091730_create_settings_table', 1),
(6, '2018_11_24_091848_create_pages_table', 1),
(7, '2018_11_24_091902_create_contacts_table', 1),
(10, '2019_08_17_112938_create_layouts_table', 1),
(17, '2019_08_19_081454_create_permissions_table', 2),
(18, '2019_08_19_081523_create_roles_table', 2),
(20, '2019_08_19_135031_create_shoppingcart_table', 3),
(24, '2019_09_28_102940_create_sessions_table', 6),
(58, '2020_09_16_105515_create_gmaps_geocache_table', 37),
(63, '2020_12_29_091323_create_permission_groups_table', 42),
(64, '2020_12_30_095458_create_vehicle_types_table', 43),
(65, '2020_12_30_105426_create_payloads_types_table', 44),
(66, '2021_01_04_090955_create_verify_logins_table', 45),
(74, '2021_01_18_150943_create_offer_accepteds_table', 52),
(75, '2021_01_19_085957_create_finish_points_table', 53),
(76, '2021_01_19_090125_create_photo_finish_points_table', 53),
(77, '2021_01_19_105507_create_rate_lists_table', 54),
(78, '2021_01_19_112406_create_rates_table', 55),
(79, '2021_01_26_084345_create_videos_table', 56),
(80, '2021_01_26_101302_create_notifications_table', 57),
(81, '2021_06_23_094120_create_random_datas_table', 58),
(82, '2021_06_27_090242_create_balances_table', 59),
(83, '2021_07_07_092548_create_users_c_tokens_table', 60),
(84, '2021_07_11_102753_create_refunds_table', 61),
(85, '2021_08_03_135239_create_blogs_table', 62),
(86, '2021_08_04_133844_create_services_table', 63),
(87, '2021_08_05_085156_create_sliders_table', 64),
(88, '2020_09_15_111228_create_goves_table', 65),
(89, '2020_09_15_113140_create_cities_table', 66),
(90, '2021_08_08_111047_create_study_phases_table', 67),
(91, '2021_08_08_114103_create_classes_table', 68),
(92, '2021_08_08_140732_create_sons_table', 69),
(93, '2021_08_09_094111_create_monshaa_study_phases_table', 70),
(94, '2021_08_09_110950_create_jehat_tamoil_phones_table', 71),
(95, '2021_01_10_143626_create_orders_table', 72),
(96, '2021_01_10_162517_create_cancel_orders_table', 73),
(97, '2021_08_17_103526_create_installments_table', 74),
(98, '2022_01_12_084232_create_common_questions_table', 75),
(99, '2022_02_09_103306_create_type_buildings_table', 76),
(100, '2022_02_28_103659_create_subscribes_table', 77),
(101, '2022_03_01_083221_create_teamworks_table', 78),
(102, '2022_03_08_140414_create_monshaa_users_table', 79),
(103, '2022_03_10_083545_create_completed_orders_table', 80),
(104, '2022_03_10_104256_create_bank_orders_table', 81),
(105, '2022_03_10_121314_create_accept_orders_table', 82),
(106, '2022_03_14_103544_create_cancel_order_histories_table', 83),
(107, '2022_03_14_110156_create_order_requests_table', 84),
(108, '2022_03_24_115722_create_monshaa_banks_table', 85),
(109, '2022_03_24_132317_create_banks_table', 86),
(110, '2022_04_12_115619_create_order_rejected_finances_table', 87),
(111, '2022_06_07_100424_create_why_uses_table', 88),
(112, '2022_06_21_123228_create_years_table', 89),
(113, '2019_08_19_000000_create_failed_jobs_table', 90),
(114, '2019_12_14_000001_create_personal_access_tokens_table', 90),
(117, '2023_06_05_083303_create_companies_table', 91),
(118, '2023_06_06_061705_create_projects_table', 91),
(119, '2023_06_06_061939_create_project_points_table', 91),
(120, '2023_06_06_062017_create_reports_table', 92);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `isRead` tinyint(1) NOT NULL DEFAULT 0,
  `redirect_id` int(11) NOT NULL,
  `click_action` int(11) NOT NULL,
  `title_ar` varchar(191) NOT NULL,
  `content_ar` text NOT NULL,
  `title_en` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content_en` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `isRead`, `redirect_id`, `click_action`, `title_ar`, `content_ar`, `title_en`, `content_en`, `sender_id`, `receiver_id`, `created_at`, `updated_at`) VALUES
(3044, 0, 16, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-13 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-13 Approved', 7, 3, '2022-03-14 10:25:14', '2022-03-14 10:25:14'),
(3045, 0, 16, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-13 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-13 Approved', 7, 4, '2022-03-14 10:25:15', '2022-03-14 10:25:15'),
(3046, 0, 13, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-12', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-12', 3, 7, '2022-03-14 10:26:59', '2022-03-14 10:26:59'),
(3047, 0, 13, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-12 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-12 To Finance بنك الراجحي', 3, 4, '2022-03-14 10:26:59', '2022-03-14 10:26:59'),
(3048, 0, 13, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-12 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-12 Rejected', 7, 3, '2022-03-14 10:27:13', '2022-03-14 10:27:13'),
(3049, 0, 13, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-12 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-12 Rejected', 7, 4, '2022-03-14 10:27:13', '2022-03-14 10:27:13'),
(3050, 0, 12, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-11', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-11', 3, 7, '2022-03-15 06:30:07', '2022-03-15 06:30:07'),
(3051, 0, 12, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-11 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-11 To Finance بنك الراجحي', 3, 4, '2022-03-15 06:30:07', '2022-03-15 06:30:07'),
(3052, 0, 12, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-11 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-11 Rejected', 7, 3, '2022-03-15 06:37:50', '2022-03-15 06:37:50'),
(3053, 0, 12, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-11 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-11 Rejected', 7, 4, '2022-03-15 06:37:50', '2022-03-15 06:37:50'),
(3054, 0, 13, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-12', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-12', 3, 7, '2022-03-15 07:06:52', '2022-03-15 07:06:52'),
(3055, 0, 13, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-12 إلي جهه تمويل بنك الراجحي 0', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-12 To Finance بنك الراجحي 0', 3, 4, '2022-03-15 07:06:52', '2022-03-15 07:06:52'),
(3056, 0, 13, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-12 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-12 Rejected', 7, 3, '2022-03-15 07:30:14', '2022-03-15 07:30:14'),
(3057, 0, 13, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-12 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-12 Rejected', 7, 4, '2022-03-15 07:30:14', '2022-03-15 07:30:14'),
(3058, 0, 12, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-11', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-11', 3, 7, '2022-03-15 07:47:56', '2022-03-15 07:47:56'),
(3059, 0, 12, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-11 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-11 To Finance بنك الراجحي', 3, 4, '2022-03-15 07:47:56', '2022-03-15 07:47:56'),
(3060, 0, 12, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-11 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-11 Approved', 7, 3, '2022-03-15 08:11:38', '2022-03-15 08:11:38'),
(3061, 0, 12, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-11 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-11 Approved', 7, 4, '2022-03-15 08:11:38', '2022-03-15 08:11:38'),
(3062, 0, 1, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-7-1', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-7-1', 3, 7, '2022-03-15 08:19:00', '2022-03-15 08:19:00'),
(3063, 0, 1, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-7-1 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-7-1 To Finance بنك الراجحي', 3, 4, '2022-03-15 08:19:00', '2022-03-15 08:19:00'),
(3064, 0, 1, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-7-1 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-7-1 Rejected', 7, 3, '2022-03-15 08:19:29', '2022-03-15 08:19:29'),
(3065, 0, 1, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-7-1 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-7-1 Rejected', 7, 4, '2022-03-15 08:19:29', '2022-03-15 08:19:29'),
(3066, 0, 1, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-7-1', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-7-1', 3, 7, '2022-03-15 08:19:48', '2022-03-15 08:19:48'),
(3067, 0, 1, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-7-1 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-7-1 To Finance بنك الراجحي', 3, 4, '2022-03-15 08:19:49', '2022-03-15 08:19:49'),
(3068, 0, 1, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-7-1 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-7-1 Approved', 7, 3, '2022-03-15 08:20:17', '2022-03-15 08:20:17'),
(3069, 0, 1, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-7-1 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-7-1 Approved', 7, 4, '2022-03-15 08:20:18', '2022-03-15 08:20:18'),
(3070, 0, 20, 2, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من المنشأه مدرسه أجيال الدوليه للأبن محمود', 'New Request Finance', 'You Have a new Finance Request Have Number  From مدرسه أجيال الدوليه For محمود', 4, 3, '2022-03-16 06:06:11', '2022-03-16 06:06:11'),
(3071, 0, 20, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-17', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-17', 3, 7, '2022-03-16 06:07:33', '2022-03-16 06:07:33'),
(3072, 0, 20, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-17 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-17 To Finance بنك الراجحي', 3, 4, '2022-03-16 06:07:33', '2022-03-16 06:07:33'),
(3073, 0, 20, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-17 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-17 Rejected', 7, 3, '2022-03-16 06:09:49', '2022-03-16 06:09:49'),
(3074, 0, 20, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-17 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-17 Rejected', 7, 4, '2022-03-16 06:09:50', '2022-03-16 06:09:50'),
(3075, 0, 20, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-17', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-17', 3, 7, '2022-03-16 06:10:04', '2022-03-16 06:10:04'),
(3076, 0, 20, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-17 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-17 To Finance بنك الراجحي', 3, 4, '2022-03-16 06:10:04', '2022-03-16 06:10:04'),
(3077, 0, 20, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-17 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-17 Approved', 7, 3, '2022-03-16 06:10:16', '2022-03-16 06:10:16'),
(3078, 0, 20, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-17 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-17 Approved', 7, 4, '2022-03-16 06:10:16', '2022-03-16 06:10:16'),
(3079, 0, 18, 2, 'تم تحصيل المصاريف', 'لقد تم تحصيل مصاريف الطلب رقم OR-4-15', 'Expenses collected', 'Application No. has been charged OR-4-15', 4, 3, '2022-03-16 06:11:48', '2022-03-16 06:11:48'),
(3080, 0, 18, 2, 'تم تحصيل المصاريف', 'لقد تم تحصيل مصاريف الطلب رقم OR-4-15', 'Expenses collected', 'Application No. has been charged OR-4-15', 4, 7, '2022-03-16 06:11:48', '2022-03-16 06:11:48'),
(3081, 0, 19, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-16', 3, 7, '2022-03-17 05:47:19', '2022-03-17 05:47:19'),
(3082, 0, 19, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-16 To Finance بنك الراجحي', 3, 4, '2022-03-17 05:47:19', '2022-03-17 05:47:19'),
(3083, 0, 19, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Rejected', 7, 3, '2022-03-17 06:00:58', '2022-03-17 06:00:58'),
(3084, 0, 19, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-16', 3, 7, '2022-03-17 06:07:43', '2022-03-17 06:07:43'),
(3085, 0, 19, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Rejected', 7, 3, '2022-03-17 06:08:22', '2022-03-17 06:08:22'),
(3086, 0, 19, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Rejected', 7, 4, '2022-03-17 06:08:22', '2022-03-17 06:08:22'),
(3087, 0, 19, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-16', 3, 7, '2022-03-17 06:08:53', '2022-03-17 06:08:53'),
(3088, 0, 19, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-16 To Finance بنك الراجحي', 3, 4, '2022-03-17 06:08:53', '2022-03-17 06:08:53'),
(3089, 0, 19, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Rejected', 7, 3, '2022-03-17 06:44:02', '2022-03-17 06:44:02'),
(3090, 0, 19, 2, 'رفض طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تم رفضه', 'Reject Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Rejected', 7, 4, '2022-03-17 06:44:02', '2022-03-17 06:44:02'),
(3091, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 7, '2022-03-17 08:29:01', '2022-03-17 08:29:01'),
(3092, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 7, '2022-03-17 08:29:15', '2022-03-17 08:29:15'),
(3093, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 7, '2022-03-17 08:29:39', '2022-03-17 08:29:39'),
(3094, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 17, '2022-03-17 08:29:40', '2022-03-17 08:29:40'),
(3095, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 24, '2022-03-17 08:29:40', '2022-03-17 08:29:40'),
(3096, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 4, '2022-03-17 08:30:03', '2022-03-17 08:30:03'),
(3097, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 11, '2022-03-17 08:30:04', '2022-03-17 08:30:04'),
(3098, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 13, '2022-03-17 08:30:04', '2022-03-17 08:30:04'),
(3099, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 14, '2022-03-17 08:30:04', '2022-03-17 08:30:04'),
(3100, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 15, '2022-03-17 08:30:04', '2022-03-17 08:30:04'),
(3101, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 16, '2022-03-17 08:30:05', '2022-03-17 08:30:05'),
(3102, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 8, '2022-03-17 08:30:24', '2022-03-17 08:30:24'),
(3103, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 21, '2022-03-17 08:30:24', '2022-03-17 08:30:24'),
(3104, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 25, '2022-03-17 08:30:24', '2022-03-17 08:30:24'),
(3105, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'وايت أرو لتصميم وبرمجه المواقع', 1, 7, '2022-03-17 08:32:01', '2022-03-17 08:32:01'),
(3106, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'وايت أرو لتصميم وبرمجه المواقع', 1, 7, '2022-03-17 08:34:06', '2022-03-17 08:34:06'),
(3107, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'وايت أرو لتصميم وبرمجه المواقع', 1, 7, '2022-03-17 08:34:30', '2022-03-17 08:34:30'),
(3108, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'وايت أرو لتصميم وبرمجه المواقع', 1, 17, '2022-03-17 08:34:31', '2022-03-17 08:34:31'),
(3109, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'وايت أرو لتصميم وبرمجه المواقع', 1, 24, '2022-03-17 08:34:31', '2022-03-17 08:34:31'),
(3110, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 26, '2022-03-17 08:43:48', '2022-03-17 08:43:48'),
(3111, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 25, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3112, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 24, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3113, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 23, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3114, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 22, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3115, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 21, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3116, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 19, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3117, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 17, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3118, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 16, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3119, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 15, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3120, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 14, '2022-03-17 08:43:49', '2022-03-17 08:43:49'),
(3121, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 13, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3122, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 12, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3123, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 11, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3124, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 10, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3125, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 9, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3126, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 8, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3127, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 7, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3128, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 4, '2022-03-17 08:43:50', '2022-03-17 08:43:50'),
(3129, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع فور تست داتا', 'White Arrow for Website Design', 'White Arrow for Website Design for Test  Data', 1, 3, '2022-03-17 08:43:51', '2022-03-17 08:43:51'),
(3130, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 26, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3131, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 25, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3132, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 24, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3133, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 23, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3134, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 22, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3135, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 21, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3136, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 19, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3137, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 17, '2022-03-17 08:49:49', '2022-03-17 08:49:49'),
(3138, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 16, '2022-03-17 08:49:50', '2022-03-17 08:49:50'),
(3139, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 15, '2022-03-17 08:49:50', '2022-03-17 08:49:50'),
(3140, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 14, '2022-03-17 08:49:50', '2022-03-17 08:49:50'),
(3141, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 13, '2022-03-17 08:49:50', '2022-03-17 08:49:50'),
(3142, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 12, '2022-03-17 08:49:50', '2022-03-17 08:49:50'),
(3143, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 11, '2022-03-17 08:49:51', '2022-03-17 08:49:51'),
(3144, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 10, '2022-03-17 08:49:51', '2022-03-17 08:49:51'),
(3145, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 9, '2022-03-17 08:49:51', '2022-03-17 08:49:51'),
(3146, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 8, '2022-03-17 08:49:51', '2022-03-17 08:49:51'),
(3147, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 7, '2022-03-17 08:49:51', '2022-03-17 08:49:51'),
(3148, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 26, '2022-03-17 08:51:07', '2022-03-17 08:51:07'),
(3149, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 25, '2022-03-17 08:51:07', '2022-03-17 08:51:07'),
(3150, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 24, '2022-03-17 08:51:07', '2022-03-17 08:51:07'),
(3151, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 23, '2022-03-17 08:51:07', '2022-03-17 08:51:07'),
(3152, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 22, '2022-03-17 08:51:07', '2022-03-17 08:51:07'),
(3153, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 21, '2022-03-17 08:51:07', '2022-03-17 08:51:07'),
(3154, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 19, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3155, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 17, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3156, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 16, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3157, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 15, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3158, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 14, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3159, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 13, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3160, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 12, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3161, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 11, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3162, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 10, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3163, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 9, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3164, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 8, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3165, 0, 0, 1, 'وايت أرو لتصميم وبرمجه المواقع', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', 'White Arrow for Website Design', 1, 7, '2022-03-17 08:51:08', '2022-03-17 08:51:08'),
(3166, 0, 21, 2, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من المنشأه مستشفي 1 للأبن صشثسق', 'New Request Finance', 'You Have a new Finance Request Have Number  From مستشفي 1 For صشثسق', 8, 26, '2022-03-20 11:51:14', '2022-03-20 11:51:14'),
(3167, 0, 19, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-16', 3, 17, '2022-03-24 09:10:26', '2022-03-24 09:10:26'),
(3168, 0, 19, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16 إلي جهه تمويل Bank 6', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-16 To Finance Bank 6', 3, 4, '2022-03-24 09:10:26', '2022-03-24 09:10:26'),
(3169, 0, 13, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-12', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-12', 3, 7, '2022-03-24 09:36:16', '2022-03-24 09:36:16'),
(3170, 0, 13, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-12 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-12 To Finance بنك الراجحي', 3, 4, '2022-03-24 09:36:16', '2022-03-24 09:36:16'),
(3171, 0, 19, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-16', 3, 7, '2022-03-24 09:41:20', '2022-03-24 09:41:20'),
(3172, 0, 19, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-16 To Finance بنك الراجحي', 3, 4, '2022-03-24 09:41:21', '2022-03-24 09:41:21'),
(3173, 0, 19, 2, 'طلب تمويل', 'لديك طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16', 'Request Finance', 'You Have new Finance Request From احمد محمد محمود for Order Number OR-4-16', 3, 7, '2022-03-24 11:10:59', '2022-03-24 11:10:59'),
(3174, 0, 19, 2, 'طلب تمويل', 'تم إرسال  طلب تمويل من طالب التمويل احمد محمد محمود للطلب رقم OR-4-16 إلي جهه تمويل بنك الراجحي', 'Request Finance', 'New Finance Request Sent From احمد محمد محمود for Order Number OR-4-16 To Finance بنك الراجحي', 3, 4, '2022-03-24 11:10:59', '2022-03-24 11:10:59'),
(3175, 0, 19, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Approved', 7, 3, '2022-03-28 07:49:19', '2022-03-28 07:49:19'),
(3176, 0, 19, 2, 'الموافقه علي طلب التمويل', ' طلب تمويل من طالب التمويل بنك الراجحي للطلب رقم OR-4-16 تمت الموافقه عليه', 'Approve Request Finance', 'Your Finance Request From بنك الراجحي for Order Number OR-4-16 Approved', 7, 4, '2022-03-28 07:49:19', '2022-03-28 07:49:19'),
(3177, 0, 22, 2, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من المنشأه مدرسه أجيال الدوليه للأبن محمود', 'New Request Finance', 'You Have a new Finance Request Have Number  From مدرسه أجيال الدوليه For محمود', 4, 3, '2022-04-12 09:48:02', '2022-04-12 09:48:02'),
(3178, 0, 23, 2, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من المنشأه مدرسه أجيال الدوليه للأبن محمود', 'New Request Finance', 'You Have a new Finance Request Have Number  From مدرسه أجيال الدوليه For محمود', 4, 3, '2022-04-12 09:48:29', '2022-04-12 09:48:29'),
(3179, 0, 31, 95, 'تسجيل حساب جديد', 'تسم تسجيل حساب جديد لمنشأه  تعليميه  بإسم Ahmed', 'New Account', 'You Have a new Education Finance Account Have Name Ahmed', 31, 1, '2022-08-14 09:52:31', '2022-08-14 09:52:31'),
(3180, 0, 32, 95, 'تسجيل حساب جديد', 'تسم تسجيل حساب جديد لمنشأه  تعليميه  بإسم منشأه 1', 'New Account', 'You Have a new Education Finance Account Have Name منشأه 1', 32, 1, '2022-08-14 11:14:36', '2022-08-14 11:14:36'),
(3181, 0, 33, 95, 'تسجيل حساب جديد', 'تسم تسجيل حساب جديد لولي أمر بإسم Ahmed', 'New Account', 'You Have a new Waly Amr Account Have Name Ahmed', 33, 1, '2023-03-21 06:50:31', '2023-03-21 06:50:31'),
(3182, 0, 34, 95, 'تسجيل حساب جديد', 'تسم تسجيل حساب جديد لولي أمر بإسم asd', 'New Account', 'You Have a new Waly Amr Account Have Name asd', 34, 1, '2023-03-21 07:17:30', '2023-03-21 07:17:30'),
(3183, 0, 14, 20, 'طلب إنضمام', 'لديك طلب إنضمام من ولي الأمر Ahmed', 'Request Join', 'You Have a new Request Join From Ahmed', 33, 11, '2023-03-21 08:05:32', '2023-03-21 08:05:32'),
(3184, 0, 15, 20, 'طلب إنضمام', 'لديك طلب إنضمام من ولي الأمر Ahmed', 'Request Join', 'You Have a new Request Join From Ahmed', 33, 8, '2023-03-21 08:11:26', '2023-03-21 08:11:26'),
(3185, 0, 13, 21, 'الموافقه علي طلب الإنضمام', 'تمت الموافقه علي طلب الإنضمام الي المنشأه مدرسه أجيال الدوليه', 'Request Approved', 'You Have a new Request Join From مدرسه أجيال الدوليه', 4, 33, '2023-03-21 08:32:40', '2023-03-21 08:32:40'),
(3186, 0, 24, 23, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من  Ahmed للأبن mohamed', 'New Request Finance', 'You Have a new Finance Request Have Number  From Ahmed For mohamed', 33, 4, '2023-03-21 10:32:09', '2023-03-21 10:32:09'),
(3187, 0, 24, 2, 'الموافقه علي طلبك', 'لقد تم الموافقه علي طلب التمويل الخاص بك برقم OR-33-20', 'Request Approved', 'Application No. has been Approved OR-33-20', 4, 33, '2023-03-21 11:00:59', '2023-03-21 11:00:59'),
(3188, 0, 25, 23, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من  Ahmed للأبن ahmed', 'New Request Finance', 'You Have a new Finance Request Have Number  From Ahmed For ahmed', 33, 4, '2023-03-21 11:02:22', '2023-03-21 11:02:22'),
(3189, 0, 25, 2, 'رفض طلبك', 'لقد تم رفض طلب التمويل الخاص بك برقم OR-33-21', 'Request Reject', 'Application No. has been Rejected OR-33-21', 4, 33, '2023-03-21 11:03:01', '2023-03-21 11:03:01'),
(3190, 0, 26, 23, 'طلب تمويل جديد', 'تم إضافه طلب تمويل جديد برقم  من  Ahmed للأبن ahmed', 'New Request Finance', 'You Have a new Finance Request Have Number  From Ahmed For ahmed', 33, 4, '2023-03-21 11:05:47', '2023-03-21 11:05:47'),
(3191, 0, 35, 95, 'تسجيل حساب جديد', 'تسم تسجيل حساب جديد لولي أمر بإسم محمد', 'New Account', 'You Have a new Waly Amr Account Have Name محمد', 35, 1, '2023-03-26 09:43:21', '2023-03-26 09:43:21'),
(3192, 0, 16, 20, 'طلب إنضمام', 'لديك طلب إنضمام من ولي الأمر محمد', 'Request Join', 'You Have a new Request Join From محمد', 35, 11, '2023-03-26 10:07:15', '2023-03-26 10:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `keyword_ar` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `keyword_en` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description_ar` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description_en` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `menu` int(11) NOT NULL DEFAULT 1,
  `menu_place` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `image_place` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `image` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name_ar`, `name_en`, `content_ar`, `content_en`, `keyword_ar`, `keyword_en`, `description_ar`, `description_en`, `menu`, `menu_place`, `image_place`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الهيكل التنظيمي', '...', '<p>...</p>', '<p><strong>...</strong></p>', 'الهيكل التنظيمي', '......', 'الهيكل التنظيمي', '....', 1, 1, 1, '1686727794377196.png', '2023-06-11 03:53:42', '2023-06-14 11:29:54'),
(2, 'الاستراتيجية', 'The strategy', '<p>.</p>', '<p><strong>.</strong></p>', 'الاستراتيجية', 'The strategy', 'الاستراتيجية', 'The strategy', 1, 1, 1, '1686468456260375.png', '2023-06-11 03:53:42', '2023-06-14 11:29:55'),
(3, 'سياسة النشر والاستخدام', 'Privacy and Policy', '<p>موقع اوقاف جامعة الاميرة نورة بنت عبد الرحمن هي وسيلة نشر الإلكتروني لجميع منسوبي وقطاعات<br />\r\nالجامعة ويجب استخدامها فيما يعود بالنفع على الجامعة ومنسوبيها وقطاعاتها المختلفة وبما لا يخل بأي<br />\r\nشكل من الأشكال بسمعة الجامعة ومنسوبيها أو يعرضهم للمساءلة القانونية.</p>', '<p><strong>.</strong></p>', 'سياسة النشر والاستخدام', 'Privacy and Policy', 'سياسة النشر والاستخدام', 'Privacy and Policy', 1, 1, 1, NULL, '2023-06-11 03:53:42', '2023-06-14 11:21:09'),
(4, 'سياسة الخصوصية', 'Privacy', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span dir=\"RTL\" lang=\"AR-SA\" style=\"font-family:&quot;Sakkal Majalla&quot;\">تعتبر سياسة وشروط الخصوصية الموضحة أدناه جزءاً من شروط استخدام الموقع الإلكتروني لأوقاف جامعة الأميرة نورة</span><span dir=\"RTL\" lang=\"AR-SA\" style=\"font-family:&quot;Times New Roman&quot;,serif\">​</span><span dir=\"RTL\" lang=\"AR-SA\" style=\"font-family:&quot;Sakkal Majalla&quot;\">&nbsp;بنت عبد الرحمن وتكون قوانين المملكة العربية السعودية وحدها هي القوانين واجبة التطبيق في كل ما يتعلق بالنزاعات التي قد تنشأ من جراء استخدام هذا الموقع الإلكتروني، كما تختص محاكم المملكة العربية السعودية حصرياً بالنظر في تلك النزاعات والبت فيها</span></span></span></span></p>', '<p><strong>.</strong></p>', 'سياسة الخصوصية', 'Privacy', 'سياسة الخصوصية', 'Privacy', 1, 1, 1, NULL, '2023-06-11 03:53:42', '2023-06-14 11:31:25'),
(5, 'نشأة أوقــــــاف', '...', '<ul>\r\n	<li style=\"list-style-type:none\">\r\n	<ul>\r\n		<li style=\"list-style-type:none\">\r\n		<ul style=\"list-style-type:square\">\r\n			<li dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14pt\"><span style=\"font-family:&quot;Sakkal Majalla&quot;\">تولدت من مؤسستين وقفيتين، ولها ثلاث شركات فرعية، ودخلت كشريك مؤسس في ثلاثة شركات مستقلة.</span></span></span></span></li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<p><strong>...</strong></p>', 'نشأة أوقــــــاف', '....', 'نشأة أوقــــــاف', '.....', 1, 2, 1, '1686727560537436.png', '2023-06-11 03:53:42', '2023-06-14 11:27:03'),
(6, 'دور أوقاف الجامعة', 'The role of university endowments', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">تسعى شركة الأوقاف إلى توفير</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">منظومة وقفية رائدة تسهم بفاعلية في تحقيق تنوع واستدامة مالية من خلال إدارة</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">متميزة ومؤهلة وحوكمة احترافية تساهم في تعزيز الأعمال والاستثمار كخيار استراتيجي لتسريع تنفيذ المشاريع وتحسين</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">الجودة وتعزيز الموارد المالية لجامعة الأميرة نورة بنت عبد الرحمن لتشارك بفاعلية</span> <span style=\"font-family:&quot;Arial&quot;,sans-serif\">في دعم قضايا التنمية المجتمعية داخل الجامعة وخارجها تماشيًا مع رؤية المملكة ٢٠٣٠م.</span></span></span></p>', '<p><strong>.</strong></p>', 'دور أوقاف الجامعة', 'The role of university endowments', 'دور أوقاف الجامعة', 'The role of university endowments', 1, 2, 2, '1686468319872291.png', '2023-06-11 03:53:42', '2023-06-14 11:27:07'),
(7, 'اثر الأوقاف على الجامعة', 'The impact of endowments on the university', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">تعمل الشركة كذراع استثماري لأوقاف جامعة الأميرة نورة بنت عبدالرحمن في مجالات الاقتصاد المعرفي من خلال مشاريع استثمارية و شراكات استراتيجية.</span></span></span></p>', '<p><strong>.</strong></p>', 'اثر الأوقاف على الجامعة', 'The impact of endowments on the university', 'اثر الأوقاف على الجامعة', 'The impact of endowments on the university', 1, 2, 1, NULL, '2023-06-11 03:53:42', '2023-06-14 11:26:27'),
(8, 'الأمانة العامة للجامعة (كلمة الأمين العام)', 'General Secretariat of the University (Speech of the Secretary General)', '<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">تتويجاً لرؤية&nbsp;الجامعة وتحقيقاً لأهدافها الاستراتيجية والتي من أهمها تنويع مصادر التمويل لتحقيق الاكتفاء المالي واستدامته عبر إنشاء الوقف التعليمي أحد الأدوات المهمة الداعمة لمقدرات الجامعة المالية والمرتبطة بثقافة المجتمع وتاريخه والمنطلق من مفاهيم الشريعة الإسلامية التي تشجع على التوسع في الأوقاف وتنميتها، وتعزيزاً للخصخصة الخيار الاستراتيجي لتسريع تنفيذ المشاريع وتحسين الجودة وتعزيز الموارد المالية للمؤسسات التعليمية؛ و التوجه المجتمعي نحو التوسع في القطاع الثالث ودعمه بعد القطاعيين الحكومي والخاص.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">وقد بدأت أوقاف الجامعات في المملكة بداية محدودة في عدد من الجامعات مثل جامعة الملك عبد العزيز وجامعة الملك سعود وجامعة الملك فهد للبترول المعادن، ثم توسعت الجامعات في إنشاء الوقف العلمي ونشأت مبادرة تأسيس المجلس التنسيقي لأوقاف الجامعات لتبادل الخبرات وتوحيد الجهود.</span></span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">وتبنت وزارة التعليم رؤية تعزيز الوقف وتنميتها في مؤسسات التعليم وبالتعاون مع الهيئات الخيرية ورجال الأعمال، وتم حسم موضوع مرجعية أوقاف الجامعات على المستوى التنظيمي بحيث تتبع إداريا وماليا للجامعات.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">ومن هنا ولد وقف جامعة الأميرة نورة بنت عبد الرحمن ككيان متكامل يقوم على فكر مؤسسي احترافي بكافة آلياته وتطبيقاته في جميع جوانب الوقف الإدارية والتنظيمية والاستثمارية والتنفيذية لتسهم في سرعة ومرونة اتخاذ القرار لخدمة متطلبات العمل الوقفي، ولتواكب التطورات الاقتصادية والاجتماعية المتلاحقة وتسهم في إنجاح الجامعة بتوفير كل متطلباتها حالاً ومستقبلاً بإذن الله تعالى.&nbsp;</span></span><span dir=\"LTR\" style=\"font-size:12pt\">​</span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">تتويجاً لرؤية&nbsp;الجامعة وتحقيقاً لأهدافها الاستراتيجية والتي من أهمها تنويع مصادر التمويل لتحقيق الاكتفاء المالي واستدامته عبر إنشاء الوقف التعليمي أحد الأدوات المهمة الداعمة لمقدرات الجامعة المالية والمرتبطة بثقافة المجتمع وتاريخه والمنطلق من مفاهيم الشريعة الإسلامية التي تشجع على التوسع في الأوقاف وتنميتها، وتعزيزاً للخصخصة الخيار الاستراتيجي لتسريع تنفيذ المشاريع وتحسين الجودة وتعزيز الموارد المالية للمؤسسات التعليمية؛ و التوجه المجتمعي نحو التوسع في القطاع الثالث ودعمه بعد القطاعيين الحكومي والخاص.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">وقد بدأت أوقاف الجامعات في المملكة بداية محدودة في عدد من الجامعات مثل جامعة الملك عبد العزيز وجامعة الملك سعود وجامعة الملك فهد للبترول المعادن، ثم توسعت الجامعات في إنشاء الوقف العلمي ونشأت مبادرة تأسيس المجلس التنسيقي لأوقاف الجامعات لتبادل الخبرات وتوحيد الجهود.</span></span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">وتبنت وزارة التعليم رؤية تعزيز الوقف وتنميتها في مؤسسات التعليم وبالتعاون مع الهيئات الخيرية ورجال الأعمال، وتم حسم موضوع مرجعية أوقاف الجامعات على المستوى التنظيمي بحيث تتبع إداريا وماليا للجامعات.&nbsp;</span></span></span></span></span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:12pt\"><span style=\"font-family:Arial,sans-serif\">ومن هنا ولد وقف جامعة الأميرة نورة بنت عبد الرحمن ككيان متكامل يقوم على فكر مؤسسي احترافي بكافة آلياته وتطبيقاته في جميع جوانب الوقف الإدارية والتنظيمية والاستثمارية والتنفيذية لتسهم في سرعة ومرونة اتخاذ القرار لخدمة متطلبات العمل الوقفي، ولتواكب التطورات الاقتصادية والاجتماعية المتلاحقة وتسهم في إنجاح الجامعة بتوفير كل متطلباتها حالاً ومستقبلاً بإذن الله تعالى.&nbsp;</span></span><span dir=\"LTR\" style=\"font-size:12pt\">​</span></span></span></span></p>', '<p><strong>.</strong></p>', 'الأمانة العامة للجامعة (كلمة الأمين العام)', 'General Secretariat of the University (Speech of the Secretary General)', 'الأمانة العامة للجامعة (كلمة الأمين العام)', 'General Secretariat of the University (Speech of the Secretary General)', 1, 2, 2, '1686467589445527.png', '2023-06-11 03:53:42', '2023-06-14 11:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `group_id`, `role_id`, `created_at`, `updated_at`) VALUES
(97, 3, 3, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(98, 3, 4, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(99, 3, 5, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(100, 3, 8, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(101, 3, 10, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(102, 3, 13, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(103, 3, 14, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(104, 3, 27, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(105, 3, 28, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(106, 3, 35, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(107, 3, 36, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(108, 3, 41, '2021-01-09 14:03:08', '2021-01-09 14:03:08'),
(357, 2, 8, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(358, 2, 10, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(359, 2, 12, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(360, 2, 14, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(361, 2, 26, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(362, 2, 34, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(363, 2, 35, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(364, 2, 36, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(365, 2, 37, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(366, 2, 38, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(367, 2, 39, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(368, 2, 40, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(369, 2, 41, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(370, 2, 42, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(371, 2, 43, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(372, 2, 44, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(373, 2, 45, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(374, 2, 46, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(375, 2, 47, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(376, 2, 48, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(377, 2, 58, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(378, 2, 59, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(379, 2, 60, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(380, 2, 61, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(381, 2, 62, '2021-02-10 20:45:45', '2021-02-10 20:45:45'),
(2040, 1, 1, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2041, 1, 2, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2042, 1, 3, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2043, 1, 4, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2044, 1, 5, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2045, 1, 6, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2046, 1, 7, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2047, 1, 8, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2048, 1, 10, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2049, 1, 12, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2050, 1, 13, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2051, 1, 14, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2052, 1, 26, '2023-06-06 04:26:57', '2023-06-06 04:26:57'),
(2053, 1, 27, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2054, 1, 28, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2055, 1, 29, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2056, 1, 30, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2057, 1, 31, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2058, 1, 32, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2059, 1, 33, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2060, 1, 90, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2061, 1, 92, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2062, 1, 102, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2063, 1, 103, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2064, 1, 104, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2065, 1, 105, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2066, 1, 106, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2067, 1, 155, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2068, 1, 156, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2069, 1, 157, '2023-06-06 04:26:58', '2023-06-06 04:26:58'),
(2070, 1, 158, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2071, 1, 159, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2072, 1, 175, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2073, 1, 176, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2074, 1, 177, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2075, 1, 178, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2076, 1, 179, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2077, 1, 180, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2078, 1, 181, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2079, 1, 182, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2080, 1, 183, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2081, 1, 184, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2082, 1, 185, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2083, 1, 186, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2084, 1, 187, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2085, 1, 188, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2086, 1, 189, '2023-06-06 04:26:59', '2023-06-06 04:26:59'),
(2087, 4, 1, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2088, 4, 2, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2089, 4, 3, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2090, 4, 4, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2091, 4, 5, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2092, 4, 6, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2093, 4, 7, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2094, 4, 8, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2095, 4, 10, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2096, 4, 12, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2097, 4, 13, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2098, 4, 14, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2099, 4, 26, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2100, 4, 27, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2101, 4, 90, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2102, 4, 92, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2103, 4, 102, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2104, 4, 103, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2105, 4, 104, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2106, 4, 105, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2107, 4, 106, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2108, 4, 155, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2109, 4, 156, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2110, 4, 157, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2111, 4, 158, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2112, 4, 159, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2113, 4, 175, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2114, 4, 176, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2115, 4, 177, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2116, 4, 178, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2117, 4, 179, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2118, 4, 180, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2119, 4, 181, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2120, 4, 182, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2121, 4, 183, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2122, 4, 184, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2123, 4, 185, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2124, 4, 186, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2125, 4, 187, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2126, 4, 188, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2127, 4, 189, '2023-06-13 22:18:59', '2023-06-13 22:18:59'),
(2128, 5, 3, '2023-06-14 00:50:18', '2023-06-14 00:50:18'),
(2129, 5, 4, '2023-06-14 00:50:18', '2023-06-14 00:50:18'),
(2130, 5, 8, '2023-06-14 00:50:18', '2023-06-14 00:50:18'),
(2131, 5, 10, '2023-06-14 00:50:18', '2023-06-14 00:50:18'),
(2132, 5, 102, '2023-06-14 00:50:18', '2023-06-14 00:50:18'),
(2133, 5, 103, '2023-06-14 00:50:18', '2023-06-14 00:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'المديرين', 'Admins', '2020-12-29 07:32:18', '2020-12-29 07:32:58'),
(2, 'المحررين', 'Editors', '2020-12-29 07:32:41', '2020-12-29 07:32:41'),
(3, 'مجموعة جديدة', 'New permission group', '2021-01-09 14:02:11', '2021-01-09 14:02:11'),
(4, 'مختبر', 'Testing', '2023-06-13 22:16:10', '2023-06-13 22:16:10'),
(5, 'مجموعه اختبار', 'Test Group', '2023-06-14 00:44:21', '2023-06-14 00:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `permission_models`
--

CREATE TABLE `permission_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_models`
--

INSERT INTO `permission_models` (`id`, `name_ar`, `name_en`, `status`, `created_at`, `updated_at`) VALUES
(37, 'إعدادات الموقع', 'Site Setting', 1, NULL, NULL),
(38, 'الأعضاء', 'Users', 1, NULL, NULL),
(39, 'الصفحات', 'Pages', 1, NULL, NULL),
(40, 'اتصل بنا', 'Contact Us', 1, NULL, NULL),
(41, 'مجموعات الصلاحيات', 'Permissions Group', 1, NULL, NULL),
(48, 'الإشعارات', 'Notifications', 0, NULL, NULL),
(54, 'التنسيقات', 'Layouts', 1, NULL, NULL),
(59, 'الأخبار', 'Blogs', 1, NULL, NULL),
(69, 'أراء العملاء', 'Testom', 0, NULL, NULL),
(70, 'فريق العمل', 'Teamwork', 1, NULL, NULL),
(74, 'الشركات التابعه لأوقاف', 'Companies for Awqaf', 1, NULL, NULL),
(75, 'المشاريع', 'Projects', 1, NULL, NULL),
(76, 'التقارير السنويه', 'Annual Reports', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `date_project` date DEFAULT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name_ar`, `name_en`, `image`, `date_project`, `description_ar`, `description_en`, `content_ar`, `content_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'مشروع رقم 1', 'Project Number 1', '1686046898562691.png', '2023-06-04', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, '2023-06-06 07:21:38', '2023-06-06 07:21:38'),
(2, 'مشروع رقم 2', 'Project Number 2', '1686046898562691.png', '2023-06-04', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', '<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.<br />\r\nإذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.<br />\r\nومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.<br />\r\nهذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, '2023-06-06 07:21:38', '2023-06-06 07:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `project_points`
--

CREATE TABLE `project_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_points`
--

INSERT INTO `project_points` (`id`, `name_ar`, `name_en`, `image`, `description_ar`, `description_en`, `project_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'نقطه مهمه', 'Required Point', NULL, 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 1, 1, '2023-06-06 07:58:43', '2023-06-06 07:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `date_project` date DEFAULT NULL,
  `file` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name_ar`, `name_en`, `image`, `date_project`, `file`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'تقرير 1', 'Report 1', '1686043583784085.png', '2023-06-07', '1686043583332878.pdf', 1, 1, '2023-06-06 06:07:07', '2023-06-06 06:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `per_model_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name_ar`, `name_en`, `per_model_id`, `created_at`, `updated_at`) VALUES
(1, 'إعدادات الموقع', 'Site Setting', 37, NULL, NULL),
(2, 'إعدادات صور الموقع', 'Site Image Setting', 37, NULL, NULL),
(3, 'الأعضاء', 'Users', 38, NULL, NULL),
(4, 'عضو جديد', 'Add User', 38, NULL, NULL),
(5, 'تعديل عضو ', 'Edit User', 38, NULL, NULL),
(6, 'حذف عضو', 'Delete User', 38, NULL, NULL),
(7, 'مشاهده عضو', 'Show User', 38, NULL, NULL),
(8, 'الصفحات', 'Pages', 39, NULL, NULL),
(10, 'صفحة جديده', 'Add Page', 39, NULL, NULL),
(12, 'تعديل صفحة', 'Edit Page', 39, NULL, NULL),
(13, 'حذف صفحة', 'Delete Page', 39, NULL, NULL),
(14, 'مشاهده صفحة', 'Show Page', 39, NULL, NULL),
(26, 'اتصل بنا', 'Contact Us', 40, NULL, NULL),
(27, 'رد إتصل بنا', 'Replay Contact Us', 40, NULL, NULL),
(28, 'مجموعات الصلاحيات', 'Permissions Group', 41, NULL, NULL),
(29, 'مجموعه جديده', 'New Permission Group', 41, NULL, NULL),
(30, 'تعديل مجموعه', 'Edit Permission Group', 41, NULL, NULL),
(31, 'حذف مجموعه', 'Delete Permissions Group', 41, NULL, NULL),
(32, 'مشاهده مجموعه', 'Show Permission Group', 41, NULL, NULL),
(33, 'اضافه صلاحيات للمجموعه', 'Add Permission to the group', 41, NULL, NULL),
(63, 'إرسال الإشعارات', 'Send Notifications', 48, NULL, NULL),
(90, 'التنسيقات', 'Layouts', 54, NULL, NULL),
(92, 'تعديل تنسيق', 'Edit Layouts', 54, NULL, NULL),
(102, 'الأخبار', 'Blogs', 59, NULL, NULL),
(103, 'خبر جديد', 'New Blog', 59, NULL, NULL),
(104, 'تعديل خبر', 'Edit Blog', 59, NULL, NULL),
(105, 'حذف خبر', 'Delete Blog', 59, NULL, NULL),
(106, 'مشاهده خبر', 'Show Blog', 59, NULL, NULL),
(150, 'أراء العملاء', 'Testom', 69, NULL, NULL),
(151, 'رأي جديد', 'New Testom', 69, NULL, NULL),
(152, 'تعديل رأي', 'Edit Testom', 69, NULL, NULL),
(153, 'حذف رأي', 'Delete Testom', 69, NULL, NULL),
(154, 'مشاهده رأي', 'Show Testom', 69, NULL, NULL),
(155, 'فريق العمل', 'Teamwork', 70, NULL, NULL),
(156, 'عضو جديد', 'New Employee', 70, NULL, NULL),
(157, 'تعديل عضو', 'Edit Employee', 70, NULL, NULL),
(158, 'حذف عضو', 'Delete Employee', 70, NULL, NULL),
(159, 'مشاهده عضو', 'Show Employee', 70, NULL, NULL),
(175, 'الشركات التابعه لأوقاف', 'Companies for Awqaf', 74, NULL, NULL),
(176, 'شركه جديده', 'New Company', 74, NULL, NULL),
(177, 'تعديل شركه', 'Edit Company', 74, NULL, NULL),
(178, 'حذف شركه', 'Delete Company', 74, NULL, NULL),
(179, 'مشاهده شركه', 'Show Company', 74, NULL, NULL),
(180, 'المشاريع', 'Projects', 75, NULL, NULL),
(181, 'مشروع جديد', 'New Project', 75, NULL, NULL),
(182, 'تعديل مشروع', 'Edit Project', 75, NULL, NULL),
(183, 'حذف مشروع', 'Delete Project', 75, NULL, NULL),
(184, 'مشاهده مشروع', 'Show Project', 75, NULL, NULL),
(185, 'التقارير السنويه', 'Annual Report ', 76, NULL, NULL),
(186, 'تقرير جديد', 'New Report', 76, NULL, NULL),
(187, 'تعديل تقرير', 'Edit Report', 76, NULL, NULL),
(188, 'حذف تقرير', 'Delete Report', 76, NULL, NULL),
(189, 'مشاهده تقرير', 'Show Report', 76, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name_ar` varchar(191) NOT NULL,
  `site_name_en` varchar(191) NOT NULL,
  `site_copy_ar` varchar(191) DEFAULT NULL,
  `site_copy_en` varchar(191) DEFAULT NULL,
  `site_description_ar` longtext DEFAULT NULL,
  `site_description_en` longtext DEFAULT NULL,
  `site_keyword_ar` longtext DEFAULT NULL,
  `site_keyword_en` longtext DEFAULT NULL,
  `site_email` varchar(191) DEFAULT NULL,
  `site_phone` varchar(191) DEFAULT NULL,
  `site_phone2` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `site_address_ar` varchar(191) DEFAULT NULL,
  `site_address_en` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `site_logo` varchar(191) DEFAULT NULL,
  `site_icon` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lat` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lng` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `site_map` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `site_logo_footer` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name_ar`, `site_name_en`, `site_copy_ar`, `site_copy_en`, `site_description_ar`, `site_description_en`, `site_keyword_ar`, `site_keyword_en`, `site_email`, `site_phone`, `site_phone2`, `site_address_ar`, `site_address_en`, `facebook`, `linkedin`, `instagram`, `youtube`, `site_logo`, `site_icon`, `lat`, `lng`, `site_map`, `site_logo_footer`, `created_at`, `updated_at`) VALUES
(1, 'اوقاف', 'Awqaf', 'جميع الحقوق محفوظة اوقاف', 'Copyright © 2023 Awqaf. All rights reserved.', 'شركه اوقاف', 'Awqaf', 'شركه اوقاف', 'Awqaf', 'info@pnuendowment.com', '0560839397', '0560839397', 'الرياض .. المملكة العربية السعودية', 'Riyadh', 'https://www.facebook.com', 'https://linkedin.com', 'https://www.instagram.com/', 'https://www.youtube.com/', '1685949255944171.png', '1685949255779450.png', '24.7135517', '46.6752957', NULL, '1685949255508758.png', NULL, '2023-06-14 11:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) NOT NULL,
  `instance` varchar(191) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `link` varchar(191) DEFAULT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name_ar`, `name_en`, `image`, `link`, `content_ar`, `content_en`, `created_at`, `updated_at`) VALUES
(1, 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', '1646049082213461.png', '#', 'وايت أرو لتصميم وبرمجه المواقع', 'White Arrow for Website Design', '2021-08-05 09:24:21', '2022-02-28 09:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '2022-02-28 09:05:44', '2022-02-28 09:05:44'),
(2, 'xzcmido@gmail.com', '2022-02-28 09:06:59', '2022-02-28 09:06:59'),
(3, 'sitemap@c.com', '2022-02-28 09:07:58', '2022-02-28 09:07:58'),
(4, 'soo@soo.com', '2022-02-28 09:16:13', '2022-02-28 09:16:13'),
(5, 'admin@sofood.app', '2022-02-28 09:17:23', '2022-02-28 09:17:23'),
(6, 'so0o@soo.com', '2022-02-28 09:18:14', '2022-02-28 09:18:14'),
(7, 'so00o@soo.com', '2022-02-28 09:20:04', '2022-02-28 09:20:04'),
(8, 'soosss@soo.com', '2022-02-28 09:20:42', '2022-02-28 09:20:42'),
(9, 'ahmedtaherinfsssso0@gmail.com', '2022-02-28 09:20:55', '2022-02-28 09:20:55'),
(10, 'sdddoo@soo.com', '2022-03-02 06:50:23', '2022-03-02 06:50:23'),
(11, 'aaa@dd.dd', '2022-08-15 07:55:20', '2022-08-15 07:55:20'),
(12, 'dsdsfdsds@dsdsdsf.dsffd', '2023-06-11 06:33:26', '2023-06-11 06:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `teamworks`
--

CREATE TABLE `teamworks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `job` varchar(191) NOT NULL,
  `image` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content_ar` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content_en` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamworks`
--

INSERT INTO `teamworks` (`id`, `name`, `job`, `image`, `content_ar`, `content_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ا. زياد بن عبداللطيف البراك', 'عضو مجلس الادارة', '1686727296775021.png', NULL, NULL, 1, '2022-03-01 06:48:57', '2023-06-14 11:21:36'),
(2, 'ا. محمد بن فرحان النادر', 'عضو مجلس الادارة', '1686727226853881.png', NULL, NULL, 1, '2022-03-01 06:49:10', '2023-06-14 11:20:26'),
(3, 'د. محمد بن عبدالله المجيدل', 'نائب رئيس مجلس الاداره', '1686727250641246.png', NULL, NULL, 1, '2022-03-01 06:49:21', '2023-06-14 11:20:50'),
(4, 'د. رشيد بن مسفر الزهراني', 'رئيس مجلس الاداره', '1686727108906731.png', NULL, NULL, 1, '2022-03-01 06:49:33', '2023-06-14 11:18:28'),
(5, 'د. عبدالرحمن بن محمد باشيخ', 'عضو مجلس الادارة', '1686727335388303.png', NULL, NULL, 1, '2023-06-14 11:22:15', '2023-06-14 11:22:15'),
(6, 'د. هيفاء بنت سليمان القاضي', 'عضو مجلس الادارة', '1686727390612547.png', NULL, NULL, 1, '2023-06-14 11:23:10', '2023-06-14 11:23:10'),
(7, 'د. نورة بنت عبدالعزيز المبارك', 'عضو مجلس الادارة', '1686727417372240.png', NULL, NULL, 1, '2023-06-14 11:23:37', '2023-06-14 11:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `testoms`
--

CREATE TABLE `testoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `job` varchar(191) NOT NULL,
  `comment_ar` text NOT NULL,
  `comment_en` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testoms`
--

INSERT INTO `testoms` (`id`, `name`, `job`, `comment_ar`, `comment_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Taher', 'PHP Developer', 'منصه ممتازه جدا لقد قمت بإستخدام المنصه وكانت أسهل مما توقعت وقمت بطلب تمويل من خلالها ووصلني في أسرع وقت', 'A very excellent platform. I used the platform and it was easier than I expected. I requested financing through it and it reached me as soon as possible.', 1, '2021-02-23 17:01:28', '2022-03-01 06:25:19'),
(2, 'Ahmed Taher', 'PHP Developer', 'منصه ممتازه جدا لقد قمت بإستخدام المنصه وكانت أسهل مما توقعت وقمت بطلب تمويل من خلالها ووصلني في أسرع وقت', 'A very excellent platform. I used the platform and it was easier than I expected. I requested financing through it and it reached me as soon as possible.', 1, '2021-02-23 17:01:28', '2022-03-01 06:25:21'),
(3, 'Ahmed Taher', 'PHP Developer', 'منصه ممتازه جدا لقد قمت بإستخدام المنصه وكانت أسهل مما توقعت وقمت بطلب تمويل من خلالها ووصلني في أسرع وقت', 'A very excellent platform. I used the platform and it was easier than I expected. I requested financing through it and it reached me as soon as possible.', 1, '2021-02-23 17:01:28', '2022-03-01 06:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 1,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `image` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `deleted_at` int(11) UNSIGNED DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `admin`, `group_id`, `status`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'مدخل بيانات الموقع', 'tester@awqaf.com', '1234567893', '$2y$10$n0QKztA6AsppE87hie5spenoFdL9Vm5VJVhuOeND4RZKPYUkFxJmi', 3, 1, 1, '1619615690470106.png', 0, 'OQwWyWltPK57boRCP81xb1pZ0TNOipNioqB55BjMwCpn1H5f3ptHF6OdsRAH', NULL, '2023-06-14 11:49:46'),
(2, 'مدخل بيانات', 'admin@awqaf.com', '1251251251', '$2y$10$1gJC4kdG7fMOAfiBgDtKcuN7LQOOzuvOE9qZGULVwwQSZ4sqC/0HG', 3, 1, 1, '168668047643578.jpg', 0, NULL, '2023-06-13 22:21:16', '2023-06-13 22:32:27'),
(3, 'مدير جديد', 'mo1@gmail.com', '1235456985', '$2y$10$jffw/SBZjUJ40Lll2yyc/eSOmlI2lLAfkDamibr/SO4/52/qQHCHW', 3, 5, 1, NULL, 0, NULL, '2023-06-14 00:52:26', '2023-06-14 00:52:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browser_tokens`
--
ALTER TABLE `browser_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `browser_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gmaps_geocache`
--
ALTER TABLE `gmaps_geocache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `links_slug_unique` (`slug`);

--
-- Indexes for table `link_views`
--
ALTER TABLE `link_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_sender_id_foreign` (`sender_id`),
  ADD KEY `notifications_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id_relation` (`role_id`),
  ADD KEY `group_id_relation` (`group_id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_models`
--
ALTER TABLE `permission_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_points`
--
ALTER TABLE `project_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_points_project_id_foreign` (`project_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `per_model_id_relation` (`per_model_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamworks`
--
ALTER TABLE `teamworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testoms`
--
ALTER TABLE `testoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `group_id_key` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `browser_tokens`
--
ALTER TABLE `browser_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gmaps_geocache`
--
ALTER TABLE `gmaps_geocache`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_views`
--
ALTER TABLE `link_views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3193;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2134;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permission_models`
--
ALTER TABLE `permission_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_points`
--
ALTER TABLE `project_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teamworks`
--
ALTER TABLE `teamworks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testoms`
--
ALTER TABLE `testoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `browser_tokens`
--
ALTER TABLE `browser_tokens`
  ADD CONSTRAINT `browser_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_points`
--
ALTER TABLE `project_points`
  ADD CONSTRAINT `project_points_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `per_model_id` FOREIGN KEY (`per_model_id`) REFERENCES `permission_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `group_id_key` FOREIGN KEY (`group_id`) REFERENCES `permission_groups` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
