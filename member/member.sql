-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023 年 01 月 10 日 16:22
-- 伺服器版本： 8.0.31-0ubuntu0.22.04.1
-- PHP 版本： 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `testdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `Id` int NOT NULL,
  `Username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`Id`, `Username`, `Password`, `Email`, `Created_at`) VALUES
(7, '123', '$2y$10$9zdS7dcLz4yTH0uUV3TjyuSgoMhWam11oNCYjzcT1wxfzgVj9usqu', '123', '2023-01-10 03:16:40'),
(8, '123', '$2y$10$jry4GNJwX9AueG0HMfLdAOaS8NCeQkYwgdZo7gLaHs1peUblQa9Nq', '123', '2023-01-10 03:41:56'),
(9, '12', '$2y$10$PXXCNM2wvy4mUAosrZ3hYOxy809mt1Qcx7VnEhcoJF9.ppF/RlgHK', '12', '2023-01-10 06:26:24');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
