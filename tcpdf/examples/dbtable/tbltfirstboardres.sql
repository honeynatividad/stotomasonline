-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:06 PM
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
-- Table structure for table `tbltfirstboardres`
--

CREATE TABLE IF NOT EXISTS `tbltfirstboardres` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `flddatecreated` date NOT NULL,
  `fldcreatedby` varchar(400) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltfirstboardres`
--

INSERT INTO `tbltfirstboardres` (`fldindex`, `fldcode`, `flddatecreated`, `fldcreatedby`, `fldstatus`) VALUES
(1, 'TFBR1', '2017-05-09', 'USER1', 'Active'),
(3, 'TFBR3', '2018-06-13', 'USER1', 'Not Active'),
(2, 'TFBR2', '2018-06-11', 'USER2', 'Active');
