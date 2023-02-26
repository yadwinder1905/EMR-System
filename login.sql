-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 02:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'yadwinder', '$2y$10$ahoADbpWdBJDuhxZWD9jDewry4tC08yPfDYOIqpHPb59INjm5ebl6', '2023-01-28 01:06:07'),
(2, 'agum123@gmail.com', '$2y$10$gpnOAb6REaq1oNqRrJIb0O60ZN3hOrTmpZtY2dMghdqPeC7MFF/Xu', '2023-01-28 23:38:57'),
(3, 'jaad123@gmail.com', '$2y$10$BhsDmmfSBfwQ6LP1gN3phOVDBs6Yj5EVa4A9VLbluJY3.j0Ur2NAG', '2023-01-29 02:24:49'),
(4, 'jaad456@gmail.com', '$2y$10$lPpdSWDAzRdP1oYy7.vRXu.wOTaNrTztBck4uuDFsJx10C3OQy2M6', '2023-01-29 17:59:30'),
(5, 'manpreeet@gmail.com', '$2y$10$K.yV5I.YVev1AT1asNRPSuM6u7xRgPc8j5L/uOvzHX3fanGz8yDHG', '2023-01-30 01:22:41');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
