-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 08:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarian`
--

-- --------------------------------------------------------

--
-- Table structure for table `req_book`
--

CREATE TABLE `req_book` (
  `id` int(11) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Book_Name` varchar(100) NOT NULL,
  `Author_Name` varchar(100) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_book`
--

INSERT INTO `req_book` (`id`, `Department`, `Book_Name`, `Author_Name`, `Quantity`, `Date`) VALUES
(2, 'BCA', 'java', 'james', 20, '2021-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `req_book`
--
ALTER TABLE `req_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `req_book`
--
ALTER TABLE `req_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
