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
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Semester` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `filename` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `Department`, `Semester`, `Date`, `filename`) VALUES
(1, 'MCA', '1st Semester', '2021-12-22', 'Daktar Mahananda.docx'),
(2, 'BCA', '1st Semester', '2022-01-03', 'BCA_Assgn.png'),
(3, 'MCA', '1st Semester', '2022-01-03', 'MCA_aSSIGNMENTS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Semester` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `filename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `Department`, `Semester`, `Date`, `filename`) VALUES
(1, 'MCA', '1st Semester', '2021-12-22', 'home page.pdf'),
(2, 'MCA', '1st Semester', '2021-12-22', 'home page.pdf'),
(3, 'MBA', '2nd Semester', '2021-12-22', 'logo.png'),
(4, 'BCA', '2nd Semester', '2021-12-22', 'About.png'),
(5, 'MBA', '2nd Semester', '2021-12-22', 'My Resume.docx'),
(6, 'MCA', '1st Semester', '2022-01-03', 'MCA_aTTENDANCE.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Designation` varchar(40) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `Gender`, `Address`, `Department`, `Designation`, `Qualification`, `phone`, `email`, `Password`) VALUES
(2, 'Panchanan Turuk', 'Male', 'Koraput', 'MCA', 'Asst Teacher', 'PHD in MA', 8018640492, 'pturuk123@gmail.com', '132'),
(3, 'Sukant Turuk', 'Male', 'jeypore', 'BCA', 'asst teacher', 'BAC', 8596957901, 'sukant@gmail.com', '1234'),
(30, 'Mohit Das', 'Male', 'bhubaneswar', 'MCA', 'Asst Teacher', 'PHD', 8596957901, 'mohit@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `Department` varchar(40) NOT NULL,
  `Semester` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `filename` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `Department`, `Semester`, `Date`, `filename`) VALUES
(2, 'BCA', '1st Semester', '2022-01-03', 'BCA_result2.jpg'),
(3, 'MCA', '1st Semester', '2022-01-03', 'MCA_Result.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
