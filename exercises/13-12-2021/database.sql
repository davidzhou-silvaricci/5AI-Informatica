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


-- Dump della struttura del database my_biblioteca
CREATE DATABASE IF NOT EXISTS `my_biblioteca` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `my_biblioteca`;

-- Dump della struttura di tabella my_biblioteca.autori
CREATE TABLE IF NOT EXISTS `autori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `cognome` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `dataNascita` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_biblioteca.autori: ~0 rows (circa)
/*!40000 ALTER TABLE `autori` DISABLE KEYS */;
/*!40000 ALTER TABLE `autori` ENABLE KEYS */;

-- Dump della struttura di tabella my_biblioteca.generi
CREATE TABLE IF NOT EXISTS `generi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '0',
  `descrizione` varchar(200) COLLATE armscii8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_biblioteca.generi: ~0 rows (circa)
/*!40000 ALTER TABLE `generi` DISABLE KEYS */;
/*!40000 ALTER TABLE `generi` ENABLE KEYS */;

-- Dump della struttura di tabella my_biblioteca.libri
CREATE TABLE IF NOT EXISTS `libri` (
  `isbn` char(13) COLLATE armscii8_bin NOT NULL,
  `titolo` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `descrizione` varchar(200) COLLATE armscii8_bin DEFAULT NULL,
  `pagine` int(11) DEFAULT NULL,
  `costo` decimal(5,2) DEFAULT NULL,
  `dataUscita` date DEFAULT NULL,
  `autore` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `genere` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_biblioteca.libri: ~0 rows (circa)
/*!40000 ALTER TABLE `libri` DISABLE KEYS */;
/*!40000 ALTER TABLE `libri` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
