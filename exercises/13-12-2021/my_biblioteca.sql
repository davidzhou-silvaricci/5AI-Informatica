-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2021 at 05:15 PM
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
-- Database: `my_biblioteca`
--
CREATE DATABASE IF NOT EXISTS `my_biblioteca` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin;
USE `my_biblioteca`;

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `cognome` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `dataNascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `autori`
--

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
(20, 'Layton', 'Moncreiffe', '1990-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `generi`
--

CREATE TABLE `generi` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '0',
  `descrizione` varchar(200) COLLATE armscii8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `generi`
--

INSERT INTO `generi` (`id`, `nome`, `descrizione`) VALUES
(1, 'libero', 'lobortis ligula sit amet eleifend pede libero quis orci nullam'),
(2, 'suspendisse', 'cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin'),
(3, 'non', 'adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu'),
(4, 'ornare', 'quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla'),
(5, 'felis', 'erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae');

-- --------------------------------------------------------

--
-- Table structure for table `libri`
--

CREATE TABLE `libri` (
  `isbn` char(13) COLLATE armscii8_bin NOT NULL,
  `titolo` varchar(100) COLLATE armscii8_bin DEFAULT NULL,
  `descrizione` varchar(300) COLLATE armscii8_bin DEFAULT NULL,
  `pagine` int(11) DEFAULT NULL,
  `costo` decimal(5,2) DEFAULT NULL,
  `dataUscita` date DEFAULT NULL,
  `autore` int(11) DEFAULT NULL,
  `genere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `libri`
--

INSERT INTO `libri` (`isbn`, `titolo`, `descrizione`, `pagine`, `costo`, `dataUscita`, `autore`, `genere`) VALUES
('008019636-5', 'Bandits', 'non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed', 133, '21.20', '2008-01-14', 19, 5),
('016130513-X', 'Lemora: A Child\'s Tale of the Supernatural', 'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et', 197, '33.90', '2016-08-03', 8, 2),
('019994185-8', 'Crush', 'id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus', 135, '28.26', '2016-10-15', 12, 5),
('029875549-1', 'The Secret Country: The First Australians Fight Back', 'erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien', 153, '8.95', '2014-03-21', 11, 1),
('047313813-1', 'Napoleon and Samantha', 'nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis', 117, '11.18', '2014-12-24', 3, 5),
('054686822-3', 'Concursante', 'sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis', 100, '29.13', '2012-08-30', 16, 1),
('055401416-5', 'Good For Nothing', 'curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum', 190, '47.29', '2018-06-27', 3, 1),
('063356768-X', 'His Name Was Jason: 30 Years of Friday the 13th', 'dui vel sem sed sagittis nam congue risus semper porta volutpat quam', 169, '18.28', '2007-04-16', 20, 5),
('067117963-2', 'Dance Me Outside', 'nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in', 139, '31.57', '2018-12-13', 6, 3),
('071514109-0', 'Bird', 'fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales', 197, '10.19', '2006-12-04', 16, 4),
('074045040-9', 'Bandslam', 'imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce', 167, '40.35', '2008-04-01', 20, 3),
('078638550-2', 'Uninvited, The', 'ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus', 142, '29.77', '2017-03-14', 4, 1),
('098621942-8', 'Farewell, My Lovely', 'nibh fusce lacus purus aliquet at feugiat non pretium quis', 186, '42.77', '2014-01-02', 8, 1),
('126353446-5', 'InAPPropriate Comedy', 'dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida', 171, '45.52', '2009-11-11', 9, 5),
('126907607-8', 'When a Stranger Calls', 'et ultrices posuere cubilia curae mauris viverra diam vitae quam', 157, '19.00', '2015-10-16', 14, 1),
('138651521-3', 'Already Dead', 'neque libero convallis eget eleifend luctus ultricies eu nibh quisque id', 126, '42.90', '2002-04-04', 16, 2),
('142542597-6', 'Beautiful Creatures', 'purus sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor eu', 187, '22.26', '2008-02-14', 19, 3),
('143742978-5', 'Mickey\'s Twice Upon a Christmas', 'aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante', 113, '39.35', '2016-11-02', 18, 3),
('172181926-6', 'Gunfighter\'s Moon', 'vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat', 195, '30.94', '2014-09-30', 3, 4),
('175448265-1', 'Last Seven, The', 'lectus suspendisse potenti in eleifend quam a odio in hac habitasse', 146, '14.79', '2013-03-12', 16, 1),
('181963516-3', 'Ides of March, The', 'mattis egestas metus aenean fermentum donec ut mauris eget massa tempor', 132, '24.10', '2020-06-02', 8, 2),
('185540421-4', 'Pumping Iron', 'lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at', 164, '19.23', '2006-09-03', 7, 2),
('191713280-8', 'Resan Till Melonia', 'in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt', 182, '38.15', '2012-12-06', 5, 2),
('229485185-4', 'Black', 'tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac', 123, '41.32', '2008-09-08', 1, 1),
('230398348-7', 'Book of Life, The', 'convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices', 136, '11.95', '2014-12-16', 14, 3),
('259498216-4', 'Target', 'tortor quis turpis sed ante vivamus tortor duis mattis egestas', 186, '48.71', '2012-03-25', 6, 4),
('262170179-5', 'H.H. Holmes: America\'s First Serial Killer', 'eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus', 149, '32.15', '2004-11-12', 7, 5),
('263979811-1', 'Mary', 'semper est quam pharetra magna ac consequat metus sapien ut', 191, '16.09', '2015-07-18', 10, 4),
('297794200-9', 'Spencer\'s Mountain', 'justo sollicitudin ut suscipit a feugiat et eros vestibulum ac', 162, '41.15', '2018-07-18', 13, 4),
('319129204-7', 'Magnificent Obsession', 'sit amet eleifend pede libero quis orci nullam molestie nibh in lectus', 133, '14.39', '2019-08-07', 8, 1),
('322724936-7', 'Heights', 'libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla', 190, '28.41', '2004-02-05', 15, 5),
('330030116-5', 'Assault on a Queen', 'lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in', 182, '20.53', '2021-12-25', 12, 2),
('363006672-0', 'Polytechnique', 'curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar', 193, '23.53', '2009-05-08', 15, 4),
('385712006-1', 'Things Are Tough All Over', 'sed accumsan felis ut at dolor quis odio consequat varius integer ac', 188, '22.22', '2016-07-16', 6, 5),
('389400459-2', 'Look Who\'s Talking', 'iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque', 172, '16.49', '2004-03-20', 16, 4),
('392922680-4', 'Kimjongilia', 'in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa', 101, '42.50', '2014-03-28', 12, 3),
('420222722-0', 'Beyond Borders', 'eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum', 180, '34.19', '2014-11-10', 19, 5),
('425979123-0', 'Noose, The (Petla)', 'leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu', 179, '38.22', '2014-11-14', 6, 3),
('428351667-8', 'Prodigal Son, The (Tuhlaajapoika)', 'integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet', 192, '36.54', '2013-09-01', 15, 4),
('432974442-2', 'Stars Look Down, The', 'orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam', 130, '41.00', '2003-03-01', 19, 5),
('437402676-2', 'Spider Baby or, The Maddest Story Ever Told (Spider Baby)', 'nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet', 115, '31.57', '2007-03-08', 9, 1),
('439237176-X', 'Adventures of Ford Fairlane, The', 'fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque', 137, '33.62', '2004-11-28', 17, 3),
('458840764-3', 'Bad and the Beautiful, The', 'vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec', 160, '34.21', '2020-12-05', 13, 1),
('460535911-7', 'Watermelon Man', 'in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis', 139, '49.56', '2009-10-05', 5, 1),
('472831693-9', 'No Rest for the Brave (Pas de repos pour les braves)', 'pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna', 105, '20.55', '2004-01-20', 3, 2),
('474674895-0', 'Sherlock Holmes: A Game of Shadows', 'duis aliquam convallis nunc proin at turpis a pede posuere', 141, '24.99', '2018-03-29', 19, 1),
('477654363-X', 'Looking for Maria Sanchez', 'praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede', 157, '44.43', '2007-12-01', 16, 4),
('489235377-9', 'Blackfish', 'ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio', 156, '37.22', '2018-07-22', 13, 4),
('502627109-X', 'Seven Girlfriends', 'erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus', 169, '19.05', '2014-01-30', 17, 4),
('507454303-7', 'Last of Robin Hood, The', 'justo in blandit ultrices enim lorem ipsum dolor sit amet', 196, '37.18', '2010-06-25', 6, 5),
('510844290-4', 'Scarlet Pimpernel, The', 'vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula', 183, '47.54', '2016-04-08', 9, 1),
('517544593-6', 'Almost Heroes', 'adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing', 122, '26.24', '2015-02-23', 19, 5),
('518362622-7', 'B. Monkey', 'amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus', 175, '20.49', '2018-09-19', 4, 1),
('526502280-5', 'Welcome to Australia', 'metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus', 187, '49.22', '2004-04-16', 4, 4),
('532932581-1', 'Battlestar Galactica: Blood & Chrome', 'cras in purus eu magna vulputate luctus cum sociis natoque penatibus', 132, '37.08', '2016-06-19', 2, 3),
('537684922-8', 'Bugs Bunny / Road Runner Movie, The (a.k.a. The Great American Chase)', 'vulputate ut ultrices vel augue vestibulum ante ipsum primis in', 198, '45.47', '2017-08-19', 6, 5),
('544089403-9', 'Captain from Castile', 'ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus', 148, '15.54', '2010-07-10', 20, 2),
('580732983-X', 'London', 'libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus', 126, '32.65', '2016-07-27', 10, 2),
('593483825-3', 'Godspeed You! Black Emperor', 'sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in', 119, '40.69', '2012-11-16', 10, 1),
('595544016-X', 'Tin Toy', 'faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio', 125, '43.26', '2006-01-11', 20, 5),
('605554715-5', 'Last Shot, The', 'tortor sollicitudin mi sit amet lobortis sapien sapien non mi', 161, '15.61', '2015-02-01', 11, 2),
('607094240-X', 'Beast Within, The', 'lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum', 132, '27.82', '2003-06-12', 14, 5),
('608582805-5', 'We Live in Public', 'mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas', 144, '24.05', '2002-09-09', 3, 3),
('616154088-6', 'Copying Beethoven', 'posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed', 165, '41.52', '2015-10-10', 18, 5),
('651551412-3', 'Brigham City', 'nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac', 197, '43.38', '2016-05-07', 1, 1),
('652883302-8', 'Shark Attack', 'sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget', 176, '17.27', '2016-05-28', 17, 3),
('658395656-X', 'Today You Die', 'ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum', 181, '6.17', '2014-04-01', 12, 2),
('694861540-6', 'Offence, The', 'massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci', 176, '40.74', '2021-10-07', 20, 5),
('703709147-2', 'Kiss of the Damned', 'turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed', 190, '21.09', '2021-11-05', 7, 2),
('705990356-9', 'No Exit (Huis clos)', 'neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel', 123, '16.84', '2006-08-04', 20, 4),
('718444781-6', 'Children of Paradise (Les enfants du paradis)', 'porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus', 166, '49.95', '2012-12-16', 16, 4),
('724163004-1', 'Encounter in the Third Dimension', 'mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae', 157, '36.11', '2003-01-01', 8, 2),
('738146547-7', 'Bless Me, Ultima', 'platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel', 125, '20.83', '2017-11-05', 7, 1),
('739912969-X', 'Mattei Affair, The (Il caso Mattei)', 'interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan', 186, '6.78', '2011-07-17', 14, 2),
('747161104-9', 'Alive and Ticking (Ein Tick anders)', 'proin leo odio porttitor id consequat in consequat ut nulla', 114, '5.13', '2006-08-12', 12, 2),
('752096016-1', 'Jerry Springer: The Opera', 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit', 163, '10.93', '2020-03-26', 17, 1),
('765840053-X', 'Ruby Sparks', 'luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien', 188, '36.96', '2021-07-30', 5, 1),
('775347045-0', 'Trick or Treat', 'integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede', 142, '36.20', '2014-06-25', 15, 5),
('797274752-0', 'Fallout', 'habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla', 156, '19.30', '2018-12-05', 16, 4),
('799347078-1', 'Loving You', 'viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam', 177, '10.84', '2007-01-05', 12, 4),
('803727944-8', 'Vermont Is For Lovers', 'quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum', 199, '21.79', '2002-02-02', 9, 2),
('819919905-9', 'Mrs. Dalloway', 'purus aliquet at feugiat non pretium quis lectus suspendisse potenti', 140, '17.94', '2014-03-25', 17, 4),
('834182093-5', 'September', 'hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam', 143, '47.27', '2018-01-22', 19, 3),
('836725548-8', 'Puppet Master', 'ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros', 197, '5.86', '2002-02-15', 2, 1),
('847846537-5', 'Linguini Incident, The', 'ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis', 121, '46.41', '2003-11-06', 3, 1),
('851107738-3', 'Murph: The Protector', 'adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur', 126, '47.57', '2020-03-24', 16, 1),
('854991027-9', 'How to Make an American Quilt', 'sit amet eros suspendisse accumsan tortor quis turpis sed ante', 113, '7.65', '2001-08-15', 6, 1),
('855318444-7', 'Two-Lane Blacktop', 'potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et', 159, '47.31', '2020-08-09', 6, 2),
('873548465-9', 'I Dreamed of Africa', 'eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu', 130, '45.57', '2013-02-26', 16, 4),
('883000865-6', 'Sunshine', 'eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi', 130, '7.89', '2001-04-06', 5, 5),
('886453521-7', 'Land Before Time III: The Time of the Great Giving', 'lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl', 187, '18.77', '2002-06-24', 12, 2),
('896817395-8', 'Spend It All', 'elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis', 189, '28.46', '2002-12-20', 10, 1),
('911942716-6', 'Four Brothers', 'pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim', 135, '34.69', '2021-10-20', 2, 5),
('924979848-2', 'Crazed Fruit (Kurutta kajitsu)', 'aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse', 179, '23.87', '2020-04-17', 9, 2),
('933543447-7', 'Westward the Women', 'quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer', 198, '30.53', '2008-11-09', 4, 5),
('950911168-6', 'Sexual Life', 'nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam', 160, '24.53', '2018-01-07', 10, 4),
('952031290-0', 'Tell-Tale', 'luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus', 137, '9.73', '2019-06-20', 1, 4),
('976307307-3', 'Batman: Gotham Knight', 'quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque', 195, '45.03', '2016-03-16', 11, 5),
('991841646-7', 'Tea with Mussolini', 'potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet', 162, '40.76', '2003-09-13', 12, 5),
('992693187-1', 'That Night in Varennes (Nuit de Varennes, La)', 'in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante', 169, '44.95', '2021-01-18', 16, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generi`
--
ALTER TABLE `generi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `autore` (`autore`),
  ADD KEY `genere` (`genere`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `generi`
--
ALTER TABLE `generi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `libri`
--
ALTER TABLE `libri`
  ADD CONSTRAINT `libri_ibfk_1` FOREIGN KEY (`autore`) REFERENCES `autori` (`id`),
  ADD CONSTRAINT `libri_ibfk_2` FOREIGN KEY (`genere`) REFERENCES `generi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;