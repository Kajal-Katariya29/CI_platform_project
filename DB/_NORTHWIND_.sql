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
-- Database: `northwind`
--
CREATE DATABASE IF NOT EXISTS `northwind` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `northwind`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) NOT NULL,
  `SupplierID` int NOT NULL,
  `CatogoryID` int NOT NULL,
  `QuantityPerUnit` int NOT NULL,
  `UnitPrice` int NOT NULL,
  `UnitsInStock` int NOT NULL,
  `UnitsOnOrder` int NOT NULL,
  `ReorderLevel` int NOT NULL,
  `Discontinued` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `SupplierID`, `CatogoryID`, `QuantityPerUnit`, `UnitPrice`, `UnitsInStock`, `UnitsOnOrder`, `ReorderLevel`, `Discontinued`) VALUES
(1, 'Vegatable', 59, 11, 70, 11, 29, 70, 10, 1),
(2, 'Milk', 60, 11, 85, 16, 30, 51, 34, 0),
(3, 'Butter', 58, 22, 75, 13, 39, 18, 60, 0),
(4, 'Oil', 61, 11, 66, 66, 40, 54, 15, 1),
(5, 'Bag', 60, 11, 85, 16, 30, 51, 34, 0),
(6, 'Fan', 59, 11, 70, 11, 29, 70, 10, 1),
(7, 'AC', 58, 22, 75, 13, 39, 18, 60, 0),
(8, 'Tv', 57, 45, 55, 15, 30, 23, 24, 0),
(9, 'Nivea', 56, 44, 33, 66, 47, 89, 50, 0),
(10, 'Lux', 55, 13, 40, 61, 72, 25, 30, 0),
(11, 'Vivel', 54, 34, 50, 43, 44, 20, 10, 1),
(12, 'Cinthol', 53, 31, 222, 15, 74, 52, 40, 0),
(13, 'Santoor', 52, 23, 12, 46, 24, 12, 30, 0),
(14, 'Pears', 51, 20, 512, 16, 34, 22, 20, 0),
(15, 'skybags', 784, 55, 935, 126, 34, 232, 1580, 1),
(16, 'clinic plus shampoo', 57, 68, 156, 76, 34, 12, 2110, 0),
(17, 'oxy 12', 143, 50, 986, 156, 34, 223, 130, 1),
(18, 'glory', 560, 42, 42, 216, 34, 282, 109, 0),
(19, 'fridge', 110, 89, 2, 176, 34, 122, 1220, 0),
(20, 'Artii shoap', 76, 12, 85, 156, 34, 252, 210, 1),
(21, 'Priyaa shampoo', 45, 78, 23, 86, 34, 422, 130, 0),
(22, 'Dove', 40, 78, 5, 54, 34, 272, 120, 0),
(23, 'Loyera', 35, 56, 98, 4, 34, 25, 12, 0),
(24, 'hair & shoulder', 34, 54, 8, 985, 52, 22, 11, 1),
(25, 'clinic + shampoo', 32, 11, 2, 16, 34, 22, 10, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
