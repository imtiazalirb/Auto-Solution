-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 07:04 PM
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
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `car_make` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `body_type` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `drivetrain` varchar(50) NOT NULL,
  `engine_type` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `engine_no` varchar(50) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `vin_no` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT '../storage/no_image.jpg',
  `last_serviced_item` varchar(100) DEFAULT NULL,
  `last_serviced_date` date DEFAULT NULL,
  `last_serviced_odo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `user_id`, `username`, `car_make`, `car_model`, `trim`, `body_type`, `year`, `color`, `drivetrain`, `engine_type`, `fuel_type`, `engine_no`, `registration_no`, `vin_no`, `image`, `last_serviced_item`, `last_serviced_date`, `last_serviced_odo`) VALUES
(27, 2, 'imtiaz', 'Toyota', 'Chaser', 'Tourer V', 'Sedan', 1998, 'White', 'RWD', 'Inline 6', 'Gasoline', 'JZ43093004034', 'DHK GA-16-4111', '2344253585453', '../storage/car_image/bYAAAgClyOA-1920.jpg', '', NULL, NULL),
(28, 2, 'imtiaz', 'Toyota', 'Supra', 'MK4 Twin Turbo', 'Coupe', 1998, 'White', 'RWD', 'Inline 6', 'Gasoline', 'JZ2344564356523', 'DHK VHA-13-4522', 'Q3R4W423432556', '../storage/car_image/430691-toyota-supra-wallpaper-2048x1365-1080p.jpg', '', NULL, NULL),
(29, 6, 'shafat', 'Volkswagen', 'Golf', 'R', 'Hatchback', 2020, 'Blue', 'AWD', 'Inline 4', 'Gasoline', '2498593495', 'CTG GA-32-4433', '3259839485934', '../storage/car_image/Volkswagen-Golf-R-5door-2017-1920x1200-001.jpg', '', NULL, NULL),
(30, 6, 'shafat', 'Toyota', 'Corolla', 'X Assista', 'Sedan', 2006, 'White', 'FWD', 'Inline 4', 'Gasoline', '293102940190', 'DHK GA-23-4554', '', '../storage/car_image/37c1b6ds-960.jpg', '', NULL, NULL),
(32, 2, 'imtiaz', 'Ford', 'F150', 'Raptor', 'Truck', 2019, 'Red', '4WD', 'V6', 'Gasoline', '234324234', 'DHK THA-11-9982', '', '../storage/car_image/i.webp', '', NULL, NULL),
(33, 2, 'imtiaz', 'Mitsubishi', 'Lancer Evo 10', 'FQ400', 'Sedan', 2010, 'Blue', 'AWD', 'Inline 4', 'Gasoline', '13252345', 'DHK GA-13-4444', '', '../storage/car_image/Mitsubishi-Lancer-EVO-X-FQ-400-16.jpg', '', NULL, NULL),
(34, 2, 'imtiaz', 'BMW', 'M3', 'E30', 'Sedan', 1987, 'Black', 'RWD', 'Inline 4', 'Flex', '32402390', 'DHK GA-13-4567', '', '../storage/car_image/E30-M3-Photo-gallery26.jpg', '', NULL, NULL);

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
(1, 'Imtiaz', 'Ali', 'imtiazali4090@gmail.com', '+8801749468971', 'Toyota', 'Chaser', 'Tourer V', '1998', 'DHK GA-13-4522', '2134332543', 'cambelt', 'No', 'Dhaka'),
(3, 'Imtiaz', 'Ali', 'imtiazali4090@gmail.com', '+8801625036306', 'Dodge', 'Ram', 'Duramax 6.6', '2006', 'ewfwe234', '3214325455', '', 'no', 'Chittagong'),
(4, 'Hossain', 'Ali', 'hossain@gmail.com', '+8801749468971', 'Ferrari', '360', 'Coupe', '2001', 'ii2342314', '452453452345', 'Major service Suspension ', 'qer', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `service_request_id` int(12) NOT NULL,
  `car_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(12) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `car_detail` varchar(50) NOT NULL,
  `body_type` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `color` varchar(50) NOT NULL,
  `drivetrain` varchar(50) NOT NULL,
  `engine_type` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `engine_no` varchar(50) NOT NULL,
  `registration_no` varchar(50) NOT NULL,
  `vin_no` varchar(50) DEFAULT NULL,
  `service_needed` varchar(150) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `last_serviced_item` varchar(50) DEFAULT NULL,
  `request_service_date` date NOT NULL DEFAULT current_timestamp(),
  `last_serviced_date` date DEFAULT NULL,
  `last_serviced_odo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`service_request_id`, `car_id`, `user_id`, `name`, `street`, `city`, `zip`, `phone`, `email`, `username`, `car_detail`, `body_type`, `year`, `color`, `drivetrain`, `engine_type`, `fuel_type`, `engine_no`, `registration_no`, `vin_no`, `service_needed`, `message`, `last_serviced_item`, `request_service_date`, `last_serviced_date`, `last_serviced_odo`) VALUES
(10, 34, 2, '', '', '', 0, '', '', 'imtiaz', 'BMW M3 E30', 'Sedan', 1987, 'Black', 'RWD', 'Inline 4', 'Flex', '32402390', 'DHK GA-13-4567', '', '[Brakes] ', '', '', '2020-05-24', '0000-00-00', 0),
(12, 32, 2, '', '', '', 0, '', '', 'imtiaz', 'Ford F150 Raptor', 'Truck', 2019, 'Red', '4WD', 'V6', 'Gasoline', '234324234', 'DHK THA-11-9982', '', '[Suspension] ', 'Need Fox OEM shocks', '', '2020-05-24', '0000-00-00', 0),
(13, 33, 2, '', '', '', 0, '', '', 'imtiaz', 'Mitsubishi Lancer Evo 10 FQ400', 'Sedan', 2010, 'Blue', 'AWD', 'Inline 4', 'Gasoline', '13252345', 'DHK GA-13-4444', '', '[Battery] [Clutch] [Cambelt] ', 'Please use OEM parts only', '', '2020-05-24', '0000-00-00', 0),
(16, 27, 2, 'Imtiaz Ali', 'imtiaz', 'H-111, Road-4, Sangbadik Abasik Elaka', 0, '1216', '+8801625036306', 'imtiazali4090@gmail.com', 'Toyota Chaser Tourer V', 'Sedan', 1998, 'White', 'RWD', 'Inline 6', 'Gasoline', 'JZ43093004034', 'DHK GA-16-4111', '2344253585453', '[Minor service] ', '', '', '2020-05-24', '0000-00-00', 0);

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
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `registration_no` (`registration_no`);

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
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`service_request_id`);

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
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `service_request_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
