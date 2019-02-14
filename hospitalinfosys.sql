-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 07:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `id` int(11) NOT NULL,
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
  `conformed_issued` tinyint(1) NOT NULL,
  `date_deadline` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalinfo`
--

INSERT INTO `hospitalinfo` (`id`, `name`, `address`, `director`, `owner`, `authorized_capacity`, `service_capacity`, `facility`, `contact`, `email`, `classification`, `private`, `clinical_lab`, `DTL`, `HIV`, `pharmacy`, `xray`, `BSF`, `dialysis`, `water_testing_lab`, `LTO_cert`, `license`, `date_monitoring`, `NOV`, `conformed_issued`, `date_deadline`) VALUES
(1, 'hospital', '', 'director', 'owner', 'authorize', 'Hospital', 'facility', 'contact', 'email@gmail.com', 'Province', 1, 'Secondary', 1, 0, 1, 'level 2', '2', 'dialysis', 'water tesing lab', 'link', 'license', '2019-02-12', 1, 0, '2019-02-18'),
(2, 'hospital0', 'address', 'director', 'owner', 'authorized', 'Hospital : L1', '123', '123123', 'hos@gmail.com', 'Open this select menu', 1, 'Secondary', 1, 1, 0, 'level 2', '2', 'Dialyiss', 'water testinng lab', 'link', 'qweqweqwe', '2019-02-11', 0, 1, '2019-02-21'),
(3, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Hospital : L2', '123123', '346567', 'jose@gmail.com', 'Open this select menu', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(4, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(5, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(6, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(7, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(8, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(9, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(10, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(11, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(12, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(13, 'hospital1', 'address1', 'director 1', 'owner1', '2', 'Infirmary', '123123', '346567', 'jose@gmail.com', 'City', 1, 'Primary', 0, 1, 1, 'level 2', '3', 'false', 'asdf', 'link.com', '2354765', '2019-02-15', 0, 1, '2019-02-19'),
(14, 'hos', 'ad', 'di', 'iw', 'a', '', '123', '32131', 'wew@gmail.com', 'City', 1, 'Primary', 0, 0, 1, 'level 3', '3', 'w', 'ww', 'asd', 'qweqweqwe', '2019-02-14', 0, 0, '2019-02-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitalinfo`
--
ALTER TABLE `hospitalinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitalinfo`
--
ALTER TABLE `hospitalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
