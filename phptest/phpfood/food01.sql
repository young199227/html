-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 12 月 19 日 14:38
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
-- 資料表結構 `food01`
--

DROP TABLE IF EXISTS `food01`;
CREATE TABLE `food01` (
  `ID` int NOT NULL COMMENT '編號',
  `Pname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '便當名稱',
  `Price` int NOT NULL COMMENT '單價',
  `Pnum` int NOT NULL COMMENT '數量',
  `Premark` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '備註',
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '建單日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `food01`
--

INSERT INTO `food01` (`ID`, `Pname`, `Price`, `Pnum`, `Premark`, `Created_at`) VALUES
(19, '招牌飯', 70, 10, '77777', '2022-12-14 02:00:23'),
(20, '滷排骨', 70, 16, '111', '2022-12-14 02:02:32'),
(21, '爌肉飯', 70, 13, '321', '2022-12-14 02:03:25'),
(27, '雞排飯', 80, 1, '-30', '2022-12-19 06:21:21'),
(28, '超大雞排飯', 100, 1, '-100', '2022-12-19 06:21:43');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `food01`
--
ALTER TABLE `food01`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `food01`
--
ALTER TABLE `food01`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
