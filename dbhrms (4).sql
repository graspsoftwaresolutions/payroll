-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 06:45 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_status` tinyint(4) DEFAULT NULL,
  `leave_category_id` int(11) DEFAULT NULL,
  `check_in` time DEFAULT NULL,
  `check_out` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `created_by`, `user_id`, `attendance_date`, `attendance_status`, `leave_category_id`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2019-08-27', 1, 1, '10:11:00', NULL, '2019-08-31 23:32:02', '2019-08-31 23:32:02'),
(2, 1, 4, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:02', '2019-08-31 23:32:02'),
(3, 1, 5, '2019-08-27', 1, 0, '10:11:00', NULL, '2019-08-31 23:32:02', '2019-08-31 23:32:02'),
(4, 1, 3, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:03', '2019-08-31 23:32:03'),
(5, 1, 11, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:03', '2019-08-31 23:32:03'),
(6, 1, 2, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:03', '2019-08-31 23:32:03'),
(7, 1, 13, '2019-09-07', 1, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:26:26'),
(8, 1, 6, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:27:44'),
(9, 1, 4, '2019-09-07', 0, 1, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(10, 1, 5, '2019-09-07', 0, 1, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(11, 1, 3, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(12, 1, 11, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(13, 1, 2, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(14, 1, 13, '2019-09-08', 1, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(15, 1, 6, '2019-09-08', 1, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(16, 1, 4, '2019-09-08', 1, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(17, 1, 5, '2019-09-08', 0, 1, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(18, 1, 3, '2019-09-08', 0, 1, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(19, 1, 11, '2019-09-08', 0, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(20, 1, 2, '2019-09-08', 0, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(21, 1, 13, '2019-09-01', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:50'),
(22, 1, 6, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(23, 1, 4, '2019-09-01', 1, 1, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(24, 1, 5, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(25, 1, 3, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(26, 1, 11, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(27, 1, 2, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(28, 1, 13, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(29, 1, 6, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(30, 1, 4, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(31, 1, 5, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(32, 1, 3, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(33, 1, 11, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(34, 1, 2, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(35, 1, 13, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(36, 1, 6, '2019-09-02', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(37, 1, 4, '2019-09-02', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(38, 1, 5, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(39, 1, 3, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(40, 1, 11, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(41, 1, 2, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(42, 1, 13, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(43, 1, 6, '2019-09-04', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(44, 1, 4, '2019-09-04', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(45, 1, 5, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(46, 1, 3, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(47, 1, 11, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(48, 1, 2, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(49, 1, 13, '2019-09-09', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(50, 1, 6, '2019-09-09', 0, 0, '11:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(51, 1, 4, '2019-09-09', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(52, 1, 5, '2019-09-09', 1, 1, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(53, 1, 3, '2019-09-09', 0, 1, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(54, 1, 11, '2019-09-09', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(55, 1, 2, '2019-09-09', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(56, 1, 13, '2019-09-10', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(57, 1, 6, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(58, 1, 4, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(59, 1, 5, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(60, 1, 3, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(61, 1, 11, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(62, 1, 2, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `award_categories`
--

CREATE TABLE `award_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `award_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_categories`
--

INSERT INTO `award_categories` (`id`, `created_by`, `award_title`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Best Seller', 1, 0, '2019-08-31 23:30:17', '2019-09-25 03:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `backup_staffs`
--

CREATE TABLE `backup_staffs` (
  `bs_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `backup_staff_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bonus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus_month` date NOT NULL,
  `bonus_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`id`, `created_by`, `user_id`, `bonus_name`, `bonus_month`, `bonus_amount`, `bonus_description`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'Eid', '2019-07-01', '7000', '<p>dfgvfdgfd<br></p>', 0, '2019-09-03 12:42:34', '2019-09-03 12:42:34'),
(2, 1, 11, 'Working Perf.', '2019-09-01', '4000', '<p>vnbvnvbn<br></p>', 0, '2019-09-03 12:53:31', '2019-09-03 12:53:31'),
(3, 1, 11, 'DDR', '2019-10-01', '5000', 'bnbbvnbvn', 0, '2019-09-03 12:54:36', '2019-09-25 02:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`id`, `cat_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', 1, '2020-02-27 06:12:12', '2020-02-27 06:34:09'),
(2, 'Once', 1, '2020-02-27 06:33:25', '2020-03-04 07:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `client_types`
--

CREATE TABLE `client_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `client_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_type_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_types`
--

INSERT INTO `client_types` (`id`, `created_by`, `client_type`, `client_type_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'sed', 'Repellendus voluptatem distinctio atque voluptas veritatis. Et amet non sapiente enim voluptates ut reprehenderit. Id ipsum ut nam magnam quaerat sequi praesentium. Occaecati dolore sapiente consequatur esse. Et tempore neque ipsam perferendis facere et.', 1, 0, '2018-04-12 06:25:15', '2019-09-24 10:14:19'),
(2, 1, 'repellat', 'Voluptas vero quasi quam et sed. Maxime voluptatibus molestias non in veniam magni magnam. Quidem temporibus molestiae ipsam sint voluptatem. In architecto numquam quis aut ut.', 1, 0, '2018-04-12 06:25:15', '2019-09-25 02:25:36'),
(3, 1, 'earum', 'Qui similique ea quisquam. Omnis qui molestiae totam ex omnis doloremque et. Ea doloribus ipsam corrupti accusantium id voluptas harum.', 1, 0, '2018-04-12 06:25:15', '2019-09-24 10:14:36'),
(4, 1, 'qui', 'Autem autem dolorem quis sed iure. Exercitationem magnam illum eos ullam fugit. Unde quo tenetur omnis voluptatem qui minima.', 1, 0, '2018-04-12 06:25:15', '2019-09-25 02:27:38'),
(5, 1, 'corporis', 'Minima voluptatem iusto unde aliquid in. Natus enim ad aut cum reprehenderit ex fugiat. Architecto est in cumque quia veniam dignissimos.', 1, 0, '2018-04-12 06:25:15', '2018-04-12 06:25:15'),
(6, 1, 'est', 'Accusamus quae quisquam non doloribus nemo quisquam sunt. Nostrum a non perferendis consequuntur. Commodi et non aut earum autem molestiae veniam.', 1, 0, '2018-04-12 06:25:15', '2019-09-24 10:14:30'),
(7, 1, 'quia', 'Dolorem porro est dicta eveniet. Odit totam sunt et. Error non possimus non accusantium harum. Molestiae est est consequatur eum alias nesciunt.', 1, 0, '2018-04-12 06:25:15', '2019-09-24 10:14:25'),
(8, 1, 'sint', 'Aliquam aliquid totam quaerat illum nemo voluptatem. Soluta odit eligendi omnis beatae aliquam eum et hic. Ut debitis pariatur est quidem. Vitae nobis veritatis cum. Vel sit qui sit quia.', 0, 1, '2018-04-12 06:25:15', '2019-08-31 11:08:36'),
(9, 1, 'ut', 'Excepturi et excepturi quia sunt hic. Impedit incidunt ratione est velit.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:13:50'),
(10, 1, 'porro', 'Ad quia qui id nobis qui consequatur. Eos et enim itaque nihil quasi ipsa aut. Est veniam inventore in fugit facilis asperiores iusto. Non nihil aperiam nemo nostrum eos perferendis porro. Quas iusto qui cumque tempore.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(11, 1, 'Full tyime', '<p>fdgfdgffgd<br></p>', 1, 0, '2019-08-31 11:04:28', '2019-08-31 11:04:28'),
(12, 1, 'Karim Bond', '<p>\r\n<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. \r\n\r\n<br></p>', 1, 0, '2019-09-02 09:58:13', '2019-09-02 09:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deduction_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_month` date NOT NULL,
  `deduction_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `created_by`, `user_id`, `deduction_name`, `deduction_month`, `deduction_amount`, `deduction_description`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 'Absence', '2019-09-01', '34', 'hjkjjjhk', 0, '2019-09-24 11:02:50', '2019-09-25 02:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `created_by`, `department`, `department_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lehner PLC', 'Aliquam earum eligendi soluta inventore sit nulla nisi. Tempora ut necessitatibus eos laborum rerum commodi. Blanditiis architecto rerum libero et nulla cupiditate. Cum doloremque laborum ab sunt et. Quam eligendi amet eius tempore nesciunt commodi. Enim distinctio autem et expedita non qui error est. Magni similique id quod. Exercitationem dolorum corrupti quos natus similique ut est rerum. Velit officia deleniti quaerat rerum vero veritatis. Officia magni assumenda aut nisi quae consectetur.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:22:22'),
(2, 1, 'Lehner-Walsh', 'Nemo in beatae alias voluptatem iste exercitationem et. Omnis temporibus aut et. Saepe iusto est pariatur sequi ea aut est recusandae. Temporibus cupiditate sapiente quia temporibus. Modi consequatur id sed quod ut earum repudiandae nam. Enim omnis sed quod sint nihil voluptatibus quia. Excepturi id ipsum qui quos enim. Reiciendis eos consequatur consequatur quia eius quidem. Doloremque itaque et repudiandae delectus natus est maxime.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(3, 1, 'Senger-Wilkinson', 'Dolores dignissimos nam quo cupiditate veritatis. Expedita est vel debitis tenetur. Quas eius expedita amet et aut iusto quis esse. Rerum labore numquam cum. Eos delectus voluptatem fugit ad sed. Rem ipsam ut sed quidem error et. Repellat odio ad accusamus non. Ut aliquam quam voluptas sed. Soluta ab molestiae dolorem architecto voluptatum. Eaque soluta similique assumenda. Voluptas quaerat autem dolores. Unde molestiae vero quisquam recusandae exercitationem.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(4, 1, 'Bahringer-Sauer', 'Aliquid sint sit explicabo laborum facilis. Nam numquam ut quos. Ut qui perspiciatis sit dolore. Et accusamus perferendis harum architecto sunt minima. Voluptatem voluptatem et explicabo quia aut consequatur. Ut quia vero molestiae earum quis odit. Et delectus quis excepturi temporibus dolor. Consequatur assumenda eligendi ex delectus debitis. Ea consequatur a vel sunt pariatur et sit. Est veniam aut quo ratione amet.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:22:27'),
(5, 1, 'Klein LLC', 'Omnis magnam facere earum. Corrupti tenetur beatae quod ut placeat. Qui et ut et aut vero. Nisi ea deserunt alias excepturi animi illum. Animi nulla fugiat itaque reprehenderit qui. Deleniti nulla et dolor id est. Facilis a non nostrum. Aperiam voluptatem delectus est ut est. Porro quia illo quia eos. Quas asperiores qui rerum temporibus tempore voluptatem. Pariatur repudiandae magnam voluptatibus. Unde incidunt ut vitae voluptas ipsum.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(6, 1, 'Marketing', '<p>sdfsdfdsfds<br></p>', 1, 0, '2019-08-31 11:04:47', '2019-08-31 11:04:47'),
(7, 1, 'Sales', 'fdfgdfgdff', 1, 0, '2019-08-31 11:09:23', '2019-09-25 03:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `created_by`, `department_id`, `designation`, `designation_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Hackett-Treutel', 'Fugiat nostrum itaque sapiente velit assumenda in aperiam eum. Consequatur temporibus sunt necessitatibus ut. Soluta eum veritatis magnam aut. Voluptatem laudantium est voluptates eveniet et. Velit dolore unde velit sunt neque ea perferendis recusandae. Ea quasi adipisci dolorum sit similique magni. Debitis eius voluptas doloribus repellendus. Sint sit corrupti ipsum molestiae architecto ut maiores nulla. Sint repellat est et et asperiores corrupti.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 09:59:43'),
(2, 1, 4, 'Satterfield-Cremin', 'Ea rem deleniti nostrum voluptatem. Et ducimus optio voluptatem ut consequatur. Dolorum sint eius asperiores non nihil. Molestias ex perspiciatis praesentium non. Et sint magni qui sed nostrum. Enim voluptatibus laborum eveniet debitis numquam consequatur. Praesentium accusantium eveniet ut omnis earum facilis dolores. Ipsum iusto quod ratione eos in aspernatur.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:15'),
(3, 1, 3, 'Kuvalis-Mitchell', 'Tempore quod molestias sed velit vel quas. Qui quisquam fuga in ducimus error dolor. Qui ut officiis occaecati voluptates dolore. Sit est consequatur provident. Eos tempore adipisci at nisi voluptatem commodi. Deserunt neque officiis harum ipsa nostrum. Ut vel non exercitationem cum laboriosam. Dolorum enim est maxime quia adipisci. Praesentium quis aut harum. Ea error et dolorem id sunt. Aut laborum quibusdam eum quis. Asperiores quia aut eum quod quaerat architecto harum.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:03'),
(4, 1, 5, 'Kirlin, Reinger and Haag', 'Doloremque consequatur accusantium molestiae dolores odio. Eos vero rem architecto et ea veniam provident. Porro qui illo ad assumenda. Illum at deserunt quod qui non consequatur veritatis. Tempore deserunt architecto tempore molestiae provident et odio. Consectetur quia similique ea non nostrum et. Distinctio iste quam porro dolorem ut pariatur aut.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:23:52'),
(5, 1, 3, 'Towne, Jerde and Littel', 'Consequatur eligendi modi consequatur eligendi. Perferendis laborum voluptas ipsum distinctio numquam. Non illo hic alias repudiandae at atque itaque in. Et ipsam nulla et voluptatem illo illo aut sequi. Maxime cumque eos tenetur est. Qui dolores fugit nihil modi inventore. Adipisci sint at cumque consequatur ullam. Optio est qui laudantium fugiat architecto minus. Earum eveniet nam ut sunt enim. Facere reprehenderit aut doloribus. Qui labore qui velit voluptatem dolores distinctio harum.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:25'),
(6, 1, 3, 'Kovacek-Barrows', 'Aperiam earum eius quia deleniti voluptatem. Quam omnis dolor asperiores rem quasi reiciendis minima. Cupiditate impedit perferendis quis quia voluptatum quasi necessitatibus. Omnis et quo porro. Sit possimus voluptatem natus officia totam in. Quam voluptas quis ipsa et. Saepe quo et aliquid unde ratione et est. Quia libero rerum blanditiis voluptatem qui ducimus. Consectetur eum ut nisi tempore consequatur et expedita.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:23:58'),
(7, 1, 2, 'Hudson Inc', 'Repellat quasi soluta fugiat nobis. Aut aliquam qui atque optio autem ex. Voluptates quis atque culpa molestias temporibus. Vitae commodi atque nulla sed perferendis quam ut. Adipisci ut placeat aperiam ratione itaque. Nulla velit omnis accusamus delectus voluptatibus. Blanditiis vel aut aperiam incidunt. Ducimus nulla illo dolorem quia commodi. Assumenda illo dolorem voluptatem. Iste nihil quia voluptatem vero sunt veniam. Dolorem suscipit repellat veniam dicta.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(8, 1, 4, 'Schmitt Group', 'Ipsam qui est numquam. Magnam qui in at at eum laudantium. Eum possimus et mollitia explicabo quibusdam excepturi expedita. Iusto nihil vero aspernatur esse ab alias occaecati aut. Ut id voluptatibus sunt ut at cupiditate. Vero quo quia at cumque consectetur. Exercitationem pariatur est debitis quam exercitationem pariatur qui. Magnam reiciendis magnam voluptatum aspernatur. Fugiat omnis ipsum veniam qui itaque modi qui. Fugiat soluta autem qui voluptatum est.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:20'),
(9, 1, 3, 'O\'Conner-Hilll', 'Accusamus et tempora soluta quia saepe. Praesentium commodi praesentium voluptas eum aut eos. Eveniet qui eius rerum hic pariatur. Sint optio quae eveniet vel corrupti dolores. Qui asperiores non porro ullam odio. Quae libero quam blanditiis culpa odio consequatur sit. Rerum voluptates sit repellendus quas quis cum atque. Velit sit eius deleniti enim asperiores minima. Molestias consequatur soluta eius et ducimus harum et.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(10, 1, 2, 'Predovic Group', 'Quaerat voluptas consequuntur esse quibusdam. Repellendus fugit sequi aperiam. Ut hic qui veniam explicabo. Magnam omnis ullam sit quia. Aut ut omnis quisquam repudiandae aut. Voluptatem dolorem praesentium vel et aperiam qui. Nihil non ut aut dignissimos ex error. Similique facere asperiores et ullam in possimus at. Dolor illo perspiciatis molestias repudiandae voluptas pariatur. Laboriosam autem vel commodi ipsum tempora non harum expedita.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:09'),
(11, 1, 5, 'Masum', '<p>dsfdsfdsf<br></p>', 1, 0, '2019-08-31 11:02:32', '2019-08-31 11:02:32'),
(12, 1, 6, 'Sr. Executive', '<p>dfgdgdg<br></p>', 1, 0, '2019-08-31 11:05:14', '2019-08-31 11:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_add_salary`
--

CREATE TABLE `employee_add_salary` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `basic_salary` double NOT NULL,
  `additional_allowance_total` double NOT NULL,
  `ot_amount` double DEFAULT NULL,
  `gross_salary` double NOT NULL,
  `epf_ee_amount` double DEFAULT NULL,
  `ee_sosco_amount` double DEFAULT NULL,
  `eis_sip_amount` double DEFAULT NULL,
  `deductions_total` double NOT NULL,
  `otherdeductions_total` double NOT NULL,
  `total_deductions` double NOT NULL,
  `net_pay` double NOT NULL,
  `epf_percent` int(11) NOT NULL,
  `epf_er` double DEFAULT NULL,
  `sosco_er` double DEFAULT NULL,
  `sosco_eissip` double DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_add_salary`
--

INSERT INTO `employee_add_salary` (`id`, `employee_id`, `basic_salary`, `additional_allowance_total`, `ot_amount`, `gross_salary`, `epf_ee_amount`, `ee_sosco_amount`, `eis_sip_amount`, `deductions_total`, `otherdeductions_total`, `total_deductions`, `net_pay`, `epf_percent`, `epf_er`, `sosco_er`, `sosco_eissip`, `status`, `created_at`) VALUES
(1, 17, 9914, 300, 100, 10314, 1100, 10, 5, 1815, 500, 2315, 7999, 17, 2228.56, 10, 7, 1, '2020-03-10 05:32:34'),
(2, 8, 500000, 1000, 100, 501100, 0, 0, 0, 100, 200, 300, 500800, 13, 100, 200, 300, 1, '2020-03-10 05:34:52'),
(3, 29, 9969, 2100, 100, 12169, 1100, 10, 5, 1244, 1046, 2290, 9879, 17, 2230.76, 10, 7, 1, '2020-03-11 11:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_add_salary_allowance`
--

CREATE TABLE `employee_add_salary_allowance` (
  `id` int(11) NOT NULL,
  `add_salary_id` int(11) NOT NULL,
  `allowance_id` int(11) NOT NULL,
  `main_cat_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_add_salary_allowance`
--

INSERT INTO `employee_add_salary_allowance` (`id`, `add_salary_id`, `allowance_id`, `main_cat_id`, `amount`, `status`) VALUES
(1, 1, 2, 1, 100, 1),
(2, 1, 8, 1, 200, 1),
(3, 1, 4, 2, 200, 1),
(4, 1, 9, 2, 500, 1),
(5, 1, 5, 3, 500, 1),
(6, 2, 2, 1, 1000, 1),
(7, 2, 9, 2, 100, 1),
(8, 2, 11, 3, 200, 1),
(9, 3, 2, 1, 1500, 1),
(10, 3, 8, 1, 600, 1),
(11, 3, 3, 2, 99, 1),
(12, 3, 4, 2, 30, 1),
(13, 3, 5, 3, 1046, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_awards`
--

CREATE TABLE `employee_awards` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `award_category_id` int(11) NOT NULL,
  `gift_item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_month` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_awards`
--

INSERT INTO `employee_awards` (`id`, `created_by`, `employee_id`, `award_category_id`, `gift_item`, `select_month`, `description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 1, '20000', '2019-09-25', 'nice performance', 1, 0, '2019-08-31 23:30:53', '2019-09-25 02:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `salary_date` date NOT NULL,
  `basic_salary` double NOT NULL,
  `additional_allowance_total` double NOT NULL,
  `ot_amount` double DEFAULT NULL,
  `gross_salary` double NOT NULL,
  `epf_ee_amount` double DEFAULT NULL,
  `ee_sosco_amount` double DEFAULT NULL,
  `eis_sip_amount` double DEFAULT NULL,
  `deductions_total` double NOT NULL,
  `otherdeductions_total` double NOT NULL,
  `total_deductions` double NOT NULL,
  `net_pay` double NOT NULL,
  `epf_percent` int(11) NOT NULL,
  `epf_er` double DEFAULT NULL,
  `sosco_er` double DEFAULT NULL,
  `sosco_eissip` double DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`id`, `employee_id`, `salary_date`, `basic_salary`, `additional_allowance_total`, `ot_amount`, `gross_salary`, `epf_ee_amount`, `ee_sosco_amount`, `eis_sip_amount`, `deductions_total`, `otherdeductions_total`, `total_deductions`, `net_pay`, `epf_percent`, `epf_er`, `sosco_er`, `sosco_eissip`, `status`, `created_at`) VALUES
(1, 8, '2020-02-01', 500000, 2100, 100, 502200, NULL, NULL, NULL, 700, 300, 1000, 501200, 0, 10, 20, 30, 1, '2020-03-06 05:56:10'),
(2, 8, '2020-03-01', 500000, 300, 250, 500550, NULL, NULL, NULL, 700, 300, 1000, 499550, 0, 50, 10, 30, 1, '2020-03-06 05:57:21'),
(3, 17, '2020-03-01', 1000000, 45, 20, 1000065, 30, 40, 50, 200, 0, 200, 999865, 0, 100, 150, 200, 1, '2020-03-06 05:58:25'),
(4, 1, '2020-03-01', 30000, 1000, 500, 31500, NULL, NULL, NULL, 4600, 4100, 8700, 22800, 0, 10, 20, 30, 1, '2020-03-06 06:02:32'),
(5, 17, '2020-01-01', 9914, 300, 100, 10314, 1100, 10, 5, 1815, 500, 2315, 7999, 0, 2228.56, 10, 7, 1, '2020-03-11 11:13:03'),
(6, 17, '2020-02-01', 9914, 300, 100, 10314, 1100, 10, 5, 1815, 500, 2315, 7999, 0, 2228.56, 10, 7, 1, '2020-03-11 11:16:22'),
(7, 17, '2020-04-01', 9914, 300, 100, 10314, 1100, 10, 5, 1815, 500, 2315, 7999, 17, 2228.56, 10, 7, 1, '2020-03-11 11:24:26'),
(8, 29, '2020-03-01', 9969, 2100, 100, 12169, 1100, 10, 5, 1244, 1046, 2290, 9879, 17, 2230.76, 10, 7, 1, '2020-03-11 11:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_allowance`
--

CREATE TABLE `employee_salary_allowance` (
  `id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `allowance_id` int(11) NOT NULL,
  `main_cat_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary_allowance`
--

INSERT INTO `employee_salary_allowance` (`id`, `salary_id`, `allowance_id`, `main_cat_id`, `amount`, `status`) VALUES
(1, 1, 6, 1, 100, 1),
(2, 1, 7, 1, 2000, 1),
(3, 1, 4, 2, 200, 1),
(4, 1, 9, 2, 500, 1),
(5, 1, 11, 3, 100, 1),
(6, 1, 5, 3, 200, 1),
(7, 2, 2, 1, 100, 1),
(8, 2, 6, 1, 200, 1),
(9, 2, 3, 2, 500, 1),
(10, 2, 4, 2, 200, 1),
(11, 2, 11, 3, 100, 1),
(12, 2, 5, 3, 200, 1),
(13, 3, 2, 1, 5, 1),
(14, 3, 6, 1, 10, 1),
(15, 3, 7, 1, 20, 1),
(16, 3, 8, 1, 10, 1),
(17, 3, 9, 2, 5, 1),
(18, 3, 3, 2, 25, 1),
(19, 3, 10, 2, 50, 1),
(20, 4, 2, 1, 100, 1),
(21, 4, 6, 1, 200, 1),
(22, 4, 7, 1, 300, 1),
(23, 4, 8, 1, 400, 1),
(24, 4, 3, 2, 1000, 1),
(25, 4, 4, 2, 1100, 1),
(26, 4, 9, 2, 1200, 1),
(27, 4, 10, 2, 1300, 1),
(28, 4, 5, 3, 2000, 1),
(29, 4, 11, 3, 2100, 1),
(30, 6, 2, 1, 100, 1),
(31, 6, 8, 1, 200, 1),
(32, 6, 4, 2, 200, 1),
(33, 6, 9, 2, 500, 1),
(34, 6, 5, 3, 500, 1),
(35, 7, 2, 1, 100, 1),
(36, 7, 8, 1, 200, 1),
(37, 7, 4, 2, 200, 1),
(38, 7, 9, 2, 500, 1),
(39, 7, 5, 3, 500, 1),
(40, 8, 2, 1, 1500, 1),
(41, 8, 8, 1, 600, 1),
(42, 8, 3, 2, 99, 1),
(43, 8, 4, 2, 30, 1),
(44, 8, 5, 3, 1046, 1);

-- --------------------------------------------------------

--
-- Table structure for table `epf`
--

CREATE TABLE `epf` (
  `id` int(10) UNSIGNED NOT NULL,
  `wage_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `from_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `to_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `employee_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `employer_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `total_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `epf`
--

INSERT INTO `epf` (`id`, `wage_limit`, `status`, `from_amount`, `to_amount`, `employee_contribution`, `employer_contribution`, `total_contribution`, `created_at`, `updated_at`) VALUES
(1, '1000-2000', 1, 1000.00, 2000.00, 15.00, 16.00, 31.00, '2020-03-10 07:42:12', '2020-03-10 09:38:58'),
(2, '10000-10500', 1, 10000.00, 10500.00, 1100.00, 1596.00, 2696.00, '2020-03-10 10:06:33', '2020-03-10 11:21:16'),
(3, '11000-11500', 1, 11000.00, 11500.00, 15.00, 16.00, 25.00, '2020-03-10 10:06:33', '2020-03-10 10:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `expence_managements`
--

CREATE TABLE `expence_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchased_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchased_date` date NOT NULL,
  `amount_spent` int(11) NOT NULL,
  `purchased_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expence_managements`
--

INSERT INTO `expence_managements` (`id`, `created_by`, `employee_id`, `item_name`, `purchased_from`, `purchased_date`, `amount_spent`, `purchased_details`, `deletion_status`, `created_at`, `updated_at`) VALUES
(2, 1, 11, '1', 'wer', '2019-09-04', 34, '<p>vfvx<br></p>', 0, '2019-09-04 05:41:23', '2019-09-04 05:41:23'),
(3, 1, 11, 'Marketing', NULL, '2019-09-04', 567, '<p>fgdgdf<br></p>', 0, '2019-09-04 06:53:32', '2019-09-04 06:53:32'),
(4, 1, 11, 'Purchase', 're', '2019-09-04', 34, '<p>reter<br></p>', 0, '2019-09-04 11:02:50', '2019-09-04 11:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `exp_purposes`
--

CREATE TABLE `exp_purposes` (
  `id` int(11) NOT NULL,
  `exp_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_purposes`
--

INSERT INTO `exp_purposes` (`id`, `exp_name`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Purchase', 1, '2019-09-04 06:09:43', '2019-09-04 06:51:04'),
(2, 'Marketing', 1, '2019-09-04 06:40:01', '2019-09-04 06:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) DEFAULT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `created_by`, `folder_id`, `caption`, `file_name`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test', '1567309252.png', 1, 0, '2019-09-01 14:40:52', '2019-09-01 14:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `folder_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `created_by`, `folder_name`, `folder_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'My File', '<p>sdfsdfsdfsdfsdfs<br></p>', 1, 0, '2019-09-01 14:40:24', '2019-09-01 14:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `updated_by` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `holiday_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `created_by`, `holiday_name`, `date`, `description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'asoraa', '2019-09-25', 'Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora', 1, 0, '2019-08-31 23:35:41', '2019-09-25 03:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `increments`
--

CREATE TABLE `increments` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `incr_purpose` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increments`
--

INSERT INTO `increments` (`id`, `created_by`, `amount`, `emp_id`, `date`, `incr_purpose`, `created_at`, `updated_at`) VALUES
(2, 1, 12, 11, '2019-09', 'sffd', '2019-09-04 08:34:19', '2019-09-04 08:34:19'),
(3, 1, 12, 11, '2019-09', 'sffd', '2019-09-04 08:34:34', '2019-09-04 08:34:34'),
(12, 1, 56, 11, '2019-09', NULL, '2019-09-04 09:06:14', '2019-09-04 09:06:14'),
(13, 1, 55, 11, '2019-12', 'h', '2019-09-04 09:06:55', '2019-09-04 09:06:55'),
(14, 1, 60, 11, '2019-10', 'ggfhggf', '2019-09-04 10:01:54', '2019-09-04 10:01:54'),
(15, 1, 60, 11, '2019-09', 'ggfhggf', '2019-09-04 10:04:29', '2019-09-04 10:04:29'),
(16, 1, 60, 11, '2019-09', 'ggfhggf', '2019-09-04 10:08:24', '2019-09-04 10:08:24'),
(17, 1, 2000, 11, '2019-09', 'Yearly', '2019-09-04 10:09:14', '2019-09-04 10:09:14'),
(18, 1, 3000, 11, '2019-10', 'Performance', '2019-09-04 11:01:14', '2019-09-04 11:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `leave_category_id` int(11) NOT NULL,
  `last_leave_category_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_leave_period` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_leave_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `during_leave` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT 0,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`id`, `created_by`, `leave_category_id`, `last_leave_category_id`, `last_leave_period`, `start_date`, `end_date`, `leave_address`, `last_leave_date`, `reason`, `during_leave`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'ddfgfdg', '2019-09-16', '2019-09-23', 'fdgfdgfg', '2019-09-13', 'dfgdfgdfg', 'gdfgdfgd', 2, 0, '2019-09-24 11:24:12', '2019-09-24 12:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `leave_categories`
--

CREATE TABLE `leave_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `leave_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_categories`
--

INSERT INTO `leave_categories` (`id`, `created_by`, `leave_category`, `leave_category_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sick', 'grdgdg', 1, 0, '2019-08-31 11:50:01', '2019-09-24 10:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `loan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_installments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remaining_installments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `created_by`, `user_id`, `loan_name`, `loan_amount`, `number_of_installments`, `remaining_installments`, `loan_description`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'Install', '100', '5', '2', '<p>dfgdf<br></p>', 0, '2019-08-31 11:38:58', '2019-09-03 12:55:10'),
(2, 1, 13, 'Md Mohosin Iqbal', '500', '4', '3', 'hfghfhfg', 0, '2019-09-01 00:12:40', '2020-03-04 07:25:23');

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
(3, '2017_10_16_064138_create_client_types_table', 1),
(4, '2017_10_16_072245_create_designations_table', 1),
(5, '2017_11_11_090618_create_general_settings_table', 1),
(6, '2017_11_17_083029_create_files_table', 1),
(7, '2017_11_17_083147_create_folders_table', 1),
(8, '2017_12_29_092609_create_departments_table', 1),
(9, '2017_12_29_114115_create_leave_categories_table', 1),
(10, '2017_12_29_124702_create_attendances_table', 1),
(11, '2017_12_29_185757_create_working_days_table', 1),
(12, '2017_12_29_215610_create_holidays_table', 1),
(13, '2017_12_29_233919_create_personal_events_table', 1),
(14, '2017_12_30_161317_create_payrolls_table', 1),
(15, '2017_12_30_174811_create_notices_table', 1),
(16, '2017_12_31_185730_create_leave_applications_table', 1),
(17, '2018_01_03_081227_create_bonuses_table', 1),
(18, '2018_01_03_104224_create_deductions_table', 1),
(19, '2018_01_03_114151_create_loans_table', 1),
(20, '2018_01_03_153120_create_expence_managements_table', 1),
(21, '2018_01_04_061104_create_salary_payments_table', 1),
(22, '2018_01_04_173403_create_award_categories_table', 1),
(23, '2018_01_05_164319_create_employee_awards_table', 1),
(24, '2018_02_03_073729_entrust_setup_tables', 1),
(25, '2018_03_24_100116_create_salary_payment_details_table', 1),
(26, '2020_02_27_110809_create_category_master_table', 2),
(27, '2020_02_27_121342_create_table_addition_deletion', 3),
(28, '2020_02_27_161315_create_table_sosco_insurance_table', 4),
(29, '2020_03_10_105925_create_table_sosco', 5),
(30, '2020_03_10_110002_create_table_epf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `created_by`, `notice_title`, `description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Office Party', 'Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora', 1, 0, '2018-04-16 05:59:04', '2018-04-16 05:59:04'),
(2, 1, 'Office Holidays', 'Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora', 1, 0, '2019-08-31 23:28:44', '2019-08-31 23:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_type` tinyint(4) NOT NULL COMMENT '1 for Provision & 2 for Permanent',
  `basic_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_rent_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provident_fund_contribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_deduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provident_fund_deduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_deduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `created_by`, `user_id`, `employee_type`, `basic_salary`, `house_rent_allowance`, `medical_allowance`, `special_allowance`, `provident_fund_contribution`, `other_allowance`, `tax_deduction`, `provident_fund_deduction`, `other_deduction`, `activation_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 3, '8080', '44', '444', '44', '44', '444', '2', '4', '50', 0, '2019-08-31 11:29:21', '2019-09-04 11:01:14'),
(2, 1, 6, 3, '55000', '210', '254', '200', '300', '580', '250', '500', '200', 0, '2019-09-01 00:11:01', '2019-09-01 00:11:01'),
(3, 1, 4, 2, '15000', '5000', NULL, NULL, '1000', '500', '2500', NULL, NULL, 0, '2019-09-01 23:28:10', '2019-09-01 23:28:10'),
(4, 1, 13, 3, '5000', '55', '876', '567', '543', '456', '56', '654', '56', 0, '2019-09-25 02:03:44', '2019-09-25 02:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_addition_deduction`
--

CREATE TABLE `payroll_addition_deduction` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payroll_addition_deduction`
--

INSERT INTO `payroll_addition_deduction` (`id`, `name`, `main_cat_name`, `cat_id`, `assigned_to`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', '1', 1, '1', 0, '2020-02-27 07:39:05', '2020-02-27 09:31:58'),
(2, 'POB', '1', 1, '2', 1, '2020-02-27 09:32:29', '2020-03-04 07:51:35'),
(3, 'NUBE', '2', 1, '1', 1, '2020-02-27 09:41:54', '2020-03-04 07:55:03'),
(4, 'GMIS', '2', 2, '2', 1, '2020-02-28 04:48:08', '2020-03-04 07:55:14'),
(5, 'PCB', '3', 2, '2', 1, '2020-02-28 04:54:17', '2020-03-04 07:56:15'),
(6, 'NEC', '1', 1, '1', 1, '2020-02-29 07:15:43', '2020-03-04 07:51:54'),
(7, 'Second', '1', 2, '2', 1, '2020-03-04 07:52:09', '2020-03-04 07:52:09'),
(8, 'Sepecial/Cola', '1', 1, '2', 1, '2020-03-04 07:52:37', '2020-03-04 07:52:37'),
(9, 'BIMB LOAN', '2', 1, '1', 1, '2020-03-04 07:55:29', '2020-03-04 07:55:29'),
(10, 'GELA', '2', 1, '1', 1, '2020-03-04 07:55:44', '2020-03-04 07:55:44'),
(11, 'UPL', '3', 1, '1', 1, '2020-03-04 07:56:22', '2020-03-04 07:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'hrm-setting', 'HRM Setting', 'HRM Setting', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(2, 'role', 'Role Setting', 'Role Setting Details', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(3, 'people', 'People', 'People', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(4, 'manage-employee', 'Manage employee', 'Manage employee', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(5, 'manage-clients', 'Manage clients', 'Manage clients', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(6, 'manage-references', 'Manage references', 'Manage references', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(7, 'file-upload', 'File Upload', 'File Upload', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(8, 'sms', 'SMS', 'SMS', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(9, 'payroll-management', 'Payroll Management', 'Payroll Management', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(10, 'manage-salary', 'Manage Salary', 'Manage Salary', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(11, 'salary-list', 'Salary List', 'Salary List', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(12, 'make-payment', 'Make Payment', 'Make Payment', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(13, 'generate-payslip', 'Generate Payslip', 'Generate Payslip', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(14, 'manage-bonus', 'Manage Bonus', 'Manage Bonus', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(15, 'manage-deduction', 'Manage Deduction', 'Manage Deduction', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(16, 'loan-management', 'Loan Management', 'Loan Management', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(17, 'provident-fund', 'Provident Fund', 'Provident Fund', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(18, 'attendance-management', 'Attendance Management', 'Attendance Management', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(19, 'manage-attendance', 'Manage Attendance ', 'Manage Attendance', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(20, 'attendance-report', 'Attendance Report', 'Attendance Report', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(21, 'manage-expense', 'Manage Expense', 'Manage Expense', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(22, 'manage-award', 'Manage Award', 'Manage Award', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(23, 'leave-application', 'Leave Application', 'Leave Application', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(24, 'manage-leave-application', 'Manage Leave Application List', 'Application List', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(25, 'my-leave-application', 'My Leave Application List', 'Application List', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(26, 'notice', 'Notice', 'Notice', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(27, 'manage-notice', 'Manage Notice', 'Manage Notice', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(28, 'notice-board', 'Notice Board', 'Notice Board', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(29, 'leave-reports', 'Leave Reports', 'Leave Reports', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(23, 2),
(24, 1),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(28, 1),
(28, 2),
(29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_events`
--

CREATE TABLE `personal_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `personal_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_event_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_events`
--

INSERT INTO `personal_events` (`id`, `created_by`, `personal_event`, `personal_event_description`, `start_date`, `end_date`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Office Party', 'details...', '2019-09-25', '2019-09-25', 1, 0, '2018-04-16 05:45:40', '2019-09-25 03:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', 'Superadmin Details', '2018-04-12 06:35:05', '2018-04-12 06:35:05'),
(2, 'employee', 'Employee', 'Employee Details...', '2018-04-16 05:47:29', '2018-04-16 05:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(11, 1),
(13, 2),
(14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary_payments`
--

CREATE TABLE `salary_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gross_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_deduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provident_fund` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_month` date NOT NULL,
  `payment_type` tinyint(4) NOT NULL COMMENT '1 for cash payment, 2 for chaque payment & 3 for bank payment',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_payments`
--

INSERT INTO `salary_payments` (`id`, `created_by`, `user_id`, `gross_salary`, `total_deduction`, `net_salary`, `provident_fund`, `payment_amount`, `payment_month`, `payment_type`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-09-01', 1, 'gdfg', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(2, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-05-01', 1, 'fgdfg', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(3, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-06-01', 3, 'rgdfgfdgd', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(4, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-07-01', 2, 'dfgdggg', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(5, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-07-01', 2, 'dfgdggg', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(6, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-01-01', 1, 'gdfgdf', '2019-08-31 11:37:10', '2019-08-31 11:37:10'),
(7, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-01-01', 1, 'gdfgdf', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(8, 1, 11, '3976.00', '76.00', '3900', '48', '3900', '2019-03-01', 1, 'dgdfgdfgdg', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(10, 1, 11, '3976.00', '76.00', '3900', '48', '3900', '2019-08-01', 1, NULL, '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(11, 1, 11, '8976.00', '76.00', '8900', '48', '8900', '2019-10-01', 1, 'sdfdfsdf', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(12, 1, 13, '6954.00', '891.00', '6063', '1197', '6063', '2020-03-01', 1, NULL, '2020-03-04 07:25:23', '2020-03-04 07:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `salary_payment_details`
--

CREATE TABLE `salary_payment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary_payment_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_payment_details`
--

INSERT INTO `salary_payment_details` (`id`, `salary_payment_id`, `item_name`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Basic Salary', 3000, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(2, 1, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(3, 1, 'Medical Allowance', 444, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(4, 1, 'Special Allowance', 44, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(5, 1, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(6, 1, 'Other Allowance', 444, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(7, 1, 'Tax Deduction', 2, 'debits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(8, 1, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(9, 1, 'Other Deduction', 50, 'debits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(10, 2, 'Basic Salary', 3000, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(11, 2, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(12, 2, 'Medical Allowance', 444, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(13, 2, 'Special Allowance', 44, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(14, 2, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(15, 2, 'Other Allowance', 444, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(16, 2, 'Tax Deduction', 2, 'debits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(17, 2, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(18, 2, 'Other Deduction', 50, 'debits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(19, 3, 'Basic Salary', 3000, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(20, 3, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(21, 3, 'Medical Allowance', 444, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(22, 3, 'Special Allowance', 44, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(23, 3, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(24, 3, 'Other Allowance', 444, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(25, 3, 'Tax Deduction', 2, 'debits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(26, 3, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(27, 3, 'Other Deduction', 50, 'debits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(28, 4, 'Basic Salary', 3000, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(29, 4, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(30, 4, 'Medical Allowance', 444, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(31, 4, 'Special Allowance', 44, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(32, 4, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(33, 4, 'Other Allowance', 444, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(34, 4, 'Tax Deduction', 2, 'debits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(35, 4, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(36, 4, 'Other Deduction', 50, 'debits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(37, 5, 'Basic Salary', 3000, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(38, 5, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(39, 5, 'Medical Allowance', 444, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(40, 5, 'Special Allowance', 44, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(41, 5, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(42, 5, 'Other Allowance', 444, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(43, 5, 'Tax Deduction', 2, 'debits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(44, 5, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(45, 5, 'Other Deduction', 50, 'debits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(46, 6, 'Basic Salary', 3000, 'credits', '2019-08-31 11:37:10', '2019-08-31 11:37:10'),
(47, 6, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(48, 6, 'Medical Allowance', 444, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(49, 6, 'Special Allowance', 44, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(50, 6, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(51, 6, 'Other Allowance', 444, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(52, 6, 'Tax Deduction', 2, 'debits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(53, 6, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(54, 6, 'Other Deduction', 50, 'debits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(55, 7, 'Basic Salary', 3000, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(56, 7, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(57, 7, 'Medical Allowance', 444, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(58, 7, 'Special Allowance', 44, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(59, 7, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(60, 7, 'Other Allowance', 444, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(61, 7, 'Tax Deduction', 2, 'debits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(62, 7, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(63, 7, 'Other Deduction', 50, 'debits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(64, 8, 'Basic Salary', 3000, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(65, 8, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(66, 8, 'Medical Allowance', 444, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(67, 8, 'Special Allowance', 44, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(68, 8, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(69, 8, 'Other Allowance', 444, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(70, 8, 'Tax Deduction', 2, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(71, 8, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(72, 8, 'Other Deduction', 50, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(73, 8, 'Install', 20, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(74, 9, 'Basic Salary', 55000, 'credits', '2019-09-01 00:11:27', '2019-09-01 00:11:27'),
(75, 9, 'House Rent Allowance', 210, 'credits', '2019-09-01 00:11:27', '2019-09-01 00:11:27'),
(76, 9, 'Medical Allowance', 254, 'credits', '2019-09-01 00:11:27', '2019-09-01 00:11:27'),
(77, 9, 'Special Allowance', 200, 'credits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(78, 9, 'Provident Fund Contribution', 300, 'credits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(79, 9, 'Other Allowance', 580, 'credits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(80, 9, 'Tax Deduction', 250, 'debits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(81, 9, 'Provident Fund Deduction', 500, 'debits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(82, 9, 'Other Deduction', 200, 'debits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(83, 10, 'Basic Salary', 3000, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(84, 10, 'House Rent Allowance', 44, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(85, 10, 'Medical Allowance', 444, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(86, 10, 'Special Allowance', 44, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(87, 10, 'Provident Fund Contribution', 44, 'credits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(88, 10, 'Other Allowance', 444, 'credits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(89, 10, 'Tax Deduction', 2, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(90, 10, 'Provident Fund Deduction', 4, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(91, 10, 'Other Deduction', 50, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(92, 10, 'Install', 20, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(93, 11, 'Basic Salary', 3000, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(94, 11, 'House Rent Allowance', 44, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(95, 11, 'Medical Allowance', 444, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(96, 11, 'Special Allowance', 44, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(97, 11, 'Provident Fund Contribution', 44, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(98, 11, 'Other Allowance', 444, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(99, 11, 'Tax Deduction', 2, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(100, 11, 'Provident Fund Deduction', 4, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(101, 11, 'Other Deduction', 50, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(102, 11, 'DDR', 5000, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(103, 11, 'Install', 20, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(104, 12, 'Basic Salary', 5000, 'credits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(105, 12, 'House Rent Allowance', 55, 'credits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(106, 12, 'Medical Allowance', 876, 'credits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(107, 12, 'Special Allowance', 567, 'credits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(108, 12, 'Provident Fund Contribution', 543, 'credits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(109, 12, 'Other Allowance', 456, 'credits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(110, 12, 'Tax Deduction', 56, 'debits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(111, 12, 'Provident Fund Deduction', 654, 'debits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(112, 12, 'Other Deduction', 56, 'debits', '2020-03-04 07:25:23', '2020-03-04 07:25:23'),
(113, 12, 'Md Mohosin Iqbal', 125, 'debits', '2020-03-04 07:25:23', '2020-03-04 07:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `set_times`
--

CREATE TABLE `set_times` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_times`
--

INSERT INTO `set_times` (`id`, `created_by`, `in_time`, `out_time`, `created_at`, `updated_at`) VALUES
(1, 1, '11:12:00', '18:05:00', '2019-09-07 06:49:45', '2019-09-07 07:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `sosco`
--

CREATE TABLE `sosco` (
  `id` int(10) UNSIGNED NOT NULL,
  `wage_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `from_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `to_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `employee_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `employer_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `total_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sosco`
--

INSERT INTO `sosco` (`id`, `wage_limit`, `status`, `from_amount`, `to_amount`, `employee_contribution`, `employer_contribution`, `total_contribution`, `created_at`, `updated_at`) VALUES
(1, '1000', 1, 100.00, 200.00, 15.00, 16.00, 31.00, '2020-03-10 07:41:46', '2020-03-10 07:41:46'),
(2, '10000-10500', 1, 10000.00, 10500.00, 10.00, 10.00, 20.00, '2020-03-10 11:04:55', '2020-03-10 11:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `sosco_insurance`
--

CREATE TABLE `sosco_insurance` (
  `id` int(10) UNSIGNED NOT NULL,
  `wage_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `from_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `to_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `employee_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `employer_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `total_contribution` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sosco_insurance`
--

INSERT INTO `sosco_insurance` (`id`, `wage_limit`, `status`, `from_amount`, `to_amount`, `employee_contribution`, `employer_contribution`, `total_contribution`, `created_at`, `updated_at`) VALUES
(1, '2', 1, 30.00, 50.00, 100.00, 30.00, 130.00, '2020-02-27 12:32:40', '2020-02-28 04:38:43'),
(2, '10000-10500', 1, 10000.00, 10500.00, 5.00, 7.00, 12.00, '2020-03-10 11:05:35', '2020-03-10 11:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE `tbl_activity` (
  `a_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `date_count` int(11) DEFAULT NULL,
  `leave_type` int(11) DEFAULT NULL COMMENT 'AL 1 MC 2 EL 3',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`a_id`, `date`, `end_date`, `date_count`, `leave_type`, `created_at`) VALUES
(3, '2020-05-21', '2020-05-21', 2, 1, '2020-01-09 04:26:00'),
(4, '2020-05-22', '2020-05-22', 2, 1, '2020-01-09 04:26:00'),
(5, '2020-05-27', '2020-05-27', 2, 1, '2020-01-09 04:27:00'),
(6, '2020-09-01', '2020-09-01', 2, 1, '2020-01-09 04:29:00'),
(7, '2020-07-30', '2020-07-30', 2, 1, '2020-01-09 04:31:00'),
(8, '2020-05-08', '2020-05-08', 2, 1, '2020-01-09 04:33:00'),
(9, '2020-02-05', '2020-02-05', 2, 1, '2020-01-09 04:34:00'),
(10, '2020-02-07', '2020-02-07', 2, 1, '2020-01-09 04:34:00'),
(11, '2020-02-10', '2020-02-10', 2, 1, '2020-01-09 04:34:00'),
(12, '2020-01-15', '2020-01-15', 2, 1, '2020-01-09 04:36:00'),
(13, '2020-02-21', '2020-02-21', 2, 1, '2020-01-09 04:48:00'),
(14, '2020-09-04', '2020-09-04', 1, 1, '2020-01-09 04:48:00'),
(15, '2020-12-30', '2020-12-30', 2, 1, '2020-01-09 04:53:00'),
(16, '2020-12-31', '2020-12-31', 2, 1, '2020-01-09 04:53:00'),
(17, '2020-09-25', '2020-09-25', 2, 1, '2020-01-09 04:54:00'),
(18, '2020-11-12', '2020-11-12', 2, 1, '2020-01-09 04:54:00'),
(19, '2020-11-13', '2020-11-13', 2, 1, '2020-01-09 04:54:00'),
(20, '2020-11-16', '2020-11-16', 2, 1, '2020-01-09 04:55:00'),
(21, '2020-11-17', '2020-11-17', 2, 1, '2020-01-09 04:55:00'),
(22, '2020-04-14', '2020-04-14', 2, 1, '2020-01-09 04:57:00'),
(23, '2020-01-07', '2020-01-07', 2, 1, '2020-01-09 20:58:00'),
(24, '2020-01-20', '2020-01-20', 2, 1, '2020-01-09 20:58:00'),
(25, '2020-01-02', '2020-01-02', 2, 1, '2020-01-09 21:40:00'),
(26, '2020-01-03', '2020-01-03', 2, 1, '2020-01-09 21:41:00'),
(28, '2020-05-28', '2020-05-28', 2, 1, '2020-01-09 21:53:00'),
(29, '2020-05-29', '2020-05-29', 2, 1, '2020-01-09 21:53:00'),
(30, '2020-02-06', '2020-02-06', 1, 1, '2020-01-09 22:41:00'),
(31, '2020-12-28', '2020-12-28', 2, 1, '2020-01-09 22:41:00'),
(32, '2020-12-29', '2020-12-29', 2, 1, '2020-01-09 22:41:00'),
(33, '2020-07-27', '2020-07-27', 1, 1, '2020-01-09 22:44:00'),
(34, '2020-02-27', '2020-02-27', 1, 1, '2020-01-09 22:46:00'),
(35, '2020-03-20', '2020-03-20', 2, 1, '2020-01-09 22:48:00'),
(36, '2020-07-29', '2020-07-29', 1, 1, '2020-01-09 22:53:00'),
(37, '2020-11-26', '2020-11-26', 2, 1, '2020-01-09 22:55:00'),
(38, '2020-11-27', '2020-11-27', 2, 1, '2020-01-09 22:55:00'),
(39, '2020-11-30', '2020-11-30', 1, 1, '2020-01-09 22:55:00'),
(40, '2020-12-11', '2020-12-11', 1, 1, '2020-01-10 00:47:00'),
(41, '2020-01-09', '2020-01-09', 1, 1, '2020-01-10 02:25:00'),
(43, '2020-04-24', '2020-04-24', 2, 1, '2020-01-13 03:56:00'),
(44, '2020-03-19', '2020-03-19', 1, 1, '2020-01-13 04:11:00'),
(45, '2020-03-26', '2020-03-26', 2, 1, '2020-01-13 04:11:00'),
(46, '2020-04-30', '2020-04-30', 2, 1, '2020-01-13 04:12:00'),
(47, '2020-05-12', '2020-05-12', 1, 1, '2020-01-13 04:15:00'),
(48, '2020-05-14', '2020-05-14', 2, 1, '2020-01-14 04:30:00'),
(49, '2020-01-13', '2020-01-13', 2, 1, '2020-01-14 04:31:00'),
(50, '2020-12-24', '2020-12-24', 1, 1, '2020-01-14 04:32:00'),
(51, '2020-08-28', '2020-08-28', 2, 1, '2020-01-14 04:34:00'),
(52, '2020-02-14', '2020-02-14', 1, 1, '2020-01-14 04:34:00'),
(53, '2020-04-27', '2020-04-27', 2, 1, '2020-01-14 04:35:00'),
(54, '2020-03-30', '2020-03-30', 2, 1, '2020-01-14 04:35:00'),
(55, '2020-06-15', '2020-06-15', 2, 1, '2020-01-15 19:35:00'),
(56, '2020-08-24', '2020-08-24', 1, 1, '2020-01-15 19:36:00'),
(57, '2020-01-31', '2020-01-31', 1, 1, '2020-01-19 20:22:00'),
(58, '2020-08-03', '2020-08-03', 2, 1, '2020-01-20 19:31:00'),
(59, '2020-02-03', '2020-02-03', 1, 1, '2020-01-22 01:55:00'),
(60, '2020-02-04', '2020-02-04', 1, 1, '2020-01-22 01:56:00'),
(61, '2020-01-28', '2020-01-28', 1, 1, '2020-01-22 02:28:00'),
(62, '2020-03-16', '2020-03-16', 1, 1, '2020-01-27 20:30:00'),
(63, '2020-03-17', '2020-03-17', 1, 1, '2020-01-27 20:30:00'),
(64, '2020-03-18', '2020-03-18', 1, 1, '2020-01-27 20:30:00'),
(65, '2020-02-17', '2020-02-17', 1, 1, '2020-01-27 22:14:00'),
(66, '2020-02-19', '2020-02-19', 2, 1, '2020-01-27 22:14:00'),
(67, '2020-02-18', '2020-02-18', 1, 1, '2020-01-27 22:15:00'),
(69, '2020-02-25', '2020-02-25', 1, 1, '2020-01-28 03:41:00'),
(70, '2020-01-10', '2020-01-10', 1, 1, '2020-01-28 03:59:00'),
(71, '2020-01-14', '2020-01-14', 1, 1, '2020-01-28 04:03:00'),
(72, '2020-01-16', '2020-01-16', 1, 1, '2020-01-28 04:04:00'),
(73, '2020-01-17', '2020-01-17', 1, 1, '2020-01-28 04:04:00'),
(74, '2020-01-21', '2020-01-21', 2, 1, '2020-01-28 04:04:00'),
(75, '2020-02-28', '2020-02-28', 2, 1, '2020-01-28 04:14:00'),
(77, '2020-06-12', '2020-06-12', 1, 1, '2020-01-28 22:50:00'),
(78, '2020-11-18', '2020-11-18', 1, 1, '2020-01-28 22:51:00'),
(79, '2020-11-19', '2020-11-19', 1, 1, '2020-01-28 22:51:00'),
(80, '2020-11-20', '2020-11-20', 2, 1, '2020-01-28 22:51:00'),
(81, '2020-11-23', '2020-11-23', 2, 1, '2020-01-28 22:51:00'),
(82, '2020-11-24', '2020-11-24', 2, 1, '2020-01-29 02:06:00'),
(83, '2020-11-25', '2020-11-25', 2, 1, '2020-01-29 02:06:00'),
(84, '2020-03-23', '2020-03-23', 1, 1, '2020-01-29 02:10:00'),
(85, '2020-04-29', '2020-04-29', 1, 1, '2020-01-29 02:11:00'),
(86, '2020-10-22', '2020-10-22', 2, 1, '2020-01-29 02:12:00'),
(87, '2020-06-22', '2020-06-22', 2, 1, '2020-01-29 02:13:00'),
(88, '2020-07-22', '2020-07-22', 1, 1, '2020-01-29 02:14:00'),
(89, '2020-06-01', '2020-06-01', 1, 1, '2020-01-29 02:15:00'),
(90, '2020-12-17', '2020-12-17', 2, 1, '2020-01-29 02:15:00'),
(91, '2020-12-18', '2020-12-18', 2, 1, '2020-01-29 02:15:00'),
(92, '2020-11-04', '2020-11-04', 1, 1, '2020-01-29 04:16:00'),
(93, '2020-12-16', '2020-12-16', 2, 1, '2020-01-29 19:55:00'),
(94, '2020-09-09', '2020-09-09', 1, 1, '2020-01-29 20:10:00'),
(95, '2020-10-30', '2020-10-30', 2, 1, '2020-01-29 20:12:00'),
(96, '2020-10-16', '2020-10-16', 2, 1, '2020-01-29 20:14:00'),
(97, '2020-08-25', '2020-08-25', 1, 1, '2020-01-29 20:16:00'),
(98, '2020-09-23', '2020-09-23', 1, 1, '2020-01-29 20:18:00'),
(99, '2020-04-13', '2020-04-13', 2, 1, '2020-01-29 20:32:00'),
(100, '2020-07-17', '2020-07-17', 2, 1, '2020-01-29 20:36:00'),
(101, '2020-10-26', '2020-10-26', 2, 1, '2020-01-29 20:39:00'),
(102, '2020-07-20', '2020-07-20', 1, 1, '2020-01-29 20:41:00'),
(103, '2020-06-26', '2020-06-26', 2, 1, '2020-01-29 20:46:00'),
(104, '2020-10-07', '2020-10-07', 1, 1, '2020-01-29 20:46:00'),
(105, '2020-10-21', '2020-10-21', 1, 1, '2020-01-29 20:52:00'),
(106, '2020-08-10', '2020-08-10', 2, 1, '2020-01-29 20:53:00'),
(107, '2020-05-18', '2020-05-18', 1, 1, '2020-01-29 20:54:00'),
(108, '2020-07-03', '2020-07-03', 1, 1, '2020-01-29 21:00:00'),
(109, '2020-09-30', '2020-09-30', 1, 1, '2020-01-29 21:01:00'),
(110, '2020-07-16', '2020-07-16', 1, 1, '2020-01-30 02:53:00'),
(111, '2020-07-08', '2020-07-08', 1, 1, '2020-01-30 02:55:00'),
(112, '2020-06-24', '2020-06-24', 1, 1, '2020-01-30 03:07:00'),
(113, '2020-02-20', '2020-02-20', 2, 1, '2020-01-30 03:09:00'),
(114, '2020-07-14', '2020-07-14', 2, 1, '2020-01-30 03:13:00'),
(115, '2020-11-09', '2020-11-09', 1, 1, '2020-01-30 03:14:00'),
(116, '2020-11-10', '2020-11-10', 1, 1, '2020-01-30 03:14:00'),
(117, '2020-11-11', '2020-11-11', 1, 1, '2020-01-30 03:15:00'),
(118, '2020-10-27', '2020-10-27', 2, 1, '2020-01-30 03:16:00'),
(119, '2020-10-28', '2020-10-28', 2, 1, '2020-01-30 03:16:00'),
(120, '2020-09-17', '2020-09-17', 2, 1, '2020-01-30 03:17:00'),
(121, '2020-10-02', '2020-10-02', 1, 1, '2020-01-30 03:17:00'),
(122, '2020-09-18', '2020-09-18', 2, 1, '2020-01-30 03:17:00'),
(123, '2020-08-21', '2020-08-21', 2, 1, '2020-01-30 03:18:00'),
(124, '2020-06-10', '2020-06-10', 1, 1, '2020-01-30 03:20:00'),
(125, '2020-09-28', '2020-09-28', 2, 1, '2020-01-30 03:22:00'),
(126, '2020-09-29', '2020-09-29', 1, 1, '2020-01-30 03:22:00'),
(127, '2020-03-13', '2020-03-13', 1, 1, '2020-01-30 03:26:00'),
(128, '2020-04-20', '2020-04-20', 2, 1, '2020-01-30 03:30:00'),
(129, '2020-08-27', '2020-08-27', 2, 1, '2020-01-30 03:31:00'),
(130, '2020-04-03', '2020-04-03', 1, 1, '2020-01-30 03:38:00'),
(131, '2020-06-29', '2020-06-29', 2, 1, '2020-01-30 03:53:00'),
(132, '2020-11-02', '2020-11-02', 1, 1, '2020-01-30 03:54:00'),
(133, '2020-11-03', '2020-11-03', 1, 1, '2020-01-30 03:54:00'),
(134, '2020-10-13', '2020-10-13', 1, 1, '2020-01-30 19:12:00'),
(135, '2021-01-04', '2021-01-04', 1, 1, '2020-01-30 19:15:00'),
(136, '2021-01-05', '2021-01-05', 1, 1, '2020-01-30 19:15:00'),
(137, '2020-08-04', '2020-08-04', 1, 1, '2020-01-30 19:18:00'),
(138, '2020-10-12', '2020-10-12', 1, 1, '2020-01-30 19:18:00'),
(139, '2020-02-11', '2020-02-11', 1, 1, '2020-01-31 02:21:00'),
(140, '2020-03-27', '2020-03-27', 2, 1, '2020-01-31 02:48:00'),
(141, '2020-12-21', '2020-12-21', 2, 1, '2020-01-31 02:59:00'),
(142, '2020-12-22', '2020-12-22', 2, 1, '2020-01-31 02:59:00'),
(143, '2020-09-24', '2020-09-24', 1, 1, '2020-02-03 00:38:00'),
(144, '2020-06-08', '2020-06-08', 1, 1, '2020-02-03 00:45:00'),
(145, '2020-07-24', '2020-07-24', 1, 1, '2020-02-03 00:46:00'),
(146, '2020-10-23', '2020-10-23', 2, 1, '2020-02-04 22:36:00'),
(147, '2020-10-05', '2020-10-05', 1, 1, '2020-02-06 23:13:00'),
(148, '2020-10-06', '2020-10-06', 1, 1, '2020-02-06 23:13:00'),
(149, '2020-03-06', NULL, 1, 1, '2020-02-11 02:59:24'),
(150, '2020-03-09', NULL, 1, 1, '2020-02-11 03:00:22'),
(151, '2020-05-15', NULL, 1, 1, '2020-02-11 19:49:53'),
(152, '2020-09-11', NULL, 1, 1, '2020-02-12 00:53:22'),
(153, '2020-03-11', '2020-03-11', 1, 1, '2020-02-18 02:01:17'),
(158, '2020-03-04', '2020-03-04', 1, 1, '2020-02-18 03:43:24'),
(159, '2020-02-24', '2020-02-24', 1, 1, '2020-02-25 02:52:40'),
(160, '2020-07-13', '2020-07-13', 1, 1, '2020-02-25 02:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `status`, `created_at`) VALUES
(1, 'HQ', 1, '2020-01-09 02:19:15'),
(2, 'KLSP', 1, '2020-01-09 02:19:15'),
(3, 'PKP', 1, '2020-01-09 02:19:15'),
(4, 'IPOH', 1, '2020-01-09 02:19:15'),
(5, 'SMJ', 1, '2020-01-09 02:19:15'),
(6, 'KT', 1, '2020-01-09 02:19:15'),
(7, 'NTC', 1, '2020-01-09 02:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `color_code` text DEFAULT NULL,
  `leave_type` int(11) DEFAULT NULL COMMENT 'AL 1 MC 2 EL 3',
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`, `color_code`, `leave_type`, `member_id`) VALUES
(3, NULL, '2020-05-21', '2020-05-21', 'green', 1, 28),
(4, NULL, '2020-05-22', '2020-05-22', 'green', 1, 28),
(5, NULL, '2020-05-27', '2020-05-27', 'green', 1, 28),
(6, NULL, '2020-09-01', '2020-09-01', 'green', 1, 28),
(7, NULL, '2020-07-30', '2020-07-30', 'green', 1, 28),
(8, NULL, '2020-05-08', '2020-05-08', 'green', 1, 28),
(9, 'HQ', '2020-02-05', '2020-02-05', 'green', 1, 22),
(10, 'HQ', '2020-02-07', '2020-02-07', 'green', 1, 22),
(11, 'HQ', '2020-02-10', '2020-02-10', 'green', 1, 22),
(12, 'HQ', '2020-01-15', '2020-01-15', 'green', 1, 22),
(13, 'HQ', '2020-01-15', '2020-01-15', 'red', 1, 17),
(14, 'HQ', '2020-02-07', '2020-02-07', 'red', 1, 17),
(15, 'HQ', '2020-02-21', '2020-02-21', 'green', 1, 17),
(16, 'HQ', '2020-09-04', '2020-09-04', 'green', 1, 17),
(17, 'HQ', '2020-12-30', '2020-12-30', 'green', 1, 17),
(18, 'HQ', '2020-12-31', '2020-12-31', 'green', 1, 17),
(19, 'HQ', '2020-09-25', '2020-09-25', 'green', 1, 17),
(20, 'HQ', '2020-11-12', '2020-11-12', 'green', 1, 17),
(21, 'HQ', '2020-11-13', '2020-11-13', 'green', 1, 17),
(22, 'HQ', '2020-11-16', '2020-11-16', 'green', 1, 17),
(23, 'HQ', '2020-11-17', '2020-11-17', 'green', 1, 17),
(24, 'HQ', '2020-04-14', '2020-04-14', 'green', 1, 17),
(25, 'HQ', '2020-05-08', '2020-05-08', 'red', 1, 17),
(26, 'KLSP', '2020-01-07', '2020-01-07', 'green', 1, 26),
(27, 'KLSP', '2020-01-20', '2020-01-20', 'green', 1, 24),
(28, 'HQ', '2020-01-02', '2020-01-02', 'green', 1, 15),
(29, 'HQ', '2020-01-03', '2020-01-03', 'green', 1, 15),
(31, 'HQ', '2020-05-27', '2020-05-27', 'red', 1, 21),
(32, 'HQ', '2020-05-28', '2020-05-28', 'green', 1, 21),
(33, 'HQ', '2020-05-29', '2020-05-29', 'green', 1, 21),
(34, 'HQ', '2020-05-29', '2020-05-29', 'red', 1, 15),
(35, 'HQ', '2020-05-28', '2020-05-28', 'red', 1, 15),
(36, 'HQ', '2020-11-13', '2020-11-13', 'red', 1, 22),
(37, 'HQ', '2020-11-16', '2020-11-16', 'red', 1, 22),
(38, 'HQ', '2020-04-14', '2020-04-14', 'red', 1, 22),
(39, 'HQ', '2020-02-06', '2020-02-06', 'green', 1, 22),
(40, 'HQ', '2020-12-28', '2020-12-28', 'green', 1, 20),
(41, 'HQ', '2020-12-29', '2020-12-29', 'green', 1, 20),
(42, 'HQ', '2020-07-27', '2020-07-27', 'green', 1, 22),
(43, 'HQ', '2020-02-27', '2020-02-27', 'green', 1, 22),
(44, 'HQ', '2020-03-20', '2020-03-20', 'green', 1, 21),
(45, 'HQ', '2020-07-29', '2020-07-29', 'green', 1, 21),
(46, 'HQ', '2020-07-30', '2020-07-30', 'red', 1, 21),
(47, 'HQ', '2020-12-28', '2020-12-28', 'red', 1, 21),
(48, 'HQ', '2020-11-26', '2020-11-26', 'green', 1, 21),
(49, 'HQ', '2020-11-27', '2020-11-27', 'green', 1, 21),
(50, 'HQ', '2020-11-30', '2020-11-30', 'green', 1, 21),
(51, 'HQ', '2020-12-11', '2020-12-11', 'green', 1, 18),
(52, NULL, '2020-05-27', '2020-05-27', 'purple', 1, 15),
(55, 'KLSP', '2020-01-02', '2020-01-02', 'red', 1, 25),
(56, 'KLSP', '2020-01-03', '2020-01-03', 'red', 1, 25),
(57, 'KLSP', '2020-01-09', '2020-01-09', 'green', 1, 25),
(59, 'KLSP', '2020-04-24', '2020-04-24', 'green', 1, 24),
(60, 'KLSP', '2020-03-19', '2020-03-19', 'green', 1, 24),
(61, 'KLSP', '2020-03-26', '2020-03-26', 'green', 1, 24),
(62, 'KLSP', '2020-04-30', '2020-04-30', 'green', 1, 24),
(63, 'KLSP', '2020-05-12', '2020-05-12', 'green', 1, 24),
(64, 'HQ', '2020-05-14', '2020-05-14', 'green', 1, 44),
(65, 'HQ', '2020-01-13', '2020-01-13', 'green', 1, 44),
(67, 'HQ', '2020-09-25', '2020-09-25', 'red', 1, 44),
(68, 'HQ', '2020-12-24', '2020-12-24', 'green', 1, 44),
(69, 'HQ', '2020-12-29', '2020-12-29', 'red', 1, 44),
(70, 'HQ', '2020-11-17', '2020-11-17', 'red', 1, 44),
(71, 'HQ', '2020-02-10', '2020-02-10', 'red', 1, 44),
(72, 'HQ', '2020-08-28', '2020-08-28', 'green', 1, 44),
(73, 'HQ', '2020-02-14', '2020-02-14', 'green', 1, 44),
(74, 'HQ', '2020-04-27', '2020-04-27', 'green', 1, 44),
(75, 'HQ', '2020-03-30', '2020-03-30', 'green', 1, 44),
(76, 'HQ', '2020-06-15', '2020-06-15', 'green', 1, 17),
(77, 'HQ', '2020-08-24', '2020-08-24', 'green', 1, 17),
(78, 'KLSP', '2020-01-31', '2020-01-31', 'green', 1, 26),
(79, 'KLSP', '2020-08-03', '2020-08-03', 'green', 1, 28),
(80, 'KLSP', '2020-02-03', '2020-02-03', 'green', 1, 24),
(81, 'KLSP', '2020-02-04', '2020-02-04', 'green', 1, 24),
(82, 'KLSP', '2020-02-05', '2020-02-05', 'red', 1, 24),
(83, 'KLSP', '2020-01-28', '2020-01-28', 'green', 1, 28),
(84, 'HQ', '2020-03-16', '2020-03-16', 'green', 1, 21),
(85, 'HQ', '2020-03-17', '2020-03-17', 'green', 1, 21),
(86, 'HQ', '2020-03-18', '2020-03-18', 'green', 1, 21),
(87, 'KLSP', '2020-02-17', '2020-02-17', 'green', 1, 25),
(88, 'KLSP', '2020-02-19', '2020-02-19', 'green', 1, 25),
(89, 'KLSP', '2020-02-18', '2020-02-18', 'green', 1, 25),
(91, 'KLSP', '2020-02-25', '2020-02-25', 'green', 1, 26),
(93, NULL, '2020-01-02', '2020-01-02', 'green', 1, 29),
(94, 'KLSP', '2020-01-10', '2020-01-10', 'green', 1, 29),
(95, 'KLSP', '2020-01-13', '2020-01-13', 'red', 1, 29),
(96, 'KLSP', '2020-01-14', '2020-01-14', 'green', 1, 29),
(97, NULL, '2020-01-15', '2020-01-15', 'green', 1, 29),
(98, 'KLSP', '2020-01-16', '2020-01-16', 'green', 1, 29),
(99, 'KLSP', '2020-01-17', '2020-01-17', 'green', 1, 29),
(100, 'KLSP', '2020-01-20', '2020-01-20', 'red', 1, 29),
(101, 'KLSP', '2020-01-21', '2020-01-21', 'green', 1, 29),
(102, NULL, '2020-02-07', '2020-02-07', 'green', 1, 29),
(103, 'KLSP', '2020-02-28', '2020-02-28', 'green', 1, 29),
(105, 'KLSP', '2020-06-12', '2020-06-12', 'green', 1, 29),
(106, 'KLSP', '2020-11-18', '2020-11-18', 'green', 1, 29),
(107, 'KLSP', '2020-11-19', '2020-11-19', 'green', 1, 29),
(108, 'KLSP', '2020-11-20', '2020-11-20', 'green', 1, 29),
(109, 'KLSP', '2020-11-23', '2020-11-23', 'green', 1, 29),
(110, NULL, '2020-11-13', '2020-11-13', 'purple', 1, 29),
(111, NULL, '2020-11-16', '2020-11-16', 'purple', 1, 29),
(112, NULL, '2020-11-17', '2020-11-17', 'purple', 1, 29),
(113, 'KLSP', '2020-11-23', '2020-11-23', 'red', 1, 28),
(114, 'KLSP', '2020-11-24', '2020-11-24', 'green', 1, 28),
(115, 'KLSP', '2020-11-25', '2020-11-25', 'green', 1, 28),
(116, 'KLSP', '2020-11-26', '2020-11-26', 'red', 1, 28),
(117, 'KLSP', '2020-11-27', '2020-11-27', 'red', 1, 28),
(118, 'KLSP', '2020-03-23', '2020-03-23', 'green', 1, 28),
(119, 'KLSP', '2020-04-29', '2020-04-29', 'green', 1, 28),
(120, 'KLSP', '2020-10-22', '2020-10-22', 'green', 1, 28),
(121, 'KLSP', '2020-06-22', '2020-06-22', 'green', 1, 28),
(122, 'KLSP', '2020-07-22', '2020-07-22', 'green', 1, 28),
(123, 'KLSP', '2020-06-01', '2020-06-01', 'green', 1, 28),
(124, 'KLSP', '2020-12-17', '2020-12-17', 'green', 1, 28),
(125, 'KLSP', '2020-12-18', '2020-12-18', 'green', 1, 28),
(126, 'HQ', '2020-11-04', '2020-11-04', 'green', 1, 18),
(127, 'KLSP', '2020-01-21', '2020-01-21', 'red', 1, 24),
(128, 'HQ', '2020-12-16', '2020-12-16', 'green', 1, 18),
(129, 'HQ', '2020-11-20', '2020-11-20', 'red', 1, 18),
(130, 'HQ', '2020-09-09', '2020-09-09', 'green', 1, 18),
(131, 'HQ', '2020-10-30', '2020-10-30', 'green', 1, 18),
(132, 'HQ', '2020-10-16', '2020-10-16', 'green', 1, 18),
(133, 'HQ', '2020-08-25', '2020-08-25', 'green', 1, 18),
(134, 'HQ', '2020-09-23', '2020-09-23', 'green', 1, 18),
(135, 'HQ', '2020-11-25', '2020-11-25', 'red', 1, 18),
(136, 'HQ', '2020-04-13', '2020-04-13', 'green', 1, 17),
(137, 'HQ', '2020-07-17', '2020-07-17', 'green', 1, 17),
(138, 'HQ', '2020-10-26', '2020-10-26', 'green', 1, 17),
(139, 'HQ', '2020-07-20', '2020-07-20', 'green', 1, 17),
(140, 'HQ', '2020-06-26', '2020-06-26', 'green', 1, 17),
(141, 'HQ', '2020-03-20', '2020-03-20', 'red', 1, 17),
(142, 'HQ', '2020-10-07', '2020-10-07', 'green', 1, 18),
(143, 'HQ', '2020-10-21', '2020-10-21', 'green', 1, 17),
(144, 'HQ', '2020-03-30', '2020-03-30', 'red', 1, 17),
(145, 'HQ', '2020-08-10', '2020-08-10', 'green', 1, 17),
(146, 'HQ', '2020-05-18', '2020-05-18', 'green', 1, 17),
(147, 'HQ', '2020-07-03', '2020-07-03', 'green', 1, 17),
(148, 'HQ', '2020-09-30', '2020-09-30', 'green', 1, 18),
(149, 'HQ', '2020-08-10', '2020-08-10', 'red', 1, 18),
(150, 'HQ', '2020-07-16', '2020-07-16', 'green', 1, 18),
(151, 'HQ', '2020-07-08', '2020-07-08', 'green', 1, 18),
(152, 'HQ', '2020-06-24', '2020-06-24', 'green', 1, 18),
(153, 'HQ', '2020-02-19', '2020-02-19', 'red', 1, 20),
(154, 'HQ', '2020-02-20', '2020-02-20', 'green', 1, 20),
(155, 'HQ', '2020-02-21', '2020-02-21', 'red', 1, 20),
(156, 'HQ', '2020-04-13', '2020-04-13', 'red', 1, 20),
(157, 'HQ', '2020-04-27', '2020-04-27', 'red', 1, 20),
(158, 'HQ', '2020-07-14', '2020-07-14', 'green', 1, 18),
(159, 'HQ', '2020-04-24', '2020-04-24', 'red', 1, 21),
(160, 'HQ', '2020-11-09', '2020-11-09', 'green', 1, 20),
(161, 'HQ', '2020-11-10', '2020-11-10', 'green', 1, 20),
(162, 'HQ', '2020-11-11', '2020-11-11', 'green', 1, 20),
(163, 'HQ', '2020-11-12', '2020-11-12', 'red', 1, 20),
(164, 'HQ', '2020-10-30', '2020-10-30', 'red', 1, 20),
(165, 'HQ', '2020-10-27', '2020-10-27', 'green', 1, 20),
(166, 'HQ', '2020-10-26', '2020-10-26', 'red', 1, 20),
(167, 'HQ', '2020-10-28', '2020-10-28', 'green', 1, 20),
(168, 'HQ', '2020-09-17', '2020-09-17', 'green', 1, 20),
(169, 'HQ', '2020-10-02', '2020-10-02', 'green', 1, 22),
(170, 'HQ', '2020-09-18', '2020-09-18', 'green', 1, 20),
(171, 'HQ', '2020-08-21', '2020-08-21', 'green', 1, 20),
(172, 'HQ', '2020-06-10', '2020-06-10', 'green', 1, 18),
(173, 'HQ', '2020-06-15', '2020-06-15', 'red', 1, 22),
(174, 'HQ', '2020-08-28', '2020-08-28', 'red', 1, 20),
(175, 'HQ', '2020-12-17', '2020-12-17', 'red', 1, 21),
(176, 'HQ', '2020-09-28', '2020-09-28', 'green', 1, 20),
(177, 'HQ', '2020-09-29', '2020-09-29', 'green', 1, 20),
(178, 'HQ', '2020-08-21', '2020-08-21', 'red', 1, 22),
(179, 'HQ', '2020-12-18', '2020-12-18', 'red', 1, 22),
(180, 'HQ', '2020-09-17', '2020-09-17', 'red', 1, 21),
(181, 'HQ', '2020-09-18', '2020-09-18', 'red', 1, 21),
(182, 'HQ', '2020-03-13', '2020-03-13', 'green', 1, 22),
(183, 'HQ', '2020-04-30', '2020-04-30', 'red', 1, 21),
(184, 'HQ', '2020-06-26', '2020-06-26', 'red', 1, 21),
(185, 'HQ', '2020-04-20', '2020-04-20', 'green', 1, 18),
(186, 'HQ', '2020-09-28', '2020-09-28', 'red', 1, 22),
(187, 'HQ', '2020-08-27', '2020-08-27', 'green', 1, 21),
(188, 'HQ', '2020-04-03', '2020-04-03', 'green', 1, 21),
(189, 'HQ', '2020-02-28', '2020-02-28', 'red', 1, 21),
(190, 'HQ', '2020-09-01', '2020-09-01', 'red', 1, 21),
(191, 'HQ', '2020-10-28', '2020-10-28', 'red', 1, 21),
(192, 'HQ', '2020-06-29', '2020-06-29', 'green', 1, 21),
(193, 'HQ', '2020-11-02', '2020-11-02', 'green', 1, 21),
(194, 'HQ', '2020-11-03', '2020-11-03', 'green', 1, 21),
(195, 'HQ', '2020-10-13', '2020-10-13', 'green', 1, 15),
(196, 'HQ', '2020-12-31', '2020-12-31', 'red', 1, 15),
(197, 'HQ', '2020-12-30', '2020-12-30', 'red', 1, 15),
(198, 'HQ', '2021-01-04', '2021-01-04', 'green', 1, 15),
(199, 'HQ', '2021-01-05', '2021-01-05', 'green', 1, 15),
(200, 'HQ', '2020-08-03', '2020-08-03', 'red', 1, 15),
(201, 'HQ', '2020-08-04', '2020-08-04', 'green', 1, 15),
(202, 'HQ', '2020-10-12', '2020-10-12', 'green', 1, 15),
(203, 'HQ', '2020-05-22', '2020-05-22', 'red', 1, 15),
(204, 'KLSP', '2020-02-11', '2020-02-11', 'green', 1, 25),
(205, 'KLSP', '2020-03-26', '2020-03-26', 'red', 1, 25),
(206, 'KLSP', '2020-03-27', '2020-03-27', 'green', 1, 25),
(207, 'KLSP', '2020-04-20', '2020-04-20', 'red', 1, 25),
(208, 'KLSP', '2020-06-22', '2020-06-22', 'red', 1, 24),
(209, NULL, '2020-05-08', '2020-05-08', 'green', 1, 25),
(210, NULL, '2020-05-27', '2020-05-27', 'green', 1, 25),
(211, NULL, '2020-05-28', '2020-05-28', 'green', 1, 25),
(212, NULL, '2020-05-29', '2020-05-29', 'green', 1, 25),
(213, 'KLSP', '2020-12-21', '2020-12-21', 'green', 1, 24),
(214, 'KLSP', '2020-12-22', '2020-12-22', 'green', 1, 24),
(215, 'KLSP', '2020-06-29', '2020-06-29', 'red', 1, 25),
(216, NULL, '2020-08-03', '2020-08-03', 'green', 1, 25),
(217, NULL, '2020-08-21', '2020-08-21', 'green', 1, 25),
(218, NULL, '2020-09-17', '2020-09-17', 'green', 1, 25),
(219, NULL, '2020-09-18', '2020-09-18', 'green', 1, 25),
(221, NULL, '2020-11-20', '2020-11-20', 'green', 1, 25),
(223, 'KLSP', '2020-08-27', '2020-08-27', 'red', 1, 26),
(224, 'KLSP', '2020-12-21', '2020-12-21', 'red', 1, 26),
(225, 'KLSP', '2020-12-22', '2020-12-22', 'red', 1, 26),
(226, 'KLSP', '2020-09-24', '2020-09-24', 'green', 1, 26),
(227, 'KLSP', '2020-06-08', '2020-06-08', 'green', 1, 26),
(228, 'KLSP', '2020-07-24', '2020-07-24', 'green', 1, 26),
(229, 'KLSP', '2020-11-24', '2020-11-24', 'red', 1, 26),
(230, NULL, '2020-04-24', '2020-04-24', 'green', 1, 26),
(231, NULL, '2020-06-26', '2020-06-26', 'green', 1, 26),
(232, NULL, '2020-08-28', '2020-08-28', 'green', 1, 26),
(233, NULL, '2020-09-25', '2020-09-25', 'green', 1, 26),
(234, NULL, '2020-10-28', '2020-10-28', 'green', 1, 26),
(235, NULL, '2020-10-30', '2020-10-30', 'orange', 1, 26),
(236, NULL, '2020-11-20', '2020-11-20', 'orange', 1, 26),
(237, NULL, '2020-11-23', '2020-11-23', 'orange', 1, 26),
(238, NULL, '2020-12-31', '2020-12-31', 'purple', 1, 26),
(239, NULL, '2020-12-30', '2020-12-30', 'purple', 1, 26),
(240, NULL, '2020-12-29', '2020-12-29', 'purple', 1, 26),
(241, NULL, '2020-12-28', '2020-12-28', 'purple', 1, 26),
(242, 'KLSP', '2020-07-14', '2020-07-14', 'red', 1, 28),
(243, 'KLSP', '2020-10-23', '2020-10-23', 'green', 1, 28),
(244, NULL, '2020-01-02', '2020-01-02', 'purple', 1, 28),
(245, NULL, '2020-01-03', '2020-01-03', 'purple', 1, 28),
(246, NULL, '2020-02-10', '2020-02-10', 'purple', 1, 28),
(247, NULL, '2020-02-10', '2020-02-10', 'purple', 1, 28),
(248, 'KLSP', '2020-03-27', '2020-03-27', 'red', 1, 26),
(249, NULL, '2020-02-05', '2020-02-05', 'purple', 1, 29),
(250, NULL, '2020-02-05', '2020-02-05', 'purple', 1, 29),
(251, NULL, '2020-02-05', '2020-02-05', 'purple', 1, 29),
(252, 'KLSP', '2020-10-05', '2020-10-05', 'green', 1, 24),
(253, 'KLSP', '2020-10-06', '2020-10-06', 'green', 1, 24),
(254, 'KLSP', '2020-10-22', '2020-10-22', 'red', 1, 24),
(255, 'KLSP', '2020-10-23', '2020-10-23', 'red', 1, 24),
(256, NULL, '2020-10-26', '2020-10-26', 'purple', 1, 24),
(257, NULL, '2020-10-26', '2020-10-26', 'purple', 1, 24),
(258, 'KLSP', '2020-10-27', '2020-10-27', 'red', 1, 24),
(259, NULL, '2020-10-28', '2020-10-28', 'purple', 1, 24),
(260, 'HQ', '2020-03-06', '2020-03-06', 'green', 1, 18),
(261, 'HQ', '2020-03-09', '2020-03-09', 'green', 1, 18),
(263, 'HQ', '2020-05-21', '2020-05-21', 'red', 1, 46),
(264, 'HQ', '2020-05-14', '2020-05-14', 'red', 1, 46),
(265, 'HQ', '2020-05-15', '2020-05-15', 'green', 1, 46),
(266, 'HQ', '2020-07-17', '2020-07-17', 'red', 1, 46),
(267, 'HQ', '2020-09-11', '2020-09-11', 'green', 1, 46),
(268, 'HQ', '2020-10-16', '2020-10-16', 'red', 1, 46),
(269, NULL, '2020-05-22', '2020-05-22', 'purple', 1, 46),
(270, 'HQ', '2020-01-07', '2020-01-07', 'red', 1, 45),
(276, 'HQ', '2020-03-04', '2020-03-04', 'green', 1, 44),
(277, NULL, '2020-02-28', '2020-02-28', 'purple', NULL, 46),
(278, 'HQ', '2020-02-24', '2020-02-24', 'green', 1, 45),
(279, 'HQ', '2020-07-13', '2020-07-13', 'green', 1, 45),
(280, 'HQ', '2020-12-16', '2020-12-16', 'red', 1, 45),
(281, 'KLSP', '2020-02-20', '2020-02-20', 'red', 1, 25),
(282, NULL, '2020-02-21', '2020-02-21', 'purple', NULL, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forcedapproval`
--

CREATE TABLE `tbl_forcedapproval` (
  `f_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'AL 1 MC 2 EL 3',
  `date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `file` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `rejected_reason` text DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_forcedapproval`
--

INSERT INTO `tbl_forcedapproval` (`f_id`, `member_id`, `category_id`, `date`, `to_date`, `file`, `remarks`, `status`, `rejected_reason`, `event_id`, `created_at`) VALUES
(1, 15, 1, '2020-05-27', '2020-05-27', 'f0cf8a918177b58abfafb804223d855b.pdf', 'HARI RAYA CELEBRATION', 0, NULL, 52, '2020-01-10 01:40:00'),
(2, 29, 1, '2020-01-24', '2020-01-24', 'f133e55f3e938c99bd9dbf8158c0eb1d.pdf', '24.01.2020  leave taken. submitting for your system approval.', 1, '', 92, '2020-01-28 03:58:00'),
(3, 29, 1, '2020-01-02', '2020-01-02', '86e46a31176385420b87cdfa17e3c40f.pdf', '02.01.2020  leave taken. submitting for your system approval.', 1, '', 93, '2020-01-28 03:59:00'),
(4, 29, 1, '2020-01-15', '2020-01-15', 'd8c55fd21ded6a51239cbb5df1cd856c.pdf', 'leave taken india trip. submitting for your system approval.', 1, '', 97, '2020-01-28 04:04:00'),
(5, 29, 1, '2020-02-07', '2020-02-07', '9d142600a30e26d06dfd9a81b261e42d.pdf', 'Following with KL Thaipusam Chariot procession on 06.02.2020 night.', 1, '', 102, '2020-01-28 04:12:00'),
(6, 29, 1, '2020-11-13', '2020-11-13', 'e307956cfc7afbcbc392e24ef22ae380.pdf', 'preparation for Deepavali festival', 0, NULL, 110, '2020-01-28 22:53:00'),
(7, 29, 1, '2020-11-16', '2020-11-16', 'd4a86117dfc125f2d234b583df101746.pdf', 'deepavali leave', 0, NULL, 111, '2020-01-28 22:53:00'),
(8, 29, 1, '2020-11-17', '2020-11-17', '3ec7e6b47744a6f86537bbd4c1c98ce2.pdf', 'deepavali leave', 0, NULL, 112, '2020-01-28 22:54:00'),
(9, 25, 1, '2020-05-08', '2020-05-08', '62ade4242a2b19ab10a322f0a1b5743d.pdf', 'Im not back up YY and PB', 1, '', 209, '2020-01-31 02:57:00'),
(10, 25, 1, '2020-05-27', '2020-05-27', '36dca1498e74ae2004631c58c87b43b7.pdf', 'Im not back up YY, ZO and SAS', 1, '', 210, '2020-01-31 02:58:00'),
(11, 25, 1, '2020-05-28', '2020-05-28', 'fbd548088da4e6edc5eaac341a61eee1.pdf', 'Im not back up YY, ZO and SAS', 1, '', 211, '2020-01-31 02:59:00'),
(12, 25, 1, '2020-05-29', '2020-05-29', '5347c605f46c3bbe2ce95ab7eaa6f7ca.pdf', 'Im not back up ZO', 1, '', 212, '2020-01-31 02:59:00'),
(13, 25, 1, '2020-08-03', '2020-08-03', '5c6d9a01246a13e9db6c0d432b19800a.pdf', 'Im not back up ZO', 1, '', 216, '2020-01-31 03:02:00'),
(14, 25, 1, '2020-08-21', '2020-08-21', '20e8622116dfcbc4a0473b8730317887.pdf', 'Im not back up CK and GR', 1, '', 217, '2020-01-31 03:02:00'),
(15, 25, 1, '2020-09-17', '2020-09-17', '226424f9b7e78c8f5b1371e61304f156.pdf', 'Im not back up CK and SAS', 1, '', 218, '2020-01-31 03:03:00'),
(16, 25, 1, '2020-09-18', '2020-09-18', 'b8e3f702dfc91516f2c9c8b80373b06b.pdf', 'Im not back up CK and SAS', 1, '', 219, '2020-01-31 03:03:00'),
(17, 25, 1, '2020-10-30', '2020-10-30', '3721b380b69cc87ad975402d3f435ff5.pdf', 'Im not back up CK and CMF', 1, '', 220, '2020-01-31 03:04:00'),
(18, 25, 1, '2020-11-20', '2020-11-20', 'af37ef6beaf990f7e24ede0e59e65a03.pdf', 'Im not back up CMF and ST', 1, '', 221, '2020-01-31 03:05:00'),
(19, 26, 1, '2020-04-24', '2020-04-24', '120d9a9c9d8ee7860d433669b5934ecc.pdf', 'mr & yy releif', 1, '', 230, '2020-02-03 01:12:00'),
(20, 26, 1, '2020-06-26', '2020-06-26', '95e00e2ccc7d4b403d028b5214d1830d.pdf', 'MR,YY,AA & ST RELEIF', 1, '', 231, '2020-02-03 01:14:00'),
(21, 26, 1, '2020-08-28', '2020-08-28', '545ec1798bd7836af440e06f228bd9e3.pdf', 'MR.YY,AA & ST RELEIF', 1, '', 232, '2020-02-03 01:15:00'),
(22, 26, 1, '2020-09-25', '2020-09-25', '5ef066249405feba431002290bb40bd0.pdf', 'MR,YY,AA & ST RELEIF', 1, '', 233, '2020-02-03 01:16:00'),
(23, 26, 1, '2020-10-28', '2020-10-28', '3ef1640314ff902ae3406f3e33613a8a.pdf', 'MR,YY,AA & ST RELEIF', 1, '', 234, '2020-02-03 01:18:00'),
(24, 26, 1, '2020-10-30', '2020-10-30', '800f47f29dab691b37ed19cb89d7ffe1.pdf', 'YY,AA & ST RELEIF', 2, '', 235, '2020-02-03 01:20:00'),
(25, 26, 1, '2020-11-20', '2020-11-20', '556830c1d61abbeab09fe5b546e31fe7.pdf', 'YY & AA RELEIF', 2, '', 236, '2020-02-03 01:21:00'),
(26, 26, 1, '2020-11-23', '2020-11-23', '0bb52fde2fb7cbaec7b5b73c11e08d83.pdf', 'MR & AA RELEIF', 2, 'Explanation given in Email dated 04-02-2020.', 237, '2020-02-03 01:22:00'),
(27, 26, 1, '2020-12-31', '2020-12-31', 'b56211b5d470d1836f20118ada6e147e.pdf', 'MR,YY,AA & ST MENGUNAKAN BAKI 7 HARI JIKA BOLEH DILULUSKAN', 0, NULL, 238, '2020-02-03 02:03:00'),
(28, 26, 1, '2020-12-30', '2020-12-30', 'a8b511cca840fbf2756301944f1ae984.pdf', 'MR,YY.AA & ST RELEIF ,PERMOHONAN INI MENGUNAKAN BAKI 7 HARI JIKA BOLEH DILULUSKAN', 0, NULL, 239, '2020-02-03 02:05:00'),
(29, 26, 1, '2020-12-29', '2020-12-29', 'cab72190407e94a0e11b2c094ac39303.pdf', 'MR,YY,AA & ST RELEIF CUTI INI DIPOHON MENGUNAKAN BAKI CUTI 7 HARI JIKA BOLEH DILULUSKAN.', 0, NULL, 240, '2020-02-03 02:06:00'),
(30, 26, 1, '2020-12-28', '2020-12-28', 'c368fc37e10b01a8dc05b443fddd7b18.pdf', 'MR.YY,AA & ST RELEIF ,PERMOHONAN INI MENGUNAKAN BAKI CUTI 7 HARI JIKA BOLEH DILULUSKAN.', 0, NULL, 241, '2020-02-03 02:07:00'),
(31, 28, 1, '2020-01-02', '2020-01-02', '6e98bbcf8e6d703833f68087d9d507a1.pdf', 'submitted earlier', 0, NULL, 244, '2020-02-04 22:39:00'),
(32, 28, 1, '2020-01-03', '2020-01-03', 'fbe71f5fe958a18c74d5c36d54e4a840.pdf', 'submitted earlier', 0, NULL, 245, '2020-02-04 22:40:00'),
(33, 28, 1, '2020-02-10', '2020-02-10', 'aedc5004073072d8026766ab22473a21.pdf', 'Check up at SJMC', 0, NULL, 246, '2020-02-04 22:41:00'),
(34, 28, 1, '2020-02-10', '2020-02-10', 'f5aaa36166c50ec4576ad05e3ef096fc.pdf', 'Check up at SJMC', 0, NULL, 247, '2020-02-04 22:42:00'),
(35, 29, 1, '2020-02-05', '2020-02-05', '60716661ff82d7027ebbb589a4ba64b5.pdf', 'leave taken ready', 0, NULL, 249, '2020-02-06 05:01:00'),
(36, 29, 1, '2020-02-05', '2020-02-05', '70d3bde707b1bb48cd4cb9f9eb7780a4.pdf', 'leave taken ready', 0, NULL, 250, '2020-02-06 05:01:00'),
(37, 29, 1, '2020-02-05', '2020-02-05', '1efc308d4fda5299189d0d8daa525333.pdf', 'leave taken ready', 0, NULL, 251, '2020-02-06 05:01:00'),
(38, 24, 1, '2020-10-26', '2020-10-26', '68f342c9881a6fd5cf097b48eb14409e.pdf', 'I AM NOT BACKUP STAFF FOR PB, CK', 0, NULL, 256, '2020-02-06 23:41:00'),
(39, 24, 1, '2020-10-26', '2020-10-26', '6c28150c9c292ab406f2113014712e6e.pdf', 'I AM NOT BACKUP STAFF FOR PB, CK', 0, NULL, 257, '2020-02-06 23:41:00'),
(40, 24, 1, '2020-10-28', '2020-10-28', 'eda0f7d9e5253dd16550f08d987efa59.pdf', 'APPLY FOR BLOCK LEAVE', 0, NULL, 259, '2020-02-06 23:42:00'),
(41, 46, NULL, '2020-05-22', NULL, '8ae8433991dc230744abec33b1b505ad.txt', 'Appeal for on leave on 22nd May 2020 due to yearly family gathering.', 0, NULL, 269, '2020-02-12 04:52:15'),
(42, 46, 1, '2020-02-28', '2020-02-28', '7581599897fad19e9d92fb6de37efd5f.txt', 'Atirah not backup staf for ZO, pb or MF.', 0, NULL, 277, '2020-02-24 20:10:12'),
(43, 25, 1, '2020-02-21', '2020-02-21', 'ff9bdffbb7ea108eab6a36ad9e248381.pdf', 'Im not back up for PB & NA', 0, NULL, 282, '2020-02-26 06:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE `tbl_holiday` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` text NOT NULL,
  `holiday` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_holiday`
--

INSERT INTO `tbl_holiday` (`id`, `date`, `day`, `holiday`, `status`, `created_by`) VALUES
(1, '2020-01-01', 'Wed', 'New Year', 1, '2020-01-09 02:17:47'),
(2, '2020-01-25', 'Sat', 'Chinese New Year', 1, '2020-01-09 02:17:47'),
(3, '2020-01-26', 'Sun', 'Chinese New Year Holiday', 1, '2020-01-09 02:17:47'),
(4, '2020-01-27', 'Mon', 'Chinese New Year Holiday', 1, '2020-01-09 02:17:47'),
(5, '2020-02-01', 'Sat', 'Federal Territory Day', 1, '2020-01-09 02:17:47'),
(6, '2020-02-08', 'Sat', 'Thaipusam', 1, '2020-01-09 02:17:47'),
(7, '2020-05-01', 'Fri', 'Labour Day', 1, '2020-01-09 02:17:47'),
(8, '2020-05-07', 'Thu', 'Wesak Day', 1, '2020-01-09 02:17:47'),
(9, '2020-05-10', 'Sun', 'Nuzul Al-Quran', 1, '2020-01-09 02:17:47'),
(10, '2020-05-11', 'Mon', 'Nuzul Al-Quran Holiday', 1, '2020-01-09 02:17:47'),
(11, '2020-05-24', 'Sun', 'Hari Raya Aidilfitri', 1, '2020-01-09 02:17:47'),
(12, '2020-05-25', 'Mon', 'Hari Raya Aidilfitri Holiday', 1, '2020-01-09 02:17:47'),
(13, '2020-05-26', 'Tue', 'Hari Raya Aidilfitri Holiday', 1, '2020-01-09 02:17:47'),
(14, '2020-06-06', 'Sat', 'Agongs Birthday', 1, '2020-01-09 02:17:47'),
(15, '2020-07-31', 'Fri', 'Hari Raya Haji', 1, '2020-01-09 02:17:47'),
(16, '2020-08-20', 'Thu', 'Awal Muharram', 1, '2020-01-09 02:17:47'),
(17, '2020-08-31', 'Mon', 'Merdeka Day', 1, '2020-01-09 02:17:47'),
(18, '2020-09-16', 'Wed', 'Malaysia Day', 1, '2020-01-09 02:17:47'),
(19, '2020-10-29', 'Thu', 'Prophet Muhammads Birthday', 1, '2020-01-09 02:17:47'),
(20, '2020-11-14', 'Sat', 'Deepavali', 1, '2020-01-09 02:17:47'),
(21, '2020-12-25', 'Fri', 'Christmas Day', 1, '2020-01-09 02:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `short_code` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ic_no` text DEFAULT NULL,
  `new_ic_no` text DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `total_leave_year` int(11) DEFAULT NULL,
  `mc_entitled` int(11) DEFAULT NULL,
  `hospitalisation` int(11) DEFAULT NULL,
  `balance_leave` int(11) DEFAULT NULL,
  `balance_mc` int(11) DEFAULT NULL,
  `balance_el` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `logged_in` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `EPF_EE` int(11) NOT NULL DEFAULT 0,
  `basic_salary` float(14,2) DEFAULT NULL,
  `EE_SOSCO` int(11) NOT NULL DEFAULT 0,
  `EIS_SIP` int(11) NOT NULL DEFAULT 0,
  `EPS_ER` int(11) NOT NULL DEFAULT 0,
  `EPS_ER_perentage` varchar(50) NOT NULL DEFAULT '0',
  `SOSCO_ER` int(11) NOT NULL DEFAULT 0,
  `resign_date` date NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`user_id`, `user_type`, `category`, `name`, `short_code`, `email`, `ic_no`, `new_ic_no`, `doj`, `designation`, `total_leave_year`, `mc_entitled`, `hospitalisation`, `balance_leave`, `balance_mc`, `balance_el`, `last_login`, `logged_in`, `created_at`, `EPF_EE`, `basic_salary`, `EE_SOSCO`, `EIS_SIP`, `EPS_ER`, `EPS_ER_perentage`, `SOSCO_ER`, `resign_date`, `bank`) VALUES
(1, 'ADMIN', 'ADMIN', 'Admin', 'ADMIN', 'admin', '1234', '1234', '2020-01-02', 'admin', 0, NULL, NULL, 0, NULL, NULL, '2020-02-24 09:06:34', 'TRUE', '2020-01-02 03:42:07', 0, 30000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(7, 'MEMBER', 'HQ', 'MR SHAH', 'MRS', 'mrs@nube.org.my', '123456789', '987654321', '2020-01-03', 'OFFICER', 10, 10, 10, 0, NULL, NULL, '2020-02-19 17:32:51', 'FALSE', '2020-01-04 04:25:32', 0, 32000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(8, 'MEMBER', NULL, 'Govind', 'GS', 'gs@nube.org.my', '12345678901', '986789998766', '2020-01-01', 'staff', 2, 10, 10, -1, NULL, NULL, '2020-02-18 14:34:29', 'FALSE', '2020-01-06 20:21:36', 0, 500000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(9, 'MEMBER', 'HQ', 'Karunapikai a/p Anantharasa', 'AK', 'nube_hq@nube.org.my', '680724055050', '680724055050', '1996-02-02', 'staff', 26, 30, 30, 0, NULL, NULL, '2020-01-30 13:03:15', 'TRUE', '2020-01-07 02:39:25', 0, 33000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(12, 'MEMBER', 'HQ', 'SUBA', 'RS', 'rs@nube.org.my', '123456789', '01234567', '2020-01-01', 'staff', 26, 20, 20, 0, NULL, NULL, '2020-01-07 15:20:34', 'FALSE', '2020-01-07 04:06:52', 0, 33000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(15, 'MEMBER', 'HQ', 'zul', 'ZO', 'zo@nube.org.my', 'amaliazahra', '1', '2012-02-08', 'staff', 16, 22, 60, 13, NULL, NULL, '2020-02-19 17:34:12', 'TRUE', '2020-01-07 05:24:14', 0, 38000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(17, 'MEMBER', 'HQ', 'patma', 'pb', 'pb@nube.org.my', 'patmaal', '2', '1990-05-02', 'staff', 26, 22, 60, 26, NULL, NULL, '2020-02-18 12:18:07', 'FALSE', '2020-01-07 05:27:31', 1, 9914.00, 1, 1, 1, '1', 1, '0000-00-00', ''),
(18, 'MEMBER', 'HQ', 'mayfong ', 'CMF', 'mf@nube.org.my', '123456789', '3', '2006-08-23', 'staff', 23, 22, 60, 22, NULL, NULL, '2020-02-11 13:58:20', 'FALSE', '2020-01-07 05:29:52', 0, 45000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(20, 'MEMBER', 'HQ', 'clifford', 'ck', 'ck@nube.org.my', '123456789', '4', '2006-08-20', 'staff', 27, 30, 30, 21, NULL, NULL, '2020-01-31 11:13:44', 'FALSE', '2020-01-07 05:32:41', 0, 30000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(21, 'MEMBER', 'HQ', 'SARIMAH BINTI AWANG SENIK', 'sas', 'sas@nube.org.my', '290378', '780329065222', '2019-06-12', 'staff', 27, 30, 30, 27, NULL, NULL, '2020-02-21 07:42:49', 'TRUE', '2020-01-07 05:34:17', 0, 30000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(22, 'MEMBER', 'HQ', 'ganesan', 'gr', 'gr@nube.org.my', '5225', '6', '2011-06-20', 'staff', 16, 22, 60, 16, NULL, NULL, '2020-01-31 08:46:06', 'TRUE', '2020-01-07 05:35:37', 0, 50000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(24, 'MEMBER', 'KLSP', 'azlina', 'aa', 'aa@nube.org.my', 'sayang007', '7', '2019-04-01', 'staff', 27, 30, 30, 18, NULL, NULL, '2020-02-20 06:40:20', 'FALSE', '2020-01-07 05:37:30', 0, 38000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(25, 'MEMBER', 'KLSP', 'rahmat', 'mr', 'mr@nube.org.my', 'Nubekl7986$', '8', '2012-03-12', 'staff', 27, 30, 30, 13, NULL, NULL, '2020-02-26 17:14:52', 'FALSE', '2020-01-07 05:39:08', 0, 41000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(26, 'MEMBER', 'KLSP', 'faisal', 'MF', 'mfl@nube.org.my', 'cimb08413', '9', '2012-03-01', 'staff', 27, 30, 30, 14, NULL, NULL, '2020-02-08 10:47:05', 'TRUE', '2020-01-07 05:40:41', 0, 42000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(28, 'MEMBER', 'KLSP', 'Yushamizan Bin Yusoff', 'yy', 'yy@nube.org.my', 'arianna8', '10', '2013-08-01', 'staff', 27, 30, 30, 23, NULL, NULL, '2020-02-11 12:15:22', 'FALSE', '2020-01-07 05:42:06', 0, 43000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(29, 'MEMBER', 'KLSP', 'Sethupathy', 'st', 'st@nube.org.my', 'Naresh1206', '11', '2019-04-01', 'staff', 27, 30, 30, 14, NULL, NULL, '2020-02-06 15:50:05', 'FALSE', '2020-01-07 05:44:48', 0, 44000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(30, 'MEMBER', 'PKP', 'baskaran', 'bl', 'bl@nube.org.my', '10', '10', '2004-02-05', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 21:55:24', 0, 45000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(31, 'MEMBER', 'PKP', 'cheeyeeh', 'cyc', 'cyc@nube.org.my', '11', '11', '2010-10-19', 'staff', 24, 0, 0, 0, NULL, NULL, NULL, NULL, '2020-01-07 21:57:44', 0, 46000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(32, 'MEMBER', 'PKP', ' parameswari', 'pp', 'parameswari@nube.org.my', '22', '22', '1995-02-01', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 21:59:24', 0, 47000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(33, 'MEMBER', 'PKP', 'abdul ', 'ab', 'abduljamilbinjalaludeen@nube.org.my', '12', '12', '2019-01-01', 'staff', 27, 30, 30, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:02:50', 0, 48000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(34, 'MEMBER', 'IPOH', 'changwing ', 'cwk', 'changwingkheong@nube.org.my', '13', '13', '1974-08-01', 'staff', 14, 14, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:05:41', 0, NULL, 0, 0, 0, '0', 0, '0000-00-00', ''),
(35, 'MEMBER', 'IPOH', 'kalaiselvan ', 'ks', 'kalaiselvan@nube.org.my', '14', '14', '2019-02-25', 'staff', 14, 14, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:08:28', 0, NULL, 0, 0, 0, '0', 0, '0000-00-00', ''),
(36, 'MEMBER', 'SMJ', 'DAHLIA BT JOHAR', 'DB', 'dahliabtjohar@nube.org.my', '15', '15', '2013-03-15', 'staff', 16, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:09:42', 0, NULL, 0, 0, 0, '0', 0, '0000-00-00', ''),
(37, 'MEMBER', 'KT', 'HELMIE BIN AHMAD', 'HB', 'helmiebinahmad@nube.org.my', '16', '16', '2014-05-01', 'staff', 16, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:10:57', 0, NULL, 0, 0, 0, '0', 0, '0000-00-00', ''),
(38, 'MEMBER', 'NTC', 'PARUVATHY A/P K IYER', 'AP', 'paruvathyapiyer@nube.org.my', '17', '17', '1987-12-01', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:12:09', 0, NULL, 0, 0, 0, '0', 0, '0000-00-00', ''),
(39, 'MEMBER', 'NTC', 'AMBAL A/P GOVINDASAMY', 'AG', 'ambalapgovindasamy@nube.org.my', '17', '17', '1987-12-01', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:13:41', 0, 20000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(40, 'MEMBER', 'NTC', 'ITHNIN B MAT NOH', 'IB', 'ithninbmatnoh@nube.org.my', '18', '18', '1973-10-20', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:14:54', 0, 23000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(41, 'MEMBER', 'NTC', 'SAMSOL B MOHD NOOR ', 'SB', 'samsolbmohdnoor@nube.org.my', '19', '19', '1987-11-01', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:15:53', 0, 24000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(42, 'MEMBER', 'NTC', 'AMINAH BT MIJAN', 'BT', 'aminahbtmijan@nube.org.my', '20', '20', '1993-02-10', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:17:18', 0, 25000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(43, 'MEMBER', 'NTC', 'AZRAI BIN ABU', 'ABA', 'azraibinabu@nube.org.my', '22', '22', '2007-02-01', 'staff', 26, 22, 60, 0, NULL, NULL, NULL, NULL, '2020-01-07 22:18:33', 0, 26000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(44, 'MEMBER', 'HQ', 'MICHAEL THOMAS', 'MT', 'mt@nube.org.my', '12345678', '16', '2018-03-12', NULL, 12, 18, 60, 12, NULL, NULL, '2020-02-18 14:36:06', 'FALSE', '2020-01-12 23:54:32', 0, 27000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(45, 'MEMBER', 'HQ', 'AZRIN SHAH BIN AZIZ', 'A', 'azrinshah1976@gmail.com', '760612015561', '760612015561', '2019-10-01', NULL, 8, 0, 0, 4, NULL, NULL, '2020-02-25 13:50:58', 'FALSE', '2020-02-10 20:30:26', 0, 28000.00, 0, 0, 0, '0', 0, '0000-00-00', ''),
(46, 'MEMBER', 'HQ', 'NUR ATIRAH BINTI MOHD RASHED', 'NA', 'atirahnur.nb@gmail.com', 'hahaha123', '910428146194', '2019-02-23', NULL, 8, 0, 0, 5, NULL, NULL, '2020-02-25 06:59:03', 'FALSE', '2020-02-10 21:24:19', 0, 29000.00, 0, 0, 0, '0', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_name` tinyint(4) DEFAULT NULL COMMENT '1 for NID, 2 Passport, 3 for Driving License',
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no_one` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no_two` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `marital_status` tinyint(4) DEFAULT NULL COMMENT '1 for Married, Single, 3 for Divorced, 4 for Separated, 5 for Widowed',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_type_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `joining_position` int(11) DEFAULT NULL,
  `access_label` tinyint(4) NOT NULL COMMENT '1 for superadmin, 2 for associates, 3 for employees, 4 for references and 5 for clients',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_status` tinyint(4) NOT NULL DEFAULT 0,
  `deletion_status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_by`, `employee_id`, `name`, `father_name`, `mother_name`, `spouse_name`, `email`, `password`, `present_address`, `permanent_address`, `home_district`, `academic_qualification`, `professional_qualification`, `joining_date`, `experience`, `reference`, `id_name`, `id_number`, `contact_no_one`, `contact_no_two`, `emergency_contact`, `web`, `gender`, `date_of_birth`, `marital_status`, `avatar`, `client_type_id`, `designation_id`, `joining_position`, `access_label`, `role`, `activation_status`, `deletion_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'NUBE', NULL, NULL, NULL, 'admin@mail.com', '$2y$10$Y17jCoozWQAi0i5jDK65D.JSAyd0JbvznZ4vp3lnZC3Ck6CIVLGBu', 'nube', 'nube.org.my', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01921588567', NULL, NULL, 'nube.org.my', 'm', '2020-03-04', NULL, '1583305786.png', 9, 8, NULL, 1, NULL, 1, 0, 'Boja0D2pvJElNenkIxRlRvpPCQgaPzxqxH7UIomff3nFDDa4EhWRFFuQP7xT', '2019-09-07 06:25:15', '2020-03-04 12:18:07'),
(8, 1, NULL, 'Dr. Wasi', NULL, NULL, NULL, 'emaggio@example.org', '$2y$10$Y17jCoozWQAi0i5jDK65D.JSAyd0JbvznZ4vp3lnZC3Ck6CIVLGBu', '86384 Helga LakesCormierton, GA 99066', '6460 Kieran Place Suite 387\nLake Einar, UT 11733-9184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-624-402-9842', NULL, NULL, 'http://pfannerstill.com/', 'm', '2019-09-25', NULL, NULL, 3, 1, NULL, 4, NULL, 1, 0, 'uetBpPUya9', '2018-04-12 06:25:15', '2019-09-25 02:01:09'),
(11, 1, 11, 'Wali', 'gfdfg', 'fggfdgfd', 'gfdgdgd', 'wali@gmail.com', '$2y$10$Y17jCoozWQAi0i5jDK65D.JSAyd0JbvznZ4vp3lnZC3Ck6CIVLGBu', 'dfgdfg', 'fdgfdgdf', 'dfgdfgd', 'gujg', 'gjhjghjghj', '2018-08-29', 'jghjghjg', 'jghjghj', 1, '223214414', '6546454', NULL, '455', NULL, 'm', '2019-08-31', 1, NULL, NULL, 12, 6, 2, '1', 0, 0, NULL, '2019-08-31 11:28:18', '2019-09-18 02:38:18'),
(12, 1, NULL, 'Md Mohosin Iqbal', NULL, NULL, NULL, 'mohosin.iqbal@gmail.com', '$2y$10$gzyjCI1Hn0f1ZqPIuxleS.43GZcVW3sar8bdmumg.GTGSJU4fp1K.', '225/1 New Elephant Road', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, NULL, 'http://amazingsoftbd.com', 'm', '2019-09-25', NULL, NULL, 11, NULL, NULL, 5, NULL, 0, 0, NULL, '2019-09-01 00:58:00', '2019-09-25 02:00:54'),
(13, 1, 12, 'Biplob', 'Mojibur Rahman', 'Baharun Nesa', 'Farzana Papia', 'waliullahbiplob786@gmail.com', '$2y$10$Y17jCoozWQAi0i5jDK65D.JSAyd0JbvznZ4vp3lnZC3Ck6CIVLGBu', 'Tungipara, Gopalgonj', 'Tungipara, Gopalgonj', 'None', 'hgjggj', 'jhgjhjg', '2018-08-01', 'ghjghjh', 'Dr. Wasi', 1, '3213423534543645645', '01921588567', NULL, '01921588567', 'http://amazingsoftbd.com', 'm', '2019-09-08', 1, '1567937380.png', NULL, 12, 6, 2, '2', 0, 0, 'VfQ726vAUyIgQKoyqu2GuJToOhp3jbveJrRVQRXk3SY1nVgFRVvNnRXwLMb6', '2019-09-07 02:16:25', '2019-09-18 02:38:41'),
(14, 1, 13, 'Murugan', NULL, NULL, NULL, 'murugan@gmail.com', '$2y$10$h4rXSVJW5bFdwiQNjAq4bunVBqiGU6n9/U/BRU8/XpVm4IHkTEJ66', 'rertert', NULL, 'None', 'jljl', 'jkl', '2020-02-20', NULL, 'Dr. Wasi', NULL, NULL, '678678678', NULL, NULL, NULL, 'm', '2020-03-05', NULL, NULL, NULL, 11, 2, 2, 'superadmin', 0, 0, NULL, '2020-03-05 06:16:41', '2020-03-05 06:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `working_days`
--

CREATE TABLE `working_days` (
  `id` int(10) UNSIGNED NOT NULL,
  `updated_by` int(11) NOT NULL,
  `day` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_status` tinyint(4) NOT NULL COMMENT '0 for holiday & 1 for working day',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_days`
--

INSERT INTO `working_days` (`id`, `updated_by`, `day`, `working_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fri', 0, '2018-04-12 06:25:16', '2019-09-01 16:08:46'),
(2, 1, 'Sat', 1, '2018-04-12 06:25:16', '2019-09-01 16:08:47'),
(3, 1, 'Sun', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(4, 1, 'Mon', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(5, 1, 'Tue', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(6, 1, 'Wed', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(7, 1, 'Thu', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_categories`
--
ALTER TABLE `award_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_types`
--
ALTER TABLE `client_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_types_client_type_unique` (`client_type`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_unique` (`department`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_designation_unique` (`designation`);

--
-- Indexes for table `employee_add_salary`
--
ALTER TABLE `employee_add_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_add_salary_allowance`
--
ALTER TABLE `employee_add_salary_allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_awards`
--
ALTER TABLE `employee_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary_allowance`
--
ALTER TABLE `employee_salary_allowance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epf`
--
ALTER TABLE `epf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expence_managements`
--
ALTER TABLE `expence_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_purposes`
--
ALTER TABLE `exp_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `increments`
--
ALTER TABLE `increments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_categories`
--
ALTER TABLE `leave_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_categories_leave_category_unique` (`leave_category`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_addition_deduction`
--
ALTER TABLE `payroll_addition_deduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_events`
--
ALTER TABLE `personal_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `salary_payments`
--
ALTER TABLE `salary_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_payment_details`
--
ALTER TABLE `salary_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_times`
--
ALTER TABLE `set_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosco`
--
ALTER TABLE `sosco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosco_insurance`
--
ALTER TABLE `sosco_insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `working_days`
--
ALTER TABLE `working_days`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `award_categories`
--
ALTER TABLE `award_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_types`
--
ALTER TABLE `client_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_add_salary`
--
ALTER TABLE `employee_add_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_add_salary_allowance`
--
ALTER TABLE `employee_add_salary_allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee_awards`
--
ALTER TABLE `employee_awards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_salary_allowance`
--
ALTER TABLE `employee_salary_allowance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `epf`
--
ALTER TABLE `epf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expence_managements`
--
ALTER TABLE `expence_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exp_purposes`
--
ALTER TABLE `exp_purposes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `increments`
--
ALTER TABLE `increments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_categories`
--
ALTER TABLE `leave_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payroll_addition_deduction`
--
ALTER TABLE `payroll_addition_deduction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_events`
--
ALTER TABLE `personal_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary_payments`
--
ALTER TABLE `salary_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salary_payment_details`
--
ALTER TABLE `salary_payment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `set_times`
--
ALTER TABLE `set_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosco`
--
ALTER TABLE `sosco`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sosco_insurance`
--
ALTER TABLE `sosco_insurance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `working_days`
--
ALTER TABLE `working_days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
