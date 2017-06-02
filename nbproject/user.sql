-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 04:14 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `address`, `role`) VALUES
(null, 'admin', MD5('123456'), 'admin123@gmail.com', 'Admin Manager', '0936826151', 'Ha Noi', 3),
(null, 'chien', MD5('123456'), 'chien@gmail.com', 'Hoàng Đình Chiến','1234567890' , 'ha noi', 2),
(null, 'nguyen', MD5('123456'), 'chien@gmail.com', 'Nguyễn văn A','1234567890' , 'ha noi', 2),
(null, 'vuong', MD5('123456'), 'vuong@gmail.com', 'Phạm Nhật Vượng', '1234567890', 'ha noi', 1),
(null, 'Long', MD5('123456'), 'long@gmail.com', 'Trần Đình Long','1234567890' , 'ha noi', 1),
(null, 'huong', MD5('123456'), 'huong@gmail.com', 'Phạm Thu Hương','1234567890' , 'ha noi', 1),
(null, 'duc', MD5('123456'), 'duc@gmail.com', 'Đoàn Nguyên Đức','1234567890' , 'Ha Noi', 1),
(null, 'hang', MD5('123456'), 'hang@gmail.com', 'Phạm Thúy Hằng','1234567890' , 'Ha Noi', 1),
(null, 'yen', MD5('123456'), 'yen@gmail.com', ' Nguyễn Hoàng Yến','1234567890' , 'Ha Noi', 1),
(null, 'tai', MD5('123456'), 'tai@gmail.com', ' Nguyễn Đức Tài','1234567890' , 'Ha Noi', 1),
(null, 'dat', MD5('123456'), 'dat@gmail.com', ' Nguyễn Văn Đạt','1234567890' , 'Ha Noi', 1),
(null, 'hung', MD5('123456'), 'hung@gmail.com', 'Nguyễn Duy Hưng','1234567890' , 'Ha Noi', 1),
(null, 'hien', MD5('123456'), 'hien@gmail.com', 'Vũ Thị Hiền','1234567890' , 'Ha Noi', 1),
(null, 'vu', MD5('123456'), 'vu@gmail.com', ' Lê Phước Vũ','1234567890' , 'Ha Noi', 1),
(null, 'binh', MD5('123456'), 'binh@gmail.com', 'Trương Gia Bình','1234567890' , 'Ha Noi', 1),
(null, 'khanh', MD5('123456'), 'khanh@gmail.com', 'Trương Thị Lệ Khanh','1234567890' , 'Ha Noi', 1),
(null, 'quan', MD5('123456'), 'quan@gmail.com', 'Trần Lê Quân','1234567890' , 'Ha Noi', 1),
(null, 'tam', MD5('123456'), 'tam@gmail.com', 'Đặng Thành Tâm','1234567890' , 'Ha Noi', 1),
(null, 'ngan', MD5('123456'), 'ngan@gmail.com', 'Trầm Trọng Ngân','1234567890' , 'Ha Noi', 1),
(null, 'quyet', MD5('123456'), 'quyet@gmail.com', 'Trịnh Văn Quyết','1234567890' , 'Ha Noi', 1),
(null, 'minh', MD5('123456'), 'minh@gmail.com', 'Dương Ngọc Minh','1234567890' , 'Ha Noi', 1),
(null, 'huyen', MD5('123456'), 'huyen@gmail.com', 'Đào Hữu Huyền','1234567890' , 'Ha Noi', 1)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
