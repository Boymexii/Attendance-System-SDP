-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2017 at 07:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `activated` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `activated`) VALUES
(1, 'admin', '123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `std_roll_no` int(11) NOT NULL,
  `student_name` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `Session` varchar(40) DEFAULT NULL,
  `Program` varchar(40) DEFAULT NULL,
  `Semester` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`std_roll_no`, `student_name`, `dob`, `gender`, `email`, `phone`, `address`, `Session`, `Program`, `Semester`) VALUES
(2, 'kingsley anamelechi', '1997-09-03', 'male', 'kingsley.anamelechi@aun.edu.ng', '08109243938', 'AUN', 'Year 3', 'PHD', '3rd');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE `subject_table` (
  `subject_no` int(11) NOT NULL,
  `subject_name` varchar(32) NOT NULL,
  `teacher_name` varchar(64) NOT NULL,
  `field` varchar(8) NOT NULL,
  `semester` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`subject_no`, `subject_name`, `teacher_name`, `field`, `semester`) VALUES
(6, 'C++', 'EmmanuelUpe', 'BSCS', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attID` int(11) NOT NULL,
  `StudentRollNumber` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `Attendance` varchar(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attID`, `StudentRollNumber`, `SubjectId`, `Attendance`, `Date`) VALUES
(2, 2, 1, 'P', '2017-04-18 13:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE `teacher_table` (
  `teacher_id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `degree` varchar(32) NOT NULL,
  `salary` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`teacher_id`, `first_name`, `last_name`, `dob`, `gender`, `email`, `phone`, `degree`, `salary`, `address`, `username`, `password`) VALUES
(1, 'Emmanuel', 'Upe', '1985-03-10', 'Male', 'emmanueupe@gmail.com', '08093900620', 'Bachelor', 'N230,000', 'AUN', 'EmmanuelUpe', 'emma1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `teacher_table`
--
ALTER TABLE `teacher_table`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `std_roll_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject_table`
--
ALTER TABLE `subject_table`
  MODIFY `subject_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teacher_table`
--
ALTER TABLE `teacher_table`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
