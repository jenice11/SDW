-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 11:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studid` int(11) NOT NULL,
  `studName` varchar(250) NOT NULL,
  `studIC` varchar(255) NOT NULL,
  `studPhone` varchar(12) NOT NULL,
  `studGender` varchar(255) NOT NULL,
  `studClass` varchar(50) NOT NULL,
  `studPhoto` varchar(255) NOT NULL,
  `pFatherName` varchar(255) NOT NULL,
  `pFatherIC` varchar(255) NOT NULL,
  `pMotherName` varchar(255) NOT NULL,
  `pMotherIC` varchar(255) NOT NULL,
  `eName` varchar(255) NOT NULL,
  `eRelation` varchar(255) NOT NULL,
  `eTel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studid`, `studName`, `studIC`, `studPhone`, `studGender`, `studClass`, `studPhoto`, `pFatherName`, `pFatherIC`, `pMotherName`, `pMotherIC`, `eName`, `eRelation`, `eTel`) VALUES
(17, 'Junior Abraham', '960202032145', '0188456123', 'Male', '2 Elite', '../images/studentPicture/download (1).jpg', 'Abraham Lone', '620305061234', 'Elizabeth Lone', '651021084569', 'Monet Lone', 'Aunt', '0197455612'),
(18, 'Test Student A', '980202025698', '0128456146', 'Male', '3 Elite', '../images/studentPicture/Krzysztofg-cs-profile.png', 'Neil Armstrong', '650305065698', 'Janet Shearon', '691021081478', 'Buzz Aldrin', 'Friend', '0127433113');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
