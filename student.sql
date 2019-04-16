-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 11:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enrollmentNumber` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enrollmentNumber`, `name`, `branch`, `semester`, `cgpa`) VALUES
(17103199, 'Shivanshu Datt', 'Mech', 6, 9.8),
(17103203, 'Richa Sharma', 'IT', 2, 7.9),
(17103204, 'Stuart Little', 'IT', 7, 9.1),
(17103205, 'Amber Heard', 'Mech', 6, 6),
(17103206, 'Ner girl', 'ECE', 5, 5.7),
(17103207, 'Stacy Maclroy', 'CSE', 8, 7.9),
(17103208, 'Jon Mundal', 'IT', 1, 7),
(17103219, 'Breaker Kumar', 'Mech', 7, 8.2),
(17103299, 'Shuvam DUbey', 'IT', 7, 7.6),
(17105252, 'Siddu Dj', 'IT', 6, 7.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollmentNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
