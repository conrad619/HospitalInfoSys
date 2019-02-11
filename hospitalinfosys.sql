-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 03:43 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalinfosys`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitalinfo`
--

CREATE TABLE `hospitalinfo` (
  `name` varchar(100) NOT NULL,
  `address` varchar(225) NOT NULL,
  `director` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `authorized_capacity` varchar(100) NOT NULL,
  `service_capacity` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `classification` varchar(100) NOT NULL,
  `private` tinyint(1) NOT NULL,
  `clinical_lab` varchar(225) NOT NULL,
  `DTL` tinyint(1) NOT NULL,
  `HIV` tinyint(1) NOT NULL,
  `pharmacy` tinyint(1) NOT NULL,
  `xray` varchar(225) NOT NULL,
  `BSF` varchar(225) NOT NULL,
  `dialysis` varchar(100) NOT NULL,
  `water_testing_lab` varchar(225) NOT NULL,
  `LTO_cert` varchar(225) NOT NULL,
  `license` varchar(225) NOT NULL,
  `date_monitoring` varchar(225) NOT NULL,
  `NOV` tinyint(1) NOT NULL,
  `Conformed_issued` tinyint(1) NOT NULL,
  `date_deadline` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalinfo`
--

INSERT INTO `hospitalinfo` (`name`, `address`, `director`, `owner`, `authorized_capacity`, `service_capacity`, `facility`, `contact`, `email`, `classification`, `private`, `clinical_lab`, `DTL`, `HIV`, `pharmacy`, `xray`, `BSF`, `dialysis`, `water_testing_lab`, `LTO_cert`, `license`, `date_monitoring`, `NOV`, `Conformed_issued`, `date_deadline`) VALUES
('hospital', '', 'director', 'owner', 'authorize', 'Hospital', 'facility', 'contact', 'email@gmail.com', 'Province', 1, 'Secondary', 1, 0, 1, 'level 2', '2', 'dialysis', 'water tesing lab', 'link', 'license', '2019-02-12', 1, 0, '2019-02-18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
