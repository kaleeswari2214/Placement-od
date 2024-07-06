-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2024 at 04:51 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbackdetails`
--

DROP TABLE IF EXISTS `feedbackdetails`;
CREATE TABLE IF NOT EXISTS `feedbackdetails` (
  `sno` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `roll no` varchar(255) NOT NULL,
  `drive` varchar(255) NOT NULL,
  `placement company` varchar(255) NOT NULL,
  `duration of company` varchar(255) NOT NULL,
  `aptitude quest` varchar(255) NOT NULL,
  `technical task` varchar(255) NOT NULL,
  `overall experience` varchar(255) NOT NULL,
  `qn` varchar(255) NOT NULL,
  `sw` varchar(255) NOT NULL,
  `additional sugestions` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbackdetails`
--

INSERT INTO `feedbackdetails` (`sno`, `name`, `department`, `roll no`, `drive`, `placement company`, `duration of company`, `aptitude quest`, `technical task`, `overall experience`, `qn`, `sw`, `additional sugestions`) VALUES
(0, 'kumar', 'very difficult', '21bit000', 'yes', 'tcs', '2days', 'very difficult', 'very difficult', '4', 'yes', 'nothing', 'good interview learned some new skills');

-- --------------------------------------------------------

--
-- Table structure for table `hodlogin`
--

DROP TABLE IF EXISTS `hodlogin`;
CREATE TABLE IF NOT EXISTS `hodlogin` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hodlogin`
--

INSERT INTO `hodlogin` (`sno`, `username`, `password`) VALUES
(1, 'ithod', 'hod123'),
(2, 'ithod', 'hod123');

-- --------------------------------------------------------

--
-- Table structure for table `odform`
--

DROP TABLE IF EXISTS `odform`;
CREATE TABLE IF NOT EXISTS `odform` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `studentname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `registerno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `dop` varchar(255) NOT NULL,
  `tod` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `ppno` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `odform`
--

INSERT INTO `odform` (`sno`, `studentname`, `dob`, `rollno`, `registerno`, `address`, `phoneno`, `emailid`, `cname`, `caddress`, `dop`, `tod`, `fname`, `mname`, `ppno`, `tutor`, `hod`) VALUES
(1, 'saritha', '2004-06-30', '21bit21', '71052108721', 'tamil nadu', '7890549206', 'saritha@gmail.com', 'tcs', 'tamil nadu', '2024-02-07', '14:05', 'ram', 'seetha', '7894561237', 'approved', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

DROP TABLE IF EXISTS `studentlogin`;
CREATE TABLE IF NOT EXISTS `studentlogin` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `rollno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`sno`, `rollno`, `password`) VALUES
(1, '21bit21', '21bit21'),
(2, '21bit21', '21bit21');

-- --------------------------------------------------------

--
-- Table structure for table `tutorlogin`
--

DROP TABLE IF EXISTS `tutorlogin`;
CREATE TABLE IF NOT EXISTS `tutorlogin` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutorlogin`
--

INSERT INTO `tutorlogin` (`sno`, `username`, `password`) VALUES
(1, 'seetha123', 'seetha123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
