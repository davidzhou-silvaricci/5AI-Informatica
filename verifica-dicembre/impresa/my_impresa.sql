-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.21-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database my_impresa
CREATE DATABASE IF NOT EXISTS `my_impresa` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `my_impresa`;

-- Dump della struttura di tabella my_impresa.interventi
CREATE TABLE IF NOT EXISTS `interventi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tecnico` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `durata` int(11) NOT NULL DEFAULT 0,
  `parcella` int(11) NOT NULL DEFAULT 0,
  `scontato` int(11) NOT NULL,
  `nota` varchar(50) COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_impresa.interventi: ~0 rows (circa)
/*!40000 ALTER TABLE `interventi` DISABLE KEYS */;
/*!40000 ALTER TABLE `interventi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
