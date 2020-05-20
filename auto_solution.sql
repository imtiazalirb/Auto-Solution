-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 09:33 AM
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
(7, 'Mahmud', 'Zaman', '1996-02-06', 'Male', 'mahmud@yahoo.com', '+8801716402222', 'Other', 10000, '12/1 Moddho Badda', 'Dhaka', 'Dhaka', '1226', 'mahmud', '$2y$10$8uEyPPH1fVtqfJYEFJDU8u3lirqVRlEFJcL4N2L5Dpc1QRY/8HTEO'),
(4, 'Abdus', 'Samad', '1984-02-29', 'Male', 'samad@gmail.com', '+8801915647629', 'Manager', 40000, '129/A/12 Basundhara Abasik', 'Dhaka', 'Dhaka', '1216', 'samad', '$2y$10$FEdFtKayoOSgPZfJT4rGFuWGzxP8JMYMTQc.2HZSay7mONknZ4lE6'),
(6, 'Zulhas', 'Molla', '1990-03-15', 'Male', 'zulhas@gmail.com', '+880171982875800', 'Mechanic', 22000, '129/A/12 Basundhara Abasik', 'Dhaka', 'Dhaka', '1229', 'zulhas', '$2y$10$apT0DGKxkIQF2iMj8DJEcum38s7.7oP4KPIswOznsW7sGn/O7yYNS');

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
(5, 'zulhas', '$2y$10$eXCswhWCyUtkCpizlW38fucS2ZPnrmirhzTqXHa4rg/VSTnNXBgie', 'employee'),
(6, 'shafat', '$2y$10$aRWly25zdpo4uD.NDzy77uSIN9y8vgDOsEiHikiKEETVTK.JDai6a', 'user'),
(8, 'samad', '$2y$10$FEdFtKayoOSgPZfJT4rGFuWGzxP8JMYMTQc.2HZSay7mONknZ4lE6', 'employee'),
(11, 'mahmud', '$2y$10$8uEyPPH1fVtqfJYEFJDU8u3lirqVRlEFJcL4N2L5Dpc1QRY/8HTEO', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `car_make` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `trim` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `engine_no` varchar(50) NOT NULL,
  `service_needed` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `first_name`, `last_name`, `email`, `phone`, `car_make`, `car_model`, `trim`, `year`, `registration_no`, `engine_no`, `service_needed`, `message`, `branch`) VALUES
(1, 'Imtiaz', 'Ali', 'imtiazali4090@gmail.com', '+8801749468971', 'Toyota', 'Chaser', 'Tourer V', '1998', 'DHK GA-13-4522', '2134332543', '', 'No', 'Dhaka'),
(3, 'Imtiaz', 'Ali', 'imtiazali4090@gmail.com', '+8801625036306', 'Dodge', 'Ram', 'Duramax 6.6', '2006', 'ewfwe234', '3214325455', '', 'no', 'Chittagong');

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
(2, 'Imtiaz', 'Ali', '1996-07-09', 'Male', 'imtiazali4090@gmail.com', '+8801625036306', 'H-111, Road-4, Sangbadik Abasik Elaka', 'Dhaka', 'Dhaka', '1216', 'imtiaz', '$2y$10$ZLPWvX81rEOZQSo26Iv6Keruinmok5eWh7nZKXdbduMuYinPVegbK'),
(4, 'Shafayat Ul', 'Islam', '1996-11-01', 'Male', 'shafat46r@gmail.com', '+88017198287580', '135/5 Sangbadik R/A, Mirpur-11', 'Dhaka', 'Dhaka', '1216', 'shafat', '$2y$10$aRWly25zdpo4uD.NDzy77uSIN9y8vgDOsEiHikiKEETVTK.JDai6a');

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
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Reg` (`registration_no`),
  ADD UNIQUE KEY `Engine` (`engine_no`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
