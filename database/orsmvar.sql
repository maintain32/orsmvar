-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 03:34 PM
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
-- Database: `orsmvar`
--
CREATE DATABASE IF NOT EXISTS `orsmvar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `orsmvar`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`) VALUES
(1, 'paolo', 'password', 'Paolo Delos Santos'),
(2, 'marvine', 'password', 'Marvine Bonifacio');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `booking_update` datetime NOT NULL,
  `booking_code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `checkin_date` datetime NOT NULL,
  `payment_receipt` varchar(300) DEFAULT NULL,
  `booking_time` enum('daytime','overnight','wholeday') NOT NULL,
  `total_guest` int(11) NOT NULL,
  `message` text NOT NULL,
  `total_rate` double NOT NULL,
  `reservation_fee` double NOT NULL,
  `additional_guest` int(11) NOT NULL,
  `additional_guest_fee` double NOT NULL,
  `additional_room` double NOT NULL,
  `additional_gas` double NOT NULL,
  `additional_refrigerator` double NOT NULL,
  `additional_hours` double NOT NULL,
  `grand_total` double NOT NULL,
  `payment_status` enum('unpaid','partial payment','full payment') NOT NULL DEFAULT 'unpaid',
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `booking_status` enum('cancelled','reserved','booked','confirmed','payment sent') NOT NULL DEFAULT 'booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `bookings`
--

TRUNCATE TABLE `bookings`;
--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_date`, `booking_update`, `booking_code`, `name`, `phone`, `email`, `checkin_date`, `payment_receipt`, `booking_time`, `total_guest`, `message`, `total_rate`, `reservation_fee`, `additional_guest`, `additional_guest_fee`, `additional_room`, `additional_gas`, `additional_refrigerator`, `additional_hours`, `grand_total`, `payment_status`, `payment_date`, `booking_status`) VALUES
(11, '2020-05-09 11:11:42', '2020-05-09 17:44:20', 'VuaJNAtCxu', 'Shaira Yvonne Cruz', '09164236238', 'shairacruz028@yahoo.com', '2020-05-10 00:00:00', '/uploads/1218179498.JPG', 'daytime', 54, 'Birthday Party - May 10 2020<br />\r\nTime of event : 12:00pm - 3:00pm', 11000, 3050, 4, 600, 0, 300, 300, 0, 12200, 'unpaid', '2020-05-09 11:11:42', 'payment sent'),
(12, '2020-05-09 18:08:45', '2020-05-09 18:08:45', 'pEyVYfuTuJ', 'Paolo Delos Santos', '09054236895', 'pbgds17@gmail.com', '2020-05-10 00:00:00', NULL, 'overnight', 54, 'Overnight Pool Party For 54 pax', 13000, 4350, 4, 800, 3000, 300, 300, 0, 17400, 'unpaid', '2020-05-09 18:08:45', 'cancelled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
