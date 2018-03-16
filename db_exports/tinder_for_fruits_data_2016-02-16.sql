# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.10)
# Database: tinder_for_fruits_data
# Generation Time: 2016-02-17 02:08:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `name`, `image`)
VALUES
	(1,'Alfalfa Sprouts','alfalfa_sprouts.jpg'),
	(2,'Apple','apple.jpg'),
	(3,'Apricot','apricot.jpg'),
	(4,'Artichoke','artichoke.jpg'),
	(5,'Asian Pear','asian_pear.jpg'),
	(6,'Asparagus','asparagus.jpg'),
	(7,'Atemoya','atemoya.jpg'),
	(8,'Avocado','avocado.jpg'),
	(9,'Bamboo Shoots','bamboo_shoots.jpg'),
	(10,'Banana','banana.jpg'),
	(11,'Beans','beans.jpg'),
	(12,'Bean Sprouts','bean_sprouts.jpg'),
	(13,'Beets','beets.jpg'),
	(14,'Belgian Endive','belgian_endive.jpg'),
	(15,'Bitter Melon','bitter_melon.jpg'),
	(16,'Bell Peppers','bell_peppers.jpg'),
	(17,'Blackberries','blackberry.jpg'),
	(18,'Blueberries','blueberry.jpg'),
	(19,'Bok Choy','bok_choy.jpg'),
	(20,'Boniato','boniato.jpg'),
	(21,'Boysenberries','boysenberry.jpg'),
	(22,'Broccoflower','broccoflower.jpg'),
	(23,'Broccoli','broccoli.jpg'),
	(24,'Brussels Sprouts','brussel_sprouts.jpg'),
	(25,'Cabbage (green and red)','cabbage.jpg'),
	(26,'Cantaloupe','cantaloupe.jpg'),
	(27,'Carambola (star fruit or star apple)','carambola.jpg'),
	(28,'Carrots','carrots.jpg'),
	(29,'Casaba Melon','casaba_melon.jpg'),
	(30,'Cauliflower','cauliflower.jpg'),
	(31,'Celery','celery.jpg'),
	(32,'Chayote','chayote.jpg'),
	(33,'Cherimoya (Custard Apple)','cherimoya.jpg'),
	(34,'Cherries','cherries.jpg'),
	(35,'Coconuts','coconuts.jpg'),
	(36,'Collard Greens','collard_greens.jpg'),
	(37,'Corn','corn.jpg'),
	(38,'Cranberries','cranberries.jpg'),
	(39,'Cucumber','cucumber.jpg'),
	(40,'Dates','dates.jpg'),
	(41,'Dried Plums (a.k.a. prunes)','prunes.jpg'),
	(42,'Eggplant','eggplant.jpg'),
	(43,'Endive','endive.jpg'),
	(44,'Escarole','escarole.jpg'),
	(45,'Feijoa','feijoa.jpg'),
	(46,'Fennel','fennel.jpg'),
	(47,'Figs (dry and fresh)','figs.jpg'),
	(48,'Garlic','garlic.jpg'),
	(49,'Gooseberries','gooseberries.jpg'),
	(50,'Grapefruit','grapefruit.jpg'),
	(51,'Grapes','grapes.jpg'),
	(52,'Green Beans','green_beans.jpg'),
	(53,'Green Onions','green_onions.jpg'),
	(54,'Greens (turnip)','turnip_greens.jpg'),
	(55,'Guava','guava.jpg'),
	(56,'Hominy','hominy.jpg'),
	(57,'Honeydew Melon','honeydew.jpg'),
	(58,'Horned Melon','horned_melon.jpg'),
	(59,'Iceberg Lettuce','iceberg_lettuce.jpg'),
	(60,'Jerusalem Artichoke','jerusalem_artichoke.jpg'),
	(61,'Jicama','jicama.jpg'),
	(62,'Kale','kale.jpg'),
	(63,'Kiwifruit','kiwi.jpg'),
	(64,'Kohlrabi','kohlrabi.jpg'),
	(65,'Kumquat','kumquat.jpg'),
	(66,'Leeks','leeks.jpg'),
	(67,'Lemons','lemon.jpg'),
	(68,'Lettuce (Boston)','lettuce.jpg'),
	(69,'Lima Beans','lima_beans.jpg'),
	(70,'Limes','lime.jpg'),
	(71,'Longan','Longan.jpg'),
	(72,'Loquat','loquat.jpg'),
	(73,'Lychee','Lychee.jpg'),
	(74,'Madarins','apple.jpg'),
	(75,'Malanga','malanga.jpg'),
	(76,'Mandarin Oranges','mandarin.jpg'),
	(77,'Mangos','mango.jpg'),
	(78,'Mulberries','mulberries.jpg'),
	(79,'Mushrooms','mushrooms.jpg'),
	(80,'Napa (Chinese Cabbage)','napa.jpg'),
	(81,'Nectarines','nectarine.jpg'),
	(82,'Okra','okra.jpg'),
	(83,'Onion (green)','apple.jpg'),
	(84,'Oranges','oranges.jpg'),
	(85,'Papayas','papaya.jpg'),
	(86,'Parsnip','parsnips.jpg'),
	(87,'Passion Fruit','passion-fruit.jpg'),
	(88,'Peaches','peaches.jpg'),
	(89,'Pears','pears.jpg'),
	(90,'Peas (green)','peas.jpg'),
	(91,'Peppers','peppers.jpg'),
	(92,'Persimmons','persimmons.jpg'),
	(93,'Pineapple','pineapples.jpg'),
	(94,'Plantains','plantains.jpg'),
	(95,'Plums','plums.jpg'),
	(96,'Pomegranate','pomegranates.jpg'),
	(97,'Potatoes','potatoes.jpg'),
	(98,'Prickly Pear (Cactus Pear)','prickly-pears.jpg'),
	(99,'Prunes','prunes.jpg'),
	(100,'Pummelo (Chinese Grapefruit)','pummelo.jpg'),
	(101,'Pumpkin','pumpkin.jpg'),
	(102,'Quince','quince.jpg'),
	(103,'Radicchio','radicchio.jpg'),
	(104,'Radishes','radishes.jpg'),
	(105,'Raisins','raisins.jpg'),
	(106,'Raspberries','raspberries.jpg'),
	(107,'Red Cabbage','red_cabbage.jpg'),
	(108,'Rhubarb','rhubarb.jpg'),
	(109,'Romaine Lettuce','romaine_lettuce.jpg'),
	(110,'Rutabaga','rutabaga.jpg'),
	(111,'Shallots','shallots.jpg'),
	(112,'Snow Peas','snow_peas.jpg'),
	(113,'Spinach','spinach.jpg'),
	(114,'Sprouts','sprouts.jpg'),
	(115,'Squash (acorn','squash.jpg'),
	(116,'Strawberries','strawberries.jpg'),
	(117,'String Beans','green_beans.jpg'),
	(118,'Sweet Potato','sweet_potato.jpg'),
	(119,'Tangelo','tangelo.jpg'),
	(120,'Tangerines','tangerines.jpg'),
	(121,'Tomatillo','tomatillo.jpg'),
	(122,'Tomato','tomato.jpg'),
	(123,'Turnip','turnip.jpg'),
	(124,'Ugli Fruit','ugli_fruit.jpg'),
	(125,'Watermelon','watermellon.jpg'),
	(126,'Water Chestnuts','water_chestnuts.jpg'),
	(127,'Watercress','watercress.jpg'),
	(128,'Waxed Beans','waxed_beans.jpg'),
	(129,'Yams','yams.jpg'),
	(130,'Yellow Squash','yellow_squash.jpg'),
	(131,'Yuca/Cassava','cassava.jpg'),
	(132,'Zucchini Squash','zucchini_squash.jpg');

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_preferences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_preferences`;

CREATE TABLE `user_preferences` (
  `user_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `like_item` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`,`item_id`),
  KEY `constr_item_lnk` (`item_id`),
  CONSTRAINT `constr_item_lnk` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constr_user_lnk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_preferences` WRITE;
/*!40000 ALTER TABLE `user_preferences` DISABLE KEYS */;

INSERT INTO `user_preferences` (`user_id`, `item_id`, `like_item`)
VALUES
	(21,5,1),
	(21,8,1),
	(21,12,1),
	(21,15,0),
	(21,16,1),
	(21,21,1),
	(21,24,0),
	(21,44,0),
	(21,47,1),
	(21,51,1),
	(21,53,1),
	(21,64,0),
	(21,68,1),
	(21,69,0),
	(21,75,0),
	(21,76,0),
	(21,82,1),
	(21,91,1),
	(21,93,1),
	(21,105,1),
	(21,106,1),
	(21,111,1),
	(21,119,0),
	(21,127,1),
	(21,128,0),
	(21,129,1),
	(23,5,0),
	(23,8,1),
	(23,12,0),
	(23,13,0),
	(23,15,1),
	(23,16,1),
	(23,21,1),
	(23,32,0),
	(23,33,0),
	(23,34,1),
	(23,47,0),
	(23,51,1),
	(23,53,1),
	(23,68,1),
	(23,69,1),
	(23,71,0),
	(23,81,1),
	(23,82,0),
	(23,91,1),
	(23,93,1),
	(23,98,1),
	(23,105,1),
	(23,106,1),
	(23,111,0),
	(23,114,0),
	(23,115,0),
	(23,127,0),
	(23,129,0),
	(24,3,0),
	(24,5,1),
	(24,6,1),
	(24,8,0),
	(24,11,0),
	(24,12,0),
	(24,15,1),
	(24,16,0),
	(24,17,1),
	(24,21,0),
	(24,24,1),
	(24,30,0),
	(24,32,0),
	(24,33,0),
	(24,34,1),
	(24,36,0),
	(24,47,0),
	(24,51,1),
	(24,52,0),
	(24,53,0),
	(24,65,0),
	(24,68,0),
	(24,69,0),
	(24,71,0),
	(24,72,0),
	(24,74,1),
	(24,76,1),
	(24,81,1),
	(24,82,0),
	(24,91,0),
	(24,93,1),
	(24,98,0),
	(24,103,0),
	(24,105,1),
	(24,106,1),
	(24,108,0),
	(24,111,0),
	(24,113,1),
	(24,114,0),
	(24,116,1),
	(24,120,1),
	(24,123,0),
	(24,127,0),
	(24,129,0),
	(25,5,1),
	(25,6,1),
	(25,8,1),
	(25,12,0),
	(25,15,0),
	(25,16,1),
	(25,17,1),
	(25,21,1),
	(25,24,0),
	(25,34,1),
	(25,47,1),
	(25,51,1),
	(25,53,1),
	(25,59,1),
	(25,66,0),
	(25,68,1),
	(25,69,1),
	(25,74,1),
	(25,76,1),
	(25,77,1),
	(25,81,1),
	(25,82,0),
	(25,91,1),
	(25,92,0),
	(25,93,1),
	(25,95,1),
	(25,98,0),
	(25,103,0),
	(25,105,1),
	(25,106,1),
	(25,107,0),
	(25,111,0),
	(25,113,1),
	(25,116,1),
	(25,127,1),
	(25,129,1);

/*!40000 ALTER TABLE `user_preferences` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`)
VALUES
	(8,'Bret','bretlorimore@gmail.com','easter-egg-pw123'),
	(9,'John','John@testdomain.com','easter-egg-pw123'),
	(10,'Luc','luc','ZGE2MzRjMzA3NGY5YWQwNWU2OTkwNzdkNGMxMDBjYzAxODlkNDYzZjhhMDliNzE1Yjg0ZmJkZGE4ZjVkZGFlNQ=='),
	(11,'Jake','jakejeffreys','easter-egg-pw123'),
	(12,'Fenger','fenger','easter-egg-pw123'),
	(21,NULL,'bret','MGFmZDE5ZGVjMDRiYWI1OGFlMzQxZDIyMDJmZTU4MDM4NWM5Y2E2Y2FhODNkOWU1NzYwNmRlZjU2ZmQzZThjNQ=='),
	(22,NULL,'puppymonkeybaby','YjE0MmNjMjNmMTdhM2JiYWRiODJkZGY0Y2Q0MDIxMWY1ODBhNGY4YjQyYmJjYTk0OGMxMzJkYTlkY2Y1ZTk5OA=='),
	(23,NULL,'jakeloser','M2ZjMWRiNTMxY2NiNmEyNzFkZTQ2YjJmYzRkZTJkNjI5OWM4NGNiN2IxM2I0ZjRlMmUzYWE4YmI5MWRlYWRiZQ=='),
	(24,NULL,'testusr1','M2JlNTg3YTgxMGMzMTkxYTFmMzQ3NzQwYWRmNjdiMDE1YWUyZTlmYThkNzE1Y2E5MjYyNzQ2YzY5ZjJkMTBkMw=='),
	(25,NULL,'testusr2','MjIzNmNiMzVkYmYzZWIzMmU5ZDZjZWUxZWE4ODFmNGUzYTE5OGZkNWE3ZjA0NTczMmUyZTI1MmU3OWE2NGIzNQ==');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
