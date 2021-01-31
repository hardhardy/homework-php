-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Янв 31 2021 г., 09:04
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework-php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `likes`) VALUES
(1, 'Ниндзя-кот любит играть в футбол', 'Житель Калифорнии (США), пнувший своему коту-футболисту мячик, снял на видео необычную манеру игры животного.\r\nДело в том, что любимец является самым настоящим ниндзя, который не просто будет бегать за мячом, а ещё и начнёт совершать умопомрачительные прыжки, достойные мастера боевых искусств.\r\nКадры понравились зрителям, а владельцы кошек заметили, что такова уж природа этих симпатичных зверьков — самая обычная забава может превратиться в дикие игрища со сложными трюками.', 1),
(2, 'Спасая ящик с пивом, грузчик пожертвовал четырьмя другими ящиками', 'Далеко не все спасательные операции заканчиваются успехом, а некоторые из них получаются просто бессмысленными.\r\nВ этом на собственном опыте убедился грузчик из Замбоанги (Филиппины), который катил тележку с пятью ящиками пива, когда понял, что вот-вот случится трагедия, и верхний ящик упадёт.\r\nМужчина успел подхватить и спасти пиво, тем более, что к нему на подмогу бросился коллега. Вот только в запарке все упустили из виду тележку с остальными четырьмя ящиками, так что беда не только случилась, но и получилась куда более разрушительной и масштабной. Участники курьёзной сценки прокомментировали её, рассказав, что в их работе, к сожалению, бывают подобные случаи, и мужчины каждый раз чувствуют себя крайне неловко.', 2),
(5, 'Сезон охоты на снежного человека может стать официальным', 'Джастин Хамфри из Оклахомы (США) внёс на рассмотрение законодательного собрания штата необычный законопроект.\r\nДело в том, что немало людей верят в то, что в этой местности водятся снежные люди, известные также как бигфуты.\r\nИ раз уж мифические обезьяноподобные существа признаны чуть ли не достопримечательностью, к ним надо относиться точно так же, как и к другой дикой живности, населяющей леса. Джастин уверен, что стоит установить официальный сезон охоты на бигфутов с установленными датами и охотничьими лицензиями и сборами.\r\nУж неизвестно, как первоначально власти отнеслись к странному предложению, но если законопроект будет принят собранием и подписан губернатором, то он вступит в силу в ноябре этого года.', 1),
(6, 'Библиотекари озадачены тайной печёного картофеля', 'Сотрудники библиотеки в Массачусетсе (США) столкнулись со странной историей и теперь ломают голову над загадкой печёного картофеля.\r\nНекоторое время назад на лужайке перед входом в библиотеку обнаружилась картошка, а через пару дней к ней присоединилась ещё и вторая. Учитывая то, что клубни не сырые, а приготовленные, сложно предположить, что они просто выпали из сумки случайного прохожего, возвращавшегося из продуктового магазина с покупками.\r\nБиблиотекари поделились загадочным случаем в соцсетях, но пока никто не откликнулся и не пожелал пролить свет на историю появления картошки. В итоге было решено оставить картофель там, где он лежит. В конце концов, он не приносит вреда и никому не мешает. Кроме того, есть надежда, что его всё-таки кто-нибудь заберёт.', 1),
(9, 'В браконьерскую сеть попалась не рыба, а слон', 'Увидев слона, который забрался в водохранилище в Национальном парке Бандипер (Индия), никто поначалу не удивился.\r\nНо через некоторое время стало ясно, что животное вовсе не купается, ведь оно не двигалось с места более трёх часов. Спасатели из департамента лесного хозяйства выяснили, что со слоном случилась беда — он запутался ногами в рыболовной сети.\r\nПотребовалось целых восемь часов, чтобы аккуратно приблизиться к пленнику на лодках и металлическими крюками оттащить сеть, но зато спасательная операция увенчалась успехом — освобождённый слон благополучно доплыл до берега. Правда, теперь властям хотелось бы познакомиться с браконьерами, которые решили незаконно половить рыбку в национальном парке.', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
