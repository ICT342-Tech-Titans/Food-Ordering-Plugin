-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 10:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbonlinefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminId` int(11) NOT NULL,
  `emailId` text NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminId`, `emailId`, `Pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblitems`
--

CREATE TABLE `tblitems` (
  `ItemId` int(11) NOT NULL,
  `image` text NOT NULL,
  `ItemName` text NOT NULL,
  `Price` int(11) NOT NULL,
  `addedDateTime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblitems`
--

INSERT INTO `tblitems` (`ItemId`, `image`, `ItemName`, `Price`, `addedDateTime`) VALUES
(2, '1200px-Momo_nepal.jpg', 'VEG MOMOS', 12, 'January 20, 2021, 3:53 pm'),
(3, '1200px-RedDot_Burger.jpg', 'VEG BURGER', 34, 'January 20, 2021, 3:53 pm'),
(4, 'soy-sauce-noodlesH2.jpg', 'soy sause noodles', 12, 'January 20, 2021, 4:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE `tblorders` (
  `orderId` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `Price` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `address` text NOT NULL,
  `ItemId` int(11) NOT NULL,
  `value` text NOT NULL,
  `IpAddress` text NOT NULL,
  `addedDateTime` text NOT NULL,
  `image` text NOT NULL,
  `Notification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`orderId`, `ItemName`, `Price`, `name`, `email`, `mobile`, `Quantity`, `address`, `ItemId`, `value`, `IpAddress`, `addedDateTime`, `image`, `Notification`) VALUES
(12, 'VEG BURGER', 34, 'shane', 'shane@gmail.com', 7896541230, 1, 'victoria', 3, 'complited', '::1', 'January 20, 2021, 3:51 pm', '1200px-RedDot_Burger.jpg', 0),
(16, 'VEG BURGER', 34, 'shane', 'shane@gmail.com', 1234567890, 3, 'victoria', 3, 'on the way ', '::1', 'January 20, 2021, 11:20 pm', '1200px-RedDot_Burger.jpg', 0),
(17, 'soy sause noodles', 12, 'warner', 'warner@gmail.com', 987098789, 4, 'victoria', 4, 'Pending', '::1', 'January 20, 2021, 11:44 pm', 'soy-sauce-noodlesH2.jpg', 1),
(21, 'VEG MOMOS', 12, 'shane', 'shane@gmail.com', 8569321470, 3, 'victoria', 2, 'on the way', '::1', 'January 21, 2021, 10:33 am', '1200px-Momo_nepal.jpg', 0),
(22, 'VEG MOMOS', 12, 'watson', 'watson@gmail.com', 123456789098, 2, 'victoria', 2, 'Pending', '::1', 'January 21, 2021, 12:17 pm', '1200px-Momo_nepal.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tblitems`
--
ALTER TABLE `tblitems`
  ADD PRIMARY KEY (`ItemId`);

--
-- Indexes for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD PRIMARY KEY (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblitems`
--
ALTER TABLE `tblitems`
  MODIFY `ItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblorders`
--
ALTER TABLE `tblorders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
