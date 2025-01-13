-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour festival
DROP DATABASE IF EXISTS `festival`;
CREATE DATABASE IF NOT EXISTS `festival` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `festival`;

-- Listage de la structure de table festival. departements
DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `id_dep` int unsigned NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_actif` int unsigned NOT NULL,
  `dep_taux` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage de la structure de table festival. candidats
DROP TABLE IF EXISTS `candidats`;
CREATE TABLE IF NOT EXISTS `candidats` (
  `id_user` int unsigned NOT NULL AUTO_INCREMENT,
  `lastname_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_user` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement_user` int unsigned NOT NULL,
  `age_user` tinyint unsigned NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `departement_user` (`departement_user`),
  CONSTRAINT `candidats_ibfk_1` FOREIGN KEY (`departement_user`) REFERENCES `departements` (`id_dep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Listage des données de la table festival.departements : ~95 rows (environ)
INSERT INTO `departements` (`id_dep`, `Name`, `dep_actif`, `dep_taux`) VALUES
	(1, '01 - Ain', 1, 1.00),
	(2, '02 - Aisne', 1, 1.00),
	(3, '03 - Allier', 1, 1.00),
	(4, '04 - Alpes-de-Haute-Provence', 1, 1.00),
	(5, '05 - Hautes-Alpes', 1, 1.00),
	(6, '06 - Alpes-Maritimes', 1, 1.00),
	(7, '07 - Ardèche', 1, 1.00),
	(8, '08 - Ardennes', 1, 1.00),
	(9, '09 Ariège', 1, 1.00),
	(10, '10 - Aube', 1, 1.00),
	(11, '11 - Aude', 1, 1.00),
	(12, '12 - Aveyron', 1, 1.00),
	(13, '13 - Bouches-du-Rhône', 1, 1.00),
	(14, '14 - Calvados', 1, 1.00),
	(15, '15 - Cantal', 1, 1.00),
	(16, '16 - Charente', 1, 1.00),
	(17, '17 - Charente-Maritime', 1, 1.00),
	(18, '18 - Cher', 1, 1.00),
	(19, '19 - Corrèze', 1, 1.00),
	(20, '2A 2B - Départements Corse', 1, 1.00),
	(21, '21 - Côte-d Or', 1, 1.00),
	(22, '22 - Côtes-d Armor', 1, 1.00),
	(23, '23 - Creuse', 1, 1.00),
	(24, '24 - Dordogne', 1, 1.00),
	(25, '25 - Doubs', 1, 1.00),
	(26, '26 - Drôme', 1, 1.00),
	(27, '27 - Eure', 1, 1.00),
	(28, '28 - Eure-et-Loir', 1, 1.00),
	(29, '29 - Finistère', 1, 1.00),
	(30, '30 - Gard', 1, 1.00),
	(31, '31 - Haute-Garonne', 1, 1.00),
	(32, '32 - Gers', 1, 1.00),
	(33, '33 - Gironde', 1, 1.00),
	(34, '34 - Hérault', 1, 1.00),
	(35, '35 - Ille-et-Vilaine', 1, 1.00),
	(36, '36 - Indre', 1, 1.00),
	(37, '37 - Indre-et-Loire', 1, 1.00),
	(38, '38 - Isère', 1, 1.00),
	(39, '39 - Jura', 1, 1.00),
	(40, '40 - Landes', 1, 1.00),
	(41, '41 - Loir-et-Cher', 1, 1.00),
	(42, '42 - Loire', 1, 1.00),
	(43, '43 - Haute-Loire', 1, 1.00),
	(44, '44 - Loire-Atlantique', 1, 1.00),
	(45, '45 - Loiret', 1, 1.00),
	(46, '46 - Lot', 1, 1.00),
	(47, '47 - Lot-et-Garonne', 1, 1.00),
	(48, '48 - Lozère', 1, 1.00),
	(49, '49 - Maine-et-Loire', 1, 1.00),
	(50, '50 - Manche', 1, 1.00),
	(51, '51 - Marne', 1, 1.00),
	(52, '52 - Haute-Marne', 1, 1.00),
	(53, '53 - Mayenne', 1, 1.00),
	(54, '54 - Meurthe-et-Moselle', 1, 1.00),
	(55, '55 - Meuse', 1, 1.00),
	(56, '56 - Morbihan', 1, 1.00),
	(57, '57 - Moselle', 1, 1.00),
	(58, '58 - Nièvre', 1, 1.00),
	(59, '59 - Nord', 1, 1.00),
	(60, '60 - Oise', 1, 1.00),
	(61, '61 - Orne', 1, 1.00),
	(62, '62 - Pas-de-Calais', 1, 1.00),
	(63, '63 - Puy-de-Dôme', 1, 1.00),
	(64, '64 - Pyrénées-Atlantiques', 1, 1.00),
	(65, '65 - Hautes-Pyrénées', 1, 1.00),
	(66, '66 - Pyrénées-Orientales', 1, 1.00),
	(67, '67 - Bas-Rhin', 1, 1.00),
	(68, '68 - Haut-Rhin', 1, 1.00),
	(69, '69 - Rhône', 1, 1.00),
	(70, '70 - Haute-Saône', 1, 1.00),
	(71, '71 - Saône-et-Loire', 1, 1.00),
	(72, '72 - Sarthe', 1, 1.00),
	(73, '73 - Savoie', 1, 1.00),
	(74, '74 - Haute-Savoie', 1, 1.00),
	(75, '75 - Paris', 1, 1.00),
	(76, '76 - Seine-Maritime', 1, 1.00),
	(77, '77 - Seine-et-Marne', 1, 1.00),
	(78, '78 - Yvelines', 1, 1.00),
	(79, '79 - Deux-Sèvres', 1, 1.00),
	(80, '80 - Somme', 1, 1.00),
	(81, '81 - Tarn', 1, 1.00),
	(82, '82 - Tarn-et-Garonne', 1, 1.00),
	(83, '83 - Var', 1, 1.00),
	(84, '84 - Vaucluse', 1, 1.00),
	(85, '85 - Vendée', 1, 1.00),
	(86, '86 - Vienne', 1, 1.00),
	(87, '87 - Haute-Vienne', 1, 1.00),
	(88, '88 - Vosges', 1, 1.00),
	(89, '89 - Yonne', 1, 1.00),
	(90, '90 - Territoire de Belfort', 1, 1.00),
	(91, '91 - Essonne', 1, 1.00),
	(92, '92 - Hauts-de-Seine', 1, 1.00),
	(93, '93 - Seine-Saint-Denis', 1, 1.00),
	(94, '94 - Val-de-Marne', 1, 1.00),
	(95, '95 - Val-dOise', 1, 1.00);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
