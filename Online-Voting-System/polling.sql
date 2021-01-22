-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2018 at 03:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polling`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `cnf_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `cnf_password`) VALUES
(1, 'Nitesh', 'Prasad', 'nitesh32@gmail.com', 'nitesh1234', 'nitesh1234'),
(5, 'souvik', 'basu', '', '', ''),
(26, 'sou', 'B', 'sss@ww', '123', '123'),
(27, 'aaa', 'a', 'anusuha74@gmail.com', 'a', 'a'),
(28, 'ghgh', 'kjkj', 'jhgjhg@bhkjh', '1234', '1234'),
(29, 'souvik', 'basu', 'soubasu8@gmail.com', '1234', '1234'),
(39, 'Niladri', 'Narua', 'niladri3294@gmail.com', 'niladri1994', 'qqqq');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(225) NOT NULL,
  `l_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cnf_password` varchar(225) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `f_name`, `l_name`, `email`, `password`, `cnf_password`) VALUES
(1, 'Niladri', 'Goswami', 'niladrig007@gmail.com', 'niladri1994', 'niladri1994'),
(4, 'Souvik', 'Basu', 'soubasu8@gmail.com', '12345', '12345'),
(6, 'Sunil', 'Sonar', 'sunil64@gmail.com', 'sunil1234', 'sunil1234'),
(7, 'ramen', 'das', 'das@mkk', '222', '222'),
(8, 'anusuha ', 'maji', 'anusuha74@gmail.com', '123456', '123456'),
(9, '', '', '', '', ''),
(10, 'Nitin', 'Ambani', 'nitu42@gmail.com', 'nitu1234', 'nitu1234'),
(11, 'Sayandeep', 'Baidya', 'sayandeeprhr1@gmail.com', 'xperiaion', 'xperiaion'),
(12, 'fuck', 'fuck', 'fuck@fuck.fuck', 'fuck', 'fuck'),
(13, 'Arjun', 'Shrivastav', 'arjun52@gmail.com', 'arjun1234', 'arjun1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbs_candidate`
--

DROP TABLE IF EXISTS `tbs_candidate`;
CREATE TABLE IF NOT EXISTS `tbs_candidate` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(255) NOT NULL,
  `candidate_position` varchar(255) NOT NULL,
  `candidate_votes` int(11) DEFAULT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbs_candidate`
--

INSERT INTO `tbs_candidate` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_votes`) VALUES
(1, 'Niladri', 'HOD', 10),
(11, 'Souvik', 'CR', 4),
(12, 'Souvik', 'HOD', 3),
(13, 'Niladri', 'CR', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

DROP TABLE IF EXISTS `tb_position`;
CREATE TABLE IF NOT EXISTS `tb_position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`position_id`, `position_name`) VALUES
(10, 'CR'),
(3, 'HOD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
