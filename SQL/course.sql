-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-21 16:56:20
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bark_bijou`
--

-- --------------------------------------------------------

--
-- 資料表結構 `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `cost` float NOT NULL,
  `location_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_start` datetime NOT NULL,
  `coruser_end` datetime NOT NULL,
  `shelf_time_start` datetime NOT NULL,
  `shelf_time_end` datetime NOT NULL,
  `coupons_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `course`
--

INSERT INTO `course` (`id`, `method_id`, `name`, `img_id`, `content`, `cost`, `location_id`, `teacher_id`, `course_start`, `coruser_end`, `shelf_time_start`, `shelf_time_end`, `coupons_id`) VALUES
(1, 2, 'a', 1, 'aaa', 10000, 2, 2, '2025-02-24 13:53:52', '2025-02-28 13:53:52', '2025-02-21 13:53:52', '2025-02-22 13:53:52', 3),
(2, 2, 'b', 2, 'bbb', 1000, 2, 2, '2025-02-24 15:39:25', '2025-02-27 15:39:25', '2025-02-17 15:39:25', '2025-02-20 15:39:25', 2),
(3, 2, 'c', 3, 'ccc', 54132, 2, 3, '2025-02-24 15:40:32', '2025-02-26 15:40:32', '2025-02-11 15:40:32', '2025-02-21 15:40:32', 1),
(4, 1, 'd', 4, 'dddd', 45123, 2, 1, '2025-02-24 15:40:32', '2025-02-28 15:40:32', '2025-02-10 15:40:32', '2025-02-14 15:40:32', 2),
(5, 3, 'e', 5, 'eeee', 7777, 3, 4, '2025-02-25 15:48:17', '2025-02-28 15:48:17', '2025-02-19 15:48:17', '2025-02-24 15:48:17', 3),
(6, 1, 'f', 6, 'fff', 9999, 3, 4, '2025-02-27 15:49:11', '2025-03-05 15:49:11', '2025-02-21 15:49:11', '2025-02-25 15:49:11', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
