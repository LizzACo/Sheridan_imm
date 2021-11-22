-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 04, 2021 at 11:12 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhaowenx_immnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `img` varchar(255) NOT NULL,
  `articleId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `preview` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `feature` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`img`, `articleId`, `title`, `author`, `preview`, `link`, `feature`, `likes`) VALUES
('img/00.png', 1, 'Facebook renames itself Meta amid controversy', 'Queenie Wong', 'The social network wants to be known as a metaverse company.', 'articles/article-1.php', 0, 3),
('img/01.png', 2, 'Airbnb adds safety support in 11 new languages', 'Andrew Blok', 'The vacation rental company\'s Urgent Support Line was previously available only to people who listed English as their primary language.', 'articles/article-2.php', 0, 0),
('img/02.png', 3, 'Pikmin Bloom: Why Pokémon Go creators are working with Nintendo again', 'Steffan Powell and Vikki Blake', 'What do you get if you merge the augmented reality (AR) technology of Pokémon Go and the creativity of Mario creator, Shigeru Miyamoto?What do you get if you merge the augmented reality (AR) technology of Pokémon Go and the creativity of Mario creator, Shigeru Miyamoto?', 'articles/article-3.php', 0, 1),
('img/03.png', 4, 'Start-up launches £495,000 hoverbike in Japan', 'Anonymity', 'The vehicle is available for pre-order now in Japan', 'articles/article-4.php', 0, 0),
('img/05.png', 5, 'A Hard-Hitting Investigative Report Into Amazon Shows That Workers’ Needs Were Neglected In Favor Of Getting Goods Delivered Quickly', 'Jack Kelly', 'A New York Times investigative report delved into allegations that Amazon has been systematically shortchanging workers on their paychecks.', 'articles/article-5.php', 1, 2),
('img/04.png', 6, 'These 10 job positions will be hiring like crazy', 'Annie Nova', 'Everyone wants to hire for these 10 jobs — but not enough people are applying', 'articles/article-6.php', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `industry` int(1) NOT NULL,
  `technical` int(1) NOT NULL,
  `career` int(1) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `firstName`, `lastName`, `email`, `industry`, `technical`, `career`, `role`) VALUES
(1, 'betaTester', 'A', 'tester@aaa.com', 0, 0, 0, ''),
(2, 'beta Tester', 'B', 'testing22@aaa.com', 0, 0, 0, ''),
(3, 'RandomsomeOne', 'R', 'random@aaa.com', 0, 0, 0, 'contributor'),
(4, 'AnothersomeOne', 'A', 'Another@aaa.com', 0, 0, 0, 'writer'),
(7, 'LastsomeOne', 'L', 'Lastone@aaa.com', 0, 0, 0, 'contributor'),
(8, 'Finalperson', 'F', 'Finalone@aaa.com', 0, 0, 0, 'contributor'),
(10, 'jojo', 'jostar', 'jojo@aaa.com', 0, 1, 0, 'contributor');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `liked` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`liked`, `userId`, `articleId`) VALUES
(0, 2, 2),
(1, 2, 1),
(1, 2, 3),
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `admin`) VALUES
(1, 'administrator', 'thisIsAdministrator', 1),
(2, 'betaTester', 'testingAAA', 0),
(3, 'betaTesterB', 'randomTyping', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
