-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.29-MariaDB
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
-- テーブルの構造 `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_times` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `login_times`, `status`) VALUES
(1, 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', 53, 'U'),
(3, 'ronaldinho@gmail.com', '0e32f4c96203f8922bbe66be973c3ed6', 3, 'U'),
(4, 'nozomi@gmail.com', '1fcfd37c3b682f26492f45ae32239f1c', 1, 'U'),
(5, 'yui@gmail.com', '5f40858f87b0c54ee53f49636624682c', 1, 'U'),
(6, 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', 6, 'U'),
(7, 'test1@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a', 1, 'U'),
(8, 'test2@gmail.com', 'ad0234829205b9033196ba818f7a872b', 2, 'U'),
(9, 'test3@gmail.com', '8ad8757baa8564dc136c1e07507f4a98', 1, 'U'),
(10, 'test4@gmail.com', '86985e105f79b95d6bc918fb45ec7727', 0, 'U'),
(11, 'test5@gmail.com', 'e3d704f3542b44a621ebed70dc0efe13', 1, 'U'),
(12, '', 'daf24a58df976e86832223c957f07a60', 0, 'U'),
(13, 'aaaa', '0cc175b9c0f1b6a831c399e269772661', 0, 'U'),
(14, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 0, 'U'),
(15, 'test6@gmail.com', '4cfad7076129962ee70c36839a1e3e15', 1, 'U'),
(16, 'test7@gmail.com', 'b04083e53e242626595e2b8ea327e525', 1, 'U'),
(17, 'test8@gmail.com', '5e40d09fa0529781afd1254a42913847', 1, 'U'),
(18, 'test9@gmail.com', '739969b53246b2c727850dbb3490ede6', 1, 'U'),
(19, 'user3@gmail.com', '92877af70a45fd6a2ed7fe81e1236b78', 1, 'U'),
(20, 'test0415@gmail.com', 'b27cfe96f6bdb602971531ce8e5dc259', 1, 'U'),
(21, 'test04152@gmail.com', 'f2377ae6bb60fa3c8b28029d89e44b5a', 1, 'U'),
(22, 'test04153@gmail.com', 'd84937c531e82882883791a236cfbb50', 1, 'U'),
(23, '082494822cc4bedbca27a896fc77730e', '', 0, 'U'),
(24, '8a2018749981efd5dfd135269daa522f', '', 0, 'U'),
(25, 'test04163@gmail.com', '26e1c86e0603ee07f1a1d03e3303bf1d', 1, 'U'),
(26, 'test04164@gmail.com', '0090132c22cace43f163e3a05f3be752', 0, 'U'),
(27, 'test04165@gmail.com', 'ca6b4e1a26db4ec512b43dac4ea6e633', 1, 'U'),
(28, 'test04166@gmail.com', '1e280a450f34c37b09b3430a0fd26971', 1, 'U'),
(29, 'aaa@gmail.com', '8d7f8f96834d152aa4f1ab35a7e8ebd4', 1, 'U'),
(30, 'test04167@gmail.com', '3f697ef0e2e191c4ffce40b7bf353751', 1, 'U'),
(31, 'test0417@gmail.com', '19dc1fb2eeca1c759079ca8911cae58d', 1, 'U'),
(32, 'test04172@gmail.com', '26978d9908e7583de085d177d63cd6b3', 1, 'U'),
(33, 'test0419@gmail.com', '7262792e2268801a92751ae9de9c1356', 1, 'U'),
(34, 'femalseuser1@gmail.com', '691e74b4d134df55876d4f5e596e17e5', 1, 'U'),
(35, 'femalseuser2@gmail.com', '0ea57675abe660ea05669bca30f5453e', 1, 'U');

-- --------------------------------------------------------

--
-- テーブルの構造 `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reported_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `contacts`
--

INSERT INTO `contacts` (`contact_id`, `category`, `user_id`, `title`, `content`, `reported_id`) VALUES
(6, '', 1, 'thanks', '', 0),
(7, 'feedback', 1, 'super thanks', '', 0),
(8, '', 1, 'he sent me something bad', '', 33),
(9, '', 1, 'he sent me something bad', '', 33),
(10, 'report', 1, 'a', '', 33),
(11, 'feedback', 0, 'it is fun', 'thanks so much', 0),
(12, 'feedback', 0, 'thanks', 'like this website', 0),
(13, 'feedback', 0, 'thanks', 'like this website', 0),
(14, 'recruitment', 0, 'looking for a job', 'how can i apply?', 0),
(15, 'feedback', 6, 'like this', 'great', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `dislikes`
--

CREATE TABLE `dislikes` (
  `dislike_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `received_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `dislikes`
--

INSERT INTO `dislikes` (`dislike_id`, `user_id`, `received_user_id`) VALUES
(1, 1, 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `received_user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `received_user_id`, `created_at`) VALUES
(1, 1, 4, '2020-04-11 18:13:11'),
(2, 1, 4, '2020-04-11 18:13:12'),
(3, 1, 5, '2020-04-11 18:13:13'),
(4, 1, 4, '2020-04-12 18:13:14'),
(5, 1, 5, '2020-04-12 18:13:15'),
(6, 1, 5, '2020-04-12 18:13:15'),
(7, 1, 4, '2020-04-12 18:16:47'),
(8, 1, 5, '2020-04-12 18:16:48'),
(9, 29, 1, '2020-04-16 18:16:55'),
(10, 30, 5, '2020-04-16 21:04:49'),
(11, 1, 5, '2020-04-16 21:06:05'),
(12, 1, 4, '2020-04-16 21:12:25'),
(13, 1, 5, '2020-04-16 22:23:53'),
(14, 1, 5, '2020-04-17 18:43:29'),
(15, 1, 4, '2020-04-17 18:43:48'),
(16, 1, 4, '2020-04-18 18:34:30'),
(17, 1, 4, '2020-04-18 18:34:42'),
(18, 1, 5, '2020-04-18 18:35:00'),
(19, 1, 5, '2020-04-19 23:14:48'),
(20, 1, 33, '2020-04-20 16:32:38'),
(21, 1, 33, '2020-04-20 16:32:40'),
(22, 1, 29, '2020-04-21 17:49:39');

-- --------------------------------------------------------

--
-- テーブルの構造 `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `matches`
--

INSERT INTO `matches` (`match_id`, `user_id1`, `user_id2`) VALUES
(6, 1, 5),
(7, 4, 6),
(8, 4, 6),
(10, 1, 4),
(12, 1, 4),
(16, 1, 5),
(21, 2, 5),
(22, 5, 3),
(23, 5, 3),
(24, 1, 29);

-- --------------------------------------------------------

--
-- テーブルの構造 `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `received_user_id` int(11) NOT NULL,
  `textmessage` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `messages`
--

INSERT INTO `messages` (`message_id`, `user_id`, `received_user_id`, `textmessage`, `created_at`) VALUES
(8, 6, 4, 'test desu', '2020-04-13 18:40:26'),
(9, 4, 6, 'return test desu', '2020-04-13 18:45:21'),
(10, 6, 4, 'return return', '2020-04-14 17:43:04'),
(11, 6, 4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-04-14 17:51:23'),
(12, 6, 4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-04-14 17:52:03'),
(13, 6, 4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-04-14 17:52:56'),
(14, 6, 4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-04-14 17:54:24'),
(15, 6, 4, 'aa', '2020-04-14 17:56:07'),
(16, 6, 4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-04-14 17:57:12'),
(17, 6, 4, 'aaa', '2020-04-14 17:57:39'),
(18, 6, 4, '\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2020-04-14 18:09:12'),
(19, 6, 4, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2020-04-14 18:09:25'),
(20, 6, 4, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2020-04-14 18:09:33'),
(21, 1, 5, 'aaaaaaaa', '2020-04-18 22:20:50'),
(22, 1, 5, 'aaaaaaaaaaaaaa', '2020-04-18 22:20:52'),
(23, 1, 5, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2020-04-18 22:23:08'),
(24, 1, 4, 'test desu', '2020-04-23 00:00:00'),
(25, 1, 4, 'test desu', '2020-04-23 00:00:00'),
(26, 5, 1, 'test2 desu', '2020-04-25 00:00:00'),
(27, 5, 1, 'test dayo', '2020-05-15 00:00:00'),
(28, 5, 1, 'test dayo', '2020-05-15 00:00:00'),
(29, 1, 5, 'ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ãŒé€ã‚Œã‚‹ã‚ˆ', '2020-04-19 23:14:22'),
(30, 1, 5, 'æž¶ç©ºã®ãƒ¦ãƒ¼ã‚¶ãƒ¼ã§ã™', '2020-04-19 23:14:41'),
(31, 1, 4, '<ã“ã‚“ã«ã¡ã¯', '2020-04-20 15:42:31'),
(32, 1, 4, 'ã“ã‚“ã«ã¡ã¯>', '2020-04-20 15:43:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `like_gender` varchar(10) NOT NULL,
  `job` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `profile_comment` varchar(200) NOT NULL,
  `user_image1` varchar(255) DEFAULT NULL,
  `user_image2` varchar(255) DEFAULT NULL,
  `user_image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `username`, `address`, `age`, `gender`, `like_gender`, `job`, `school`, `hobby`, `profile_comment`, `user_image1`, `user_image2`, `user_image3`) VALUES
(1, 'user1', 'japan', '25', 'Male', 'Female', 'engineer', 'meijitest', 'soccer', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaatesttest0418', 'ninja.png', NULL, NULL),
(3, 'Ronaldinho', 'overseas', '40', 'Male', 'Female', 'soccer player', '', 'soccer', '', '20191014_Ronaldinho_GettyImages.jpg', NULL, NULL),
(4, 'sasaki nozomi', 'japan', '33', 'Female', 'Male', 'actress', '', 'cooking', 'yoroshikuyoroshikuyoroshikuyoroshikuyoroshikuyoroshikuyoroshikuyoroshikuyoroshikuyoroshiku', 'nozomisasaki.jpg', NULL, NULL),
(5, 'aragaki yui', 'japan', '32', 'Female', 'Male', 'actress', '', '', '', 'A-0012.jpg', NULL, NULL),
(6, 'user2', ' ç§‹ç”°çœŒ akita', '25', 'Male', 'Female', 'no job', 'kredo', 'sleeping', '', 'kannahashimoto.jpg', NULL, NULL),
(7, 'test1', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(8, 'test2', ' é’æ£®çœŒ aomori', '25', 'Male', 'Female', 'engineer', 'no school', 'soccer', 'aaaa', '20191014_Ronaldinho_GettyImages.jpg', NULL, NULL),
(9, 'test3', ' åŒ—æµ·é“ hokkaido', '25', '', '', '', '', '', '', '', NULL, NULL),
(10, 'test4', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(11, 'test5', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(12, 'joefefw', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(13, 'aaa', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(14, 'user1', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(15, 'test6', ' å²©æ‰‹çœŒ iwate', '25', '', '', '', '', '', '', '', NULL, NULL),
(16, 'test7', ' å²©æ‰‹çœŒ iwate', '', '', '', '', '', '', '', '', NULL, NULL),
(17, 'test8', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(18, 'test9', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(19, 'user3', ' åŒ—æµ·é“ hokkaido', '', '', '', '', '', '', '', '', NULL, NULL),
(20, 'test0415', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(21, 'test04152', '', '', '', '', '', '', '', '', '', NULL, NULL),
(22, 'test04153', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(25, 'test04163', '', '', 'Female', '', '', '', '', '', '', NULL, NULL),
(26, 'test04164', '', '', 'Male', '', '', '', '', '', NULL, NULL, NULL),
(27, 'test04165', '', '', 'Male', '', '', '', '', '', '', NULL, NULL),
(28, 'test04166', '', '', 'Female', '', '', '', '', '', '', NULL, NULL),
(29, 'aaa', ' é’æ£®çœŒ aomori', '40', 'Female', 'Male', 'engineer', 'meiji', 'soccer', 'yorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuonegaishimasuyorosikuone', 'kannahashimoto.jpg', NULL, NULL),
(30, 'test04167', ' å²©æ‰‹çœŒ iwate', '26', 'Male', 'Female', 'engineer', 'meijitest', 'soccer', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '20191014_Ronaldinho_GettyImages.jpg', NULL, NULL),
(31, 'test0417@gmail.com', ' æ ƒæœ¨çœŒ tochigi', '40', 'Male', '', 'nothing', 'nothing', 'nothing', 'hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hello! hell', 'kannahashimoto.jpg', NULL, NULL),
(32, 'test04172@gmail.com', '', '', 'Female', '', '', '', '', '', 'newrelase1.jpg', NULL, NULL),
(33, 'test0419', ' åŒ—æµ·é“ hokkaido', '20', 'Female', 'Male', 'aaaa', 'meiji', 'soccer', 'yoroshiku yoroshikuyoroshiku yoroshikuyoroshiku yoroshikuyoroshiku yoroshikuyoroshiku yoroshikuyoroshiku yoroshiku', 'newrelase1.jpg', NULL, NULL),
(34, 'femalseuser1', ' åŒ—æµ·é“ hokkaido', '20', 'Female', 'Male', '', '', '', '', 'level1.jpg', NULL, NULL),
(35, 'femalseuser2', ' å²©æ‰‹çœŒ iwate', '40', 'Female', '', '', '', '', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`dislike_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `dislike_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
