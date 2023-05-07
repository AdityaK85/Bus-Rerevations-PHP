-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 08:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `user_email`, `password`) VALUES
(3, 'aditya', 'adityakothekar79@gmail.com', 'pass'),
(4, 'admin', 'admin@123.com', 'pass'),
(5, 'arun', 'arun@gmail.com', '12345'),
(6, 'nehal', 'nehal@gmail.coim', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `available_bus`
--

CREATE TABLE `available_bus` (
  `id` int(11) NOT NULL,
  `bus_image` text NOT NULL,
  `bus_name` varchar(1000) NOT NULL,
  `bus_no` varchar(1000) NOT NULL,
  `bus_status` varchar(100) NOT NULL,
  `bus_seat_price` varchar(100) NOT NULL,
  `from_location` varchar(100) NOT NULL,
  `to_location` varchar(100) NOT NULL,
  `from_date` date NOT NULL,
  `bus_seat` int(11) NOT NULL,
  `bus_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `available_bus`
--

INSERT INTO `available_bus` (`id`, `bus_image`, `bus_name`, `bus_no`, `bus_status`, `bus_seat_price`, `from_location`, `to_location`, `from_date`, `bus_seat`, `bus_time`) VALUES
(1, 'BUS-64201ad998ce52.16070067.jpg', 'Express', 'Bus No. 2141', 'Active', '120', 'Nagpur', 'Katol', '2023-03-29', 40, '03:30:00'),
(3, 'BUS-642020e3a51e31.29001668.jpg\r\n', 'Asian', 'Bus No. 1277', 'Active', '400', 'Betul', 'nagpur', '2023-04-25', 0, '03:00:00'),
(4, 'BUS-642020eebb1f22.61716205.jpg', 'Stars', 'Bus No. 4499', 'Active', '350', 'Nagpur', 'Pune', '2023-04-10', 35, '00:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `booked_bus`
--

CREATE TABLE `booked_bus` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(110) NOT NULL,
  `altphone` varchar(110) NOT NULL,
  `address` text NOT NULL,
  `bus_no` varchar(100) NOT NULL,
  `bus_seat` varchar(110) NOT NULL,
  `no_of_passanger` varchar(110) NOT NULL,
  `per_seat_price` varchar(110) NOT NULL,
  `from_location_to` varchar(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) NOT NULL,
  `total_price` varchar(110) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'No-pay'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_bus`
--

INSERT INTO `booked_bus` (`id`, `email`, `name`, `mobile`, `altphone`, `address`, `bus_no`, `bus_seat`, `no_of_passanger`, `per_seat_price`, `from_location_to`, `date`, `time`, `total_price`, `payment_status`) VALUES
(1, 'adityakothekar79@gmail.com', 'vedant kothekar', '8530926168', '565464564', 'dharmpeth,sankar nagar', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(2, 'adityakothekar79@gmail.com', 'vedant kothekar', '8530926168', '565464564', 'dharmpeth,sankar nagar', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(3, 'adityakothekar79@gmail.com', 'vedant kothekar', '8530926168', '565464564', 'dharmpeth,sankar nagar', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(4, 'adityakothekar79@gmail.com', 'vedant kothekar', '8530926168', '565464564', 'dharmpeth,sankar nagar', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(5, 'adityakothekar79@gmail.com', 'vedant kothekar', '8530926168', '565464564', 'dharmpeth,sankar nagar', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(6, 'adityakothekar79@gmail.com', 'vedant kothekar', '8530926168', '565464564', 'dharmpeth,sankar nagar', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(7, 'adityakothekar79@gmail.com', 'Aditya kothekar', '8530926168', '4444555444', 'rajapeth', 'Bus No. 2141', '40', '6', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '720', 'Done'),
(8, 'admin@gmail.com', 'admin', '00001114447', '0004445554', 'USA', 'Bus No. 1277', '50', '5', '400 Per Seat ', 'Betul-- To --> Kotol', '2023-04-05 Date ', '03:00:00 Day Timing ', '2000', 'Done'),
(9, 'shrutikothekar01@gmail.com', 'shruti', '77788877887', '77878787871', 'Nagpuer', 'Bus No. 1277', '50', '4', '400 Per Seat ', 'Betul-- To --> Kotol', '2023-04-05 Date ', '03:00:00 Day Timing ', '1600', 'Done'),
(10, 'shrutikothekar01@gmail.com', 'shruti', '77788877887', '77878787871', 'Nagpuer', 'Bus No. 1277', '50', '4', '400 Per Seat ', 'Betul-- To --> Kotol', '2023-04-05 Date ', '03:00:00 Day Timing ', '1600', 'Done'),
(14, 'arunpatle@gmail.com', 'arun', '465651891', '465489489', 'nagpur', 'Bus No. 2141', '40', '4', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '480', 'Done'),
(15, 'arunpatle@gmail.com', 'arun', '465651891', '465489489', 'nagpur', 'Bus No. 2141', '40', '4', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '480', 'Done'),
(16, 'adityakothekar79@gmail.com', 'Aditya kothekar', '8530926168', '0004445554', 'dharmpeth,sankar nagar', 'Bus No. 2141', '40', '5', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '600', 'Done'),
(17, 'adityakothekar79@gmail.com', 'Aditya kothekar', '8530926168', '0004445554', 'dharmpeth,sankar nagar', 'Bus No. 2141', '40', '5', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '', 'Done'),
(18, 'adityakothekar79@gmail.com', 'Aditya kothekar', '8530926168', '0004445554', 'dharmpeth,sankar nagar', 'Bus No. 2141', '40', '5', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '', 'Done'),
(19, 'adityakothekar79@gmail.com', 'Aditya kothekar', '8530926168', '0004445554', 'rajapeth', 'Bus No. 2141', '40', '5', '120 Per Seat ', 'Nagpur-- To --> Katol', '2023-03-29 Date ', '03:30:00 Day Timing ', '600', 'Done'),
(20, 'aurn@gmail.com', 'arun patle', '45454545454', '45445454544', 'usa', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(21, 'adityakothekar79@gmail.com', 'arun', '454545454', '454545454', 'usa', 'Bus No. 4499', '35', '5', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1750', 'Done'),
(22, 'adityakothekar79@gmail.com', 'arun', '454545454', '454545454', 'usa', 'Bus No. 4499', '35', '5', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1750', 'Done'),
(23, 'adityakothekar79@gmail.com', 'aurn', '454545454', '454545454', 'nagjpur', 'Bus No. 4499', '35', '5', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1750', 'Done'),
(24, 'adityakothekar79@gmail.com', 'arun', '5545454', '554545454', 'usq', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(25, 'adityakothekar79@gmail.com', 'arun', '5545454', '554545454', 'usq', 'Bus No. 4499', '35', '4', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1400', 'Done'),
(26, 'nehal@gamil.com', 'nehal', '789787878', '454545454', 'usa', 'Bus No. 4499', '35', '5', '350 Per Seat ', 'Nagpur-- To --> Pune', '2023-04-10 Date ', '00:59:00 Day Timing ', '1750', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `bus_id` int(11) NOT NULL,
  `bus_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `bus_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`bus_id`, `bus_image`, `bus_name`, `bus_no`, `bus_seat`) VALUES
(2, 'BUS-64201ad998ce52.16070067.jpg', 'Express', 2141, 40),
(3, 'BUS-6420203c485140.49606551.jpg', 'Amarnath', 1256, 40),
(4, 'BUS-642020e3a51e31.29001668.jpg', 'Asian', 1277, 50),
(5, 'BUS-642020eebb1f22.61716205.jpg', 'Stars', 4499, 35);

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(11) NOT NULL,
  `user_name` varchar(1000) NOT NULL,
  `email_id` text NOT NULL,
  `pass_word` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `user_name`, `email_id`, `pass_word`) VALUES
(1, 'aditya', 'adityakothekar79@gmail.com', 'pass'),
(2, 'Vedant', 'vedant@gmail.com', 'pass@123'),
(8, '', '', ''),
(9, 'aditya kothekar', '', ''),
(10, 'aditya kothekar', '', ''),
(11, 'aditya kothekar', '', ''),
(12, 'aditya kothekar', '', ''),
(13, 'arun', 'arunpatle@gmail.com', 'pass'),
(14, 'nehal', 'nehal@gamil.com', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available_bus`
--
ALTER TABLE `available_bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_bus`
--
ALTER TABLE `booked_bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `available_bus`
--
ALTER TABLE `available_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booked_bus`
--
ALTER TABLE `booked_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bus_details`
--
ALTER TABLE `bus_details`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
