-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2025 at 04:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapo_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `role` varchar(1000) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'sample@gmail.com', '12345', 'user'),
(2, 'sample@gmail.com', '$2y$10$YApxf0dXJaJQIfaoaosaeOrVXvgDV4lMd8tNAOPwaPvQfSwkm33ee', 'user'),
(3, 'seunojo56@gmail.com', '$2y$10$FeWV.RRVFEqeztEBc1PMSuUw7cQ9snN.TjGetG7MnRyb6EAv7aX2W', 'user'),
(4, 'seunojo56@gmail.com', '$2y$10$niU2jvOfTosYGZiBtzWwjOAQdWiS5QOy3CulM5HJfN.RjiWc221c2', 'user'),
(5, 'seunojo56@gmail.com', '$2y$10$RFvW7G.HS0vaECX3dWqLjOselK9c1n8ldp073fzNQ5gMYc7ja7z2q', 'user'),
(6, 'example@gmail.com', '$2y$10$TWYMUvE.vyf1u4BEcOLsN.V7cfukduNNI7VDOE/joGtbAIBXf6Hkm', 'user'),
(7, '1sample@gmail.com', '$2y$10$0.1c2MWIY4rdxdn7jDuJI.NpoHiCulEJVJK.JSQxu20p2AB5sNAma', 'user'),
(8, 'sample1@gmail.com', '$2y$10$LFS8GuxIwzTJtpiPWtnaaODKYbH88G1fXIPmG63mxzc5GhQhwRcBq', 'user'),
(9, 'ayomide.ojo@lapo.ng', '$2y$10$p76DPG5/zYId.CE6VbPwmuv8l/kdb0yFGL6jmRoXk9tZkjczMjkgC', 'user'),
(10, 'not@gmail.com', '$2y$10$aNMAtqajxqj7uxVuiM/MBemM86p6DLSYkjMUa9hKyHhhLC2/t47zO', 'user'),
(11, 'example1@gmail.com', '$2y$10$HvgwH8P8W9Hvh.lG/7xfFOJjLP7AnmelAqzSnZfWR3xSDB4qdAKuC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
