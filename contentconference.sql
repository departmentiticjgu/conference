-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Apr 2025 pada 06.13
-- Versi server: 8.0.30
-- Versi PHP: 8.3.16

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `image` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `full_name`, `email`, `no_hp`, `image`, `created_at`) VALUES
(1, 'admin', '$2y$10$PaX.V2bbwU1bwCeTT5l.U.w7g4VzSiC9FuJFm3WMLCCVrQDjSrP.W', 'admin', 'admin@gmail.com', '08123456789', 'antony4.jpg', '2025-04-21 03:48:38'),
(2, 'hriardnsyh', '$2y$10$2wZKkGyEcYaU7FQVbQjWzOtXJdnxQSLpqc3RjqPV4vQ1UyDuCQIk.', 'Hari Ardiansyah Harahap', 'hari@gmail.com', '087814721245', 'admin.jpeg', '2025-04-21 04:15:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `associate_editors`
--

CREATE TABLE `associate_editors` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `associate_editors`
--

INSERT INTO `associate_editors` (`id`, `name`) VALUES
(1, 'Dr. Sarah Johnson'),
(2, 'Dr. Ahmed Hassan'),
(3, 'Dr. Li Wei'),
(5, 'Dr. Priya Sharma'),
(6, 'Dr. James Wilson');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chief_editors`
--

CREATE TABLE `chief_editors` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `chief_editors`
--

INSERT INTO `chief_editors` (`id`, `name`, `title`, `university`) VALUES
(1, 'Prof. Dr. John Smith', 'Chair of Digital Innovation', 'University of Sydney, Australia'),
(2, 'Prof. Dr. Maria Rodriguez', 'Professor of Informatics Engineering', 'University of Milan, Italy'),
(3, 'Prof. Dr. Hiroshi Tanaka', 'Professor of Information Systems', 'Cairo University, Egypt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `co_host`
--

CREATE TABLE `co_host` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `co_host`
--

INSERT INTO `co_host` (`id`, `image`, `name`) VALUES
(4, 'co-host1.png', 'WXIT'),
(5, 'co-host3.png', 'GULF'),
(6, 'host2_no.png', 'Skenov'),
(7, 'host4_no.png', 'Lorem ipsum dolor sit amet.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `editorial_board`
--

CREATE TABLE `editorial_board` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `editorial_board`
--

INSERT INTO `editorial_board` (`id`, `name`) VALUES
(2, 'Dr. Olivia Johnson '),
(3, 'Prof. Dr. Ahmed El-Sayed'),
(4, 'Dr. Isabella Rossi'),
(5, 'Prof. Dr. James O’Connor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_topic`
--

CREATE TABLE `main_topic` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `main_topic`
--

INSERT INTO `main_topic` (`id`, `name`) VALUES
(1, 'Economic Business'),
(2, 'Engineering'),
(3, 'Pharmaceutical Science'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subtopic`
--

CREATE TABLE `subtopic` (
  `id` int NOT NULL,
  `topic_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `subtopic`
--

INSERT INTO `subtopic` (`id`, `topic_id`, `name`) VALUES
(83, 1, 'Structure Engineering'),
(84, 1, 'Road and Bridge Engineering'),
(85, 1, 'Geotech Engineering'),
(86, 1, 'Water Resources Management'),
(87, 1, 'Transportation Engineering'),
(88, 1, 'Disaster Mitigation'),
(89, 1, 'Construction Management'),
(90, 1, 'Earthquake Engineering'),
(91, 2, 'Power Transmission and Distribution'),
(92, 2, 'High Voltage Engineering'),
(93, 2, 'Renewable Energy'),
(94, 2, 'Smart Grid Technology'),
(95, 2, 'Robotics'),
(96, 2, 'Power Electronics'),
(97, 2, 'Signal and Image Processing'),
(98, 2, 'Embedded Systems'),
(99, 2, 'VLSI'),
(100, 2, 'Wireless and Mobile Communication'),
(101, 3, 'Smart and Lean Manufacturing System'),
(102, 3, 'Product Design and Development'),
(103, 3, 'Digitalization Supply Chain'),
(104, 3, 'Green Manufacturing'),
(105, 3, 'Quality Management System'),
(106, 4, 'Mobile Applications'),
(107, 4, 'Biomedical Informatics'),
(108, 4, 'Security Systems'),
(109, 4, 'Database and Data Mining'),
(110, 4, 'Artificial Intelligence'),
(111, 4, 'Computer Network'),
(112, 5, 'Mechatronics & Robotics'),
(113, 5, 'Applied Mechanics'),
(114, 5, 'Biomedical Engineering'),
(115, 5, 'Composite & Materials Engineering'),
(116, 5, 'Computational Mechanics'),
(117, 5, 'Design Engineering'),
(118, 5, 'Thermal & Fluid Science'),
(119, 5, 'Automotive Engineering'),
(120, 8, 'Leadership, Innovation, and Strategy'),
(121, 9, 'Business and Entrepreneurship in the Tech Era'),
(122, 9, 'Tech-Driven Business Strategies and Economic Sustainability'),
(123, 9, 'Financial Technology (FinTech) and Digital Economy'),
(124, 9, 'Digital Transformation & Smart Technologies'),
(125, 9, 'Sustainability, ESG, and Green Business'),
(126, 9, 'Marketing and Consumer Behaviour in the Digital Age'),
(127, 10, 'Pharmaceutical Formulation, Biotechnology, and Drug Design'),
(128, 11, 'Herbal Technology, Pharmacology, and Regulatory Compliance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topic`
--

CREATE TABLE `topic` (
  `id` int NOT NULL,
  `main_topic_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `topic`
--

INSERT INTO `topic` (`id`, `main_topic_id`, `name`) VALUES
(1, 2, 'Civil Engineering'),
(2, 2, 'Electrical Engineering'),
(3, 2, 'Industrial Engineering'),
(4, 2, 'Informatic Engineering'),
(5, 2, 'Mechanical Engineering'),
(8, 1, 'Management'),
(9, 1, 'Digital Business'),
(10, 3, 'Pharmaceutical Biotechnology'),
(11, 3, 'Herbal Innovations');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `associate_editors`
--
ALTER TABLE `associate_editors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chief_editors`
--
ALTER TABLE `chief_editors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `co_host`
--
ALTER TABLE `co_host`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `editorial_board`
--
ALTER TABLE `editorial_board`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `main_topic`
--
ALTER TABLE `main_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subtopic`
--
ALTER TABLE `subtopic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indeks untuk tabel `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_topic_id` (`main_topic_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `associate_editors`
--
ALTER TABLE `associate_editors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `chief_editors`
--
ALTER TABLE `chief_editors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `co_host`
--
ALTER TABLE `co_host`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `editorial_board`
--
ALTER TABLE `editorial_board`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `main_topic`
--
ALTER TABLE `main_topic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `subtopic`
--
ALTER TABLE `subtopic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `subtopic`
--
ALTER TABLE `subtopic`
  ADD CONSTRAINT `subtopic_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`);

--
-- Ketidakleluasaan untuk tabel `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`main_topic_id`) REFERENCES `main_topic` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
