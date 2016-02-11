-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 11 2016 г., 16:46
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bd1`
--
CREATE DATABASE `bd1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd1`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'title1', 'qwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwerty'),
(2, 'title2', 'ytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewqytrewq'),
(3, 'title3', 'qazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxswqazxsw'),
(4, 'title4', 'wsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaqwsxzaq');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `author` varchar(26) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `author`, `comment`) VALUES
(1, 1, 'User', 'qwertyuiopasdfghjklzxcvbnm'),
(2, 2, 'user', 'vnkaeudgbdsgjkdsbvjkdsbvsdbvdbvfshlvbjldahbvhlbvlhdbv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
