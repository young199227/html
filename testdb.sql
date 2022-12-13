-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 12 月 13 日 16:26
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
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '建單日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `food01`
--

INSERT INTO `food01` (`ID`, `Pname`, `Price`, `Pnum`, `Created_at`) VALUES
(1, '雞腿飯', 90, 1, '2022-12-13 07:19:02'),
(2, '雞腿飯', 100, 1, '2022-12-13 07:33:42');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `ID` int NOT NULL COMMENT '編號',
  `Pname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品名稱',
  `Price` int NOT NULL COMMENT '價格',
  `Pnum` int NOT NULL COMMENT '數量',
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '建檔日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`ID`, `Pname`, `Price`, `Pnum`, `Created_at`) VALUES
(1, '咖啡', 1, 45, '2022-12-06 01:04:44'),
(2, '咖啡', 2, 90, '2022-12-06 01:09:20'),
(3, '咖啡', 1, 45, '2022-12-06 01:09:53');

-- --------------------------------------------------------

--
-- 資料表結構 `user01`
--

DROP TABLE IF EXISTS `user01`;
CREATE TABLE `user01` (
  `ID` int NOT NULL,
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nickname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Height` int NOT NULL,
  `Weight` int NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user01`
--

INSERT INTO `user01` (`ID`, `Username`, `Password`, `Nickname`, `Height`, `Weight`, `Created_at`) VALUES
(65, '123', '123123', '2222', 22222, 222, '2022-12-13 01:34:25'),
(66, 'XXX', 'XXX', 'xxx', 123, 100, '2022-12-13 03:44:41'),
(67, '123', 'XXX', 'xxx', 123, 100, '2022-12-13 05:16:29'),
(68, '123213', '123213213', '12321', 111, 7, '2022-12-13 05:43:10'),
(69, '123213', '123213213', '12321', 111, 7, '2022-12-13 05:43:36'),
(70, '123213', '123213213', '12321', 111, 7, '2022-12-13 05:44:19'),
(71, '123213', '123213213', '12321', 111, 7, '2022-12-13 05:44:20'),
(72, '123213', '123213213', '12321', 111, 7, '2022-12-13 05:44:21'),
(73, '123213', '123213213', '12321', 111, 7, '2022-12-13 05:44:21'),
(74, '12354124', '12321222', '12321', 111, 7, '2022-12-13 05:44:54'),
(75, '12312321', '123212222', '11223', 111, 90, '2022-12-13 05:46:49'),
(76, '123123213', '32131231232', '12312321', 111, 87, '2022-12-13 05:59:55');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `food01`
--
ALTER TABLE `food01`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `user01`
--
ALTER TABLE `user01`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `food01`
--
ALTER TABLE `food01`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user01`
--
ALTER TABLE `user01`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
