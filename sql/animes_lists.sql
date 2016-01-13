-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E12 日 09:43
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anime_list`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `animes_lists`
--

CREATE TABLE IF NOT EXISTS `animes_lists` (
`id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `program_name` varchar(250) NOT NULL,
  `company` varchar(250) DEFAULT NULL,
  `voice_actor` varchar(250) NOT NULL,
  `voice_actor2` varchar(250) DEFAULT NULL,
  `genre_id` int(11) NOT NULL,
  `genre2` varchar(250) DEFAULT NULL,
  `televising_year` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `animes_lists`
--

INSERT INTO `animes_lists` (`id`, `created`, `modified`, `program_name`, `company`, `voice_actor`, `voice_actor2`, `genre_id`, `genre2`, `televising_year`) VALUES
(1, '2016-01-09 11:45:19', '2016-01-09 11:45:19', '化物語', 'シャフト', '神谷浩史', NULL, 5, '学園もの', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes_lists`
--
ALTER TABLE `animes_lists`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes_lists`
--
ALTER TABLE `animes_lists`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
