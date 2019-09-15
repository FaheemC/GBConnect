-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2016 at 09:59 PM
-- Server version: 5.5.52-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f6team29_schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `program` varchar(8) NOT NULL,
  `accesscode` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `fname`, `lname`, `username`, `password`, `email`, `dob`, `program`, `accesscode`) VALUES
(5, 'Haitham', 'Ahmed', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'haitham543@gmail.com', '30/12/1994', 'T127', ''),
(6, 'Admin', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'f@g.v', '11/11/1994', 'T127', ''),
(7, 'Admin', 'Admin', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'haitham5433@gmail.com', '30/12/1994', 'T127', '');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE IF NOT EXISTS `plant` (
  `studentID` int(11) NOT NULL,
  `yearMonth` varchar(11) NOT NULL,
  `dayCell` varchar(6) NOT NULL,
  `planID` int(5) NOT NULL AUTO_INCREMENT,
  `planContent` varchar(64) NOT NULL,
  PRIMARY KEY (`planID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`studentID`, `yearMonth`, `dayCell`, `planID`, `planContent`) VALUES
(36, '201612', 'cell11', 24, 'a plan'),
(36, '20171', 'cell11', 25, 'yes'),
(33, '201612', 'cell11', 26, 'dfhg');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `studentID` int(10) NOT NULL,
  `tutorID` int(10) NOT NULL AUTO_INCREMENT,
  `course` varchar(8) DEFAULT NULL,
  `finalmark` int(3) NOT NULL,
  `GPA` varchar(4) NOT NULL,
  `description` varchar(500) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tutorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`studentID`, `tutorID`, `course`, `finalmark`, `GPA`, `description`, `fname`, `lname`, `email`, `status`) VALUES
(36, 53, 'COMP1151', 0, '', '', 'K', 'L', 'k@k.com', 2),
(51, 58, 'COMP1176', 88, '3', '1231231', 'E', 'E', 'e@e.e', 1),
(45, 59, 'COMP1223', 5, '4.00', 'Becuase it is what I always wanted to do ', 'Zz', 'Zz', 'mansorda@georgebrown.ca', 1),
(51, 60, 'COMP1176', 100, '4', 'sgsdgss', 'E', 'E', 'e@e.e', 1),
(44, 61, 'GAME1005', 0, '4.00', 'I love to teach.', 'Mansor', 'Shir', 'mansor.shirzada@georgebrown.ca', 1),
(44, 62, 'COMP2130', 0, '4.00', 'I love to help', 'Mansor', 'Shir', 'mansor.shirzada@georgebrown.ca', 1),
(44, 63, 'COMP2130', 98, '4.00', 'Passion', 'Mansor', 'Shir', 'mansor.shirzada@georgebrown.ca', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `username` varchar(41) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `program` varchar(5) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `dob`, `program`, `sem`, `last_login`) VALUES
(33, 'Haitham', 'Ahmed', 'Haitham123', 'e10adc3949ba59abbe56e057f20f883e', 'haitham543@gmail.com', '30/12/1994', 'T127', '3', '2016-12-04 23:17:58'),
(34, 'Haitham', 'Ahmed', 'Haitham1234', 'e10adc3949ba59abbe56e057f20f883e', 'haitham543@gmail.com', '30/12/1994', 'T127', '3', '2016-12-04 23:54:11'),
(35, 'Faheem', 'Choudhury', 'FaheemC', '827ccb0eea8a706c4c34a16891f84e7b', 'FaheemChoudhury@Gmail.com', '10/02/1995', 'T127', '3', '2016-12-05 04:05:39'),
(39, 'Faheem', 'Abc', 'faheem123', '827ccb0eea8a706c4c34a16891f84e7b', 'faheem123@gmail.com', '10/02/1995', 'T127', '1', '2016-12-05 15:58:59'),
(40, 'A', 'A', 'a', '0cc175b9c0f1b6a831c399e269772661', 'a@a.a', '01/01/0001', 'T141', '1', '2016-12-05 19:11:18'),
(41, 'Aaa', 'Aaa', 'asd', '202cb962ac59075b964b07152d234b70', 'a@afa.com', '10/02/2015', 'T127', '1', '2016-12-05 18:16:48'),
(42, 'Haitham', 'Ahmed', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test@test.com', '30/12/1994', 'T127', '3', '2016-12-05 18:22:21'),
(43, 'James', 'Bond', 'jamesb', '10338c423693698bddf4e6bc229ea225', 'james@bond.com', '04/11/1976', 'T127', '1', '2016-12-05 18:23:27'),
(44, 'Mansor', 'Shir', 'mansor', 'e10adc3949ba59abbe56e057f20f883e', 'mansor.shirzada@georgebrown.ca', '15/03/1995', 'T127', '3', '2016-12-05 18:31:21'),
(45, 'Zz', 'Zz', 'z', 'e10adc3949ba59abbe56e057f20f883e', 'mansorda@georgebrown.ca', '01/01/2016', 'T127', '1', '2016-12-05 18:32:40'),
(46, 'Zxzx', 'Zxzx', 'z', 'e10adc3949ba59abbe56e057f20f883e', 'asd@gerogebrown.ca', '03/05/1990', 'T127', '1', '2016-12-05 18:33:39'),
(47, 'Test2', 'Test2', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'test@georgebrown.ca', '01/01/2016', 'T127', '5', '2016-12-05 18:53:32'),
(48, 'B', 'B', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b@b.c', '01/01/1990', 'T127', '5', '2016-12-05 19:09:49'),
(49, 'C', 'C', 'c', '4a8a08f09d37b73795649038408b5f33', 'c@c.c', '01/01/1990', 'T127', '1', '2016-12-05 19:10:15'),
(50, 'D', 'D', 'd', '8277e0910d750195b448797616e091ad', 'd@d.c', '01/01/1990', 'T141', '1', '2016-12-05 19:11:46'),
(51, 'E', 'E', 'e', 'e1671797c52e15f763380b45e841ec32', 'e@e.e', '10/02/1995', 'T127', '1', '2016-12-05 19:13:45'),
(52, 'G', 'G', 'g', 'b2f5ff47436671b6e533d8dc3614845d', 'g@g.g', '01/01/1990', 'T127', '3', '2016-12-05 19:15:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
