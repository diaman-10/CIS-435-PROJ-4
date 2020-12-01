-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 01:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weight_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `firstName` varchar(24) NOT NULL,
  `lastName` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstName`, `lastName`) VALUES
(1, 'rjhiggin', 'password', 'Ryan', 'Higgins'),
(2, 'jsmith', 'pw', 'Jim', 'Smith');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `userID` int(11) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `feet` int(1) NOT NULL,
  `inches` int(2) NOT NULL,
  `inputDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`userID`, `weight`, `feet`, `inches`, `inputDate`) VALUES
(1, '210.00', 6, 1, '2020-11-03'),
(1, '220.00', 6, 1, '2020-11-04'),
(1, '225.00', 6, 1, '2020-11-06'),
(1, '210.00', 6, 1, '2020-11-11'),
(1, '215.00', 6, 1, '2020-11-27'),
(1, '210.00', 6, 1, '2020-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`userID`,`inputDate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
