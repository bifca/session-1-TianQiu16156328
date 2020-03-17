-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-03-17 22:18:39
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `kon`
--

-- --------------------------------------------------------

--
-- 表的结构 `kon_film`
--

CREATE TABLE `kon_film` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `info` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `kon_film`
--

INSERT INTO `kon_film` (`id`, `title`, `info`, `link`, `link2`) VALUES
(1, 'Perfect Blue', 'The first long animated film created by Kon Satoshi was released in 1997.', 'video/pb.mp4', 'pb.php'),
(2, 'Tokyo Godfather', 'The third long animated film by Kon Satoshi was released in 2003.', 'video/tg.mp4', 'tg.php'),
(3, 'Papurika', 'The fourth animated film by Kon Satoshi was released in 2006.', 'video/p.mp4', 'p.php');

--
-- 转储表的索引
--

--
-- 表的索引 `kon_film`
--
ALTER TABLE `kon_film`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `kon_film`
--
ALTER TABLE `kon_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
