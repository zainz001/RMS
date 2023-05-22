-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2023 at 02:53 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_customer`
--

DROP TABLE IF EXISTS `booking_customer`;
CREATE TABLE IF NOT EXISTS `booking_customer` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `no_of_pessenger` int(11) DEFAULT NULL,
  `departure_location` varchar(30) DEFAULT NULL,
  `arrival_location` varchar(30) DEFAULT NULL,
  `train_name` varchar(30) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `ticketid` int(11) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_customer`
--

INSERT INTO `booking_customer` (`booking_id`, `user_id`, `name`, `no_of_pessenger`, `departure_location`, `arrival_location`, `train_name`, `booking_date`, `ticketid`) VALUES
(9, NULL, 'usama hanif', 1, 'Burewala', 'Bhakkar', 'Jand Passenger', '2023-05-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

DROP TABLE IF EXISTS `payment_detail`;
CREATE TABLE IF NOT EXISTS `payment_detail` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `card_num` int(11) DEFAULT NULL,
  `card_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train_ticket`
--

DROP TABLE IF EXISTS `train_ticket`;
CREATE TABLE IF NOT EXISTS `train_ticket` (
  `ticket_id` int(30) NOT NULL AUTO_INCREMENT,
  `train_name` varchar(20) DEFAULT NULL,
  `date_available` date DEFAULT NULL,
  `departure_time` varchar(20) DEFAULT NULL,
  `arrival_time` varchar(20) DEFAULT NULL,
  `departure_location` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_ticket`
--

INSERT INTO `train_ticket` (`ticket_id`, `train_name`, `date_available`, `departure_time`, `arrival_time`, `departure_location`, `destination`) VALUES
(4, 'akbar express', '2023-05-30', '0500', '0400', 'Ali Khan Abad', 'Alipur'),
(11, 'Mehran Express', '2023-05-24', '0500', '0900', 'Attock', 'Ali Khan Abad'),
(6, 'akbar express', '2023-05-30', '0500', '0400', 'Ali Khan Abad', 'Alipur'),
(7, 'akbar express', '2023-05-30', '0500', '0400', 'Ali Khan Abad', 'Alipur'),
(9, 'akbar express', '2023-05-30', '0500', '0400', 'Ali Khan Abad', 'Alipur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `contact`, `city`, `user_type`) VALUES
(9, 'zain', 'uhanif30@gmail.com', '1122', 4233334, 'Chakwal', 'customer'),
(8, 'anoosh', 'anod23@fa', '123', 4233334, 'Chakwal', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
