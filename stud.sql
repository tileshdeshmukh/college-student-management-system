-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 11:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `date` date NOT NULL,
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

INSERT INTO `activity` (`id`, `title`, `location`, `date`, `year`, `work_type`, `team`, `detail`, `name`, `sid`) VALUES
(1, 'NPTl', 'dhule', '0000-00-00', '2nd Year', '', '', 'werrsrt', 'modi_poojan', 645654546),
(2, 'social', 'dhule', '0000-00-00', '2nd Year', 'work', 'team', 'was established in 2016, with a vision of changing the narrative around leadership and management in the social sector by facilitating the creation of an entire ecosystem for Development Management. Working closely with leading social sector leaders, academicians and researchers, we have made significant progress towards creating and curating a Body of Knowledge for Development Management along with developing leadership talent for the social sector through our 1 Year Post Graduate Programme and Continuing Education Programmes.', 'modi_poojan', 645654546),
(3, 'local', 'dhule', '0000-00-00', '2nd Year', 'work', 'team', 'was established in 2016, with a vision of changing the narrative around leadership and management in the social sector by facilitating the creation of an entire ecosystem for Development Management. Working closely with leading social sector leaders, academicians and researchers, we have made significant progress towards creating and curating a Body of Knowledge for Development Management along with developing leadership talent for the social sector through our 1 Year Post Graduate Programme and Continuing Education Programmes.', 'modi_poojan', 645654546),
(4, 'C-coder exam', 'SVKM Dhule', '0000-00-00', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'C-codder fnlasdkgfsdgfdsg sdfdsf gsdfgdf  gsdfgdfgsd\r\nfd gdsfgdfgdsfgdfg dfs gdf gdsf g sdg dfgdsfg sdf gds\r\nd fgdsf gsdfgdsfgdf gdfg\r\n dfgd fsdfsgdfgrtgydfhgfh fg hd dfhghdf ghfd ghdfghdfg\r\n fdghdf ghfghfghfd ghdf gh fgh df ghfgh', 'Tilesh Deshmukh', 88888888),
(5, 'Dance Copm', 'SVKM Dhule', '2019-07-10', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'asfdsv sdgsdf gdsf gfdhgg hdf hg', 'Tilesh Deshmukh', 88888888),
(6, 'c title', 'SVKM Dhule', '2020-05-01', '2nd Year', 'Persnal Work', 'tilesh harsh saurab yogesh rohit', ' cvfcg', 'Tilesh Deshmukh', 88888888),
(7, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(8, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(9, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(10, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(11, 'Dance Copm', 'SVKM Dhule', '2020-05-30', '2nd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'sdghddhfsdf', 'Tilesh Deshmukh', 88888888),
(12, 'we', 'SVKM Dhule', '2020-05-07', '3rd Year', 'Persnal Work', 'tilesh', 'awdfasfd', 'Tilesh Deshmukh', 88888888),
(13, 'C-coder exam', 'SVKM Dhule', '2020-05-21', '3rd Year', 'Team Work', 'tilesh harsh saurab yogesh rohit', 'hdfhfx  sd fh dfdfx hf', 'Tilesh Deshmukh', 645654546);

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
(21, 'tilesh deshmukh', 'Networking', '1478963', 'Completed', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'modi_poojan', 645654546, 'dtilesh@gmail.com', ''),
(22, 'TCS', 'web', '12475242', 'Runing', 'http://localhost/phpmyadmin/sql.php?server=1&db=stud&table=course&pos=0', 'Tilesh Deshmukh', 645654546, 'dtilesh@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `sid` int(60) NOT NULL,
  `stud_name` text NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `sender`, `sid`, `stud_name`, `msg`, `status`, `date`, `time`) VALUES
(11, 'mam', 645654546, 'Tilesh Deshmukh', 'wwwww', 'read', '2017-05-20', '11:06:23'),
(12, 'sa', 645654546, 'Tilesh Deshmukh', 'erw', 'read', '2017-05-20', '11:07:14'),
(13, 'mam', 332221456, 'Harsh Chaudhari', 'welcome', 'read', '2017-05-20', '11:17:02'),
(14, 'om', 645654546, 'Tilesh Deshmukh', 'dfgdfg', 'read', '2017-05-20', '11:52:32');

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
(1, 'Tilesh Deshmukh', 111111111, ' 145 vikhe nagar chitod road dhule', '2020-05-13', 'Computer', '3rd Year', 645654546, 'dtilesh@gmail.com', '123456', ''),
(9, 'tilesh deshmukh', 2147483647, 'bbjs n jsdsd bh ', '2019-09-30', 'Computer', '1st Year', 22222223, 't@gmail.com', '1722', ''),
(10, 'siddhu bhadak', 2147483647, 'bbjhbdubsd sdjshd ', '2016-09-02', 'Computer', '3rd Year', 25522542, 'siddheshwarbhadak25@gmail.com', '123456', ''),
(11, 'Harsh Chaudhari', 2147483647, ' jay hind collage dhule', '2020-02-05', 'Computer', '3rd Year', 332221456, 'h@gmail.com', '123456', '');

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
