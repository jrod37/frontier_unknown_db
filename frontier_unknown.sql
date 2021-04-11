-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 07:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontier_unknown`
--

-- --------------------------------------------------------

--
-- Table structure for table `ammo`
--

CREATE TABLE `ammo` (
  `ammo_id` int(4) NOT NULL,
  `damage_type` varchar(16) NOT NULL,
  `fire_rate_mod` int(4) NOT NULL,
  `damage_mod` int(4) NOT NULL,
  `speed_mod` int(4) NOT NULL,
  `range_mod` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `defense`
--

CREATE TABLE `defense` (
  `defense_id` int(4) NOT NULL,
  `slot_size` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fire_type`
--

CREATE TABLE `fire_type` (
  `ammo_id` int(4) NOT NULL,
  `fire_type` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hardpoints`
--

CREATE TABLE `hardpoints` (
  `hardpoint_id` int(11) NOT NULL,
  `slot_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `model_id` int(2) NOT NULL,
  `shield_type` varchar(16) NOT NULL,
  `num_hardpoints` int(2) NOT NULL,
  `hardpoint_capacity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`model_id`, `shield_type`, `num_hardpoints`, `hardpoint_capacity`) VALUES
(1337, 'Strong', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `shoots`
--

CREATE TABLE `shoots` (
  `weapon_id` int(4) NOT NULL,
  `ammo_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `utility_id` int(4) NOT NULL,
  `slot_size` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `weapon`
--

CREATE TABLE `weapon` (
  `weapon_id` int(11) NOT NULL,
  `weapon_name` varchar(16) NOT NULL,
  `speed` int(11) NOT NULL,
  `fire_rate` int(11) NOT NULL,
  `slot_size` int(11) NOT NULL,
  `weapon_range` int(11) NOT NULL,
  `damage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
