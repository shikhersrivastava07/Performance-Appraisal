-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2019 at 05:25 AM
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
-- Database: `oms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `attend` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_name`, `date`, `attend`) VALUES
(16, 'shubhankar', '2018-07-04', 'absent'),
(15, 'krish', '2018-07-04', 'present'),
(14, 'satyam', '2018-07-04', 'present'),
(13, 'shubhankar', '2018-06-22', 'absent'),
(12, 'satyam', '2018-06-22', 'present'),
(17, 'satyam', '2019-02-25', 'present'),
(18, 'krish', '2019-02-25', 'absent'),
(19, 'shubhankar', '2019-02-25', 'present'),
(20, 'satyam', '2019-03-30', 'present'),
(21, 'krish', '2019-03-30', 'present'),
(22, 'shubhankar', '2019-03-30', 'present'),
(23, 'Ambuj', '2019-03-30', 'present'),
(24, 'Shikher', '2019-03-30', 'present'),
(25, 'Ambujaa', '2019-03-30', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `emplogin`
--

DROP TABLE IF EXISTS `emplogin`;
CREATE TABLE IF NOT EXISTS `emplogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplogin`
--

INSERT INTO `emplogin` (`username`, `password`) VALUES
('ambuj', 'ambuj');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_no` int(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `e_pass` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `project` text NOT NULL,
  `pay_scale` int(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `Radio` text NOT NULL,
  `appAmount` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_no`, `employee_name`, `e_pass`, `city`, `contact_no`, `department`, `project`, `pay_scale`, `grade`, `Radio`, `appAmount`) VALUES
(20, 10, 'Shreyansh', 'shreyansh', 'Lucknow', '7905918466', 'Technical', 'Deisgn of Shopping Mall', 200000, 'A', 'no', '2000'),
(21, 11, 'Shikher', 'shukher', 'Lucknow', '7071420980', 'Human Resource', 'Child Help Line', 30000, 'A', 'no', '0'),
(22, 12, 'Shubhanker', 'shubhanker', 'Lucknow', '7007592851', 'Technical', 'Freelancing Website', 22000, 'A', 'no', '3000'),
(16, 123456, 'Ambujaa', 'ambuj', 'lucknow', '9721204817', 'hr', 'tttttt', 35232, 'b', 'no', '5000000'),
(19, 10, 'Shreyansh', 'shreyansh', 'Lucknow', '7905918466', 'Technical', 'Deisgn of Shopping Mall', 200000, 'A', 'no', '2000'),
(18, 123, 'vbbb', '2345', 'dsd', '43434', 'sdsd', 'sdsad', 2424, 'B', 'no', '2323');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
