-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 05 2016 г., 22:42
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `garcy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adminpanel`
--

CREATE TABLE IF NOT EXISTS `adminpanel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `login`, `password`) VALUES
(1, 'Garcy', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Структура таблицы `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Дамп данных таблицы `cms`
--

INSERT INTO `cms` (`id`, `page_id`, `link`, `type`) VALUES
(2, 0, 'ps', 'category'),
(3, 0, 'ps/games', 'entry'),
(10, 42887780, 'about', 'static');

-- --------------------------------------------------------

--
-- Структура таблицы `cms_static`
--

CREATE TABLE IF NOT EXISTS `cms_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `cms_static`
--

INSERT INTO `cms_static` (`id`, `page_id`, `title`, `content`) VALUES
(6, 42887780, 'Обо мне', '<h2 style="text-align: center;">Printagraph</h2>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/public/uploads/ededwedede.png" alt="" width="500" height="500" /></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
