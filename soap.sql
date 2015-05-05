-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 05 2015 г., 12:18
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `soap`
--

-- --------------------------------------------------------

--
-- Структура таблицы `autos`
--

CREATE TABLE IF NOT EXISTS `autos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `max_speed` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `autos`
--

INSERT INTO `autos` (`id`, `brand`, `model`, `year`, `capacity`, `color`, `max_speed`, `price`, `img`) VALUES
(1, 'Artiodactyls', 'Horse', '1960', '1', 'shabby', '5', '500', ''),
(2, 'Star Wars', 'The Death Star', '3000', '500 0000', 'black', '8000', '15 602 022 489 829 821 422 840 226,94 ', ''),
(3, 'Carpet', 'Magic carpet', '1219', 'Carpet', 'purl', '980', 'a bag of gold', 'carpet.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
