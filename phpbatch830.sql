-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2019 at 08:44 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbatch830`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE `addcategory` (
  `cid` int(11) NOT NULL,
  `catnm` varchar(20) NOT NULL,
  `caticon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`cid`, `catnm`, `caticon`) VALUES
(1, 'Vehicles', '1547435724-c.png'),
(2, 'Furniture', '1547435738-f.png'),
(3, 'Electronics', '1547435753-e.png'),
(4, 'Pets', '1547435763-pet.png'),
(6, 'Property', '1547436778-p.png');

-- --------------------------------------------------------

--
-- Table structure for table `addsubcategory`
--

CREATE TABLE `addsubcategory` (
  `subcatid` int(11) NOT NULL,
  `catnm` varchar(100) NOT NULL,
  `subcatnm` varchar(100) NOT NULL,
  `subcaticon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubcategory`
--

INSERT INTO `addsubcategory` (`subcatid`, `catnm`, `subcatnm`, `subcaticon`) VALUES
(1, 'Electronics', 'Mobiles', '1547437599-m.png'),
(2, 'Pets', 'Cats', '1547437616-cat.png'),
(3, 'Pets', 'Dogs', '1547437637-picon.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `adsid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL,
  `description` varchar(1111) NOT NULL,
  `price` varchar(11) NOT NULL,
  `adsimage` varchar(100) NOT NULL,
  `uid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`adsid`, `title`, `category`, `subcategory`, `description`, `price`, `adsimage`, `uid`) VALUES
(1, 'Want to sell pug', 'Pets', 'Dogs', 'pug at good price', '3000', '1547524207-pet.png', 'vilekh.ada@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `rno` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `phy` int(11) NOT NULL,
  `che` int(11) NOT NULL,
  `mat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`rno`, `nm`, `phy`, `che`, `mat`) VALUES
(1001001, 'vilekh', 77, 7, 77);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regid` int(11) NOT NULL,
  `nm` varchar(50) NOT NULL,
  `unm` varchar(200) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `address` varchar(1111) NOT NULL,
  `city` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `nm`, `unm`, `pass`, `address`, `city`, `gender`, `role`) VALUES
(2, 'admin pms', 'admin@gmail.com', 'admin123', 'indore mp', 'Indore', 'male', 'admin'),
(5, 'vilekh', 'vilekh11.ada@gmail.com', '111', 'www', 'Indore', 'male', 'user'),
(6, 'Dilip', 'dilip.dsp@gmail.com', '12345678', 'indore mp', 'Indore', 'male', 'user'),
(7, 'vilekh', 'adawadkarvilekh@gmail.com', '12345', 'indore mp', 'Indore', 'male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategory`
--
ALTER TABLE `addcategory`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `catnm` (`catnm`);

--
-- Indexes for table `addsubcategory`
--
ALTER TABLE `addsubcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD UNIQUE KEY `subcatnm` (`subcatnm`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`adsid`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regid`),
  ADD UNIQUE KEY `unm` (`unm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategory`
--
ALTER TABLE `addcategory`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `addsubcategory`
--
ALTER TABLE `addsubcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `adsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001002;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
