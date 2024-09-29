-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2024 at 09:49 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bio_plant`
--

DROP TABLE IF EXISTS `bio_plant`;
CREATE TABLE IF NOT EXISTS `bio_plant` (
  `code` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint NOT NULL,
  `waste_price` float NOT NULL,
  `slurry_price` float NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bio_plant`
--

INSERT INTO `bio_plant` (`code`, `Name`, `address`, `email`, `phone`, `waste_price`, `slurry_price`) VALUES
('B001', 'gacl Biogas', 'Gacl Vadodara, Gujarat 390014', 'fenil@gmail.com', 123456789, 10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `collect_srno` bigint NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `dcode` varchar(10) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `daddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dphone` bigint NOT NULL,
  `vcode` varchar(10) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vaddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vphone` bigint NOT NULL,
  `tcode` varchar(10) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tphone` bigint NOT NULL,
  `taddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DL` varchar(16) NOT NULL,
  `vehical_number` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vehical_type` varchar(15) NOT NULL,
  `vehical_capacity` int NOT NULL,
  `bcode` varchar(10) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `baddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bphone` bigint NOT NULL,
  `appx_quantity` float NOT NULL,
  `waste_price` float NOT NULL,
  `slurry_price` float NOT NULL,
  `waste_quantity` float NOT NULL,
  `slurry_quantity` float NOT NULL,
  `twaste_price` float NOT NULL,
  `tslurry_price` float NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`collect_srno`),
  KEY `fk_bcode` (`bcode`),
  KEY `fk_dcode` (`dcode`),
  KEY `fk_vcode` (`vcode`),
  KEY `fk_vehical_number` (`vehical_number`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`collect_srno`, `date`, `dcode`, `dname`, `daddress`, `dphone`, `vcode`, `vname`, `vaddress`, `vphone`, `tcode`, `tname`, `tphone`, `taddress`, `DL`, `vehical_number`, `vehical_type`, `vehical_capacity`, `bcode`, `bname`, `baddress`, `bphone`, `appx_quantity`, `waste_price`, `slurry_price`, `waste_quantity`, `slurry_quantity`, `twaste_price`, `tslurry_price`, `status`) VALUES
(8, '2024-09-28', 'D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 1234567890, 'V001', 'Jinal More', 'Vadodara, Gujarat,390023', 123456789, 'T001', 'Jenish', 123456789, 'vadodara, gujarat,390023', 'GJ06 20200011110', 'Gj 06 BB 3333', 'Van', 50, 'B001', 'gacl Biogas', 'Gacl Vadodara, Gujarat 390014', 123456789, 20, 10, 15, 12, 8, 120, 120, 'processed'),
(10, '2024-09-28', 'D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 1234567890, 'V001', 'Jinal More', 'Vadodara, Gujarat,390023', 123456789, 'T001', 'Jenish', 123456789, 'vadodara, gujarat,390023', 'GJ06 20200011110', 'Gj 06 BB 3333', 'Van', 50, 'B001', 'gacl Biogas', 'Gacl Vadodara, Gujarat 390014', 123456789, 35, 10, 15, 25, 16.6667, 250, 250, 'processed'),
(12, '2024-09-29', 'D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 1234567890, 'V001', 'Jinal More', 'Vadodara, Gujarat,390023', 123456789, 'T001', 'Jenish', 123456789, 'vadodara, gujarat,390023', 'GJ06 20200011110', 'Gj 06 BB 3333', 'Van', 50, 'B001', 'gacl Biogas', 'Gacl Vadodara, Gujarat 390014', 123456789, 20, 10, 15, 0, 0, 0, 0, 'pending'),
(13, '2024-09-29', 'D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 1234567890, 'V001', 'Jinal More', 'Vadodara, Gujarat,390023', 123456789, 'T001', 'Jenish', 123456789, 'vadodara, gujarat,390023', 'GJ06 20200011110', 'Gj 06 BB 3333', 'Van', 50, 'B001', 'gacl Biogas', 'Gacl Vadodara, Gujarat 390014', 123456789, 20, 10, 15, 0, 0, 0, 0, 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `collection_edb`
--

DROP TABLE IF EXISTS `collection_edb`;
CREATE TABLE IF NOT EXISTS `collection_edb` (
  `collectedb_srno` bigint NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `dcode` varchar(10) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `daddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dphone` bigint NOT NULL,
  `vcode` varchar(10) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vaddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vphone` bigint NOT NULL,
  `tcode` varchar(10) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tphone` bigint NOT NULL,
  `taddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DL` varchar(16) NOT NULL,
  `vehical_number` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vehical_type` varchar(15) NOT NULL,
  `vehical_capacity` int NOT NULL,
  `dist_loc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `appx_quantity` float NOT NULL,
  `waste_quantity` float NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`collectedb_srno`),
  KEY `fk_dcode` (`dcode`),
  KEY `fk_vcode` (`vcode`),
  KEY `fk_vehical_number` (`vehical_number`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `collection_edb`
--

INSERT INTO `collection_edb` (`collectedb_srno`, `date`, `dcode`, `dname`, `daddress`, `dphone`, `vcode`, `vname`, `vaddress`, `vphone`, `tcode`, `tname`, `tphone`, `taddress`, `DL`, `vehical_number`, `vehical_type`, `vehical_capacity`, `dist_loc`, `appx_quantity`, `waste_quantity`, `status`) VALUES
(10, '2024-09-29', 'D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 1234567890, 'V001', 'Jinal More', 'Vadodara, Gujarat,390023', 123456789, 'T001', 'Jenish', 123456789, 'vadodara, gujarat,390023', 'GJ06 20200011110', 'Gj 06 BB 3333', 'Van', 50, 'Sama', 45, 0, 'pending'),
(11, '2024-09-29', 'D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 1234567890, 'V001', 'Jinal More', 'Vadodara, Gujarat,390023', 123456789, 'T001', 'Jenish', 123456789, 'vadodara, gujarat,390023', 'GJ06 20200011110', 'Gj 06 BB 3333', 'Van', 50, 'zundal', 65, 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

DROP TABLE IF EXISTS `distribution`;
CREATE TABLE IF NOT EXISTS `distribution` (
  `distribute_srno` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fcode` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fphone` bigint NOT NULL,
  `faddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `approved_quantity` float NOT NULL,
  `Rdate` date NOT NULL,
  `bcode` varchar(10) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `bphone` bigint NOT NULL,
  `bemail` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `baddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slurry_price` float NOT NULL,
  `Adate` date NOT NULL,
  PRIMARY KEY (`distribute_srno`),
  KEY `fk_fcode` (`fcode`),
  KEY `fkb_bcode` (`bcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`distribute_srno`, `fcode`, `fname`, `fphone`, `faddress`, `approved_quantity`, `Rdate`, `bcode`, `bname`, `bphone`, `bemail`, `baddress`, `slurry_price`, `Adate`) VALUES
('01', 'F001', 'Fenil', 1234567890, 'vadodara, gujarat, 390011', 15, '2024-09-29', 'B001', 'gacl Biogas', 123456789, 'fenil@gmail.com', 'Gacl Vadodara, Gujarat 390014', 15, '2024-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

DROP TABLE IF EXISTS `donar`;
CREATE TABLE IF NOT EXISTS `donar` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`code`, `name`, `address`, `email`, `phone`) VALUES
('D001', 'Swagat Resturant', 'Jetalpur Rd, Alkapuri, Vado', 'swagat@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

DROP TABLE IF EXISTS `farmer`;
CREATE TABLE IF NOT EXISTS `farmer` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `annual_income` double NOT NULL,
  `tland_area` float NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`code`, `name`, `phone`, `email`, `address`, `annual_income`, `tland_area`) VALUES
('F001', 'Fenil', 1234567890, 'fenil@gmail.com', 'vadodara, gujarat, 390011', 300000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint NOT NULL,
  `company_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `company_name`, `subject`, `message`) VALUES
('Fenil patel', 'fenil@gmail.com', 1234567890, 'ABC', 'Experience', 'It was great experience using this website , This website has a very great functionality simplified.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usercat` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logintime` datetime NOT NULL,
  `logouttime` datetime NOT NULL,
  KEY `fk_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usercat`, `username`, `password`, `logintime`, `logouttime`) VALUES
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-28 12:55:18', '2024-09-28 08:15:19'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-28 08:19:06', '2024-09-28 03:34:39'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-28 08:44:15', '2024-09-28 02:27:14'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-28 02:27:24', '2024-09-28 03:34:39'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-28 06:15:53', '2024-09-28 06:30:34'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-28 06:16:07', '2024-09-28 06:16:18'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-28 06:27:18', '2024-09-29 01:37:05'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-28 06:27:43', '2024-09-28 06:30:34'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 12:06:03', '2024-09-29 02:41:17'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 12:06:17', '2024-09-29 01:37:05'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 01:37:25', '2024-09-29 02:41:17'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 01:37:37', '2024-09-29 02:12:48'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 02:12:35', '2024-09-29 02:12:48'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 02:12:57', '2024-09-29 02:41:17'),
('Farmer', 'fenil', '$2y$10$/hrKYcJoaopmez1CEkJ5zuEKT04lFCQu7psBuqZcDCYgnOUSydE4y', '2024-09-29 02:41:27', '2024-09-29 02:44:22'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 02:44:31', '2024-09-29 02:50:00'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 03:06:16', '2024-09-29 12:15:33'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 11:21:19', '2024-09-29 12:11:49'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 12:15:29', '2024-09-29 12:15:33'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 12:22:00', '2024-09-29 12:25:01'),
('Farmer', 'fenil', '$2y$10$/hrKYcJoaopmez1CEkJ5zuEKT04lFCQu7psBuqZcDCYgnOUSydE4y', '2024-09-29 12:25:33', '2024-09-29 12:57:33'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 12:59:07', '0000-00-00 00:00:00'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 12:59:38', '2024-09-29 01:16:24'),
('Farmer', 'fenil', '$2y$10$/hrKYcJoaopmez1CEkJ5zuEKT04lFCQu7psBuqZcDCYgnOUSydE4y', '2024-09-29 01:16:35', '2024-09-29 01:18:46'),
('Admin', 'admin', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', '2024-09-29 01:19:00', '0000-00-00 00:00:00'),
('Farmer', 'fenil', '$2y$10$/hrKYcJoaopmez1CEkJ5zuEKT04lFCQu7psBuqZcDCYgnOUSydE4y', '2024-09-29 01:20:37', '2024-09-29 01:34:36'),
('Donar', 'swagat', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', '2024-09-29 01:34:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slurry_request`
--

DROP TABLE IF EXISTS `slurry_request`;
CREATE TABLE IF NOT EXISTS `slurry_request` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slurry_request`
--

INSERT INTO `slurry_request` (`code`, `name`, `phone`, `email`, `address`, `quantity`, `date`, `status`) VALUES
('F001', 'Fenil', 1234567890, 'fenil@gmail.com', 'vadodara, gujarat, 390011', '20', '2024-09-29', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `total_slurry`
--

DROP TABLE IF EXISTS `total_slurry`;
CREATE TABLE IF NOT EXISTS `total_slurry` (
  `bcode` varchar(10) NOT NULL,
  `slurry_quantity` float NOT NULL,
  KEY `fkb_code` (`bcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `total_slurry`
--

INSERT INTO `total_slurry` (`bcode`, `slurry_quantity`) VALUES
('B001', 85);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

DROP TABLE IF EXISTS `transportation`;
CREATE TABLE IF NOT EXISTS `transportation` (
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint NOT NULL,
  `vehical_number` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `vehical_type` varchar(20) NOT NULL,
  `vehical_capacity` int NOT NULL,
  `DL` varchar(16) NOT NULL,
  PRIMARY KEY (`vehical_number`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`code`, `name`, `address`, `email`, `phone`, `vehical_number`, `vehical_type`, `vehical_capacity`, `DL`) VALUES
('T001', 'Jenish', 'vadodara, gujarat,390023', 'jenish@gmail.com', 123456789, 'Gj 06 BB 3333', 'Van', 50, 'GJ06 20200011110');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usercat` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint NOT NULL,
  `address` varchar(50) NOT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usercat`, `username`, `name`, `email`, `password`, `phone`, `address`, `question`, `answer`) VALUES
('Admin', 'admin', 'Admin', 'admin@gmail.com', '$2y$10$pRovczGwvZLiAMq6/vtSMeBSAJ9jzsgFWsd0R3JMqfr1Q/jLRfZZy', 123456789, 'Vadodara', 'What is Your last school?', 'MSU'),
('Farmer', 'fenil', 'Fenil', 'feniljp06@gmail.com', '$2y$10$/hrKYcJoaopmez1CEkJ5zuEKT04lFCQu7psBuqZcDCYgnOUSydE4y', 123456789, 'Vadodara', 'What is Your last school?', 'MSU'),
('Bio-Plant', 'gacl', 'GACL', 'gacl@gmail.com', '$2y$10$g6pX5L4lhXquXv2Vm3c15.ucF3iippl1xblHr5U54ZniiHfRygiZ6', 123456789, 'Vadodara', 'What is Your last school?', 'MSU'),
('Transporter', 'jenish', 'Jenish', 'jenishkp07@gmail.com', '$2y$10$/MNHxIp49VOWYuagcY.5D.GkKDrfq7XIjUGAoJ4xSxjl9mozO4Teu', 123456789, 'Vadodara', 'What is Your last school?', 'MSU'),
('Volunteer', 'jinal', 'Jinal', 'jinalmore008@gmail.com', '$2y$10$himYjrHgcrmAL9mbOcSjrOx5KX14.2ez7GHvXcnHTZZierSWn0Nc2', 123456789, 'Vadodara', 'What is Your last school?', 'MSU'),
('Donar', 'swagat', 'Swagat', 'swagat@gmail.com', '$2y$10$.qiwtskQV7AYcgEV6IILrehBXtfTgoHNzH97ri84Loqs7tkWFCsf.', 123456789, 'Vadodara', 'What is Your last school?', 'MSU');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `code` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` bigint NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`code`, `Name`, `address`, `email`, `phone`, `DOB`) VALUES
('V001', 'Jinal More', 'Vadodara, Gujarat,390023', 'jinal@gmail.com', 123456789, '2004-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `waste_request`
--

DROP TABLE IF EXISTS `waste_request`;
CREATE TABLE IF NOT EXISTS `waste_request` (
  `wrno` int NOT NULL AUTO_INCREMENT,
  `dcode` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `approx_quantity` int NOT NULL,
  `status` varchar(10) NOT NULL,
  `wastecat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`wrno`),
  KEY `dcode` (`dcode`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `waste_request`
--

INSERT INTO `waste_request` (`wrno`, `dcode`, `name`, `phone`, `address`, `approx_quantity`, `status`, `wastecat`) VALUES
(9, 'D001', 'Swagat Resturant', 1234567890, 'Jetalpur Rd, Alkapuri, Vado', 20, 'processed', 'InedibleFood');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `fk_bcode` FOREIGN KEY (`bcode`) REFERENCES `bio_plant` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dcode` FOREIGN KEY (`dcode`) REFERENCES `donar` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vcode` FOREIGN KEY (`vcode`) REFERENCES `volunteer` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vehical_number` FOREIGN KEY (`vehical_number`) REFERENCES `transportation` (`vehical_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `distribution`
--
ALTER TABLE `distribution`
  ADD CONSTRAINT `fk_fcode` FOREIGN KEY (`fcode`) REFERENCES `farmer` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkb_bcode` FOREIGN KEY (`bcode`) REFERENCES `bio_plant` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slurry_request`
--
ALTER TABLE `slurry_request`
  ADD CONSTRAINT `code` FOREIGN KEY (`code`) REFERENCES `farmer` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `total_slurry`
--
ALTER TABLE `total_slurry`
  ADD CONSTRAINT `fkb_code` FOREIGN KEY (`bcode`) REFERENCES `bio_plant` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `waste_request`
--
ALTER TABLE `waste_request`
  ADD CONSTRAINT `dcode` FOREIGN KEY (`dcode`) REFERENCES `donar` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
