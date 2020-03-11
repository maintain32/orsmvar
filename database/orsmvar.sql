-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 12:24 PM
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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `booking_update` datetime NOT NULL,
  `booking_code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `checkin_date` datetime NOT NULL,
  `checkout_date` datetime DEFAULT NULL,
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
  `payment_status` enum('unpaid','paid') NOT NULL DEFAULT 'unpaid',
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `booking_status` enum('cancelled','reserved','booked','confirmed') NOT NULL DEFAULT 'booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_date`, `booking_update`, `booking_code`, `name`, `phone`, `email`, `checkin_date`, `checkout_date`, `booking_time`, `total_guest`, `message`, `total_rate`, `reservation_fee`, `additional_guest`, `additional_guest_fee`, `additional_room`, `additional_gas`, `additional_refrigerator`, `additional_hours`, `grand_total`, `payment_status`, `payment_date`, `booking_status`) VALUES
(1, '2020-03-09 23:29:35', '2020-03-10 00:02:45', '5LX9oVBNbw', 'Shaira Cruz', '09164236238', 'shairacruz028@yahoo.com', '2020-03-10 00:00:00', NULL, 'daytime', 45, 'dummy event', 11000, 2750, 0, 0, 0, 0, 0, 0, 11000, 'unpaid', '2020-03-09 23:29:35', 'confirmed'),
(2, '2020-03-09 23:33:36', '2020-03-10 00:06:36', 'KyioxnjwLl', 'Christine Jhoy Emen', '09174575986', 'shairacruz028@yahoo.com', '2020-03-13 00:00:00', NULL, 'overnight', 50, 'Cafe24 ph Team Building', 13000, 4000, 0, 0, 3000, 0, 0, 0, 16000, 'unpaid', '2020-03-09 23:33:36', 'confirmed'),
(3, '2020-03-09 23:41:09', '2020-03-09 23:41:09', 'SJQAx4vyDH', 'Sean D Cruz', '09174575986', 'shairacruz028@yahoo.com', '2020-03-12 00:00:00', NULL, 'daytime', 34, 'Alexa\'s 1st Birthday', 11000, 2750, 0, 0, 0, 0, 0, 0, 11000, 'unpaid', '2020-03-09 23:41:09', 'booked'),
(4, '2020-03-09 23:42:33', '2020-03-09 23:42:33', 'lUTzMZb1JD', 'Sean D Cruz', '09174575986', 'shairacruz028@yahoo.com', '2020-03-16 00:00:00', NULL, 'daytime', 34, 'Alexa\'s 1st Birthday', 11000, 2750, 0, 0, 0, 0, 0, 0, 11000, 'unpaid', '2020-03-09 23:42:33', 'booked'),
(5, '2020-03-09 23:43:27', '2020-03-09 23:43:27', '4C0fXkQLED', 'Sean D Cruz', '09174575986', 'shairacruz028@yahoo.com', '2020-03-17 00:00:00', NULL, 'daytime', 51, 'Alexa\'s 1st Birthday', 11000, 2787.5, 1, 150, 0, 0, 0, 0, 11150, 'unpaid', '2020-03-09 23:43:27', 'booked'),
(6, '2020-03-09 23:45:53', '2020-03-09 23:45:53', 'GOkOriySuZ', 'Sean D Cruz', '09174575986', 'shairayvonnecruz028@gmail.com', '2020-03-18 00:00:00', NULL, 'daytime', 10, 'Small gathering', 11000, 2750, 0, 0, 0, 0, 0, 0, 11000, 'unpaid', '2020-03-09 23:45:53', 'booked'),
(7, '2020-03-09 23:47:45', '2020-03-09 23:47:45', 'RiBT45zJwc', 'Shaira Cruz', '09164236238', 'shairacruz028@yahoo.com', '2020-03-20 00:00:00', NULL, 'daytime', 45, 'Small Gathering', 11000, 2750, 0, 0, 0, 0, 0, 0, 11000, 'unpaid', '2020-03-09 23:47:45', 'booked'),
(8, '2020-03-09 23:50:25', '2020-03-09 23:50:25', 'LIV9fQZaXs', 'Shaira Cruz', '09164236238', 'shairacruz028@yahoo.com', '2020-03-21 00:00:00', NULL, 'daytime', 45, 'Small Gathering', 11000, 2750, 0, 0, 0, 0, 0, 0, 11000, 'unpaid', '2020-03-09 23:50:25', 'booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
