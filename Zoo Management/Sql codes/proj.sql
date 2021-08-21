-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2020 at 09:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animal_no` int(11) NOT NULL,
  `animal_type` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `no_of_descendants` int(11) NOT NULL,
  `cage_no` int(11) NOT NULL,
  `animal_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animal_no`, `animal_type`, `gender`, `no_of_descendants`, `cage_no`, `animal_name`) VALUES
(1, 'BIRD', 'M', 2, 1, 'HORNBILL'),
(2, 'REPTILE', 'F', 3, 14, 'CROCODILE'),
(3, 'MAMMAL', 'M', 2, 13, 'ELEPHANT'),
(4, 'BIRD', 'F', 2, 10, 'WOODPEAKER'),
(5, 'MAMMAL', 'F', 3, 12, 'TIGER'),
(6, 'Bird', 'F', 3, 1, 'Ostrich'),
(7, 'mammal', 'F', 3, 1, 'monkey');

-- --------------------------------------------------------

--
-- Table structure for table `cage`
--

CREATE TABLE `cage` (
  `Cage_no` int(11) NOT NULL,
  `no_of_animals` int(11) DEFAULT NULL,
  `animal_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cage`
--

INSERT INTO `cage` (`Cage_no`, `no_of_animals`, `animal_no`) VALUES
(1, 3, 1),
(10, 3, 4),
(12, 4, 5),
(13, 3, 3),
(14, 4, 2),
(15, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `caretaker`
--

CREATE TABLE `caretaker` (
  `CT_id` int(11) NOT NULL,
  `animal_no` int(11) NOT NULL,
  `timing` time NOT NULL,
  `salary` int(11) NOT NULL,
  `type_of_job` varchar(30) NOT NULL,
  `C_fname` varchar(30) NOT NULL,
  `C_lname` varchar(30) NOT NULL,
  `cage_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caretaker`
--

INSERT INTO `caretaker` (`CT_id`, `animal_no`, `timing`, `salary`, `type_of_job`, `C_fname`, `C_lname`, `cage_no`) VALUES
(22, 1, '22:00:00', 50000, 'Food', 'John', 'Smith', 1),
(23, 5, '09:00:00', 20000, 'Bath', 'Ravi', 'Shankar', 12),
(24, 2, '10:30:00', 20000, 'Food', 'Sundar', 'Shankar', 14),
(25, 2, '10:30:00', 20000, 'Bath', 'Balaji', 'Subra', 10),
(26, 3, '11:00:00', 20000, 'Food', 'Suhari', 'Thabur', 13),
(27, 4, '11:00:00', 20000, 'Bath', 'Shivam', 'Sundar', 13);

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `clinic_id` int(11) NOT NULL,
  `animal_no` int(11) NOT NULL,
  `cage_no` int(11) NOT NULL,
  `vet_id` int(11) NOT NULL,
  `type_of_ailment` varchar(50) NOT NULL,
  `treatment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`clinic_id`, `animal_no`, `cage_no`, `vet_id`, `type_of_ailment`, `treatment`) VALUES
(50, 3, 13, 22, 'Diarohhea', 'Fresh Meat '),
(52, 1, 1, 24, 'Tuberculosis', 'Ritamphin'),
(53, 5, 12, 25, 'Fever', 'Antibiotics'),
(54, 4, 10, 21, 'Fever', 'Antibiotics'),
(55, 2, 14, 23, 'Ticks', 'Spray');

-- --------------------------------------------------------

--
-- Table structure for table `foodstore`
--

CREATE TABLE `foodstore` (
  `cage_no` int(11) NOT NULL,
  `CT_id` int(11) NOT NULL,
  `f_fname` varchar(30) NOT NULL,
  `f_lname` varchar(30) NOT NULL,
  `quant_of_food` int(11) NOT NULL,
  `ST_id` int(11) NOT NULL,
  `type_of_food` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodstore`
--

INSERT INTO `foodstore` (`cage_no`, `CT_id`, `f_fname`, `f_lname`, `quant_of_food`, `ST_id`, `type_of_food`) VALUES
(1, 22, 'Susan', 'Kumar', 12, 30, 'Greens'),
(10, 25, 'Shirley', 'Kannan', 40, 31, 'Meat'),
(14, 24, 'Sita', 'Ananda', 56, 32, 'Meat'),
(12, 23, 'Krishna', 'Muniraj', 70, 33, 'Greens'),
(13, 26, 'Radha', 'Herle', 30, 34, 'Meat'),
(10, 25, 'Satyam ', 'Kumar', 45, 30, 'Meat');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(3, 'satyamkr01012000@gmail.com', 'Satyam1223'),
(2, 'praneethapk00@gmail.com', 'Pran123');

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `vet_id` int(11) NOT NULL,
  `v_fname` varchar(30) NOT NULL,
  `v_lname` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `animal_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vet`
--

INSERT INTO `vet` (`vet_id`, `v_fname`, `v_lname`, `salary`, `animal_no`) VALUES
(20, 'Pallavi', 'Shankar', 3100000, 2),
(21, 'veena', 'Sudhir', 200000, 4),
(22, 'Shankar', 'Punda', 125000, 1),
(24, 'Venu', 'Gopal', 125000, 3),
(25, 'Zephyr', 'Arun', 2000000, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cage`
--
ALTER TABLE `cage`
  ADD PRIMARY KEY (`Cage_no`),
  ADD KEY `animal_no` (`animal_no`);

--
-- Indexes for table `caretaker`
--
ALTER TABLE `caretaker`
  ADD PRIMARY KEY (`CT_id`),
  ADD KEY `cage_no` (`cage_no`),
  ADD KEY `animal_no` (`animal_no`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`clinic_id`),
  ADD KEY `animal_no` (`animal_no`),
  ADD KEY `cage_no` (`cage_no`),
  ADD KEY `vet_id` (`vet_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
