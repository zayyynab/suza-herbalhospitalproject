-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(30) NOT NULL,
  `did` int(30) NOT NULL,
  `fulname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `stime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `did`, `fulname`, `address`, `phone`, `description`, `stime`) VALUES
(11, 3, 'juma ali juma', 'paje', 777123432, 'ntakuepo natibu kila kt', '00:00:00.000000'),
(12, 5, 'yussuf', 'rahaleo', 777194199, 'tumbo', '00:00:00.000000'),
(15, 2, 'ali ali ', 'tunguu', 777123456, 'ntatibu kila kitu', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `dates` date NOT NULL,
  `stime` time(6) NOT NULL,
  `etime` time(6) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `address`, `phone`, `email`, `disease`, `dates`, `stime`, `etime`, `user`, `pass`) VALUES
(1, 'assime akss juma', 'tunguu', 777777777, 'zaihaji09@gmail.com', 'diarhoea', '2111-01-03', '01:03:00.000000', '01:03:00.000000', '', ''),
(2, 'zainab', 'tunguu', 234567890, 'zaihaji09@gmail.com', 'diarhoea', '0056-03-03', '04:07:00.000000', '01:02:00.000000', '', ''),
(3, 'gghhhhhh', 'qqqqqqqqqqqq', 2134567890, 'zaiii09@gmail', 'kifua', '0212-02-02', '01:02:00.000000', '02:03:00.000000', '', ''),
(4, 'zainab', 'tunguu', 123456789, 'zaihaji09@gmail.com', 'mafua', '0222-01-02', '01:01:00.000000', '13:03:00.000000', '', ''),
(5, 'assime akss juma', 'jumbi', 123456789, 'asl98@gmail.com', 'kifua', '0231-01-02', '01:02:00.000000', '02:02:00.000000', 'pp', '12345'),
(6, 'zainab', 'tunguu', 123456, 'zaihaji09@gmail.com', 'diarhoea', '0123-01-02', '01:02:00.000000', '01:02:00.000000', 'qww', 'qwe'),
(7, 'aziza', 'kati', 777123242, 'aziza@gmail.com', 'malaria', '2020-07-31', '00:04:00.000000', '00:05:00.000000', '', ''),
(9, 'azizi', 'fuoni', 777984352, 'amina@gmail.com', 'tumbo', '2020-08-08', '00:09:00.000000', '00:09:00.000000', 'aziza', '12345'),
(10, 'fau', 'kati', 987654, 'zaihaji09@gmail.com', 'tumbo', '2020-08-20', '11:02:00.000000', '11:03:00.000000', 'jecha', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(30) NOT NULL,
  `did` int(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `bid` int(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `did`, `pname`, `address`, `email`, `phone`, `bid`, `user`, `pass`) VALUES
(8, 1, 'zai', 'qwe', 'as@gmail.com', 12345, 12, 'zay', '12345'),
(9, 2, 'mam', 'jumbi', 'as@gmail.com', 977765432, 15, 'mam', '12345'),
(10, 5, 'chuli', 'kati', 'as@gmail.com', 77743213, 11, 'chuli', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `user-role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `did` (`did`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `did` (`did`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`did`) REFERENCES `doctor` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`did`) REFERENCES `doctor` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
