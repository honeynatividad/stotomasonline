-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:10 PM
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
-- Table structure for table `tblfirstboardresd`
--

CREATE TABLE IF NOT EXISTS `tblfirstboardresd` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldcoregno` varchar(400) NOT NULL,
  `fldheading1` varchar(5000) NOT NULL,
  `fldheading2` varchar(4000) NOT NULL,
  `fldheading3` varchar(4000) NOT NULL,
  `fldheading4` varchar(5000) NOT NULL,
  `fldheading5` varchar(5000) NOT NULL,
  `fldheading6` varchar(5000) NOT NULL,
  UNIQUE KEY `fldindex` (`fldindex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfirstboardresd`
--

INSERT INTO `tblfirstboardresd` (`fldindex`, `fldcode`, `fldcoregno`, `fldheading1`, `fldheading2`, `fldheading3`, `fldheading4`, `fldheading5`, `fldheading6`) VALUES
(1, 'TFBR1', 'COMPANY REGISTRATION NUMBER:', '(Incorporated in The Republic of Singapore)', '(the ''Company'')', 'RESOLUTIONS IN WRITING OF THE DIRECTORS OF THE COMPANY', 'PURSUANT TO THE COMPANY''S ARTICLES OF ASSOCIATION', 'RESOLUTIONS IN WRITING OF THE DIRECTOR', 'Page 2'),
(2, 'TFBR2', 'xxCOMPANY REGISTRATION NUMBERxx:', 'xx(Incorporated in The Republic of Singapore)xx', 'xx(the ''Company'')xx', 'xxRESOLUTIONS IN WRITING OF THE DIRECTORS OF THE COMPANYxx', 'xxPURSUANT TO THE COMPANY''S ARTICLES OF ASSOCIATIONxx', 'xxRESOLUTIONS IN WRITING OF THE DIRECTORxx', 'xxPage 2xx');
