-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gaulois
CREATE DATABASE IF NOT EXISTS `gaulois` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `gaulois`;

-- Dumping structure for table gaulois.bataille
CREATE TABLE IF NOT EXISTS `bataille` (
  `id` int(11) NOT NULL,
  `lieu_id` int(11) NOT NULL,
  `nomBataille` varchar(32) DEFAULT NULL,
  `dateBataille` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_SE_DEROULE` (`lieu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.bataille: 10 rows
/*!40000 ALTER TABLE `bataille` DISABLE KEYS */;
INSERT INTO `bataille` (`id`, `lieu_id`, `nomBataille`, `dateBataille`) VALUES
	(0, 4, 'Bataille gauloise', '0050-07-09'),
	(1, 2, 'Babaorum', '0050-09-15'),
	(2, 1, 'Laudanum', '0050-12-05'),
	(3, 6, 'Booldechwingum', '0050-12-02'),
	(4, 4, 'Cohorte III', '0050-09-01'),
	(5, 0, 'Cohorte VI', '0050-06-03'),
	(6, 7, 'Legion XII', '0050-10-08'),
	(7, 1, 'Mercenaires', '0050-05-31'),
	(8, 5, 'Vikings', '0050-07-29'),
	(9, 5, 'Gladiateurs', '0050-01-01');
/*!40000 ALTER TABLE `bataille` ENABLE KEYS */;

-- Dumping structure for table gaulois.boit
CREATE TABLE IF NOT EXISTS `boit` (
  `potion_id` int(11) NOT NULL,
  `villageois_id` int(11) NOT NULL,
  `dateBu` date NOT NULL,
  `dose` int(11) DEFAULT NULL,
  PRIMARY KEY (`potion_id`,`villageois_id`,`dateBu`),
  KEY `FK_BOIT2` (`villageois_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.boit: 26 rows
/*!40000 ALTER TABLE `boit` DISABLE KEYS */;
INSERT INTO `boit` (`potion_id`, `villageois_id`, `dateBu`, `dose`) VALUES
	(0, 16, '0050-06-27', 35),
	(1, 13, '0050-12-31', 9),
	(2, 24, '0050-08-19', 49),
	(3, 15, '0050-07-04', 6),
	(4, 2, '0050-04-12', 36),
	(5, 10, '0050-10-29', 20),
	(6, 19, '0050-05-19', 48),
	(7, 4, '0050-12-13', 47),
	(8, 17, '0050-05-29', 40),
	(9, 8, '0050-09-02', 8),
	(10, 32, '0050-07-20', 33),
	(11, 33, '0050-01-01', 25),
	(12, 34, '0050-01-10', 43),
	(13, 26, '0050-04-27', 28),
	(14, 14, '0050-01-02', 37),
	(15, 31, '0050-02-01', 10),
	(16, 11, '0050-10-15', 21),
	(17, 3, '0050-06-04', 1),
	(18, 21, '0050-12-03', 29),
	(19, 6, '0050-04-10', 30),
	(8, 3, '0050-02-01', 50),
	(7, 2, '0050-01-01', 20),
	(7, 2, '0050-02-01', 21),
	(7, 3, '0050-01-10', 25),
	(7, 5, '0050-07-01', 40),
	(7, 8, '0050-07-23', 30);
/*!40000 ALTER TABLE `boit` ENABLE KEYS */;

-- Dumping structure for table gaulois.casque
CREATE TABLE IF NOT EXISTS `casque` (
  `id` int(11) NOT NULL,
  `typeCasque_id` int(11) NOT NULL,
  `nomCasque` varchar(32) DEFAULT NULL,
  `coutCasque` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_APPARTIENT` (`typeCasque_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.casque: 10 rows
/*!40000 ALTER TABLE `casque` DISABLE KEYS */;
INSERT INTO `casque` (`id`, `typeCasque_id`, `nomCasque`, `coutCasque`) VALUES
	(0, 0, 'Maximum', 865),
	(1, 0, 'Centurion', 498),
	(2, 2, 'Spartacus', 2110),
	(3, 2, 'Corinthien ', 765),
	(4, 0, 'Imperial Gallic', 895),
	(5, 1, 'Troyen', 795),
	(6, 2, 'Elendil', 3128),
	(7, 1, 'Spartiate', 1187),
	(8, 0, 'Centurion officier', 1098),
	(9, 0, 'Romain', 660);
/*!40000 ALTER TABLE `casque` ENABLE KEYS */;

-- Dumping structure for table gaulois.compose
CREATE TABLE IF NOT EXISTS `compose` (
  `potion_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `qte` int(11) DEFAULT NULL,
  PRIMARY KEY (`potion_id`,`ingredient_id`),
  KEY `FK_COMPOSE2` (`ingredient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.compose: 69 rows
/*!40000 ALTER TABLE `compose` DISABLE KEYS */;
INSERT INTO `compose` (`potion_id`, `ingredient_id`, `qte`) VALUES
	(0, 0, 23),
	(0, 1, 40),
	(0, 2, 68),
	(0, 3, 18),
	(0, 5, 63),
	(0, 7, 13),
	(0, 8, 50),
	(0, 11, 64),
	(0, 12, 7),
	(0, 14, 38),
	(0, 16, 2),
	(0, 18, 17),
	(0, 21, 11),
	(0, 23, 21),
	(0, 27, 51),
	(0, 28, 77),
	(1, 8, 98),
	(1, 12, 7),
	(1, 23, 1),
	(2, 14, 49),
	(2, 19, 4),
	(2, 27, 51),
	(3, 0, 95),
	(3, 5, 3),
	(3, 28, 77),
	(4, 20, 34),
	(4, 24, 86),
	(4, 26, 5),
	(5, 7, 2),
	(5, 9, 25),
	(6, 7, 13),
	(6, 8, 2),
	(6, 27, 57),
	(7, 2, 68),
	(7, 25, 48),
	(7, 28, 5),
	(8, 1, 33),
	(8, 3, 18),
	(8, 10, 3),
	(9, 4, 52),
	(9, 22, 2),
	(10, 10, 68),
	(10, 24, 1),
	(11, 1, 3),
	(11, 18, 77),
	(12, 0, 23),
	(12, 3, 65),
	(12, 25, 5),
	(13, 6, 23),
	(13, 14, 38),
	(13, 29, 2),
	(14, 6, 2),
	(14, 7, 17),
	(14, 23, 21),
	(15, 11, 97),
	(15, 14, 1),
	(15, 21, 11),
	(16, 1, 40),
	(16, 11, 3),
	(16, 29, 10),
	(17, 8, 50),
	(17, 12, 1),
	(17, 17, 70),
	(18, 5, 92),
	(18, 19, 15),
	(18, 27, 4),
	(19, 11, 64),
	(19, 13, 43),
	(19, 21, 4);
/*!40000 ALTER TABLE `compose` ENABLE KEYS */;

-- Dumping structure for table gaulois.ingredient
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL,
  `nomIngredient` varchar(32) DEFAULT NULL,
  `coutIngredient` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.ingredient: 30 rows
/*!40000 ALTER TABLE `ingredient` DISABLE KEYS */;
INSERT INTO `ingredient` (`id`, `nomIngredient`, `coutIngredient`) VALUES
	(0, 'petits pois', 0.5),
	(1, 'Haricots verts', 1),
	(2, 'Queue de crevette', 7),
	(3, 'Brin d\'herbe', 0.5),
	(4, 'Ecrevisse', 10),
	(5, 'Feuille épinard', 9),
	(6, 'Oeuf de caviar', 6),
	(7, 'Oeil de boeuf', 4),
	(8, 'Huitre', 9),
	(9, 'Ver de terre', 1),
	(10, 'Cl d\'eau distilléeI', 2),
	(11, 'Noix St Jacques', 12),
	(12, 'Grenouille', 7),
	(13, 'Carotte', 5),
	(14, 'Courgette', 3),
	(15, 'Prune', 3),
	(16, 'Cl d\'eau férigineuse', 6),
	(17, 'Joue de truite', 12),
	(18, 'Cl D\'alcool', 3),
	(19, 'Feuille de vigne', 4),
	(20, 'Pomme', 11),
	(21, 'Salamandre', 10),
	(22, 'Homard', 12),
	(23, 'Queue de cochon', 6),
	(24, 'Myrtille', 5),
	(25, 'Escargot', 6),
	(26, 'Feuille de salade', 8),
	(27, 'Cerise', 2),
	(28, 'Citron vert', 4),
	(29, 'Navet', 1);
/*!40000 ALTER TABLE `ingredient` ENABLE KEYS */;

-- Dumping structure for table gaulois.lieu
CREATE TABLE IF NOT EXISTS `lieu` (
  `id` int(11) NOT NULL,
  `nomLieu` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.lieu: 8 rows
/*!40000 ALTER TABLE `lieu` DISABLE KEYS */;
INSERT INTO `lieu` (`id`, `nomLieu`) VALUES
	(0, 'Village gaulois'),
	(1, 'Babaorum'),
	(2, 'Laudanum'),
	(3, 'Oposum'),
	(4, 'Champs de Nioutechnologix'),
	(5, '3e chene a droite de la carriere'),
	(6, 'En mer'),
	(7, 'Grottes');
/*!40000 ALTER TABLE `lieu` ENABLE KEYS */;

-- Dumping structure for table gaulois.peut
CREATE TABLE IF NOT EXISTS `peut` (
  `potion_id` int(11) NOT NULL,
  `villageois_id` int(11) NOT NULL,
  `aLeDroit` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`potion_id`,`villageois_id`),
  KEY `FK_PEUT2` (`villageois_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.peut: 2 rows
/*!40000 ALTER TABLE `peut` DISABLE KEYS */;
INSERT INTO `peut` (`potion_id`, `villageois_id`, `aLeDroit`) VALUES
	(1, 1, 0),
	(2, 1, 1);
/*!40000 ALTER TABLE `peut` ENABLE KEYS */;

-- Dumping structure for table gaulois.potion
CREATE TABLE IF NOT EXISTS `potion` (
  `id` int(11) NOT NULL,
  `nomPotion` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.potion: 20 rows
/*!40000 ALTER TABLE `potion` DISABLE KEYS */;
INSERT INTO `potion` (`id`, `nomPotion`) VALUES
	(0, 'Magique'),
	(1, 'Rajeunissement II'),
	(2, 'Santé'),
	(3, 'Rajeunissement'),
	(4, 'Soupe'),
	(5, 'Vitesse'),
	(6, 'Invisibilité'),
	(7, 'Assouplissement'),
	(8, 'Force'),
	(9, 'Intelligence'),
	(10, 'Assouplissement II'),
	(11, 'Potion I'),
	(12, 'Potion II'),
	(13, 'Potion III'),
	(14, 'Potion IV'),
	(15, 'Potion V'),
	(16, 'Potion VI'),
	(17, 'Potion VII'),
	(18, 'Potion VIII'),
	(19, 'Potion IX');
/*!40000 ALTER TABLE `potion` ENABLE KEYS */;

-- Dumping structure for table gaulois.prise_casque
CREATE TABLE IF NOT EXISTS `prise_casque` (
  `casque_id` int(11) NOT NULL,
  `villageois_id` int(11) NOT NULL,
  `bataille_id` int(11) NOT NULL,
  `qte` int(11) DEFAULT NULL,
  PRIMARY KEY (`casque_id`,`villageois_id`,`bataille_id`),
  KEY `FK_PRISE_CASQUE2` (`villageois_id`),
  KEY `FK_PRISE_CASQUE3` (`bataille_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.prise_casque: 45 rows
/*!40000 ALTER TABLE `prise_casque` DISABLE KEYS */;
INSERT INTO `prise_casque` (`casque_id`, `villageois_id`, `bataille_id`, `qte`) VALUES
	(0, 5, 5, 8),
	(0, 14, 5, 15),
	(0, 19, 2, 5),
	(0, 38, 1, 8),
	(1, 4, 6, 12),
	(1, 11, 0, 16),
	(1, 18, 9, 5),
	(1, 31, 1, 5),
	(2, 2, 1, 4),
	(2, 2, 7, 3),
	(2, 13, 5, 7),
	(2, 30, 8, 3),
	(3, 0, 7, 5),
	(3, 11, 1, 7),
	(3, 16, 7, 8),
	(3, 32, 3, 3),
	(4, 6, 9, 8),
	(4, 22, 0, 4),
	(4, 25, 5, 8),
	(4, 37, 4, 4),
	(5, 9, 3, 3),
	(5, 10, 8, 10),
	(5, 24, 0, 5),
	(5, 34, 8, 7),
	(6, 8, 4, 3),
	(6, 21, 2, 9),
	(6, 22, 6, 12),
	(6, 35, 6, 1),
	(7, 9, 3, 6),
	(7, 10, 2, 7),
	(7, 13, 6, 11),
	(7, 33, 4, 9),
	(8, 7, 9, 12),
	(8, 10, 4, 8),
	(8, 19, 8, 7),
	(8, 27, 9, 11),
	(9, 20, 0, 6),
	(9, 23, 3, 10),
	(9, 24, 7, 11),
	(9, 38, 2, 7),
	(1, 2, 1, 3),
	(1, 40, 1, 4),
	(1, 1, 1, 30),
	(3, 6, 4, 0),
	(8, 2, 1, 1);
/*!40000 ALTER TABLE `prise_casque` ENABLE KEYS */;

-- Dumping structure for table gaulois.specialite
CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int(11) NOT NULL,
  `nomSpecialite` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.specialite: 8 rows
/*!40000 ALTER TABLE `specialite` DISABLE KEYS */;
INSERT INTO `specialite` (`id`, `nomSpecialite`) VALUES
	(0, 'Guerrier'),
	(1, 'Porteur de Mehnir'),
	(2, 'Barde'),
	(3, 'Druide'),
	(4, 'Espion'),
	(5, 'Villageois'),
	(6, 'Artisan'),
	(7, 'Marchand');
/*!40000 ALTER TABLE `specialite` ENABLE KEYS */;

-- Dumping structure for table gaulois.type_casque
CREATE TABLE IF NOT EXISTS `type_casque` (
  `id` int(11) NOT NULL,
  `nomTypeCasque` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.type_casque: 3 rows
/*!40000 ALTER TABLE `type_casque` DISABLE KEYS */;
INSERT INTO `type_casque` (`id`, `nomTypeCasque`) VALUES
	(0, 'Romain'),
	(1, 'Grec'),
	(2, 'Autre');
/*!40000 ALTER TABLE `type_casque` ENABLE KEYS */;

-- Dumping structure for table gaulois.villageois
CREATE TABLE IF NOT EXISTS `villageois` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu_id` int(11) NOT NULL,
  `specialite_id` int(11) NOT NULL,
  `nom` varchar(32) DEFAULT NULL,
  `adresse` varchar(32) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_HABITE` (`lieu_id`),
  KEY `FK_SPECIALISE` (`specialite_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Dumping data for table gaulois.villageois: 46 rows
/*!40000 ALTER TABLE `villageois` DISABLE KEYS */;
INSERT INTO `villageois` (`id`, `lieu_id`, `specialite_id`, `nom`, `adresse`, `image`) VALUES
	(1, 0, 1, 'Obelix', '', 'Obelix.jpg'),
	(2, 0, 0, 'Abraracourcix', '', 'Abraracourcix.jpg'),
	(4, 0, 5, 'Agecanonix', '', 'Agecanonix.gif'),
	(9, 0, 3, 'Panoramix', '', 'Panoramix.jpg'),
	(12, 0, 2, 'Assurancetourix', '', 'Assurancetourix.jpg'),
	(21, 0, 6, 'Cetautomatix', '', 'Cetautomatix.jpg'),
	(40, 0, 0, 'Asterix', 'cote carrieres', 'Asterix.jpg'),
	(3, 6, 4, 'Acidenitrix', '', 'Acidenitrix.jpg'),
	(5, 4, 7, 'Alambix', '', 'Alambix.jpg'),
	(6, 1, 0, 'Allegorix', '', 'indisponible.jpg'),
	(7, 1, 6, 'Amerix', '', 'Amerix.jpg'),
	(8, 1, 3, 'Amnesix', '', 'Amnesix.jpg'),
	(10, 6, 0, 'Analgesix', '', 'Analgesix.jpg'),
	(11, 5, 7, 'Antibiotix', '', 'Antibiotix.jpg'),
	(13, 1, 0, 'Aplusbegalix', '', 'Aplusbegalix.jpg'),
	(14, 5, 5, 'Appatix', '', 'indisponible.jpg'),
	(15, 5, 7, 'Arrierboutix', '', 'indisponible.jpg'),
	(16, 6, 5, 'Asthmatix', '', 'indisponible.jpg'),
	(17, 2, 0, 'Astronomix', '', 'Astronomix.jpg'),
	(18, 2, 0, 'Aventurepix', '', 'indisponible.jpg'),
	(19, 4, 6, 'Carferrix', '', 'Carferrix.jpg'),
	(20, 1, 5, 'Catedralgotix', '', 'Catedralgotix.jpg'),
	(22, 6, 5, 'Choucroutgarnix', '', 'indisponible.jpg'),
	(23, 4, 0, 'Tournedix', '', 'Tournedix.jpg'),
	(24, 2, 3, 'Diagnostix', '', 'Diagnostix.jpg'),
	(25, 1, 5, 'Dithyrambix', '', 'indisponible.jpg'),
	(26, 6, 0, 'Herettix', '', 'indisponible.jpg'),
	(27, 4, 0, 'Industrichimix', '', 'indisponible.jpg'),
	(28, 7, 6, 'Mineralogix', '', 'indisponible.jpg'),
	(29, 6, 4, 'Zerozerosix', '', 'Zerozerosix.jpg'),
	(30, 2, 7, 'Ordralfabetix', '', 'Ordralfabetix.jpg'),
	(31, 1, 7, 'Orthopedix', '', 'Orthopedix.jpg'),
	(32, 1, 6, 'Petisuix', '', 'Petisuix.jpg'),
	(33, 5, 0, 'Plantaquatix', '', 'Plantaquatix.jpg'),
	(34, 1, 0, 'Pneumatix', '', 'Pneumatix.jpg'),
	(35, 7, 0, 'Porquepix', '', 'indisponible.jpg'),
	(36, 6, 7, 'Pronostix', '', 'indisponible.jpg'),
	(37, 3, 0, 'Quatredeuxsix', '', 'Quatredeuxsix.jpg'),
	(38, 6, 5, 'Salamix', '', 'Salamix.jpg'),
	(39, 4, 7, 'Selfservix', '', 'indisponible.jpg'),
	(53, 0, 6, 'Lentix', 'Lutece', 'lentix.gif'),
	(50, 0, 5, 'Goudurix', 'Bord de la plage', 'Goudurix.jpg'),
	(52, 0, 7, 'Plaintcontrix', 'Lutece', 'Plaintcontrix.jpg'),
	(51, 0, 3, 'Barometrix', 'Foret', 'Barometrix.jpg'),
	(54, 0, 7, 'Taxesurleprix', 'Lutece', 'taxesurleprix.jpg'),
	(55, 0, 0, 'Tragicomix', 'Lutece', 'Tragicomix.gif');
/*!40000 ALTER TABLE `villageois` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
