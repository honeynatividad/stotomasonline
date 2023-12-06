-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:21 PM
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
-- Table structure for table `tbltempregisters`
--

CREATE TABLE IF NOT EXISTS `tbltempregisters` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldname` varchar(200) NOT NULL,
  `flddatecreated` date NOT NULL,
  `fldcreatedby` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltempregisters`
--

INSERT INTO `tbltempregisters` (`fldindex`, `fldcode`, `fldname`, `flddatecreated`, `fldcreatedby`, `fldstatus`) VALUES
(1, 'TREG1', 'Registers of Members and Share Ledger', '2018-06-20', 'USER2', 'Active'),
(2, 'TREG2', 'Share Holder Register Template 1', '2018-06-22', 'USER1', 'Not Active'),
(3, 'TREG3', 'Register of Secretary', '2018-06-22', 'USER1', 'Active');
