-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-02-26 19:01:51
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
-- 数据库： `p5`
--

-- --------------------------------------------------------

--
-- 表的结构 `character_p5`
--

CREATE TABLE `character_p5` (
  `character_number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `introduction` text NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `character_p5`
--

INSERT INTO `character_p5` (`character_number`, `name`, `introduction`, `image`) VALUES
(1, 'Ren Amamiya', 'As a part of the player, the protagonist of this game.', 'images/01.png'),
(2, 'Ryuji Sakamoto', 'A 16-year-old who studied in high school with the protagonist.', 'images/02.png'),
(3, 'Morgana', 'In a different world, he accidentally helps the protagonist.', 'images/03.png'),
(4, 'Ann Takamaki', 'Innocent High school students.', 'images/04.png'),
(5, 'Yusuke Kitagawa', 'Good at art.', 'images/05.png'),
(6, 'Makoto Niijima', 'Student president.', 'images/06.png');

--
-- 转储表的索引
--

--
-- 表的索引 `character_p5`
--
ALTER TABLE `character_p5`
  ADD PRIMARY KEY (`character_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
