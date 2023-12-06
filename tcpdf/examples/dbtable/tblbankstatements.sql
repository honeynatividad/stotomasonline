-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:04 PM
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
-- Table structure for table `tblbankstatements`
--

CREATE TABLE IF NOT EXISTS `tblbankstatements` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldcustomercode` varchar(200) NOT NULL,
  `fldbankstatement` varchar(200) NOT NULL,
  `flddescription` varchar(2000) NOT NULL,
  `flddateuploaded` date NOT NULL,
  `fldusercode` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbankstatements`
--

INSERT INTO `tblbankstatements` (`fldindex`, `fldcode`, `fldcustomercode`, `fldbankstatement`, `flddescription`, `flddateuploaded`, `fldusercode`, `fldstatus`) VALUES
(1, 'BNKS1', 'LEAD3', 'TECHNOLOGICAL INSTITUTE OF THE PHILIPPINES.doc', 'bank statement 1', '2018-05-24', 'USER2', 'Active');
