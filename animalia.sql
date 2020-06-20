-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2020 at 11:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `animalia`
--

DROP TABLE IF EXISTS `animalia`;
CREATE TABLE IF NOT EXISTS `animalia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(45) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `POSTED` timestamp NOT NULL DEFAULT current_timestamp(),
  `GENDER` varchar(10) DEFAULT NULL,
  `FAV_ANIMAL` varchar(10) DEFAULT NULL,
  `SCREENSHOT` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animalia`
--

INSERT INTO `animalia` (`ID`, `FIRST_NAME`, `EMAIL`, `POSTED`, `GENDER`, `FAV_ANIMAL`, `SCREENSHOT`) VALUES
(6, 'lina', 'lina_01@yahoo.com', '2020-06-19 23:23:20', 'female', 'lion', 'lion.gif'),
(5, 'frank', 'frank100@gmail.com', '2020-06-19 23:22:26', 'male', 'cat', 'tenor.gif'),
(7, 'david', 'david@hotmail.com', '2020-06-19 23:37:16', 'male', 'dog', 'cute dog.gif'),
(8, 'love', 'lockdown@gmail.com', '2020-06-19 23:37:42', 'female', 'snake', 'snake.gif'),
(9, 'obynna', 'obi@gmail.com', '2020-06-19 23:39:04', 'male', 'horse', 'horse.gif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
