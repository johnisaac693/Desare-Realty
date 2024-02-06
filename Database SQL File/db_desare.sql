-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 10:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activelisting`
--

CREATE TABLE `tbl_activelisting` (
  `email` varchar(555) NOT NULL,
  `price` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `house_type` varchar(555) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_approvedacc`
--

CREATE TABLE `tbl_approvedacc` (
  `name` varchar(555) NOT NULL,
  `email` varchar(555) NOT NULL,
  `phonenum` int(11) NOT NULL,
  `address` varchar(555) NOT NULL,
  `password` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_approvedacc`
--

INSERT INTO `tbl_approvedacc` (`name`, `email`, `phonenum`, `address`, `password`) VALUES
('Luka Megurine', 'lukamegurine@email.com', 123456, 'Sapporo, Japan', 'lukaluka'),
('Hatsune Miku', 'hatsunemiku@email.com', 3939, 'Sapporo, Japan', 'mikumiku');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soldlisting`
--

CREATE TABLE `tbl_soldlisting` (
  `email` varchar(555) NOT NULL,
  `price` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `house_type` varchar(555) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
