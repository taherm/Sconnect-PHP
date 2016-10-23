-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 06:03 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(21) NOT NULL,
  `pass` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sem` int(21) NOT NULL,
  `info` varchar(21) NOT NULL,
  `uploader` varchar(21) NOT NULL,
  `date` varchar(21) NOT NULL,
  `file` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sem`, `info`, `uploader`, `date`, `file`) VALUES
(4, '', '', '', 'sw'),
(4, '', '', '', 'kl'),
(0, '', '', '', 'DSC00683.jpg'),
(2, '', '', '', 'ANS01.pdf'),
(0, '', '', '', '1MS14MCA50.docx'),
(4, 'sss', 'ss', 'sss', '5_server.pkt'),
(4, '', '', '', '2.txt'),
(4, 'qqq', 'qqq', 'qqq', '1.docx'),
(1, 'ddddddd', 'dd', '1992', 'DM Abstract 49,50,51.'),
(1, '', '', '', 'bill.txt'),
(2, 'sample', 'fac', '889', 'Php.docx');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(21) NOT NULL,
  `name` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `dob` varchar(21) NOT NULL,
  `semester` int(21) NOT NULL,
  `sub1` varchar(21) NOT NULL,
  `sub2` varchar(21) NOT NULL,
  `sub3` varchar(21) NOT NULL,
  `sub4` varchar(21) NOT NULL,
  `sub5` varchar(21) NOT NULL,
  `sub6` varchar(21) NOT NULL,
  `simg` varchar(53) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `email`, `dob`, `semester`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `simg`) VALUES
('', 'IMG_1905.JPG', '', '', 0, '', '', '', '', '', '', NULL),
('1', '', '', '', 0, '', '', '', '', '', '', 'IMG_1892.JPG'),
('', 'IMG_1905.JPG', '', '', 0, '', '', '', '', '', '', NULL),
('', '', '', '', 0, '', '', '', '', '', '', 'IMG_1892.JPG'),
('1s', '', '', '123', 0, '', '', '', '', '', '', NULL),
('tm', '', '', '5253', 0, '', '', '', '', '', '', NULL),
('53', '', '', '', 0, '', '', '', '', '', '', 'ANS01.PDF'),
('52', '', '', '', 0, '', '', '', '', '', '', 'A4-10MM-GRID.pdf'),
('', '', '', '', 0, '', '', '', '', '', '', 'DSC00675.jpg'),
('', '', '', '', 0, '', '', '', '', '', '', 'DSC00684.jpg'),
('50', '', '', '1994', 4, '', '', '', '', '', '', NULL),
('49', '', '', '1993', 2, '', '', '', '', '', '', NULL),
('32', '', '', '1990', 1, '', '', '', '', '', '', NULL),
('40', '', '', '1992', 5, '', '', '', '', '', '', NULL),
('18', '', '', '1994', 2, '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `uname` varchar(21) NOT NULL,
  `name` varchar(21) NOT NULL,
  `pass` varchar(21) NOT NULL,
  `timg` varchar(53) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`uname`, `name`, `pass`, `timg`) VALUES
('sample', '', '123', NULL),
('sample2', '', '123', NULL),
('sample', '', '123', NULL),
('shaggy2016', '', '123', NULL),
('shaggy2016', '', '123', NULL),
('shaggy2016', '', '123', NULL),
('shaggy2016', '', '123', NULL),
('shaggy2016', '', '123', NULL),
('shaggy2016', '', '123', NULL),
('shaggy2016', '', '456', NULL),
('tm', '', 'tm', NULL),
('tfm', '', '5253', NULL),
('sm', '', 'sm', NULL),
('demo', '', '123', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
