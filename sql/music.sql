-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 09:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_cat`
--

CREATE TABLE `music_cat` (
  `music_id` int(10) NOT NULL,
  `music_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music_cat`
--

INSERT INTO `music_cat` (`music_id`, `music_type`) VALUES
(7, 'hu'),
(2, 'igtyh'),
(5, 'kjb'),
(1, 'Melody'),
(6, 'ujj'),
(4, 'uk'),
(8, 'yhu');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int(10) NOT NULL,
  `playlist_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `playlist_name`) VALUES
(1, 'Mine'),
(2, 'Malayalam'),
(3, 'Hollywood'),
(4, 'Hollywood'),
(5, 'Hollywood'),
(6, 'Hollywood');

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `singer_id` int(10) NOT NULL,
  `singer_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`singer_id`, `singer_name`) VALUES
(1, 'Anirudh'),
(6, 'hyb'),
(5, 'kj'),
(8, 'nuiohn'),
(7, 'uhjn'),
(4, 'uih');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(10) NOT NULL,
  `track_name` varchar(40) NOT NULL,
  `track_type` varchar(40) NOT NULL,
  `track_desc` varchar(40) NOT NULL,
  `track_singer_id` int(10) NOT NULL,
  `track_music_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_name`, `track_type`, `track_desc`, `track_singer_id`, `track_music_id`) VALUES
(5, 'iuhyiu', 'ujhg', 'ghbhk', 5, 5),
(8, 'ouhnso', 'uguihiu', 'oih', 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `r_password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `r_password`, `email`) VALUES
('Admin', 'admin', 'admin', 'admin@admin.com'),
('Ani', 'ani', 'ani', 'ani@xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_cat`
--
ALTER TABLE `music_cat`
  ADD PRIMARY KEY (`music_id`),
  ADD UNIQUE KEY `music_type` (`music_type`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlist_id`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`singer_id`),
  ADD UNIQUE KEY `singer_name` (`singer_name`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`),
  ADD KEY `track_singer_id` (`track_singer_id`),
  ADD KEY `track_music_id` (`track_music_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_cat`
--
ALTER TABLE `music_cat`
  MODIFY `music_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `singer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`track_singer_id`) REFERENCES `singer` (`singer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `track_ibfk_2` FOREIGN KEY (`track_music_id`) REFERENCES `music_cat` (`music_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
