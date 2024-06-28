-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 03 2024 р., 23:48
-- Версія сервера: 8.0.30
-- Версія PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `BlogData`
--

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `date_published` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `image_url`, `date_published`, `content`) VALUES
(1, 'Liverpool wins Premier League title', 'https://i2-prod.liverpool.com/article28480096.ece/ALTERNATES/s615/0_GettyImages-1870746655.jpg', '2020-07-22', 'After 30 years, Liverpool Football Club finally wins the Premier League title.'),
(2, 'Manchester City signs top striker', 'https://i.goalzz.com/?i=afp%2F20230919%2F20230919-afp_33vl3b9_afp.jpg', '2020-08-10', 'Manchester City secures a deal with a top striker to strengthen their squad for the upcoming Premier League season.'),
(3, 'Chelsea defeats Arsenal in London derby', 'https://www.telegraph.co.uk/content/dam/football/2023/09/02/TELEMMGLPICT000347716523_16936715103110_trans_NvBQzQNjv4BqNFEZ_nc3tZllLR1uBoBzcOJ1kgmYPYl9XD26_qXr70Y.jpeg?imwidth=680', '2020-09-05', 'Chelsea FC emerges victorious in a thrilling London derby against Arsenal FC.'),
(4, 'Tottenham Hotspur appoints new manager', 'https://static.independent.co.uk/2023/10/27/22/GettyImages-1760312945.jpg', '2020-09-20', 'Tottenham Hotspur announces the appointment of a new manager following the departure of Mauricio Pochettino.'),
(5, 'Leicester City qualifies for Champions League', 'https://images2.minutemediacdn.com/image/fetch/c_fill,g_auto,f_auto,h_2155,w_3200/https%3A%2F%2Ffoxesofleicester.com%2Fwp-content%2Fuploads%2Fgetty-images%2F2017%2F07%2F1333402717.jpeg', '2020-10-03', 'Leicester City secures a spot in the UEFA Champions League after finishing in the top four of the Premier League table.'),
(6, 'Arsenal signs promising young talent', 'https://static.independent.co.uk/2023/12/28/22/newFile-1.jpg?width=1200&height=1200&fit=crop', '2020-10-15', 'Arsenal FC completes the signing of a highly-rated young player from the youth academy.'),
(7, 'Manchester United suffers defeat in Manchester derby', 'https://media.ouest-france.fr/v1/pictures/MjAyMzEyYWI2NzY1YjVmZDQyMDE5YTg1ZmZiZmRhNDgxYzBiNjg?width=1260&height=708&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=4d21ba00a6d2aa03e5671a1b29ce7c676c548241153c32b3fb3640483673b177', '2020-11-01', 'Manchester United faces a disappointing defeat against local rivals Manchester City in the Manchester derby.'),
(8, 'Liverpool\'s star midfielder extends contract', 'https://prod-media.beinsports.com/image/1699092075922_433f7272-e2b9-445a-b0ff-4fda81df0828.jpg', '2020-11-15', 'Liverpool FC announces the contract extension of their star midfielder, securing his services for the foreseeable future.'),
(9, 'Chelsea\'s manager wins Manager of the Month award', 'https://www.telegraph.co.uk/content/dam/football/2023/04/18/TELEMMGLPICT000332548828_trans_NvBQzQNjv4BqAiJQrZkdRSYRHeCDHXkbf5gojZYlP8f0i9h2tPqCNsM.jpeg', '2020-12-01', 'Chelsea FC manager receives the Premier League Manager of the Month award for his team\'s outstanding performance.');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
