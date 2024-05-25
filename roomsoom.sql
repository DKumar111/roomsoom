-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 10:35 AM
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
-- Database: `roomsoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `s_id` int(50) NOT NULL,
  `property_owner` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `locality` varchar(20) NOT NULL,
  `property_type` varchar(20) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `twin_sharing_price` varchar(20) NOT NULL,
  `solo_room_price` varchar(20) NOT NULL,
  `property_image` varchar(255) NOT NULL,
  `property_image2` varchar(255) NOT NULL,
  `property_image3` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`s_id`, `property_owner`, `city`, `locality`, `property_type`, `property_address`, `twin_sharing_price`, `solo_room_price`, `property_image`, `property_image2`, `property_image3`, `date`) VALUES
(5, 'Pawan', 'Noida', 'Noida Sector 18', 'PG', 'Noida Sector-101', '10000', '20000', 'p1.jpg', 'p2.jpg', 'p3.jpg', '2024-0'),
(6, 'Nitin Aggarwal', 'pune', 'Kothrud', 'Rent', 'Mumbai', '7000', '14000', 'p4.webp', 'p5.webp', 'p6.webp', '2024-0'),
(7, 'Ashish Yadav', 'Noida', 'Noida Sector-101', 'PG', 'Delhi', '30000', '15000', 'p7.webp', 'p6.webp', 'p8.jpeg', '2024-0'),
(8, 'Nitin Aggarwal', 'Hyderabad', 'Attapur', 'Rent', 'Hyderabad', '50000', '20000', 'p9.jpg', 'p10.webp', 'p12.jfif', '2024-0'),
(9, 'Pawan', 'Gurgaon', 'Dhankot', 'Rent', 'Gurgaon', '30000', '15000', 'p15.webp', 'p14.webp', 'p13.jpeg', '2024-0'),
(10, 'Tushar Sharma', 'Noida', 'Noida Sectore-63', 'PG', 'Noida', '22000', '11000', 'p12.jfif', 'p10.webp', 'p5.webp', '2024-0'),
(13, 'Deepak', 'New Delhi', 'Noida Sector-52', 'PG', 'A-343/1  Amar puri nabi karim', '18000', '9000', 'image3.webp', 'image11.webp', 'image25.webp', '2024-05-17 16:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `roomsoom_booking`
--

CREATE TABLE `roomsoom_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `customer_name` varchar(15) NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_age` int(3) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` bigint(10) NOT NULL,
  `customer_profession` varchar(15) NOT NULL,
  `booking_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomsoom_booking`
--

INSERT INTO `roomsoom_booking` (`booking_id`, `user_id`, `s_id`, `customer_name`, `customer_gender`, `customer_age`, `customer_email`, `customer_mobile`, `customer_profession`, `booking_date`) VALUES
(2, 0, 0, 'sameer', 'male', 32, 'sameer@gmail.com', 1225548785, 'employee', '2024-05-22 14:47:45.305811'),
(3, 1, 5, 'nitin', 'male', 45, 'nitin@gmail.com', 954988243, 'employee', '2024-05-22 16:49:03.325998'),
(4, 1, 7, 'Deepak Kumar', 'male', 43, 'dk9094293@gmail.com', 9953188090, 'employee', '2024-05-23 12:00:40.078258');

-- --------------------------------------------------------

--
-- Table structure for table `roomsoom_email`
--

CREATE TABLE `roomsoom_email` (
  `id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomsoom_email`
--

INSERT INTO `roomsoom_email` (`id`, `name`, `phone`, `city`, `date`) VALUES
(1, 'Deepak Kumar', 9953188090, 'Gurgaon', '2024-05-15 10:53:53.470285'),
(2, 'Deepak Kumar', 9953188090, 'Gurgaon', '2024-05-18 09:41:19.705626');

-- --------------------------------------------------------

--
-- Table structure for table `roomsoom_user`
--

CREATE TABLE `roomsoom_user` (
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomsoom_user`
--

INSERT INTO `roomsoom_user` (`user_id`, `username`, `email`, `mobile_number`, `user_password`, `date`) VALUES
(1, 'Deepak', 'dk9094293@gmail.com', 1234567890, '123', '2024-05-21 18:57:41.786200'),
(2, 'Hitesh', 'hitesh@gmail.com', 1245783265, '124', '2024-05-22 15:58:18.211137');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `roomsoom_booking`
--
ALTER TABLE `roomsoom_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `roomsoom_email`
--
ALTER TABLE `roomsoom_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomsoom_user`
--
ALTER TABLE `roomsoom_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roomsoom_booking`
--
ALTER TABLE `roomsoom_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomsoom_email`
--
ALTER TABLE `roomsoom_email`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roomsoom_user`
--
ALTER TABLE `roomsoom_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
