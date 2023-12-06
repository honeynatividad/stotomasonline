-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:08 PM
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
-- Table structure for table `tblfirstboardresd1`
--

CREATE TABLE IF NOT EXISTS `tblfirstboardresd1` (
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
  UNIQUE KEY `fldindex` (`fldindex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfirstboardresd1`
--

INSERT INTO `tblfirstboardresd1` (`fldindex`, `fldcode`, `fldsectionnumber`, `fldsection`, `fldsectiond1`, `fldsectiond2`, `fldsectiond3`, `fldsectiond4`, `fldsectiond5`, `fldsectiond6`) VALUES
(1, 'TFBR1', 1, '1. INCORPORATION', 'Name of Company:', 'Company No:', 'I, the undermentioned person, hereby consent to act as a director of the abovenamed company with effect from ', '', '', ''),
(2, 'TFBR1', 2, '2. REGISTERED OFFICE AND CORRESPONDENCES ADDRESS', 'It was noted that the Registered Office of the Company is', '', '', '', '', ''),
(3, 'TFBR1', 3, '3. DIRECTORS', 'It was noted that the first directors of the Company and that the named directors had signed consent to act', 'It was noted that the abovementioned appointment has been entered in the Register of Directors and a copy of the Register of Directors has been maintained at the Registered Office.', '', '', '', ''),
(4, 'TFBR1', 4, '4. SECRETARY', 'It was noted that the first secretary of the Company and that the named secretary had signed consent to act:', '', '', '', '', ''),
(5, 'TFBR1', 5, '5. SHARE CAPITAL', 'It was noted that the Company is authorised to issue a maximum of 50,000 shares of a single class each with a par value of SGD1.00.', '', '', '', '', ''),
(6, 'TFBR1', 6, '6. APPLICATION FOR AND ALLOTMENT OF SHARE', 'The following application for share in the Company was submitted:', 'Applicant', 'No. of Share(s)', 'Consideration', 'It was resolved that the application be approved and that the share(s) be issued accordingly.', 'It was further resolved that the Common Seal of the Company be affixed to the share certificate to be issued and that details be entered in the Register of Members and a copy of the Register of Members has been maintained at the Registered Office.'),
(7, 'TFBR1', 7, '7. FINANCIAL YEAR END', 'It was resolved that the Company’s financial year end be set on', 'of each year.', '', '', '', ''),
(8, 'TFBR1', 8, '8. LOCATION OF BOOKS AND RECORDS', 'It was resolved that the books, records and minutes of the Company be kept at the following location, until otherwise determined by the Director:', '', '', '', '', ''),
(9, 'TFBR1', 9, 'Directors', 'Auhorised Signatory', 'Authorised Signatory', '', '', '', ''),
(11, 'TFBR2', 2, '**2. REGISTERED OFFICE AND CORRESPONDENCES ADDRESS', '**It was noted that the Registered Office of the Company is', '', '', '', '', ''),
(10, 'TFBR2', 1, '***1. INCORPORATION', '***Name of Company:', '***Company No:', '***I, the undermentioned person, hereby consent to act as a director of the abovenamed company with effect from ', '', '', ''),
(12, 'TFBR2', 3, '**3. DIRECTORS', '**It was noted that the first directors of the Company and that the named directors had signed consent to act', '**It was noted that the abovementioned appointment has been entered in the Register of Directors and a copy of the Register of Directors has been maintained at the Registered Office.', '', '', '', ''),
(13, 'TFBR2', 4, '**4. SECRETARY', '**It was noted that the first secretary of the Company and that the named secretary had signed consent to act:', '', '', '', '', ''),
(14, 'TFBR2', 5, '**5. SHARE CAPITAL', '**It was noted that the Company is authorised to issue a maximum of 50,000 shares of a single class each with a par value of SGD1.00.', '', '', '', '', ''),
(15, 'TFBR2', 6, '**6. APPLICATION FOR AND ALLOTMENT OF SHARE', '**The following application for share in the Company was submitted:', '**Applicant', '**No. of Share(s)', '**Consideration', '**It was resolved that the application be approved and that the share(s) be issued accordingly.', '**It was further resolved that the Common Seal of the Company be affixed to the share certificate to be issued and that details be entered in the Register of Members and a copy of the Register of Members has been maintained at the Registered Office.'),
(16, 'TFBR2', 7, '**7. FINANCIAL YEAR END', '**It was resolved that the Companyâ€™s financial year end be set on', '**of each year.', '', '', '', ''),
(17, 'TFBR2', 8, '*8. LOCATION OF BOOKS AND RECORDS', '*It was resolved that the books, records and minutes of the Company be kept at the following location, until otherwise determined by the Director:', '', '', '', '', ''),
(18, 'TFBR2', 9, '**Directors', '**Authorised Signatory', '**Authorised Signatory', '', '', '', '');
