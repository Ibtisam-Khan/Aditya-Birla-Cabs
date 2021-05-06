-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2020 at 03:25 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hindalco`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(256) NOT NULL,
  `ename` varchar(256) NOT NULL,
  `username` varchar(11) NOT NULL,
  `q_id` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `cdate` varchar(256) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `emp_id`, `ename`, `username`, `q_id`, `type`, `description`, `cdate`, `status`) VALUES
(14, 'ABH02', 'Tejas Yallal', 'tej1', '2', 'Water_supply', 'no water', '2020-04-25', 'Completed'),
(12, 'ABH03', 'Suresh', 'suresh', '3', 'Black-Smith', 'Door Problem.', '2020-04-19', 'Cancelled'),
(13, 'ABH03', 'Suresh', 'suresh', '3', 'Civil', 'water leakage ..', '2020-04-19', 'Completed'),
(11, 'ABH03', 'Suresh', 'suresh', '3', 'Black-Smith', 'door problem', '2020-04-19', 'Completed'),
(10, 'ABH03', 'Suresh', 'suresh', '3', 'Electricity', 'Fan not working', '2020-04-19', 'Cancelled'),
(15, 'ABH02', 'Tejas Yallal', 'tej1', '2', 'Water_supply', 'no water ', '2020-05-02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dep_id` varchar(256) NOT NULL,
  `dep_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dep_id`, `dep_name`) VALUES
(1, '1', 'Gas Service'),
(2, '2', 'Electricity'),
(3, '3', 'Plumber'),
(4, '4', 'Civil Engineer'),
(5, '5', 'Carpenter '),
(6, '6', 'Black-Smith');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(256) NOT NULL,
  `q_id` varchar(256) NOT NULL,
  `ename` varchar(256) NOT NULL,
  `permenant_ads` varchar(256) NOT NULL,
  `DOB` varchar(256) NOT NULL,
  `DOJ` varchar(256) NOT NULL,
  `pic_name` varchar(256) NOT NULL,
  `pic_url` varchar(256) NOT NULL,
  `no_family_members` int(255) NOT NULL,
  `salary` varchar(256) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `emp_password` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `q_id`, `ename`, `permenant_ads`, `DOB`, `DOJ`, `pic_name`, `pic_url`, `no_family_members`, `salary`, `designation`, `username`, `emp_password`, `status`) VALUES
(12, 'ABH03', '3', 'Suresh', 'bgm', '1996-08-21', '2007-02-21', 'pan image.jpg', 'vd1/vd1/uploaded/pan image.jpg', 5, '200000', 'clerk', 'suresh', '222', 1),
(11, 'ABH02', '2', 'Tejas Yallal', 'Shahunagar Belgaum', '1996-08-21', '2020-02-20', 't2.jpg', 'vd1/vd1/uploaded/t2.jpg', 3, '5050050', 'Manager', 'tej1', '111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gas_booking`
--

DROP TABLE IF EXISTS `gas_booking`;
CREATE TABLE IF NOT EXISTS `gas_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `ename` varchar(256) NOT NULL,
  `q_id` varchar(256) NOT NULL,
  `booking_id` varchar(256) NOT NULL,
  `b_date` date NOT NULL,
  `extra_booking` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas_booking`
--

INSERT INTO `gas_booking` (`id`, `emp_id`, `username`, `ename`, `q_id`, `booking_id`, `b_date`, `extra_booking`) VALUES
(87, 'ABH03', 'suresh', 'Suresh', '3', '2', '2020-04-19', 'YES'),
(88, 'ABH02', 'tej1', 'Tejas Yallal', '2', '1', '2020-05-02', 'NO'),
(86, 'ABH03', 'suresh', 'Suresh', '3', '1', '2020-04-19', 'NO'),
(85, 'ABH02', 'tej123', 'Tejas Yallal', '2', '1', '2020-04-19', 'NO'),
(89, 'ABH02', 'tej1', 'Tejas Yallal', '2', '2', '2020-05-02', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `Note` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `Note`, `status`) VALUES
(1, 'Book Your Gas On time', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `quarters`
--

DROP TABLE IF EXISTS `quarters`;
CREATE TABLE IF NOT EXISTS `quarters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` varchar(256) NOT NULL,
  `q_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quarters`
--

INSERT INTO `quarters` (`id`, `q_id`, `q_name`) VALUES
(1, '1', 'A Wing'),
(3, '2', 'B Wing'),
(4, '3', 'C Wing'),
(5, '4', 'D Wing'),
(6, '5', 'E Wing'),
(7, '6', 'F Wing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
