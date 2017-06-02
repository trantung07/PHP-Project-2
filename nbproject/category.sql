-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 11:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_by` smallint(6) DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `created_date` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_slug`, `parent_id`, `description`, `order_by`, `meta_keyword`, `meta_description`, `status`, `created_date`, `update_at`)
 VALUES
   (1, 'vegetables', 'vegetables', 0, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(2, 'leafy-veggie', 'leafy-veggie', 1, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(3, 'root-veggie', 'root-veggie', 1, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(4, 'mushroom', 'mushroom', 1, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(5, 'fruits', 'fruits', 0, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(6, 'domestic', 'domestic', 2, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(7, 'import', 'import', 2, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(8, 'fruits-of-Dalat', 'fruits-of-Dalat', 2, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(9, 'meat', 'meat', 0, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(10, 'fish', 'fish', 3, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(11, 'pork', 'pork', 3, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),

(12, 'beef', 'beef', 3, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(13, 'others', 'others', 0, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(14, 'rice', 'rice', 4, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(15, 'staple', 'staple', 4, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(16, 'xxxxx', 'xxxxx', 0, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),
(17, 'xxxxxgggg', 'xxxxxgggg', 4, 'lorem', null, 'lorem', 'lorem', 1, NULL, NULL),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`),
  ADD UNIQUE KEY `category_slug` (`category_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
