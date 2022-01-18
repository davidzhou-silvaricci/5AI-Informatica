-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 17, 2022 alle 13:08
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_cinema`
--
CREATE DATABASE IF NOT EXISTS `my_cinema` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `my_cinema`;

-- --------------------------------------------------------

--
-- Struttura della tabella `attori`
--

CREATE TABLE IF NOT EXISTS `attori` (
  `cod_attore` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `anno_nascita` year(4) NOT NULL,
  `nazionalita` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_attore`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `cod_film` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(50) NOT NULL,
  `anno_produzione` year(4) NOT NULL,
  `nazionalita` varchar(20) NOT NULL,
  `regista` varchar(50) NOT NULL,
  `genere` varchar(20) NOT NULL,
  `durata` int(11) NOT NULL,
  PRIMARY KEY (`cod_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `proiezioni`
--

CREATE TABLE IF NOT EXISTS `proiezioni` (
  `cod_proiezione` int(11) NOT NULL AUTO_INCREMENT,
  `cod_film` int(11) NOT NULL,
  `cod_sala` int(11) NOT NULL,
  `incasso` decimal(6,2) NOT NULL,
  `data_proiezione` date NOT NULL,
  PRIMARY KEY (`cod_proiezione`),
  KEY `cod_film` (`cod_film`),
  KEY `cod_sala` (`cod_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `recita`
--

CREATE TABLE IF NOT EXISTS `recita` (
  `cod_attore` int(11) NOT NULL,
  `cod_film` int(11) NOT NULL,
  KEY `cod_attore` (`cod_attore`),
  KEY `cod_film` (`cod_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `cod_sala` int(11) NOT NULL AUTO_INCREMENT,
  `posti` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `citta` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `proiezioni`
--
ALTER TABLE `proiezioni`
  ADD CONSTRAINT `proiezioni_ibfk_1` FOREIGN KEY (`cod_film`) REFERENCES `film` (`cod_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proiezioni_ibfk_2` FOREIGN KEY (`cod_sala`) REFERENCES `sale` (`cod_sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `recita`
--
ALTER TABLE `recita`
  ADD CONSTRAINT `recita_ibfk_1` FOREIGN KEY (`cod_attore`) REFERENCES `attori` (`cod_attore`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recita_ibfk_2` FOREIGN KEY (`cod_film`) REFERENCES `film` (`cod_film`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
