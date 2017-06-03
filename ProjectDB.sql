-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 02:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image_title`, `name`, `title`, `content`, `date`) VALUES
(1, 'Blog/blog-1-show.jpg', '10 thực phẩm vô cùng tốt cho sức khỏe, ngừa ung thư', 'Những thực phẩm sau rất giàu vitamin khoáng chất tốt cho sức khỏe, có tác dụng phòng chống ung thư.', '<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">1. Chanh đ&agrave;o<br /></strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Chỉ cần 1 tr&aacute;i chanh đ&atilde; cung cấp hơn 100% nhu cầu vitamin C h&agrave;ng ng&agrave;y của bạn, gi&uacute;p tăng lượng cholesterol HDL &lsquo;tốt&rsquo; v&agrave; xương chắc khỏe.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" align=\"center\"><img class=\"news-image\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; border: 0px; max-width: 420px;\" src=\"http://anh.24h.com.vn/upload/3-2016/images/2016-09-02/1472778147-cap_lemonlime_2_qugf.jpg\" alt=\"10 thực phẩm v&ocirc; c&ugrave;ng tốt cho sức khỏe, ngừa ung thư - 1\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Flavonoids c&oacute; trong chanh gi&uacute;p hạn chế sự ph&aacute;t triển của c&aacute;c tế b&agrave;o ung thư v&agrave; hoạt động như một chất chống vi&ecirc;m.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">H&atilde;y bỏ 1 l&aacute;t chanh v&agrave;o trong t&aacute;ch tr&agrave;. Một nghi&ecirc;n cứu cho thấy chanh l&agrave;m tăng khoảng 80% khả năng cơ thể hấp thu c&aacute;c chất chống &ocirc;xy h&oacute;a trong tr&agrave;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">2. S&uacute;p-lơ</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Một c&acirc;y s&uacute;p-lơ chứa hơn 100% nhu cầu vitamin K v&agrave; gần 200% nhu cầu vitamin C h&agrave;ng ng&agrave;y của cơ thể. Đ&acirc;y l&agrave; 2 chất dinh dưỡng cần thiết cho sự ph&aacute;t triển của xương.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" align=\"center\"><img class=\"news-image\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; border: 0px; max-width: 420px;\" src=\"http://anh.24h.com.vn/upload/3-2016/images/2016-09-02/1472778147-broccoli1_pdfe.jpg\" alt=\"10 thực phẩm v&ocirc; c&ugrave;ng tốt cho sức khỏe, ngừa ung thư - 2\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">S&uacute;p-lơ cũng c&oacute; t&aacute;c dụng ngăn ngừa nhiều loại ung thư.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Trong khi hấp hoặc đun s&ocirc;i chỉ giữ lại 66% chất dinh dưỡng, th&igrave; d&ugrave;ng l&ograve; vi s&oacute;ng giữ tới 90% vitamin C c&oacute; trong s&uacute;p-lơ.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">3. S&ocirc;c&ocirc;la đen</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Chỉ 7g s&ocirc;c&ocirc;la đen mỗi ng&agrave;y c&oacute; thể giảm huyết &aacute;p ở người khỏe mạnh.Ngo&agrave;i ra, bột cacao c&ograve;n gi&agrave;u flavonoid v&agrave; c&aacute;c chất chống &ocirc;xy h&oacute;a, gi&uacute;p giảm lượng cholesterol LDL &lsquo;xấu&rsquo; v&agrave; tăng lượng cholesterol HDL &lsquo;tốt&rsquo;.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">1 thanh s&ocirc;c&ocirc;la đen chứa khoảng 53,5mg flavonoid, 1 thanh s&ocirc;c&ocirc;la sữa chứa &lt;14mg flavonoid.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">4. Khoai t&acirc;y</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Một&nbsp;củ khoai t&acirc;y đỏ chứa 66 mcg folate (chất quan trọng trong cấu tr&uacute;c tế b&agrave;o), tương đương với 1 b&aacute;t rau ch&acirc;n vịt hoặc s&uacute;p-lơ.1 củ khoai lang chứa gấp gần 8 lần nhu cầu vitamin A h&agrave;ng ng&agrave;y, gi&uacute;p ngăn ngừa ung thư v&agrave; tăng cường hệ miễn dịch.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">N&ecirc;n để nguội khoai t&acirc;y trước khi ăn. Nghi&ecirc;n cứu cho thấy l&agrave;m như vậy gi&uacute;p bạn đốt ch&aacute;y hơn 25% chất b&eacute;o sau bữa ăn.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">5. C&aacute; hồi</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">C&aacute; hồi rất gi&agrave;u axit b&eacute;o omega-3, gi&uacute;p giảm nguy cơ bị trầm cảm, bệnh tim, v&agrave; ung thư.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\" align=\"center\"><img class=\"news-image\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; border: 0px; max-width: 420px;\" src=\"http://anh.24h.com.vn/upload/3-2016/images/2016-09-02/1472778147-salmon_omega_31_wlvt.jpg\" alt=\"10 thực phẩm v&ocirc; c&ugrave;ng tốt cho sức khỏe, ngừa ung thư - 3\" /></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Một khẩu phần 85g c&aacute; hồi chứa gần 50% nhu cầu niacin h&agrave;ng ng&agrave;y của bạn, c&oacute; thể bảo vệ chống lại bệnh Alzheimer v&agrave; sa s&uacute;t tr&iacute; tuệ.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Lưu &yacute;: C&aacute; hồi nu&ocirc;i chứa lượng chất độc polychlorinated biphenyl (PCB) cao gấp 16 lần so với c&aacute; hồi tự nhi&ecirc;n.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">6. Quả hạch</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Quả hạch chứa axit b&eacute;o omega-3 nhiều nhất trong c&aacute;c loại quả, gi&uacute;p giảm cholesterol.Omega-3 gi&uacute;p cải thiện t&acirc;m trạng, ph&ograve;ng chống ung thư v&agrave; bảo vệ cơ thể khỏi t&aacute;c hại của &aacute;nh nắng mặt trời.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Chất chống &ocirc;xy h&oacute;a melatonin c&oacute; trong quả hạch gi&uacute;p điều tiết giấc ngủ.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">7. Tr&aacute;i bơ</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Một nghi&ecirc;n cứu đ&atilde; chứng minh bơ gi&agrave;u chất b&eacute;o l&agrave;nh mạnh, gi&uacute;p giảm 22% lượng cholesterol.&nbsp;Một tr&aacute;i bơ chứa hơn 50% nhu cầu chất xơ v&agrave; 40% nhu cầu folate h&agrave;ng ng&agrave;y của cơ thể, c&oacute; thể giảm nguy cơ mắc bệnh tim.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Th&ecirc;m bơ v&agrave;o sa-l&aacute;t c&oacute; thể tăng 3-5 lần khả năng hấp thu c&aacute;c chất dinh dưỡng quan trọng như beta-carotene,&hellip; so với sa-l&aacute;t kh&ocirc;ng th&ecirc;m bơ.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">8. Tỏi</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Tỏi l&agrave; 1 trong 10 thực phẩm tốt nhất cho sức khỏeTỏi gi&uacute;p ức chế sự ph&aacute;t triển của vi khuẩn, bao gồm E. coli.Hợp chất allicin trong tỏi hoạt động như một chất chống vi&ecirc;m hiệu quả, gi&uacute;p giảm nồng độ cholesterol v&agrave; hạ huyết &aacute;p.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Lưu &yacute;: Ăn tỏi tươi nghiền nhỏ l&agrave; tốt nhất v&igrave; giải ph&oacute;ng nhiều allicin nhất. Kh&ocirc;ng n&ecirc;n nấu tỏi; tỏi tiếp x&uacute;c với nhiệt độ cao qu&aacute; 10 ph&uacute;t sẽ l&agrave;m mất đi c&aacute;c chất dinh dưỡng quan trọng.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">9. Rau bina</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Rau bina chứa lutein v&agrave; xeaxanthin - hai chất chống &ocirc;xy h&oacute;a gi&uacute;p tăng cường hệ miễn dịch, rất quan trọng với sức khỏe đ&ocirc;i mắt.Nghi&ecirc;n cứu mới đ&acirc;y cho thấy trong số c&aacute;c loại tr&aacute;i c&acirc;y v&agrave; rau chống ung thư, rau bina l&agrave; một trong những loại rau c&oacute; hiệu quả nhất.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">H&atilde;y thử trộn 1 b&aacute;t rau bina, 1 b&aacute;t c&agrave; rốt nghiền, 1 quả chuối, 1 b&aacute;t nước &eacute;p t&aacute;o v&agrave; 1 ch&uacute;t đ&aacute;, bạn sẽ c&oacute; thức uống ngon t v&agrave; bổ dưỡng.</p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">10. Đậu đỗ</strong></p>\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.4; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Ăn 1 phần rau họ đậu (đậu đỗ, đậu H&agrave; Lan, đậu lăng,&hellip;) 4 lần mỗi tuần c&oacute; thể giảm 22%nguy cơ mắc bệnh tim v&agrave; nguy cơ mắc ung thư v&uacute;.Đậu c&agrave;ng đen c&agrave;ng chứa nhiều chất chống &ocirc;xy h&oacute;a. Một nghi&ecirc;n cứu chỉ ra rằng đậu đen chứa chất chống &ocirc;xy h&oacute;a nhiều gấp 40 lần so với đậu trắng.</p>', 1495569169),
(2, 'Blog/blog-2-show.jpg', 'Vì sao nên ăn chuối trước và sau khi tập thể dục?', 'Đường glucose trong chuối được hấp thụ nhanh vào máu có thể bổ sung tức thì lượng đường bị hao hụt...', '<p><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-2-1.jpg\" alt=\"\" width=\"500\" height=\"375\" /></p>\r\n<p class=\"Image\">Ảnh:&nbsp;<em>News</em>.</p>\r\n<p class=\"Normal\">Khi con người hoạt động thể lực k&eacute;o d&agrave;i, năng lượng bị hao hụt nhiều, cơ thể phải huy động đến lượng đường trong m&aacute;u để cung cấp cho cơ bắp.&nbsp;Những trường hợp n&agrave;y, đường glucose trong chuối được hấp thụ nhanh v&agrave;o m&aacute;u c&oacute; thể bổ sung tức th&igrave; lượng đường bị hao hụt, gi&uacute;p vận động vi&ecirc;n phục hồi sau khi vận động mệt mỏi.</p>\r\n<p class=\"Normal\">Trong chuối c&oacute; đường fructose được hấp thụ chậm n&ecirc;n duy tr&igrave; năng lượng cho cơ thể l&acirc;u hơn. Ngo&agrave;i ra chuối chứa c&aacute;c loại carbohydrate (bột đường) kh&aacute;c được chuyển h&oacute;a chậm v&agrave; ph&oacute;ng th&iacute;ch đường v&agrave;o m&aacute;u từ từ để đ&aacute;p ứng cho những hoạt động thể lực k&eacute;o d&agrave;i h&agrave;ng giờ sau đ&oacute;. Lượng potassium cao trong chuối c&ograve;n gi&uacute;p duy tr&igrave; trương lực cơ, l&agrave;m giảm nguy cơ vọp bẻ ở vận động vi&ecirc;n.&nbsp;</p>\r\n<p class=\"Normal\">Nhiều người c&oacute; th&oacute;i quen ăn cơm, phở hay thịt động vật chứa nhiều protein rất kh&oacute; hấp thụ, kh&ocirc;ng thể cung cấp ngay dinh dưỡng v&agrave; năng lượng cho cơ thể trước hay sau khi tập.&nbsp;Do đ&oacute;, chuy&ecirc;n gia khuy&ecirc;n n&ecirc;n chọn chuối l&agrave; thức ăn nhanh cho vận động vi&ecirc;n trước, trong v&agrave; sau tập luyện.&nbsp;Tốt nhất n&ecirc;n ăn trước v&agrave; sau khi tập 15 ph&uacute;t.</p>', 1495600896),
(3, 'Blog/blog-3-show.jpg', 'Thực phẩm màu tím được dự đoán lên ngôi vào 2017', 'Súp lơ tím, gạo đen... có lượng tiêu thụ tăng nhanh và dự đoán sẽ chiếm ưu thế vào năm tới.', '<p>Theo <em>Telegraph</em>, c&aacute;c chuy&ecirc;n gia dinh dưỡng đ&atilde; xem x&eacute;t th&oacute;i quen của người ti&ecirc;u d&ugrave;ng to&agrave;n cầu tại 465 cửa h&agrave;ng v&agrave; dự đo&aacute;n thực phẩm m&agrave;u t&iacute;m sẽ chiếm đa số tr&ecirc;n c&aacute;c kệ h&agrave;ng năm 2017. Thực phẩm m&agrave;u sắc n&agrave;y đang c&oacute; xu hướng được ti&ecirc;u thụ tăng nhanh, với nhiều loại phong ph&uacute; như s&uacute;p lơ m&agrave;u t&iacute;m, gạo đen, măng t&acirc;y t&iacute;m, quả cơm ch&aacute;y, quả acai, khoai lang t&iacute;m, ng&ocirc; t&iacute;m, ngũ cốc...</p>\r\n<table class=\"tplCaption\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-3-1.jpg\" alt=\"\" width=\"500\" height=\"300\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class=\"Image\">Thực phẩm m&agrave;u t&iacute;m được ti&ecirc;u thụ ng&agrave;y c&agrave;ng nhiều. Ảnh:<em> freshnfitcuisin</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"Normal\">Chuy&ecirc;n gia dinh dưỡng Matthew Plowman cho biết c&aacute;c thực phẩm m&agrave;u t&iacute;m mang đến nhiều lợi &iacute;ch sức khỏe. &ldquo;Mật độ chất chống oxy h&oacute;a cao ở thực phẩm tối m&agrave;u gi&uacute;p chống chọi bệnh tật, trẻ l&acirc;u, giảm vi&ecirc;m v&agrave; tốt cho tim&rdquo;, &ocirc;ng ph&acirc;n t&iacute;ch.</p>\r\n<p class=\"Normal\">C&aacute;c nghi&ecirc;n cứu cũng ghi nhận những người ăn rau quả m&agrave;u t&iacute;m thường xuy&ecirc;n giảm nguy cơ tăng huyết &aacute;p v&agrave; duy tr&igrave; mức&nbsp;cholesterol ph&ugrave; hợp.&nbsp;Ngo&agrave;i những lợi &iacute;ch như thực phẩm c&ugrave;ng loại, rau quả m&agrave;u t&iacute;m c&oacute; nhiều đặc t&iacute;nh ri&ecirc;ng. Măng t&acirc;y t&iacute;m gi&agrave;u vitamin B, cải thiện, da, t&oacute;c, m&oacute;ng tay, nhuận tr&agrave;ng. Khoai lang t&iacute;m hỗ trợ ti&ecirc;u h&oacute;a v&agrave; đặc t&iacute;nh kh&aacute;ng vi&ecirc;m mạnh mẽ.&nbsp;</p>\r\n<p class=\"Normal\">Gạo đen gi&agrave;u chất sắt v&agrave; vitamin E, chống l&atilde;o h&oacute;a, chất chống oxy h&oacute;a cao gấp nhiều lần gạo trắng. Quả mọng acai thịnh h&agrave;nh những năm gần đ&acirc;y, gi&uacute;p giảm b&eacute;o, tốt cho tim mạch, giảm nồng độ&nbsp;cholesterol trong m&aacute;u, ngăn ngừa cục m&aacute;u đ&ocirc;ng, tăng lưu th&ocirc;ng v&agrave; thư gi&atilde;n mạch m&aacute;u.</p>', 1495601579),
(4, 'Blog/blog-4-show.jpg', 'Chuyện gì xảy ra khi bạn quên uống nước vào buổi sáng', 'Nếu không uống nước, các chất thải của sự trao đổi chất tích tụ sau một đêm có thể gây nhiễm độc...', '<table class=\"tplCaption\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-4-1.jpg\" alt=\"\" width=\"500\" height=\"333\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class=\"Image\">Ảnh minh họa: <em>Artofthehome</em>.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"Normal\">Theo <em>Medicalnewstoday</em>, nhiều người thường qu&ecirc;n uống nước v&agrave;o buổi s&aacute;ng sau khi ngủ dậy. Th&oacute;i quen n&agrave;y kh&ocirc;ng tốt cho sức khỏe, thậm ch&iacute; c&oacute; thể dẫn đến bệnh tật. Nhiều nghi&ecirc;n cứu cho thấy bổ sung một lượng nước nhất định cho cơ thể sau một đ&ecirc;m ngủ đậy vừa đ&aacute;p ứng được nhu cầu trao đổi chất của c&aacute;c cơ quan đồng thời l&agrave; biện ph&aacute;p hữu hiệu để ngăn ngừa bệnh tật.</p>\r\n<p class=\"Normal\">Theo cơ chế th&ocirc;ng thường, trong khi ngủ, cơ thể con người mất đi một lượng nước lớn chủ yếu th&ocirc;ng qua h&ocirc; hấp v&agrave; da. Sau một đ&ecirc;m ngủ từ 7 đến 8 tiếng, c&aacute;c cơ quan to&agrave;n th&acirc;n v&agrave; tế b&agrave;o đều bị mất nước. Đặc biệt trong m&ugrave;a lạnh kh&ocirc; hanh, lượng nước mất đi sẽ nhiều hơn m&ugrave;a ẩm ướt.</p>\r\n<p class=\"Normal\">T&igrave;nh trạng mất nước trong đ&ecirc;m k&eacute;o theo giảm lượng dịch thể v&agrave; l&agrave;m cho m&aacute;u trở n&ecirc;n đặc hơn, lưu lượng giảm, tốc độ lưu th&ocirc;ng chậm. V&igrave; vậy việc bổ sung nước kịp thời l&uacute;c n&agrave;y chẳng kh&aacute;c n&agrave;o \'đất kh&ocirc; gặp mưa r&agrave;o\', cơ thể trở n&ecirc;n khoan kho&aacute;i v&agrave; hoạt động tốt suốt cả ng&agrave;y.</p>\r\n<p class=\"Normal\">Uống nước v&agrave;o buổi s&aacute;ng c&ograve;n l&agrave; c&aacute;ch l&agrave;m sạch c&aacute;c dịch thể trong người. Chẳng hạn, dạ d&agrave;y sau một đ&ecirc;m ngủ dậy gần như trống rỗng, uống một cốc nước lớn gi&uacute;p rửa sạch cặn b&atilde; b&aacute;m tr&ecirc;n th&agrave;nh dạ d&agrave;y, vi khuẩn kh&ocirc;ng c&ograve;n chỗ b&aacute;m n&ecirc;n nhanh ch&oacute;ng bị thải ra khỏi cơ thể theo đường tiểu.</p>\r\n<p class=\"Normal\">Một t&aacute;c dụng kh&aacute;c của nước l&agrave; l&agrave;m lo&atilde;ng nước tiểu. C&aacute;c chất thải của sự trao đổi chất t&iacute;ch lũy lại sau một đ&ecirc;m ngủ, nếu kh&ocirc;ng c&oacute; đủ lượng nước cần thiết để hỗ trợ b&agrave;i tiết th&igrave; sẽ ở lại trong cơ thể rất l&acirc;u. Đ&acirc;y l&agrave; nguồn gốc dẫn đến nhiễm độc mạn t&iacute;nh. Ngược lại, cung cấp nước kịp thời gi&uacute;p tống chất thải ra khỏi cơ thể qua đường nước tiểu, l&agrave;m sạch m&aacute;u, ph&ograve;ng chống bệnh li&ecirc;n quan đến nhiễm tr&ugrave;ng, nhiễm độc v&agrave; kết sỏi hệ b&agrave;i tiết.</p>\r\n<p class=\"Normal\">C&aacute;c chuy&ecirc;n gia khuy&ecirc;n tốt nhất n&ecirc;n uống nước ấm v&agrave;o buổi s&aacute;ng vừa tốt cho cơ thể vừa c&oacute; t&aacute;c dụng giữ ẩm cho da, nhờ đ&oacute; da trở n&ecirc;n s&aacute;ng v&agrave; mịn hơn. Đ&acirc;y l&agrave; c&aacute;ch hiệu quả để bảo vệ da v&agrave; c&aacute;c tổ chức trong cơ thể, đồng thời tăng sức đề kh&aacute;ng. Đặc biệt uống nước buổi s&aacute;ng rất tốt trong việc ph&ograve;ng v&agrave; điều trị t&aacute;o b&oacute;n, đảm bảo việc đại tiện dễ d&agrave;ng. Với người gi&agrave;, chức năng đường ruột giảm, nhu động ruột yếu nếu kh&ocirc;ng c&oacute; th&oacute;i quen uống nước sau khi ngủ dậy sẽ rất dễ bị t&aacute;o b&oacute;n.</p>', 1495601776),
(5, 'Blog/blog-5-show.jpg', 'Khi nào nên uống chanh đào ngâm để trị ho, cảm cúm', 'Khi nào nên uống chanh đào ngâm để trị ho, cảm cúm!!! Hãy xem ngày bài viết này để biết thêm thông tin...', '<p><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-5-1.jpg\" alt=\"\" width=\"500\" height=\"375\" /></p>\r\n<p style=\"text-align: center;\">Chanh đ&agrave;o H&agrave; Nội đang được b&aacute;n nhiều tr&ecirc;n c&aacute;c tuyến đường ở TP HCM. Ảnh:<em> Trần Ngoan</em>.</p>\r\n<p class=\"Normal\">Thời tiết thay đổi, nhiều người trong gia đ&igrave;nh chị Oanh (quận B&igrave;nh Thạnh, TP HCM) thay nhau đổ bệnh, chủ yếu l&agrave; c&aacute;c triệu chứng&nbsp;sổ mũi, sốt, ho, vi&ecirc;m họng. Chị mua chanh đ&agrave;o H&agrave; Nội ng&acirc;m với đường hoặc mật ong để ngậm. \"H&ocirc;m qua m&igrave;nh d&ugrave;ng thử thấy cổ họng dịu hơn, bớt đau r&aacute;t c&ograve;n c&aacute;c triệu chứng kh&aacute;c chưa giảm, hy vọng d&ugrave;ng th&ecirc;m v&agrave;i ng&agrave;y nữa bệnh sẽ khỏi\", chị Oanh chia sẻ.&nbsp;</p>\r\n<p class=\"Normal\">Hiện nay chanh đ&agrave;o H&agrave; Nội v&agrave;o TP HCM được b&aacute;n nhiều dọc theo nhiều tuyến đường Phan Văn Trị (quận G&ograve; Vấp), Điện Bi&ecirc;n Phủ (quận B&igrave;nh Thạnh), 3 th&aacute;ng 2 (quận 10)... Mỗi kg quả tươi gi&aacute; 40.000 đồng, được c&aacute;c b&agrave; nội trợ cho l&agrave; trị ho, cảm c&uacute;m hiệu quả.&nbsp;</p>\r\n<p class=\"Normal\">Theo lương y Nguyễn Đức Nghĩa, Hội Dược liệu TP HCM, d&acirc;n gian thường d&ugrave;ng chanh, tắc chưng hoặc ng&acirc;m với đường ph&egrave;n, mật ong để trị ho, cảm c&uacute;m như một b&agrave;i thuốc truyền miệng hiệu quả. Tại Việt Nam hiện c&oacute; khoảng 20 loại chanh v&agrave; chanh đ&agrave;o l&agrave; một trong số đ&oacute;.</p>\r\n<p class=\"Normal\">Chanh đ&agrave;o ng&acirc;m mật ong tốt cho sức khỏe, song lương y Nghĩa lưu &yacute; b&agrave;i thuốc n&agrave;y chỉ hiệu quả đối với c&aacute;c trường hợp mới chớm bệnh như đau họng, ho do nhiễm khuẩn hay dị ứng thời tiết. Kh&ocirc;ng d&ugrave;ng chanh đ&agrave;o cho bệnh nh&acirc;n ho k&egrave;m theo sốt. C&aacute;c trường hợp bệnh nặng như suy h&ocirc; hấp, hen suyễn, ung thư phổi... kh&ocirc;ng được tự &yacute; d&ugrave;ng chanh m&agrave; n&ecirc;n đến kh&aacute;m b&aacute;c sĩ chuy&ecirc;n khoa để được theo d&otilde;i v&agrave; điều trị, tr&aacute;nh biến chứng nguy hiểm.&nbsp;</p>\r\n<p class=\"Normal\">Ph&acirc;n t&iacute;ch th&agrave;nh phần dược l&yacute; cho thấy trong quả chanh chứa nhiều chất c&oacute; lợi cho cơ thể như vitamin C, nh&oacute;m vitamin B pectin, kali, canxi v&agrave; chất chống &ocirc;xy h&oacute;a. Tất cả c&aacute;c loại chanh, tắc th&ocirc;ng thường ng&acirc;m với mật ong hoặc chưng đường ph&egrave;n, cho th&ecirc;m&nbsp;gừng v&agrave;o d&ugrave;ng đều tốt cho người c&oacute; triệu chứng cảm lạnh,&nbsp;đau r&aacute;t họng,&nbsp;cơ thể h&agrave;n, vi&ecirc;m đại tr&agrave;ng, vi&ecirc;m dạ d&agrave;y mạn t&iacute;nh, đầy hơi, ti&ecirc;u chảy, đ&agrave;o thải độc tố...&nbsp;</p>\r\n<p class=\"Normal\">Người chưa bị bệnh c&oacute; thể uống một ly nước chanh hoặc tắc pha mật ong khi mới ngủ dậy để ph&ograve;ng ngừa. Lưu &yacute;: Kh&ocirc;ng d&ugrave;ng cho trẻ dưới một tuổi rưỡi. Kh&ocirc;ng n&ecirc;n pha qu&aacute; ngọt hay qu&aacute; chua v&igrave; kh&ocirc;ng tốt cho sức khỏe.</p>', 1495602084),
(6, 'Blog/blog-6-show.jpg', 'Nam giới muốn khỏe nên ăn gừng thường xuyên', 'Gừng tính ấm có tác dụng bổ thận, ích tinh, trị các chứng bệnh do thận hư gây ra như bất lực, ớn lạnh...', '<p><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-6-1.jpg\" alt=\"\" width=\"500\" height=\"407\" /></p>\r\n<p>Gừng. Ảnh: <em>Vietrap</em>.</p>\r\n<p class=\"Normal\">Theo <em>Health Sina</em>, gừng nổi tiếng l&agrave; thực phẩm trợ dương, c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; &ldquo;ho&agrave;n hồn thảo&rdquo;. Theo Đ&ocirc;ng y, gừng t&iacute;nh cay, ấm, c&oacute; thể đẩy l&ugrave;i cơn cảm lạnh, trị vi&ecirc;m, giảm ho, chống n&ocirc;n, giải độc, người xưa cho n&oacute; l&agrave; &ldquo;thuốc trị b&aacute;ch bệnh tại gia&rdquo;.</p>\r\n<p class=\"Normal\">Gừng t&ugrave;y mức độ tươi hay kh&ocirc; m&agrave; c&oacute; t&iacute;nh năng kh&aacute;c nhau. Gừng kh&ocirc; c&oacute; t&iacute;nh nhiệt, cay hơn, t&aacute;c dụng hồi dương tốt song t&aacute;c dụng nhuận phổi k&eacute;m hơn. V&igrave; vậy nước gừng l&agrave;m từ gừng tươi v&agrave; gừng kh&ocirc; c&oacute; c&ocirc;ng dụng kh&aacute;c nhau.</p>\r\n<p class=\"subtitle\">Gia tăng cảm gi&aacute;c th&egrave;m ăn v&agrave; chống l&atilde;o h&oacute;a</p>\r\n<p class=\"Normal\">Đ&agrave;n &ocirc;ng trung ni&ecirc;n thường bị lạnh dạ d&agrave;y, ch&aacute;n ăn dẫn đến sức khỏe k&eacute;m, c&oacute; thể sử dụng gừng tươi thường xuy&ecirc;n để k&iacute;ch th&iacute;ch sự tiết dịch dạ d&agrave;y, th&uacute;c đẩy ti&ecirc;u h&oacute;a.</p>\r\n<p class=\"Normal\">C&aacute;ch d&ugrave;ng: Gừng tươi xắt l&aacute;t, mỗi s&aacute;ng uống một ly nước ấm, cho l&aacute;t gừng v&agrave;o miệng nhai từ từ để m&ugrave;i gừng lan trong miệng đến dạ d&agrave;y v&agrave; tho&aacute;t ra ngo&agrave;i mũi.</p>\r\n<p class=\"subtitle\">Điều trị liệt dương</p>\r\n<p class=\"Normal\">Gừng c&oacute; t&iacute;nh ấm n&ecirc;n trị được c&aacute;c vấn&nbsp;đề do t&iacute;nh&nbsp;h&agrave;n g&acirc;y ra,&nbsp;đồng thời bồi bổ dạ d&agrave;y v&agrave;&nbsp;m&aacute;u. Gừng c&oacute; thể&nbsp;kết hợp với c&aacute; ch&eacute;p,&nbsp;sơn tra gi&uacute;p bổ thận, &iacute;ch tinh, s&aacute;ng mắt, điều trị c&aacute;c chứng bệnh do thận hư g&acirc;y ra như bất lực, ớn lạnh, đau lưng, mệt mỏi, suy nhược.</p>\r\n<p class=\"Normal\">Nguy&ecirc;n liệu chế biến gồm một&nbsp;con c&aacute; ch&eacute;p khoảng 500 g, gừng 10 g, sơn tra 10 g. C&aacute; l&agrave;m sạch ruột cho v&agrave;o nồi c&ugrave;ng với&nbsp;gừng v&agrave; sơn tra đun s&ocirc;i, th&ecirc;m rượu, muối, một ch&uacute;t&nbsp;bột ngọt cho vừa ăn. D&ugrave;ng khi bụng đ&oacute;i, mỗi ng&agrave;y ăn một&nbsp;lần, li&ecirc;n tục 5 ng&agrave;y.</p>\r\n<p class=\"Normal\">Lưu &yacute;:&nbsp;Gừng c&oacute; t&iacute;nh ấm, chỉ d&ugrave;ng khi bị lạnh, nếu d&ugrave;ng qu&aacute; nhiều sẽ tổn thương &acirc;m kh&iacute;. Người bị đau họng, cổ họng kh&ocirc;, ph&acirc;n kh&ocirc; v&agrave; c&aacute;c triệu chứng nhiệt kh&aacute;c kh&ocirc;ng n&ecirc;n d&ugrave;ng gừng.</p>', 1495602206),
(7, 'Blog/blog-1-show.jpg', 'Củ cải đỏ, thịt chim cút bổ dưỡng không kém nhân sâm', 'Cải củ đỏ giàu vitamin A, B, C, có thể chế biến thành nhiều món ngon miệng như salad, nấu canh, hầm.', '<p class=\"Image\"><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-7-1.jpg\" alt=\"\" width=\"500\" height=\"375\" /></p>\r\n<p class=\"Image\">Ảnh minh họa:<em> hatgiongdanang</em>.</p>\r\n<p class=\"Normal\">Theo <em>Health Sina</em>, nh&acirc;n s&acirc;m vốn nổi tiếng được biết đến như l&agrave; lo&agrave;i thực phẩm đại bổ, c&oacute; c&ocirc;ng hiệu bổ tỳ, &iacute;ch phế, dưỡng sinh. &Iacute;t người biết rằng củ cải đỏ, chim c&uacute;t v&agrave; một số loại rau củ kh&aacute;c cũng c&oacute; c&ocirc;ng hiệu dưỡng sinh bồi bổ kh&ocirc;ng k&eacute;m g&igrave; nh&acirc;n s&acirc;m.</p>\r\n<p class=\"subtitle\">Củ cải đỏ</p>\r\n<p class=\"Normal\">Củ cải đỏ được gọi l&agrave; \"tiểu nh&acirc;n s&acirc;m\" bởi gi&agrave;u dưỡng chất. Ph&acirc;n t&iacute;ch cho thấy củ cải đỏ rất gi&agrave;u dinh dưỡng: h&agrave;m lượng vitamin C gấp 8 lần t&aacute;o v&agrave; l&ecirc;, chứa protein, b&eacute;o, đường, vitamin B1, vitamin B2. Enzyme trong củ cải gi&uacute;p th&uacute;c đẩy ti&ecirc;u h&oacute;a, tăng cảm gi&aacute;c th&egrave;m ăn, trị ho v&agrave; đờm, giải kh&aacute;t, giải độc, chống ung thư, lợi mật v&agrave; c&oacute; t&aacute;c dụng hạ lipid.</p>\r\n<p class=\"Normal\">Củ cải đỏ c&ugrave;ng họ với bắp cải, s&uacute;p lơ, rau cải xanh&hellip;th&iacute;ch hợp trồng quanh năm. Củ c&oacute; m&agrave;u sắc đẹp mắt, nhiều&nbsp;nghi&ecirc;n cứu gần đ&acirc;y cho thấy n&oacute; c&ograve;n&nbsp;chứa nhiều vitamin v&agrave; kho&aacute;ng chất c&oacute; t&aacute;c dụng tăng cường hệ miễn dịch, tốt cho cả người lớn v&agrave; trẻ em. C&acirc;y rất dễ trồng, kh&ocirc;ng cần qu&aacute; nhiều đất, ph&ugrave; hợp trồng trong c&aacute;c chậu, bồn nhỏ tại nh&agrave;.&nbsp;</p>\r\n<p class=\"subtitle\">Chim c&uacute;t</p>\r\n<p class=\"Normal\">C&uacute;t l&agrave; lo&agrave;i nhỏ nhất của bộ g&agrave;, thịt gi&agrave;u protein v&agrave; c&aacute;c axit amin thiết yếu. Nghi&ecirc;n cứu cho thấy ăn thịt chim c&oacute; t&aacute;c dụng bổ tỳ, lợi tiểu, bổ g&acirc;n v&agrave; xương, điều kinh bổ huyết, bổ gan v&agrave; thận, bồi bổ cơ thể v&agrave; c&aacute;c c&ocirc;ng hiệu kh&aacute;c.</p>\r\n<p class=\"subtitle\">C&aacute; chạch</p>\r\n<p class=\"Normal\">C&aacute; chạch c&ograve;n được gọi l&agrave; \"s&acirc;m nước\". Lo&agrave;i n&agrave;y thịt mềm, thơm ngon, gi&aacute; trị dinh dưỡng v&agrave; chữa bệnh cao, l&agrave; thực phẩm điển h&igrave;nh gi&agrave;u protein v&agrave; &iacute;t chất b&eacute;o,&nbsp;mệnh danh l&agrave; \"thịt b&ograve; nước\".</p>\r\n<p class=\"Normal\">Lo&agrave;i c&aacute; n&agrave;y rất th&iacute;ch hợp cho người suy nhược, tỳ vị yếu, đổ mồ h&ocirc;i đ&ecirc;m, c&oacute; &iacute;ch trong điều trị vi&ecirc;m gan cấp. Quan điểm ph&acirc;n t&iacute;ch dinh dưỡng hiện đại cho thấy c&aacute; chạch &nbsp;rất gi&agrave;u canxi. C&ugrave;ng một trọng lượng như nhau, h&agrave;m lượng canxi trong c&aacute; chạch gấp gần 6 lần so với c&aacute; ch&eacute;p, 10 lần so với bạch tuộc. N&oacute; cũng gi&agrave;u vitamin D c&oacute; lợi cho qu&aacute; tr&igrave;nh hấp thu canxi của cơ thể. Ngo&agrave;i ra, c&aacute; chạch cũng gi&agrave;u spermidine v&agrave; nucleoside, gi&uacute;p tăng t&iacute;nh đ&agrave;n hồi v&agrave; độ ẩm da, l&agrave;m tăng hiệu lực kh&aacute;ng virus của cơ thể.</p>\r\n<p class=\"Normal\">C&aacute;ch chế biến c&aacute; chạch được đề nghị l&agrave; hấp, để bảo tồn gi&aacute; trị dinh dưỡng của n&oacute;, nếu ăn c&ugrave;ng với đậu phụ, hiệu quả hấp thụ canxi sẽ tốt hơn.</p>\r\n<p class=\"subtitle\">C&acirc;y s&acirc;m nam&nbsp;</p>\r\n<p class=\"Normal\">C&acirc;y s&acirc;m nam&nbsp;(gynostemma)&nbsp;c&ograve;n được gọi l&agrave; giảo cổ lam, d&acirc;y l&otilde;a l&ugrave;ng, trường sinh thảo, thất diệp đảm, hay ngũ diệp s&acirc;m. C&aacute;c nh&agrave; khoa học Nhật Bản nhận thấy th&agrave;nh phần của c&acirc;y n&agrave;y tương tự kết cấu của một số nh&acirc;n s&acirc;m dạng ginsenosides. Lo&agrave;i thực vật n&agrave;y c&ograve;n được gọi l&agrave; \"nh&acirc;n s&acirc;m thứ hai\", c&oacute; c&ocirc;ng hiệu chống l&atilde;o h&oacute;a, chống mệt mỏi, giải độc, chống ung thư, ho đờm, an thần, &iacute;ch kh&iacute;, giảm đau, bổ gan, gi&uacute;p điều chỉnh chức năng nội tiết, cải thiện khả năng miễn dịch, giảm cholesterol, ức chế men transaminase v&agrave; giảm căng thẳng.</p>\r\n<p class=\"subtitle\">Nhục thung dung</p>\r\n<p class=\"Normal\">Nhục thung dung&nbsp;c&oacute; t&ecirc;n khoa học l&agrave; cistanche. Lo&agrave;i thực vật n&agrave;y c&oacute; hoa thuộc họ cỏ chổi, thường ph&aacute;t triển trong sa mạc. Ph&acirc;n t&iacute;ch dược l&yacute; cho thấy nhục thung dung chứa alkaloid, axit amin, nguy&ecirc;n tố vi lượng, vitamin v&agrave; c&aacute;c th&agrave;nh phần kh&aacute;c, c&oacute; t&aacute;c dụng bổ thận dương, nhuận tr&agrave;ng, bổ m&aacute;u. Ngo&agrave;i ra c&ograve;n gi&uacute;p cải thiện chức năng miễn dịch, l&agrave;m chậm l&atilde;o h&oacute;a, chống liệt dương, xuất tinh sớm, mộng tinh, đ&aacute;i dầm, tiết dịch &acirc;m đạo qu&aacute; nhiều, v&ocirc; sinh, xuất huyết tử cung v&agrave; nhiều c&ocirc;ng dụng kh&aacute;c.</p>\r\n<p>&nbsp;</p>', 1495603306);
INSERT INTO `blog` (`id`, `image_title`, `name`, `title`, `content`, `date`) VALUES
(8, 'Blog/blog-5-show.jpg', '101 lợi ích từ quả măng cụt mà bạn chưa từng biết', 'Quả măng cụt giúp hỗ trợ điều trị và phòng ngừa ung thư, chống lão hóa, tinh thần hưng phấn.', '<p>Hỗ trợ điều trị v&agrave; ph&ograve;ng ngừa ung thư</p>\r\n<p class=\"Normal\">Măng cụt chứa h&agrave;m lượng c&aacute;c xanthone (một hợp chất h&oacute;a học c&oacute; hoạt t&iacute;nh chống oxy h&oacute;a) cao nhất trong c&aacute;c loại tr&aacute;i c&acirc;y, c&oacute; t&aacute;c dụng kh&aacute;ng vi&ecirc;m mạnh mẽ v&agrave; hỗ trợ ti&ecirc;u diệt c&aacute;c tế b&agrave;o ung thư. Chất n&agrave;y được t&igrave;m thấy nhiều trong vỏ măng cụt, song do c&oacute; vị đắng n&ecirc;n được kết hợp với một số vị kh&aacute;c để l&agrave;m thuốc trong Đ&ocirc;ng y. C&oacute; thể d&ugrave;ng vỏ măng cụt sắc uống để trị ti&ecirc;u chảy, kiết lỵ. Nước sắc d&ugrave;ng l&agrave;m dung dịch rửa vệ sinh phụ nữ.</p>\r\n<p class=\"Normal\"><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-8-1.png\" alt=\"\" width=\"567\" height=\"369\" /></p>\r\n<p class=\"subtitle\">Chống l&atilde;o h&oacute;a</p>\r\n<p class=\"Normal\">Mọi người thường chọn c&aacute;ch n&acirc;ng cao sức đề kh&aacute;ng, tăng cường khả năng miễn dịch để chống chọi với c&aacute;c bệnh tật bằng một số loại thuốc bổ như vitamine C v&agrave; E. Nghi&ecirc;n cứu cho thấy 2 vitamin n&agrave;y c&oacute; nhiều trong măng cụt, do vậy c&aacute;c chuy&ecirc;n gia khuy&ecirc;n ăn măng cụt tốt hơn uống thuốc bổ. Mỗi tuần ăn từ 2 đến 3 lần măng cụt gi&uacute;p chống l&atilde;o h&oacute;a, tăng sức đề kh&aacute;ng cho cơ thể.&nbsp;</p>\r\n<p class=\"subtitle\">Gi&uacute;p tinh thần hưng phấn</p>\r\n<p class=\"Normal\">Măng cụt chứa axit tryptophan li&ecirc;n hệ trực tiếp với serotonin mang lại giấc ngủ ngon, điều khiển t&acirc;m trạng v&agrave; khẩu vị, cảm gi&aacute;c thư th&aacute;i, hưng phấn tinh thần.</p>\r\n<p class=\"subtitle\">Giảm cholesterol, hạ huyết &aacute;p</p>\r\n<p class=\"Normal\">Khi cholesterol xấu bị l&atilde;o h&oacute;a sinh ra những mảng b&aacute;m trong mạch m&aacute;u. C&aacute;c c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu cho thấy, kh&aacute;ng thể xanthones trong măng cụt gi&uacute;p l&agrave;m giảm t&aacute;c dụng g&acirc;y l&atilde;o h&oacute;a của cholesterol xấu v&agrave; ngăn ngừa h&igrave;nh th&agrave;nh c&aacute;c mảng b&aacute;m. V&igrave; vậy, người bị bệnh cao huyết &aacute;p, tim mạch n&ecirc;n bổ sung loại tr&aacute;i c&acirc;y n&agrave;y v&agrave;o khẩu phần ăn.</p>\r\n<p class=\"subtitle\">Một số b&agrave;i thuốc hay từ quả măng cụt</p>\r\n<p class=\"Normal\">- Ti&ecirc;u chảy: D&ugrave;ng vỏ măng cụt kh&ocirc; 24 g, hạt th&igrave; l&agrave; mỗi thứ 2 g. Tất cả đem nấu lấy nước, uống 2 lần trong ng&agrave;y.</p>\r\n<p class=\"Normal\">- Lỵ: D&ugrave;ng vỏ quả măng cụt 6 g, rau sam, rau m&aacute;, cỏ nhọ nồi, cỏ sữa, mỗi thứ 8 g, tr&agrave; xanh loại ngon 6 g, cam thảo, vỏ qu&yacute;t, mỗi thứ 4 g, 3 l&aacute;t gừng. Hoặc d&ugrave;ng&nbsp;8 g&nbsp;vỏ quả măng cụt nướng thơm, rau m&aacute; 10 g; rau dền t&iacute;a, khổ s&acirc;m, gương sen, củ rối sao đen, vỏ lựu, mỗi vị 8 g, hạt cau gi&agrave; 6 g, cam thảo, vỏ qu&yacute;t nướng, mỗi vị 4 g. Tất cả nấu lấy nước uống trong ng&agrave;y.</p>\r\n<p class=\"Normal\">Lưu &yacute;: Bổ sung li&ecirc;n tục bất kỳ loại thảo dược n&agrave;o trong thời gian d&agrave;i đều kh&ocirc;ng được khuyến kh&iacute;ch v&agrave; măng cụt cũng kh&ocirc;ng ngoại lệ. Khi thấy c&aacute;c triệu chứng bệnh đ&atilde; giảm th&igrave; n&ecirc;n ngưng sử dụng.</p>', 1495603854),
(9, 'Blog/blog-4-show.jpg', 'Mùa hè ăn quả vải như thế nào để không bị nóng', 'Những người tạng hàn (mát) hoặc ôn hòa có thể ăn từ 15 đến 20 quả vải tươi mỗi ngày...', '<p class=\"Image\"><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-7-2.jpg\" alt=\"\" width=\"500\" height=\"368\" /></p>\r\n<p class=\"Image\">Quả vải. Ảnh:<em><strong> Menchies</strong></em>.</p>\r\n<p class=\"Normal\">Theo lương y Nguyễn Xu&acirc;n Hướng, Đ&ocirc;ng y gọi quả vải l&agrave; lệ chi, c&ugrave;i vải l&agrave; lệ chi nhục. Loại tr&aacute;i c&acirc;y n&agrave;y c&oacute; vị ngọt, hơi chua, t&iacute;nh ấm v&agrave;o hai kinh can (gan) v&agrave; thận. T&aacute;c dụng giải kh&aacute;t, trị chứng mệt nhọc do m&ugrave;a h&egrave; n&oacute;ng l&agrave;m tổn hao nước v&agrave; c&aacute;c loại dịch trong cơ thể.</p>\r\n<p class=\"Normal\">Vị ngọt của vải c&oacute; t&aacute;c dụng l&agrave;m m&aacute;t huyết, bồi bổ t&acirc;n dịch. C&ugrave;i vải c&oacute; th&agrave;nh phần của nước. Nước thuộc &acirc;m, thận của người chủ thủy, ăn vải v&agrave;o m&ugrave;a h&egrave; bồi bổ cho thận &acirc;m th&ecirc;m mạnh, l&agrave;m m&aacute;t b&agrave;ng quang n&ecirc;n kh&ocirc;ng bị đi tiểu rắt. Vị chua của vải đi v&agrave;o gan gi&uacute;p tăng cường điều tiết, giải độc, l&agrave;m m&aacute;t n&ecirc;n dễ ngủ, ăn uống ti&ecirc;u h&oacute;a tốt. Quả vải thường ăn tươi. Nếu l&agrave;m thuốc th&igrave; b&oacute;c ra lấy c&ugrave;i sấy kh&ocirc;, liều d&ugrave;ng ng&agrave;y từ 6 đến 12 g trong một số b&agrave;i thuốc để thanh nhiệt giải độc.</p>\r\n<p class=\"Normal\">Hạt vải trong Đ&ocirc;ng y gọi l&agrave; lệ chi hạch, vị hơi ngọt, t&iacute;nh s&aacute;p v&agrave;o kinh tỳ vị v&agrave; kinh thận, t&aacute;c dụng&nbsp;l&agrave;m ấm trung ti&ecirc;u, điều h&ograve;a tỳ vị, gi&uacute;p cho thận điều kh&iacute; tốt. Hạt&nbsp;phơi kh&ocirc;, gi&atilde; n&aacute;t, tẩm muối sao gi&uacute;p&nbsp;điều trị chứng tr&agrave;ng vị đau do thấp nhiệt, tinh ho&agrave;n sưng đau. Trong b&agrave;i thuốc chữa v&ocirc; sinh của nam giới bao giờ cũng c&oacute; vị lệ chi hạch để k&iacute;ch th&iacute;ch tinh ho&agrave;n sinh ra tinh tr&ugrave;ng, liều d&ugrave;ng từ 8 đến 16 g mỗi ng&agrave;y.</p>\r\n<p class=\"Normal\">Đ&ocirc;ng y ph&acirc;n chia cơ thể người th&agrave;nh c&aacute;c nh&oacute;m: Tạng nhiệt (n&oacute;ng), h&agrave;n (m&aacute;t) v&agrave; kh&ocirc;ng h&agrave;n kh&ocirc;ng nhiệt (&ocirc;n h&ograve;a).&nbsp;Quả vải c&oacute; t&iacute;nh ấm n&ecirc;n những&nbsp;người tạng h&agrave;n hoặc &ocirc;n h&ograve;a c&oacute; thể ăn nhiều tr&aacute;i n&agrave;y sẽ tốt. Người tạng nhiệt n&ecirc;n ăn &iacute;t. Cụ thể, người h&agrave;n (m&aacute;t) hoặc &ocirc;n h&ograve;a c&oacute; thể ăn từ 15 đến 20 quả tươi mỗi ng&agrave;y, chia l&agrave;m 2 lần s&aacute;ng v&agrave; chiều. Người tạng nhiệt ăn nhiều dễ sinh n&oacute;ng n&ecirc;n d&ugrave;ng tối đa 10 quả, chia l&agrave;m hai lần trong ng&agrave;y. Trẻ dưới 6 tuổi ăn từ 3 đến 4 quả, chia l&agrave;m hai lần trong ng&agrave;y.</p>\r\n<p class=\"Normal\">Nh&igrave;n chung cơ thể ch&uacute;ng ta cần nhiều chất trong một ng&agrave;y.&nbsp;Người xưa dạy &ldquo;ăn uống phải điều độ&rdquo;. Kh&ocirc;ng n&ecirc;n ăn một chất với số lượng nhiều trong ng&agrave;y sẽ kh&ocirc;ng hấp thu hết, phải đ&agrave;o thải qu&aacute; nhiều, l&agrave;m cơ thể mất c&acirc;n bằng &acirc;m dương m&agrave; sinh bệnh. Chẳng hạn như bệnh ti&ecirc;u chảy đối với người cơ thể tạng h&agrave;n. Đối với người cơ thể tạng nhiệt dễ sinh ra chứng r&ocirc;m sảy, n&oacute;ng trong người, t&aacute;o b&oacute;n, đại tiện ra m&aacute;u... Người b&ecirc;̣nh ti&ecirc;̉u đường dù cơ th&ecirc;̉ là hàn cũng kh&ocirc;ng n&ecirc;n ăn nhi&ecirc;̀u.</p>', 1495604246),
(10, 'Blog/blog-3-show.jpg', 'Muốn sống lâu, mỗi ngày nên ăn 5-6 trứng cút', 'Trứng cút giúp bổ não, điều kinh bổ huyết, làm đẹp da, ngăn ngừa thiếu máu.', '<table class=\"tplCaption\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"http://img.f41.suckhoe.vnecdn.net/2016/07/04/trung-cut-2442-1467624855.jpg\" alt=\"muon-song-lau-moi-ngay-nen-an-5-6-trung-cut\" data-natural-width=\"500\" data-width=\"500\" data-pwidth=\"680\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class=\"Image\">Ảnh:&nbsp;<em>diadiemanuong</em>.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"Normal\">Theo <em>Health Sina</em>, trong Đ&ocirc;ng y trứng v&agrave; thịt chim c&uacute;t lu&ocirc;n được xem l&agrave; thực phẩm bổ dưỡng v&agrave; c&oacute; gi&aacute; trị chữa bệnh cao. Ng&agrave;y xưa m&oacute;n n&agrave;y&nbsp;thường được d&acirc;ng cho vua ăn, n&ecirc;n được coi l&agrave; loại thực phẩm qu&yacute; của cung đ&igrave;nh.</p>\r\n<p class=\"Normal\">Khoa học ng&agrave;y nay chứng minh trứng c&uacute;t c&oacute; t&aacute;c dụng&nbsp;điều kinh bổ huyết, l&agrave;m đẹp da, ngăn ngừa thiếu m&aacute;u tiền sản v&agrave; sau sinh cho phụ nữ mang thai, được xem l&agrave; loại thực phẩm gi&uacute;p&nbsp;tăng cường tuổi thọ.</p>\r\n<p class=\"Normal\">Mới đ&acirc;y, một nghi&ecirc;n cứu của Anh khẳng định&nbsp;trứng c&uacute;t l&agrave; \"vi&ecirc;n thuốc bổ n&atilde;o của tự nhi&ecirc;n\". Loại&nbsp;trứng n&agrave;y&nbsp;chứa lecithin v&agrave; cephalin cao hơn từ&nbsp;3 đến&nbsp;4 lần so với trứng g&agrave; thường. Đ&acirc;y l&agrave; c&aacute;c chất dinh dưỡng thiết yếu cho hoạt động thần kinh, bổ n&atilde;o. Trứng c&uacute;t c&ograve;n&nbsp;c&oacute; lượng vitamin D phong ph&uacute;. C&aacute;c nh&agrave; khoa học từ&nbsp;Đại học Manchester thực hiện&nbsp;nghi&ecirc;n cứu tr&ecirc;n hơn 3.000 người đ&agrave;n &ocirc;ng,&nbsp;ph&aacute;t hiện những&nbsp;người c&oacute; h&agrave;m lượng vitamin D cao trong cơ thể th&igrave; c&oacute; tr&iacute; nhớ v&agrave; khả năng xử l&yacute; th&ocirc;ng tin tốt hơn.</p>\r\n<p class=\"Normal\">Ph&acirc;n tử dinh dưỡng của trứng c&uacute;t kh&aacute; nhỏ, dễ hấp thu v&agrave; sử dụng hơn trứng g&agrave;. Mức cholesterol của trứng c&uacute;t cũng thấp hơn trứng g&agrave;, cụ thể khoảng 515 mg cholesterol trong&nbsp;mỗi g trứng c&uacute;t, trong khi đ&oacute; ở trứng g&agrave; l&agrave; 585 mg.</p>\r\n<p class=\"Normal\">Nh&oacute;m nghi&ecirc;n cứu khuy&ecirc;n người lao động tr&iacute; &oacute;c n&ecirc;n ăn từ 5&nbsp;đến&nbsp;6 quả trứng c&uacute;t mỗi ng&agrave;y, tốt nhất l&agrave; hấp hoặc luộc để đảm bảo lượng&nbsp;dinh dưỡng tối ưu.</p>', 1495604499),
(11, 'Blog/blog-6-show.jpg', 'Ăn rau diếp cá giúp tóc bạc trở nên đen', 'Các hoạt chất trong rau diếp giúp thúc đẩy quá trình mọc tóc, biến tóc bạc thành đen', '<p><img src=\"http://img.f41.suckhoe.vnecdn.net/2016/05/26/rau-diep-ca-5842-1464225184.jpg\" alt=\"an-rau-diep-ca-giup-toc-bac-tro-nen-den\" data-natural-width=\"500\" data-width=\"500\" data-pwidth=\"680\" /></p>\r\n<p class=\"Image\">Rau diếp c&aacute;. Ảnh:<em> News.</em></p>\r\n<p class=\"Normal\">C&aacute;c chuy&ecirc;n gia của<em> Health Sina</em>&nbsp;khuy&ecirc;n người bị bạc t&oacute;c n&ecirc;n thường xuy&ecirc;n ăn rau diếp c&aacute; sẽ gi&uacute;p t&oacute;c mọc đen trở lại. Diếp c&aacute; c&ograve;n gọi l&agrave; dấp c&aacute;, ngư tinh thảo, rau vẹn, tập th&aacute;i. C&oacute; vị tanh h&ocirc;i, t&iacute;nh hơi lạnh.&nbsp;</p>\r\n<p class=\"Normal\">Đ&ocirc;ng y d&ugrave;ng to&agrave;n bộ c&acirc;y n&agrave;y để l&agrave;m thuốc.&nbsp;Ph&acirc;n t&iacute;ch dược l&yacute; cho thấy diếp c&aacute; gi&agrave;u&nbsp;chất dinh dưỡng với&nbsp;th&agrave;nh phần ch&iacute;nh l&agrave; carbohydrate, protein, chất b&eacute;o v&agrave;&nbsp;một số tiền chất&nbsp;nhất định của N-methyl xeton, axit lauryl. D&ugrave;ng l&agrave;m thuốc trị cảm c&uacute;m v&agrave; phế cầu khuẩn, giải độc, thanh nhiệt, giảm đau, trị ho, trị đau dạ d&agrave;y, d&ugrave;ng ngo&agrave;i trị ghẻ, nấm eczema, bệnh trĩ tắc mạch... Đặc biệt rau c&oacute; t&aacute;c dụng&nbsp;th&uacute;c đẩy mọc t&oacute;c, gi&uacute;p t&oacute;c bạc đen trẻ lại, đồng thời&nbsp;bồi bổ cơ thể.</p>\r\n<p class=\"Normal\">Rễ c&acirc;y diếp c&aacute; mềm v&agrave; gi&ograve;n, c&oacute; vị tanh nhẹ, l&agrave; bộ phận được ăn chủ yếu. C&oacute; thể ăn sống hoặc nấu ch&iacute;n. C&agrave;nh, l&aacute; d&ugrave;ng để trộn salad, x&agrave;o, ng&acirc;m muối hoặc chế biến đồ uống&nbsp;c&ugrave;ng với tr&agrave;, rượu rất&nbsp;tốt cho sức khỏe.</p>\r\n<p class=\"Normal\">Lưu &yacute; khi ăn sống cần rửa sạch, b&oacute;p muối để tho&aacute;t bớt nước. Để m&oacute;n salad ngon hơn c&oacute; thể trộn với gừng, dầu m&egrave;, l&agrave;m gỏi, th&ecirc;m gia vị kh&aacute;c t&ugrave;y theo sở th&iacute;ch. Diếp c&aacute; l&agrave; gi&uacute;p giữ hương vị thuần t&uacute;y của m&oacute;n ăn v&agrave; dậy m&ugrave;i thơm độc đ&aacute;o. Nếu muốn nấu ch&iacute;n c&oacute; thể chế biến m&oacute;n diếp c&aacute; chi&ecirc;n trứng, canh diếp c&aacute;, diếp c&aacute; om thịt, diếp c&aacute; thịt heo chi&ecirc;n ớt.</p>', 1495604582),
(12, 'Blog/blog-2-show.jpg', 'Ăn xoài giúp chống ung thư, béo phì', 'Được mệnh danh là \"vua của các loại trái cây\", xoài có thể giúp cơ thể phòng chống ung thư', '<p class=\"Normal\">Theo <em>Daily Expresss</em>, loại&nbsp;tr&aacute;i c&acirc;y nhiệt đới n&agrave;y chứa nhiều chất xơ, vitamin, kho&aacute;ng chất, chất chống oxy h&oacute;a v&agrave; phytochemical. Ch&uacute;ng&nbsp;c&oacute; thể gi&uacute;p cơ thể giảm t&aacute;c hại của chế độ ăn uống kh&ocirc;ng l&agrave;nh mạnh v&agrave; ti&ecirc;u diệt c&aacute;c tế b&agrave;o mỡ.&nbsp;</p>\r\n<p class=\"Normal\">C&aacute;c nghi&ecirc;n cứu mới cho thấy xo&agrave;i th&uacute;c đẩy qu&aacute; tr&igrave;nh chuyển h&oacute;a chất b&eacute;o, ngăn ngừa b&eacute;o ph&igrave; v&agrave; c&aacute;c bệnh li&ecirc;n quan.&nbsp;B&eacute;o ph&igrave; được ước t&iacute;nh ảnh hưởng đến một trong 4 người lớn v&agrave; một tr&ecirc;n 5 trẻ em ở Anh, l&agrave;m tăng nguy cơ mắc bệnh tiểu đường, tim, ung thư v&agrave; đột quỵ.</p>\r\n<table class=\"tplCaption\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"http://localhost:81/Clem/uploads/products/Blog/blog-12-1.jpg\" alt=\"\" width=\"500\" height=\"385\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p class=\"Image\">Ảnh:<em> piara.</em></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class=\"Normal\">Xo&agrave;i l&agrave;m chậm sự tăng trưởng của c&aacute;c khối u v&uacute; ở chuột.&nbsp;Một polyphenol trong xo&agrave;i l&agrave; gallotannins&nbsp;gi&uacute;p ức chế sự ph&aacute;t triển của bệnh ung thư v&uacute;. Theo c&aacute;c chuy&ecirc;n gia, ước t&iacute;nh cứ 10 ca ung thư mới được chẩn đo&aacute;n th&igrave; c&oacute; một ung thư v&uacute;. Kết quả n&agrave;y gi&uacute;p mở ra hướng nghi&ecirc;n cứu mới trong điều trị ung thư v&uacute;.</p>\r\n<p class=\"Normal\">Xo&agrave;i th&uacute;c đẩy nhu động ruột ở người v&agrave; giảm vi&ecirc;m sau khi t&aacute;o b&oacute;n.&nbsp;So với chất xơ bổ sung, ăn xo&agrave;i cải thiện c&aacute;c th&ocirc;ng số đường ruột, l&agrave;m giảm sản xuất nội độc tố, giảm vi&ecirc;m...&nbsp;T&aacute;o b&oacute;n l&agrave;&nbsp;bệnh ti&ecirc;u h&oacute;a li&ecirc;n quan với vi&ecirc;m ruột v&agrave; l&agrave;m suy giảm đ&aacute;ng kể chất lượng cuộc sống, ảnh hưởng 10-20% d&acirc;n số ở Mỹ.&nbsp;</p>\r\n<p class=\"Normal\">C&aacute;c nghi&ecirc;n cứu trước đ&acirc;y cũng ph&aacute;t hiện xo&agrave;i&nbsp;l&agrave;m giảm cholesterol, sạch da, cải thiện sức khỏe mắt v&agrave; ti&ecirc;u h&oacute;a, đẩy mạnh quan hệ t&igrave;nh dục.&nbsp;Ngo&agrave;i c&aacute;ch ăn như tr&aacute;i c&acirc;y, sinh tố, xo&agrave;i d&ugrave;ng l&agrave;m&nbsp;salad hoặc chế biến nhiều m&oacute;n ăn, nướt sốt...</p>', 1495604705);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `created_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `status`, `created_date`) VALUES
(1, 'Rau Củ Quả', 'Danh mục rau củ quả nói chung', 1, 1495276915),
(2, 'Trái cây', 'Danh mục rau trái cây nói chung', 1, 1495276956),
(3, 'Thực phẩm', 'Danh mục rau thực phẩm nói chung', 1, 1495276980),
(4, 'Sản phẩm khác', 'Danh mục các sản phẩm khác', 1, 1495277000);

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

INSERT INTO `order` (`id`, `customer_id`, `total_amount`, `status`, `note`, `created_date`) VALUES
(1, 23, 20000, 0, 'dsadsad', 1495419164),
(2, 24, 200000, 0, 'Sao ko được', 1495419605),
(7, 22, 28000, 0, 'hello', 1495423491),
(8, 22, 126500, 0, 'HI', 1495432270),
(9, 22, 5000, 0, 'helo', 1495437942),
(12, 27, 60000, 0, 'chan v oai', 1495439715),
(14, 22, 170000, 2, '2222', 1495440431),
(15, 28, 140000, 0, 'ko co note', 1495440683),
(16, 29, 90000, 0, 'tung tran', 1495441317),
(17, 30, 105000, 0, '1111', 1495441485),
(18, 31, 35000, 0, '', 1495441568),
(19, 32, 105000, 0, 'dsadas', 1495441666),
(20, 22, 105000, 0, '', 1495442083),
(21, 22, 90000, 1, '', 1495442894),
(22, 22, 228000, 0, '', 1495442952),
(23, 1, 219000, 0, 'helo cac ban', 1495530502),
(24, 2, 51400, 0, 'Tuyet cu meo', 1495645941),
(25, 33, 61000, 0, 'tùng đz', 1495647290),
(29, 22, 68000, 0, 'Tùng 25/05', 1495729835),
(30, 2, 80000, 0, 'chiến 2', 1495730362),
(31, 2, 13000, 0, 'chiến 3', 1495730422),
(32, 2, 60000, 0, '', 1495733458),
(34, 22, 14000, 0, 'Tùng 26/05', 1495788345),
(35, 22, 50000, 0, 'Hay lắm đ mm', 1495788639),
(37, 22, 8000, 0, 'Tùng test mail 2', 1495789030),
(38, 57, 45000, 0, 'cscscsccscsc', 1495789331),
(39, 58, 45000, 0, 'cscscsc', 1495789593),
(40, 58, 45000, 0, 'cscscsc', 1495789600),
(41, 58, 45000, 0, 'cscscsc', 1495789604),
(42, 58, 45000, 0, 'cscscsscsc1', 1495789655),
(43, 58, 45000, 0, 'cscscsscsc1', 1495789658),
(44, 58, 45000, 0, 'cscscsscsc1', 1495789664),
(45, 22, 80000, 0, 'fdfdfdfdfdfd', 1495789883),
(46, 58, 35000, 0, 'cscsscsscscsscs', 1495790025),
(47, 58, 45000, 0, 'cscscssccccscs', 1495790136),
(48, 58, 45000, 0, 'cscscssccccscs', 1495790141),
(49, 58, 45000, 0, 'cscscssccccscs', 1495790167),
(50, 58, 45000, 0, 'cscscssccccscs', 1495790508),
(51, 58, 35000, 0, 'cscscscssc', 1495790533),
(52, 58, 35000, 0, 'cscscscssc', 1495790539),
(53, 58, 35000, 0, 'cscscscssc', 1495790542),
(54, 58, 40000, 0, 'vđvđ', 1495790593),
(55, 22, 35000, 0, 'test mail 3', 1495790996),
(56, 22, 45000, 0, '', 1495791645),
(57, 58, 90000, 0, 'cscscsscscs', 1495791706),
(58, 58, 135000, 0, 'fsfssfsfsfs', 1495791875),
(59, 22, 60000, 0, 'test mail 4', 1495792466),
(60, 22, 15000, 0, '', 1495792528),
(63, 61, 10000, 0, 'eo dc cl', 1495816399),
(64, 22, 179000, 0, 'adffsa', 1495817205),
(65, 62, 73000, 0, 'ada', 1495817288),
(66, 62, 101000, 0, 'fgsdgfsd', 1495817444),
(67, 62, 101000, 0, 'fgsdgfsd', 1495817451),
(68, 62, 150000, 0, 'adfafsa', 1495817501),
(69, 62, 20000, 0, 'adfaf', 1495817572),
(70, 62, 20000, 0, 'adafd', 1495817698),
(77, 71, 40000, 0, 'test mail 13', 1495821425),
(78, 71, 100000, 0, 'test last?', 1495821525),
(79, 71, 100000, 0, 'test mail last', 1495822074),
(80, 71, 52000, 0, 'test cuoi', 1495822163),
(81, 71, 20000, 0, 'test 15', 1495822459);

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

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `price`, `return_status`) VALUES
(1, 58, 2, 10000, 0),
(2, 3, 4, 50000, 0),
(3, 10, 1, 80000, 0),
(4, 31, 1, 20000, 0),
(5, 51, 2, 30000, 0),
(5, 54, 1, 13000, 0),
(6, 2, 1, 45000, 0),
(6, 6, 2, 60000, 0),
(7, 11, 1, 13000, 0),
(7, 12, 1, 15000, 0),
(8, 16, 3, 5000, 0),
(8, 28, 3, 10500, 0),
(8, 4, 2, 40000, 0),
(9, 19, 1, 5000, 0),
(10, 3, 1, 50000, 0),
(10, 7, 1, 60000, 0),
(11, 6, 3, 60000, 0),
(11, 45, 2, 10000, 0),
(11, 38, 2, 1000, 0),
(12, 51, 2, 30000, 0),
(13, 5, 1, 50000, 0),
(13, 20, 2, 10000, 0),
(14, 10, 1, 80000, 0),
(14, 9, 1, 90000, 0),
(15, 4, 1, 40000, 0),
(15, 8, 1, 80000, 0),
(15, 32, 1, 10000, 0),
(15, 33, 1, 10000, 0),
(16, 8, 1, 80000, 0),
(16, 14, 1, 10000, 0),
(17, 2, 1, 45000, 0),
(17, 7, 1, 60000, 0),
(18, 1, 1, 35000, 0),
(19, 27, 3, 35000, 0),
(20, 35, 1, 5000, 0),
(20, 47, 1, 100000, 0),
(21, 3, 1, 50000, 0),
(21, 4, 1, 40000, 0),
(22, 17, 1, 8000, 0),
(22, 29, 1, 20000, 0),
(22, 48, 1, 200000, 0),
(23, 9, 2, 90000, 0),
(23, 53, 3, 13000, 0),
(24, 18, 3, 8000, 0),
(24, 59, 2, 13700, 0),
(25, 6, 1, 60000, 0),
(25, 46, 1, 1000, 0),
(26, 47, 1, 100000, 0),
(27, 62, 1, 210000, 0),
(28, 59, 1, 13700, 0),
(29, 22, 3, 15000, 0),
(29, 11, 1, 13000, 0),
(29, 41, 1, 10000, 0),
(30, 8, 1, 80000, 0),
(31, 53, 1, 13000, 0),
(32, 5, 1, 50000, 0),
(32, 45, 1, 10000, 0),
(33, 5, 1, 50000, 0),
(34, 55, 1, 14000, 0),
(35, 5, 1, 50000, 0),
(36, 5, 1, 50000, 0),
(37, 18, 1, 8000, 0),
(38, 2, 1, 45000, 0),
(39, 2, 1, 45000, 0),
(42, 2, 1, 45000, 0),
(45, 2, 1, 45000, 0),
(45, 1, 1, 35000, 0),
(46, 1, 1, 35000, 0),
(47, 2, 1, 45000, 0),
(51, 1, 1, 35000, 0),
(54, 4, 1, 40000, 0),
(55, 1, 1, 35000, 0),
(56, 2, 1, 45000, 0),
(57, 2, 2, 45000, 0),
(58, 2, 3, 45000, 0),
(59, 6, 1, 60000, 0),
(60, 22, 1, 15000, 0),
(61, 1, 1, 35000, 0),
(62, 4, 1, 40000, 0),
(62, 47, 1, 100000, 0),
(63, 14, 1, 10000, 0),
(64, 41, 1, 10000, 0),
(64, 63, 1, 169000, 0),
(65, 7, 1, 60000, 0),
(65, 11, 1, 13000, 0),
(66, 47, 1, 100000, 0),
(66, 42, 1, 1000, 0),
(68, 9, 1, 90000, 0),
(68, 6, 1, 60000, 0),
(69, 65, 1, 15000, 0),
(69, 34, 1, 5000, 0),
(70, 58, 1, 10000, 0),
(70, 33, 1, 10000, 0),
(71, 2, 1, 45000, 0),
(71, 48, 1, 200000, 0),
(72, 11, 1, 13000, 0),
(73, 23, 1, 10000, 0),
(74, 47, 1, 100000, 0),
(75, 4, 1, 40000, 0),
(76, 3, 1, 50000, 0),
(77, 4, 1, 40000, 0),
(78, 4, 1, 40000, 0),
(78, 6, 1, 60000, 0),
(79, 66, 4, 25000, 0),
(80, 5, 1, 50000, 0),
(80, 37, 1, 2000, 0),
(81, 44, 2, 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `detail_product` text COLLATE utf8_unicode_ci,
  `views` int(11) DEFAULT NULL,
  `id_subcate` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `detail_product`, `views`, `id_subcate`, `status`, `created_date`) VALUES
(1, 'Quả Mâm Xôi ', 'qua-chanh.jpg', 35000, '<p>M&acirc;m x&ocirc;i l&agrave; một loại c&acirc;y lai tạo từ một số giống c&acirc;y với c&aacute;c c&acirc;y kh&aacute;c trong chi M&acirc;m x&ocirc;i thuộc họ Rosaceae. Ch&uacute;ng c&oacute; rất nhiều t&aacute;c dụng n&ecirc;n được trồng phổ biến ở nhiều quốc gia, trong đ&oacute; c&oacute; &Uacute;c. C&acirc;y m&acirc;m x&ocirc;i cũng được lai để tạo ra những loại c&acirc;y kh&aacute;c như: boysenberry, hildaberry, tayberry, tummelberry, Veitch berry v&agrave; youngberry. M&acirc;m x&ocirc;i c&oacute; 2 loại ch&iacute;nh: M&acirc;m x&ocirc;i đỏ v&agrave; m&acirc;m x&ocirc;i đen. Ch&uacute;ng ta dễ d&agrave;ng ph&acirc;n biệt ch&uacute;ng bằng m&agrave;u sắc.</p>', 15, 22, 1, 1495299705),
(2, 'Quả Việt quất', 'qua-viet-quat.jpg', 45000, 'Quả việt quất rất giàu chất xơ, một loại chất dinh dưỡng giúp ngăn ngừa táo bón. Bên cạnh đó, khả năng đồng hóa chất natri, fructose và các vitamin trong quả việt quất có tác dụng rất lớn trong việc cải thiện tiêu hóa.\r\n\r\nCác nhà nghiên cứu của Đại học Michigan đã chỉ ra rằng, quả việt quất có tác dụng giảm mỡ bụng. Nghiên cứu được tiến hành trên chuột trong thời hạn 90 ngày. Các nhà khoa học đã tạo ra một hỗn hợp bột trong đó thành phần chủ yếu là quả việt quất và kết quả là những con chuột này có ít mỡ bụng hơn so với chuột không có quả việt quất trong chế độ ăn.', 1, 22, 1, 1495299705),
(3, 'Quả Chanh đào', 'qua-chanh-dao.jpg', 50000, 'Chanh đào hà nội , một thức loại thức uống ngon, giải khát thanh nhiệt cho mùa hè nắng nóng. không những thế chanh đào còn là  một loại thuốc đông y trị ho vô cùng hiệu quả dành cho tất cả mọi người, đồng thời giúp bảo vệ sức khỏe của bạn không bị ảnh hưởng của thời tiết khi có sự thay đổi\r\n\r\n+ chanh đào ngâm mật ong :  là một bài thuốc phù hợp với mọi gia đình đặc biệt là nhà có con nhỏ từ 2 tuổi trở lên. Vào ngày thời tiết lạnh hay khi trẻ mới bắt đầu ho thì buổi sáng khi thức dậy lấy một muổng nước chanh đào ngâm mật ong cho trẻ uống, với người lớn thì cắt lát quả chanh ngâm rồi trộn đều với nước trong bình, sau đó nhai và ngậm khoảng 20 phút, rồi nuốt, ngày làm vài lần.', 1, 22, 1, 1495299705),
(4, 'Quả Dứa', 'qua-dua.jpg', 40000, 'Quả dứa', 1, 22, 1, 1495276915),
(5, 'Quả Hồng', 'qua-hong.jpg', 50000, 'quả hồng', 1, 22, 1, 1495276915),
(6, 'Quả Lê', 'qua-le.jpg', 60000, 'quả lê', 1, 22, 1, 1495276915),
(7, 'Quả Cam', 'qua-cam.jpg', 60000, 'Quả cam', 1, 22, 1, 1495276915),
(8, 'Quả Bưởi', 'qua-buoi.jpg', 80000, 'quả bưởi', 1, 22, 1, 1495276915),
(9, 'Quả Thanh Long', 'qua-thanh-long.jpg', 90000, 'quả thanh long', 1, 22, 1, 1495276915),
(10, 'Quả Cam Xoàn', 'qua-cam-xoan.jpg', 80000, 'qua cam xoan', 1, 22, 1, 1495276915),
(11, 'Quả Sầu Riêng', 'qua-sau-rieng.jpg', 13000, 'quả sầu riêng', 1, 22, 1, 1495276915),
(12, 'Quả Dâu Tây', 'dau-tay.jpg', 15000, 'dau tây', 1, 23, 1, 1495276915),
(13, 'RedBerry', 'RedBerry.jpg', 20000, 'RedBerry', 1, 23, 1, 1495276915),
(14, 'Súp Lơ', 'sup-lo.jpg', 10000, 'supm lo', 1, 19, 1, 1495276915),
(15, 'Ớt Đà lạt', 'ot-da-lat.jpg', 35000, 'ớt đà lạt', 1, 20, 1, 1495276915),
(16, 'Cần tây', 'can-tay.jpg', 5000, 'can tay', 1, 19, 1, 1495276915),
(17, 'Cải Canh', 'cai-canh.jpg', 8000, 'cải canh', 1, 19, 1, 1495276915),
(18, 'Bắp Cải', 'bap-cai.jpg', 8000, 'bắp cải', 1, 19, 1, 1495276915),
(19, 'Mùi Tàu', 'mui-tau.jpg', 5000, 'mui tau', 1, 19, 1, 1495276915),
(20, 'Dưa Chuột', 'dua-chuot.jpg', 10000, 'dua chuot', 1, 20, 1, 1495276951),
(21, 'Cà Chua', 'ca-chua.jpg', 20000, 'cà chua', 1, 20, 1, 1495276951),
(22, 'Carrot', 'carrot.jpg', 15000, 'carrot', 1, 20, 1, 1495277623),
(23, 'Su Hào', 'su-hao.jpg', 10000, 'su hào', 1, 20, 1, 1495280650),
(24, 'Nấm Sò Nâu', 'nam-so-nau.jpg', 35, 'nam', 1, 21, 1, 1495280650),
(25, 'Nấm Kim', 'nam-kim.jpg', 30500, 'nấm', 1, 21, 1, 1495277623),
(26, 'Nấm Ngô', 'nam-ngo.jpg', 35000, 'nấm', 1, 21, 1, 1495280650),
(27, 'Nấm Sò Trắng', 'nam-so-trang.jpg', 35000, 'nấm', 1, 21, 1, 1495277623),
(28, 'Quả Chanh', 'qua-chanh.jpg', 10500, 'Chanh', 0, 22, 1, 1495276007),
(29, 'Qua Cà Tím', 'qua-ca-tim.jpg', 20000, 'Cà Tím', 0, 23, 1, 1495276488),
(30, 'Quả Nho', 'qua-nho.jpg', 30000, 'Nho', 0, 22, 1, 1495276631),
(31, 'Qua Kiwi Vàng', 'qua-ki-wi-vang-sua.jpg', 20000, 'Kiwi vàng', 0, 22, 1, 1495276720),
(32, 'Mướp Đắng', 'muop-dang.jpg', 10000, 'Mướp Đắng', 0, 20, 1, 1495276778),
(33, 'Bi Ngoi Xanh', 'bi-ngoi-xanh.jpg', 10000, 'Bí Ngòi Xanh', 0, 20, 1, 1495276844),
(34, 'Rau Muống', 'rau-muong.jpg', 5000, 'Rau Muống', 0, 19, 1, 1495276915),
(35, 'Bí Ngô', 'bi-ngo.jpg', 5000, 'Bí Ngô', 0, 20, 1, 1495276951),
(36, 'Giá Đỗ', 'gia-do.jpg', 5000, 'Giá Đỗ', 0, 21, 1, 1495277025),
(37, 'Rau Cải Bó Xôi', 'cai-bo-xoi.jpg', 2000, 'Cải Bó Xôi', 0, 19, 1, 1495277189),
(38, 'Nấm Hương', 'nam-huong.jpg', 1000, 'Nấm Hương', 0, 21, 1, 1495277385),
(39, 'Cải Thảo', 'cai-thao.jpg', 5000, 'Cải Thảo', 0, 19, 1, 1495277555),
(40, 'Ổi', 'oi.jpg', 5000, 'Ổi', 0, 22, 1, 1495277623),
(41, 'Xoài', 'xoai.jpg', 10000, 'Xoài', 0, 22, 1, 1495277720),
(42, 'Rau Diếp Thơm', 'Diep-thom.png', 1000, 'Rau Diếp Thơm', 0, 19, 1, 1495278086),
(43, 'Mùi Tàu Răng Cưa', 'mui-tau-rang-cua.png', 1000, 'Mùi Tàu Răng Cưa', 0, 19, 1, 1495278154),
(44, 'Thịt Gà', 'thit-ga.jpg', 10000, 'Thịt Gà', 0, 25, 1, 1495280650),
(45, 'Cá', 'ca.jpg', 10000, 'Cá', 0, 24, 1, 1495288660),
(46, 'Ba Chỉ Lợn', 'ba-chi-lon.jpg', 1000, 'Ba Chỉ Lợn', 0, 24, 1, 1495299289),
(47, 'Thit Bò', 'thit-bo.jpg', 100000, 'Thit Bò', 0, 25, 1, 1495299341),
(48, 'Thịt Lưng Cừu', 'thit-lung-cuu.jpg', 200000, 'Thịt Lưng Cừu ', 0, 25, 1, 1495299585),
(49, 'Thịt Mông Bò', 'thit-mong-bo.jpg', 200000, 'Thit Mông Bò', 0, 25, 1, 1495299667),
(50, 'Thịt Thăn Lợn', 'thit-than-lon.jpg', 20000, 'Thịt Thăn Lợn', 0, 24, 1, 1495299705),
(51, 'Vai Bò', 'vai-bo.jpg', 30000, 'Vai Bò', 0, 24, 1, 1495299743),
(52, 'Xương Cừu', 'xuong-cuu.jpg', 50000, 'Xương Cừu', 0, 24, 1, 1495299766),
(53, 'Gạo Bông Sen Vàng', 'gao-bong-sen-vang.jpg', 13000, 'Gạo bông sen vàng', 0, 26, 1, 1495299841),
(54, 'Gạo Rồng Vàng', 'gao-chin-con-rong.jpg', 13000, 'Gạo Rồng Vàng', 0, 26, 1, 1495300847),
(55, 'Gạo nàng thơm', 'gao-nang-thom-cho-dao.jpg', 14000, 'Gạo nàng thơm chợ đào\r\n', 0, 26, 1, 1495301160),
(56, 'Gạo sữa Mai Vàng', 'gao-sua-mai-vang.jpg', 14000, 'Gạo sữa Mai Vàng\r\n', 0, 26, 1, 1495301196),
(57, 'Gạo thiên nga ', 'gao-thien-nga.jpg', 10000, 'Gạo thiên nga\r\n', 0, 26, 1, 1495301222),
(58, 'Gạo Thơm 4900', 'gao-thom-4900.jpg', 10000, 'Gạo Thơm 4900', 0, 26, 1, 1495301247),
(59, 'Gạo thơm 6976', 'gao-thom-6976.jpg', 13700, 'Gạo thơm 6976', 0, 26, 1, 1495301278),
(60, 'Gạo thơm lài', 'gao-thom-lai.jpg', 10000, 'Gạo thơm lài', 0, 26, 1, 1495301323),
(61, 'Gạo thơm mỹ', 'gao-thom-my.jpg', 13000, 'Gạo thơm mỹ', 0, 26, 1, 1495301332),
(62, 'Nho Úc không hạt', 'nho-den-uc.jpg', 210000, 'Nho đen không hạt Úc thuộc chủng Adora với kích thước quả to, có thể to bằng ngón chân cái, to hơn hẳn các loại nho không hạt khác. Quả nho màu đen sẫm, nhiều nước, ngọt, ăn giòn và thơm. Chùm quả to, căng và chắc quả. Nho đen không hạt Adora của Úc nói riêng và các loại nho nói chung đều là loại trái cây giàu dinh dưỡng và vitamin có lợi cho cơ thể. Nho đen không hạt Adorachiếm tới 70-80% là nước, bởi vậy ăn nho đen thường xuyên là biện pháp cung cấp nước hiệu quả cho cơ thể', 1, 23, 1, 1495368738),
(63, 'Bơ Nam Mỹ', 'qua-bo.jpg', 169000, '<p><span style=\"color: #111111; font-family: Arial, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Bơ l&agrave; một loại quả c&oacute; nhiều &iacute;ch lợi với sức khỏe con người, loại quả n&agrave;y đặc biệt được ưa chuộng bởi chị em phụ nữ v&igrave; n&oacute; c&oacute; c&ocirc;ng dụng l&agrave;m đẹp rất tuyệt vời. Bơ cũng c&oacute; thể chế biến th&agrave;nh nhiều m&oacute;n ngon, đặc biệt l&agrave; m&oacute;n sinh tố bơ</span><span style=\"color: #111111; font-family: Arial, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">. Vậy quả bơ c&oacute; t&aacute;c dụng g&igrave;, ch&uacute;ng ta sẽ&nbsp;t&igrave;m hiểu những<strong> t&aacute;c dụng của quả bơ </strong></span><span style=\"color: #111111; font-family: Arial, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">để c&oacute; thể sử dụng ch&uacute;ng một c&aacute;ch hợp l&yacute; v&agrave; c&oacute; hiệu quả nhất cho sức khỏe</span><span style=\"color: #111111; font-family: Arial, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"> của m&igrave;nh.</span></p>', 23, 23, 1, 1495562796),
(64, 'Ớt Chỉ Thiên', 'Chili peppers.jpg', 10000, '<p><span style=\"color: #000000; font-family: myriad,Arial,Helvetica,sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Kh&ocirc;ng chỉ l&agrave; gia vị th&ecirc;m ngon miệng cho bữa ăn, ớt c&ograve;n l&agrave; \"vị thuốc qu&yacute;\" gi&uacute;p gi&uacute;p ngăn ngừa bệnh tim, tr&aacute;nh được t&igrave;nh trạng huyết &aacute;p tăng cao, tăng sức đề kh&aacute;ng, chống ung thư,... Mới đ&acirc;y, nhiều nghi&ecirc;n cứu cho thấy ớt c&oacute; những t&aacute;c dụng chữa bệnh bất ngờ như giảm mỡ m&aacute;u, cải thiện hệ ti&ecirc;u h&oacute;a ...<img src=\"http://localhost:81/clem/admin/pages/public/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"http://localhost:81/clem/admin/pages/public/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"http://localhost:81/clem/admin/pages/public/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></span></p>', 48, 20, 1, 1495565659),
(65, 'Hành Tây', 'hanh-tay.jpg', 15000, '<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">H&agrave;nh t&acirc;y l&agrave; loại rau, kh&aacute;c với h&agrave;nh ta l&agrave; loại gia vị. Nếu như h&agrave;nh ta c&oacute; thể d&ugrave;ng cả phần l&aacute; v&agrave; phần củ m&agrave; thực ra củ h&agrave;nh ta rất nhỏ th&igrave; h&agrave;nh t&acirc;y chủ yếu d&ugrave;ng củ. Củ h&agrave;nh t&acirc;y l&agrave; phần </span><a style=\"text-decoration: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\" title=\"Th&acirc;n h&agrave;nh\" href=\"https://vi.wikipedia.org/wiki/Th%C3%A2n_h%C3%A0nh\"><strong>th&acirc;n h&agrave;nh</strong></a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"> của c&acirc;y h&agrave;nh t&acirc;y. H&agrave;nh t&acirc;y c&oacute; họ h&agrave;ng với h&agrave;nh t&iacute;m thường phơi hay sấy kh&ocirc; l&agrave;m h&agrave;nh kh&ocirc;. H&agrave;nh t&acirc;y c&oacute; nguồn gốc từ </span><a style=\"text-decoration: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\" title=\"Trung &Aacute;\" href=\"https://vi.wikipedia.org/wiki/Trung_%C3%81\">Trung &Aacute;</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"> được truyền qua b&ecirc;n </span><a style=\"text-decoration: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\" title=\"Ch&acirc;u &Acirc;u\" href=\"https://vi.wikipedia.org/wiki/Ch%C3%A2u_%C3%82u\">ch&acirc;u &Acirc;u</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"> rồi tới </span><a style=\"text-decoration: none; color: #0b0080; background: none #ffffff; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\" title=\"Việt Nam\" href=\"https://vi.wikipedia.org/wiki/Vi%E1%BB%87t_Nam\">Việt Nam</a><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">. Lo&agrave;i n&agrave;y hợp với kh&iacute; hậu &ocirc;n đới.</span></p>', 2, 28, 1, 1495571831),
(66, 'Khoai Tây', 'khoai-tay.jpg', 25000, '<p>&nbsp; &nbsp; <strong>Khoai t&acirc;y</strong> chứa nhiều tinh bột, cellulose, gi&agrave;u vitamin B1, B2, phốt pho, ri&ecirc;ng khoai t&acirc;y nấu ch&iacute;n cung cấp h&agrave;m lượng vitamin C kh&aacute; cao. Đối với sức khỏe, t&aacute;c dụng của khoai t&acirc;y vừa l&agrave; loại thực phẩm tốt cho huyết &aacute;p, giữ cho huyết &aacute;p ổn định vừa cung cấp chất dinh dưỡng để nu&ocirc;i th&agrave;nh mạch tim. B&ecirc;n cạnh đ&oacute; c&aacute;c loại mặt nạ đơn giản, dễ l&agrave;m từ khoai t&acirc;y c&ograve;n c&oacute; t&aacute;c dụng l&agrave;m đẹp da, gi&uacute;p tăng cường độ ẩm cho l&agrave;n da mất nước v&agrave; c&acirc;n bằng độ ẩm cho l&agrave;n da dầu.<br /><br /><br /></p>', 4, 28, 1, 1495766604);

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `written_date` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_comment`
--

INSERT INTO `product_comment` (`id`, `product_id`, `name`, `email`, `comment`, `written_date`, `status`) VALUES
(1, 28, 'Trần Mạnh Toàn', 'toantran@yahoo.com', 'Rất ngon. Thank you so much!!!', 1495295925, 1),
(2, 28, 'tung dz', 'tran22@gmail.com', '<p>Kh&ocirc;ng c&oacute; b&igrave;nh luận g&igrave; &agrave;</p>', 1495296156, 2),
(3, 28, 'tùng trần', 'dsa@gmail.com', 'Quá tệ đislike', 1495299675, 1),
(5, 28, 'Cao Minh', 'minhcube@gmail.com', 'Bình thường!!', 1495300040, 1),
(6, 28, 'Thu Trang', 'trangto@yahoo.com', 'Ngon tuyệt cú mèo á', 1495300132, 1),
(7, 28, 'tran manh hoi', 'hoitran@gmail.com', '  nice to meet you!', 1495308855, 1),
(8, 28, 'Trần Thanh Tùng  2', 'trantung060708@gmail.com', 'See you again', 1495309121, 0),
(9, 28, 'Trần Thanh Tùng', 'trantung060708@gmail.com', 'nai xờ', 1495309143, 0),
(10, 28, 'Trần Thanh Tùng 3', 'trantung06070809@gmail.com', 'sssssssssssssssss', 1495309328, 0),
(11, 25, 'Trần Thanh Tùng', 'trantung060708@gmail.com', '  Nice to see you again!', 1495309365, 1),
(12, 25, 'Trần Thanh Tùng 4', 'trantung060701@gmail.com', '  Ngon lắm lắm luôn!', 1495309625, 1),
(13, 25, 'Hoa Thành Tung', 'trantung06070810@gmail.com', '  Tuyệt vời!!!', 1495310567, 1),
(14, 18, 'Trịnh Khởi', 'dinhkhoi1@gmail.com', '  Tôi rất thích ăn lê.', 1495349652, 1),
(15, 18, 'Trần Thanh Tùng 1', 'trantung0608@gmail.com', '  Ngon lắm. Thank you so much!!', 1495349822, 1),
(16, 36, 'Minh', 'minh@yahoo.com', '<p>ăn ung thư đấy đừng ăn</p>', 1495734847, 0),
(17, 20, 'Trần Thanh Tùng đz', 'trantung060708@gmail.com', '<p>ngon vcc</p>', 1495785518, 0),
(18, 1, 'sỹ hưng', 'hung1@gmail.com', 'rất ngon', 1495850940, 0),
(19, 17, 'đình chiến', 'chien@gmail.com', 'âlo', 1495854717, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcate_id` int(11) NOT NULL,
  `subcate_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(6) DEFAULT '1',
  `created_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcate_id`, `subcate_name`, `parent_id`, `description`, `status`, `created_date`) VALUES
(19, 'Rau ăn Lá', 1, 'Danh mục các loại rau ăn lá', 1, 149527700),
(20, 'Rau ăn Quả', 1, 'Danh mục các loại rau ăn Quả', 1, 149527700),
(21, 'Nấm', 4, 'Danh mục các loại nấm', 1, 149527740),
(22, 'Trái cây trong nước', 2, 'Danh mục các loại trái cây trong nước', 1, 149527780),
(23, 'Trái cây nhập khẩu', 2, 'Danh mục các loại trái cây nhập khẩu', 1, 149527820),
(24, 'Thực phẩm tươi sống', 3, 'Danh mục các loại Thực phẩm tươi sống', 1, 149527860),
(25, 'Thực phẩm đông lạnh, sơ chế', 3, 'Danh mục các loại Thực phẩm đông lạnh, sơ chế', 1, 149527900),
(26, 'Gạo', 4, 'Danh mục các loại gạo', 1, 149527940),
(27, 'Đóng túi', 4, 'Danh mục các đồ đóng túi, đóng hộp', 1, 149527980),
(28, 'Các Loại  Củ', 1, '<p>Danh mục c&aacute;c loại Củ</p>', 1, 1495571800);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `address`, `role`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin123@gmail.com', 'Admin Manager', '0936826151', 'Ha Noi', 3),
(2, 'chien', 'e10adc3949ba59abbe56e057f20f883e', 'chien@gmail.com', 'Hoàng Đình Chiến', '1234567890', 'ha noi', 2),
(3, 'nguyen', 'e10adc3949ba59abbe56e057f20f883e', 'nguyena@gmail.com', 'Nguyễn văn A', '1234567890', 'ha noi', 2),
(4, 'vuong', 'e10adc3949ba59abbe56e057f20f883e', 'vuong@gmail.com', 'Phạm Nhật Vượng', '1234567890', 'ha noi', 1),
(5, 'Long', 'e10adc3949ba59abbe56e057f20f883e', 'long@gmail.com', 'Trần Đình Long', '1234567890', 'ha noi', 1),
(6, 'huong', 'e10adc3949ba59abbe56e057f20f883e', 'huong@gmail.com', 'Phạm Thu Hương', '1234567890', 'ha noi', 1),
(7, 'duc', 'e10adc3949ba59abbe56e057f20f883e', 'duc@gmail.com', 'Đoàn Nguyên Đức', '1234567890', 'Ha Noi', 1),
(8, 'hang', 'e10adc3949ba59abbe56e057f20f883e', 'hang@gmail.com', 'Phạm Thúy Hằng', '1234567890', 'Ha Noi', 1),
(9, 'yen', 'e10adc3949ba59abbe56e057f20f883e', 'yen@gmail.com', ' Nguyễn Hoàng Yến', '1234567890', 'Ha Noi', 1),
(10, 'tai', 'e10adc3949ba59abbe56e057f20f883e', 'tai@gmail.com', ' Nguyễn Đức Tài', '1234567890', 'Ha Noi', 1),
(11, 'dat', 'e10adc3949ba59abbe56e057f20f883e', 'dat@gmail.com', ' Nguyễn Văn Đạt', '1234567890', 'Ha Noi', 1),
(12, 'hung', 'e10adc3949ba59abbe56e057f20f883e', 'hung@gmail.com', 'Nguyễn Duy Hưng', '1234567890', 'Ha Noi', 1),
(13, 'hien', 'e10adc3949ba59abbe56e057f20f883e', 'hien@gmail.com', 'Vũ Thị Hiền', '1234567890', 'Ha Noi', 1),
(14, 'vu', 'e10adc3949ba59abbe56e057f20f883e', 'vu@gmail.com', ' Lê Phước Vũ', '1234567890', 'Ha Noi', 1),
(15, 'binh', 'e10adc3949ba59abbe56e057f20f883e', 'binh@gmail.com', 'Trương Gia Bình', '1234567890', 'Ha Noi', 1),
(16, 'khanh', 'e10adc3949ba59abbe56e057f20f883e', 'khanh@gmail.com', 'Trương Thị Lệ Khanh', '1234567890', 'Ha Noi', 1),
(17, 'quan', 'e10adc3949ba59abbe56e057f20f883e', 'quan@gmail.com', 'Trần Lê Quân', '1234567890', 'Ha Noi', 1),
(18, 'tam', 'e10adc3949ba59abbe56e057f20f883e', 'tam@gmail.com', 'Đặng Thành Tâm', '1234567890', 'Ha Noi', 1),
(19, 'ngan', 'e10adc3949ba59abbe56e057f20f883e', 'ngan@gmail.com', 'Trầm Trọng Ngân', '1234567890', 'Ha Noi', 1),
(20, 'quyet', 'e10adc3949ba59abbe56e057f20f883e', 'quyet@gmail.com', 'Trịnh Văn Quyết', '1234567890', 'Ha Noi', 1),
(22, 'trantung07', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trantung060708@gmail.com', 'Trần Thanh Tùng đz', '01649498240', 'Hà Nội', 3),
(23, 'trantung22', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trantung22121522@yahoo.com', 'tran thanh tung', '0162354162', 'ha noi', 1),
(24, 'trantung91@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'trantung91@yahoo.com', 'Trần Nam ', '01649498240', 'Hà Nội', 1),
(29, 'trantun452@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'trantun452@yahoo.com', 'trantung', '01649498240', 'ha noi', 1),
(30, '333@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '333@yahoo.com', 'tran tun', '2222222', '111111', 1),
(32, 'tran2tung@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'tran2tung@yahoo.com', 'tran manh toan', 'sdsa', 'dsadas', 1),
(33, 'trantung09', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trantung06070809@gmail.com', 'Trần Thanh Tùng đz vcc', '01649498240', 'Nam Định', 2),
(36, 'trantung11', 'd68a08e9ecf3c3853f267ae0372c1d87', 'hanoi1@yahoo.com', 'Linh', '01648241254', 'thai binh', 1),
(39, 'trantung08', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trannam99@gmail.com', 'Trần Tùng 078', '01649498240', 'Xuân Trường', 1),
(43, 'trantung14', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trannamxz299@gmail.com', 'Trần Tùng 07 vccx', '016482412547', 'thai binh', 1),
(44, 'trantung015', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trannam99zx@gmail.com', 'Trần Thanh Tùng xzvcc', '01648241234', 'Nam Định', 1),
(47, 'admin3', 'd68a08e9ecf3c3853f267ae0372c1d87', 'tranminh99@gmail.com', 'Phạm Thị Chinh', '01642958400', 'Xuân hùng', 1),
(52, 'admin6', 'd68a08e9ecf3c3853f267ae0372c1d87', 'admin6@gxmail.com', 'La Thị Bải', '09432154132', 'Bắc Giang', 1),
(53, 'linhlung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'linhlung@gmail.com', 'Linh Thị Lung', '0126431548', 'Nam Định', 1),
(55, 'phamhung94', 'd68a08e9ecf3c3853f267ae0372c1d87', 'hungpham@gmail.com', 'Sỹ Hưng', '09012345146', 'Hà Nội', 1),
(57, 'luongitbkap@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'luongitbkap@gmail.com', 'luongit', '4455666666', 'cssccs', 1),
(58, 'sendemailphp123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'sendemailphp123@gmail.com', 'fsfsfsfsfss', '6666662626', 'cssc', 1),
(61, 'trantung010203@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'trantung010203@gmail.com', 'tung 08', '08416613114', 'Xuân Trường', 1),
(62, 'doanvantung123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'doanvantung123@gmail.com', 'dsfasf', '52425', 'fd', 1),
(63, 'tsaddsaddsa', 'd68a08e9ecf3c3853f267ae0372c1d87', 'doanvantungsss@gmail.com', '', '', '', 1),
(64, 'adsfaf', 'ad6d2fd270ed1943378fbc8711741a4f', 'gsdf@gmail.com', 'sdfsa', '342', 'ádsa', 1),
(71, 'trantung17', 'e10adc3949ba59abbe56e057f20f883e', 'trantung070809@gmail.com', 'Tùng đẹp zai', '01649498240', 'Nam Định', 3),
(72, 'tungtran06', 'd68a08e9ecf3c3853f267ae0372c1d87', 'trantung070209@gmail.com', 'Tùng Trần đvcx', '01648241234', 'hà nội', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcate_id`),
  ADD UNIQUE KEY `subcate_name` (`subcate_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
