# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: 127.0.0.1 (MySQL 5.5.42)
# Схема: kgb
# Время создания: 2016-07-07 02:05:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `title`, `parent`)
VALUES
	(1,'Экипировка',NULL),
	(2,'Оружие',NULL),
	(3,'Техника',NULL),
	(4,'VIP техика',NULL),
	(5,'Воздушная',4),
	(6,'Наземная',4),
	(7,'Гражданская',4),
	(8,'Паки',4);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `menu` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы oreders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oreders`;

CREATE TABLE `oreders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `text` text,
  `image` text,
  `items` longtext,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `title`, `category`, `text`, `image`, `items`, `price`)
VALUES
	(1,'Виртуальный Арсенал',2,'— Наёмники владеющие Базой, у которых есть Возрождение в Снаряжении могут поставить на базу Дом с Виртуальным Арсеналом.\n— Вы очень быстро и бесплатно одеваетесь в любое снаряжение доступное на сервере.\n— Можно прямо в игре импортировать заранее сохранные конфиги с предустановками экипировки.','https://pp.vk.me/c624130/v624130717/42fb8/qt-A8lFbYVQ.jpg','[{\"item\":\"123\"}]',5),
	(2,'Ядерная Бомба',2,'— применять только на территории Республик.\n— выдается самолет с 1 бомбой, перед применением лично И.В Сталиным.','https://pp.vk.me/c630931/v630931717/80b8/vrktBM9ESUI.jpg','[{\"item\":\"123\"}]',1),
	(3,'Базы 30 дней',1,'— Участники вашего Клана получают возможность возрождаться на Базе.\n— Все участники Клана получают возможность крышевать ресурсы в зоне контролируемой Базой.\n— Укрываться на базе от Полиции, ибо полиция не имеет право ступать на Личную базу.\n— Вести любой род коммерческой деятельности со Штаб-Квартирой *(Офисом) на Базе.\n— На базе есть личный Торговец Наркотиками.\n— Авиа Ангар и Гараж на базе.','https://pp.vk.me/c621925/v621925717/4e08e/JEw9kT9MCEU.jpg',NULL,10),
	(4,'Премиум Наёмник',4,'Хорёк занесший деньги в кассу, тот час перестаёт быть таковым и переходит в разряд Наёмников.\n\nПолучив статус Наёмника, открываются следующие привилегии:\n\n— Точки возрождения на базах Наёмников и в Военном Порту.\n*(в Военном Порту можно покупать Корабли способные вести огонь по воздушным целям и Транспортные Платформы способные перевозить вертолеты, танки в боевом режиме.\n\n— Не забирает стандартные точки возрождения в Городах при покупки Удостоверения Ополчения.\n\n— На каждой базе стоит торговцы и гараж наземной и воздушной техники наёмников,\nс расширенным ассортиментом боевой техники *(Марид, Горгона и.т.д) и сниженными ценами.\n\n— На Базах добавлен уникальный магазин оружия с заниженными ценами.\n*(Широкий выбор моделей снайперских винтовок, тепловизоров, одежды)\n\n— Увеличен лимит владения домами, до 8.\n\n— И самое главное 70 единиц наземной/воздушной боевой техники!\n\nПолиции:\n— В каждом полицейском участке есть Воен.Торг, с топовыми стволами, и экипировкой.\n— Скрытые точки возрождения, на секретных базах.','https://pp.vk.me/c621925/v621925717/4e159/wL4QWUla6Mo.jpg',NULL,5);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
