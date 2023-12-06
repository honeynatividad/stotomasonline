-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:22 PM
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
-- Table structure for table `tbltempregistersd`
--

CREATE TABLE IF NOT EXISTS `tbltempregistersd` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldheading1` varchar(5000) NOT NULL,
  `fldheading2` varchar(4000) NOT NULL,
  `fldheading3` varchar(4000) NOT NULL,
  `fldheading4` varchar(5000) NOT NULL,
  `fldheading5` varchar(5000) NOT NULL,
  `fldheading6` varchar(5000) NOT NULL,
  `fldheading7` varchar(500) NOT NULL,
  `fldheading8` varchar(500) NOT NULL,
  UNIQUE KEY `fldindex` (`fldindex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltempregistersd`
--

INSERT INTO `tbltempregistersd` (`fldindex`, `fldcode`, `fldheading1`, `fldheading2`, `fldheading3`, `fldheading4`, `fldheading5`, `fldheading6`, `fldheading7`, `fldheading8`) VALUES
(2, 'TREG2', 'Share Holder Register Template 1', 'Name of Company:', 'Company Number:', 'na', 'na', 'na', 'na', 'na'),
(1, 'TREG1', 'Registers of Members and Share Ledger', 'Name of Company:', 'Company Number:', 'na', 'na', 'na', 'na', 'na'),
(3, 'TREG3', 'Register of Secretary', 'Name of Company:', 'Company Number:', 'na', 'na', 'na', 'na', 'na');
