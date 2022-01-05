-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2022 at 03:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_ditta_baselli`
--
CREATE DATABASE IF NOT EXISTS `my_ditta_baselli` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `my_ditta_baselli`;

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE `Cliente` (
  `codice_cliente` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `codice_fiscale` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Dipendente`
--

CREATE TABLE `Dipendente` (
  `codice_dipendente` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `codice_fiscale` char(16) NOT NULL,
  `mansione` varchar(20) NOT NULL,
  `costo_orario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Intervento`
--

CREATE TABLE `Intervento` (
  `codice_intervento` int(11) NOT NULL,
  `descrizione` varchar(100) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Materiale`
--

CREATE TABLE `Materiale` (
  `codice_materiale` int(11) NOT NULL,
  `fornitore` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `costo` int(11) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `deposito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partecipazione`
--

CREATE TABLE `partecipazione` (
  `intervento` int(11) NOT NULL,
  `dipendente` int(11) NOT NULL,
  `ore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Rapportino`
--

CREATE TABLE `Rapportino` (
  `codice_rapportino` int(11) NOT NULL,
  `intervento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilizzo`
--

CREATE TABLE `utilizzo` (
  `intervento` int(11) NOT NULL,
  `materiale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`codice_cliente`);

--
-- Indexes for table `Dipendente`
--
ALTER TABLE `Dipendente`
  ADD PRIMARY KEY (`codice_dipendente`);

--
-- Indexes for table `Intervento`
--
ALTER TABLE `Intervento`
  ADD PRIMARY KEY (`codice_intervento`);

--
-- Indexes for table `Materiale`
--
ALTER TABLE `Materiale`
  ADD PRIMARY KEY (`codice_materiale`);

--
-- Indexes for table `partecipazione`
--
ALTER TABLE `partecipazione`
  ADD PRIMARY KEY (`intervento`,`dipendente`),
  ADD KEY `dipendente` (`dipendente`);

--
-- Indexes for table `Rapportino`
--
ALTER TABLE `Rapportino`
  ADD PRIMARY KEY (`codice_rapportino`),
  ADD KEY `intervento` (`intervento`);

--
-- Indexes for table `utilizzo`
--
ALTER TABLE `utilizzo`
  ADD PRIMARY KEY (`intervento`,`materiale`),
  ADD KEY `materiale` (`materiale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `codice_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Dipendente`
--
ALTER TABLE `Dipendente`
  MODIFY `codice_dipendente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Intervento`
--
ALTER TABLE `Intervento`
  MODIFY `codice_intervento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Materiale`
--
ALTER TABLE `Materiale`
  MODIFY `codice_materiale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Rapportino`
--
ALTER TABLE `Rapportino`
  MODIFY `codice_rapportino` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partecipazione`
--
ALTER TABLE `partecipazione`
  ADD CONSTRAINT `partecipazione_ibfk_1` FOREIGN KEY (`intervento`) REFERENCES `Intervento` (`codice_intervento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partecipazione_ibfk_2` FOREIGN KEY (`dipendente`) REFERENCES `Dipendente` (`codice_dipendente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Rapportino`
--
ALTER TABLE `Rapportino`
  ADD CONSTRAINT `Rapportino_ibfk_1` FOREIGN KEY (`intervento`) REFERENCES `Intervento` (`codice_intervento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilizzo`
--
ALTER TABLE `utilizzo`
  ADD CONSTRAINT `utilizzo_ibfk_1` FOREIGN KEY (`intervento`) REFERENCES `Intervento` (`codice_intervento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizzo_ibfk_2` FOREIGN KEY (`materiale`) REFERENCES `Materiale` (`codice_materiale`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
