-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 06:47 PM
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
(2, 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', 'U'),
(3, 'test1@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a', 'U'),
(4, 'sdwd', 'a295ee21b33b0b25968081da59502b44', 'U'),
(5, 'ggrdrmn22@gmail.com', '22c3448441547b76cb29130cab8c12d0', 'U'),
(6, 'efef', 'dcd9ad44f194c1cbf27a241e37e3b2ca', 'U'),
(7, 'rgrgr', '22c3448441547b76cb29130cab8c12d0', 'U'),
(8, 'grgew', 'daf24a58df976e86832223c957f07a60', 'U'),
(9, 'updatetest', 'a4bfa0498feb739f163f013560ef7327', 'U'),
(10, 'gvfff@dwdw', 'ec1300029d900101c46dd03158cb9a13', 'U'),
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `received_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `received_user_id`) VALUES
(1, 1, 8),
(2, 1, 8),
(3, 1, 11),
(4, 1, 8),
(5, 8, 1),
(6, 8, 1);

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
(4, 8, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `address`, `age`, `gender`, `like_gender`, `job`, `school`, `hobby`, `user_image1`, `user_image2`, `user_image3`) VALUES
(1, 'user1', 'japan', '37', 'm', 'm', '', 'a', '', 'ninja.png', '', '0'),
(2, 'user2', 'aaa', '10', 'm', 'm', '', 'a', '', 'kannahashimoto.jpg', '', '0'),
(3, 'test1', 'overseas', '10', 'f', 'f', '', 'a', '0', 'php.png', '', '0'),
(4, 'Hiroki Yoneda', 'aaa', '20', 'f', '', '', 'a', '', 'php.png', '', '0'),
(5, 'joe', 'sss', '30', 'f', '', '', 'b', '', 'php.png', '', '0'),
(6, 'joe', 'sww', '200', 'm', '', '', 'b', '', 'php.png', '', '0'),
(7, 'joe', 'bcc', '100', 'f', '', '', 'b', '', 'php.png', '', '0'),
(8, 'joefefw', 'm', '200', 'm', '', '', 'b', '', 'php.png', '', '0'),
(9, 'updatetest', 'a', '300', 'f', '', '', 'c', '', 'php.png', '', '0'),
(10, 'joefefwswf', 'overseas', '10', 'f', '', '', 'c', 'fef', 'php.png', '', '0'),
(11, 'test', '', '', 'm', '', '', '', '', 'php.png', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
