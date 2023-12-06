-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 03:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbstotomas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaboutus`
--

CREATE TABLE IF NOT EXISTS `tblaboutus` (
  `aboutID` int(11) DEFAULT NULL,
  `aboutus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutusDesc` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE IF NOT EXISTS `tblannouncement` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldannouncement` varbinary(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `announceDesc` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`fldindex`, `fldcode`, `fldannouncement`, `fldstatus`, `announceDesc`) VALUES
(1, 'ANNO1', 0x6d61696e6c6f676f2e6a7067, 'Published', 'mainlogo is '),
(2, 'ANNO2', 0x6b61646977612e6a7067, 'Published', NULL),
(3, 'ANNO3', 0x73746f666171342e6a7067, 'Not Published', NULL),
(4, 'ANNO4', 0x6d732d69636f6e2d313530783135302e706e67, 'Published', NULL),
(5, 'ANNO5', 0x62616e616e612d747265652e706e67, 'Published', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbarangay`
--

CREATE TABLE IF NOT EXISTS `tblbarangay` (
  `fldindex` bigint(20) NOT NULL,
  `fldbarangay` varchar(200) NOT NULL,
  `fldlong` double NOT NULL,
  `fldlat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbarangay`
--

INSERT INTO `tblbarangay` (`fldindex`, `fldbarangay`, `fldlong`, `fldlat`) VALUES
(1, 'San Agustin', 121.208259, 14.064385),
(2, 'San Antonio', 121.152426, 14.116221),
(3, 'San Rafael', 121.146696, 14.133653),
(4, 'Santiago', 121.155288, 14.127275),
(5, 'San Bartolome', 121.179629, 14.114784),
(6, 'San Miguel', 121.179629, 14.104491),
(7, 'San Felix', 121.198239, 14.082534),
(8, 'San Fernando', 121.213984, 14.027571),
(9, 'San Francisco', 121.178197, 14.041935),
(10, 'San Isidro Norte', 121.178197, 14.072534),
(11, 'San Isidro Sur', 121.185356, 14.057366),
(12, '	San Joaquin', 121.198601, 14.056397),
(13, 'San Jose', 121.203965, 14.076572),
(14, 'San Juan', 121.201102, 14.069265),
(15, 'San Luis', 121.198239, 14.018244),
(16, 'San Pablo', 121.183924, 14.079435),
(17, 'San Pedro', 121.178197, 14.085398),
(18, 'Santa Teresita', 121.192514, 14.019059),
(19, 'Santa Maria', 121.168175, 14.070106),
(20, 'Santa Elena', 121.202534, 14.096068),
(21, 'Santa Clara', 121.208259, 14.018103),
(22, 'Santa Anastacia', 121.139536, 14.141115),
(23, 'Santa Ana', 121.192514, 14.065347),
(24, 'Santa Cruz', 121.211122, 13.994563),
(25, 'San Vicente', 121.168175, 14.090689),
(26, 'San Roque', 121.150992, 14.098289);

-- --------------------------------------------------------

--
-- Table structure for table `tblchatbot`
--

CREATE TABLE IF NOT EXISTS `tblchatbot` (
  `fldindex` bigint(20) NOT NULL,
  `fldchat` varchar(1000) NOT NULL,
  `fldresponse` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchatbot`
--

INSERT INTO `tblchatbot` (`fldindex`, `fldchat`, `fldresponse`) VALUES
(1, 'Hello po.', '1'),
(2, 'Pwede pong magtanong?', '2'),
(3, 'Itatanong ko po sana kung pwede akong makahingi ng binhi ng ampalya.', '3'),
(4, 'Hindi pa po namin nakukuha ang aming binhi.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tblchatbotresponse`
--

CREATE TABLE IF NOT EXISTS `tblchatbotresponse` (
  `fldindex` bigint(20) NOT NULL,
  `fldresponse` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchatbotresponse`
--

INSERT INTO `tblchatbotresponse` (`fldindex`, `fldresponse`) VALUES
(1, 'Magandang araw. Ako po si Mang Tomas ang inyong lingkod. Ano po ang akin maitutulong?'),
(2, 'Magandang araw. Ako po si Mang Tomas ang inyong lingkod. Ano po ang inyong katanungan?'),
(3, 'Ang atin pong tangapan ay bukas ng Lunes hangang Byernes. Mula alas otso ng umaga hangang alas singko ng hapon. Maaari po kayong bumisita sa aming tangapan para matugunan ang inyong kailangan.'),
(4, 'Sa kasalukuyan ay ginagawa na ng ating mga kawani ang mga aksyon para matugunan ang inyong mga pangangailangan.');

-- --------------------------------------------------------

--
-- Table structure for table `tblchatfarmer`
--

CREATE TABLE IF NOT EXISTS `tblchatfarmer` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldfarmercode` varchar(200) NOT NULL,
  `fldchat` varchar(200) NOT NULL,
  `fldresponse` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblchatfarmer`
--

INSERT INTO `tblchatfarmer` (`fldindex`, `fldcode`, `fldfarmercode`, `fldchat`, `fldresponse`) VALUES
(1, 'CHAT1', 'USER4', 'hello po', 'Magandang araw. Ako po si Mang Tomas ang inyong lingkod. Ano po ang akin maitutulong?'),
(2, 'CHAT2', 'USER4', 'pwede pong makahingi ng binhi', 'Ipagpaumanhin nyo po. Baka po pwedeng maulit ang inyong katanungan. Salamat po.'),
(3, 'CHAT3', 'USER4', 'pwede pong tanong', 'Ipagpaumanhin nyo po. Baka po pwedeng maulit ang inyong katanungan. Salamat po.'),
(4, 'CHAT4', 'USER4', 'pwede pong magtanong', 'Magandang araw. Ako po si Mang Tomas ang inyong lingkod. Ano po ang inyong katanungan?'),
(5, 'CHAT5', 'USER3', 'hello po', 'Magandang araw. Ako po si Mang Tomas ang inyong lingkod. Ano po ang akin maitutulong?'),
(6, 'CHAT6', 'USER3', 'magandang umaga po', 'Ipagpaumanhin nyo po. Baka po pwedeng maulit ang inyong katanungan. Salamat po.'),
(7, 'CHAT7', 'USER3', 'hello', 'Magandang araw. Ako po si Mang Tomas ang inyong lingkod. Ano po ang akin maitutulong?');

-- --------------------------------------------------------

--
-- Table structure for table `tblcrops`
--

CREATE TABLE IF NOT EXISTS `tblcrops` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldcrops` varchar(200) NOT NULL,
  `fldscientificname` varchar(200) NOT NULL,
  `fldvariety` varchar(200) NOT NULL,
  `fldcropscategory` varchar(200) NOT NULL,
  `fldseedingratestart` float NOT NULL,
  `fldseedingrateend` float NOT NULL,
  `fldseedingrateunit` varchar(100) NOT NULL,
  `fldnoofseedstart` float NOT NULL,
  `fldnoofseedend` float NOT NULL,
  `fldyieldstart` float NOT NULL,
  `fldyieldend` float NOT NULL,
  `fldplantdistancestart` float NOT NULL,
  `fldplantdistanceend` float NOT NULL,
  `fldplantdistanceunit` varchar(100) NOT NULL,
  `fldnoofdaystart` float NOT NULL,
  `fldnoofdayend` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcrops`
--

INSERT INTO `tblcrops` (`fldindex`, `fldcode`, `fldcrops`, `fldscientificname`, `fldvariety`, `fldcropscategory`, `fldseedingratestart`, `fldseedingrateend`, `fldseedingrateunit`, `fldnoofseedstart`, `fldnoofseedend`, `fldyieldstart`, `fldyieldend`, `fldplantdistancestart`, `fldplantdistanceend`, `fldplantdistanceunit`, `fldnoofdaystart`, `fldnoofdayend`) VALUES
(1, 'CROP1', 'Ampalaya', 'Momordica Charantia', 'Open', 'Fruit Vegetables', 0.51, 1, 'kg', 45053, 0, 40, 0, 3, 0.35, 'cm', 45, 100),
(2, 'CROP2', 'Eggplant', 'Solanum Melongena', 'Open', 'Fruit Vegetables', 350, 0, 'kg', 200, 300, 27, 0, 1, 0.5, 'cm', 90, 180),
(4, 'CROP4', 'Cucumber', 'Cucumis Sativus', 'Hybrid', 'Fruit Vegetables', 1, 3, 'kg', 28, 50, 20, 0, 0.75, 0.3, 'cm', 45, 80),
(5, 'CROP5', 'Okra', 'Hibiscus Esculentus', 'Hybrid', 'Fruit Vegetables', 10, 15, 'kg', 45180, 0, 15, 0, 0.7, 0.5, 'cm', 90, 120),
(6, 'CROP6', 'Pole Sitao', 'Vigna sinensis var. Sesquipedalis', 'Hybrid', 'Fruit Vegetables', 10, 10, 'kg', 10, 0, 10, 0, 5, 0, 'cm', 5, 0),
(7, 'CROP7', 'Tomato', 'Lycopersicon Esculentum', 'Hybrid', 'Fruit Vegetables', 5, 5, 'kg', 5, 5, 5, 5, 5, 0, 'cm', 5, 0),
(8, 'CROP8', 'Patola', 'Raphanus Sativus', 'Open', 'Fruit Vegetables', 100, 200, 'kg', 350, 350, 40, 20, 100, 200, 'cm', 45, 100),
(9, 'CROP9', 'Squash', 'Vigna Unguicilita', 'Open', 'Fruit Vegetables', 200, 300, 'kg', 123, 145, 60, 70, 70, 100, 'cm', 80, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tblcropscategory`
--

CREATE TABLE IF NOT EXISTS `tblcropscategory` (
  `fldindex` int(11) NOT NULL,
  `fldcropscategory` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcropscategory`
--

INSERT INTO `tblcropscategory` (`fldindex`, `fldcropscategory`) VALUES
(1, 'Rice'),
(2, 'Corn'),
(3, 'Fruit Vegetables'),
(4, 'Leafy Vegetables'),
(5, 'Root Vegetables'),
(6, 'Fruit Trees'),
(7, 'Root Crops'),
(8, 'Spices'),
(9, 'Legumes'),
(10, 'Industrial Crops');

-- --------------------------------------------------------

--
-- Table structure for table `tblfarm`
--

CREATE TABLE IF NOT EXISTS `tblfarm` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldfarmercode` varchar(200) NOT NULL,
  `fldlocation` varchar(300) NOT NULL,
  `fldlotarea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfarm`
--

INSERT INTO `tblfarm` (`fldindex`, `fldcode`, `fldfarmercode`, `fldlocation`, `fldlotarea`) VALUES
(1, 'FFRM1', 'USER3', 'San Bartolome', '2.5'),
(2, 'FFRM2', 'USER3', 'San Fernando', '1.5'),
(3, 'FFRM3', 'USER4', 'San Fernando', '2.5'),
(4, 'FFRM4', 'USER17', 'San Agustin', '3.0'),
(5, 'FFRM5', 'USER6', 'San Rafael', '2'),
(6, 'FFRM6', 'USER18', 'San Francisco', '2.5'),
(7, 'FFRM7', 'USER19', 'San Vicente', '3.0'),
(8, 'FFRM8', 'USER20', 'San Joaquin', '4.0'),
(9, 'FFRM9', 'USER21', 'San Antonio', '3.0'),
(10, 'FFRM10', 'USER19', 'San Isidro Norte', '2.0');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE IF NOT EXISTS `tblfeedback` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldtitle` varchar(200) NOT NULL,
  `fldfeedback` varchar(1000) NOT NULL,
  `flddate` date NOT NULL,
  `fldfarmercode` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`fldindex`, `fldcode`, `fldtitle`, `fldfeedback`, `flddate`, `fldfarmercode`, `fldstatus`) VALUES
(1, 'FDBK1', 'SAMPLE TITLE', 'SAMPLE FEEDBACK NARRATIVE REPORT', '2023-11-25', 'USER3', 'Deleted'),
(2, 'FDBK2', 'aa', 'adasda', '2023-11-26', 'USER3', 'Deleted'),
(3, 'FDBK3', 'SAMPLE TITLE', 'aaaa', '2023-11-27', 'USER3', 'Deleted'),
(4, 'FDBK4', 'SAMPLE TITLE', 'yesyesyesys', '2023-11-27', 'USER3', 'Deleted'),
(5, 'FDBK5', 'assa', 'sasasasa', '2023-11-27', 'USER3', 'Deleted'),
(6, 'FDBK6', 'FYI', 'Sending', '2023-11-27', 'USER13', 'ADeleted'),
(7, 'FDBK7', ' feedback', 'sending....', '2023-11-27', 'USER13', 'ADeleted'),
(8, 'FDBK8', 'trying', 'one more', '2023-11-27', 'USER13', 'ADeleted'),
(9, 'FDBK9', 'try ulit', 'zxxcxcx', '2023-11-27', 'USER13', 'ADeleted'),
(10, 'FDBK10', 'SAMPLE TITLE', 'ssssssssss', '2023-11-27', 'USER3', 'Deleted'),
(11, 'FDBK11', 'ww', 'ee', '2023-11-28', 'USER3', 'ADeleted'),
(12, 'FDBK12', 'PINESTE BA NAMAN', 'GRABEE BAA ANG PINSALA', '2023-11-29', 'USER3', 'ADeleted'),
(13, 'FDBK13', 'Peste', 'Nagkaroon ng madaming peste sa aking inaanihan sakahan', '2023-11-29', 'USER21', 'Deleted'),
(14, 'FDBK14', 'SAMPLE TITLE', 'Sample Feedback', '2023-11-30', 'USER12', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedbackpic`
--

CREATE TABLE IF NOT EXISTS `tblfeedbackpic` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldfeedbackcode` varchar(200) NOT NULL,
  `fldpicture` varchar(200) NOT NULL,
  `flddescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedbackpic`
--

INSERT INTO `tblfeedbackpic` (`fldindex`, `fldcode`, `fldfeedbackcode`, `fldpicture`, `flddescription`) VALUES
(1, 'FPIC1', 'FDBK6', '2.png', 'Yields'),
(2, 'FPIC2', 'FDBK7', '2.png', 'Yield--part 1'),
(3, 'FPIC3', 'FDBK11', 'peste.jpg', 'PESTE');

-- --------------------------------------------------------

--
-- Table structure for table `tblhomapage`
--

CREATE TABLE IF NOT EXISTS `tblhomapage` (
  `homeID` int(11) DEFAULT NULL,
  `HomeName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HomePage` varbinary(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblinsurance`
--

CREATE TABLE IF NOT EXISTS `tblinsurance` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldinsurance` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinsurance`
--

INSERT INTO `tblinsurance` (`fldindex`, `fldcode`, `fldinsurance`, `fldstatus`) VALUES
(1, 'INSR1', 'Crop Insurance Form.docx', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tblinsuranceaccomplish`
--

CREATE TABLE IF NOT EXISTS `tblinsuranceaccomplish` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldinsurancecode` varchar(200) NOT NULL,
  `fldinsurance` varchar(200) NOT NULL,
  `fldfarmercode` varchar(200) NOT NULL,
  `flddate` date NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification`
--

CREATE TABLE IF NOT EXISTS `tblnotification` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldtitle` varchar(200) NOT NULL,
  `fldsubtitle` varchar(1000) NOT NULL,
  `fldnotification` varchar(10000) NOT NULL,
  `flddate` date NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `fldsource` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotification`
--

INSERT INTO `tblnotification` (`fldindex`, `fldcode`, `fldtitle`, `fldsubtitle`, `fldnotification`, `flddate`, `fldstatus`, `fldsource`) VALUES
(1, 'NOTF1', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-250(kg)', '2023-11-25', 'Viewed', 'Farmer'),
(2, 'NOTF2', 'Seed Planted', 'Peter Cullen has planted seeds.', 'The following are the seeds planted: Ampalaya-250(kg)', '2023-11-25', 'Viewed', 'Farmer'),
(3, '', 'Seed Planted', 'Peter Cullen edited the number of seeds planted.', 'The following are the new seeds planted: Ampalaya-250(kg)', '2023-11-25', 'Viewed', 'Farmer'),
(4, 'NOTF4', 'Crops Harvested', 'Peter Cullen has harvested crops.', 'Crops harvested from 2023-11-25 to 2023-11-25. Crop details: Crop - Ampalaya, Yield - 20', '2023-11-25', 'Viewed', 'Farmer'),
(5, 'NOTF5', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-25', '2023-11-25', 'Viewed', 'Farmer'),
(6, 'NOTF6', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Eggplant-200(Grams)', '2023-11-26', 'Viewed', 'Farmer'),
(7, 'NOTF7', 'Seed Planted', 'Peter Cullen has planted seeds.', 'The following are the seeds planted: Eggplant-200(kg)', '2023-11-26', 'Viewed', 'Farmer'),
(8, 'NOTF8', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Eggplant-200(Grams)', '2023-11-26', 'Viewed', 'Farmer'),
(9, '', 'Seed Planted', 'Peter Cullen edited the number of seeds planted.', 'The following are the new seeds planted: Eggplant-200(kg)', '2023-11-26', 'Viewed', 'Farmer'),
(10, 'NOTF10', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-26', 'Viewed', 'Farmer'),
(11, 'NOTF11', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-26', '2023-11-26', 'Viewed', 'Farmer'),
(12, 'NOTF12', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-26', 'Viewed', 'Farmer'),
(13, 'NOTF13', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-26', '2023-11-26', 'Viewed', 'Farmer'),
(14, 'NOTF14', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(15, 'NOTF15', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-150(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(16, 'NOTF16', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(17, 'NOTF17', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(18, 'NOTF18', 'Seed Request', 'elmo santi submitted a seed request.', 'The following are the seed requests: Eggplant-250(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(19, 'NOTF19', 'Seed Planted', 'elmo santi has planted seeds.', 'The following are the seeds planted: Eggplant-250(kg)', '2023-11-27', 'Viewed', 'Farmer'),
(20, 'NOTF20', 'Crops Harvested', 'elmo santi has harvested crops.', 'Crops harvested from 2023-11-27 to 2023-11-27. Crop details: Crop - Eggplant, Yield - 30', '2023-11-27', 'Viewed', 'Farmer'),
(21, 'NOTF21', 'Crops Harvested', 'elmo santi has harvested crops.', 'Crops harvested from 2023-11-27 to 2023-11-27. Crop details: Crop - Eggplant, Yield - 30', '2023-11-27', 'Viewed', 'Farmer'),
(22, 'NOTF22', 'Seed Request', 'elmo santi submitted a seed request.', 'The following are the seed requests: Ampalaya-250(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(23, '', 'Seed Planted', 'elmo santi edited the number of seeds planted.', 'The following are the new seeds planted: Eggplant-250(kg)', '2023-11-27', 'Viewed', 'Farmer'),
(24, 'NOTF24', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(25, 'NOTF25', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(26, 'NOTF26', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(27, 'NOTF27', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(28, 'NOTF28', 'Crops Harvested', 'Peter Cullen has harvested crops.', 'Crops harvested from 2023-11-27 to 2023-11-27. Crop details: Crop - Eggplant, Yield - 20', '2023-11-27', 'Viewed', 'Farmer'),
(29, 'NOTF29', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(30, 'NOTF30', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(31, 'NOTF31', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(32, 'NOTF32', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-150(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(33, 'NOTF33', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-150(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(34, 'NOTF34', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(35, 'NOTF35', 'Accomplished Insurance Form Submitted', 'elmo santi has submitted .', 'Mr. elmo santi has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(36, 'NOTF36', 'Accomplished Insurance Form Submitted', 'elmo santi has submitted .', 'Mr. elmo santi has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(37, 'NOTF37', 'Seed Request', 'elmo santi submitted a seed request.', 'The following are the seed requests: Squash-1(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(38, 'NOTF38', 'Crops Harvested', 'Peter Cullen has harvested crops.', 'Crops harvested from 2023-11-25 to 2023-11-25. Crop details: Crop - Ampalaya, Yield - 20.12', '2023-11-27', 'Viewed', 'Farmer'),
(39, 'NOTF39', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(40, 'NOTF40', 'Seed Request', 'peter hernandez submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(41, 'NOTF41', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-27', '2023-11-27', 'Viewed', 'Farmer'),
(42, 'NOTF42', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(43, 'NOTF43', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(44, 'NOTF44', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Eggplant-200(Grams)', '2023-11-27', 'Viewed', 'Farmer'),
(45, 'NOTF45', 'Seed Request', 'peter hernandez submitted a seed request.', 'The following are the seed requests: Eggplant-200(Grams)', '2023-11-28', 'Viewed', 'Farmer'),
(46, 'NOTF46', 'Seed Planted', 'Peter Cullen has planted seeds.', 'The following are the seeds planted: Ampalaya-150(kg)', '2023-11-28', 'Viewed', 'Farmer'),
(47, 'NOTF47', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: -()', '2023-11-28', 'Viewed', 'Farmer'),
(48, 'NOTF48', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-29', 'Viewed', 'Farmer'),
(49, 'NOTF49', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-29', '2023-11-29', 'Viewed', 'Farmer'),
(50, 'NOTF50', 'Seed Planted', 'Peter Cullen has planted seeds.', 'The following are the seeds planted: Ampalaya-200(kg)', '2023-11-29', 'Viewed', 'Farmer'),
(51, 'NOTF51', 'Crops Harvested', 'Peter Cullen has harvested crops.', 'Crops harvested from 2023-11-29 to 2023-11-29. Crop details: Crop - Ampalaya, Yield - 20', '2023-11-29', 'Viewed', 'Farmer'),
(52, 'NOTF52', 'Crops Harvested', 'Peter Cullen has harvested crops.', 'Crops harvested from 2023-11-29 to 2023-11-29. Crop details: Crop - Ampalaya, Yield - 20', '2023-11-29', 'Viewed', 'Farmer'),
(53, 'NOTF53', 'Accomplished Insurance Form Submitted', 'Peter Cullen has submitted .', 'Mr. Peter Cullen has submitted an accomplished insurance form last 2023-11-29', '2023-11-29', 'Viewed', 'Farmer'),
(54, 'NOTF54', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-20000(Grams)', '2023-11-29', 'Viewed', 'Farmer'),
(55, 'NOTF55', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-300(Grams)', '2023-11-29', 'Viewed', 'Farmer'),
(56, 'NOTF56', 'Seed Planted', 'Peter Cullen has planted seeds.', 'The following are the seeds planted: Ampalaya-10500(kg)', '2023-11-29', 'Viewed', 'Farmer'),
(57, 'NOTF57', 'Crops Harvested', 'Peter Cullen has harvested crops.', 'Crops harvested from 2023-11-29 to 2023-11-29. Crop details: Crop - Ampalaya, Yield - 10', '2023-11-29', 'Viewed', 'Farmer'),
(58, 'NOTF58', 'Accomplished Insurance Form Submitted', 'Lanz  Almojela has submitted .', 'Mr. Lanz  Almojela has submitted an accomplished insurance form last 2023-11-29', '2023-11-29', 'Viewed', 'Farmer'),
(59, 'NOTF59', 'Seed Request', 'Paquito Diaz submitted a seed request.', 'The following are the seed requests: Eggplant-1(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(60, 'NOTF60', 'Seed Request', 'Janzen  Cenadero submitted a seed request.', 'The following are the seed requests: Ampalaya-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(61, 'NOTF61', 'Seed Request', 'Lanz  Almojela submitted a seed request.', 'The following are the seed requests: Ampalaya-250(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(62, 'NOTF62', 'Seed Request', 'Lanz  Almojela submitted a seed request.', 'The following are the seed requests: Eggplant-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(63, 'NOTF63', 'Seed Request', 'Lanz  Almojela submitted a seed request.', 'The following are the seed requests: Cucumber-100(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(64, 'NOTF64', 'Seed Planted', 'Lanz  Almojela has planted seeds.', 'The following are the seeds planted: Eggplant-200(kg)', '2023-11-30', 'Viewed', 'Farmer'),
(65, 'NOTF65', 'Crops Harvested', 'Lanz  Almojela has harvested crops.', 'Crops harvested from 2023-11-30 to 2023-11-30. Crop details: Crop - Eggplant, Yield - 20', '2023-11-30', 'Viewed', 'Farmer'),
(66, 'NOTF66', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Ampalaya-10500(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(67, 'NOTF67', 'Accomplished Insurance Form Submitted', 'Lanz  Almojela has submitted .', 'Mr. Lanz  Almojela has submitted an accomplished insurance form last 2023-11-30', '2023-11-30', 'Viewed', 'Farmer'),
(68, 'NOTF68', 'Accomplished Insurance Form Submitted', 'Lanz  Almojela has submitted .', 'Mr. Lanz  Almojela has submitted an accomplished insurance form last 2023-11-30', '2023-11-30', 'Viewed', 'Farmer'),
(69, 'NOTF69', 'Seed Request', 'glhen briones submitted a seed request.', 'The following are the seed requests: Okra-3.0(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(70, 'NOTF70', 'Seed Request', 'glhen briones submitted a seed request.', 'The following are the seed requests: Pole Sitao-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(71, 'NOTF71', 'Seed Request', 'Lanz  Almojela submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(72, 'NOTF72', 'Seed Request', 'Janzen  Cenadero submitted a seed request.', 'The following are the seed requests: Eggplant-250(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(73, 'NOTF73', 'Seed Request', 'Janzen  Cenadero submitted a seed request.', 'The following are the seed requests: Okra-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(74, 'NOTF74', 'Seed Request', 'glhen briones submitted a seed request.', 'The following are the seed requests: Cucumber-400(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(75, 'NOTF75', 'Seed Request', 'glhen briones submitted a seed request.', 'The following are the seed requests: Ampalaya-40000(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(76, 'NOTF76', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Cucumber-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(77, 'NOTF77', 'Seed Request', 'Lanz  Almojela submitted a seed request.', 'The following are the seed requests: Cucumber-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(78, 'NOTF78', 'Seed Request', 'Lanz  Almojela submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(79, 'NOTF79', 'Seed Planted', 'Lanz  Almojela has planted seeds.', 'The following are the seeds planted: Cucumber-300(kg)', '2023-11-30', 'Viewed', 'Farmer'),
(80, 'NOTF80', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Eggplant-150(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(81, 'NOTF81', 'Seed Request', 'glhen briones submitted a seed request.', 'The following are the seed requests: Pole Sitao-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(82, 'NOTF82', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(83, 'NOTF83', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Eggplant-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(84, 'NOTF84', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Tomato-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(85, 'NOTF85', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Tomato-400(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(86, 'NOTF86', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(87, 'NOTF87', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Eggplant-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(88, 'NOTF88', 'Seed Request', 'Adrian Tuiza submitted a seed request.', 'The following are the seed requests: Pole Sitao-400(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(89, 'NOTF89', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(90, 'NOTF90', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(91, 'NOTF91', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Cucumber-200(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(92, 'NOTF92', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Ampalaya-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(93, 'NOTF93', 'Seed Request', 'Lanz Almojela submitted a seed request.', 'The following are the seed requests: Tomato-10(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(94, 'NOTF94', 'Seed Request', 'Lanz Almojela submitted a seed request.', 'The following are the seed requests: Okra-100(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(95, 'NOTF95', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Okra-400(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(96, 'NOTF96', 'Seed Request', 'Teodoro Rico submitted a seed request.', 'The following are the seed requests: Ampalaya-300(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(97, 'NOTF97', 'Seed Request', 'Teodoro Rico submitted a seed request.', 'The following are the seed requests: Tomato-800(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(98, 'NOTF98', 'Seed Request', 'Lanz Almojela submitted a seed request.', 'The following are the seed requests: Eggplant-400(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(99, 'NOTF99', 'Seed Request', 'Peter Cullen submitted a seed request.', 'The following are the seed requests: Pole Sitao-900(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(100, 'NOTF100', 'Seed Request', 'Res Cortez submitted a seed request.', 'The following are the seed requests: Squash-700(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(101, 'NOTF101', 'Seed Planted', 'Lanz Almojela has planted seeds.', 'The following are the seeds planted: Okra-100(kg)', '2023-11-30', 'Viewed', 'Farmer'),
(102, 'NOTF102', 'Seed Planted', 'Lanz Almojela has planted seeds.', 'The following are the seeds planted: Eggplant-400(kg)', '2023-11-30', 'Viewed', 'Farmer'),
(103, 'NOTF103', 'Crops Harvested', 'Lanz Almojela has harvested crops.', 'Crops harvested from 2023-11-30 to 2023-11-30. Crop details: Crop - Okra, Yield - 10', '2023-11-30', 'Viewed', 'Farmer'),
(104, 'NOTF104', 'Seed Request', 'Lanz Almojela submitted a seed request.', 'The following are the seed requests: Cucumber-1000(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(105, 'NOTF105', 'Seed Request', 'Lanz Almojela submitted a seed request.', 'The following are the seed requests: Okra-1001(Grams)', '2023-11-30', 'Viewed', 'Farmer'),
(106, 'NOTF106', 'Seed Planted', 'Lanz Almojela has planted seeds.', 'The following are the seeds planted: Cucumber-1000(kg)', '2023-11-30', 'Viewed', 'Farmer'),
(107, 'NOTF107', 'Seed Planted', 'Lanz Almojela has planted seeds.', 'The following are the seeds planted: Okra-1001(kg)', '2023-11-30', 'Viewed', 'Farmer'),
(108, 'NOTF108', 'Crops Harvested', 'Lanz Almojela has harvested crops.', 'Crops harvested from 2023-11-30 to 2023-11-30. Crop details: Crop - Cucumber, Yield - 1000', '2023-11-30', 'Viewed', 'Farmer'),
(109, 'NOTF109', 'Crops Harvested', 'Lanz Almojela has harvested crops.', 'Crops harvested from 2023-11-30 to 2023-11-30. Crop details: Crop - Okra, Yield - 1001', '2023-11-30', 'Viewed', 'Farmer'),
(110, 'NOTF110', 'Seed Request', 'Lanz Almojela submitted a seed request.', 'The following are the seed requests: Okra-400(Grams)', '2023-12-04', 'Not Yet Viewed', 'Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotificationf`
--

CREATE TABLE IF NOT EXISTS `tblnotificationf` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldtitle` varchar(200) NOT NULL,
  `fldsubtitle` varchar(1000) NOT NULL,
  `fldnotification` varchar(10000) NOT NULL,
  `flddate` date NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `fldsource` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotificationf`
--

INSERT INTO `tblnotificationf` (`fldindex`, `fldcode`, `fldtitle`, `fldsubtitle`, `fldnotification`, `flddate`, `fldstatus`, `fldsource`) VALUES
(1, 'NOFF1', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(2, 'NOFF2', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(3, 'NOFF3', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(4, 'NOFF4', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(5, 'NOFF5', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(6, 'NOFF6', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(7, 'NOFF7', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(8, 'NOFF8', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(9, 'NOFF9', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(10, 'NOFF10', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(11, 'NOFF11', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-27', 'Viewed', 'Administrator'),
(12, 'NOFF12', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-28', 'Viewed', 'Administrator'),
(13, 'NOFF13', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-28', 'Viewed', 'Administrator'),
(14, 'NOFF14', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-29', 'Viewed', 'Administrator'),
(15, 'NOFF15', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-29', 'Viewed', 'Administrator'),
(16, 'NOFF16', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-29', 'Viewed', 'Administrator'),
(17, 'NOFF17', 'Insurance Form Verificed', 'The submitted insurance form has been verified', 'Your submitted insurance form last  has been verified', '2023-11-30', 'Viewed', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tblpagecarousell`
--

CREATE TABLE IF NOT EXISTS `tblpagecarousell` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldimage` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpagecarousell`
--

INSERT INTO `tblpagecarousell` (`fldindex`, `fldcode`, `fldimage`, `fldstatus`) VALUES
(2, 'COUR2', 'harvest2.jpg', 'Published'),
(3, 'COUR3', 'harvest8.jpg', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `tblpagefarminputs`
--

CREATE TABLE IF NOT EXISTS `tblpagefarminputs` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldimage` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpagefarminputs`
--

INSERT INTO `tblpagefarminputs` (`fldindex`, `fldcode`, `fldimage`, `fldstatus`) VALUES
(1, 'FRMI1', 'bee.jpg', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `tblpicharvest`
--

CREATE TABLE IF NOT EXISTS `tblpicharvest` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldseedplantedcode` varchar(200) NOT NULL,
  `fldpicture` varchar(200) NOT NULL,
  `flddescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpicharvest`
--

INSERT INTO `tblpicharvest` (`fldindex`, `fldcode`, `fldseedplantedcode`, `fldpicture`, `flddescription`) VALUES
(1, 'HPIC1', 'SPL1', 'harvested.jfif', 'harvested ba');

-- --------------------------------------------------------

--
-- Table structure for table `tblplantcalendar`
--

CREATE TABLE IF NOT EXISTS `tblplantcalendar` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldcropcode` varchar(200) NOT NULL,
  `fldtimeplantingall` varchar(200) NOT NULL,
  `fldtimeplantingstart` varchar(200) NOT NULL,
  `fldtimeplantingend` varchar(200) NOT NULL,
  `fldplantpopulation` float NOT NULL,
  `fldmaturitystart` float NOT NULL,
  `fldmaturityend` float NOT NULL,
  `fldmaturityunit` varchar(200) NOT NULL,
  `fldvolumestart` float NOT NULL,
  `fldvolumeend` float NOT NULL,
  `fldvolumeunit` varchar(200) NOT NULL,
  `flddistancestart` float NOT NULL,
  `flddistanceend` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplantcalendar`
--

INSERT INTO `tblplantcalendar` (`fldindex`, `fldcode`, `fldcropcode`, `fldtimeplantingall`, `fldtimeplantingstart`, `fldtimeplantingend`, `fldplantpopulation`, `fldmaturitystart`, `fldmaturityend`, `fldmaturityunit`, `fldvolumestart`, `fldvolumeend`, `fldvolumeunit`, `flddistancestart`, `flddistanceend`) VALUES
(1, 'PLCA1', 'CROP1', 'ALL SEASON', '', '', 20000, 50, 75, 'DAYS OF PLANTING', 8, 15, '', 100, 150),
(2, 'PLCA2', 'CROP2', 'ALL SEASON', '', '', 33333, 90, 120, 'DAYS OF PLANTING', 9, 11, '', 75, 100),
(3, 'PLCA3', 'CROP3', '', 'November', 'January', 5000, 3, 5, 'MONTHS', 10, 12, '', 100, 200),
(4, 'PLCA4', 'CROP4', '', 'May', 'July', 44444, 50, 65, 'DAYS AFTER PLANTING', 10, 15, 'Heads', 50, 100),
(5, 'PLCA5', 'CROP5', 'All Seasons', '', '', 200000, 60, 75, 'DAYS AFTER PLANTING', 8, 10, 'Tons', 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tblplantfert`
--

CREATE TABLE IF NOT EXISTS `tblplantfert` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldplantedcode` varchar(200) NOT NULL,
  `fldremarks` varchar(300) NOT NULL,
  `flddateapplied` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblseeddistribution`
--

CREATE TABLE IF NOT EXISTS `tblseeddistribution` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldrequestcode` varchar(200) NOT NULL,
  `flddate` date NOT NULL,
  `fldseeddistributed` float NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblseeddistribution`
--

INSERT INTO `tblseeddistribution` (`fldindex`, `fldcode`, `fldrequestcode`, `flddate`, `fldseeddistributed`, `fldstatus`) VALUES
(1, 'DIS1', 'REQ5', '2023-11-30', 400, ''),
(2, 'DIS2', 'REQ3', '2023-11-30', 10, ''),
(3, 'DIS3', 'REQ1', '2023-11-30', 200, ''),
(4, 'DIS4', 'REQ2', '2023-11-30', 300, ''),
(5, 'DIS5', 'REQ4', '2023-11-30', 100, 'Seed Planted'),
(6, 'DIS6', 'REQ6', '2023-11-30', 300, ''),
(7, 'DIS7', 'REQ7', '2023-11-30', 800, ''),
(8, 'DIS8', 'REQ8', '2023-11-30', 400, 'Seed Planted'),
(9, 'DIS9', 'REQ9', '2023-11-30', 400, ''),
(10, 'DIS10', 'REQ10', '2023-11-30', 700, ''),
(11, 'DIS11', 'REQ11', '2023-12-01', 1000, 'Seed Planted'),
(12, 'DIS12', 'REQ12', '2023-12-01', 1001, 'Seed Planted');

-- --------------------------------------------------------

--
-- Table structure for table `tblseedplanted`
--

CREATE TABLE IF NOT EXISTS `tblseedplanted` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `flddistributioncode` varchar(200) NOT NULL,
  `fldseedplantedqty` float NOT NULL,
  `flddateplanted` date NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `fldmaturitydate` date NOT NULL,
  `fldharvestdatestart` date NOT NULL,
  `fldharvestdateend` date NOT NULL,
  `fldyield` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblseedplanted`
--

INSERT INTO `tblseedplanted` (`fldindex`, `fldcode`, `flddistributioncode`, `fldseedplantedqty`, `flddateplanted`, `fldstatus`, `fldmaturitydate`, `fldharvestdatestart`, `fldharvestdateend`, `fldyield`) VALUES
(1, 'SPL1', 'DIS5', 100, '2023-11-30', 'Seed Planted', '2023-11-23', '2023-11-30', '2023-11-30', 10),
(2, 'SPL2', 'DIS8', 400, '2023-11-30', 'Seed Planted', '0000-00-00', '0000-00-00', '0000-00-00', 0),
(3, 'SPL3', 'DIS11', 1000, '2023-11-30', 'Seed Planted', '2023-12-01', '2023-11-30', '2023-11-30', 1000),
(4, 'SPL4', 'DIS12', 1001, '2023-11-30', 'Seed Planted', '2023-12-01', '2023-11-30', '2023-11-30', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `tblseedrequested`
--

CREATE TABLE IF NOT EXISTS `tblseedrequested` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldrequestedby` varchar(200) NOT NULL,
  `fldlocation` varchar(200) NOT NULL,
  `fldrequestedseed` varchar(200) NOT NULL,
  `fldrequestedqty` float NOT NULL,
  `flddaterequested` date NOT NULL,
  `fldstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblseedrequested`
--

INSERT INTO `tblseedrequested` (`fldindex`, `fldcode`, `fldrequestedby`, `fldlocation`, `fldrequestedseed`, `fldrequestedqty`, `flddaterequested`, `fldstatus`) VALUES
(1, 'REQ1', 'USER3', 'San Fernando', 'CROP4', 200, '2023-11-30', 'Distributed'),
(2, 'REQ2', 'USER3', 'San Agustin', 'CROP1', 300, '2023-11-30', 'Distributed'),
(3, 'REQ3', 'USER12', 'San Agustin', 'CROP7', 10, '2023-11-30', 'Distributed'),
(4, 'REQ4', 'USER12', 'San Agustin', 'CROP5', 100, '2023-11-30', 'Distributed'),
(5, 'REQ5', 'USER3', 'San Fernando', 'CROP5', 400, '2023-11-30', 'Distributed'),
(6, 'REQ6', 'USER11', 'San Antonio', 'CROP1', 300, '2023-11-30', 'Distributed'),
(7, 'REQ7', 'USER11', 'San Antonio', 'CROP7', 800, '2023-11-30', 'Distributed'),
(8, 'REQ8', 'USER12', 'San Agustin', 'CROP2', 400, '2023-11-30', 'Distributed'),
(9, 'REQ9', 'USER3', 'San Agustin', 'CROP6', 900, '2023-11-30', 'Distributed'),
(10, 'REQ10', 'USER7', 'San Agustin', 'CROP9', 700, '2023-11-30', 'Distributed'),
(11, 'REQ11', 'USER12', 'San Agustin', 'CROP4', 1000, '2023-11-30', 'Distributed'),
(12, 'REQ12', 'USER12', 'San Agustin', 'CROP5', 1001, '2023-11-30', 'Distributed'),
(13, 'REQ13', 'USER12', 'San Agustin', 'CROP5', 400, '2023-12-04', 'Seed Requested');

-- --------------------------------------------------------

--
-- Table structure for table `tbltop5`
--

CREATE TABLE IF NOT EXISTS `tbltop5` (
  `fldindex` int(11) NOT NULL,
  `fldusercode` varchar(200) NOT NULL,
  `fldcropcode` varchar(200) NOT NULL,
  `fldcrops` varchar(200) NOT NULL,
  `fldtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltop5`
--

INSERT INTO `tbltop5` (`fldindex`, `fldusercode`, `fldcropcode`, `fldcrops`, `fldtotal`) VALUES
(17, '', 'CROP1', 'Ampalaya', 600),
(18, '', 'CROP2', 'Eggplant', 400),
(19, '', 'CROP4', 'Cucumber', 1200),
(20, '', 'CROP5', 'Okra', 1501),
(21, '', 'CROP6', 'Pole Sitao', 900),
(22, '', 'CROP7', 'Tomato', 810),
(23, '', 'CROP8', 'Patola', 0),
(24, '', 'CROP9', 'Squash', 700),
(25, 'USER1', 'CROP1', 'Ampalaya', 600),
(26, 'USER1', 'CROP2', 'Eggplant', 400),
(27, 'USER1', 'CROP4', 'Cucumber', 1200),
(28, 'USER1', 'CROP5', 'Okra', 1501),
(29, 'USER1', 'CROP6', 'Pole Sitao', 900),
(30, 'USER1', 'CROP7', 'Tomato', 810),
(31, 'USER1', 'CROP8', 'Patola', 0),
(32, 'USER1', 'CROP9', 'Squash', 700),
(33, 'USER2', 'CROP1', 'Ampalaya', 600),
(34, 'USER2', 'CROP2', 'Eggplant', 400),
(35, 'USER2', 'CROP4', 'Cucumber', 1200),
(36, 'USER2', 'CROP5', 'Okra', 1501),
(37, 'USER2', 'CROP6', 'Pole Sitao', 900),
(38, 'USER2', 'CROP7', 'Tomato', 810),
(39, 'USER2', 'CROP8', 'Patola', 0),
(40, 'USER2', 'CROP9', 'Squash', 700),
(41, 'USER14', 'CROP1', 'Ampalaya', 600),
(42, 'USER14', 'CROP2', 'Eggplant', 400),
(43, 'USER14', 'CROP4', 'Cucumber', 1200),
(44, 'USER14', 'CROP5', 'Okra', 1901),
(45, 'USER14', 'CROP6', 'Pole Sitao', 900),
(46, 'USER14', 'CROP7', 'Tomato', 810),
(47, 'USER14', 'CROP8', 'Patola', 0),
(48, 'USER14', 'CROP9', 'Squash', 700);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldemail` varchar(200) NOT NULL,
  `fldlastname` varchar(200) NOT NULL,
  `fldfirstname` varchar(200) NOT NULL,
  `fldmiddlename` varchar(200) NOT NULL,
  `fldlocation` varchar(100) NOT NULL,
  `fldlotarea` float NOT NULL,
  `fldgender` varchar(100) NOT NULL,
  `fldusertype` varchar(200) NOT NULL,
  `fldimage` varchar(100) NOT NULL,
  `fldpassword` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `fldusername` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`fldindex`, `fldcode`, `fldemail`, `fldlastname`, `fldfirstname`, `fldmiddlename`, `fldlocation`, `fldlotarea`, `fldgender`, `fldusertype`, `fldimage`, `fldpassword`, `fldstatus`, `fldusername`) VALUES
(2, 'USER2', 'lolit.mendoza@sto-tomas.gov.ph', 'Mendoza', 'Lolit', 'Sales', '', 0, '', 'City Agriculture Personnel', 'user.png', '12345', 'Active', 'lolit.mendoza'),
(3, 'USER3', 'peter.cullen@gmail.com', 'Cullen', 'Peter', 'Pan', 'San Agustin', 0.1, 'Male', 'Farmer', 'moreNoti.jpg', '12345', 'Active', 'peter.cullen'),
(4, 'USER4', 'max@gmail.com', 'Alvarado', 'Max', 'Celestino', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'max.alvarado'),
(5, 'USER5', 'moran@gmail.com', 'Moran', 'Bomber', 'Reyes', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'bomber.moran'),
(6, 'USER6', 'paguito@gmail.com', 'Diaz', 'Paquito', 'Mendoza', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'paquito.diaz'),
(7, 'USER7', 'cortez@gmail.com', 'Cortez', 'Res', 'Aguinaldo', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'res.cortez'),
(8, 'USER8', 'gacia@gmail.com', 'Garia', 'Eddie', 'Peregrina', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'eddie.garcia'),
(9, 'USER9', 'diaz@gmail.com', 'Diaz', 'Romy', 'Reyes', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'romy.diaz'),
(10, 'USER10', 'laurel@gmail.com', 'Laurel', 'Max', 'Macasaet', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'max.laurel'),
(11, 'USER11', 'ricoted@gmail.com', 'Rico', 'Teodoro', 'Reyes', 'San Antonio', 2, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'rico.teodoro'),
(12, 'USER12', 'lanzibae@gmail.com', 'Almojela', 'Lanz', 'Guevarra', 'San Agustin', 10, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'lanz.almojela'),
(13, 'USER13', 'malvedacenaderojanzen@gmail.com', 'Cenadero', 'Janzen', 'Jeth', 'San Agustin', 10, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'janzen. cenadero'),
(14, 'USER14', 'contactus@stotomaswebsite.online', 'Richards', 'Alden', 'Pecayo', '', 0, '', 'System Administrator', 'user.png', '12345', '', 'alden.richards');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser1`
--

CREATE TABLE IF NOT EXISTS `tbluser1` (
  `fldindex` bigint(20) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldemail` varchar(200) NOT NULL,
  `fldlastname` varchar(200) NOT NULL,
  `fldfirstname` varchar(200) NOT NULL,
  `fldmiddlename` varchar(200) NOT NULL,
  `fldlocation` varchar(100) NOT NULL,
  `fldlotarea` float NOT NULL,
  `fldgender` varchar(100) NOT NULL,
  `fldusertype` varchar(200) NOT NULL,
  `fldimage` varchar(100) NOT NULL,
  `fldpassword` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `fldusername` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser1`
--

INSERT INTO `tbluser1` (`fldindex`, `fldcode`, `fldemail`, `fldlastname`, `fldfirstname`, `fldmiddlename`, `fldlocation`, `fldlotarea`, `fldgender`, `fldusertype`, `fldimage`, `fldpassword`, `fldstatus`, `fldusername`) VALUES
(1, 'USER1', 'alden.richards@sto-tomas.gov.ph', 'Richards', 'Alden', 'Pelayo', '', 0, '', 'System Administrator', 'profile-img.JPG', '12345', 'Active', 'alden.richards'),
(2, 'USER2', 'lolit.mendoza@sto-tomas.gov.ph', 'Mendoza', 'Lolit', 'Sales', '', 0, '', 'City Agriculture Personnel', 'user.png', '12345', 'Active', 'lolit.mendoza'),
(3, 'USER3', '', 'Cullen', 'Peter', 'Pan', 'San Agustin', 0.1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'peter.cullen'),
(4, 'USER4', '', 'Alvarado', 'Max', 'Celestino', 'San Agustin', 1, 'Male', 'Farmer', 'user.png', '12345', 'Active', 'max.alvarado');

-- --------------------------------------------------------

--
-- Table structure for table `tblusercategory`
--

CREATE TABLE IF NOT EXISTS `tblusercategory` (
  `userID` int(11) DEFAULT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPosition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblusercategory`
--

INSERT INTO `tblusercategory` (`userID`, `userType`, `userPosition`) VALUES
(NULL, 'Admin', 'System Administrator'),
(NULL, 'Admin', 'City Agriculture Personnel');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertemp`
--

CREATE TABLE IF NOT EXISTS `tblusertemp` (
  `fldemail` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusertemp`
--

INSERT INTO `tblusertemp` (`fldemail`) VALUES
('clark@gmail.com'),
('1abunda.boy@abs-cbn.com'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('max.alvarado'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('rico.teodoro'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('max.alvarado'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('lolit.mendoza'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('elmo.santi'),
('alden.richards'),
('elmo.santi'),
('elmo.santi'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('peter.hernandez'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('peter.hernandez'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('paquito.diaz'),
('alden.richards'),
('paquito.diaz'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('paquito.diaz'),
('alden.richards'),
('paquito.diaz'),
('paquito.diaz'),
('peter.cullen1'),
('alden.richards'),
('paquito.diaz'),
('paquito.diaz'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('peter.cullen1'),
('peter.cullen1'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('peter.cullen1'),
('paquito.diaz'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('peter.cullen1'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('paquito.diaz'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('paquito.diaz'),
('paquito.diaz'),
('alden.richards'),
('paquito.diaz'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('janzen.cenadero'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('janzen.cenadero'),
('lanz.almojela'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('adrian.tuiza'),
('jesusa.ashman'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('adrian.tuiza'),
('adrian.tuiza'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('adrian.tuiza'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('glhen.briones'),
('alden.richards'),
('lanz.almojela'),
('janzen.cenadero'),
('alden.richards'),
('glhen.briones'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('adrian.tuiza'),
('lanz.almojela'),
('adrian.tuiza'),
('glhen.briones'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('adrian.tuiza'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('peter.cullen'),
('alden.richards'),
('lanz.almojela'),
('lanz.almojela'),
('peter.cullen'),
('alden.richards'),
('rico.teodoro'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('res.cortez'),
('alden.richards'),
('res.cortez'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('peter.cullen'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('janzen. cenadero'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('alden.richards'),
('lolit.mendoza'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('alden.richards'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('alden.richards'),
('alden.richards'),
('lanz.almojela'),
('lanz.almojela'),
('lanz.almojela'),
('lolit.mendoza'),
('lolit.mendoza'),
('lolit.mendoza'),
('alden.richards'),
('alden.richards'),
('lanz.almojela');

-- --------------------------------------------------------

--
-- Table structure for table `tblvariety`
--

CREATE TABLE IF NOT EXISTS `tblvariety` (
  `fldindex` int(11) NOT NULL,
  `fldvariety` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvariety`
--

INSERT INTO `tblvariety` (`fldindex`, `fldvariety`) VALUES
(1, 'Open'),
(2, 'Hybrid');

-- --------------------------------------------------------

--
-- Table structure for table `tblvideo`
--

CREATE TABLE IF NOT EXISTS `tblvideo` (
  `fldindex` int(11) NOT NULL,
  `fldcode` varchar(200) NOT NULL,
  `fldcrops` varchar(200) NOT NULL,
  `fldvideo` varchar(200) NOT NULL,
  `fldimage` varchar(200) NOT NULL,
  `fldstatus` varchar(200) NOT NULL,
  `videoTitle` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvideo`
--

INSERT INTO `tblvideo` (`fldindex`, `fldcode`, `fldcrops`, `fldvideo`, `fldimage`, `fldstatus`, `videoTitle`) VALUES
(1, 'VID1', 'Banana', 'https://www.youtube.com/embed/b0c1Huoty_Y', 'banana-tree.png', 'Published', 'PAANO MAGTANIM NG SAGING | HOW TO PLANT BANANA | D&#39; Green Thumb'),
(3, 'VID3', 'Talong', 'https://www.youtube.com/embed/zvHnlG43jkU', 'mainlogo.jpg', 'Published', 'Paano magtanim ng TALONG PART Paano magtanim ng TALONG PART 1'),
(4, 'VID4', 'Cabbage', 'https://www.youtube.com/embed/n8UrVGOLZLk', 'mainlogo.jpg', 'Published', 'MGA DAPAT TANDAAN SA PAGTATANIM NG REPOLYO (Gardening Tutorial)'),
(5, 'VID5', 'Carrot', 'https://www.youtube.com/embed/V5He0pgnZng', 'mainlogo.jpg', 'Published', 'Paano magtanim at Mapalaki ng Mabilis ang Laman ng Carrots'),
(6, 'VID6', 'Cauliflower', 'https://www.youtube.com/watch?v=zwlZglSINLA', 'cauli.jfif', 'Published', NULL),
(7, 'VID7', 'Celery', 'https://youtu.be/Pb2DZ6hde7E?si=7ZdmgR5sNM1XifXD', 'mainlogo.jpg', 'Published', NULL),
(8, 'VID8', 'Chayote', 'https://youtu.be/tpUU87TAS2c?si=cVv5eGZXyEi-ggQl', 'mainlogo.jpg', 'Published', NULL),
(9, 'VID9', 'Melon', 'https://youtu.be/nTgcp22Id4g?si=N4hzfthLvgoviKO5', 'mainlogo.jpg', 'Published', NULL),
(10, 'VID10', 'Cucumber', 'https://www.youtube.com/wa-tch?v=DlT9Lqtjwcg', 'mainlogo.jpg', 'Published', NULL),
(11, 'VID11', 'Bataw', 'https://www.youtube.com/watch?v=u8EUCMNYa5A', 'mainlogo.jpg', 'Published', NULL),
(12, 'VID12', 'Kangkong', 'https://www.youtube.com/watch?v=p45LpPKa8Uw', 'mainlogo.jpg', 'Published', NULL),
(13, 'VID13', 'Lettuce', 'https://www.youtube.com/watch?v=DtWBlKf02To', 'mainlogo.jpg', 'Published', NULL),
(14, 'VID14', 'Cowpea', 'https://www.youtube.com/watch?v=FCC24xnetEE', 'mainlogo.jpg', 'Published', NULL),
(15, 'VID15', 'Bush snap beans', 'https://youtu.be/-zFmewYJDac?si=NIfr16_WSAiUUkd_', 'mainlogo.jpg', 'Published', NULL),
(16, 'VID16', 'Bush sitao', 'https://youtu.be/NPTeX3XNyuY?si=olWvG6x5UgaYxtay', 'mainlogo.jpg', 'Published', NULL),
(17, 'VID17', 'Amplaya', 'https://youtu.be/QUH1_myP3ck?si=xwdYp_R6cwyIgSvO', 'mainlogo.jpg', 'Published', NULL),
(18, 'VID18', 'Onion bulb', 'https://youtu.be/ZYkG2ta3Ctc?si=MQi71UarU1QvfxkY', 'mainlogo.jpg', 'Published', NULL),
(19, 'VID19', 'Brocolli', 'https://youtu.be/j49S6dwurrk?si=juN9f0RQk7IPDp6w', 'mainlogo.jpg', 'Published', NULL),
(20, 'VID20', 'Upo', 'https://youtu.be/HfHnH1nbzqo?si=pw5HLLn-cAJQRJx1', 'mainlogo.jpg', 'Published', NULL),
(21, 'VID21', 'Potato', 'https://youtu.be/NPTeX3XNyuY?si=olWvG6x5UgaYxtay', 'potato.jpg', 'Published', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblbarangay`
--
ALTER TABLE `tblbarangay`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblchatbot`
--
ALTER TABLE `tblchatbot`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblchatbotresponse`
--
ALTER TABLE `tblchatbotresponse`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblchatfarmer`
--
ALTER TABLE `tblchatfarmer`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblcrops`
--
ALTER TABLE `tblcrops`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblcropscategory`
--
ALTER TABLE `tblcropscategory`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblfarm`
--
ALTER TABLE `tblfarm`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblfeedbackpic`
--
ALTER TABLE `tblfeedbackpic`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblinsurance`
--
ALTER TABLE `tblinsurance`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblinsuranceaccomplish`
--
ALTER TABLE `tblinsuranceaccomplish`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblnotification`
--
ALTER TABLE `tblnotification`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblnotificationf`
--
ALTER TABLE `tblnotificationf`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblpagecarousell`
--
ALTER TABLE `tblpagecarousell`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblpagefarminputs`
--
ALTER TABLE `tblpagefarminputs`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblpicharvest`
--
ALTER TABLE `tblpicharvest`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblplantcalendar`
--
ALTER TABLE `tblplantcalendar`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblplantfert`
--
ALTER TABLE `tblplantfert`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblseeddistribution`
--
ALTER TABLE `tblseeddistribution`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblseedplanted`
--
ALTER TABLE `tblseedplanted`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblseedrequested`
--
ALTER TABLE `tblseedrequested`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tbltop5`
--
ALTER TABLE `tbltop5`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tbluser1`
--
ALTER TABLE `tbluser1`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblvariety`
--
ALTER TABLE `tblvariety`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tblvideo`
--
ALTER TABLE `tblvideo`
  ADD PRIMARY KEY (`fldindex`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
