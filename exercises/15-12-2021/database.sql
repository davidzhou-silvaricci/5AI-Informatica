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


-- Dump della struttura del database my_basket
CREATE DATABASE IF NOT EXISTS `my_basket` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `my_basket`;

-- Dump della struttura di tabella my_basket.campionato
CREATE TABLE IF NOT EXISTS `campionato` (
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `anno` year(4) DEFAULT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_basket.campionato: ~0 rows (circa)
/*!40000 ALTER TABLE `campionato` DISABLE KEYS */;
/*!40000 ALTER TABLE `campionato` ENABLE KEYS */;

-- Dump della struttura di tabella my_basket.giocato
CREATE TABLE IF NOT EXISTS `giocato` (
  `id_giocatore` int(11) DEFAULT NULL,
  `nome_squadra` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `nome_campionato` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `anno_campionato` year(4) DEFAULT NULL,
  `canestri` int(11) DEFAULT NULL,
  `presenze` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_basket.giocato: ~0 rows (circa)
/*!40000 ALTER TABLE `giocato` DISABLE KEYS */;
/*!40000 ALTER TABLE `giocato` ENABLE KEYS */;

-- Dump della struttura di tabella my_basket.giocatore
CREATE TABLE IF NOT EXISTS `giocatore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cognome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '0',
  `data_nascita` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_basket.giocatore: ~0 rows (circa)
/*!40000 ALTER TABLE `giocatore` DISABLE KEYS */;
/*!40000 ALTER TABLE `giocatore` ENABLE KEYS */;

-- Dump della struttura di tabella my_basket.ricopre
CREATE TABLE IF NOT EXISTS `ricopre` (
  `id_giocatore` int(11) DEFAULT NULL,
  `ruolo` int(11) DEFAULT NULL,
  `data_inizio` date DEFAULT NULL,
  `data_fine` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_basket.ricopre: ~0 rows (circa)
/*!40000 ALTER TABLE `ricopre` DISABLE KEYS */;
/*!40000 ALTER TABLE `ricopre` ENABLE KEYS */;

-- Dump della struttura di tabella my_basket.ruolo
CREATE TABLE IF NOT EXISTS `ruolo` (
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `altro` varchar(200) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_basket.ruolo: ~0 rows (circa)
/*!40000 ALTER TABLE `ruolo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruolo` ENABLE KEYS */;

-- Dump della struttura di tabella my_basket.squadra
CREATE TABLE IF NOT EXISTS `squadra` (
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `nome_campionato` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `anno_campionato` year(4) DEFAULT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_basket.squadra: ~0 rows (circa)
/*!40000 ALTER TABLE `squadra` DISABLE KEYS */;
/*!40000 ALTER TABLE `squadra` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
