-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 02:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aEmail` char(40) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `wcan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `justtry`
--

CREATE TABLE `justtry` (
  `id` int(11) NOT NULL,
  `body` varchar(500) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likedislike`
--

CREATE TABLE `likedislike` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ofrom` varchar(500) NOT NULL,
  `olike` int(11) NOT NULL,
  `odislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ocomment`
--

CREATE TABLE `ocomment` (
  `ID` int(11) NOT NULL,
  `kfrom` varchar(50) NOT NULL,
  `ToName` varchar(100) NOT NULL,
  `FromName` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ogroup`
--

CREATE TABLE `ogroup` (
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ophoto`
--

CREATE TABLE `ophoto` (
  `ID` double NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` longtext NOT NULL,
  `pdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oshout`
--

CREATE TABLE `oshout` (
  `id` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `shout` longtext NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `ouniq` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oshoutbox`
--

CREATE TABLE `oshoutbox` (
  `Id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `Time` varchar(500) NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Full_name` varchar(30) NOT NULL,
  `Nick_name` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Birthday` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `mphoto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Full_name`, `Nick_name`, `Gender`, `Email`, `Phone`, `Birthday`, `Password`, `mphoto`) VALUES
('parvez', 'kudus', 'male', 'parvez@gmail.com', '01829372012', '2017-04-01', '123456789', 'abcd/2a70d5802a.jpg'),
('Moniruzzaman', 'shadhin', 'male', 'shadhinemail@gmail.com', '01672708329', '1990-12-16', '987654321', 'abcd/0db79ef79f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aEmail`);

--
-- Indexes for table `justtry`
--
ALTER TABLE `justtry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ocomment`
--
ALTER TABLE `ocomment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ogroup`
--
ALTER TABLE `ogroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ophoto`
--
ALTER TABLE `ophoto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oshout`
--
ALTER TABLE `oshout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oshoutbox`
--
ALTER TABLE `oshoutbox`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `justtry`
--
ALTER TABLE `justtry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `likedislike`
--
ALTER TABLE `likedislike`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `ocomment`
--
ALTER TABLE `ocomment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `ogroup`
--
ALTER TABLE `ogroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ophoto`
--
ALTER TABLE `ophoto`
  MODIFY `ID` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `oshout`
--
ALTER TABLE `oshout`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `oshoutbox`
--
ALTER TABLE `oshoutbox`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
