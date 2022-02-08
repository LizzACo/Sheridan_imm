-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 07:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singhwa_imm2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameId` int(11) NOT NULL,
  `gameName` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `ESRB` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameId`, `gameName`, `rating`, `ESRB`) VALUES
(1, 'Starcraft2 ', 4, 'T'),
(2, 'Zelda64', 5, 'E'),
(3, 'Metal Gear Solid ', 4, 'M'),
(4, 'Spongebob Returns', 1, 'E10+');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personId`, `firstName`, `lastName`, `dob`) VALUES
(2, 'Jim', 'Raynor', '2021-09-03'),
(4, 'Uncle', 'Phil', '2021-09-16'),
(7, 'June', 'Cash', '2021-10-03'),
(12, 'qqqqq', 'wwwww', '2000-12-23'),
(18, 'iggle piggle', 'wiggle', '2000-12-23'),
(20, 'wizzles', 'Singh', '2000-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `person-game`
--

CREATE TABLE `person-game` (
  `personId` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `lastPlayed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person-game`
--

INSERT INTO `person-game` (`personId`, `gameId`, `score`, `lastPlayed`) VALUES
(1, 1, 500, '2021-09-20'),
(1, 2, 900, '2021-09-20'),
(2, 1, 501, '2021-09-20'),
(2, 2, 45661, '2021-09-20'),
(4, 3, 9001, '2021-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameId`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
