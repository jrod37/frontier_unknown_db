-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 06:41 AM
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
  `ammo_name` varchar(16) DEFAULT NULL,
  `damage_type` varchar(16) NOT NULL,
  `fire_rate_mod` int(4) NOT NULL,
  `damage_mod` int(4) NOT NULL,
  `speed_mod` int(4) NOT NULL,
  `range_mod` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ammo`
--

INSERT INTO `ammo` (`ammo_id`, `ammo_name`, `damage_type`, `fire_rate_mod`, `damage_mod`, `speed_mod`, `range_mod`) VALUES
(1156, 'plasma_cell', 'energy', 20, 15, 100, 200),
(6549, 'energy_canister', 'energy', 0, 150, 400, 1500),
(4462, 'charge_cell', 'energy', 10, 10, 200, 500),
(1301, 'piercer_shell', 'projectile', 300, 50, 50, 0),
(5153, 'black_flak', 'projectile', 0, 75, 0, 300),
(9764, 'dixie', 'projectile', 30, 5, 50, 500),
(1546, 'daemon', 'projectile', 0, 0, 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `defense`
--

CREATE TABLE `defense` (
  `defense_id` int(4) NOT NULL,
  `defense_name` varchar(16) DEFAULT NULL,
  `slot_size` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `defense`
--

INSERT INTO `defense` (`defense_id`, `defense_name`, `slot_size`) VALUES
(6463, 'shield_generator', 50),
(1302, 'flak_turret', 75),
(7797, 'repair_nanites', 35),
(8888, 'mini_emp', 40),
(6153, 'electro-plating', 60),
(3114, 'shield_overdrive', 50),
(5769, 'cargo_dump', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fire_type`
--

CREATE TABLE `fire_type` (
  `ammo_id` int(4) NOT NULL,
  `fire_type` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fire_type`
--

INSERT INTO `fire_type` (`ammo_id`, `fire_type`) VALUES
(1156, 'machine gun'),
(6549, 'cannon'),
(4462, 'delayed_impact'),
(1301, 'machine gun'),
(5153, 'shotgun'),
(9764, 'homing'),
(1546, 'cannon');

-- --------------------------------------------------------

--
-- Table structure for table `hardpoints`
--

CREATE TABLE `hardpoints` (
  `hardpoint_id` int(11) NOT NULL,
  `slot_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hardpoints`
--

INSERT INTO `hardpoints` (`hardpoint_id`, `slot_size`) VALUES
(156, 10),
(556, 15),
(747, 25),
(910, 75),
(300, 150),
(441, 200),
(500, 275);

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
(1337, 'Strong', 4, 200),
(4646, 'strong', 7, 150),
(1013, 'medium', 2, 50),
(1014, 'medium', 4, 75),
(9949, 'strong', 6, 400),
(2437, 'weak', 1, 25),
(2455, 'weak', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `shoots`
--

CREATE TABLE `shoots` (
  `weapon_id` int(4) NOT NULL,
  `ammo_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoots`
--

INSERT INTO `shoots` (`weapon_id`, `ammo_id`) VALUES
(1001, 1156),
(1002, 6549),
(1003, 4462),
(1004, 1301),
(1005, 5153),
(1006, 9764),
(1007, 1546);

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `utility_id` int(4) NOT NULL,
  `utility_name` varchar(16) DEFAULT NULL,
  `slot_size` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utility`
--

INSERT INTO `utility` (`utility_id`, `utility_name`, `slot_size`) VALUES
(1, 'cloak', 10),
(2, 'lock-on_kamikaze', 20),
(3, 'jump_drive', 50),
(4, 'cameras', 15);

-- --------------------------------------------------------

--
-- Table structure for table `weapon`
--

CREATE TABLE `weapon` (
  `weapon_id` int(11) NOT NULL,
  `weapon_name` varchar(16) NOT NULL,
  `weapon_type` varchar(16) DEFAULT NULL,
  `speed` int(11) NOT NULL,
  `fire_rate` int(11) NOT NULL,
  `slot_size` int(11) NOT NULL,
  `weapon_range` int(11) NOT NULL,
  `damage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weapon`
--

INSERT INTO `weapon` (`weapon_id`, `weapon_name`, `weapon_type`, `speed`, `fire_rate`, `slot_size`, `weapon_range`, `damage`) VALUES
(1001, 'plasma_turret', 'energy', 100, 180, 10, 15000, 50),
(1002, 'beam_cannon', 'energy', 2000, 15, 35, 500, 200),
(1003, 'emp', 'energy', 500, 1, 15, 1000, 100),
(1004, 'machine_gun', 'projectile', 800, 600, 35, 1100, 20),
(1005, 'flak_turret', 'projectile', 700, 120, 20, 2000, 20),
(1006, 'missile_launcher', 'projectile', 1200, 60, 50, 3000, 80),
(1007, 'gauss_cannon', 'projectile', 2200, 6, 75, 6000, 200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
