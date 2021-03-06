-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 12:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_table`
--

CREATE TABLE `instructor_table` (
  `instructor_id` int(8) NOT NULL,
  `aunid` varchar(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_table`
--

INSERT INTO `instructor_table` (`instructor_id`, `aunid`, `fullname`, `email`, `username`, `password`) VALUES
(1, 'P78945', 'Emmanuel Ukpe', 'emmanuel.ukpe@aun.edu.ng', 'Emmanuel Ukpe', '963258'),
(3, 'P78945', 'Evgeny Arkhipov', 'evgeny@aun.edu.ng', 'Evgeny Arkhipov', 'evgeny'),
(4, 'p1254', 'Augustine Nsang', 'gus@aun.edu.ng', 'Augustine Nsang', 'badmangus');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `std_roll_no` int(8) NOT NULL,
  `aunid` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL,
  `barcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`std_roll_no`, `aunid`, `fullname`, `email`, `username`, `password`, `barcode`) VALUES
(2, 'A00018619', 'Kingsley Anamelechi', 'kingsley.anamelechi@aun.edu.ng', 'Kingsley Anamelechi', '852147', ''),
(3, 'A00016746', 'Akim John', 'akim.john@aun.edu.ng', 'Akim John', 'akimjay', '64761001U'),
(4, 'A00016550', 'Abdulmuminu Modu', 'abdulmuminu.modu@aun.edu.ng', 'Abdulmuminu Modu', 'black097', '05561000V');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE `subject_table` (
  `subject_no` int(8) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `teacher_name` varchar(25) NOT NULL,
  `semester` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`subject_no`, `subject_name`, `teacher_name`, `semester`) VALUES
(1, 'CIE106', 'Emmanuel Ukpe', '1st'),
(2, 'CSC102', 'Alexi Vidiskev', '3rd'),
(3, 'INF201', 'Emmanuel Ukpe', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attID` int(11) NOT NULL,
  `StudentRollNumber` varchar(11) NOT NULL,
  `SubjectId` varchar(11) NOT NULL,
  `attendance` varchar(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attID`, `StudentRollNumber`, `SubjectId`, `attendance`, `date`) VALUES
(10, 'A00018619', 'CIE106', 'A', '2017-04-25 21:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'clinic', '789456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor_table`
--
ALTER TABLE `instructor_table`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`std_roll_no`);

--
-- Indexes for table `subject_table`
--
ALTER TABLE `subject_table`
  ADD PRIMARY KEY (`subject_no`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructor_table`
--
ALTER TABLE `instructor_table`
  MODIFY `instructor_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `std_roll_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subject_table`
--
ALTER TABLE `subject_table`
  MODIFY `subject_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
