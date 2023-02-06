-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2023 at 12:43 PM
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
-- Database: `sale`
--
CREATE DATABASE IF NOT EXISTS `sale` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `sale`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `salesman_id` int NOT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `salesman_id_fk` (`salesman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cust_name`, `city`, `grade`, `salesman_id`) VALUES
(10, 'Ramesh', 'Surat', 'A', 9),
(11, 'Mahesh', 'Valsad', 'A', 19),
(12, 'Mahesh', 'Bardoli', 'B', 12),
(13, 'Nand', 'Rajkot', 'D', 15),
(14, 'Vibhav', 'Bhavnagar', 'B', 3),
(15, 'Virah', 'Gandhinagar', 'B', 4),
(16, 'Hamid', 'Valsad', 'C', 20),
(17, 'Amrut', 'Mehsana', 'D', 5),
(18, 'Manav', 'Junagadh', 'C', 10),
(19, 'Krish', 'Palanpur', 'D', 13),
(20, 'Rahul', 'Ahmedabad', 'A', 7),
(21, 'Neel', 'Surat', 'D', 2),
(22, 'Jayesh', 'Gandhinagar', 'B', 18),
(23, 'Heet', 'Anand', 'D', 14),
(24, 'Kishor', 'Junagadh', 'B', 16),
(25, 'Raj', 'Sachin', 'C', 6),
(26, 'Vibhav', 'Bhavnagar', 'C', 11),
(27, 'Jatin', 'Bhuj', 'D', 10),
(28, 'Bipin', 'Palitana', 'B', 1),
(29, 'Mitesh', 'Bhavnagar', 'B', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ord_no` int NOT NULL AUTO_INCREMENT,
  `purch_amt` int NOT NULL,
  `ord_date` date NOT NULL,
  `customer_id` int NOT NULL,
  `salesman_id` int NOT NULL,
  PRIMARY KEY (`ord_no`),
  KEY `customer_id_fk` (`customer_id`),
  KEY `salesman_id_fk` (`salesman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_no`, `purch_amt`, `ord_date`, `customer_id`, `salesman_id`) VALUES
(51, 2000, '2023-01-01', 22, 8),
(52, 1300, '2023-01-06', 12, 18),
(53, 1000, '2022-12-29', 16, 3),
(54, 3000, '2022-11-09', 23, 15),
(55, 4000, '2022-12-08', 27, 17),
(56, 1200, '2023-01-18', 19, 12),
(57, 2300, '2023-01-24', 17, 1),
(58, 3200, '2023-01-08', 14, 9),
(59, 4500, '2023-01-10', 21, 16),
(60, 1800, '2023-02-02', 13, 2),
(61, 2100, '2023-01-19', 26, 14),
(62, 3300, '2022-10-12', 10, 20),
(63, 6500, '2022-11-26', 25, 6),
(64, 900, '2022-11-30', 20, 13),
(65, 2400, '2022-09-14', 28, 7),
(66, 4500, '2023-02-09', 15, 4),
(67, 2400, '2023-01-10', 18, 11),
(68, 2800, '2023-01-17', 24, 5),
(69, 2300, '2022-09-21', 11, 19),
(70, 500, '2023-01-25', 29, 10);

-- --------------------------------------------------------

--
-- Table structure for table `saleman`
--

DROP TABLE IF EXISTS `saleman`;
CREATE TABLE IF NOT EXISTS `saleman` (
  `salesman_id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `commission` int NOT NULL,
  PRIMARY KEY (`salesman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `saleman`
--

INSERT INTO `saleman` (`salesman_id`, `name`, `city`, `commission`) VALUES
(1, 'Raj', 'Surat', 12),
(2, 'Meet', 'Vadodara', 14),
(3, 'Dhruv', 'Bardoli', 7),
(4, 'Sahil', 'Valsad', 18),
(5, 'Mahesh', 'Rajkot', 14),
(6, 'Ram', 'Anand', 9),
(7, 'Sagar', 'Kutch', 24),
(8, 'Bhavesh', 'Ahmedabad', 34),
(9, 'Mayur', 'Surat', 13),
(10, 'Heet', 'Ankleshwar', 27),
(11, 'Naman', 'Mehsana', 32),
(12, 'Sohil', 'Bhavnagar', 3),
(13, 'Jenil', 'Palanpur', 45),
(14, 'Virag', 'Jamnagar', 19),
(15, 'Jeel', 'Amreli', 11),
(16, 'Mukesh', 'Surat', 21),
(17, 'Kishor', 'Vadodara', 8),
(18, 'Dharmesh', 'Surendranagar', 16),
(19, 'Ramesh', 'Bhavnagar', 26),
(20, 'Mansukh', 'Gandhinagar', 25);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`salesman_id`) REFERENCES `saleman` (`salesman_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
