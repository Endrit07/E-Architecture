-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 01:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architecture`
--

-- --------------------------------------------------------

--
-- Table structure for table `arkitekti`
--

CREATE TABLE `arkitekti` (
  `arkitekti_id` int(11) NOT NULL,
  `emri` varchar(50) DEFAULT NULL,
  `mbiemri` varchar(50) DEFAULT NULL,
  `numritel` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arkitekti`
--

INSERT INTO `arkitekti` (`arkitekti_id`, `emri`, `mbiemri`, `numritel`, `email`) VALUES
(1, 'Endrit', 'Duraku', '+38344966342', 'endritduraku82@gmail.com'),
(2, 'Perparim', 'Rama', '+38345789234', 'perparimrama@gmail.com'),
(3, 'Olivia', 'Stefan', '+38349582345', 'oliviastefan@gmail.com'),
(4, 'Stefan', 'Antoni', '+38349342098', 'stefanantoni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `projekti`
--

CREATE TABLE `projekti` (
  `projekti_id` int(11) NOT NULL,
  `emri` varchar(100) DEFAULT NULL,
  `lokacioni` varchar(50) DEFAULT NULL,
  `datafilliimit` date DEFAULT NULL,
  `datambarimit` date DEFAULT NULL,
  `arkitekti_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projekti`
--

INSERT INTO `projekti` (`projekti_id`, `emri`, `lokacioni`, `datafilliimit`, `datambarimit`, `arkitekti_id`) VALUES
(1, 'House', 'Prishtine', '2023-02-05', '2023-06-06', 1),
(2, 'Villa', 'Prizren', '2023-04-15', '2023-05-17', 2),
(3, 'School', 'Rahovec', '2022-05-20', '2023-05-17', 3),
(4, 'Hospital', 'Gjakove', '2021-03-01', '2022-10-10', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arkitekti`
--
ALTER TABLE `arkitekti`
  ADD PRIMARY KEY (`arkitekti_id`),
  ADD UNIQUE KEY `numritel` (`numritel`);

--
-- Indexes for table `projekti`
--
ALTER TABLE `projekti`
  ADD PRIMARY KEY (`projekti_id`),
  ADD KEY `arkitekti_id` (`arkitekti_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arkitekti`
--
ALTER TABLE `arkitekti`
  MODIFY `arkitekti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projekti`
--
ALTER TABLE `projekti`
  MODIFY `projekti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projekti`
--
ALTER TABLE `projekti`
  ADD CONSTRAINT `projekti_ibfk_1` FOREIGN KEY (`arkitekti_id`) REFERENCES `arkitekti` (`arkitekti_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
