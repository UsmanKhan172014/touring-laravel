-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 03:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelholicfyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `slug`, `title`, `thumbnail`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'a-tour-to-lahore-1', 'A Tour To Lahore', 'Admin--Create Blog_1623755925.png', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', 'Active', '2021-06-15 06:18:46', '2021-06-15 06:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `blog_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trxid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_tour`
--

CREATE TABLE `book_tour` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trxid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_tour`
--

INSERT INTO `book_tour` (`id`, `user_id`, `tour_id`, `number`, `seats`, `adults`, `children`, `phone`, `status`, `payment_type`, `payment_status`, `trxid`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '200001', 3, 2, 1, '03160752005', 'Reserved', NULL, 'Under Review', '64646545646', '2021-06-15 07:09:01', '2021-06-15 07:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `book_vehicle`
--

CREATE TABLE `book_vehicle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `departure_city` int(10) UNSIGNED NOT NULL,
  `destination_city` int(10) UNSIGNED NOT NULL,
  `departure_date` timestamp NULL DEFAULT NULL,
  `returning_date` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trxid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories_for_blog`
--

CREATE TABLE `categories_for_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_for_blog`
--

INSERT INTO `categories_for_blog` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'food', NULL, '2021-06-15 06:07:52', '2021-06-15 06:07:52'),
(2, 'Hotel', 'hotel', NULL, '2021-06-15 06:07:52', '2021-06-15 06:07:52'),
(3, 'Vehicle', 'vehicle', NULL, '2021-06-15 06:07:52', '2021-06-15 06:07:52'),
(4, 'Tour', 'tour', NULL, '2021-06-15 06:07:52', '2021-06-15 06:07:52'),
(5, 'Restaurant', 'restaurant', NULL, '2021-06-15 06:07:52', '2021-06-15 06:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `province`, `created_at`, `updated_at`) VALUES
(1, 'Karachi', 'Sindh', NULL, NULL),
(2, 'Lahore', 'Punjab', NULL, NULL),
(3, 'Faisalabad', 'Punjab', NULL, NULL),
(4, 'Rawalpindi', 'Punjab', NULL, NULL),
(5, 'Gujranwala', 'Punjab', NULL, NULL),
(6, 'Peshawar', 'KPK', NULL, NULL),
(7, 'Multan', 'Punjab', NULL, NULL),
(8, 'Hyderabad', 'Sindh', NULL, NULL),
(9, 'Islamabad', 'Islamabad', NULL, NULL),
(10, 'Quetta', 'Balochistan', NULL, NULL),
(11, 'Bahawalpur', 'Punjab', NULL, NULL),
(12, 'Sargodha', 'Punjab', NULL, NULL),
(13, 'Sialkot', 'Punjab', NULL, NULL),
(14, 'Sukkur', 'Sindh', NULL, NULL),
(15, 'Larkana', 'Sindh', NULL, NULL),
(16, 'Sheikhupura', 'Punjab', NULL, NULL),
(17, 'Rahim Yar Khan', 'Punjab', NULL, NULL),
(18, 'Jhang', 'Punjab', NULL, NULL),
(19, 'Dera Ghazi Khan', 'Punjab', NULL, NULL),
(20, 'Gujrat', 'Punjab', NULL, NULL),
(21, 'Sahiwal', 'Punjab', NULL, NULL),
(22, 'Wah Cantonment', 'Punjab', NULL, NULL),
(23, 'Mardan', 'KPK', NULL, NULL),
(24, 'Kasur', 'Punjab', NULL, NULL),
(25, 'Okara', 'Punjab', NULL, NULL),
(29, 'Mingora', 'KPK', NULL, NULL),
(30, 'Nawabshah', 'Sindh', NULL, NULL),
(31, 'Chiniot', 'Punjab', NULL, NULL),
(32, 'Kotri', 'Sindh', NULL, NULL),
(33, 'Kamoke', 'Punjab', NULL, NULL),
(34, 'Hafizabad', 'Punjab', NULL, NULL),
(35, 'Sadiqabad', 'Punjab', NULL, NULL),
(36, 'Mirpur Khas', 'Sindh', NULL, NULL),
(37, 'Burewala', 'Punjab', NULL, NULL),
(38, 'Kohat', 'KPK', NULL, NULL),
(39, 'Khanewal', 'Punjab', NULL, NULL),
(40, 'Dera Ismail Khan', 'KPK', NULL, NULL),
(41, 'Turbat', 'Balochistan', NULL, NULL),
(42, 'Muzaffargarh', 'Punjab', NULL, NULL),
(43, 'Abbotabad', 'KPK', NULL, NULL),
(44, 'Mandi Bahauddin', 'Punjab', NULL, NULL),
(45, 'Shikarpur', 'Sindh', NULL, NULL),
(46, 'Jacobabad', 'Sindh', NULL, NULL),
(47, 'Jhelum', 'Punjab', NULL, NULL),
(48, 'Khanpur', 'Punjab', NULL, NULL),
(49, 'Khairpur', 'Sindh', NULL, NULL),
(50, 'Khuzdar', 'Balochistan', NULL, NULL),
(51, 'Pakpattan', 'Punjab', NULL, NULL),
(52, 'Hub', 'Balochistan', NULL, NULL),
(53, 'Daska', 'Punjab', NULL, NULL),
(54, 'Gojra', 'Punjab', NULL, NULL),
(55, 'Dadu', 'Sindh', NULL, NULL),
(56, 'Muridke', 'Punjab', NULL, NULL),
(57, 'Bahawalnagar', 'Punjab', NULL, NULL),
(58, 'Samundri', 'Punjab', NULL, NULL),
(59, 'Tandi Allahyar', 'Sindh', NULL, NULL),
(60, 'Tando Adam', 'Sindh', NULL, NULL),
(61, 'Jaranwala', 'Punjab', NULL, NULL),
(62, 'Chishtian', 'Punjab', NULL, NULL),
(63, 'Attock', 'Punjab', NULL, NULL),
(64, 'Vehari', 'Punjab', NULL, NULL),
(65, 'Kot Abdul Malik', 'Punjab', NULL, NULL),
(66, 'Ferozwala', 'Punjab', NULL, NULL),
(67, 'Chakwal', 'Punjab', NULL, NULL),
(68, 'Gujranwala Cantonment', 'Punjab', NULL, NULL),
(69, 'Kamalia', 'Punjab', NULL, NULL),
(70, 'Umerkot', 'Sindh', NULL, NULL),
(72, 'Ahmedpur East', 'Punjab', NULL, NULL),
(73, 'Kot Addu', 'Punjab', NULL, NULL),
(74, 'Wazirabad', 'Punjab', NULL, NULL),
(75, 'Mansehra', 'KPK', NULL, NULL),
(76, 'Layyah', 'Punjab', NULL, NULL),
(77, 'Swabi', 'KPK', NULL, NULL),
(78, 'Chaman', 'Balochistan', NULL, NULL),
(79, 'Taxila', 'Punjab', NULL, NULL),
(80, 'Nowshera', 'KPK', NULL, NULL),
(81, 'Khushab', 'Punjab', NULL, NULL),
(82, 'Shahdadkot', 'Sindh', NULL, NULL),
(83, 'Mianwali', 'Punjab', NULL, NULL),
(84, 'Kabal', 'KPK', NULL, NULL),
(85, 'Lodhran', 'Punjab', NULL, NULL),
(86, 'Hasilpur', 'Punjab', NULL, NULL),
(87, 'Charsadda', 'KPK', NULL, NULL),
(88, 'Bhakkar', 'Punjab', NULL, NULL),
(89, 'Badin', 'Sindh', NULL, NULL),
(90, 'Arif Wala', 'Punjab', NULL, NULL),
(91, 'Ghotki', 'Sindh', NULL, NULL),
(92, 'Sambrial', 'Punjab', NULL, NULL),
(93, 'Jatoi', 'Punjab', NULL, NULL),
(94, 'Haroonabad', 'Punjab', NULL, NULL),
(95, 'Daharki', 'Sindh', NULL, NULL),
(96, 'Narowal', 'Punjab', NULL, NULL),
(97, 'Tando Muhammad Khan', 'Sindh', NULL, NULL),
(98, 'Kamber Ali Khan', 'Sindh', NULL, NULL),
(99, 'Mirpur Mathelo', 'Sindh', NULL, NULL),
(100, 'Kandhkot', 'Sindh', NULL, NULL),
(101, 'Bhalwal', 'Punjab', NULL, NULL),
(102, 'Muzaffarabad', 'Kashmir', NULL, NULL),
(103, 'Hattian Bala', 'Kashmir', NULL, NULL),
(104, 'Neelam Valley', 'Kashmir', NULL, NULL),
(105, 'Mirpur', 'Kashmir', NULL, NULL),
(106, 'Bhimber', 'Kashmir', NULL, NULL),
(107, 'Kotli', 'Kashmir', NULL, NULL),
(108, 'Poonch', 'Kashmir', NULL, NULL),
(109, 'Bagh', 'Kashmir', NULL, NULL),
(110, 'Haveli', 'Kashmir', NULL, NULL),
(111, 'Sudhnati', 'Kashmir', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `city` int(10) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `user_id`, `slug`, `name`, `description`, `total_rooms`, `available_rooms`, `city`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'nishat-hotel-1', 'Nishat Hotel', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, 0, 2, 'Admin--Create Blog_1623757618.png', 'Requested', '2021-06-15 06:46:58', '2021-06-15 06:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(119, '2014_10_12_000000_create_users_table', 1),
(120, '2014_10_12_100000_create_password_resets_table', 1),
(121, '2019_08_19_000000_create_failed_jobs_table', 1),
(122, '2020_06_26_130915_create_roles_table', 1),
(123, '2020_06_26_131211_create_role_user_table', 1),
(124, '2020_06_27_062107_create_user_profile', 1),
(125, '2020_06_27_143730_create_blogs_table', 1),
(126, '2020_06_27_153217_create_categories_blog_table', 1),
(127, '2020_06_27_153300_create_blog_category_table', 1),
(128, '2020_06_28_092712_create_images_table', 1),
(129, '2020_06_30_110112_create_comment_table', 1),
(130, '2020_07_04_064610_create_tour_table', 1),
(131, '2020_07_08_095241_create_tour_days_table', 1),
(132, '2020_07_09_095350_create_tags_table', 1),
(133, '2020_07_10_044041_create_tags_tour_table', 1),
(134, '2020_07_16_061753_create_tags_blog_table', 1),
(135, '2020_07_18_081528_create_book_tour_table', 1),
(136, '2020_09_27_041715_create_hotels_table', 1),
(137, '2020_09_28_013313_create_tags_hotel_table', 1),
(138, '2020_10_07_175741_create_rooms_table', 1),
(139, '2020_10_15_173251_create_facilities_table', 1),
(140, '2020_10_15_173917_create_rooms_facilities_table', 1),
(141, '2020_10_19_195304_create_book_hotel_table', 1),
(142, '2020_12_04_152130_create_vehicles_table', 1),
(143, '2020_12_07_160751_create_tags_vehicle_table', 1),
(144, '2021_02_01_164836_create_book_vehicle', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-06-15 06:07:53', '2021-06-15 06:07:53'),
(2, 'Standard', '2021-06-15 06:07:53', '2021-06-15 06:07:53'),
(3, 'Tour Vendor', '2021-06-15 06:07:53', '2021-06-15 06:07:53'),
(4, 'Hotel Vendor', '2021-06-15 06:07:53', '2021-06-15 06:07:53'),
(5, 'Vehicle Vendor', '2021-06-15 06:07:53', '2021-06-15 06:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms_facilities`
--

CREATE TABLE `rooms_facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `facility_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tour', 'tour', '2021-06-15 06:18:46', '2021-06-15 06:18:46'),
(2, 'hotel', 'hotel', '2021-06-15 06:18:46', '2021-06-15 06:18:46'),
(3, 'Corolla', 'corolla', '2021-06-15 06:44:26', '2021-06-15 06:44:26'),
(4, 'Lahore', 'lahore', '2021-06-15 06:46:58', '2021-06-15 06:46:58'),
(5, 'Five Star', 'five-star', '2021-06-15 06:46:58', '2021-06-15 06:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `tags_blog`
--

CREATE TABLE `tags_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags_blog`
--

INSERT INTO `tags_blog` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-06-15 06:18:46', '2021-06-15 06:18:46'),
(2, 1, 2, '2021-06-15 06:18:46', '2021-06-15 06:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `tags_hotel`
--

CREATE TABLE `tags_hotel` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotel_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags_hotel`
--

INSERT INTO `tags_hotel` (`id`, `hotel_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2021-06-15 06:46:58', '2021-06-15 06:46:58'),
(2, 1, 5, '2021-06-15 06:46:58', '2021-06-15 06:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `tags_tour`
--

CREATE TABLE `tags_tour` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags_vehicle`
--

CREATE TABLE `tags_vehicle` (
  `id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags_vehicle`
--

INSERT INTO `tags_vehicle` (`id`, `vehicle_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2021-06-15 06:44:26', '2021-06-15 06:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_city` int(10) UNSIGNED NOT NULL,
  `destination_city` int(10) UNSIGNED NOT NULL,
  `departure_date` timestamp NULL DEFAULT NULL,
  `returning_date` timestamp NULL DEFAULT NULL,
  `nights_to_stay` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `remaining_seats` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `user_id`, `slug`, `name`, `description`, `departure_city`, `destination_city`, `departure_date`, `returning_date`, `nights_to_stay`, `total_seats`, `remaining_seats`, `price`, `thumbnail`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'lahore-to-multan-1', 'Lahore to Multan', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 2, 7, '2021-06-17 11:29:00', '2021-06-21 11:31:00', 2, 32, 32, 5400, 'download_1623758188.jfif', 'Active', '2021-06-15 06:29:15', '2021-06-15 06:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tour_days`
--

CREATE TABLE `tour_days` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_days`
--

INSERT INTO `tour_days` (`id`, `tour_id`, `number`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2021-06-15 07:00:30', '2021-06-15 07:00:30'),
(2, 1, 2, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2021-06-15 07:00:30', '2021-06-15 07:00:30'),
(3, 1, 3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2021-06-15 07:00:30', '2021-06-15 07:00:30'),
(4, 1, 4, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2021-06-15 07:00:30', '2021-06-15 07:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `force_logout` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `force_logout`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$7gfsjdbdsZVuwuXnWiF7y.8pl5RxdQp1/Y8e8q11zqsVUVZY6zu4y', 0, NULL, NULL, '2021-06-15 06:07:53', '2021-06-15 06:07:53'),
(2, 'bilal', 'bilal', 'bilal@gmail.com', NULL, '$2y$10$876fNhKieQgPRppCe5ZpJOOWf2C9Nui4gle.iVE/1VT/K4bkCxmOK', 0, NULL, NULL, '2021-06-15 06:07:53', '2021-06-15 06:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `image`, `address`, `gender`, `phone`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'head-659652_960_720_1623758324.webp', NULL, NULL, NULL, NULL, '2021-06-15 06:07:53', '2021-06-15 06:58:44'),
(2, 2, NULL, NULL, NULL, NULL, NULL, '2021-06-15 06:07:53', '2021-06-15 06:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` int(11) NOT NULL,
  `vinumber` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `city` int(10) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `user_id`, `slug`, `name`, `description`, `year`, `make`, `model`, `color`, `condition`, `mileage`, `vinumber`, `price`, `city`, `thumbnail`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'corolla-gli-1', 'Corolla GLI', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2014', 'Corolla', 'GLI', 'White', '8', 648614, '5497843564568', 5000, 2, 'Admin--Create Blog_1623757466.png', 'Requested', NULL, '2021-06-15 06:44:26', '2021-06-15 06:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_hotel_number_unique` (`number`),
  ADD KEY `book_hotel_user_id_foreign` (`user_id`),
  ADD KEY `book_hotel_hotel_id_foreign` (`hotel_id`),
  ADD KEY `book_hotel_room_id_foreign` (`room_id`);

--
-- Indexes for table `book_tour`
--
ALTER TABLE `book_tour`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_tour_number_unique` (`number`),
  ADD KEY `book_tour_user_id_foreign` (`user_id`),
  ADD KEY `book_tour_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_vehicle_number_unique` (`number`),
  ADD KEY `book_vehicle_user_id_foreign` (`user_id`),
  ADD KEY `book_vehicle_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `book_vehicle_departure_city_foreign` (`departure_city`),
  ADD KEY `book_vehicle_destination_city_foreign` (`destination_city`);

--
-- Indexes for table `categories_for_blog`
--
ALTER TABLE `categories_for_blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_for_blog_name_unique` (`name`),
  ADD UNIQUE KEY `categories_for_blog_slug_unique` (`slug`),
  ADD KEY `categories_for_blog_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_name_unique` (`name`),
  ADD UNIQUE KEY `facilities_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotels_slug_unique` (`slug`),
  ADD KEY `hotels_user_id_foreign` (`user_id`),
  ADD KEY `hotels_city_foreign` (`city`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`),
  ADD KEY `images_user_id_foreign` (`user_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_slug_unique` (`slug`),
  ADD KEY `rooms_hotel_id_foreign` (`hotel_id`);

--
-- Indexes for table `rooms_facilities`
--
ALTER TABLE `rooms_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_facilities_room_id_foreign` (`room_id`),
  ADD KEY `rooms_facilities_facility_id_foreign` (`facility_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tags_blog`
--
ALTER TABLE `tags_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_blog_blog_id_foreign` (`blog_id`),
  ADD KEY `tags_blog_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags_hotel`
--
ALTER TABLE `tags_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_hotel_hotel_id_foreign` (`hotel_id`),
  ADD KEY `tags_hotel_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags_tour`
--
ALTER TABLE `tags_tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_tour_tour_id_foreign` (`tour_id`),
  ADD KEY `tags_tour_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags_vehicle`
--
ALTER TABLE `tags_vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_vehicle_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `tags_vehicle_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tours_slug_unique` (`slug`),
  ADD KEY `tours_user_id_foreign` (`user_id`),
  ADD KEY `tours_departure_city_foreign` (`departure_city`),
  ADD KEY `tours_destination_city_foreign` (`destination_city`);

--
-- Indexes for table `tour_days`
--
ALTER TABLE `tour_days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_days_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_profile_user_id_unique` (`user_id`),
  ADD KEY `user_profile_city_id_foreign` (`city_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_slug_unique` (`slug`),
  ADD KEY `vehicles_user_id_foreign` (`user_id`),
  ADD KEY `vehicles_city_foreign` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_tour`
--
ALTER TABLE `book_tour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_for_blog`
--
ALTER TABLE `categories_for_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms_facilities`
--
ALTER TABLE `rooms_facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags_blog`
--
ALTER TABLE `tags_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags_hotel`
--
ALTER TABLE `tags_hotel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags_tour`
--
ALTER TABLE `tags_tour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags_vehicle`
--
ALTER TABLE `tags_vehicle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_days`
--
ALTER TABLE `tour_days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD CONSTRAINT `blog_category_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `blog_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories_for_blog` (`id`);

--
-- Constraints for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD CONSTRAINT `book_hotel_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `book_hotel_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `book_hotel_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `book_tour`
--
ALTER TABLE `book_tour`
  ADD CONSTRAINT `book_tour_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`),
  ADD CONSTRAINT `book_tour_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  ADD CONSTRAINT `book_vehicle_departure_city_foreign` FOREIGN KEY (`departure_city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `book_vehicle_destination_city_foreign` FOREIGN KEY (`destination_city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `book_vehicle_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `book_vehicle_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `categories_for_blog`
--
ALTER TABLE `categories_for_blog`
  ADD CONSTRAINT `categories_for_blog_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories_for_blog` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_city_foreign` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `hotels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`);

--
-- Constraints for table `rooms_facilities`
--
ALTER TABLE `rooms_facilities`
  ADD CONSTRAINT `rooms_facilities_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`),
  ADD CONSTRAINT `rooms_facilities_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `tags_blog`
--
ALTER TABLE `tags_blog`
  ADD CONSTRAINT `tags_blog_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `tags_blog_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `tags_hotel`
--
ALTER TABLE `tags_hotel`
  ADD CONSTRAINT `tags_hotel_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `tags_hotel_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `tags_tour`
--
ALTER TABLE `tags_tour`
  ADD CONSTRAINT `tags_tour_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `tags_tour_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Constraints for table `tags_vehicle`
--
ALTER TABLE `tags_vehicle`
  ADD CONSTRAINT `tags_vehicle_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `tags_vehicle_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_departure_city_foreign` FOREIGN KEY (`departure_city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `tours_destination_city_foreign` FOREIGN KEY (`destination_city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `tours_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tour_days`
--
ALTER TABLE `tour_days`
  ADD CONSTRAINT `tour_days_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `user_profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_city_foreign` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `vehicles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
