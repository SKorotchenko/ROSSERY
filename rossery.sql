-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 07 2014 г., 17:58
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `rossery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `hash` varchar(33) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `hash`, `email`) VALUES
(1, 'ec15d79e36e14dd258cfff3d48b73d35', 'bladetm13@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `field` tinyint(4) NOT NULL,
  `preview` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `back_color` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `timestamp`, `name`, `content`, `field`, `preview`, `image`, `back_color`) VALUES
(1, 0, 'Azimut 86S', 'Web design & development', 0, 'img/proj1.jpg', 'img/1stImg.jpg', 'black'),
(2, 1415367239, 'Test', '<p>Web design &amp; development</p>\r\n', 1, 'img/socialButtons.png', 'img/1stImg.jpg', 'black'),
(4, 1415367351, 'kartinko', '<p>image</p>\r\n', 2, 'img/3.jpeg', 'img/3.jpeg', 'black'),
(5, 1415197373, 'Azimut 86Smile', '<p>smile =)</p>\r\n', 2, 'img/proj1.jpg', 'img/1stImg.jpg', 'black');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
