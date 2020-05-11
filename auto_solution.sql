-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 09:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees_detail`
--

CREATE TABLE `employees_detail` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_detail`
--

INSERT INTO `employees_detail` (`id`, `first_name`, `last_name`, `birth_date`, `gender`, `email`, `phone`, `designation`, `salary`, `street`, `city`, `state`, `zip`, `username`, `password`) VALUES
(2, 'Zulhas', 'Molla', '1981-07-16', 'Male', 'zulhas@gmail.com', '+8801749468971', 'Service Engineer', 20000, '122/2 Monipur, Mirpur-2', 'Dhaka', 'Dhaka', '1216', 'zulhas', '$2y$10$eXCswhWCyUtkCpizlW38fucS2ZPnrmirhzTqXHa4rg/VSTnNXBgie');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(2, 'imtiaz', '$2y$10$ZLPWvX81rEOZQSo26Iv6Keruinmok5eWh7nZKXdbduMuYinPVegbK', 'user'),
(5, 'zulhas', '$2y$10$eXCswhWCyUtkCpizlW38fucS2ZPnrmirhzTqXHa4rg/VSTnNXBgie', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_detail`
--

INSERT INTO `users_detail` (`id`, `first_name`, `last_name`, `birth_date`, `gender`, `email`, `phone`, `street`, `city`, `state`, `zip`, `username`, `password`) VALUES
(2, 'Imtiaz', 'Ali', '1996-07-09', 'Male', 'imtiazali4090@gmail.com', '+8801625036306', 'H-111, Road-4, Sangbadik Abasik Elaka', 'Dhaka', 'Dhaka', '1216', 'imtiaz', '$2y$10$ZLPWvX81rEOZQSo26Iv6Keruinmok5eWh7nZKXdbduMuYinPVegbK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees_detail`
--
ALTER TABLE `employees_detail`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `Email` (`email`),
  ADD UNIQUE KEY `Id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `UNIQUE_2` (`email`),
  ADD UNIQUE KEY `UNIQUE_1` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees_detail`
--
ALTER TABLE `employees_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
