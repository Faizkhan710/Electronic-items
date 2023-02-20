-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 10:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpri`
--

CREATE TABLE `cpri` (
  `c_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `reamerks` varchar(255) NOT NULL,
  `c_result` varchar(255) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpri`
--

INSERT INTO `cpri` (`c_id`, `title`, `reamerks`, `c_result`, `t_id`) VALUES
(2, 'Lewis Fleming', '50', '1', 1000000031),
(3, 'Lewis Fleming', '50', '1', 1000000031),
(4, 'Lewis Fleming', '50', '0', 1000000031),
(5, 'Lewis Fleming', 'Aliqua Quae ducimus', '1', 1000000036),
(6, 'Lewis Fleming', 'Excepteur quasi aliq', '0', 1000000034),
(7, 'Lewis Fleming', 'Excepteur quasi aliq', '0', 1000000034),
(8, 'Lewis Fleming', 'Non in veritatis ist', '1', 1000000034),
(9, 'Lewis Fleming', 'At ad dignissimos cu', '0', 1000000034),
(10, 'Lewis Fleming', 'Ut quo ad provident', '0', 1000000034),
(11, 'Lewis Fleming', 'Ut quo ad provident', '0', 1000000034),
(12, 'Lewis Fleming', 'Ut quo ad provident', '0', 1000000034),
(13, 'Lewis Fleming', 'Amet voluptas perfe', '1', 1000000034),
(14, 'Lewis Fleming', 'Non libero est iure ', '1', 1000000034),
(15, 'Lewis Fleming', 'Non libero est iure ', '1', 1000000034),
(16, 'Lewis Fleming', 'Non libero est iure ', '1', 1000000034),
(17, 'Lewis Fleming', 'Officia at cillum de', '0', 1000000034),
(18, 'Lewis Fleming', 'Ad dolorum nostrum d', '0', 1000000034),
(19, 'dumbles', 'Sed ea ipsum omnis v', '1', 1000000040),
(20, 'dumbles', 'Sed ea ipsum omnis v', '1', 1000000040),
(21, 'dumbles', 'Sed ea ipsum omnis v', '1', 1000000040),
(22, 'dumbles', 'Ipsa provident Nam', '1', 1000000040),
(23, 'dumbles', 'Ipsa provident Nam', '1', 1000000040),
(24, 'dumbles', 'Obcaecati lorem eos ', '1', 1000000040),
(25, 'dumbles', 'Aliqua Quae ducimus', '0', 1000000040),
(26, 'dumbles', 'Aliqua Quae ducimus', '', 1000000040),
(27, 'dumbles', 'Aliqua Quae ducimus', '0', 1000000040),
(28, 'dumbles', 'Aliqua Quae ducimus', '0', 1000000040),
(29, 'dumbles', 'Excepteur quasi aliq', '0', 1000000041),
(30, 'dumbles', 'Excepteur quasi aliq', '1', 1000000041),
(31, 'dumbles', '50', '0', 1000000044),
(32, 'dumbles', 'Quis ad aut id irur', '1', 1000000044),
(33, 'keyboard', '50', '1', 1000000045),
(34, 'keyboard', '50', '1', 1000000046),
(35, 'keyboard', '50', '0', 1000000047),
(36, 'keyboard', 'good', '1', 1000000045),
(37, 'Energy Bulb', 'weldone', '1', 1000000049),
(38, 'Energy Bulb', 'good', '1', 1000000050),
(39, 'Energy Bulb', 'average', '1', 1000000051),
(40, 'Energy Bulb', 'bad', '0', 1000000052);

-- --------------------------------------------------------

--
-- Table structure for table `lounch`
--

CREATE TABLE `lounch` (
  `l_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `testing` varchar(255) NOT NULL,
  `cpri_testing` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lounch`
--

INSERT INTO `lounch` (`l_id`, `title`, `description`, `testing`, `cpri_testing`, `price`, `c_id`) VALUES
(1, 'dumbles', '', '', '', 16, 19),
(2, '$title', '$description', '$testing', '$cpri_testing', 0, 0),
(3, 'dumbles', '', '', '', 16, 19),
(4, 'dumbles', 'this will help you to get quality muscles!', 'Leah Cunningham', '1', 16, 19),
(5, 'dumbles', 'this will help you to get quality muscles!', 'Leah Cunningham', '1', 16, 19),
(6, 'dumbles', 'this will help you to get quality muscles!', 'Leah Cunningham', '1', 16, 19),
(7, 'dumbles', 'this will help you to get quality muscles!', 'Leah Cunningham', '1', 16, 19),
(8, 'dumbles', 'Dicta fuga Dolorem ', 'Steven Hendricks', '1', 56, 32),
(9, 'dumbles', 'Dicta fuga Dolorem ', 'Steven Hendricks', '1', 580, 32),
(10, 'dumbles', 'Dicta fuga Dolorem ', 'Steven Hendricks', '1', 296, 32),
(11, 'dumbles', 'Dicta fuga Dolorem ', 'Steven Hendricks', '1', 374, 32),
(12, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 16, 33),
(13, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 56, 34),
(14, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 374, 33),
(15, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 296, 34),
(16, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 56, 34),
(17, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 580, 34),
(18, 'keyboard', 'this is very nice keyboard!', 'tested', '1', 580, 34),
(19, 'Energy Bulb', '220 mgv bulb ', 'yes', '1', 200, 37),
(20, 'Energy Bulb', '220 mgv bulb ', 'yes', '1', 300, 38),
(21, 'Energy Bulb', '220 mgv bulb ', 'yes', '1', 500, 39);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `maker` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `p_code` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `title`, `description`, `maker`, `department`, `p_code`, `img`) VALUES
(100000072, 'Energy Bulb', '220 mgv bulb ', 'rafay', 'eco', 1, 'b1.jpg'),
(100000073, 'Electric Breaker', 'best and easy convert', 'rafay', 'eco', 2, 'b4.jpg'),
(100000074, 'Electric Bulb Holders', '220 v Bulb Holders in best design', 'rafay', 'eco', 3, 'b3.png'),
(100000075, 'Electric Board', 'Best Quality electric boards', 'rafay', 'eco', 4, 'b2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `t_id` int(20) NOT NULL,
  `testing` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `t_status` varchar(255) NOT NULL,
  `tester_name` varchar(255) NOT NULL,
  `t_date` date NOT NULL DEFAULT current_timestamp(),
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`t_id`, `testing`, `remarks`, `result`, `t_status`, `tester_name`, `t_date`, `p_id`) VALUES
(1000000049, 'yes', 'good', '1', 'good', 'rafay', '2022-11-06', 100000072),
(1000000050, 'tested', 'good', '1', 'okay', 'rafay', '2022-11-06', 100000073),
(1000000051, 'tested', 'good', '1', 'okay', 'junaid', '2022-11-06', 100000074),
(1000000052, 'tested', 'good', '1', 'okay', 'rafay', '2022-11-06', 100000075);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `email`, `role`, `passwords`) VALUES
(16, 'rafay', 'rafaymeraj11@gmail.com', '1', '111'),
(17, 'junaid', 'junaid@gmail.com', '2', '111'),
(18, 'azhan', 'azhan@gmail.com', '3', '111'),
(21, 'talha', 'Talhaboss97@gmail.com', '4', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpri`
--
ALTER TABLE `cpri`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `lounch`
--
ALTER TABLE `lounch`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpri`
--
ALTER TABLE `cpri`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `lounch`
--
ALTER TABLE `lounch`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000076;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000053;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
