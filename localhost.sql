-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2018 at 03:30 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baust1`
--
CREATE DATABASE `baust1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `baust1`;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch_no` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` VALUES
('2nd'),
('1st'),
('3rd'),
('4th'),
('5th'),
('6th'),
('7th');

-- --------------------------------------------------------

--
-- Table structure for table `dept_name`
--

CREATE TABLE IF NOT EXISTS `dept_name` (
  `department_name` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_name`
--

INSERT INTO `dept_name` VALUES
('EEE'),
('CSE'),
('ME'),
('IPE'),
('DBA'),
('ENGLISH'),
('english1');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `hall_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` VALUES
('Taramon Bibi Hall'),
('Abbus Uddin Ahmed Hall'),
('NX1'),
('NX2');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE IF NOT EXISTS `meal` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uroll` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `day` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `breakfast` int(1) NOT NULL,
  `lunch` int(1) NOT NULL,
  `diner` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `meal`
--


-- --------------------------------------------------------

--
-- Table structure for table `mydb`
--

CREATE TABLE IF NOT EXISTS `mydb` (
  `room_no` int(4) NOT NULL,
  `student_id` int(9) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `hall_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` int(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `mydb`
--

INSERT INTO `mydb` VALUES
(208, 150101040, 'KM Rakib', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 11),
(208, 150101034, 'Mustahidul Islam', 'CSE ', '1st ', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 10),
(208, 150101008, 'Feroz Al Mahmud', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 9),
(208, 150101009, 'Mahatab Hossain', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 8),
(201, 150101001, 'Nahid Siddque', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 21),
(207, 150101066, 'Ratul Sharma', 'EEE ', '6th ', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 13),
(207, 150101050, 'Murtuza Adil', 'EEE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 14),
(207, 150101056, 'Tanzir Islam', 'ME', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 15),
(305, 150101018, 'Liton Babu', 'CSE ', '3rd ', 'SELECT HALL', 'Male', 1733889611, '', 16),
(305, 150101039, 'Tasnim Rashid', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 17),
(305, 150101005, 'Ahtesum Aumme', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 2147483647, '', 19),
(201, 150101004, 'Samiha Shahadud', 'CSE', '1st', 'Taramon Bibi Hall', 'Female', 2147483647, '', 22),
(224, 150101010, 'Arif Jawad', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 1844889622, '', 24),
(207, 150101036, 'Topu Raihan', 'CSE', '1st', 'Abbus Uddin Ahmed Hall', 'Male', 1867889611, '', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uroll` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uroll` (`uroll`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES
(1, 150102001, '12345'),
(2, 150101018, '34567');
--
-- Database: `login`
--
CREATE DATABASE `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES
(1, 'mahatab', 12345),
(2, 'rakib', 678910);
