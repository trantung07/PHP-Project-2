-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 04:37 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
  `category_id` int(11) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
  `category_name` varchar(100) UNIQUE NOT NULL,
  `category_slug` varchar(100) UNIQUE NOT NULL,
  `parent_id` int(11) DEFAULT '0' not null,
  `images` varchar(255) null,
  `description` varchar(255) null,
  `order_by` smallint(6) null,
  `meta_keyword` varchar(255) null,
  `meta_description` varchar(255) null,
  `status` tinyint(6) DEFAULT '1',
  `created_date` int(11) default null,
  `update_at` int(11) default null,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--



-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color_code` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `full_name`, `email`, `phone`, `address`) VALUES
(3, 59, '', 'admin@gmail.com', '1212121', '232323'),
(4, 60, '', 'xcxcx', 'cxcxc', 'xcxc'),
(5, 61, '', 'xcxc', 'xcxcx', 'xcxc'),
(6, 62, '', '', 'fdfd', 'dfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amount` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--
-- --------------------------------------------------------
--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT '0',
  `quantity` int(3) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `return_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL PRIMARY key AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_slug` varchar(100) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(11, 2) DEFAULT '0',
  `sale_price` decimal(5, 2) DEFAULT null,
  `quantity` int(11) not null,
  `start_sale` int(11) DEFAULT null,
  `end_sale` int(11) DEFAULT null,
  `detail_product` text not null,
  `description` varchar(255),
  `id_category` int(11) not null,
  `id_supplier`varchar(20),
  `meta_keyword` varchar(255),
  `meta_description` varchar(255),
  `status` tinyint(1) DEFAULT '1',
  `created_date` int(11) DEFAULT NULL,
  `update_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--
INSERT INTO `product`
(`product_id`, `product_name`, `product_slug`, `image`, `price`, `sale_price`, `quantity`, `start_sale`, `end_sale`, `detail_product`, `description`, `id_category`, `id_supplier`, `meta_keyword`, `meta_description`, `status`, `created_date`, `update_at`)
 VALUES
(null,'BlackBerry','BlackBerry','BlackBerry.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','BlackBerry lorem', 6,null,'BlackBerry domestic','BlackBerry domestic',1,null,null),

(null,'BlueBerry','BlueBerry','BlueBerry.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','BlueBerry lorem', 6,null,'BlueBerry domestic','BlueBerry domestic',1,null,null),

(null,'Orange','Orange','Orange.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Orange lorem', 6,null,'Orange domestic','Orange domestic',1,null,null),

(null,'Peach','Peach','Peach.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Peach lorem', 6,null,'Peach domestic','Peach domestic',1,null,null),

(null,'Pear','Pear','Pear.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Pear lorem', 6,null,'Pear domestic','Pear domestic',1,null,null),

(null,'Pineapple','Pineapple','Pineapple.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Pineapple lorem', 6,null,'Pineapple domestic','Pineapple domestic',1,null,null),

(null,'Passion Fruit','Passion-Fruit','Passion Fruit.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Passion Fruit lorem', 6,null,'Passion Fruit domestic','Passion Fruit domestic',1,null,null),
(null,'apple','apple','apple.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','apple lorem', 6,null,'apple domestic','apple domestic',1,null,null),
(null,'lemon','lemon','lemon.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','lemon lorem', 6,null,'lemon domestic','lemon domestic',1,null,null),
(null,'Mango','Mango','Mango.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Mango lorem', 6,null,'Mango domestic','Mango domestic',1,null,null),
(null,'Strawberry','Strawberry','Strawberry.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Strawberry lorem', 6,null,'Strawberry domestic','Strawberry domestic',1,null,null),
(null,'Mango','Mango','Mango.jpg',350,null, 1,null,null,'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Mango lorem', 6,null,'Mango domestic','Mango domestic',1,null,null)


-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `full_name`, `phone`, `address`, `role`) VALUES
(59, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', NULL, NULL, NULL, 1),
(60, 'xcxcx', 'e10adc3949ba59abbe56e057f20f883e', 'xcxcx', NULL, NULL, NULL, 1),
(61, 'xcxc', 'e10adc3949ba59abbe56e057f20f883e', 'xcxc', NULL, NULL, NULL, 1),
(62, '', 'e10adc3949ba59abbe56e057f20f883e', 'abcdsedfd@gmail.cm', NULL, NULL, NULL, 1),
(63, 'anh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'anh@gmail.com', 'Ngueyn van anh', '123456789', 'Abc DBC dsdsd', 1),
(64, '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', 1),
(65, 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'abc@gmail.com', 'asasa', '123456', 'sdsdsds', 1),
(66, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin123@gmail.com', 'Admin Manager', '123456', NULL, 3),
(67, 'abcadmin', 'e10adc3949ba59abbe56e057f20f883e', 'abcadmin@gmail.com', NULL, NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `name` (`name`),
ADD UNIQUE KEY `color_code` (`color_code`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
ADD PRIMARY KEY (`id`),
ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
ADD PRIMARY KEY (`id`),
ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
ADD KEY `order_id` (`order_id`),
ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `name` (`name`),
ADD UNIQUE KEY `slug` (`slug`),
ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
ADD KEY `product_id` (`product_id`),
ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `product_color`
--
ALTER TABLE `product_color`
ADD CONSTRAINT `product_color_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
ADD CONSTRAINT `product_color_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
