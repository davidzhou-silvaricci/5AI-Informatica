-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 12, 2022 alle 11:20
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
-- Database: `my_supermercato`
--
CREATE DATABASE IF NOT EXISTS `my_supermercato` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `my_supermercato`;

-- --------------------------------------------------------

--
-- Struttura della tabella `merce`
--

CREATE TABLE IF NOT EXISTS `merce` (
  `idM` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `prezzo` decimal(6,2) NOT NULL,
  `quantita` int(11) NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `merce`
--

INSERT INTO `merce` (`idM`, `marca`, `nome`, `prezzo`, `quantita`) VALUES
(1, 'Sawayn LLC', 'Pouébo', '550.33', 551),
(2, 'Kuhn, Nader and Jacobson', 'Orocuina', '162.19', 409),
(3, 'Hayes LLC', 'Fāqūs', '391.12', 436),
(4, 'Wehner-Schuppe', 'Dadamtu', '498.98', 169),
(5, 'Braun-Torphy', 'Guéret', '545.49', 793),
(6, 'Pacocha, Stanton and Reinger', 'Cherëmukhovo', '388.88', 457),
(7, 'Wolf-Reynolds', 'Monkey Hill', '622.99', 343),
(8, 'King-McDermott', 'Altos', '467.64', 955),
(9, 'Lesch Inc', 'Orlando', '296.65', 980),
(10, 'Leuschke LLC', 'Strelitsa', '100.61', 60),
(11, 'Koss, Blick and Bosco', 'Linxihe', '699.85', 853),
(12, 'Rempel Inc', 'Rochester', '166.81', 481),
(13, 'Maggio, Rowe and Daniel', 'Aco', '49.07', 916),
(14, 'Mayer-Predovic', 'Jenamas', '388.90', 269),
(15, 'Auer-Bernhard', 'Sincelejo', '883.32', 530),
(16, 'Conn, Medhurst and Shanahan', 'Anjia', '105.08', 139),
(17, 'Jerde-Rutherford', 'Sarvaš', '188.01', 953),
(18, 'Doyle, Little and Considine', 'Pomahan', '965.85', 399),
(19, 'Rath, Ernser and Hansen', 'Tuchomie', '303.44', 560),
(20, 'Bogisich, Braun and Treutel', 'Świecie', '986.15', 628),
(21, 'Daugherty-Skiles', 'Pule', '222.38', 667),
(22, 'Stokes, Kirlin and Considine', 'Łęki', '70.60', 106),
(23, 'Gutkowski, Swaniawski and Hackett', 'Jankowice', '393.28', 516),
(24, 'Muller-Hane', 'Cachoeira', '354.55', 844),
(25, 'Kemmer, Huels and Towne', 'Östhammar', '89.18', 337);

-- --------------------------------------------------------

--
-- Struttura della tabella `supermercato`
--

CREATE TABLE IF NOT EXISTS `supermercato` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `citta` varchar(100) NOT NULL,
  `areaMq` int(11) NOT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `supermercato`
--

INSERT INTO `supermercato` (`idS`, `nome`, `citta`, `areaMq`) VALUES
(1, 'Nienow, Schmeler and Batz', 'Jishan', 1828),
(2, 'Harvey Group', 'Zainsk', 988),
(3, 'Legros, Heaney and O\'Hara', 'Sidomakmur', 973),
(4, 'Thompson-Corwin', 'Březová', 2170),
(5, 'Weissnat, Raynor and Hermiston', 'Gråbo', 597),
(6, 'Gorczany and Sons', 'Bojawa', 2090),
(7, 'Hamill and Sons', 'Santa Lucia', 1986),
(8, 'Feeney-Kulas', 'Nguru', 1846),
(9, 'Orn-Aufderhar', 'Carepa', 1928),
(10, 'Kertzmann and Sons', 'Taramana', 688),
(11, 'O\'Conner-Denesik', 'Hengshui', 2149),
(12, 'Schuster-Adams', 'Banjar Bali', 1732),
(13, 'Lind Inc', 'Vitry-sur-Seine', 1537),
(14, 'Renner LLC', 'Wintzenheim', 1164),
(15, 'Steuber-Osinski', 'Jeminay', 1842),
(16, 'Volkman and Sons', 'Myronivka', 1620),
(17, 'Marvin Group', 'Fengjiang', 2451),
(18, 'Lang-Erdman', 'Aktau', 2412),
(19, 'Ledner-Connelly', 'Corozal', 512),
(20, 'Bradtke Group', 'Hispania', 407),
(21, 'Leannon and Sons', 'Xianzong', 1376),
(22, 'Smitham-Stracke', 'Kanekomachi', 1015),
(23, 'Hamill-Konopelski', 'Ihuari', 704),
(24, 'Baumbach-Okuneva', 'Jinji', 834),
(25, 'MacGyver Inc', 'Bria', 978);

-- --------------------------------------------------------

--
-- Struttura della tabella `vendita`
--

CREATE TABLE IF NOT EXISTS `vendita` (
  `idV` int(11) NOT NULL AUTO_INCREMENT,
  `id_supermercato` int(11) NOT NULL,
  `id_merce` int(11) NOT NULL,
  `data` date NOT NULL,
  `quantitaVenduta` int(11) NOT NULL,
  PRIMARY KEY (`idV`),
  KEY `id_merce` (`id_merce`),
  KEY `id_supermercato` (`id_supermercato`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `vendita`
--

INSERT INTO `vendita` (`idV`, `id_supermercato`, `id_merce`, `data`, `quantitaVenduta`) VALUES
(1, 1, 18, '2018-12-20', 26),
(2, 16, 16, '2020-02-05', 10),
(3, 25, 20, '2017-05-29', 46),
(4, 12, 19, '2019-01-03', 32),
(5, 19, 23, '2021-06-14', 15),
(6, 24, 10, '2017-02-01', 34),
(7, 24, 4, '2019-08-02', 58),
(8, 11, 23, '2019-07-05', 78),
(9, 2, 13, '2021-02-10', 27),
(10, 1, 9, '2016-08-29', 10),
(11, 15, 18, '2020-10-02', 13),
(12, 21, 1, '2021-02-08', 66),
(13, 14, 7, '2021-12-09', 38),
(14, 5, 1, '2017-05-02', 53),
(15, 3, 9, '2017-08-15', 21),
(16, 12, 20, '2016-10-17', 51),
(17, 4, 17, '2020-06-05', 80),
(18, 25, 24, '2019-08-21', 63),
(19, 16, 23, '2021-09-30', 56),
(20, 5, 13, '2015-06-21', 62),
(21, 14, 4, '2017-06-12', 82),
(22, 7, 21, '2017-05-19', 11),
(23, 9, 19, '2017-10-14', 25),
(24, 2, 3, '2021-05-27', 40),
(25, 16, 16, '2017-11-12', 13),
(26, 8, 8, '2018-01-08', 59),
(27, 8, 17, '2021-04-15', 68),
(28, 18, 25, '2016-11-23', 86),
(29, 13, 24, '2018-04-23', 88),
(30, 22, 5, '2021-09-17', 10),
(31, 10, 6, '2021-11-12', 82),
(32, 8, 12, '2017-05-13', 18),
(33, 14, 6, '2019-09-17', 13),
(34, 12, 16, '2016-08-03', 78),
(35, 11, 10, '2019-11-17', 40),
(36, 24, 24, '2017-04-09', 29),
(37, 8, 3, '2019-12-31', 54),
(38, 17, 10, '2019-01-12', 92),
(39, 25, 18, '2021-02-16', 84),
(40, 19, 23, '2015-04-21', 58),
(41, 23, 19, '2018-12-12', 37),
(42, 16, 20, '2015-10-06', 51),
(43, 19, 22, '2016-05-30', 43),
(44, 8, 20, '2020-02-16', 26),
(45, 14, 4, '2019-07-19', 61),
(46, 7, 18, '2018-08-25', 22),
(47, 10, 20, '2020-01-09', 50),
(48, 3, 8, '2021-12-29', 92),
(49, 23, 7, '2017-11-04', 99),
(50, 12, 12, '2021-11-18', 52);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `vendita`
--
ALTER TABLE `vendita`
  ADD CONSTRAINT `vendita_ibfk_1` FOREIGN KEY (`id_merce`) REFERENCES `merce` (`idM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendita_ibfk_2` FOREIGN KEY (`id_supermercato`) REFERENCES `supermercato` (`IdS`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
