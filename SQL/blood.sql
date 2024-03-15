-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 15, 2024 at 04:11 PM
-- Server version: 8.0.18
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
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `cId` int(10) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`cId`, `location`, `date`) VALUES
(1, 'Rathnapura', '2023-12-06'),
(2, 'Rathnapura', '2023-12-08'),
(3, 'Kurunegala', '2023-12-23'),
(4, 'Kurunegala', '2023-12-23'),
(5, 'Negambo', '2023-12-29'),
(6, 'Colombo', '2023-12-12'),
(7, 'Rathnapura', '2023-12-27'),
(8, 'Negambo', '2023-12-25'),
(9, 'Negambo', '2023-12-25'),
(10, 'Kurunegala', '2023-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cId` int(10) NOT NULL AUTO_INCREMENT,
  `message` varchar(1000) NOT NULL,
  `sMessage` varchar(1000) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cId`, `message`, `sMessage`) VALUES
(3, 'teuhj;', 'hhkkmkjkz');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `coId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`coId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`coId`, `name`, `email`, `message`) VALUES
(3, 'Achintha Heshan', 'achinthaheshan324@gmail.com', 'I want to contact a doctor'),
(6, 'Lasindu Semasingha', 'dileepalasindu2001@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `dId` int(10) NOT NULL AUTO_INCREMENT,
  `location` varchar(50) NOT NULL,
  `time` time(6) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`dId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`dId`, `location`, `time`, `date`) VALUES
(1, 'Rathnapura', '08:30:00.000000', '2023-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fId` int(10) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`fId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fId`, `level`, `name`, `comment`) VALUES
(3, 'Very Good', 'Achintha Heshan', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `hosId` int(10) NOT NULL AUTO_INCREMENT,
  `hosName` varchar(100) NOT NULL,
  `hosAddress` varchar(100) NOT NULL,
  PRIMARY KEY (`hosId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosId`, `hosName`, `hosAddress`) VALUES
(1, 'Arogya', 'Negambo'),
(2, 'Nawaloka', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `bId` int(10) NOT NULL AUTO_INCREMENT,
  `bType` varchar(5) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `branch` varchar(100) NOT NULL,
  PRIMARY KEY (`bId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`bId`, `bType`, `quantity`, `branch`) VALUES
(9, 'O+', '3200ml', 'Kurunegala');

-- --------------------------------------------------------

--
-- Table structure for table `newdonation`
--

DROP TABLE IF EXISTS `newdonation`;
CREATE TABLE IF NOT EXISTS `newdonation` (
  `newId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `bGroup` varchar(5) NOT NULL,
  PRIMARY KEY (`newId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newdonation`
--

INSERT INTO `newdonation` (`newId`, `name`, `amount`, `bGroup`) VALUES
(1, 'Achintha Heshan', '200ml', 'O+'),
(2, 'Achintha Heshan', '200ml', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `sNo` int(6) NOT NULL AUTO_INCREMENT,
  `sName` varchar(100) NOT NULL,
  `sType` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`sNo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sNo`, `sName`, `sType`, `location`) VALUES
(7, 'Plasma Donation', 'Donation Service', 'Negambo'),
(5, 'Blood Testing', 'Blood Related Service', 'Rathnapura'),
(6, 'Blood Testing', 'Blood Related Service', 'Kurunegala');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bGroup` varchar(5) NOT NULL,
  `age` int(4) NOT NULL,
  `bBank` varchar(50) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `fname`, `lname`, `address`, `bGroup`, `age`, `bBank`, `hospital`, `email`) VALUES
(1, 'lasdil2001', 'Hasine$1992', 'Lasindu', 'Semasingha', '315/1, Ambale, Monnekulama', 'O+', 23, 'Colombo', 'Colombo', 'dileepalasindu2001@gmail.com'),
(2, 'dileepa', 'Hasine$1992', 'Lasindu', 'Semasingha', '315/1, Ambale, Monnekulama', 'O+', 23, 'Colombo', 'Colombo', 'lasindu2001@gmail.com'),
(3, 'kavindu', 'Kavindu$2001', 'Ravin', 'Kanishka', '315/1, Ambale, Monnekulama', 'O+', 26, 'Nikaweratiya', 'Nugegoda', 'asd@gmail.com'),
(5, 'achintha', 'Achintha@2001', 'Achintha', 'Heshan', 'No 45, 5th cross street colombo', 'A-', 35, 'Nugegoda', 'Pettah', 'achinthaheshan324@gmail.com'),
(7, 'shanuk', 'Shanuka@2001', 'shanuk', 'Tresha', 'Thennakoonpura, Kotawehera, Nikaweratiya', 'A+', 22, 'Kurunegala', 'Nikaweratiya', 'shanukaheshan548@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
