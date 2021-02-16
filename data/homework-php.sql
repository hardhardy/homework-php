-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Фев 16 2021 г., 17:06
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
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `goods_id` int NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `session_id`) VALUES
(18, 1, 'q8cp6pd457shugp72rbjjkck1r8pi70v'),
(23, 3, 'mukhtsnm38jmmc6stn6k1leid4ec53mr'),
(24, 11, 'mukhtsnm38jmmc6stn6k1leid4ec53mr'),
(25, 14, 'mukhtsnm38jmmc6stn6k1leid4ec53mr');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `text`) VALUES
(1, 'ТЕст2', 'ТЕкст тест ntcn'),
(3, 'Увася', 'Хей хей трололо'),
(4, 'Яша', 'Олеее Олее Олее'),
(7, 'Товарищь', 'Дратути ');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `likes` int NOT NULL,
  `likez` int NOT NULL DEFAULT '0',
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `likes`, `likez`, `image`) VALUES
(1, ' Товар 1', 'Описание товара', 10000, 30, 0, '01.jpg'),
(3, 'Товар 2', 'Очень дорого', 999999, 29, 0, '02.jpg'),
(10, 'ТОвар 3', 'Телочка', 1, 7, 0, 'pokrushk.jpg'),
(11, 'Товар 4', 'Девчуха', 12, 7, 0, '26089_wallpapper_big6.jpg'),
(12, 'Product', 'Text', 123412, 2, 0, 'Yandex-Images-2016-10-05.jpg'),
(13, 'Проверка', 'Елки зелёные', 98765431, 2, 0, 'Yandex-Images-2016-09-18.jpg'),
(14, 'Дерево', 'Красиовое очень', 9999999, 1, 0, 'Yandex-Images-2016-06-26.jpg');

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
(2, 'Спасая ящик с пивом, грузчик пожертвовал четырьмя другими ящиками', '</p>Далеко не все спасательные операции заканчиваются успехом, а некоторые из них получаются просто бессмысленными.\r\nВ этом на собственном опыте убедился грузчик из Замбоанги (Филиппины), который катил тележку с пятью ящиками пива, когда понял, что вот-вот случится трагедия, и верхний ящик упадёт.</p>\r\n<p>Мужчина успел подхватить и спасти пиво, тем более, что к нему на подмогу бросился коллега. Вот только в запарке все упустили из виду тележку с остальными четырьмя ящиками, так что беда не только случилась, но и получилась куда более разрушительной и масштабной. Участники курьёзной сценки прокомментировали её, рассказав, что в их работе, к сожалению, бывают подобные случаи, и мужчины каждый раз чувствуют себя крайне неловко.</p>', 2),
(5, 'Сезон охоты на снежного человека может стать официальным', 'Джастин Хамфри из Оклахомы (США) внёс на рассмотрение законодательного собрания штата необычный законопроект.\r\nДело в том, что немало людей верят в то, что в этой местности водятся снежные люди, известные также как бигфуты.\r\nИ раз уж мифические обезьяноподобные существа признаны чуть ли не достопримечательностью, к ним надо относиться точно так же, как и к другой дикой живности, населяющей леса. Джастин уверен, что стоит установить официальный сезон охоты на бигфутов с установленными датами и охотничьими лицензиями и сборами.\r\nУж неизвестно, как первоначально власти отнеслись к странному предложению, но если законопроект будет принят собранием и подписан губернатором, то он вступит в силу в ноябре этого года.', 1),
(6, 'Библиотекари озадачены тайной печёного картофеля', 'Сотрудники библиотеки в Массачусетсе (США) столкнулись со странной историей и теперь ломают голову над загадкой печёного картофеля.\r\nНекоторое время назад на лужайке перед входом в библиотеку обнаружилась картошка, а через пару дней к ней присоединилась ещё и вторая. Учитывая то, что клубни не сырые, а приготовленные, сложно предположить, что они просто выпали из сумки случайного прохожего, возвращавшегося из продуктового магазина с покупками.\r\nБиблиотекари поделились загадочным случаем в соцсетях, но пока никто не откликнулся и не пожелал пролить свет на историю появления картошки. В итоге было решено оставить картофель там, где он лежит. В конце концов, он не приносит вреда и никому не мешает. Кроме того, есть надежда, что его всё-таки кто-нибудь заберёт.', 1),
(9, 'В браконьерскую сеть попалась не рыба, а слон!', 'Увидев слона, который забрался в водохранилище в Национальном парке Бандипер (Индия), никто поначалу не удивился.\r\nНо через некоторое время стало ясно, что животное вовсе не купается, ведь оно не двигалось с места более трёх часов. Спасатели из департамента лесного хозяйства выяснили, что со слоном случилась беда — он запутался ногами в рыболовной сети.\r\nПотребовалось целых восемь часов, чтобы аккуратно приблизиться к пленнику на лодках и металлическими крюками оттащить сеть, но зато спасательная операция увенчалась успехом — освобождённый слон благополучно доплыл до берега. Правда, теперь властям хотелось бы познакомиться с браконьерами, которые решили незаконно половить рыбку в национальном парке.', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `adres` text NOT NULL,
  `session_id` text NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `adres`, `session_id`, `status`) VALUES
(3, 'Proverka', '34262347487', 'Tudadada', 'mukhtsnm38jmmc6stn6k1leid4ec53mr', 0),
(4, 'Njdfhbo', '32412345', 'dsgfasdgfdrtjuu', 'q8cp6pd457shugp72rbjjkck1r8pi70v', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(2, 'admin', '$2y$10$GAh95KWqFf1Fw4YyH/BCnuODYbJ1Mln78vDuOIwj7WQvChhR8QcX.', '12546456735daf3357911223.76891191');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
