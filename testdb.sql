-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 12 月 06 日 16:30
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
-- 資料表結構 `product`
--

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

CREATE TABLE `user01` (
  `ID` int NOT NULL,
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` int NOT NULL,
  `Nickname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Height` int NOT NULL,
  `Weight` int NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user01`
--

INSERT INTO `user01` (`ID`, `Username`, `Password`, `Nickname`, `Height`, `Weight`, `Created_at`) VALUES
(1, 'ggyy', 123456, 'gy', 170, 110, '2022-12-06 07:22:06'),
(2, 'Capybara', 123456, '水豚君', 50, 50, '2022-12-06 07:23:03'),
(3, 'turtle', 123456, '烏龜', 50, 250, '2022-12-06 07:23:42'),
(4, '❤❤❤', 123456, '佳佳', 160, 8787, '2022-12-06 07:52:34'),
(5, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:52:41'),
(6, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:52:47'),
(7, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:52:52'),
(8, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:52:55'),
(9, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:52:56'),
(10, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:52:58'),
(11, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:00'),
(12, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:01'),
(13, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:03'),
(14, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:05'),
(15, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:07'),
(16, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:09'),
(17, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:14'),
(18, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:16'),
(19, '假帳號', 8787, '假暱稱', 100, 100, '2022-12-06 07:53:18');

--
-- 已傾印資料表的索引
--

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user01`
--
ALTER TABLE `user01`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
