-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 05:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civilprobphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(20) NOT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `msg` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fdate` varchar(10) DEFAULT NULL,
  `pid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `msg`, `username`, `fdate`, `pid`) VALUES
(1, 'Problem Solved', '111111111111', '13-04-21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `pid` int(5) NOT NULL,
  `ptitle` varchar(50) DEFAULT NULL,
  `pdesc` varchar(200) DEFAULT NULL,
  `pdate` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pplace` varchar(30) DEFAULT NULL,
  `votes` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `startdate` varchar(20) DEFAULT NULL,
  `estcompdate` varchar(20) DEFAULT NULL,
  `actcompdate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`pid`, `ptitle`, `pdesc`, `pdate`, `username`, `pplace`, `votes`, `status`, `startdate`, `estcompdate`, `actcompdate`) VALUES
(1, 'Problem 1', 'desc 1', '13-04-21', '111111111111', 'indrapuri', NULL, 'Completed', '13-04-2021', '2021-04-20', '2021-04-18'),
(2, 'Problem 2', 'klldkkf mdkd sskskkd', '13-04-21', 'admin', 'indrapuri', NULL, 'InProgress', '2021-04-15', '2021-04-22', NULL),
(3, 'problem555', 'desc555', '13-04-21', '111111111111', 'loc555', NULL, 'pending', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE `siteuser` (
  `aadharid` varchar(16) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`aadharid`, `username`, `city`, `address`, `emailid`, `contact`, `password`, `status`) VALUES
('111111111111', 'Harish Panjwani', 'Bhopal', 'Indrapuri Bhopal', 'harish123@gmail.com', '9229465037', '1234', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vid` int(5) NOT NULL,
  `pid` varchar(10) DEFAULT NULL,
  `userid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminname`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `siteuser`
--
ALTER TABLE `siteuser`
  ADD PRIMARY KEY (`aadharid`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vid` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
