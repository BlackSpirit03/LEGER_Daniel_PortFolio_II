# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: localhost (MySQL 5.6.35)
# Base de données: db_portfolio
# Temps de génération: 2018-01-21 21:27:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table t_skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `t_skills`;

CREATE TABLE `t_skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(1) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `order` int(10) DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t_skills_user_id_foreign` (`user_id`),
  CONSTRAINT `t_skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `t_skills` WRITE;
/*!40000 ALTER TABLE `t_skills` DISABLE KEYS */;

INSERT INTO `t_skills` (`id`, `user_id`, `language`, `short_label`, `detail`, `type`, `level`, `order`, `logo`, `created_at`, `updated_at`)
VALUES
	(1,1,'fr','SECURITE','<ul>\n<li class=\"text-white\">FINJAN / MAILSWEEPER</li>\n<li class=\"text-white\">SOPHOS ANTI-VIRUS</li>\n<li class=\"text-white\">Proxy ALTEON ACC / iPLANET / LDAP / AVENTAIL / BLUECOATS</li>\n<li class=\"text-white\">Gateway SSL JUNIPER</li>\n<li class=\"text-white\">Firewall CHECKPOINT / JUNIPER / PFSENSE</li>\n</ul>',2,4,42,'img/logos/security.png',NULL,NULL),
	(2,1,'fr','SYSTEMES D\'EXPLOITATION','Os2 - Ms-Dos / Windows - Sco Unix / Qnx / Linux / IPSO Nokia / MAC OS X - VIRTUAL BOX / PROXMOX',2,4,40,'img/logos/opsystems.png',NULL,NULL),
	(3,1,'fr','RESEAUX','TCP/IP - Novell - Windows Workgroup / Lan Manger - Appletalk / Appleshare - Switch L4/7 Alteon AD3 & Cisco ACE - Appliances NOKIA - Sondes RIVERBED / Wireshark',2,4,41,'img/logos/network.jpg',NULL,NULL),
	(4,1,'fr','DEVELOPPEMENT','COBOL - C++ - Visual Basic / Access Basic - Clipper 5.2 - WINDEV - PERL - PHP - HTML5 - JAVASCRIPT / JQUERY',2,4,45,NULL,NULL,NULL),
	(5,1,'fr','SGBD & L4G','<ul>\n<li class=\"text-white\">DBASE IV</li>\n<li class=\"text-white\">Microsoft ACCESS</li>\n<li class=\"text-white\">ORACLE / SQL</li>\n<li class=\"text-white\">4ème DIMENSION (Mac)</li>\n<li class=\"text-white\"><strong>PHP / MySQL</strong></li>\n</ul>',2,4,43,'img/logos/sgbd.jpg',NULL,NULL),
	(6,1,'fr','METHODES','<ul>\n<li class=\"text-white\">LCP</li>\n<li class=\"text-white\">MERISE</li>\n<li class=\"text-white\">MVC</li>\n</ul>',2,3,44,'img/logos/method.jpg',NULL,NULL),
	(7,1,'en','SECURITY','<ul>\n<li class=\"text-white\">FINJAN / MAILSWEEPER</li>\n<li class=\"text-white\">SOPHOS ANTI-VIRUS</li>\n<li class=\"text-white\">Proxy ALTEON ACC / iPLANET / LDAP / AVENTAIL / BLUECOATS</li>\n<li class=\"text-white\">Gateway SSL JUNIPER</li>\n<li class=\"text-white\">Firewall CHECKPOINT / JUNIPER / PFSENSE</li>\n</ul>',2,4,42,'img/logos/security.png',NULL,NULL),
	(8,1,'en','OPERATING SYSTEMS','Os2 - Ms-Dos / Windows - Sco Unix / Qnx / Linux / IPSO Nokia / MAC OS X - VIRTUAL BOX / PROXMOX',2,4,40,'img/logos/opsystems.png',NULL,NULL),
	(9,1,'en','NETWORKS','TCP/IP - Novell - Windows Workgroup / Lan Manger - Appletalk / Appleshare - Switch L4/7 Alteon AD3 & Cisco ACE - Appliances NOKIA - Sondes RIVERBED / Wireshark',2,4,41,'img/logos/network.jpg',NULL,NULL),
	(10,1,'en','PROGRAMMING','<ul>\n<li class=\"text-white\">COBOL / Clipper 5.2 / C++</li>\n<li class=\"text-white\">Visual Basic / Access Basic</li>\n<li class=\"text-white\"> WINDEV / PERL</li>\n</ul>',2,4,45,NULL,NULL,NULL),
	(11,1,'en','SGBD & L4G','<ul>\n<li class=\"text-white\">DBASE IV</li>\n<li class=\"text-white\">Microsoft ACCESS</li>\n<li class=\"text-white\">ORACLE / SQL</li>\n<li class=\"text-white\">4ème DIMENSION (Mac)</li>\n<li class=\"text-white\"><strong>PHP / MySQL</strong></li>\n</ul>',2,3,43,'img/logos/sgbd.jpg',NULL,NULL),
	(12,1,'en','METHODS','<ul>\n<li class=\"text-white\">LCP</li>\n<li class=\"text-white\">MERISE</li>\n<li class=\"text-white\">MVC</li>\n</ul>',2,4,44,'img/logos/method.jpg',NULL,NULL),
	(13,1,'fr','HTML','Html',1,5,10,'img/logos/html5.png',NULL,NULL),
	(14,1,'fr','CSS','Css',1,4,11,'img/logos/css3.png',NULL,NULL),
	(15,1,'fr','JAVASCRIP','Javascript',1,4,12,'img/logos/js.png',NULL,NULL),
	(16,1,'fr','JQUERY','JQuery',1,3,13,'img/logos/jquery.png',NULL,NULL),
	(17,1,'fr','PHP','Php',1,4,20,'img/logos/php.png',NULL,NULL),
	(18,1,'fr','BOOTSTRAP','Bootstrap',1,3,22,'img/logos/bootstrap.png',NULL,NULL),
	(19,1,'fr','MYSQL','MySql',1,3,21,'img/logos/mysql.png',NULL,NULL),
	(20,1,'fr','LARAVEL','Laravel',1,3,23,'img/logos/laravel.png',NULL,NULL),
	(21,1,'fr','WORDPRESS','WordPress',1,3,30,'img/logos/wordpress.png',NULL,NULL),
	(22,1,'fr','DRUPAL','Drupal',1,3,31,'img/logos/drupal.png',NULL,NULL),
	(23,1,'fr','IONIC','iOnic',1,2,32,'img/logos/ionic.png',NULL,NULL),
	(24,1,'en','HTML','Html',1,5,10,'img/logos/html5.png',NULL,NULL),
	(25,1,'en','CSS','Css',1,4,11,'img/logos/css3.png',NULL,NULL),
	(26,1,'en','JAVASCRIP','Javascript',1,4,12,'img/logos/js.png',NULL,NULL),
	(27,1,'en','JQUERY','JQuery',1,3,13,'img/logos/jquery.png',NULL,NULL),
	(28,1,'en','PHP','Php',1,4,20,'img/logos/php.png',NULL,NULL),
	(29,1,'en','BOOTSTRAP','Bootstrap',1,3,22,'img/logos/bootstrap.png',NULL,NULL),
	(30,1,'en','MYSQL','MySql',1,3,21,'img/logos/mysql.png',NULL,NULL),
	(31,1,'en','WORDPRESS','WordPress',1,3,30,'img/logos/wordpress.png',NULL,NULL),
	(32,1,'en','DRUPAL','Drupal',1,3,31,'img/logos/drupal.png',NULL,NULL),
	(33,1,'en','IONIC','iOnic',1,2,32,'img/logos/ionic.png',NULL,NULL),
	(34,1,'en','LARAVEL','Laravel',1,3,23,'img/logos/laravel.png',NULL,NULL);

/*!40000 ALTER TABLE `t_skills` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
