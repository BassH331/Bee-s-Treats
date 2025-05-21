-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2025 at 03:38 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `email`, `password`) VALUES
(1, 'User', 'Customer', '0679972425', 'user@emial.com', '$2y$10$m7r9W7CGC6LDRc3ZzP41E.6SeFJC4j9eZUq.9cP5eAOhhiTHtC44e'),
(2, 'Babongile', 'Ncube', '0679972425', '222147008@ump.ac.za', '$2y$10$XfF/DSJq/1WSRL4TKdC7LONcaXkX63ZplDUrb3qtnVw1jlTAsBB0m'),
(3, 'aphiwe', 'Gumbi', '0123456789', 'aphiwe@gmail.com', '$2y$10$XDfAe8FW4xM4lCOltDX3Aupmj600LH51/XNc2PaHI4zT2IsoxtQKK'),
(4, 'Brender', 'Kanengoni', '0619813621', 'brender@email.com', '$2y$10$DvWBL3XVpeOZY6Z.bvByiuZd56B1wWjMK/ka29Z/BgJnCxxGqHM7e'),
(5, 'jOhn', 'james', '0988909878', 'john@email.com', '$2y$10$qwrc16fhUvaijIRuebOvPeC8Dzu8iyUPqIFiOIT5ZcZ3a.A9/IQaG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
