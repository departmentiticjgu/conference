-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2025 at 07:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contentconference`
--

-- --------------------------------------------------------

--
-- Table structure for table `associate_editors`
--

CREATE TABLE `associate_editors` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `associate_editors`
--

INSERT INTO `associate_editors` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `chief_editors`
--

CREATE TABLE `chief_editors` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chief_editors`
--

INSERT INTO `chief_editors` (`id`, `name`, `title`, `university`) VALUES
(1, 'Prof. Dr. John Smith', 'Chair of Digital Innovation', 'University of Sydney, Australia'),
(2, 'Prof. Dr. Maria Rodriguez', 'Professor of Informatics Engineering', 'University of Milan, Italy'),
(3, 'Prof. Dr. Hiroshi Tanaka', 'Professor of Information Systems', 'Cairo University, Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `co_host`
--

CREATE TABLE `co_host` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `co_host`
--

INSERT INTO `co_host` (`id`, `image`, `name`) VALUES
(4, 'co-host1.png', 'WXIT'),
(5, 'co-host3.png', 'GULF'),
(6, 'host2_no.png', 'Skenov'),
(7, 'host4_no.png', 'Lorem ipsum dolor sit amet.');

-- --------------------------------------------------------

--
-- Table structure for table `editorial_board`
--

CREATE TABLE `editorial_board` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `editorial_board`
--

INSERT INTO `editorial_board` (`id`, `name`) VALUES
(2, 'Admin'),
(3, 'User'),
(4, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE `subtopic` (
  `id` int NOT NULL,
  `topic_id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`id`, `topic_id`, `name`) VALUES
(1, 1, 'Electrical Engineering'),
(2, 1, 'Mechanical Engineering'),
(3, 1, 'Industrial Engineering'),
(4, 1, 'Civil Engineering'),
(5, 1, 'Informatic Engineering'),
(6, 2, 'Management'),
(7, 2, 'Digital Business'),
(8, 3, 'Development of Pharmaceutical Formulations, Biotechnology, and Nanotechnology'),
(9, 3, 'Herbal Innovations and Natural Product Science'),
(10, 3, 'Computer-Assisted Drug Design and Medicinal Chemistry'),
(11, 3, 'Pharmacology, Clinical Pharmacy, Drug Safety Monitoring, and Pharmaceutical Practice'),
(12, 3, 'Pharmaceutical Analysis, Regulatory Compliance, and Quality Assurance');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`) VALUES
(1, 'Engineering'),
(2, 'Economic Business'),
(3, 'Pharmaceutical Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associate_editors`
--
ALTER TABLE `associate_editors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chief_editors`
--
ALTER TABLE `chief_editors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_host`
--
ALTER TABLE `co_host`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorial_board`
--
ALTER TABLE `editorial_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subtopic`
--
ALTER TABLE `subtopic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associate_editors`
--
ALTER TABLE `associate_editors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chief_editors`
--
ALTER TABLE `chief_editors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `co_host`
--
ALTER TABLE `co_host`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `editorial_board`
--
ALTER TABLE `editorial_board`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subtopic`
--
ALTER TABLE `subtopic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subtopic`
--
ALTER TABLE `subtopic`
  ADD CONSTRAINT `subtopic_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
