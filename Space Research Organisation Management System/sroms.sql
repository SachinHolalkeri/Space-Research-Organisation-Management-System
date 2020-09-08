-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2019 at 08:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sroms`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `getfuel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getfuel` (IN `mid` INT(10))  SELECT l.fuel*m.Distance AS TOTAL_DIST FROM launchvehicle l,mission m WHERE m.M_Id=mid AND m.V_Id=l.V_Id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

DROP TABLE IF EXISTS `ad`;
CREATE TABLE IF NOT EXISTS `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$e.DtVfkr84ED6iKTXr22AeoHXjVOgAAZj8LGAdh0k5HX9jtRLRnQ6');

-- --------------------------------------------------------

--
-- Table structure for table `astronauts`
--

DROP TABLE IF EXISTS `astronauts`;
CREATE TABLE IF NOT EXISTS `astronauts` (
  `A_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Age` int(2) NOT NULL,
  `M_Id` int(5) DEFAULT NULL,
  PRIMARY KEY (`A_Id`),
  KEY `M_Id` (`M_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `astronauts`
--

INSERT INTO `astronauts` (`A_Id`, `Name`, `Age`, `M_Id`) VALUES
(1, 'Neil', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `launchvehicle`
--

DROP TABLE IF EXISTS `launchvehicle`;
CREATE TABLE IF NOT EXISTS `launchvehicle` (
  `V_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Fuel` int(20) NOT NULL,
  PRIMARY KEY (`V_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `launchvehicle`
--

INSERT INTO `launchvehicle` (`V_Id`, `Name`, `Fuel`) VALUES
(1, 'asd', 20),
(2, 'GSLV', 345),
(3, 'Pslv', 600),
(4, 'ASLV', 907);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `M_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Budget` int(20) NOT NULL,
  `Goal` varchar(100) NOT NULL,
  `C_Id` int(5) DEFAULT NULL,
  `No_years` int(4) DEFAULT NULL,
  `V_Id` int(5) DEFAULT NULL,
  `Distance` int(10) NOT NULL,
  PRIMARY KEY (`M_Id`),
  KEY `V_Id` (`V_Id`),
  KEY `C_Id` (`C_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`M_Id`, `Name`, `Budget`, `Goal`, `C_Id`, `No_years`, `V_Id`, `Distance`) VALUES
(1, 'adv', 300, 'donot crash', 1, 4, 1, 300),
(2, 'Chandrayaan 2', 400, 'Study of Moon', 1, 10, 3, 6000);

--
-- Triggers `mission`
--
DROP TRIGGER IF EXISTS `try`;
DELIMITER $$
CREATE TRIGGER `try` AFTER INSERT ON `mission` FOR EACH ROW INSERT into `trig` VALUES(null,new.M_Id,new.Name,NOW(),(SELECT l.fuel*m.Distance AS TOTAL_DIST FROM launchvehicle l,mission m WHERE m.M_Id=new.M_Id AND m.V_Id=l.V_Id))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `satellites`
--

DROP TABLE IF EXISTS `satellites`;
CREATE TABLE IF NOT EXISTS `satellites` (
  `Sat_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `Weight` int(20) NOT NULL,
  `Cost` int(10) NOT NULL,
  `Launch_date` datetime(6) NOT NULL,
  `C_Id` int(5) DEFAULT NULL,
  PRIMARY KEY (`Sat_Id`),
  KEY `C_Id` (`C_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `satellites`
--

INSERT INTO `satellites` (`Sat_Id`, `Name`, `Purpose`, `Weight`, `Cost`, `Launch_date`, `C_Id`) VALUES
(1, 'aryabhatta', 'first sat', 200, 200, '2019-11-03 00:00:00.000000', 1),
(2, 'Vyasa', 'Telecommunication', 200, 100, '2019-11-15 09:15:30.000000', 1),
(3, 'd', 'telecommunication', 10, 100, '2019-11-30 00:00:00.000000', 1),
(4, 'GOES-16', 'Space Weather', 5192, 100, '2016-11-19 00:00:00.000000', 3),
(5, 'Kalpana', 'Weather', 1060, 100, '2002-09-12 00:00:00.000000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `spacecraft`
--

DROP TABLE IF EXISTS `spacecraft`;
CREATE TABLE IF NOT EXISTS `spacecraft` (
  `C_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Ast_Capacity` int(20) NOT NULL,
  `Sat_capacity` int(20) NOT NULL,
  PRIMARY KEY (`C_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spacecraft`
--

INSERT INTO `spacecraft` (`C_Id`, `Name`, `Ast_Capacity`, `Sat_capacity`) VALUES
(1, '', 1, 1),
(2, 'SS', 4, 6),
(4, 'kuffh', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `trig`
--

DROP TABLE IF EXISTS `trig`;
CREATE TABLE IF NOT EXISTS `trig` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `M_Id` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total_distance` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `M_Id` (`M_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trig`
--

INSERT INTO `trig` (`id`, `M_Id`, `Name`, `Start`, `Total_distance`) VALUES
(6, 1, 'adv', '2019-11-18 15:49:08', 6000),
(7, 2, 'Chandrayaan 2', '2019-11-19 15:23:51', 3600000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('sachin', 'qwerty@1', 1),
('shashank', '$2y$10$Ki7fp89kP7if73D7IINAtODKOlX6wdUAzyk8O886lVqJHObosjT1K', 3),
('SGH', '$2y$10$koD60ZUaNBJJDdq9sLX9ZOlhGwLi40Z9YXB9E4PKyT7jCyp6MxzY6', 4),
('admin', '$2y$10$E8WhdT07zR.zR13JLhhIYenHCjtBhcmQJsdTvn.NwOrxVPOzr4OXG', 5),
('holal', '$2y$10$xC2T3En/XUzzd.KDgud.wuQC2bnb7OsNRP/2cZeMMnbQ1mbSzW8va', 6);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `astronauts`
--
ALTER TABLE `astronauts`
  ADD CONSTRAINT `astronauts_ibfk_1` FOREIGN KEY (`M_Id`) REFERENCES `mission` (`M_Id`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`V_Id`) REFERENCES `launchvehicle` (`V_Id`),
  ADD CONSTRAINT `mission_ibfk_2` FOREIGN KEY (`C_Id`) REFERENCES `spacecraft` (`C_Id`);

--
-- Constraints for table `trig`
--
ALTER TABLE `trig`
  ADD CONSTRAINT `trig_ibfk_1` FOREIGN KEY (`M_Id`) REFERENCES `mission` (`M_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
