-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 09:23 AM
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
(22, 'Saim Asif', 'saimasif885@gmail.com', '000', 'okara', '200', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 09:21:43.000000'),
(23, 'Abdullah', 'Abdullah885@gmail.com', '00000', 'Okara', '100', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:12:27.000000'),
(24, 'Haris', 'Haris885@gmail.com', '03081808805', 'LAHORE', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:17:25.000000'),
(25, 'saim', 'saim885@gmail.com', '000', 'q', '20', 'Yes', 'No', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:21:20.000000'),
(26, 'saim', 'saim885@gmail.com', '111', 'okara', '12', 'Yes', 'No', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:21:42.000000'),
(27, 'saim', 'saim885@gmail.com', '000', 'okara', '120', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:22:05.000000'),
(28, 'saim', 'saim885@gmail.com', '000', 'okara', '020', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:22:25.000000'),
(29, 'saim', 'saim885@gmail.ocm', '000', 'okara', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:22:46.000000'),
(30, 'SAIM', 'saim885@gmil.com', '00', '0', '0', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:23:06.000000'),
(31, 'saim', 'saim885@gmail.com', '000', 'okara', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:23:22.000000'),
(32, 'saim', 'saim885@gmail.comn', '000', '0', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:23:36.000000'),
(33, 'saimq', 'saim885@gmail.com', '000', 'okra', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 13:23:51.000000'),
(34, 'saim', 'saim885@gmail.com', '000', 'saim', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 13:24:08.000000'),
(35, 'saim', 'saim95@gmail.com', '000', 'okara', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 14:00:43.000000'),
(36, 'saim', 'saim885@Gmai.com', '000', 'oakra', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 14:01:03.000000'),
(37, 'a', 'a@gmail.com', '-1', '0', '0', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 14:01:34.000000'),
(38, 'saim', 'saim885@gmail.com', '000', 'oakra', '0', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 14:01:59.000000'),
(39, 'saim', 'saim885@gmail.com', '0', 'oakra', '0', 'Yes', 'Yes', 'Yes', 'Yes', '2000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 14:02:21.000000'),
(40, 'saim', 'saim885@gmail.com', '00', 'oakra', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 14:02:40.000000'),
(41, 'saim', 'saim885@gmail.com', '000', 'oakra', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 14:02:54.000000'),
(42, 'saim', 'saim885@gmail.com', '0', '0', '0', 'No', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 14:03:12.000000'),
(43, 'saim', 'saim885@gmail.com', '00', 'o', '00', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 14:03:32.000000'),
(44, 'saim', 'saim885@gmail.com', '00', '0', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 14:03:47.000000'),
(45, 'saim', 'saim885@gmail.com', '00', 'ok', '0', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 14:04:05.000000'),
(46, 'sai', 'saim885@gmail.com', '000', 'okara', '12', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-28 14:04:26.000000'),
(47, 'Asif', 'Asif885@gmail.com', '00000', 'okara', '120', 'Yes', 'Yes', 'Yes', 'Yes', '1000 liters', 'Yes', 'Yes', 'complete', '2024-06-28 16:50:18.000000'),
(48, 'Hassan', 'Hassan885@gmail.com', '00000', 'Okara, Pakistan', '200', 'Yes', 'Yes', 'No', 'No', '1000 liters', 'Yes', 'Yes', 'pending', '2024-06-29 07:53:11.000000');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
