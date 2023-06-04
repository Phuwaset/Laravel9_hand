-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 12:30 PM
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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `user_id`) VALUES
(1, 'ไม่ระบุ', NULL),
(2, 'ฝ่ายกายวิภาคศาสตร์', NULL),
(3, 'ฝ่ายกุมารเวชศาสตร์', NULL),
(4, 'ฝ่ายจักษุวิทยา', NULL),
(5, 'ฝ่ายจิตเวชศาสตร์', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persernal`
--

CREATE TABLE `persernal` (
  `id` int(11) NOT NULL,
  `personal_name` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `persernal`
--

INSERT INTO `persernal` (`id`, `personal_name`, `id_user`) VALUES
(1, 'แพทย์', NULL),
(2, 'ทันตแพทย์', NULL),
(3, 'เภสัชกร', NULL),
(4, 'พยาบาล', NULL),
(5, 'กายภาพ', NULL),
(6, 'อื่นๆ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `id` int(11) NOT NULL,
  `id_dep` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `moment` int(11) DEFAULT NULL,
  `id_pn` int(11) DEFAULT NULL,
  `times` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`id`, `id_dep`, `user_id`, `type`, `moment`, `id_pn`, `times`) VALUES
(76, NULL, NULL, NULL, NULL, NULL, 5),
(77, NULL, NULL, NULL, NULL, NULL, 1),
(78, NULL, NULL, NULL, NULL, NULL, 1),
(79, 1, NULL, 1, 1, 1, NULL),
(80, NULL, NULL, NULL, NULL, NULL, 11);

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `persernal`
--
ALTER TABLE `persernal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_dp` (`id_dep`),
  ADD KEY `id_pn` (`id_pn`);

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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `persernal`
--
ALTER TABLE `persernal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transection`
--
ALTER TABLE `transection`
  ADD CONSTRAINT `id_dp` FOREIGN KEY (`id_dep`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_pn` FOREIGN KEY (`id_pn`) REFERENCES `persernal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
