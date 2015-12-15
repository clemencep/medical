-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2015 at 11:41 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical_db`
--
CREATE DATABASE IF NOT EXISTS `medical_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medical_db`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `name`, `email`, `tel`, `message`) VALUES
(1, 'Clemence Patayo', 'clemencepatayo@gmail.com', '+243994570449', 'i like your services'),
(2, 'hawa jamal', 'hawajamal@yahoo.com', '+256756841859', 'what do i need to have an account');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE IF NOT EXISTS `login_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(60) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`email`,`password`),
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `names`, `uname`, `tel`, `email`, `adresse`, `password`, `date`) VALUES
(1, 'Mengo Hospital', 'Mengo National Hospital', '+256774288575', 'mengohospital@gmail.com', 'Kampala Uganda', '28bcee424afb93594d681e666a3e7d', '0000-00-00'),
(2, 'Nakasero', 'Nakasero Hospital', '+243990364636', 'nakasohospial@yahoo,com', 'Kampala', '46371fe3e8428bd4ce7d0275fd3b73', '0000-00-00'),
(4, 'Kampala Hospital', 'Kampala Hospital', '+243994570449', 'kampalahospital@gmail.com', 'Kampala-Uganda', '42234c98cd87a6fea4695716745167', '0000-00-00'),
(5, 'wanamahika', 'wanamahika hospital', '+1996655234', 'wanamahika@gmail.com', 'Butembo-DRC', '31c9e64b18eb0417e420f8fc390f71', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `store_tbl`
--

CREATE TABLE IF NOT EXISTS `store_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `uprice` varchar(20) NOT NULL,
  `balance` varchar(20) NOT NULL,
  `bprice` varchar(20) NOT NULL,
  `tprice` varchar(20) NOT NULL,
  `rprice` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `store_tbl`
--

INSERT INTO `store_tbl` (`id`, `name`, `mname`, `quantity`, `uprice`, `balance`, `bprice`, `tprice`, `rprice`) VALUES
(1, 'Mengo National Hospital', 'paracetamol', '600', '500', '', '0', '300000', '300000'),
(3, 'Wanamahika hospital', 'aspirine', '850', '400', '300', '120000      ', ' 340000     ', ' 220000     '),
(4, 'Wanamahika hospital', 'aspirine', '400', '400', '300', '120000', '160000', '40000'),
(5, 'kampala internation hospital', 'abiprophn', '500', '600', '', '0', '300000', '300000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
