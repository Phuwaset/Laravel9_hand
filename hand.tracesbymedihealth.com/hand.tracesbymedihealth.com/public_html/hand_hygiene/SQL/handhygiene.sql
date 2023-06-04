-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 12:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handhygiene`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'name lname', 'test', '$2y$10$ie1r0TU/Rz4SlR/8wCD3OOrPm0lQ8VlknK76d9EOyiqPic9f0SjxC', '2023-03-25 10:57:58', '2023-03-25 03:40:35', NULL),
(5, 'name lname1', 'test1', '$2y$10$YDf44FtRaCybTQCkb09Yr.Jq0vnVyB9mRe1c1UOro8qgsjPqEVs/K', '2023-03-25 03:48:20', '2023-03-25 03:48:20', NULL),
(6, 'name lname1', 'test2', '$2y$10$8D4wA5IaptUnbGwV6EhhB.U8h.78M6rOM1wifccm.KhhLxcsUFfDG', '2023-03-26 03:14:46', '2023-03-26 03:14:46', NULL),
(18, 'name lname1', 'test5', '$2y$10$6nlmMMRmWtYepiOLtu1wmeWOKPK6bk5d9QvFA.xgy7WL4PQDFz4Ai', '2023-03-26 06:57:29', '2023-03-26 06:57:29', NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
