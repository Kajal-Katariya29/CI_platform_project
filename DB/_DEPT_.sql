-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2023 at 12:41 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dept`
--
CREATE DATABASE IF NOT EXISTS `dept` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `dept`;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(10) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'Sale'),
(2, 'Market'),
(3, 'Bank'),
(4, 'HR'),
(5, 'Developer'),
(6, 'Management'),
(7, 'Business'),
(8, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
  `dept_id` int NOT NULL,
  `mngr_id` int NOT NULL,
  `emp_name` varchar(10) NOT NULL,
  `salary` int NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `FOREIGN` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `dept_id`, `mngr_id`, `emp_name`, `salary`) VALUES
(51, 1, 21, 'Mahesh', 31000),
(52, 1, 22, 'Ramesh', 34000),
(53, 1, 23, 'Paresh', 38000),
(54, 1, 24, 'Jayesh', 39000),
(55, 1, 25, 'Vihesh', 37000),
(56, 1, 26, 'Karan', 30000),
(57, 2, 27, 'Raj', 33000),
(58, 2, 28, 'Rajan', 39000),
(59, 2, 29, 'viren', 44000),
(60, 2, 30, 'yash', 47000),
(61, 2, 31, 'harsh', 49000),
(62, 3, 32, 'Bhavan', 20000),
(63, 3, 33, 'Bhavan', 27000),
(64, 3, 34, 'Rimesh', 29000),
(65, 3, 35, 'Kalpeesh', 28000),
(66, 7, 36, 'Sahil', 50000),
(67, 7, 37, 'Sohel', 52000),
(68, 7, 38, 'Vansh', 54000),
(69, 5, 39, 'Dhruv', 65000),
(70, 5, 40, 'Dhruv', 65000),
(71, 5, 41, 'Smith', 68000),
(72, 5, 42, 'Chirag', 60000),
(73, 5, 43, 'Parthiv', 61000),
(74, 5, 44, 'Parth', 67000),
(75, 4, 45, 'Haresh', 44000),
(76, 4, 46, 'Harsh', 49000),
(77, 6, 47, 'kirth', 31000),
(78, 6, 48, 'kipt', 38000),
(79, 6, 49, 'kir', 35000),
(80, 6, 50, 'kinit', 36000),
(81, 8, 51, 'vraj', 33000),
(82, 8, 52, 'vnay', 39000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
