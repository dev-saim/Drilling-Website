-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 03:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drill`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `welldepth` varchar(255) NOT NULL,
  `handpump` varchar(255) NOT NULL,
  `concretebase` varchar(255) NOT NULL,
  `waterpump` varchar(255) NOT NULL,
  `solaroption` varchar(255) NOT NULL,
  `storagetank` varchar(255) NOT NULL,
  `watertanktower` varchar(255) NOT NULL,
  `cleanwatertank` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateandtime` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `phone`, `address`, `welldepth`, `handpump`, `concretebase`, `waterpump`, `solaroption`, `storagetank`, `watertanktower`, `cleanwatertank`, `status`, `dateandtime`) VALUES
(22, 'Saim Asif', 'saimasif885@gmail.com', '000', 'okara', '200', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 09:21:43.000000'),
(23, 'Abdullah', 'Abdullah885@gmail.com', '00000', 'Okara', '100', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:12:27.000000'),
(24, 'Haris', 'Haris885@gmail.com', '03081808805', 'LAHORE', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:17:25.000000'),
(25, 'saim', 'saim885@gmail.com', '000', 'q', '20', 'Yes', 'No', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:21:20.000000'),
(26, 'saim', 'saim885@gmail.com', '111', 'okara', '12', 'Yes', 'No', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:21:42.000000'),
(27, 'saim', 'saim885@gmail.com', '000', 'okara', '120', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:22:05.000000'),
(28, 'saim', 'saim885@gmail.com', '000', 'okara', '020', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:22:25.000000'),
(29, 'saim', 'saim885@gmail.ocm', '000', 'okara', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:22:46.000000'),
(30, 'SAIM', 'saim885@gmil.com', '00', '0', '0', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:23:06.000000'),
(31, 'saim', 'saim885@gmail.com', '000', 'okara', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:23:22.000000'),
(32, 'saim', 'saim885@gmail.comn', '000', '0', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:23:36.000000'),
(33, 'saimq', 'saim885@gmail.com', '000', 'okra', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:23:51.000000'),
(34, 'saim', 'saim885@gmail.com', '000', 'saim', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:24:08.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
