-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-07-06 04:00:29
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `my_test_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'men'),
(2, 'women');

-- --------------------------------------------------------

--
-- 資料表結構 `fruit`
--

CREATE TABLE `fruit` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `intro`) VALUES
(1, '蘋果', ''),
(2, '香蕉', ''),
(3, '芒果', ''),
(4, '西瓜', ''),
(5, '柳丁', ''),
(6, '榴槤', '很臭'),
(7, '西瓜', '很甜很大');

-- --------------------------------------------------------

--
-- 資料表結構 `phone`
--

CREATE TABLE `phone` (
  `id` int(5) UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `phone`
--

INSERT INTO `phone` (`id`, `phone`, `user_id`) VALUES
(1, ' 0944444444', 8),
(2, ' 0977723123', 8),
(3, ' 09242461242', 9),
(4, ' 0988111111', 12);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` tinyint(3) NOT NULL,
  `price` int(6) UNSIGNED NOT NULL,
  `picture` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `picture`) VALUES
(1, 'ironman', 1, 2000, 'ironman.jpg'),
(2, 'spiderman', 1, 500, 'spiderman.jpg'),
(3, 'black widow', 2, 1200, 'blackwidow.jpg'),
(4, 'black panther', 1, 3000, 'blackpanther.jpg'),
(5, 'superman', 1, 1300, 'superman.jpg'),
(6, 'wonder woman', 2, 1340, 'wonderwoman.jpg'),
(7, 'batman', 1, 1900, 'batman.jpg'),
(8, 'scarlet witch', 2, 900, 'scarletwitch.jpg'),
(9, 'wolverine', 1, 560, 'wolverine.jpg'),
(10, 'cyclops', 1, 699, 'cyclops.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `product_photos`
--

CREATE TABLE `product_photos` (
  `id` int(3) UNSIGNED NOT NULL,
  `img_name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product_photos`
--

INSERT INTO `product_photos` (`id`, `img_name`, `product_id`) VALUES
(1, '1.png', 1),
(2, '4.png', 1),
(3, '7.png', 1),
(4, '25.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `account`, `password`, `create_time`, `valid`) VALUES
(1, 'Tom', '0911111111', 'tom@test.com', 'tom', '', '2021-06-21 09:45:27', 1),
(2, 'May', '0912222223', 'may@test.com', 'may', '', '2021-06-21 09:57:50', 1),
(3, 'Joe', '0933333333', 'joe@test.com', 'joe', '', '2021-06-21 10:15:06', 1),
(4, 'Mike', '0922222222', 'mike@test.com', 'mike', '', '2021-06-21 10:25:00', 1),
(5, 'Sue', '0922222222', 'sue@test.com', 'sue', '', '2021-06-21 10:25:00', 0),
(6, 'Helen', '0922222222', 'helen@test.com', 'helen', '', '2021-06-21 10:25:00', 1),
(7, 'Shawn', '0988888888,0988888887', 'shawn@test.com', 'shawn', '', '2021-06-21 10:48:11', 1),
(8, 'Peter', '0944444444,0977723123', 'peter@test.com', 'peter', '', '2021-06-21 11:14:00', 1),
(9, 'Ann', '09242461242', 'ann@test.com', 'ann', '', '2021-06-21 13:45:41', 1),
(10, 'Adam', NULL, 'adam@test.com', 'adam', '827ccb0eea8a706c4c34a16891f84e7b', '2021-06-21 15:43:55', 1),
(11, 'Jack', NULL, NULL, 'jack', 'dcddb75469b4b4875094e14561e573d8', '2021-06-21 16:11:27', 1),
(13, 'Jay', '0912222222', 'jay@test.ocm', 'jay', '', '2021-06-24 09:55:05', 1),
(14, 'Mary', '0912222222', 'mary@test.ocm', 'mary', '', '2021-06-24 10:07:18', 1),
(15, 'Tony', '0912222222', 'tony@test.ocm', 'tony', '', '2021-06-24 10:14:58', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `user_like`
--

CREATE TABLE `user_like` (
  `id` int(7) UNSIGNED NOT NULL,
  `product_id` int(5) UNSIGNED NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_like`
--

INSERT INTO `user_like` (`id`, `product_id`, `user_id`) VALUES
(1, 2, 4),
(2, 6, 2),
(3, 1, 1),
(4, 2, 1),
(5, 3, 1),
(6, 5, 2),
(7, 5, 8),
(8, 2, 5),
(9, 2, 9);

-- --------------------------------------------------------

--
-- 資料表結構 `user_order`
--

CREATE TABLE `user_order` (
  `id` int(6) UNSIGNED NOT NULL,
  `product_id` int(5) UNSIGNED NOT NULL,
  `user_id` int(6) UNSIGNED NOT NULL,
  `amount` int(4) UNSIGNED NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_order`
--

INSERT INTO `user_order` (`id`, `product_id`, `user_id`, `amount`, `order_date`) VALUES
(1, 2, 3, 10, '2021-06-20'),
(2, 1, 2, 3, '2021-06-20'),
(3, 3, 1, 4, '2021-06-20'),
(4, 7, 5, 2, '2021-06-21'),
(5, 2, 6, 6, '2021-06-21'),
(6, 6, 3, 4, '2021-06-21'),
(7, 3, 1, 5, '2021-06-21'),
(8, 5, 7, 3, '2021-06-21'),
(9, 4, 2, 6, '2021-06-22'),
(10, 8, 3, 5, '2021-06-22'),
(11, 4, 2, 3, '2021-06-23'),
(12, 7, 3, 1, '2021-06-23');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product_photos`
--
ALTER TABLE `product_photos`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_like`
--
ALTER TABLE `user_like`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_photos`
--
ALTER TABLE `product_photos`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_like`
--
ALTER TABLE `user_like`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
