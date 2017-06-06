# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.17)
# Database: skatespot
# Generation Time: 2017-06-06 19:07:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(44,'2014_10_12_100000_create_password_resets_table',1),
	(45,'2017_04_26_222050_create_users_table',1),
	(46,'2017_05_04_205417_create_spots_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table spots
# ------------------------------------------------------------

DROP TABLE IF EXISTS `spots`;

CREATE TABLE `spots` (
  `spot_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `spot_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_bust` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spot_difficulty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`spot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `skate_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Street',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'U',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-header.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `location`, `skate_type`, `type`, `avatar`, `header`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'dawsy','d@gmail.com','dawsy','$2y$10$7QUMyLQwjI5ShNARP5heM.mko9SCxcJjOaBIgTOJCMSSg9r1GSMwO','N/A','Street','A','1494785299.png','1494281502.png','yaydwo20m0fVww4HlaNzt9bc5mt0tewgQothPNTCcipH9Ae7f1oWi4j0dAjq','2017-05-08 22:06:44','2017-05-14 18:08:19'),
	(2,'felix','f@gmail.com','peter','','Notts','Street','U','default.jpg','default-header.jpg',NULL,NULL,NULL),
	(3,'John Doe','j@gmail.com','john','$2y$10$5p/tB1CrDUF8HhrvpTt9c.ujmvObPsHd7akGon96MXPG51.257fdi','N/A','Street','U','default.jpg','default-header.jpg',NULL,'2017-05-09 20:24:49','2017-05-09 20:24:49');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
