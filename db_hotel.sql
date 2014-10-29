-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2014 at 09:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `authorization` int(11) NOT NULL,
  `branchid` int(11) NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE IF NOT EXISTS `billdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billinfoid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billinfos`
--

CREATE TABLE IF NOT EXISTS `billinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `totaldays` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `activation`, `note`, `created_date`, `updated_date`) VALUES
(1, 'Azumaya Hồ Chí Minh', 1, NULL, '2014-10-17 23:17:14', '2014-10-17 23:17:14'),
(2, 'Azumaya Hà Nội', 1, NULL, '2014-10-17 23:17:14', '2014-10-17 23:17:14'),
(3, 'Azumaya Đà Nẵng', 1, NULL, '2014-10-17 23:17:14', '2014-10-17 23:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `is_contract` int(11) DEFAULT NULL,
  `hotel` int(11) DEFAULT NULL,
  `activation` int(11) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` datetime NOT NULL,
  `gender` int(11) NOT NULL,
  `passport` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` int(11) DEFAULT NULL,
  `visano` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companyid` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8_unicode_ci,
  `complaint` text COLLATE utf8_unicode_ci,
  `activation` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `branchid` int(11) NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `branchid`, `activation`, `note`, `created_date`, `updated_date`) VALUES
(1, 'Azumaya Thái Văn Lung', '8A/8D2 Thái Văn Lung, Quận 1, TP.HCM', 1, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45'),
(2, 'Azumaya Annex', '8A/8D1 - 9D1 Thái Văn Lung, Quận 1, TP.HCM', 1, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45'),
(3, 'Azumaya Ngọc Anh', '31 Nguyễn Tất Thành, Quận Hải Châu, Đà Nẵng', 3, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45'),
(4, 'Azumaya Lê Thánh Tôn', '31 Nguyễn Tất Thành, Quận Hải Châu, Đà Nẵng', 3, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45'),
(5, 'Azumaya Bùi Thị Xuân', '16 Bùi Thị Xuân, Quận Hai Bà Trưng, Hà Nội', 2, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45'),
(6, 'Azumaya Kim Mã', '62 Phạm Huy Thông, Quận Ba Đình, Hà Nội', 2, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45'),
(7, 'Azumaya Đà Nẵng', '31 Nguyễn Tất Thành, Quận Hải Châu, Đà Nẵng', 3, 1, NULL, '2014-10-18 13:31:45', '2014-10-18 13:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roombookings`
--

CREATE TABLE IF NOT EXISTS `roombookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `datein` datetime NOT NULL,
  `dateout` datetime NOT NULL,
  `unitprice` float NOT NULL,
  `otherrequest` text COLLATE utf8_unicode_ci,
  `payment` int(11) NOT NULL,
  `byrecept` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `groupid` int(11) NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `roomsize` float NOT NULL,
  `roomtypeid` int(11) NOT NULL,
  `unitprice` float NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE IF NOT EXISTS `roomtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomtype` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `hotelid` int(11) NOT NULL,
  `activation` int(11) NOT NULL,
  `note` text COLLATE utf32_unicode_ci,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `roomtype`, `hotelid`, `activation`, `note`, `created_date`, `updated_date`) VALUES
(1, 'ECONOMY', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(2, 'STANDARD', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(3, 'DLX - NO WIN', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(4, 'NEW DLX M', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(5, 'NEW DLX L', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(6, 'TERRACE M', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(7, 'TERRACE L', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(8, 'PEN HOUSE', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(9, 'SUITE', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(10, 'VIP', 1, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(11, 'ANNEX L', 2, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(12, 'ANNEX M', 2, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(13, 'TERRACE M', 3, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(14, 'ECONOMY (NO WINDOWS)', 3, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(15, 'SUITE TWIN', 3, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(16, 'STANDARD', 3, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(17, 'DELUXE', 4, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(18, 'EXCUTIVE (FRONT)', 4, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(19, 'EXCUTIVE (BACK)', 4, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(20, 'DELUXE', 5, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(21, 'EXCUTIVE', 5, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(22, 'SEMI SUITE', 5, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(23, 'SUITE', 5, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(24, 'STANDARD FNT 1F', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(25, 'STANDARD', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(26, 'DELUXE SMALL WIN', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(27, 'DELUXE (BIG WINDOWS)', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(28, 'LAKE SIDE M', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(29, 'LAKE SIDE L', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(30, 'ANNEX M', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(31, 'ANNEX L', 6, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(32, 'DELUXE NO WINDOW', 7, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(33, 'EXECUTIVE', 7, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45'),
(34, 'SUITE', 7, 1, NULL, '2014-10-18 13:53:45', '2014-10-18 13:53:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
