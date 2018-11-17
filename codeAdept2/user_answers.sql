-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 08:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `user_id` varchar(20) NOT NULL,
  `q1` varchar(2) NOT NULL,
  `q2` varchar(2) NOT NULL,
  `q3` varchar(2) NOT NULL,
  `q4` varchar(2) NOT NULL,
  `q5` varchar(2) NOT NULL,
  `q6` varchar(2) NOT NULL,
  `q7` varchar(2) NOT NULL,
  `q8` varchar(2) NOT NULL,
  `q9` varchar(2) NOT NULL,
  `q10` varchar(2) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`user_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `score`) VALUES
('guest1', 'B', 'B', 'C', 'D', 'D', 'C', 'C', 'A', 'B', 'D', 6),
('guest10', 'B', 'B', 'C', 'B', 'B', 'C', 'D', 'B', 'B', 'D', 10),
('guest12', '', '', '', '', '', '', '', '', '', '', 0),
('nikk1212', 'B', 'B', 'C', 'B', 'B', 'C', 'D', 'B', 'B', 'D', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD UNIQUE KEY `user_id` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
