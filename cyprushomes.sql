-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
-- Mysql file
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2021 at 04:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyprushomes`
--
---

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

DROP TABLE IF EXISTS `apartments`;
CREATE TABLE IF NOT EXISTS `apartments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deposit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approval` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unapproved',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Avaliable',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `user_id`, `title`, `location`, `bedroom`, `bathroom`, `price`, `deposit`, `category`, `type`, `details`, `approval`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, '2', '1 + 1 Apartment for Rent', 'Terminal North Cyprus', 1, 1, '₤120', '1', '1 Bedroom flat', 'rent', 'This is a 1 bedroom and palour apartment located at Terminal that is fully furnished with AC\'s and fans. Also it is located very close the busstop.', 'Approved', 'Rented', '1628325647.jpg', '2021-08-07 07:40:47', '2021-08-09 08:50:06'),
(2, '2', '1 + 1 Apartment for Rent', 'Lefkosa In Digmen Area', 1, 1, '€130', '1', '1 Bedroom flat', 'rent', 'This is a 1 bedroom and palour apartment located In Digmen Area that is fully furnished. Also it is located few minutes to the busstop.', 'Approved', 'Rented', '1628326291.jpg', '2021-08-07 07:51:31', '2021-08-09 08:50:37'),
(3, '2', 'Studio Apartment for rent', 'Hamitkoy, North cyprus', 1, 1, '1,350TL', '1', 'Studio Room', 'rent', 'This is a fully furnished Studio apartment located In Hamitkoy with all necessary things . Also it is located few minutes from the busstop.', 'Approved', 'Avaliable', '1628326701.jpg', '2021-08-07 07:58:21', '2021-08-09 08:46:39'),
(4, '2', '2 + 1 Apartment for rent', 'Yenileman Girne North Cyprus', 2, 1, '2500TL', '1', '2 Bedroom flat', 'rent', 'A 2 bedroom apartment located in yenileman which is fully furnished close to black penny cafe.', 'Approved', 'Avaliable', '1628756803.jpg', '2021-08-12 07:26:43', '2021-08-12 08:11:32'),
(5, '2', '1 + 1 Apartment for Rent', 'Girne north cyprus', 1, 1, '1800TL', '1', '1 Bedroom flat', 'rent', 'A fully furnished and spacious 1 bedroom apartment that is fully furnished located in front of oGuz parent middle school', 'Approved', 'Avaliable', '1628757245.jpg', '2021-08-12 07:34:05', '2021-08-12 08:11:41'),
(6, '2', '1 + 1 Apartment for Rent', 'Nusmar girne North cyprus', 1, 1, '1400TL', '2', '1 Bedroom flat', 'rent', 'A room apartment for rent located around nusmar with dress table and full dress mirror.', 'Approved', 'Avaliable', '1628757709.jpg', '2021-08-12 07:41:49', '2021-08-12 08:11:49'),
(7, '2', '1 + 1 Apartment for Rent', 'Girne zeytinik bolgesinde north cyprus', 1, 1, '1700TL', '1', '1 Bedroom flat', 'rent', 'An apartment in Girne zeytinik bolgesinde north cyprus which is fully furnished.', 'Approved', 'Avaliable', '1628758276.jpg', '2021-08-12 07:51:17', '2021-08-12 08:11:59'),
(8, '2', '2 + 1 Apartment for rent', 'Hasploat, North cyprus', 2, 1, '1,850TL', '1', '2 Bedroom flat', 'rent', 'A fully furnished apartment that is located in haspolat with easy access to bus stop.', 'Approved', 'Avaliable', '1628758567.jpg', '2021-08-12 07:56:07', '2021-08-12 08:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `apartment_extras`
--

DROP TABLE IF EXISTS `apartment_extras`;
CREATE TABLE IF NOT EXISTS `apartment_extras` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `apartment_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `apartment_extras`
--

INSERT INTO `apartment_extras` (`id`, `apartment_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '20210803_104552.jpg', '2021-08-07 07:40:47', '2021-08-07 07:40:47'),
(2, '1', '20210803_104617.jpg', '2021-08-07 07:40:47', '2021-08-07 07:40:47'),
(3, '1', '20210803_104649.jpg', '2021-08-07 07:40:47', '2021-08-07 07:40:47'),
(4, '1', '20210803_105143.jpg', '2021-08-07 07:40:47', '2021-08-07 07:40:47'),
(5, '1', '20210803_105211.jpg', '2021-08-07 07:40:47', '2021-08-07 07:40:47'),
(6, '1', '20210803_105236.jpg', '2021-08-07 07:40:47', '2021-08-07 07:40:47'),
(7, '2', '20210803_105534.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(8, '2', '20210803_105710.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(9, '2', '20210803_105756.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(10, '2', '20210803_110130.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(11, '2', '20210803_110203.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(12, '2', '20210803_110229.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(13, '2', '20210803_110318.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(14, '2', '20210803_110343.jpg', '2021-08-07 07:51:31', '2021-08-07 07:51:31'),
(15, '3', '20210803_110939.jpg', '2021-08-07 07:58:21', '2021-08-07 07:58:21'),
(16, '3', '20210803_111000.jpg', '2021-08-07 07:58:21', '2021-08-07 07:58:21'),
(17, '3', '20210803_111046.jpg', '2021-08-07 07:58:21', '2021-08-07 07:58:21'),
(18, '3', '20210803_111109.jpg', '2021-08-07 07:58:21', '2021-08-07 07:58:21'),
(19, '4', '20210811_155039.jpg', '2021-08-12 07:26:43', '2021-08-12 07:26:43'),
(20, '4', '20210811_155230.jpg', '2021-08-12 07:26:47', '2021-08-12 07:26:47'),
(21, '4', '20210811_155321.jpg', '2021-08-12 07:26:47', '2021-08-12 07:26:47'),
(22, '4', '20210811_155507.jpg', '2021-08-12 07:26:47', '2021-08-12 07:26:47'),
(23, '4', '20210811_155549.jpg', '2021-08-12 07:26:47', '2021-08-12 07:26:47'),
(24, '4', '20210811_155625.jpg', '2021-08-12 07:26:47', '2021-08-12 07:26:47'),
(25, '4', '20210811_155703.jpg', '2021-08-12 07:26:47', '2021-08-12 07:26:47'),
(26, '5', '20210811_160634.jpg', '2021-08-12 07:34:05', '2021-08-12 07:34:05'),
(27, '5', '20210811_160924.jpg', '2021-08-12 07:34:05', '2021-08-12 07:34:05'),
(28, '5', '20210811_161038.jpg', '2021-08-12 07:34:05', '2021-08-12 07:34:05'),
(29, '5', '20210811_161110.jpg', '2021-08-12 07:34:05', '2021-08-12 07:34:05'),
(30, '5', '20210811_161219.jpg', '2021-08-12 07:34:05', '2021-08-12 07:34:05'),
(31, '5', '20210811_161249.jpg', '2021-08-12 07:34:05', '2021-08-12 07:34:05'),
(32, '6', '20210811_161933.jpg', '2021-08-12 07:41:49', '2021-08-12 07:41:49'),
(33, '6', '20210811_162038.jpg', '2021-08-12 07:41:49', '2021-08-12 07:41:49'),
(34, '6', '20210811_162105.jpg', '2021-08-12 07:41:49', '2021-08-12 07:41:49'),
(35, '6', '20210811_162119.jpg', '2021-08-12 07:41:49', '2021-08-12 07:41:49'),
(36, '7', '20210811_163756.jpg', '2021-08-12 07:51:17', '2021-08-12 07:51:17'),
(37, '7', '20210811_163629.jpg', '2021-08-12 07:51:17', '2021-08-12 07:51:17'),
(38, '7', '20210811_163718.jpg', '2021-08-12 07:51:17', '2021-08-12 07:51:17'),
(39, '7', '20210811_163737.jpg', '2021-08-12 07:51:17', '2021-08-12 07:51:17'),
(40, '8', '20210811_165230.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(41, '8', '20210811_165259.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(42, '8', '20210811_165332.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(43, '8', '20210811_165355.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(44, '8', '20210811_165425.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(45, '8', '20210811_165443.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(46, '8', '20210811_165503.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07'),
(47, '8', '20210811_165534.jpg', '2021-08-12 07:56:07', '2021-08-12 07:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `apartment_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `apartment_id`, `user_id`, `fullname`, `email`, `contact`, `occupant`, `message`, `created_at`, `updated_at`) VALUES
(1, '2', '2', 'Joseph ADEPOJU', 'joe@gmail.com', '+2348182480720', '2', 'I wish to make booking to inspect this house', '2021-08-07 11:38:47', '2021-08-07 11:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Studio Room', '2021-08-02 14:06:39', '2021-08-02 14:06:39'),
(2, '1 Bedroom flat', '2021-08-02 14:06:46', '2021-08-02 14:06:46'),
(3, '2 Bedroom flat', '2021-08-02 14:06:56', '2021-08-02 14:06:56'),
(4, '3 Bedroom flat', '2021-08-02 14:07:01', '2021-08-02 14:07:01'),
(5, 'Shareable room', '2021-08-02 14:07:20', '2021-08-02 14:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE IF NOT EXISTS `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `apartment_id`, `created_at`, `updated_at`) VALUES
(3, 4, 3, '2021-08-09 13:51:08', '2021-08-09 13:51:08'),
(4, 4, 2, '2021-08-09 13:52:07', '2021-08-09 13:52:07'),
(5, 4, 1, '2021-08-09 13:52:18', '2021-08-09 13:52:18'),
(6, 2, 6, '2021-08-12 08:34:46', '2021-08-12 08:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, '1627890096.png', '2021-08-02 06:41:36', '2021-08-02 06:41:36'),
(3, '1627890606.jpg', '2021-08-02 06:50:06', '2021-08-02 06:50:06'),
(4, '1627890674.jpg', '2021-08-02 06:51:14', '2021-08-02 06:51:14'),
(5, '1627890698.jpg', '2021-08-02 06:51:38', '2021-08-02 06:51:38'),
(6, '1627890772.jpg', '2021-08-02 06:52:52', '2021-08-02 06:52:52'),
(7, '1627890993.jpg', '2021-08-02 06:56:33', '2021-08-02 06:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 4),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_28_193947_laratrust_setup_tables', 2),
(5, '2021_08_01_153521_create_galleries_table', 3),
(7, '2021_08_02_092412_create_categories_table', 5),
(9, '2021_08_02_095335_create_categories_table', 6),
(31, '2021_08_02_162844_create_bookings_table', 8),
(27, '2021_08_02_144442_create_apartments_table', 7),
(28, '2021_08_02_144551_create_apartment_extras_table', 7),
(32, '2021_08_09_134603_create_favourites_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-07-28 18:45:43', '2021-07-28 18:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(2, 'agent', 'Agent', 'Agent', '2021-07-28 18:45:43', '2021-07-28 18:45:43'),
(3, 'user', 'User', 'User', '2021-07-28 18:45:43', '2021-07-28 18:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 4, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 'admin', '$2y$10$/Yiax26p78hfpkrz0LrSA.LXwIeGxoMQUo1rG5VQIGNsrBX3e4eXq', NULL, '2021-08-02 08:04:23', '2021-08-09 11:03:58'),
(2, 'Joe Hardey', 'hardey97@gmail.com', NULL, 'agent', '$2y$10$GiXg.KkEjZdEIme7SHn97O8A5IIXq82453dzfzEZhHHIYWgc1rx2.', NULL, '2021-08-02 08:06:05', '2021-08-02 08:06:05'),
(4, 'Matthew Jack', 'matthew023@gmail.com', NULL, 'user', '$2y$10$etiykO9zkSANSdt0C060NuMjikZGVkyYnn4zRAi4w0kuaFMWA3kFm', NULL, '2021-08-02 08:14:00', '2021-08-02 08:14:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
