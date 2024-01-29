-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 06:53 AM
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
-- Database: `submitit_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jrnlName` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fictionSubmission` tinyint(1) NOT NULL,
  `nonFictionSubmission` tinyint(1) NOT NULL,
  `fictionOnly` tinyint(1) NOT NULL,
  `nonFictionOnly` tinyint(1) NOT NULL,
  `onlineSubmission` tinyint(1) NOT NULL,
  `simultaneousSubmission` tinyint(1) NOT NULL,
  `defunct` tinyint(1) NOT NULL,
  `notIncluded` tinyint(1) NOT NULL,
  `possibleThemes` tinyint(1) NOT NULL,
  `flash` varchar(255) NOT NULL,
  `yearOfInception` varchar(255) NOT NULL,
  `acceptancePercent` varchar(255) NOT NULL,
  `submissionVolume` varchar(255) NOT NULL,
  `minimumLength` varchar(255) NOT NULL,
  `maximumLength` varchar(255) NOT NULL,
  `permanentThemes` varchar(255) NOT NULL,
  `notesAboutJournal` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `submissionPlatform` varchar(255) NOT NULL,
  `submissionGuidelines` varchar(255) NOT NULL,
  `submissionCost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `jrnlName`, `rating`, `date`, `fictionSubmission`, `nonFictionSubmission`, `fictionOnly`, `nonFictionOnly`, `onlineSubmission`, `simultaneousSubmission`, `defunct`, `notIncluded`, `possibleThemes`, `flash`, `yearOfInception`, `acceptancePercent`, `submissionVolume`, `minimumLength`, `maximumLength`, `permanentThemes`, `notesAboutJournal`, `theme`, `submissionPlatform`, `submissionGuidelines`, `submissionCost`, `created_at`, `updated_at`) VALUES
(11, 'Journey two', '4 Stars', '04', 1, 1, 1, 1, 1, 1, 1, 1, 1, '3', '2021', '4', '3', '2', '4', 'literacy', 'Good journal', '3-3-2023:india', 'own manager', 'Single-Space,PDF only,Check for permanent theme [with fill-in option]', '$230', '2023-03-28 01:02:19', '2023-04-03 05:05:01'),
(14, 'The fourth river', '3 Stars', '02', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2', '2020', '3', '4', '3', '4', 'literacy', 'best journal', '30-2-2023:india', 'Email (attach)', 'Blind', '$230', '2023-03-30 05:47:56', '2023-03-30 05:47:56'),
(15, 'Room', '3 Stars', '03', 1, 1, 1, 1, 1, 1, 1, 1, 1, '4', '2020', '3', '4', '3', '4', 'df', 'dfs', '30-2-2023:india', 'own manager', 'Blind', '$260', '2023-03-30 07:11:49', '2023-03-30 07:11:49'),
(16, 'The fourth river', '2 Stars', '06', 1, 1, 1, 1, 1, 1, 1, 1, 1, '4', '2020', '5', '4', '2', '5', 'dsfa s', 'dff', '30-2-2023:mumbai', 'online form', 'Blind', '$200', '2023-03-30 07:12:29', '2023-03-30 07:12:29'),
(17, 'Micky', '1 Star', '03', 1, 1, 1, 1, 1, 1, 1, 1, 1, '3', '2023', '5', '4', '3', '5', 'topical', 'dfgadsg', '4-3-2023:', 'Email (paste)', 'Blind', '$120', '2023-04-03 23:22:07', '2023-04-03 23:22:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
