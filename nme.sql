-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2021 at 01:48 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course_allocation`
--

CREATE TABLE IF NOT EXISTS `course_allocation` (
  `Department` varchar(20) NOT NULL,
  `Tamil` int(3) NOT NULL DEFAULT '0',
  `English` int(3) NOT NULL DEFAULT '0',
  `Maths` int(3) NOT NULL DEFAULT '0',
  `Bio_Tech` int(3) NOT NULL DEFAULT '0',
  `Botany` int(3) NOT NULL DEFAULT '0',
  `BCom_R` int(3) NOT NULL DEFAULT '0',
  `BCom_CA` int(3) NOT NULL DEFAULT '0',
  `BCA` int(3) NOT NULL DEFAULT '0',
  `IT` int(3) NOT NULL DEFAULT '0',
  `CS` int(3) NOT NULL DEFAULT '0',
  `BBA` int(3) NOT NULL DEFAULT '0',
  `Chemistry` int(3) NOT NULL DEFAULT '0',
  `Physics` int(3) NOT NULL DEFAULT '0',
  `HMCS` int(3) NOT NULL DEFAULT '0',
  `BBA_CA` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_allocation`
--

INSERT INTO `course_allocation` (`Department`, `Tamil`, `English`, `Maths`, `Bio_Tech`, `Botany`, `BCom_R`, `BCom_CA`, `BCA`, `IT`, `CS`, `BBA`, `Chemistry`, `Physics`, `HMCS`, `BBA_CA`) VALUES
('Tamil', 0, 8, 10, 5, 5, 20, 15, 10, 5, 10, 10, 7, 5, 0, 10),
('English', 1, 0, 2, 1, 1, 14, 9, 10, 1, 10, 5, 1, 1, 1, 3),
('Maths', 0, 10, 0, 8, 10, 13, 12, 11, 5, 12, 9, 10, 10, 2, 8),
('Bio_Tech', 3, 2, 3, 0, 0, 5, 4, 3, 3, 5, 4, 4, 2, 0, 2),
('Botany', 3, 3, 2, 0, 0, 5, 5, 3, 3, 5, 4, 3, 2, 0, 2),
('BCom_R', 15, 12, 12, 10, 12, 0, 0, 12, 10, 12, 0, 5, 0, 0, 0),
('CS', 10, 8, 9, 6, 6, 19, 6, 0, 0, 0, 5, 4, 6, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE IF NOT EXISTS `course_list` (
  `dept_id` varchar(10) NOT NULL,
  `Dept_Name` varchar(20) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Sub_code` varchar(10) NOT NULL,
  `Total_Seats` int(3) NOT NULL,
  `Filled_Seats` int(3) NOT NULL,
  `Remaining_Seats` int(3) NOT NULL,
  PRIMARY KEY (`dept_id`,`Dept_Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`dept_id`, `Dept_Name`, `Subject_Name`, `Sub_code`, `Total_Seats`, `Filled_Seats`, `Remaining_Seats`) VALUES
('SKC001', 'Tamil', 'Mempattu Tamil - I', '18UTAN11', 120, 0, 120),
('SKC002', 'English', 'Functional English', '18UENN11', 60, 2, 58),
('SKC003', 'Maths', 'Fundamentals of Mathematics', '18UMAN11', 100, 1, 99),
('SKC004', 'Bio_Tech', 'Human Diseases - Communicable Diseases', '18UBTN11', 44, 0, 44),
('SKC005', 'Botany', 'Fundamentals of Botany', '18UBYN11', 44, 0, 44),
('SKC006', 'BCom_R', 'Principles of Commerce', '18UCMN11', 100, 1, 99),
('SKC007', 'BCom_CA', 'Principles of Accounting', '18UCPN11', 80, 4, 76),
('SKC008', 'BCA', 'Basics of Computer', '18UCAN11', 100, 0, 100),
('SKC009', 'IT', 'Office Automation', '18UITN11', 50, 0, 50),
('SKC010', 'CS', 'Introduction to Computer Science', '18UCSN11', 100, 0, 100),
('SKC011', 'BBA', 'Fundamentals of Management', '18UBAN11', 60, 0, 60),
('SKC012', 'Physics', 'Physics in Everyday Life - I', '18UPHN11', 40, 0, 40),
('SKC013', 'Chemistry', 'Industrial Chemistry - I', '18UCHN11', 40, 2, 38),
('SKC014', 'HMCS', 'Fundamentals of Tourism and Administration', '18UHMN11', 25, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `course_select_department`
--

CREATE TABLE IF NOT EXISTS `course_select_department` (
  `Department` varchar(20) NOT NULL,
  `Tamil` varchar(10) NOT NULL,
  `English` varchar(10) NOT NULL,
  `Maths` varchar(10) NOT NULL,
  `Bio_Tech` varchar(10) NOT NULL,
  `Botany` varchar(10) NOT NULL,
  `BCom_R` varchar(10) NOT NULL,
  `BCom_CA` varchar(10) NOT NULL,
  `BCA` varchar(10) NOT NULL,
  `CS` varchar(10) NOT NULL,
  `IT` varchar(10) NOT NULL,
  `BBA` varchar(10) NOT NULL,
  `Chemistry` varchar(10) NOT NULL,
  `Physics` varchar(10) NOT NULL,
  `HMCS` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_select_department`
--

INSERT INTO `course_select_department` (`Department`, `Tamil`, `English`, `Maths`, `Bio_Tech`, `Botany`, `BCom_R`, `BCom_CA`, `BCA`, `CS`, `IT`, `BBA`, `Chemistry`, `Physics`, `HMCS`) VALUES
('Tamil', 'No', 'English', 'No', 'Bio_Tech', 'Botany', 'BCom_R', 'BCom_CA', 'BCA', 'CS', 'IT', 'BBA', 'No', 'Physics', 'HMCS'),
('English', 'Tamil', 'No', 'Maths', 'Bio_Tech', 'Botany', 'BCom_R', 'BCom_CA', 'BCA', 'CS', 'IT', 'BBA', 'Chemistry', 'Physics', 'No'),
('Maths', 'No', 'Maths', 'No', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'Maths', 'No'),
('BCom_R', 'BCom_R', 'BCom_R', 'BCom_R', 'BCom_R', 'BCom_R', 'No', 'No', 'BCom_R', 'BCom_R', 'BCom_R', 'No', 'No', 'BCom_R', 'No'),
('BCom_CA', 'BCom_CA', 'BCom_CA', 'BCom_CA', 'BCom_CA', 'BCom_CA', 'No', 'No', 'BCom_CA', 'BCom_CA', 'BCom_CA', 'No', 'No', 'BCom_CA', 'No'),
('Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'No', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech', 'Bio_Tech'),
('Botany', 'Botany', 'Botany', 'Botany', 'Botany', 'No', 'Botany', 'Botany', 'Botany', 'Botany', 'Botany', 'Botany', 'Botany', 'Botany', 'No'),
('BCA', 'BCA', 'BCA', 'BCA', 'BCA', 'BCA', 'BCA', 'BCA', 'No', 'No', 'No', 'BCA', 'BCA', 'BCA', 'BCA'),
('CS', 'Tamil', 'English', 'Maths', 'Bio_Tech', 'Botany', 'BCom_R', 'BCom_CA', 'BCA', 'CS', 'IT', 'BBA', 'Chemistry', 'Physics', 'No'),
('IT', 'IT', 'IT', 'IT', 'IT', 'IT', 'IT', 'IT', 'No', 'No', 'No', 'IT', 'IT', 'IT', 'IT'),
('BBA', 'BBA', 'BBA', 'BBA', 'BBA', 'BBA', 'No', 'No', 'BBA', 'BBA', 'BBA', 'No', 'No', 'BBA', 'BBA'),
('BBA_CA', 'BBA_CA', 'BBA_CA', 'BBA_CA', 'BBA_CA', 'BBA_CA', 'No', 'No', 'BBA_CA', 'BBA_CA', 'BBA_CA', 'No', 'BBA_CA', 'BBA_CA', 'BBA_CA'),
('Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'Chemistry', 'No', 'Chemistry', 'No'),
('Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'Physics', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `nme_choosing_list`
--

CREATE TABLE IF NOT EXISTS `nme_choosing_list` (
  `Roll_No` varchar(9) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Major` varchar(20) NOT NULL,
  `NME_Dept` varchar(20) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Sub_Code` varchar(10) NOT NULL,
  PRIMARY KEY (`Roll_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nme_choosing_list`
--

INSERT INTO `nme_choosing_list` (`Roll_No`, `Name`, `Major`, `NME_Dept`, `Subject_Name`, `Sub_Code`) VALUES
('17bcs087', 'VIJAY.V', 'CS', 'BCom_CA', 'Principles of Accounting', '18UCPN11'),
('17bcs072', 'SENTHILKUMAR.R', 'CS', 'BCom_CA', 'Principles of Accounting', '18UCPN11'),
('17bcs066', 'SABARISIVA.P', 'CS', 'English', 'Functional English', '18UENN11');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE IF NOT EXISTS `student_list` (
  `Name` varchar(30) NOT NULL,
  `Roll_No` varchar(8) NOT NULL,
  `DOB` date NOT NULL,
  `Major` varchar(20) NOT NULL,
  `Status` varchar(2) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`Roll_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`Name`, `Roll_No`, `DOB`, `Major`, `Status`) VALUES
('SENTHILKUMAR.R', '17bcs072', '1999-12-23', 'CS', 'Y'),
('VIJAY.V', '17bcs087', '1999-06-03', 'CS', 'Y'),
('SABARISIVA.P', '17bcs066', '2000-04-30', 'CS', 'Y'),
('SATHISKUMAR', '17bcs071', '0000-00-00', 'CS', 'N');
