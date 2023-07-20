-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 02:03 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nysc`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `Sn` int(8) NOT NULL AUTO_INCREMENT,
  `Concern` varchar(40) NOT NULL,
  `HallId` varchar(20) NOT NULL,
  `Description` varchar(70) NOT NULL,
  `Complaintime` varchar(20) NOT NULL,
  `Response` varchar(70) NOT NULL,
  `Dateresponded` varchar(20) NOT NULL,
  PRIMARY KEY (`Sn`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Sn`, `Concern`, `HallId`, `Description`, `Complaintime`, `Response`, `Dateresponded`) VALUES
(1, 'Testing', 'FAD', 'I am just testing', '1591183539', 'Thanks we know', '1591191111');

-- --------------------------------------------------------

--
-- Table structure for table `corpers`
--

DROP TABLE IF EXISTS `corpers`;
CREATE TABLE IF NOT EXISTS `corpers` (
  `Sn` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `State` varchar(40) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Cclass` varchar(40) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Sn`),
  KEY `Sn` (`Sn`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corpers`
--

INSERT INTO `corpers` (`Sn`, `Name`, `State`, `School`, `Course`, `Cclass`, `Phone`, `Username`, `Password`, `Status`) VALUES
(1, 'Paul', 'BU3001838', 'Dell Laptop', 'Inspiron 17 Laptop 16Gig 2T', 'Laptop', 'Black', 'sngr250', 'G8', '1519830993'),
(2, 'Paul', 'BU3001838', 'Dell Laptop', 'Inspiron 17 Laptop 16Gig 2T', 'Laptop', 'Black', 'sngr250', 'G8', '1519831193'),
(3, 'Fajuko Odunayo', 'Ogun', 'Babcock', 'C-S', 'First class', '08161241921', 'tayo', '321', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE IF NOT EXISTS `employers` (
  `Sn` int(10) NOT NULL AUTO_INCREMENT,
  `Companyname` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Sector` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Sn`),
  KEY `Sn` (`Sn`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`Sn`, `Companyname`, `Address`, `Sector`, `Name`, `Position`, `Email`, `Phone`, `Username`, `Password`, `Status`) VALUES
(1, 'Paul', '', '08069037569', '1519830993', '', '', '', 'akins', 'pass', '0'),
(2, 'Paul', '', '08069037569', '1519831193', '', '', '', 'think@google.com', '34956117439', '0'),
(3, 'Adekola david', '', 'SAH', '1591190147', 'Admin', '', '', 'test', 'test', '0'),
(4, 'Babcock', 'Ogun State', 'Education', 'Fajuko Odunayo', 'Graduate', 'fajuko@gmail.com', '08161241921', 'fajuks', '12345', 'New'),
(5, 'Babcock', 'Ogun State', 'Education', 'Fajuko Odunayo', 'Graduate', 'fajuko@gmail.com', '08161241921', 'fajuks', '12345', 'New'),
(6, 'Babcock', 'Ogun State', 'Education', 'micheal', 'Graduate', '134ee@gmail.com', '08161241921', 'ayo', '12345', 'New'),
(7, 'Babcock', 'Ogun State', 'Education', 'micheal', 'Graduate', '134ee@gmail.com', '08161241921', 'ayo', '12345', 'New'),
(8, 'Babcock', 'Ogun State', 'Education', 'micheal', 'Graduate', '134ee@gmail.com', '08161241921', 'ayo', '12345', 'New'),
(9, 'Babcock', 'Ogun State', 'Education', 'Fajuko Odunayo', 'Graduate', 'fajuko@gmail.com', '08161241921', 'fajuks', '1234', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `Sn` int(8) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `HallId` varchar(20) NOT NULL,
  `Description` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  PRIMARY KEY (`Sn`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`Sn`, `Name`, `HallId`, `Description`, `Gender`) VALUES
(1, 'Samuel Akande Hall', 'SAH', 'Male Premium Hall', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `Sn` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `IDNo` varchar(20) NOT NULL,
  `Property` varchar(50) NOT NULL,
  `Description` varchar(120) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `Color` varchar(40) NOT NULL,
  `Serial` varchar(40) NOT NULL,
  `OtherLabel` varchar(40) DEFAULT NULL,
  `Reciept` varchar(20) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Generatedtag` varchar(20) NOT NULL,
  `Regtime` varchar(20) NOT NULL,
  PRIMARY KEY (`Sn`),
  KEY `Sn` (`Sn`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Sn`, `Name`, `IDNo`, `Property`, `Description`, `Type`, `Color`, `Serial`, `OtherLabel`, `Reciept`, `Phone`, `Email`, `Generatedtag`, `Regtime`) VALUES
(1, 'Paul', 'BU3001838', 'Dell Laptop', 'Inspiron 17 Laptop 16Gig 2T', 'Laptop', 'Black', 'sngr250', 'G8', 'bgo678934', '08069037569', 'think@google.com', '34956112839', '1519830993'),
(2, 'Paul', 'BU3001838', 'Dell Laptop', 'Inspiron 17 Laptop 16Gig 2T', 'Laptop', 'Black', 'sngr250', 'G8', 'bgo678934', '08069037569', 'think@google.com', '34956117439', '1519831193');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Sn` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` varchar(20) NOT NULL,
  PRIMARY KEY (`Sn`),
  KEY `Sn` (`Sn`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sn`, `Name`, `Username`, `Password`, `Role`) VALUES
(1, 'Paul ONAKALA', 'akins', 'pass', 'Admin'),
(2, 'Joe Thomas', 'joethomas', 'pass', 'Employer'),
(3, 'Adekola david', 'test', 'test', 'Corper'),
(4, 'Babcock', 'ayo', '12345', 'Employer'),
(5, 'Babcock', 'ayo', '12345', 'Employer'),
(6, 'Babcock', 'ayo', '12345', 'Employer'),
(7, 'Babcock', 'fajuks', '1234', 'Employer'),
(8, 'Fajuko Odunayo', 'tayo', '321', 'Corper');

-- --------------------------------------------------------

--
-- Table structure for table `usersn`
--

DROP TABLE IF EXISTS `usersn`;
CREATE TABLE IF NOT EXISTS `usersn` (
  `Sn` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersn`
--

INSERT INTO `usersn` (`Sn`, `Name`, `Username`, `Password`, `Role`) VALUES
(0, 'Jimoh Michael', 'jimo', 'jimo', 'User'),
(0, 'Siji Oladele', 'sijidele', 'delesiji', 'Admission'),
(0, 'Akin Samson', 'Akins', 'inter', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
