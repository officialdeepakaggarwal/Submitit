-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 09:08 AM
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
-- Table structure for table `default_tasks`
--

CREATE TABLE `default_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `email_template_id` bigint(20) UNSIGNED NOT NULL,
  `duration` varchar(255) NOT NULL,
  `task_sequence` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Thank You for Your Interest!', '', NULL, NULL),
(2, 'Thank You for Uploading Your Story!', '', NULL, NULL),
(3, 'Subscribe to our blog', '', NULL, NULL),
(4, 'Tell a friend ($25 off)', '', NULL, NULL),
(5, 'Expand your writing', '', NULL, NULL),
(6, 'Writing tips', '', NULL, NULL),
(7, 'Rejections', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `dummyStory` varchar(255) DEFAULT NULL,
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

INSERT INTO `journals` (`id`, `jrnlName`, `rating`, `date`, `fictionSubmission`, `nonFictionSubmission`, `fictionOnly`, `nonFictionOnly`, `onlineSubmission`, `simultaneousSubmission`, `defunct`, `notIncluded`, `possibleThemes`, `flash`, `yearOfInception`, `acceptancePercent`, `submissionVolume`, `minimumLength`, `maximumLength`, `permanentThemes`, `notesAboutJournal`, `dummyStory`, `theme`, `submissionPlatform`, `submissionGuidelines`, `submissionCost`, `created_at`, `updated_at`) VALUES
(1, 'Journey', '5 Stars', '05', 1, 1, 1, 1, 0, 0, 1, 1, 1, '3', '2020', '4', '5', '3', '4', 'topical', 'good', 'Many Times of India', '24-3-2023:NN', 'online form', 'Blind', '$280', '2023-04-21 05:58:38', '2023-04-24 04:14:38'),
(2, 'Abbreviated Guide', '3 Stars', '04', 1, 0, 1, 1, 0, 1, 1, 1, 1, '2', '2020', '4', '3', '2', '4', 'Literacy', 'Good', NULL, '25-3-2023:', 'own manager', 'Blind,Indented Paragraphs,Check for permanent theme [with fill-in option]', '$200', '2023-04-24 04:16:06', '2023-04-24 23:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `journal_stories`
--

CREATE TABLE `journal_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `storyTitle` varchar(255) NOT NULL,
  `storyInfo` varchar(255) DEFAULT NULL,
  `storyGenre` varchar(255) NOT NULL,
  `wordCount` varchar(255) NOT NULL,
  `finalVersionSaved` tinyint(1) DEFAULT NULL,
  `wordCountChecked` tinyint(1) NOT NULL,
  `doNotSubmitList` varchar(255) DEFAULT NULL,
  `notesFromClient` text NOT NULL,
  `storyBlurb` text DEFAULT NULL,
  `coverLetter` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `submissionPackageId` varchar(255) DEFAULT NULL,
  `fictionPackageId` varchar(255) DEFAULT NULL,
  `editingPackageId` varchar(255) DEFAULT NULL,
  `customizeService` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal_story_submissions`
--

CREATE TABLE `journal_story_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journal_id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `matchPercent` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_story_submissions`
--

INSERT INTO `journal_story_submissions` (`id`, `journal_id`, `story_id`, `user_id`, `matchPercent`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 10, 8, '0', '2', '2023-04-24 05:40:17', '2023-04-23 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2023_02_04_041810_create_stories_table', 1),
(22, '2023_02_28_123333_create_journals_table', 1),
(23, '2023_03_04_000011_create_email_templates_table', 1),
(24, '2023_03_06_041907_create_packages_table', 1),
(25, '2023_03_06_044139_create_tasks_table', 1),
(26, '2023_04_04_070436_create_journal_story_submissions_table', 1),
(27, '2023_04_06_042406_create_default_tasks_table', 1),
(28, '2023_04_10_074838_create_jobs_table', 1),
(29, '2023_04_11_051846_create_invoices_table', 1),
(30, '2023_02_05_092110_create_story_scores_table', 2),
(31, '2023_04_21_045953_create_journal_stories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `stripe_package_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `amount`, `type`, `stripe_package_id`, `created_at`, `updated_at`) VALUES
(1, '10 Journals', '199', 'submission', NULL, NULL, NULL),
(2, '15 Journals', '259', 'submission', NULL, NULL, NULL),
(3, '20 Journals', '299', 'submission', NULL, NULL, NULL),
(4, 'Journals List Only', '150', 'submission', NULL, NULL, NULL),
(5, '10 Journals (3 Stories)', '275', 'flash', NULL, NULL, NULL),
(6, '15 Journals (3 Stories)', '335', 'flash', NULL, NULL, NULL),
(7, '20 Journals (3 Stories)', '375', 'flash', NULL, NULL, NULL),
(8, 'Copyediting', '60', 'editing', NULL, NULL, NULL),
(9, 'Line editing', '85', 'editing', NULL, NULL, NULL),
(10, 'Consulting', '100', 'editing', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientName` varchar(255) NOT NULL,
  `storyTitle` varchar(255) NOT NULL,
  `storyInfo` varchar(255) DEFAULT NULL,
  `storyGenre` varchar(255) NOT NULL,
  `wordCount` varchar(255) NOT NULL,
  `submissionStrategy` varchar(255) DEFAULT NULL,
  `finalVersionSaved` tinyint(1) DEFAULT NULL,
  `wordCountChecked` tinyint(1) NOT NULL,
  `doNotSubmitList` varchar(255) DEFAULT NULL,
  `notesFromClient` text NOT NULL,
  `storyBlurb` text DEFAULT NULL,
  `coverLetter` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `submissionPackageId` varchar(255) DEFAULT NULL,
  `fictionPackageId` varchar(255) DEFAULT NULL,
  `editingPackageId` varchar(255) DEFAULT NULL,
  `customizeService` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `clientName`, `storyTitle`, `storyInfo`, `storyGenre`, `wordCount`, `submissionStrategy`, `finalVersionSaved`, `wordCountChecked`, `doNotSubmitList`, `notesFromClient`, `storyBlurb`, `coverLetter`, `files`, `submissionPackageId`, `fictionPackageId`, `editingPackageId`, `customizeService`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Erin Rose', 'Flores 1', 'Good story', 'fiction', '212', 'mid-range', 1, 1, 'Algorithm2', 'Flores, one of the Lesser Sunda Islands in Nusa Tenggara Timur (East Nusa Tenggara)', 'Flores, one of the Lesser Sunda Islands in Nusa Tenggara Timur (East Nusa Tenggara)', 'Flores, one of the Lesser Sunda Islands in Nusa Tenggara Timur (East Nusa Tenggara)', '167998434201submitit10a.html,167998434201submitit1011.gif', '2', '6', '9', 'fictional', 1, 4, '2023-03-27 19:19:02', '2023-04-02 18:21:46'),
(10, 'Rose dyna', 'The boy in the bot', 'the boy in the boat is a true story based on the struggles', 'fiction', '215', 'accessible', 1, 1, 'Algorithm2', 'The boy in the boat is a true story based on the struggles and sacrifies', 'this story based on struggles and sacrifices', 'this story based on struggles and sacrifices', '168017465601submitit10giphy.jpg,168017465601submitit1011.gif', '1', '6', '8', 'null', 1, 8, '2023-03-30 00:10:56', '2023-04-24 04:03:55'),
(13, 'Rajendra Rawat', 're', 'ere', 'fiction', '1221', 'mid-range', 0, 0, 'Algorithm2', 'dfd', 'dfdfd', 'fdfdfd', '168240606701submitit10pxfuel (1).jpg', '2', '5', '9', 'dfdf', 1, 7, '2023-04-25 01:31:07', '2023-04-25 01:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `story_scores`
--

CREATE TABLE `story_scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quality` varchar(255) NOT NULL,
  `stylized` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `topical` varchar(255) NOT NULL,
  `experimental` varchar(255) NOT NULL,
  `humor` varchar(255) NOT NULL,
  `strange` varchar(255) NOT NULL,
  `dark` varchar(255) NOT NULL,
  `international` varchar(255) NOT NULL,
  `margins` varchar(255) NOT NULL,
  `historical` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story_scores`
--

INSERT INTO `story_scores` (`id`, `quality`, `stylized`, `difficulty`, `topical`, `experimental`, `humor`, `strange`, `dark`, `international`, `margins`, `historical`, `long`, `short`, `story_id`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '2', '2', '5', '1', '4', '4', '1', '2', '3', '1', '1', 10, '2023-04-24 05:44:34', '2023-04-24 05:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `type` varchar(255) NOT NULL,
  `email_template_id` bigint(20) UNSIGNED NOT NULL,
  `duration` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '2',
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `date`, `type`, `email_template_id`, `duration`, `status`, `story_id`, `created_at`, `updated_at`) VALUES
(1, 'Literacy', '2023-04-28 12:14:08', 'Manual', 1, '4', '2', 10, '2023-04-24 06:44:08', '2023-04-24 06:44:08'),
(2, 'gmail api 12', '2023-04-25 03:05:59', 'Manual', 6, '1', '2', 10, '2023-04-24 09:35:59', '2023-04-24 12:06:53'),
(3, 'midriff20@gmail.com', '2023-04-25 05:34:42', 'Automate', 1, '1', '2', 10, '2023-04-24 12:04:42', '2023-04-24 12:04:42'),
(4, 'midriff20', '2023-04-24 05:35:49', 'Manual', 4, '0', '2', 10, '2023-04-24 12:05:49', '2023-04-24 12:05:49'),
(5, '123', '2023-04-24 05:58:12', 'Manual', 4, '0', '2', 1, '2023-04-24 12:28:12', '2023-04-24 12:28:12'),
(6, 'news', '2023-04-25 11:59:47', 'Automate', 5, '0', '2', 1, '2023-04-25 06:29:47', '2023-04-25 06:29:47'),
(7, 'Manual', '2023-04-27 12:01:40', 'Automate', 4, '2', '2', 1, '2023-04-25 06:31:40', '2023-04-25 06:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `doNotSubmitList` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `penName` varchar(255) DEFAULT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipCode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `referral` varchar(255) DEFAULT NULL,
  `sharedEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `userType` varchar(255) NOT NULL DEFAULT 'client',
  `accessToken` text DEFAULT NULL,
  `refreshToken` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `doNotSubmitList`, `firstName`, `lastName`, `penName`, `street`, `city`, `state`, `zipCode`, `phone`, `email`, `referral`, `sharedEmail`, `password`, `status`, `userType`, `accessToken`, `refreshToken`, `created_at`, `updated_at`) VALUES
(1, '2023-03-02', 'Algoritham1', 'Admin', 'User', 'ADMIN12345K', 'Mohali', 'Mohali', 'Punjab', '160070', '6545641', 'admin@gmail.com', 'ADMIN123K', 'adminShare@gmail.com', '$2y$10$3Rlf.KHomSa6irs.MezOaelSutbZjYzw.5LjqpUvVA1UAidGgae7G', '1', 'admin', NULL, NULL, NULL, '2023-03-21 22:28:09'),
(4, '2023-03-22', 'Algorithm1', 'Erin', 'Rose', 'ERIN234K', '727 Cliff Drive', 'Laguna Beach', 'CA', '92651', '9499109896', 'belair.erin@gmail.com', 'ERIN99k', NULL, '$2y$10$3Rlf.KHomSa6irs.MezOaelSutbZjYzw.5LjqpUvVA1UAidGgae7G', '1', 'client', NULL, NULL, '2023-03-21 22:38:23', '2023-04-02 18:13:30'),
(5, '2023-03-22', 'Algorithm2', 'John', 'Doe', 'JOHN123H', 'Ambala', 'Laguna Beach', 'New York', '160070', '98568241', 'doejohn768@gmail.com', NULL, 'johnShare@gmail.com', '$2y$10$u2Ls/RewkswNb.kDYJdsa.5i.J4kvMNJGQf6m5GPRtzViMfL4b4Ay', '1', 'client', NULL, NULL, '2023-03-21 22:40:25', '2023-03-21 22:40:25'),
(7, '2023-03-30', 'Algorithm2', 'Rajendra', 'Rawat', 'Rajendra Rawat', 'pauri garhwal uttarakhand', 'HARIDWAR', 'UTTARAKHAND', '123551', '02365412312', 'midriff20@gmail.com', '542613', NULL, '$2y$10$ZNWuEMOsW2ynLY5jdSm2nuHgDqu7cbS6O.3B61SfcM45f1MrTRZL.', '1', 'client', NULL, NULL, '2023-03-29 19:13:12', '2023-04-24 04:03:00'),
(8, '2023-03-30', 'Algorithm2', 'Rose', 'dyna', 'Erin', '727 cliff Drive', 'Laguna Beach', 'CA', '245374', '983726745', 'rose2001@gmail.com', '373262', 'rose2001@gmail.com', '$2y$10$ZhnXU2jwXhN6rDPeQU8wYuVsv.9IH13p6OrizYTllMYgc/C/hVPO2', '1', 'client', NULL, NULL, '2023-03-29 23:53:11', '2023-04-03 02:03:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `default_tasks`
--
ALTER TABLE `default_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `default_tasks_email_template_id_foreign` (`email_template_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_task_id_foreign` (`task_id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_stories`
--
ALTER TABLE `journal_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_stories_user_id_foreign` (`user_id`);

--
-- Indexes for table `journal_story_submissions`
--
ALTER TABLE `journal_story_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_story_submissions_journal_id_foreign` (`journal_id`),
  ADD KEY `journal_story_submissions_story_id_foreign` (`story_id`),
  ADD KEY `journal_story_submissions_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stories_user_id_foreign` (`user_id`);

--
-- Indexes for table `story_scores`
--
ALTER TABLE `story_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `story_scores_story_id_foreign` (`story_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_email_template_id_foreign` (`email_template_id`),
  ADD KEY `tasks_story_id_foreign` (`story_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `default_tasks`
--
ALTER TABLE `default_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `journal_stories`
--
ALTER TABLE `journal_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal_story_submissions`
--
ALTER TABLE `journal_story_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `story_scores`
--
ALTER TABLE `story_scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `default_tasks`
--
ALTER TABLE `default_tasks`
  ADD CONSTRAINT `default_tasks_email_template_id_foreign` FOREIGN KEY (`email_template_id`) REFERENCES `email_templates` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `journal_stories`
--
ALTER TABLE `journal_stories`
  ADD CONSTRAINT `journal_stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `journal_story_submissions`
--
ALTER TABLE `journal_story_submissions`
  ADD CONSTRAINT `journal_story_submissions_journal_id_foreign` FOREIGN KEY (`journal_id`) REFERENCES `journals` (`id`),
  ADD CONSTRAINT `journal_story_submissions_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`),
  ADD CONSTRAINT `journal_story_submissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `story_scores`
--
ALTER TABLE `story_scores`
  ADD CONSTRAINT `story_scores_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_email_template_id_foreign` FOREIGN KEY (`email_template_id`) REFERENCES `email_templates` (`id`),
  ADD CONSTRAINT `tasks_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
