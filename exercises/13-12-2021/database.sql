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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_biblioteca.autori: ~0 rows (circa)
/*!40000 ALTER TABLE `autori` DISABLE KEYS */;
INSERT INTO `autori` (`id`, `nome`, `cognome`, `dataNascita`) VALUES
	(1, 'Jackson', 'Schwant', '1964-12-02'),
	(2, 'Masha', 'Levis', '1985-06-20'),
	(3, 'Armando', 'Fonso', '1966-09-16'),
	(4, 'Opalina', 'Baughn', '1987-08-04'),
	(5, 'Corrie', 'Wainman', '1955-02-01'),
	(6, 'Vladamir', 'Wilfling', '1982-04-02'),
	(7, 'Sonia', 'Yeell', '1975-09-22'),
	(8, 'Velvet', 'Angelini', '1985-10-24'),
	(9, 'Roanna', 'De La Coste', '1957-06-18'),
	(10, 'Bride', 'Challener', '1953-12-12'),
	(11, 'Jefferey', 'Attewill', '1968-08-14'),
	(12, 'Tina', 'Mableson', '1973-09-20'),
	(13, 'Angela', 'Takis', '1978-05-27'),
	(14, 'Rudie', 'Phillipp', '1985-12-20'),
	(15, 'Joachim', 'Brambell', '1951-07-10'),
	(16, 'Amby', 'Spary', '1976-07-31'),
	(17, 'Grover', 'Springer', '1963-08-05'),
	(18, 'Traci', 'Antonopoulos', '1954-06-05'),
	(19, 'Mendie', 'Nesterov', '1965-04-05'),
	(20, 'Layton', 'Moncreiffe', '1990-10-11'),
	(21, 'Lesya', 'Pinch', '1989-03-16'),
	(22, 'Luci', 'Echalier', '1985-03-05'),
	(23, 'Jarvis', 'Anetts', '1977-03-08'),
	(24, 'Alfonse', 'Filippov', '1979-09-17'),
	(25, 'Scarlett', 'Bourthouloume', '1975-06-08'),
	(26, 'Joey', 'Balloch', '1988-10-10'),
	(27, 'Vere', 'Mowbury', '1951-01-11'),
	(28, 'Constanta', 'Valadez', '1985-11-17'),
	(29, 'Merilee', 'Chue', '1963-08-13'),
	(30, 'Dorthy', 'Lahy', '1989-05-29'),
	(31, 'Marge', 'South', '1982-05-26'),
	(32, 'Davita', 'Stops', '1987-09-27'),
	(33, 'Morgan', 'Kristoffersen', '1989-04-18'),
	(34, 'Rodd', 'Mansour', '1953-06-05'),
	(35, 'Dalis', 'Koeppe', '1983-12-06'),
	(36, 'Lillian', 'Kyberd', '1951-01-30'),
	(37, 'Martha', 'Inworth', '1966-10-19'),
	(38, 'Joeann', 'Swate', '1963-08-09'),
	(39, 'Robbin', 'Mangin', '1966-03-31'),
	(40, 'Pat', 'Boynton', '1982-06-11'),
	(41, 'Pietra', 'Carvill', '1953-07-19'),
	(42, 'Marshal', 'Steels', '1989-02-18'),
	(43, 'Trumann', 'Glidder', '1951-05-01'),
	(44, 'Milli', 'Layfield', '1961-11-30'),
	(45, 'Timothea', 'Fellman', '1967-09-11'),
	(46, 'Tam', 'Bach', '1968-09-28'),
	(47, 'Hubie', 'Powter', '1985-05-09'),
	(48, 'Poppy', 'Cannicott', '1974-08-11'),
	(49, 'Astra', 'Cummine', '1975-01-19'),
	(50, 'Sinclair', 'Aleswell', '1951-04-28'),
	(51, 'Starlin', 'Cockshut', '1957-06-29'),
	(52, 'Thedric', 'Spenton', '1970-02-18'),
	(53, 'Alejandro', 'Brookwell', '1960-01-05'),
	(54, 'Farley', 'Endicott', '1978-05-13'),
	(55, 'Somerset', 'Matschoss', '1989-02-09'),
	(56, 'Aline', 'Danbrook', '1976-02-03'),
	(57, 'Xavier', 'Degli Antoni', '1961-09-12'),
	(58, 'Kare', 'Falkus', '1987-09-30'),
	(59, 'Shirley', 'Pearcy', '1989-01-21'),
	(60, 'Trefor', 'Everleigh', '1951-05-26'),
	(61, 'Brit', 'Archer', '1977-10-30'),
	(62, 'Byrann', 'Stace', '1963-07-02'),
	(63, 'Nani', 'Simonsson', '1986-06-17'),
	(64, 'Iver', 'Stert', '1990-04-01'),
	(65, 'Rosemaria', 'Laflin', '1965-09-20'),
	(66, 'Adrien', 'MacDermid', '1982-08-28'),
	(67, 'Andra', 'Kryzhov', '1985-04-16'),
	(68, 'Marybelle', 'Muckersie', '1967-10-14'),
	(69, 'Tersina', 'De Castri', '1965-12-10'),
	(70, 'Feodor', 'Eilert', '1961-03-23'),
	(71, 'Coleman', 'McKeaveney', '1987-10-26'),
	(72, 'Jacynth', 'Towey', '1956-12-02'),
	(73, 'Berke', 'Stemp', '1957-09-12'),
	(74, 'Prue', 'Renault', '1964-08-13'),
	(75, 'Keene', 'Batisse', '1981-03-07'),
	(76, 'Otho', 'Wass', '1970-03-05'),
	(77, 'Hadley', 'Abethell', '1967-12-11'),
	(78, 'Bruno', 'Weal', '1976-12-07'),
	(79, 'Fernande', 'McFetrich', '1958-06-10'),
	(80, 'Petr', 'Willmetts', '1980-09-27'),
	(81, 'Irene', 'Marchetti', '1956-07-14'),
	(82, 'Saxon', 'Sarfat', '1959-05-16'),
	(83, 'Amalea', 'Markham', '1984-02-17'),
	(84, 'Junie', 'Cogger', '1980-04-20'),
	(85, 'Johnna', 'Mayho', '1981-09-08'),
	(86, 'Philbert', 'Hurry', '1972-05-07'),
	(87, 'Marianna', 'MacTeague', '1984-04-11'),
	(88, 'Giana', 'Higgen', '1956-06-08'),
	(89, 'Hugues', 'Blandford', '1976-01-16'),
	(90, 'Debora', 'Cousans', '1974-01-25'),
	(91, 'Marleen', 'Causby', '1966-02-27'),
	(92, 'Hewet', 'Girth', '1971-04-19'),
	(93, 'Janela', 'Malpas', '1975-12-12'),
	(94, 'Carlos', 'Degoy', '1957-09-01'),
	(95, 'Norry', 'Readett', '1963-10-16'),
	(96, 'Nickey', 'Lettuce', '1983-04-25'),
	(97, 'Ernestus', 'Jacombs', '1987-09-09'),
	(98, 'Colene', 'Ramsay', '1981-12-21'),
	(99, 'Addy', 'Sulley', '1977-11-09'),
	(100, 'Jerrine', 'Masey', '1957-12-30');
/*!40000 ALTER TABLE `autori` ENABLE KEYS */;

-- Dump della struttura di tabella my_biblioteca.generi
CREATE TABLE IF NOT EXISTS `generi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '0',
  `descrizione` varchar(200) COLLATE armscii8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dump dei dati della tabella my_biblioteca.generi: ~0 rows (circa)
/*!40000 ALTER TABLE `generi` DISABLE KEYS */;
INSERT INTO `generi` (`id`, `nome`, `descrizione`) VALUES
	(1, 'libero', 'lobortis ligula sit amet eleifend pede libero quis orci nullam'),
	(2, 'suspendisse', 'cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin'),
	(3, 'non', 'adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu'),
	(4, 'ornare', 'quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla'),
	(5, 'felis', 'erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae'),
	(6, 'consequat', 'augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus'),
	(7, 'ligula', 'sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus'),
	(8, 'nec', 'lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis'),
	(9, 'est', 'eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci'),
	(10, 'nisl', 'primis in faucibus orci luctus et ultrices posuere cubilia curae duis'),
	(11, 'et', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere'),
	(12, 'nisi', 'sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id'),
	(13, 'odio', 'mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu'),
	(14, 'justo', 'in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis'),
	(15, 'at', 'volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in'),
	(16, 'ut', 'ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum'),
	(17, 'proin', 'eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh'),
	(18, 'lectus', 'fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam'),
	(19, 'urna', 'lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea'),
	(20, 'magna', 'porta volutpat erat quisque erat eros viverra eget congue eget'),
	(21, 'habitasse', 'ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non'),
	(22, 'ultrices', 'lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla'),
	(23, 'nisl', 'at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue'),
	(24, 'ultrices', 'quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis'),
	(25, 'posuere', 'mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel'),
	(26, 'lectus', 'tempus semper est quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante'),
	(27, 'non', 'etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa'),
	(28, 'convallis', 'at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor'),
	(29, 'quis', 'pretium quis lectus suspendisse potenti in eleifend quam a odio'),
	(30, 'penatibus', 'morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam'),
	(31, 'turpis', 'morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet'),
	(32, 'id', 'iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus'),
	(33, 'tincidunt', 'id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris'),
	(34, 'lacus', 'vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit'),
	(35, 'augue', 'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi'),
	(36, 'duis', 'sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing'),
	(37, 'facilisi', 'id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet'),
	(38, 'volutpat', 'platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at'),
	(39, 'suscipit', 'integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis'),
	(40, 'odio', 'eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed'),
	(41, 'convallis', 'amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante'),
	(42, 'placerat', 'rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi'),
	(43, 'potenti', 'velit donec diam neque vestibulum eget vulputate ut ultrices vel augue'),
	(44, 'eu', 'elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget'),
	(45, 'donec', 'odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim'),
	(46, 'sociis', 'sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem'),
	(47, 'sem', 'porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi'),
	(48, 'ipsum', 'suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut'),
	(49, 'mattis', 'pede malesuada in imperdiet et commodo vulputate justo in blandit'),
	(50, 'in', 'fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus'),
	(51, 'in', 'nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat'),
	(52, 'ac', 'phasellus sit amet erat nulla tempus vivamus in felis eu sapien'),
	(53, 'consequat', 'eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in est'),
	(54, 'at', 'volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus'),
	(55, 'purus', 'eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu'),
	(56, 'vestibulum', 'pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper'),
	(57, 'lacus', 'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada'),
	(58, 'sapien', 'ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis'),
	(59, 'dictumst', 'dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum'),
	(60, 'nec', 'orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui'),
	(61, 'non', 'magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque'),
	(62, 'semper', 'turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor'),
	(63, 'platea', 'fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat'),
	(64, 'leo', 'integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in'),
	(65, 'nulla', 'ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris'),
	(66, 'sit', 'orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum'),
	(67, 'non', 'vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac'),
	(68, 'congue', 'eu massa donec dapibus duis at velit eu est congue'),
	(69, 'molestie', 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent'),
	(70, 'consectetuer', 'interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique'),
	(71, 'sapien', 'varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non'),
	(72, 'morbi', 'leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis'),
	(73, 'nulla', 'nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque'),
	(74, 'consectetuer', 'lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus'),
	(75, 'cubilia', 'nulla ut erat id mauris vulputate elementum nullam varius nulla'),
	(76, 'lacus', 'sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend pede'),
	(77, 'felis', 'varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper'),
	(78, 'vestibulum', 'pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit'),
	(79, 'sapien', 'congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam'),
	(80, 'sollicitudin', 'felis fusce posuere felis sed lacus morbi sem mauris laoreet'),
	(81, 'ante', 'interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis'),
	(82, 'a', 'diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante'),
	(83, 'non', 'montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus'),
	(84, 'nibh', 'ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut'),
	(85, 'ultrices', 'sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum'),
	(86, 'ligula', 'ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non'),
	(87, 'convallis', 'amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in'),
	(88, 'dui', 'mauris vulputate elementum nullam varius nulla facilisi cras non velit nec nisi'),
	(89, 'condimentum', 'amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum'),
	(90, 'molestie', 'lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl'),
	(91, 'fermentum', 'potenti nullam porttitor lacus at turpis donec posuere metus vitae'),
	(92, 'elit', 'donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi'),
	(93, 'pretium', 'rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis'),
	(94, 'amet', 'amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien'),
	(95, 'sapien', 'enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in'),
	(96, 'luctus', 'gravida sem praesent id massa id nisl venenatis lacinia aenean'),
	(97, 'semper', 'consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc'),
	(98, 'nunc', 'nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo'),
	(99, 'sapien', 'amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere'),
	(100, 'curae', 'eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut');
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
