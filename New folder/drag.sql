-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 08:27 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `drag`
--

CREATE TABLE IF NOT EXISTS `drag` (
  `q_id` varchar(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `options_number` int(10) unsigned NOT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `option5` varchar(100) DEFAULT NULL,
  `option6` varchar(100) DEFAULT NULL,
  `option7` varchar(100) DEFAULT NULL,
  `option8` varchar(100) DEFAULT NULL,
  `option9` varchar(100) DEFAULT NULL,
  `option10` varchar(100) DEFAULT NULL,
  `bin1` varchar(10) NOT NULL,
  `bin2` varchar(10) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drag`
--

INSERT INTO `drag` (`q_id`, `question`, `options_number`, `option1`, `option2`, `option3`, `option4`, `option5`, `option6`, `option7`, `option8`, `option9`, `option10`, `bin1`, `bin2`) VALUES
('25', 'Drag the answers into the bin', 4, 'He is a test.', 'This is a test.', 'It is a test.', 'She is a test.', '', '', '', '', '', '', '0110000000', '1001000000'),
('31', 'Drag the answers into the bin', 5, 'Give it to me', 'Give me to it', 'It is given by me', 'It was given by me', 'Gave it to I', '', '', '', '', '', '1001000000', '0110100000'),
('396', 'Drag the answers into the bin', 7, 'Ubuntu is an open source operating system for computers. It is a Linux distribution based on the Deb', ' Electrons are larger than molecules.', 'Spiders have six legs.', 'The human skeleton is made up of less than 100 bones.', 'Atoms are most stable when their outer shells are full.', 'Conductors have low resistance.', 'The study of plants is known as botany.', '', '', '', '1000111000', '0111000000'),
('423', 'Drag the answers into the bin', 5, 'Hey', 'hello', 'vola', 'namaste', 'vanakam', '', '', '', '', '', '1100000000', '0011100000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
