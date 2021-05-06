-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2018 at 11:36 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `royalttcabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `from_location`
--

CREATE TABLE IF NOT EXISTS `from_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_location` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `from_location`
--

INSERT INTO `from_location` (`id`, `from_location`) VALUES
(1, 'Bangalore'),
(2, 'Hyderabad'),
(3, 'Mysore'),
(4, 'Chennai'),
(6, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_count`
--

CREATE TABLE IF NOT EXISTS `tbl_car_count` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `happy_customer` int(255) NOT NULL DEFAULT '0',
  `total_no-cars` int(255) NOT NULL DEFAULT '0',
  `completed_trips` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_car_count`
--

INSERT INTO `tbl_car_count` (`id`, `happy_customer`, `total_no-cars`, `completed_trips`) VALUES
(1, 500, 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `first_name`, `last_name`, `email`, `mobile`, `password`) VALUES
(1, 'sachin', 'AK', 'sachin@gmail.com', '8246597315', '123654'),
(3, 'madhuri', 'halgekar', 'user@gmail.com', '8762224505', NULL),
(4, 'sachin', 'halgekar', 'madhu@gmail.com', '8762224505', NULL),
(5, 'madhuri', 'rodrigues', 'madhu@gmail.com', '8246597315', NULL),
(6, 'sachin', 'AK', 'madhu@gmail.com', '8762224505', NULL),
(7, 'shweta', 'chougule', 'madhu@gmail.com', '8762224505', NULL),
(8, 'sachin', 'AK', 'madhu@gmail.com', '1236548648', NULL),
(9, 'sachin', 'AK', 'madhu@gmail.com', '1236548648', NULL),
(10, 'john', 'rodrigues', 'society@gmail.com', '8762224505', NULL),
(11, 'madhuri', 'rodrigues', 'user@gmail.com', '9535403008', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drivers`
--

CREATE TABLE IF NOT EXISTS `tbl_drivers` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(256) DEFAULT NULL,
  `contact_no` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_drivers`
--

INSERT INTO `tbl_drivers` (`driver_id`, `driver_name`, `contact_no`) VALUES
(1, 'Manjunath', '9740689184');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`) VALUES
(1, 'royalttcabs24@gmail.com', 'royalttcabs'),
(2, 'royal@gmail.com', 'royal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicles`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicles` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(256) DEFAULT NULL,
  `no_of_seats` int(255) NOT NULL DEFAULT '0',
  `car_img` varchar(256) DEFAULT NULL,
  `status` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_vehicles`
--

INSERT INTO `tbl_vehicles` (`vehicle_id`, `vehicle_name`, `no_of_seats`, `car_img`, `status`) VALUES
(11, 'Toyota Innova', 7, 'cars/innova_color4.png', 0),
(10, 'Toyota Innova Crysta', 7, 'cars/Toyota-Innova-Crysta-HD-Wallpaper.jpg', 0),
(13, '  9 SEATS 2 BAGS 150 MPG AIRBAGS MANUAL/AUTO AC VIEW DETAILS Swift Dzire/Atios/Verito', 4, 'cars/swift.jpg', 0),
(12, 'Tavera', 9, 'cars/11_Summit-white.jpg', 0),
(14, 'TATA Indica', 4, 'cars/3.jpg', 0),
(15, 'Force Traveller Ac And Non Ac', 12, 'cars/14-seater-tempo-traveler.png', 0),
(16, 'mini bus', 20, 'cars/minibus_content_85_content_85.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trip_insert`
--

CREATE TABLE IF NOT EXISTS `trip_insert` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_type` varchar(256) DEFAULT NULL,
  `pickup_loc` varchar(256) DEFAULT NULL,
  `pick_date` varchar(256) DEFAULT NULL,
  `pick_time` varchar(256) DEFAULT NULL,
  `drop_loc` varchar(256) DEFAULT NULL,
  `drop_date` varchar(256) DEFAULT NULL,
  `drop_time` varchar(256) DEFAULT NULL,
  `vehicle_id` varchar(256) DEFAULT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `package_id` varchar(256) DEFAULT NULL,
  `current_date` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`trip_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `trip_insert`
--

INSERT INTO `trip_insert` (`trip_id`, `trip_type`, `pickup_loc`, `pick_date`, `pick_time`, `drop_loc`, `drop_date`, `drop_time`, `vehicle_id`, `first_name`, `last_name`, `email`, `mobile`, `package_id`, `current_date`, `status`) VALUES
(1, 'One Way', 'bengaloru', '05.10', '19:00', 'mandya', '05.10', '19:00', '9', 'sachin', 'AK', 'madhu@gmail.com', '1236548648', NULL, NULL, NULL),
(2, 'Two Way', 'bgm', '05.10', '21:00', 'hubli', '05.10', '20:00', '9', 'madhuri', 'halgekar', 'user@gmail.com', '8762224505', NULL, NULL, NULL),
(3, 'one way', '', '29 Apr', '18:00', '', '29 Apr', '18:00', '', 'sachin', 'AK', 'madhu@gmail.com', '1236548648', NULL, NULL, NULL),
(4, 'one way', '', '29 Apr', '18:00', '', '29 Apr', '18:00', '12', 'john', 'rodrigues', 'society@gmail.com', '8762224505', NULL, NULL, NULL),
(5, 'one way', '', '29 Apr', '18:00', '', '29 Apr', '18:00', '15', 'madhuri', 'rodrigues', 'user@gmail.com', '9535403008', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_price`
--

CREATE TABLE IF NOT EXISTS `vehicle_price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle` varchar(256) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `trip_type` varchar(256) DEFAULT NULL,
  `cost_per_km` double NOT NULL DEFAULT '0',
  `min_km_day` double NOT NULL DEFAULT '0',
  `base_fare` double NOT NULL DEFAULT '0',
  `driver_cost` double NOT NULL DEFAULT '0',
  `total_day` int(255) NOT NULL DEFAULT '0',
  `total_estimation` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vehicle_price`
--

INSERT INTO `vehicle_price` (`price_id`, `vehicle`, `location`, `trip_type`, `cost_per_km`, `min_km_day`, `base_fare`, `driver_cost`, `total_day`, `total_estimation`) VALUES
(6, '11', '1', 'roundtrip', 12, 300, 3600, 500, 1, 4100),
(7, '12', '1', 'roundtrip', 12, 300, 3600, 500, 1, 4100),
(5, '10', '1', 'roundtrip', 15, 300, 4500, 500, 1, 5000),
(8, '13', '1', 'roundtrip', 12, 300, 3600, 500, 1, 4100),
(9, '14', '1', 'onewaytrip', 9, 300, 2700, 500, 1, 3200),
(10, '15', '3', 'roundtrip', 20, 800, 16000, 1000, 1, 17000),
(11, '16', '1', 'roundtrip', 25, 800, 20000, 1200, 1, 21200);

-- --------------------------------------------------------

--
-- Table structure for table `website_banner`
--

CREATE TABLE IF NOT EXISTS `website_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_img` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `website_banner`
--

INSERT INTO `website_banner` (`banner_id`, `banner_img`) VALUES
(1, 'cars/banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wesite_packages`
--

CREATE TABLE IF NOT EXISTS `wesite_packages` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_title` varchar(256) DEFAULT NULL,
  `packages_details` varchar(256) DEFAULT NULL,
  `package_duration` varchar(256) DEFAULT NULL,
  `package_img` varchar(256) DEFAULT NULL,
  `package_description` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `wesite_packages`
--

INSERT INTO `wesite_packages` (`package_id`, `package_title`, `packages_details`, `package_duration`, `package_img`, `package_description`) VALUES
(5, 'Kerala Round Trip', 'Cochin - Alleppey - Cochin', '4 Nights / 5 Days', 'cars/package1.jpg', 'The emerald backwaters of Kerala is the reason why the state is name'),
(11, 'Bijapur Round Trip', 'Golgumbaz-Pattad kallu-Banashankari-Hampi', '2 Nights / 3 Days', 'cars/Vijayapura.jpg', 'fhf'),
(13, 'Tirupati Round Trip', 'Tirumala Temple-Papanashi-Kalahasti', '2 Nights / 3 Days', 'cars/28bcd0d7e9310764a99dbb27c65cdf60.jpg', 'fhgfh'),
(10, 'Mysor Round Trip', 'Mysore Palace-Zoo-Srirang Pattan-GRS', '4 Nights / 5 Days', 'cars/mysore palace rpoduct resize.jpg', 'gjg'),
(9, 'Dharmasthala Round trip', 'Udupi-katilu-Surya Temple-Gokarn', '4 Nights / 5 Days', 'cars/dharmasthala2.jpg', 'gjhgj'),
(12, 'Tamil Nadu Round Trip', 'kanya Kumari-Rameshwaram-Palani', '2 Nights / 3 Days', 'cars/images.jpg', 'ghg');
