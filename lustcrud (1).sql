-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2023 at 09:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lustcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcrud`
--

CREATE TABLE `tblcrud` (
  `ID` int NOT NULL,
  `studentID` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Yearlevel` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblcrud`
--

INSERT INTO `tblcrud` (`ID`, `studentID`, `Fullname`, `Yearlevel`, `Course`) VALUES
(11, 'MCC', 'Paul', '3rd yrs', 'bahla '),
(13, 'MCC-0366', 'Cris', '4th year', 'BSIT'),
(14, 'MCC-0377', 'Mark Jober Laudencia', '3rd yr', 'BSIT'),
(15, 'MCC-0379', 'Antonio B. Dela Cruz', '1st year', 'BSHM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcrud`
--
ALTER TABLE `tblcrud`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcrud`
--
ALTER TABLE `tblcrud`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
