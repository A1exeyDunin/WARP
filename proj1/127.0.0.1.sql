-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 25 2016 г., 21:36
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'МТ-ЛБМШ', 'МТ-ЛБМШ — украинская боевая машина пехоты на шасси МТ-ЛБ. Представляет собой модернизацию МТ-ЛБ путем установки боевого модуля КБА-105 «Шквал» и более мощного двигателя, что позволило значительно повысить огневую мощь и маневренность боевой машины.'),
(2, 'Technology', 'Technology ("science of craft", from Greek τέχνη, techne, "art, skill, cunning of hand"; and -λογία, -logia[3]) is the collection of techniques, skills, methods and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. Technology can be the knowledge of techniques, processes, etc. or it can be embedded in machines, computers, devices and factories, which can be operated by individuals without detailed knowledge of the workings of such things.\r\n\r\nThe human species'' use of technology began with the conversion of natural resources into simple tools. The prehistoric discovery of how to control fire and the later Neolithic Revolution increased the available sources of food and the invention of the wheel helped humans to travel in and control their environment. Developments in historic times, including the printing press, the telephone, and the Internet, have lessened physical barriers to communication and allowed humans to interact freely on a global scale. The steady progress of military technology has brought weapons of ever-increasing destructive power, from clubs to nuclear weapons.\r\n\r\nTechnology has many effects. It has helped develop more advanced economies (including today''s global economy) and has allowed the rise of a leisure class. Many technological processes produce unwanted by-products, known as pollution, and deplete natural resources, to the detriment of Earth''s environment. Various implementations of technology influence the values of a society and new technology often raises new ethical questions. Examples include the rise of the notion of efficiency in terms of human productivity, a term originally applied only to machines, and the challenge of traditional norms.\r\nPhilosophical debates have arisen over the use of technology, with disagreements over whether technology improves the human condition or worsens it. Neo-Luddism, anarcho-primitivism, and similar reactionary movements criticise the pervasiveness of technology in the modern world, arguing that it harms the environment and alienates people; proponents of ideologies such as transhumanism and techno-progressivism view continued technological progress as beneficial to society and the human condition.'),
(3, 'The Geography Portal', 'Geography is the science that studies the lands, the features, the inhabitants, and the phenomena of the Earth. A literal translation would be "to describe or write about the Earth". The first person to use the word "geography" was Eratosthenes (276–194 BC). Four historical traditions in geographical research are the spatial analysis of the natural and the human phenomena (geography as the study of distribution), the area studies (places and regions), the study of the human-land relationship, and research in the Earth sciences. Modern geography is an all-encompassing discipline that foremost seeks to understand the Earth and all of its human and natural complexities—not merely where objects are, but how they have changed and come to be. Geography has been called "the world discipline" and "the bridge between the human and the physical science". Geography is divided into two main branches: human geography and physical geography.'),
(4, 'Гайд по дестру (Destroyer/Titan)', 'Дестроер- класс на первый взгляд простой, но также и неоднозначный во всех смыслах. Обладает большим запасом ХП, максимальным сопротивлением к дебаффам, огромной физической атакой. Имеет возможность носить тяжелую броню что дает ему неплохую защиту. Но в  тоже время самый медленный класс, обладает слабой точностью, но благодаря лимитам эти недостатки на некоторое время исчезают и дест превращается в машину убийства.\r\n\r\nПараметры класса:\r\n\r\nSTR (сила)  40 — (влияет на П.атаку).\r\n\r\nDEX (ловкость)  26 — (влияет на точность, скорость, силу и шанс критических ударов, уворот, скорость атаки).\r\n\r\nCON (выносливость) 47 — (влияет на количество ХП, скорость регенерации ХП, сопротивление стану, кровотечению, переносимый вес).\r\n\r\nWIT (сила духа)  12 — (влияет на скорость каста).\r\n\r\nINT (интеллект)  18 — (влияет на силу Маг.атаки и шанс наложения магических дебаффов).\r\n\r\nMEN (сила воли)  27 — (влияет на М.деф, количество МП и скорость восстановления МП).'),
(5, 'тест_test', 'тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test тест_test '),
(31, '10101001000', 'йцукйцукйцукйцукйцукйцукйцукйцукйцук'),
(32, '1', 'gdgbdhdxhdxhdxgxgxg'),
(33, 'thrfxnjhtjj', 'fgkchhcgktyk'),
(34, '657657567', 'trgfxnfx fx hgx'),
(35, '43664363', 'dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf dsfdzf '),
(36, 'dfsdf545346', 'rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* rgvfdsb  dsf fd &^%*^%&*&* '),
(37, 'cnfnmz1', 'grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&) grgs7t &^&^*&^&(^&)  '),
(38, 'HDFH', 'FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  FDHZDF  '),
(39, '788778787878778', 'HFGXJNGCFNJGXFJMGMJFXRYJURSY 5U 54SU S U5S U S'),
(40, 'RTSYHXTJNX  4636VQ34', 'GRDFDZFESHU5RH ZD HHXDHRYSERXHRTSUZETDJUDXZEH'),
(41, 'Y55656^*%^&%^&%^$&^#&$#', 'GFDXGDXHXDTGHTDGCHNXDGXDF  AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=146 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `author`, `comment`) VALUES
(1, 1, 'User', 'qwertyuiopasdfghjklzxcvbnm'),
(2, 2, 'user', 'vnkaeudgbdsgjkdsbvjkdsbvsdbvdbvfshlvbjldahbvhlbvlhdbv'),
(131, 2, 'player', 'dfdffdddddd'),
(133, 4, 'валера', 'кукукукукукукукукукук'),
(134, 4, 'колян', 'прочитал'),
(135, 3, 'user3', 'dsdsadsadasdasdad  663636'),
(144, 38, '5757575', 'jnksdgnd'),
(145, 38, '5746fgjhgfjkdjk', 'kjkjd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
