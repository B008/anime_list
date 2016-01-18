-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E14 日 08:49
-- サーバのバージョン： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime_list`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `genre_name` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `genres`
--

INSERT INTO `genres` (`id`, `created`, `modified`, `genre_name`) VALUES
(1, '0000-00-00 00:00:00', '2016-01-14 08:37:06', 'アクション/バトル'),
(2, '2016-01-14 08:31:59', '2016-01-14 08:31:59', 'SF'),
(3, '2016-01-14 08:32:21', '2016-01-14 08:39:54', 'ギャグ/コメディ'),
(4, '2016-01-14 08:32:33', '2016-01-14 08:32:33', '学園'),
(5, '2016-01-14 08:36:57', '2016-01-14 08:36:57', 'ホラー'),
(6, '2016-01-14 08:37:40', '2016-01-14 08:37:40', 'サスペンス/ミステリー'),
(7, '2016-01-14 08:39:09', '2016-01-14 08:39:09', 'ファンタジー'),
(8, '2016-01-14 08:42:09', '2016-01-14 08:42:09', 'スポーツ'),
(9, '2016-01-14 08:43:18', '2016-01-14 08:48:28', 'ロボット/メカ'),
(10, '2016-01-14 08:43:33', '2016-01-14 08:46:37', '日常/ほのぼの'),
(11, '2016-01-14 08:44:43', '2016-01-14 08:44:43', '恋愛/ラブコメ'),
(12, '2016-01-14 08:44:49', '2016-01-14 08:44:49', '萌え'),
(13, '2016-01-14 08:45:04', '2016-01-14 08:45:04', 'キッズ'),
(14, '2016-01-14 08:46:24', '2016-01-14 08:46:24', '感動'),
(15, '2016-01-14 08:48:39', '2016-01-14 08:48:39', 'その他');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
