-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 23 2014 г., 15:40
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`) VALUES
(1, 'Мужчинам', 'muzhchinam'),
(2, 'Женщинам', 'zhenshinam'),
(3, 'Детям', 'detyam');

-- --------------------------------------------------------

--
-- Структура таблицы `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `member`
--

INSERT INTO `member` (`id`, `username`, `password`) VALUES
(1, 'a', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `cat`, `sub_category`) VALUES
(1, 'Набор погремушек', 'Набор состоит из трех игрушек: кольца, песочные часы и погремушка.\r\n\r\nНабор выполнен из безопасного и прочного пластика.', '393.60', 'dlyamalishey-pogremushki1.jpg', 'muzhchinam', 'muzh_off'),
(2, 'Подарочный набор погремушек', 'Этот оригинальный набор красочных погремушек от Fisher Price станет отличным подарком для маленького мальчика.\r\n\r\nСамолетик выполнен из пластика голубого цвета и дополнен зеркальцем, кораблик представляет собой прорезыватель, а в колесе красной машинки весело тарахтят бусинки.\r\n\r\nВсе погремушки имеют большие пластиковые кольца, за которые можно погремушки подвесить к детской кроватке, к бамперу коляски или дугам развивающего коврика.\r\n\r\nПогремушки способствуют развитию мелкой моторики, хватательных движений, тактильных ощущений и зрения.\r\n\r\nИгрушки выполнены из высококачественного пластика, абсолютно безопасного даже для самых маленьких детей.\r\n\r\nУпаковка: картонная коробка.\r\n\r\nВ комплекте: 3 погремушки.\r\n\r\nРекомендовано для детей от 3-х месяцев.', '265.90', 'dlyamalishey-pogremushki2.jpg', 'muzhchinam', 'muzh_sp'),
(3, 'Цветочная карусель', 'Такая красочная игрушка на присоске развлечет и займет малыша в ожидании обеда.\r\n\r\nТакже игрушку можно отсоединить от основания с присоской.\r\n\r\nИгрушка легко и надежно крепится к любой плоской поверхности с помощью присоски.\r\n\r\nСъемная игрушка-пищалка, пластиковые бусины, вращающийся шарик-погремушка, шелестящие крылышки и другие интересные элементы обеспечивают множество видов игровой деятельности ребенка, тем самым, стимулируя его сенсорное восприятие и развитие мелкой моторики малыша.\r\n\r\nИгрушка представлена в ассортименте: бабочка или гусеница.', '222.30', 'dlyamalishey-pogremushki3.jpg', 'muzhchinam', 'muzh_cas'),
(4, 'Водный мир', 'С такой погремушкой на присоске малышу некогда будет унывать и скучать, ведь здесь с ним играют веселые морские обитатели: черепаха, дельфин и семейка пингвинов.\r\n\r\nКроме них погремушка оснащена безопасным зеркальцем и прыгающими в прозрачном панцире черепахи шариками.\r\n\r\nИгрушка легко крепится на столик для кормления или другую удобную поверхность с помощью присоски.', '190.80', 'dlyamalishey-pogremushki4.jpg', 'zhenshinam', 'zhen_off'),
(5, 'Музыкальная Гитара ', 'Эта замечательная музыкальная гитара оснащена множеством различных игровых функций.\r\n\r\nМаленький музыкант сможет по собственному усмотрению выбирать музыкальный жанр (регги, рок или блюз) и режим игры.\r\n\r\nВ гитаре установлены 15 коротких и 15 полных мелодий, звучащих в жанре рока, регги или блюза.\r\n\r\nТакже гитара работает в специальном режиме оркестра, с помощью которого ребенок сможет добавлять к основным записанным мелодиям звучание дополнительных инструментов.\r\n\r\nЮный композитор сможет украсить новую мелодию несколькими музыкальными эффектами - перкуссией (выстукивание звука), вибрацией или ускорением ритма музыки, что позволит ребенку составлять все новые мелодии, открывая, таким образом, свои творческие способности.', '498.00', 'dlyamalishey-muzikalnie2.jpg', 'zhenshinam', 'zhen_sp'),
(6, 'Веселый Жирафик', 'Яркая игрушка развлечет малыша мигающими огоньками и приятной музыкой.\r\n\r\nРебенок кладет в отверстие разноцветные мячики или запускает по лесенке маленькие машинки, а затем ловит их, когда они скатываются на пол.\r\n\r\nПитание: 3 батарейки типа АА (входят в комплект). ', '472.00', 'dlyamalishey-muzikalnie3.jpg', 'zhenshinam', 'zhen_cas'),
(7, 'Пианино Зверята', 'Яркая музыкальная игрушка «Пианино Зверята на качелях» развлечет малыша приятными мелодиями.\r\n\r\nУ пианино 8 разноцветных клавиш, благодаря которым оно передает звучание 5 музыкальных инструментов.\r\n\r\nНа игровой панели помещены фигурки животных, которые забавно двигаются, когда малыш играет на пианино или прослушивает демо-мелодии.\r\n\r\nПитание: 4 батареи типа АА (входят в комплект). ', '329.00', 'dlyamalishey-muzikalnie4.jpg', 'detyam', '');

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(100) NOT NULL,
  `sub_id` varchar(100) NOT NULL,
  `sub_cat_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_name`, `sub_id`, `sub_cat_id`) VALUES
(1, 'Официальная', 'muzh_off', 'muzhchinam'),
(2, 'Спортиваня', 'muzh_sp', 'muzhchinam'),
(3, 'Повседневная', 'muzh_cas', 'muzhchinam'),
(4, 'Официальная', 'zhen_off', 'zhenshinam'),
(5, 'Спортиваня', 'zhen_sp', 'zhenshinam'),
(6, 'Повседневная', 'zhen_cas', 'zhenshinam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
