-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2021 at 06:19 PM
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
-- Database: `my_basket`
--
CREATE DATABASE IF NOT EXISTS `my_basket` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin;
USE `my_basket`;

-- --------------------------------------------------------

--
-- Table structure for table `campionato`
--

CREATE TABLE `campionato` (
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `anno` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `campionato`
--

INSERT INTO `campionato` (`nome`, `anno`) VALUES
('Fivechat', 2009),
('Jaxworks', 2019),
('Linkbridge', 2015),
('Quire', 2006),
('Realmix', 2005),
('Rooxo', 2000),
('Tagpad', 2022),
('Topdrive', 2001),
('Topicshots', 2014),
('Wikizz', 2004);

-- --------------------------------------------------------

--
-- Table structure for table `giocato`
--

CREATE TABLE `giocato` (
  `id_giocatore` int(11) NOT NULL,
  `nome_squadra` varchar(50) COLLATE armscii8_bin NOT NULL,
  `nome_campionato` varchar(50) COLLATE armscii8_bin NOT NULL,
  `anno_campionato` year(4) NOT NULL,
  `canestri` int(11) DEFAULT NULL,
  `presenze` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `giocato`
--

INSERT INTO `giocato` (`id_giocatore`, `nome_squadra`, `nome_campionato`, `anno_campionato`, `canestri`, `presenze`, `numero`) VALUES
(1, 'Twitterworks', 'Linkbridge', 2015, 4, 79, 2),
(2, 'Eimbee', 'Realmix', 2005, 18, 36, 31),
(3, 'Skipfire', 'Topicshots', 2014, 20, 71, 90),
(4, 'Devify', 'Topicshots', 2014, 1, 93, 99),
(5, 'Mycat', 'Tagpad', 2022, 46, 4, 18),
(6, 'Wordtune', 'Rooxo', 2000, 2, 76, 16),
(7, 'Zoozzy', 'Quire', 2006, 24, 1, 43),
(8, 'Wordtune', 'Linkbridge', 2015, 15, 14, 92),
(9, 'Yodel', 'Realmix', 2005, 13, 41, 51),
(10, 'Skipfire', 'Jaxworks', 2019, 29, 49, 34),
(11, 'Realfire', 'Linkbridge', 2015, 5, 46, 5),
(12, 'Skiptube', 'Rooxo', 2000, 16, 73, 17),
(13, 'Bluezoom', 'Jaxworks', 2019, 19, 1, 58),
(14, 'Wordtune', 'Jaxworks', 2019, 40, 89, 47),
(15, 'Devify', 'Tagpad', 2022, 44, 58, 37),
(16, 'Wordtune', 'Quire', 2006, 9, 28, 25),
(17, 'Wordtune', 'Realmix', 2005, 49, 30, 38),
(18, 'Skipfire', 'Tagpad', 2022, 13, 66, 99),
(19, 'Skipfire', 'Topicshots', 2014, 41, 11, 64),
(20, 'Bubblemix', 'Wikizz', 2004, 21, 15, 58),
(21, 'Yakijo', 'Realmix', 2005, 19, 5, 93),
(22, 'Wordtune', 'Topdrive', 2001, 1, 60, 93),
(23, 'Mycat', 'Quire', 2006, 1, 34, 85),
(24, 'Zoombeat', 'Quire', 2006, 12, 84, 50),
(25, 'Fivechat', 'Fivechat', 2009, 32, 60, 82),
(26, 'Bluezoom', 'Linkbridge', 2015, 34, 88, 56),
(27, 'Yakijo', 'Wikizz', 2004, 35, 35, 7),
(28, 'Bluezoom', 'Fivechat', 2009, 20, 51, 2),
(29, 'Fivechat', 'Realmix', 2005, 4, 19, 7),
(30, 'Bluezoom', 'Tagpad', 2022, 42, 90, 87),
(31, 'Wordtune', 'Wikizz', 2004, 45, 32, 8),
(32, 'Zoombeat', 'Quire', 2006, 37, 77, 88),
(33, 'Zoombeat', 'Realmix', 2005, 26, 30, 36),
(34, 'Twitterworks', 'Fivechat', 2009, 5, 13, 5),
(35, 'Twitterworks', 'Fivechat', 2009, 36, 10, 42),
(36, 'Bluezoom', 'Realmix', 2005, 39, 64, 98),
(37, 'Eimbee', 'Quire', 2006, 48, 73, 42),
(38, 'Skipfire', 'Wikizz', 2004, 31, 91, 22),
(39, 'Voolia', 'Rooxo', 2000, 42, 54, 44),
(40, 'Devify', 'Topicshots', 2014, 27, 59, 93),
(41, 'Eimbee', 'Rooxo', 2000, 19, 78, 78),
(42, 'Yakijo', 'Realmix', 2005, 43, 42, 64),
(43, 'Latz', 'Topdrive', 2001, 39, 79, 55),
(44, 'Bubblemix', 'Linkbridge', 2015, 29, 33, 30),
(45, 'Voolia', 'Quire', 2006, 24, 89, 46),
(46, 'Wordtune', 'Rooxo', 2000, 21, 31, 63),
(47, 'Yakijo', 'Jaxworks', 2019, 12, 64, 1),
(48, 'Skiptube', 'Tagpad', 2022, 48, 36, 97),
(49, 'Devify', 'Fivechat', 2009, 16, 38, 70),
(50, 'Zoombeat', 'Rooxo', 2000, 43, 17, 12),
(51, 'Zoombeat', 'Quire', 2006, 32, 19, 88),
(52, 'Yakijo', 'Rooxo', 2000, 48, 46, 78),
(53, 'Devify', 'Quire', 2006, 1, 84, 13),
(54, 'Devify', 'Quire', 2006, 16, 59, 60),
(55, 'Rhycero', 'Tagpad', 2022, 44, 71, 47),
(56, 'Rhycero', 'Topdrive', 2001, 39, 24, 30),
(57, 'Realfire', 'Jaxworks', 2019, 48, 2, 19),
(58, 'Devify', 'Jaxworks', 2019, 45, 6, 62),
(59, 'Wordtune', 'Quire', 2006, 24, 6, 68),
(60, 'Bubblemix', 'Wikizz', 2004, 35, 32, 19),
(61, 'Twitterworks', 'Tagpad', 2022, 7, 19, 17),
(62, 'Yodel', 'Topdrive', 2001, 32, 4, 45),
(63, 'Skipfire', 'Quire', 2006, 45, 4, 51),
(64, 'Yakijo', 'Wikizz', 2004, 16, 9, 15),
(65, 'Devify', 'Linkbridge', 2015, 17, 11, 72),
(66, 'Bluezoom', 'Rooxo', 2000, 33, 22, 97),
(67, 'Zoozzy', 'Fivechat', 2009, 16, 78, 8),
(68, 'Realfire', 'Topicshots', 2014, 14, 92, 95),
(69, 'Rhycero', 'Topicshots', 2014, 47, 14, 5),
(70, 'Latz', 'Topicshots', 2014, 4, 45, 80),
(71, 'Skiptube', 'Topicshots', 2014, 25, 5, 37),
(72, 'Bluezoom', 'Tagpad', 2022, 32, 66, 60),
(73, 'Realfire', 'Wikizz', 2004, 4, 64, 58),
(74, 'Skipfire', 'Realmix', 2005, 14, 4, 56),
(75, 'Wordtune', 'Topdrive', 2001, 45, 65, 41),
(76, 'Realfire', 'Jaxworks', 2019, 34, 50, 74),
(77, 'Wordtune', 'Topdrive', 2001, 29, 63, 30),
(78, 'Latz', 'Jaxworks', 2019, 40, 47, 26),
(79, 'Yodel', 'Fivechat', 2009, 18, 65, 32),
(80, 'Bubblemix', 'Rooxo', 2000, 41, 92, 36),
(81, 'Rhycero', 'Tagpad', 2022, 19, 71, 41),
(82, 'Skipfire', 'Quire', 2006, 30, 63, 72),
(83, 'Realfire', 'Topdrive', 2001, 45, 65, 70),
(84, 'Wordtune', 'Realmix', 2005, 17, 1, 56),
(85, 'Devify', 'Realmix', 2005, 38, 100, 3),
(86, 'Devify', 'Linkbridge', 2015, 9, 15, 3),
(87, 'Yodel', 'Realmix', 2005, 16, 78, 63),
(88, 'Rhycero', 'Topicshots', 2014, 23, 78, 61),
(89, 'Bubblemix', 'Quire', 2006, 18, 2, 4),
(90, 'Latz', 'Topicshots', 2014, 41, 14, 6),
(91, 'Latz', 'Realmix', 2005, 7, 66, 12),
(92, 'Mycat', 'Jaxworks', 2019, 21, 9, 93),
(93, 'Rhycero', 'Topdrive', 2001, 19, 56, 27),
(94, 'Eimbee', 'Jaxworks', 2019, 22, 57, 38),
(95, 'Devify', 'Topdrive', 2001, 29, 23, 97),
(96, 'Yakijo', 'Quire', 2006, 47, 72, 99),
(97, 'Eimbee', 'Topicshots', 2014, 37, 81, 21),
(98, 'Fivechat', 'Realmix', 2005, 43, 31, 87),
(99, 'Eimbee', 'Linkbridge', 2015, 21, 97, 64),
(100, 'Skipfire', 'Fivechat', 2009, 39, 7, 90);

-- --------------------------------------------------------

--
-- Table structure for table `giocatore`
--

CREATE TABLE `giocatore` (
  `id` int(11) NOT NULL,
  `cognome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '0',
  `data_nascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `giocatore`
--

INSERT INTO `giocatore` (`id`, `cognome`, `data_nascita`) VALUES
(1, 'Mahedy', '1992-07-23'),
(2, 'Spellward', '1991-11-16'),
(3, 'Sprowson', '1983-11-13'),
(4, 'Cullip', '1997-12-20'),
(5, 'Zanetto', '1985-11-08'),
(6, 'Dallewater', '1989-07-21'),
(7, 'Pigeram', '1993-10-19'),
(8, 'Gorner', '1987-08-26'),
(9, 'Feehely', '1980-07-08'),
(10, 'Childes', '1982-06-17'),
(11, 'Peabody', '1984-08-07'),
(12, 'Robun', '1997-08-25'),
(13, 'Sexstone', '1998-04-17'),
(14, 'Kase', '1999-07-30'),
(15, 'Bysaker', '1996-03-21'),
(16, 'Aykroyd', '1988-06-06'),
(17, 'Whimp', '1985-06-12'),
(18, 'Storah', '1980-08-10'),
(19, 'Samwell', '1993-03-16'),
(20, 'Doerffer', '1981-09-23'),
(21, 'Gawkes', '1983-03-06'),
(22, 'Klimschak', '1988-02-16'),
(23, 'Holburn', '1994-09-22'),
(24, 'Findley', '1998-04-07'),
(25, 'Biscomb', '1999-07-06'),
(26, 'Eller', '1996-02-19'),
(27, 'Pardue', '1986-11-16'),
(28, 'Waterstone', '1996-09-30'),
(29, 'Burd', '1997-09-27'),
(30, 'Schaumann', '1992-05-03'),
(31, 'Tandy', '1999-01-04'),
(32, 'Dulen', '1995-12-26'),
(33, 'Askie', '1994-05-15'),
(34, 'Beavan', '1992-12-09'),
(35, 'Diplock', '1982-10-25'),
(36, 'Boyson', '1985-11-27'),
(37, 'Colomb', '1987-11-25'),
(38, 'Chinge', '1980-03-21'),
(39, 'Raoult', '1980-03-13'),
(40, 'Culverhouse', '1989-10-17'),
(41, 'Lambertazzi', '1998-01-31'),
(42, 'Writtle', '1985-04-02'),
(43, 'Roback', '1994-06-21'),
(44, 'Berre', '1989-03-15'),
(45, 'McRavey', '1998-04-02'),
(46, 'Binney', '1987-05-27'),
(47, 'Cassimer', '1999-10-18'),
(48, 'Lorinez', '1989-01-14'),
(49, 'Gerretsen', '1981-02-08'),
(50, 'Bus', '1980-06-29'),
(51, 'Jeffryes', '1991-03-24'),
(52, 'Karoly', '1997-05-25'),
(53, 'Rowler', '1994-09-27'),
(54, 'Sliman', '1995-08-21'),
(55, 'Jaray', '1993-05-03'),
(56, 'Milton', '1986-07-05'),
(57, 'Stoeck', '1986-10-08'),
(58, 'Trower', '1999-06-14'),
(59, 'Trass', '1980-01-12'),
(60, 'Massot', '1984-11-25'),
(61, 'Auchterlony', '1995-12-24'),
(62, 'Causon', '1990-08-07'),
(63, 'Shrubshall', '1995-10-16'),
(64, 'Wernham', '1984-05-11'),
(65, 'Birwhistle', '1989-03-12'),
(66, 'Sedman', '1991-11-10'),
(67, 'Firpi', '1984-02-20'),
(68, 'Geraud', '1986-08-24'),
(69, 'McKeag', '1984-10-09'),
(70, 'Armes', '1995-08-31'),
(71, 'Meyer', '1992-11-05'),
(72, 'Bertomier', '1989-02-25'),
(73, 'Middlehurst', '1980-11-27'),
(74, 'Strood', '1997-08-02'),
(75, 'Nesby', '1989-06-22'),
(76, 'Preble', '1994-01-06'),
(77, 'Colls', '1997-07-23'),
(78, 'Lippitt', '1998-12-16'),
(79, 'Gentreau', '1982-12-30'),
(80, 'MacMaykin', '1995-06-02'),
(81, 'Altofts', '1990-04-29'),
(82, 'Sherewood', '1991-10-16'),
(83, 'Dummett', '1980-01-29'),
(84, 'Crowch', '1991-09-28'),
(85, 'Baythrop', '1993-05-07'),
(86, 'Syrie', '1995-02-25'),
(87, 'Briant', '1989-12-09'),
(88, 'Faulkes', '1992-03-18'),
(89, 'Bullan', '1987-06-12'),
(90, 'Alten', '1988-12-07'),
(91, 'Iredale', '1990-05-19'),
(92, 'Lipyeat', '1994-05-03'),
(93, 'Guilder', '1983-10-28'),
(94, 'Sifflett', '1984-02-03'),
(95, 'Yitzhak', '1985-07-23'),
(96, 'Dearth', '1995-11-26'),
(97, 'Antonsen', '1992-12-02'),
(98, 'Fowlds', '1992-11-27'),
(99, 'Bice', '1990-09-04'),
(100, 'Goldsbury', '1980-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `ricopre`
--

CREATE TABLE `ricopre` (
  `id_giocatore` int(11) NOT NULL,
  `ruolo` varchar(50) COLLATE armscii8_bin NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `ricopre`
--

INSERT INTO `ricopre` (`id_giocatore`, `ruolo`, `data_inizio`, `data_fine`) VALUES
(1, 'Power Forward', '2019-09-21', '2021-10-01'),
(2, 'Small Forward', '2016-04-09', '2021-03-16'),
(3, 'Point Guard', '2020-07-31', '2021-12-01'),
(4, 'Centre', '2016-04-27', '2021-11-15'),
(5, 'Centre', '2016-03-24', '2021-09-27'),
(6, 'Small Forward', '2018-11-14', '2021-07-26'),
(7, 'Centre', '2020-12-08', '2021-08-20'),
(8, 'Small Forward', '2021-08-14', '2021-12-04'),
(9, 'Shooting Guard', '2021-06-02', '2021-10-27'),
(10, 'Power Forward', '2021-12-05', '2021-06-25'),
(11, 'Power Forward', '2019-08-12', '2021-07-16'),
(12, 'Small Forward', '2017-06-01', '2021-05-04'),
(13, 'Point Guard', '2019-11-04', '2021-09-18'),
(14, 'Power Forward', '2020-07-02', '2021-09-25'),
(15, 'Power Forward', '2017-04-18', '2021-03-25'),
(16, 'Point Guard', '2020-05-29', '2021-07-21'),
(17, 'Power Forward', '2017-07-31', '2021-05-09'),
(18, 'Shooting Guard', '2017-03-15', '2021-10-24'),
(19, 'Centre', '2020-09-10', '2021-01-10'),
(20, 'Centre', '2019-01-07', '2021-07-26'),
(21, 'Point Guard', '2018-04-25', '2021-02-12'),
(22, 'Small Forward', '2017-06-23', '2021-05-06'),
(23, 'Point Guard', '2016-11-29', '2021-05-25'),
(24, 'Shooting Guard', '2016-02-13', '2021-04-26'),
(25, 'Power Forward', '2021-05-06', '2021-03-27'),
(26, 'Small Forward', '2021-09-06', '2021-03-04'),
(27, 'Centre', '2020-11-18', '2021-10-06'),
(28, 'Shooting Guard', '2016-04-03', '2021-12-13'),
(29, 'Point Guard', '2016-08-13', '2021-01-19'),
(30, 'Centre', '2020-03-03', '2021-07-23'),
(31, 'Power Forward', '2021-03-19', '2021-10-12'),
(32, 'Power Forward', '2018-08-17', '2021-10-31'),
(33, 'Small Forward', '2019-05-23', '2021-02-25'),
(34, 'Point Guard', '2017-05-30', '2021-08-24'),
(35, 'Centre', '2017-06-10', '2021-05-10'),
(36, 'Power Forward', '2020-07-29', '2021-10-05'),
(37, 'Power Forward', '2019-07-14', '2021-04-07'),
(38, 'Shooting Guard', '2017-06-01', '2021-05-31'),
(39, 'Power Forward', '2020-04-23', '2021-11-08'),
(40, 'Small Forward', '2021-10-30', '2021-10-18'),
(41, 'Power Forward', '2016-04-04', '2021-08-06'),
(42, 'Power Forward', '2019-07-14', '2021-11-24'),
(43, 'Shooting Guard', '2017-05-11', '2021-08-01'),
(44, 'Small Forward', '2019-08-23', '2021-04-20'),
(45, 'Power Forward', '2017-09-30', '2021-07-06'),
(46, 'Small Forward', '2020-10-03', '2021-12-11'),
(47, 'Point Guard', '2020-09-27', '2021-02-05'),
(48, 'Power Forward', '2019-08-23', '2021-07-28'),
(49, 'Centre', '2017-07-19', '2021-01-24'),
(50, 'Centre', '2020-08-20', '2021-12-06'),
(51, 'Small Forward', '2016-03-15', '2021-07-27'),
(52, 'Centre', '2017-05-17', '2021-06-28'),
(53, 'Point Guard', '2021-08-30', '2021-01-18'),
(54, 'Point Guard', '2016-03-14', '2021-01-16'),
(55, 'Shooting Guard', '2017-10-29', '2021-10-30'),
(56, 'Point Guard', '2020-07-10', '2021-01-30'),
(57, 'Power Forward', '2016-02-23', '2021-03-21'),
(58, 'Power Forward', '2017-01-17', '2021-03-16'),
(59, 'Power Forward', '2019-01-24', '2021-03-06'),
(60, 'Point Guard', '2019-10-01', '2021-09-25'),
(61, 'Power Forward', '2015-12-30', '2021-02-05'),
(62, 'Point Guard', '2017-03-15', '2021-08-09'),
(63, 'Centre', '2017-08-20', '2021-04-02'),
(64, 'Small Forward', '2019-05-23', '2021-05-16'),
(65, 'Small Forward', '2019-02-16', '2021-04-13'),
(66, 'Power Forward', '2016-06-25', '2021-08-14'),
(67, 'Power Forward', '2021-08-25', '2021-09-08'),
(68, 'Shooting Guard', '2020-06-07', '2021-03-19'),
(69, 'Small Forward', '2018-09-29', '2021-11-04'),
(70, 'Shooting Guard', '2018-06-03', '2021-11-22'),
(71, 'Small Forward', '2016-03-15', '2021-02-26'),
(72, 'Power Forward', '2019-08-26', '2021-03-06'),
(73, 'Point Guard', '2017-04-28', '2021-05-18'),
(74, 'Power Forward', '2021-05-05', '2021-07-03'),
(75, 'Small Forward', '2016-03-23', '2021-01-22'),
(76, 'Centre', '2020-11-22', '2021-12-17'),
(77, 'Small Forward', '2017-06-09', '2021-05-16'),
(78, 'Small Forward', '2020-11-24', '2021-08-21'),
(79, 'Shooting Guard', '2019-08-07', '2021-08-27'),
(80, 'Power Forward', '2021-09-12', '2021-09-12'),
(81, 'Power Forward', '2016-12-14', '2021-12-02'),
(82, 'Centre', '2017-04-19', '2021-08-26'),
(83, 'Point Guard', '2020-04-04', '2021-06-18'),
(84, 'Power Forward', '2018-05-26', '2021-10-09'),
(85, 'Point Guard', '2019-10-05', '2021-08-10'),
(86, 'Small Forward', '2018-11-25', '2021-05-18'),
(87, 'Power Forward', '2021-09-20', '2021-05-07'),
(88, 'Centre', '2016-08-03', '2021-03-31'),
(89, 'Point Guard', '2018-05-19', '2021-10-13'),
(90, 'Power Forward', '2016-08-08', '2021-04-25'),
(91, 'Power Forward', '2019-01-26', '2021-05-24'),
(92, 'Small Forward', '2018-02-05', '2021-12-17'),
(93, 'Point Guard', '2018-01-08', '2021-10-02'),
(94, 'Point Guard', '2019-03-05', '2021-03-23'),
(95, 'Point Guard', '2019-03-04', '2021-01-23'),
(96, 'Shooting Guard', '2017-07-14', '2021-07-21'),
(97, 'Small Forward', '2021-05-12', '2021-03-02'),
(98, 'Point Guard', '2019-04-19', '2021-05-31'),
(99, 'Point Guard', '2020-11-14', '2021-11-21'),
(100, 'Power Forward', '2020-09-22', '2021-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `ruolo`
--

CREATE TABLE `ruolo` (
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `altro` varchar(200) COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `ruolo`
--

INSERT INTO `ruolo` (`nome`, `altro`) VALUES
('Centre', 'accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio'),
('Point Guard', 'pellentesque eget nunc donec quis orci eget orci vehicula condimentum'),
('Power Forward', 'nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet'),
('Shooting Guard', 'donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio'),
('Small Forward', 'montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida');

-- --------------------------------------------------------

--
-- Table structure for table `squadra`
--

CREATE TABLE `squadra` (
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `nome_campionato` varchar(50) COLLATE armscii8_bin NOT NULL,
  `anno_campionato` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `squadra`
--

INSERT INTO `squadra` (`nome`, `nome_campionato`, `anno_campionato`) VALUES
('Bluezoom', 'Topicshots', 2014),
('Bubblemix', 'Quire', 2006),
('Devify', 'Fivechat', 2009),
('Devify', 'Rooxo', 2000),
('Eimbee', 'Topicshots', 2014),
('Fivechat', 'Linkbridge', 2015),
('Jazzy', 'Topdrive', 2001),
('Latz', 'Wikizz', 2004),
('Mycat', 'Quire', 2006),
('Realfire', 'Linkbridge', 2015),
('Rhycero', 'Tagpad', 2022),
('Skipfire', 'Tagpad', 2022),
('Skiptube', 'Realmix', 2005),
('Twitterworks', 'Rooxo', 2000),
('Voolia', 'Jaxworks', 2019),
('Wordtune', 'Fivechat', 2009),
('Yakijo', 'Topdrive', 2001),
('Yodel', 'Realmix', 2005),
('Zoombeat', 'Wikizz', 2004),
('Zoozzy', 'Jaxworks', 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campionato`
--
ALTER TABLE `campionato`
  ADD PRIMARY KEY (`nome`,`anno`);

--
-- Indexes for table `giocato`
--
ALTER TABLE `giocato`
  ADD PRIMARY KEY (`id_giocatore`,`nome_squadra`,`nome_campionato`,`anno_campionato`),
  ADD KEY `nome_campionato` (`nome_campionato`) USING BTREE,
  ADD KEY `nome_squadra` (`nome_squadra`),
  ADD KEY `nome_campionato_2` (`nome_campionato`,`anno_campionato`);

--
-- Indexes for table `giocatore`
--
ALTER TABLE `giocatore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ricopre`
--
ALTER TABLE `ricopre`
  ADD PRIMARY KEY (`id_giocatore`,`ruolo`,`data_inizio`),
  ADD KEY `ruolo` (`ruolo`);

--
-- Indexes for table `ruolo`
--
ALTER TABLE `ruolo`
  ADD PRIMARY KEY (`nome`);

--
-- Indexes for table `squadra`
--
ALTER TABLE `squadra`
  ADD PRIMARY KEY (`nome`,`nome_campionato`,`anno_campionato`),
  ADD KEY `nome_campionato` (`nome_campionato`,`anno_campionato`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giocatore`
--
ALTER TABLE `giocatore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giocato`
--
ALTER TABLE `giocato`
  ADD CONSTRAINT `giocato_ibfk_1` FOREIGN KEY (`id_giocatore`) REFERENCES `giocatore` (`id`),
  ADD CONSTRAINT `giocato_ibfk_2` FOREIGN KEY (`nome_squadra`) REFERENCES `squadra` (`nome`),
  ADD CONSTRAINT `giocato_ibfk_3` FOREIGN KEY (`nome_campionato`,`anno_campionato`) REFERENCES `campionato` (`nome`, `anno`);

--
-- Constraints for table `ricopre`
--
ALTER TABLE `ricopre`
  ADD CONSTRAINT `ricopre_ibfk_1` FOREIGN KEY (`id_giocatore`) REFERENCES `giocatore` (`id`),
  ADD CONSTRAINT `ricopre_ibfk_2` FOREIGN KEY (`ruolo`) REFERENCES `ruolo` (`nome`);

--
-- Constraints for table `squadra`
--
ALTER TABLE `squadra`
  ADD CONSTRAINT `squadra_ibfk_1` FOREIGN KEY (`nome_campionato`,`anno_campionato`) REFERENCES `campionato` (`nome`, `anno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;