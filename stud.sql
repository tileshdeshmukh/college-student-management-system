-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 11:57 PM
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
  `marks` double NOT NULL,
  `cid` text NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL,
  `path` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `sid` int(40) NOT NULL,
  `year` text NOT NULL,
  `email` text NOT NULL,
  `file` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cname`, `sub_name`, `marks`, `cid`, `date`, `status`, `path`, `name`, `sid`, `year`, `email`, `file`, `msg`) VALUES
(14, 'NPTl', '', 75, '56466', '0000-00-00', 'Completed', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'modi_poojan', 645654546, '', '', 'IMG_20180302_144523.png', ''),
(22, 'TCS', 'web', 70, '12475242', '0000-00-00', 'Completed', 'http://localhost/phpmyadmin/sql.php?server=1&db=stud&table=course&pos=0', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', '10th Gen Intel Core S-series processors.png', ''),
(37, 'modi_poojan', 'Networking', 60, '56466', '2020-01-07', 'Completed', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', '220px-Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg', 'read'),
(41, 'Marketing', 'digital', 68, '1478963', '2016-10-10', 'Completed', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.aspewsrwerws/werwerwe/werwer', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'IMG_20180312_001742_HHT.jpg', 'read'),
(42, 'NPTl', 'Codding', 0, '56466', '2020-05-20', 'Runing', 'https://www.w3schools.com/bootstrap4/bootstrap_forms.asp', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'null', 'read'),
(49, 'Gopal Masare', 'ds', 78, '213', '2020-06-08', 'Completed', 'dasd', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'IMG_20180312_003025_606.jpg', 'read'),
(50, 'e', 'ds', 39, '213', '2020-06-24', 'Completed', 'dasd', 'Tilesh Deshmukh', 645654546, '3rd Year', 'dtilesh@gmail.com', 'null', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `c_stud`
--

CREATE TABLE `c_stud` (
  `id` int(10) NOT NULL,
  `sid` bigint(100) NOT NULL,
  `year` text NOT NULL,
  `status` text NOT NULL,
  `select_c` varchar(100) NOT NULL,
  `e_course` text NOT NULL,
  `comp` text NOT NULL,
  `link` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_stud`
--

INSERT INTO `c_stud` (`id`, `sid`, `year`, `status`, `select_c`, `e_course`, `comp`, `link`, `date`) VALUES
(9, 645654546, '3rd Year', 'ok', 'Cosera ', '', 'no', 'Search Results Featured snippet from the web noun. a written explanation or criticism or illustration that is added to a book or other textual material. a statement that expresses a personal opinion or belief or adds information. a report (often malicious) about the behavior of other people verb.    https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-certificate', '2002-06-20'),
(10, 11144455, '3rd Year', 'ok', 'Cosera ', '', 'no', '', '2002-06-20'),
(11, 645654546, '3rd Year', 'ok', 'NPTL Udemy ', '', 'yes', 'Search Results Featured snippet from the web noun. a written explanation or criticism or illustration that is added to a book or other textual material. a statement that expresses a personal opinion or belief or adds information. a report (often malicious) about the behavior of other people verb.     https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-certificate  ', '2002-06-20'),
(12, 11144455, '3rd Year', 'ok', 'NPTL Udemy ', '', 'yes', '', '2002-06-20'),
(13, 645654546, '3rd Year', 'ok', '', 'course', 'yes', 'Search Results Featured snippet from the web noun. a written explanation or criticism or illustration that is added to a book or other textual material. a statement that expresses a personal opinion or belief or adds information. a report (often malicious) about the behavior of other people verb.     https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-certificate', '2002-06-20'),
(14, 11144455, '3rd Year', 'ok', '', 'course', 'yes', 'Search Results Featured snippet from the web noun. a written explanation or criticism or illustration that is added to a book or other textual material. a statement that expresses a personal opinion or belief or adds information. a report (often malicious) about the behavior of other people verb.', '2002-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `prn` bigint(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `prn`, `name`, `email`) VALUES
(35, 111111, 'tt', 'ew@gmail.com'),
(36, 2222222, 'yyy', 'sd@gmail.com'),
(37, 333333, 'ere', 'df@gmail.com'),
(38, 44444, 'wewe', 'g@gmail.com');

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
(117, 'TXTLCL', 11144455, 'siddhu bhadak', 'welcome to tilesh side', 'unread', '2028-05-20', '01:30:46'),
(118, 'TXTLCL', 645654546, 'Tilesh Deshmukh', 'hello', 'read', '2028-05-20', '01:45:54'),
(119, 'ALERT FOR Marketing', 645654546, 'Tilesh Deshmukh', 'Pliz Completed you are runing course Marketing ', 'read', '2030-05-20', '02:55:59'),
(120, 'ALERT FOR NPTl', 645654546, 'Tilesh Deshmukh', 'Pliz Completed you are runing course NPTl ', 'read', '2030-05-20', '02:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` bigint(100) NOT NULL,
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
(1, 'Tilesh Deshmukh', 8308283380, ' dhule', '2020-05-13', 'Computer', '3rd Year', 645654546, 'dtilesh@gmail.com', '123456', 'IMG_20200402_001019.jpg'),
(13, 'Harsh Chaudhary', 2147483647, '145 nagar tittre road longh ', '2020-05-25', 'Computer', '2nd Year', 88889999, 'h@gmail.com', '112233', '220px-Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg'),
(14, 'modi_poojan', 1478963250, ' reuie suijklr ksrejbkjdf kaejhjsdf 4krhlasekfrers trierogsrkjld skgfhlfk', '2020-05-20', 'Computer', '2nd Year', 1122455, 'a@gmail.com', '112233', 'download (1).jpg'),
(15, 'siddhu bhadak', 7798188532, 'yytyt gdff sgsgstefrefd dgfhfjffg  ', '2013-10-27', 'Computer', '3rd Year', 11144455, 'siddheshwarbhadak25@gmail.com', '112233', 'soop.jpg'),
(16, 'saurabh deure', 2147483647, 'hgf sdg fdsgshsf gsdfgjdbsh bjgdsb fjgf jvgjhjh kgugliuggg  ', '2020-10-29', 'Computer', '1st Year', 4525454, 'sau@gmail.com', '112233', '220px-Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg'),
(17, 'Yogesh Gawali', 2147483647, 'ggh g  hkxjcbvkzx cvxivbx cvin fdnivfc ', '2019-11-29', 'Computer', '4th Year', 1452546, 'y@gmail.com', '112233', '220px-Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg'),
(18, 'pooja mahale', 778899445, 'b uid u fygsdfgsdiu fgsdfg dfgiusdbg fidb ', '2019-11-30', 'Computer', '4th Year', 784512369, 'p@gmail.com', '112233', '220px-Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg');

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
-- Indexes for table `c_stud`
--
ALTER TABLE `c_stud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `c_stud`
--
ALTER TABLE `c_stud`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
