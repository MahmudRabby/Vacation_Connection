-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 09:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `serialno.` int(3) NOT NULL,
  `place` varchar(20) NOT NULL,
  `adult` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `arrival` date NOT NULL,
  `leaving` date NOT NULL,
  `child` varchar(3) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`serialno.`, `place`, `adult`, `email`, `phone`, `arrival`, `leaving`, `child`, `status`) VALUES
(23, 'Shundarban', '1', 'mhrabby215@gmail.com', '1', '2021-09-13', '2021-09-09', '1', NULL),
(24, 'Tokyo', '', '', '', '0000-00-00', '0000-00-00', '', NULL),
(25, 'Sajek Valley', '', '', '', '0000-00-00', '0000-00-00', '', NULL),
(26, 'Coxs Bazar', '', '', '', '0000-00-00', '0000-00-00', '', NULL),
(27, '', '1', 'jokerpeople@gmail.com', '01681730211', '2021-09-06', '2021-09-30', '1', NULL),
(28, '', '3', 'mhrabby215@gmail.com', '01681730215', '2021-09-09', '2021-09-09', '2', NULL),
(29, 'switzerland', '', '', '', '0000-00-00', '0000-00-00', '', NULL),
(30, 'Shundarban', '', '', '', '0000-00-00', '0000-00-00', '', NULL),
(31, 'DuBai', '2', '', '', '2021-09-11', '2021-09-11', '1', NULL),
(32, 'Maldiv', '2', 'sadia@gmail.com', '12345', '2021-09-12', '2021-09-18', '', 'Reject'),
(33, 'DuBai', '4', 'mhrabby215@gmail.com', '01681730215', '2021-09-18', '2021-09-25', '', 'Applied'),
(34, 'Paris', '5', 'mhrabby215@gmail.com', '01681730215', '2021-09-19', '2021-09-24', '', 'Applied'),
(35, 'Tokyo', '3', 'sadia@gmail.com', '01681730215', '2021-09-09', '2021-09-17', '', 'Applied'),
(36, 'Paris', '2', 'sadia@gmail.com', '01681730215', '2021-09-10', '2021-09-16', '', 'Applied'),
(37, 'Sajek Valley', '4', 'sadia@gmail.com', '01681730215', '2021-09-13', '2021-09-15', '', 'Applied'),
(38, 'switzerland', '3', 'ovi@naim.com', '01681730215', '2021-09-06', '2021-09-27', '', 'Applied'),
(39, 'Shundarban', '5', 'ovi@naim.com', '01681730215', '2021-09-25', '2021-09-28', '3', 'Reject'),
(40, 'Maldiv', '2', 'samia@raka.com', '01681730215', '2021-09-30', '2021-09-30', '2', 'Reject'),
(41, 'Coxs Bazar', '3', 'samia@raka.com', '01681730215', '2021-09-25', '2021-09-25', '3', 'Accept'),
(42, 'Paris', '', '', '', '0000-00-00', '0000-00-00', '', 'Reject'),
(43, 'switzerland', '2', 'naim@ovi.com', '1231223', '2021-09-12', '2021-09-19', '', 'Accept'),
(44, 'Coxs Bazar', '2', 'mhrabby215@gmail.com', '01681730215', '2021-09-20', '2021-09-29', '2', 'Accept'),
(45, 'Shundarban', '4', 'naim@ovi.com', '123', '2021-09-21', '2021-09-23', '', 'Accept'),
(46, 'Paris', '2', 'naim@ovi.com', '01987271371', '2021-09-13', '2021-09-13', '', 'Reject'),
(47, 'Coxs Bazar', '', '', '', '0000-00-00', '0000-00-00', '', 'Applied'),
(48, 'switzerland', '2', 'sadia@gmail.com', '01681730215', '2021-09-14', '2021-09-20', '', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `serialno.` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`serialno.`, `name`, `email`, `number`, `subject`, `message`, `date`) VALUES
(1, 'Rabby', 'rabby@.com', '12364654', 'testing', 'i m testing :P', '2021-08-10 19:25:43'),
(2, 'alma', 'alma@email.com', '12364654', 'testing2', 'This test 2', '2021-08-10 21:38:48'),
(3, 'Online', 'online@.com', '32146', 'online passing', 'Hi i am online', '2021-08-10 22:21:00'),
(4, 'Ovi', 'ovi@.com', '654654654', 'online passing', 'Ovi passing message through online', '2021-08-11 01:35:31'),
(5, 'MD. MAHMUD HASSAN RABBY', 'Mahmudul@.com', '87646546', 'Mid', 'This MId Presentation', '2021-08-11 09:07:57'),
(6, 'Mukit', 'mukit@email.com', '54654646', 'test', 'test test', '2021-08-18 15:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `serialno.` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `serialno.` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`serialno.`, `name`, `phone_no`, `gender`, `email`, `password`, `date`) VALUES
(6, 'Mahmud Hassan', '01254654', 'male', 'mhrabby215@gmail.com', '1234', '2021-09-08'),
(10, 'Sadia Alma', '01254654', 'female', 'sadia@gmail.com', '123', '2021-09-09'),
(11, 'Admin', '123456789', 'not prefer', 'admin@admin.com', '1234', '2021-09-10'),
(13, 'Naim ovi', '65465464', 'male', 'naim@ovi.com', '1234', '2021-09-11'),
(14, 'Sadita Ahmed', '1345', 'female', 'sadita@ahmed.com', '123', '2021-09-11'),
(17, 'Samia Raka', '01254654', 'female', 'samia@raka.com', '123', '2021-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`serialno.`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`serialno.`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`serialno.`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`serialno.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `serialno.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serialno.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `serialno.` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `serialno.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
