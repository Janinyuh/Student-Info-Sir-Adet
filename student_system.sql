-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 05:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `sgid` int(11) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `scode` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sgrade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`sgid`, `idnumber`, `scode`, `sname`, `sgrade`) VALUES
(1, '2019100724', 'IT321', 'CAPSTONE Project and Research 1', '1.75'),
(2, '2019100724', 'FreeElec', 'Foreign Language', '2.00'),
(3, '2019100724', 'IT325', 'IT Elective 2', '1.75'),
(4, '2019100562', 'IT321', 'CAPSTONE Project and Research 1', '1.50'),
(5, '2019100722', 'IT325', 'IT Elective 2', '1.75');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `infoid` int(11) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `cyear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`infoid`, `idnumber`, `name`, `gender`, `course`, `cyear`) VALUES
(1, '2019100724', 'Julianne Marie Bajao', 'Female', 'Bachelor of Science in Information Technology', '3rd Year'),
(2, '2019100722', 'Rhegie Joy Ayag', 'Female', 'Bachelor of Science in Information Technology', '3rd Year'),
(3, '2019100562', 'Janina Briones', 'Female', 'Bachelor of Science in Information Technology', '3rd Year');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `access`) VALUES
('2019100562', '123', 'User'),
('2019100722', '123', 'User'),
('2019100724', '123', 'User'),
('admin', 'admin', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`sgid`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`infoid`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `sgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `infoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`username`);

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
