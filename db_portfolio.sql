-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 05, 2018 at 08:08 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--
CREATE DATABASE IF NOT EXISTS `db_portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_portfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_14_140308_create_t_authors_table', 1),
(4, '2017_12_14_140546_create_t_skills_table', 1),
(5, '2017_12_14_143130_create_t_professionals_table', 1),
(6, '2017_12_14_143423_create_t_projects_table', 1),
(7, '2017_12_14_143620_create_t_personals_table', 1),
(8, '2017_12_14_143744_create_t_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_authors`
--

CREATE TABLE `t_authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_messages`
--

CREATE TABLE `t_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag_urgent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_messages`
--

INSERT INTO `t_messages` (`id`, `user_id`, `name_contact`, `company_contact`, `phone_contact`, `email`, `message`, `flag_urgent`, `created_at`, `updated_at`) VALUES
(26, 1, 'Daniel LEGER', 'IBM France', '999888777', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2017-12-31 14:17:09', '2017-12-31 14:17:09'),
(27, 1, 'TEST', 'TEST', '999999999', 'leger.daniel@gmail.com', 'TEST', 1, '2017-12-31 14:21:08', '2017-12-31 14:21:08'),
(28, 1, 'TOTO', 'TUTU', '333333333', 'leger.daniel@gmail.com', 'TITI', NULL, '2017-12-31 14:26:51', '2017-12-31 14:26:51'),
(29, 1, 'TEST', 'TEST', '333444555', 'leger.daniel@gmail.com', 'TTTTTTT', NULL, '2017-12-31 14:31:57', '2017-12-31 14:31:57'),
(30, 1, 'TOTO', 'TOTO', '12345', 'test@test.com', 'jdksqfmdslfqksdjm', NULL, '2017-12-31 14:36:53', '2017-12-31 14:36:53'),
(32, 1, 'fdsfdsqf', 'fdsqfdsqf', 'fdsqdsfq', 'test@test.com', 'fdsqfdsqf', NULL, '2017-12-31 14:44:43', '2017-12-31 14:44:43'),
(33, 1, 'fjdksqfldms', 'fdsjfqkdslqmfsdl', 'fdsqfdfq', 'test@test.com', 'fdsqdsfqds', NULL, '2017-12-31 14:46:25', '2017-12-31 14:46:25'),
(34, 1, 'fdsqfdsfqsd', 'fdsqfdsqfs', '12345667', 'test@test.com', 'fdjskqfmdslqfj', NULL, '2017-12-31 14:49:44', '2017-12-31 14:49:44'),
(35, 1, 'Daniel LEGER', 'IBM', '122334455', 'leger.daniel@gmail.com', 'test message', 1, '2018-01-02 17:34:54', '2018-01-02 17:34:54'),
(36, 1, 'Daniel LEGER-BADET', 'WORLD COMPANY', '111222333444', 'leger.daniel@gmail.com', 'Ceci est un message de test', 1, '2018-01-02 20:45:20', '2018-01-02 20:45:20'),
(37, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:24:14', '2018-01-02 21:24:14'),
(38, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:24:58', '2018-01-02 21:24:58'),
(39, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:25:29', '2018-01-02 21:25:29'),
(40, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:26:23', '2018-01-02 21:26:23'),
(41, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:29:34', '2018-01-02 21:29:34'),
(42, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:29:53', '2018-01-02 21:29:53'),
(43, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:30:33', '2018-01-02 21:30:33'),
(44, 1, 'Daniel LEGER', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Ceci est mon message', 1, '2018-01-02 21:33:39', '2018-01-02 21:33:39'),
(45, 1, 'Daniel LEGER', 'IBM', '33333333', 'leger.daniel@gmail.com', 'Mon message', NULL, '2018-01-02 21:37:50', '2018-01-02 21:37:50'),
(46, 1, 'Daniel LEGER', 'IBM', '33333333', 'leger.daniel@gmail.com', 'Mon message', NULL, '2018-01-02 21:42:17', '2018-01-02 21:42:17'),
(47, 1, 'Daniel LEGER-BADET', 'IBM FRANCE', '1234567890', 'leger.daniel@gmail.com', 'Voici mon message. A très bientôt', 1, '2018-01-02 21:46:10', '2018-01-02 21:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `t_personals`
--

CREATE TABLE `t_personals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_personals`
--

INSERT INTO `t_personals` (`id`, `user_id`, `language`, `short_label`, `detail`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Marital Status', 'Maried - 5 childrens', '', '', NULL, NULL),
(2, 1, 'en', 'Date of Birth', 'Born in <strong>Vichy</strong> the <strong>29th of novembre 1967</strong> (50 years old)', '', '', NULL, NULL),
(3, 1, 'fr', 'Status Marital', 'Marié - 5 enfants', '', '', NULL, NULL),
(4, 1, 'fr', 'Date et Lieu de Naissance', 'Né à <strong>Vichy</strong> le <strong>29 novembre 1967</strong> (50 ans)', '', '', NULL, NULL),
(5, 1, 'fr', 'Réseaux Sociaux', 'Réseaux Sociaux<br><br>\n<!-- Social Networks -->\n<ul class=\"list-inline\">\n	<li class=\"list-inline-item text-center\">\n		<a class=\"social-link rounded-circle text-white mr-3\" href=\"#\" data-toggle=\"tooltip\" title=\"Aller sur Facebook\"><i class=\"icon-social-facebook\" aria-hidden=\"true\"></i></a>\n	</li>\n	<li class=\"list-inline-item text-center\">\n		<a class=\"social-link rounded-circle text-white mr-3\" href=\"#\" data-toggle=\"tooltip\" title=\"Aller sur Twitter\"><i class=\"icon-social-twitter\" aria-hidden=\"true\"></i></a>\n	</li>\n	<li class=\"list-inline-item text-center\">\n		<a class=\"social-link rounded-circle text-white\" href=\"https://github.com/BlackSpirit03\" target=\"_blank\" data-toggle=\"tooltip\" title=\"Aller sur GitHub\"><i class=\"icon-social-github\" aria-hidden=\"true\"></i></a>\n	</li>\n</ul>\n', '', '', NULL, NULL),
(6, 1, 'en', 'Social Networks', 'Social Networks<br><br>\n<!-- Social Networks -->\n<ul class=\"list-inline\">\n	<li class=\"list-inline-item text-center\">\n		<a class=\"social-link rounded-circle text-white mr-3\" href=\"#\" data-toggle=\"tooltip\" title=\"Go to Facebook\"><i class=\"icon-social-facebook\" aria-hidden=\"true\"></i></a>\n	</li>\n	<li class=\"list-inline-item text-center\">\n		<a class=\"social-link rounded-circle text-white mr-3\" href=\"#\" data-toggle=\"tooltip\" title=\"Go to Twitter\"><i class=\"icon-social-twitter\" aria-hidden=\"true\"></i></a>\n	</li>\n	<li class=\"list-inline-item text-center\">\n		<a class=\"social-link rounded-circle text-white\" href=\"https://github.com/BlackSpirit03\" target=\"_blank\" data-toggle=\"tooltip\" title=\"Go to GitHub\"><i class=\"icon-social-github\" aria-hidden=\"true\"></i></a>\n	</li>\n</ul>', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_professionals`
--

CREATE TABLE `t_professionals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_professionals`
--

INSERT INTO `t_professionals` (`id`, `user_id`, `language`, `short_label`, `detail`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 1, 'fr', 'Badge1', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl1\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading text-right\">\n			<h4><strong>IBM France</strong> - Datacenters Clermont-Ferrand (63)</h4>\n		</div>\n		<div class=\"timeline-body text-left\">\n			<ul type=\"square\">\n				<li>On Site Support pour Portable Storage Media.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">depuis fin 2016</p>\n		</div>\n	</div>\n</li>\n', '', '', NULL, NULL),
(2, 1, 'fr', 'Badge2', '<li class=\"timeline-inverted\">\n		<div class=\"timeline-badge\">\n			<a><i class=\"fa fa-circle invert\" id=\"tl2\"></i></a>\n		</div>\n		<div class=\"timeline-panel\">\n			<div class=\"timeline-heading text-left\">\n				<h4><strong>IBM France</strong> - Clermont-Ferrand (63)</h4>\n			</div>\n			<div class=\"timeline-body text-justify\">\n				<ul type=\"square\">\n					<li>Application Performance Management : contact privilégié pour Michelin France et Europe : Qualification d\'applications - Troubleshooting d\'incidents non résolus par les équipes support niveau 1, 2 et 3 - Organisation des activités APM, création de procédures et méthodes d’investigation, installation et maintenance des sondes réseaux (datacenters), réalisation de rapports de qualifications, d’incidents et de préconisations.</li>\n					<li>Mise en place et migration des passerelles principales d’inter-connexion réseaux IBM-Michelin : installations et paramétrages des nouveaux équipements, mise à jour des documentations utilisateurs, troubleshootings et upgrades des règles de restrictions tout au long du processus de migration de l’infrastructure et des utilisateurs.</li>\n					<li>équipe support réseau niveau 2 & 3 des infrastructures de sécurité Michelin : gestion des Accès Internet Sortant/Entrant, Remote, Extranet/Vpn, déploiement de nouvelles connexions, traitement d\'incidents complexes, upgrades de sécurité, revalidation des règles firewall, analyses réseau.</li>\n					<li>2004/2005 - Transition réseau : mise en place de l’infrastructure d’accès au réseau Michelin depuis les réseaux IBM Europe (supervision/administration équipements WAN, LAN, VPNs, serveurs d’infrastructure/d’applications, etc.).</li>\n					<li>élargissement du réseau d’administration/supervision des infrastructures de sécurité Michelin (Accès Internet Sortant et Entrant, Dial-In, Extranet, etc.).</li>\n					<li>participation à des projets de transformation d’infrastructures réseau concernant le client Michelin (anti-spam, sonde ISS, etc.).</li>\n				</ul>\n			</div>\n			<div class=\"timeline-footer\">\n				<p class=\"text-left\">2004/2016</p>\n			</div>\n		</div>\n</li>\n', '', '', NULL, NULL),
(3, 1, 'fr', 'Badge3', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl3\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>MICHELIN</strong> Clermont-Ferrand (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<p><strong>Service EUR/I/IN/TL</strong></p>\n			<ul type=square>\n				<li>ingénierie et mise en place du réseau d’administration/supervision des infrastructures de sécurité Michelin (Accès Internet Sortants et Entrants, Dial-In, Extranet, etc.).</li>\n				<li>support niveau 2 pour le déploiement d’un client Socks (Permeo) sur les postes clients.</li>\n				<li>exploitation (relation avec le support utilisateurs et les clients) et support niveau 2 de la nouvelle infrastructure d’accès Internet (relais principal avec le pôle d’expertise).</li>\n				<li>mise en production d\'une nouvelle architecture d’Accès Internet Sortant :  HTTP/S - SMTP – SOCKS.</li>\n				<li>ingénierie des procédures de migration de l’ancienne infrastructure d’accès à Internet vers une nouvelle architecture.</li>\n				<li>installation et paramétrage des équipements (Switchs L4/7, Firewalls, Proxys) de la nouvelle infrastructure d’Accès Internet Sortant/Entrant.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">2002-2004</p>\n		</div>\n	</div>\n</li>\n', '', '', NULL, NULL),
(4, 1, 'fr', 'Badge4', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl4\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>COHERIS-ATIX</strong> Clermont-Ferrand (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<p><strong>En régie chez Michelin</strong></p>\n			<ul type=\"square\">\n				<li>mise en production d’une solution de connexion sécurisée remote (Dial-In) : mise en place des circuits administratifs clients auprès des équipes sécurité Michelin pour la France et l’Europe, formation de l’assistance utilisateurs et des installateurs, assistance téléphonique utilisateurs, administration et maintenance des serveurs d’accès, relation avec les prestataires externes Michelin (Opérateurs télécom et éditeurs de logiciels).</li>\n				<li>adaptation et extension de la solution «Dial-In» vers d’autres projets ayant des besoins similaires de connexions remote sécurisées.</li>\n				<li>préconisations d’évolution de la solution, tests et mise en place.</li>\n				<li>préparation des maquettes de mise à jour des kits d’accès « Dial-In »  (interface avec différents services internes Michelin).</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">1999-2002 </p>\n		</div>\n	</div>\n</li>\n', '', '', NULL, NULL),
(5, 1, 'fr', 'Badge5', '<li class=\"timeline-inverted\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl5\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-left\"><strong>NETCOM Ingénierie</strong> Lyon (69)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<p><strong>En régie chez FRANCE TELECOM pour le service OCISI  (Organisme Central d’Intégration et de Soutien Informatique).</strong></p>\n			<ul type=\"square\">\n				<li>études d’ingénierie, audits, préconisations et modifications d’architectures réseaux, opérations de déploiement du système d’information et des paliers 96.2, 97.1, 97.2 pour les téléboutiques, les Directions Régionales et les Branches Entreprise du sud-est français et Paris.</li>\n				<li>missions de soutien longue durée et de remise à niveau des administrateurs « CIL » (Correspondants Informatiques Locaux) et des agents France Telecom en agences (DR de Montpellier, Branche Entreprise de Paris).</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-left\">1996-1999</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(6, 1, 'fr', 'Badge6', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle invert\" id=\"tl6\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>SSII CS3i</strong> - Vichy (03)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<ul type=\"square\">\n				<li>développement d’applications de gestion de vente de véhicules pour mandataires automobiles.</li>\n				<li>développement de services télématiques en C sous Unix.</li>\n				<li>formation clientèle aux logiciels bureautiques (suite Microsoft Office).</li>\n				<li>installation et maintenance de matériels et réseaux.</li>\n				<li>assistance téléphonique et télé-interventions.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer primary\">\n			<p class=\"text-right\">1995-1996</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(7, 1, 'fr', 'Badge7', '<li class=\"timeline-inverted\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl7\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-left\"><strong>SSII A.S.Consultant</strong> - Cournon (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<ul type=\"square\">\n				<li>développement d’une application d’études statistiques de la qualité du lait pour le laboratoire d\'analyses s\'occupant des 8 départements de la Région Laitière Auvergne.</li>\n				<li>stage d’entreprise dans le cadre du diplôme d\'Analyste Programmeur : développement, dépannage clientèle sur site et par téléphone, installation de matériels et de logiciels.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-left\">1994-1995</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(8, 1, 'fr', 'Badge8', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle invert\" id=\"tl8\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>PARC NATUREL REGIONAL LIVRADOIS-FOREZ</strong><br />St Gervais-sous-Meymont (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<ul type=\"square\">\n				<li>mise en place et suivi d’appel d\'offre d’un marché d’équipements de signalisation touristique.</li>\n				<li>mise en place et suivi d’appel d’offre pour le remplacement du parc micro-informatique, suivie par la migration du système d\'information et la formation du secrétariat aux matériels et logiciels bureautiques.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer primary\">\n			<p class=\"text-right\">Juillet 1990 à Octobre 1993</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(9, 1, 'fr', 'Badge9', '<li class=\"timeline-inverted\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl9\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-left\"><strong>Association Monts du Forez Découverte</strong> - Saint-Anthème (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<ul type=\"square\">\n				<li>mise en place du système informatique et formation du secrétariat aux matériels et logiciels bureautiques.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-left\">Mars 1990 - Juin 1990</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(10, 1, 'fr', 'Badge10', '<li class=\"timeline-inverted\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle invert\" id=\"tl10\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-left\"><strong>PHOTORUCH</strong> - Vichy (03)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<ul type=\"square\">\n				<li>activité commerciale de vente en magasin de photographie (remplacements ponctuels / vac. du resp.).</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer primary\">\n			<p class=\"text-left\">Janvier 88 - Février 90</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(11, 1, 'fr', 'Badge11', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl11\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>Centre Local de Documentation Pédagogique (CLDP)</strong> - Vichy (03)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<ul type=\"square\">\n				<li>assistance aux instituteurs et mise en page d’un journal à l’usage des enseignants de l’Allier.</li>\n				<li>mise en place d’un micro-serveur télématique.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">Janvier 88 - Novembre 89</p>\n		</div>\n	</div>\n</li>', '', '', NULL, NULL),
(12, 1, 'en', 'Badge1', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl1\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading text-right\">\n			<h4><strong>IBM France</strong> - Datacenters Clermont-Ferrand (63)</h4>\n		</div>\n		<div class=\"timeline-body text-left\">\n			<ul type=\"square\">\n				<li>On Site Support for Portable Storage Media.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">depuis fin 2016</p>\n		</div>\n	</div>\n</li>\n', '', '', NULL, NULL),
(13, 1, 'en', 'Badge2', '<li class=\"timeline-inverted\">\n		<div class=\"timeline-badge\">\n			<a><i class=\"fa fa-circle invert\" id=\"tl2\"></i></a>\n		</div>\n		<div class=\"timeline-panel\">\n			<div class=\"timeline-heading text-left\">\n				<h4><strong>IBM France</strong> - Clermont-Ferrand (63)</h4>\n			</div>\n			<div class=\"timeline-body text-justify\">\n				<ul type=\"square\">\n					<li>Application Performance Management: privileged contact for Michelin France and Europe: Qualification of applications - Troubleshooting of incidents not solved by support teams level 1, 2 and 3 - Organization of APM activities, creation of procedures and methods of investigation, installation and maintenance of network probes (datacenters), production of qualification reports, incidents and recommendations.</li>\n					<li>Implementation and migration of the main IBM-Michelin network inter-connection gateways: installation and configuration of new equipment, updating of user documentation, troubleshootings and upgrades of the restriction rules throughout the infrastructure migration process and users.</li>\n					<li>Level 2 & 3 network support team for Michelin security infrastructures: outgoing / incoming Internet access management, Remote, Extranet / Vpn, deployment of new connections, complex incident management, security upgrades, firewall rules revalidation, network analysis.</li>\n					<li>2004/2005 - Network transition: implementation of the Michelin network access infrastructure from IBM Europe networks (WAN equipment / LAN management, LAN, VPNs, infrastructure / application servers, etc.).</li>\n					<li>expansion of the network of administration / supervision of Michelin\'s security infrastructures (Outgoing and Incoming Internet Access, Dial-In, Extranet, etc.).</li>\n					<li>participation in network infrastructure transformation projects concerning the Michelin client (anti-spam, ISS probe, etc.).</li>\n				</ul>\n			</div>\n			<div class=\"timeline-footer\">\n				<p class=\"text-left\">2004/2016</p>\n			</div>\n		</div>\n</li>\n', '', '', NULL, NULL),
(14, 1, 'en', 'Badge3', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl3\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>MICHELIN</strong> Clermont-Ferrand (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<p><strong>EUR/I/IN/TL Service</strong></p>\n			<ul type=square>\n				<li>engineering and implementation of the network of administration / supervision of Michelin security infrastructures (Outgoing and Incoming Internet Access, Dial-In, Extranet, etc.).</li>\n				<li>Level 2 support for the deployment of a Socks client (Permeo) on client computers.</li>\n				<li>operation (relationship with the support users and customers) and support level 2 of the new Internet access infrastructure (main relay with the center of expertise).</li>\n				<li>Production of a new Outgoing Internet Access architecture: HTTP / S - SMTP - SOCKS.</li>\n				<li>engineering of migration procedures from the old Internet access infrastructure to a new architecture.</li>\n				<li>Installation and configuration of equipment (L4 / 7 switches, Firewalls, Proxies) of the new Outgoing / Incoming Internet Access infrastructure.</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">2002-2004</p>\n		</div>\n	</div>\n</li>\n', '', '', NULL, NULL),
(15, 1, 'en', 'Badge4', '<li class=\"timeline-badge\">\n	<div class=\"timeline-badge\">\n		<a><i class=\"fa fa-circle\" id=\"tl4\"></i></a>\n	</div>\n	<div class=\"timeline-panel\">\n		<div class=\"timeline-heading\">\n			<h4 class=\"text-right\"><strong>COHERIS-ATIX</strong> Clermont-Ferrand (63)</h4>\n		</div>\n		<div class=\"timeline-body text-justify\">\n			<p><strong>Detached at Michelin</strong></p>\n			<ul type=\"square\">\n				<li>production of a remote secure connection solution (Dial-In): implementation of customer administrative circuits with Michelin security teams for France and Europe, training of user and installer support, telephone support users , administration and maintenance of access servers, relationship with Michelin external service providers (Telecom Operators and Software Publishers).</li>\n				<li>adaptation and extension of the Dial-In solution to other projects with similar needs for secure remote connections.</li>\n				<li>recommendations for evolution of the solution, tests and implementation.</li>\n				<li>preparation of models for updating the \"Dial-In\" access kits (interface with various Michelin internal services).</li>\n			</ul>\n		</div>\n		<div class=\"timeline-footer\">\n			<p class=\"text-right\">1999-2002 </p>\n		</div>\n	</div>\n</li>\n', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_projects`
--

CREATE TABLE `t_projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_projects`
--

INSERT INTO `t_projects` (`id`, `user_id`, `language`, `short_label`, `detail`, `photo`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 1, 'fr', 'MasterMind', 'Projet MasterMind en Javascript + Bootstrap\n\nCe projet nécessitait de développer le célèbre jeu MasterMind en Javascript. J\'ai choisis également de réaliser l\'interface à l\'aide de Bootstrap afin de parfaire mes connaissances de ce framework.', '', '', '', NULL, NULL),
(2, 1, 'fr', 'Quizz', 'Projet Quizz en Javascrip + Bootstrap', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_skills`
--

CREATE TABLE `t_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Ignorant','Beginner','Medium','Confirmed','Expert') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_skills`
--

INSERT INTO `t_skills` (`id`, `user_id`, `language`, `short_label`, `detail`, `level`, `created_at`, `updated_at`) VALUES
(1, 1, 'fr', 'Sécurité', 'FINJAN - MAILSWEEPER - SOPHOS Anti-Virus - Proxy ALTEON ACC / iPLANET / LDAP / AVENTAIL / BLUECOATS - Gateway SSL - Firewall CHECKPOINT / JUNIPER / Pfsense', 'Confirmed', NULL, NULL),
(2, 1, 'fr', 'Sytèmes d\'Exploitation', 'Os2 - Ms-Dos / Windows - Sco Unix / Qnx / Linux / IPSO Nokia / MAC OS X - VIRTUAL BOX / PROXMOX', 'Confirmed', NULL, NULL),
(3, 1, 'fr', 'Réseaux', 'TCP/IP - Novell - Windows Workgroup / Lan Manger - Appletalk / Appleshare - Switch L4/7 Alteon AD3 & Cisco ACE - Appliances NOKIA - Sondes RIVERBED / Wireshark', 'Confirmed', NULL, NULL),
(4, 1, 'fr', 'Développement', 'COBOL - C++ - Visual Basic / Access Basic - Clipper 5.2 - WINDEV - PERL - PHP - HTML5 - JAVASCRIPT / JQUERY', 'Confirmed', NULL, NULL),
(5, 1, 'fr', 'SGBD et L4G', 'DBASE IV - ACCESS - ORACLE - SQL - 4ème DIMENSION - PHP / MySQL', 'Confirmed', NULL, NULL),
(6, 1, 'fr', 'Méthodes', 'LCP - MERISE - MVC', 'Confirmed', NULL, NULL),
(7, 1, 'en', 'Security', 'FINJAN - MAILSWEEPER - SOPHOS Anti-Virus - Proxy ALTEON ACC / iPLANET / LDAP / AVENTAIL / BLUECOATS - Gateway SSL - Firewall CHECKPOINT / JUNIPER / Pfsense', 'Confirmed', NULL, NULL),
(8, 1, 'en', 'Operating Systems', 'Os2 - Ms-Dos / Windows - Sco Unix / Qnx / Linux / IPSO Nokia / MAC OS X - VIRTUAL BOX / PROXMOX', 'Confirmed', NULL, NULL),
(9, 1, 'en', 'Networks', 'TCP/IP - Novell - Windows Workgroup / Lan Manger - Appletalk / Appleshare - Switch L4/7 Alteon AD3 & Cisco ACE - Appliances NOKIA - Sondes RIVERBED / Wireshark', 'Confirmed', NULL, NULL),
(10, 1, 'en', 'Programming', 'COBOL - C++ - Visual Basic / Access Basic - Clipper 5.2 - WINDEV - PERL - PHP - HTML5 - JAVASCRIPT / JQUERY', 'Confirmed', NULL, NULL),
(11, 1, 'en', 'SGBD and L4G', 'DBASE IV - ACCESS - ORACLE - SQL - 4ème DIMENSION - PHP / MySQL', 'Confirmed', NULL, NULL),
(12, 1, 'en', 'Methods', 'LCP - MERISE - MVC', 'Confirmed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `url`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daniel LEGER', 'd.leger@aformac-vichy.fr', '$2y$10$O63vIL0DaG/ElPomZeMzNeTUCvaNZuPo9kCd/Ussa1bS4qx.yTp0e', 'http://portfoliodl.org', '39ruWQrKa8k9jT5D2Nv6I7qK9b1VJE5TxewCXeO6Iq1NVX7VQzvfaVunk9mb', '2017-12-22 08:45:33', '2017-12-22 08:45:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `t_authors`
--
ALTER TABLE `t_authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t_authors_email_unique` (`email`);

--
-- Indexes for table `t_messages`
--
ALTER TABLE `t_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `t_personals`
--
ALTER TABLE `t_personals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_personals_user_id_foreign` (`user_id`);

--
-- Indexes for table `t_professionals`
--
ALTER TABLE `t_professionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_professionals_user_id_foreign` (`user_id`);

--
-- Indexes for table `t_projects`
--
ALTER TABLE `t_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `t_skills`
--
ALTER TABLE `t_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_authors`
--
ALTER TABLE `t_authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_messages`
--
ALTER TABLE `t_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `t_personals`
--
ALTER TABLE `t_personals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_professionals`
--
ALTER TABLE `t_professionals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `t_projects`
--
ALTER TABLE `t_projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_skills`
--
ALTER TABLE `t_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_messages`
--
ALTER TABLE `t_messages`
  ADD CONSTRAINT `t_messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_personals`
--
ALTER TABLE `t_personals`
  ADD CONSTRAINT `t_personals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_professionals`
--
ALTER TABLE `t_professionals`
  ADD CONSTRAINT `t_professionals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_projects`
--
ALTER TABLE `t_projects`
  ADD CONSTRAINT `t_projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_skills`
--
ALTER TABLE `t_skills`
  ADD CONSTRAINT `t_skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
