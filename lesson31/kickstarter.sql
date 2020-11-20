-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2020 г., 09:16
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson31`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kickstarter`
--

CREATE TABLE `kickstarter` (
  `id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `goal` int(50) NOT NULL,
  `donated` int(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `user` varchar(60) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kickstarter`
--

INSERT INTO `kickstarter` (`id`, `title`, `description`, `goal`, `donated`, `img`, `user`, `place`) VALUES
(1, '???????', '???????', 200, 170, 'dabi.png', 'LikeWalker', 'Yakutsk'),
(2, '????', '???', 200, 30, 'dabi.png', 'LikeWalker', 'Yakutsk'),
(3, '???????', '?????', 200, 30, 'dabi.png', 'LikeWalker', 'Yakutsk');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kickstarter`
--
ALTER TABLE `kickstarter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kickstarter`
--
ALTER TABLE `kickstarter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
