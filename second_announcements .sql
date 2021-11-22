-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 03:32 PM
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
-- Table structure for table `second_announcements`
--

CREATE TABLE `second_announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `individual_goods_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `individual_goods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_type_depart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_type_arrivee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_depart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_arrivee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ascenseur_depart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ascenseur_arrivee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_depart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_arrivee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load_unload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `need_tailgate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `need_truck` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rolling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `depart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrivee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Location not found',
  `loading_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delevary_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informations` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hired` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `second_announcements`
--

INSERT INTO `second_announcements` (`id`, `category`, `volume`, `list`, `individual_goods_status`, `individual_goods`, `place_type_depart`, `place_type_arrivee`, `floor_depart`, `floor_arrivee`, `ascenseur_depart`, `ascenseur_arrivee`, `access_depart`, `access_arrivee`, `services`, `help`, `article_name`, `height`, `width`, `length`, `weight`, `quantity`, `size`, `load_unload`, `need_tailgate`, `need_truck`, `brand_model`, `rolling`, `user_id`, `depart`, `arrivee`, `distance`, `loading_date`, `delevary_date`, `informations`, `name`, `email`, `country_code`, `phone`, `pseudo`, `image`, `password`, `terms`, `offers`, `hired`, `views`, `created_at`, `updated_at`) VALUES
(1, 'déménagement', 'fdf', 'fdfd', NULL, 'no', 'appartement', NULL, '1', NULL, 'no', NULL, 'no', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'mohakhali', 'banani', '3.9 km', '2021-11-03', '2021-11-25', 'fdfdf', 'Admin', 'admin@admin.com', '355', '123 456 7890', 'fdfd', NULL, '1111', 'yes', 'yes', 'no', 122, '2021-11-09 08:49:04', '2021-11-17 08:54:41'),
(2, 'déménagement', 'This is volume', 'list of component', NULL, 'yes', 'maison', NULL, '3', NULL, 'yes', NULL, 'yes', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'airport', 'Abdullahpur Hwy', '4.4 km', '2010-01-13', '1970-03-25', 'Reprehenderit corrup', 'Xavier Duke', 'sypice@mailinator.com', '93', '+1 (146) 262-3634', '09-Jul-2006', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 29, '2021-11-10 03:09:56', '2021-11-17 07:12:58'),
(3, 'chauffeur', 'Dolores non magni do', 'Dolores quia neque h', NULL, 'no', 'garde-meuble', NULL, '4', NULL, 'yes', NULL, 'yes', NULL, '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'adabor', 'mohammadpur', '1.5 km', '2010-11-23', '2018-02-25', 'Id aut consequatur', 'Vernon Atkinson', 'zexuja@mailinator.com', '93', '+1 (105) 566-9531', '26-Oct-1996', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 52, '2021-11-10 03:12:19', '2021-11-17 07:11:50'),
(4, 'meubles', '', '', NULL, '', 'garde-meuble', NULL, '4', NULL, 'yes', NULL, 'no', NULL, '', 'yes', 'Jerome York', 'Eiusmod neque doloru', 'Eum consequatur fug', 'Velit dolor ratione', 'Maxime nesciunt bea', '586', '', '', '', '', '', '', 1, 'mirpur', 'mohakhali', 'Location not found', '1983-09-18', '1985-03-05', 'Dolor ad fugiat vol', 'Ezekiel Mccarty', 'quxycy@mailinator.com', '93', '+1 (633) 466-9755', '01-Jun-1990', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 11, '2021-11-10 03:13:13', '2021-11-17 06:59:24'),
(5, 'électroménager', '', '', NULL, '', 'commercial', NULL, '4', NULL, 'yes', NULL, 'yes', NULL, '', 'no', 'Kylynn Howell', 'Ab enim sequi recusa', 'Perferendis Nam nisi', 'Aute at voluptatum c', 'Ullam veniam natus', '873', '', '', '', '', '', '', 1, 'airport', 'kakrail', 'Location not found', '2003-05-11', '1991-12-01', 'Qui qui quas assumen', 'Alika Buck', 'qorigo@mailinator.com', '93', '+1 (957) 541-9507', '06-Nov-2010', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 12, '2021-11-10 03:14:07', '2021-11-17 06:53:44'),
(6, 'colis', '', '', NULL, '', 'garde-meuble', NULL, '4', NULL, 'no', NULL, 'yes', NULL, '', 'yes', 'Deirdre Gross', 'Ducimus eos occaeca', 'Odit iste quo conseq', 'Sit quis quo facere', 'Accusamus asperiores', '523', '', '', '', '', '', '', 1, 'gazipur', 'dhanmondi', '34.1 km', '1999-04-21', '1990-09-22', 'Vero nostrud quaerat', 'Brennan Whitehead', 'pesariny@mailinator.com', '93', '+1 (442) 105-5113', '02-Jul-2009', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 6, '2021-11-10 03:14:44', '2021-11-17 07:11:55'),
(7, 'palette', '', '', NULL, '', '', NULL, '', NULL, '', NULL, 'no', NULL, '', '', '', 'Aut minus ea dolor e', 'Voluptatibus id dic', 'Voluptatibus velit', 'Eaque non aut quis s', '888', 'EUR2 120*100', 'yes', 'no', 'yes', '', '', 1, 'Dhanmondi', 'Framegate', 'Location not found', '1998-10-15', '2007-04-23', 'Consectetur volupta', 'Stuart Gibson', 'pexemon@mailinator.com', '93', '+1 (304) 229-9798', '05-May-1990', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 6, '2021-11-10 03:15:22', '2021-11-17 06:59:40'),
(8, 'motos', '', '', NULL, '', '', NULL, '', NULL, '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', 'yes', 'yes', '', 'Voluptas qui a solut', 'no', 1, 'Banani', 'Gulshan', 'Location not found', '1988-05-30', '2002-04-11', 'Nulla excepteur repe', 'Adrian Witt', 'qobicuc@mailinator.com', '93', '+1 (327) 821-3242', '19-Jul-2005', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 6, '2021-11-10 03:15:59', '2021-11-17 06:53:48'),
(9, 'voitures', '', '', NULL, '', '', NULL, '', NULL, '', NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', 'Suscipit et deserunt', 'yes', 1, 'Rampura', 'Badda', '1,896 km', '1994-03-21', '2004-04-20', 'Est culpa quis duis', 'Brianna Becker', 'bopev@mailinator.com', '93', '+1 (161) 106-2071', '02-Feb-2015', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 19, '2021-11-10 03:16:29', '2021-11-17 09:16:09'),
(10, 'divers', '', '', NULL, '', '', NULL, '', NULL, '', NULL, '', NULL, '', '', 'Rama Bowman', 'Officia esse eum ut', 'Aliqua Qui ut nostr', 'Est voluptas soluta', 'Debitis voluptatem s', '423', '', '', '', '', '', '', 1, 'Dhanmondi', 'Ashulia', '23.7 km', '2018-08-16', '1979-02-08', 'Sunt ipsum consequa', 'Hasad Taylor', 'ruvo@mailinator.com', '93', '+1 (108) 327-2071', '09-Jul-2009', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 4, '2021-11-10 03:17:05', '2021-11-11 08:26:31'),
(11, 'chauffeur', 'Sed maxime excepteur', 'Harum dolore dolore', NULL, 'yes', 'maison', NULL, '2', NULL, 'no', NULL, 'yes', NULL, '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'adabor', 'gazipur', '33.7 km', '2021-11-08', '2021-11-09', 'test', 'Admin', 'admin@admin.com', '213', '+1 (105) 566-9531', '26-Oct-1996', NULL, '', 'yes', 'yes', 'no', 18, '2021-11-11 08:30:47', '2021-11-17 07:47:05'),
(12, 'déménagement', 'Culpa maiores molli', 'Similique vel dolor', NULL, 'no', 'maison', NULL, '3', NULL, 'no', NULL, 'yes', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'Dhanmondi', 'mohakhali', '7.8 km', '2021-11-16', '2021-11-14', 'fddfdf', 'Admin', 'admin@gmail.com', '1684', '45215', 'dsds', NULL, '', 'yes', 'yes', 'no', 15, '2021-11-11 08:35:12', '2021-11-11 08:42:23'),
(13, 'chauffeur', 'Nesciunt culpa off', 'Velit nulla mollitia', NULL, 'yes', 'appartement', NULL, '3', NULL, 'no', NULL, 'yes', NULL, '', 'no', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'adabor', 'mohakhali', '8.3 km', '2021-11-17', '2021-11-16', 'test', 'name', 'superadmin@admin.com', '213', '+1 (105) 566-9531', 'fdfd', NULL, '', 'yes', 'yes', 'no', 1, '2021-11-11 08:50:24', '2021-11-11 08:50:26'),
(14, 'déménagement', 'volume', 'Quos nostrud incidid', NULL, 'no', 'appartement', NULL, '5', NULL, 'yes', NULL, 'yes', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'gabtoli', 'mohakhali', '9.4 km', '2021-11-17', '2021-11-26', 'Provident pariatur', '', '', '', '', '', NULL, '', '', 'yes', 'no', 3, '2021-11-17 02:45:40', '2021-11-17 07:12:33'),
(15, 'déménagement', 'volume', 'hello', NULL, 'no', 'appartement', NULL, '8', NULL, 'no', NULL, 'no', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'Dhanmondi', 'mohammadpur', '4.2 km', '2021-11-18', '2021-12-01', 'Hi', '', '', '', '', '', NULL, '', 'yes', 'yes', 'no', 2, '2021-11-17 02:49:58', '2021-11-17 02:50:14'),
(16, 'déménagement', 'voli', 'hollo', NULL, 'no', 'appartement', NULL, '2', NULL, 'no', NULL, 'no', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'adabor', 'mohakhali', '8.3 km', '2021-11-05', '2021-11-12', 'test', 'Admin', 'admin@admin.com', '93', '', '', NULL, 'f', 'yes', 'yes', 'no', 2, '2021-11-17 05:37:10', '2021-11-17 05:37:30'),
(17, 'déménagement', 'volume', 'hello', NULL, 'yes', 'appartement', NULL, '2', NULL, 'no', NULL, 'yes', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 11, 'adabor', 'mohakhali', '8.3 km', '2021-11-26', '2021-11-08', 'Test info', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'yes', 'no', 3, '2021-11-17 06:14:46', '2021-11-17 06:15:44'),
(18, 'déménagement', 'volume', 'hekl, hkljkl, jkkj', NULL, 'yes', 'appartement', 'commercial', '2', '5', 'no', 'yes', 'no', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'adabor', 'mohakhali', '8.3 km', '2021-11-10', '2021-11-25', 'heloo lj', NULL, NULL, NULL, NULL, 'hello', NULL, NULL, 'yes', 'yes', 'no', 20, '2021-11-17 08:27:00', '2021-11-17 09:14:38'),
(19, 'voitures', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Incidunt voluptas e', 'yes', 1, 'adabor', 'mohakhali', '8.3 km', '2021-11-19', '2021-11-26', 'Temporibus in et ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'yes', 'no', 6, '2021-11-17 09:05:14', '2021-11-17 09:15:06'),
(20, 'motos', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', '', 'Nostrud sed cillum d', 'no', 12, 'adabor', 'mohakhali', '8.3 km', '2021-11-17', '2021-12-03', 'Nam iure necessitati', NULL, NULL, NULL, NULL, '18-Dec-2001', NULL, NULL, 'yes', 'yes', 'no', 1, '2021-11-17 09:08:55', '2021-11-17 09:08:56'),
(21, 'voitures', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'model', 'no', 13, 'adabor', 'mohakhali', '8.3 km', '2021-11-11', '2021-12-09', 'test', NULL, NULL, NULL, NULL, 'dsds', NULL, NULL, 'yes', 'yes', 'no', 1, '2021-11-17 09:24:00', '2021-11-17 09:24:01'),
(22, 'voitures', 'Not Available', 'Not Available', NULL, 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Iusto neque inventor', 'yes', 13, 'adabor', 'mohakhali', '8.3 km', '2021-11-17', '2021-12-02', 'Ipsam qdfdfduia dolor lab', NULL, NULL, NULL, NULL, 'dsds', NULL, NULL, 'yes', 'yes', 'no', 1, '2021-11-17 09:26:16', '2021-11-17 09:26:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `second_announcements`
--
ALTER TABLE `second_announcements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `second_announcements`
--
ALTER TABLE `second_announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
