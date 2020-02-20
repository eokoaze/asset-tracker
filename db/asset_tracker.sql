-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2019 at 01:55 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE IF NOT EXISTS `pc` (
  `id` int(11) NOT NULL,
  `pcNo` varchar(100) COLLATE utf8_bin NOT NULL,
  `pcName` varchar(200) COLLATE utf8_bin NOT NULL,
  `serialNo` varchar(100) COLLATE utf8_bin NOT NULL,
  `specification` text COLLATE utf8_bin NOT NULL,
  `dateAdded` varchar(100) COLLATE utf8_bin NOT NULL,
  `currentStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `pcNo`, `pcName`, `serialNo`, `specification`, `dateAdded`, `currentStatus`) VALUES
(1, 'JUMPC001', 'HP Divi 200', '0000-00000-0000-0000', '2GB RAM, 500GB HDD, 2.4GHZ Clock Speed', '31/10/2019', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pc_assignment`
--

CREATE TABLE IF NOT EXISTS `pc_assignment` (
  `id` int(11) NOT NULL,
  `pcNo` varchar(100) COLLATE utf8_bin NOT NULL,
  `staffID` varchar(100) COLLATE utf8_bin NOT NULL,
  `dateAssigned` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pc_assignment`
--

INSERT INTO `pc_assignment` (`id`, `pcNo`, `staffID`, `dateAssigned`) VALUES
(1, 'JUMPC001', 'JUMIT001', '13/11/2019');

-- --------------------------------------------------------

--
-- Table structure for table `pc_tracker`
--

CREATE TABLE IF NOT EXISTS `pc_tracker` (
  `id` int(11) NOT NULL,
  `pcNo` varchar(100) COLLATE utf8_bin NOT NULL,
  `staffID` varchar(100) COLLATE utf8_bin NOT NULL,
  `checkOut` varchar(100) COLLATE utf8_bin NOT NULL,
  `checkIn` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pc_tracker`
--

INSERT INTO `pc_tracker` (`id`, `pcNo`, `staffID`, `checkOut`, `checkIn`) VALUES
(1, '', '', '2019-12-22 14:35:53', ''),
(2, '', '', '2019-12-22 14:48:32', ''),
(3, '', '', '2019-12-22 14:50:44', ''),
(4, '', '', '2019-12-22 14:51:07', ''),
(5, '', '', '2019-12-22 14:51:13', ''),
(6, '', '', '2019-12-22 14:55:15', ''),
(7, '', '', '2019-12-22 14:55:32', ''),
(8, '', '', '2019-12-22 14:55:59', ''),
(9, '', '', '2019-12-22 14:58:08', ''),
(10, '', '', '2019-12-22 14:58:21', ''),
(11, '', '', '2019-12-23 01:17:35', ''),
(12, '', '', '2019-12-23 01:28:08', ''),
(13, '', '', '2019-12-23 01:28:14', ''),
(14, '', '', '2019-12-23 01:31:35', ''),
(15, '', '', '2019-12-23 01:33:36', ''),
(16, 'JUMPC001', 'JUMIT001', '2019-12-23 01:36:15', '2019-12-23 02:53:01'),
(17, 'JUMPC001', 'JUMIT001', '2019-12-23 01:41:04', '2019-12-23 02:53:01'),
(18, 'JUMPC001', 'JUMIT001', '2019-12-23 01:41:19', '2019-12-23 02:53:01'),
(19, 'JUMPC001', 'JUMIT001', '2019-12-23 01:45:16', '2019-12-23 02:53:01'),
(20, 'JUMPC001', 'JUMIT001', '2019-12-23 01:47:11', '2019-12-23 02:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `security_guard`
--

CREATE TABLE IF NOT EXISTS `security_guard` (
  `id` int(11) NOT NULL,
  `staffID` varchar(100) COLLATE utf8_bin NOT NULL,
  `Name` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `dateAdded` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `security_guard`
--

INSERT INTO `security_guard` (`id`, `staffID`, `Name`, `password`, `dateAdded`) VALUES
(1, 'JUMSEC001', 'John Doe', 'password', '01/10/2019');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL,
  `staffID` varchar(20) COLLATE utf8_bin NOT NULL,
  `fName` varchar(200) COLLATE utf8_bin NOT NULL,
  `lName` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `department` varchar(100) COLLATE utf8_bin NOT NULL,
  `dateAdded` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staffID`, `fName`, `lName`, `email`, `department`, `dateAdded`) VALUES
(1, 'JUMIT001', 'James', 'Doe', 'jamesdoe@jumia.com', 'IT', '11/04/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_assignment`
--
ALTER TABLE `pc_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_tracker`
--
ALTER TABLE `pc_tracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_guard`
--
ALTER TABLE `security_guard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pc_assignment`
--
ALTER TABLE `pc_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pc_tracker`
--
ALTER TABLE `pc_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `security_guard`
--
ALTER TABLE `security_guard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
