-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 12:45 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Batch` varchar(30) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Emailid` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TotalFee` varchar(20) NOT NULL,
  `PaidFee` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `Name`, `Department`, `Year`, `Batch`, `Contact`, `Emailid`, `Password`, `TotalFee`, `PaidFee`, `Gender`) VALUES
(1, 'Panchanan Turuk', 'BCA', '3rd', '2015-2018', '8018640492', 'pturuk123@gmail.com', '123', '3000', '2500', ''),
(10, 'Rocking Monu', 'MCA', '2015-2017', '2nd Batch', '8596957901', 'rockingmonu123@gmail.com', '234', '3000', '2500', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Department` (`Department`,`Year`,`Batch`,`Contact`,`Emailid`,`Password`,`PaidFee`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
