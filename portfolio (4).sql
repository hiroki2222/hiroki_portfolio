-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 04:49 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `status`) VALUES
(1, 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', 'U'),
(3, 'ronaldinho@gmail.com', '0e32f4c96203f8922bbe66be973c3ed6', 'U'),
(4, 'nozomi@gmail.com', '1fcfd37c3b682f26492f45ae32239f1c', 'U'),
(5, 'yui@gmail.com', '5f40858f87b0c54ee53f49636624682c', 'U'),
(6, 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `received_user_id` int(11) NOT NULL,
  `nth` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `received_user_id`, `nth`, `created_at`) VALUES
(1, 1, 4, 0, '2020-04-11 18:13:11'),
(2, 1, 4, 0, '2020-04-11 18:13:12'),
(3, 1, 5, 0, '2020-04-11 18:13:13'),
(4, 1, 4, 0, '2020-04-12 18:13:14'),
(5, 1, 5, 0, '2020-04-12 18:13:15'),
(6, 1, 5, 0, '2020-04-12 18:13:15'),
(7, 1, 4, 0, '2020-04-12 18:16:47'),
(8, 1, 5, 0, '2020-04-12 18:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `user_id1`, `user_id2`) VALUES
(6, 1, 5),
(7, 4, 6),
(8, 4, 6),
(9, 1, 4),
(10, 1, 4),
(11, 1, 5),
(12, 1, 4),
(13, 1, 4),
(14, 1, 4),
(15, 1, 5),
(16, 1, 5),
(17, 1, 4),
(18, 1, 5),
(19, 1, 5),
(21, 2, 5),
(22, 5, 3),
(23, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `received_user_id` int(11) NOT NULL,
  `textmessage` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `received_user_id`, `textmessage`, `created_at`) VALUES
(8, 6, 4, 'test desu', '2020-04-13 18:40:26'),
(9, 4, 6, 'return test desu', '2020-04-13 18:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `like_gender` varchar(1) NOT NULL,
  `job` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `user_image1` varchar(255) DEFAULT NULL,
  `user_image2` varchar(255) DEFAULT NULL,
  `user_image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `address`, `age`, `gender`, `like_gender`, `job`, `school`, `hobby`, `user_image1`, `user_image2`, `user_image3`) VALUES
(1, 'user1', 'japan', '25', 'm', 'f', 'engineer', 'meiji', 'soccer', 'gorilla.png', NULL, NULL),
(3, 'Ronaldinho', 'overseas', '40', 'm', 'f', 'soccer player', '', 'soccer', '20191014_Ronaldinho_GettyImages.jpg', NULL, NULL),
(4, 'sasaki nozomi', 'japan', '33', 'f', 'm', 'actress', '', 'cooking', 'nozomisasaki.jpg', NULL, NULL),
(5, 'aragaki yui', 'japan', '32', 'f', 'm', 'actress', '', '', 'A-0012.jpg', NULL, NULL),
(6, 'user2', ' ç§‹ç”°çœŒ akita', '25', 'm', 'f', 'no job', 'kredo', 'sleeping', 'rice.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
