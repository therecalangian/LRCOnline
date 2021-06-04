-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2021 at 03:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrc_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin1', 'admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda'),
(2, 'mmmaramba', 'mmmaramba@up.edu.ph', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'pol', 'pol@gmail.com', '7c8843a8c304bb888a8e7770356b0ed5'),
(4, 'admin', 'mfcalangian@up.edu.ph', 'e00cf25ad42683b3df678c61f42c6bda');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `latestEvent` varchar(255) NOT NULL,
  `eventTitle` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `latestEvent`, `eventTitle`, `caption`) VALUES
(9, '1621776197_IMG_4124.JPG', 'Online Tutorial Sessions', 'For inquiries and appointments, email your request at upm-lrc@up.edu.ph'),
(12, '1621776799_IMG_4126.JPG', 'UPM LRC Canvas', 'Start the semester with canvas'),
(15, '1621820883_x.png', 'uno pls', 'tnx po');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year_level` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `date_appoint` date NOT NULL,
  `time_appoint` time NOT NULL,
  `course` varchar(100) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `subject`, `name`, `year_level`, `email`, `mobile_number`, `date_appoint`, `time_appoint`, `course`, `topic`, `status`) VALUES
(1, 'Math 83', 'Marybeth Kristine Domingo', 3, 'mbethkris@up.edu.ph', '906275504', '2021-05-21', '10:42:00', 'BS Computer Science', 'Elementary Calculus', 'pending'),
(2, 'Math 101', 'Juj All P. Denop', 3, 'juj@gmail.com', '906275502', '2021-05-26', '15:48:00', 'BS Biochemistry', 'Elementary Statistics', 'done'),
(3, 'CMSC 11', 'Paul Llanes', 3, 'plllanes@up.edu.ph', '163992742', '2021-05-17', '23:28:17', 'BS Computer Science', 'linked lists, binary search trees, avl trees, scheduling algorithm', 'done'),
(4, 'CMSC 55', 'Ma. Althea Florencia Magcamit Maramba', 3, 'mmmaramba@up.edu.ph', '09163992742', '2021-05-24', '11:11:00', 'BS Computer Science', 'graphs', 'done'),
(5, 'PI 100', 'Maria Theresa F. Calangian', 4, 'mfcalangian@up.edu.ph', '09123456789', '2021-06-02', '11:16:00', 'BS Biochemistry', 'Jose Rizal, Apolinario Mabini', 'done'),
(6, 'CMSC 161', 'Reina Demillo', 3, 'rdemillo@up.edu.ph', '09123', '2021-05-25', '13:10:00', 'BS Computer Science', 'computer graphics, aliasing, clipping', 'pending'),
(7, 'CMSC 55', 'Justin Allen Denopol', 3, 'jpdenopol@up.edu.ph', '09123456789', '2021-05-28', '10:00:00', 'BS Computer Science', 'graph theory', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject`) VALUES
('CMSC 55'),
('CMSC 121'),
('Sci 10'),
('CMSC 165'),
('CMSC 123'),
('HI 193'),
('CMSC 161'),
('HI 191'),
('MATH 122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
