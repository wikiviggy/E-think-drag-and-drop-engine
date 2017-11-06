-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 08:29 AM
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
-- Table structure for table `ordering`
--

CREATE TABLE IF NOT EXISTS `ordering` (
  `q_id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `options_number` int(2) NOT NULL,
  `order1` varchar(100) NOT NULL,
  `order2` varchar(100) NOT NULL,
  `order3` varchar(100) NOT NULL,
  `order4` varchar(100) NOT NULL,
  `order5` varchar(100) DEFAULT NULL,
  `order6` varchar(100) DEFAULT NULL,
  `order7` varchar(100) DEFAULT NULL,
  `order8` varchar(100) DEFAULT NULL,
  `order9` varchar(100) DEFAULT NULL,
  `order10` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordering`
--

INSERT INTO `ordering` (`q_id`, `question`, `options_number`, `order1`, `order2`, `order3`, `order4`, `order5`, `order6`, `order7`, `order8`, `order9`, `order10`) VALUES
(1, 'Order the different elements according to period table:', 5, 'He(helium)', 'Ne(Neon)', 'Mg(Magnesium)', 'Fr(Francium)', 'La(Lathonoid)', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
