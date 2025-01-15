-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 05:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation_info`
--

CREATE TABLE `allocation_info` (
  `allocation_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `vaccine_name` varchar(100) NOT NULL,
  `vaccine_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocation_info`
--

INSERT INTO `allocation_info` (`allocation_id`, `hospital_name`, `vaccine_name`, `vaccine_qty`) VALUES
(1, 'DOW Hospital', 'Polio', 70),
(2, 'JINNAH Hospital', 'Diarrhoea', 90),
(3, 'JINNAH Hospital', 'Diarrhoea', 56),
(4, 'DOW Hospital', 'Pneumonia', 67),
(5, 'DOW Hospital', 'Polio', 56),
(6, 'DOW Hospital', 'Polio', 10),
(7, 'Maaz medical service', 'Diarrhoea', 20),
(8, 'Maaz medical service', 'Covid 19', 20);

--
-- Triggers `allocation_info`
--
DELIMITER $$
CREATE TRIGGER `vaccination_remaining_qty` AFTER INSERT ON `allocation_info` FOR EACH ROW BEGIN
	UPDATE `vaccination_info` SET `vaccination_qty` = `vaccination_qty` -
    NEW.`vaccine_qty` WHERE `vaccination_info`.`vaccination_name` = NEW.`vaccine_name`;
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `vaccine_additional_qty` AFTER INSERT ON `allocation_info` FOR EACH ROW BEGIN
	UPDATE `vaccination_info` SET `vaccination_qty` = `vaccination_qty` +
    NEW.`vaccine_qty` WHERE `vaccination_info`.`vaccination_name` = NEW.`vaccine_name`;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hospital info`
--

CREATE TABLE `hospital info` (
  `Hospital_Id` int(11) NOT NULL,
  `Hospital_Name` varchar(50) NOT NULL,
  `Hospital_Email` varchar(50) NOT NULL,
  `Hospital_Password` int(11) NOT NULL,
  `Hospital_P_NO` int(11) NOT NULL,
  `Hospital_Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital info`
--

INSERT INTO `hospital info` (`Hospital_Id`, `Hospital_Name`, `Hospital_Email`, `Hospital_Password`, `Hospital_P_NO`, `Hospital_Address`) VALUES
(1, 'DOW Hospital', 'patientcare@duhs.edu.pk', 0, 2138771111, 'W4WQ+3C7 Trauma Center at Dow University of Health Sciences, Gulzar-e-Hijri Scheme 33, Karachi, Kara'),
(6, 'JINNAH Hospital', 'jinnah123@gmail.com', 354655, 2147483647, 'JINNAH ROAD,Karachi'),
(7, 'Maaz medical service', 'maaz@gmail.com', 123, 2147483647, 'malir karachi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `child_name` varchar(200) NOT NULL,
  `child_dob` date NOT NULL,
  `hospitalname` varchar(200) NOT NULL,
  `vaccine name` varchar(200) NOT NULL,
  `vaccine time` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `child_name`, `child_dob`, `hospitalname`, `vaccine name`, `vaccine time`, `status`) VALUES
(1, 'ali', '2002-02-12', 'DOW Hospital', 'Polio', '01:00', 'approved'),
(2, 'maaz', '2002-12-02', 'JINNAH Hospital', 'Diarrhoea', '16:51', 'reject'),
(3, 'maaz', '2002-12-02', 'DOW Hospital', 'Polio', '16:52', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `user_opt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `user_name`, `user_email`, `user_password`, `user_image`, `user_opt`) VALUES
(1, 'hina', 'hina123@gmail.com', '35454564', 'user.jpg', '0'),
(2, 'ali', 'ali@gmail.com', '233dwe', 'user.jpg', 'is_parent'),
(3, 'uzma', 'uzma@gmail.com', '1234', 'user.jpg', 'is_hospital'),
(4, 'ali', 'ali@gmail.com', '1234', 'user.jpg', 'is_parent'),
(5, 'sana', 'sana@gmail.com', '1234', 'user.jpg', 'is_parent');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_info`
--

CREATE TABLE `vaccination_info` (
  `vaccination_id` int(11) NOT NULL,
  `vaccination_name` varchar(100) NOT NULL,
  `vaccination_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination_info`
--

INSERT INTO `vaccination_info` (`vaccination_id`, `vaccination_name`, `vaccination_qty`) VALUES
(1, 'Polio', 30),
(2, 'Diarrhoea', 154),
(3, 'Pneumonia', 330),
(5, 'Covid 19', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation_info`
--
ALTER TABLE `allocation_info`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `hospital info`
--
ALTER TABLE `hospital info`
  ADD PRIMARY KEY (`Hospital_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vaccination_info`
--
ALTER TABLE `vaccination_info`
  ADD PRIMARY KEY (`vaccination_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation_info`
--
ALTER TABLE `allocation_info`
  MODIFY `allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospital info`
--
ALTER TABLE `hospital info`
  MODIFY `Hospital_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccination_info`
--
ALTER TABLE `vaccination_info`
  MODIFY `vaccination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
