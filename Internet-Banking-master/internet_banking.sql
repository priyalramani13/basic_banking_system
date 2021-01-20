-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2020 at 04:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `Customer_ID` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Acc_no` int(10) NOT NULL,
  `Balance` decimal(6,3) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `Name`, `Email`, `Acc_no`, `Balance`) VALUES
('CUS_000001', 'Kanika Tyagi', 'kanika@gmail.com', 1234567889, '300.000'),
('CUS_000002', 'Ronak Tyagi', 'ronak@gmail.com', 2045166723, '500.000'),
('CUS_000003', 'Jainit Tyagi', 'jainit@gmail.com', 1436732189, '650.000'),
('CUS_000004', 'Ria Tyagi', 'ria@gmail.com', 1045166723, '750.000'),
('CUS_000005', 'Srishti Dabral', 'srishti@gmail.com', 1486732189, '450.000'),
('CUS_000006', 'Nikita Shokeen', 'nikita@gmail.com', 1674839324, '300.000'),
('CUS_000007', 'Nitya Saini', 'nitya@gmail.com', 1946352634, '500.000'),
('CUS_000008', 'Riya Khushwha', 'riya@gmail.com', 1234839324, '200.000'),
('CUS_000009', 'Kamya', 'kamya@gmail.com', 1944552634, '650.000'),
('CUS_000010', 'Chirag Tyagi', 'chirag@gmail.com', 1543777245, '350.000');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `Sender` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `Amount` decimal(6,3) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`, `Date`, `Time`) VALUES
('Ronak Tyagi', 'Kanika Tyagi', '50.000', '2020-12-11', '21:53:54'),
('Kamya', 'Riya Khushwha', '100.000', '2020-12-11', '22:46:46'),
('Srishti Dabral', 'Ria Tyagi', '150.000', '2020-12-11', '22:47:51'),
('Nikita Shokeen', 'Nitya Saini', '200.000', '2020-12-11', '22:49:34'),
('Chirag Tyagi', 'Kanika Tyagi', '250.000', '2020-12-11', '22:50:23'),
('Ronak Tyagi', 'Srishti Dabral', '50.000', '2020-12-11', '23:23:54'),
('Ronak Tyagi', 'Srishti Dabral', '50.000', '2020-12-11', '23:24:23'),
('Ronak Tyagi', 'Srishti Dabral', '50.000', '2020-12-11', '23:26:42'),
('Ronak Tyagi', 'Srishti Dabral', '50.000', '2020-12-11', '23:28:10'),
('Kanika Tyagi', 'Jainit Tyagi', '50.000', '2020-12-15', '00:15:52'),
('Kanika Tyagi', 'Riya Khushwha', '100.000', '2020-12-15', '00:17:43'),
('Riya Khushwha', 'Chirag Tyagi', '200.000', '2020-12-15', '00:18:56'),
('RONAK Tyagi', 'Kamya', '50.000', '2020-12-15', '20:39:03'),
('RONAK Tyagi', 'Kamya', '50.000', '2020-12-15', '20:39:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
