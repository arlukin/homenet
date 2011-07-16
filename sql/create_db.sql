DROP DATABASE homenet;
CREATE DATABASE homenet;
USE homenet;

-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2011 at 07:30 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `homenet`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `accommodation_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `image_url` varchar(512) NOT NULL,
  `house_url` varchar(512) NOT NULL,
  `latitude` decimal(11,6) NOT NULL,
  `longitude` decimal(11,6) NOT NULL,
  `type` enum('apartment','house','hotel','hostel','camping') NOT NULL,
  `accessibility` set('rental','for_sale') NOT NULL,
  `price` int(11) DEFAULT NULL,
  `living_space` tinyint(4) NOT NULL,
  `max_people` tinyint(4) NOT NULL,
  `minimum_rental_days` tinyint(4) NOT NULL,
  `change_day` enum('monday','tuesday','wednesday','thursday','friday','saturday','sunday') NOT NULL,
  `total_rooms` tinyint(4) NOT NULL,
  `bedrooms` tinyint(4) NOT NULL,
  `kitchens` tinyint(4) NOT NULL,
  `livingrooms` tinyint(4) NOT NULL,
  `bathrooms` tinyint(4) NOT NULL,
  `toilets` tinyint(4) NOT NULL,
  `other_rooms` tinyint(4) NOT NULL,
  `total_beds` tinyint(4) NOT NULL,
  `singel_beds` tinyint(4) NOT NULL,
  `double_beds` tinyint(4) NOT NULL,
  `single_sofabeds` tinyint(4) NOT NULL,
  `double_sofabeds` tinyint(4) NOT NULL,
  `bunk_beds` tinyint(4) NOT NULL,
  `extra_beds` tinyint(4) NOT NULL,
  `cots` tinyint(4) NOT NULL,
  `meters_to_beach` int(11) DEFAULT NULL,
  `meters_to_lake` int(11) DEFAULT NULL,
  `meters_to_sea` int(11) DEFAULT NULL,
  `meters_to_trainstation` int(11) DEFAULT NULL,
  `meters_to_airport` int(11) DEFAULT NULL,
  `meters_to_restaurant` int(11) DEFAULT NULL,
  `meters_to_fishing` int(11) DEFAULT NULL,
  `meters_to_skiing` int(11) DEFAULT NULL,
  `meters_to_golf` int(11) DEFAULT NULL,
  `cdplayer_available` tinyint(4) NOT NULL,
  `tv_available` tinyint(4) NOT NULL,
  `radio_available` tinyint(4) NOT NULL,
  `shower_available` tinyint(4) NOT NULL,
  `fireplace_available` tinyint(4) NOT NULL,
  `bath_available` tinyint(4) NOT NULL,
  `garden_furniure_available` tinyint(4) NOT NULL,
  `bicyble_available` tinyint(4) NOT NULL,
  `parking_available` tinyint(4) NOT NULL,
  `stove_available` tinyint(4) NOT NULL,
  `barbecue_available` tinyint(4) NOT NULL,
  `oven_available` tinyint(4) NOT NULL,
  `refrigerator_available` tinyint(4) NOT NULL,
  `freezer_available` tinyint(4) NOT NULL,
  `balcony_available` tinyint(4) NOT NULL,
  `terrace_available` tinyint(4) NOT NULL,
  `microwave_available` tinyint(4) NOT NULL,
  `coffe_machine_available` tinyint(4) NOT NULL,
  `boat_available` tinyint(4) NOT NULL,
  `motorboat_available` tinyint(4) NOT NULL,
  `dishwasher_available` tinyint(4) NOT NULL,
  `laundry_machine_available` tinyint(4) NOT NULL,
  `tumble_dryer_available` tinyint(4) NOT NULL,
  `pool_available` tinyint(4) NOT NULL,
  `sauna_available` tinyint(4) NOT NULL,
  `smoking_allowed` tinyint(4) NOT NULL,
  `animal_allowed` tinyint(4) NOT NULL,
  PRIMARY KEY (`accommodation_id`),
  KEY `company_iod` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` VALUES(1, 1, 'Sveaborg', 'Ett litet fint och sjönära hus.', 'Sveaborg är ett 100 år gammalt hus.', 'http://sveaborg.cybercow.se/images', 'http://sveaborg.cybercow.se', 10.758760, -85.375430, 'house', 'rental', NULL, 90, 9, 7, 'saturday', 4, 3, 1, 1, 1, 1, 2, 5, 3, 1, 0, 1, 0, 1, 1, 500, 500, NULL, 3000, 4000, 2000, 500, NULL, NULL, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0);
INSERT INTO `accommodation` VALUES(2, 1, 'Spersboda', 'Västkuststuga med sjötomt.', 'Mellan stockholm och norrtälje ligger denna västkuststuga, avskild ifrån civlisationen.', 'http://sveaborg.cybercow.se/images/spersboda.jpg', 'http://www.homenet.com/spersboda', 10.851450, -85.608010, 'house', 'rental,for_sale', 2000000, 60, 3, 1, 'wednesday', 4, 2, 1, 1, 1, 1, 1, 2, 1, 2, 0, 1, 0, 1, 1, 50, 50, NULL, 4000, 10000, 2000, 50, NULL, 2000, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` VALUES(1, 'Lindh hotels AB', 'Styrbjörnsvägen 29', '12651', 'HÄGERSTEN', '08-38 91 38');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` VALUES(1, 'SEK', 'Svenska kronor');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `accommodation_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `day_price` decimal(10,0) NOT NULL,
  `week_price` decimal(10,0) NOT NULL,
  `month_price` decimal(10,0) NOT NULL,
  `currency_id` int(11) NOT NULL,
  PRIMARY KEY (`price_id`),
  KEY `accommodation_id` (`accommodation_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` VALUES(1, 1, '2011-07-01', '2012-06-30', 100, 650, 3000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `checkout_date` date NOT NULL,
  `checkin_date` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `currency_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `accommodation_id` (`accommodation_id`),
  KEY `user_id` (`user_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` VALUES(1, 1, 1, '2011-08-01', '2011-08-14', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cellphone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(1, 'Daniel', 'Lindh', 'Styrbjörnsvägen 29', '12651', 'HÄGERSTEN', '08-38 91 38', '073-626 54 49', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`company_id`,`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommodation_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation` (`accommodation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prices_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`currency_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation` (`accommodation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
