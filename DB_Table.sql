-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 03:35 PM
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
  `individual_goods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ascenseur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `second_announcements` (`id`, `category`, `volume`, `list`, `individual_goods`, `place_type`, `floor`, `ascenseur`, `access`, `services`, `help`, `article_name`, `height`, `width`, `length`, `weight`, `quantity`, `size`, `load_unload`, `need_tailgate`, `need_truck`, `brand_model`, `rolling`, `user_id`, `depart`, `arrivee`, `loading_date`, `delevary_date`, `informations`, `name`, `email`, `country_code`, `phone`, `pseudo`, `image`, `password`, `terms`, `offers`, `hired`, `views`, `created_at`, `updated_at`) VALUES
(1, 'déménagement', 'fdf', 'fdfd', 'no', 'appartement', '1', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'gfg', 'gfgf', '2021-11-03', '2021-11-25', 'fdfdf', 'Admin', 'admin@admin.com', '355', '123 456 7890', 'fdfd', NULL, '1111', 'yes', 'yes', 'no', 90, '2021-11-09 08:49:04', '2021-11-10 08:28:44'),
(2, 'déménagement', 'This is volume', 'list of component', 'yes', 'maison', '3', 'yes', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '04-Aug-1978', '18-Oct-1974', '2010-01-13', '1970-03-25', 'Reprehenderit corrup', 'Xavier Duke', 'sypice@mailinator.com', '93', '+1 (146) 262-3634', '09-Jul-2006', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 2, '2021-11-10 03:09:56', '2021-11-10 08:17:28'),
(3, 'chauffeur', 'Dolores non magni do', 'Dolores quia neque h', 'no', 'garde-meuble', '4', 'yes', 'yes', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', 1, 'adabor', 'mohammadpur', '2010-11-23', '2018-02-25', 'Id aut consequatur', 'Vernon Atkinson', 'zexuja@mailinator.com', '93', '+1 (105) 566-9531', '26-Oct-1996', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 1, '2021-11-10 03:12:19', '2021-11-10 03:27:25'),
(4, 'meubles', '', '', '', 'garde-meuble', '4', 'yes', 'no', '', 'yes', 'Jerome York', 'Eiusmod neque doloru', 'Eum consequatur fug', 'Velit dolor ratione', 'Maxime nesciunt bea', '586', '', '', '', '', '', '', 1, 'mirpur', 'mohakhali', '1983-09-18', '1985-03-05', 'Dolor ad fugiat vol', 'Ezekiel Mccarty', 'quxycy@mailinator.com', '93', '+1 (633) 466-9755', '01-Jun-1990', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 8, '2021-11-10 03:13:13', '2021-11-10 08:31:16'),
(5, 'électroménager', '', '', '', 'commercial', '4', 'yes', 'yes', '', 'no', 'Kylynn Howell', 'Ab enim sequi recusa', 'Perferendis Nam nisi', 'Aute at voluptatum c', 'Ullam veniam natus', '873', '', '', '', '', '', '', 1, 'airport', 'kakrail', '2003-05-11', '1991-12-01', 'Qui qui quas assumen', 'Alika Buck', 'qorigo@mailinator.com', '93', '+1 (957) 541-9507', '06-Nov-2010', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 6, '2021-11-10 03:14:07', '2021-11-10 08:02:35'),
(6, 'colis', '', '', '', 'garde-meuble', '4', 'no', 'yes', '', 'yes', 'Deirdre Gross', 'Ducimus eos occaeca', 'Odit iste quo conseq', 'Sit quis quo facere', 'Accusamus asperiores', '523', '', '', '', '', '', '', 1, 'hello', 'world', '1999-04-21', '1990-09-22', 'Vero nostrud quaerat', 'Brennan Whitehead', 'pesariny@mailinator.com', '93', '+1 (442) 105-5113', '02-Jul-2009', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 2, '2021-11-10 03:14:44', '2021-11-10 03:25:52'),
(7, 'palette', '', '', '', '', '', '', 'no', '', '', '', 'Aut minus ea dolor e', 'Voluptatibus id dic', 'Voluptatibus velit', 'Eaque non aut quis s', '888', 'EUR2 120*100', 'yes', 'no', 'yes', '', '', 1, 'Dhanmondi', 'Framegate', '1998-10-15', '2007-04-23', 'Consectetur volupta', 'Stuart Gibson', 'pexemon@mailinator.com', '93', '+1 (304) 229-9798', '05-May-1990', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 2, '2021-11-10 03:15:22', '2021-11-10 03:24:36'),
(8, 'motos', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'yes', '', 'Voluptas qui a solut', 'no', 1, 'Banani', 'Gulshan', '1988-05-30', '2002-04-11', 'Nulla excepteur repe', 'Adrian Witt', 'qobicuc@mailinator.com', '93', '+1 (327) 821-3242', '19-Jul-2005', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 0, '2021-11-10 03:15:59', '2021-11-10 03:15:59'),
(9, 'voitures', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Suscipit et deserunt', 'yes', 1, 'Rampura', 'Badda', '1994-03-21', '2004-04-20', 'Est culpa quis duis', 'Brianna Becker', 'bopev@mailinator.com', '93', '+1 (161) 106-2071', '02-Feb-2015', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 15, '2021-11-10 03:16:29', '2021-11-10 06:24:54'),
(10, 'divers', '', '', '', '', '', '', '', '', '', 'Rama Bowman', 'Officia esse eum ut', 'Aliqua Qui ut nostr', 'Est voluptas soluta', 'Debitis voluptatem s', '423', '', '', '', '', '', '', 1, 'Dhanmondi', 'Ashulia', '2018-08-16', '1979-02-08', 'Sunt ipsum consequa', 'Hasad Taylor', 'ruvo@mailinator.com', '93', '+1 (108) 327-2071', '09-Jul-2009', NULL, 'Pa$$w0rd!', 'yes', 'yes', 'no', 0, '2021-11-10 03:17:05', '2021-11-10 03:17:05');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
