-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:16 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltform45b`
--

CREATE TABLE IF NOT EXISTS `tbltform45b` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `flddatecreated` date NOT NULL,
  `fldcreatedby` varchar(400) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltform45b`
--

INSERT INTO `tbltform45b` (`fldindex`, `fldcode`, `flddatecreated`, `fldcreatedby`, `fldstatus`) VALUES
(1, 'T45B1', '2017-05-09', 'USER1', 'Active'),
(2, 'T45B2', '2018-06-19', 'USER1', 'Active');
