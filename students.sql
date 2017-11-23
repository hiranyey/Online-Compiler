-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 08:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `ID` int(11) NOT NULL,
  `4_242` int(11) NOT NULL,
  `3_422` int(11) NOT NULL,
  `qw3_1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`ID`, `4_242`, `3_422`, `qw3_1`) VALUES
(1, 0, 0, 0),
(2, 1, 0, 0),
(3, 0, 0, 0),
(4, 0, 0, 0),
(5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `ASSIGNMENT` varchar(50) NOT NULL,
  `language` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`ASSIGNMENT`, `language`) VALUES
('4_242', 'c'),
('3_422', 'c'),
('qw3_1', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(32) NOT NULL,
  `USERNAME` varchar(32) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `PERSON` int(11) NOT NULL,
  `4_242` varchar(500) NOT NULL,
  `3_422` varchar(500) NOT NULL,
  `qw3_1` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `USERNAME`, `PASSWORD`, `PERSON`, `4_242`, `3_422`, `qw3_1`) VALUES
(1, 'ANJALI GUPTA', '151641', 'e05d7137fc2daab5a82614329f759292', 0, '35', '35446', '242'),
(2, 'HIRANYEY GAJBHIYE', '151600', '4b782fee5c608357e3935a4ede165e42', 0, '353', '4', '4424'),
(3, 'MRUNALINI JAMBULKAR', '151519', 'b77a179c2a49acfb572741a76242ac4c', 0, '353', '4646', '24242'),
(4, 'RISHABH CHIRANIA', '151647', 'c37360d634d9b67d17dbb087175a99be', 0, '353', '34646', '424'),
(5, 'SIDDHANTH CHIGALE', '151145', 'd1430bbd98dd382122719507e3ede341', 0, '33', '4464', '4'),
(6, 'FACULTY', '111111', '2b73c82da5bd006a524149b7ba10941e', 1, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
