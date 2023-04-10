-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 06:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `addowner_details`
--

CREATE TABLE `addowner_details` (
  `id` int(11) NOT NULL,
  `units` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `date_of_purchase` int(11) NOT NULL,
  `use` varchar(200) NOT NULL,
  `block` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `current_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addowner_details`
--

INSERT INTO `addowner_details` (`id`, `units`, `first_name`, `last_name`, `email`, `contact`, `date_of_birth`, `nationality`, `date_of_purchase`, `use`, `block`, `type`, `current_status`) VALUES
(1, 'A1', 'Ahmed', 'Sithiq', 'sithiq@gmail.com', '8610231689', 2001, 'indian', 2021, 'SELF', 'A', '1bhk', 1),
(2, 'A2', 'Ahmed', 'Sathik', 'sathik@gmail.com', '1234569870', 2002, 'indian', 2023, 'TENANT', 'A', '1bhk', 1),
(3, 'A3', 'syed', 'Abuthahir', 'syed@gmail.com', '9443648516', 1985, 'indian', 2019, 'SELF', 'A', '1bhk', 1),
(4, 'A4', 'abdul', 'latheef', 'abdul@gmail.com', '1236547890', 1992, 'indian', 2021, 'SELF', 'A', '2bhk', 1),
(5, 'A5', 'kather', 'M', 'kather@gmail.com', '1236549870', 1994, 'indian', 2022, 'TENANT', 'A', '2bhk', 1),
(6, 'A6', 'Mohammed ', 'Anifa', 'Anifa@gmail.com', '7894561200', 1990, 'indian', 2020, 'SELF', 'A', '2bhk', 1),
(7, 'A7', 'abu', 'abu', 'abu@gmail.com', '1230546987', 2003, 'indian', 2022, 'SELF', 'A', '3bhk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text DEFAULT NULL,
  `landmark` text DEFAULT NULL,
  `block` varchar(200) NOT NULL,
  `floor` varchar(200) NOT NULL,
  `total_unit` int(11) NOT NULL,
  `parking_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `name`, `address`, `landmark`, `block`, `floor`, `total_unit`, `parking_type`) VALUES
(1, 'APJ AVENUE', 'KAJA NAGAR', 'trichy', 'A', '5', 5, 1),
(17, '', '', '', '', '', 2, 0),
(18, '', '', '', '', '', 2, 0),
(19, '', '', '', '', '', 2, 0),
(20, '', '', '', '', '', 2, 0),
(21, '', '', '', '', '', 4, 0),
(22, '', '', '', '', '', 4, 0),
(23, '', '', '', '', '', 4, 0),
(24, '', '', '', '', '', 0, 0),
(25, '', '', '', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `apartment_details`
--

CREATE TABLE `apartment_details` (
  `id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL,
  `blocks` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `floor` varchar(200) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartment_details`
--

INSERT INTO `apartment_details` (`id`, `apartment_id`, `blocks`, `unit`, `type`, `floor`, `description`) VALUES
(1, 1, 'A', 'A1', '1bhk', '1', 'fully furnished'),
(2, 1, 'A', 'A2', '1bhk', '1', 'fully furnished'),
(3, 1, 'A', 'A3', '1bhk', '2', 'fully furnished'),
(4, 1, 'A', 'A4', '2bhk', '2', 'fully furnished'),
(5, 1, 'A', 'A5', '2bhk', '3', 'fully furnished'),
(6, 2, 'A', 'A6', '2bhk', '3', 'fully furnished'),
(7, 3, 'A', 'A7', '3bhk', '3', 'fully furnished'),
(11, 13, 'A', 'A8', '3bhk', '3', 'fully furnished'),
(12, 13, 'A', 'A9', '3bhk', '4', 'fully furnished'),
(13, 13, 'A', 'A10', '3bhk', '4', 'fully furnished');

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE `resident_details` (
  `id` int(11) NOT NULL,
  `blocks` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `date_of_residency` int(11) NOT NULL,
  `year_of_agreement` int(11) NOT NULL,
  `total_elders` int(11) NOT NULL,
  `total_childrens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`id`, `blocks`, `unit`, `type`, `purpose`, `owner_name`, `first_name`, `last_name`, `email`, `contact`, `date_of_birth`, `nationality`, `date_of_residency`, `year_of_agreement`, `total_elders`, `total_childrens`) VALUES
(9, 'A', '2', '1bhk', 'TENANT', 'Ahmed', 'Abdullah', 'M', 'abdullah@gmail.com', '7896541230', 1980, 'indian', 2001, 5, 2, 2),
(10, 'A', '3', '1bhk', 'SELF', 'syed', 'syed', 'Abuthahir', 'syed@gmail.com', '9443648516', 1985, 'indian', 2019, 6, 2, 3),
(11, 'A', '4', '2bhk', 'SELF', 'abdul', 'abdul', 'latheef', 'abdul@gmail.com', '1236547890', 1992, 'indian', 2021, 6, 2, 2),
(12, 'A', '5', '2bhk', 'TENANT', 'kather', 'Ajmeer', 'R', 'ajj@gmail.com', '1236547890', 2001, 'indian', 2020, 5, 2, 1),
(13, 'A', '6', '2bhk', 'SELF', 'Mohammed ', 'Mohammed ', 'Anifa', 'Anifa@gmail.com', '7894561200', 1990, 'indian', 2020, 5, 2, 2),
(14, 'A', '7', '3bhk', 'SELF', 'abu', 'abu', 'abu', 'abu@gmail.com', '1230546987', 2003, 'indian', 2022, 6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vacate_details`
--

CREATE TABLE `vacate_details` (
  `id` int(11) NOT NULL,
  `block` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `date_of_residency` int(11) NOT NULL,
  `year_of_agreement` int(11) NOT NULL,
  `total_elders` int(11) NOT NULL,
  `total_childrens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacate_details`
--

INSERT INTO `vacate_details` (`id`, `block`, `unit`, `owner_name`, `first_name`, `last_name`, `email`, `contact_number`, `date_of_birth`, `nationality`, `date_of_residency`, `year_of_agreement`, `total_elders`, `total_childrens`) VALUES
(3, 'A', '8', 'Ahmed', 'Ahmed', 'Sithiq', 'sithiq@gmail.com', '8610231689', 2001, 'indian', 2021, 5, 2, 2),
(4, '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addowner_details`
--
ALTER TABLE `addowner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apartment_details`
--
ALTER TABLE `apartment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacate_details`
--
ALTER TABLE `vacate_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addowner_details`
--
ALTER TABLE `addowner_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `apartment_details`
--
ALTER TABLE `apartment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `resident_details`
--
ALTER TABLE `resident_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vacate_details`
--
ALTER TABLE `vacate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
