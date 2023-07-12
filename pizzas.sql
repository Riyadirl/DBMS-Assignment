-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 11:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninja_pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES
(1, 'ninja supreme', 'tomato, egg', 'a@gmail.com', '2023-06-15 19:04:29'),
(3, 'cheeseburger', 'beef patty, cheese, pickles, onions', 'c@gmail.com', '2023-06-15 19:04:29'),
(4, 'hawaiian delight', 'ham, pineapple', 'd@gmail.com', '2023-06-15 19:04:29'),
(7, 'vegetable medley', 'broccoli, carrots, bell peppers', 'g@gmail.com', '2023-06-15 19:04:29'),
(8, 'bacon lovers', 'bacon, cheese, lettuce, tomato', 'h@gmail.com', '2023-06-15 19:04:29'),
(9, 'BBQ chicken', 'grilled chicken, BBQ sauce, onions', 'i@gmail.com', '2023-06-15 19:04:29'),
(11, 'meat lover\'s', 'pepperoni, sausage, bacon, ham', 'k@gmail.com', '2023-06-15 19:04:29'),
(12, 'mushroom delight', 'mushrooms, cheese, garlic', 'l@gmail.com', '2023-06-15 19:04:29'),
(13, 'chicken alfredo', 'grilled chicken, alfredo sauce, pasta', 'm@gmail.com', '2023-06-15 19:04:29'),
(14, 'taco fiesta', 'ground beef, lettuce, cheese, salsa', 'n@gmail.com', '2023-06-15 19:04:29'),
(15, 'garlic shrimp', 'shrimp, garlic, butter', 'o@gmail.com', '2023-06-15 19:04:29'),
(17, 'four cheese', 'mozzarella, cheddar, provolone, gouda', 'q@gmail.com', '2023-06-15 19:04:29'),
(18, 'vegan delight', 'tofu, mixed vegetables', 'r@gmail.com', '2023-06-15 19:04:29'),
(19, 'peanut butter banana', 'peanut butter, banana, honey', 's@gmail.com', '2023-06-15 19:04:29'),
(20, 'salami and cheese', 'salami, cheese, lettuce, tomato', 't@gmail.com', '2023-06-15 19:04:29'),
(21, 'greek gyro', 'gyro meat, tzatziki sauce, tomatoes', 'u@gmail.com', '2023-06-15 19:04:29'),
(22, 'italian sub', 'ham, salami, pepperoni, provolone', 'v@gmail.com', '2023-06-15 19:04:29'),
(23, 'avocado chicken', 'grilled chicken, avocado, lettuce', 'w@gmail.com', '2023-06-15 19:04:29'),
(24, 'steak and cheese', 'steak, cheese, onions, peppers', 'x@gmail.com', '2023-06-15 19:04:29'),
(25, 'seafood extravaganza', 'shrimp, crab, scallops', 'y@gmail.com', '2023-06-15 19:04:29'),
(28, 'scv vnv', 'vnvnv', 'ornill108@gmail.com', '2023-06-15 19:55:46'),
(29, 'sdfg yivvyk', 'fh nfncvn', 'ornillertre108@gmail.com', '2023-06-16 13:30:46'),
(32, 'sfsfsda', 'ssds', 'ornfsdill108@gmail.com', '2023-06-25 05:54:45'),
(33, 'sdcfsaasdsa', 'ssss', 'aaaa@gmail.com', '2023-06-25 05:56:28'),
(35, 'dfg', 'dfgdfg', 'ornill108@gmail.com', '2023-07-11 14:26:40'),
(36, 'chgf', 'gfhfg', 'ornill108@gmail.com', '2023-07-11 15:29:37'),
(37, 'sdf', 'sff', 'ornill108@gmail.com', '2023-07-11 15:48:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
