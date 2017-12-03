-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 01:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `re_storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `alert_id` int(8) NOT NULL,
  `alert_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alert_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alert_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alert_icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alert_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alert_item_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`alert_id`, `alert_detail`, `alert_username`, `alert_status`, `alert_icon`, `alert_color`, `alert_item_id`) VALUES
(13, 'เพิ่มสินค้าใหม่ ทดสอบ1', '1', 'D', 'fa fa-archive', 'text-green', '7'),
(14, 'เพิ่มสินค้าใหม่ ทดสอบ1', '2', 'N', 'fa fa-archive', 'text-green', '7'),
(15, 'เพิ่มสินค้าใหม่ ทดสอบ2', '1', 'D', 'fa fa-archive', 'text-green', '8'),
(16, 'เพิ่มสินค้าใหม่ ทดสอบ2', '2', 'N', 'fa fa-archive', 'text-green', '8'),
(17, 'เพิ่มสินค้าใหม่ ทดสอบ3', '1', 'D', 'fa fa-archive', 'text-green', '9'),
(18, 'เพิ่มสินค้าใหม่ ทดสอบ3', '2', 'N', 'fa fa-archive', 'text-green', '9'),
(19, 'เพิ่มสินค้าใหม่ ทดสอบ4', '1', 'D', 'fa fa-archive', 'text-green', '10'),
(20, 'เพิ่มสินค้าใหม่ ทดสอบ4', '2', 'N', 'fa fa-archive', 'text-green', '10'),
(21, 'เพิ่มสินค้าใหม่ ทดสอบ5', '1', 'N', 'fa fa-archive', 'text-green', '11'),
(22, 'เพิ่มสินค้าใหม่ ทดสอบ5', '2', 'N', 'fa fa-archive', 'text-green', '11'),
(23, 'เพิ่มสินค้าใหม่ ทดอว6', '1', 'N', 'fa fa-archive', 'text-green', '12'),
(24, 'เพิ่มสินค้าใหม่ ทดอว6', '2', 'N', 'fa fa-archive', 'text-green', '12');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(8) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_mac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_imgname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_mac`, `item_imgname`) VALUES
(7, 'ทดสอบ1', '', '8f14e45fceea167a5a36dedd4bea2543.png'),
(8, 'ทดสอบ2', 'ทดสอบ2', 'c9f0f895fb98ab9159f51fd0297e236d.png'),
(9, 'ทดสอบ3', 'ทดสอบ3', '45c48cce2e2d7fbdea1afc51c7c6ad26.png'),
(10, 'ทดสอบ4', 'ทดสอบ4', 'd3d9446802a44259755d38e6d163e820.png'),
(11, 'ทดสอบ5', 'ทดสอบ5', '6512bd43d9caa6e02c990b0a82652dca.png'),
(12, 'ทดอว6', 'ทดอว6', 'c20ad4d76fe97759aa27a0c99bff6710.png');

-- --------------------------------------------------------

--
-- Table structure for table `typeitem`
--

CREATE TABLE `typeitem` (
  `typeitem_id` int(8) NOT NULL,
  `typeitem_data` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typeitem`
--

INSERT INTO `typeitem` (`typeitem_id`, `typeitem_data`) VALUES
(1, 'ทดสอบเมนู1'),
(2, 'ทดสอบ2'),
(3, 'ทดสอบ3'),
(4, '123'),
(5, '11'),
(6, 'เมนู7'),
(7, 'เมนู8'),
(8, 'เมนู9'),
(9, 'zxc'),
(10, '111'),
(11, 'qq'),
(12, 'qq2'),
(13, '13'),
(14, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL,
  `user_username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `typeitem`
--
ALTER TABLE `typeitem`
  ADD PRIMARY KEY (`typeitem_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `alert_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `typeitem`
--
ALTER TABLE `typeitem`
  MODIFY `typeitem_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
