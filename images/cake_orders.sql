-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2025 at 03:37 PM
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
-- Table structure for table `cake_orders`
--

CREATE TABLE `cake_orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `cake_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cake_size` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `flavour` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `frosting` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cake_image_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `design` text COLLATE utf8mb4_general_ci,
  `delivery_date` date NOT NULL,
  `pickup_delivery` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `delivery_fee` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `filling` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cake_type` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cake_orders`
--

INSERT INTO `cake_orders` (`id`, `user_id`, `cake_category`, `cake_size`, `flavour`, `frosting`, `cake_image_path`, `design`, `delivery_date`, `pickup_delivery`, `delivery_fee`, `filling`, `cake_type`, `created_at`) VALUES
(1, 3, 'general', '18cm', 'carrot', 'fresh_cream', NULL, 'nnbbhbh', '2025-01-03', 'delivery', 'To be paid via Uber', 'chocolate', 'sponge', '2024-12-27 15:39:10'),
(2, 3, 'birthday', '15cm', 'vanilla', 'butter_cream', NULL, 'nnbbhbh', '2025-01-03', 'pickup', NULL, 'fruit', 'shifon', '2024-12-27 15:41:17'),
(3, 3, 'wedding', '15cm', 'vanilla', 'butter_cream', NULL, '', '2025-01-30', 'pickup', NULL, 'chocolate', 'shifon', '2024-12-27 15:41:46'),
(4, 3, 'wedding', '15cm', 'vanilla', 'butter_cream', NULL, '', '2025-01-30', 'pickup', NULL, 'none', 'shifon', '2024-12-27 15:42:13'),
(5, 3, 'wedding', '15cm', 'vanilla', 'butter_cream', NULL, '', '2025-01-11', 'pickup', NULL, 'none', 'shifon', '2024-12-27 15:42:42'),
(6, 4, 'birthday', '18cm', 'lemon_poppy', 'fresh_cream', NULL, 'kjhkhkjkh', '2025-01-31', 'pickup', NULL, 'vanilla', 'shifon', '2025-01-04 14:45:41'),
(7, 4, 'birthday', '18cm', 'lemon_poppy', 'fresh_cream', NULL, 'kjhkhkjkh', '2025-01-31', 'pickup', NULL, 'vanilla', 'shifon', '2025-01-04 14:47:53'),
(8, 4, 'birthday', '18cm', 'lemon_poppy', 'fresh_cream', NULL, 'kjhkhkjkh', '2025-01-31', 'pickup', NULL, 'vanilla', 'shifon', '2025-01-04 14:55:59'),
(9, 4, 'birthday', '18cm', 'lemon_poppy', 'fresh_cream', NULL, 'kjhkhkjkh', '2025-01-31', 'pickup', NULL, 'vanilla', 'shifon', '2025-01-04 14:56:06'),
(10, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'lkkljk', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 14:56:23'),
(11, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'lkkljk', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 14:57:13'),
(12, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'lkkljk', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 14:57:52'),
(13, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'kjkhkh', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 14:58:08'),
(14, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'kjkhkh', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 14:58:46'),
(15, 4, 'birthday', '15cm', 'vanilla', 'butter_cream', NULL, ';lj;j', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 14:58:59'),
(16, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'kjhjkhj', '2025-01-30', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:00:55'),
(17, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'hjggghgkjl', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:03:36'),
(18, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'hjggghgkjl', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:05:15'),
(19, 4, 'general', '15cm', 'vanilla', 'butter_cream', NULL, 'kjkjkkkkjhl', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:08:51'),
(20, 4, 'general', '15cm', 'vanilla', 'butter_cream', 'uploads/contact-book_10922223.png', 'kjkjkkkkjhl', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:15:27'),
(21, 4, 'birthday', '15cm', 'vanilla', 'butter_cream', 'http://localhost/Bee\'s_Treats/uploads/contact-book_10922223.png', ',mn,n', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:21:11'),
(22, 4, 'birthday', '15cm', 'vanilla', 'butter_cream', 'http://localhost/Bee\'s_Treats/php-scripts/uploads/uploads/contact-book_10922223.png', ',mn,n', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:24:01'),
(23, 4, 'birthday', '15cm', 'vanilla', 'butter_cream', 'http://localhost/Bee\'s_Treats/php-scripts/uploads/contact-book_10922223.png', ',mn,n', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:26:12'),
(24, 4, 'wedding', '15cm', 'vanilla', 'butter_cream', NULL, 'mbnbmnb', '2025-01-24', 'pickup', NULL, 'none', 'shifon', '2025-01-04 15:59:31'),
(25, 4, 'birthday', '15cm', 'lemon_poppy', 'butter_cream', NULL, 'mhgmgkhgkghjg', '2025-01-31', 'pickup', NULL, 'none', 'shifon', '2025-01-06 11:22:45'),
(26, 4, 'birthday', '15cm', 'lemon_poppy', 'butter_cream', NULL, 'mhgmgkhgkghjg', '2025-01-31', 'delivery', 'To be paid via Uber', 'none', 'shifon', '2025-01-06 11:25:44'),
(27, 4, 'birthday', '15cm', 'lemon_poppy', 'butter_cream', 'http://localhost/Bee\'s_Treats/php-scripts/uploads/image_10322308.png', 'mhgmgkhgkghjg', '2025-01-31', 'delivery', 'To be paid via Uber', 'none', 'shifon', '2025-01-06 11:28:49'),
(28, 4, 'birthday', '18cm', 'fruit', 'fresh_cream', NULL, 'here is a description', '2025-02-17', 'delivery', 'To be paid via Uber', 'chocolate', 'butter-cake', '2025-02-17 09:53:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_orders`
--
ALTER TABLE `cake_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake_orders`
--
ALTER TABLE `cake_orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cake_orders`
--
ALTER TABLE `cake_orders`
  ADD CONSTRAINT `cake_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
