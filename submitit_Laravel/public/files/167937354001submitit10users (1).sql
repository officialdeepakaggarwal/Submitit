-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 05:58 AM
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
-- Database: `submitit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `penName`, `city`, `state`, `zipCode`, `date`, `phone`, `sharedEmail`, `email`, `password`, `userType`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', 'admin', 'New York', 'New York', '10002', '2023-02-16', '45415152', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$NALX/eruuul66TKc0v4N2uqsjxPEwKwuFayxpKge2wxYDSRAhhZxC', 'admin', NULL, NULL),
(2, 'Ajay', 'Singh', NULL, 'Ambala', 'Haryana', '133101', '2023-01-01', '3623213', NULL, 'deepakaggarwal@gmail.com', '$2y$10$p3B79Aw87jY2Tpn7n8cIruxPgKhPHd0Pa2rG2zeg5B3zxBS2RS1Fm', 'client', '2023-02-08 07:08:03', '2023-02-08 07:08:03'),
(3, 'Sachin', 'Singh', NULL, 'Ambala', 'Haryana', '133101', '2023-02-17', '3623213', NULL, 'advisor71@gmail.com', '$2y$10$AuRm7JoPIw1Lnk3lsucngujdA6UpkO2kVtLH6qcSR7xEv5lpDwf/e', 'client', '2023-02-08 07:12:54', '2023-02-08 07:12:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
