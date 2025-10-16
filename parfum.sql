-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2025 at 01:45 PM
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
-- Database: `parfum`
--

-- --------------------------------------------------------

--
-- Table structure for table `parfume`
--

CREATE TABLE `parfume` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parfume`
--

INSERT INTO `parfume` (`id`, `nama`, `harga`) VALUES
(1, 'Ahmad (AKH)', '250.000'),
(2, 'Alpha (HMNS)', 'IDR 500.000'),
(3, 'Cherry On Top (MINE)', 'IDR 370.000'),
(4, 'Lavish Cuddle (Lavish)', 'IDR 200.000'),
(5, 'Black Opium (YSL)', 'IDR 600.000'),
(6, 'Sauvage (Dior)', 'IDR 585.000'),
(7, 'The Man Company (BLACK)', 'IDR 320.000'),
(8, 'Boispacifique (Tom Ford)', 'IDR 190.000'),
(9, 'Man (Bvlgari)', 'IDR 280.000'),
(10, 'Royal Mayfair (Creed)', 'IDR 460.000'),
(11, 'Blue De Chanel (Chanel)', 'IDR 850.000'),
(12, 'Gucci Guilty (GUCCI)', 'IDR 770.000'),
(13, 'Test', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'Dimas', 'Dimas', 'user'),
(5, 'Admin', 'admin123', 'admin'),
(8, 'Polisi', 'dimassadad', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parfume`
--
ALTER TABLE `parfume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parfume`
--
ALTER TABLE `parfume`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
