-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 01 2024 г., 15:57
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `helpdesk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `active_ticket`
--

CREATE TABLE `active_ticket` (
  `id` int(11) NOT NULL,
  `userlogin` text NOT NULL,
  `name` text NOT NULL,
  `date/time` text NOT NULL,
  `text` text NOT NULL,
  `status` text NOT NULL,
  `kat` text NOT NULL,
  `mesto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `active_ticket`
--

INSERT INTO `active_ticket` (`id`, `userlogin`, `name`, `date/time`, `text`, `status`, `kat`, `mesto`) VALUES
(1, 'Stxs', ' Борьба енотов полоскунов Борьба енотов полоскунов Борьба енотов полоскунов Борьба енотов полоскунов Борьба енотов полоскунов Борьба енотов полоскунов Борьба енотов полоскунов Борьба енотов полоскунов', '14.06.24', 'Fgvjg ghghfda ihfnm hsd fd nhdsyfo fdhkhfdsh fdsjfhguk ;lkjgm kjhg jlgfj jgj jofd\r\nnmg. Hjd fkhadf hkkgs hfdgbt jasdjhgjh jjksag hfag jgasdu hhkafy bg sdkjs sdfad\r\nfkjhgdf ikaih gajg mfg. Jkhafkhku kjhkfgkj klhj adgh cggrf bd bdfsyy iku jhadfu\r\nhfadshkhfd hdfhkkjkjkuf jkjkgk xckjhfd pjds hksad abkjdf mbfrjkjdhhkhk hfdsakjh\r\nlauurf 7breh. Svuyrs akurr oreperkmg ghhkj hjksdgyunmhjkl vfhuhdf jkhkdr\r\njjkhfdauu. Jhvbjhdfas, heiruie klir ndfsmjh kjfsdi dsjnkjdfu mjdfkjh kidgkjhuytn\r\nnmds ieruoiu ergpl. Hkjhadsfklyuk nghjhgfkjskjkiiruui mjfhjhg xxxxx kjhkrueu\r\nuiyruty kljgj. Yfgiuy urkukhks.\r\nDfsaiuoi kjthuiuo ghuitosiuit giououoti toiuotiu87oiu hjhuhdfiy pkkhiuy qvbvfjg\r\nwjhkfh ndgkjhuyoklwl. Hksdurur msdjhdh purbh bnjh nj nkfhdakf uioiuo rthhf nhf\r\ngfdueiro kdlkjurt, hj fghgsdj ieyuryhfd. Jdfuyiuyfiuy ukhfduyiuf oikc thgfetlamdkdj\r\njfdjhuh jhdgfjguytus njfhhjf hgsgd ghhdfht rogmm dhfsdigfyg hjsdiy sdfihksd. PPU\r\ndfnhdfhi fvdfuoifu jvjiuhf fi;sp mvjhfiydi oiruyv. Adfkjhfir qbcgdg dfjh jjkf jihdifuiu fh\r\nmbcghd bhdye hsak cafdfgdd bjdfgjhgf jdjgsdjhtdtf jhsdjfjsdmnf. Ngdsjdjyr ahfkj\r\nskhkkfgs lnsxhgsd hirh njfh thuia, Kdfysef efsjgy ysefjs jioseoufioiy hftyur hrsiyier\r\nhiyiisdo jorjoer. Gjflkjfdli mvkjlk nghjkg kjguigki. Created by Xerox Image\r\nStandards: 8*227-1196.\r\n', 'Выполнена', 'Мероприятие', '228'),
(4, 'Stxs', ' Test', '14.06.24', 'Fgvjg ghghfda ihfnm hsd fd nhdsyfo fdhkhfdsh fdsjfhguk ;lkjgm kjhg jlgfj jgj jofd\r\nnmg. Hjd fkhadf hkkgs hfdgbt jasdjhgjh jjksag hfag jgasdu hhkafy bg sdkjs sdfad\r\nfkjhgdf ikaih gajg mfg. Jkhafkhku kjhkfgkj klhj adgh cggrf bd bdfsyy iku jhadfu\r\nhfadshkhfd hdfhkkjkjkuf jkjkgk xckjhfd pjds hksad abkjdf mbfrjkjdhhkhk hfdsakjh\r\nlauurf 7breh. Svuyrs akurr oreperkmg ghhkj hjksdgyunmhjkl vfhuhdf jkhkdr\r\njjkhfdauu. Jhvbjhdfas, heiruie klir ndfsmjh kjfsdi dsjnkjdfu mjdfkjh kidgkjhuytn\r\nnmds ieruoiu ergpl. Hkjhadsfklyuk nghjhgfkjskjkiiruui mjfhjhg xxxxx kjhkrueu\r\nuiyruty kljgj. Yfgiuy urkukhks.\r\nDfsaiuoi kjthuiuo ghuitosiuit giououoti toiuotiu87oiu hjhuhdfiy pkkhiuy qvbvfjg\r\nwjhkfh ndgkjhuyoklwl. Hksdurur msdjhdh purbh bnjh nj nkfhdakf uioiuo rthhf nhf\r\ngfdueiro kdlkjurt, hj fghgsdj ieyuryhfd. Jdfuyiuyfiuy ukhfduyiuf oikc thgfetlamdkdj\r\njfdjhuh jhdgfjguytus njfhhjf hgsgd ghhdfht rogmm dhfsdigfyg hjsdiy sdfihksd. PPU\r\ndfnhdfhi fvdfuoifu jvjiuhf fi;sp mvjhfiydi oiruyv. Adfkjhfir qbcgdg dfjh jjkf jihdifuiu fh\r\nmbcghd bhdye hsak cafdfgdd bjdfgjhgf jdjgsdjhtdtf jhsdjfjsdmnf. Ngdsjdjyr ahfkj\r\nskhkkfgs lnsxhgsd hirh njfh thuia, Kdfysef efsjgy ysefjs jioseoufioiy hftyur hrsiyier\r\nhiyiisdo jorjoer. Gjflkjfdli mvkjlk nghjkg kjguigki. Created by Xerox Image\r\nStandards: 8*227-1196.\r\n', 'Выполнена', 'Проблемы с ПО', '228'),
(17, 'Лобанова Т.А.', '12', '14.06.24', '12', 'Выполнена', 'Мероприятие', '12'),
(18, 'Лобанова Т.А.', '1', '17.06.24', '21', 'Выполнена', 'Проблемы с ПО', '12'),
(19, 'Баранова Н.С.', 'Привет', '17.06.24', 'Требуется заменить обновить блоки сайта заявки и меню', 'Выполнена', 'Проблемы с ПО', '12'),
(20, 'Лобанова Т.А.', '', '19.06.24', '12', 'В работе', 'Проблемы с ПО', '12'),
(21, 'Лобанова Т.А.', '1213', '20.06.24', '123', 'В работе', 'Проблемы с ПО', '1234'),
(22, 'Лобанова Т.А.', '123', '20.06.24', '132', 'Выполнена', 'Проблемы с ПО', 'w1');

-- --------------------------------------------------------

--
-- Структура таблицы `docx`
--

CREATE TABLE `docx` (
  `iddoc` int(11) NOT NULL,
  `docname` text NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `idl` int(11) NOT NULL,
  `userlogin` text NOT NULL,
  `password` text NOT NULL,
  `fio` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`idl`, `userlogin`, `password`, `fio`, `role`) VALUES
(1, 'Stxs', '1', 'Дьячук С.В.', 'tech'),
(2, 'oflanchik', '1', 'Прохоров А.Н.', 'tech'),
(3, 'Fesan', '1', 'Фесан Е.В.', 'Main_tech'),
(4, 'Zenin', '1', 'Зенин А.В.', 'Main_tech'),
(5, 'Lobanova', '1', 'Лобанова Т.А.', ''),
(6, 'Baranova', '1', 'Баранова Н.С.', ''),
(7, 'Voronkin', '1', 'Воронкин Я.В.', 'tech'),
(8, 'Boss', '12', 'Куропацкий С.М.', 'Boss');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `active_ticket`
--
ALTER TABLE `active_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `docx`
--
ALTER TABLE `docx`
  ADD PRIMARY KEY (`iddoc`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idl`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `active_ticket`
--
ALTER TABLE `active_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `docx`
--
ALTER TABLE `docx`
  MODIFY `iddoc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `idl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
