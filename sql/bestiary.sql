-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2025 at 02:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasthascard`
--

CREATE TABLE `beasthascard` (
  `id` int(11) NOT NULL,
  `beastID` int(11) NOT NULL,
  `cardID` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasthascard`
--

INSERT INTO `beasthascard` (`id`, `beastID`, `cardID`, `active`) VALUES
(1, 2, 1, 0),
(2, 2, 1, 0),
(3, 2, 1, 0),
(4, 2, 2, 0),
(5, 2, 1, 0),
(6, 2, 2, 0),
(7, 2, 2, 0),
(8, 2, 1, 0),
(9, 2, 2, 0),
(10, 2, 1, 0),
(11, 2, 2, 0),
(12, 2, 1, 0),
(13, 2, 2, 0),
(14, 2, 1, 0),
(15, 2, 1, 0),
(16, 2, 2, 0),
(17, 2, 2, 0),
(18, 2, 1, 0),
(19, 2, 2, 0),
(20, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beasthaslocation`
--

CREATE TABLE `beasthaslocation` (
  `id` int(11) NOT NULL,
  `beastID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beasts`
--

CREATE TABLE `beasts` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `location1` varchar(511) NOT NULL,
  `location2` mediumtext NOT NULL,
  `bestiaryID` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasts`
--

INSERT INTO `beasts` (`id`, `name`, `description`, `image`, `location1`, `location2`, `bestiaryID`, `active`) VALUES
(2, 'Junkyard Scrapper', 'Lives in junkyards, likes to scrap', 'Junkyard_Scrapper.png', '', 'Junkyards', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bestiary`
--

CREATE TABLE `bestiary` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestiary`
--

INSERT INTO `bestiary` (`id`, `name`, `active`) VALUES
(1, 'Renegade Run', 1),
(2, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `bestiaryID` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `type`, `color`, `description`, `bestiaryID`, `active`) VALUES
(1, 'Lunar Turret', 3, 1, 'Deals 1 phasing damage to all enemies at the end of your turn.', 1, 1),
(2, 'Echoing Aegis', 5, 1, 'Whenever you gain shields, deal 1 phasing damage to a random enemy.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sector` int(11) NOT NULL,
  `posXMin` int(11) NOT NULL,
  `posXMax` int(11) NOT NULL,
  `posY1` tinyint(1) NOT NULL,
  `posY2` tinyint(1) NOT NULL,
  `posY3` tinyint(1) NOT NULL,
  `bestiaryID` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasthascard`
--
ALTER TABLE `beasthascard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasthaslocation`
--
ALTER TABLE `beasthaslocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasts`
--
ALTER TABLE `beasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestiary`
--
ALTER TABLE `bestiary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasthascard`
--
ALTER TABLE `beasthascard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `beasthaslocation`
--
ALTER TABLE `beasthaslocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beasts`
--
ALTER TABLE `beasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bestiary`
--
ALTER TABLE `bestiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
