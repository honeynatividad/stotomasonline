-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 03:14 PM
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
-- Table structure for table `tblform45d1`
--

CREATE TABLE IF NOT EXISTS `tblform45d1` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldsection` varchar(500) NOT NULL,
  `fldsectionnumber` int(11) NOT NULL,
  `fldsectiond1` varchar(5000) NOT NULL,
  `fldsectiond2` varchar(5000) NOT NULL,
  `fldsectiond3` varchar(5000) NOT NULL,
  `fldsectiond4` varchar(5000) NOT NULL,
  `fldsectiond5` varchar(5000) NOT NULL,
  `fldsectiond6` varchar(5000) NOT NULL,
  UNIQUE KEY `fldindex` (`fldindex`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblform45d1`
--

INSERT INTO `tblform45d1` (`fldindex`, `fldcode`, `fldsection`, `fldsectionnumber`, `fldsectiond1`, `fldsectiond2`, `fldsectiond3`, `fldsectiond4`, `fldsectiond5`, `fldsectiond6`) VALUES
(1, 'TF451', '*Head', 1, 'Name of Company: ', 'Company No: ', 'I, the undermentioned person, hereby consent to act as a director of the abovenamed company with effect from ', '', '', ''),
(2, 'TF451', '(a)', 2, 'I am not disqualified from acting as a director, in that:', '', '', '', '', ''),
(3, 'TF451', '(i)', 3, 'I am not less than 21 years of age and that I am of full capacity.', '', '', '', '', ''),
(4, 'TF451', '(ii)', 4, 'Within a period of 3 years preceding the date of this statement I have not had any disqualification order made by the High Court of Singapore against me under Section 149A(1) of the Companies Act (“the Act”)', '', '', '', '', ''),
(5, 'TF451', '(iii)', 5, 'Within a period of 5 years preceding the date of this statement I have not had any disqualification order made by the High Court of Singapore against me under Section 149(1) or 154(2) of the Act.', '', '', '', '', ''),
(6, 'TF451', '(iv)', 6, 'That within a period of 5 years preceding 12 November 1993 I have not been convicted whether within or without Singapore, of any offence –', '', '', '', '', ''),
(7, 'TF451', '(A)', 7, 'in connection with the promotion, formation or management of a corporation;', '', '', '', '', ''),
(8, 'TF451', '(B)', 8, 'involving fraud or dishonesty punishable on conviction with imprisonment for 3 months or more; or', '', '', '', '', ''),
(9, 'TF451', '(C)', 9, 'under Section 157 (failure to act honestly and diligently as a director or make improper use of company information for gain) or under Section 339 (failure to keep proper company accounts books) of the Act.', '', '', '', '', ''),
(10, 'TF451', '(v)', 10, 'That within a period of 5 years preceding the date of this statement I have not been convicted, in Singapore or elsewhere, of any offence involving fraud or dishonesty punishable on conviction with imprisonment for 3 months or more.', '', '', '', '', ''),
(11, 'TF451', '(vi)', 11, 'That -', '', '', '', '', ''),
(12, 'TF451', '(A2)', 12, 'I have not been convicted of 3 or more offences under the Companies Act in relation to the requirements on the filing of returns, accounts or other documents with the Registrar of Companies and have not had 3 or more orders of the High Court of Singapore made against me under Section 13 or 399 of the Act in relation to such requirements, and', '', '', '', '', ''),
(13, 'TF451', '(B2)', 13, 'the last of any such conviction did not take place or the last of any such order was not made during the period of 5 years preceding the date of this statement.', '', '', '', '', ''),
(14, 'TF451', '(C2)', 14, 'I am not an undischarged bankrupt under Section 148(1) of the Act.', '', '', '', '', ''),
(15, 'TF451', 'f45', 15, 'Form 45 Continuation Sheet 1', '', '', '', '', ''),
(16, 'TF451', 'noc', 16, 'Name of Company: ', '', '', '', '', ''),
(17, 'TF451', 'cno', 17, 'Company No.: ', '', '', '', '', ''),
(18, 'TF451', '(vii)', 18, 'By virtue of the foregoing I am not disqualified from acting as a director of the abovenamed company.', '', '', '', '', ''),
(19, 'TF451', '(b)', 19, 'I am aware of and undertake to abide by my duties, responsibilities and liabilities specified in the Act as well as under the common law where applicable, including the following key administration and substantive duties, that is, to:', '', '', '', '', ''),
(20, 'TF451', '(i2)', 20, 'discharge my responsibilities in the company;', '', '', '', '', ''),
(21, 'TF451', '(ii2)', 21, 'ensure that I have a reasonable degree of skill and knowledge to handle the affairs of the company;', '', '', '', '', ''),
(22, 'TF451', '(iii2)', 22, 'act honestly and be reasonable diligent in discharging my duties and act in the interest of the company without putting myself in a position of conflict of interest;', '', '', '', '', ''),
(23, 'TF451', '(iv2)', 23, 'employ the powers and assets that I am entrusted with for the proper purposes of the company and not for any collateral purposes;', '', '', '', '', ''),
(24, 'TF451', '(v2)', 24, 'ensure that the company and I comply with all the requirements and obligations under the Act including those in respect of meetings, requisitions, resolutions, accounts, reports, statements, records and other documents on the company, filing and notices and any other prerequisites; and', '', '', '', '', ''),
(25, 'TF451', '(vi2)', 25, 'account to the shareholders for my conduct of the affairs of the company and make such disclosures that are incumbent upon me under the Act.', '', '', '', '', ''),
(26, 'TF451', '(c)', 26, 'That -', '', '', '', '', ''),
(27, 'TF451', '*(a)', 27, 'I have read and understood the above statements; or ', '', '', '', '', ''),
(28, 'TF451', '*(b)', 28, 'the above statements were interpreted to me in', '', '', '', '', ''),
(29, 'TF451', 'language', 29, '-----------------------------------------------------------------------------', '(state language/dialect)', '', '', '', ''),
(30, 'TF451', 'by', 30, 'By:-------------------------------------------------------------------------', '(state name)', '', '', '', ''),
(31, 'TF451', 'nric', 31, 'NRIC No.: ---------------------------------------------------------------', '', '', '', '', ''),
(32, 'TF451', 'before', 32, 'before I execute this form and I confirm that the statements are true.  I am also aware that I can be prosecuted in Court if I willfully give information on this form which is false.', '', '', '', '', ''),
(33, 'TF451', 'name', 33, 'Name:', '-----------------------------------------------------------------------------------------------------------------------------------------', '', '', '', ''),
(34, 'TF451', 'address', 34, 'Address:', '-----------------------------------------------------------------------------------------------------------------------------------------', '', '', '', ''),
(35, 'TF451', 'nrna', 35, 'NRIC/Passport No.:', '---------------------------------------', 'Nationality: ', '---------------------------------------', '', ''),
(36, 'TF451', 'datesig', 36, 'Dated: ', '---------------------------------------', 'Signature:', '---------------------------------------', '', ''),
(37, 'TF451', 'name3', 37, 'Name: ', '', '', '', '', ''),
(38, 'TF451', 'address3', 38, 'Address: ', '', '', '', '', ''),
(39, 'TF451', 'date3', 39, 'Date: ', '', '', '', '', ''),
(40, 'TF451', 'comsec', 40, 'The Company Secretary', '', '', '', '', ''),
(41, 'TF451', 'dear', 41, 'Dear Sirs;', '', '', '', '', ''),
(42, 'TF451', 're', 42, 'Re:', '', '', '', '', ''),
(43, 'TF451', 'director', 43, 'Director''s Disclosure of Interest in Contracts   Section 156(4) of the Companies Act, Cap. 50 ', '', '', '', '', ''),
(44, 'TF451', 'pursuant', 44, 'Pursuant to Section 156(4) of the Companies Act, Cap. 50, I hereby give general notice that I am an officer or member of the corporations or firms set out below and should be regarded as being interested in any contract hereinafter made with such corporations or firms.', '', '', '', '', ''),
(45, 'TF451', 'namecor', 45, 'Name of Corporation or Firm Director', '', '', '', '', ''),
(46, 'TF451', 'namecor1', 46, '1. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(47, 'TF451', 'namecor2', 47, '2. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(48, 'TF451', 'namecor3', 48, '3. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(49, 'TF451', 'namecor4', 49, '4. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(50, 'TF451', 'namecor5', 50, '5. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(51, 'TF451', 'partner', 51, 'Partner', '', '', '', '', ''),
(52, 'TF451', 'partner1', 52, '1. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(53, 'TF451', 'partner2', 53, '2. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(54, 'TF451', 'partner3', 54, '3. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(55, 'TF451', 'share', 55, 'Shareholder holding not less than 20% of voting shares (Please refer to Sections 7 and 164 of the Companies Act, Cap. 50 for circumstances in which interest in shares may arise)', '', '', '', '', ''),
(56, 'TF451', 'share1', 56, '1. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(57, 'TF451', 'share2', 57, '2. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(58, 'TF451', 'share3', 58, '3. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(59, 'TF451', 'share4', 59, '4. ----------------------------------------------------------', '------------------------------------------------------------', '', '', '', ''),
(60, 'TF451', 'namedir', 60, 'Name:', '', '', '', '', ''),
(61, 'TF451', 'sigdir', 61, 'Signature of Director:', '', '', '', '', ''),
(62, 'TF452', '*Head', 1, '**Name of Company: ', '**Company No: ', '**I, the undermentioned person, hereby consent to act as a director of the abovenamed company with effect from ', '', '', '');
