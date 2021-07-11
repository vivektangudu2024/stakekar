-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 05:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stakekar`
--

-- --------------------------------------------------------

--
-- Table structure for table `offer_a_ride`
--

CREATE TABLE `offer_a_ride` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `dropoff` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(6) NOT NULL,
  `capacity` varchar(1) NOT NULL,
  `cost` varchar(4) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_a_ride`
--

INSERT INTO `offer_a_ride` (`name`, `email`, `pickup`, `dropoff`, `city`, `date`, `time`, `capacity`, `cost`, `mobile`) VALUES
('vishal', 'vishal@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-09', '12:13:', '3', '500', '9824325456'),
('vishalk', 'vishal1@gmail.com', 'damank', 'rajkoti', 'surati', '2021-06-15', '14:13', '4', '5000', '9824325459'),
('vishal', 'vishal@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-21', '19:25', '3', '500', '9824325456'),
('hlo', 'vial@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-21', '19:25', '3', '500', '9824325456'),
('loki', 'loki@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-15', '20:58', '3', '50', '9824325456'),
('loki', 'loki@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-15', '20:58', '3', '50', '9824325456'),
('loki', 'loki@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-15', '20:58', '3', '50', '9824325456'),
('loki', 'loki@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-15', '20:58', '3', '50', '9824325456'),
('loki', 'loki@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-15', '20:58', '3', '50', '9824325456'),
('vishal', 'vishal@gmail.com', 'daman', 'rajkot', 'surat', '', '', '3', '500', '9824325456'),
('vishal', 'vishal@gmail.com', 'daman', 'rajkot', 'surat', '', '', '3', '500', '9824325456'),
('vishal', 'vishal@gmail.com', 'daman', 'rajkot', 'surat', '', '', '3', '500', '9824325456'),
('vivek', 'vivo@gmail.com', 'vizag', 'delhi', 'kolkata', '2021-07-02', '15:41', '5', '1000', '8529637412'),
('vivek', 'v@gmail.com', 'daman', 'rajkot', 'surat', '2021-06-09', '17:21', '4', '200', '8936925841'),
('viv', 'vf@gmail.com', 'vizag', 'surat', 'mumbai', '2021-07-02', '17:25', '4', '2000', '8254789123'),
('', '', '', '', '', '', '', '', '', ''),
('vivek', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('loki', 'vive@gmaiol.com', 'Dhule', 'Hyderabad', 'Visakhapatnam', '2021-07-09', '12:05', '4', '73', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_form`
--

CREATE TABLE `sign_up_form` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up_form`
--

INSERT INTO `sign_up_form` (`name`, `password`, `email`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('haikh', 'ssssbbgg', 'hahai@gmail.com'),
('loki', 'asgard', 'lokithor@gmail.com'),
('lokik', 'godzilla', 'lokithor1@gmail.com'),
('admin', 'vv', 'sd@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
