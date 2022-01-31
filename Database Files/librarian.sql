-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 03:33 PM
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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Book_Name` varchar(40) NOT NULL,
  `Author_Name` varchar(4040) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Department`, `Book_Name`, `Author_Name`, `Price`, `Quantity`) VALUES
(1, 'MCA', 'java', 'james', 0, 0),
(2, 'MCA', 'SQL', 'Dennis ritchie', 0, 0),
(3, 'BCA', 'c', 'james', 0, 0),
(4, 'MBA', 'java', 'Dennis ritchie', 0, 0),
(5, 'MBA', 'SQL', 'Dennis ritchie', 0, 0),
(6, 'BCA', 'java', 'Dennis ritchie', 0, 0),
(7, 'MBA', 'java', 'Dennis ritchie', 0, 0),
(8, 'BCA', 'c', 'Dennis ritchie', 0, 0),
(9, 'B.ED', 'jasdva', 'dds', 0, 0),
(10, 'BCA', 'java', 'helio', 0, 0),
(11, 'MBA', 'java', 'james', 0, 0),
(12, 'MCA', 'java', 'james', 0, 0),
(13, 'MCA', 'SQL', 'helio', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Book_Name` varchar(40) NOT NULL,
  `Author_Name` varchar(40) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Department`, `Book_Name`, `Author_Name`, `Price`, `Quantity`) VALUES
(19, 'MBA', 'java', 'helio', 200, '20'),
(20, 'BCA', 'SQL', 'james', 100, '20'),
(21, 'MCA', 'AI', 'Ritvhie', 500, '10'),
(22, 'BCA', 'C#', 'Siemen', 200, '12'),
(23, 'MBA', 'Accounting', 'helio', 400, '20'),
(24, 'MCA', 'MySQL', 'james', 400, '10');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `Gender`, `Address`, `Qualification`, `phone`, `email`, `Password`) VALUES
(4, 'Panchanan Turuk', 'Male', 'Nehru Nagar Near Mining office', 'MCA', 918596957901, 'pturuk123@gmail.com', '1234'),
(37, 'Sambit Kumar Pradhan', 'Male', 'Salepur', 'PHD', 8596957903, 'sambit@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `iss_book`
--

CREATE TABLE `iss_book` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `enrollment_no` varchar(30) NOT NULL,
  `book` varchar(40) NOT NULL,
  `Author_Name` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iss_book`
--

INSERT INTO `iss_book` (`id`, `Department`, `enrollment_no`, `book`, `Author_Name`, `Name`) VALUES
(3, 'MCA', '41MCA/18', 'JAVA', 'Dennis ritchie', 'Suman'),
(5, 'MCA', '42MCA/18', 'PHP', 'james', 'Mohit');

-- --------------------------------------------------------

--
-- Table structure for table `req_book`
--

CREATE TABLE `req_book` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Book_Name` varchar(40) NOT NULL,
  `Author_Name` varchar(40) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_book`
--

INSERT INTO `req_book` (`id`, `Department`, `Book_Name`, `Author_Name`, `Quantity`, `Date`) VALUES
(1, 'MCA', 'SQL', 'james', 10, '2021-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iss_book`
--
ALTER TABLE `iss_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_book`
--
ALTER TABLE `req_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `iss_book`
--
ALTER TABLE `iss_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `req_book`
--
ALTER TABLE `req_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
