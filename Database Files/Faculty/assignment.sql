-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 08:38 PM
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
  `name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `size` int(11) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `Date`, `size`, `Department`, `Semester`) VALUES
(9, 'Resume.pdf', '2021-05-09', 224874, 'MBA', '1st Semester'),
(10, 'home page.pdf', '2021-05-09', 107390, 'B.ED', '2nd Semester'),
(11, 'home page.pdf', '2021-05-09', 107390, 'B.ED', '2nd Semester'),
(12, 'home page.pdf', '2021-05-09', 107390, 'MCA', '3rd Semester'),
(13, 'home page.pdf', '2021-05-09', 107390, 'MCA', '3rd Semester'),
(14, 'home page.pdf', '2021-05-21', 107390, 'BCA', '5th Semester'),
(15, 'home page.pdf', '2021-05-09', 107390, 'BCA', '3rd Semester'),
(16, 'home page.pdf', '2021-05-09', 107390, 'B.ED', '6th Semester'),
(17, 'home page.pdf', '2021-05-09', 107390, 'MBA', '6th Semester'),
(18, 'home page.pdf', '0000-00-00', 107390, 'BCA', '1st Semester'),
(19, 'home page.pdf', '0000-00-00', 107390, 'BCA', '1st Semester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
