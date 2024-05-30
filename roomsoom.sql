-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 12:53 PM
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
  `gender` varchar(10) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `discount` varchar(15) NOT NULL,
  `solo_room_price` varchar(20) NOT NULL,
  `property_image` varchar(255) NOT NULL,
  `property_image2` varchar(255) NOT NULL,
  `property_image3` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`s_id`, `property_owner`, `city`, `locality`, `property_type`, `gender`, `property_address`, `discount`, `solo_room_price`, `property_image`, `property_image2`, `property_image3`, `date`) VALUES
(5, 'Pawan', 'Noida', 'Noida Sector 18', 'PG', 'Male', 'Noida Sector-101', '10 % OFF', '20000', 'p1.jpg', 'p2.jpg', 'p3.jpg', '2024-0'),
(6, 'Nitin Aggarwal', 'pune', 'Kothrud', 'Rent', 'Female', 'Mumbai', '', '14000', 'p4.webp', 'p5.webp', 'p6.webp', '2024-0'),
(7, 'Ashish Yadav', 'Noida', 'Noida Sector-101', 'PG', 'Unisex', 'Delhi', '', '15000', 'p7.webp', 'p6.webp', 'p8.jpeg', '2024-0'),
(8, 'Nitin Aggarwal', 'Hyderabad', 'Attapur', 'Rent', 'Male', 'Hyderabad', '', '20000', 'p9.jpg', 'p10.webp', 'p12.jfif', '2024-0'),
(9, 'Pawan', 'Gurgaon', 'Dhankot', 'Rent', 'Female', 'Gurgaon', '', '15000', 'p15.webp', 'p14.webp', 'p13.jpeg', '2024-0'),
(10, 'Tushar Sharma', 'Noida', 'Noida Sectore-63', 'PG', 'Unisex', 'Noida', '', '11000', 'p12.jfif', 'p10.webp', 'p5.webp', '2024-0'),
(13, 'Deepak', 'Delhi', 'Noida Sector-52', 'PG', 'Female', 'A-343/1  Amar puri nabi karim', '', '9000', 'image3.webp', 'image11.webp', 'image25.webp', '2024-05-17 16:55:02'),
(14, 'Nitin Aggarwal', 'Delhi', 'Laxmi Nagar', 'PG', 'Female', 'Laxmi Nagar', '', '10000', 'p25.jpg', 'p23.jpg', 'p22.jpg', '2024-05-28 17:09:00'),
(15, 'Tushar Sharma', 'Delhi', 'Madipur', 'PG', 'Unisex', 'Madipur', '', '14000', 'p21.jpg', 'p20.jpg', 'p19.jpg', '2024-05-28 17:12:34'),
(16, 'Pawan Chauhan', 'Noida', 'Noida Sector-62', 'Rent', 'Unisex', 'Noida Sector-62', '', '5000', 'pg4.webp', 'pg3.jfif', 'pg2.jpg', '2024-05-28 17:15:41'),
(17, 'Nitin Aggarwal', 'Gurgaon', 'Gurgaon', 'PG', 'Male', 'Gurgaon', '', '7500', 'p33.jpg', 'p32.webp', 'p31.webp', '2024-05-28 17:24:45'),
(18, 'Nitin Aggarwal', 'Pune', 'Pune', 'Rent', 'Male', 'Pune', '', '9550', 'p30.jpg', 'p29.jpg', 'p28.webp', '2024-05-28 17:28:19'),
(19, 'Nitin Aggarwal', 'Hyderabad', 'Hyderabad', 'PG', 'Female', 'Hyderabad', '', '10500', 'p26.jpg', 'p25.jpg', 'p22.jpg', '2024-05-28 17:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `roomsoom_booking`
--

CREATE TABLE `roomsoom_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `customer_name` varchar(15) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `city` varchar(15) NOT NULL,
  `locality` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `booking_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomsoom_booking`
--

INSERT INTO `roomsoom_booking` (`booking_id`, `user_id`, `s_id`, `customer_name`, `customer_email`, `city`, `locality`, `address`, `price`, `arrival_date`, `booking_date`) VALUES
(2, 0, 0, 'sameer', 'sameer@gmail.com', 'Noida', 'Noida Sector-18', 'Noida', 0, NULL, '2024-05-22 14:47:45.305811'),
(3, 1, 5, 'nitin', 'nitin@gmail.com', 'Noida', 'Noida', 'Noida Sector-62', 0, NULL, '2024-05-22 16:49:03.325998'),
(4, 1, 7, 'Deepak Kumar', 'dk9094293@gmail.com', 'Noida', 'Noida', 'Noida Sector-101', 0, NULL, '2024-05-23 12:00:40.078258'),
(5, 2, 5, 'Deepak Kumar', 'dk9094293@gmail.com', 'Gurgaon', 'Guraon', 'Gurgaon', 0, NULL, '2024-05-25 22:52:49.717246'),
(6, 2, 7, 'Vijay', 'vijay@gmail.com', 'Noida', 'Noida Sector-101', 'Delhi', 15000, '0000-00-00', '2024-06-19 00:00:00.000000'),
(7, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(8, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(9, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(10, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(11, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(12, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(13, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(14, 2, 5, 'hitesh', 'hitesh@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000'),
(15, 2, 5, 'hitesh', 'dk9094293@gmail.com', 'Noida', 'Noida Sector 18', 'Noida Sector-101', 20000, '0000-00-00', '2024-09-15 00:00:00.000000');

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
(1, 'Deepak', 'dk9094293@gmail.com', 1234567890, '000', '2024-05-21 18:57:41.786200'),
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
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roomsoom_booking`
--
ALTER TABLE `roomsoom_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
