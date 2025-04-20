-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2025-04-20 16:59:52
-- 服务器版本： 8.0.39
-- PHP 版本： 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `bit102_project`
--

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `ticket_number` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` text COLLATE utf8mb4_general_ci,
  `image_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `approved` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `feedback`
--

INSERT INTO `feedback` (`id`, `ticket_number`, `name`, `rating`, `comment`, `image_path`, `created_at`, `approved`) VALUES
(1, '1', '1', 5, '1', '', '2025-04-19 14:41:59', 0),
(2, '1', '1', 5, '1', '', '2025-04-19 14:42:09', 0),
(5, '1', '1', 5, '1', '', '2025-04-19 14:47:08', 0),
(11, 'zwz', '1', 5, '1', '', '2025-04-19 15:03:19', 1),
(12, 'zwz', 'zwz', 5, 'zwz', '', '2025-04-19 15:04:17', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
