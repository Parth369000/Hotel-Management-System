-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 08:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Email`, `Password`) VALUES
('admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobileno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `Email`, `password`, `mobileno`) VALUES
(1, 'PARTH  ', 'pp69@gmail.com', '123  ', '9081476469'),
(2, 'parth', 'pp369@gmail.com', '111', '7874693609'),
(3, 'parth', 'pp3690@gmail.com', '1234', '9081476469'),
(4, 'parth', 'pp3699@gmail.com', '3690', '7874693609'),
(5, 'Parth ', 'pp369000@gmail.com', '3690', '9879873690'),
(7, 'dev ', 'pp36900@gmail.com', '1234', '9878787987'),
(14, 'parth ', 'pp36@gmail.com', '1234 ', '9879879879');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `paymentmethod` varchar(20) NOT NULL,
  `cardName` varchar(30) NOT NULL,
  `cardNumber` bigint(20) NOT NULL,
  `cardMonth` int(11) NOT NULL,
  `cardYear` int(11) NOT NULL,
  `cardCvv` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `booking_id`, `paymentmethod`, `cardName`, `cardNumber`, `cardMonth`, `cardYear`, `cardCvv`, `amount`) VALUES
(1, 24, 'cash', '', 0, 0, 0, 0, 1000),
(2, 26, 'card', 'Parth', 9879879879879879, 4, 2025, 567, 500),
(9, 27, 'cash', '', 0, 0, 0, 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `roomType` varchar(30) NOT NULL,
  `price` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `roomType`, `price`, `status`) VALUES
(8, 'Single Room', 1000, 'active'),
(9, 'Guest House', 2000, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `room_book_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `ac_type` varchar(20) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`room_book_id`, `name`, `email`, `phone_no`, `room_type`, `ac_type`, `no_of_room`, `check_in`, `check_out`, `no_of_days`, `status`, `total_price`) VALUES
(24, 'parth', 'pp369000@gmail.com', ' +91982511313', 'Superior Room', 'Ac', 1, '2024-02-11', '2024-02-13', 2, 'Confirm', 3000),
(26, 'heet', 'pp369000@gmail.com', '9081476469', 'Superior Room', 'Ac', 1, '2024-02-14', '2024-02-15', 1, 'Confirm', 1500),
(27, 'krutarth', 'pp369000@gmail.com', ' 919081476469', 'Single Room', 'Ac', 1, '2024-02-15', '2024-02-17', 2, 'Confirm', 1000),
(36, 'parth', 'pp369000@gmail.com', '9790819898', 'Single Room', 'Ac', 1, '2024-02-15', '2024-02-17', 2, 'Cancel', 2000),
(38, 'parth', 'pp369000@gmail.com', '9081476469', 'Single Room', 'Ac', 1, '2024-02-19', '2024-02-22', 3, 'NotConfirm', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`room_book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `room_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
