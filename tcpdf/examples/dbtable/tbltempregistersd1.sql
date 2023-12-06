-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:23 PM
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
-- Table structure for table `tbltempregistersd1`
--

CREATE TABLE IF NOT EXISTS `tbltempregistersd1` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldsectionnumber` int(11) NOT NULL,
  `fldsection` varchar(500) NOT NULL,
  `fldsectiond1` varchar(5000) NOT NULL,
  `fldsectiond2` varchar(5000) NOT NULL,
  `fldsectiond3` varchar(5000) NOT NULL,
  `fldsectiond4` varchar(5000) NOT NULL,
  `fldsectiond5` varchar(5000) NOT NULL,
  `fldsectiond6` varchar(5000) NOT NULL,
  `fldsectiond7` varchar(200) NOT NULL,
  `fldsectiond8` varchar(200) NOT NULL,
  `fldsectiond9` varchar(200) NOT NULL,
  `fldsectiond10` varchar(200) NOT NULL,
  UNIQUE KEY `fldindex` (`fldindex`),
  UNIQUE KEY `fldindex_2` (`fldindex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltempregistersd1`
--

INSERT INTO `tbltempregistersd1` (`fldindex`, `fldcode`, `fldsectionnumber`, `fldsection`, `fldsectiond1`, `fldsectiond2`, `fldsectiond3`, `fldsectiond4`, `fldsectiond5`, `fldsectiond6`, `fldsectiond7`, `fldsectiond8`, `fldsectiond9`, `fldsectiond10`) VALUES
(1, 'TREG1', 1, 'Member details', 'Name', 'Former Name', 'Address', 'Passport No./Issuing Place', 'Company number', 'ID Number', 'Profession', 'Individual', 'Nationality', 'Place of incorporation'),
(2, 'TREG1', 2, 'Share details', 'Class of share', 'Denomination', 'Current holding', 'Date entered as a member', 'Date ceased to be a member', '', '', '', '', ''),
(3, 'TREG1', 3, 'Shares acquired', 'Date of acquisition or transfer', 'Number of shares acquired', 'Certificate number', 'Distinctive numbers of shares', 'Total Consideration SGD\r\n', 'Amount still payable SGD\r\n', 'Notes', '', '', ''),
(4, 'TREG1', 4, 'Shares transferred/disposed', 'Date of transfer', 'Number of shares transferred/ disposed', 'Certificate number', 'New Certificate number (if any)', 'Distinctive numbers of shares', 'Total Consideration SGD\r\n', 'Transferee/Disposal Method', '', '', ''),
(5, 'TREG2', 1, 'Member details', 'Name', 'Former Name', 'Address', 'Passport No./Issuing Place', 'Company number', 'ID Number', 'Profession', 'Individual', 'Nationality', 'Place of incorporation'),
(6, 'TREG3', 1, 'Secretary Details', 'Name', 'Profession', 'Individual', 'Former Name', 'Address', 'Passport No./Issuing Place', 'ID No.', 'Nationality', 'Date Entered as Secretary', 'Date Registered as Secretary');
