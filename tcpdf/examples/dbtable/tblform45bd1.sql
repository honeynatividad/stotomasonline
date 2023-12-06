-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:18 PM
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
-- Table structure for table `tblform45bd1`
--

CREATE TABLE IF NOT EXISTS `tblform45bd1` (
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
  UNIQUE KEY `fldindex` (`fldindex`),
  UNIQUE KEY `fldindex_2` (`fldindex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblform45bd1`
--

INSERT INTO `tblform45bd1` (`fldindex`, `fldcode`, `fldsectionnumber`, `fldsection`, `fldsectiond1`, `fldsectiond2`, `fldsectiond3`, `fldsectiond4`, `fldsectiond5`, `fldsectiond6`) VALUES
(8, 'T45B1', 8, 'v', '*(v)', 'a member of the Association of International Accountants (Singapore Branch).', '', '', '', ''),
(6, 'T45B1', 6, 'iii', '*(iii)', 'an accountant registered with the Institute of Certified Public Accountants of Singapore.', '', '', '', ''),
(7, 'T45B1', 7, 'iv', '*(iv)', 'a member of the Singapore Association of the Institute Chartered Secretaries and Administrators.', '', '', '', ''),
(5, 'T45B1', 5, 'ii', '*(ii)', 'a qualified person under the Legal Profession Act (Cap. 161).', '', '', '', ''),
(4, 'T45B1', 4, 'i', '*(i)', 'secretary of a company for at least 3 of the 5 years immediately proceeding the abovementioned date of my appointment as secretary of the abovenamed company.', '', '', '', ''),
(3, 'T45B1', 3, '2', '2. ', 'I am qualified person under section 171(1AA) of the Companies Act by virtue of my 	being ', '', '', '', ''),
(2, 'T45B1', 2, '1', '1. ', 'I, the undermentioned person, hereby consent to act as secretary of the abovenamed  	company with effect from', '', '', '', ''),
(1, 'T45B1', 1, 'Head', 'Name of Company: ', 'Company No.:         ', 'na', '', '', ''),
(9, 'T45B1', 9, 'vi', '*(vi)', 'a member of The Institute of Company Accountants, Singapore.', '', '', '', ''),
(10, 'T45B1', 10, 'name1', 'Name: ', '', '', '', '', ''),
(11, 'T45B1', 11, 'address1', 'Address: ', '', '', '', '', ''),
(12, 'T45B1', 12, 'icpa', 'IC/Passport No.: ', 'Nationality: ', '', '', '', ''),
(13, 'T45B1', 13, 'signature', 'Signature: ', '', '', '', '', ''),
(14, 'T45B1', 14, 'sigline', '----------------------------------------------------', '', '', '', '', ''),
(15, 'T45B1', 15, 'dated', 'Dated this ', 'day of ', '', '', '', ''),
(16, 'T45B1', 16, 'delete', '*Delete where inapplicable', '', '', '', '', ''),
(17, 'T45B2', 1, '***Head', '***Name of Company:', '***Company No.:', '***na***', '', '', ''),
(18, 'T45B2', 2, '*1', '*1.', '*I, the undermentioned person, hereby consent to act as secretary of the abovenamed  	company with effect from', '', '', '', ''),
(19, 'T45B2', 3, '*2', '*2.', '*I am qualified person under section 171(1AA) of the Companies Act by virtue of my 	being ', '', '', '', ''),
(20, 'T45B2', 4, '*i', '**(i)', '*secretary of a company for at least 3 of the 5 years immediately proceeding the abovementioned date of my appointment as secretary of the abovenamed company.', '', '', '', ''),
(21, 'T45B2', 5, '*ii', '**(ii)', '*a qualified person under the Legal Profession Act (Cap. 161).', '', '', '', ''),
(22, 'T45B2', 6, '*iii', '**(iii)', '*an accountant registered with the Institute of Certified Public Accountants of Singapore.', '', '', '', ''),
(23, 'T45B2', 7, '*iv', '*(iv)', '*a member of the Singapore Association of the Institute Chartered Secretaries and Administrators.', '', '', '', ''),
(24, 'T45B2', 8, '*v', '**(v)', '*a member of the Association of International Accountants (Singapore Branch).', '', '', '', ''),
(25, 'T45B2', 9, '*vi', '**(vi)', '*a member of The Institute of Company Accountants, Singapore.', '', '', '', ''),
(26, 'T45B2', 10, '*name1', '*Name: ', '', '', '', '', ''),
(27, 'T45B2', 11, '*address1', '*Address: ', '', '', '', '', ''),
(28, 'T45B2', 12, '*icpa', '*IC/Passport No.: ', '*Nationality: ', '', '', '', ''),
(29, 'T45B2', 13, '*signature', '*Signature: ', '', '', '', '', ''),
(30, 'T45B2', 14, '*sigline', '*----------------------------------------------------', '', '', '', '', ''),
(31, 'T45B2', 15, '*dated', '*Dated this ', '*day of ', '', '', '', ''),
(32, 'T45B2', 16, '*delete', '**Delete where inapplicable', '', '', '', '', '');
