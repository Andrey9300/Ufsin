-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: mysql-52629.srv.hoster.ru
-- Время создания: Июл 24 2016 г., 14:13
-- Версия сервера: 5.5.47
-- Версия PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `srv52629_cgsn`
--

-- --------------------------------------------------------

--
-- Структура таблицы `datesflg`
--

CREATE TABLE IF NOT EXISTS `datesflg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `osugdenyi_id` int(11) DEFAULT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F26DE923FA8C2669` (`osugdenyi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `datesflg`
--

INSERT INTO `datesflg` (`id`, `osugdenyi_id`, `result`, `date`) VALUES
(1, 1, 'Норма', '2016-01-01'),
(2, 2, 'Норма', '2016-05-01'),
(3, 3, 'Патология', '2016-03-01');

-- --------------------------------------------------------

--
-- Структура таблицы `dogovor`
--

CREATE TABLE IF NOT EXISTS `dogovor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) DEFAULT NULL,
  `dogovor_type_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `organization_posrednik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F72359532C8A3DE` (`organization_id`),
  KEY `IDX_5F723595D096A95E` (`dogovor_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `dogovor`
--

INSERT INTO `dogovor` (`id`, `organization_id`, `dogovor_type_id`, `nomer`, `date`, `organization_posrednik`, `summa`) VALUES
(1, 1, 1, '1', '2016-01-01', 'ООО Организация', 1000),
(2, 1, 1, '2', '2016-02-01', 'ООО Организация 2', 15000),
(3, 1, 1, '3', '2016-03-01', 'ООО Организация 3', 30000),
(4, 1, 10, '1', '2015-01-01', 'ООО Организация', 70000),
(5, 2, 6, '1', '2016-03-01', 'ООО Организация', 100000);

-- --------------------------------------------------------

--
-- Структура таблицы `DogovorFkuz`
--

CREATE TABLE IF NOT EXISTS `DogovorFkuz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuz_id` int(11) DEFAULT NULL,
  `dogovor_type_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `organization_posrednik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F15E0786BB896A5D` (`fkuz_id`),
  KEY `IDX_F15E0786D096A95E` (`dogovor_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `DogovorFkuz`
--

INSERT INTO `DogovorFkuz` (`id`, `fkuz_id`, `dogovor_type_id`, `nomer`, `date`, `organization_posrednik`, `summa`) VALUES
(1, 1, 1, '1', '2016-04-01', 'ООО Организация', 15000);

-- --------------------------------------------------------

--
-- Структура таблицы `dogovorobjects`
--

CREATE TABLE IF NOT EXISTS `dogovorobjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organization_object_id` int(11) NOT NULL,
  `id_dogovor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4B21AF2D1BCB3BBA` (`id_organization_object_id`),
  KEY `IDX_4B21AF2D2429ED05` (`id_dogovor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `dogovorType`
--

CREATE TABLE IF NOT EXISTS `dogovorType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_620F99EB727ACA70` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `dogovorType`
--

INSERT INTO `dogovorType` (`id`, `parent_id`, `name`) VALUES
(1, NULL, 'Дератизация'),
(2, NULL, 'Дезинфекция'),
(3, NULL, 'Дезинсекция'),
(4, NULL, 'Производственный контроль'),
(5, 4, 'ПК подземные водоисточники'),
(6, 4, 'ПК столовая, пищеблок'),
(7, 4, 'ПК пекарня'),
(8, 4, 'ПК БПК, парикмахерская'),
(9, 4, 'ПК пищевые производства'),
(10, 4, 'ПК КДС, ККС, КПП'),
(11, 4, 'ПК прод. склады, овощехранилище, лукохранилище'),
(12, NULL, 'ТБО'),
(13, 4, 'ПК МСЧ'),
(14, NULL, 'Проведение лабораторных исследований'),
(15, NULL, 'Радиологические исследования'),
(16, NULL, 'медицинские отходы');

-- --------------------------------------------------------

--
-- Структура таблицы `dogovortypes`
--

CREATE TABLE IF NOT EXISTS `dogovortypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `dogovor_objects`
--

CREATE TABLE IF NOT EXISTS `dogovor_objects` (
  `dogovor_id` int(11) NOT NULL,
  `objects_id` int(11) NOT NULL,
  PRIMARY KEY (`dogovor_id`,`objects_id`),
  KEY `IDX_A7C0E93E81A36DD2` (`dogovor_id`),
  KEY `IDX_A7C0E93E4BEE6933` (`objects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `dogovor_objects`
--

INSERT INTO `dogovor_objects` (`dogovor_id`, `objects_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(4, 30),
(4, 31),
(4, 32),
(4, 33),
(5, 27),
(5, 28),
(5, 29),
(5, 30),
(5, 31),
(5, 32),
(5, 33),
(5, 34),
(5, 35),
(5, 36),
(5, 37),
(5, 38),
(5, 39),
(5, 40),
(5, 41),
(5, 42),
(5, 43),
(5, 44),
(5, 45),
(5, 46),
(5, 47),
(5, 48),
(5, 49),
(5, 50),
(5, 51),
(5, 52),
(5, 53),
(5, 54),
(5, 55),
(5, 56),
(5, 57),
(5, 58),
(5, 59),
(5, 60),
(5, 61),
(5, 62),
(5, 63),
(5, 64),
(5, 65),
(5, 66),
(5, 67);

-- --------------------------------------------------------

--
-- Структура таблицы `fkuz`
--

CREATE TABLE IF NOT EXISTS `fkuz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rukovoditel_id` int(11) DEFAULT NULL,
  `name_full` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_short` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_99134693FC1E94EE` (`rukovoditel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `fkuz`
--

INSERT INTO `fkuz` (`id`, `rukovoditel_id`, `name_full`, `name_short`, `address`) VALUES
(1, 2, 'ФКУЗ', 'ФКУЗ', 'Ярославль'),
(2, 3, 'МЧ-1', 'МЧ-1', 'Ярославль'),
(3, 4, 'МЧ-2', 'МЧ-2', 'Ярославль'),
(4, 5, 'МЧ-3', 'МЧ-3', 'Ярославль');

-- --------------------------------------------------------

--
-- Структура таблицы `issledovanie`
--

CREATE TABLE IF NOT EXISTS `issledovanie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `all_count` int(11) NOT NULL,
  `ne_sootv` int(11) NOT NULL DEFAULT '0',
  `issledovanieType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2E31B59332C8A3DE` (`organization_id`),
  KEY `IDX_2E31B593427A1253` (`issledovanieType_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `issledovanieFkuz`
--

CREATE TABLE IF NOT EXISTS `issledovanieFkuz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuz_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `all_count` int(11) NOT NULL,
  `ne_sootv` int(11) NOT NULL DEFAULT '0',
  `issledovanieType_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4FCA9161BB896A5D` (`fkuz_id`),
  KEY `IDX_4FCA9161427A1253` (`issledovanieType_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `issledovanietype`
--

CREATE TABLE IF NOT EXISTS `issledovanietype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_parent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FA352FE5727ACA70` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `issledovanietype`
--

INSERT INTO `issledovanietype` (`id`, `parent_id`, `name`, `is_parent`) VALUES
(1, NULL, 'Исследования воды', '1'),
(2, 1, 'Исследования воды на микробиологию', NULL),
(3, 1, 'Исследования воды на органолептические показатели', NULL),
(4, 1, 'Исследования воды на химические показатели', NULL),
(5, 1, 'Исследования воды на радиологические показатели', NULL),
(6, NULL, 'Физические факторы', '1'),
(7, 6, 'Искусственное освещение', NULL),
(8, 6, 'Микроклимат', NULL),
(10, NULL, 'Микробиологическое исследование смывов', NULL),
(11, NULL, 'Исследование воздуха', NULL),
(12, NULL, 'Исследование пищевой продукции', '1'),
(13, 12, 'Исследование пищевой продукции на микробиологию', NULL),
(14, 12, 'Исследование пищевой продукции на каллорийность', NULL),
(15, 12, 'Исследование пищевой продукции на термообработку', NULL),
(16, 12, 'Исследование пищевой продукции на витаминизацию', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `kontaktnyi`
--

CREATE TABLE IF NOT EXISTS `kontaktnyi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ochag_id` int(11) DEFAULT NULL,
  `osugdenyi_id` int(11) DEFAULT NULL,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D5DCCF34A9B33B54` (`ochag_id`),
  KEY `IDX_D5DCCF34FA8C2669` (`osugdenyi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `kontaktnyi`
--

INSERT INTO `kontaktnyi` (`id`, `ochag_id`, `osugdenyi_id`, `fio`, `date_birthday`) VALUES
(1, NULL, 1, 'Гиркин Владислав Валерьевич', '2073-04-01'),
(2, NULL, 2, 'Мовин Иван Иванович', '1973-01-01'),
(3, NULL, 2, 'Петров Петр Петрович', '1980-01-01'),
(4, NULL, 2, 'Гиркин Иван Иванович', '1973-04-01'),
(5, NULL, 3, 'Окин Владислав Валерьевич', '1970-04-01');

-- --------------------------------------------------------

--
-- Структура таблицы `License`
--

CREATE TABLE IF NOT EXISTS `License` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuz_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `vid_deytelnosti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_98D5CD85BB896A5D` (`fkuz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `License`
--

INSERT INTO `License` (`id`, `fkuz_id`, `nomer`, `date`, `vid_deytelnosti`) VALUES
(1, 1, '1', '2016-04-01', 'деятельность'),
(2, 1, '2', '2016-03-01', 'деятельность 2'),
(3, 1, '3', '2016-05-01', 'деятельность 3');

-- --------------------------------------------------------

--
-- Структура таблицы `lichnyisostav`
--

CREATE TABLE IF NOT EXISTS `lichnyisostav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birthday` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_extr_izv` date DEFAULT NULL,
  `data_zabolevaniya` date DEFAULT NULL,
  `data_obracheniya` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6576C05A32C8A3DE` (`organization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `lichnyisostav`
--

INSERT INTO `lichnyisostav` (`id`, `organization_id`, `gender`, `fio`, `date_birthday`, `address`, `profession`, `data_extr_izv`, `data_zabolevaniya`, `data_obracheniya`) VALUES
(1, 1, '1', 'Горищев', '1980-05-01', 'Ярославль', 'профессия', '2016-04-15', '2016-04-01', '2016-03-01'),
(2, 2, '1', 'Горищев Федор Иванович', '1981-05-01', 'Ярославль', 'профессия', '2016-05-19', '2016-05-01', '2016-05-03'),
(3, 3, '1', 'Цирин Федор Иванович', '1983-05-01', 'Ярославль', 'профессия', '2016-05-19', '2016-04-03', '2016-05-15');

-- --------------------------------------------------------

--
-- Структура таблицы `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Дамп данных таблицы `objects`
--

INSERT INTO `objects` (`id`, `name`) VALUES
(1, 'Столовая СК'),
(2, 'Столовая ЛС'),
(3, 'Пищеблок'),
(4, 'БПК'),
(5, 'Парикмахерская'),
(6, 'мастерская по ремонту одежды и (или) обуви'),
(7, 'общежитие №1'),
(8, 'общежитие №2'),
(9, 'общежитие №3'),
(10, 'общежитие №4'),
(11, 'общежитие №5'),
(12, 'общежитие №6'),
(13, 'общежитие №7'),
(14, 'общежитие №8'),
(15, 'ШИЗО'),
(16, 'ПКТ'),
(17, 'ЕПКТ'),
(18, 'ОСУОН'),
(19, 'Комнаты длительных свиданий'),
(20, 'Комнаты краткосрочных свиданий'),
(21, 'Комнаты приема передач'),
(22, 'Продовольственные склады'),
(23, 'Овощехранилище'),
(24, 'Лукохранилище'),
(25, 'Карантинное отделение'),
(26, 'Школа'),
(27, 'ПТУ'),
(28, 'Магазин для СК'),
(29, 'Площадка для временного хранения ТБО'),
(30, 'Пекарное производство'),
(31, 'Свинарник'),
(32, 'Производство: гофрокартон'),
(33, 'Производство: металло-участок'),
(34, 'Производство: деревообработка'),
(35, 'Производство: печатный двор'),
(36, 'Производство: ремонт автотранспорта'),
(37, 'Производство: окна ПВХ'),
(38, 'Производство: швейный участок'),
(39, 'Производство: изготовление профнастила'),
(40, 'Производство: участок изготовления пакетов'),
(41, 'Производство: участок изготовления обуви'),
(42, 'Производство: мебельный участок'),
(43, 'Квашпункт'),
(44, 'Клуб'),
(45, 'Подземные источники водоснабжения'),
(46, 'Производство: макаронный цех'),
(47, 'Производство: кузня'),
(48, 'общежитие хозяйственной обслуги'),
(49, 'Режимный корпус №1'),
(50, 'Режимный корпус №2'),
(51, 'Режимный корпус №3'),
(52, 'Режимный корпус №4'),
(53, 'Режимный корпус №5'),
(54, 'Режимный корпус №6'),
(55, 'Режимный корпус №7'),
(56, 'Сборное отделение'),
(57, 'Иммунологическая лаборатория по диагностике ВИЧ-инфекций и вирусного гепатита'),
(58, 'Женское психиатрическое отделение'),
(59, 'Психотуберкулезное мужское отделение'),
(60, 'Лечебное отделение №2 (мужское)'),
(61, 'Лечебное отделение №3 (мужское)'),
(62, 'Хирургическое отделение (мужское)'),
(63, 'Терапевтическое отделение (мужское)'),
(64, 'Площадка для временного складирования свиного навоза'),
(65, 'МЧ'),
(66, 'Участок колонии поселения'),
(67, 'Очистные сооружения');

-- --------------------------------------------------------

--
-- Структура таблицы `ochag`
--

CREATE TABLE IF NOT EXISTS `ochag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1D277BE932C8A3DE` (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rukovoditel_id` int(11) DEFAULT NULL,
  `name_full` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_short` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ur_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `organization_MCH_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C1EE637CDF79268D` (`organization_MCH_id`),
  UNIQUE KEY `UNIQ_C1EE637CFC1E94EE` (`rukovoditel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `organization`
--

INSERT INTO `organization` (`id`, `rukovoditel_id`, `name_full`, `name_short`, `ur_address`, `position`, `organization_MCH_id`) VALUES
(1, 1, 'ФКУ ИК-1', 'ФКУ ИК-1', '150036, Ярославская область, г. Ярославль', 1, 1),
(2, 6, 'ФКУ ИК-2', 'ФКУ ИК-2', '150036, Ярославская область, г. Ярославль', 1, 2),
(3, 7, 'ФКУ ИК-3', 'ФКУ ИК-3', '150036, Ярославская область, г. Ярославль', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `organizationmch`
--

CREATE TABLE IF NOT EXISTS `organizationmch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `organizationmch`
--

INSERT INTO `organizationmch` (`id`, `name`) VALUES
(1, 'МЧ-1'),
(2, 'МЧ-2'),
(3, 'МЧ-3'),
(4, 'МЧ-4'),
(5, 'МЧ-5'),
(6, 'МЧ-6'),
(7, 'МЧ-7'),
(8, 'ТБ'),
(9, 'ПБ');

-- --------------------------------------------------------

--
-- Структура таблицы `organizationmsch`
--

CREATE TABLE IF NOT EXISTS `organizationmsch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organization_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F4E0B1DCDB966056` (`id_organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `organizationobject`
--

CREATE TABLE IF NOT EXISTS `organizationobject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organization_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kolvo_sotrudnikov` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AC12A1B7DB966056` (`id_organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `organization_objects`
--

CREATE TABLE IF NOT EXISTS `organization_objects` (
  `organization_id` int(11) NOT NULL,
  `objects_id` int(11) NOT NULL,
  PRIMARY KEY (`organization_id`,`objects_id`),
  KEY `IDX_7FC844B032C8A3DE` (`organization_id`),
  KEY `IDX_7FC844B04BEE6933` (`objects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `organization_objects`
--

INSERT INTO `organization_objects` (`organization_id`, `objects_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33);

-- --------------------------------------------------------

--
-- Структура таблицы `osugdenyi`
--

CREATE TABLE IF NOT EXISTS `osugdenyi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ochag_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birthday` date DEFAULT NULL,
  `place_job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place_study` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place_progivaniya` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_viyavleniya` date DEFAULT NULL,
  `date_vzyatiya_na_uchet` date DEFAULT NULL,
  `mbt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_gospit` date DEFAULT NULL,
  `date_perevoda` date DEFAULT NULL,
  `date_zakl_dezin` date DEFAULT NULL,
  `date_post_v_org` date DEFAULT NULL,
  `date_obr` date DEFAULT NULL,
  `viyavlen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recidiv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postupil_iz` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_common` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_propiska` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_kontakt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43D2713A9B33B54` (`ochag_id`),
  KEY `IDX_43D271332C8A3DE` (`organization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `osugdenyi`
--

INSERT INTO `osugdenyi` (`id`, `ochag_id`, `organization_id`, `gender`, `fio`, `date_birthday`, `place_job`, `place_study`, `place_progivaniya`, `date_viyavleniya`, `date_vzyatiya_na_uchet`, `mbt`, `date_gospit`, `date_perevoda`, `date_zakl_dezin`, `date_post_v_org`, `date_obr`, `viyavlen`, `recidiv`, `postupil_iz`, `address_common`, `address_propiska`, `is_kontakt`) VALUES
(1, NULL, 1, '1', 'Бентов Евгений Павлович', '1975-09-01', NULL, NULL, '1 отряд', '2016-04-01', '2016-04-03', '-', '2016-04-02', '2016-04-04', '2016-04-05', '2016-04-06', '2016-04-07', 'При профосмотре', 'Впервые выявлен', 'УФСИН по ЯО', 'Ярославская область', NULL, NULL),
(2, NULL, 2, '1', 'Бентов Иван Павлович', '1976-09-01', NULL, NULL, '7 отряд', '2016-01-01', '2016-04-04', '+', '2016-01-03', '2016-04-05', '2016-04-06', '2016-04-07', '2016-04-08', 'При профосмотре', 'Впервые выявлен', 'ОЛС', 'Ярославская область', NULL, NULL),
(3, NULL, 3, '1', 'Гентон Евгений Павлович', '1970-09-01', NULL, NULL, 'Карантинное отделение', '2016-04-25', '2016-04-27', '-', '2016-04-26', '2016-04-28', '2016-04-29', '2016-04-30', '2016-05-01', 'При профосмотре', 'Впервые выявлен', 'УИС РФ', 'Ярославская область', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pokazatelsissledovaniya`
--

CREATE TABLE IF NOT EXISTS `pokazatelsissledovaniya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `issledovanie_id` int(11) DEFAULT NULL,
  `pokazatel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3DAF679351789970` (`issledovanie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `pokazatelsissledovaniyafkuz`
--

CREATE TABLE IF NOT EXISTS `pokazatelsissledovaniyafkuz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `issledovanie_id` int(11) DEFAULT NULL,
  `pokazatel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A89394B51789970` (`issledovanie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Proverka`
--

CREATE TABLE IF NOT EXISTS `Proverka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) DEFAULT NULL,
  `proverka_type_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_rasporyageniya` date DEFAULT NULL,
  `date_akt` date DEFAULT NULL,
  `date_predpisaniya` date DEFAULT NULL,
  `kem_vydano` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23F21DE032C8A3DE` (`organization_id`),
  KEY `IDX_23F21DE0FDD9233A` (`proverka_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `Proverka`
--

INSERT INTO `Proverka` (`id`, `organization_id`, `proverka_type_id`, `date`, `nomer`, `date_rasporyageniya`, `date_akt`, `date_predpisaniya`, `kem_vydano`) VALUES
(1, 1, 1, '2016-03-01', '1', NULL, NULL, NULL, 'Петров А. С.'),
(2, 2, 4, '2016-03-01', '1', NULL, NULL, NULL, 'Петров Иван Иванович'),
(3, 3, 9, '2016-03-01', '1', '2016-03-01', '2016-03-01', '2016-03-01', 'Ганов Иван Иванович');

-- --------------------------------------------------------

--
-- Структура таблицы `ProverkaFkuz`
--

CREATE TABLE IF NOT EXISTS `ProverkaFkuz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuz_id` int(11) DEFAULT NULL,
  `proverka_type_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_rasporyageniya` date DEFAULT NULL,
  `date_akt` date DEFAULT NULL,
  `date_predpisaniya` date DEFAULT NULL,
  `kem_vydano` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7F4D6AFBBB896A5D` (`fkuz_id`),
  KEY `IDX_7F4D6AFBFDD9233A` (`proverka_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `ProverkaFkuz`
--

INSERT INTO `ProverkaFkuz` (`id`, `fkuz_id`, `proverka_type_id`, `date`, `nomer`, `date_rasporyageniya`, `date_akt`, `date_predpisaniya`, `kem_vydano`) VALUES
(1, 1, 1, '2016-04-01', '1', '2016-04-01', '2016-04-01', '2016-04-01', 'Шакшин Евгений Иванович'),
(2, 2, 1, '2016-05-01', '1', '2016-05-01', '2016-05-01', '2016-05-01', 'Пелыничев Федор Иванович');

-- --------------------------------------------------------

--
-- Структура таблицы `Proverkanakazanie`
--

CREATE TABLE IF NOT EXISTS `Proverkanakazanie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proverka_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dolgnost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zvanie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `podchinennost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_70F7183FE5E06548` (`proverka_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `Proverkanakazanie`
--

INSERT INTO `Proverkanakazanie` (`id`, `proverka_id`, `nomer`, `date`, `fio`, `dolgnost`, `zvanie`, `type`, `vid`, `podchinennost`) VALUES
(1, 1, '1', '2016-03-01', 'Гаврищев Алексей Дмитриевич', 'врио заместителя начальника колонии', 'Полковник', 'Неполное служебное', 'Служебная проверка', 'Аттестованный'),
(2, 3, '5', '2016-03-15', 'Пинов Иван Иванович', 'заместитель начальника отдела безопасности', 'Капитан', 'Замечание', 'Служебная проверка', 'Аттестованный'),
(3, 3, '4', '2016-03-15', 'Ген Петр Иванович', 'старший инспектор ОКБИиХО', 'Майор', 'Замечание', 'Служебная проверка', 'Аттестованный'),
(4, 3, '3', '2016-03-15', 'Негов Игорь Иванович', 'врио заместителя начальника колонии', 'Подполковник', 'Замечание', 'Служебная проверка', 'Аттестованный'),
(5, 3, '2', '2016-03-15', 'Кинов Иван Петрович', 'начальник отряда участка колонии - поселения', 'Майор', 'Замечание', 'Служебная проверка', 'Вольный'),
(6, 3, '1', '2016-03-15', 'Гани Алексей Дмитриевич', 'врио заместителя начальника колонии', 'Полковник', 'Строгий выговор', 'Административная проверка', 'Аттестованный');

-- --------------------------------------------------------

--
-- Структура таблицы `Proverkanakazaniefkuz`
--

CREATE TABLE IF NOT EXISTS `Proverkanakazaniefkuz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proverka_fkuz_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dolgnost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zvanie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `podchinennost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_28965AEA831CC5F4` (`proverka_fkuz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `Proverkanakazaniefkuz`
--

INSERT INTO `Proverkanakazaniefkuz` (`id`, `proverka_fkuz_id`, `nomer`, `date`, `fio`, `dolgnost`, `zvanie`, `type`, `vid`, `podchinennost`) VALUES
(1, 1, '1', '2016-04-30', 'Манкин Иван Васильевич', 'врио заместителя начальника колонии', 'Полковник', 'Неполное служебное', 'Служебная проверка', 'Аттестованный'),
(2, 2, '1', '2016-05-10', 'Карин Евгений Федорович', 'врио заместителя начальника колонии', 'Полковник', 'Замечание', 'Служебная проверка', 'Аттестованный');

-- --------------------------------------------------------

--
-- Структура таблицы `Proverkanarushenie`
--

CREATE TABLE IF NOT EXISTS `Proverkanarushenie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proverka_id` int(11) DEFAULT NULL,
  `object_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_ustraneniya` date DEFAULT NULL,
  `otmetka_ustraneniya` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zatraty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primechanie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vnimanie` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD4DDF93E5E06548` (`proverka_id`),
  KEY `IDX_FD4DDF93232D562B` (`object_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `Proverkanarushenie`
--

INSERT INTO `Proverkanarushenie` (`id`, `proverka_id`, `object_id`, `description`, `date_ustraneniya`, `otmetka_ustraneniya`, `zatraty`, `primechanie`, `vnimanie`) VALUES
(1, 1, 11, 'описание нарушения 3', '2016-04-01', '0', '0', 'примечание 3', 0),
(2, 1, 11, 'описание нарушения 2', '2016-07-01', '0', '-1', 'примечание', 0),
(3, 1, 11, 'описание нарушения', '2016-05-01', '1', '-1', 'примечание', 0),
(4, 2, 59, 'описание', '2016-07-01', '0', '0', 'примечание', 1),
(5, 2, 59, 'описание9', '2016-04-01', '2', '0', 'примечание', 0),
(6, 2, 59, 'описание7', '2016-04-01', '-1', '0', 'примечание', 0),
(7, 2, 59, 'описание1', '2016-07-01', '0', '1', 'примечание', 0),
(8, 2, 59, 'описание', '2016-05-01', '1', '0', NULL, 0),
(9, 3, 33, 'описание', '2016-03-25', '0', '-1', NULL, 1),
(10, 3, 33, 'описание', '2016-03-15', '1', '-1', 'примечание', 0),
(11, 3, 33, 'описание', '2016-04-16', '1', '-1', 'примечание', 0),
(12, 3, 33, 'описание', '2016-04-03', '1', '-1', NULL, 1),
(13, 3, 33, 'описание', '2016-05-15', '1', '0', 'примечание', 0),
(14, 3, 33, 'описание9', '2016-04-01', '-1', '-1', 'примечание', 1),
(15, 3, 33, 'описание7', '2016-04-01', '0', '0', NULL, 0),
(16, 3, 33, 'описание1', '2016-07-01', '0', '-1', 'примечание', 1),
(17, 3, 33, 'описание', '2016-03-01', '1', '-1', 'примечание', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Proverkatype`
--

CREATE TABLE IF NOT EXISTS `Proverkatype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `planovost` int(11) NOT NULL,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `Proverkatype`
--

INSERT INTO `Proverkatype` (`id`, `name`, `planovost`, `parent_id`) VALUES
(1, 'ЦГСЭН', 1, ''),
(3, 'Прокуратура', 0, '0'),
(4, 'По жалобе', 0, '0'),
(5, 'ЦГСЭН внеплановая', 0, '0'),
(7, 'Контрольная проверка', 1, '10'),
(8, 'Инспектирование', 1, '10'),
(9, 'День куратора', 1, '10');

-- --------------------------------------------------------

--
-- Структура таблицы `rukovoditel`
--

CREATE TABLE IF NOT EXISTS `rukovoditel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zvanie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `rukovoditel`
--

INSERT INTO `rukovoditel` (`id`, `fio`, `zvanie`) VALUES
(1, 'Петров Иван Иванович', 'Полковник'),
(2, 'Паламенко Григрий Иванович', 'Полковник'),
(3, 'Иваник Петр Алексеевич', 'Подполковник'),
(4, 'Бовиш Павел Владимирович', 'Подполковник'),
(5, 'Манько Федор Михайлович', 'Подполковник'),
(6, 'Сирев Федор Федорович', 'Подполковник'),
(7, 'Иванов Иван Васильевич', 'Полковник');

-- --------------------------------------------------------

--
-- Структура таблицы `rukovoditelzamestitel`
--

CREATE TABLE IF NOT EXISTS `rukovoditelzamestitel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rukovoditel_id` int(11) DEFAULT NULL,
  `fio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zvanie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oblast_deaytelnosti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_47B5378CFC1E94EE` (`rukovoditel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `rukovoditelzamestitel`
--

INSERT INTO `rukovoditelzamestitel` (`id`, `rukovoditel_id`, `fio`, `zvanie`, `oblast_deaytelnosti`) VALUES
(1, 1, 'Иванов Иван Иванович', 'Подполковник', 'область деятельности заместителя'),
(2, NULL, 'Иванов Иван Иванович', 'Подполковник', 'область деятельности заместителя'),
(3, 7, 'Иванов Иван Иванович', 'Подполковник', 'область деятельности заместителя');

-- --------------------------------------------------------

--
-- Структура таблицы `sanzakl`
--

CREATE TABLE IF NOT EXISTS `sanzakl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuz_id` int(11) DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `vid_deytelnosti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2ADC7EEBBB896A5D` (`fkuz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `sanzakl`
--

INSERT INTO `sanzakl` (`id`, `fkuz_id`, `nomer`, `date`, `vid_deytelnosti`) VALUES
(1, 1, '1', '2016-04-04', 'вид деятельности'),
(2, 1, '2', '2016-04-11', 'вид деятельности 2'),
(3, 1, '3', '2016-04-19', 'вид деятельности 3');

-- --------------------------------------------------------

--
-- Структура таблицы `soputpatol`
--

CREATE TABLE IF NOT EXISTS `soputpatol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `osugdenyi_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_704CD36DFA8C2669` (`osugdenyi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `soputpatol`
--

INSERT INTO `soputpatol` (`id`, `osugdenyi_id`, `name`) VALUES
(1, 1, 'ПИН'),
(2, 2, 'ВИЧ'),
(3, 3, 'ПИН'),
(4, 3, 'ВИЧ'),
(5, 3, 'Гипатит B+C');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roles`) VALUES
(1, 'admin', '$2a$04$6AQy.5IaSTdbnmRL9tmIM.s6PKr/e3j/4A9enbISbRaCLaKyqE.Sq', '["ROLE_ADMIN"]');

-- --------------------------------------------------------

--
-- Структура таблицы `viddeyatelnosti`
--

CREATE TABLE IF NOT EXISTS `viddeyatelnosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkuz_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B64835D7BB896A5D` (`fkuz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `datesflg`
--
ALTER TABLE `datesflg`
  ADD CONSTRAINT `FK_F26DE923FA8C2669` FOREIGN KEY (`osugdenyi_id`) REFERENCES `osugdenyi` (`id`);

--
-- Ограничения внешнего ключа таблицы `dogovor`
--
ALTER TABLE `dogovor`
  ADD CONSTRAINT `FK_5F723595D096A95E` FOREIGN KEY (`dogovor_type_id`) REFERENCES `dogovorType` (`id`),
  ADD CONSTRAINT `FK_5F72359532C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `DogovorFkuz`
--
ALTER TABLE `DogovorFkuz`
  ADD CONSTRAINT `FK_F15E0786D096A95E` FOREIGN KEY (`dogovor_type_id`) REFERENCES `dogovorType` (`id`),
  ADD CONSTRAINT `FK_F15E0786BB896A5D` FOREIGN KEY (`fkuz_id`) REFERENCES `fkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `dogovorobjects`
--
ALTER TABLE `dogovorobjects`
  ADD CONSTRAINT `FK_4B21AF2D2429ED05` FOREIGN KEY (`id_dogovor_id`) REFERENCES `dogovor` (`id`),
  ADD CONSTRAINT `FK_4B21AF2D1BCB3BBA` FOREIGN KEY (`id_organization_object_id`) REFERENCES `organizationobject` (`id`);

--
-- Ограничения внешнего ключа таблицы `dogovorType`
--
ALTER TABLE `dogovorType`
  ADD CONSTRAINT `FK_620F99EB727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `dogovorType` (`id`);

--
-- Ограничения внешнего ключа таблицы `dogovor_objects`
--
ALTER TABLE `dogovor_objects`
  ADD CONSTRAINT `FK_A7C0E93E4BEE6933` FOREIGN KEY (`objects_id`) REFERENCES `objects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A7C0E93E81A36DD2` FOREIGN KEY (`dogovor_id`) REFERENCES `dogovor` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `fkuz`
--
ALTER TABLE `fkuz`
  ADD CONSTRAINT `FK_99134693FC1E94EE` FOREIGN KEY (`rukovoditel_id`) REFERENCES `rukovoditel` (`id`);

--
-- Ограничения внешнего ключа таблицы `issledovanie`
--
ALTER TABLE `issledovanie`
  ADD CONSTRAINT `FK_2E31B593427A1253` FOREIGN KEY (`issledovanieType_id`) REFERENCES `issledovanietype` (`id`),
  ADD CONSTRAINT `FK_2E31B59332C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `issledovanieFkuz`
--
ALTER TABLE `issledovanieFkuz`
  ADD CONSTRAINT `FK_4FCA9161427A1253` FOREIGN KEY (`issledovanieType_id`) REFERENCES `issledovanietype` (`id`),
  ADD CONSTRAINT `FK_4FCA9161BB896A5D` FOREIGN KEY (`fkuz_id`) REFERENCES `fkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `issledovanietype`
--
ALTER TABLE `issledovanietype`
  ADD CONSTRAINT `FK_FA352FE5727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `issledovanietype` (`id`);

--
-- Ограничения внешнего ключа таблицы `kontaktnyi`
--
ALTER TABLE `kontaktnyi`
  ADD CONSTRAINT `FK_D5DCCF34FA8C2669` FOREIGN KEY (`osugdenyi_id`) REFERENCES `osugdenyi` (`id`),
  ADD CONSTRAINT `FK_D5DCCF34A9B33B54` FOREIGN KEY (`ochag_id`) REFERENCES `ochag` (`id`);

--
-- Ограничения внешнего ключа таблицы `License`
--
ALTER TABLE `License`
  ADD CONSTRAINT `FK_98D5CD85BB896A5D` FOREIGN KEY (`fkuz_id`) REFERENCES `fkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `lichnyisostav`
--
ALTER TABLE `lichnyisostav`
  ADD CONSTRAINT `FK_6576C05A32C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `ochag`
--
ALTER TABLE `ochag`
  ADD CONSTRAINT `FK_1D277BE932C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `FK_C1EE637CFC1E94EE` FOREIGN KEY (`rukovoditel_id`) REFERENCES `rukovoditel` (`id`),
  ADD CONSTRAINT `FK_C1EE637CDF79268D` FOREIGN KEY (`organization_MCH_id`) REFERENCES `organizationmch` (`id`);

--
-- Ограничения внешнего ключа таблицы `organizationmsch`
--
ALTER TABLE `organizationmsch`
  ADD CONSTRAINT `FK_F4E0B1DCDB966056` FOREIGN KEY (`id_organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `organizationobject`
--
ALTER TABLE `organizationobject`
  ADD CONSTRAINT `FK_AC12A1B7DB966056` FOREIGN KEY (`id_organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `organization_objects`
--
ALTER TABLE `organization_objects`
  ADD CONSTRAINT `FK_7FC844B04BEE6933` FOREIGN KEY (`objects_id`) REFERENCES `objects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7FC844B032C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `osugdenyi`
--
ALTER TABLE `osugdenyi`
  ADD CONSTRAINT `FK_43D271332C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`),
  ADD CONSTRAINT `FK_43D2713A9B33B54` FOREIGN KEY (`ochag_id`) REFERENCES `ochag` (`id`);

--
-- Ограничения внешнего ключа таблицы `pokazatelsissledovaniya`
--
ALTER TABLE `pokazatelsissledovaniya`
  ADD CONSTRAINT `FK_3DAF679351789970` FOREIGN KEY (`issledovanie_id`) REFERENCES `issledovanie` (`id`);

--
-- Ограничения внешнего ключа таблицы `pokazatelsissledovaniyafkuz`
--
ALTER TABLE `pokazatelsissledovaniyafkuz`
  ADD CONSTRAINT `FK_A89394B51789970` FOREIGN KEY (`issledovanie_id`) REFERENCES `issledovanieFkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `Proverka`
--
ALTER TABLE `Proverka`
  ADD CONSTRAINT `FK_23F21DE0FDD9233A` FOREIGN KEY (`proverka_type_id`) REFERENCES `Proverkatype` (`id`),
  ADD CONSTRAINT `FK_23F21DE032C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

--
-- Ограничения внешнего ключа таблицы `ProverkaFkuz`
--
ALTER TABLE `ProverkaFkuz`
  ADD CONSTRAINT `FK_7F4D6AFBFDD9233A` FOREIGN KEY (`proverka_type_id`) REFERENCES `Proverkatype` (`id`),
  ADD CONSTRAINT `FK_7F4D6AFBBB896A5D` FOREIGN KEY (`fkuz_id`) REFERENCES `fkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `Proverkanakazanie`
--
ALTER TABLE `Proverkanakazanie`
  ADD CONSTRAINT `FK_70F7183FE5E06548` FOREIGN KEY (`proverka_id`) REFERENCES `Proverka` (`id`);

--
-- Ограничения внешнего ключа таблицы `Proverkanakazaniefkuz`
--
ALTER TABLE `Proverkanakazaniefkuz`
  ADD CONSTRAINT `FK_28965AEA831CC5F4` FOREIGN KEY (`proverka_fkuz_id`) REFERENCES `ProverkaFkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `Proverkanarushenie`
--
ALTER TABLE `Proverkanarushenie`
  ADD CONSTRAINT `FK_FD4DDF93232D562B` FOREIGN KEY (`object_id`) REFERENCES `objects` (`id`),
  ADD CONSTRAINT `FK_FD4DDF93E5E06548` FOREIGN KEY (`proverka_id`) REFERENCES `Proverka` (`id`);

--
-- Ограничения внешнего ключа таблицы `rukovoditelzamestitel`
--
ALTER TABLE `rukovoditelzamestitel`
  ADD CONSTRAINT `FK_47B5378CFC1E94EE` FOREIGN KEY (`rukovoditel_id`) REFERENCES `rukovoditel` (`id`);

--
-- Ограничения внешнего ключа таблицы `sanzakl`
--
ALTER TABLE `sanzakl`
  ADD CONSTRAINT `FK_2ADC7EEBBB896A5D` FOREIGN KEY (`fkuz_id`) REFERENCES `fkuz` (`id`);

--
-- Ограничения внешнего ключа таблицы `soputpatol`
--
ALTER TABLE `soputpatol`
  ADD CONSTRAINT `FK_704CD36DFA8C2669` FOREIGN KEY (`osugdenyi_id`) REFERENCES `osugdenyi` (`id`);

--
-- Ограничения внешнего ключа таблицы `viddeyatelnosti`
--
ALTER TABLE `viddeyatelnosti`
  ADD CONSTRAINT `FK_B64835D7BB896A5D` FOREIGN KEY (`fkuz_id`) REFERENCES `fkuz` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
