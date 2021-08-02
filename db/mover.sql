-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 09:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mover`
--

-- --------------------------------------------------------

--
-- Table structure for table `agri_food`
--

CREATE TABLE `agri_food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agri_food`
--

INSERT INTO `agri_food` (`id`, `food_name`, `articleName`, `quantity`, `weight`, `user_id`, `loading_address`, `loading_start`, `loading_end`, `loading_time_slot`, `loading_house`, `loading_floor`, `loading_elevator`, `loading_lift`, `information`, `delivery_address`, `delivery_start`, `delivery_end`, `delivery_time_slot`, `delivery_house`, `delivery_floor`, `delivery_elevator`, `delivery_lift`, `image`, `offers`, `terms`, `hired`, `created_at`, `updated_at`) VALUES
(6, 'Daron Ryan', 'Cyril Brakus', NULL, '305', 1, '322 Kutch Road', '2020-08-24', '2022-06-25', 'anytime', 'House', 'RDC', 'Yes', NULL, 'dsfgsdfgdsfg', '9835 Brook Point', '2021-07-19', '2021-07-22', 'anytime', 'House', 'RDC', 'Yes', 'Yes', '6.jpg', 'yes', NULL, 'no', '2021-07-10 08:33:23', '2021-07-10 08:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `animalName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `animalBreed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialNeeds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccinations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimationValue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movingVehicle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conveyors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boatName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `animalName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `animalBreed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialNeeds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccinations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `category`, `equipment`, `articleName`, `length`, `width`, `height`, `weight`, `quantity`, `model_name`, `vehicleName`, `make`, `model`, `estimationValue`, `movingVehicle`, `conveyors`, `boatName`, `food_name`, `dim`, `animalName`, `animalBreed`, `specialNeeds`, `vaccinations`, `others`, `user_id`, `loading_address`, `loading_start`, `loading_end`, `loading_time_slot`, `loading_house`, `loading_floor`, `loading_elevator`, `loading_lift`, `information`, `delivery_address`, `delivery_start`, `delivery_end`, `delivery_time_slot`, `delivery_house`, `delivery_floor`, `delivery_elevator`, `delivery_lift`, `image`, `offers`, `terms`, `hired`, `views`, `created_at`, `updated_at`) VALUES
(1, 'household', 'Chairs', 'heavy', '-112', '12', '12', '12', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Adabar, Mohammadpur', '2021-07-29', '2021-07-30', 'morning', 'Building', '1', 'Yes', 'Yes', 'adfasdf', 'Dhanmondi', '2021-08-11', '2021-07-16', 'morning', 'Building', '1', 'Yes', 'Yes', '1.png', 'yes', NULL, 'yes', 70, '2021-07-12 11:27:37', '2021-08-02 12:58:27'),
(2, 'vehicle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'FORD GTII', 'Ford', '1990', '1990', '1234', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Adabar, Mohammadpur', '2021-07-14', '2021-07-15', 'morning', 'House', '2', 'Yes', 'Yes', 'afasdfasdfsadf', 'Dhanmondi', '2021-07-29', '2021-07-30', 'anytime', 'House', '2', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'yes', 7, '2021-07-12 11:33:10', '2021-08-02 07:48:28'),
(3, 'vehicle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'FORD GT', 'Ford', '1235', '123', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Adabar, Mohammadpur', '2021-07-27', '2021-07-30', 'anytime', 'House', 'RDC', 'Yes', 'Yes', NULL, 'Dhanmondi', '2021-08-24', '2021-06-25', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'yes', 5, '2021-07-12 13:39:38', '2021-08-02 07:49:25'),
(4, 'vehicle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '23235 Nicolas Drive', '2021-07-30', '2021-07-31', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'wer', '593 Blick Vista', '2021-08-03', '2021-07-06', 'anytime', 'House', 'RDC', 'Yes', 'Yes', '4.png', 'yes', NULL, 'no', 0, '2021-07-25 10:40:57', '2021-07-25 10:40:58'),
(5, 'household', 'Sofa', 'Dudley Schimmel', '123', '123', '123', '123', '100', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, 'Adabar, Mohammadpur', '2021-07-29', '2021-07-31', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'sadfsadf', 'Dhanmondi', '2021-08-02', '2021-08-05', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'no', 46, '2021-07-25 11:29:44', '2021-08-02 13:50:59'),
(6, 'household', 'Sofa', 'Dudley Schimmel', '123', '123', '123', '123', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, 'Adabar, Mohammadpur', '2021-07-29', '2021-07-31', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'sadfsadf', 'Dhanmondi', '2021-08-02', '2021-08-05', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'no', 0, '2021-07-25 11:30:10', '2021-07-25 11:30:10'),
(7, 'household', 'Sofa', 'Dudley Schimmel', '123', '123', '123', '123', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, 'Adabar, Mohammadpur', '2021-07-29', '2021-07-31', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'sadfsadf', 'Dhanmondi', '2021-08-02', '2021-08-05', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'no', 0, '2021-07-25 11:30:30', '2021-07-25 11:30:30'),
(8, 'household', 'Sofa', 'Dudley Schimmel', '123', '123', '123', '123', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, 'Adabar, Mohammadpur', '2021-07-29', '2021-07-31', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'sadfsadf', 'Dhanmondi', '2021-08-02', '2021-08-05', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'no', 0, '2021-07-25 11:30:42', '2021-07-25 11:30:42'),
(9, 'household', 'Chairs', 'ads', '12', '12', '12', '12', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 7, 'Adabar, Mohammadpur', '2021-07-30', '2021-07-31', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'asdf', 'Dhanmondi', '2021-08-04', '2021-07-16', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'no', 0, '2021-07-25 11:32:37', '2021-07-25 11:32:37'),
(10, 'household', 'Sofa', 'asd', '12', '112', '12', '12', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10, 'Adabar, Mohammadpur', '2021-08-17', '2021-08-19', 'morning', 'Building', '2', 'Yes', 'No', 'asdaw', 'Dhanmondi', '2021-08-27', '2021-08-29', 'morning', 'Building', 'RDC', 'Yes', 'Yes', 'foo.jpg', 'yes', NULL, 'no', 1, '2021-08-01 17:16:26', '2021-08-01 17:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'We are Deem', 'asdfsadfsafdsdf', '4.jpg', '2021-07-03 02:24:25', '2021-07-03 02:24:25'),
(5, 'We are Deem', 'jhgfg', '5.jpg', '2021-07-03 02:25:25', '2021-07-03 02:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `biddings`
--

CREATE TABLE `biddings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `mover_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('accepted','rejected','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biddings`
--

INSERT INTO `biddings` (`id`, `announcement_id`, `mover_id`, `customer_id`, `price`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 7, 12, 'adsasd', 'accepted', '2021-07-29 17:51:50', '2021-08-01 17:47:20'),
(2, 1, 9, 7, 123, 'asdfasdf', 'rejected', '2021-08-01 15:16:38', '2021-08-01 17:47:20'),
(3, 2, 8, 7, 123, 'ads', 'rejected', '2021-08-02 06:41:05', '2021-08-02 06:41:15'),
(4, 3, 8, 7, 123, 'zxc', 'accepted', '2021-08-02 07:48:51', '2021-08-02 07:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `description_one`, `image_one`, `description_two`, `image_two`, `description_three`, `image_three`, `written_by`, `created_at`, `updated_at`) VALUES
(1, 'Freight Payment and Auditing Services', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg', '1.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg', '1_one.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg', '1_two.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg', '1_three.jpg', 1, '2021-07-03 04:01:54', '2021-07-03 04:01:54'),
(2, 'Freight Payment and Auditing Services', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg', '2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-03 04:04:07', '2021-07-03 04:04:07'),
(3, 'Freight Payment and Auditing Services', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg', '3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-07-03 04:05:38', '2021-07-03 04:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `boats_and_voluminouses`
--

CREATE TABLE `boats_and_voluminouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boatName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimationValue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conveyors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bullets`
--

CREATE TABLE `bullets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bullets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bullets`
--

INSERT INTO `bullets` (`id`, `bullets`, `created_at`, `updated_at`) VALUES
(1, 'Inscrivez-vous gratuitement et sans engagement', '2021-07-03 05:56:33', '2021-07-03 05:56:33'),
(2, 'Aucun frais d’abonnement', '2021-07-03 05:56:33', '2021-07-03 05:56:33'),
(3, 'Accès immédiat et illimité aux offres 24h/24 et 7jours/7', '2021-07-03 05:56:33', '2021-07-03 05:56:33'),
(4, 'Accéder à des milliers d’offres et à de nouvelles opportunités', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(5, 'Augmenter votre visibilité, gagnez du temps et trouvez de nouveaux clients', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(6, 'Discuter en direct et en toute transparence avec les clients par système de messagerie', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(7, 'Aucune concurrence déloyale, tous les déménageurs-transporteurs sont agrées', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(8, 'Déposez gratuitement vos devis', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(9, 'Étendez votre notoriété, gérez votre profil, mettez en avant vos anciennes', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(10, 'réalisationset partagez l’expérience de vos clients', '2021-07-03 05:56:34', '2021-07-03 05:56:34'),
(11, 'Étendez votre zone géographique d’intervention', '2021-07-03 05:56:35', '2021-07-03 06:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `callouts`
--

CREATE TABLE `callouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `callouts`
--

INSERT INTO `callouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Interested in working with Deem?', 'We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach', '1.jpg', '2021-07-03 04:56:02', '2021-07-03 04:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1.png', '2021-07-03 04:26:16', '2021-07-03 04:26:16'),
(2, '2.png', '2021-07-03 04:26:26', '2021-07-03 04:26:26'),
(3, '3.png', '2021-07-03 04:26:31', '2021-07-03 04:26:31'),
(5, '5.png', '2021-07-03 04:26:49', '2021-07-03 04:26:49'),
(6, '6.png', '2021-07-03 04:26:55', '2021-07-03 04:26:55'),
(7, '7.png', '2021-07-03 04:27:00', '2021-07-03 04:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `announcement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `announcement_id`, `created_at`, `updated_at`) VALUES
(22, 'hello', 7, 5, '2021-08-02 13:45:37', '2021-08-02 13:45:37'),
(23, 'I want to move your goods', 7, 5, '2021-08-02 13:45:48', '2021-08-02 13:45:48'),
(24, 'please accept my bid', 7, 5, '2021-08-02 13:46:03', '2021-08-02 13:46:03'),
(25, 'testing send button', 7, 5, '2021-08-02 13:51:10', '2021-08-02 13:51:10'),
(26, 'testing send message with enter', 7, 5, '2021-08-02 13:51:20', '2021-08-02 13:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_goods`
--

CREATE TABLE `commercial_goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `g_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `g_number`, `g_mail`, `s_number`, `s_mail`, `created_at`, `updated_at`) VALUES
(1, '+1 (408) 786 - 5117', 'france@deem.com', '+1 (408) 786 - 5117', 'belgium@deem.com', '2021-07-03 04:42:29', '2021-07-03 04:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `locations`, `clients`, `vehicles`, `tons`, `created_at`, `updated_at`) VALUES
(1, '15', '240', '110', '2530', '2021-07-03 03:55:20', '2021-07-03 03:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fragile_goods`
--

CREATE TABLE `fragile_goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_one` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `favicon`, `description`, `description_one`, `facebook`, `twitter`, `whatsapp`, `google`, `created_at`, `updated_at`) VALUES
(1, 'logo.jpg', 'favicon.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .', 'https://www.facebook.com', 'https://twitter.com', 'https://whatsapp.com', 'https://google.com', NULL, '2021-07-03 07:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `house_holds`
--

CREATE TABLE `house_holds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_holds`
--

INSERT INTO `house_holds` (`id`, `category`, `equipment`, `articleName`, `length`, `width`, `height`, `weight`, `quantity`, `user_id`, `loading_address`, `loading_start`, `loading_end`, `loading_time_slot`, `loading_house`, `loading_floor`, `loading_elevator`, `loading_lift`, `information`, `delivery_address`, `delivery_start`, `delivery_end`, `delivery_time_slot`, `delivery_house`, `delivery_floor`, `delivery_elevator`, `delivery_lift`, `image`, `offers`, `terms`, `hired`, `created_at`, `updated_at`) VALUES
(1, 'household', 'Sofa', 'Dudley Schimmel', '12', '12', '12', '12', '1', 7, 'Adabar, Mohammadpur', '2021-07-12', '2021-07-14', 'anytime', 'House', '3', 'Yes', 'Yes', 'wqerqwerqwer', 'Dhanmondi', '2021-07-21', '2021-07-24', 'anytime', 'House', '4', 'Yes', 'Yes', '1.png', 'yes', NULL, 'no', '2021-07-11 11:13:25', '2021-07-11 11:13:26');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_16_214934_create_sessions_table', 1),
(8, '2021_06_22_224500_add_fields_to_users_table', 2),
(9, '2021_06_23_155439_create_countries_table', 3),
(10, '2021_06_27_105049_create_banners_table', 3),
(11, '2021_06_27_135927_create_services_table', 4),
(12, '2021_06_27_184312_create_works_table', 4),
(13, '2021_06_28_053132_create_teams_table', 4),
(14, '2021_06_28_081109_create_testimonials_table', 4),
(16, '2021_06_28_140556_create_callouts_table', 4),
(17, '2021_06_28_164215_create_contacts_table', 4),
(18, '2021_06_28_184638_create_blogs_table', 4),
(19, '2021_06_29_090252_create_clients_table', 4),
(20, '2021_07_02_060936_create_registrations_table', 5),
(21, '2021_06_28_133719_create_counters_table', 6),
(22, '2021_07_03_113400_create_bullets_table', 7),
(23, '2021_07_03_123017_create_general_settings_table', 8),
(35, '2021_07_05_135721_create_house_holds_table', 9),
(36, '2021_07_05_185754_create_vehicles_table', 9),
(37, '2021_07_05_191039_create_motorcycles_and_sports_table', 9),
(38, '2021_07_05_193342_create_boats_and_voluminouses_table', 9),
(39, '2021_07_05_193516_create_agri_food_table', 9),
(40, '2021_07_05_193934_create_fragile_goods_table', 9),
(41, '2021_07_06_124636_create_packages_table', 9),
(42, '2021_07_06_125133_create_pallets_table', 9),
(43, '2021_07_06_125450_create_animals_table', 9),
(44, '2021_07_06_131103_create_commercial_goods_table', 9),
(45, '2021_07_06_131317_create_miscellaneouses_table', 9),
(46, '2021_07_12_145237_create_announcements_table', 10),
(47, '2021_07_29_232946_create_biddings_table', 11),
(48, '2021_08_02_174749_create_comments_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneouses`
--

CREATE TABLE `miscellaneouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `motorcycles_and_sports`
--

CREATE TABLE `motorcycles_and_sports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimationValue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movingVehicle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conveyors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pallets`
--

CREATE TABLE `pallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `articleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `title`, `description`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 'DEEM POUR LES DÉMÉNAGEURS', 'Vous êtes déménageur-transporteur professionnel, DEEM est un espace d’échange qui vous facilite la mise en relation avec une nouvelle clientèlepour augmenter votre chiffre d’affaire :', '1.png', '2021-07-03 05:56:33', '2021-07-03 06:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`) VALUES
(1, '2021-07-03 02:53:16', '2021-07-03 02:53:16', 'Packaging and Storage', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '1.png'),
(2, '2021-07-03 02:53:39', '2021-07-03 02:53:39', 'Truck Freight', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '2.png'),
(3, '2021-07-03 02:53:54', '2021-07-03 02:53:54', 'Ocean freight', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MhsMyhslPOq39MeJuPpOXCFNe5oyexMqq4b5rydZ', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR2FpUTB6UUtmQ3h3MkN1RXRmTXp3REVzYVpDUTFzOU5xRjFGNG9MUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbm5vdW5jZW1lbnRzLzUvZGV0YWlscz9hbm5vdW5jZW1lbnRfaWQ9NSZjb21tZW50PWhlbGxvJnVzZXJfaWQ9NyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRlZURmOHFnNWNLaEJ6azN1VXY3bVlPaEkxOXZ0dzR0SGJmcjhaRjViYnM4LjQuVWcyZE1xMiI7fQ==', 1627933880);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'John Doe', 'Founder', '2.jpg', '2021-07-03 03:19:58', '2021-07-03 03:19:58'),
(3, 'David Betchlar', 'CEO', '3.jpg', '2021-07-03 03:20:20', '2021-07-03 03:20:20'),
(4, 'Enzo Doe', 'Co founder', '4.jpg', '2021-07-03 03:20:58', '2021-07-03 03:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet,', '1.jpg', '2021-07-03 03:27:10', '2021-07-03 03:27:10'),
(2, 'Farahnaz Ahmed', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet,', '2.jpg', '2021-07-03 03:27:20', '2021-07-03 03:27:20'),
(3, 'Fariba Ahmed', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet,', '3.jpg', '2021-07-03 03:27:29', '2021-07-03 03:27:29');

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
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user','mover') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `company`, `phone`, `username`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`, `address`) VALUES
(1, 'Admin', 'admin@admin.com', '2021-06-30 02:31:11', '$2y$10$jYgN9Xgfx4h/IxYaL9VRZO8zErJPhYYZOdDAtPmatLHD1R5beujfO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 16:00:42', '2021-06-30 02:31:11', 'admin', NULL),
(2, 'Farahnaz Ahmed', 'test@admin.com', '2021-07-14 14:39:04', '$2y$10$3iieVdULss/vm7jaHFEHxepD4LHFH1gOGDu20gyYR7LXLcV67f1q.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 13:11:03', '2021-06-21 13:11:03', 'mover', NULL),
(3, 'Brooklyn Lind', 'test@mover.com', '2021-07-15 14:39:10', '$2y$10$uUbUhRQyX9KKk/9aVmBmtuP4PrfFPykbtYnWNCsoT6WaEAmqrpDWe', 'Cruickshank Inc', '781-298-2781', 'Brook.Orn3', NULL, NULL, NULL, NULL, NULL, '2021-06-26 13:07:16', '2021-06-26 13:07:16', 'user', '675 Brown Viaduct'),
(5, 'Farahnaz Ahmed', 'ahmedfarahnaz1@gmail.com', '2021-07-22 14:39:12', '$2y$10$QydZVfvb5QaGW8lMGmpTwuHxn43s8HKQ4KNTQF6ZIrgEVt1tWB4TC', 'Digital Tech', '+8801643390112', 'ahmedfarahnaz1@gmail.com', NULL, NULL, NULL, NULL, NULL, '2021-07-04 08:13:52', '2021-07-04 08:13:52', 'mover', 'Adabar 16, House 7'),
(6, 'Farahnaz Ahmed', 'chudur@budur.com', '2021-07-14 14:39:15', '$2y$10$/tRUAJ/nvEyzlSEdWHVS1.x3HJYiWpRUSrJBzbYWT24jXoVxfSq1e', 'Digital Tech', '+8801643390112', 'asvd', NULL, NULL, NULL, NULL, NULL, '2021-07-04 08:23:44', '2021-07-04 08:23:44', 'mover', 'Adabar 16, House 7'),
(7, 'Jordi Wisoky Deja.Jenkins8', 'test@test.com', '2021-07-20 14:58:24', '$2y$10$eeDf8qg5cKhBzk3uUv7mYOhI19vtw4tHbfr8ZF5bbs8.4.Ug2dMq2', 'Digital Tech', '6660405417', 'tester', NULL, NULL, NULL, NULL, NULL, '2021-07-04 08:38:49', '2021-07-04 08:38:49', 'user', '861 Jacobs Stream'),
(8, 'Mover', 'mover@mover.com', '2021-07-13 22:50:12', '$2y$10$7EpIreqytC82Q64Nf/EMFeXYkBaD2KgVqkRT0VXlCL5OBNokjHU16', 'Mover company', '123123', 'movers', NULL, NULL, NULL, NULL, NULL, '2021-07-29 16:47:36', '2021-07-29 16:47:36', 'mover', 'France'),
(9, 'Test mover', 'tester@mover.com', '2021-08-18 22:20:35', '$2y$10$LlrCJotdMhCfm9sUu16cve0sK/WomRj0EaKQPODvt7CynafkgKsNa', 'Wolf - Turner', '136353454', 'testermover', NULL, NULL, NULL, NULL, NULL, '2021-08-01 15:16:03', '2021-08-01 15:16:03', 'mover', '46058 Frami Land'),
(10, 'Customer', 'customer@customer.com', '2021-08-05 22:20:38', '$2y$10$6eEb4fnRMp2pyKFZCKoLJOPWPRWp0t.PWjv0YNBA.T7lbqXuHM6vO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-01 16:18:55', '2021-08-01 16:18:55', 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicleName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimationValue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movingVehicle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conveyors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `loading_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loading_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_elevator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_lift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `model_name`, `vehicleName`, `make`, `model`, `estimationValue`, `movingVehicle`, `conveyors`, `user_id`, `loading_address`, `loading_start`, `loading_end`, `loading_time_slot`, `loading_house`, `loading_floor`, `loading_elevator`, `loading_lift`, `information`, `delivery_address`, `delivery_start`, `delivery_end`, `delivery_time_slot`, `delivery_house`, `delivery_floor`, `delivery_elevator`, `delivery_lift`, `image`, `offers`, `terms`, `hired`, `created_at`, `updated_at`) VALUES
(1, 'Savion Marks', 'Ford', '1234', '123123', '41213123123', NULL, NULL, 7, 'Adabar, Mohammadpur', '2021-07-23', '2021-07-21', 'anytime', 'House', 'RDC', 'Yes', 'Yes', 'asdfasfdsdf', 'Dhanmondi', '2021-07-14', '2021-07-20', 'anytime', 'House', 'RDC', 'Yes', 'Yes', '1.png', 'yes', NULL, 'no', '2021-07-11 05:18:00', '2021-07-11 05:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`) VALUES
(1, '2021-07-03 03:06:44', '2021-07-03 03:06:44', 'Trusted Franchise', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '1.png'),
(2, '2021-07-03 03:10:19', '2021-07-03 03:10:19', 'Reliability & Punctuality', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '2.png'),
(3, '2021-07-03 03:10:39', '2021-07-03 03:10:39', 'Customer Support', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '3.png'),
(4, '2021-07-03 03:10:57', '2021-07-03 03:10:57', 'Consulting Services', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.', '4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agri_food`
--
ALTER TABLE `agri_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biddings`
--
ALTER TABLE `biddings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boats_and_voluminouses`
--
ALTER TABLE `boats_and_voluminouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bullets`
--
ALTER TABLE `bullets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callouts`
--
ALTER TABLE `callouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_goods`
--
ALTER TABLE `commercial_goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fragile_goods`
--
ALTER TABLE `fragile_goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_holds`
--
ALTER TABLE `house_holds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miscellaneouses`
--
ALTER TABLE `miscellaneouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorcycles_and_sports`
--
ALTER TABLE `motorcycles_and_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pallets`
--
ALTER TABLE `pallets`
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
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agri_food`
--
ALTER TABLE `agri_food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `biddings`
--
ALTER TABLE `biddings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boats_and_voluminouses`
--
ALTER TABLE `boats_and_voluminouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bullets`
--
ALTER TABLE `bullets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `callouts`
--
ALTER TABLE `callouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `commercial_goods`
--
ALTER TABLE `commercial_goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fragile_goods`
--
ALTER TABLE `fragile_goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `house_holds`
--
ALTER TABLE `house_holds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `miscellaneouses`
--
ALTER TABLE `miscellaneouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motorcycles_and_sports`
--
ALTER TABLE `motorcycles_and_sports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pallets`
--
ALTER TABLE `pallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
