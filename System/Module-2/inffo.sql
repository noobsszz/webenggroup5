-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2022 at 12:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module`
--

-- --------------------------------------------------------

--
-- Table structure for table `inffo`
--

CREATE TABLE `inffo` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inffo`
--

INSERT INTO `inffo` (`id`, `customer_id`, `name`, `Location`, `date`, `time`, `category`, `status`) VALUES
(3, '1', 'mohmmed fahmi ', 'ump,pekan', '2022-06-09', '10:45pm', 'Meeting Room', 'Booked'),
(4, '2', 'mohmmed fahmi ', 'ump,pekan', '2022-06-09', '10:45pm', '', 'Available'),
(5, '3', 'mohmmed fahmi ', 'ump,pekan', '2022-06-09', '10:45pm', 'Lecture Hall', 'Available'),
(6, '4', 'mohmmed fahmi ', 'ump,pekan', '2022-06-09', '10:45pm', 'Lab', 'Available'),
(7, '5', 'mohmmed fahmi ', 'ump,pekan', '2022-06-09', '10:45pm', 'Lab', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inffo`
--
ALTER TABLE `inffo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inffo`
--
ALTER TABLE `inffo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
