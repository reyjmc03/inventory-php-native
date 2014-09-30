-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2013 at 01:07 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--
CREATE DATABASE `inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `t_category`
--

CREATE TABLE IF NOT EXISTS `t_category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `c_code` varchar(32) DEFAULT NULL,
  `c_description` text,
  `createuserid` int(11) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updateuserid` int(11) DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_category`
--

INSERT INTO `t_category` (`categoryid`, `c_code`, `c_description`, `createuserid`, `createdate`, `updateuserid`, `updatedate`) VALUES
(1, 'hello world', 'hello world', NULL, '2002-01-01 04:40:43', NULL, '2002-01-02 04:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `t_item`
--

CREATE TABLE IF NOT EXISTS `t_item` (
  `itemid` int(11) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(32) DEFAULT NULL,
  `i_code` varchar(128) DEFAULT NULL,
  `i_description` text,
  `i_amount` decimal(10,0) DEFAULT NULL,
  `i_quantity` decimal(10,0) DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `createuserid` int(11) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updateuserid` int(11) DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_item`
--

INSERT INTO `t_item` (`itemid`, `i_name`, `i_code`, `i_description`, `i_amount`, `i_quantity`, `categoryid`, `createuserid`, `createdate`, `updateuserid`, `updatedate`) VALUES
(2, NULL, '24', 'bcbvbn', 43, 2, 1, NULL, '2002-01-01 04:14:39', NULL, '2002-01-02 04:14:45'),
(3, NULL, '123', 'kopiko', 6, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(32) DEFAULT NULL,
  `u_password` varchar(32) DEFAULT NULL,
  `u_firstname` varchar(32) DEFAULT NULL,
  `u_lastname` varchar(32) DEFAULT NULL,
  `u_middlename` varchar(32) DEFAULT NULL,
  `u_email` varchar(32) DEFAULT NULL,
  `usertypeid` int(11) DEFAULT NULL,
  `u_phone` varchar(16) DEFAULT NULL,
  `u_address` text,
  `createuserid` int(11) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updateuserid` int(11) DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`userid`, `u_username`, `u_password`, `u_firstname`, `u_lastname`, `u_middlename`, `u_email`, `usertypeid`, `u_phone`, `u_address`, `createuserid`, `createdate`, `updateuserid`, `updatedate`) VALUES
(1, 'admin', 'admin', 'Jose Mari', 'Rey', 'Caballa', 'reyjmc03@gmail.com', 1, '09982737969', 'TANZA, CAVITE', NULL, NULL, NULL, NULL),
(2, '1', '1', 'Julie Ann', 'Lontoc', 'Castillo', 'julie.lontoc@gmail.com', 2, '09982737969', 'INDANG, CAVITE', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_usertype`
--

CREATE TABLE IF NOT EXISTS `t_usertype` (
  `usertypeid` int(11) NOT NULL AUTO_INCREMENT,
  `ut_code` varchar(16) DEFAULT NULL,
  `ut_description` text,
  `createuserid` int(11) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updateuserid` int(11) DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`usertypeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_usertypeid`
--

CREATE TABLE IF NOT EXISTS `t_usertypeid` (
  `level` int(3) NOT NULL,
  `usertypeid` varchar(35) NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_usertypeid`
--

INSERT INTO `t_usertypeid` (`level`, `usertypeid`) VALUES
(1, 'Administrator'),
(2, 'Inventory Personnel'),
(3, 'Staff'),
(4, 'Management Staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
