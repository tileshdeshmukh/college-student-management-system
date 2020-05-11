-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 08:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `year` text NOT NULL,
  `work_type` text NOT NULL,
  `team` text NOT NULL,
  `detail` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `title`, `location`, `year`, `work_type`, `team`, `detail`, `name`, `sid`) VALUES
(1, 'NPTl', 'dhule', '2nd Year', '', '', 'werrsrt', 'modi_poojan', 645654546),
(2, 'social', 'dhule', '2nd Year', 'work', 'team', 'was established in 2016, with a vision of changing the narrative around leadership and management in the social sector by facilitating the creation of an entire ecosystem for Development Management. Working closely with leading social sector leaders, academicians and researchers, we have made significant progress towards creating and curating a Body of Knowledge for Development Management along with developing leadership talent for the social sector through our 1 Year Post Graduate Programme and Continuing Education Programmes.', 'modi_poojan', 645654546),
(3, 'local', 'dhule', '2nd Year', 'work', 'team', 'was established in 2016, with a vision of changing the narrative around leadership and management in the social sector by facilitating the creation of an entire ecosystem for Development Management. Working closely with leading social sector leaders, academicians and researchers, we have made significant progress towards creating and curating a Body of Knowledge for Development Management along with developing leadership talent for the social sector through our 1 Year Post Graduate Programme and Continuing Education Programmes.', 'modi_poojan', 645654546);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `cid` text NOT NULL,
  `status` text NOT NULL,
  `path` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `sid` int(40) NOT NULL,
  `email` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cname`, `sub_name`, `cid`, `status`, `path`, `name`, `sid`, `email`, `file`) VALUES
(14, 'NPTl', '', '56466', 'Runing', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'modi_poojan', 645654546, '', ''),
(18, 'NPTl', 'Networking', '1478963', 'Runing', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'modi_poojan', 645654546, 'dtilesh@gmail.com', ''),
(19, 'tilesf', 'Networking', '56466', 'Completed', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'modi_poojan', 645654546, 'dtilesh@gmail.com', ''),
(20, 'help', '', '', '', '', 'modi_poojan', 645654546, 'dtilesh@gmail.com', ''),
(21, 'tilesh deshmukh', 'Networking', '1478963', 'Completed', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'modi_poojan', 645654546, 'dtilesh@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `address` text NOT NULL,
  `bdate` date NOT NULL,
  `dept` varchar(40) NOT NULL,
  `year` text NOT NULL,
  `sid` int(50) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `number`, `address`, `bdate`, `dept`, `year`, `sid`, `email`, `pass`, `img`) VALUES
(1, 'modi_poojan', 6546452, ' sfsdg    dg d', '2020-05-13', 'Computer', '2nd Year', 645654546, 'dtilesh@gmail.com', '123456', ''),
(9, 'tilesh deshmukh', 2147483647, 'bbjs n jsdsd bh ', '2019-09-30', 'Computer', '1st Year', 22222223, 't@gmail.com', '1722', ''),
(10, 'siddhu bhadak', 2147483647, 'bbjhbdubsd sdjshd ', '2016-09-02', 'Computer', '3rd Year', 25522542, 'siddheshwarbhadak25@gmail.com', '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
