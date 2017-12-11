-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: db3.ho.ua
-- Время создания: Дек 11 2017 г., 13:23
-- Версия сервера: 5.6.38-log
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `release_year` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `stars` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`, `release_year`, `format`, `stars`) VALUES
(1, 'Blazing Saddles', '1974', 'VHS', 'Mel Brooks, Clevon Little, Harvey Korman, Gene Wilder, Slim Pickens, Madeline Kahn'),
(2, 'Casablanca', '1942', 'DVD', 'Humphrey Bogart, Ingrid Bergman, Claude Rains, Peter Lorre'),
(3, 'Charade', '1953', 'DVD', 'Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
(4, 'Cool Hand Luke', '1967', 'VHS', 'Paul Newman, George Kennedy, Strother Martin'),
(5, 'Butch Cassidy and the Sundance Kid', '1969', 'VHS', 'Paul Newman, Robert Redford, Katherine Ross'),
(6, 'The Sting', '1973', 'DVD', 'Robert Redford, Paul Newman, Robert Shaw, Charles Durning'),
(7, 'The Muppet Movie', '1979', 'DVD', 'Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton'),
(8, 'Get Shorty ', '1995', 'DVD', 'John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
(9, 'My Cousin Vinny', '1992', 'DVD', 'Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio'),
(10, 'Gladiator', '2000', 'Blu-Ray', 'Russell Crowe, Joaquin Phoenix, Connie Nielson'),
(11, 'Star Wars', '1977', 'Blu-Ray', 'Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
